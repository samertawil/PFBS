<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Auth 
{
 
    public function handle(Request $request, Closure $next): Response
    {
        
        if(session('auth_idc')) {
          
          return $next($request);

        };
        return redirect()->route('login') ;

       
    }
}
