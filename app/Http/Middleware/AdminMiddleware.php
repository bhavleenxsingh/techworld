<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminMiddleware
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
        if (Auth::user() && Auth::user()->email === 'admin@admin.com') {
        return $next($request);
        }
        return redirect('/')->with('error', "Access denied");
    }
}
// {
//     public function handle($request, Closure $next)
//     {
//         if (Auth::user() && Auth::user()->email === 'admin@admin.com') {
//             return $next($request);
//         }

//         return redirect('/')->with('error', "Access denied");
//     }
// }
