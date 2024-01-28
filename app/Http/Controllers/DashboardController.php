<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $halaman = 'dashboard';
        return view('pages.app.dashboard.dashboard', compact('halaman'));
    }
}
