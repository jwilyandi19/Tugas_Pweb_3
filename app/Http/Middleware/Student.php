<?php

namespace App\Http\Middleware;
use Illuminate\Http\Response;

use Closure;

class Student
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
        dd($request->user()->user_type);
        if($request->user() && $request->user()->user_type != 'S' ) {

        }
        return $next($request);
    }
}
