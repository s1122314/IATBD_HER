<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class CheckIfGast
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->role === "Admin"){
            return $next($request); 
        }
        if(Auth::user()->role === "Gast"){
            return $next($request); 
        }
        return redirect("/blocked");
    }
}