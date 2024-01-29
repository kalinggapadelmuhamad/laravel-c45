@extends('layouts.app')

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
                        <form method="post" action="{{ route('dataset.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <h4>Tambah Dataset</h4>
                                </div>
                                <div class="card-body">

                                    <div class="row">
                                        <div class="form-group col-md-2 mb-3">
                                            <label for="name" class="form-label">Rangking Semester 4</label>
                                            <select name="rangking_semester_4" id="" class="form-control">
                                                @foreach ($pilihans as $pilihan)
                                                    <option value="{{ $pilihan }}">{{ $pilihan }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-2 mb-3">
                                            <label for="name" class="form-label">Rangking Semester 5</label>
                                            <select name="rangking_semester_5" id="" class="form-control">
                                                @foreach ($pilihans as $pilihan)
                                                    <option value="{{ $pilihan }}">{{ $pilihan }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-2 mb-3">
                                            <label for="name" class="form-label">Rangking Semester 6</label>
                                            <select name="rangking_semester_6" id="" class="form-control">
                                                @foreach ($pilihans as $pilihan)
                                                    <option value="{{ $pilihan }}">{{ $pilihan }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-3 mb-3">
                                            <label for="name" class="form-label">Nilai Un (Rata - Rata)</label>
                                            <select name="nilai_un" id="" class="form-control">
                                                @foreach ($pilihans as $pilihan)
                                                    <option value="{{ $pilihan }}">{{ $pilihan }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-3 mb-3">
                                            <label for="name" class="form-label">Prestasi</label>
                                            <select name="prestasi" id="" class="form-control">
                                                @foreach ($pilihans as $pilihan)
                                                    <option value="{{ $pilihan }}">{{ $pilihan }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-4 mb-3">
                                            <label for="name" class="form-label">Penghasilan Ayah</label>
                                            <select name="penghasilan_ayah" id="" class="form-control">
                                                @foreach ($pilihans as $pilihan)
                                                    <option value="{{ $pilihan }}">{{ $pilihan }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-4 mb-3">
                                            <label for="name" class="form-label">Jumlah Tanggungan</label>
                                            <select name="jumlah_tanggungan" id="" class="form-control">
                                                @foreach ($pilihans as $pilihan)
                                                    <option value="{{ $pilihan }}">{{ $pilihan }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-4 mb-3">
                                            <label for="name" class="form-label">Penghasilan Ibu</label>
                                            <select name="penghasilan_ibu" id="" class="form-control">
                                                @foreach ($pilihans as $pilihan)
                                                    <option value="{{ $pilihan }}">{{ $pilihan }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-4 mb-3">
                                            <label for="name" class="form-label">Penghasilan Ayah</label>
                                            <select name="penghasilan_ayah" id="" class="form-control">
                                                @foreach ($pilihans as $pilihan)
                                                    <option value="{{ $pilihan }}">{{ $pilihan }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-4 mb-3">
                                            <label for="name" class="form-label">Jumlah Tanggungan</label>
                                            <select name="jumlah_tanggungan" id="" class="form-control">
                                                @foreach ($pilihans as $pilihan)
                                                    <option value="{{ $pilihan }}">{{ $pilihan }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-4 mb-3">
                                            <label for="name" class="form-label">Penghasilan Ibu</label>
                                            <select name="penghasilan_ibu" id="" class="form-control">
                                                @foreach ($pilihans as $pilihan)
                                                    <option value="{{ $pilihan }}">{{ $pilihan }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>



                                    {{-- <div class="row">
                                        <div class="form-group col-md-6 mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password"
                                                class="form-control @error('password') is-invalid

                                                    @enderror"
                                                id="password" name="password" required>
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6 mb-3">
                                            <label for="password_confirmation" class="form-label">Konfirmasi
                                                Password</label>
                                            <input type="password"
                                                class="form-control @error('password') is-invalid
                                                    @enderror"
                                                name="password_confirmation" id="password_confirmation" required>
                                            @error('password_confirmation')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-12">
                                            <button class="btn btn-primary mt-2">Simpan</button>
                                        </div>
                                    </div> --}}

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
