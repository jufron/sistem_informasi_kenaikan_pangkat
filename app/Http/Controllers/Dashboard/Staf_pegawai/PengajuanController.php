<?php

namespace App\Http\Controllers\Dashboard\Staf_pegawai;

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
        return view('dashboard.staf_pegawai.pengajuan.index', [
            'kenaikan_pangkat'   => KenaikanPangkat::latest()->get()
        ]);
    }

    public function show (KenaikanPangkat $kenaikanPangkat): View
    {
        return view('dashboard.staf_pegawai.pengajuan.show',[
            'kenaikan_pangkat'  => $kenaikanPangkat
        ]);
    }

    public function download ($file)
    {
        $file = Crypt::decryptString($file);
        $filePath = Storage::disk('public')->path($file);
        return response()->download($filePath, 'nama_file.pdf');
    }

    public function verifikasi_data (Request $request, $id): RedirectResponse
    {
        $request->validate([
            'disetujui_staf_pegawai'    => ['required']
        ]);
        $model = KenaikanPangkat::findOrFail($id);

        $model->update([
            'disetujui_staf_pegawai'    => $request->disetujui_staf_pegawai
        ]);
        alert()->success('Success','Berhasil Diperbaharui.')->autoClose(5000);
        return redirect()->route('staf_pegawai.pengajuan.index');
    }
}
