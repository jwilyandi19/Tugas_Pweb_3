<?php

namespace App\Http\Middleware;
use Illuminate\Http\Response;

use Closure;

class Teacher
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
        
        if($request->user() && $request->user()->user_type != 'T' ) {
            return new Response(view('unauthorized')->with('role','Teacher'));
        }
        return $next($request);
    }
}
