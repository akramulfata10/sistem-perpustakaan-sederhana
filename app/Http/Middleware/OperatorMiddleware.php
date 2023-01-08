<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OperatorMiddleware {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next) {
        if (Auth::check()) {
            if (Auth::user()->role_as == '2') { //operator role
                return $next($request);
            } else {
                return redirect('/home')->with('status', 'access denied! as you are not operator');
            }
        } else {
            return redirect('/login')->with('status', 'please login');
        }
    }
}