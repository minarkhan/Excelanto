<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class BangladeshEmbassy
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
        if (Auth::check() && (Auth::user()->user_type == 'bangladeshi-embassy')) {
            return $next($request);
        }
        else{
            return redirect()->route('login');
        }
    }
}
