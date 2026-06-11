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

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Car Insurance Upsell</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

  <style>

    :root{
      --bg:#f8f6f2;
      --surface:#f0ece5;
      --ink:#171411;
      --ink-soft:#5e5953;
      --accent:#c84b11;
      --accent-tint:#fff4ee;
      --divider:#d9d2ca;
      --primary:#081225;
      --white:#ffffff;
      --trust:#2470a8;
      --danger:#d74b4b;
      --muted:#7a756e;
    }

    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
    }

    body{
      background:var(--bg);
      color:var(--ink);
      font-family:'DM Sans',sans-serif;
      line-height:1.6;
      -webkit-font-smoothing:antialiased;
    }

    h1,h2,h3,h4{
      font-family:'Playfair Display',serif;
      font-weight:700;
    }

    img{
      max-width:100%;
      display:block;
    }

    .container{
      width:100%;
      max-width:760px;
      margin:0 auto;
      padding:0 24px;
    }

    /* HERO */

    .hero{
      padding:70px 0 50px;
      text-align:center;
    }

    .hero-badge{
      display:inline-flex;
      align-items:center;
      gap:8px;
      color:var(--accent);
      text-transform:uppercase;
      letter-spacing:.08em;
      font-size:13px;
      font-weight:700;
      margin-bottom:24px;
    }

    .hero h1{
      font-size:clamp(2.3rem,5vw,4.3rem);
      line-height:1.05;
      letter-spacing:-.03em;
      margin-bottom:40px;
    }

    /*.hero-full-image{*/
    /*  width:100vw;*/
    /*  position:relative;*/
    /*  left:50%;*/
    /*  transform:translateX(-50%);*/
    /*  margin-bottom:40px;*/
    /*}*/

    .hero-desc{
      font-size:clamp(1.15rem,2vw,1.5rem);
      line-height:1.5;
      color:var(--ink-soft);
      font-style:italic;
      margin-bottom:30px;
    }

    .hero-note{
      font-size:clamp(1rem,2vw,1.25rem);
      font-weight:700;
      line-height:1.6;
    }

    /* CONTENT */

    section.content{
      padding-bottom:80px;
    }

    p{
      font-size:18px;
      line-height:1.7;
      margin-bottom:24px;
    }

    h2{
      font-size:clamp(2rem,4vw,3rem);
      line-height:1.15;
      letter-spacing:-.02em;
      margin-bottom:28px;
    }

    h3{
      font-size:1.7rem;
      line-height:1.2;
      margin-bottom:16px;
    }

    hr{
      border:none;
      border-top:1px solid var(--divider);
      margin:70px 0;
    }

    /* DARK CALLOUT */

    .callout-dark{
      background:var(--ink);
      color:#fff;
      padding:38px;
      border-radius:10px;
      margin-bottom:50px;
    }

    .callout-dark p{
      margin:0;
      opacity:.9;
      font-size:1.3rem;
      font-style:italic;
    }

    /* GRID */

    .grid-2{
      display:grid;
      grid-template-columns:1fr;
      gap:24px;
      margin:50px 0;
    }

    @media(min-width:768px){
      .grid-2{
        grid-template-columns:1fr 1fr;
      }
    }

    .card{
      padding:30px;
      border-radius:10px;
    }

    .card-default{
      border:1px solid var(--divider);
      background:var(--surface);
    }

    .card-accent{
      border:2px solid var(--accent);
      background:var(--accent-tint);
    }

    .card h4{
      font-size:1.05rem;
      margin-bottom:12px;
      font-family:'DM Sans',sans-serif;
    }

    .card p{
      margin:0;
      color:var(--ink-soft);
      font-size:16px;
    }

    /* LISTS */

    .list{
      display:flex;
      flex-direction:column;
      gap:18px;
      margin-top:20px;
    }

    .list-item{
      display:flex;
      align-items:flex-start;
      gap:12px;
    }

    .icon{
      width:22px;
      height:22px;
      border-radius:50%;
      flex-shrink:0;
      margin-top:2px;
    }

    .icon.check{
      background:#2f8b58;
    }

    .icon.x{
      background:#d74b4b;
    }

    /* BOX */

    .box{
      background:#fff;
      border:1px solid var(--divider);
      border-radius:10px;
      padding:36px;
      margin:40px 0;
    }

    .box-highlight{
      background:var(--accent-tint);
      border-left:4px solid var(--accent);
    }

    .cost-row{
      display:flex;
      gap:18px;
      margin-bottom:20px;
      align-items:flex-start;
    }

    .cost{
      width:95px;
      flex-shrink:0;
      color:#cf5b28;
      font-weight:700;
    }

    /* STEPS */

    .steps{
      display:flex;
      flex-direction:column;
      gap:50px;
      margin:60px 0;
    }

    .step{
      display:flex;
      gap:24px;
    }

    .step-number{
      width:34px;
      height:34px;
      border-radius:50%;
      background:var(--ink);
      color:#fff;
      display:flex;
      align-items:center;
      justify-content:center;
      font-weight:700;
      flex-shrink:0;
      margin-top:4px;
    }

    /* FORM */

    .form-section{
      background:var(--surface);
      border:2px solid var(--divider);
      border-radius:12px;
      padding:55px 34px;
      max-width:640px;
      margin:90px auto;
      position:relative;
      box-shadow:0 18px 40px rgba(0,0,0,.08);
    }

    .form-badge{
      position:absolute;
      top:-16px;
      left:50%;
      transform:translateX(-50%);
      background:var(--surface);
      padding:0 14px;
    }

    .form-badge span{
      background:rgba(200,75,17,.12);
      color:var(--accent);
      border-radius:999px;
      padding:8px 16px;
      font-size:12px;
      text-transform:uppercase;
      letter-spacing:.1em;
      font-weight:700;
    }

    .form-section h3{
      text-align:center;
      margin-bottom:12px;
    }

    .form-sub{
      text-align:center;
      color:var(--muted);
      margin-bottom:38px;
      font-style:italic;
    }

    form{
      display:flex;
      flex-direction:column;
      gap:24px;
    }

    .form-group{
      display:flex;
      flex-direction:column;
      gap:10px;
    }

    label{
      font-size:14px;
      font-weight:700;
    }

    input,
    select{
      width:100%;
      height:60px;
      padding:0 18px;
      border:1px solid #d7d0c7;
      border-radius:4px;
      background:#fff;
      font-size:15px;
      font-family:'DM Sans',sans-serif;
    }

    input:focus,
    select:focus{
      outline:none;
      border-color:var(--accent);
    }

    .contact-group{
      border-top:1px solid var(--divider);
      padding-top:28px;
      display:flex;
      flex-direction:column;
      gap:16px;
    }

    .btn-submit{
      border:none;
      background:var(--primary);
      color:#fff;
      border-radius:999px;
      min-height:88px;
      cursor:pointer;
      margin-top:10px;
      transition:.2s ease;
      display:flex;
      flex-direction:column;
      justify-content:center;
      align-items:center;
    }

    .btn-submit:hover{
      background:var(--accent);
      transform:translateY(-2px);
    }

    .btn-main{
      font-size:18px;
      font-weight:700;
      text-transform:uppercase;
      letter-spacing:.04em;
    }

    .btn-sub{
      font-size:12px;
      opacity:.8;
      margin-top:5px;
    }

    .form-legal{
      margin-top:30px;
      text-align:center;
      font-size:11px;
      color:var(--muted);
      text-transform:uppercase;
      letter-spacing:.08em;
      line-height:1.8;
    }

    /* FAQ */

    .faq-item{
      padding:30px 0;
      border-bottom:1px solid var(--divider);
    }

    .faq-item h3{
      font-size:1.5rem;
      margin-bottom:12px;
    }

    /* POSTSCRIPT */

    .ps-box{
      display:grid;
      grid-template-columns:1fr;
      gap:30px;
      border-top:4px solid var(--accent);
      background:var(--accent-tint);
      padding:36px;
      border-radius:10px;
      margin-top:70px;
    }

    @media(min-width:768px){
      .ps-box{
        grid-template-columns:40% 60%;
      }
    }

  </style>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-18179664123"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-18179664123');
    </script>
    <!-- Signals Gateway Pixel Code -->
    <script>
        !function(a,h,e,v,n,t,s){
            if(a.cbq)return;
            n=a.cbq=function(){n.callMethod ? n.callMethod.apply(n,arguments) : n.queue.push(arguments);};
            if(!a._cbq)a._cbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];
            t=h.createElement(e);t.async=!0; t.src=v;s=h.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s);
        }(window, document,'script', 'https://m.sgw1-usercentrics.io/sdk/4001657421801748733/events.js');
        cbq('setHost', 'https://m.sgw1-usercentrics.io/');
        cbq('init', '4001657421801748733');
        cbq('track', 'PageView');
    </script>
    <!-- End Signals Gateway Pixel Code -->
