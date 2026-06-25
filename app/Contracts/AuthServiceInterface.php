<?php

namespace App\Contracts\Auth;

use App\Models\User;

interface AuthServiceInterface
{
    public function register(array $data): User;

    public function login(array $credentials): array;

    public function profile(): ?User;

    public function logout(): void;
}
