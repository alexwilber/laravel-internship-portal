<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
         //$request->user();
        
        if (Auth::guard($guard)->check()) {
            if(Auth::user()->type == '1'){
                return redirect('/admin');
                // return $next($request);
            }else{
                return redirect('/employer');
                
            }
            
            
        }
        return $next($request);
    }
}
