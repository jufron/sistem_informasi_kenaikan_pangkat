<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'          => 'superadmin',
            'email'         => 'superadmin@gmail.com',
            'deskripsi'     => 'adalah admin super yang memiliki keunggulan dibanding yang lain',
            'password'      => bcrypt('superadmin'),
            'rolle'         => 'super_admin',
            'avatar'        => 'avatar-5.png'
        ]);
        User::create([
            'name'          => 'sekertaris',
            'email'         => 'sekertaris@gmail.com',
            'deskripsi'     => 'tugas sekertaris untuk melakukan pengecekan dan penyetujuan kenaikan pangkat',
            'password'      => bcrypt('sekertaris'),
            'rolle'         => 'sekertaris',
            'avatar'        => 'avatar-5.png'
        ]);
        User::create([
            'name'          => 'kasubang',
            'email'         => 'kasubang@gmail.com',
            'deskripsi'     => 'tugas kasubang untuk melakukan penginputan data pegawai dan berkas pengajuan kenaikan pangkat',
            'password'      => bcrypt('kasubang'),
            'rolle'         => 'kasubang',
            'avatar'        => 'avatar-5.png'
        ]);
    }
}
