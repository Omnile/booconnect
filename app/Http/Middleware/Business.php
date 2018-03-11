<?php

namespace App\Http\Middleware;

use Closure;

class Business
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
        if ($request->user()->has('restaurant')) {
            return $next($request);
        }

        return redirect('/');
    }
}
