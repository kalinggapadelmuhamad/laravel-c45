\@extends('layouts.app')

@section('title', 'Alternatif')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <form method="post" action="{{ route('alternatif.update', $alternatif) }}"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <h4>Edit Alternatif</h4>
                                </div>
                                <div class="card-body">

                                    <ul class="nav nav-pills mb-3" id="myTab3" role="tablist">
                                        <li class="nav-item mr-2">
                                            <a class="nav-link active" id="home-tab3" data-toggle="tab"
                                                href="#datacalonmahasiswa" role="tab" aria-controls="home"
                                                aria-selected="true">Data Calon Mahasiswa</a>
                                        </li>
                                        <li class="nav-item mr-2">
                                            <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#dataorangtua"
                                                role="tab" aria-controls="profile" aria-selected="false">Data Orang
                                                Tua</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab3" data-toggle="tab"
                                                href="#datatempattinggal" role="tab" aria-controls="contact"
                                                aria-selected="false">Data Tempat
                                                Tinggal</a>
                                        </li>
                                    </ul>
                                    <form action="{{ route('alternatif.update', $alternatif) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="tab-content" id="myTabContent2">

                                            <div class="tab-pane fade show active" id="datacalonmahasiswa" role="tabpanel"
                                                aria-labelledby="home-tab3">

                                                <div class="row">
                                                    <div class="form-group col-md-3 mb-3">
                                                        <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                                                        <input type="text" class="form-control " id="asal_sekolah"
                                                            name="asal_sekolah" required
                                                            value="{{ $alternatif->asal_sekolah }}">
                                                    </div>

                                                    <div class="form-group col-md-3 mb-3">
                                                        <label for="tahun_lulus" class="form-label">Tahun Lulus</label>
                                                        <select name="tahun_lulus" class="form-control" id="tahun_lulus">
                                                            @foreach ($tahunluluss as $tahunlulus)
                                                                <option value="{{ $tahunlulus }}"
                                                                    {{ $alternatif->tahun_lulus == $tahunlulus ? 'selected' : '' }}>
                                                                    {{ $tahunlulus }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-3 mb-3">
                                                        <label for="jenis_beasiswa" class="form-label">Jenis
                                                            Beasiswa</label>
                                                        <select name="jenis_beasiswa" class="form-control"
                                                            id="jenis_beasiswa" disabled>
                                                            <option value="KIP Kuliah" selected>KIP Kuliah</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-3 mb-3">
                                                        <label for="jurusaan_pendaftaran" class="form-label">Jurusan
                                                            Pendaftaran</label>
                                                        <select name="jurusaan_pendaftaran" class="form-control"
                                                            id="jurusaan_pendaftaran">
                                                            @foreach ($jurusanpendaftarans as $jurusanpendaftaran)
                                                                <option value="{{ $jurusanpendaftaran }}"
                                                                    {{ $alternatif->jurusaan_pendaftaran == $jurusanpendaftaran ? 'selected' : '' }}>
                                                                    {{ $jurusanpendaftaran }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-md-3 mb-3">
                                                        <label for="nama_siswa" class="form-label">Nama Lengkap</label>
                                                        <input type="text" class="form-control " id="nama_siswa"
                                                            name="nama_siswa" required
                                                            value="{{ $alternatif->nama_siswa }}">
                                                    </div>

                                                    <div class="form-group col-md-3 mb-3">
                                                        <label for="nisn" class="form-label">NISN</label>
                                                        <input type="number" class="form-control " id="nisn"
                                                            name="nisn" required value="{{ $alternatif->nisn }}">
                                                    </div>

                                                    <div class="form-group col-md-3 mb-3">
                                                        <label for="no_telp" class="form-label">No Telephone</label>
                                                        <input type="number" class="form-control " id="no_telp"
                                                            name="no_telp" required value="{{ $alternatif->no_telp }}">
                                                    </div>

                                                    <div class="form-group col-md-3 mb-3">
                                                        <label for="tgl_lahir" class="form-label">Tanggal Lahir
                                                        </label>
                                                        <input type="date" class="form-control " id="tgl_lahir"
                                                            name="tgl_lahir" required
                                                            value="{{ $alternatif->tgl_lahir }}">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-md-3 mb-3">
                                                        <label for="agama" class="form-label">Agama</label>
                                                        <input type="text" class="form-control " id="agama"
                                                            name="agama" required value="{{ $alternatif->agama }}">
                                                    </div>

                                                    <div class="form-group col-md-3 mb-3">
                                                        <label for="jurusan_sekolah" class="form-label">Jurusan
                                                            Sekolah</label>
                                                        <input type="text" class="form-control " id="jurusan_sekolah"
                                                            name="jurusan_sekolah" required
                                                            value="{{ $alternatif->jurusan_sekolah }}">
                                                    </div>

                                                    <div class="form-group col-md-6 mb-3">
                                                        <label for="alamat" class="form-label">Alamat Rumah</label>
                                                        <input type="alamat" class="form-control " id="alamat"
                                                            name="alamat" required value="{{ $alternatif->alamat }}">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-md-3 mb-3">
                                                        <label for="rangking_semester_4" class="form-label">Rangking
                                                            Semester
                                                            4</label>
                                                        <input type="number" class="form-control "
                                                            id="rangking_semester_4" name="rangking_semester_4" required
                                                            value="{{ $alternatif->rangking_semester_4 }}">
                                                    </div>

                                                    <div class="form-group col-md-3 mb-3">
                                                        <label for="rangking_semester_5" class="form-label">Rangking
                                                            Semester
                                                            5</label>
                                                        <input type="number" class="form-control "
                                                            id="rangking_semester_5" name="rangking_semester_5" required
                                                            value="{{ $alternatif->rangking_semester_5 }}">
                                                    </div>

                                                    <div class="form-group col-md-3 mb-3">
                                                        <label for="rangking_semester_6" class="form-label">Rangking
                                                            Semester
                                                            6</label>
                                                        <input type="number" class="form-control "
                                                            id="rangking_semester_6" name="rangking_semester_6" required
                                                            value="{{ $alternatif->rangking_semester_6 }}">
                                                    </div>

                                                    <div class="form-group col-md-3 mb-3">
                                                        <label for="nilai_un" class="form-label">Nilai UN (Rata -
                                                            Rata)</label>
                                                        <input type="number" class="form-control " id="nilai_un"
                                                            name="nilai_un" required value="{{ $alternatif->nilai_un }}">
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-md-12 mb-3">
                                                        <label for="prestasi" class="form-label">Prestasi (Akademik & Non
                                                            Akademik)</label>
                                                        <textarea name="prestasi" class="form-control" required>{{ $alternatif->prestasi }}</textarea>
                                                    </div>

                                                </div>
                                            </div>


                                            <div class="tab-pane fade" id="dataorangtua" role="tabpanel"
                                                aria-labelledby="profile-tab3">


                                                <div class="row">
                                                    <div class="form-group col-md-2 mb-3">
                                                        <label for="nama_ayah" class="form-label">Nama Ayah</label>
                                                        <input type="text" name="nama_ayah" id="nama_ayah"
                                                            class="form-control" required
                                                            value="{{ $alternatif->nama_ayah }}">
                                                    </div>

                                                    <div class="form-group col-md-2 mb-3">
                                                        <label for="status_ayah" class="form-label">Status Ayah</label>
                                                        <select name="status_ayah" id="status_ayah" class="form-control">
                                                            <option value="Masih Hidup"
                                                                {{ $alternatif->status_ayah == 'Masih Hidup' ? 'selected' : '' }}>
                                                                Masih Hidup</option>
                                                            <option value="Wafat"
                                                                {{ $alternatif->status_ayah == 'Wafat' ? 'selected' : '' }}>
                                                                Wafat</option>
                                                            <option value="Bercerai"
                                                                {{ $alternatif->status_ayah == 'Bercerai' ? 'selected' : '' }}>
                                                                Bercerai</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-2 mb-3">
                                                        <label for="hubunga_ayah" class="form-label">Hubungan Ayah</label>
                                                        <select name="hubunga_ayah" class="form-control"
                                                            id="hubunga_ayah">
                                                            <option value="Kandung"
                                                                {{ $alternatif->hubunga_ayah == 'Kandung' ? 'selected' : '' }}>
                                                                Kandung</option>
                                                            <option value="Tiri"
                                                                {{ $alternatif->hubunga_ayah == 'Tiri' ? 'selected' : '' }}>
                                                                Tiri</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-2 mb-3">
                                                        <label for="pekerjan_ayah" class="form-label">Pekerjaan
                                                            Ayah</label>
                                                        <input type="text" name="pekerjan_ayah" id="pekerjan_ayah"
                                                            class="form-control" required
                                                            value="{{ $alternatif->pekerjan_ayah }}">
                                                    </div>

                                                    <div class="form-group col-md-4 mb-3">
                                                        <label for="penghasilan_ayah" class="form-label">Penghasilan
                                                            Ayah</label>
                                                        <input type="number" name="penghasilan_ayah"
                                                            id="penghasilan_ayah" class="form-control" required
                                                            value="{{ $alternatif->penghasilan_ayah }}">
                                                    </div>

                                                    <div class="form-group col-md-12 mb-3">
                                                        <label for="jumlah_tanggungan" class="form-label">Jumlah
                                                            Tanggungan</label>
                                                        <input type="number" name="jumlah_tanggungan"
                                                            id="jumlah_tanggungan" class="form-control" required
                                                            value="{{ $alternatif->jumlah_tanggungan }}">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-md-2 mb-3">
                                                        <label for="no_hp" class="form-label">No Telp Ayah/Ibu</label>
                                                        <input type="number" class="form-control " id="no_hp"
                                                            name="no_hp" required value="{{ $alternatif->no_telp }}">
                                                    </div>

                                                    <div class="form-group col-md-2 mb-3">
                                                        <label for="nama_ibu" class="form-label">Nama Ibu</label>
                                                        <input type="text" class="form-control " id="nama_ibu"
                                                            name="nama_ibu" required value="{{ $alternatif->nama_ibu }}">
                                                    </div>

                                                    <div class="form-group col-md-2 mb-3">
                                                        <label for="status_ibu" class="form-label">Status Ibu</label>
                                                        <select name="status_ibu" id="status_ibu" class="form-control">
                                                            <option value="Kandung"
                                                                {{ $alternatif->status_ibu == 'Kandung' ? 'selected' : '' }}>
                                                                Kandung</option>
                                                            <option value="Tiri"
                                                                {{ $alternatif->status_ibu == 'Tiri' ? 'selected' : '' }}>
                                                                Tiri</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-3 mb-3">
                                                        <label for="pekerjan_ibu" class="form-label">Pekerjaan Ibu
                                                        </label>
                                                        <input type="text" class="form-control " id="pekerjan_ibu"
                                                            name="pekerjan_ibu" required
                                                            value="{{ $alternatif->pekerjan_ibu }}">
                                                    </div>

                                                    <div class="form-group col-md-3 mb-3">
                                                        <label for="penghasilan_ibu" class="form-label">Penghasilan
                                                            Ibu</label>
                                                        <input type="number" name="penghasilan_ibu" id="penghasilan_ibu"
                                                            class="form-control" required
                                                            value="{{ $alternatif->penghasilan_ibu }}">
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="tab-pane fade" id="datatempattinggal" role="tabpanel"
                                                aria-labelledby="contact-tab3">

                                                <div class="row">
                                                    <div class="form-group col-md-3 mb-3">
                                                        <label for="kepemilikan_rumah" class="form-label">Kepemilikan
                                                            Rumah</label>
                                                        <select name="kepemilikan_rumah" id="kepemilikan_rumah"
                                                            class="form-control">
                                                            <option value="Sendiri"
                                                                {{ $alternatif->kepemilikan_rumah == 'Sendiri' ? 'selected' : '' }}>
                                                                Sendiri</option>
                                                            <option value="Sewa"
                                                                {{ $alternatif->kepemilikan_rumah == 'Sewa' ? 'selected' : '' }}>
                                                                Sewa</option>
                                                            <option value="Menumpang"
                                                                {{ $alternatif->kepemilikan_rumah == 'Menumpang' ? 'selected' : '' }}>
                                                                Menumpang</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-3 mb-3">
                                                        <label for="daya_listrik" class="form-label">Daya Listrik</label>
                                                        <select name="daya_listrik" class="form-control"
                                                            id="daya_listrik">
                                                            <option value="450"
                                                                {{ $alternatif->daya_listrik == '450' ? 'selected' : '' }}>
                                                                450 Watt</option>
                                                            <option value="900"
                                                                {{ $alternatif->daya_listrik == '900' ? 'selected' : '' }}>
                                                                900 Watt</option>
                                                            <option value="1300"
                                                                {{ $alternatif->daya_listrik == '1300' ? 'selected' : '' }}>
                                                                1300 Watt</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-3 mb-3">
                                                        <label for="luas_tanah" class="form-label">Luas Tanah</label>
                                                        <select name="luas_tanah" class="form-control" id="luas_tanah">
                                                            <option value="0 - 100 m2"
                                                                {{ $alternatif->luas_tanah == '0 - 100 m2' ? 'selected' : '' }}>
                                                                0 - 100 m2</option>
                                                            <option value="101 - 200 m2"
                                                                {{ $alternatif->luas_tanah == '101 - 200 m2' ? 'selected' : '' }}>
                                                                101 - 200 m2</option>
                                                            <option value="> 200 m2">
                                                                {{ $alternatif->luas_tanah == '> 200 m2' ? 'selected' : '' }}>
                                                                200 m2</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-3 mb-3">
                                                        <label for="luas_bangunan" class="form-label">Luas
                                                            Bangunan</label>
                                                        <select name="luas_bangunan" class="form-control"
                                                            id="luas_bangunan">
                                                            <option value="0 - 100 m2"
                                                                {{ $alternatif->luas_bangunan == '0 - 100 m2' ? 'selected' : '' }}>
                                                                0 - 100 m2</option>
                                                            <option value="101 - 200 m2"
                                                                {{ $alternatif->luas_bangunan == '101 - 200 m2' ? 'selected' : '' }}>
                                                                101 - 200 m2</option>
                                                            <option value="> 200 m2"
                                                                {{ $alternatif->luas_bangunan == '> 200 m2' ? 'selected' : '' }}>
                                                                200 m2</option>
                                                        </select>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-md-3 mb-3">
                                                        <label for="bahan_atap" class="form-label">Bahan Atap
                                                        </label>
                                                        <select name="bahan_atap" id="bahan_atap" class="form-control">
                                                            <option value="Nipah"
                                                                {{ $alternatif->bahan_atap == 'Nipah' ? 'selected' : '' }}>
                                                                Nipah</option>
                                                            <option value="Seng/Asbes"
                                                                {{ $alternatif->bahan_atap == 'Seng/Asbes' ? 'selected' : '' }}>
                                                                Seng/Asbes</option>
                                                            <option value="Genteng"
                                                                {{ $alternatif->bahan_atap == 'Genteng' ? 'selected' : '' }}>
                                                                Genteng</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-3 mb-3">
                                                        <label for="bahan_lantai" class="form-label">Bahan Lantai</label>
                                                        <select name="bahan_lantai" class="form-control"
                                                            id="bahan_lantai">
                                                            <option value="Tanah"
                                                                {{ $alternatif->bahan_lantai == 'Tanah' ? 'selected' : '' }}>
                                                                Tanah</option>
                                                            <option value="Semen"
                                                                {{ $alternatif->bahan_lantai == 'Semen' ? 'selected' : '' }}>
                                                                Semen</option>
                                                            <option value="Keramik"
                                                                {{ $alternatif->bahan_lantai == 'Keramik' ? 'selected' : '' }}>
                                                                Keramik</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-3 mb-3">
                                                        <label for="bahan_tembok" class="form-label">Bahan Tembok</label>
                                                        <select name="bahan_tembok" class="form-control"
                                                            id="bahan_tembok">
                                                            <option value="Bambu"
                                                                {{ $alternatif->bahan_tembok == 'Bambu' ? 'selected' : '' }}>
                                                                Bambu</option>
                                                            <option value="Kayu"
                                                                {{ $alternatif->bahan_tembok == 'Kayu' ? 'selected' : '' }}>
                                                                Kayu</option>
                                                            <option value="Bata"
                                                                {{ $alternatif->bahan_tembok == 'Bata' ? 'selected' : '' }}>
                                                                Bata</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-3 mb-3">
                                                        <label for="kamar_mandi" class="form-label">Mandi Cuci
                                                            Kakus</label>
                                                        <select name="kamar_mandi" class="form-control" id="kamar_mandi">
                                                            <option value="Kepemilikan Sendiri Didalam"
                                                                {{ $alternatif->kamar_mandi == 'Kepemilikan Sendiri Didalam' ? 'selected' : '' }}>
                                                                Kepemilikan Sendiri
                                                                Didalam</option>
                                                            <option value="Kepemilikan Sendiri Diluar"
                                                                {{ $alternatif->kamar_mandi == 'Kepemilikan Sendiri Diluar' ? 'selected' : '' }}>
                                                                Kepemilikan Sendiri
                                                                Diluar</option>
                                                            <option value="Berbagi Pakai"
                                                                {{ $alternatif->kamar_mandi == 'Berbagi Pakai' ? 'selected' : '' }}>
                                                                Berbagi Pakai</option>
                                                        </select>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-md-3 mb-3">
                                                        <label for="sumber_air_utama" class="form-label">Sumber Air Utama
                                                        </label>
                                                        <select name="sumber_air_utama" id="sumber_air_utama"
                                                            class="form-control">
                                                            <option value="Sumur"
                                                                {{ $alternatif->sumber_air_utama == 'Sumur' ? 'selected' : '' }}>
                                                                Sumur</option>
                                                            <option value="Pompa Air"
                                                                {{ $alternatif->sumber_air_utama == 'Pompa Air' ? 'selected' : '' }}>
                                                                Pompa Air</option>
                                                            <option value="PDAM"
                                                                {{ $alternatif->sumber_air_utama == 'PDAM' ? 'selected' : '' }}>
                                                                PDAM</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-9 mb-3">
                                                        <label for="berkas_Pendaftaran" class="form-label">Berkas
                                                            Pendaftaran
                                                        </label>
                                                        @if ($alternatif->berkas_Pendaftaran)
                                                            <a
                                                                href="{{ asset('berkas/' . $alternatif->berkas_Pendaftaran) }}">Download</a>
                                                        @endif
                                                        <input type="file" name="berkas_Pendaftaran"
                                                            id="berkas_Pendaftaran" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-md-12 mt-3">
                                                        <button class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->


    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
