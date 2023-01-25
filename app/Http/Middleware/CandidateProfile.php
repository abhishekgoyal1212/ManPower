<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class CandidateProfile
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $data =  Auth::guard('jobseeker')->user();
        if($data){
            if(!empty($data->first_name)){
                return $next($request);
            }else{
            return redirect()->route('front.signupUserSave');
            }
        }else{
            return redirect()->route('front.Login');
        }
        return $next($request);
    }
}
