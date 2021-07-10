<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Encontrarusuario
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
        if(auth()->user->usuario==1){
            return $next($request);
        }

        return redirect('inicio')->with('error',"You don't have admin access.");
    }
}
