<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/admin/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/admin/img/pavicon2.png') }}">
    <title>
        HaerulFolio | Login Admin
    </title>
    <!-- SwitAlerts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/admin/images/logo-2.png') }}" />

</head>

<body>

    <!-- LOADERS -->
    <div class="loader-bg">
        <div class="loader"></div>
    </div>

    <div class="content-wrapper">
        <div class="row d-flex align-items-center justify-content-center min-vh-100">
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header text-center">
                            <h4 class="card-title">Sign In</h4>
                            <p class="card-description">Enter your email and password to sign in</p>
                        </div>
                        <form action="{{ route('login') }}" method="post" class="row needs-validation" role="form"
                            novalidate>
                            @csrf
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="Email" aria-label="Email" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Password" aria-label="Password" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Sign
                                    in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <!-- SwitcAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Error page -->
    @if ($errors->has('email'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Terjadi Kesalahan!',
                text: '{{ $errors->first('email') }}',
                confirmButtonText: 'OK',
                customClass: {
                    title: 'text-dark', // Menambahkan class CSS untuk warna hitam
                    content: 'text-dark', // Untuk teks konten
                }
            });
        </script>
    @endif

    @if ($errors->has('password'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Terjadi Kesalahan!',
                text: '{{ $errors->first('password') }}',
                confirmButtonText: 'OK',
                customClass: {
                    title: 'text-dark',
                    content: 'text-dark',
                }
            });
        </script>
    @endif

    @if ($errors->has('timeout'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Waktu Anda Habis!',
                text: '{{ $errors->first('timeout') }}',
                confirmButtonText: 'OK',
                customClass: {
                    title: 'text-dark',
                    content: 'text-dark',
                }
            });
        </script>
    @endif

    <script src="{{ asset('assets/admin/js/loader.js') }}"></script>

    <!-- /End error page -->
    <!-- /End Javascript -->

</body>

</html>
