<?php

namespace App\Http\Controllers\Dashboard\Kasubang;

use App\Http\Controllers\Controller;
use App\Http\Requests\PegawaiRequest;
use App\Models\{
    Agama,
    Golongan,
    Jabatan,
    Pegawai,
    UnitKerja
};
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
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

        return view('dashboard.kasubang.pegawai.index', compact('pegawai'));
    }

    public function create (): View
    {
        return view('dashboard.kasubang.pegawai.tambah', [
            'agama'                 => Agama::latest()->get(),
            'jabatan'               => Jabatan::latest()->get(),
            'unit_kerja'            => UnitKerja::latest()->get(),
            'golongan'              => Golongan::latest()->get(),
            'status_perkawinan'     => ['Belum menikah', 'Sudah menikah', 'Janda', 'Duda'],
            'pendidikan_terakhir'   => ['SMP', 'SMA', "D1", "D2", "D3", "D4", 'S1', 'S2', 'S3']
        ]);
    }

    public function store (PegawaiRequest $request): RedirectResponse
    {
        $request->validate([
            'nip'       => ['unique:pegawai'],
            'email'     => ['unique:pegawai,email']
        ]);
        $file_name = null;
        if ($request->file('foto')) {
            $file_name = $request->file('foto')->store('foto', 'public');
        }
        $request->createData($file_name);
        alert()->success('Success','Berhasil dibuat.')->autoClose(5000);
        return redirect()->route('kasubang.pegawai.index');
    }

    public function show (Pegawai $pegawai): JsonResponse
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

    public function edit (Pegawai $pegawai): View
    {
        return view('dashboard.kasubang.pegawai.ubah', [
            'agama'                 => Agama::latest()->get(),
            'jabatan'               => Jabatan::latest()->get(),
            'unit_kerja'            => UnitKerja::latest()->get(),
            'golongan'              => Golongan::latest()->get(),
            'status_perkawinan'     => ['Belum menikah', 'Sudah menikah', 'Janda', 'Duda'],
            'pendidikan_terakhir'   => ['SMP', 'SMA', "D1", "D2", "D3", "D4", 'S1', 'S2', 'S3'],
            'pegawai'               => $pegawai
        ]);
    }

    public function update (PegawaiRequest $request, Pegawai $pegawai): RedirectResponse
    {
        if (Storage::disk('public')->exists($pegawai->foto)) {
            Storage::disk('public')->delete($pegawai->foto);
        }
        $file_name = null;
        if ($request->file('foto')) {
            $file_name = $request->file('foto')->store('foto', 'public');
        }
        $request->updateData($pegawai, $file_name);

        alert()->success('Success','Berhasil diperbaharui.')->autoClose(5000);
        return redirect()->route('kasubang.pegawai.index');
    }

    public function destroy (Pegawai $pegawai): RedirectResponse
    {
        // file juga nanti akan di hapus
        if (Storage::disk('public')->exists($pegawai->foto)) {
            Storage::disk('public')->delete($pegawai->foto);
        }

        $pegawai->delete();
        alert()->success('Success','Berhasil dihapus.')->autoClose(5000);
        return redirect()->route('kasubang.pegawai.index');
    }
}
