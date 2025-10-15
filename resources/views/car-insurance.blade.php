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
                        <!-- BEGIN: Updated Car Insurance Marketing Copy -->
                        <div class="row">
                            <h1 class="display-6 mb-3">
                                Tired of Overpaying for Car Insurance That Fails You When You Need It Most?
                            </h1>
                            <div class="subtitle">
                                <p class="mb-5">
                                    <i>Get Affordable, Comprehensive Coverage That Protects You—Without the Hidden Clauses or High Premiums</i>
                                </p>
                            </div>
                        </div>
                        <div class="break-image mb-4">
                            <img src="img/images/16.png" alt="Car insurance protection" class="img-fluid rounded">
                        </div>
                        <div class="row text-start mb-5 mt-2">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">You Deserve Better Car Insurance.</h3>
                                <p>You work hard, pay your premiums on time, and trust that your insurance will be there when disaster strikes.</p>
                                <p><b>But what happens when you need to claim?</b></p>
                                <p>The reality for many vehicle owners is:</p>
                                <ul>
                                    <li>Claims are denied due to confusing fine print.</li>
                                    <li>High premiums that bleed your wallet dry every month.</li>
                                    <li>Slow payouts that leave you stranded when you need help the most.</li>
                                </ul>
                                <p><b>The truth is insurance companies are failing you.</b></p>
                            </div>
                        </div>

                        <div class="row text-start mb-5 mt-2">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">Is It Not Time You Stopped Paying for Empty Promises?</h3>
                                <p>You know the drill. You pay and pay, but when it comes time to claim, it feels like the deck is stacked against you.</p>
                                <p>Denied claims over trivial technicalities, endless paperwork, and customer service designed to frustrate you—a system built so you lose and the insurer wins.</p>
                            </div>
                        </div>

                        <div class="row text-start mb-5 mt-2">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">What If You Could Have Car Insurance That Delivers When It Counts?</h3>
                                <p>Imagine having insurance that:</p>
                                <ul>
                                    <li>Doesn't bury you in technicalities when you need to claim.</li>
                                    <li>Pays out quickly and fairly—no waiting or fighting for your money.</li>
                                    <li>Offers true peace of mind, especially in areas with high crime rates.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="row text-start mb-5 mt-2">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">Introducing: Search A Deal Partner Car Insurance</h3>
                                <p><b>Finally, a plan that works for you, not against you.</b></p>
                                <p>We've partnered with trusted car insurance providers with one goal: to serve and protect vehicle owners like you with simple, reliable, and affordable coverage.</p>
                                <p><b>Here is what you get with Search A Deal partners:</b></p>
                                <ul>
                                    <li><b>Comprehensive Protection:</b> From accidents to theft, you’re covered—especially in high-risk areas.</li>
                                    <li><b>No Fine Print Surprises:</b> Transparent terms. No hidden clauses. No nasty claim-time shocks.</li>
                                    <li><b>Affordable Premiums:</b> Coverage that fits your budget without compromising protection.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="row text-start mb-5 mt-2">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">Why Vehicle Owners Like You Are Making the Switch</h3>
                                <p>You’re tired of recycled promises from companies that can’t deliver.</p>
                                <p><b>Here’s why Search A Deal partners is different:</b></p>
                                <ul>
                                    <li><b>Fast, No-Hassle Claims:</b> Our partners streamline the process—no hoops, no drama.</li>
                                    <li><b>Fair Payouts:</b> No arbitrary denials. Just honest claim handling.</li>
                                    <li><b>Tailored for South Africa:</b> Policies that factor in local risk realities like crime and accident zones.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="row text-start mb-5 mt-2">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">Your Current Insurance Could Be Failing You</h3>
                                <p>Have you wondered why insurers drag their feet when it’s time to pay out?</p>
                                <p>It’s simple: confusion and delay protect their profits. That’s not how insurance should work.</p>
                                <p><b>With Search A Deal, you’re in control.</b></p>
                                <p>Coverage is clear. No legal maze. No endless back-and-forth—just honest protection when it matters.</p>
                            </div>
                        </div>

                        <div class="row text-start mb-5 mt-2">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">You’re Not Just a Policy Number—You’re Family</h3>
                                <p>We don’t see you as a policy—we see you as part of our community.</p>
                                <ul>
                                    <li>Quick, easy claims that respect your time.</li>
                                    <li>Dedicated customer support—24/7.</li>
                                    <li>Affordable premiums aligned with real value.</li>
                                </ul>
                                <p>Our partners have already helped thousands secure real protection—without headaches.</p>
                            </div>
                        </div>

                        <div class="row text-start mb-5 mt-2">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">Don’t Let Your Insurance Fail You When You Need It Most</h3>
                                <p>Vehicle owners across South Africa face theft, accidents, and unexpected loss. Too many are let down by overpriced, underperforming policies.</p>
                                <p><b>Why risk it?</b> With Search A Deal, you’ll never be left in the lurch.</p>
                            </div>
                        </div>

                        <div class="row text-start mb-5 mt-2">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">Get the Coverage You Deserve Today</h3>
                                <p>You’ve worked hard for your vehicle—it’s time to protect it the right way. Don’t settle for overpriced insurance that leaves you exposed.</p>
                                <p><b>With Search A Deal you get:</b></p>
                                <ul>
                                    <li>Complete protection—accident or theft, we’re there.</li>
                                    <li>No hidden surprises—just straightforward cover.</li>
                                    <li>Fast claims & fair payouts—get back on the road quickly.</li>
                                </ul>
                                <div class="text-center">
                                    <a href="#form" class="btn btn-primary py-3 px-5 mt-3" style="width:100%">Get Free Quote</a>
                                </div>
                            </div>
                        </div>

                        <div class="row text-start mb-5 mt-2">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">Take Action Now!</h3>
                                <p>Get your free, no-obligation quote and see how much you can save with Search A Deal. In just a few clicks you could unlock true peace of mind.</p>
                                <p><b>Why Wait? Get Protected Today!</b></p>
                                <div class="text-center">
                                    <a href="#form" class="btn btn-outline-primary py-3 px-5 mt-3" style="width:100%">Protect My Car Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- END: Updated Car Insurance Marketing Copy -->
                    </div>
                </div>



                <div class="col-lg-12 wow fadeIn hlabi-form" data-wow-delay="0.5s" id="form">
                    <div class="bg-light rounded p-5">
                        <h4 class="mb-4">Request A Quote</h4>
                        <form action="{{ route('car.insure.submit') }}" method="post">
                            @csrf
                            <input type="hidden" name="form_source" value="car_insure_landing">

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
