<?php
namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Rfc4122\Validator;
use App\Models\RECURITER;
use App\Models\JobSeeker;
use Illuminate\Support\Facades\Hash;
use File;
use Session;



class AuthControllers extends Controller
{
    public function login_user(Request $req)
    {
        $validator = $req->validate([
            'email' => 'required|email:rfc,dns|exists:' . 'jobseeker' ,
            'password' => 'required',
        ]);
        $credentials = $req->only('email','password');
        if(Auth::guard('jobseeker')->attempt($credentials)){
            return redirect()->route('CandidateProfile');
        }else{
            return back()->with('flash-error','Invalid Password')->withInput();
        }
    }
    public function sign_up(Request $req)
    {
        $inputs = $req->all();
        $validator = Validator($inputs,[
            'email' => 'required|email:rfc,dns|unique:' . 'jobseeker' ,
            'password' => 'required|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/', 
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator,'jobseeker')->withInput();
        }
        $data =  new JobSeeker;
        $data->email = $inputs['email'];
        $data->password = Hash::make($inputs['password']);
        session()->put('SignUpUser', 'data new user');
        if($data->save()){
            $credentials = $req->only('email','password');
            if(Auth::guard('jobseeker')->attempt($credentials)){
                return redirect()->route('front.signupUserSave');
        }
    }
}
    public function signup_form_first(Request $req)
    {
        $validator = $req->validate([
            'first_name' => 'required',
            'last_name' => 'required',
        ]);
        $inputs = $req->all();
        $data = $this->current_jobseeker_data();
        if($data){
            $data->first_name = $inputs['first_name'];
            $data->last_name = $inputs['last_name'];
            if($data->save()){
                return redirect()->route('signupUserCv'); 
            }
        }else{
            return back()->with('flash-error','Invalid Password')->withInput();
        }
    }
    public function uploadcv(Request $req)
    {
        $validator = $req->validate([
            'cv' => 'required',
        ]);
        $inputs = $req->all();
        $data = $this->current_jobseeker_data();
        if ($req->hasfile('cv')) {
            $image_name = md5(rand(1000, 10000));
            $file = $req->file('cv');
            $extenstion = $file->getClientOriginalExtension();
            $filename = $image_name . time() . '.' . $extenstion;
            $file->move('public/resume/', $filename);
			$filepath = 'public/resume/'.$data->cv;
            if($data->cv){
			if(File::exists($filepath)){
				unlink($filepath);
			}
        }
            $data->cv = $filename;
        }
        if($data->save()){
            return redirect()->route('CandidateProfile');
        }
    }


    public function front_logout_jobseeker()
    {
        if (Auth::guard('jobseeker')->check()) {
            Auth::guard('jobseeker')->logout();
            session()->forget('SignUpUser');            
            return redirect()->route('home');
        }
    }
    public function front_logout_recuriter()
    {
        if (Auth::guard('employer')->check()) {
            Auth::guard('employer')->logout();
            return redirect()->route('Recuriter.Home');
        }
    }

}
