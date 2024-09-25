@extends('layouts-admin.main-layout')

@section('title', 'Data Portfolio')

@section('page-title', 'Data Portfolio')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-start">
                        <a href="{{ route('portfolio.create-data-portfolio') }}" class="btn btn-primary p-2 me-3"
                            data-bs-toggle="modal" data-bs-target="#createDataPortfolioModal">Add New Portfolio</a>
                        <a href="{{ route('portfolio.data-softdelete-portfolio') }}" class="btn btn-warning p-2 me-3">Data
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
                    <h6>Data Portfolios</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered bs-gray-dark text-white" id="datatable" style="width:100%;">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        No.</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Category</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Title</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Description</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Project Url</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Image</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($dataPortfolio as $portfolio)
                                    <tr>
                                        <td class="text-center">
                                            {{ $loop->iteration }}</td>
                                        <td>
                                            {{ $portfolio->service->title }}
                                        </td>
                                        <td>
                                            {{ $portfolio->title }}
                                        </td>
                                        <td>
                                            {!! Purifier::clean($portfolio->description) !!}
                                        </td>
                                        <td>
                                            {{ $portfolio->project_url }}
                                        </td>

                                        <td class="text-center">
                                            @if ($portfolio->image_url && $portfolio->image_url != '')
                                                <img src="{{ asset('storage/' . $portfolio->image_url) }}"
                                                    class="avatar avatar-sm me-3" alt="Portfolio Image">
                                            @else
                                                <img src="{{ asset('assets/admin/img/default-img.png') }}"
                                                    alt="Foto Default" class="avatar avatar-sm me-3">
                                            @endif

                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ route('portfolio.edit-data-portfolio', ['id' => $portfolio->id]) }}"
                                                class="text-white font-weight-bold text-xs badge badge-sm bg-warning"
                                                data-bs-toggle="modal"
                                                data-bs-target="#editDataPortfolioModal_{{ $portfolio->id }}">Edit</a>
                                            <a href="{{ route('portfolio.delete-data-portfolio', ['id' => $portfolio->id]) }}"
                                                class="text-white font-weight-bold text-xs badge badge-sm bg-danger"
                                                data-bs-toggle="modal"
                                                data-bs-target="#deleteDataPortfolioModal_{{ $portfolio->id }}">Delete</a>
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

    @include('portfolio.create-data-portfolio')

    @foreach ($dataPortfolio as $portfolio)
        @include('portfolio.edit-data-portfolio')
        @include('portfolio.delete-data-portfolio')
    @endforeach
@endsection
