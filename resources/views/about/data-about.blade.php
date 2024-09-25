@extends('layouts-admin.main-layout')

@section('title', 'Data About')

@section('page-title', 'Data About')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <!-- Button trigger modal -->
                    <div class="d-flex justify-content-start">
                        <a href="{{ route('about.create-data-about') }}" class="btn btn-primary p-2 me-3"
                            data-bs-toggle="modal" data-bs-target="#createDataAboutModal">Add New
                            Data</a>
                        {{-- <a href="{{ route('about.data-softdelete-about') }}" class="btn btn-warning p-2 me-3">Data
                            SoftDelete</a>
                    </div> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Data About Softdelete</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered bs-gray-dark text-white" id="datatable" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            No.</th>
                                        <th scope="col">
                                            Nama</th>
                                        <th scope="col">
                                            Bio</th>
                                        <th scope="col">
                                            Degree</th>
                                        <th scope="col">
                                            Phone</th>
                                        <th scope="col">
                                            Address</th>
                                        <th scope="col">
                                            City</th>
                                        <th scope="col">
                                            Country</th>
                                        <th scope="col">
                                            Birthday</th>
                                        <th scope="col">
                                            Email</th>
                                        <th scope="col">
                                            Foto Profile</th>
                                        <th scope="col">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($about as $item)
                                        <tr>
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>
                                            <td>
                                                {{ $item->user->name }}
                                            </td>
                                            <td>
                                                {{ strip_tags($item->bio) }}
                                            </td>
                                            <td>
                                                {{ $item->degree }}
                                            </td>
                                            <td>
                                                {{ $item->phone }}
                                            </td>
                                            <td>
                                                {{ strip_tags($item->address) }}
                                            </td>
                                            <td>
                                                {{ $item->city }}
                                            </td>
                                            <td>
                                                {{ $item->country }}
                                            </td>
                                            <td>
                                                {{ $item->birthday }}
                                            </td>
                                            <td>
                                                {{ $item->email }}
                                            </td>
                                            <td>
                                                @if ($item->profile_picture && $item->profile_picture != '')
                                                    <img src="{{ asset('storage/' . $item->profile_picture) }}"
                                                        alt="Foto Profil" class="avatar avatar-sm me-3">
                                                @else
                                                    <img src="{{ asset('assets/admin/img/default-img.png') }}"
                                                        alt="Foto Default" class="avatar avatar-sm me-3">
                                                @endif
                                            </td>
                                            <td class="align-middle">
                                                <a href="{{ route('about.edit-data-about', ['id' => $item->id]) }}"
                                                    class="text-white font-weight-bold text-xs badge badge-sm bg-warning"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#editDataAboutModal_{{ $item->id }}">
                                                    Edit
                                                </a>
                                                {{-- <a href="{{ route('about.delete-data-about', ['id' => $item->id]) }}"
                                                    class="text-white font-weight-bold text-xs badge badge-sm bg-danger"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#deleteDataAboutModal_{{ $item->id }}">
                                                    Delete
                                                </a> --}}
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

        @foreach ($about as $item)
            @include('about.edit-data-about')
            {{-- @include('about.delete-data-about') --}}
        @endforeach
    @endsection
