<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    //  protected function redirectTo($request)
    //  {
    //      if (! $request->expectsJson()) {
    //          return route('login');
    //      }
    //  }
    public function handle(Request $request, Closure $next)
    {
        
        if (!Auth::check() || Auth::user()->is_admin == false) {
            return Redirect::route('login');
        }
        return $next($request);
    }
}
