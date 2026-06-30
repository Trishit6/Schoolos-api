<?php

namespace App\Facades;

use App\Contracts\StudentServiceInterface;
use Illuminate\Support\Facades\Facade;

use Illuminate\Database\Eloquent\Factories\HasFactory;
class StudentFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return StudentServiceInterface::class;
    }
}
