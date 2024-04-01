<?php

namespace App\Models;

use App\Traits\FormatTanggal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkKenaikanPangkat extends Model
{
    use HasFactory, FormatTanggal;

    protected $table = 'sk_kenaikan_pangkat';

    protected $fillable = [
        'pegawai_id',
        'pangkat_lama',
        'pangkat_baru',
        'catatan',
        'file'
    ];

    public function pegawai ()
    {
        return $this->belongsTo(Pegawai::class);
    }
}
