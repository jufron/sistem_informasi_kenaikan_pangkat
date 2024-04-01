<?php

namespace App\Http\Requests;

use App\Models\Disposisi;
use Illuminate\Foundation\Http\FormRequest;

class DisposisiRequest extends FormRequest
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
            'pegawai_id'            => ['required', 'exists:pegawai,id'],
            'pangkat_lama'          => ['required', 'max:80', 'min:5'],
            'pangkat_baru'          => ['required', 'max:80', 'min:5'],
            'catatan'               => ['nullable'],
            "disposisi_file"        => ['mimetypes:application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'max:500']
        ];
    }

    public function createData ($fileName): Void
    {
        Disposisi::create([
            'pegawai_id'            => $this->pegawai_id,
            'pangkat_lama'          => $this->pangkat_lama,
            'pangkat_baru'          => $this->pangkat_baru,
            'catatan'               => $this->catatan,
            'file'                  => $fileName
        ]);
    }

    public function updateData ($id, $fileName): Void
    {
        Disposisi::findOrFail($id)->update([
            'pegawai_id'            => $this->pegawai_id,
            'pangkat_lama'          => $this->pangkat_lama,
            'pangkat_baru'          => $this->pangkat_baru,
            'catatan'               => $this->catatan,
            'file'                  => $fileName
        ]);
    }
}
