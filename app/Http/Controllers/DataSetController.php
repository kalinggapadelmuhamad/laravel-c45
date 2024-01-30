<?php

namespace App\Http\Controllers;

use Algorithm\C45;
use App\Models\DataSet;
use Illuminate\Http\Request;
use Algorithm\C45\DataInput;
use Illuminate\Support\Facades\Redirect;

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
        $pilihanKeputusans = [
            'Yes',
            'No'
        ];
        return view('pages.dataset.create', compact('halaman', 'pilihans', 'pilihanKeputusans'));
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        $request->validate([
            'rangking_semester_4' => 'required|in:Rendah,Sedang,Tinggi',
            'rangking_semester_5' => 'required|in:Rendah,Sedang,Tinggi',
            'rangking_semester_6' => 'required|in:Rendah,Sedang,Tinggi',
            'nilai_un' => 'required|in:Rendah,Sedang,Tinggi',
            'prestasi' => 'required|in:Rendah,Sedang,Tinggi',
            'penghasilan_ayah' => 'required|in:Rendah,Sedang,Tinggi',
            'jumlah_tanggungan' => 'required|in:Rendah,Sedang,Tinggi',
            'penghasilan_ibu' => 'required|in:Rendah,Sedang,Tinggi',
            'kepemilikan_rumah' => 'required|in:Rendah,Sedang,Tinggi',
            'daya_listrik' => 'required|in:Rendah,Sedang,Tinggi',
            'bahan_atap' => 'required|in:Rendah,Sedang,Tinggi',
            'bahan_lantai' => 'required|in:Rendah,Sedang,Tinggi',
            'bahan_tembok' => 'required|in:Rendah,Sedang,Tinggi',
            'sumber_air_utama' => 'required|in:Rendah,Sedang,Tinggi',
            'luas_tanah' => 'required|in:Rendah,Sedang,Tinggi',
            'luas_bangunan' => 'required|in:Rendah,Sedang,Tinggi',
            'keputusan' => 'required|in:Yes,No',
        ]);

        DataSet::create([
            'rangking_semester_4' => $request->rangking_semester_4,
            'rangking_semester_5' => $request->rangking_semester_5,
            'rangking_semester_6' => $request->rangking_semester_6,
            'nilai_un' => $request->nilai_un,
            'prestasi' => $request->prestasi,
            'penghasilan_ayah' => $request->penghasilan_ayah,
            'jumlah_tanggungan' => $request->jumlah_tanggungan,
            'penghasilan_ibu' => $request->penghasilan_ibu,
            'kepemilikan_rumah' => $request->kepemilikan_rumah,
            'daya_listrik' => $request->daya_listrik,
            'luas_tanah' => $request->luas_tanah,
            'luas_bangunan' => $request->luas_bangunan,
            'bahan_atap' => $request->bahan_atap,
            'bahan_lantai' => $request->bahan_lantai,
            'bahan_tembok' => $request->bahan_tembok,
            'sumber_air_utama' => $request->sumber_air_utama,
            'keputusan' => $request->keputusan
        ]);

        return Redirect::route('dataset.index')->with('success', 'Dataset berhasil di tambah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(DataSet $dataset)
    {
        $halaman = 'dataset';
        $pilihans = [
            'Tinggi',
            'Sedang',
            'Rendah'
        ];
        $pilihanKeputusans = [
            'Yes',
            'No'
        ];
        return view('pages.dataset.edit', compact('halaman', 'pilihans', 'pilihanKeputusans', 'dataset'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataSet $dataset)
    {
        $request->validate([
            'rangking_semester_4' => 'required|in:Rendah,Sedang,Tinggi',
            'rangking_semester_5' => 'required|in:Rendah,Sedang,Tinggi',
            'rangking_semester_6' => 'required|in:Rendah,Sedang,Tinggi',
            'nilai_un' => 'required|in:Rendah,Sedang,Tinggi',
            'prestasi' => 'required|in:Rendah,Sedang,Tinggi',
            'penghasilan_ayah' => 'required|in:Rendah,Sedang,Tinggi',
            'jumlah_tanggungan' => 'required|in:Rendah,Sedang,Tinggi',
            'penghasilan_ibu' => 'required|in:Rendah,Sedang,Tinggi',
            'kepemilikan_rumah' => 'required|in:Rendah,Sedang,Tinggi',
            'daya_listrik' => 'required|in:Rendah,Sedang,Tinggi',
            'bahan_atap' => 'required|in:Rendah,Sedang,Tinggi',
            'bahan_lantai' => 'required|in:Rendah,Sedang,Tinggi',
            'bahan_tembok' => 'required|in:Rendah,Sedang,Tinggi',
            'sumber_air_utama' => 'required|in:Rendah,Sedang,Tinggi',
            'luas_tanah' => 'required|in:Rendah,Sedang,Tinggi',
            'luas_bangunan' => 'required|in:Rendah,Sedang,Tinggi',
            'keputusan' => 'required|in:Yes,No',
        ]);

        $dataset->update([
            'rangking_semester_4' => $request->rangking_semester_4,
            'rangking_semester_5' => $request->rangking_semester_5,
            'rangking_semester_6' => $request->rangking_semester_6,
            'nilai_un' => $request->nilai_un,
            'prestasi' => $request->prestasi,
            'penghasilan_ayah' => $request->penghasilan_ayah,
            'jumlah_tanggungan' => $request->jumlah_tanggungan,
            'penghasilan_ibu' => $request->penghasilan_ibu,
            'kepemilikan_rumah' => $request->kepemilikan_rumah,
            'daya_listrik' => $request->daya_listrik,
            'luas_tanah' => $request->luas_tanah,
            'luas_bangunan' => $request->luas_bangunan,
            'bahan_atap' => $request->bahan_atap,
            'bahan_lantai' => $request->bahan_lantai,
            'bahan_tembok' => $request->bahan_tembok,
            'sumber_air_utama' => $request->sumber_air_utama,
            'keputusan' => $request->keputusan
        ]);

        return Redirect::route('dataset.index')->with('success', 'Dataset berhasil di ubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataSet $dataset)
    {
        $dataset->delete();
        return Redirect::route('dataset.index')->with('success', 'Dataset berhasil di hapus.');
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
