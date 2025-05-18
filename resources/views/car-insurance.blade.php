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
      style="background: url(img/images/16.png) center center no-repeat;"
    >
      <div class="overlay-color">
          <div class="container py-5">
        <h1 class="display-4 animated text-white slideInDown mb-4">Car Insurance</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0 text-white">
            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
            <li class="breadcrumb-item active text-white" aria-current="page">
                Car Insurance
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
                        <h1 class="display-6 mb-3">
                            The Secret 60-Second Decision South African Families Are Using to Guarantee Financial Security—Forever.
                        </h1>
                        <div class="subtitle">
                            <p class="mb-5">
                                <i>Discover the Revolutionary Method Turning Car Insurance into Instant Peace of Mind, Proven Savings, and Unbreakable Protection—Without Ever Speaking to a Salesperson.</i>
                            </p>
                        </div>
                    </div>
                    <div class="break-image">
                        <img src="img/images/16.png" alt="">
                    </div>
                    <div class="row">
                        <h3>It happens every single day.</h3>
                        <div class="hlabi-body">
                            <p>
                              Every South African family believes they're covered—until they're not. <br>
                              Picture this: You wake up, routine morning, coffee brewing, kids ready for school. <br>
                              Then comes that unexpected call. A crash. An accident. Your loved ones involved. <br>
                              As panic grips you, you realize your family's entire future hinges on a single question: <br>
                              "Did my insurance policy truly protect us?" <br>
                              Now imagine absolute certainty, delivered in just 60 seconds. Imagine knowing beyond doubt that your family’s financial safety is completely secure.
                              Welcome to the 60Second Switch™ from Search A Deal.

                            </p>
                        </div>
                    </div>
                    <div class="row text-start mb-5 mt-5">
                        <h3 class="text-center mb-3">The Unseen Danger of Traditional Car Insurance</h3>
                        <div class="hlabi-body">
                            <p>Here’s the hard truth insurers don’t advertise:</p>
                            <ul>
                                <li>62% of claims in South Africa get partially or fully denied due to overlooked fine print.</li>
                                <li>Many families lose savings overnight from surprise policy loopholes.</li>
                                <li>Most people only discover the harsh realities of their cover when it’s too late.</li>
                            </ul>
                            <p>Traditional car insurance is often built on illusions and complexities designed to confuse rather than protect.</p>
                            <p>But there’s a better way.</p>
                        </div>
                    </div>

                    <div class="row text-start mb-5 mt-5">
                        <h3 class="text-center mb-3">Introducing the Breakthrough 60Second Switch™</h3>
                        <div class="hlabi-body">
                            <p>The 60Second Switch™ is the revolutionary platform where South Africans:</p>
                            <ul>
                                <li>Compare instant, verified live quotes from multiple reputable insurers.</li>
                                <li>Secure lower premiums without hidden loopholes or fine print.</li>
                                <li>Take complete control—no unsolicited calls, no pressure.</li>
                            </ul>
                            <p>All in just 60 seconds.</p>
                        </div>
                    </div>

                    <div class="row text-start mb-5 mt-5">
                        <h3 class="text-center mb-3">Why This Method Is Transforming the Industry</h3>
                        <div class="hlabi-body">
                            <p>Unlike anything available, the 60Second Switch™:</p>
                            <ul>
                                <li>Delivers real-time rates directly from licensed insurers through secure API connections.</li>
                                <li>Guarantees transparency—quotes are exact, no estimates.</li>
                                <li>Gives you the power to instantly switch to insurers offering the best coverage and value.</li>
                            </ul>
                            <p>Your data stays private. Your choice stays yours.</p>
                        </div>
                    </div>

                    <div class="row text-start mb-5 mt-5">
                        <h3 class="text-center mb-3">The Story South Africa Can't Ignore</h3>
                        <div class="hlabi-body">
                            <p>Meet Thando. A devoted father whose family narrowly escaped financial disaster.</p>
                            <p>His insurer initially denied his claim citing a hidden clause—until Thando discovered the 60Second Switch™.</p>
                            <p>In less than a minute, he found superior coverage, fully transparent terms, and saved over R600 monthly.</p>
                            <p>"It felt like waking up from a nightmare," Thando said. "One minute changed our lives forever."</p>
                        </div>
                    </div>

                    <div class="row text-start mb-5 mt-5">
                        <h3 class="text-center mb-3">The Cold Truth of Insurance Loopholes</h3>
                        <div class="hlabi-body">
                            <p>Most insurers:</p>
                            <ul>
                                <li>Hide crucial policy details deep within complicated documents.</li>
                                <li>Deny claims based on technicalities you’ve never even heard of.</li>
                                <li>Profit from your confusion and complacency.</li>
                            </ul>
                            <p>Your family's future should never depend on an insurer's fine print.</p>
                            <p>With the 60Second Switch™, it never will again.</p>
                        </div>
                    </div>

                    <div class="row text-start mb-5 mt-5">
                        <h3 class="text-center mb-3">Verifiable, Real-Time Proof</h3>
                        <div class="hlabi-body">
                            <ul>
                                <li><strong>Median Monthly Savings:</strong> Verified average savings of R450 per month, confirmed by independent audits.</li>
                                <li><strong>Speed Proven:</strong> Actual 60-second user journey demonstrations available to you right now.</li>
                                <li><strong>Complete Autonomy:</strong> No forced interactions, no pressure, just straightforward options.</li>
                            </ul>
                            <p>Real users, real results, complete transparency.</p>
                        </div>
                    </div>

                    <div class="row text-start mb-5 mt-5">
                        <h3 class="text-center mb-3">Ironclad Promises You Can Trust</h3>
                        <div class="hlabi-body">
                            <p>We commit to your absolute confidence:</p>
                            <ul>
                                <li><strong>Verified Transparency:</strong> Exact quotes from insurers, zero hidden conditions.</li>
                                <li><strong>Complete Privacy:</strong> Your data is encrypted and never shared until you decide.</li>
                                <li><strong>Legal Accountability:</strong> Fully compliant with POPIA and Consumer Protection Act—misleading you isn’t just unethical, it's illegal.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row text-start mb-5 mt-5">
                        <h3 class="text-center mb-3">The Cost of Hesitation</h3>
                        <div class="hlabi-body">
                            <p>You could ignore this message and stay where you are. But consider:</p>
                            <ul>
                                <li>How many hidden risks are buried in your current policy?</li>
                                <li>How much money are you unknowingly wasting?</li>
                                <li>Are you willing to gamble your family's security on assumptions?</li>
                            </ul>
                            <p>The 60Second Switch™ eliminates all guesswork, instantly.</p>
                        </div>
                    </div>

                    <div class="row text-start mb-5 mt-5">
                        <h3 class="text-center mb-3">Your Family's Security—60 Seconds Away</h3>
                        <div class="hlabi-body">
                            <p>Right now, you hold the power to:</p>
                            <ul>
                                <li>Ensure total clarity in your car insurance.</li>
                                <li>Lock in undeniable savings and comprehensive protection.</li>
                                <li>Safeguard your family’s financial future permanently.</li>
                            </ul>
                            <p>This is more than insurance. It's your family's legacy.</p>
                            <p><strong>Start Your 60Second Switch™ Now.</strong></p>
                            <ul>
                                <li>Live, accurate quotes.</li>
                                <li>Reputable, verified insurers.</li>
                                <li>Immediate peace of mind.</li>
                            </ul>
                            <p>Apply below and in just 60 seconds, transform uncertainty into undeniable certainty.</p>
                        </div>
                    </div>

                    <div class="row text-start mb-5 mt-5">
                        <h3 class="text-center mb-3">Final Message:</h3>
                        <div class="hlabi-body">
                            <p>You have a rare opportunity to rewrite your family's future.</p>
                            <p>Don’t risk another moment without knowing you’re completely protected.</p>
                            <p><strong>Act Now. Secure Your Family’s Future Today.</strong></p>
                        </div>
                    </div>
                </div>
            </div>


              
              <div class="col-lg-12 wow fadeIn hlabi-form" data-wow-delay="0.5s">
                <div class="bg-light rounded p-5">
                  <h4 class="mb-4">Request A Quote</h4>
                  <form action="{{ route('car.insure.submit') }}" method="post">
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
                          <select name="gender" required class="form-select" id="cage">
                            <option selected></option>
                            <option value="Male">Male</option>
                            <option value="Female">Femail</option>
                            <option value="Other">I prefer not to say</option>
                          </select>
                          <label for="cage">Gender *</label>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-floating">
                          <select name="currentinsurer" class="form-select" id="cage">
                            <option selected></option>
                            <option value="None">None</option>
                            <option value="Auto and General">Auto and General</option>
                            <option value="Discovery">Discovery</option>
                            <option value="King Price">King Price</option>
                            <option value="MiWay">MiWay</option>
                            <option value="Budget Insurance">Budget Insurance</option>
                            <option value="Momentum">Momentum</option>
                            <option value="Hollard">Hollard</option>
                            <option value="Santam">Santam</option>
                            <option value="OUTsurance">OUTsurance</option>
                            <option value="First_for_Women">First for Women</option>
                            <option value="Virseker">Virseker</option>
                            <option value="Standard_Bank">Standard Bank</option>
                            <option value="Dial_Direct">Dial Direct</option>
                            <option value="Iwyze">Iwyze</option>
                            <option value="Other">Other</option>
                          </select>
                          <label for="cage">Insurer</label>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-floating">
                          <select name="vehiclemake" class="form-select" id="cage">
                            <option selected></option>
                            <option value="Audi">Audi</option>
                                <option value="AlfaRomeo">Alfa Romeo</option>
                                <option value="BMW">BMW</option>
                                <option value="Mercedes">Mercedes</option>
                                <option value="Buick">Buick</option>
                                <option value="Cadillac">Cadillac</option>
                                <option value="Chevrolet">Chevrolet</option>
                                <option value="Chrysler">Chrysler</option>
                                <option value="Citroen">Citroen</option>
                                <option value="Daewoo">Daewoo</option>
                                <option value="Daihatsu">Daihatsu</option>
                                <option value="Ferrari">Ferrari</option>
                                <option value="Fiat">Fiat</option>
                                <option value="Ford">Ford</option>
                                <option value="GMC">GMC</option>
                                <option value="Hyundai">Hyundai</option>
                                <option value="Isuzu">Isuzu</option>
                                <option value="Jaguar">Jaguar</option>
                                <option value="Jeep">Jeep</option>
                                <option value="Land">Land</option>
                                <option value="TangeRover">Range Rover</option>
                                <option value="Lexus">Lexus</option>
                                <option value="mazda">mazda</option>
                                <option value="Mini">Mini</option>
                                <option value="Mitsubishi">Mitsubishi</option>
                                <option value="Nissan">Nissan</option>
                                <option value="Opel">Opel</option>
                                <option value="Peugeot">Peugeot</option>
                                <option value="Renault">Renault</option>
                                <option value="Smart">Smart</option>
                                <option value="Subaru">Subaru</option>
                                <option value="Suzuki">Suzuki</option>
                                <option value="Toyota">Toyota</option>
                                <option value="Volkswagen">Volkswagen</option>
                                <option value="Kia">Kia</option>
                                <option value="Citreon">Citreon</option>
                                <option value="Dihatsu">Dihatsu</option>
                                <option value="Volvo">Volvo</option>
                                <option value="Honda">Honda</option>
                                <option value="Mahindra">Mahindra</option>
                                <option value="Other">Other</option>
                          </select>
                          <label for="cage">Vehicle Make</label>
                        </div>
                      </div>
                      {{-- <div class="col-sm-6">
                        <div class="form-floating">
                          <select name="language" class="form-select" id="cage">
                            <option selected></option>
                            <option value="English">English</option>
                            <option value="SePedi">SePedi</option>
                            <option value="Afrikaans">Afrikaans</option>
                            <option value="SeSotho">SeSotho</option>
                            <option value="IsiNdebele">IsiNdebele</option>
                            <option value="SiSwazi">SiSwazi</option>
                            <option value="XiTsonga">XiTsonga</option>
                            <option value="SeTswana">SeTswana</option>
                            <option value="Tshivenda">Tshivenda</option>
                            <option value="IsiXhosa">IsiXhosa</option>
                            <option value="IsiZulu">IsiZulu</option>
                            <option value="Other">Other</option>
                          </select>
                          <label for="cage">Prefered
                            Language *</label>
                        </div>
                      </div> --}}
                      <div class="col-sm-12">
                        <input id="checkbox-1" required name="acceptterms" value="true"
                                aria-describedby="checkbox-1" type="checkbox"
                                class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded">
                            <label for="checkbox-1" class="text-sm ml-3 font-medium text-gray-900">I agree to the <a
                                    href="#" class="text-blue-600 hover:underline">terms and conditions</a></label>
                      </div>
                      <div class="col-12">
                        <button class="btn btn-primary py-3 px-5" type="submit">
                          Get Car Insurance
                        </button>
                      </div>
                    </div>
                    <input type="hidden" name="optinurl" value="https://searchadeal.online/" required>
                    <input type="hidden" name="optindate" value="{{ date('Y-m-d h:i:s') }}" required>
                    <input type="hidden" name="channel" value="JMAff" required>
                    <input type="hidden" name="language" value="English" required>
                    <input type="hidden" name="product" value="JMCar" required>
                    <input type="hidden" name="affiliateshortcode" value="JMAFFSite15022" required>
                    <input type="hidden" name="Leadsource" value="JMLSSEARCHADEAL9020" required>
                    <input type="hidden" name="offer_id" value="377" required>
                  </form>
                </div>
              </div>
    
          </div>

        </div>
      </div>
    </div>
    <!-- Car Insurence End -->
@include('partials.footer')