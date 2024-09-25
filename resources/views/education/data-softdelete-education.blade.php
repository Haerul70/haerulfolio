@extends('layouts-admin.main-layout')

@section('title', 'Data Education Softdelete')

@section('page-title', 'Data Education Softdelete')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <!-- Button trigger modal -->
                    <div class="d-flex justify-content-start">
                        <a href="{{ route('education.data-education') }}" class="btn btn-primary p-2">Data Education</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Data Education Softdelete</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered bs-gray-dark text-white" id="datatable" style="width:100%;">
                            <thead>
                                <tr>
                                    <th class="text-secondary text-xxs font-weight-bolder opacity-7">
                                        No.</th>
                                    <th class="text-secondary text-xxs font-weight-bolder opacity-7">
                                        Major</th>
                                    <th class="text-secondary text-xxs font-weight-bolder opacity-7">
                                        School Name</th>
                                    <th class="text-secondary text-xxs font-weight-bolder opacity-7">
                                        Description</th>
                                    <th class="text-secondary text-xxs font-weight-bolder opacity-7">
                                        Start Date</th>
                                    <th class="text-secondary text-xxs font-weight-bolder opacity-7">
                                        End Date</th>
                                    <th class="text-secondary text-xxs font-weight-bolder opacity-7">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($dataEducation as $education)
                                    <tr>
                                        <td class="text-center">
                                            {{ $loop->iteration }}</td>
                                        <td>
                                            {{ $education->major }}
                                        </td>
                                        <td>
                                            {{ $education->school_name }}
                                        </td>
                                        <td>
                                            {{ strip_tags($education->description) }}
                                        </td>
                                        <td>
                                            {{ $education->start_date }}
                                        </td>
                                        <td>
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
