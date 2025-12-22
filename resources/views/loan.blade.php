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
  

    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"            
      style="background: url(img/images/money-growth.jpg) center center no-repeat; background-size: cover;"
    >
        <div class="overlay-color">
          <div class="container py-5">
            <h1 class="display-4 animated slideInDown mb-4 text-white">Short Term Loans</h1>
            <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">
                    Short Term Loans
                </li>
              </ol>
            </nav>
          </div>
      </div>
    </div>
    <!-- Page Header End -->
    

   <!-- Car Insurence Start -->
    <div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="container">
        <div class="row g-5">
          
          <div class="main">
            <div class="main-content my-5">

                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.3s">
                    <div class="row">
                        <h1 class="display-6 mb-5">
                          Your Worst Financial Nightmare Just Came True
                        </h1>
                        <div class="subtitle">
                            <p class="mb-5">
                              <i>The Bills Are Due, Savings Are Gone, and Panic Is Setting In—But It Doesn’t Have to End This Way</i>
                            </p>
                        </div>
                    </div>
                    <div class="break-image">
                        <img src="img/images/money-growth.jpg" alt="">
                    </div>
                    <div class="row">
                        <h3>
                          Introducing Search A Deal Partner Instant Short-Term Loans:
                        </h3>
                        <div class="hlabi-body">
                            <div class="points text-start">
                            <p>Your Immediate Escape Route from Financial Panic</p>
                            <p>Here's exactly how we instantly stop your financial nightmare:</p>
                            <ul>
                                <li> <b>Lightning-Fast Approval & Immediate Cash Transfer</b>
                                  Money in your hands quicker than you finish this sentence.
                                  </li>
                                <li> <b>Zero Hidden Fees, Zero Surprises</b>
                                  Complete transparency, clear terms, no shocks.</li>
                                <li> <b>Personalized Repayment Options</b>
                                  Plans built for your life, not against it.</li>
                                <li> <b>Bad Credit, No Credit—You’re Welcome Here</b>
                                  Because your past shouldn't trap you in a hopeless present.</li>
                                <li> <b>Discretion & Respect Guaranteed</b>
                                  Your dignity fully restored, your privacy always protected.</li>
                            </ul>
                            
                        </div>
                        </div>
                    </div>

                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">Feel the Instant Difference:</h3>
                        <div class="hlabi-body">
                            <i class="mb-2"><b>Without Us:</b></i>
                            <div class="points">
                              <ul>
                                <li> Overdue bills → mounting penalties</li>
                                <li> Anxiety → sleepless nights</li>
                                <li> Fear → ruined relationships</li>
                              </ul>
                            </div>
                            <i class="mb-2"><b>With Us:</b></i>
                            <div class="points">
                              <ul>
                                <li> Immediate cash → urgent bills handled</li>
                                <li> Instant relief → stress eliminated</li>
                                <li> Confidence restored → priceless peace</li>
                              </ul>
                            </div>
                        </div>
                    </div>


                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">The Clock Is Ticking—Every Moment Counts</h3>
                        <div class="hlabi-body">
                            <p class="mb-2"><b>Every second wasted multiplies your stress, increases your debt, and deepens your despair.</b></p>
                            <p>You must act right now.</p>
                            <div class="points text-start">
                                <p><b>Take Back Control Immediately:</b></p>
                                
                                <p>
                                  - You deserve better than fear and panic. <br>
                                  - Act decisively and end this nightmare now.
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

              
              <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-light rounded p-5">
                  <h4 class="mb-4 text-center">CLICK BELOW FOR IMMEDIATE RELIEF</h4>
                  <form action="{{ route('loan.submit') }}" method="post">
                    @csrf
                    <div class="row g-3">
                      <div class="col-sm-12">
                        <div class="form-floating">
                          <input
                            type="text"
                            class="form-control"
                            id="gname"
                            placeholder="First Name"
                            name="firstname"
                            required
                          />

                          <label for="gname">First Name *</label>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-floating">
                          <input
                            type="text"
                            class="form-control"
                            id="gname"
                            placeholder="Last Name"
                            name="lastname"
                            required
                          />

                          <label for="gname">Last Name *</label>
                        </div>
                      </div>
                      
                      <div class="col-sm-6">
                        <div class="form-floating">
                          <input
                            type="text"
                            class="form-control"
                            id="phone_number"
                            placeholder="Phone Number, format: 0xx-xxx-xxxx"
                            name="phone1"
                            required
                          />
                          <label for="cname">Phone Number *</label>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-floating">
                          <input
                            type="email"
                            class="form-control"
                            id="gmail"
                            placeholder="Gurdian Email"
                            required
                            name="email"
                          />
                          <label for="gmail">Your Email </label>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-floating">
                          <select name="title" required class="form-select" id="cage">
                            <option selected></option>
                            <option value="Mr">Mr</option>
                            <option value="Mr">Ms</option>
                            <option value="Mrs">Mrs</option>
                          </select>
                          <label for="cage">Title *</label>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-floating">
                          <select name="underdebtreview" class="form-select" id="cage">
                            <option selected></option>
                            <option value="true">Yes</option>
                            <option value="false">No</option>
                            
                          </select>
                          <label for="cage">Are you currently under Debt Review?</label>
                        </div>
                      </div>

                      <div class="col-sm-12">
                        <div class="form-floating">
                          <input
                            type="text"
                            class="form-control"
                            id="gmail"
                            placeholder="ID Number"
                            required
                            name="idnumber"
                          />
                          <label for="gmail">13 Digit ID Number * </label>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <label for="loanamount" class="form-label">How much would you like to loan?</label>
                        <input
                          type="range"
                          class="form-range"
                          min="1000"
                          max="9000"
                          step="500"
                          id="loanamount"
                          name="loanamount"
                          value="1000"
                          oninput="loanOutput.value = 'R ' + Number(this.value).toLocaleString()"
                        >
                        <output id="loanOutput" class="form-text d-block mt-1">R 1 000.00</output>
                      </div>


                      <div class="col-sm-12">
                        <input id="checkbox-1" required name="acceptterms" value="true"
                                aria-describedby="checkbox-1" type="checkbox"
                                class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded">
                            <label for="checkbox-1" class="text-sm ml-3 font-medium text-gray-900">I agree to the <a
                                    href="{{ route('terms') }}" class="text-blue-600 hover:underline">terms and conditions</a></label>
                      </div>
                      <div class="col-12">
                        <button class="btn btn-primary py-3 px-5" type="submit">
                          Get Loan
                        </button>
                      </div>
                    </div>
                    <input type="hidden" name="optinurl" value="https://searchadeal.online/" required>
                    <input type="hidden" name="optindate" value="{{ date('Y-m-d h:i:s') }}" required>
                
                  </form>
                </div>
              </div>

              <div class="container">

                <div class="row text-start  mb-5 mt-5">
                  <h3 class="text-center mb-3">Final Urgent Reminder:</h3>
                  <div class="hlabi-body text-center">
                      <p class="mb-2">Tomorrow could be too late.</p>
                      <p>Stop your nightmare before it spirals beyond control.</p>
                      <h4><i>END YOUR PANIC—ACT NOW</i></h4>
                      <p><i>Because peace of mind can't wait another second.</i></p>
                  </div>
              </div>
              </div>
    
          </div>

        </div>
      </div>
    </div>
    <!-- Car Insurence End -->

    <style>
      ul li{
        list-style: none;
      }
    </style>
@include('partials.footer')