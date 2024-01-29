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
        Schema::create('alternatifs', function (Blueprint $table) {
            $table->id();
            $table->string('asal_sekolah');
            $table->integer('tahun_lulus');
            $table->string('jenis_beasiswa');
            $table->string('jurusaan_pendaftaran');

            $table->string('nama_siswa');
            $table->string('nisn');
            $table->string('no_telp');
            $table->date('tgl_lahir');
            $table->string('agama');
            $table->string('alamat');
            $table->string('jurusan_sekolah');
            $table->integer('ranking_semester_4');
            $table->integer('rangking_semester_5');
            $table->integer('rangking_semester_6');
            $table->float('nilai_un');
            $table->string('prestasi');

            $table->string('status_ayah');
            $table->string('hubunga_ayah');
            $table->string('pekerjan_ayah');
            $table->integer('penghasilan_ayah');
            $table->integer('jumlah_tanggungan');
            $table->string('no_hp');
            $table->string('nama_ibu');
            $table->string('status_ibu');
            $table->string('pekerjan_ibu');
            $table->integer('penghasilan_ibu');

            $table->string('kepemilikan_rumah');
            $table->integer('daya_listrik');
            $table->float('luas_tanah');
            $table->float('luas_bangunan');
            $table->string('bahan_atap');
            $table->string('bahan_lantai');
            $table->string('bahan_tembok');
            $table->integer('kamar_mandi');
            $table->string('sumber_air_utama');

            $table->string('rencana_tinggal');
            $table->string('dukungan_keluarga');
            $table->string('transportasi_harian');
            $table->string('berkas_Pendaftaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alternatifs');
    }
};
