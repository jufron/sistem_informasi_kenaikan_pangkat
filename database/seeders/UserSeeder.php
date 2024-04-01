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
            'name'          => 'bkd',
            'email'         => 'bkd@gmail.com',
            'deskripsi'     => 'tugas bkd untuk melakukan pengecekan dan penyetujuan kenaikan pangkat',
            'password'      => bcrypt('bkd'),
            'rolle'         => 'bkd',
            'avatar'        => 'avatar-5.png'
        ]);
        User::create([
            'name'          => 'pimpinan',
            'email'         => 'pimpinan@gmail.com',
            'deskripsi'     => 'pimpinan adalah yang memiliki keunggulan dibanding yang lain',
            'password'      => bcrypt('pimpinan'),
            'rolle'         => 'pimpinan',
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
            'name'          => 'kasubag',
            'email'         => 'kasubag@gmail.com',
            'deskripsi'     => 'tugas kasubag untuk melakukan penginputan data pegawai dan berkas pengajuan kenaikan pangkat',
            'password'      => bcrypt('kasubag'),
            'rolle'         => 'kasubag',
            'avatar'        => 'avatar-5.png'
        ]);
        User::create([
            'name'          => 'pegawai',
            'email'         => 'pegawai@gmail.com',
            'deskripsi'     => 'tugas pegawai untuk melakukan penginputan data pegawai dan berkas pengajuan kenaikan pangkat',
            'password'      => bcrypt('pegawai'),
            'rolle'         => 'pegawai',
            'avatar'        => 'avatar-5.png'
        ]);
        User::create([
            'name'          => 'staf_pegawai',
            'email'         => 'staf_pegawai@gmail.com',
            'deskripsi'     => 'tugas pegawai untuk melakukan penginputan data pegawai dan berkas pengajuan kenaikan pangkat',
            'password'      => bcrypt('staf_pegawai'),
            'rolle'         => 'staf_pegawai',
            'avatar'        => 'avatar-5.png'
        ]);
    }
}
