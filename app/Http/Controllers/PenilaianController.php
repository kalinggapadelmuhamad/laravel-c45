<?php

namespace App\Http\Controllers;

use Algorithm\C45;
use Algorithm\C45\DataInput;
use App\Models\Alternatif;
use App\Models\DataSet;
use App\Models\Penilaian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PenilaianController extends Controller
{
    public function index(Request $request)
    {
        $halaman = 'penilaian';

        $keyword = $request->input('name');
        $alternatifs = Alternatif::when($request->name, function ($query, $name) {
            $query->where('nama_siswa', 'like', '%' . $name . '%');
        })->latest()->paginate(10);

        // masukn key name kedalam array users
        $alternatifs->appends(['name' => $keyword]);

        // arahkan ke file pages/users/index.blade.php
        return view('pages.penilaian.index', compact('halaman', 'alternatifs'));
    }

    public function show(Alternatif $penilaian)
    {
        $halaman = 'penilaian';
        return view('pages.penilaian.penilaian', compact('halaman', 'penilaian'));
    }

    public function update(Request $request, Alternatif $penilaian)
    {

        $request->validate([
            'nilai_prestasi' => 'required'
        ]);

        // klasifikasi
        if ($penilaian->rangking_semester_4 >= 1 && $penilaian->rangking_semester_4 <= 3) {
            $rangking_semester_4 = 'Tinggi';
        } else if ($penilaian->rangking_semester_4 >= 4 && $penilaian->rangking_semester_4 <= 6) {
            $rangking_semester_4 = 'Sedang';
        } else {
            $rangking_semester_4 = 'Rendah';
        }

        if ($penilaian->rangking_semester_5 >= 1 && $penilaian->rangking_semester_5 <= 3) {
            $rangking_semester_5 = 'Tinggi';
        } else if ($penilaian->rangking_semester_5 >= 4 && $penilaian->rangking_semester_5 <= 6) {
            $rangking_semester_5 = 'Sedang';
        } else {
            $rangking_semester_5 = 'Rendah';
        }

        if ($penilaian->rangking_semester_6 >= 1 && $penilaian->rangking_semester_6 <= 3) {
            $rangking_semester_6 = 'Tinggi';
        } else if ($penilaian->rangking_semester_6 >= 4 && $penilaian->rangking_semester_6 <= 6) {
            $rangking_semester_6 = 'Sedang';
        } else {
            $rangking_semester_6 = 'Rendah';
        }

        if ($penilaian->nilai_un >= 85 && $penilaian->nilai_un <= 100) {
            $nilai_un = 'Tinggi';
        } else if ($penilaian->nilai_un >= 70 && $penilaian->nilai_un <= 84) {
            $nilai_un = 'Sedang';
        } else {
            $nilai_un = 'Rendah';
        }

        if ($penilaian->penghasilan_ayah >= 0 && $penilaian->penghasilan_ayah <= 1500000) {
            $penghasilan_ayah = 'Tinggi';
        } else if ($penilaian->penghasilan_ayah >= 1500001 && $penilaian->penghasilan_ayah <= 2000000) {
            $penghasilan_ayah = 'Sedang';
        } else {
            $penghasilan_ayah = 'Rendah';
        }

        if ($penilaian->jumlah_tanggungan > 3) {
            $jumlah_tanggungan = 'Tinggi';
        } else if ($penilaian->jumlah_tanggungan >= 2 && $penilaian->jumlah_tanggungan <= 3) {
            $jumlah_tanggungan = 'Sedang';
        } else {
            $jumlah_tanggungan = 'Rendah';
        }

        if ($penilaian->penghasilan_ibu >= 0 && $penilaian->penghasilan_ibu <= 1500000) {
            $penghasilan_ibu = 'Tinggi';
        } else if ($penilaian->penghasilan_ibu >= 1500001 && $penilaian->penghasilan_ibu <= 2000000) {
            $penghasilan_ibu = 'Sedang';
        } else {
            $penghasilan_ibu = 'Rendah';
        }

        if ($penilaian->kepemilikan_rumah == 'Menumpang') {
            $kepemilikan_rumah = 'Tinggi';
        } else if ($penilaian->kepemilikan_rumah == 'Sewa') {
            $kepemilikan_rumah = 'Sedang';
        } else {
            $kepemilikan_rumah = 'Rendah';
        }

        if ($penilaian->daya_listrik == '450') {
            $daya_listrik = 'Tinggi';
        } else if ($penilaian->daya_listrik == '900') {
            $daya_listrik = 'Sedang';
        } else {
            $daya_listrik = 'Rendah';
        }

        if ($penilaian->luas_tanah == '0 - 100 m2') {
            $luas_tanah = 'Tinggi';
        } else if ($penilaian->luas_tanah == '101 - 200 m2') {
            $luas_tanah = 'Sedang';
        } else {
            $luas_tanah = 'Rendah';
        }

        if ($penilaian->luas_bangunan == '0 - 100 m2') {
            $luas_bangunan = 'Tinggi';
        } else if ($penilaian->luas_bangunan == '101 - 200 m2') {
            $luas_bangunan = 'Sedang';
        } else {
            $luas_bangunan = 'Rendah';
        }

        if ($penilaian->bahan_atap == 'Nipah') {
            $bahan_atap = 'Tinggi';
        } else if ($penilaian->bahan_atap == 'Seng/Asbes') {
            $bahan_atap = 'Sedang';
        } else {
            $bahan_atap = 'Rendah';
        }

        if ($penilaian->bahan_lantai == 'Tanah') {
            $bahan_lantai = 'Tinggi';
        } else if ($penilaian->bahan_lantai == 'Semen') {
            $bahan_lantai = 'Sedang';
        } else {
            $bahan_lantai = 'Rendah';
        }


        if ($penilaian->bahan_tembok == 'Bambu') {
            $bahan_tembok = 'Tinggi';
        } else if ($penilaian->bahan_tembok == 'Kayu') {
            $bahan_tembok = 'Sedang';
        } else {
            $bahan_tembok = 'Rendah';
        }

        if ($penilaian->sumber_air_utama == 'Sumur') {
            $sumber_air_utama = 'Tinggi';
        } else if ($penilaian->sumber_air_utama == 'Pompa Air') {
            $sumber_air_utama = 'Sedang';
        } else {
            $sumber_air_utama = 'Rendah';
        }

        // clasify
        $c45 = new C45();
        $input = new DataInput();
        $data = DataSet::select(
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
            'keputusan'
        )->get()->toArray();


        // Initialize Data
        $input->setData($data); // Set data from array
        $input->setAttributes(array(
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
            'keputusan',
        )); // Set attributes of data

        // Initialize C4.5
        $c45->c45 = $input; // Set input data
        $c45->setTargetAttribute('keputusan'); // Set target attribute
        $initialize = $c45->initialize(); // initialize

        // Build Output
        $buildTree = $initialize->buildTree(); // Build tree
        $arrayTree = $buildTree->toArray(); // Set to array
        $stringTree = $buildTree->toString(); // Set to string

        echo "<pre>";
        print_r($stringTree);
        echo "</pre>";


        // Build Output
        $new_data = array(
            'rangking_semester_4' => $rangking_semester_4,
            'rangking_semester_5' => $rangking_semester_5,
            'rangking_semester_6' => $rangking_semester_6,
            'nilai_un' => $nilai_un,
            'prestasi' => $request->nilai_prestasi,
            'penghasilan_ayah' => $penghasilan_ayah,
            'jumlah_tanggungan' => $jumlah_tanggungan,
            'penghasilan_ibu' => $penghasilan_ibu,
            'kepemilikan_rumah' => $kepemilikan_rumah,
            'daya_listrik' => $daya_listrik,
            'luas_tanah' => $luas_tanah,
            'luas_bangunan' => $luas_bangunan,
            'bahan_atap' => $bahan_atap,
            'bahan_lantai' => $bahan_lantai,
            'bahan_tembok' => $bahan_tembok,
            'sumber_air_utama' => $sumber_air_utama
        );

        $hasil_keputusan = $c45->initialize()->buildTree()->classify($new_data);

        Penilaian::create([
            'alternatif_id' => $penilaian->id,
            'rangking_semester_4' => $rangking_semester_4,
            'rangking_semester_5' => $rangking_semester_5,
            'rangking_semester_6' => $rangking_semester_6,
            'nilai_un' => $nilai_un,
            'prestasi' => $request->nilai_prestasi,
            'penghasilan_ayah' => $penghasilan_ayah,
            'jumlah_tanggungan' => $jumlah_tanggungan,
            'penghasilan_ibu' => $penghasilan_ibu,
            'kepemilikan_rumah' => $kepemilikan_rumah,
            'daya_listrik' => $daya_listrik,
            'luas_tanah' => $luas_tanah,
            'luas_bangunan' => $luas_bangunan,
            'bahan_atap' => $bahan_atap,
            'bahan_lantai' => $bahan_lantai,
            'bahan_tembok' => $bahan_tembok,
            'sumber_air_utama' => $sumber_air_utama,
            'hasil_keputusan' => $hasil_keputusan
        ]);

        return Redirect::route('penilaian.index')->with('success', 'Alternatif berhasil di nilai');
    }
}
