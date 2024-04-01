<?php

namespace App\Models;

use App\Traits\FormatTanggal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CatatanUsulan extends Model
{
    use HasFactory, FormatTanggal;

    protected $table = 'catatan_usulan';

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
