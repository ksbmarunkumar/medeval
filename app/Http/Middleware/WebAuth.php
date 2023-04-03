<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
     

    public function handle(Request $request, Closure $next)
    {
        if(Auth::check())
        {
            if(Auth::user()->user_type == 'SuperAdmin ' ){
               return route('front');
            }
            if(Auth::user()->user_type == 'Student' and  Auth::user()->status_id == 'Active'){
                return $next($request);
            }
             if(Auth::user()->user_type == 'Teacher' and  Auth::user()->status_id == 'Active'){
                return $next($request);
            }else{
                return redirect('front')->with('error',"You don't have admin access.");
            }
        }else{
            return redirect('front')->with('error',"You don't have admin access.");
        }
        //  if(auth()->user()->user_type == 'Student'){
        //     return $next($request);
        // }
        //  if(auth()->user()->user_type == 'Teacher'){
        //     return $next($request);
        // }else{
        //     return redirect('front')->with('error',"You don't have admin access.");
        // }

    }
}
