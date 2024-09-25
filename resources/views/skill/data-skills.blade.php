@extends('layouts-admin.main-layout')

@section('title', 'Data Skill')

@section('page-title', 'Data Skill')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <!-- Button trigger modal -->
                    <a href="{{ route('skill.create-data-skill') }}" class="btn btn-primary p-2 me-3" data-bs-toggle="modal"
                        data-bs-target="#createDataSkillModal">Add New
                        Data</a>
                    <a href="{{ route('skill.data-softdelete-skill') }}" class="btn btn-warning p-2">Data SoftDelete</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Data Skills</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered bs-gray-dark text-white" id="datatable" style="width:100%;">
                            <thead>
                                <tr>
                                    <th
                                        class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                        NO.</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Skill Type</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Title</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($dataSkill as $skill)
                                    <tr>
                                        <td class="text-center">
                                            {{ $loop->iteration }}</td>
                                        <td>
                                            {{ $skill->skills_type->type }}
                                        <td>
                                            {{ $skill->title }}
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ route('skill.edit-data-skill', ['id' => $skill->id]) }}"
                                                class="text-white font-weight-bold text-xs badge badge-sm bg-warning"
                                                data-bs-toggle="modal"
                                                data-bs-target="#editDataSkillModal_{{ $skill->id }}">
                                                Edit
                                            </a>
                                            <a href="{{ route('skill.delete-data-skill', ['id' => $skill->id]) }}"
                                                class="text-white font-weight-bold text-xs badge badge-sm bg-danger"
                                                data-bs-toggle="modal"
                                                data-bs-target="#deleteDataSkillModal_{{ $skill->id }}">
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

    @include('skill.create-data-skill')

    @foreach ($dataSkill as $skill)
        @include('skill.edit-data-skill')
        @include('skill.delete-data-skill')
    @endforeach

@endsection
