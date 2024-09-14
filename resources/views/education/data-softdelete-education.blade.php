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
                        <a href="{{ route('education.data-education') }}" class="btn btn-primary">Data Education</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Data Educatios</h6>
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
                                @forelse ($dataExperience as $education)
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
                                            {{ strip_tags($education->description) }}
                                        </td>
                                        <td class="text-secondary font-weight-bold text-xs">
                                            {{ $education->start_date }}
                                        </td>
                                        <td class="text-secondary font-weight-bold text-xs">
                                            {{ $education->end_date }}
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ route('education.restore-data-softdelete-education', ['id' => $education->id]) }}"
                                                class="text-white font-weight-bold text-xs badge badge-sm bg-warning"
                                                data-bs-toggle="modal"
                                                data-bs-target="#restoreDataSoftDeleteEducationModal_{{ $education->id }}">
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

    @foreach ($dataEducation as $education)
        @include('education.restore-modal')
    @endforeach

@endsection
