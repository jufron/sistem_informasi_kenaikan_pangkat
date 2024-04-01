<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\Sekertaris\PengajuanController;

// * sekertaris route

Route::get('/', [DashboardController::class, 'sekertaris'])->name('dashboard.sekertaris');

// Route::resource('pengajuan', PengajuanController::class)
//     ->except([ 'create', 'store', 'show', 'destroy'])
//     ->parameters([
//         'pengajuan'  => 'kenaikanPangkat'
//     ])
//     ->names([
//         'index'     => 'sekertaris.pengajuan.index',
//         'edit'      => 'sekertaris.pengajuan.edit',
//         'update'    => 'sekertaris.pengajuan.update'
//     ]);

// Route::get('pengajuan/download/{file}', [PengajuanController::class, 'download'])
// ->name('sekertaris.pengajuan.download');
