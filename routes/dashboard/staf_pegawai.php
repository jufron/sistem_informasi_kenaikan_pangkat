<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\Staf_pegawai\{
    UnitKerjaController,
    JabatanController,
    GolonganController,
    CatatanUsulanController,
    PengajuanController
};
use Illuminate\Support\Facades\Route;

// * staf pegawai
Route::get('/', [DashboardController::class, 'staf_pegawai'])->name('dashboard.staf_pegawai');

// * unit kerja
Route::controller(UnitKerjaController::class)->group(function () {
    Route::get('unit-kerja', 'index')->name('staf_pegawai.unit-kerja.index');
    Route::get('unit-kerja/create', 'create')->name('staf_pegawai.unit-kerja.create');
    Route::post('unit-kerja', 'store')->name('staf_pegawai.unit-kerja.store');
    Route::delete('unit-kerja/{unitKerja}', 'delete')->name('staf_pegawai.unit-kerja.delete');
});

// * jabatan
Route::controller(JabatanController::class)->group(function () {
    Route::get('jabatan', 'index')->name('staf_pegawai.jabatan.index');
    Route::get('jabatan/create', 'create')->name('staf_pegawai.jabatan.create');
    Route::post('jabatan', 'store')->name('staf_pegawai.jabatan.store');
    Route::delete('jabatan/{jabatan}', 'delete')->name('staf_pegawai.jabatan.delete');
});

// * golongan
Route::controller(GolonganController::class)->group(function () {
    Route::get('golongan', 'index')->name('staf_pegawai.golongan.index');
    Route::get('golongan/create', 'create')->name('staf_pegawai.golongan.create');
    Route::post('golongan', 'store')->name('staf_pegawai.golongan.store');
    Route::delete('gologan/{golongan}', 'delete')->name('staf_pegawai.golongan.delete');
});

// * verifikasi berkas pengajuan
Route::prefix('pengajuan')->controller(PengajuanController::class)->group(function () {
    Route::get('/', 'index')->name('staf_pegawai.pengajuan.index');
    Route::get('/{kenaikanPangkat}', 'show')->name('staf_pegawai.pengajuan.show');
    Route::patch('/{kenaikanPangkat}', 'update')->name('staf_pegawai.pengajuan.update');
    Route::patch('/verifikasi-data/{id}', 'verifikasi_data')->name('staf_pegawa.pengajuan.verifikasi');
    Route::get('/download/{file}', 'download')->name('staf_pegawai.pengajuan.download');
});

// * catatan usulan
Route::prefix('catatan-usulan')->controller(CatatanUsulanController::class)->group( function () {
    Route::get('/', 'index')->name('staf_pegawai.catatan-usulan.index');
    Route::get('/create', 'create')->name('staf_pegawai.catatan-usulan.create');
    ROute::post('/', 'store')->name('staf_pegawai.catatan-usulan.store');
    ROute::delete('/{id}', 'destroy')->name('staf_pegawai.catatan-usulan.delete');
    Route::get('/download/{id}', 'download')->name('staf_pegawai.catatan-usulan.download');
});

