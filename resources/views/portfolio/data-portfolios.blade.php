@extends('layouts-admin.main-layout')

@section('title', 'Data Portfolios')

@section('page-title', 'Data Portfolios')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body pb-0">
                    <div class="d-flex justify-content-start mb-3">
                        <a href="{{ route('portfolio.create-data-portfolio') }}" class="btn btn-primary me-3"
                            data-bs-toggle="modal" data-bs-target="#createDataPortfolioModal">Add New Portfolio</a>
                        <a href="{{ route('portfolio.data-softdelete-portfolio') }}" class="btn btn-secondary me-3">Data
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
                    <h6>Data Portfolios</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-items-center" id="myData">
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
                                        <td class="text-secondary text-center font-weight-bold text-xs">
                                            {{ $loop->iteration }}</td>
                                        <td class="text-secondary font-weight-bold text-xs">
                                            {{ $portfolio->service->title }}
                                        </td>
                                        <td class="text-secondary font-weight-bold text-xs">
                                            {{ $portfolio->title }}
                                        </td>
                                        <td class="text-secondary font-weight-bold text-xs">
                                            {!! Purifier::clean($portfolio->description) !!}
                                        </td>
                                        <td class="text-secondary font-weight-bold text-xs">
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

    @include('portfolio.create-data-portfolio');

    @foreach ($dataPortfolio as $portfolio)
        @include('portfolio.edit-data-portfolio')
        @include('portfolio.delete-data-portfolio')
    @endforeach

@endsection
