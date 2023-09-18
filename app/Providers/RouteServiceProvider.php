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

             // Mengalihkan pengguna berdasarkan peran setelah autentikasi
            // Route::middleware(['web', 'auth'])->group(function () {
            //     $user = auth()->user();

            //     if ($user && $user->role === 'super_admin') {
            //         Route::get('/home', 'SuperAdminController@index')->name('home');
            //     } elseif ($user && $user->role === 'sekertaris') {
            //         Route::get('/home', 'SekertarisController@index')->name('home');
            //     } elseif ($user && $user->role === 'kasubang') {
            //         Route::get('/home', 'KasubangController@index')->name('home');
            //     } else {
            //         Route::get('/home', 'HomeController@index')->name('home');
            //     }
            // });

        });
    }
}
