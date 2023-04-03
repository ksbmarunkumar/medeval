<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\Request;
 
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenBlacklistedException;
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenExpiredException;
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenInvalidException;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;
 

class JwtMiddleware 
{

    public function handle(Request $request, Closure $next)
    {
        
        try {
            JWTAuth::parseToken()->authenticate();
            $next($request);
        } catch (Exception $e) {
            if ($e instanceof  TokenInvalidException) {
                return response()->json(['status' => 'Token is Invalid']);
            } else if ($e instanceof  TokenExpiredException) {
                return response()->json(['status' => 'Token is Expired']);
            } else if ($e instanceof  TokenBlacklistedException) {
                return response()->json(['status' => 'Token is Blacklisted']);
            } else {
                return response()->json(['status' => 'Authorization Token not found']);
            }
        }
    }
}
