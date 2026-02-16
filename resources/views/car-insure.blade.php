<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-WX9J0BVDQC"></script> <script> window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-WX9J0BVDQC'); </script>

    <!-- Facebook Pixel Code -->
    <script nonce="4BUkMtdd">
      !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','https://connect.facebook.net/en_US/fbevents.js');

      fbq('init', '1322182192366880');
      fbq('set','agent','tmgoogletagmanager', '1322182192366880');
      fbq('track', "PageView");
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=1322182192366880&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->

    <meta charset="utf-8" />
    <title>Search A Deal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="insurance, cheap insurance, best insurance, compare insurance, affordable insurance, insurance deals, insurance discount" name="keywords" />
    <meta content="SearchADeal helps you find the best insurance deals! Compare quotes for car, medical, life and many more insurances from top providers. Save money with affordable rates and exclusive discounts—get your free quote today!" name="description" />
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!--<link-->
    <!--  href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap"-->
    <!--  rel="stylesheet"-->
    <!--/>-->
    <!-- Icon Font Stylesheet -->
    <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
            rel="stylesheet"
    />
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
            rel="stylesheet"
    />
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
          new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-NWN5MH94');</script>
    <!-- End Google Tag Manager -->
    <style>
        .hlabi-body{
            font-size: 18px !important;
        }
    </style>
</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NWN5MH94"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<!-- Spinner Start -->
<div
        id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
>
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->


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
        style="background: url(img/images/16.png) center center no-repeat; background-size: cover;"
