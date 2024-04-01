<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::if('rolle', function (string $value) {
            return auth()->user()->rolle === $value;
        });

        Blade::if('routeis', function (string $value) {
            return  request()->routeIs($value);
        });
    }
}
