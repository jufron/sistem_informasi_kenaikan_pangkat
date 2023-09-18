<?php

namespace Database\Factories;

use App\Models\Agama;
use App\Models\Golongan;
use App\Models\Jabatan;
use App\Models\UnitKerja;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pegawai>
 */
class PegawaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nip'                   => fake()->unique()->randomNumber(8, true),
            'nama_lengkap'          => fake()->name(),
            'jenis_kelamin'         => fake()->randomElement(['laki-laki', 'perempuan']),
            'agama_id'              => Agama::inRandomOrder()->value('id'),
            'alamat'                => fake()->address(),
            'tempat_lahir'          => fake()->city(),
            'tanggal_lahir'         => fake()->date(),
            'status_perkawinan'     => fake()->randomElement(['Belum menikah', 'Sudah menikah', 'Janda', 'Duda']),
            'pendidikan_terakhir'   => fake()->randomElement(['SMP', 'SMA', "D1", "D2", "D3", "D4", 'S1', 'S2', 'S3']),
            'gelar'                 => fake()->randomElement(['S.Ip', 'S.Kom', 'M.A', 'Ph.D']),
            'tanggal_masuk'         => fake()->date(),
            'jabatan_id'            => Jabatan::inRandomOrder()->value('id'),
            'golongan_id'           => Golongan::inRandomOrder()->value('id'),
            'unit_kerja_id'         => UnitKerja::inRandomOrder()->value('id'),
            'nomor_telepon'         => fake()->e164PhoneNumber(),
            'email'                 => fake()->unique()->safeEmail(),
            'foto'                  => 'foto/avatar-3.png',
        ];
    }
}
