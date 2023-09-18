<?php

namespace App\Http\Requests;

use App\Models\Pegawai;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class PegawaiRequest extends FormRequest
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
            'nip'                   => ['nullable', 'numeric', 'digits_between:5,20'],
            'nama_lengkap'          => ['required', 'string', 'max:30'],
            'jenis_kelamin'         => ['required', 'max:11', Rule::in(['laki-laki', 'perempuan'])],
            'agama_id'              => ['required', 'exists:agama,id'],
            'alamat'                => ['required', 'string', 'max:100'],
            'tempat_lahir'          => ['required', 'string', 'max:40'],
            'tanggal_lahir'         => ['required', 'date'],
            'status_perkawinan'     => ['required', Rule::in(['Belum menikah', 'Sudah menikah', 'Janda', 'Duda'])],
            'pendidikan_terakhir'   => ['required', 'max:20', Rule::in(['SMP', 'SMA', "D1", "D2", "D3", "D4", 'S1', 'S2', 'S3'])],
            'gelar'                 => ['nullable', 'min:3', 'max:10'],
            'tanggal_masuk'         => ['required'],
            'jabatan_id'            => ['required', 'exists:jabatan,id'],
            'golongan_id'           => ['required', 'exists:golongan,id'],
            'unit_kerja_id'         => ['required', 'exists:unit_kerja,id'],
            'nomor_telepon'         => ['required', 'max:13'],
            'email'                 => ['required', 'email', 'max:100'],
            'foto'                  => ['nullable', 'mimes:jpeg,jpg,png', 'image', 'max:1024']
        ];
    }

    public function createData ($fileName)
    {
        Pegawai::create([
            'nip'                   => $this->nip,
            'nama_lengkap'          => $this->nama_lengkap,
            'jenis_kelamin'         => $this->jenis_kelamin,
            'agama_id'              => $this->agama_id,
            'alamat'                => $this->alamat,
            'tempat_lahir'          => $this->tempat_lahir,
            'tanggal_lahir'         => $this->tanggal_lahir,
            'status_perkawinan'     => $this->status_perkawinan,
            'pendidikan_terakhir'   => $this->pendidikan_terakhir,
            'gelar'                 => $this->gelar,
            'tanggal_masuk'         => $this->tanggal_lahir,
            'jabatan_id'            => $this->jabatan_id,
            'golongan_id'           => $this->golongan_id,
            'unit_kerja_id'         => $this->unit_kerja_id,
            'nomor_telepon'         => $this->nomor_telepon,
            'email'                 => $this->email,
            'foto'                  => $fileName
        ]);
    }

    public function updateData ($model, $file_name)
    {
        $model->update([
            'nip'                   => $this->nip,
            'nama_lengkap'          => $this->nama_lengkap,
            'jenis_kelamin'         => $this->jenis_kelamin,
            'agama_id'              => $this->agama_id,
            'alamat'                => $this->alamat,
            'tempat_lahir'          => $this->tempat_lahir,
            'tanggal_lahir'         => $this->tanggal_lahir,
            'status_perkawinan'     => $this->status_perkawinan,
            'pendidikan_terakhir'   => $this->pendidikan_terakhir,
            'gelar'                 => $this->gelar,
            'tanggal_masuk'         => $this->tanggal_lahir,
            'jabatan_id'            => $this->jabatan_id,
            'golongan_id'           => $this->golongan_id,
            'unit_kerja_id'         => $this->unit_kerja_id,
            'nomor_telepon'         => $this->nomor_telepon,
            'email'                 => $this->email,
            'foto'                  => $file_name
        ]);
    }
}
