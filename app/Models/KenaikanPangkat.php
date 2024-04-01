<?php

namespace App\Models;

use App\Traits\FormatTanggal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class KenaikanPangkat extends Model
{
    use HasFactory, FormatTanggal;

    protected $table = 'kenaikan_pangkat';

    protected $fillable = [
        'biodata_file',
        'sk_pangkat_terakhir_file',
        'sk_mutasi_file',
        'sk_pengangkatan_file',
        'pembebasan_sementara_file',
        'ijasah_file',
        'surat_tanda_lulus_file',
        'uraian_tugas_file',
        'sertifikat_ujian_dinas_file',
        'penilaian_prestasi_kerja_file',
        'sasaran_kerja_pegawai_file',
        'penilaian_capaian_sasaran_kerja_file',
        'penilaian_perilaku_kerja_file',
        'sk_jabatan_atasan_file',
        'kartu_pegawai_file',
        'nip_file',
        'sk_cpns_file',
        'sk_pns_file',

        'pangkat_lama',
        'pangkat_baru',
        'disetujui_staf_pegawai'
    ];

    // model kenaikan_pangkat
    public function pegawai(): BelongsToMany
    {
        return $this->belongsToMany(Pegawai::class, 'kenaikan_pangkat_pegawai');
    }
}
