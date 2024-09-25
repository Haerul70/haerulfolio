<!-- About Start -->
<div class="container-fluid py-5" id="about">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">About</h1>
            <h1 class="position-absolute text-uppercase text-primary">About Me</h1>
        </div>
        <div class="row align-items-start">
            <div class="col-lg-5 pb-4 pb-lg-0">
                @if (optional($abouts)->profile_picture && $abouts->profile_picture != '')
                    <img class="img-fluid rounded w-100 shadow-sm"
                        src="{{ asset('storage/' . $abouts->profile_picture) }}" alt="Profile Picture">
                @else
                    <img class="img-fluid rounded w-100 shadow-sm"
                        src="{{ asset('assets/guest/img/default-image.jpg') }}" alt="Foto Default"
                        class="avatar avatar-sm me-3">
                @endif

            </div>
            <div class="col-lg-7">
                <h3 class="mb-4">UI Designer & Web Developer</h3>
                <p class="text-justify">{{ optional($abouts)->bio ? strip_tags($abouts->bio) : 'Bio not available' }}
                </p>
                <div class="row mb-3">
                    <div class="col-sm-6 py-2">
                        <h6>Name: <span
                                class="text-secondary">{{ optional(optional($abouts)->user)->name ?? 'Name not available' }}</span>
                        </h6>
                    </div>
                    <div class="col-sm-6 py-2">
                        <h6>Birthday: <span class="text-secondary">
                                {{ optional($abouts)->birthday ? \Carbon\Carbon::parse($abouts->birthday)->format('d F Y') : 'Birthday not available' }}
                            </span></h6>
                    </div>
                    <div class="col-sm-6 py-2">
                        <h6>Degree: <span
                                class="text-secondary">{{ optional($abouts)->degree ?? 'Degree not available' }}</span>
                        </h6>
                    </div>
                    <div class="col-sm-6 py-2">
                        <h6>City: <span
                                class="text-secondary">{{ optional($abouts)->city ?? 'City not available' }}</span></h6>
                    </div>
                    <div class="col-sm-6 py-2">
                        <h6>Email: <span
                                class="text-secondary">{{ optional($abouts)->email ?? 'Email not available' }}</span>
                        </h6>
                    </div>
                    <div class="col-sm-6 py-2">
                        <h6>Phone: <span
                                class="text-secondary">{{ optional($abouts)->phone ?? 'Phone not available' }}</span>
                        </h6>
                    </div>
                    <div class="col-sm-6 py-2 d-flex align-items-center">
                        <h6>Address: <span
                                class="text-secondary">{{ optional($abouts)->address ? strip_tags($abouts->address) : 'Address not available' }}</span>
                        </h6>
                    </div>
                    <div class="col-sm-6 py-2">
                        <h6>Country: <span
                                class="text-secondary">{{ optional($abouts)->country ?? 'Country not available' }}</span>
                        </h6>
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