</head>

<body>


<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NWN5MH94"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<!-- HERO -->
<section class="hero">
  <div class="container">

    <div class="hero-badge">
      🛡️ One Final Step: Complete Your Vehicle Protection
    </div>

    <h1>
      You Just Made One of the Smartest Decisions a South African Driver Can Make
    </h1>

  </div>

  <div class="">
    <img src="https://billboardads.digitalcavemen.com/wp-content/uploads/2026/04/Image-1-Varient-A.png"
         class="w-full h-auto mb-8 mt-6 rounded-lg shadow-sm"
         style="position: relative; width: 100vw; left: 50%; transform: translateX(-50%);"
         alt="">
  </div>

  <div class="container">

    <p class="hero-desc">
      Congratulations. Seriously. By getting competitive insurance quotes from the Elite 5, you've done something 94% of drivers never do.
    </p>

    <p class="hero-note">
      That takes intelligence. Discipline. A refusal to overpay for identical coverage.
    </p>

  </div>
</section>

<!-- CONTENT -->
<section class="content">
  <div class="container">

    <div class="callout-dark">
      <h3>But here's what nobody tells you about insurance savings...</h3>
      <p>
        Insurance only protects you after something's already been taken.
      </p>
    </div>

    <p>
      Think about it. The Reverse-Auction Match just saved you R400–R850/month by connecting you with providers who'll compensate you if your vehicle is stolen.
    </p>

    <div class="grid-2">

      <div class="card card-default">
        <h4>Compensation is:</h4>
        <p>
          Your car disappears, you file a claim, you wait 30 days, you get a payout minus excess.
        </p>
      </div>

      <div class="card card-accent">
        <h4 style="color:var(--accent);">Recovery is:</h4>
        <p style="color:var(--ink);">
          Your tracker activates, armed response is dispatched, your vehicle is recovered within hours.
        </p>
      </div>

    </div>

    <p style="text-align:center;font-weight:700;font-size:24px;">
      One gives you money eventually. The other gives you your actual car back immediately.
    </p>

    <img
            src="https://billboardads.digitalcavemen.com/wp-content/uploads/2026/04/Image-2-Varient-B.png"
            alt=""
            style="margin:50px 0;border-radius:10px;"
    >

    <hr>

    <h2>
      The gap between "insured" and "protected" costs R127,000 on average
    </h2>

    <div class="box">

      <div class="cost-row">
        <div class="cost">R18,000:</div>
        <div>Average insurance excess you pay out of pocket</div>
      </div>

      <div class="cost-row">
        <div class="cost">R47,000:</div>
        <div>Value depreciation gap</div>
      </div>

      <div class="cost-row">
        <div class="cost">R14,000:</div>
        <div>Premium increase over 3 years</div>
      </div>

      <div class="cost-row">
        <div class="cost">R22,000:</div>
        <div>Replacement shopping costs</div>
      </div>

      <div class="cost-row">
        <div class="cost">R26,000:</div>
        <div>Psychological and emotional impact</div>
      </div>

      <hr style="margin:30px 0;">

      <p style="font-weight:700;margin:0;">
        Total real cost: R127,000
      </p>

    </div>

    <div class="box box-highlight">

      <div class="list">

        <div class="list-item">
          <div class="icon check"></div>
          <div><strong>R0:</strong> No excess paid</div>
        </div>

        <div class="list-item">
          <div class="icon check"></div>
          <div><strong>R0:</strong> No depreciation loss</div>
        </div>

        <div class="list-item">
          <div class="icon check"></div>
          <div><strong>R0:</strong> No premium spike</div>
        </div>

      </div>

    </div>

    <hr>

    <h2>The Completion Principle</h2>

    <div class="grid-2">

      <div>
        <h4 style="margin-bottom:20px;">What you secured:</h4>

        <div class="list">

          <div class="list-item">
            <div class="icon check"></div>
            <div>Financial protection if your vehicle disappears permanently</div>
          </div>

          <div class="list-item">
            <div class="icon check"></div>
            <div>Lower premiums because insurers competed for you</div>
          </div>

        </div>
      </div>

      <div>
        <h4 style="margin-bottom:20px;">What you haven't secured yet:</h4>

        <div class="list">

          <div class="list-item">
            <div class="icon x"></div>
            <div>The ability to stop a theft in progress</div>
          </div>

          <div class="list-item">
            <div class="icon x"></div>
            <div>Real-time location tracking</div>
          </div>

        </div>
      </div>

    </div>

    <hr>

    <h2>The Recovery Completion System</h2>

    <div class="steps">

      <div class="step">
        <div class="step-number">1</div>

        <div>
          <h3>One More 60-Second Form</h3>
          <p>Vehicle details, location, preferred contact method.</p>
        </div>
      </div>

      <div class="step">
        <div class="step-number">2</div>

        <div>
          <h3>Your Profile Reaches the Elite 5 Trackers</h3>
          <p>The same established leaders you'd find through weeks of research.</p>
        </div>
      </div>

      <div class="step">
        <div class="step-number">3</div>

        <div>
          <h3>Elite Providers Contact You</h3>
          <p>Strategic filtering based on region, vehicle, and installation capacity.</p>
        </div>
      </div>

    </div>

    <!-- FORM -->
    <div class="form-section" style="background: #F8FAFC">

      <div class="form-badge" style="background: #F8FAFC; border-radius: 50%">
        <span>FINAL STEP</span>
      </div>

      <h3>Get Elite Tracker Quotes Now</h3>

      <p class="form-sub">
        Same process. Same Elite 5. Complete protection.
      </p>

      <form action="{{ route('tracker.submit') }}" method="POST">

        @csrf
        <input type="hidden" name="form_source" value="car_track_upsell" />

        <div name="vehicle_type" class="form-group">
          <label>1. What do you drive?</label>

          <select>
            <option value="">Select vehicle type...</option>
            <option value="sedan">Sedan</option>
            <option value="suv">SUV or 4×4</option>
            <option value="bakkie">Bakkie</option>
            <option value="hatchback">Hatchback</option>
            <option value="other">Other</option>
          </select>
        </div>

        <div class="form-group">
          <label>2. What is your primary need?</label>

          <select name="primaryneed" required>
            <option value="">Select primary need...</option>
            <option value="theft-recovery">Theft & Recovery</option>
            <option value="insurance-discount">Insurance Discount</option>
            <option value="fleet-tracking">Fleet Tracking</option>
            <option value="peace-of-mind">Peace of Mind</option>
            <option value="other">Other</option>
          </select>
        </div>

        <div class="form-group">
          <label>3. Where is the vehicle parked securely?</label>

          <select name="parkingsecurity" required>
            <option value="">Select parking...</option>
            <option value="garage">Locked Garage</option>
            <option value="complex">Secured Complex / Estate</option>
            <option value="carport">Carport</option>
            <option value="street">Street Parking</option>
            <option value="other">Other</option>
          </select>
        </div>

        <div class="contact-group">

          <label>Where should we send your quotes?</label>

          <input
                  type="text"
                  name="firstname"
                  placeholder="First Name"
                  required
          >

          <input
                  type="text"
                  name="lastname"
                  placeholder="Last Name"
                  required
          >

          <input
                  type="email"
                  name="email"
                  placeholder="Email Address"
                  required
          >

          <input
                  type="tel"
                  name="phone1"
                  placeholder="Phone Number"
                  required
          >
          <div class="checkbox-row" style="display:flex; align-items:center; gap:8px;">
            <input type="checkbox" style="width: 15px;" id="terms" required name="acceptterms">

            <label for="tracker-terms" class="text-sm font-medium text-gray-900 font-body">
              I agree to the <a href="{{ route('terms') }}" class="text-blue-600 hover:underline">terms and conditions</a>
            </label>
          </div>

        </div>

        <button class="btn-submit" type="submit">

            <span class="btn-main">
              Complete Your Protection Now →
            </span>

          <span class="btn-sub">
              Get Elite Tracker Quotes
            </span>

        </button>
          <p>
              <i>I do not need any protection</i>, <a href="{{ route('car-track-thank-you') }}">Im done</a>
          </p>

      </form>

      <p class="form-legal">
        By submitting, you agree to be contacted by pre-screened elite tracker providers.
      </p>

    </div>

    <hr>

    <!-- FAQ -->
    <h2 style="text-align:center;">
      Questions you're probably asking
    </h2>

    <div class="faq-item">
      <h3>Didn't I just do this for insurance?</h3>
      <p>
        Insurance and tracking are sourced from different provider networks.
      </p>
    </div>

    <div class="faq-item">
      <h3>Is this actually necessary?</h3>
      <p>
        If permanent loss of your vehicle feels unacceptable, then yes.
      </p>
    </div>

    <!-- POSTSCRIPT -->
    <div class="ps-box">

      <div>
        <img
                src="https://billboardads.digitalcavemen.com/wp-content/uploads/2026/04/Image-7-vARIENT-B.png"
                alt=""
                style="border-radius:10px;"
        >
      </div>

      <div>

        <p>
          <strong style="color:var(--accent);">
            P.S. Vehicles with elite tracking systems are 3.7x more likely to be recovered intact.
          </strong>
        </p>

        <p>
          <strong style="color:var(--accent);">
            P.P.S. The cost of delay is far greater than the tracker fee itself.
          </strong>
        </p>

      </div>

    </div>

  </div>
</section>

</body>
</html>
