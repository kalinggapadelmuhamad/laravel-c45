\@extends('layouts.app')

@section('title', 'Penilaian')

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
                        <form method="post" action="{{ route('penilaian.update', $penilaian) }}"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <h4>Penilaian Prestasi {{ $penilaian->nama_siswa }}</h4>
                                </div>
                                <div class="card-body">

                                    <div class="row">
                                        <div class="form-group col-md-12 mb-3">
                                            <label for="prestasi" class="form-label">Daftar Prestasi</label>
                                            <textarea name="prestasi" class="form-control" disabled> {{ $penilaian->prestasi }}</textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-12 mb-3">
                                            <label for="nilai_prestasi" class="form-label">Beri Penilaian</label>
                                            <select name="nilai_prestasi" id="nilai_prestasi" class="form-control">
                                                <option value="Tinggi">Tinggi</option>
                                                <option value="Sedang">Sedang</option>
                                                <option value="Rendah">Rendah</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-12 mb-3">
                                            <button class="btn btn-primary">Simpan</button>
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
