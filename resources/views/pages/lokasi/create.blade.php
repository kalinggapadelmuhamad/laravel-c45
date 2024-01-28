@extends('layouts.app')

@section('title', 'Lokasi')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Add Lokasi</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('lokasi.index') }}">Lokasi</a></div>
                    <div class="breadcrumb-item">Add Lokasi</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <form method="post" action="{{ route('lokasi.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <a href="{{ route('lokasi.index') }}" class="">
                                                <h4><i class="fa-solid fa-angle-left mr-2"></i>Kembali</h4>
                                            </a>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="bg-edit">
                                                <i class="fas fa-location-arrow"></i>
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            <button class="btn btn-primary btn-lg btn-block">Simpan
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 col-lg-8">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Add Lokasi</h4>
                                        </div>
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="form-group col-md-12 mb-3">
                                                    <label for="name" class="form-label">Name</label>
                                                    <input type="text"
                                                        class="form-control @error('name') is-invalid

                                                    @enderror"
                                                        id="name" name="name" required value="{{ old('name') }}">
                                                    @error('name')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
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
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
