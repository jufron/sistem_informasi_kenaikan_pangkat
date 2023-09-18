<?php

use App\Http\Controllers\Dashboard\Admin\{
    GolonganController,
    JabatanController,
    LaporanController,
    PegawaiController,
    PengajuanController,
    UnitKerjaController,
};
use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'rolle:super_admin'])->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'admin'])->name('dashboard.admin');

    // * selesai unit kerja
    Route::controller(UnitKerjaController::class)->group(function () {
        Route::get('unit-kerja', 'index')->name('admin.unit-kerja.index');
        Route::get('unit-kerja/create', 'create')->name('admin.unit-kerja.create');
        Route::post('unit-kerja', 'store')->name('admin.unit-kerja.store');
        Route::delete('unit-kerja/{unitKerja}', 'delete')->name('admin.unit-kerja.delete');
    });

    // * selesai jabatan
    Route::controller(JabatanController::class)->group(function () {
        Route::get('jabatan', 'index')->name('admin.jabatan.index');
        Route::get('jabatan/create', 'create')->name('admin.jabatan.create');
        Route::post('jabatan', 'store')->name('admin.jabatan.store');
        Route::delete('jabatan/{jabatan}', 'delete')->name('admin.jabatan.delete');
    });

    // * selesai golongan
    Route::controller(GolonganController::class)->group(function () {
        Route::get('golongan', 'index')->name('admin.gologan.index');
        Route::get('golongan/create', 'create')->name('admin.golongan.create');
        Route::post('golongan', 'store')->name('admin.golongan.store');
        Route::delete('gologan/{golongan}', 'delete')->name('admin.golongan.delete');
    });

    // * pegawai
    Route::controller(PegawaiController::class)->group( function () {
        Route::get('pegawai', 'index')->name('admin.pegawai.index');
        Route::get('pegawai/{pegawai}', 'show')->name('admin.pegawai.show');
        Route::delete('pegawai/{pegawai}', 'destroy')->name('admin.pegawai.delete');
    });

    Route::resource('pengajuan', PengajuanController::class)
    ->except([ 'create', 'store', 'show', 'destroy'])
    ->parameters([
        'pengajuan'     => 'kenaikanPangkat'
    ])
    ->names([
        'index'         => 'admin.pengajuan.index',
        'edit'          => 'admin.pengajuan.edit',
        'update'        => 'admin.pengajuan.update'
    ]);

    Route::get('pengajuan/download/{file}', [PengajuanController::class, 'download'])
    ->name('admin.pengajuan.download');

    Route::controller(LaporanController::class)->group( function () {
        Route::get('/laporan', 'index')->name('admin.laporan.index');

        // jabatan
        Route::get('laporan/jabatan-pdf', 'jabatan_pdf')->name('admin.laporan.jabatan.pdf');
        // unit kerja
        Route::get('laporan/unit-kerja/pdf', 'unitKerja_pdf')->name('admin.laporan.unit_kerja.pdf');
        // golongan
        Route::get('laporan/golongan/pdf', 'golongan_pdf')->name('admin.laporan.golongan.pdf');
        // pegawai
        Route::get('laporan/pegawai/pdf', 'pegawai_pdf')->name('admin.laporan.pegawai.pdf');
        // disetujui
        Route::get('laporan/disetujui/pdf', 'disetujui_pdf')->name('admin.laporan.disetujui.pdf');
        // mengajukan
        Route::get('laporan/mengajukan/pdf', 'mengajukan_pdf')->name('admin.laporan.mengajukan.pdf');
    });
});
