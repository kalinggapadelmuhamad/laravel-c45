<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $halaman = 'users';
        $keyword = $request->input('name');
        $users = User::when($request->name, function ($query, $name) {
            $query->where('name', 'like', '%' . $name . '%');
        })->latest()->paginate(10);

        $users->appends(['name' => $keyword]);

        return view('pages.users.index', compact('halaman', 'users'));
    }


    public function create()
    {
        $halaman = 'users';
        return view('pages.users.create', compact('halaman'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return Redirect::route('users.index')->with('success', 'User berhasil di tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $halaman = 'users';
        return view('pages.users.edit', compact('user', 'halaman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $user->update([
            'name' => $request->name
        ]);

        return Redirect::route('users.index')->with('success', 'User berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return Redirect::route('users.index')->with('success', 'User berhasil di hapus');
    }
}
