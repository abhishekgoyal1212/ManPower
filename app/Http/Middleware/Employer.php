<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class Employer 
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
            if(Auth::guard('jobseeker')->check() == true){
                $current_data = Auth::guard('jobseeker')->user();
                View::share(compact('current_data'));        
            }elseif(Auth::guard('employer')->check() == true){
                $current_recuriter_data = Auth::guard('employer')->user();
                View::share(compact('current_data'));
            }
            return $next($request);
            
    }
}
