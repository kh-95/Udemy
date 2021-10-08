<?php

namespace App\Http\Middleware;

use Closure;

class AdminCheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    //handle any requests
public function handle($request, Closure $next)
    {

if(!auth()->check() || auth()->user()->role !="admin"  || auth()->user()->is_active !=1){

return redirect(route('home'));

}
return $next($request);
}
}
