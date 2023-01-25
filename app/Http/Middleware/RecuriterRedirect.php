<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RecuriterRedirect
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
        // if (Auth::guard('employer')->check()) {
        //     return $next($request);
        // }else{
        //     return redirect()->route('Recuriter.Login');
        // }
        $data = Auth::guard('employer')->user(); 
        if(!empty($data)) {
            if(!empty($data->first_name)){
                return $next($request);
            }else{
                return response()->view('front/BeforeLogin/recuriter/register');
            }
        }else{
            return redirect()->route('Recuriter.Login');
        }
        return $next($request);
    }
}
