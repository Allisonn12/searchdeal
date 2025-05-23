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
      style="background: url(img/images/6.png) center center no-repeat; background-size: cover;"
    >
        <div class="overlay-color">
      <div class="container py-5">
        <h1 class="display-4 animated text-white slideInDown mb-4">Car Tracker</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0 text-white">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item text-white active" aria-current="page">
                Car Tracker
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
                          “They’ve Already Picked Your Car. Is Your Family Ready for What Comes Next?”
                        </h1>
                        <div class="subtitle">
                            <p class="mb-5">
                               <i>
                                    Unlock the Proven Secret South African Families Use to Outsmart 
                                    Hijackers—Even Under GPS Jamming, Midnight Raids, 
                                    and Insurer Fine Print
                                </i>
                            </p>
                        </div>
                    </div>
                    
                    <div class="break-image">
                        <img src="img/images/5.png" alt="">
                    </div>

                    <div class="col-lg-12 wow fadeIn" data-wow-delay="0.3s">
                        <div class="hlabi-body">
                        <div class="row text-center mb-5">
                            <div class="mb-3">
                                <p>
                                    It happens every 22 minutes.
                                </p>
                                <p>
                                    A driveway goes silent. <br>
                                    A family wakes to emptiness. <br>
                                    And suddenly, all the things you believed made you safe—insurance, alarms, standard trackers—collapse. <br>
                                    Because what the hijackers took wasn’t just a car. <br>
                                    They took your sense of control, your peace of mind, your family's trust in your ability to protect them. <br>
                                    One question now haunts you: <br>
                                    “Why didn’t I see it coming?” <br>

                                </p>
                            </div>
                            <h3 class="text-center mb-3">THE UNSEEN TRUTH EVERY SOUTH AFRICAN FAMILY IGNORES</h3>
                            <div class="hlabi-body">
                                <p>
                                    Hijackers don't just steal—they plan. <br>
                                    They map your daily routes. They note your patterns. They know precisely when and how to strike. <br>
                                    And your current tracker? <br>
                                    It’s nothing but a checkbox. A fragile illusion, shattered by a simple R600 jammer bought online. <br>
                                    Your insurance won’t help. Your premiums mean nothing if your tracker goes offline—even for just one day. <br>
                                    This isn’t speculation. It’s documented fact. <br>
                                </p>
                                <b>INTRODUCING VERIFIED TRACKER CERTAINTY™</b>
                                <p>
                                    Search A Deal presents the first South African platform guaranteed to show ONLY trackers tested and 
                                    proven in live, real-world hijack scenarios—because your family's safety isn't negotiable. <br><br>
                                    Powered by the revolutionary DualShield™ Reliability Matrix, every tracker shown passes FIVE brutal 
                                    tests, each verified by insurers and SAPS.
                                </p>
                            </div>
                        </div>
                        <div class="row text-start mb-5 mt-5">
                            <h3 class="text-center mb-3">THE UNBREAKABLE FIVE-LAYER DUALSHIELD™ RELIABILITY MATRIX:</h3>
                            <div class="hlabi-body">
                                <p>
                                    <b>Layer 1: SAPS-Verified Live Recovery</b> <br>
                                    Real-world recovery rates. Proven outcomes—not promises. <br><br>

                                    <b>Layer 2: JamGuard™ Resistance</b> <br>
                                    Every tracker survives actual GSM/GPS jamming tests. No guesswork allowed. <br><br>

                                    <b>Layer 3: Insurer-Endorsed Redundancy</b> <br>
                                    Qualify for maximum discounts while securing guaranteed backup protocols. <br><br>

                                    <b>Layer 4: Emergency Response Speed</b> <br>
                                    Human-operated 24/7 control rooms tested under real midnight emergencies. <br><br>

                                    <b>Layer 5: POPIA-Compliant Data Protection</b> <br>
                                    Certified privacy protection under South African law. <br><br>
                                </p>
                            </div>
                            <p>Any failure at any layer means immediate removal from our listings—no second chances.</p>
                        </div>

                        <div class="row text-start mb-5 mt-5">
                            <h3 class="text-center mb-3">THE NIGHT THE DUALSHIELD™ PROVED ITS WORTH</h3>
                            <div class="hlabi-body">
                                <p>
                                    <b>2:37 AM, Randburg:</b> <br>
                                    Hijackers targeted a family’s Polo. Within seconds, they activated GPS jammers. <br>
                                    But this wasn't just any tracker. <br>
                                    It automatically switched to unjammable VHF signals. <br>
                                    Within 34 seconds, a human—not a bot—mobilized SAPS. <br>
                                    In under an hour, the car was recovered, the insurer notified, excess waived. <br>
                                    The DualShield™ tracker didn't just track. It fought back. <br>

                                </p>
                            </div>
                        </div>
                        <div class="mb-5 text-center">
                            <p>
                                <b>YOUR LEGACY OF PROTECTION</b> <br>
                                Imagine your child never having to ask if they’re safe—because the answer is already proven. <br>
                                Imagine your partner stepping into the car, knowing you've installed proven, hijacker-resistant certainty. <br>
                                This isn’t insurance paperwork or a hopeful checkbox. <br>
                                It’s the ultimate proof of your commitment to their safety. <br>
                            </p>
                        </div>

                        <div class="text-center">
                            <p>
                                <b>THE THREE UNBREAKABLE PROMISES:</b> <br>
                                <div>
                                    <ol class="text-start">
                                        <li><b>Verified-Only Guarantee:</b> Only trackers proven in real hijacks reach you.</li>
                                        <li><b>No Sales Calls Ever:</b> Total privacy, total control.</li>
                                        <li><b>Legal Compliance Assurance:</b> Fully aligned with South African data privacy and insurer regulations.</li>
                                    </ol>
                                </div>
                            </p>
                        </div>

                        <div class="row mb-5 mt-5">
                            <h3 class="text-center mb-3">YOUR DECISION TODAY DEFINES THEIR TOMORROW</h3>
                            <div class="hlabi-body">
                                <p>
                                    Right now, you have a choice: <br>
                                    Do nothing, and keep hoping your family isn't next. <br>
                                    Or spend just 90 seconds to install guaranteed, verified certainty. <br>
                                    Because protection isn't hope—it's proof. <br>

                                </p>
                            </div>
                        </div>
                         <div class="text-center">
                            <p>
                                <b>Run Your Verified Tracker Scan Now</b> <br>
                                In 90 seconds:
                                <div>
                                    <ul class="text-start">
                                        <li>Choose only from trackers proven in real-world hijackings. </li>
                                        <li> Instantly qualify for maximum insurer discounts. </li>
                                        <li> Install absolute certainty and peace of mind. </li>
                                    </ul>
                                </div>
                                Your family deserves nothing less. <br>
                                Tomorrow, if your driveway goes silent, what will you regret more: <br>
                                The 90 seconds you didn’t take today, or the lifetime of regret? <br>
                                Be the protector your family already believes you are. <br>
                            </p>
                        </div>
                        <div class="text-center">

                            <b>Apply now to make your family truly unstealable.</b> <br>
                        </div>
                        </div>
                    </div>
                    
                </div>
            </div>



              
              <div class="col-lg-12 wow fadeIn hlabi-form" id="form" data-wow-delay="0.5s">
                <div class="bg-light rounded p-5">
                  <h4 class="mb-4">Request A Quote</h4>
                  <form action="{{ route('tracker.submit') }}" method="post">
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
                      <div class="col-sm-12">
                        <input id="checkbox-1" required name="acceptterms" value="true"
                                aria-describedby="checkbox-1" type="checkbox"
                                class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded">
                            <label for="checkbox-1" class="text-sm ml-3 font-medium text-gray-900">I agree to the <a
                                    href="{{ route('terms') }}" class="text-blue-600 hover:underline">terms and conditions</a></label>
                      </div>
                      <div class="col-12">
                        <button class="btn btn-primary py-3 px-5" type="submit">
                          Get Tracker
                        </button>
                      </div>
                    </div>
                    <input type="hidden" name="optinurl" value="https://searchadeal.online/" required>
                    <input type="hidden" name="optindate" value="<?php echo date("d/m/y H:i:s"); ?>" required>
                    <input type="hidden" name="channel" value="JMAff" required>
                    <input type="hidden" name="product" value="Vehicle Tracking" required>
                    <input type="hidden" name="leadsource" value="JMLSSEARCHADEAL9020" required>
                    <input type="hidden" name="affiliateshortcode" value="JMAFFSite15019" required>
                    <input type="hidden" name="offer_id" value="1523" required>
                  </form>
                </div>
              </div>
    
          </div>

        </div>
      </div>
    </div>
    <!-- Car Insurence End -->
@include('partials.footer')