<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;

class Super_Admin
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

        $role = $request->session()->get('role');
        

 
        if($role != 3)
        {
            // return redirect('loginForm');
            $request->session()->flash('modal',3);
            return redirect ('/');
        }

        return $next($request);
    }
}
