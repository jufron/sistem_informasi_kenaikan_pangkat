<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\KenaikanPangkat;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PengajuanController extends Controller
{
    public function index (): View
    {
        return view('dashboard.admin.pengajuan.index', [
            'kenaikan_pangkat'  => KenaikanPangkat::where('disetujui_sekertaris', 1)->latest()->get()
        ]);
    }

    public function edit (KenaikanPangkat $kenaikanPangkat): View
    {
        $id_pegawai = $kenaikanPangkat->pegawai->first()->id;
        $pegawai = Pegawai::find($id_pegawai)->kenaikan_pangkat;

        return view('dashboard.admin.pengajuan.ubah', [
            'kenaikan_pangkat'  => $kenaikanPangkat,
            'pegawai'           => $pegawai
        ]);
    }

    public function update (Request $request, KenaikanPangkat $kenaikanPangkat)
    {
        $request->validate([
            'disetujui_atasan'      => ['boolean']
        ]);
        $kenaikanPangkat->update([
            'disetujui_atasan'    => $request->disetujui_atasan == '1' ? true : false
        ]);
        alert()->success('Success','Berhasil diperbaharui.')->autoClose(5000);
        return redirect()->route('admin.pengajuan.index');
    }

    public function download ($file)
    {
        $file = Crypt::decryptString($file);
        $filePath = Storage::disk('public')->path($file);
        return response()->download($filePath, 'nama_file.pdf');
    }
}
