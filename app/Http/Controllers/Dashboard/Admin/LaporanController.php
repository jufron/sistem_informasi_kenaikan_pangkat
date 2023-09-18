<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\{
    Golongan,
    Jabatan,
    KenaikanPangkat,
    Pegawai,
    UnitKerja
};
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\View\View;

class LaporanController extends Controller
{
    public function index (): View
    {
        return view('dashboard.admin.laporan.index');
    }

    public function jabatan_pdf ()
    {
        $jabatan = Jabatan::latest()->get();
        return view('dashboard.admin.laporan.jabatan', compact('jabatan'));
    }

    public function unitKerja_pdf ()
    {
        $unitKerja = UnitKerja::latest()->get();
        return view('dashboard.admin.laporan.unitKerja', compact('unitKerja'));
    }

    public function golongan_pdf ()
    {
        $golongan = Golongan::latest()->get();
        return view('dashboard.admin.laporan.golongan', compact('golongan'));
    }

    public function pegawai_pdf ()
    {
    $pegawai = Pegawai::with([
            'jabatan'       => function (BelongsTo $query) {
                $query->select(['id', 'nama']);
            },
            'golongan'      => function (BelongsTo $query) {
                $query->select(['id', 'nama']);
            },
            'unitKerja'    => function (BelongsTo $query) {
                $query->select(['id', 'nama']);
            }
        ])
        ->select(['id','nip', 'nama_lengkap', 'jenis_kelamin', 'agama_id', 'alamat', 'tempat_lahir',
        'tanggal_lahir', 'status_perkawinan', 'pendidikan_terakhir', 'gelar',
        'tanggal_masuk', 'jabatan_id', 'golongan_id', 'unit_kerja_id', 'nomor_telepon', 'email', 'foto'])
        ->latest()
        ->get();
        return view('dashboard.admin.laporan.pegawai', compact('pegawai'));
    }

    public function disetujui_pdf ()
    {
        $disetujui = KenaikanPangkat::where('disetujui_atasan', 1)->get();
        return view('dashboard.admin.laporan.disetujui', compact('disetujui'));
    }

    public function mengajukan_pdf ()
    {
        $mengajukan = KenaikanPangkat::whereIn('disetujui_kasubang', [true, false])
                                        ->where('disetujui_atasan', false)
                                        ->latest()
                                        ->get();
        return view('dashboard.admin.laporan.mengajukan', compact('mengajukan'));   
    }
}
