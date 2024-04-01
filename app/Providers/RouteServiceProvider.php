<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            Route::middleware('web', 'auth')->group( function () {

                Route::prefix('dashboard/pegawai')
                     ->middleware('rolle:pegawai')
                     ->group(base_path('routes/dashboard/pegawai.php'));

                Route::prefix('dashboard/staf_pegawai')
                     ->middleware('rolle:staf_pegawai')
                     ->group(base_path('routes/dashboard/staf_pegawai.php'));

                Route::prefix('dashboard/kasubag')
                     ->middleware('rolle:kasubag')
                     ->group(base_path('routes/dashboard/kasubag.php'));

                Route::prefix('dashboard/sekertaris')
                     ->middleware('rolle:sekertaris')
                     ->group(base_path('routes/dashboard/sekertaris.php'));

                ROute::prefix('dashboard/pimpinan')
                     ->middleware('rolle:pimpinan')
                    ->group(base_path('routes/dashboard/pimpinan.php'));
            });

        });
    }
}
