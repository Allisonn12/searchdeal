

{{-- @include('cookie-consent') --}}
    <!-- Footer Start -->
    <div
      class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6">
            <h1 class="text-white mb-4">
              Search A Deal
            </h1>
            <p>
              Search a deal makes peoples lives easier, by partnering up with the lowest insurance so that this could be your one and only stop.
            </p>
            <div class="d-flex pt-2">
              <a class="btn btn-square me-1" href=""
                ><i class="fab fa-twitter"></i
              ></a>
              <a class="btn btn-square me-1" href=""
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a class="btn btn-square me-1" href=""
                ><i class="fab fa-youtube"></i
              ></a>
              <a class="btn btn-square me-0" href=""
                ><i class="fab fa-linkedin-in"></i
              ></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Contact</h5>
            <p><i class="fa fa-envelope me-3"></i>support@searchadeal.online</p>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Quick Links</h5>
            <!--<a class="btn btn-link" href="">About Us</a>-->
            <a class="btn btn-link" href="{{ route('contact') }}">Contact Us</a>
            <a class="btn btn-link" href="{{ route('service') }}">Our Services</a>
            <a class="btn btn-link" href="{{ route('terms') }}">Terms & Condition</a>
            <a class="btn btn-link" href="{{ route('policy') }}">Private Policy</a>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Important</h5>
            <p>Please note: This website contains affiliate links and is partnered with leading 
              brands to bring you the best deals. By clicking on links, you consent 
              to sharing your details with our partners</p>
            
          </div>
        </div>
      </div>
      <div class="container-fluid copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
              &copy; <a href="#">Search A Deal</a>, All Right Reserved.
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>
    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>
