<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\Kasubag\{
    CatatanUsulanController,
    DisposisiController
};
use App\Http\Controllers\Dashboard\Kasubang\{
    PegawaiController,
    PengajuanKenaikanPangkatController
};

// * kasubag
Route::get('/', [DashboardController::class, 'kasubag'])->name('dashboard.kasubag');

// * catatan usulan
Route::prefix('catatan-usulan')->controller(CatatanUsulanController::class)->group( function () {
    Route::get('/', 'index')->name('kasubag.catatan-usulan.index');
    Route::get('/edit/{id}', 'edit')->name('kasubag.catatan-usulan.edit');
    Route::patch('/{id}', 'update')->name('kasubag.catatan-usulan.update');
    Route::get('/download/{id}', 'download')->name('kasubag.catatan-usulan.download');
});

//* disposisi
Route::prefix('disposisi')->controller(DisposisiController::class)->group( function () {
    Route::get('/', 'index')->name('kasubag.disposisi.index');
    Route::get('/create', 'create')->name('kasubag.disposisi.create');
    Route::post('/', 'store')->name('kasubag.disposisi.store');
    Route::delete('/{id}', 'destroy')->name('kasubag.disposisi.delete');
    Route::get('/download/{id}', 'download')->name('kasubag.disposisi.deonload');
});

// todo belum dikerjakan
// Route::resource('pegawai', PegawaiController::class)->names([
//     'index'     => 'kasubang.pegawai.index',
//     'create'    => 'kasubang.pegawai.create',
//     'store'     => 'kasubang.pegawai.store',
//     'show'      => 'kasubang.pegawai.show',
//     'edit'      => 'kasubang.pegawai.edit',
//     'update'    => 'kasubang.pegawai.update',
//     'destroy'   => 'kasubang.pegawai.delete'
// ]);

// Route::resource('kenaikan-pangkat', PengajuanKenaikanPangkatController::class)
// ->parameters([
//     'kenaikan_pangkat'  => 'kenaikanPangkat'
// ])
// ->except('show')
// ->names([
//     'index'     => 'kasubang.kenaikan-pangkat.index',
//     'create'    => 'kasubang.kenaikan-pangkat.create',
//     'store'     => 'kasubang.kenaikan-pangkat.store',
//     // 'show'      => 'kasubang.kenaikan-pangkat.show',
//     'edit'      => 'kasubang.kenaikan-pangkat.edit',
//     'update'    => 'kasubang.kenaikan-pangkat.update',
//     'destroy'   => 'kasubang.kenaikan-pangkat.delete'
// ]);

// Route::controller(PengajuanKenaikanPangkatController::class)->group(function () {
//     Route::get('/download/{file}', 'download')->name('kasubang.kenaikan-pangkat.download');
// });
