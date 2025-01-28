<?php

namespace Database\Seeders;

use App\Models\UnitKerja;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            ['nama' => 'Unit Kerja 1'],
            ['nama' => 'Unit Kerja 2'],
            ['nama' => 'Unit Kerja 3'],
            ['nama' => 'Unit Kerja 4'],
            ['nama' => 'Unit Kerja 5'],
        ])->each( function ($item) {
            UnitKerja::create($item);
        });
    }
}
