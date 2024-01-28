@extends('layouts.app')

@section('title', 'Destinasi')

@push('style')
    <!-- CSS Libraries -->

    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Destinasi</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('destinasi.index') }}">Destinasi</a></div>
                    <div class="breadcrumb-item">Edit Destinasi</div>
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
                        <form method="post" action="{{ route('destinasi.update', $destinasi) }}"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <a href="{{ route('destinasi.index') }}" class="">
                                                <h4><i class="fa-solid fa-angle-left mr-2"></i>Kembali</h4>
                                            </a>
                                        </div>
                                        <div class="card-body ">

                                            <div class="row">
                                                <div class="col-12 md-12 lg-12 text-center">
                                                    <img id="image-preview1"
                                                        src="{{ $destinasi->foto_utama ? asset('img/destinasi/' . $destinasi->foto_utama) : asset('img/avatar/avatar-1.png') }}"
                                                        alt="Preview" class="img-fluid mb-3" style="height: 220px;">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="file-input1"
                                                            name="file1" id="file-input" accept="image/*"
                                                            onchange="previewImage1()">
                                                        <label class="custom-file-label" for="customFile">Choose
                                                            file</label>
                                                    </div>
                                                    @error('file')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mt-4">
                                                <div class="col col-md-4 col-lg-4">
                                                    <label for="name" class="form-label text-left">Slide 1</label>
                                                    <br>
                                                    <img id="image-preview2"
                                                        src="{{ $destinasi->slide_1 ? asset('img/destinasi/' . $destinasi->slide_1) : asset('img/avatar/avatar-1.png') }}"
                                                        alt="Preview" class="img-fluid mb-3" style="height: 140px;">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="file-input2"
                                                            name="file2" id="file-input" accept="image/*"
                                                            onchange="previewImage2()">
                                                        <label class="custom-file-label" for="customFile">Choose
                                                            file</label>
                                                    </div>
                                                    @error('file')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="col col-md-4 col-lg-4">
                                                    <label for="name" class="form-label text-left">Slide 2</label>
                                                    <br>
                                                    <img id="image-preview3"
                                                        src="{{ $destinasi->slide_2 ? asset('img/destinasi/' . $destinasi->slide_2) : asset('img/avatar/avatar-1.png') }}"
                                                        alt="Preview" class="img-fluid mb-3" style="height: 140px;">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="file-input3"
                                                            name="file3" id="file-input" accept="image/*"
                                                            onchange="previewImage3()">
                                                        <label class="custom-file-label" for="customFile">Choose
                                                            file</label>
                                                    </div>
                                                    @error('file')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="col col-md-4 col-lg-4">
                                                    <label for="name" class="form-label text-left">Slide 3</label>
                                                    <br>
                                                    <img id="image-preview4"
                                                        src="{{ $destinasi->slide_3 ? asset('img/destinasi/' . $destinasi->slide_3) : asset('img/avatar/avatar-1.png') }}"
                                                        alt="Preview" class="img-fluid mb-3" style="height: 140px;">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="file-input4"
                                                            name="file4" id="file-input" accept="image/*"
                                                            onchange="previewImage4()">
                                                        <label class="custom-file-label" for="customFile">Choose
                                                            file</label>
                                                    </div>
                                                    @error('file')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

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
                                            <h4>Add Destinasi</h4>
                                        </div>
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="name" class="form-label">Name</label>
                                                    <input type="text"
                                                        class="form-control @error('name') is-invalid

                                                    @enderror"
                                                        id="name" name="name" required
                                                        value="{{ $destinasi->nama }}">
                                                    @error('name')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="htm" class="form-label">Htm</label>
                                                    <input type="text"
                                                        class="form-control @error('htm') is-invalid
                                                    @enderror"
                                                        name="htm" id="htm" required
                                                        value="{{ $destinasi->htm }}">
                                                    @error('htm')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="name" class="form-label">Kategori</label>
                                                    <select name="kategori" id="" class="form-control select2"
                                                        required>
                                                        @foreach ($kategoris as $kategori)
                                                            @if ($kategori->id == $destinasi->kategori_id)
                                                                <option value="{{ $kategori->id }}" selected>
                                                                    {{ $kategori->name }}
                                                                </option>
                                                            @else
                                                                <option value="{{ $kategori->id }}">
                                                                    {{ $kategori->name }}
                                                                </option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                    {{-- <input type="text"
                                                        class="form-control @error('name') is-invalid

                                                    @enderror"
                                                        id="name" name="name" required>
                                                    @error('name')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror --}}
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="html" class="form-label">Lokasi</label>
                                                    <select name="lokasi" id="" class="form-control select2"
                                                        required>
                                                        @foreach ($lokasis as $lokasi)
                                                            @if ($lokasi->id == $destinasi->lokasi_id)
                                                                <option value="{{ $lokasi->id }}" selected>
                                                                    {{ $lokasi->name }}
                                                                </option>
                                                            @else
                                                                <option value="{{ $lokasi->id }}">
                                                                    {{ $lokasi->name }}
                                                                </option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                    {{-- <input type="text"
                                                        class="form-control @error('html') is-invalid
                                                    @enderror"
                                                        name="html" id="html" required>
                                                    @error('html')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror --}}
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="hari" class="form-label">Hari Oprasional</label>
                                                    <input type="text"
                                                        class="form-control @error('hari') is-invalid

                                                    @enderror"
                                                        id="hari" name="hari" required
                                                        value="{{ $destinasi->hari_oprasional }}">
                                                    @error('hari')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="jam" class="form-label">Jam Oprasional</label>
                                                    <input type="jam"
                                                        class="form-control @error('jam') is-invalid
                                                    @enderror"
                                                        name="jam" id="jam" required
                                                        value="{{ $destinasi->jam_oprasional }}">
                                                    @error('jam')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="lat" class="form-label">Latitude</label>
                                                    <input type="text"
                                                        class="form-control @error('lat') is-invalid

                                                    @enderror"
                                                        id="lat" name="lat" required
                                                        value="{{ $destinasi->latitude }}">
                                                    @error('lat')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <label for="long" class="form-label">Longitude</label>
                                                    <input type="long"
                                                        class="form-control @error('long') is-invalid
                                                    @enderror"
                                                        name="long" id="jam" required
                                                        value="{{ $destinasi->longitude }}">
                                                    @error('long')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label>
                                                        Alamat
                                                    </label>
                                                    <textarea
                                                        class="form-control @error('address') is-invalid

                                                    @enderror"
                                                        data-height="150" name="address" required> {{ $destinasi->alamat }}</textarea>
                                                    @error('address')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label>
                                                        Deskripsi
                                                    </label>
                                                    <textarea class="form-control @error('desc') is-invalid

                                                    @enderror"
                                                        data-height="150" name="desc" required>{{ $destinasi->deskripsi }}</textarea>
                                                    @error('desc')
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
    <script src="{{ asset('library/select2/dist/js/select2.full.min.js') }}"></script>

    <script>
        function previewImage1() {
            var fileInput = document.getElementById('file-input1');
            var imagePreview = document.getElementById('image-preview1');

            // Cek apakah ada file yang dipilih
            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    // Menetapkan src gambar pratinjau dengan data URL dari file yang dipilih
                    imagePreview.src = e.target.result;
                }

                // Membaca file sebagai data URL
                reader.readAsDataURL(fileInput.files[0]);
            } else {
                // Jika tidak ada file yang dipilih, menetapkan src ke gambar default
                imagePreview.src = "{{ asset('img/avatar/avatar-1.png') }}";
            }
        }

        function previewImage2() {
            var fileInput = document.getElementById('file-input2');
            var imagePreview = document.getElementById('image-preview2');

            // Cek apakah ada file yang dipilih
            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    // Menetapkan src gambar pratinjau dengan data URL dari file yang dipilih
                    imagePreview.src = e.target.result;
                }

                // Membaca file sebagai data URL
                reader.readAsDataURL(fileInput.files[0]);
            } else {
                // Jika tidak ada file yang dipilih, menetapkan src ke gambar default
                imagePreview.src = "{{ asset('img/avatar/avatar-1.png') }}";
            }
        }

        function previewImage3() {
            var fileInput = document.getElementById('file-input3');
            var imagePreview = document.getElementById('image-preview3');

            // Cek apakah ada file yang dipilih
            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    // Menetapkan src gambar pratinjau dengan data URL dari file yang dipilih
                    imagePreview.src = e.target.result;
                }

                // Membaca file sebagai data URL
                reader.readAsDataURL(fileInput.files[0]);
            } else {
                // Jika tidak ada file yang dipilih, menetapkan src ke gambar default
                imagePreview.src = "{{ asset('img/avatar/avatar-1.png') }}";
            }
        }

        function previewImage4() {
            var fileInput = document.getElementById('file-input4');
            var imagePreview = document.getElementById('image-preview4');

            // Cek apakah ada file yang dipilih
            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    // Menetapkan src gambar pratinjau dengan data URL dari file yang dipilih
                    imagePreview.src = e.target.result;
                }

                // Membaca file sebagai data URL
                reader.readAsDataURL(fileInput.files[0]);
            } else {
                // Jika tidak ada file yang dipilih, menetapkan src ke gambar default
                imagePreview.src = "{{ asset('img/avatar/avatar-1.png') }}";
            }
        }
    </script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
