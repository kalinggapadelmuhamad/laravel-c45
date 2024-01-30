<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function index(Request $request)
    {
        $halaman = 'hasil';
        $keyword = $request->input('name');
        $penilaians = Penilaian::when($request->name, function ($query, $name) {
            $query->whereHas('alternatif', function ($subQuery) use ($name) {
                $subQuery->where('nama_siswa', 'like', '%' . $name . '%');
            });
        })->latest()->paginate(10);

        // masukn key name kedalam array users
        $penilaians->appends(['name' => $keyword]);

        // arahkan ke file pages/users/index.blade.php
        return view('pages.hasil.index', compact('halaman', 'penilaians'));
    }

    public function create()
    {
        $halaman = 'hasil';
        $penilaians = Penilaian::All();

        return view('pages.hasil.create', compact('halaman', 'penilaians'));
    }
}
