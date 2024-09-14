@extends('layouts-admin.main-layout')

@section('title', 'Data Education')

@section('page-title', 'Data Education')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body pb-2">
                    <!-- Button trigger modal -->
                    <div class="d-flex justify-content-start">
                        <a href="{{ route('education.create-data-education') }}" class="btn btn-primary me-3"
                            data-bs-toggle="modal" data-bs-target="#createDataEducationModal">Add New
                            Data</a>
                        <a href="{{ route('education.data-softdelete-education') }}" class="btn btn-secondary">Data
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
                    <h6>Data Educations</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-items-center" id="myData">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No.</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Major</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        School Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Description</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Start Date</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        End Date</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($dataEducation as $education)
                                    <tr>
                                        <td class="text-secondary text-center font-weight-bold text-xs">
                                            {{ $loop->iteration }}</td>
                                        <td class="text-secondary font-weight-bold text-xs">
                                            {{ $education->major }}
                                        </td>
                                        <td class="text-secondary font-weight-bold text-xs">
                                            {{ $education->school_name }}
                                        </td>
                                        <td class="text-secondary font-weight-bold text-xs">
                                            {!! $education->description !!}
                                        </td>
                                        <td class="text-secondary font-weight-bold text-xs">
                                            {{ \Carbon\Carbon::parse($education->start_date)->format('Y') }}
                                        </td>
                                        <td class="text-secondary font-weight-bold text-xs">
                                            {{ \Carbon\Carbon::parse($education->end_date)->format('Y') }}
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ route('education.edit-data-education', ['id' => $education->id]) }}"
                                                class="text-white font-weight-bold text-xs badge badge-sm bg-warning"
                                                data-bs-toggle="modal"
                                                data-bs-target="#editDataEducationModal_{{ $education->id }}">
                                                Edit
                                            </a>
                                            <a href="{{ route('education.delete-data-education', ['id' => $education->id]) }}"
                                                class="text-white font-weight-bold text-xs badge badge-sm bg-danger"
                                                data-bs-toggle="modal"
                                                data-bs-target="#deleteDataEducationModal_{{ $education->id }}">
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

    @include('education.create-data-education')

    @foreach ($dataEducation as $education)
        @include('education.edit-data-education')
        @include('education.delete-data-education')
    @endforeach

@endsection
