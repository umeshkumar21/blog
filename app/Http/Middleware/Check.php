<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Auth;

class Check
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
        if(Auth::user()->isAdmin()){
            return $next($request);
        }
        return redirect('/');
    }
}
