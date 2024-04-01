<?php

namespace App\Models;

use App\Traits\FormatTanggal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pegawai extends Model
{
    use HasFactory, FormatTanggal;

    protected $table = 'pegawai';

    protected $fillable = [
        'nip',
        'nama_lengkap',
        'jenis_kelamin',
        'agama_id',
        'alamat',
        'tempat_lahir',
        'tanggal_lahir',
        'status_perkawinan',
        'pendidikan_terakhir',
        'gelar',
        'tanggal_masuk',
        'jabatan_id',
        'golongan_id',
        'unit_kerja_id',
        'nomor_telepon',
        'email',
        'foto'
    ];

    protected function tanggalLahirFormat(): Attribute
    {
        return Attribute::make(
            get: fn () => Carbon::parse($this->tanggal_lahir)->format('d M Y'),
        );
    }

    protected function tanggalMasukFormat(): Attribute
    {
        return Attribute::make(
            get: fn () => Carbon::parse($this->tanggal_masuk)->format('d M Y'),
        );
    }

    public function agama(): BelongsTo
    {
        return $this->belongsTo(Agama::class);
    }

    public function jabatan(): BelongsTo
    {
        return $this->belongsTo(Jabatan::class);
    }

    public function golongan(): BelongsTo
    {
        return $this->belongsTo(Golongan::class);
    }

    public function unitKerja(): BelongsTo
    {
        return $this->belongsTo(UnitKerja::class);
    }

    public function kenaikan_pangkat(): BelongsToMany
    {
        return $this->belongsToMany(KenaikanPangkat::class, 'kenaikan_pangkat_pegawai')->withTimestamps();
    }

    public function catatanUsulan (): HasMany
    {
        return $this->hasMany(CatatanUsulan::class);
    }

    public function disposisi (): HasMany
    {
        return $this->hasMany(Disposisi::class);
    }

    public function sk_kenaikan_pangkat (): HasMany
    {
        return $this->hasMany(SkKenaikanPangkat::class);
    }
}
