<?php

namespace App\Http\Controllers;

use Algorithm\C45;
use App\Models\DataSet;
use Illuminate\Http\Request;
use Algorithm\C45\DataInput;


class DataSetController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $halaman = 'dataset';
        $keyword = $request->input('keputusan');
        $datasets = DataSet::when($request->keputusan, function ($query, $keputusan) {
            $query->where('keputusan', 'like', '%' . $keputusan . '%');
        })->latest()->paginate(10);
        return view('pages.dataset.index', compact('halaman', 'datasets'));
    }

    public function create()
    {
        $halaman = 'dataset';
        $pilihans = [
            'Tinggi',
            'Sedang',
            'Rendah'
        ];
        return view('pages.dataset.create', compact('halaman', 'pilihans'));
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function tree()
    {

        $c45 = new C45();
        $input = new DataInput;
        $data = Dataset::select(
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

        return $stringTree;
    }
}
