<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle(Request $request, Closure $next)
    // {
    //     if($request->session()->has('user')){
    //         return $next($request);
    //     }
    //     return redirect('login');
    // }


    public function handle(Request $request, Closure $next, ...$roles)
    {
        if ($request->session()->has('user')) {
            $user = $request->session()->get('user');

            // dd($roles);
            $r = $user->role==1?"admin":"user";

            if (in_array($r, $roles )) {
                return $next($request);
            }
        }
        return redirect('login');
    }
}
