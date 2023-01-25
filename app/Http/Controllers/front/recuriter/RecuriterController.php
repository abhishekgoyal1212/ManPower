<?php

namespace App\Http\Controllers\front\recuriter;

use App\Models\Recuriter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\JobseekerPassword;


class RecuriterController extends Controller
{
    public function register(Request $req)
    {
		$inputs = $req->all();
		$validator =  Validator($inputs,[
			'email' => 'required|email:rfc,dns|unique:' . 'recruiting',
			'password' => 'required',
		]);
        if($validator->fails()){
			return redirect()->back()->withErrors($validator,'recuriter')->withInput();
        }
		$data = new Recuriter();
		$data->email =  $inputs['email'];
		$data->password =  Hash::make($inputs['password']);
		if ($data->save()) {
			$credentials = $req->only('email','password');
            if(Auth::guard('employer')->attempt($credentials)){
				return view('front/recuriter/BeforeLogin/register');
			}
			}else{
				return redirect()->back();
			}
    }
	public function recuriter_save(Request $req)
	{
		$id = $this->current_recuriter_data();
		$inputs = $req->all();
		$req->validate([
			'first_name' => 'required',
			'last_name' => 'required',
			'contact' => 'required|min:10|max:12|unique:' . 'recruiting',
			'company_name' => 'required',
			'company_type' => 'required',
			'company_size' => 'required',
		]);
		$data = Recuriter::where('id',$id->id)->first();	
		$data->first_name =  $inputs['first_name'];
		$data->last_name =  $inputs['last_name'];
		$data->contact =  $inputs['contact'];
		$data->company_name =  $inputs['company_name'];
		$data->company_type =  $inputs['company_type'];
		$data->company_size =  $inputs['company_size'];
		$data->status =  1;
		if ($data->save()) {
			return redirect()->route('Recuriter.RecruiterPage');
		}else{
        	return redirect()->back();
		}
	}
	public function login_check(Request $req)
	{
		$validator = $req->validate([
            'email' => 'required|email:rfc,dns|exists:' . 'recruiting' ,
            'password' => 'required',
        ]);
        $credentials = $req->only('email','password');
        if(Auth::guard('employer')->attempt($credentials)){
			$data = $this->current_recuriter_data();
			if(empty($data->first_name)){
				return view('front/recuriter/BeforeLogin/register');
			}else{
				return redirect()->route('Recuriter.RecruiterPage');
			}
        }else{
            return back()->with('flash-error','Invalid Password')->withInput();
        }
	}
}

