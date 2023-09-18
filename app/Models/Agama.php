<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Agama extends Model
{
    use HasFactory;

    protected $table = 'agama';

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
