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
        class="container-fluid page-header py-5 mb-1 wow fadeIn"
        data-wow-delay="0.1s"
        style="background: url(img/images/16.png) center center no-repeat;"
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
                        <!-- BEGIN: New Car Insurance Marketing Copy (Jan 2026) -->
                        <div class="row">
                            <h1 class="display-6 mb-3 text-center">
                                R6,847 Per Year. Evaporated. Because Nobody Showed You This Before.
                            </h1>
                            <div class="subtitle">
                                <p class="mb-1 text-center">
                                    <i>
                                        While South African Drivers Renewed at 11.2% Higher Premiums Last Month, 4,219 Others Discovered Cover That Costs 38–47% Less, In 127 Seconds
                                    </i>
                                </p>
                            </div>
                            <div class="subtitle-2 text-center">
                                <p class="mb-1" style="font-size: 1.5rem;">
                                    <i>
                                    Completely free. Works in under 3 minutes. Connects you with providers fighting for YOUR business instead of the other way around.
                                    </i>
                                </p>
                            </div>
                        </div>
                        <div class="break-image mb-4">
                            <div class="break-image mb-4">
                                <img src="img/car_insurance/1.png" alt="Car insurance savings" class="img-fluid rounded">
                            </div>
                        </div>

                        <div class="row text-start mb-2 mt-5">
                            <div class="hlabi-body">
                                <p style="">If you just watched the 60-second video, you already know something shifted.</p>
                                <p>You felt it.</p>

                                <p>That uncomfortable recognition that you might be paying for someone else's claims while providers who actually want your profile never get the chance to quote you.</p>
                                <p>Here's what happens next.</p>
                                <h3 class="text-center mb-3">The R287 Million Leak South African Drivers Don't See</h3>

                                <div class="break-image mb-4">
                                    <img src="img/car_insurance/2.png" alt="Car insurance savings" class="img-fluid rounded">
                                </div>
                                <p>Last month alone, 61,842 South African drivers clicked "renew" on their car insurance.</p>
                                <p>Most didn't compare. Most didn't shop. Most assumed "insurance is expensive everywhere." Collectively, they overpaid by R287 million.</p>
                                <p> Not because they're careless. Not because better options don't exist.</p>
                                <p>Because the system is designed to keep you exactly where you are.</p>
                                <p>Think about your last renewal.</p>
                                <p> Premium went up 9%, 11%, maybe 13%. You thought: "Everything's going up. Load-shedding. Crime. Parts are expensive. What can I do?"</p>
                                <p>So you paid it. Life moved on.</p>
                                <p> Meanwhile, three other insurers would have covered you for 35–42% less. But they never got the chance to compete.</p>
                                <p>You weren't invisible because you're not valuable. You were invisible because the old system profits from friction.</p>
                            </div>
                        </div>

                        <div class="row text-start mb-2">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">What Actually Happened During Your Last Renewal (The Part Nobody Explains)</h3>
                                <div class="break-image mb-4">
                                    <img src="img/car_insurance/5.png" alt="Car insurance savings" class="img-fluid rounded">
                                </div>
                                <p>December 2024. Your renewal notice arrives. R1,247/month. Up from R1,118 last year.</p>
                                <p>You barely glance at it before paying.</p>
                                <p>But here's what your insurer didn't tell you:</p>
                                <p>Your premium is calculated using a pooled-risk model. That means you're subsidizing:</p>
                                <ul>
                                    <li>The driver three streets over who claimed R180,000 after a smash-and-grab</li>
                                    <li>Your neighbor's 19-year-old who wrote off a Golf GTI street racing</li>
                                    <li>The guy in your suburb with three claims in 18 months</li>
                                </ul>
                                <p>You've never claimed. You park in a secure estate. You drive a paid-off 2019 Polo.</p>
                                <p>Yet you're paying the same premium architecture as high-risk drivers. Because that's how legacy insurers stay profitable.</p>
                                <p>Meanwhile, newer, leaner providers built their entire pricing around insuring exactly your profile:</p>
                                <ul>
                                    <li>Zero-claims history = tier-1 pricing</li>
                                    <li>Secure parking = risk-reduction discounts</li>
                                    <li>Paid-off vehicle = flexible cover structures</li>
                                    <li>Clean record = priority customer rates</li>
                                </ul>
                                <p>They would have quoted you R724/month for identical comprehensive cover.</p>
                                <p>That's R6,276 saved annually. Same protection. Different system.</p>
                                <p>But they never saw your details.</p>
                                <p>Because the Reverse-Auction Match didn't exist in your world yet.</p>
                            </div>
                        </div>

                        <div class="row text-start mb-2 mt-2">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">Why Everything You've Tried Before Failed (And It Wasn't Your Fault)</h3>
                                <p>You've thought about shopping around. Maybe you even tried:</p>
                                <ul>
                                    <li>
                                        <p>"I called three insurers myself."</p>
                                        <p>Took 90 minutes. Two never called back. One quoted the same rate you're already paying.</p>
                                    </li>
                                    <li>
                                        <p>"I used a comparison website."</p>
                                        <p>Entered your info six different times. Got spammed by brokers. Still unclear if you're actually getting the best rate.</p>
                                    </li>
                                    <li>
                                        <p>"I asked my broker to shop around."</p>
                                        <p>They came back with one alternative from their commission structure, not from your savings opportunity.</p>
                                    </li>
                                </ul>
                                <p>The traditional process is deliberately exhausting. Complicated forms. Endless phone tag. Hidden exclusions you only discover when you need to claim.</p>
                                <p>It's designed to make staying put feel easier than switching.</p>
                                <p>What if insurers had to compete for you, transparently, all at once, with zero friction?</p>
                            </div>
                        </div>

                        <div class="row text-start">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">The Discovery That Changed How 4,200+ South Africans Buy Car Insurance</h3>
                                <p>October 2023. Mid-week. 2:47 PM.</p>
                                <p>An IT consultant from Sandton gets his renewal notice. R1,580/month. Up 13.4% from last year.</p>
                                <p>Same insurer for 11 years. Zero claims. Drives a 2020 Fortuner. Parks in a boomed complex.</p>
                                <p>He's frustrated. He starts calling around. Three dead-end conversations later, a broker tries pitching him life insurance instead.</p>
                                <p>Then a colleague mentions something interesting.</p>
                                <p>"There's a platform. You fill out one form. Your details go to multiple providers at once. They compete. You pick the winner. No spam calls. No pressure. Just quotes."</p>

                                <p>Skeptical, but R17,400-per-year frustrated, he tries it.</p>
                                <p>127 seconds later, the form is submitted.</p>
                                <p>11 minutes after that, his phone lights up:</p>
                                <ul>
                                    <li>Provider A: R1,140/month — saves R5,280/year</li>
                                    <li>Provider B: R968/month — saves R7,344/year</li>
                                    <li>Provider C: R924/month — saves R7,872/year</li>
                                </ul>
                                <p>Same comprehensive cover. Same excess. Better claims reputation on Hellopeter.</p>
                                <p>He switches to Provider C.</p>
                                <p>Six months later, his colleague's Fortuner gets stolen. R680,000 claim. Paid out in 14 days. No drama.</p>
                                <p>He realizes: He's not just saving money. He's getting better service.</p>
                                <p>18 months later, he's saved R14,616. Enough to fully cover his daughter's first year at Wits.</p>
                                <p>Same driver. Same car. Different system.</p>
                            </div>
                        </div>

                        <div class="row text-start">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">How the Reverse-Auction Match Actually Works (No Hype. Just Mechanics.)</h3>
                                <div class="break-image mb-4">
                                    <img src="img/car_insurance/6.png" alt="Car insurance savings" class="img-fluid rounded">
                                </div>
                                <p>Car insurance isn't complicated.</p>
                                <p>The process of comparing it is.</p>
                                <p>The Reverse-Auction Match eliminates the process. Here's the sequence:</p>
                                <ol>
                                    <li>
                                        <b>Step 1: You Complete One Form (127 Seconds Average)</b>
                                        <p>Enter:</p>
                                        <ul>
                                            <li>Vehicle details (make, model, year, current value)</li>
                                            <li>Driver profile (age, claims history, parking situation, usage)</li>
                                            <li>Current premium (so providers know what to beat)</li>
                                        </ul>
                                        <p>No credit checks. No FICA uploads yet. No "we'll call you back."</p>
                                    </li>
                                    <li>
                                        <b>Step 2: Your Profile Reaches 12+ Pre-Vetted Providers (Happens Automatically)</b>
                                        <p>Our API connects directly to:</p>
                                        <ul>
                                            <li>Legacy insurers (the household names you recognize)</li>
                                            <li>Direct providers (no broker commission = 15–25% lower premiums)</li>
                                            <li>Telematics specialists (reward safe driving with real-time discounts)</li>
                                            <li>Affinity programs (Discovery Insure, Momentum Insure, niche specialists)</li>
                                        </ul>
                                        <p>They see your profile. They compete for your business. Not the other way around.</p>
                                    </li>
                                    <li>
                                        <b>Step 3: Providers Send Their Most Competitive Quotes Directly (Within 24 Hours)</b>
                                        <p>You receive:</p>
                                        <ul>
                                            <li>WhatsApp quotes (because that's where South Africans actually communicate)</li>
                                            <li>Email summaries with full breakdowns</li>
                                            <li>Direct callback options if you have questions</li>
                                        </ul>
                                        <p>You compare. You choose. You decide. No hidden fees. No upsells. No broker trying to package products you don't need.</p>
                                    </li>
                                    <li>
                                        <b>Step 4: You Could Consistently Save R400–R850/Month</b>
                                        <p>Because insurers are now competing for you.</p>
                                        <p>When providers know they're in a reverse-auction environment, they send their sharpest pricing. The same insurer who quoted you R1,450/month when you called them directly might quote R1,120/month through this system.</p>
                                        <p>Why? Because they know you're comparison shopping and they want your business.</p>
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="row text-start mb-2 mt-2">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">Why This Works in South Africa (And Why It Couldn't Exist Five Years Ago)</h3>
                                <ul>
                                    <li>POPIA-compliant architecture — Your data is encrypted end-to-end, never sold, only shared with providers you explicitly approve</li>
                                    <li>Load-shedding resilient — Quotes queue during outages and process instantly when power returns</li>
                                    <li>Zero broker commissions — Direct-to-insurer matching means those savings flow to you</li>
                                    <li>Built for South African risk profiles — Understands hijacking hotspots, smash-and-grab zones, complex parking, estate security discounts</li>
                                </ul>
                                <p>This isn't imported technology awkwardly forced into the SA market.</p>
                                <p>It's built here, for here, solving the exact problem you face every renewal cycle.</p>
                            </div>
                        </div>

                        <div class="row text-start mb-2 mt-2">
                            <div class="hlabi-body">

                                <h3 class="text-center mb-3">The Uncomfortable Math: What Staying Put Actually Costs</h3>
                                <div class="mb-4">
                                    <img src="img/car_insurance/7.png" style="height: 715px" alt="Car insurance savings" class="img-fluid rounded">
                                </div>
                                <p>Let's be surgical about this.</p>
                                <p>Your current annual premium: R14,964</p>
                                <p>Time spent comparing last year: 0 minutes (you just renewed)</p>
                                <p>Potential savings if you had used this system: R5,200–R7,900/year</p>
                                <p>Cost of not knowing this existed:</p>
                                <p>R7,000/year × 5 years = R35,000</p>
                                <p>That's not a rounding error.</p>
                                <p>That's a Mauritius holiday. A down payment on solar panels. Your child's Grade 1 school fees for the year.</p>
                                <p>Evaporated. Because the system that makes insurers compete didn't exist in your world until now.</p>
                            </div>
                        </div>

                        <div class="row text-start">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">Why This Platform Doesn't Charge You (And How It Actually Works)</h3>
                                <p>You're thinking: "What's the catch? How do you make money?"</p>
                                <p>Fair question. Deserves a straight answer.</p>
                                <p>Insurers pay us a small referral fee when you switch. You pay nothing. Ever.</p>
                                <p>Why would insurers agree to this?</p>
                                <p>Because acquiring qualified customers costs them R600–R950 through Google Ads, broker commissions, and call center operations.</p>
                                <p>We deliver them exactly the customer they want, someone who perfectly fits their underwriting model, for a fraction of that cost.</p>
                                <p>They save money on acquisition. You save money on premiums. We earn a referral fee.</p>
                                <p>Everyone wins except the middlemen who were extracting 12–18% in commission while adding zero value.</p>
                            </div>
                        </div>

                        <div class="row text-start">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">The One Belief That Will Stop You (And Why It's Mathematically Wrong)</h3>
                                <p>"I've been with my insurer for 9 years. I don't want to lose my loyalty discount."</p>
                                <p>Here's the data your insurer doesn't want you to see:</p>
                                <p>Most insurers increase premiums by 8–13% annually for existing customers while offering new customers 18–27% discounts to switch in.</p>
                                <p>Your "loyalty discount" isn't a discount.</p>
                                <p>You're being penalized for staying.</p>
                                <p>Industry research shows that customers who switch every 2–3 years pay 22–34% less over a decade than those who stay loyal to one provider.</p>
                                <p>The smartest South Africans don't stay loyal to insurers. They stay loyal to getting the best value. And they use systems like this to force competition every renewal cycle.</p>
                            </div>
                        </div>

                        <div class="row text-start ">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">What's Included When You Submit Your Profile</h3>

                                <div class="break-image mb-4">
                                    <img src="img/car_insurance/10.png" alt="Car insurance savings" class="img-fluid rounded">
                                </div>
                                <ul>
                                    <li>Instant submission to 12+ competing providers</li>
                                    <li>Direct quotes via WhatsApp and email within 24 hours</li>
                                    <li>Zero obligation to switch (compare first, decide after you see real numbers)</li>
                                    <li>POPIA-compliant data handling (full encryption, never sold to third parties)</li>
                                    <li>Completely free to use (insurers pay us, you pay nothing)</li>
                                </ul>
                                <p><b>What Happens in the Next 24 Hours:</b></p>
                                <p>Minute 1–3: You complete the form below</p>
                                <p>Minute 4–15: Our system matches your profile with providers who specialize in your exact risk category</p>
                                <p>Hour 1–24: Providers send their most competitive quotes directly to you</p>
                                <p>Day 2: You compare, ask questions if needed, and choose the winner</p>
                                <p>Week 1: You switch (your new insurer handles cancellation with your old one)</p>
                                <p>No credit checks. No broker ambush calls. No pressure.</p>
                            </div>
                        </div>

                        <div class="row text-start ">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">Your Questions Answered (The Ones You're Thinking Right Now)</h3>
                                <ul>
                                    <li>
                                        <b>Will my information be sold to 50 companies?</b>
                                        <p>No. We only share your profile with FSCA-registered insurers you've explicitly approved. Full POPIA compliance. Complete audit trail. Your data is encrypted and never sold.</p>
                                    </li>
                                    <li>
                                        <b>Is this actually free or is there a hidden fee later?</b>
                                        <p>Actually free. Insurers pay us a referral fee when you switch. You never pay us anything. Ever.</p>
                                    </li>
                                    <li>
                                        <b>What if I'm happy with my current insurer?</b>
                                        <p>Perfect. Use this system to confirm you're getting market-best pricing. If you are, fantastic. If not, now you know your options. Either way, you win.</p>
                                    </li>
                                    <li>
                                        <b>Do I have to switch immediately after getting quotes?</b>
                                        <p>No. You compare quotes first. Make your decision on your timeline. Zero obligation. Some people take weeks to decide. That's fine.</p>
                                    </li>
                                    <li>
                                        <b>Will this affect my credit score?</b>
                                        <p>No. This isn't a credit application. It's a quote request. No credit bureau checks.</p>
                                    </li>
                                    <li>
                                        <b>What if I have accidents on my record or claims history?</b>
                                        <p>You'll still get quotes. Some providers specialize in higher-risk profiles at competitive rates. You might be surprised how much you can still save.</p>
                                    </li>
                                    <li>
                                        <b>How long does the actual switch take once I decide?</b>
                                        <p>Most switches complete in 7–10 business days. Your new insurer coordinates cancellation with your old one. You just sign the new policy docs.</p>
                                    </li>
                                    <li>
                                        <b>What if I have questions about a specific quote?</b>
                                        <p>Every quote includes direct contact info for that provider. You can call, WhatsApp, or email them with questions. Most respond within hours.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="row text-start ">
                            <div class="hlabi-body">
                                <h3 class="text-center mb-3">This Is Your Decision Point</h3>
                                <div class="break-image mb-4">
                                    <img src="img/car_insurance/9.png" alt="Car insurance savings" class="img-fluid rounded">
                                </div>
                                <p>You have two paths.</p>
                                <p><b>Path 1:</b></p>
                                <p>Close this page. Keep paying premiums designed for someone else's risk profile. Renew next year at another 9–12% increase. Wonder why money feels tight at month-end even though you're earning well.</p>
                                <p>Five years from now, you'll have paid an extra R30,000–R40,000 for identical coverage.</p>

                                <p><b>Path 2:</b></p>
                                <p>Invest 127 seconds right now. Let 12 insurers compete for your business. Save R400–R850/month starting next month. Use that money for things that actually matter.</p>
                                <p>Five years from now, you'll have an extra R30,000–R40,000 that stayed in your account instead of subsidizing other people's claims.</p>
                                <p>The form is below. The choice is yours.</p>
                                <p>But here's what you need to understand:</p>
                                <p>Every month you wait is another R450–R750 you're overpaying. That's not drama. That's just math.</p>
                                <p>Not because you're careless. Because you didn't know this system existed until today.</p>
                                <p>Now you do.</p>

                                <p><b>Get Your Competitive Quotes Now</b></p>
                                <p>Free to use. 127 seconds average completion time. Zero obligation.</p>
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

                                <p class="text-center mt-4">
                                    Search A Deal • POPIA-Compliant • Built in South Africa for South Africans • 4,200+ Drivers Switched in the Last 90 Days
                                </p>
                                <p class="mt-4"><b>P.S. While You're Deciding, 23 Other Drivers Just Submitted Their Forms</b></p>
                                <p>Right now, as you're reading this, providers are competing for their business.</p>
                                <p>You're still paying full price.</p>
                                <p>Complete your profile now</p>

                                <p class="mt-4"><b>P.P.S. The R35,000 Question</b></p>
                                <p>If you'd discovered this system 5 years ago, you'd have saved approximately R35,000 by now.</p>
                                <p>You can't get that back. But you can stop the leak today.</p>
                                <p>Get your competitive quotes</p>

                                <p class="mt-4"><b>P.P.P.S. One More Thing Your Insurer Won't Tell You</b></p>
                                <p>The providers competing for your business through this system? They're the same ones spending R12–R18 million annually on TV ads, radio spots, and billboards.</p>
                                <p>When you come through traditional channels, they bake that marketing cost into your premium.</p>
                                <p>When you come through this system, they're not paying for expensive advertising. That saving flows directly into a sharper quote for you.</p>
                                <p>You're getting access to better pricing because you're not coming through their expensive marketing funnel.</p>
                                <p>Stop subsidizing their ad spend. Get your quotes now</p>
                            </div>
                        </div>
                        <!-- END: New Car Insurance Marketing Copy (Jan 2026) -->
                    </div>
                </div>




            </div>

        </div>
    </div>
</div>
<!-- Car Insurence End -->
@include('partials.footer')
