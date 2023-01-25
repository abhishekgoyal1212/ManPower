<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    public function index($type = '')
    {
        $user_info = Auth::user();
        if($type == 'update-profile'){
        return view('admin.profile.profile', compact('user_info'));
        }elseif($type == 'update-password'){
        return view('admin.profile.updatepassword', compact('user_info'));
        }else{
        return redirect()->route('admin.dashboard');
        }
    }
    public function save_profile(Request $req , $type = '')
    {

        if($type == 'update-profile'){
        $msg = 'profile';
            $req->validate([
                'fullname' => 'required|min:3|max:15',
                'email' => 'required|email',
                'mobile' => 'required|numeric',
                'image' => 'mimes:jpg,jpeg,png',
            ]);
        $inputs = $req->input();
        $data = Admin::find(auth::id());
        $data->fullname = $inputs['fullname'];
        $data->email = $inputs['email'];
        $data->mobile = $inputs['mobile'];

        if ($req->file('image') != '') {
            $img_name = time() . '-' . Str::of(md5(time() . $req->file('image')->getClientOriginalName()))->substr(0, 50) . '.' . $req->file('image')->extension();
            $path = $req->file('image')->storeAs('admin/img/avatar/', $img_name);
            if (file_exists($path)) {
            unlink('public/admin/img/avatar/' . $data->avatar);
            }
            $data->avatar = $img_name;
        }
    }
    if($type == 'update-password') {
        $msg = 'Password';
        $req->validate([
            'current_password' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);     
        $inputs = $req->input();
        $data = Admin::find(auth::id());
        if($data->password != Hash::check($inputs['current_password'],$data->password)){
            return redirect()->back()->with('flash-error', 'old password does not match');
        }
        $data->password = Hash::make($inputs['password']);
    }
        $data->save();
        if ($data) {
            return redirect()->route('admin.getProfile',[$type])->with('flash-success', $msg.' updated successfully');
        } else {
            return redirect()->route('admin.getProfile')->with('Error', 'Error occured in updating profile');
        }
    }
}
