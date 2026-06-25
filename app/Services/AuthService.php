<?php

namespace App\Services\Auth;

use App\Contracts\Auth\AuthServiceInterface;
use App\Models\User;

class AuthService implements AuthServiceInterface
{
    public function register(array $data): User
    {
        return User::create($data);
    }

    public function login(array $credentials): array
    {
        if (! $token = auth('api')->attempt($credentials)) {
            throw new \Exception('Invalid credentials');
        }

        return [
            'token' => $token,
            'user' => auth('api')->user(),
        ];
    }

    public function profile(): ?User
    {
        return auth('api')->user();
    }

    public function logout(): void
    {
        auth('api')->logout();
    }
}
