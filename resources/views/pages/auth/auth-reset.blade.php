<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <title>Reset Password Adewa Backend</title>

        <!-- General CSS Files -->
        <link rel="stylesheet" href="{{ asset('library/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- CSS Libraries -->
        <link rel="stylesheet" href="{{ asset('library/bootstrap-social/bootstrap-social.css') }}">

        <!-- Template CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components.css') }}">
    </head>

    <body>
        <div id="app">
            <section class="section">
                <div class="d-flex align-items-stretch flex-wrap">
                    <div
                        class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 d-flex justify-content-center align-items-center bg-white">
                        <div class="">
                            {{-- <img src="{{ asset('img/stisla-fill.svg') }}" alt="logo" width="80"
                                class="shadow-light rounded-circle mb-5 mt-2"> --}}
                            <h4 class="text-dark font-weight-normal">Reset Password <span class="font-weight-bold">Adewa
                                </span>
                            </h4>
                            <p class="text-muted">
                                Please fill password corectly.
                            </p>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('password.update') }}" class="needs-validation"
                                novalidate="">
                                @csrf
                                <div class="form-group">
                                    <input id="token" type="hidden"
                                        class="form-control @error('token') is-invalid

                                    @enderror"
                                        value="{{ old('token') ?? $request->token }}" name="token" tabindex="1"
                                        autofocus readonly>
                                    @error('token')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid

                                    @enderror"
                                        value="{{ old('email') ?? $request->email }}" name="email" tabindex="1"
                                        readonly>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">New Password</label>
                                    </div>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid

                                    @enderror"
                                        name="password" tabindex="2" required>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">New Password Confirmation</label>
                                    </div>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid

                                    @enderror"
                                        name="password_confirmation" tabindex="2" required>
                                    @error('password_confirmation')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                <div class="d-block bg-danger">
                                    <button class="btn btn-primary btn-lg btn-block">Reset Password</button>
                                </div>

                            </form>

                            <div class="text-small mt-5 text-center">
                                Copyright &copy; Adewa Lampung. Made with 💙 by Kalingga Padel Muhamad
                                <div class="mt-2">
                                    <a href="#">Privacy Policy</a>
                                    <div class="bullet"></div>
                                    <a href="#">Terms of Service</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-12 order-lg-2 min-vh-100 background-walk-y position-relative overlay-gradient-bottom order-1"
                        data-background="https://images.unsplash.com/photo-1534443274343-c6200874852c?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                        <div class="absolute-bottom-left index-2">
                            <div class="text-light p-5 pb-2">
                                <div class="mb-5 pb-3">
                                    {{-- <h1 class="display-4 font-weight-bold mb-2">Good {{ $timePeriod }}</h1> --}}
                                    <h5 class="font-weight-normal text-muted-transparent">Lampung, Indonesia</h5>
                                </div>
                                Photo by <a class="text-light bb" target="_blank"
                                    href="https://unsplash.com/photos/a8lTjWJJgLA">Bayu Anggoro</a> on <a
                                    class="text-light bb" target="_blank" href="https://unsplash.com">Unsplash</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- General JS Scripts -->
        <script src="{{ asset('library/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('library/popper.js/dist/umd/popper.js') }}"></script>
        <script src="{{ asset('library/tooltip.js/dist/umd/tooltip.js') }}"></script>
        <script src="{{ asset('library/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('library/jquery.nicescroll/dist/jquery.nicescroll.min.js') }}"></script>
        <script src="{{ asset('library/moment/min/moment.min.js') }}"></script>
        <script src="{{ asset('js/stisla.js') }}"></script>

        <!-- JS Libraies -->

        <!-- Page Specific JS File -->

        <!-- Template JS File -->
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
    </body>

</html>
