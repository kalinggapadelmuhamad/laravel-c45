<?php

namespace App\Http\Controllers;

use Algorithm\C45;
use Algorithm\C45\Calculator\GainCalculator;
use Algorithm\C45\DataInput;
use App\Models\DataSet;
use Illuminate\Http\Request;

class PohonKeputusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $halaman = 'tree';
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
        $initialize = $c45->initialize();


        // Build Output
        $buildTree = $initialize->buildTree(); // Build tree
        $arrayTree = $buildTree->toArray(); // Set to array
        $stringTree = $buildTree->toString(); // Set to string

        return view('pages.tree.index', compact('stringTree', 'halaman'));
    }
}
