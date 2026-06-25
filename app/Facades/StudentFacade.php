<?php

namespace App\Facades;

use App\Contracts\StudentServiceInterface;
use Illuminate\Support\Facades\Facade;

class StudentFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return StudentServiceInterface::class;
    }
}
