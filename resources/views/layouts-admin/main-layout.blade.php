<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/admin/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/admin/img/pavicon2.png') }}">
    <title>Haerul-Portofolio | @yield('title')</title>
    @include('layouts-admin.styles')
</head>

<body>
    <!-- LOADERS -->
    <div class="loader-bg">
        <div class="loader"></div>
    </div>

    <div class="container-scroller">

        @include('layouts-admin.sidebar')

        <div class="container-fluid page-body-wrapper">

            @include('layouts-admin.navbar')

            @include('layouts-admin.content')

        </div>
    </div>
    @include('layouts-admin.script')
</body>

</html>
