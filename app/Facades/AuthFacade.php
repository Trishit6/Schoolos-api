<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \App\Models\User register(array $data)
 * @method static string login(array $credentials)
 * @method static \App\Models\User|null profile()
 * @method static void logout()
 */
class AuthFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'auth.service';
    }
}
