<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GolonganRequest extends FormRequest
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
            'nama' => [
                'required',                    // Harus diisi
                'unique:jabatan,nama',         // Harus unik di dalam tabel 'jabatan' kolom 'nama'
               'regex:/^[A-Za-z0-9\s]+$/'   // Hanya huruf, angka, dan spasi diizinkan
            ]
        ];
    }
}
