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
    	if($request->age<=200){
    		return redirect('hhh1');
    	}
    	else{
    		return redirect('hhh2');
    	}
        //return $next($request);
    }
}
