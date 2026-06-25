<?php

namespace App\Facades;

use App\Contracts\StudentSessionServiceInterface;
use Illuminate\Support\Facades\Facade;

class StudentSessionFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return StudentSessionServiceInterface::class;
    }
}
