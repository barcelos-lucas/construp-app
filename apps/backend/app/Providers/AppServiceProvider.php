<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\Interfaces\MaterialRepositoryInterface;
use App\Infrastructure\Persistence\Eloquent\MaterialRepository;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(
            MaterialRepositoryInterface::class,
            MaterialRepository::class
        );
    }

    public function boot(): void
    {
        //
    }
}
