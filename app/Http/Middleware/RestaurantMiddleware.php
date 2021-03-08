<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RestaurantMiddleware
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
        if(Auth::user()->type =='admin')
        {
            return redirect()->route('dash');

        }

        if(Auth::user()->type =='restaurant')
        {
            return $next($request);

        }

        if(Auth::user()->type =='livreur')
        {
            return redirect()->route('livreur');
        }
        
        else
        {
            return redirect('/');
        }      
    }
}
