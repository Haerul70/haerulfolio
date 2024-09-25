  <!-- Services Start -->
  <div class="container-fluid pt-5" id="service">
      <div class="container">
          <div class="position-relative d-flex align-items-center justify-content-center">
              <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">
                  Service</h1>
              <h1 class="position-absolute text-uppercase text-primary">My Services</h1>
          </div>
          <div class="row pb-3">
              @foreach ($services as $service)
                  <div class="col-lg-4 col-md-6 text-center mb-5">

                      <div class="d-flex align-items-center justify-content-center mb-4">
                          <i class="fa fa-2x fa-laptop service-icon bg-primary text-white mr-3"></i>
                          <h4 class="card-title font-weight-bold m-0">{{ $service->title }}</h4>
                      </div>
                      <div class="card text-justify bg-primary text-white">
                          <div class="card-body">
                              <p>{!! Purifier::clean($service->description) !!}</p>
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>
      </div>
  </div>
  <!-- Services End -->
