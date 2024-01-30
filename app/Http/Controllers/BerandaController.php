<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.beranda.home');
    }

    public function create()
    {
        $tahunluluss = [
            date('Y', strtotime('-1 year')),
            date('Y'),
            date('Y', strtotime('+1 year')),
        ];
        return view('pages.beranda.create', compact(
            'tahunluluss',
        ));
    }
}
