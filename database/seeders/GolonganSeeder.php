<?php

namespace Database\Seeders;

use App\Models\Golongan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GolonganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Golongan::create([
            'nama'  => 'PNS golongan I'
        ]);
        Golongan::create([
            'nama'  => 'PNS golongan II'
        ]);
        Golongan::create([
            'nama'  => 'PNS golongan III'
        ]);
        Golongan::create([
            'nama'  => 'PNS golongan IV'
        ]);
        Golongan::create([
            'nama'  => 'ADS gologan I'
        ]);
        Golongan::create([
            'nama'  => 'ADS gologan II'
        ]);
        Golongan::create([
            'nama'  => 'ADS gologan III'
        ]);
    }
}
