<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;    
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Mail\AuthMail;
use App\Models\Admin;


class AuthController extends Controller
{

    public function loginAuth(Request $req)
    {
        $req->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required',
        ]);
        $credentials = $req->only('email', 'password',['user_status' => 1]);
        if($this->Admin()->attempt($credentials)){
            return redirect()->route('admin.dashboard');
        }else{
                return back()->with('flash-error','Invalid credentials')->withInput();
         }
    }
    public function forgotPassword(Request $req)
    {
        $req->validate([
            'email' => 'required|email|exists:' . ADMIN,
        ],
            ['email.exists' => 'This email not exist in our records']);
        $input = $req->input();
        $token = Str::random(40);
        $expire_key_time  = date("Y-m-d H:i:s",strtotime("+30 minutes"));
        $data = [
            'forget_key' => $token,
            'expire_forget_key' => $expire_key_time,
        ];
        $result = Admin::where('email', $input['email'])->update($data);
        $data  = [
            'link' => $token,  
            'msg' => $expire_key_time,  
        ];
        $mail_data = [
            "heading" => 'Reset Password',
            'link' => route('admin.reset-password',$token),
            "msg" => "If you've lost password or wish to reset it, use the link below to get started.",
            "btn_text" => "Reset Your Password",
             "footer" => 'Password Reset Please Do Not Share Your Link Button.',
        ];
        Mail::to($input['email'])->send(new AuthMail($mail_data));
        if ($result) {
            return back()->with('flash-success', 'A password reset link has been sent to your email')->withInput();
        }else{
            return back()->with('flash-error', 'Some error occurred')->withInput();
        }
    }

    public function resetPassword($token = '')
    {
        $info = Admin::where('forget_key', $token)->firstOrFail();
        if ($info) {
            return view('admin/auth/reset-password', compact('token', 'info'));
        }else{
            return back()->with('flash-error', 'Some error occurred')->withInput();
        }
    }
    public function verifyResetPassword(Request $req, $token)
    {
        $req->validate(['password' => 'required','password_confirmation' => 'required|same:password',],
            ['password_confirmation.confirmed' => 'The password confirmatoin does not match']);
            $input = $req->input();
            $current_time = date("Y-m-d H:i:s");
            $info = Admin::where('forget_key', $token)->firstOrFail();
            if (strtotime($info->expire_forget_key) < strtotime($current_time)) {
                return back()->with('flash-error', 'Password reset link has been expired');
            }else{
                $data = Admin::where('forget_key', $token)->firstOrFail();
                $data->password = Hash::make($input['password']);
                if ($data->save()) {
                    return redirect()->route('admin.login')->with('flash-success', 'Password changed successfully');
                }else{
                    return back()->with('flash-error', 'Some error occurred in changing password');
                }
            }
    }
    public function logout()
    {
        if ($this->Admin()->check()) {
            $this->Admin()->logout();
            return redirect()->route('admin.login');
        }
    }
}
