 <!-- Video Modal Start -->
 <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-body">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
                 <!-- 16:9 aspect ratio -->
                 <div class="embed-responsive embed-responsive-16by9">
                     <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                         allow="autoplay"></iframe>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Video Modal End -->

 <!-- Header Start -->
 <div class="container-fluid bg-primary d-flex align-items-center mb-5 py-5" id="home" style="min-height: 100vh;">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-lg-5 px-5 pl-lg-0 pb-5 pb-lg-0">
                 @if (optional($abouts)->profile_picture && $abouts->profile_picture != '')
                     <img class="img-fluid rounded-circle shadow-sm"
                         src="{{ asset('storage/' . $abouts->profile_picture) }}" alt="Profile Picture">
                 @else
                     <img class="img-fluid rounded-circle shadow-sm"
                         src="{{ asset('assets/guest/img/default-image.jpg') }}" alt="Foto Default"
                         class="avatar avatar-sm me-3">
                 @endif
             </div>
             <div class="col-lg-7 text-center text-lg-left">
                 <h3 class="text-white font-weight-normal mb-3">I'm</h3>
                 <h1 class="display-4 text-uppercase text-primary mb-2" style="-webkit-text-stroke: 2px #ffffff;">
                     {{ optional(optional($abouts)->user)->name ?? 'Name not available' }}
                 </h1>
                 <h1 class="typed-text-output d-inline font-weight-lighter text-white"></h1>
                 <div class="typed-text d-none">
                     @foreach ($services as $service)
                         <span> {{ $service->title }} </span>
                         @if (!$loop->last)
                             ,
                         @endif
                     @endforeach
                 </div>
                 <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                     <button type="button" class="btn-play" data-toggle="modal" data-src="#"
                         data-target="#videoModal">
                         <span></span>
                     </button>
                     <h5 class="font-weight-normal text-white m-0 ml-4 d-none d-sm-block">Play Video</h5>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Header End -->
