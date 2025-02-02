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
        Schema::create('sk_kenaikan_pangkat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pegawai_id');
            $table->foreign('pegawai_id')->references('id')
                                         ->on('pegawai')
                                         ->cascadeOnDelete()
                                         ->cascadeOnUpdate();
            $table->string('pangkat_lama', 80);
            $table->string('pangkat_baru', 80);
            $table->text('catatan')->nullable();
            $table->string('file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sk_kenaikan_pangkat');
    }
};
