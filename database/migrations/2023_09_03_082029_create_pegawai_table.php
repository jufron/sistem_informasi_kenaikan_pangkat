<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('nip', 20)->unique()->nullable();
            $table->string('nama_lengkap', 30);
            $table->string('jenis_kelamin', 11);
            $table->unsignedBigInteger('agama_id');
            $table->foreign('agama_id')->references('id')->on('agama');
            $table->string('alamat', 100);
            $table->string('tempat_lahir', 40);
            $table->date('tanggal_lahir');
            $table->string('status_perkawinan', 20);
            $table->string('pendidikan_terakhir', 20);
            $table->string('gelar', 10)->nullable();
            $table->date('tanggal_masuk');
            $table->unsignedBigInteger('jabatan_id');
            $table->foreign('jabatan_id')->references('id')->on('jabatan');
            $table->unsignedBigInteger('golongan_id');
            $table->foreign('golongan_id')->references('id')->on('golongan');
            $table->unsignedBigInteger('unit_kerja_id');
            $table->foreign('unit_kerja_id')->references('id')->on('unit_kerja');
            $table->string('nomor_telepon', 13);
            $table->string('email', 100)->unique()->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai');
    }
};
