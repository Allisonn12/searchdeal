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
                        <!-- BEGIN: Updated Tracker Marketing Copy -->
                        <div class="row">
                            <h1 class="display-6 mb-3">The Day You Realize You’re Driving Blind</h1>
                            <div class="subtitle">
                                <p class="mb-4"><i>How One Tracker Could Mean the Difference Between “Gone Forever” and “Found in Minutes”</i></p>
                            </div>
                        </div>
                        <div class="break-image mb-4">
                            <img src="img/images/5.png" alt="Car tracker protection" class="img-fluid rounded">
                        </div>

                        <!-- Story Hook -->
                        <div class="row text-start mb-5">
                            <div class="hlabi-body">
                                <p>You don’t feel it coming. The window shatters. The signal dies. The car’s gone. And in the space of one phone call, your reality shatters too: <b>“We’re sorry, there’s nothing we can do.”</b></p>
                                <p>The pain isn’t just the theft. It’s the helplessness. The sudden dread that you can’t protect what matters most. Because by the time you realize your car tracker failed you, it’s too late to choose a better one.</p>
                                <p><b>But what if that never had to be your story?</b></p>
                            </div>
                        </div>

                        <!-- Industry Problem -->
                        <div class="row text-start mb-5">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">The Tracker Industry’s Silent Problem: Overwhelm & False Options</h3>
                                <p>They all promise protection. But they don’t tell you:</p>
                                <ul>
                                    <li>Which ones actually work in real-world recovery scenarios</li>
                                    <li>Which ones delay installation or never follow through</li>
                                    <li>Which ones simply hand off your details to a dozen sales agents before you even get a quote</li>
                                </ul>
                                <p>That’s not protection. That’s bait. And the cost isn’t just financial—it’s emotional. In a high-risk country like South Africa, every hour without protection is a gamble.</p>
                            </div>
                        </div>

                        <!-- Introducing Protocol -->
                        <div class="row text-start mb-5">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">Introducing: The Smart Match & Connect Protocol</h3>
                                <p>No guesswork. No spam calls. No endless comparison.</p>
                                <p>With our proprietary Smart Match & Connect Protocol, you can:</p>
                                <ul>
                                    <li><b>✅ Discover</b> the ONE best-fit tracker for your needs (price, features, or value)</li>
                                    <li><b>✅ Get matched</b> to a pre-vetted provider with proven recovery rates</li>
                                    <li><b>✅ Stay in control</b> — your data is only shared after you approve</li>
                                </ul>
                            </div>
                        </div>

                        <!-- How It Works -->
                        <div class="row text-start mb-5">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">How It Works (And Why It’s Changing the Game)</h3>
                                <ol class="ps-3">
                                    <li><b>The Secure Car Profile</b> – Enter your make, model, and basic contact details. That’s it.</li>
                                    <li><b>The Priority Selector</b> – Answer ONE powerful question: What matters most?
                                        <ul>
                                            <li>Lowest Price</li>
                                            <li>Advanced Features</li>
                                            <li>Best All-Around Value</li>
                                        </ul>
                                    </li>
                                    <li><b>The Singular Offer Reveal</b> – Our engine compares your input against our vetted database to recommend the most relevant offer.</li>
                                    <li><b>The User-Initiated Handshake</b> – Only the vetted relevant provider contacts you. No spam. No pressure. Your terms.</li>
                                </ol>
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
                        <!-- END: Updated Tracker Marketing Copy -->
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
