@extends('layouts-admin.main-layout')

@section('title', 'Data Skill Softdelete')

@section('page-title', 'Data Skill Softdelete')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <a href="{{ route('skill.data-skills') }}" class="btn btn-primary p-2">Data Skill</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Data Skill Softdelete</h6>
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
                                            <a href="{{ route('skill.restore-data-softdelete-skill', ['id' => $skill->id]) }}"
                                                class="text-white font-weight-bold text-xs badge badge-sm bg-warning"
                                                data-bs-toggle="modal"
                                                data-bs-target="#restoreDataSoftDeleteSkillModal_{{ $skill->id }}">
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

    @foreach ($dataSkill as $skill)
        @include('skill.restore-modal')
    @endforeach

@endsection
