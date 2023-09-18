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
        Schema::create('kenaikan_pangkat_pegawai', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kenaikan_pangkat_id');
            $table->unsignedBigInteger('pegawai_id');

            $table->foreign('kenaikan_pangkat_id')
                  ->references('id')
                  ->on('kenaikan_pangkat')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();
            $table->foreign('pegawai_id')
                  ->references('id')
                  ->on('pegawai')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kenaikan_pangkat_pegawai');
    }
};
