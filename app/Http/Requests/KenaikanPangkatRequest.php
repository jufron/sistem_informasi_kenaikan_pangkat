<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class KenaikanPangkatRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'biodata_file'                          => ['mimes:pdf', 'max:2048'],
            'sk_pangkat_terakhir_file'              => ['mimes:pdf', 'max:2048'],
            'sk_mutasi_file'                        => ['mimes:pdf', 'max:2048'],
            'sk_pengangkatan_file'                  => ['nullable', 'mimes:pdf', 'max:2048'],
            'pembebasan_sementara_file'             => ['nullable', 'mimes:pdf', 'max:2048'],
            'ijasah_file'                           => ['mimes:pdf', 'max:2048'],
            'surat_tanda_lulus_file'                => ['nullable', 'mimes:pdf', 'max:2048'],
            'uraian_tugas_file'                     => ['nullable', 'mimes:pdf', 'max:2048'],
            'sertifikat_ujian_dinas_file'           => ['nullable', 'mimes:pdf', 'max:2048'],
            'penilaian_prestasi_kerja_file'         => ['nullable', 'mimes:pdf', 'max:2048'],
            'sasaran_kerja_pegawai_file'            => ['nullable', 'mimes:pdf', 'max:2048'],
            'penilaian_capaian_sasaran_kerja_file'  => ['nullable', 'mimes:pdf', 'max:2048'],
            'penilaian_perilaku_kerja_file'         => ['nullable', 'mimes:pdf', 'max:2048'],
            'sk_jabatan_atasan_file'                => ['nullable', 'mimes:pdf', 'max:2048'],
            'kartu_pegawai_file'                    => ['nullable', 'mimes:pdf', 'max:2048'],
            'nip_file'                              => ['nullable', 'mimes:pdf', 'max:2048'],
            'sk_cpns_file'                          => ['nullable', 'mimes:pdf', 'max:2048'],
            'sk_pns_file'                           => ['nullable', 'mimes:pdf', 'max:2048'],

            'pangkat_lama'                          => ['required', 'max:50'],
            'pangkat_baru'                          => ['required', 'max:50'],
            'disetujui_kasubang'                    => ['nullable', 'boolean'],
            'disetujui_sekertaris'                  => ['nullable', 'boolean'],
            'disetujui_atasan'                      => ['nullable', 'boolean']
        ];
    }
}
