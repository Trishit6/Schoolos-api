<?php

namespace App\Facades;

use App\Contracts\AcademicSessionServiceInterface;
use Illuminate\Support\Facades\Facade;

class AcademicSessionFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return AcademicSessionServiceInterface::class;
    }
}
