<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Pegawai;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PegawaiController extends Controller
{
    public function index (): View
    {
      $pegawai = Pegawai::with([
                  'jabatan'    => fn (BelongsTo $query) => $query->select(['id', 'nama']),
                  'golongan'   => fn (BelongsTo $query) => $query->select(['id', 'nama']),
                  'unitKerja'  => fn (BelongsTo $query) => $query->select(['id', 'nama'])
              ])
                ->select(['id', 'foto', 'nama_lengkap', 'jabatan_id', 'golongan_id', 'unit_kerja_id'])
                ->latest()
                ->get();

        return view('dashboard.admin.pegawai.index', compact('pegawai'));
    }

    public function show (Pegawai $pegawai)
    {
        $pegawai->load([
            'agama'     => fn (BelongsTo $query) => $query->select(['id', 'nama']),
            'jabatan'   => fn (BelongsTo $query) => $query->select(['id', 'nama']),
            'unitKerja' => fn (BelongsTo $query) => $query->select(['id', 'nama']),
            'golongan'  => fn (BelongsTo $query) => $query->select(['id', 'nama'])
        ]);
        return response()->json([
            'pegawai'       => $pegawai,
            'created_at'    => $pegawai->tanggal_buat,
            'updated_at'    => $pegawai->tanggal_perbaharui,
            'tanggal_lahir' => $pegawai->tanggal_lahir_format,
            'tanggal_masuk' => $pegawai->tanggal_masuk_format
        ]);
    }

    public function destroy (Pegawai $pegawai)
    {
        if (Storage::disk('public')->exists($pegawai->foto)) {
            Storage::disk('public')->delete($pegawai->foto);
        }

        $pegawai->delete();
        alert()->success('Success','Berhasil dihapus.')->autoClose(5000);
        return redirect()->route('admin.pegawai.index');
    }
}
