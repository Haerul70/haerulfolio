@extends('layouts-guest.main-layout')

@section('title', 'Home')

@section('content')

    <!-- About -->
    @include('about.about')
    <!-- About End -->

    @include('quality.qualification')


    @include('skill.skill')

    <!-- Service -->
    @include('service.service')
    <!-- Service End -->

    <!-- Portfolio -->
    @include('portfolio.portfolio')
    <!-- Portfolio End -->

    <!-- Contact -->
    @include('contact.contact')
    <!-- Contact End -->

@endsection
