<!-- Portfolio Start -->
<div class="container-fluid pt-5 pb-3" id="portfolio">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Gallery</h1>
            <h1 class="position-absolute text-uppercase text-primary">My Portfolio</h1>
        </div>
        <div class="row">
            <div class="col-12 text-center mb-2">
                <ul class="list-inline mb-4" id="portfolio-flters">
                    <li class="btn btn-sm btn-outline-primary m-1 active" data-filter="*">All</li>
                    <li class="btn btn-sm btn-outline-primary m-1" data-filter=".first">UI/UX Design</li>
                    <li class="btn btn-sm btn-outline-primary m-1" data-filter=".second">Web Development</li>
                    <li class="btn btn-sm btn-outline-primary m-1" data-filter=".third">Social Media Marketing</li>
                </ul>
            </div>
        </div>
        <div class="row portfolio-container">
            @foreach ($portfolioAll as $portfolio)
                <div
                    class="col-lg-4 col-md-6 mb-4 portfolio-item {{ $portfolio->service_id == 5 ? 'first' : ($portfolio->service_id == 3 ? 'second' : 'third') }}">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="{{ Storage::url($portfolio->image_url) }}"
                            alt="Portfolio Image">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <!-- Link ke website -->
                            <a href="{{ $portfolio->project_url }}" target="_blank" title="Visit Project">
                                <i class="fa fa-solid fa-link icon-portfolio"></i></a>

                            <!--Zoom In-->
                            <a href="{{ Storage::url($portfolio->image_url) }}"title="{{ $portfolio->title }}"
                                data-lightbox="portfolio">
                                <i class="fa fa-plus icon-portfolio" title="Zoom In"></i></a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Portfolio End -->
