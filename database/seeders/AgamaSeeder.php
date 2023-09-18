<?php

namespace Database\Seeders;

use App\Models\Agama;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Agama::create([
            'nama'  => 'Kristen protestan'
        ]);
        Agama::create([
            'nama'  => 'Katholik'
        ]);
        Agama::create([
            'nama'  => 'Islam'
        ]);
        Agama::create([
            'nama'  => 'Hinduh'
        ]);
        Agama::create([
            'nama'  => 'Budha'
        ]);
        Agama::create([
            'nama'  => 'Konghuchu'
        ]);
    }
}
