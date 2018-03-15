<?php

namespace App\Http\Middleware;

use Closure;

class MustBeAdministrator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $request->user();
        
        if ($user && $user->type == 1){
            
            //return redirect('/admin');
            return $next($request);
        }
        //return $next($request);
        abort(404, 'SORRY. You do not have access to this page.');
    }
}
