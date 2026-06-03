<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Car Tracker – Thank You</title>
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
            --green: #0a5f3a;
            --green-light: #E4F4EC;
            --whatsapp: #25D366;
            --whatsapp-dark: #075E54;
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

        /* ── Header Section ── */
        .header-section { padding: 3rem 0 2rem; text-align: center; }
        .header-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 48px;
            height: 48px;
            background: var(--trust);
            border-radius: 50%;
            margin-bottom: 1rem;
        }
        .header-icon svg { color: #fff; }
        .header-section h1 {
            font-size: clamp(2rem, 5vw, 3rem);
            line-height: 1.1;
            letter-spacing: -.02em;
            margin-bottom: .75rem;
            font-family: 'DM Sans', sans-serif;
            font-weight: 700;
        }
        .header-section h2 {
            font-size: clamp(1.25rem, 3vw, 1.75rem);
            line-height: 1.2;
            margin-bottom: 1rem;
            font-family: 'DM Sans', sans-serif;
            font-weight: 700;
        }
        .header-section p {
            font-size: clamp(1rem, 2vw, 1.125rem);
            line-height: 1.65;
            color: var(--ink-soft);
            max-width: 640px;
            margin: 0 auto;
        }

        /* ── What Happens Next ── */
        .next-section {
            background: var(--surface);
            padding: 2rem;
            border-radius: .5rem;
            border: 1px solid var(--divider);
            margin-bottom: 3rem;
        }
        .section-label {
            color: var(--green);
            text-transform: uppercase;
            font-size: .8125rem;
            font-weight: 700;
            letter-spacing: .08em;
            margin-bottom: 1.5rem;
        }
        .next-section > p {
            font-size: clamp(1rem, 2vw, 1.125rem);
            font-weight: 500;
            margin-bottom: 1.5rem;
        }
        .step-row {
            display: flex;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }
        .step-row:last-child { margin-bottom: 0; }
        .step-num {
            flex-shrink: 0;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: rgba(10,95,58,.1);
            color: var(--green);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: .875rem;
        }
        .step-row p {
            font-size: .9375rem;
            line-height: 1.6;
            color: var(--ink-soft);
        }
        .step-row p strong { color: var(--ink); }

        /* ── Alert Box (Before You Close) ── */
        .alert-box {
            background: rgba(200,75,17,.06);
            border-left: 4px solid var(--accent);
            padding: 2rem;
            border-radius: 0 .5rem .5rem 0;
            margin-bottom: 2rem;
        }
        .alert-box .section-label { color: var(--accent); margin-bottom: .75rem; }
        .alert-box h2 {
            font-size: clamp(1.5rem, 4vw, 1.625rem);
            line-height: 1.2;
            margin-bottom: 1rem;
            font-family: 'DM Sans', sans-serif;
            font-weight: 700;
        }
        .alert-box p {
            font-size: clamp(1rem, 2vw, 1.125rem);
            line-height: 1.65;
            color: var(--ink-soft);
            margin-bottom: 1rem;
        }
        .alert-box p:last-child { margin-bottom: 0; }
        .alert-box p strong { color: var(--ink); }

        /* ── Stats Grid ── */
        .stats-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }
        @media (min-width: 640px) { .stats-grid { grid-template-columns: 1fr 1fr; } }
        .stat-card {
            background: #fadfd6;
            border: 1px solid #f5c2b3;
            padding: 1.5rem;
            border-radius: .5rem;
            text-align: center;
        }
        .stat-number {
            font-size: clamp(2.5rem, 6vw, 3rem);
            font-weight: 700;
            color: #b83814;
            line-height: 1;
            margin-bottom: .5rem;
        }
        .stat-label {
            font-size: .875rem;
            color: rgba(184,56,20,.8);
            font-weight: 500;
            line-height: 1.5;
        }

        /* ── Warning Box ── */
        .warning-box {
            background: #fcf0ec;
            border-left: 4px solid var(--accent);
            padding: 1.5rem;
            border-radius: 0 .5rem .5rem 0;
            margin-bottom: 2rem;
        }
        .warning-box p {
            font-size: .9375rem;
            line-height: 1.65;
            color: var(--ink);
            font-weight: 500;
        }
        .warning-box p strong { color: var(--ink); }

        /* ── Quote Box ── */
        .quote-box {
            background: var(--green-light);
            border-left: 4px solid var(--whatsapp);
            padding: 1.5rem;
            border-radius: 0 .5rem .5rem 0;
            margin-bottom: 3rem;
        }
        .quote-box p {
            font-size: .9375rem;
            line-height: 1.65;
            color: #128C7E;
            font-style: italic;
            margin-bottom: .75rem;
        }
        .quote-box .quote-author {
            font-size: .8125rem;
            color: #128C7E;
            opacity: .8;
            font-weight: 500;
            font-style: normal;
        }

        /* ── CTA Text ── */
        .cta-text {
            text-align: center;
            font-size: clamp(1rem, 2vw, 1.125rem);
            font-weight: 500;
            margin-bottom: 3rem;
        }
        .cta-text strong { color: var(--ink); }

        /* ── Share Section ── */
        .share-section {
            border-top: 1px solid var(--divider);
            padding-top: 3rem;
            margin-bottom: 3rem;
        }
        .share-section .section-label {
            text-align: center;
            margin-bottom: 1rem;
        }
        .share-section h2 {
            text-align: center;
            font-size: clamp(1.5rem, 4vw, 1.75rem);
            line-height: 1.2;
            margin-bottom: 1rem;
            font-family: 'DM Sans', sans-serif;
            font-weight: 700;
        }
        .share-section > p {
            text-align: center;
            font-size: clamp(1rem, 2vw, 1.125rem);
            line-height: 1.65;
            color: var(--ink-soft);
            margin-bottom: 2rem;
            max-width: 640px;
            margin-left: auto;
            margin-right: auto;
        }
        .share-section .prompt {
            font-size: clamp(1rem, 2vw, 1.125rem);
            font-weight: 500;
            margin-bottom: 1rem;
        }
        .share-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: .75rem;
            margin-bottom: 2.5rem;
        }
        .share-list li {
            display: flex;
            align-items: flex-start;
            gap: .75rem;
            font-size: .9375rem;
            color: var(--ink-soft);
            line-height: 1.5;
        }
        .share-list li svg { flex-shrink: 0; margin-top: .15rem; color: var(--trust); }

        /* ── WhatsApp CTA Box ── */
        .whatsapp-box {
            background: var(--green-light);
            border-left: 6px solid var(--whatsapp);
            padding: 2rem;
            border-radius: .5rem;
            text-align: center;
            margin-bottom: 2rem;
        }
        .whatsapp-box h2 {
            font-size: clamp(1.5rem, 4vw, 1.75rem);
            font-weight: 700;
            color: var(--whatsapp-dark);
            margin-bottom: .5rem;
            font-family: 'DM Sans', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: .75rem;
        }
        .whatsapp-box p {
            font-size: .9375rem;
            color: #128C7E;
            margin-bottom: 1.5rem;
            font-weight: 500;
        }
        .whatsapp-box p span {
            display: block;
            font-weight: 400;
            font-size: .8125rem;
            opacity: .8;
            margin-top: .25rem;
        }
        .btn-whatsapp {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: .5rem;
            background: var(--whatsapp);
            color: #fff;
            font-weight: 700;
            font-size: 1.125rem;
            padding: 1rem 2rem;
            border-radius: 9999px;
            text-decoration: none;
            box-shadow: 0 4px 12px rgba(37,211,102,.3);
            transition: background .2s, transform .2s;
            border: none;
            cursor: pointer;
            font-family: 'DM Sans', sans-serif;
        }
        .btn-whatsapp:hover {
            background: #20bd5a;
            transform: translateY(-2px);
        }

        /* ── Message Box ── */
        .message-box {
            background: var(--surface);
            padding: 1.5rem;
            border-radius: .5rem;
            border: 1px solid var(--divider);
            margin-bottom: 2rem;
        }
        .message-box .label {
            font-size: .75rem;
            text-transform: uppercase;
            letter-spacing: .08em;
            color: var(--muted);
            font-weight: 700;
            margin-bottom: 1rem;
        }
        .message-box p {
            font-size: .9375rem;
            color: var(--ink);
            font-style: italic;
            line-height: 1.65;
        }

        /* ── Skip Link ── */
        .skip-link {
            text-align: center;
            margin-bottom: 3rem;
        }
        .skip-link a {
            font-size: .875rem;
            color: var(--muted);
            text-decoration: underline;
            text-decoration-color: var(--border);
            transition: color .2s;
        }
        .skip-link a:hover { color: var(--ink); }

        /* ── Footer ── */
        .footer-note {
            text-align: center;
            border-top: 1px solid var(--divider);
            padding-top: 3rem;
            padding-bottom: 3rem;
        }
        .footer-note p {
            font-size: .875rem;
            color: var(--ink-soft);
            font-weight: 500;
            margin-bottom: .5rem;
        }
        .footer-note p:last-child {
            color: var(--muted);
        }
    </style>
