<?php

namespace App\Http\Requests;

use App\Models\SkKenaikanPangkat;
use Illuminate\Foundation\Http\FormRequest;

class SkKenaikanPangkatRequest extends FormRequest
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
            'pegawai_id'                    => ['required', 'exists:pegawai,id'],
            'pangkat_lama'                  => ['required', 'max:80', 'min:5'],
            'pangkat_baru'                  => ['required', 'max:80', 'min:5'],
            'catatan'                       => ['nullable'],
            "sk_kenaikan_pangkat_file"      => ['mimetypes:application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'max:500']
        ];
    }

    public function createData ($fileName): Void
    {
        SkKenaikanPangkat::create([
            'pegawai_id'            => $this->pegawai_id,
            'pangkat_lama'          => $this->pangkat_lama,
            'pangkat_baru'          => $this->pangkat_baru,
            'catatan'               => $this->catatan,
            'file'                  => $fileName
        ]);
    }

    public function updateData ($id, $fileName): Void
    {
        SkKenaikanPangkat::findOrFail($id)->update([
            'pegawai_id'            => $this->pegawai_id,
            'pangkat_lama'          => $this->pangkat_lama,
            'pangkat_baru'          => $this->pangkat_baru,
            'catatan'               => $this->catatan,
            'file'                  => $fileName
        ]);
    }
}
