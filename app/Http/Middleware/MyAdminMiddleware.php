<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MyAdminMiddleware
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
        if(!session()->has('user')){
            abort(403, 'You are not admin');
        }
        if((object)(session('user'))->role == 'admin'){
            return $next($request);
        }
        abort(403, 'You are not admin');
    }
}
