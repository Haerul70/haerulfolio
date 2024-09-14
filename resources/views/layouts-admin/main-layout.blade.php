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

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>

    @include('layouts-admin.sidebar')

    <main class="main-content position-relative border-radius-lg ">

        @include('layouts-admin.navbar')

        @include('layouts-admin.content')

        @include('layouts-admin.script')

    </main>
</body>

</html>
