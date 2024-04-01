<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\{
    CatatanUsulan,
    Disposisi,
    Golongan,
    Jabatan,
    KenaikanPangkat,
    Pegawai,
    SkKenaikanPangkat,
    UnitKerja
};

use Illuminate\View\View;
use Illuminate\Database\Eloquent\Builder;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected function pegawaiWhereAgama (string $agama_name): int
    {
        return Pegawai::whereHas('agama', function (Builder $query) use ($agama_name) {
            $query->where('nama', $agama_name);
        })->count();
    }

    protected function pegawaiWhereStatusPerkawinan (string $value): int
    {
        return Pegawai::where('status_perkawinan', $value)->count();
    }

    protected function pegawaiWherePendidikanTerakhir (string $value): int
    {
        return Pegawai::where('pendidikan_terakhir', $value)->count();
    }

    public function pimpinan (): View
    {
        $kristen_protestan = $this->pegawaiWhereAgama('kristen protestan');
        $katholik = $this->pegawaiWhereAgama('katholik');
        $islam = $this->pegawaiWhereAgama('islam');
        $hinduh = $this->pegawaiWhereAgama('hinduh');
        $budha = $this->pegawaiWhereAgama('Budha');
        $Konghuchu = $this->pegawaiWhereAgama('Konghuchu');

        $belum_menikah = $this->pegawaiWhereStatusPerkawinan('belum menikah');
        $sudah_menikah = $this->pegawaiWhereStatusPerkawinan('sudah menikah');
        $janda = $this->pegawaiWhereStatusPerkawinan('janda');
        $duda = $this->pegawaiWhereStatusPerkawinan('duda');

        return view('dashboard.admin.index', [
            'unit_kerja_count'    => UnitKerja::count(),
            'jabatan_count'       => Jabatan::count(),
            'golongan_count'      => Golongan::count(),
            'pegawai_count'       => Pegawai::count(),
            'laki_laki_count'     => Pegawai::where('jenis_kelamin', 'laki-laki')->count(),
            'perempuan_count'     => Pegawai::where('jenis_kelamin', 'perempuan')->count(),
            'kristen_count'       => $kristen_protestan,
            'katholik_count'      => $katholik,
            'islam_count'         => $islam,
            'hinduh_count'        => $hinduh,
            'budha_count'         => $budha,
            'konghuchu_count'     => $Konghuchu,
            'belum_menikah'       => $belum_menikah,
            'sudah_menikah'       => $sudah_menikah,
            'janda'               => $janda,
            'duda'                => $duda,
            "s3"                  => $this->pegawaiWherePendidikanTerakhir('S3'),
            "d3"                  => $this->pegawaiWherePendidikanTerakhir('D3'),
            "d2"                  => $this->pegawaiWherePendidikanTerakhir('D2'),
            "smp"                 => $this->pegawaiWherePendidikanTerakhir('SMP'),
            "d1"                  => $this->pegawaiWherePendidikanTerakhir('D1'),
            "sma"                 => $this->pegawaiWherePendidikanTerakhir('SMA'),
            "d4"                  => $this->pegawaiWherePendidikanTerakhir('D4'),
            "s2"                  => $this->pegawaiWherePendidikanTerakhir('S2'),
            "s1"                  => $this->pegawaiWherePendidikanTerakhir('S1'),
            'mengajukan'          => KenaikanPangkat::whereIn('disetujui_staf_pegawai', [1, 0])->count(),
            'sk_pangkat'          => SkKenaikanPangkat::count(),
            'disposisi'           => Disposisi::count()
        ]);
    }

    public function sekertaris (): View
    {
        return view('dashboard.sekertaris.index', [
            'jabatan_count'         => Jabatan::count(),
            'unit_kerja_count'      => UnitKerja::count(),
            'disetujui'             => KenaikanPangkat::where('disetujui_atasan', 1)->count(),
            'mengajukan'            => KenaikanPangkat::whereIn('disetujui_kasubang', [1, 0])->count(),
        ]);
    }

    public function kasubag (): View
    {
        return view('dashboard.kasubang.index', [
            'pegawai_count'     => Pegawai::count(),
            'laki_laki_count'   => Pegawai::where('jenis_kelamin', 'laki-laki')->count(),
            'perempuan_count'   => Pegawai::where('jenis_kelamin', 'perempuan')->count(),
            'catatan_usulan'    => CatatanUsulan::count(),
            'disposisi'         => Disposisi::count(),
        ]);
    }

    public function staf_pegawai ()
    {
        return view('dashboard.staf_pegawai.index', [
            'pegawai'             => Pegawai::count(),
            'disetujui'           => KenaikanPangkat::where('disetujui_staf_pegawai', 1)->count(),
            'catatan_usulan'      => CatatanUsulan::count()
        ]);
    }

    public function pegawai (): View
    {
        return view('dashboard.pegawai.index', [
            'pegawai'               => Pegawai::count(),
            'usul_kenaikan_pangkat' => KenaikanPangkat::whereIn('disetujui_staf_pegawai', [1, 0])->count(),
            'disetujui'             => KenaikanPangkat::where('disetujui_staf_pegawai', 1)->count()
        ]);
    }
}
