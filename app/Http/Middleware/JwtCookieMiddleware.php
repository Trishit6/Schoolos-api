<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;

class JwtCookieMiddleware
{
    public function handle(
        Request $request,
        Closure $next
    ) {
        $token = $request->bearerToken() ?? $request->cookie('jwt_token');

        if (! $token) {
            return response()->json([
                'message' => 'Unauthorized',
            ], 401);
        }
        try {
            JWTAuth::setToken($token);
            $user = JWTAuth::authenticate();
            if ($user) {
                Auth::login($user);
            } else {
                return response()->json([
                    'message' => 'Unauthorized',
                ], 401);
            }
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Unauthorized',
            ], 401);
        }

        return $next($request);

    }
}
