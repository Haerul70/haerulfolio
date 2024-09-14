<!-- Qualification Start -->
<div class="container-fluid py-5" id="qualification">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Quality</h1>
            <h1 class="position-absolute text-uppercase text-primary">Education & Expericence</h1>
        </div>
        <div class="row align-items-between text-justify">
            <div class="col-lg-6">
                <h3 class="mb-4">My Education</h3>
                <div class="border-left border-primary pt-2 pl-4 ml-2">
                    @foreach ($educations as $education)
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute"
                                style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">{{ $education->major }}</h5>
                            <p class="mb-2"><strong>{{ $education->school_name }}</strong> |
                                <small>{{ \Carbon\Carbon::parse($education->start_date)->format('Y') }} -
                                    {{ \Carbon\Carbon::parse($education->end_date)->format('Y') }}</small>
                            </p>
                            <p class="text-justify">{!! Purifier::clean($education->description) !!}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="mb-4">My Expericence</h3>
                <div class="border-left border-primary pt-2 pl-4 ml-2">
                    @foreach ($experiences as $experience)
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute"
                                style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">{{ $experience->service->title }}</h5>
                            <p class="mb-2"><strong>{{ $experience->company }}</strong> |
                                <small>{{ \Carbon\Carbon::parse($experience->start_date)->format('F Y') }} -
                                    {{ \Carbon\Carbon::parse($experience->end_date)->format('F Y') }}</small>
                            </p>
                            <p class="text-justify">{!! Purifier::clean($experience->description) !!}</p>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Qualification End -->
