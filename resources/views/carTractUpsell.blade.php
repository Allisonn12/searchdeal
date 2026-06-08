<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Car Tracker – Insurance Upsell</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    :root {
      --bg: #f9f7f4;
      --surface: #f0ede8;
      --ink: #1a1612;
      --ink-soft: #4a4540;
      --accent: #c84b11;
      --accent-dark: #a33a0b;
      --success: #2a7d4f;
      --divider: #ddd8d0;
      --border: #ccc7bf;
      --muted: #7a756e;
      --faint: #8a857e;
      --trust: #1a5c8a;
      --primary: #1a1612;
      --red: #e05252;
      --orange: #e07020;
    }
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      background: var(--bg);
      font-family: 'DM Sans', sans-serif;
      color: var(--ink);
      -webkit-font-smoothing: antialiased;
    }
    h1, h2, h3, h4 { font-family: 'Playfair Display', serif; }
    img { display: block; max-width: 100%; }

    .container { max-width: 672px; margin: 0 auto; padding: 0 1.5rem; }

    /* ── Hero ── */
    .hero { padding: 3rem 0 4rem; text-align: center; }
    .hero-badge {
      display: inline-flex;
      align-items: center;
      gap: .5rem;
      padding: .5rem 1rem;
      background: rgba(200,75,17,.1);
      color: var(--accent);
      border-radius: 9999px;
      font-size: .75rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .1em;
      margin-bottom: 2rem;
    }
    .hero h1 {
      font-size: clamp(2rem, 5vw, 3.5rem);
      line-height: 1.1;
      letter-spacing: -.02em;
      margin-bottom: 2rem;
    }
    .hero img { margin: 0 auto 2rem; border-radius: .5rem; max-width: 672px; }
    .hero-desc {
      font-size: clamp(1.0625rem, 2vw, 1.25rem);
      line-height: 1.65;
      max-width: 640px;
      margin: 0 auto 1.5rem;
    }
    .hero-note { font-size: 1rem; font-weight: 700; max-width: 640px; margin: 0 auto; }

    /* ── Editorial ── */
    .editorial { padding: 0 0 4rem; }
    h2 {
      font-size: clamp(1.75rem, 4vw, 2.5rem);
      line-height: 1.15;
      letter-spacing: -.02em;
      margin-bottom: 1.5rem;
    }
    .lead { font-size: clamp(1.0625rem, 2vw, 1.25rem); line-height: 1.65; margin-bottom: 1rem; }
    .bold-note { font-size: 1rem; font-weight: 700; margin-bottom: 3rem; }

    hr.divider { border: none; border-top: 1px solid var(--divider); margin: 3rem 0; }

    /* ── Dark callout ── */
    .callout-dark {
      background: var(--primary);
      color: #fff;
      padding: 2rem;
      border-radius: .5rem;
      margin-bottom: 3rem;
    }
    .callout-dark p { font-size: 1.125rem; font-style: italic; opacity: .9; }

    /* ── Before/After Grid ── */
    .ba-grid { display: grid; grid-template-columns: 1fr; gap: 1.5rem; margin-bottom: 3rem; }
    @media (min-width: 640px) { .ba-grid { grid-template-columns: 1fr 1fr; } }
    .ba-card { padding: 1.5rem; border-radius: .5rem; }
    .ba-card.before { border: 1px solid var(--divider); background: var(--bg); }
    .ba-card.after { border: 2px solid var(--accent); background: rgba(200,75,17,.04); }
    .ba-card .ba-title { font-size: 1rem; font-weight: 700; margin-bottom: .75rem; }
    .ba-card.before .ba-title { color: var(--ink); }
    .ba-card.after .ba-title { color: var(--accent); }
    .ba-list { list-style: none; display: flex; flex-direction: column; gap: .6rem; }
    .ba-list li { display: flex; align-items: flex-start; gap: .5rem; font-size: .875rem; }
    .ba-list li span { line-height: 1.5; }
    .ba-list.bad li span { color: var(--muted); }
    .ba-list.good li span { color: var(--ink); }
    .ba-list li svg { flex-shrink: 0; margin-top: .15rem; }

    /* ── Box callout ── */
    .box-callout {
      background: var(--bg);
      padding: 2rem;
      border-radius: .5rem;
      border-left: 4px solid var(--divider);
      margin-bottom: 3rem;
    }
    .box-callout.accent-border { border-left-color: var(--accent); }
    .box-callout p { font-size: .9375rem; line-height: 1.65; }
    .box-callout p + p { margin-top: .75rem; }

    /* ── Timing cards ── */
    .timing-grid { display: flex; flex-direction: column; gap: 1.5rem; margin-bottom: 3rem; }
    .timing-card { padding: 1.5rem; border-radius: .5rem; }
    .timing-card.neutral { border: 1px solid var(--divider); }
    .timing-card.positive { border: 2px solid var(--accent); background: rgba(200,75,17,.04); }
    .timing-card h4 { font-family: 'DM Sans', sans-serif; font-size: 1rem; font-weight: 700; margin-bottom: .75rem; }
    .timing-card.neutral h4 { color: var(--ink); }
    .timing-card.positive h4 { color: var(--accent); }
    .timing-card p { font-size: .875rem; line-height: 1.6; margin-bottom: .4rem; }
    .timing-card .highlight-red { color: var(--red); font-weight: 700; }
    .timing-card .highlight-accent { color: var(--accent); font-weight: 700; }

    /* ── Steps ── */
    .steps { display: flex; flex-direction: column; gap: 1rem; margin-bottom: 4rem; }
    .step {
      display: flex;
      align-items: center;
      gap: 1.5rem;
      padding: 1rem 1.25rem;
      border: 1px solid var(--divider);
      border-radius: .5rem;
    }
    .step-label { font-size: 1.125rem; font-weight: 700; color: var(--accent); flex-shrink: 0; min-width: 4.5rem; }
    .step p { font-size: .9375rem; color: var(--ink); }

    /* ── Stats box ── */
    .stats-box {
      background: var(--primary);
      color: #fff;
      padding: 3rem 2rem;
      border-radius: .5rem;
      margin-bottom: 4rem;
    }
    .stats-box h3 { font-size: clamp(1.25rem, 3vw, 1.75rem); font-weight: 500; margin-bottom: 1.5rem; color: #fff; }
    .stats-row { display: flex; flex-direction: column; gap: 1.5rem; margin-bottom: 2rem; }
    .stats-item h4 { font-family: 'DM Sans', sans-serif; font-size: 1rem; font-weight: 700; color: var(--accent); margin-bottom: .4rem; }
    .stats-item p { font-size: .875rem; opacity: .9; line-height: 1.6; }
    .stats-case { border-top: 1px solid rgba(255,255,255,.2); padding-top: 1.5rem; margin-top: .5rem; }
    .stats-case img { border-radius: .5rem; margin-bottom: 1.5rem; }
    .stats-case p { font-size: .9375rem; font-style: italic; }

    /* ── Reasons ── */
    .reasons { display: flex; flex-direction: column; gap: 1.5rem; margin-bottom: 4rem; }
    .reason-card { padding: 1.5rem; border: 1px solid var(--divider); border-radius: .5rem; }
    .reason-card h4 { font-family: 'DM Sans', sans-serif; font-size: 1.125rem; font-weight: 700; color: var(--ink); margin-bottom: .5rem; }
    .reason-card p { font-size: .875rem; color: var(--muted); line-height: 1.65; }

    /* ── Conversation ── */
    .convo-box {
      background: var(--bg);
      padding: 2rem;
      border-radius: .5rem;
      border-left: 4px solid var(--accent);
      margin-bottom: 4rem;
    }
    .convo-box h3 { font-size: 1.25rem; font-family: 'DM Sans', sans-serif; font-weight: 700; margin-bottom: 1rem; }
    .convo-box img { border-radius: .5rem; margin-bottom: 1.5rem; }
    .convo-box .intro { font-size: .875rem; font-style: italic; color: var(--muted); margin-bottom: .75rem; }
    .convo-line { font-size: .875rem; line-height: 1.6; margin-bottom: .5rem; }
    .convo-outcome { font-size: .875rem; font-weight: 700; color: var(--accent); margin-top: .75rem; }

    /* ── Included / Not-Included ── */
    .incl-grid { display: grid; grid-template-columns: 1fr; gap: 2rem; margin-bottom: 4rem; }
    @media (min-width: 640px) { .incl-grid { grid-template-columns: 1fr 1fr; } }
    .incl-col h4 { font-family: 'DM Sans', sans-serif; font-size: 1rem; font-weight: 700; color: var(--ink); margin-bottom: 1rem; }
    .incl-list { list-style: none; display: flex; flex-direction: column; gap: .75rem; }
    .incl-list li { display: flex; align-items: flex-start; gap: .75rem; font-size: .875rem; color: var(--muted); line-height: 1.5; }
    .incl-list li svg { flex-shrink: 0; margin-top: .1rem; }

    /* ── Form ── */
    /* =========================
   FORM SECTION
========================= */

    .form-section {
      background: #f1eee8;
      border: 1px solid #ddd8d0;
      border-radius: 8px;
      padding: 48px 32px;
      box-shadow: 0 10px 30px rgba(0,0,0,.05);
      max-width: 680px;
      margin: 0 auto 4rem;
    }

    .form-icon {
      width: 56px;
      height: 56px;
      margin: 0 auto 20px;
      border-radius: 999px;
      background: rgba(200,75,17,.08);

      display: flex;
      align-items: center;
      justify-content: center;

      color: #c84b11;
    }

    .form-section h3 {
      text-align: center;
      font-size: 2rem;
      line-height: 1.2;
      margin-bottom: 12px;
      color: #1a1612;
      font-family: 'Playfair Display', serif;
    }

    .form-sub {
      text-align: center;
      color: #746f69;
      margin-bottom: 36px;
      font-size: .95rem;
    }

    .loan-form {
      display: flex;
      flex-direction: column;
      gap: 22px;
    }

    .form-group {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .form-group label,
    .form-contact-label {
      font-size: .95rem;
      font-weight: 700;
      color: #1a1612;
    }

    .form-group select,
    .form-group input {
      width: 100%;
      height: 62px;
      padding: 0 18px;
      border: 1px solid #d7d2ca;
      border-radius: 4px;
      background: #fff;
      font-size: 15px;
      color: #1a1612;
      font-family: 'DM Sans', sans-serif;

      transition:
              border-color .2s ease,
              box-shadow .2s ease;
    }

    .form-group input::placeholder {
      color: #a29d96;
    }

    .form-group select {
      appearance: none;
      -webkit-appearance: none;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='14' height='10' viewBox='0 0 14 10'%3E%3Cpath d='M2 2l5 5 5-5' stroke='%234a4540' stroke-width='1.8' fill='none' stroke-linecap='round'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: right 18px center;
      padding-right: 48px;
    }

    .form-group select:focus,
    .form-group input:focus {
      outline: none;
      border-color: #c84b11;
      box-shadow: 0 0 0 3px rgba(200,75,17,.12);
    }

    .form-contact-section {
      border-top: 1px solid #d7d2ca;
      padding-top: 28px;
      display: flex;
      flex-direction: column;
      gap: 16px;
    }

    .form-contact-section input{
      width: 100%;
      height: 62px;
      border: #a29d96 solid 1px;
      border-radius: 3px;
      padding-left: 20px;
    }

    .form-contact-section input::placeholder {
      color: #a29d96;
      padding-left: 20px;
    }

    .checkbox-row {
      display: flex;
      align-items: flex-start;
      gap: 10px;
      margin-top: 4px;
    }

    .checkbox-row input[type="checkbox"] {
      width: 16px;
      height: 16px;
      margin-top: 2px;
      accent-color: #0d1730;
    }

    .checkbox-row label {
      font-size: .95rem;
      color: #1a1612;
    }

    .checkbox-row a {
      color: #1a5c8a;
      text-decoration: none;
    }

    .checkbox-row a:hover {
      text-decoration: underline;
    }

    /* =========================
       BUTTON
    ========================= */

    .btn-submit {
      margin-top: 10px;
      border: none;
      background: #07122b;
      color: white;
      border-radius: 999px;
      min-height: 88px;
      cursor: pointer;

      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;

      transition:
              transform .2s ease,
              background .2s ease,
              box-shadow .2s ease;

      box-shadow:
              0 12px 24px rgba(7,18,43,.18);
    }

    .btn-submit:hover {
      background: #E23E3E;
      transform: translateY(-2px);
    }

    .btn-submit-main {
      display: flex;
      align-items: center;
      gap: 10px;

      font-size: 1.15rem;
      font-weight: 800;
      letter-spacing: .03em;
    }

    .btn-submit-sub {
      margin-top: 4px;
      font-size: .85rem;
      opacity: .75;
    }

    .form-legal {
      margin-top: 28px;

      text-align: center;

      font-size: .7rem;
      letter-spacing: .08em;
      color: #6f6a64;
      text-transform: uppercase;
    }

    /* =========================
       MOBILE
    ========================= */

    @media (max-width: 640px) {

      .form-section {
        padding: 36px 20px;
      }

      .form-section h3 {
        font-size: 1.65rem;
      }

      .form-group select,
      .form-group input {
        height: 58px;
      }

      .btn-submit {
        min-height: 82px;
      }

      .btn-submit-main {
        font-size: 1rem;
      }
    }
    .btn-submit {
      width: 100%;
      padding: 1.1rem 1rem;
      background: var(--primary);
      color: #fff;
      border: none;
      border-radius: 9999px;
      cursor: pointer;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: .2rem;
      font-family: 'DM Sans', sans-serif;
      transition: background .2s;
    }
    .btn-submit:hover { background: var(--accent); }
    .btn-submit-main { display: flex; align-items: center; gap: .5rem; font-weight: 700; font-size: 1.0625rem; text-transform: uppercase; letter-spacing: .05em; }
    .btn-submit-sub { font-size: .8125rem; opacity: .75; font-weight: 400; }
    .form-legal { margin-top: 1.5rem; font-size: .6875rem; color: var(--muted); text-transform: uppercase; letter-spacing: .06em; line-height: 1.7; }

    /* ── Checkbox ── */
    .checkbox-row { display: flex; align-items: flex-start; gap: .625rem; font-size: .9375rem; color: var(--ink); }
    .checkbox-row input[type=checkbox] { width: 16px; height: 16px; flex-shrink: 0; margin-top: .15rem; accent-color: var(--primary); cursor: pointer; }
    .checkbox-row a { color: var(--trust); text-decoration: none; }
    .checkbox-row a:hover { text-decoration: underline; }

    /* ── PS section ── */
    .ps-section { border-top: 1px solid var(--divider); padding-top: 4rem; display: flex; flex-direction: column; gap: 2rem; text-align: center; }
    .ps-section p { font-size: .875rem; color: var(--muted); font-style: italic; line-height: 1.7; }
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

<!-- Hero -->
<section class="hero">
  <div class="container">
    <div class="hero-badge">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
      One More Thing Before Your Installation Is Scheduled...
    </div>
    <h1>You Just Made The Smart Decision: Real Protection Against Theft</h1>
    <img src="https://billboardads.digitalcavemen.com/wp-content/uploads/2026/04/IMAGE-1-VARIANT-B-THE-ANGLE-SHIFT-1.png" alt="Smart Decision" />
    <p class="hero-desc">Your tracker installation is confirmed. Within days, you'll have 24/7 monitoring and one of South Africa's best recovery networks watching your vehicle. That's half the equation solved.</p>
    <p class="hero-note">But there's something we need to address while you're here—because timing matters.</p>
  </div>
</section>

<!-- Editorial -->
<section class="editorial">
  <div class="container">

    <h2>The Question 94% of Tracker Customers Don't Ask (Until It's Too Late)</h2>
    <div class="callout-dark">
      <p>"I'm now protecting my car from theft... but am I overpaying to insure it against theft?"</p>
    </div>

    <p class="lead">Here's why this question hits different right now: You just invested in a premium tracker because you understand your vehicle's risk profile. But here's what most drivers miss:</p>
    <p class="lead" style="margin-bottom:3rem;">Your insurance premium was calculated before you had a tracker. Before you had 24/7 monitoring. Before you had armed response integration. You're now a lower-risk customer than when you last renewed. Yet you're still paying the premium of someone without your level of protection.</p>

    <h2>The Math Your Insurer Hopes You Don't See</h2>
    <img src="https://billboardads.digitalcavemen.com/wp-content/uploads/2026/04/IMAGE-2-VARIANT-A-1.png" alt="Before and After Insurance Math" style="border-radius:.5rem;margin-bottom:2rem;" />
    <p class="lead">Let's be direct about what just changed:</p>

    <div class="ba-grid">
      <div class="ba-card before">
        <div class="ba-title">Before today:</div>
        <ul class="ba-list bad">
          <li>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#e05252" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
            <span>No tracker = higher theft risk = higher premium tier</span>
          </li>
          <li>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#e05252" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
            <span>Insurance companies price you as unprotected</span>
          </li>
          <li>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#e05252" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
            <span>You pay R1,200/month because that's the rate for your risk category</span>
          </li>
        </ul>
      </div>
      <div class="ba-card after">
        <div class="ba-title">Starting next week:</div>
        <ul class="ba-list good">
          <li>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#c84b11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            <span>Elite-5 tracker installed = 73% lower theft risk</span>
          </li>
          <li>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#c84b11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            <span>Armed response + SAPS integration = preferred customer</span>
          </li>
          <li>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#e07020" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
            <span><strong>Yet you're still paying R1,200/month</strong></span>
          </li>
        </ul>
      </div>
    </div>

    <div class="box-callout">
      <p><strong>Here's the uncomfortable truth:</strong></p>
      <p style="color:var(--muted);">Your insurer will eventually adjust your rate... at renewal. 11 months from now. Maybe. Meanwhile, other insurers who specialize in tracker-protected vehicles would quote you R750–R850/month starting next month for identical cover.</p>
      <p><strong>That's R4,200–R5,400 in savings you're leaving on the table while you wait for your current insurer to "maybe" adjust your rate.</strong></p>
    </div>

    <h2>Why This Moment Matters (And Why Waiting Costs You)</h2>
    <div class="timing-grid">
      <div class="timing-card neutral">
        <h4>If you don't address this right now:</h4>
        <p><strong>Month 1–11:</strong> You pay full premium despite being a tracker-protected customer</p>
        <p><strong>Month 12:</strong> Your renewal arrives with a "tracker discount" of 8–12%</p>
        <p class="highlight-red">Meanwhile: You've overpaid R4,000+ while insurers who price tracker customers correctly never got the chance to compete.</p>
      </div>
      <div class="timing-card positive">
        <h4>If you take 90 seconds right now:</h4>
        <p><strong>Today:</strong> Submit one form to the Reverse-Auction Match system</p>
        <p><strong>Within 24 hours:</strong> 12+ insurers compete to insure your newly tracker-protected vehicle</p>
        <p><strong>Next month:</strong> You're paying R750–R850/month (R350–R450/month saved)</p>
        <p class="highlight-accent">Next 12 months: You pocket R4,200–R5,400 that would've evaporated.</p>
      </div>
    </div>

    <h2>How Insurers Actually Price Tracker-Protected Vehicles</h2>
    <p class="lead">When you call your current insurer and say "I just installed a tracker, can you reduce my premium?" they'll offer you an 8–12% "tracker discount" applied at renewal.</p>
    <p class="lead">When insurers compete for your tracker-protected profile through the Reverse-Auction Match, they see an Elite-5 tracker + 24/7 monitoring + verified installation. They price you as Tier-1 risk. They quote aggressively because you're exactly the customer they want.</p>
    <p class="bold-note">Result: 28–38% lower premiums vs your current rate, not 8–12%. You just became a premium customer. You should be paying premium-customer rates.</p>

    <h2>The System You Already Trust, Now Working For Your Insurance</h2>
    <p class="lead" style="margin-bottom:2.5rem;">You just used The Provider Intelligence Engine™ to find your ideal tracker. Now use the Reverse-Auction Match to find your ideal insurance rate. Same philosophy. Different problem.</p>

    <div class="steps">
      <div class="step">
        <div class="step-label">Step 1</div>
        <p>Complete the form below (vehicle + current premium + tracker confirmation)</p>
      </div>
      <div class="step">
        <div class="step-label">Step 2</div>
        <p>12+ insurers receive your tracker-protected profile and compete</p>
      </div>
      <div class="step">
        <div class="step-label">Step 3</div>
        <p>Within 24 hours, you receive quotes reflecting your new risk tier</p>
      </div>
      <div class="step">
        <div class="step-label">Step 4</div>
        <p>You compare, choose the winner, and pocket R350–R450/month starting next billing cycle</p>
      </div>
    </div>

    <div class="stats-box">
      <h3>Why Tracker Customers Save 28–38% More</h3>
      <div class="stats-row">
        <div class="stats-item">
          <h4>Average South African driver:</h4>
          <p>• Saves R250–R400/month (18–24% reduction)<br/>• Reason: Competitive pressure forces better pricing</p>
        </div>
        <div class="stats-item">
          <h4>Tracker-protected driver:</h4>
          <p>• Saves R350–R650/month (28–38% reduction)<br/>• Reason: You're a verified low-risk customer + competitive pressure</p>
        </div>
      </div>
      <div class="stats-case">
        <img src="https://billboardads.digitalcavemen.com/wp-content/uploads/2026/04/IMAGE-3-VARIENT-A-2.png" alt="Case Study" />
        <p>"Johannesburg driver. 2021 Fortuner. Just installed Elite-5 tracker. Current insurer: R1,180/month. Best quote through Reverse-Auction Match: R798/month. Annual savings: R4,584."</p>
      </div>
    </div>

    <h2>The Three Reasons This Works Better Right Now</h2>
    <div class="reasons">
      <div class="reason-card">
        <h4>Reason 1: Immediate Savings Start Immediately</h4>
        <p>If you wait 8 months until renewal, you overpay R2,800–R3,600. If you switch now, you save R350–R450/month starting next billing cycle. Net benefit of acting now: R2,760 more in your pocket.</p>
      </div>
      <div class="reason-card">
        <h4>Reason 2: Insurers Price Confidence, Not History</h4>
        <p>Your current insurer sees a loyal customer and offers a standard discount. Competing insurers see a high-value customer with verified Elite-5 protection and price aggressively to win them.</p>
      </div>
      <div class="reason-card">
        <h4>Reason 3: You've Already Proven You Take Action</h4>
        <p>You didn't delay the tracker decision. Momentum matters. The best financial decisions happen when you're already in motion, not when you're stuck in analysis paralysis.</p>
      </div>
    </div>

    <div class="convo-box">
      <h3>Your Current Insurer Won't Tell You This</h3>
      <img src="https://billboardads.digitalcavemen.com/wp-content/uploads/2026/04/IMAGE-4-VARIENT-C-1.png" alt="Future Path" />
      <p class="intro">Here's a conversation that happens every single week:</p>
      <p class="convo-line"><strong>Customer:</strong> "Why is my premium still so high? I thought the tracker would lower it?"</p>
      <p class="convo-line"><strong>Tracker Company:</strong> "Your tracker is working perfectly. The issue isn't protection—it's pricing. Have you shopped your insurance since installing the tracker?"</p>
      <p class="convo-line"><strong>Customer:</strong> "No, I figured my insurer would adjust it automatically."</p>
      <p class="convo-line"><strong>Tracker Company:</strong> "They won't. Not proactively. You need to force competition."</p>
      <p class="convo-outcome">Two weeks later, same customer: "I'm now saving R420/month. Why didn't I do this sooner?"</p>
    </div>

    <h2>What's Included (And What You're NOT Signing Up For)</h2>
    <div class="incl-grid">
      <div class="incl-col">
        <h4>What happens:</h4>
        <ul class="incl-list">
          <li>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#c84b11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            Profile goes to 12+ competing insurers
          </li>
          <li>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#c84b11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            WhatsApp quotes reflecting your new risk tier
          </li>
          <li>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#c84b11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            Zero obligation to switch
          </li>
          <li>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#c84b11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            Completely free &amp; POPIA-compliant
          </li>
        </ul>
      </div>
      <div class="incl-col">
        <h4>What you're NOT getting:</h4>
        <ul class="incl-list">
          <li>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#e05252" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
            Spam calls from brokers
          </li>
          <li>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#e05252" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
            Pressure tactics or "limited-time offers"
          </li>
          <li>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#e05252" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
            Hidden fees or commission-inflated quotes
          </li>
        </ul>
      </div>
    </div>

    <!-- FORM SECTION -->
    <div class="form-section" id="insurance-form" style="background: #F8FAFC">

      <div class="form-icon">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
             stroke="currentColor" stroke-width="2"
             stroke-linecap="round" stroke-linejoin="round">
          <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
        </svg>
      </div>

      <h3>Get Quotes From the Elite 5 Now</h3>

      <p class="form-sub">
        60-second form • 3–5 elite providers • Real protection
      </p>

      <form
              action="{{ route('tracker.submit') }}"
              method="POST"
              class="loan-form"
      >
        @csrf

        <input type="hidden" name="form_source" value="car_track_landing">

        <!-- QUESTION 1 -->
        <div class="form-group">
          <label>1. What do you drive?</label>

          <select name="vehicle_type" required>
            <option value="">Select vehicle type...</option>
            <option value="sedan">Sedan</option>
            <option value="suv">SUV or 4×4</option>
            <option value="bakkie">Bakkie</option>
            <option value="hatchback">Hatchback</option>
            <option value="other">Other</option>
          </select>
        </div>

        <!-- QUESTION 2 -->
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

        <!-- QUESTION 3 -->
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

        <!-- CONTACT -->
        <div class="form-contact-section">

          <p class="form-contact-label">
            Where should we send your quotes?
          </p>

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
        </div>

        <!-- TERMS -->
        <div class="checkbox-row">
          <input type="checkbox" id="terms" required name="acceptterms">

          <label for="tracker-terms" class="text-sm font-medium text-gray-900 font-body">
            I agree to the <a href="{{ route('terms') }}" class="text-blue-600 hover:underline">terms and conditions</a>
          </label>
        </div>

        <!-- BUTTON -->
        <button type="submit" class="btn-submit">

      <span class="btn-submit-main">
        GET MY QUOTES NOW

        <svg width="18" height="18" viewBox="0 0 24 24"
             fill="none" stroke="currentColor"
             stroke-width="2" stroke-linecap="round"
             stroke-linejoin="round">

          <line x1="5" y1="12" x2="19" y2="12"/>
          <polyline points="12 5 19 12 12 19"/>
        </svg>
      </span>

          <span class="btn-submit-sub">
        From The Elite 5 Providers
      </span>

        </button>
          <p>
              <i>I do not need any protection</i>, <a href="{{ route('car-insurance-thank-you') }}">Im done</a>
          </p>
      </form>

      <p class="form-legal">
        SEARCH A DEAL • POPIA-COMPLIANT • BUILT IN SOUTH AFRICA
      </p>

    </div>

    <!-- PS -->
    <div class="ps-section">
      <p><strong>P.S. The Tracker Is Handling Theft. But Who's Handling The Overpayment?</strong> You just invested in Elite-5 protection against vehicle theft. That's handled. But theft protection and financial efficiency are two different problems. Take 90 seconds to solve the second.</p>
      <p><strong>P.P.S. Your Tracker Provider Would Tell You The Same Thing:</strong> When they install your tracker next week, ask them: "Do most customers shop their insurance after installing this?" They'll say: "The smart ones do. Immediately."</p>
      <p><strong>P.P.P.S. This Window Closes Faster Than You Think:</strong> Right now, you're a freshly tracker-protected customer. Insurers see that as: "Motivated buyer. High-intent. Price aggressively." Six months from now? You're just another renewal.</p>
    </div>

  </div>
</section>

<script>
  function handleSubmit(e) {
    e.preventDefault();
    alert("Thank you! Your profile has been submitted to our insurance network.");
  }
</script>
</body>
</html>
