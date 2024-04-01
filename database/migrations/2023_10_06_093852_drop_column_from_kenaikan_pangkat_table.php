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
        Schema::table('kenaikan_pangkat', function (Blueprint $table) {
            $table->dropColumn('disetujui_kasubang');
            $table->dropColumn('disetujui_sekertaris');
            $table->dropColumn('disetujui_atasan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kenaikan_pangkat', function (Blueprint $table) {
            $table->boolean('disetujui_kasubang')->default(false);
            $table->boolean('disetujui_sekertaris')->default(false);
            $table->boolean('disetujui_atasan')->default(false);
        });
    }
};
