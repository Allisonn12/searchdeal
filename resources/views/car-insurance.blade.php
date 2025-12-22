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
                                Afraid of Expensive Car Repairs? Here’s the Affordable Solution Vehicle Owners Are Raving About!
                            </h1>
                            <div class="subtitle">
                                <p class="mb-5">
                                    <i>Say Goodbye to Costly Repairs. Get Comprehensive, Affordable Car Warranty Coverage Today</i>
                                </p>
                            </div>
                        </div>
                        <div class="break-image mb-4">
                            <img src="img/images/16.png" alt="Extended car warranty protection" class="img-fluid rounded">
                        </div>

                        <div class="row text-start mb-5 mt-2">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">Your Manufacturer's Warranty Is Expiring. Now What?</h3>
                                <p>Owning a car comes with freedom and excitement, but when the manufacturer's warranty runs out, that freedom comes with risk.</p>
                                <p>Mechanical breakdowns. Electrical failures. Expensive repairs.</p>
                                <p>As your vehicle ages, even a minor repair can cost you thousands of rands. Without a safety net, those expenses are coming out of your pocket.</p>
                                <p><b>Do you want to risk that?</b></p>
                            </div>
                        </div>

                        <!-- Section: Massive Bills -->
                        <div class="row text-start mb-5 mt-2">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">Without Coverage, You Could Be Facing Massive Repair Bills</h3>
                                <p>Modern cars are packed with sophisticated technology, which means higher repair costs when something goes wrong. Even a minor issue could set you back thousands, before you factor in the inconvenience of being stranded on the road.</p>
                                <p><b>But what if there was an easy, affordable way to protect yourself from these costs?</b></p>
                            </div>
                        </div>

                        <!-- Section: Introducing -->
                        <div class="row text-start mb-5 mt-2">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">Introducing: Search A Deal Partners Car Warranty</h3>
                                <p><b>Affordable, reliable, and designed to keep you covered.</b></p>
                                <p>Our partners have seen firsthand how vehicle owners are burdened by costly repairs after their warranties expire. That’s why they created extended warranty plans that give you peace of mind, <b>without draining your bank account.</b></p>
                                <p><b>Why choose Search A Deal partners?</b></p>
                                <ul>
                                    <li><b>Comprehensive Coverage:</b> From engine breakdowns to electrical failures, the high-cost repairs are covered.</li>
                                    <li><b>Flexible Payment Options:</b> Pay monthly. Budget-friendly protection that fits your life.</li>
                                    <li><b>No-Nonsense Claims Process:</b> Fast, transparent claims without red tape or hidden clauses.</li>
                                    <li><b>24/7 Roadside Assistance:</b> Wherever you are, help is a call away.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Section: Real Reason -->
                        <div class="row text-start mb-5 mt-2">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">The Real Reason You Need Car Warranty Protection</h3>
                                <p>You might think: <i>"I’ll just deal with repairs as they come."</i> But as your car ages, repair costs increase dramatically.</p>
                                <ul>
                                    <li>A simple gearbox repair could cost up to <b>R20,000</b>.</li>
                                    <li>An engine breakdown? Expect to pay over <b>R50,000</b>.</li>
                                    <li>Electrical faults? Easily <b>R10,000+</b>.</li>
                                </ul>
                                <p><b>Are you ready for that kind of financial hit?</b></p>
                                <p>With Search A Deal partners, you won’t worry about where the money will come from. No surprises, no panic.</p>
                            </div>
                        </div>

                        <!-- Section: Avoid Stress -->
                        <div class="row text-start mb-5 mt-2">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">Don’t Get Caught Off Guard. Protect Your Vehicle and Your Wallet</h3>
                                <p>Every day, vehicle owners are hit with unexpected repair bills that throw their budgets into chaos. With our extended warranty partners, you can avoid the stress and uncertainty.</p>
                                <p><b>Imagine the relief:</b> Major repairs covered. No scrambling for emergency funds. No high-interest loans just to get back on the road.</p>
                            </div>
                        </div>

                        <!-- Section: Why Owners Choose -->
                        <div class="row text-start mb-5 mt-2">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">Why Vehicle Owners Like You Are Choosing Search A Deal Partners</h3>
                                <p>You’re not just buying a warranty. You’re buying <b>peace of mind</b>.</p>
                                <ul>
                                    <li><b>Complete Protection:</b> Coverage for high-value components like engine, gearbox & electrical systems.</li>
                                    <li><b>Affordable Payment Options:</b> Flexible, manageable monthly plans.</li>
                                    <li><b>Hassle-Free Claims:</b> Straightforward, transparent, and built to work for you.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Section: Truth -->
                        <div class="row text-start mb-5 mt-2">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">The Truth: Without Extended Warranty, You’re Leaving Yourself Exposed</h3>
                                <p>Each day your manufacturer’s warranty gets closer to expiring. Once it’s gone, <b>you pay for every repair</b>.</p>
                                <ul>
                                    <li>Engines fail.</li>
                                    <li>Electrical systems break down.</li>
                                    <li>Cars need repairs. It’s inevitable.</li>
                                </ul>
                                <p>You don’t have to carry that risk. Search A Deal partners make extended warranties accessible and affordable across South Africa.</p>
                            </div>
                        </div>

                        <!-- Section: Protect Today -->
                        <div class="row text-start mb-5 mt-2">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">Protect Your Vehicle Today. Get Your Free Quote Now!</h3>
                                <p>You’ve worked hard for your vehicle. Now protect your investment with a warranty that’s affordable, reliable, and designed for peace of mind.</p>
                                <p>Click below to get your free, no-obligation quote and discover how much you can save with a comprehensive car warranty.</p>
                                <div class="text-center">
                                    <a href="#form" class="btn btn-primary py-3 px-5 mt-3" style="width:100%">Get Free Warranty Quote</a>
                                </div>
                            </div>
                        </div>

                        <!-- Section: Act Today -->
                        <div class="row text-start mb-5 mt-2">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">Why Wait? Get Covered Now!</h3>
                                <p><b>Here’s Why You Should Act Today:</b></p>
                                <ul>
                                    <li><b>Don’t Wait for a Breakdown:</b> A failure could happen tomorrow. Be proactive.</li>
                                    <li><b>Flexible Payment Plans:</b> Coverage that fits your budget without sacrifice.</li>
                                    <li><b>24/7 Roadside Assistance:</b> Help whenever and wherever you need it.</li>
                                </ul>
                                <p>Every day without protection is a gamble. Avoid being hit with a massive bill when it’s too late.</p>
                                <div class="text-center">
                                    <a href="#form" class="btn btn-outline-primary py-3 px-5 mt-3" style="width:100%">Protect My Car Now</a>
                                </div>
                            </div>
                        </div>

                        <!-- Section: Confidence -->
                        <div class="row text-start mb-5 mt-2">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">Choose Search A Deal and Drive with Confidence</h3>
                                <p>You deserve the best protection at an affordable price. Search A Deal partners give you:</p>
                                <ul>
                                    <li><b>Comprehensive coverage</b> against major breakdown risks.</li>
                                    <li><b>Affordable monthly payments</b> that fit your budget.</li>
                                    <li><b>Roadside assistance</b> to keep you moving when things go wrong.</li>
                                </ul>
                                <p><b>Why risk it?</b> Get peace of mind today with a partner-backed car warranty.</p>
                                <div class="text-center">
                                    <a href="#form" class="btn btn-success py-3 px-5 mt-3" style="width:100%">Start My Protection</a>
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
