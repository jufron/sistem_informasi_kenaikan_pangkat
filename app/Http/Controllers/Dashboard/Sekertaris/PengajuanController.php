<?php

namespace App\Http\Controllers\Dashboard\Sekertaris;

use App\Http\Controllers\Controller;
use App\Models\KenaikanPangkat;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PengajuanController extends Controller
{
    public function index (): View
    {
        return view('dashboard.sekertaris.pengajuan.index', [
            'kenaikan_pangkat'   => KenaikanPangkat::latest()->get()
        ]);
    }

    public function edit (KenaikanPangkat $kenaikanPangkat): View
    {
        return view('dashboard.sekertaris.pengajuan.ubah', [
            'kenaikan_pangkat'  => $kenaikanPangkat
        ]);
    }

    public function update (Request $request, KenaikanPangkat $kenaikanPangkat): RedirectResponse
    {
        $request->validate([
            'disetujui_sekertaris'  => ['boolean']
        ]);

        $kenaikanPangkat->update([
            'disetujui_sekertaris'  => $request->disetujui_sekertaris == '1' ? true : false
        ]);
        alert()->success('Success','Berhasil diperbaharui.')->autoClose(5000);
        return redirect()->route('sekertaris.pengajuan.index');
    }

    public function download ($file)
    {
        $file = Crypt::decryptString($file);
        $filePath = Storage::disk('public')->path($file);
        return response()->download($filePath, 'nama_file.pdf');
    }
}
