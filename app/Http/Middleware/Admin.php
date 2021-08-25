<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
       $Admin_Role = $request->session()->get('role');
    //    $Admin_Role = 11;
        if($Admin_Role == 1 || $Admin_Role == 3)
        {
            return $next($request);
        }
        $request->session()->flash('modal',1);
        return redirect ('/');

        
    }
}
