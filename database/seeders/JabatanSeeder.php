<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = collect(['PENATA MUDA TINGKAT 1', 'PENATA MUDA', 'PENGATUR TINGKAT 1', 'PENGATUR', 'PENGATUR MUDA TINGKAT 1', 'PENGATUR MUDA', 'JURU MUDA TINGKAT 1']);
      
        $data->each(function ($d) {
            Jabatan::create([
                'nama'      => $d
            ]);
        });

    }
}
