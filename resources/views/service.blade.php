@include('partials.header')
    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
      style="background-image: url(img/images/contact.jpg); background-size: cover;"
    >
      <div class="container py-5">
        <h1 class="display-4 animated slideInDown mb-4">What We Offer</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Services</li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center mx-auto" style="max-width: 500px">
          <h1 class="display-6 mb-5">
            We Provide professional Insurance Services
          </h1>
        </div>
        <div class="row g-4 justify-content-center">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item rounded h-100 p-5">
              <div class="d-flex align-items-center ms-n5 mb-4">
                <div
                  class="service-icon flex-shrink-0 bg-primary rounded-end me-4"
                >
                  <img
                    class="img-fluid"
                    src="img/icon/icon-10-light.png"
                    alt=""
                  />
                </div>
                <h4 class="mb-0">Life Insurance</h4>
              </div>
              <p class="mb-4">
                Secure your loved ones’ future with comprehensive a cover that supports them when they need it most
              </p>
              <a class="btn btn-light px-3" style="cursor: not-allowed; disabled" href="#">Coming Soon</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item rounded h-100 p-5">
              <div class="d-flex align-items-center ms-n5 mb-4">
                <div
                  class="service-icon flex-shrink-0 bg-primary rounded-end me-4"
                >
                  <img
                    class="img-fluid"
                    src="img/icon/icon-01-light.png"
                    alt=""
                  />
                </div>
                <h4 class="mb-0">Medical Insurance</h4>
              </div>
              <p class="mb-4">
                Enjoy peace of mind and easy access to quality healthcare with our flexible medical insurance plans.
              </p>
              <a class="btn btn-light px-3" href="{{ route('medical') }}">Read More</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item rounded h-100 p-5">
              <div class="d-flex align-items-center ms-n5 mb-4">
                <div
                  class="service-icon flex-shrink-0 bg-primary rounded-end me-4"
                >
                  <img
                    class="img-fluid"
                    src="img/icon/icon-05-light.png"
                    alt=""
                  />
                </div>
                <h4 class="mb-0">Motor Warrenty</h4>
              </div>
              <p class="mb-4">
                Keep your car running smoothly with extended protection against unexpected repairs and breakdowns.
              </p>
              <a class="btn btn-light px-3" href="{{ route('motor') }}">Read More</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item rounded h-100 p-5">
              <div class="d-flex align-items-center ms-n5 mb-4">
                <div
                  class="service-icon flex-shrink-0 bg-primary rounded-end me-4"
                >
                  <img
                    class="img-fluid"
                    src="img/icon/icon-08-light.png"
                    alt=""
                  />
                </div>
                <h4 class="mb-0">Car Tracker</h4>
              </div>
              <p class="mb-4">
                Enhance your vehicle’s security through real-time tracking and instant alerts for complete peace of mind.
              </p>
              <a class="btn btn-light px-3" href="{{ route('tracker') }}">Read More</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item rounded h-100 p-5">
              <div class="d-flex align-items-center ms-n5 mb-4">
                <div
                  class="service-icon flex-shrink-0 bg-primary rounded-end me-4"
                >
                  <img
                    class="img-fluid"
                    src="img/icon/icon-07-light.png"
                    alt=""
                  />
                </div>
                <h4 class="mb-0">Debt White List</h4>
              </div>
              <p class="mb-4">
                Take control of your finances and work toward a debt-free future with our expert guidance and support.
              </p>
              <a class="btn btn-light px-3" href="{{ route('debt') }}">Read More</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item rounded h-100 p-5">
              <div class="d-flex align-items-center ms-n5 mb-4">
                <div
                  class="service-icon flex-shrink-0 bg-primary rounded-end me-4"
                >
                  <img
                    class="img-fluid"
                    src="img/icon/icon-06-light.png"
                    alt=""
                  />
                </div>
                <h4 class="mb-0">Car Insurance</h4>
              </div>
              <p class="mb-4">
                Protect your vehicle and finances with coverage designed for everyday drivers and their unique needs.
              </p>
              <a class="btn btn-light px-3" href="{{ route('car-insurance') }}">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Service End -->
@include('partials.footer')