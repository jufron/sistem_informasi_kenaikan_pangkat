<?php

namespace App\Http\Controllers\Dashboard\Pegawai;

use App\Http\Controllers\Controller;
use App\Http\Requests\KenaikanPangkatRequest;
use App\Models\KenaikanPangkat;
use App\Models\Pegawai;
use Illuminate\Http\Client\Events\ResponseReceived;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\View\View;

class PengajuanKenaikanPangkatController extends Controller
{
    protected function storeFile($request, $value)
    {
        $file_name = null;
        if ($request->file($value)) {
            $file_name = $request->file($value)->store('dokument', 'public');
        }
        return $file_name;
    }

    public function index (): View
    {
        return view('dashboard.pegawai.usul_kp.index', [
            'kenaikan_pangkat'  => KenaikanPangkat::latest()->get()
        ]);
    }

    public function create (): View
    {
        return view('dashboard.pegawai.usul_kp.tambah', [
            'pegawai'   => Pegawai::latest()->get(),
        ]);
    }

    public function store (KenaikanPangkatRequest $request): RedirectResponse
    {
        $request->validate([
            'biodata_file'                  => ['required'],
            'sk_pangkat_terakhir_file'      => ['required'],
            'sk_mutasi_file'                => ['required'],
            'ijasah_file'                   => ['required']
        ]);
        Pegawai::findOrFail($request->pegawai_id)->kenaikan_pangkat()->create([
            'biodata_file'                          => $this->storeFile($request, 'biodata_file'),
            'sk_pangkat_terakhir_file'              => $this->storeFile($request, 'sk_pangkat_terakhir_file'),
            'sk_mutasi_file'                        => $this->storeFile($request, 'sk_mutasi_file'),
            'sk_pengangkatan_file'                  => $this->storeFile($request, 'sk_pengangkatan_file'),
            'pembebasan_sementara_file'             => $this->storeFile($request, 'pembebasan_sementara_file'),
            'ijasah_file'                           => $this->storeFile($request, 'ijasah_file'),
            'surat_tanda_lulus_file'                => $this->storeFile($request, 'surat_tanda_lulus_file'),
            'uraian_tugas_file'                     => $this->storeFile($request, 'uraian_tugas_file'),
            'sertifikat_ujian_dinas_file'           => $this->storeFile($request, 'sertifikat_ujian_dinas_file'),
            'penilaian_prestasi_kerja_file'         => $this->storeFile($request, 'penilaian_prestasi_kerja_file'),
            'sasaran_kerja_pegawai_file'            => $this->storeFile($request, 'sasaran_kerja_pegawai_file'),
            'penilaian_capaian_sasaran_kerja_file'  => $this->storeFile($request, 'penilaian_capaian_sasaran_kerja_file'),
            'penilaian_perilaku_kerja_file'         => $this->storeFile($request, 'penilaian_perilaku_kerja_file'),
            'sk_jabatan_atasan_file'                => $this->storeFile($request, 'sk_jabatan_atasan_file'),
            'kartu_pegawai_file'                    => $this->storeFile($request, 'kartu_pegawai_file'),
            'nip_file'                              => $this->storeFile($request, 'nip_file'),
            'sk_cpns_file'                          => $this->storeFile($request, 'sk_cpns_file'),
            'sk_pns_file'                           => $this->storeFile($request, 'sk_pns_file'),
            'disetujui_kasubang'                    => $request->disetujui_kasubang == '1' ? true : false,
            'pangkat_lama'                          => $request->pangkat_lama,
            'pangkat_baru'                          => $request->pangkat_baru
        ]);

        alert()->success('Success','Berhasil dibuat.')->autoClose(5000);
        return redirect()->route('pegawai.kenaikan-pangkat.index');
    }

    public function edit (KenaikanPangkat $kenaikanPangkat): View
    {
        return view('dashboard.pegawai.usul_kp.ubah', [
            'kenaikan_pangkat'      => $kenaikanPangkat
        ]);
    }

    protected function updateFile ($request, $current_file_for_database, $value)
    {
        $file_name = $current_file_for_database;

        if ($request->file($value)) {

            if (Storage::disk('public')->exists($request->$value)) {
                Storage::disk('public')->delete($request->$value);
            }

            $file_name = $request->file($value)->store('dokument', 'public');
            return $file_name;
        }

        return $file_name;
    }

