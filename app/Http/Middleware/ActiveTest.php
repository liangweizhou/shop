<?php

namespace App\Http\Middleware;

use Closure;

class ActiveTest
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
        //if(time()<strtotime('2018-1-17')){
        //    return redirect('active0');
     //   }
      //  return $next($request);
    }
}
