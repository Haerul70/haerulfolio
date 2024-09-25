@extends('layouts-admin.main-layout')

@section('title', 'Data Service Softdelete')

@section('page-title', 'Data Service Softdelete')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <!-- Button trigger modal -->
                    <div class="d-flex justufy-content-start">
                        <a href="{{ route('service.data-services') }}" class="btn btn-primary p-2">Data
                            Service</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Data Service Softdelete</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered bs-gray-dark text-white" id="datatable" style="width:100%;">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No.</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Title</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Decription</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($dataService as $service)
                                    <tr>
                                        <td class="text-center">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td>
                                            {{ $service->title }}
                                        </td>
                                        <td>
                                            {{ $service->description }}
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ route('service.restore-data-softdelete-service', ['id' => $service->id]) }}"
                                                class="text-white font-weight-bold text-xs badge badge-sm bg-success"
                                                data-bs-toggle="modal"
                                                data-bs-target="#restoreDataSoftDeleteServiceModal_{{ $service->id }}">
                                                Restore
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


    @foreach ($dataService as $service)
        @include('service.restore-modal')
    @endforeach

@endsection
