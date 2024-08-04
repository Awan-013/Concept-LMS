<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;


class UserData
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            View::share('userName', Auth::user()->name);
            View::share('level', Auth::user()->level);
            View::share('email', Auth::user()->email);
            
        }
        
        return $next($request);
    }
}
