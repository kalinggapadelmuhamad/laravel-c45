\@extends('layouts.app')

@section('title', 'Dataset')

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
                        <form method="post" action="{{ route('dataset.update', $dataset) }}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <h4>Edit Dataset</h4>
                                </div>
                                <div class="card-body">

                                    <div class="row">
                                        <div class="form-group col-md-2 mb-3">
                                            <label for="name" class="form-label">Rangking Semester 4</label>
                                            <select name="rangking_semester_4" id="" class="form-control">
                                                @foreach ($pilihans as $pilihan)
                                                    <option value="{{ $pilihan }}"
                                                        {{ $dataset->rangking_semester_4 == $pilihan ? 'selected' : '' }}>
                                                        {{ $pilihan }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-2 mb-3">
                                            <label for="name" class="form-label">Rangking Semester 5</label>
                                            <select name="rangking_semester_5" id="" class="form-control">
                                                @foreach ($pilihans as $pilihan)
                                                    <option value="{{ $pilihan }}"
                                                        {{ $dataset->rangking_semester_5 == $pilihan ? 'selected' : '' }}>
                                                        {{ $pilihan }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-2 mb-3">
                                            <label for="name" class="form-label">Rangking Semester 6</label>
                                            <select name="rangking_semester_6" id="" class="form-control">
                                                @foreach ($pilihans as $pilihan)
                                                    <option value="{{ $pilihan }}"
                                                        {{ $dataset->rangking_semester_6 == $pilihan ? 'selected' : '' }}>
                                                        {{ $pilihan }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-3 mb-3">
                                            <label for="name" class="form-label">Nilai Un (Rata - Rata)</label>
                                            <select name="nilai_un" id="" class="form-control">
                                                @foreach ($pilihans as $pilihan)
                                                    <option value="{{ $pilihan }}"
                                                        {{ $dataset->nilai_un == $pilihan ? 'selected' : '' }}>
                                                        {{ $pilihan }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-3 mb-3">
                                            <label for="name" class="form-label">Prestasi</label>
                                            <select name="prestasi" id="" class="form-control">
                                                @foreach ($pilihans as $pilihan)
                                                    <option value="{{ $pilihan }}"
                                                        {{ $dataset->prestasi == $pilihan ? 'selected' : '' }}>
                                                        {{ $pilihan }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-2 mb-3">
                                            <label for="name" class="form-label">Penghasilan Ayah</label>
                                            <select name="penghasilan_ayah" id="" class="form-control">
                                                @foreach ($pilihans as $pilihan)
                                                    <option value="{{ $pilihan }}"
                                                        {{ $dataset->penghasilan_ayah == $pilihan ? 'selected' : '' }}>
                                                        {{ $pilihan }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-2 mb-3">
                                            <label for="name" class="form-label">Jumlah Tanggungan</label>
                                            <select name="jumlah_tanggungan" id="" class="form-control">
                                                @foreach ($pilihans as $pilihan)
                                                    <option value="{{ $pilihan }}"
                                                        {{ $dataset->jumlah_tanggungan == $pilihan ? 'selected' : '' }}>
                                                        {{ $pilihan }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-2 mb-3">
                                            <label for="name" class="form-label">Penghasilan Ibu</label>
                                            <select name="penghasilan_ibu" id="" class="form-control">
                                                @foreach ($pilihans as $pilihan)
                                                    <option value="{{ $pilihan }}"
                                                        {{ $dataset->penghasilan_ibu == $pilihan ? 'selected' : '' }}>
                                                        {{ $pilihan }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-3 mb-3">
                                            <label for="name" class="form-label">Kepemilikan Rumahh</label>
                                            <select name="kepemilikan_rumah" id="" class="form-control">
                                                @foreach ($pilihans as $pilihan)
                                                    <option value="{{ $pilihan }}"
                                                        {{ $dataset->kepemilikan_rumah == $pilihan ? 'selected' : '' }}>
                                                        {{ $pilihan }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-3 mb-3">
                                            <label for="name" class="form-label">Daya Listrik</label>
                                            <select name="daya_listrik" id="" class="form-control">
                                                @foreach ($pilihans as $pilihan)
                                                    <option value="{{ $pilihan }}"
                                                        {{ $dataset->daya_listrik == $pilihan ? 'selected' : '' }}>
                                                        {{ $pilihan }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-3 mb-3">
                                            <label for="name" class="form-label">Bahan Atap</label>
                                            <select name="bahan_atap" id="" class="form-control">
                                                @foreach ($pilihans as $pilihan)
                                                    <option value="{{ $pilihan }}"
                                                        {{ $dataset->bahan_atap == $pilihan ? 'selected' : '' }}>
                                                        {{ $pilihan }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-3 mb-3">
                                            <label for="name" class="form-label">Bahan Lantai</label>
                                            <select name="bahan_lantai" id="" class="form-control">
                                                @foreach ($pilihans as $pilihan)
                                                    <option value="{{ $pilihan }}"
                                                        {{ $dataset->bahan_lantai == $pilihan ? 'selected' : '' }}>
                                                        {{ $pilihan }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-3 mb-3">
                                            <label for="name" class="form-label">Bahan Tembok</label>
                                            <select name="bahan_tembok" id="" class="form-control">
                                                @foreach ($pilihans as $pilihan)
                                                    <option value="{{ $pilihan }}"
                                                        {{ $dataset->bahan_tembok == $pilihan ? 'selected' : '' }}>
                                                        {{ $pilihan }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-3 mb-3">
                                            <label for="name" class="form-label">Sumber Air</label>
                                            <select name="sumber_air_utama" id="" class="form-control">
                                                @foreach ($pilihans as $pilihan)
                                                    <option value="{{ $pilihan }}"
                                                        {{ $dataset->sumber_air_utama == $pilihan ? 'selected' : '' }}>
                                                        {{ $pilihan }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-4 mb-3">
                                            <label for="name" class="form-label">Luas Tanah</label>
                                            <select name="luas_tanah" id="" class="form-control">
                                                @foreach ($pilihans as $pilihan)
                                                    <option value="{{ $pilihan }}"
                                                        {{ $dataset->luas_tanah == $pilihan ? 'selected' : '' }}>
                                                        {{ $pilihan }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-4 mb-3">
                                            <label for="name" class="form-label">Luas Bangunan</label>
                                            <select name="luas_bangunan" id="" class="form-control">
                                                @foreach ($pilihans as $pilihan)
                                                    <option value="{{ $pilihan }}"
                                                        {{ $dataset->luas_bangunan == $pilihan ? 'selected' : '' }}>
                                                        {{ $pilihan }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-4 mb-3">
                                            <label for="name" class="form-label">Keputusan</label>
                                            <select name="keputusan" id="" class="form-control">
                                                @foreach ($pilihanKeputusans as $pilihanKeputusan)
                                                    <option value="{{ $pilihanKeputusan }}"
                                                        {{ $dataset->keputusan == $pilihanKeputusan ? 'selected' : '' }}>
                                                        {{ $pilihanKeputusan }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>



                                    <div class="row">
                                        <div class="form-group col-12">
                                            <button class="btn btn-primary mt-2">Simpan</button>
                                        </div>
                                    </div>

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
