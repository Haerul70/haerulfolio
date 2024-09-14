@extends('layouts-admin.main-layout')

@section('title', 'About Data')

@section('page-title', 'About Data')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body pb-2">
                    <!-- Button trigger modal -->
                    <div class="d-flex justify-content-start">
                        <a href="{{ route('about.create-data-about') }}" class="btn btn-primary me-3" data-bs-toggle="modal"
                            data-bs-target="#createDataAboutModal">Add New
                            Data</a>
                        <a href="{{ route('about.data-softdelete-about') }}" class="btn btn-secondary me-3">Data
                            SoftDelete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h6>Data About Me</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-items-center" id="myData">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No.</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nama</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Bio</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Degree</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Phone</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Address</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        City</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Country</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Birthday</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Email</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Foto Profile</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($dataAbout as $about)
                                    <tr>
                                        <td class="text-secondary text-center font-weight-bold text-xs">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="text-secondary font-weight-bold text-xs">
                                            {{ $about->user->name }}
                                        </td>
                                        <td class="text-secondary font-weight-medium text-xs">
                                            {{ strip_tags($about->bio) }}
                                        </td>
                                        <td class="text-secondary font-weight-medium text-xs">
                                            {{ $about->degree }}
                                        </td>
                                        <td class="text-secondary font-weight-medium text-xs">
                                            {{ $about->phone }}
                                        </td>
                                        <td class="text-secondary font-weight-medium text-xs">
                                            {{ strip_tags($about->address) }}
                                        </td>
                                        <td class="text-secondary font-weight-medium text-xs">
                                            {{ $about->city }}
                                        </td>
                                        <td class="text-secondary font-weight-medium text-xs">
                                            {{ $about->country }}
                                        </td>
                                        <td class="text-secondary font-weight-medium text-xs">
                                            {{ $about->birthday }}
                                        </td>
                                        <td class="text-secondary font-weight-medium text-xs">
                                            {{ $about->email }}
                                        </td>
                                        <td>
                                            @if ($about->profile_picture && $about->profile_picture != '')
                                                <img src="{{ asset('storage/' . $about->profile_picture) }}"
                                                    alt="Foto Profil" class="avatar avatar-sm me-3">
                                            @else
                                                <img src="{{ asset('assets/admin/img/default-img.png') }}"
                                                    alt="Foto Default" class="avatar avatar-sm me-3">
                                            @endif
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ route('about.edit-data-about', ['id' => $about->id]) }}"
                                                class="text-white font-weight-bold text-xs badge badge-sm bg-warning"
                                                data-bs-toggle="modal"
                                                data-bs-target="#editDataAboutModal_{{ $about->id }}">
                                                Edit
                                            </a>
                                            <a href="{{ route('about.delete-data-about', ['id' => $about->id]) }}"
                                                class="text-white font-weight-bold text-xs badge badge-sm bg-danger"
                                                data-bs-toggle="modal"
                                                data-bs-target="#deleteDataAboutModal_{{ $about->id }}">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Modal Add New Data About -->
    @include('about.create-data-about')

    @foreach ($dataAbout as $about)
        @include('about.edit-data-about')
        @include('about.delete-data-about')
    @endforeach

@endsection