>
    <div class="overlay-color">
        <div class="container py-5" style="z-index: 1000; position: relative;">
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
<div class="py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        {{--<div class="row g-5">--}}
        <div class="mx-auto" style="max-width: 820px;">

            <div class="main">
                <div class="main-content my-5">

                    <div class="col-lg-12 wow fadeIn" data-wow-delay="0.3s">
                        <!-- BEGIN: Insurance-to-Tracker Upsell Copy (Jan 2026) -->
                        <div class="row">
                            <h1 class="display-6 mb-4">
                                ONE FINAL STEP: Complete Your Vehicle Protection
                            </h1>
                            <div class="subtitle">
                                <p class="mb-4"><b>You Just Made One of the Smartest Decisions a South African Driver Can Make</b></p>
                            </div>
                        </div>
                        <div class="break-image mb-4">
                            <img src="img/car_insure_upsell/10.png" alt="Insurance and tracker protection" class="img-fluid rounded">
                        </div>
                        <div class="hlabi-body">
                            <div class="row text-start mb-5">
                                <div class="col-12">
                                    <p>Congratulations. Seriously.<br>By getting competitive insurance quotes from the Elite 5, you've done something 94% of drivers never do: you've forced insurers to compete for your business instead of settling for whatever renewal notice shows up.<br>That takes intelligence. Discipline. A refusal to overpay for identical coverage.</p>
                                    <p>But here's what nobody tells you about insurance savings...<br>Insurance only protects you after something's already been taken.<br>Think about it.<br>The Reverse-Auction Match just saved you R400–R850/month by connecting you with providers who'll compensate you if your vehicle is stolen.<br>But compensation isn't recovery.</p>
                                    <p>Compensation is: your car disappears, you file a claim, you wait 30 days, you get a payout minus excess, you spend weeks shopping for a replacement, you settle for something inferior because values have increased.<br>Recovery is: your car is taken, your tracker activates, armed response is dispatched within minutes, your vehicle is recovered within hours, you drive it home the same day.<br>One gives you money eventually. The other gives you your actual car back immediately.</p>
                                    <p>And here's the uncomfortable truth most insurance brokers won't say out loud:</p>
                                </div>
                            </div>
                            <div class="row text-start mb-5">
                                <div class="col-12">
                                    <h3 class="text-center mb-3">The Gap Between "Insured" and "Protected" Costs R127,000 on Average</h3>
                                    <div class="break-image mb-4">
                                        <img src="img/car_insure_upsell/7.png" alt="Insurance and tracker protection" class="img-fluid rounded">
                                    </div>
                                    <p>When your insured vehicle is stolen and not recovered, here's the real cost:</p>
                                    <ul>
                                        <li>R18,000:  Average insurance excess you pay out of pocket</li>
                                        <li>R47,000:  Value depreciation gap (what insurance pays vs. what replacement actually costs in 2025)</li>
                                        <li>R14,000:  Premium increase over the next 3 years (claims spike your risk profile)</li>
                                        <li>R22,000:  Replacement shopping costs (rental car, time off work, settlement delays)</li>
                                        <li>R26,000:  Intangible costs (violation, fear, psychological impact, lost personal items that weren't covered)</li>
                                    </ul>
                                    <p><b>Total real cost: R127,000. For a vehicle insurance "replaced."</b></p>
                                    <p>Meanwhile, if that same vehicle had been recovered intact within hours:</p>
                                    <ul>
                                        <li>R0:  No excess paid (no claim filed)</li>
                                        <li>R0:  No depreciation loss (you kept your car)</li>
                                        <li>R0:  No premium spike (no claim on record)</li>
                                        <li>R0:  No replacement hassle</li>
                                        <li>R0:  No psychological violation</li>
                                    </ul>
                                    <p><b>Total real cost: R0. Plus you still have your car. With your child's car seat. Your gym bag. Your work laptop. Everything.</b></p>
                                    <p>That's the difference between insured and protected.<br>Insurance makes you financially whole(ish) after loss.<br>Protection prevents the loss from becoming permanent.</p>
                                </div>
                            </div>
                            <div class="row text-start mb-5">
                                <div class="col-12">
                                    <h3 class="text-center mb-3">The Completion Principle: Why Insurance Without Recovery Is Only Half-Protected</h3>
                                    <p>You just unlocked competitive insurance pricing. That's massive.<br>But think about what you actually secured:</p>
                                    <ul>
                                        <li>Financial protection if your vehicle disappears permanently</li>
                                        <li>Lower premiums because insurers competed for you</li>
                                        <li>Better coverage terms from elite providers</li>
                                        <li>The ability to stop a theft in progress</li>
                                        <li>Real-time location tracking if your car is taken</li>
                                        <li>Armed response coordination with SAPS</li>
                                        <li>Recovery infrastructure that works at 2 AM on a Sunday</li>
                                    </ul>
                                    <p>You've locked in the financial safety net.<br>You haven't locked in the physical recovery system.<br>And here's why that matters more than most people realize:</p>
                                </div>
                            </div>
                            <div class="row text-start mb-5">
                                <div class="col-12">
                                    <h3 class="text-center mb-3">The Brutal Reality: 63% of Stolen Vehicles in South Africa Are Never Recovered Intact</h3>
                                    <div class="break-image mb-4">
                                        <img src="img/car_insure_upsell/1.png" alt="Insurance and tracker protection" class="img-fluid rounded">
                                    </div>
                                    <p>SAPS data, 2024:<br>48 vehicles stolen per day in Gauteng alone. That's one every 30 minutes.<br>Of those stolen vehicles:</p>
                                    <ul>
                                        <li>37% are never found (disappeared into chop shops, across borders, or stripped for parts)</li>
                                        <li>26% are found burned or stripped (recovered, but totaled)</li>
                                        <li>Only 37% are recovered intact, and most of those had active tracking systems</li>
                                    </ul>
                                    <p>Without a tracker:<br>Your insurance pays out (eventually). You file paperwork. You wait. You settle. You move on with a replacement vehicle and a lingering sense of violation.</p>
                                    <p>With a tracker from one of the Elite 5:<br>Your vehicle is located within minutes. Armed response is dispatched. SAPS is coordinated. Your car is immobilized remotely. Recovery happens before the hijackers reach their destination.<br>You get your actual car back. Same day. Intact. No claim filed. No excess paid. No premium spike.<br>That's not a luxury. That's the completion of your protection strategy.</p>
                                </div>
                            </div>
                            <div class="row text-start mb-5">
                                <div class="col-12">
                                    <h3 class="text-center mb-3">Why This Offer Exists Right Now (And Why It's Only Available to You)</h3>
                                    <p>Here's the truth:<br>Most South African drivers comparison-shop for insurance. Smart move.<br>But only 8% of drivers who save money on insurance actually install a tracker within the next 90 days.<br>Why?<br>Because after the relief of saving R600/month on premiums, the urgency fades. "I'll handle the tracker next quarter." Next quarter becomes never.<br>Meanwhile, their newly insured vehicle sits in driveways, shopping center parking lots, and outside offices, untracked, unmonitored, and unrecoverable if taken.</p>
                                    <p>Insurance companies know this. Tracker companies know this.<br>That's why we created The Recovery Completion System™.<br>We partner with the exact same Elite 5 tracker providers you'd research on your own (the ones with 10+ years in business, proven SAPS partnerships, and 24/7 monitoring centers).</p>
                                    <p>But instead of you spending 3 weeks researching, comparing, and delaying — we connect you instantly, right now, while the momentum of protecting your vehicle is still fresh.<br>You just saved money on insurance. That savings can directly fund your tracker installation — at no net cost to your monthly budget.<br>That's not a sales pitch. That's just math.</p>
                                </div>
                            </div>
                            <div class="row text-start mb-5">
                                <div class="col-12">
                                    <h3 class="text-center mb-3">Introducing: The Recovery Completion System</h3>
                                    <div class="break-image mb-4">
                                        <img src="img/car_insure_upsell/9.png" alt="Insurance and tracker protection" class="img-fluid rounded">
                                    </div>
                                    <p>You've already experienced The Reverse-Auction Match for insurance.<br>Now you get the same process for tracker quotes.<br>Here's how it works:</p>
                                    <ol>
                                        <li>One More 60-Second Form<br>Vehicle details, location, preferred contact method. You've done this once already. Same process.</li>
                                        <li>Your Profile Reaches the Elite 5 Tracker Providers Simultaneously<br>Not 12 random resellers. Not startups that vanish after 18 months.<br>The same 5 established leaders you'd find if you spent 3 weeks researching on your own:
                                            <ul>
                                                <li>10+ years in continuous business</li>
                                                <li>Thousands of successful recoveries annually</li>
                                                <li>Verified SAPS partnerships and armed response integration</li>
                                                <li>24/7 live monitoring centers (tested, not promised)</li>
                                                <li>In-house installation teams (no reseller middlemen)</li>
                                            </ul>
                                        </li>
                                        <li>Between 3-5 Elite Providers Contact You Within Minutes<br>Same strategic filtering as the insurance quotes:
                                            <ul>
                                                <li>Geographic specialization (who has the strongest recovery network in your area)</li>
                                                <li>Vehicle expertise (luxury vs. standard vehicle specialists)</li>
                                                <li>Current capacity (installation availability in your region)</li>
                                            </ul>
                                            You only hear from providers positioned to serve you well.
                                        </li>
                                        <li>You Compare, Choose, and Complete Your Protection<br>Ask the 5 strategic questions from the original tracker offer. Compare quotes. Choose the provider with the best combination of price, features, and recovery strength in your specific suburb.<br>Then schedule installation. Most providers install within 7–10 days.<br>Done. Your vehicle is now both insured competitively AND protected with elite-level recovery infrastructure.</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="row text-start mb-5">
                                <div class="col-12">
                                    <h3 class="text-center mb-3">The Synergy Nobody Talks About: How Better Insurance + Elite Tracking = Lower Total Cost</h3>
                                    <div class="break-image mb-4">
                                        <img src="img/car_insure_upsell/5.png" alt="Insurance and tracker protection" class="img-fluid rounded">
                                    </div>
                                    <p>Here's the part that surprised even us.<br>When you have both competitive insurance and elite tracking installed:<br>Your insurance premiums drop even further.<br>Why?<br>Because insurers reward tracked vehicles with premium discounts (typically 10–15%) since tracked cars are 3.7x more likely to be recovered intact, which means fewer total-loss claims.</p>
                                    <p>Let's do the math:</p>
                                    <ul>
                                        <li>Your current savings from Reverse-Auction Match: R600/month</li>
                                        <li>Additional tracker discount on premiums: R180/month (average 12% reduction)</li>
                                        <li>Total new monthly premium savings: R780/month</li>
                                        <li>Minus average elite tracker monitoring fee: R220/month</li>
                                        <li>Net monthly savings: R560/month, even after adding elite tracking.</li>
                                    </ul>
                                    <p>You're saving more money while being more protected.<br>That's not a trade-off. That's a compounding advantage.</p>
                                </div>
                            </div>
                            <div class="row text-start mb-5">
                                <div class="col-12">
                                    <h3 class="text-center mb-3">The 5 Questions That Reveal Real Recovery Capability (Ask Every Provider Who Contacts You)</h3>
                                    <div class="break-image mb-4">
                                        <img src="img/car_insure_upsell/6.png" alt="Insurance and tracker protection" class="img-fluid rounded">
                                    </div>
                                    <ol>
                                        <li>"What's your average recovery time in [my specific suburb/city]?"<br><i>Listen for specific data ("average 18 minutes in Sandton") vs. vague promises ("we're very fast").</i></li>
                                        <li>"Is installation included, or will there be additional charges on-site?"<br><i>Listen for "fully included" or clear disclosure of any extras. Red flag: "depends on your vehicle."</i></li>
                                        <li>"What happens if my tracker isn't activated or tested within 48 hours of installation?"<br><i>Listen for: "We don't release the installer until activation is confirmed" OR "You don't pay until you receive test alert."</i></li>
                                        <li>"Do you offer 24/7 live monitoring, or is it automated after-hours?"<br><i>Listen for: "Live monitoring center staffed 24/7/365." Red flag: "We have an on-call team."</i></li>
                                        <li>"What's your contract length, and what happens if my vehicle is written off?"<br><i>Listen for clear cancellation terms with no penalty if vehicle is stolen/totaled.</i></li>
                                    </ol>
                                </div>
                            </div>
                            <div class="row text-start mb-5">
                                <div class="col-12">
                                    <h3 class="text-center mb-3">Why Most People Who Read This Won't Act (And Why You're Different)</h3>
                                    <p>Here's the truth:<br>Most drivers won't fill out the second form.<br>They'll think: "I just saved money on insurance. That's enough. I'll handle the tracker later."<br>Later becomes never. And six months from now, when their Polo is taken outside Woolworths, they'll realize:<br>"I had insurance. But I didn't have recovery. My car is gone."</p>
                                    <p>You're different.<br>You understand that protection isn't binary. It's layered.<br>Insurance is the financial safety net. Tracking is the physical prevention system.<br>You don't choose one or the other. You complete the system.</p>
                                </div>
                            </div>
                            <div class="row text-start mb-5">
                                <div class="col-12">
                                    <h3 class="text-center mb-3">Your Next 60 Seconds (Again)</h3>
                                    <p>Fill out the form below.<br>Within minutes, 3–5 of South Africa's most established tracker providers will contact you.<br>Ask them the 5 strategic questions. Compare quotes. Choose the provider that matches your priorities.<br>Schedule installation. Most complete within 7–10 days.<br>Or don't.<br>Close this page. Drive your newly insured vehicle without tracking. Hope the statistics don't catch up.</p>
                                    <p>But understand this:<br>You just saved R600–R850/month on insurance. That savings can fund your tracker monitoring — at no net cost to your monthly budget.<br>You're not choosing between insurance and tracking.<br>You're choosing whether to complete your protection or leave it half-finished.<br>The Elite 5 are waiting. Your tracker quotes are 60 seconds away.<br>Complete your protection.</p>
                                </div>
                            </div>
                            <div class="row text-start mb-5">
                                <div class="col-12 text-center">
                                    <h3 class="mb-3">Get Elite Tracker Quotes Now (Final Step)</h3>
                                    <p class="mb-4">Same process. Same Elite 5. Complete protection.</p>
                                    <a href="#form" class="btn btn-primary py-3 px-5 mb-3" style="width:100%" data-cta="tracker-primary">Get your elite tracker quotes →</a>
                                    <p class="small text-muted mb-0">By submitting, you agree to be contacted by pre-screened elite tracker providers. Find My Offer is an affiliate platform and earns a commission if you choose to install. We do not provide installation services.</p>
                                </div>
                            </div>
                            <div class="row text-start mb-5">
                                <div class="col-12">
                                    <h4 class="mb-3">Questions You're Probably Asking</h4>
                                    <div class="break-image mb-4">
                                        <img src="img/car_insure_upsell/4.png" alt="Insurance and tracker protection" class="img-fluid rounded">
                                    </div>
                                    <p><b>"Didn't I just do this for insurance? Why am I filling out another form?"</b><br>Because insurance and tracking are sourced from different provider networks.<br>The Elite 5 insurers you just connected with don't install trackers. The Elite 5 tracker companies don't sell insurance.<br>This is the final piece. One more 60-second form to complete your vehicle protection system.</p>
                                    <p><b>"Is this actually necessary, or are you just upselling me?"</b><br>Fair question. Here's the honest answer:<br>If you're comfortable with your vehicle being compensated (eventually) rather than recovered (immediately), you don't need this.<br>But if the idea of losing your car permanently, and dealing with the R127,000 real-cost aftermath, feels unacceptable, then yes, this is necessary.<br>Insurance without recovery is financial protection without physical protection.<br>You've secured one. This completes the other.</p>
                                    <p><b>"Can I just research trackers on my own in a few weeks?"</b><br>You can.<br>But here's what happens:<br>Three weeks from now, the urgency fades. You get busy. You delay. You tell yourself "next month."<br>Meanwhile, 48 vehicles per day are being stolen in Gauteng alone.<br>The Recovery Completion System exists to eliminate that delay.<br>Right now, while you're already in "protect my vehicle" mode, you can complete the entire process in under 5 minutes total.<br>Why give yourself the opportunity to procrastinate?</p>
                                    <p><b>"What if I get quotes and none of them fit my budget?"</b><br>Then you decline and move on. Zero obligation.<br>But most drivers discover their insurance savings more than cover the tracker monitoring fees — meaning they end up more protected at lower total cost.<br>At minimum, you should know what elite-level protection actually costs before deciding it's "too expensive."</p>
                                    <p><b>"Will I get spammed by 12 companies again?"</b><br>No.<br>Same strategic filtering as the insurance quotes. You'll hear from 3–5 elite providers (not all 5) based on your vehicle type and location.<br>No random resellers. No brokers. Just the established leaders who've spent a decade proving they can deliver.</p>
                                </div>
                            </div>
                            <div class="row text-start mb-5">
                                <div class="col-12">
                                    <p><b>P.S.  The One Statistic That Changes Everything</b><br>Vehicles with elite tracking systems are 3.7x more likely to be recovered intact within 24 hours.<br>Vehicles without tracking are 2.4x more likely to be found stripped, burned, or never found at all.<br>Your vehicle is already insured. The question is whether it's recoverable.<br><a href="#form">Complete your protection now →</a></p>
                                    <p><b>P.P.S.  The Real Cost of "I'll Handle It Later"</b><br>If your vehicle is stolen next month and not recovered:</p>
                                    <ul>
                                        <li>R18,000 excess you'll pay</li>
                                        <li>R47,000 depreciation gap in replacement value</li>
                                        <li>R14,000 premium increases over 3 years</li>
                                        <li>Weeks of paperwork, rental cars, and settlement delays</li>
                                    </ul>
                                    <p>Total cost: R79,000+ for a vehicle that was insured but not tracked.<br>Cost of adding elite tracking today: R220/month, funded by the insurance savings you just secured.<br>The math isn't complicated. The decision is.<br><a href="#form">Get your elite tracker quotes →</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- END: Insurance-to-Tracker Upsell Copy (Jan 2026) -->
                    </div>
                </div>



                <div class="col-lg-12 wow fadeIn hlabi-form" id="form" data-wow-delay="0.5s">
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
                                                href="{{ route('terms') }}" class="text-blue-600 hover:underline">terms and conditions</a></label>
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
<style>

    .js-cookie-consent {
        position: fixed;
        bottom: 0;
        left: 0;
        z-index: 2147483645;
        box-sizing: border-box;
        width: 100%;

        background-color: #f1f6f4;
    }
    .cookie-inner {
        max-width: 960px;
        margin: 0 auto;
        padding: 32px 0;
    }
</style>
</body>
</html>
