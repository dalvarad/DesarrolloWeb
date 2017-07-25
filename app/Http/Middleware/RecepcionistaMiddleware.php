<?php

namespace App\Http\Middleware;

use Closure;

class RecepcionistaMiddleware
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

        if(\Auth::User()->type == 'recepcionista') {
            return $next($request);
        }else{
            return abort(403);
        }        
    }
}
