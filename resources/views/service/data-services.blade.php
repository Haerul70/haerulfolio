@extends('layouts-admin.main-layout')

@section('title', 'Data Service')

@section('page-title', 'Data Service')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body pb-2">
                    <!-- Button trigger modal -->
                    <div class="d-flex justufy-content-start">
                        <a href="{{ route('service.create-data-services') }}" class="btn btn-primary me-3"
                            data-bs-toggle="modal" data-bs-target="#createDataServiceModal">Add New
                            Data</a>
                        <a href="{{ route('service.data-softdelete-services') }}" class="btn btn-secondary">Data
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
                    <h6>Data Services</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0" id="myData">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No.</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Title</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Decription</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($dataService as $service)
                                    <tr>
                                        <td class="text-secondary text-center font-weight-bold text-xs">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="text-secondary font-weight-bold text-xs">
                                            {{ $service->title }}
                                        </td>
                                        <td class="text-secondary font-weight-bold text-xs">
                                            {!! Purifier::clean($service->description) !!}
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ route('service.edit-data-services', ['id' => $service->id]) }}"
                                                class="text-white font-weight-bold text-xs badge badge-sm bg-warning"
                                                data-bs-toggle="modal"
                                                data-bs-target="#editDataServiceModal_{{ $service->id }}">
                                                Edit
                                            </a>
                                            <a href="{{ route('service.delete-data-service', ['id' => $service->id]) }}"
                                                class="text-white font-weight-bold text-xs badge badge-sm bg-danger"
                                                data-bs-toggle="modal"
                                                data-bs-target="#deleteDataServiceModal_{{ $service->id }}">
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

    @include('service.create-data-services')

    @foreach ($dataService as $service)
        @include('service.edit-data-services')
        @include('service.delete-data-service')
    @endforeach

@endsection
