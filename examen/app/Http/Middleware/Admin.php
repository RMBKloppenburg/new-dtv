<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Mockery\Exception;

class Admin
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
            if(auth()->check() && auth()->user()->isAdmin == 1){
                return $next($request);
            }
        return redirect('login')->with('message',"Only admins can access that page!");

    }
}
