<?php

namespace App\Traits;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;

trait FormatTanggal
{
    protected function tanggalBuat(): Attribute
    {
        return Attribute::make(
            get: fn () => Carbon::parse($this->created_at)->format('d M Y'),
        );
    }

    protected function tanggalPerbaharui(): Attribute
    {
        return Attribute::make(
            get: fn () => Carbon::parse($this->updated_at)->format('d M Y'),
        );
    }
}
