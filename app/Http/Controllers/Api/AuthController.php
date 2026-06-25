<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(
        RegisterRequest $request
    ): JsonResponse {

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'role' => $request->role ?? 'applicant',
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'message' => 'Registration successful',
            'user' => new UserResource($user),
        ], 201);
    }

    public function login(LoginRequest $request): JsonResponse
    {
        $credentials = $request->validated();

        if (! $token = auth('api')->attempt($credentials)) {
            return response()->json([
                'message' => 'Invalid credentials',
            ], 401);
        }

        return response()
            ->json([
                'message' => 'Login successful',
                'token' => $token,
                // 'user' => new UserResource(auth('api')->user()),
            ]);
        // ->cookie(
        //     'jwt_token',
        //     $token,
        //     60 * 24,
        //     '/',
        //     'schoolos-api.local',
        //     true,
        //     true,
        //     false,
        //     'None'
        // );
    }

    public function profile(): JsonResponse
    {

        return response()->json([
            'user' => new UserResource(auth('api')->user()),
        ]);
    }

    public function logout(): JsonResponse
    {
        auth('api')->logout();

        return response()
            ->json([
                'message' => 'Logout successful',
            ]);
        // ->withoutCookie('jwt_token');
    }
}
