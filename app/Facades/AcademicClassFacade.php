<?php

namespace App\Facades;

use App\Contracts\AcademicClassServiceInterface;
use Illuminate\Support\Facades\Facade;

class AcademicClassFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return AcademicClassServiceInterface::class;
    }
}
