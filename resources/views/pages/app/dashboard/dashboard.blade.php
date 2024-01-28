@extends('layouts.app')

@section('title', 'Dashboard')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/owl.carousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/owl.carousel/dist/assets/owl.theme.default.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header bg-transparent">

            </div>
            <div class="continer bg-light p-5 rounded min-vh-50">
                <div class="row">
                    <div class="col">
                        <h6>Selamat Datang ! {{ Auth::user()->name }}</h6>
                        <h4>
                            PENERAPAN ALGORITMA DECISION TREE C4.5 UNTUK
                            PENERIMAAN BEASISWA KIP BAGI MAHASISWA BARU DI
                            INSTITUT INFORMATIKA DAN BISNIS DARMAJAYA
                        </h4>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>
@endpush
