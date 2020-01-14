<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
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
        
        //TODO
        //http://localhost:8000/over18/22  --> treba dozvoliti
        // http://localhost:8000/over18/13 --> treba redirectati na home
         if ($request->age <= 17) {
            return redirect()->route('home');
        }
        return $next($request);
    }
}
