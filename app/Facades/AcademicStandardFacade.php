<?php

namespace App\Facades;

use App\Contracts\AcademicStandardServiceInterface;
use Illuminate\Support\Facades\Facade;

class AcademicStandardFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return AcademicStandardServiceInterface::class;
    }
}
