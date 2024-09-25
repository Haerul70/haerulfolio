<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <title>Haerul-Portofolio | @yield('title')</title>

    @include('layouts-guest.styles')

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    @include('layouts-guest.navbar')

    @include('layouts-guest.header')

    @include('about.about')

    @include('quality.qualification')

    @include('service.service')

    @include('skill.skill')

    @include('portfolio.portfolio')

    @include('contact.contact')

    @include('layouts-guest.footer')

    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-dark px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>

    @include('layouts-guest.scripts')
</body>

</html>
