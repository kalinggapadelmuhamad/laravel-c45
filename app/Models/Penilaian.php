<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;

    protected $fillable = [
        'alternatif_id',
        'rangking_semester_4',
        'rangking_semester_5',
        'rangking_semester_6',
        'nilai_un',
        'prestasi',

        'penghasilan_ayah',
        'jumlah_tanggungan',
        'penghasilan_ibu',

        'kepemilikan_rumah',
        'daya_listrik',
        'luas_tanah',
        'luas_bangunan',
        'bahan_atap',
        'bahan_lantai',
        'bahan_tembok',
        'sumber_air_utama',
        'hasil_keputusan',
    ];

    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class);
    }
}
