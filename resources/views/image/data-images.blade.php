@extends('layouts-admin.main-layout')

@section('title', 'Data Images')

@section('page-title', 'Data Images')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body pb-2">
                    <!-- Button trigger modal -->
                    <div class="d-flex justify-content-start">
                        <a href="{{ route('image.create-data-image') }}" class="btn btn-primary me-3" data-bs-toggle="modal"
                            data-bs-target="#createDataImageModal">Add New
                            Data</a>
                        <a href="{{ route('image.data-softdelete-image') }}" class="btn btn-secondary">Data
                            SoftDelete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Data Images</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-items-center" id="myData">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No.</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Image</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($dataImage as $image)
                                    <tr>
                                        <td class="text-secondary text-center font-weight-bold text-xs">
                                            {{ $loop->iteration }}</td>
                                        <td class="text-secondary font-weight-bold text-xs">
                                            {{ $image->skill->title }}
                                        </td>
                                        <td class="text-secondary font-weight-bold text-xs">
                                            {{ $image->company }}
                                        </td>
                                        <td class="text-secondary font-weight-bold text-xs">
                                            {{ $image->start_date }}
                                        </td>
                                        <td class="text-secondary font-weight-bold text-xs">
                                            {{ $image->end_date }}
                                        </td>
                                        <td class="text-secondary font-weight-bold text-xs">
                                            {{ $image->description }}
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ route('image.edit-data-image', ['id' => $image->id]) }}"
                                                class="text-white font-weight-bold text-xs badge badge-sm bg-warning"
                                                data-bs-toggle="modal"
                                                data-bs-target="#editDataImageModal_{{ $image->id }}">
                                                Edit
                                            </a>
                                            <a href="{{ route('image.delete-data-image', ['id' => $image->id]) }}"
                                                class="text-white font-weight-bold text-xs badge badge-sm bg-danger"
                                                data-bs-toggle="modal"
                                                data-bs-target="#deleteDataImageModal_{{ $image->id }}">
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

    @include('image.create-data-image')

    @foreach ($dataImage as $image)
        @include('image.edit-data-image')
        @include('image.delete-data-image')
    @endforeach

@endsection
