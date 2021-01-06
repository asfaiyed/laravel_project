<?php

namespace App\Http\Middleware;

use Closure;

class T_VerifyType
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
        if($request->session()->get('type') == "customer"){
            return $next($request);
        }else{
            return redirect('/c_login');
        }
        
    }
}
