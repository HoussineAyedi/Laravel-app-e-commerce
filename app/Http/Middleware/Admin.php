<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

/*Class 'App\Http\Middleware\Auth' not found error without the line above */

class Admin
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

        // we are going to test if the user is authentificated and 
        // if the user connected is an Admin

        if (Auth::check() && Auth::user()->isAdmin() )
            {   
                // if it is the case then we will be allowed to pass to the next level/request 
                return $next($request);
            }
          return redirect ('/');
            // otherwise we are going to return him to the login
    }
}
