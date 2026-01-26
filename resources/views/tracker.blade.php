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


<div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="main">
                <div class="main-content my-5">

                    <div class="col-lg-12 wow fadeIn" data-wow-delay="0.3s">
                        <!-- BEGIN: Elite 5 Tracker Providers Marketing Copy (Jan 2026) -->
                        <div class="row">
                            <h1 class="display-6 mb-3">The 5 Tracker Companies Every Security-Conscious South African Driver Trusts (But Can't Easily Compare Without Getting Buried in Sales Calls)</h1>
                            <div class="subtitle">
                                <p class="mb-4"><i>Here's what nobody tells you about choosing a car tracker in South Africa:</i></p>
                            </div>
                        </div>
                        <div class="break-image mb-4">
                            <img src="img/images/5.png" alt="Car tracker protection" class="img-fluid rounded">
                        </div>

                        <div class="row text-start mb-5">
                            <div class="hlabi-body">
                                <p>The biggest, most reputable providers don't need to spam you with ads. They're not on every comparison site. They don't offer "free consultations" on Facebook.<br>
                                    They're the established leaders—the names you've probably heard of—but getting quotes from all of them without triggering 12 follow-up calls from resellers has been nearly impossible.<br>
                                    <b>Until now.</b></p>
                                <h3 class="text-center mb-3">The Day You Realize "Protected" Doesn't Mean What You Thought</h3>
                                <p>Gauteng, 2024. 48 vehicles stolen per day. That's one every 30 minutes.<br>
                                    Western Cape isn't far behind. Durban's chop shop network is more sophisticated than ever.<br>
                                    And 63% of "recovered" vehicles are found stripped, burned, or across a border.<br>
                                    The difference between "gone forever" and "recovered in hours" isn't luck.<br>
                                    It's three things:</p>
                                <ul>
                                    <li>✅ A tracker installed correctly the first time (not "we'll come back next week")</li>
                                    <li>✅ A 24/7 monitoring center that responds in minutes, not business hours</li>
                                    <li>✅ A recovery team with actual SAPS relationships and armed response integration</li>
                                </ul>
                                <p>But here's the problem:<br>
                                    You have no way to know which tracker companies actually deliver that. And the process of finding out is designed to exhaust you into giving up or choosing wrong.</p>
                            </div>
                        </div>

                        <div class="row text-start mb-5">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">The Comparison Site Trap: Why "More Options" Makes You Less Protected</h3>
                                <p>You've probably tried this before.<br>
                                    You Google "best car tracker South Africa." You see 47 listicles written by marketers who've never recovered a vehicle.<br>
                                    You click a "Get Free Quotes" button on a comparison site.<br>
                                    Then the nightmare starts.<br>
                                    Eight different reps call within 20 minutes. Same script. Different prices. All swearing their system is the only one that works.<br>
                                    One promises "military-grade GPS." Another guarantees "AI-powered geofencing." A third offers you a "lifetime warranty" on hardware that breaks in 18 months.<br>
                                    Half of them are resellers who've never installed a tracker in their lives. They're just lead brokers collecting your details and selling them to the next guy.<br>
                                    The rest? Legitimate companies forced to compete with aggressive cold-callers, so they pressure you harder than they'd like.<br>
                                    You don't hang up feeling informed. You hang up feeling exhausted.<br>
                                    So you do what most people do: you delay.<br>
                                    "I'll compare properly next month."<br>
                                    Next month becomes next quarter. Next quarter becomes never.<br>
                                    Meanwhile, your car stays unprotected.</p>
                            </div>
                        </div>

                        <div class="row text-start mb-5">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">The Question Nobody Asks (But Changes Everything)</h3>
                                <p>Here's what you actually need to know:<br>
                                    "Which tracker providers in South Africa have the longest track record, the largest recovery networks, and the highest success rates?"<br>
                                    Not 12 options. Not every reseller with a website. Not 44 random companies auctioning for your attention.<br>
                                    <b>The top 5.</b> The ones with over a decade in business. The ones handling thousands of installations per year. The ones with proven partnerships with SAPS and armed response units.<br>
                                    These aren't startups. They're not marketing gimmicks. They're the established leaders—the companies security-conscious South Africans have trusted for years.<br>
                                    But getting quotes from all of them without triggering a landslide of spam from random resellers? That's been the problem.<br>
                                    Because the big players don't need to advertise aggressively. They don't compete on price. They don't sell through affiliates who auction your details to whoever pays most.<br>
                                    They're selective about who they work with. Which means connecting with them requires cutting through the noise.<br>
                                    That's where The Provider Intelligence Engine comes in.</p>
                            </div>
                        </div>

                        <!-- Antifragile -->
                        <div class="row text-start mb-5">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">Why This Is Antifragile Protection</h3>
                                <p>Other systems break under pressure. Smart Match & Connect gets stronger with every use:</p>
                                <ul>
                                    <li>If a provider doesn’t deliver, our system updates.</li>
                                    <li>If a match fails, we fast-track a better one.</li>
                                    <li>Every misstep trains the algorithm to become more accurate for the next driver.</li>
                                </ul>
                                <p><b>That’s not just tech. That’s peace of mind that learns.</b></p>
                            </div>
                        </div>

                        <!-- Stories -->
                        <div class="row text-start mb-5">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">Stories You Never Want to Star In</h3>
                                <ul>
                                    <li>The single mom left stranded after trusting a cheap tracker that never worked.</li>
                                    <li>The business owner whose system failed to alert him in time.</li>
                                    <li>The dad who thought his premium plan included recovery—until it didn’t.</li>
                                </ul>
                                <p>They all “had a tracker.” What they didn’t have… was the right one.</p>
                            </div>
                        </div>

                        <!-- Guarantee -->
                        <div class="row text-start mb-5">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">The Perfect Match Guarantee</h3>
                                <p>If your recommended provider fails to meet expectations? We replace them. Fast. Free. No forms.</p>
                                <p>You will never be:</p>
                                <ul>
                                    <li>Left without support</li>
                                    <li>Trapped in a maze of calls</li>
                                    <li>Penalized for trusting us first</li>
                                </ul>
                                <p>Your match isn’t just our promise. It’s our system’s mission.</p>
                            </div>
                        </div>

                        <!-- Call To Action -->
                        <div class="row text-start mb-5">
                            <div class="hlabi-body text-center">
                                <h3 class="mb-3">Your Next Move Could Change Everything</h3>
                                <p>The cost of waiting? Another day driving blind. Another risk you don’t need.</p>
                                <p>The opportunity?</p>
                                <ul class="text-start d-inline-block" style="text-align:left;">
                                    <li>✅ A tracker that actually works</li>
                                    <li>✅ Matched to your priorities</li>
                                    <li>✅ Delivered without overwhelm</li>
                                </ul>
                                <div class="mt-3">
                                    <a href="#form" class="btn btn-primary py-3 px-5" style="width:100%">Activate My Tracker Match</a>
                                </div>
                            </div>
                        </div>

                        <div class="row text-start mb-5">
                            <div class="hlabi-body text-center">
                                <p>Your vehicle deserves more than a checkbox. It deserves a system that puts you in control.</p>
                                <p><b>This time… you don’t just have a tracker. You have the right one.</b></p>
                                <a href="#form" class="btn btn-outline-primary py-3 px-5" style="width:100%">Get My Smart Match</a>
                            </div>
                        </div>
                        <!-- END: Elite 5 Tracker Providers Marketing Copy (Jan 2026) -->
                    </div>
                </div>


                <div class="col-lg-12 wow fadeIn hlabi-form" id="form" data-wow-delay="0.5s">
                    <div class="bg-light rounded p-5">
                        <h4 class="mb-4">Request A Quote</h4>
                        <form action="{{ route('tracker.submit') }}" method="post">
                            @csrf
                            <input type="hidden" name="form_source" value="car_track_landing">

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
                                        <select class="form-select" id="cage">
                                            <option selected>Lowest Price</option>
                                            <option>Advanced Features</option>
                                            <option>Best All-Around Value</option>
                                            <option>Other</option>
                                        </select>
                                        <label for="cage">Priority Selector</label>
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
<!-- Tracker Landing Copy End -->
@include('partials.footer')
