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
use App\Http\Controllers\Dashboard\Pimpinan\DisposisiController;
use App\Http\Controllers\Dashboard\Pimpinan\SkKenaikanPangkatController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DashboardController::class, 'pimpinan'])->name('dashboard.pimpinan');

// * pegawai
Route::controller(PegawaiController::class)->group( function () {
    Route::get('pegawai', 'index')->name('admin.pegawai.index');
    Route::get('pegawai/{pegawai}', 'show')->name('admin.pegawai.show');
    Route::delete('pegawai/{pegawai}', 'destroy')->name('admin.pegawai.delete');
});

// * disposisi
Route::prefix('disposisi')->controller(DisposisiController::class)->group(function () {
    Route::get('/', 'index')->name('pimpinan.disposisi.index');
    Route::patch('/{id}', 'update')->name('pimpinan.disposisi.update');
    Route::get('/edit/{id}', 'edit')->name('pimpinan.disposisi.edit');
    Route::get('/download/{id}', 'download')->name('pimpinan.disposisi.download');
});

// * SK kenaikan pangkat
Route::prefix('sk-kenaikan-pangkat')->controller(SkKenaikanPangkatController::class)->group(function () {
    Route::get('/', 'index')->name('pimpinan.sk-kenaikan-pangkat.index');
    Route::post('/', 'store')->name('pimpinan.sk-kenaikan-pangkat.store');
    Route::patch('/{id}', 'update')->name('pimpinan.sk-kenaikan-pangkat.update');
    Route::delete('/{id}', 'destroy')->name('pimpinan.sk-kenaikan-pangkat.delete');
    Route::get('/create', 'create')->name('pimpinan.sk-kenaikan-pangkat.create');
    Route::get('/edit/{id}', 'edit')->name('pimpinan.sk-kenaikan-pangkat.edit');
    Route::get('/download/{id}', 'download')->name('pimpinan.sk-kenaikan-pangkat.download');
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
