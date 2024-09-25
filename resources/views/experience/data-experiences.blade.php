@extends('layouts-admin.main-layout')

@section('title', 'Data Experience')

@section('page-title', 'Data Experience')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <!-- Button trigger modal -->
                    <div class="d-flex justify-content-start">
                        <a href="{{ route('experience.create-data-experience') }}" class="btn btn-primary p-2 me-3"
                            data-bs-toggle="modal" data-bs-target="#createDataExperienceModal">Add New
                            Data</a>
                        <a href="{{ route('experience.data-softdelete-experience') }}" class="btn btn-warning p-2">Data
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
                    <h6>Data Experiences</h6>
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
                                            {!! Purifier::clean($experience->description) !!}
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ route('experience.edit-data-experience', ['id' => $experience->id]) }}"
                                                class="text-white font-weight-bold text-xs badge badge-sm bg-warning"
                                                data-bs-toggle="modal"
                                                data-bs-target="#editDataExperienceModal_{{ $experience->id }}">
                                                Edit
                                            </a>
                                            <a href="{{ route('experience.delete-data-experience', ['id' => $experience->id]) }}"
                                                class="text-white font-weight-bold text-xs badge badge-sm bg-danger"
                                                data-bs-toggle="modal"
                                                data-bs-target="#deleteDataExperienceModal_{{ $experience->id }}">
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

    @include('experience.create-data-experience')

    @foreach ($dataExperience as $experience)
        @include('experience.edit-data-experience')
        @include('experience.delete-data-experience')
    @endforeach

@endsection
