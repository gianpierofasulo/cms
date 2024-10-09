<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if($request->session()->has('role')) {
            return $next($request);    
        }        
        return redirect()->route('admin.login');
    }
}



