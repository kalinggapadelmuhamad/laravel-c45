<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;

    protected $fillable = [
        'asal_sekolah',
        'tahun_lulus',
        'jenis_beasiswa',
        'jurusaan_pendaftaran',

        'nama_siswa',
        'nisn',
        'no_telp',
        'tgl_lahir',
        'agama',
        'alamat',
        'jurusan_sekolah',
        'rangking_semester_4',
        'rangking_semester_5',
        'rangking_semester_6',
        'nilai_un',
        'prestasi',

        'status_ayah',
        'hubunga_ayah',
        'pekerjan_ayah',
        'penghasilan_ayah',
        'jumlah_tanggungan',
        'no_hp',
        'nama_ibu',
        'status_ibu',
        'pekerjan_ibu',
        'penghasilan_ibu',

        'kepemilikan_rumah',
        'daya_listrik',
        'luas_tanah',
        'luas_bangunan',
        'bahan_atap',
        'bahan_lantai',
        'bahan_tembok',
        'kamar_mandi',
        'sumber_air_utama',

        'rencana_tinggal',
        'dukungan_keluarga',
        'transportasi_harian',
        'berkas_Pendaftaran',
    ];
}
