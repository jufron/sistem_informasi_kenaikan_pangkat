<?php

namespace App\Models;

use App\Traits\FormatTanggal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

class Jabatan extends Model
{
    use HasFactory, FormatTanggal;

    protected $table = 'jabatan';

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

    protected function tanggalBuat(): Attribute
    {
        return Attribute::make(
            get: fn () => Carbon::parse($this->created_at)->format('d M Y'),
        );
    }

}
