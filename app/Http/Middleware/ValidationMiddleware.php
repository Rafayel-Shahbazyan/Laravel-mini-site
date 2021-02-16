<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class ValidationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        
        $request->validate([
            'subject' => 'required|min:2',
            'message' => 'required|min:15',
        ]);

        return $next($request);
    }

 
}
