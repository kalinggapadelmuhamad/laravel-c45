<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $halaman = 'alternatif';

        $keyword = $request->input('name');
        $alternatifs = Alternatif::when($request->name, function ($query, $name) {
            $query->where('nama_siswa', 'like', '%' . $name . '%');
        })->latest()->paginate(10);

        // masukn key name kedalam array users
        $alternatifs->appends(['name' => $keyword]);

        // arahkan ke file pages/users/index.blade.php
        return view('pages.alternatif.index', compact('halaman', 'alternatifs'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Alternatif $alternatif)
    {
        $halaman = 'alternatif';

        // data pilihan tahun lulus
        $tahunluluss = [
            date('Y', strtotime('-1 year')),
            date('Y'),
            date('Y', strtotime('+1 year')),
        ];

        // data pilihan jurusan pendaftaran
        $jurusanpendaftarans = [
            'S1 Teknik Informatika [55201]',
            'S1 Sistem Komputer [56201]',
            'S1 Sistem Informasi [57201]',
            'S1 Manajemen [61201]',
            'S1 Akuntansi [62201]',
            'S1 Desain Komunikasi Visual [90241]',
            'S1 Bisnis Digital [61209]',
            'S1 Desain Interior [90221]',
            'S1 Hukum Bisnis [74202]',
            'S1 Pariwisata [93207]',
            'S1 Pendidikan Teknologi Informasi [83207]',
            'S1 Sains Data [49202]'
        ];
        return view('pages.alternatif.edit', compact('halaman', 'alternatif', 'jurusanpendaftarans', 'tahunluluss'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alternatif $alternatif)
    {
        $berkas = $request->file('berkas_Pendaftaran');

        // validasi data dari form daftar
        $request->validate([
            'asal_sekolah' => 'required|string|max:255',
            'tahun_lulus' => 'required',
            'jurusaan_pendaftaran' => 'required|string|max:255',
            'nama_siswa' => 'required|string|max:255',
            'nisn' => 'required',
            'no_telp' => 'required',
            'tgl_lahir' => 'required|date',
            'agama' => 'required|string|max:255',
            'jurusan_sekolah' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'rangking_semester_4' => 'required',
            'rangking_semester_5' => 'required',
            'rangking_semester_6' => 'required',
            'nilai_un' => 'required',
            'prestasi' => 'required|string|max:255',
            'nama_ayah' => 'required|string|max:255',
            'status_ayah' => 'required|string|max:255',
            'hubunga_ayah' => 'required|string|max:255',
            'pekerjan_ayah' => 'required|string|max:255',
            'penghasilan_ayah' => 'required',
            'jumlah_tanggungan' => 'required',
            'no_hp' => 'required',
            'nama_ibu' => 'required|string|max:255',
            'status_ibu' => 'required|string|max:255',
            'pekerjan_ibu' => 'required|string|max:255',
            'penghasilan_ibu' => 'required',
            'kepemilikan_rumah' => 'required|string|max:255',
            'daya_listrik' => 'required|string|max:255',
            'luas_tanah' => 'required|string|max:255',
            'luas_bangunan' => 'required|string|max:255',
            'bahan_atap' => 'required|string|max:255',
            'bahan_lantai' => 'required|string|max:255',
            'bahan_tembok' => 'required|string|max:255',
            'kamar_mandi' => 'required|string|max:255',
            'sumber_air_utama' => 'required|string|max:255',
            'berkas_Pendaftaran' => 'file|mimes:pdf,doc,docx',
        ]);


        // proses update data ke tabel alternatif
        $alternatif->update([
            'asal_sekolah' => $request->asal_sekolah,
            'tahun_lulus' => $request->tahun_lulus,
            'jenis_beasiswa' => 'KIP Kuliah',
            'jurusaan_pendaftaran' => $request->jurusaan_pendaftaran,

            'nama_siswa' => $request->nama_siswa,
            'nisn' => $request->nisn,
            'no_telp' => $request->no_telp,
            'tgl_lahir' => $request->tgl_lahir,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'jurusan_sekolah' => $request->jurusan_sekolah,
            'rangking_semester_4' => $request->rangking_semester_4,
            'rangking_semester_5' => $request->rangking_semester_5,
            'rangking_semester_6' => $request->rangking_semester_6,
            'nilai_un' => $request->nilai_un,
            'prestasi' => $request->prestasi,

            'nama_ayah' => $request->nama_ayah,
            'status_ayah' => $request->status_ayah,
            'hubunga_ayah' => $request->hubunga_ayah,
            'pekerjan_ayah' => $request->pekerjan_ayah,
            'penghasilan_ayah' => $request->penghasilan_ayah,
            'jumlah_tanggungan' => $request->jumlah_tanggungan,
            'no_hp' => $request->no_hp,
            'nama_ibu' => $request->nama_ibu,
            'status_ibu' => $request->status_ibu,
            'pekerjan_ibu' => $request->pekerjan_ibu,
            'penghasilan_ibu' => $request->penghasilan_ibu,

            'kepemilikan_rumah' => $request->kepemilikan_rumah,
            'daya_listrik' => $request->daya_listrik,
            'luas_tanah' => $request->luas_tanah,
            'luas_bangunan' => $request->luas_bangunan,
            'bahan_atap' => $request->bahan_atap,
            'bahan_lantai' => $request->bahan_lantai,
            'bahan_tembok' => $request->bahan_tembok,
            'kamar_mandi' => $request->kamar_mandi,
            'sumber_air_utama' => $request->sumber_air_utama

        ]);

        if ($berkas) {
            $path = time() . '.' . $berkas->getClientOriginalExtension();
            $berkas->move('berkas/', $path);

            $alternatif->update([
                'berkas_Pendaftaran' => $path,
            ]);
        }



        return Redirect::route('alternatif.index')->with('success', 'Alternatif Berhasil Di Ubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alternatif $alternatif)
    {
        $alternatif->delete();
        return Redirect::route('alternatif.index')->with('success', 'Alternatif Berhasil Di Hapus.');
    }
}
