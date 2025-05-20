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
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: url(img/images/16.png) center center no-repeat; background-size: cover;">
    <div class="overlay-color">
        <div class="container py-5">
            <h1 class="display-4 animated text-white slideInDown mb-4">Car Insurance</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0 text-white">
                    <li class="breadcrumb-item">
                        <a href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active text-white" aria-current="page">
                        Car Insurance
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
                        <div class="row">
                            <h1 class="display-6 mb-5">
                                The Silent Crisis Every South African Family Faces—And the 60 Seconds That Ends It Forever.
                            </h1>
                            <div class="subtitle">
                                <p class="mb-5" style="font-size: 30px">
                                    <i>
                                        Discover the Breakthrough Car Insurance Method Giving Thousands of Families Immediate Financial Security, Absolute Control, and Irrefutable Peace of Mind.
                                    </i>
                                </p>
                            </div>
                        </div>
                        <div class="row text-start mb-5 mt-5">
                            <div>
                                <p>
                                    Every 22 minutes, a South African family faces financial ruin—not from reckless spending, but from something simpler:
                                </p>
                                <p>
                                    Believing their car insurance policy truly protects them.
                                    <br>
                                    <br>
                                    It's a quiet crisis no one talks about—until they're left picking up the pieces.
                                    <br>
                                    Imagine your own moment of truth: a frantic call, an accident you never saw coming.
                                    <br>
                                    <br>
                                    Now picture knowing, without any doubt, your family's financial future is completely secure.
                                    Introducing the revolutionary 60Second Switch™—a decision so simple, it changes everything.
                                    <br>
                                </p>
                            </div>
                            <h3 class="text-center mb-3">The Hidden Financial Trap in Your Insurance</h3>
                            <div class="hlabi-body" style="text-align: left">
                                <p>
                                    Most South Africans believe they're fully protected.
                                    <br>
                                    But what insurers don’t tell you is chilling:
                                </p>
                                <ul class="text-left">
                                    <li> 7 out of 10 claims face delays or partial denials due to hidden clauses.</li>
                                    <li> Thousands lose their life savings from sudden premium hikes or rejected claims.</li>
                                    <li> Fine print is engineered to confuse, leaving you vulnerable at the worst possible time.</li>
                                </ul>
                                <p>
                                    This silent crisis devastates families daily.
                                    <br>
                                    But now, it ends here.
                                </p>
                            </div>
                        </div>
                        <div class="row text-start mb-5 mt-5">
                            <h3 class="text-center mb-3">The Life-Changing Power of the 60Second Switch™</h3>
                            <div class="hlabi-body">
                                <p>In just 60 seconds, you can:</p>
                                <p>
                                    <ul class="text-left">
                                        <li> Instantly see verified live quotes from trusted insurers.</li>
                                        <li> Uncover hidden policy traps and switch effortlessly.</li>
                                        <li> Ensure unmatched financial protection for your loved ones.</li>
                                    </ul>
                                </p>
                                <p class="text-center">
                                    <b>No pressure. No sales calls. Pure certainty.</b>
                                    <br>
                                    <b>The Proven Method Transforming Thousands of Lives</b>
                                    <br>
                                    <br>
                                    The 60Second Switch™ is not just different—it’s essential:
                                    <div class="points text-start">
                                        <ul class="text-left">
                                            <li>
                                                <b>Real-Time Accuracy:</b> Direct insurer quotes via secure API connections. No guesswork.
                                            </li>
                                            <li>
                                                <b>Complete Transparency:</b> Every policy is clearly displayed—zero hidden surprises.
                                            </li>
                                            <li>
                                                <b>Total Privacy Control:</b> Your data remains secure until you decide to proceed.
                                            </li>
                                        </ul>
                                    </div>
                                    <br>
                                    <br>
                                    This isn't marketing hype. It’s your family's lifeline.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">When Seconds Matter—A Real-Life Awakening</h3>
                        <div class="hlabi-body">
                            <p class="mb-2">
                                Consider Sipho. A hardworking father blindsided by an insurer’s claim denial after a devastating crash.
                                <br>
                                Frantic, he turned to the 60Second Switch™. Within one minute, he found a transparent insurer, saving 
                                thousands and avoiding financial ruin.
                                <br>
                                "In those 60 seconds, I reclaimed control," Sipho said. "My family’s future changed forever."
                            </p>
                            <b class=""> Why Your Current Policy Is a Dangerous Gamble</b>
                            <div class="points text-start">
                                <p>Insurers often profit from confusion:</p>
                                <ul>
                                    <li>Obscure terms buried in dense fine print.</li>
                                    <li>Claim processes designed to overwhelm.</li>
                                    <li>Policies that give false security.</li>
                                </ul>
                                <p>
                                    The truth? Your family's financial safety deserves clarity, not confusion.
                                    <br>
                                    The 60Second Switch™ delivers precisely that.
                                </p>
                            </div>
                            <b class=""> Concrete Proof, Immediate Results</b>
                            <div class="points text-start">
                                <p>Thousands of South Africans already experience:</p>
                                <ul>
                                    <li>
                                        <b>Instant Savings:</b> Median verified monthly savings exceeding R400.
                                    </li>
                                    <li>
                                        <b>Transparency:</b> Zero hidden terms, fully clear policies.
                                    </li>
                                    <li>
                                        <b>Privacy:</b> Complete control, zero unsolicited contact.
                                    </li>
                                </ul>
                                <p>
                                    Every benefit independently audited, completely verifiable.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">Our Unbreakable Commitment to You</h3>
                        <div class="hlabi-body">
                            <div class="points text-start">
                                <p>You deserve absolute trust. Here’s how we guarantee it:</p>
                                <ol>
                                    <li>
                                        <b>Uncompromising Transparency:</b> Every quote directly from insurers. No hidden agendas.
                                    </li>
                                    <li>
                                        <b>Guaranteed Privacy:</b> Your data encrypted until YOU act.
                                    </li>
                                    <li>
                                        <b>Legal Accountability:</b> Fully compliant with POPIA and Consumer Protection Act—your safety, legally secured.
                                    </li>
                                </ol>
                                <p>
                                    The truth? Your family's financial safety deserves clarity, not confusion.
                                    <br>
                                    The 60Second Switch™ delivers precisely that.
                                </p>
                            </div>
                            <b class=""> The Price of Ignoring This Message</b>
                            <div class="points text-start">
                                <p>Consider carefully:</p>
                                <ul>
                                    <li>Can you confidently navigate your insurer's hidden terms?</li>
                                    <li>How much money are you unknowingly losing?</li>
                                    <li>Is your family's financial future truly secure?</li>
                                </ul>
                                <p>
                                    Ignoring this reality is risking everything.
                                </p>
                            </div>
                            <b class=""> Your Family's Future Secured—Right Now</b>
                            <div class="points text-start">
                                <p>In just one minute, you can:</p>
                                <ul>
                                    <li>Guarantee transparent, comprehensive coverage.</li>
                                    <li>Lock in immediate, substantial savings.</li>
                                    <li> Provide unshakeable financial security to your loved ones.</li>
                                </ul>
                                <p>
                                    This isn’t insurance—it’s peace of mind guaranteed.
                                </p>
                            </div>
                            <b class=""> Make Your 60Second Switch™ Now.</b>
                            <div class="points text-start">
                                <ul>
                                    <li>Instant, live insurer quotes.</li>
                                    <li>Absolute transparency.</li>
                                    <li>Immediate financial protection.</li>
                                </ul>
                                <p>
                                    Take action now, because your family deserves certainty.
                                </p>
                            </div>
                            <b class=""> Final Message:</b>
                            <div class="points text-start">
                                <p>
                                    Your choice today echoes through generations. Don't let your family be the next silent crisis statistic.
                                    <br>
                                    Secure your legacy now.
                                </p>
                            </div>
                            <b>Act Now—60 Seconds to Certainty.</b>
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
                                            >
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
                                            >
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
                                            >
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
                                            >
                                            <label for="gmail">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <select
                                                name="gender"
                                                required
                                                class="form-select"
                                                id="cage"
                                            >
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
                                    <div class="col-sm-12">
                                        <input
                                            id="checkbox-1"
                                            required
                                            name="acceptterms"
                                            value="true"
                                            aria-describedby="checkbox-1"
                                            type="checkbox"
                                            class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded"
                                        >
                                        <label for="checkbox-1" class="text-sm ml-3 font-medium text-gray-900">I agree to the
                                            <a href="{{ route('terms') }}" class="text-blue-600 hover:underline">terms and conditions</a>
                                        </label>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary py-3 px-5" type="submit">
                                            Get Car Insurance
                                        </button>
                                    </div>
                                </div>
                                <input
                                    type="hidden"
                                    name="optinurl"
                                    value="https://searchadeal.online/"
                                    required
                                >
                                <input
                                    type="hidden"
                                    name="optindate"
                                    value="{{ date('Y-m-d h:i:s') }}"
                                    required
                                >
                                <input
                                    type="hidden"
                                    name="channel"
                                    value="JMAff"
                                    required
                                >
                                <input
                                    type="hidden"
                                    name="language"
                                    value="English"
                                    required
                                >
                                <input
                                    type="hidden"
                                    name="product"
                                    value="JMCar"
                                    required
                                >
                                <input
                                    type="hidden"
                                    name="affiliateshortcode"
                                    value="JMAFFSite15022"
                                    required
                                >
                                <input
                                    type="hidden"
                                    name="Leadsource"
                                    value="JMLSSEARCHADEAL9020"
                                    required
                                >
                                <input
                                    type="hidden"
                                    name="offer_id"
                                    value="377"
                                    required
                                >
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('partials.footer')