</head>
<body>

<div class="container">

    <!-- Header Section -->
    <section class="header-section">
        <div class="header-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                <polyline points="22 4 12 14.01 9 11.01"/>
            </svg>
        </div>
        <h1>You're Protected.</h1>
        <h2>Your quotes are on their way.</h2>
        <p>Within 5 to 15 minutes, up to 5 of South Africa's elite tracker providers will contact you directly.</p>
    </section>

    <!-- What Happens Next -->
    <section class="next-section">
        <p class="section-label">WHAT HAPPENS NEXT</p>
        <p>Keep your phone close. Here is exactly what to expect:</p>

        <div class="step-row">
            <div class="step-num">1</div>
            <p><strong>Keep your phone nearby,</strong> Providers contact you via call or WhatsApp, whichever you selected on the form.</p>
        </div>
        <div class="step-row">
            <div class="step-num">2</div>
            <p><strong>Use the 5 questions,</strong> Ask each provider about recovery time, installation, activation confirmation, monitoring hours, and contract terms.</p>
        </div>
        <div class="step-row">
            <div class="step-num">3</div>
            <p><strong>Compare and choose,</strong> Best price. Fastest installation. Strongest recovery network in your area. You decide, no pressure, no obligation.</p>
        </div>
    </section>

    <!-- Before You Close This Tab -->
    <section class="alert-box">
        <p class="section-label">BEFORE YOU CLOSE THIS TAB</p>
        <h2>Someone you love is driving unprotected right now.</h2>
        <p>You just learned what most South Africans don't know.</p>
        <p>That 63% of "recovered" vehicles come back stripped or burned. That comparison sites are designed to exhaust you into giving up. That the "24/7 monitoring" many trackers promise is a voicemail at 2 AM.</p>
        <p><strong>You know how to navigate this now. They don't.</strong></p>
        <p>Think about who came to mind just now. A parent still driving on a Facebook-ad tracker. A sibling who keeps saying "I'll sort it next month." A close friend who chose the cheapest quote from a comparison site because it was the first call they answered.</p>
    </section>

    <!-- Data Points -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-number">48</div>
            <p class="stat-label">vehicles stolen per day in Gauteng alone</p>
        </div>
        <div class="stat-card">
            <div class="stat-number">63%</div>
            <p class="stat-label">of "recovered" vehicles found stripped or burned</p>
        </div>
    </div>

    <!-- Warning Box -->
    <div class="warning-box">
        <p>One wrong tracker choice, or none at all, is the difference between a vehicle back in the driveway in 18 minutes, and a police report that goes nowhere. <strong>The person you're thinking of right now doesn't know how to tell the difference.</strong></p>
    </div>

    <!-- Quote -->
    <div class="quote-box">
        <p>"His number was disconnected. The 'monitoring center' was a virtual assistant taking messages during business hours. I never heard from them again."</p>
        <p class="quote-author">Small business owner, Durban 2024, after his bakkie was hijacked</p>
    </div>

    <!-- CTA Text -->
    <p class="cta-text">Sending this takes 10 seconds. <strong>Not sending it could cost someone everything.</strong></p>

    <!-- Share Section -->
    <section class="share-section">
        <p class="section-label">SHARE VIA WHATSAPP</p>
        <h2>Send this to someone whose car needs real protection.</h2>
        <p>One tap. They get the same no-spam, Elite-5-only comparison you just used, without the call from 12 random resellers.</p>

        <p class="prompt">Who are you thinking of right now?</p>
        <ul class="share-list">
            <li>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                    <polyline points="22 4 12 14.01 9 11.01"/>
                </svg>
                Parents or siblings who haven't sorted their tracker yet
            </li>
            <li>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                    <polyline points="22 4 12 14.01 9 11.01"/>
                </svg>
                Friends in Gauteng, Cape Town, or Durban, highest-theft areas in the country
            </li>
            <li>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                    <polyline points="22 4 12 14.01 9 11.01"/>
                </svg>
                Business owners with a vehicle or small fleet, still comparing on their own
            </li>
            <li>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                    <polyline points="22 4 12 14.01 9 11.01"/>
                </svg>
                Anyone who chose the cheapest quote from a comparison site, they may not know what they actually have
            </li>
        </ul>

        <!-- WhatsApp CTA -->
        <div class="whatsapp-box">
            <h2>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="18" cy="5" r="3"/>
                    <circle cx="6" cy="12" r="3"/>
                    <circle cx="18" cy="19" r="3"/>
                    <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/>
                    <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/>
                </svg>
                Share on WhatsApp
            </h2>
            <p>
                wa.me/?text=[YOUR SHARE MESSAGE + LINK]<br/>
                <span>Tap to send, no sign-up required</span>
            </p>
            <a href="https://wa.me/?text={{ urlencode('Hey, I just found a way to get quotes from SA\'s top 5 car tracker companies without getting spammed by random resellers. One form, direct contact only. Worth a look before you sign anything: searchadeal.co.za/trackers') }}" target="_blank" rel="noopener noreferrer" class="btn-whatsapp">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="18" cy="5" r="3"/>
                    <circle cx="6" cy="12" r="3"/>
                    <circle cx="18" cy="19" r="3"/>
                    <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/>
                    <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/>
                </svg>
                Share via WhatsApp
            </a>
        </div>

        <!-- Suggested Message -->
        <div class="message-box">
            <p class="label">SUGGESTED WHATSAPP MESSAGE</p>
            <p>"Hey [Name], I just found a way to get quotes from SA's top 5 car tracker companies without getting spammed by random resellers. One form, direct contact only. Worth a look before you sign anything: searchadeal.co.za/trackers"</p>
        </div>

        <!-- Skip Link -->
        <div class="skip-link">
            <a href="{{ route('home') }}">I'd rather keep this to myself.</a>
        </div>
    </section>

    <!-- Footer Note -->
    <div class="footer-note">
        <p>Your quotes are being matched now. South Africa's Elite 5 tracker providers will contact you within 5 to 15 minutes.</p>
        <p>You are under no obligation to proceed with any provider.</p>
    </div>

</div>

</body>
</html>
