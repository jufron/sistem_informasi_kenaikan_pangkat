<?php

namespace App\Models;

use App\Traits\FormatTanggal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    use HasFactory, FormatTanggal;

    protected $table = 'golongan';

    protected $fillable = [
        'nama'
    ];

    public function toArray()
    {
        return [
            'nama' => $this->nama,
        ];
    }

    public function pegawai(): HasMany
    {
        return $this->hasMany(Pegawai::class);
    }
}
