@extends('layouts-admin.main-layout')

@section('title', 'Data Portfolios')

@section('page-title', 'Data Portfolios')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body pb-0">
                    <a href="{{ route('portfolio.data-portfolios') }}" class="btn btn-primary">Data Portfolio</a>
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
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No.</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Category</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Title</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Description</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Project Url</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Image</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
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
                                            {!! $portfolio->description !!}
                                        </td>
                                        <td class="text-secondary font-weight-bold text-xs">
                                            {{ $portfolio->project_url }}
                                        </td>

                                        <td>
                                            @if ($portfolio->image_url && $portfolio->image_url != '')
                                                <img src="{{ asset('storage/' . $portfolio->image_url) }}"
                                                    class="avatar avatar-sm me-3" alt="Portfolio Image">
                                            @else
                                                <img src="{{ asset('assets/admin/img/default-img.png') }}"
                                                    alt="Foto Default" class="avatar avatar-sm me-3">
                                            @endif

                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ route('portfolio.restore-data-softdelete-portfolio', ['id' => $portfolio->id]) }}"
                                                class="text-white font-weight-bold text-xs badge badge-sm bg-success"
                                                data-bs-toggle="modal"
                                                data-bs-target="#restoreDataSoftDeletePortfolioModal_{{ $portfolio->id }}">Restore</a>
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

    @foreach ($dataPortfolio as $portfolio)
        @include('portfolio.restore-modal')
    @endforeach
@endsection
