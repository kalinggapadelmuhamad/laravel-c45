<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $halaman = 'profile';
        return view('pages.profile.index', compact('halaman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $profile)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $profile->update([
            'name' => $request->name
        ]);

        return Redirect::route('profile.index')->with('success', 'Profile berhasil di ubah.');
    }
}
