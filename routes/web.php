<?php


use App\Http\Controllers\Dashboard\{
    ProfileController
};

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// replace route auth disable
Route::get('register', fn () => abort(404));
Route::get('password/confirm', fn () => abort(404));
Route::get('password/reset', fn () => abort(404));
Route::get('password/reset/{token}', fn () => abort(404));

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::middleware('auth')->prefix('dashboard')->group( function () {
    // * fix
    Route::controller(ProfileController::class)->group(function () {
        Route::get('profile', 'index')->name('dashboard.profile.index');
        Route::patch('profile/{id}', 'update')->name('dashboard.profile.update');
    });

});
