<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <title>@yield('title') - Hasil Seleksi SPK C45</title>

        <!-- General CSS Files -->
        <link rel="stylesheet" href="{{ asset('library/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        @stack('style')

        <!-- Template CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components.css') }}">
        <style>
            .bg-edit {
                box-shadow: 0 2px 6px #d3e6f9;
                background: #d3e6f9 !important;
                color: #005ba4 !important;
                padding: 50px;

            }

            .bg-edit i {
                font-size: 45px;
            }
        </style>

        <!-- Start GA -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-94034622-3');
        </script>
        <!-- END GA -->
    </head>
    </head>

    <body>

        <div class="container ">
            <div class="mb-4">
                <div class="col-12 mt-5 mb-5 text-center">
                    <h6 class="font-weight-bold">LAPORAN HASIL ANALISA SELEKSI BEASISWA KIP KULIAH IIB
                        DARMAJAYA {{ date('Y') }}</h6>
                    <h6 class="font-weight-bold"> MENGGUNAKAN ALGORITMA
                        C45</h6>
                </div>
                <section class="section mb-5">

                    <div class="table-responsive">
                        <table class="table table-bordered table-lg">
                            <thead>
                                <tr align="center">
                                    <th style="width: 3%">No</th>
                                    <th>Nama</th>
                                    <th>Jurusan</th>
                                    <th>Hasil Keputusan </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($penilaians as $penilaian)
                                    <tr class="text-center">
                                        <td>
                                            {{ $loop->iteration }}
                                        </td>
                                        <td>
                                            {{ $penilaian->alternatif->nama_siswa }}
                                        </td>
                                        <td>
                                            {{ $penilaian->alternatif->jurusaan_pendaftaran }}
                                        </td>
                                        <td>
                                            {{ $penilaian->hasil_keputusan }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>



                </section>
                <div class="d-flex justify-content-end">
                    Bandar Lampung, {{ date('D m Y') }}
                    <br>
                    Wakil Rektor III IIB Darmajaya
                    <br>
                    <br>
                    <br>
                    <br>
                    Muprihan Thaib, S.Sos., M.M
                    <br>
                    NIK. 13370514
                </div>

            </div>
        </div>






        <script src="{{ asset('js/stisla.js') }}"></script>

        @stack('scripts')
        <script>
            window.print();
        </script>

        <!-- Template JS File -->
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>

    </body>

</html>
