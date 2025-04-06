@include('partials.header')
@if(session('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger" role="alert">
    {{ session('error') }}
</div>
@endif

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
      <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" style="max-height:60rem">
          <div class="carousel-item active">
            <img class="w-100" style="height:100%" src="{{ asset('img/images/19.png') }}" alt="Image" />
            <div class="carousel-caption">
              <div class="container">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <h1 class="display-3 text-dark mb-4 animated slideInDown">
                      Insurance Creates Wealth For Everyone
                    </h1>
                    <p class="fs-5 text-body mb-5">
                      We do the searching, so you do not need to
                    </p>
                    <a href="" class="btn btn-primary py-3 px-5"
                      >More Details</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="w-100" style="height:100%" src="{{ asset('img/images/43.jpg') }}" alt="Image" />
            <div class="carousel-caption">
              <div class="container">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <h1 class="display-3 text-dark mb-4 animated slideInDown">
                      The Best Insurance Begins Here
                    </h1>
                    <p class="fs-5 text-body mb-5">
                      Do not spend time looking for the right deal, trust us to make your life easy!
                    </p>
                    <a href="" class="btn btn-primary py-3 px-5"
                      >More Details</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div
              class="position-relative overflow-hidden rounded ps-5 pt-5 h-100"
              style="min-height: 400px"
            >
              <img
                class="position-absolute w-100 h-100"
                src="{{ asset('img/home/2.jpg') }}"
                alt=""
                style="object-fit: cover"
              />
              <div
                class="position-absolute top-0 start-0 bg-white rounded pe-3 pb-3"
                style="width: 200px; height: 200px"
              >
                <div
                  class="d-flex flex-column justify-content-center text-center bg-primary rounded h-100 p-3"
                >
                  <h1 class="text-white mb-0">25</h1>
                  <h2 class="text-white">Years</h2>
                  <h5 class="text-white mb-0">Experience</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="h-100">
              <h1 class="display-6 mb-5">
                We're Here To Assist With Getting The Best Deal
              </h1>
              <p class="fs-5 text-primary mb-4">
                We Search So You Save. Unlock Insider Deals on Insurance, Loans, and More—With ZERO Effort.
              </p>
              <div class="row g-4 mb-4">
                <div class="col-sm-6">
                  <div class="d-flex align-items-center">
                    <img
                      class="flex-shrink-0 me-3"
                      src="img/icon/icon-04-primary.png"
                      alt=""
                    />
                    <h5 class="mb-0">Flexible Insurance Plans</h5>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="d-flex align-items-center">
                    <img
                      class="flex-shrink-0 me-3"
                      src="img/icon/icon-03-primary.png"
                      alt=""
                    />
                    <h5 class="mb-0">Affordable Deals</h5>
                  </div>
                </div>
              </div>
              <p class="mb-4">
                You’re Overpaying Right Now. Find the Best Deals in Seconds—Before It’s Too Late.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <div class="container-fluid overflow-hidden my-5 px-lg-0">
      <div class="container facts px-lg-0">
        <div class="row g-0 mx-lg-0">
          <div class="col-lg-6 facts-text wow fadeIn" data-wow-delay="0.1s">
            <div class="h-100 px-4 ps-lg-0">
              <h1 class="text-white mb-4">A lot of people choose to trust us</h1>
              <p class="text-light mb-5">
                Numbers do not lie. Track record and still counting
              </p>
              <!--<a href="" class="align-self-start btn btn-secondary py-3 px-5"-->
              <!--  >More Details</a-->
              <!-->-->
            </div>
          </div>
          <div class="col-lg-6 facts-counter wow fadeIn" data-wow-delay="0.5s">
            <div class="h-100 px-4 pe-lg-0">
              <div class="row g-5">
                <div class="col-sm-6">
                  <h1 class="display-5" data-toggle="counter-up">20</h1>
                  <p class="fs-5 text-primary">Partners</p>
                </div>
                <div class="col-sm-6">
                  <h1 class="display-5" data-toggle="counter-up">32</h1>
                  <p class="fs-5 text-primary">Insurance</p>
                </div>
                <div class="col-sm-6">
                  <h1 class="display-5" data-toggle="counter-up">5</h1>
                  <p class="fs-5 text-primary">Paid Loans</p>
                </div>
                <div class="col-sm-6">
                  <h1 class="display-5" data-toggle="counter-up">3504</h1>
                  <p class="fs-5 text-primary">Happy clients</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Facts End -->

    <!-- Features Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="display-6 mb-5">How Easy It Is To Get A Quote</h1>
            <div class="row g-3">
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-light rounded h-100 p-3">
                  <div
                    class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3"
                  >
                    <img
                      class="align-self-center mb-3"
                      src="img/icon/icon-06-primary.png"
                      alt=""
                    />
                    <h5 class="mb-0"><b>Step 1</b>: Tell us what you need</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                <div class="bg-light rounded h-100 p-3">
                  <div
                    class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3"
                  >
                    <img
                      class="align-self-center mb-3"
                      src="img/icon/icon-03-primary.png"
                      alt=""
                    />
                    <h5 class="mb-0"><b>Step 2</b>: Our smart system finds the lowest prices in seconds.</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="bg-light rounded h-100 p-3">
                  <div
                    class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3"
                  >
                    <img
                      class="align-self-center mb-3"
                      src="img/icon/icon-04-primary.png"
                      alt=""
                    />
                    <h5 class="mb-0"><b>Step 3</b>: You compare, choose, and save—100% hassle-free.</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                <div class="bg-light rounded h-100 p-3">
                  <div
                    class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3"
                  >
                    <img
                      class="align-self-center mb-3"
                      src="img/icon/icon-07-primary.png"
                      alt=""
                    />
                    <h5 class="mb-0">It’s that simple.</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div
              class="position-relative rounded overflow-hidden h-100"
              style="min-height: 400px"
            >
              <img
                class="position-absolute w-100 h-100"
                src="img/images/39.jpg"
                alt=""
                style="object-fit: cover"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Features End -->

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
                Secure your loved ones’ future with comprehensive a cover that supports them when they need it most.
              </p>
              <a class="btn btn-light px-3" href="{{ route('life') }}">Read More</a>
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
                <h4 class="mb-0">Car Insurance</h4>
              </div>
              <p class="mb-4">
                Protect your vehicle and finances with coverage designed for everyday drivers and their unique needs.
              </p>
              <a class="btn btn-light px-3" href="{{ route('car-insurance') }}">Read More</a>
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
                <h4 class="mb-0">Motor Warrenty</h4>
              </div>
              <p class="mb-4">
                Keep your car running smoothly with extended protection against unexpected repairs and breakdowns.
              </p>
              <a class="btn btn-light px-3" href="{{ route('motor') }}">Read More</a>
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
                <h4 class="mb-0">Car Tracking</h4>
              </div>
              <p class="mb-4">
                Enhance your vehicle’s security through real-time tracking and instant alerts for complete peace of mind.
              </p>
              <a class="btn btn-light px-3" href="{{ route('tracker') }}">Read More</a>
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
                <h4 class="mb-0">Debt White Listing</h4>
              </div>
              <p class="mb-4">
                Take control of your finances and work toward a debt-free future with our expert guidance and support.
              </p>
              <a class="btn btn-light px-3" href="{{ route('debt') }}">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Service End -->

    <!-- Appointment Start -->
    <div
      class="container-fluid appointment my-5 py-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
            <h1 class="display-6 text-white mb-5">
                We have helped over 1000+ clients get the best deals, we are confident that we can help you too!!!
            </h1>
            <p class="text-white mb-5">
              Have a question? <br>Say Hi and we will be glad to answer all your questions
            </p>
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="bg-white rounded p-5">
              <form action="{{ route('contact.send') }}" method="POST">
                @csrf
                <div class="row g-3">
                  <div class="col-sm-6">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control"
                        id="gname"
                        placeholder="Full Names"
                        name="name"
                      />
                      <label for="gname">Full Names</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-floating">
                      <input
                        type="email"
                        class="form-control"
                        id="gmail"
                        placeholder="Email Address"
                        name="email"
                      />
                      <label for="gmail">Email Address</label>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control"
                        id="cname"
                        placeholder="Phone Number"
                        name="phone"
                      />
                      <label for="cname">Phone Number</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <textarea
                        class="form-control"
                        placeholder="Leave a message here"
                        id="message"
                        style="height: 80px"
                        name="message"
                      ></textarea>
                      <label for="message">Message</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary py-3 px-5" type="submit">
                      submit
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Appointment End -->

    

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center mx-auto" style="max-width: 500px">
          <h1 class="display-6 mb-5">What Our Clients Say</h1>
        </div>
        <div class="row g-5">
          <div class="col-lg-3 d-none d-lg-block">
            {{-- <div class="testimonial-left h-100">
              <img
                class="img-fluid animated pulse infinite"
                src="img/testimonial-1.jpg"
                alt=""
              />
              <img
                class="img-fluid animated pulse infinite"
                src="img/testimonial-2.jpg"
                alt=""
              />
              <img
                class="img-fluid animated pulse infinite"
                src="img/testimonial-3.jpg"
                alt=""
              />
            </div> --}}
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="owl-carousel testimonial-carousel">
              <div class="testimonial-item text-center">
                {{-- <img
                  class="img-fluid rounded mx-auto mb-4"
                  src="img/testimonial-1.jpg"
                  alt=""
                /> --}}
                <p class="fs-5">
                  Search A Deal helped me save thousends of Rands on my insurance. I was able to get the best deal possible for my car.
                </p>
                <h5>Annonymous</h5>
                {{-- <span>Took Car Insurance</span> --}}
              </div>
              <div class="testimonial-item text-center">
                {{-- <img
                  class="img-fluid rounded mx-auto mb-4"
                  src="img/testimonial-2.jpg"
                  alt=""
                /> --}}
                <p class="fs-5">
                  I used to pay R2 500.00 for my car insurance. I was able to get the best deal possible with Search A Deal.
                </p>
                <h5>Annonymous</h5>
              </div>
              <div class="testimonial-item text-center">
                {{-- <img
                  class="img-fluid rounded mx-auto mb-4"
                  src="img/testimonial-3.jpg"
                  alt=""
                /> --}}
                <p class="fs-5">
                  I was blacklisted, I was unable to get any offers, but Thanks to Search A Deal, I was able to get the best deal possible.
                </p>
                <h5>Annonymous</h5>
              </div>
            </div>
          </div>
          {{-- <div class="col-lg-3 d-none d-lg-block">
            <div class="testimonial-right h-100">
              <img
                class="img-fluid animated pulse infinite"
                src="img/testimonial-1.jpg"
                alt=""
              />
              <img
                class="img-fluid animated pulse infinite"
                src="img/testimonial-2.jpg"
                alt=""
              />
              <img
                class="img-fluid animated pulse infinite"
                src="img/testimonial-3.jpg"
                alt=""
              />
            </div>
          </div> --}}
        </div>
      </div>
    </div>
    <!-- Testimonial End -->
@include('partials.footer')