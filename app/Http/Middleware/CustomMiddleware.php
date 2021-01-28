<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Session;
use App\User;
use Closure;

class CustomMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        if(session('login')){
            $email =   Session::get('email');
            $user = User::where('email', $email)->first();
            if(in_array($user->role,$roles)){
                return $next($request);
            }
        }
        return redirect("/login");

    }
}
