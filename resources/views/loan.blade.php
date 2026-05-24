<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Personal Loans – South Africa's Independent Loan Comparison Service</title>
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
      --caution: #c84b11;
      --divider: #ddd8d0;
      --border: #ccc7bf;
      --muted: #7a756e;
      --faint: #8a857e;
      --trust: #1a5c8a;
      --primary: #1a1612;
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

    /* Layout */
    .container-sm { max-width: 768px; margin: 0 auto; padding: 0 1.5rem; }
    .container-md { max-width: 896px; margin: 0 auto; padding: 0 1.5rem; }

    /* Hero */
    .hero { padding: 4rem 0; text-align: center; }
    .hero-eyebrow {
      color: var(--accent);
      text-transform: uppercase;
      letter-spacing: .12em;
      font-size: .8125rem;
      font-weight: 700;
      margin-bottom: .75rem;
    }
    .hero h1 {
      font-size: clamp(2rem, 5vw, 3.5rem);
      line-height: 1.1;
      letter-spacing: -.02em;
      margin-bottom: 2rem;
    }
    .hero h1 span { color: var(--accent); }
    .hero-img { margin: 0 auto 2rem; max-width: 672px; }
    .hero-desc {
      font-size: clamp(1.0625rem, 2vw, 1.25rem);
      line-height: 1.65;
      max-width: 640px;
      margin: 0 auto 2.5rem;
      color: var(--ink);
    }
    .trust-badges {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 1.5rem;
      margin-bottom: 3rem;
    }
    .badge {
      display: flex;
      align-items: center;
      gap: .5rem;
      color: var(--ink-soft);
      font-size: .9375rem;
      font-weight: 500;
    }
    .badge svg { color: var(--success); flex-shrink: 0; }
    .btn-primary {
      display: inline-block;
      background: var(--accent);
      color: #fff;
      font-weight: 700;
      font-size: clamp(1rem, 2.5vw, 1.125rem);
      padding: 1rem 2.5rem;
      border-radius: .5rem;
      border: none;
      cursor: pointer;
      transition: background .2s;
      text-decoration: none;
      font-family: 'DM Sans', sans-serif;
    }
    .btn-primary:hover { background: var(--accent-dark); }

    /* Editorial */
    .editorial { padding: 3rem 0 4rem; }
    .editorial h2 {
      font-size: clamp(1.75rem, 4vw, 2.5rem);
      line-height: 1.15;
      letter-spacing: -.02em;
      margin-bottom: 1.5rem;
    }
    .lead {
      font-size: clamp(1.0625rem, 2vw, 1.25rem);
      line-height: 1.65;
      margin-bottom: 1.5rem;
    }
    .pain-list { list-style: none; display: flex; flex-direction: column; gap: 1rem; margin-bottom: 4rem; }
    .pain-item {
      display: flex;
      gap: 1rem;
      padding: 1.5rem;
      background: var(--surface);
    }
    .pain-item svg { flex-shrink: 0; margin-top: .2rem; color: var(--caution); }
    .pain-item h4 { font-family: 'DM Sans', sans-serif; font-size: clamp(1rem, 2vw, 1.125rem); font-weight: 700; margin-bottom: .25rem; }
    .pain-item p { font-size: clamp(1rem, 2vw, 1.125rem); line-height: 1.6; }

    .pullquote {
      border-left: 4px solid var(--accent);
      padding: .5rem 0 .5rem 1.5rem;
      margin-bottom: 4rem;
    }
    .pullquote p {
      font-size: clamp(1.25rem, 3vw, 1.5rem);
      font-style: italic;
      line-height: 1.55;
    }

    hr.divider { border: none; border-top: 1px solid var(--divider); margin: 3rem 0; }

    /* Steps */
    .steps { position: relative; display: flex; flex-direction: column; gap: 2.5rem; margin-bottom: 4rem; }
    .steps::before {
      content: '';
      position: absolute;
      left: 1rem;
      top: 1rem;
      bottom: 1rem;
      width: 1px;
      background: var(--divider);
    }
    @media (min-width: 640px) { .steps::before { left: 1.5rem; } }
    .step { display: flex; gap: 1.5rem; position: relative; z-index: 1; }
    .step-num {
      width: 2rem;
      height: 2rem;
      background: var(--accent);
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      font-weight: 700;
      font-size: 1rem;
      flex-shrink: 0;
    }
    @media (min-width: 640px) {
      .step-num { width: 3rem; height: 3rem; font-size: 1.25rem; }
    }
    .step-body { padding-top: .15rem; }
    @media (min-width: 640px) { .step-body { padding-top: .5rem; } }
    .step-body h4 { font-family: 'DM Sans', sans-serif; font-size: clamp(1.2rem, 3vw, 1.5rem); font-weight: 700; margin-bottom: .5rem; }
    .step-body p { font-size: clamp(1rem, 2vw, 1.125rem); line-height: 1.6; }

    /* Benefits */
    .benefits-list { list-style: none; display: flex; flex-direction: column; gap: 1rem; margin-bottom: 4rem; }
    .benefit { display: flex; gap: 1rem; }
    .benefit svg { flex-shrink: 0; margin-top: .2rem; color: var(--success); }
    .benefit p { font-size: clamp(1rem, 2vw, 1.125rem); line-height: 1.6; }

    /* Comparison Table */
    .comparison-section { max-width: 1024px; margin: 0 auto 4rem; padding: 0 1.5rem; }
    .comparison-section h2 { text-align: center; font-size: clamp(1.75rem, 4vw, 2.5rem); margin-bottom: 2rem; }
    .compare-table { width: 100%; border-collapse: collapse; display: none; }
    @media (min-width: 768px) { .compare-table { display: table; } }
    .compare-table thead tr { background: var(--ink); color: #fff; }
    .compare-table th { padding: 1rem 1.5rem; text-align: left; font-size: .875rem; text-transform: uppercase; font-weight: 700; font-family: 'DM Sans', sans-serif; }
    .compare-table th:last-child { background: var(--ink-soft); }
    .compare-table td { padding: 1rem 1.5rem; font-size: clamp(1rem, 2vw, 1.125rem); border-bottom: 1px solid var(--divider); font-family: 'DM Sans', sans-serif; }
    .compare-table tr:nth-child(even) td { background: var(--surface); }
    .compare-table td:first-child { font-weight: 700; border-right: 1px solid var(--divider); width: 33%; }
    .compare-table td:last-child { font-weight: 700; border-left: 1px solid var(--divider); background: var(--surface); }
    .compare-table .old-cell { display: flex; align-items: center; gap: .5rem; color: var(--ink-soft); }
    .compare-table .new-cell { display: flex; align-items: center; gap: .5rem; }
    .compare-cards { display: flex; flex-direction: column; gap: 1rem; }
    @media (min-width: 768px) { .compare-cards { display: none; } }
    .compare-card { background: var(--surface); padding: 1.5rem; border: 1px solid var(--divider); }
    .compare-card h4 { font-family: 'DM Sans', sans-serif; font-weight: 700; font-size: 1rem; text-transform: uppercase; margin-bottom: 1rem; }
    .compare-row { display: flex; flex-direction: column; gap: .75rem; }
    .compare-old, .compare-new { display: flex; gap: .5rem; font-size: .9375rem; }
    .compare-old { color: var(--ink-soft); }
    .compare-old svg { color: var(--caution); flex-shrink: 0; margin-top: .15rem; }
    .compare-new { font-weight: 700; }
    .compare-new svg { color: var(--success); flex-shrink: 0; margin-top: .15rem; }
    .compare-label { font-size: .8125rem; font-weight: 700; text-transform: uppercase; display: block; margin-bottom: .2rem; }
    .compare-old .compare-label { color: var(--ink-soft); }
    .compare-new .compare-label { color: var(--ink-soft); font-weight: 700; }

    /* FAQ */
    .faq { margin-bottom: 4rem; border-top: 1px solid var(--divider); }
    .faq-item { padding: 2rem 0; border-bottom: 1px solid var(--divider); }
    .faq-q { font-size: clamp(1.125rem, 2.5vw, 1.375rem); font-style: italic; font-weight: 500; margin-bottom: 1rem; }
    .faq-a { font-size: clamp(1rem, 2vw, 1.125rem); line-height: 1.65; }

    /* Form */
    .form-section { text-align: center; margin-bottom: 4rem; }
    .form-section h3 { font-size: clamp(1.75rem, 4vw, 2.5rem); margin-bottom: 1rem; }
    .form-section .lead { margin-bottom: 2rem; }
    .loan-form { max-width: 28rem; margin: 0 auto; text-align: left; display: flex; flex-direction: column; gap: 1.5rem; }
    .form-group { display: flex; flex-direction: column; gap: .5rem; }
    .form-group label { font-size: .875rem; font-weight: 700; color: var(--primary); }
    .form-group select,
    .form-group input {
      width: 100%;
      padding: 1rem;
      border: 1px solid var(--border);
      border-radius: 3px;
      font-family: 'DM Sans', sans-serif;
      font-size: .875rem;
      background: #fff;
      color: var(--ink);
      transition: border-color .2s;
      -webkit-appearance: none;
      appearance: none;
    }
    .form-group select { background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%234a4540' stroke-width='1.5' fill='none' stroke-linecap='round'/%3E%3C/svg%3E"); background-repeat: no-repeat; background-position: right 1rem center; padding-right: 2.5rem; }
    .form-group select:focus,
    .form-group input:focus { outline: none; border-color: var(--accent); }
    .form-note { margin-top: 1rem; color: var(--muted); font-size: .875rem; text-align: center; }

    /* Range slider */
    .range-label { font-size: .9375rem; font-weight: 600; color: var(--ink); margin-bottom: .75rem; }
    .loan-amount-display { color: var(--accent); font-size: 1.125rem; font-weight: 700; margin-top: .5rem; }
    input[type=range] {
      -webkit-appearance: none;
      appearance: none;
      width: 100%;
      height: 6px;
      border-radius: 3px;
      outline: none;
      cursor: pointer;
    }
    input[type=range]::-webkit-slider-thumb {
      -webkit-appearance: none;
      width: 22px;
      height: 22px;
      border-radius: 50%;
      background: #e8a020;
      cursor: pointer;
      border: 2px solid #fff;
      box-shadow: 0 1px 4px rgba(0,0,0,.25);
    }
    input[type=range]::-moz-range-thumb {
      width: 22px;
      height: 22px;
      border-radius: 50%;
      background: #e8a020;
      cursor: pointer;
      border: 2px solid #fff;
    }

    /* Checkbox */
    .checkbox-row { display: flex; align-items: flex-start; gap: .625rem; font-size: .9375rem; color: var(--ink); }
    .checkbox-row input[type=checkbox] {
      width: 16px;
      height: 16px;
      flex-shrink: 0;
      margin-top: .15rem;
      accent-color: var(--primary);
      cursor: pointer;
    }
    .checkbox-row a { color: var(--trust); text-decoration: none; }
    .checkbox-row a:hover { text-decoration: underline; }

    /* Submit button */
    .btn-submit {
      width: 100%;
      padding: 1.1rem 1rem;
      background: var(--primary);
      color: #fff;
      border: none;
      border-radius: 9999px;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: .5rem;
      font-family: 'DM Sans', sans-serif;
      font-weight: 700;
      font-size: 1.0625rem;
      letter-spacing: .02em;
      transition: background .2s;
    }
    .btn-submit:hover { background: #2a3040; }

    /* Disclosure */
    .disclosure {
      background: var(--surface);
      padding: 2rem;
      color: var(--faint);
      font-size: clamp(.8125rem, 1.5vw, .875rem);
      line-height: 1.7;
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }
    .disclosure-heading { font-weight: 700; color: var(--ink-soft); font-size: clamp(1rem, 2vw, 1.125rem); margin-bottom: .5rem; }
    .disclosure .trust-label { color: var(--trust); font-weight: 700; }

    /* Icon SVGs */
    .icon { display: inline-block; vertical-align: middle; }
  </style>
</head>
<body>

<!-- Hero -->
<section class="hero">
  <div class="container-sm">
    <p class="hero-eyebrow">South Africa's Independent Loan Comparison Service</p>
    <h1>Stop Wasting Time. Find the Right <span>Personal Loan in Minutes.</span></h1>
    <div class="hero-img">
      <img src="https://billboardads.digitalcavemen.com/wp-content/uploads/2026/04/IMAGE-1-Variation-A.png" alt="Personal Loans Hero" />
    </div>
    <p class="hero-desc">Connect with multiple registered lenders through one simple application. Compare real offers and choose what works for your situation.</p>
    <div class="trust-badges">
        <span class="badge">
          <svg class="icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          15+ Registered Lenders
        </span>
      <span class="badge">
          <svg class="icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          24/7 Application Processing
        </span>
      <span class="badge">
          <svg class="icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
          100% Free to Use
        </span>
    </div>
    <button class="btn-primary" onclick="document.getElementById('loan-quotes-form').scrollIntoView({behavior:'smooth'})">
      Compare My Loan Options →
    </button>
  </div>
</section>

<!-- Editorial Content -->
<section class="editorial">
  <div class="container-sm">

    <h2>You shouldn't have to visit 10 banks to find one loan</h2>
    <p class="lead">Applying for personal loans the old way wastes your time and hurts your credit score with multiple applications.</p>

    <img src="https://billboardads.digitalcavemen.com/wp-content/uploads/2026/04/IMAGE-2-Variation-B.png" alt="Problems with the old way" style="margin-bottom:2.5rem;" />

    <ul class="pain-list">
      <li class="pain-item">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
        <div><h4>Hours Wasted Visiting Branches</h4><p>Taking time off work to stand in queues at multiple banks only to hear 'we'll get back to you' is exhausting and often leads nowhere.</p></div>
      </li>
      <li class="pain-item">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
        <div><h4>Multiple Credit Checks Hurt Your Score</h4><p>Every loan application creates a credit enquiry on your record. Too many enquiries make you look desperate and can lower your approval chances.</p></div>
      </li>
      <li class="pain-item">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
        <div><h4>Endless Rejections Without Explanation</h4><p>Most banks reject applications without telling you why. You're left guessing what went wrong and where to try next.</p></div>
      </li>
      <li class="pain-item">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
        <div><h4>Confusing Terms and Hidden Fees</h4><p>Interest rates, initiation fees, service charges, credit life insurance—every lender structures things differently, making fair comparison nearly impossible.</p></div>
      </li>
      <li class="pain-item">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
        <div><h4>Pushy Sales Calls You Never Asked For</h4><p>Give your number to one loan site and suddenly you're bombarded with calls from brokers who just want their commission.</p></div>
      </li>
      <li class="pain-item">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
        <div><h4>Time Is Running Out</h4><p>When you need funds for an emergency, to consolidate debt, or cover essential expenses, you can't afford to wait weeks for approval.</p></div>
      </li>
    </ul>

    <div class="pullquote">
      <p>"You know you need a personal loan. The question isn't whether to borrow, it's where to get the best deal without wasting days of your life."</p>
    </div>

    <hr class="divider" />

    <h2>How our platform works</h2>
    <p class="lead" style="margin-bottom:2.5rem;">We connect you with multiple registered lenders through one simple process.</p>

    <div class="steps">
      <div class="step">
        <div class="step-num">1</div>
        <div class="step-body">
          <h4>Complete one application</h4>
          <p>Fill in your details once. Tell us what you need and provide basic information about your income and expenses.</p>
        </div>
      </div>
      <div class="step">
        <div class="step-num">2</div>
        <div class="step-body">
          <h4>We share with lenders</h4>
          <p>Your application goes to our network of registered banks, neobanks, and licensed credit providers who compete for your business.</p>
        </div>
      </div>
      <div class="step">
        <div class="step-num">3</div>
        <div class="step-body">
          <h4>Receive multiple offers</h4>
          <p>Get contacted by lenders who are willing to work with your situation. Each will present their terms—interest rate, fees, and repayment schedule.</p>
        </div>
      </div>
      <div class="step">
        <div class="step-num">4</div>
        <div class="step-body">
          <h4>You choose what works</h4>
          <p>Compare the offers you receive and select the one that fits your budget. No pressure. No obligation. Your decision entirely.</p>
        </div>
      </div>
    </div>

    <img src="https://billboardads.digitalcavemen.com/wp-content/uploads/2026/04/IMAGE-3-Varient-A.png" alt="Four Step Process" style="margin-bottom:4rem;" />

    <hr class="divider" />

    <h2>Why thousands choose our platform</h2>
    <p class="lead" style="margin-bottom:2rem;">We make the loan comparison process transparent and efficient.</p>

    <ul class="benefits-list">
      <li class="benefit">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        <p><strong>Save Time and Effort</strong> — One application instead of filling out forms at 5-10 different banks. Submit once and let lenders come to you.</p>
      </li>
      <li class="benefit">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        <p><strong>Protect Your Credit Score</strong> — Our application process minimizes hard credit checks. Lenders can assess your basic profile before running formal credit bureau checks.</p>
      </li>
      <li class="benefit">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        <p><strong>Access More Options</strong> — Connect with major banks like Capitec, FNB, and Standard Bank, plus neobanks and digital lenders you might not know about.</p>
      </li>
      <li class="benefit">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        <p><strong>Transparent Comparisons</strong> — When you receive offers, you'll see the interest rate, fees, and total cost of credit for each, making comparison straightforward.</p>
      </li>
      <li class="benefit">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        <p><strong>No Hidden Obligations</strong> — We don't force you to accept any offer. If nothing works for you, walk away. No strings attached.</p>
      </li>
      <li class="benefit">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        <p><strong>Completely Free Service</strong> — You never pay us. Lenders compensate us for connecting them with potential borrowers, which means our service costs you nothing.</p>
      </li>
      <li class="benefit">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        <p><strong>NCR-Registered Lenders Only</strong> — All lenders in our network are registered with the National Credit Regulator and comply with the National Credit Act.</p>
      </li>
      <li class="benefit">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        <p><strong>Fast Processing</strong> — Applications are processed 24/7. Many lenders can give preliminary feedback within hours, not days.</p>
      </li>
    </ul>

  </div><!-- /container-sm -->

  <!-- Comparison Table – wider container -->
  <div class="comparison-section">
    <h2>Traditional Applications vs. Our Platform</h2>

    <!-- Desktop table -->
    <table class="compare-table">
      <thead>
      <tr>
        <th>Feature</th>
        <th>Traditional Way</th>
        <th>Our Platform</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>Number of Applications</td>
        <td><span class="old-cell"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg> 5-10 separate applications</span></td>
        <td><span class="new-cell"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> Just 1 application</span></td>
      </tr>
      <tr>
        <td>Time to Apply Everywhere</td>
        <td><span class="old-cell"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg> Days of visiting branches</span></td>
        <td><span class="new-cell"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> Minutes to complete</span></td>
      </tr>
      <tr>
        <td>Credit Score Impact</td>
        <td><span class="old-cell"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg> Multiple hard credit checks</span></td>
        <td><span class="new-cell"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> Minimized credit checks</span></td>
      </tr>
      <tr>
        <td>Access to Lenders</td>
        <td><span class="old-cell"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg> Limited to banks you know</span></td>
        <td><span class="new-cell"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> Full network access</span></td>
      </tr>
      <tr>
        <td>Easy Comparison</td>
        <td><span class="old-cell"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg> Difficult to compare offers</span></td>
        <td><span class="new-cell"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> Side-by-side comparison</span></td>
      </tr>
      </tbody>
    </table>

    <!-- Mobile cards -->
    <div class="compare-cards">
      <div class="compare-card">
        <h4>Number of Applications</h4>
        <div class="compare-row">
          <div class="compare-old"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg><div><span class="compare-label">Traditional</span>5-10 separate applications</div></div>
          <div class="compare-new"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg><div><span class="compare-label">Our Platform</span>Just 1 application</div></div>
        </div>
      </div>
      <div class="compare-card">
        <h4>Time to Apply Everywhere</h4>
        <div class="compare-row">
          <div class="compare-old"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg><div><span class="compare-label">Traditional</span>Days of visiting branches</div></div>
          <div class="compare-new"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg><div><span class="compare-label">Our Platform</span>Minutes to complete</div></div>
        </div>
      </div>
      <div class="compare-card">
        <h4>Credit Score Impact</h4>
        <div class="compare-row">
          <div class="compare-old"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg><div><span class="compare-label">Traditional</span>Multiple hard credit checks</div></div>
          <div class="compare-new"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg><div><span class="compare-label">Our Platform</span>Minimized credit checks</div></div>
        </div>
      </div>
      <div class="compare-card">
        <h4>Access to Lenders</h4>
        <div class="compare-row">
          <div class="compare-old"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg><div><span class="compare-label">Traditional</span>Limited to banks you know</div></div>
          <div class="compare-new"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg><div><span class="compare-label">Our Platform</span>Full network access</div></div>
        </div>
      </div>
      <div class="compare-card">
        <h4>Easy Comparison</h4>
        <div class="compare-row">
          <div class="compare-old"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg><div><span class="compare-label">Traditional</span>Difficult to compare offers</div></div>
          <div class="compare-new"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg><div><span class="compare-label">Our Platform</span>Side-by-side comparison</div></div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-sm">
    <img src="https://billboardads.digitalcavemen.com/wp-content/uploads/2026/04/IMAGE-4-Varient-A.png" alt="NCR Legitimacy" style="margin-bottom:4rem;" />

    <hr class="divider" />

    <h2>Questions worth asking</h2>
    <div class="faq">
      <div class="faq-item">
        <p class="faq-q">"Are you a lender?"</p>
        <p class="faq-a">No. We are not a registered financial services provider and we do not issue loans. We are a comparison platform that connects you with multiple registered lenders in South Africa. Lenders make all credit decisions independently.</p>
      </div>
      <div class="faq-item">
        <p class="faq-q">"How do you make money if the service is free?"</p>
        <p class="faq-a">We receive a referral fee from lenders when we connect them with potential borrowers. This commission is paid by the lender, not by you. It doesn't affect the interest rate or terms you receive.</p>
      </div>
      <div class="faq-item">
        <p class="faq-q">"Will applying hurt my credit score?"</p>
        <p class="faq-a">Submitting your details on our platform generates a soft enquiry or no enquiry initially. If a lender wants to make you an offer, they will request permission to run a full credit check. You control when that happens.</p>
      </div>
      <div class="faq-item">
        <p class="faq-q">"What if I have bad credit or am blacklisted?"</p>
        <p class="faq-a">Our network includes lenders who work with different credit profiles. While we can't guarantee approval, some lenders specialize in near-prime and subprime lending. Being truthful in your application helps match you with appropriate lenders.</p>
      </div>
      <div class="faq-item">
        <p class="faq-q">"Do I have to accept an offer?"</p>
        <p class="faq-a">Absolutely not. You are under no obligation to accept any loan offer. Review all the terms, compare offers, and only proceed if something genuinely works for your situation.</p>
      </div>
    </div>

    <!-- Form -->
    <div id="loan-quotes-form" class="form-section">
      <h3>Ready to Compare Your Loan Options?</h3>
      <p class="lead">One application. Multiple lenders. You decide what works.</p>
      <form class="loan-form" action="{{ route('loan.submit') }}" method="post" onsubmit="handleSubmit(event)">
        @csrf
        <input type="hidden" name="form_source" value="personal_loans_landing" />

        <div class="form-group">
          <input type="text" placeholder="First Name" required name="firstname"/>
        </div>
        <div class="form-group">
          <input type="text" placeholder="Last Name" required name="lastname"/>
        </div>
        <div class="form-group">
          <input type="email" placeholder="Email Address" required name="email"/>
        </div>
        <div class="form-group">
          <input type="tel" placeholder="Phone Number" required name="phone1"/>
        </div>
        <div class="form-group">
          <input type="text" placeholder="13 Digit ID Number *" maxlength="13" required name="idnumber"/>
        </div>

        <div class="form-group">
          <select name="title">
            <option value="">Title</option>
            <option value="mr">Mr</option>
            <option value="mrs">Mrs</option>
            <option value="ms">Ms</option>
            <option value="dr">Dr</option>
            <option value="prof">Prof</option>
          </select>
        </div>

        <div class="form-group">
          <select required name="underdebtreview"
          >
            <option value="">Are you currently under Debt Review?</option>
            <option value="no">No</option>
            <option value="yes">Yes</option>
          </select>
        </div>

        <div class="form-group">
          <p class="range-label">How much would you like to loan?</p>
          <input type="range" id="loanSlider" min="1000" max="9000" name="loanamount" step="500" value="1000" oninput="updateLoanAmount(this.value)" />
          <p class="loan-amount-display" id="loanAmountDisplay">R 1 000</p>
        </div>

        <div class="checkbox-row">
          <input type="checkbox" id="terms" required name="acceptterms"/>
          <label for="terms">I agree to the <a href="#">terms and conditions</a></label>
        </div>

        <button type="submit" class="btn-submit">
          Start Your Application Now
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </button>


        {{-- Hidden tracking fields — mirrors loans.blade.php --}}
        <input type="hidden" name="optinurl"  value="https://searchadeal.online/" />
        <input type="hidden" name="optindate" value="{{ date('d/m/y H:i:s') }}" />
      </form>
      <p class="form-note">No sign-up · No credit card · No obligation · Under 2 minutes</p>
    </div>

    <!-- Disclosure -->
    <div class="disclosure">
      <p class="disclosure-heading">Important Disclosure</p>
      <p>We are not a registered financial services provider and do not issue personal loans. We operate as an affiliate platform that connects consumers with registered lenders and credit providers in South Africa. All lenders in our network are independently registered with the <span class="trust-label">NCR</span> and comply with the National Credit Act.</p>
      <p>When you submit an application through our platform, we share your information with multiple lenders in our network. These lenders will independently assess your application according to their own credit criteria. We receive a referral fee from lenders when they successfully originate a loan through our platform. This commission does not affect the interest rate, fees, or terms you receive.</p>
      <p>Submitting an application does not guarantee loan approval. Each lender makes independent credit decisions based on their own assessment of your creditworthiness, income, expenses, and compliance with the National Credit Act's affordability requirements.</p>
      <p>You are under no obligation to accept any loan offer. You have the right to compare offers and choose what works best for your situation. All lenders must provide you with a pre-agreement statement and quotation showing the total cost of credit, interest rate, fees, and repayment terms before you sign any agreement.</p>
      <p>We handle your personal information in accordance with <span class="trust-label">POPIA</span>. Your information is only shared with lenders in our network for the purpose of assessing your loan application.</p>
    </div>

  </div>
</section>

<script>
  function handleSubmit(e) {
    e.preventDefault();
    alert("Thank you! Your application has been submitted to our lending network.");
  }
  function updateLoanAmount(val) {
    const num = parseInt(val);
    document.getElementById('loanAmountDisplay').textContent = 'R ' + num.toLocaleString('en-ZA');
    updateSliderTrack(document.getElementById('loanSlider'));
  }
  function updateSliderTrack(slider) {
    const min = parseFloat(slider.min) || 0;
    const max = parseFloat(slider.max) || 100;
    const val = parseFloat(slider.value);
    const pct = ((val - min) / (max - min)) * 100;
    slider.style.background = 'linear-gradient(to right, #e8a020 0%, #e8a020 ' + pct + '%, #ddd8d0 ' + pct + '%, #ddd8d0 100%)';
  }
  window.addEventListener('DOMContentLoaded', function() {
    var slider = document.getElementById('loanSlider');
    if (slider) updateSliderTrack(slider);
  });
</script>
</body>
</html>
