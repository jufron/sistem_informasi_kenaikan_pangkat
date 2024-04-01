<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\Pegawai\{
    PegawaiController,
    PengajuanKenaikanPangkatController
};
use App\Http\Controllers\Dashboard\Pegawai\SkKenaikanPangkatController;
use Illuminate\Support\Facades\Route;

// * pegawai
Route::get('/', [DashboardController::class, 'pegawai'])->name('dashboard.pegawai');

// todo CRUD pegawai
Route::resource('pegawai', PegawaiController::class)->names([
    'index'     => 'pegawai.pegawai.index',
    'create'    => 'pegawai.pegawai.create',
    'store'     => 'pegawai.pegawai.store',
    'show'      => 'pegawai.pegawai.show',
    'edit'      => 'pegawai.pegawai.edit',
    'update'    => 'pegawai.pegawai.update',
    'destroy'   => 'pegawai.pegawai.delete'
]);

// * usul kenaikan pangkat
Route::resource('kenaikan-pangkat', PengajuanKenaikanPangkatController::class)
->parameters([
    'kenaikan_pangkat'  => 'kenaikanPangkat'
])
->except('show')
->names([
    'index'     => 'pegawai.kenaikan-pangkat.index',
    'create'    => 'pegawai.kenaikan-pangkat.create',
    'store'     => 'pegawai.kenaikan-pangkat.store',
    // 'show'      => 'pegawai.kenaikan-pangkat.show',
    'edit'      => 'pegawai.kenaikan-pangkat.edit',
    'update'    => 'pegawai.kenaikan-pangkat.update',
    'destroy'   => 'pegawai.kenaikan-pangkat.delete'
]);
Route::controller(PengajuanKenaikanPangkatController::class)->group(function () {
    Route::get('/download/{file}', 'download')->name('pegawai.kenaikan-pangkat.download');
});

// * SK kenaikan pangkat
Route::prefix('sk-kenaikan-pangkat')->controller(SkKenaikanPangkatController::class)->group(function () {
    Route::get('/', 'index')->name('pegawai.sk-kenaikan-pangkat.index');
    Route::get('/download/{id}', 'download')->name('pegawai.sk-kenaikan-pangkat.download');
});
