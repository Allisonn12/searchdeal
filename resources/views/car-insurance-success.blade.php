@include('partials.header')
@include('partials.flash')
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">
<div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="main">
                <div class="main-content my-5">
                    <div class="col-lg-12 wow fadeIn" data-wow-delay="0.3s">
                        <div class="row">
                            <h1 class="display-6 mb-4">🛑 WAIT, You’re Only Half Protected.</h1>
                            <div class="subtitle">
                                <p class="mb-4" style="font-size: 24px"><i>You just insured your car… but what if it’s never recovered?</i></p>
                            </div>
                        </div>
                        <div class="row text-start mb-5 mt-2">
                            <div class="hlabi-body">
                                <p>You’ve just made one of the smartest decisions a driver can make: you insured your vehicle against what might happen. But there’s one devastating truth most South Africans learn too late:</p>
                                <p><b>Insurance pays you after the car is gone. But nothing brings it back.</b></p>
                                <p>Unless… you make this one final, frictionless move right now.</p>
                            </div>
                        </div>

                        <div class="row text-start mb-5 mt-2">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">Unlock Your Car’s Perfect Protector (60 Seconds or Less)</h3>
                                <p><b>No hassle. No confusion. Just real-world protection you can see.</b></p>
                                <p>Introducing the <b>SentinelMatch Engine</b>, a forensic-grade smart tracker matching system that:</p>
                                <ul>
                                    <li>✅ Knows your exact insurer</li>
                                    <li>✅ Knows the protection you actually want (not what marketers push)</li>
                                    <li>✅ Instantly matches you with the best verified, best-fit tracker provider</li>
                                    <li>✅ Delivers real-time recovery power for theft, hijacking & breakdown</li>
                                </ul>
                                <p>You won’t waste time comparing, guessing, or re-entering details. <b>The hard work’s already done in milliseconds.</b></p>
                            </div>
                        </div>

                        <div class="row text-start mb-5 mt-2">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">Why This Is Only Offered Right Now</h3>
                                <p>Because you’ve just applied for insurance, our system pre-qualified you for high-trust tracker providers. This isn’t public. It’s not a bonus. <b>It’s the completion path.</b></p>
                            </div>
                        </div>

                        <div class="row text-start mb-5 mt-2">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">You Built the Wall. Now Add the Gate.</h3>
                                <ul>
                                    <li>Insurance gives you coverage <b>after loss</b></li>
                                    <li>SentinelMatch gives you control <b>before it happens</b></li>
                                    <li>You’ve protected your paperwork</li>
                                    <li>Now protect your recovery</li>
                                </ul>
                                <p><b>It’s the difference between waiting for a payout… and watching your car get safely returned.</b></p>
                            </div>
                        </div>

                        <div class="row text-start mb-5 mt-2">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">Powered by SentinelMatch</h3>
                                <p>SentinelMatch is a proprietary, API-powered engine that:</p>
                                <ul>
                                    <li>✅ Identifies why you need a tracker (compliance, peace of mind, fleet, risk zone)</li>
                                    <li>✅ Filters out providers that don’t meet your insurer’s standards</li>
                                    <li>✅ Selects only those with 24/7 recovery, mobile control & transparent support</li>
                                    <li>✅ Shows you the <b>best one</b>, not twenty, so you’re not overwhelmed or harassed</li>
                                </ul>
                                <p><b>No lists. No spam. No uncertainty. Just one result: the right protector for your car.</b></p>
                            </div>
                        </div>

                        <div class="row text-start mb-5 mt-2">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">Optimal Outcome Promise</h3>
                                <p><b>“In 60 seconds, you’ll go from insured… to unbreakable.”</b></p>
                                <p>Your vehicle won’t just be covered. It will be monitored, findable, recoverable. Real peace of mind doesn’t wait until after the loss. <b>It starts now.</b></p>
                            </div>
                        </div>

                        <div class="row text-start mb-5 mt-2">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">The Sentinel Guarantee</h3>
                                <p>If our matched provider doesn’t fit, we rematch instantly. No forms, no friction.</p>
                                <p>You made a brilliant decision moments ago. <b>This is how you finish what you started.</b></p>
                            </div>
                        </div>

                        <div class="row text-start mb-5 mt-2">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">This Is a One-Time Activation Opportunity</h3>
                                <p>This match is based on fresh data you just submitted. <b>It’s only available here and now.</b> No follow-up. No return link. Only now… and protection.</p>
                            </div>
                        </div>

                        <div class="row text-start mb-5 mt-2">
                            <div class="hlabi-body text-center">
                                <a href="#form" class="btn btn-primary py-3 px-5 mb-3" style="width:100%" data-cta="activate-tracker-match">Activate My Tracker Match</a>
                                <p class="small text-muted mb-0">One click • No sales calls • Immediate match</p>
                                <p class="mt-4 mb-0"><b>You’ve protected the paper. Now protect the car.</b><br>Turn vulnerability into control. Let’s finish this right.</p>
                            </div>
                        </div>
                        <!-- END: Updated Post-Insurance Tracker Upsell Copy -->
                    </div>

                    <div class="col-lg-12 wow fadeIn hlabi-form" id="form" data-wow-delay="0.5s">
                        <div class="bg-light rounded p-5">
                            <h4 class="mb-4">Request A Quote</h4>
                            <form action="{{ route('car.insure.submit') }}" method="post">
                                @csrf
                                <input type="hidden" name="form_source" value="car_insure_success">

                                <div class="row g-3">
                                    <!-- ...existing form fields retained... -->
                                    <div class="col-sm-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="gname" placeholder="First Name" name="firstname" required />
                                            <label for="gname">First Name *</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lastname" required />
                                            <label for="lname">Last Name *</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="phone_number" placeholder="Phone Number" name="phone1" required />
                                            <label for="phone_number">Phone Number *</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="gmail" placeholder="Your Email" name="email" required />
                                            <label for="gmail">Your Email </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <select name="gender" required class="form-select" id="gender">
                                                <option selected></option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">I prefer not to say</option>
                                            </select>
                                            <label for="gender">Gender *</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <select name="currentinsurer" class="form-select" id="currentinsurer">
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
                                            <label for="currentinsurer">Insurer</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <select name="vehiclemake" class="form-select" id="vehiclemake">
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
                                            <label for="vehiclemake">Vehicle Make</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <input id="checkbox-1" required name="acceptterms" value="true" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded" />
                                        <label for="checkbox-1" class="text-sm ml-3 font-medium text-gray-900">I agree to the <a href="#" class="text-blue-600 hover:underline">terms and conditions</a></label>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary py-3 px-5" type="submit" data-cta="insurance-form-submit">Get Car Insurance</button>
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
                    <a href="{{ route('success') }}" class="btn btn-success my-5 px-5" data-cta="decline-tracker-upsell">I do not want car tracker</a>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .success-icon { width: auto; font-family: 'Kaushan Script', cursive; font-size: 3vw; font-weight: bold; }
    .main-content__checkmark { font-size: 4.0625rem !important; line-height:1 !important; color:#24b663; }
    .wrapper-1{ width:100%; display: flex; flex-direction: column; }
    .wrapper-2{ padding:30px; text-align:center; }
    .wrapper-4{ padding:30px; text-align:center; }
    .success-heading{ font-family: 'Kaushan Script', cursive; font-size:5em; letter-spacing:3px; color: #015FC9 ; margin:20px 0; }
    .wrapper-4 p{ margin:0; font-size:1.3em; color:#000; font-family: 'Source Sans Pro', sans-serif; letter-spacing:1px; }
    .wrapper-2 p{ margin:0; font-size:1.3em; color:#aaa; font-family: 'Source Sans Pro', sans-serif; letter-spacing:1px; }
    @media screen and (max-width: 747px){
        .success-heading{ font-size: 3em; }
        .hlabi-body{ font-size: 16px; }
    }
</style>
@include('partials.footer')
