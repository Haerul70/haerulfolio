@extends('layouts-admin.main-layout')

@section('title', 'Data Experience')

@section('page-title', 'Data Experience')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body pb-2">
                    <!-- Button trigger modal -->
                    <div class="d-flex justify-content-start">
                        <a href="{{ route('experience.create-data-experience') }}" class="btn btn-primary me-3"
                            data-bs-toggle="modal" data-bs-target="#createDataExperienceModal">Add New
                            Data</a>
                        <a href="{{ route('experience.data-softdelete-experience') }}" class="btn btn-secondary">Data
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
                    <h6>Data Experiences</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-items-center" id="myData">
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
                                        <td class="text-secondary text-center font-weight-bold text-xs">
                                            {{ $loop->iteration }}</td>
                                        <td class="text-secondary font-weight-bold text-xs">
                                            {{ $experience->service->title }}
                                        </td>
                                        <td class="text-secondary font-weight-bold text-xs">
                                            {{ $experience->company }}
                                        </td>
                                        <td class="text-secondary font-weight-bold text-xs">
                                            {{ $experience->start_date }}
                                        </td>
                                        <td class="text-secondary font-weight-bold text-xs">
                                            {{ $experience->end_date }}
                                        </td>
                                        <td class="text-secondary font-weight-bold text-xs">
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
