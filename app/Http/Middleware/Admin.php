<?php

namespace App\Http\Middleware;
use Auht;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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
//        if(!Auth::user()->admin)
//        {
//            session::flash('info', 'you do not have permissions to perform this actions  ! ');
//        }
        return $next($request);
    }
}
