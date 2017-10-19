<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class checkStaffLogin
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
        if(!Session::has('userId')){
            return redirect('/');
        }
        return $next($request);
    }
}
