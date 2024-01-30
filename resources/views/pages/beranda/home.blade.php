<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>IIB Darmajaya - Beranda Registrasi Beasiswa KIP Kuliah</title>

        <style>
            * {
                box-sizing: border-box;
            }

            .home .container-fluid {
                height: 100vh;
                background-image: linear-gradient(rgba(0, 0, 0, 0.4),
                        rgba(0, 0, 0, 0.4)), url("https://www.darmajaya.ac.id/wp-content/uploads/3-161.jpg");
                background-size: cover;
                background-position: center;
            }

            .home .text-slogan h3 {
                font-size: 27pt;
                margin: 0;
                color: #fff;
            }

            .home .text-slogan h1 {
                font-size: 45pt;
                font-weight: bold;
                color: #fff;
            }
        </style>
    </head>

    <body>
        <!-- Home Start -->
        <div class="home">
            <div class="container-fluid d-flex justify-content-center align-items-center">
                <div class="text-slogan text-center">
                    <h3>Sistem Penerimaan Beasiswa KIP Kuliah IIB Darmajaya</h3>
                    <h1>#The Best</h1>
                    <a href="{{ route('beranda.daftar') }}" class="btn btn-primary">Daftar</a>
                </div>
            </div>
        </div>
        <!-- Home End -->


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    </body>

</html>