    public function update (KenaikanPangkatRequest $request, KenaikanPangkat $kenaikanPangkat): RedirectResponse
    {
        $kenaikanPangkat->update([
            'biodata_file'                          => $this->updateFile($request, $kenaikanPangkat->biodata_file, 'biodata_file'),
            'sk_pangkat_terakhir_file'              => $this->updateFile($request, $kenaikanPangkat->sk_pangkat_terakhir_file, 'sk_pangkat_terakhir_file'),
            'sk_mutasi_file'                        => $this->updateFile($request, $kenaikanPangkat->sk_mutasi_file, 'sk_mutasi_file'),
            'sk_pengangkatan_file'                  => $this->updateFile($request, $kenaikanPangkat->sk_pengangkatan_file, 'sk_pengangkatan_file'),
            'pembebasan_sementara_file'             => $this->updateFile($request, $kenaikanPangkat->pembebasan_sementara_file, 'pembebasan_sementara_file'),
            'ijasah_file'                           => $this->updateFile($request, $kenaikanPangkat->ijasah_file, 'ijasah_file'),
            'surat_tanda_lulus_file'                => $this->updateFile($request, $kenaikanPangkat->surat_tanda_lulus_file, 'surat_tanda_lulus_file'),
            'uraian_tugas_file'                     => $this->updateFile($request, $kenaikanPangkat->uraian_tugas_file, 'uraian_tugas_file'),
            'sertifikat_ujian_dinas_file'           => $this->updateFile($request, $kenaikanPangkat->sertifikat_ujian_dinas_file, 'sertifikat_ujian_dinas_file'),
            'penilaian_prestasi_kerja_file'         => $this->updateFile($request, $kenaikanPangkat->penilaian_prestasi_kerja_file, 'penilaian_prestasi_kerja_file'),
            'sasaran_kerja_pegawai_file'            => $this->updateFile($request, $kenaikanPangkat->sasaran_kerja_pegawai_file, 'sasaran_kerja_pegawai_file'),
            'penilaian_capaian_sasaran_kerja_file'  => $this->updateFile($request, $kenaikanPangkat->penilaian_capaian_sasaran_kerja_file, 'penilaian_capaian_sasaran_kerja_file'),
            'penilaian_perilaku_kerja_file'         => $this->updateFile($request, $kenaikanPangkat->penilaian_perilaku_kerja_file, 'penilaian_perilaku_kerja_file'),
            'sk_jabatan_atasan_file'                => $this->updateFile($request, $kenaikanPangkat->sk_jabatan_atasan_file, 'sk_jabatan_atasan_file'),
            'kartu_pegawai_file'                    => $this->updateFile($request, $kenaikanPangkat->kartu_pegawai_file, 'kartu_pegawai_file'),
            'nip_file'                              => $this->updateFile($request, $kenaikanPangkat->nip_file, 'nip_file'),
            'sk_cpns_file'                          => $this->updateFile($request, $kenaikanPangkat->sk_cpns_file, 'sk_cpns_file'),
            'sk_pns_file'                           => $this->updateFile($request, $kenaikanPangkat->sk_pns_file, 'sk_pns_file'),
            'disetujui_kasubang'                    => $request->disetujui_kasubang == '1' ? true : false,
            'pangkat_lama'                          => $kenaikanPangkat->pangkat_lama,
            'pangkat_baru'                          => $kenaikanPangkat->pangkat_baru
        ]);

        alert()->success('Success','Berhasil diperbaharui.')->autoClose(5000);
        return redirect()->route('pegawai.kenaikan-pangkat.index');
    }

    protected function deleteFile ($property)
    {
        if ($property !== null) {
            if (Storage::disk('public')->exists($property)) {
                Storage::disk('public')->delete($property);
            }
        }
    }

    public function destroy (KenaikanPangkat $kenaikanPangkat): RedirectResponse
    {
        $this->deleteFile($kenaikanPangkat->biodata_file);
        $this->deleteFile($kenaikanPangkat->sk_pangkat_terakhir_file);
        $this->deleteFile($kenaikanPangkat->sk_mutasi_file);
        $this->deleteFile($kenaikanPangkat->sk_pengangkatan_file);
        $this->deleteFile($kenaikanPangkat->pembebasan_sementara_file);
        $this->deleteFile($kenaikanPangkat->ijasah_file);
        $this->deleteFile($kenaikanPangkat->surat_tanda_lulus_file);
        $this->deleteFile($kenaikanPangkat->uraian_tugas_file);
        $this->deleteFile($kenaikanPangkat->sertifikat_ujian_dinas_file);
        $this->deleteFile($kenaikanPangkat->penilaian_prestasi_kerja_file);
        $this->deleteFile($kenaikanPangkat->sasaran_kerja_pegawai_file);
        $this->deleteFile($kenaikanPangkat->penilaian_capaian_sasaran_kerja_file);
        $this->deleteFile($kenaikanPangkat->penilaian_perilaku_kerja_file);
        $this->deleteFile($kenaikanPangkat->sk_jabatan_atasan_file);
        $this->deleteFile($kenaikanPangkat->kartu_pegawai_file);
        $this->deleteFile($kenaikanPangkat->nip_file);
        $this->deleteFile($kenaikanPangkat->sk_cpns_file);
        $this->deleteFile($kenaikanPangkat->sk_pns_file);

        $kenaikanPangkat->delete();
        alert()->success('Success','Berhasil dihapus.')->autoClose(5000);
        return redirect()->route('pegawai.kenaikan-pangkat.index');
    }

    public function download ($file)
    {
        $file = Crypt::decryptString($file);
        $filePath = Storage::disk('public')->path($file);
        return response()->download($filePath, 'nama_file.pdf');
    }
}
