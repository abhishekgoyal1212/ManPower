<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecuriterGest
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
        $data = Auth::guard('employer')->user();
        if($data) {
            if(!empty($data->first_name)){
            return redirect()->route('Recuriter.RecruiterPage');
            }else{
                return response()->view('front/recuriter/BeforeLogin/register');
            }
        }else{
            return $next($request);

        }
        return $next($request);
    }
}
