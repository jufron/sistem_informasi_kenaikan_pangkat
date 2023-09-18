<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\Kasubang\{
    PegawaiController,
    PengajuanKenaikanPangkatController
};


Route::middleware(['auth', 'rolle:kasubang'])->prefix('kasubang')->group(function () {
    Route::get('/', [DashboardController::class, 'kasubang'])->name('dashboard.kasubang');

    // todo belum dikerjakan
    Route::resource('pegawai', PegawaiController::class)->names([
        'index'     => 'kasubang.pegawai.index',
        'create'    => 'kasubang.pegawai.create',
        'store'     => 'kasubang.pegawai.store',
        'show'      => 'kasubang.pegawai.show',
        'edit'      => 'kasubang.pegawai.edit',
        'update'    => 'kasubang.pegawai.update',
        'destroy'   => 'kasubang.pegawai.delete'
    ]);

    Route::resource('kenaikan-pangkat', PengajuanKenaikanPangkatController::class)
    ->parameters([
        'kenaikan_pangkat'  => 'kenaikanPangkat'
    ])
    ->except('show')
    ->names([
        'index'     => 'kasubang.kenaikan-pangkat.index',
        'create'    => 'kasubang.kenaikan-pangkat.create',
        'store'     => 'kasubang.kenaikan-pangkat.store',
        // 'show'      => 'kasubang.kenaikan-pangkat.show',
        'edit'      => 'kasubang.kenaikan-pangkat.edit',
        'update'    => 'kasubang.kenaikan-pangkat.update',
        'destroy'   => 'kasubang.kenaikan-pangkat.delete'
    ]);

    Route::controller(PengajuanKenaikanPangkatController::class)->group(function () {
        Route::get('/download/{file}', 'download')->name('kasubang.kenaikan-pangkat.download');
    });

});
