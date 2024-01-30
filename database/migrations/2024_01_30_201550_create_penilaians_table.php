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
        Schema::create('penilaians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alternatif_id')->constrained('alternatifs')->cascadeOnDelete();
            $table->string('rangking_semester_4');
            $table->string('rangking_semester_5');
            $table->string('rangking_semester_6');
            $table->string('nilai_un');
            $table->string('prestasi');

            $table->string('penghasilan_ayah');
            $table->string('jumlah_tanggungan');
            $table->string('penghasilan_ibu');

            $table->string('kepemilikan_rumah');
            $table->string('daya_listrik');
            $table->string('luas_tanah');
            $table->string('luas_bangunan');
            $table->string('bahan_atap');
            $table->string('bahan_lantai');
            $table->string('bahan_tembok');
            $table->string('sumber_air_utama');
            $table->string('hasil_keputusan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penilaians');
    }
};
