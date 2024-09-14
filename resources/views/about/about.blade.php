<!-- About Start -->
<div class="container-fluid py-5" id="about">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">About</h1>
            <h1 class="position-absolute text-uppercase text-primary">About Me</h1>
        </div>
        <div class="row align-items-start">
            <div class="col-lg-5 pb-4 pb-lg-0">
                <img class="img-fluid rounded w-100" src="{{ Storage::url($abouts->profile_picture) }}"
                    alt="Profile Picture" width="200px">
            </div>
            <div class="col-lg-7">
                <h3 class="mb-4">UI Designer & Web Developer</h3>
                <p class="text-justify">{{ strip_tags($abouts->bio) }}</p>
                <div class="row mb-3">
                    <div class="col-sm-6 py-2">
                        <h6>Name: <span class="text-secondary">{{ $abouts->user->name }}</span></h6>
                    </div>
                    <div class="col-sm-6 py-2">
                        <h6>Birthday: <span class="text-secondary">{{ $abouts->birthday }}</span></h6>
                    </div>
                    <div class="col-sm-6 py-2">
                        <h6>Degree: <span class="text-secondary">{{ $abouts->degree }}</span></h6>
                    </div>
                    <div class="col-sm-6 py-2">
                        <h6>City: <span class="text-secondary">{{ $abouts->city }}</span></h6>
                    </div>
                    <div class="col-sm-6 py-2">
                        <h6>Email: <span class="text-secondary">{{ $abouts->email }}</span></h6>
                    </div>
                    <div class="col-sm-6 py-2">
                        <h6>Phone: <span class="text-secondary">{{ $abouts->phone }}</span></h6>
                    </div>
                    <div class="col-sm-6 py-2 d-flex align-items-center">
                        <h6>Address: <span class="text-secondary">{{ strip_tags($abouts->address) }}</span></h6>
                    </div>
                    <div class="col-sm-6 py-2">
                        <h6>Country: <span class="text-secondary">{{ $abouts->country }}</span></h6>
                    </div>
                </div>
                <a href="mailto:haerulali70@gmail.com?subject=Hire%20Me" class="btn btn-outline-primary mr-4">Hire
                    Me</a>
                {{-- <a href="" class="btn btn-outline-primary">Learn More</a> --}}
            </div>
        </div>
    </div>
</div>
<!-- About End -->
