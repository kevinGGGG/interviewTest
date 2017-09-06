<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class infoMiddleware
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
        $user = Auth::user();
        if(Auth::check())
            return $next($request);
        return redirect('login');
    }
}
