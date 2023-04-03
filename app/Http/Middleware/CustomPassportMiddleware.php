<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;


class CustomPassportMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::guard('api')->check()) {
            return $next($request);
        } else {
            return Response(['success' => false, 'data' => 'unauthorized request'], 401);
        }
    }
}
