<?php

namespace Moduly\Path;

use Illuminate\Support\ServiceProvider;

class serviceprovides extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->make('Moduly\Path\servicecontroller');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        include __DIR__.'/Route.php';
    }
}