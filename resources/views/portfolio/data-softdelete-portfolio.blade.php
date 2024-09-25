@extends('layouts-admin.main-layout')

@section('title', 'Data Portfolio Softdelete')

@section('page-title', 'Data Portfolio Softdelete')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <a href="{{ route('portfolio.data-portfolios') }}" class="btn btn-primary p-2">Data Portfolio</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Data Portfolio Softdelete</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered bs-gray-dark text-white" id="datatable" style="width:100%;">
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
                                        <td class="text-center">
                                            {{ $loop->iteration }}</td>
                                        <td>
                                            {{ $portfolio->service->title }}
                                        </td>
                                        <td>
                                            {{ $portfolio->title }}
                                        </td>
                                        <td>
                                            {!! $portfolio->description !!}
                                        </td>
                                        <td>
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
