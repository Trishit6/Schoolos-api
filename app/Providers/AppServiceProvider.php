<?php

namespace App\Providers;

use App\Contracts\AcademicClassServiceInterface;
use App\Contracts\AcademicSessionServiceInterface;
use App\Contracts\AcademicStandardServiceInterface;
use App\Contracts\Auth\AuthServiceInterface;
use App\Contracts\Services\TeacherServiceInterface;
use App\Contracts\StudentServiceInterface;
use App\Contracts\StudentSessionServiceInterface;
use App\Services\Academic\AcademicSessionService;
use App\Services\AcademicClassService;
use App\Services\AcademicStandardService;
use App\Services\Auth\AuthService;
use App\Services\StudentService;
use App\Services\StudentSessionService;
use App\Services\TeacherService;
use Illuminate\Support\ServiceProvider;

// use App\SubjectServiceInterface;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            AuthServiceInterface::class,
            AuthService::class
        );

        $this->app->bind(
            AcademicSessionServiceInterface::class,
            AcademicSessionService::class
        );

        $this->app->bind(
            AcademicStandardServiceInterface::class,
            AcademicStandardService::class
        );

        $this->app->bind(
            AcademicClassServiceInterface::class,
            AcademicClassService::class
        );

        $this->app->bind(
            StudentServiceInterface::class,
            StudentService::class
        );

        $this->app->bind(
            StudentSessionServiceInterface::class,
            StudentSessionService::class
        );

        $this->app->bind(
            TeacherServiceInterface::class,
            TeacherService::class
        );

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
