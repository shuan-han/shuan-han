<?php

namespace App\Http\Middleware;

use Closure;

class AdminLogin
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
        //session(['admin' =>null]);
        if(!session('admin'))
        {
           return  redirect('admin/login');
        }

       // echo session('admin');
        //exit;
        return $next($request);
    }
}
