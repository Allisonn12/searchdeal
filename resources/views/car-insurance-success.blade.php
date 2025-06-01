@include('partials.header')
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">
<div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            {{-- <h4 class="text-danger text-center mb-5" style="font-weight: 800">NEED CAR INSURANCE?</h4> --}}
            <div class="main">
                <div class="main-content my-5">
                    <div class="col-lg-12 wow fadeIn" data-wow-delay="0.3s">
                        <div class="row">
                            <h1 class="display-6 mb-5">
                                Your Car Is Protected. Now, Secure Your Family’s Financial Future in Just 60 Seconds.
                            </h1>
                            <div class="subtitle">
                                <p class="mb-5" style="font-size: 30px">
                                    <i>
                                        Congratulations! By choosing a verified tracker through Search A Deal, 
                                  you've secured your family's physical safety. But before you go, there’s one 
                                  crucial piece of your family's protection puzzle still missing.
                                    </i>
                                </p>
                            </div>
                        </div>
                        <div class="row text-start mb-5 mt-5">
                            <div>
                                <p>
                                    Every 22 minutes, another South African family discovers too late that their car insurance wasn't enough. 
                          Claims get denied, hidden clauses surface, and financial security crumbles in an instant.
                                </p>
                                <p>
                                    You just took decisive action to protect your vehicle physically—now safeguard your family's financial 
                          future with absolute clarity and unshakeable certainty.
                                </p>
                            </div>
                            <h3 class="text-center mb-3">Introducing the 60Second Switch™</h3>
                            <div class="hlabi-body">
                                <p>A breakthrough method ensuring total insurance transparency and instant verified financial security:</p>
                                <ul>
                                    <li>
                                        <b>Instant Clarity</b>: Real-time, verified quotes from trusted insurers.
                                    </li>
                                    <li>
                                        <b>Complete Protection</b>: Eliminate hidden clauses and insurer tricks that could devastate your finances.
                                    </li>
                                    <li>
                                        <b>Immediate Savings</b>: Median monthly savings exceeding R400, putting money back into your pocket immediately.
                                    </li>
                                </ul>
                                <p>
                                    Thousands of savvy South African families who've chosen the Verified Tracker Certainty™ 
                              also upgraded to the 60Second Switch™—because peace of mind isn't complete without 
                              financial security.
                                </p>
                                <p>
                                    This exclusive upgrade is available ONLY on this page, for the next few minutes.
                              Secure absolute financial certainty right now—no confusing fine print, no hidden traps.
                                </p>
                            </div>
                        </div>
                        <div class="row text-start mb-5 mt-5">
                            <h3 class="text-center mb-3">Special Immediate Upgrade:</h3>
                            <div class="hlabi-body">
                                <p>Add complete financial security to your tracker protection in just 60 seconds.</p>
                                <p>
                                    You're fully protected: Our commitment guarantees absolute transparency, verified privacy, 
                              and compliance with all South African consumer protections. If you're not completely satisfied, 
                              there's no obligation—ever.
                                </p>
                                <p class="text-center">
                                    <b>"Yes! Add Financial Certainty Now"</b>
                                    <br>
                                    <a href="{{ route('cicslhcf') }}">Learn more</a>
                                    <br>
                                    <b>"Secure My Family’s Future Immediately"</b>
                                    <br>
                                </p>
                            </div>
                        </div>
                    </div>

              <div class="col-lg-12 wow fadeIn hlabi-form" data-wow-delay="0.5s">
                <div class="bg-light rounded p-5">
                  <h4 class="mb-4">Request A Quote</h4>
                  <form action="{{ route('car.insure.submit') }}" method="post">
                    @csrf
                    <input type="hidden" name="form_source" value="car_insure_success">

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
                            <option value="Female">Female</option>
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
              <a href="{{ route('success') }}" class="btn btn-success my-5 px-5">I do not want car tracker</a>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
.success-icon {
  width: auto;
  font-family: 'Kaushan Script', cursive;
  font-size: 3vw;
  font-weight: bold;
}
.main-content__checkmark {
  font-size: 4.0625rem !important;
  line-height:1 !important;
  color:#24b663;
}
.wrapper-1{
  width:100%;
  display: flex;
flex-direction: column;
}
.wrapper-2{
  padding :30px;
  text-align:center;
}
.wrapper-4{
  padding :30px;
  text-align:center;
}
.success-heading{
  font-family: 'Kaushan Script', cursive;
  font-size:5em;
  letter-spacing:3px;
  color: #015FC9 ;
  margin:0;
  margin:20px 0;
}
.wrapper-4 p{
  margin:0;
  font-size:1.3em;
  color:#000;
  font-family: 'Source Sans Pro', sans-serif;
  letter-spacing:1px;
}
.wrapper-2 p{
  margin:0;
  font-size:1.3em;
  color:#aaa;
  font-family: 'Source Sans Pro', sans-serif;
  letter-spacing:1px;
}

@media screen and (max-width: 747px){
    .footer{
        position: relative;
    }
}
</style>
@include('partials.footer')
