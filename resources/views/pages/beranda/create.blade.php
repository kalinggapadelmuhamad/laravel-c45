<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>IIB Darmajaya - Registrasi Beasiswa KIP Kuliah</title>

        <style>
            * {
                box-sizing: border-box;
            }

            .home {}

            .home .container {
                height: 100vh;
            }

            #myTabs {
                display: none;
                /* Sembunyikan elemen navigasi secara default */
            }
        </style>
    </head>

    <body>
        <!-- Home Start -->
        <div class="home">
            <div class="container bg-white px-5 py-5">
                <div class="row">
                    <div class="col">
                        <h2 class="text-center">Mohon Lengkapi Form Pendaftaran Berikut</h2>
                        <ul class="nav nav-tabs" id="myTabs">
                            <li class="nav-item">
                                <a class="nav-link active" id="siswa-tab" data-bs-toggle="tab" href="#calonmaba">
                                    Data Calon Mahasiswa Baru
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="orangtua-tab" data-bs-toggle="tab" href="#orangtua">Data Orang
                                    Tua</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="rumah-tab" data-bs-toggle="tab" href="#rumah">Data Rumah</a>
                            </li>
                        </ul>

                        <div class="tab-content mt-5">
                            <form action="">
                                <!-- Tab 1: Data Siswa -->
                                <div class="tab-pane fade show active" id="calonmaba">
                                    <h4 class="mb-4"> Data Calon Mahasiswa Baru</h4>

                                    <div class="row">
                                        <div class="form-group col-md-3 mb-3">
                                            <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                                            <input type="text" class="form-control " id="asal_sekolah"
                                                name="asal_sekolah" required>
                                        </div>

                                        <div class="form-group col-md-3 mb-3">
                                            <label for="tahun_lulus" class="form-label">Tahun Lulus</label>
                                            <select name="tahun_lulus" class="form-control" id="tahun_lulus">
                                                @foreach ($tahunluluss as $tahunlulus)
                                                    <option value="{{ $tahunlulus }}"
                                                        {{ date('Y') == $tahunlulus ? 'selected' : '' }}>
                                                        {{ $tahunlulus }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-3 mb-3">
                                            <label for="jenis_beasiswa" class="form-label">Jenis Beasiswa</label>
                                            <select name="jenis_beasiswa" class="form-control" id="jenis_beasiswa"
                                                disabled>
                                                <option value="KIP Kuliah" selected>KIP Kuliah</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-3 mb-3">
                                            <label for="jurusaan_pendaftaran" class="form-label">Jurusan
                                                Pendaftaran</label>
                                            <select name="jurusaan_pendaftaran" class="form-control"
                                                id="jurusaan_pendaftaran">
                                                @foreach ($tahunluluss as $tahunlulus)
                                                    <option value="{{ $tahunlulus }}"
                                                        {{ date('Y') == $tahunlulus ? 'selected' : '' }}>
                                                        {{ $tahunlulus }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Isi form data siswa di sini -->
                                    <button class="btn btn-primary" onclick="nextTab('orangtua-tab')">Next</button>
                                </div>

                                <!-- Tab 2: Data Orang Tua -->
                                <div class="tab-pane fade" id="orangtua">
                                    <h3>Data Orang Tua</h3>
                                    <!-- Isi form data orang tua di sini -->
                                    <button class="btn btn-secondary" onclick="prevTab('siswa-tab')">Back</button>
                                    <button class="btn btn-primary" onclick="nextTab('rumah-tab')">Next</button>
                                </div>

                                <!-- Tab 3: Data Rumah -->
                                <div class="tab-pane fade" id="rumah">
                                    <h3>Data Rumah</h3>
                                    <!-- Isi form data rumah di sini -->
                                    <button class="btn btn-secondary" onclick="prevTab('orangtua-tab')">Back</button>
                                    <button class="btn btn-success" onclick="simpanData()">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home End -->


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
        <script>
            function nextTab(tabId) {
                const tab = document.getElementById(tabId);
                const tabs = new bootstrap.Tab(tab);
                tabs.show();
            }

            function prevTab(tabId) {
                const tab = document.getElementById(tabId);
                const tabs = new bootstrap.Tab(tab);
                tabs.show();
            }
        </script>
    </body>

</html>
