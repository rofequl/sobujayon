<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (!Auth::guard($guard)->check() && $guard == "admin") {
            return redirect('login-admin');
        }

        if (!Auth::guard($guard)->check() && $guard == "user") {
            return redirect('login-user');
        }

        if (!Auth::guard($guard)->check() && $guard == "nursery") {
            return redirect('login-nursery');
        }

        return $next($request);
    }
}
