<?php

use App\View\Components\table;
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
        Schema::create('kenaikan_pangkat', function (Blueprint $table) {
            $table->id();
            $table->string('biodata_file')->nullable();
            $table->string('sk_pangkat_terakhir_file')->nullable();
            $table->string('sk_mutasi_file')->nullable();
            $table->string('sk_pengangkatan_file')->nullable();
            $table->string('pembebasan_sementara_file')->nullable();
            $table->string('ijasah_file')->nullable();
            $table->string('surat_tanda_lulus_file')->nullable();
            $table->string('uraian_tugas_file')->nullable();
            $table->string('sertifikat_ujian_dinas_file')->nullable();
            $table->string('penilaian_prestasi_kerja_file')->nullable();
            $table->string('sasaran_kerja_pegawai_file')->nullable();
            $table->string('penilaian_capaian_sasaran_kerja_file')->nullable();
            $table->string('penilaian_perilaku_kerja_file')->nullable();
            $table->string('sk_jabatan_atasan_file')->nullable();
            $table->string('kartu_pegawai_file')->nullable();
            $table->string('nip_file')->nullable();
            $table->string('sk_cpns_file')->nullable();
            $table->string('sk_pns_file')->nullable();
            $table->string('pangkat_lama', 50);
            $table->string('pangkat_baru', 50);
            $table->boolean('disetujui_kasubang')->default(false);
            $table->boolean('disetujui_sekertaris')->default(false);
            $table->boolean('disetujui_atasan')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kenaikan_pangkat');
    }
};
