@extends('layouts-admin.main-layout')

@section('title', 'Data Experience Softdelete')

@section('page-title', 'Data Experience Softdelete')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <!-- Button trigger modal -->
                    <div class="d-flex justify-content-start">
                        <a href="{{ route('experience.data-experiences') }}" class="btn btn-primary p-2">Data Experience</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Data Experience Softdelete</h6>
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
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Company</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Start Date</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        End Date</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Description</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($dataExperience as $experience)
                                    <tr>
                                        <td class="text-center">
                                            {{ $loop->iteration }}</td>
                                        <td>
                                            {{ $experience->service->title }}
                                        </td>
                                        <td>
                                            {{ $experience->company }}
                                        </td>
                                        <td>
                                            {{ $experience->start_date }}
                                        </td>
                                        <td>
                                            {{ $experience->end_date }}
                                        </td>
                                        <td>
                                            {{ $experience->description }}
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ route('experience.restore-data-softdelete-experience', ['id' => $experience->id]) }}"
                                                class="text-white font-weight-bold text-xs badge badge-sm bg-warning"
                                                data-bs-toggle="modal"
                                                data-bs-target="#restoreDataSoftDeleteExperienceModal_{{ $experience->id }}">
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

    @foreach ($dataExperience as $experience)
        @include('experience.restore-modal')
    @endforeach

@endsection
