<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{

    // fungsi untuk menampilkan halaman user
    public function index(Request $request)
    {
        $halaman = 'users';

        // ambil data dari tabel user berdasarkan nama jika terdapat request
        $keyword = $request->input('name');
        $users = User::when($request->name, function ($query, $name) {
            $query->where('name', 'like', '%' . $name . '%');
        })->latest()->paginate(10);

        // masukn key name kedalam array users
        $users->appends(['name' => $keyword]);

        // arahkan ke file pages/users/index.blade.php
        return view('pages.users.index', compact('halaman', 'users'));
    }

    // funsgsin untuk menampilkan form tambah user
    public function create()
    {
        $halaman = 'users';

        // arahkan ke file pages/users/create.blade.php
        return view('pages.users.create', compact('halaman'));
    }


    //fungsi untuk memasukan data user ke database
    public function store(Request $request)
    {
        // validasi data dari form tambah user
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed'
        ]);

        //masukan data kedalam tabel users
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        //jika proses berhsil arahkan kembali ke halaman users dengan status success
        return Redirect::route('users.index')->with('success', 'User berhasil di tambah.');
    }


    //fungsi untuk menampilkan user yang akan di edit
    public function show(User $user)
    {
        $halaman = 'users';

        // arahkan ke file pages/users/edit
        return view('pages.users.edit', compact('user', 'halaman'));
    }

    // fungsi untuk update user berdasarkan user yang di pilih
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $user->update([
            'name' => $request->name
        ]);

        return Redirect::route('users.index')->with('success', 'User berhasil di ubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return Redirect::route('users.index')->with('success', 'User berhasil di hapus.');
    }
}
