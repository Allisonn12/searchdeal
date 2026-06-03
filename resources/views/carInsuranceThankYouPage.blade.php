<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Car Insurance – Thank You</title>
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
        .header-label {
            font-size: .75rem;
            text-transform: uppercase;
            letter-spacing: .08em;
            color: var(--muted);
            font-weight: 700;
            margin-bottom: 2rem;
        }
        .header-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 64px;
            height: 64px;
            background: rgba(26,92,138,.1);
            border-radius: 50%;
            margin-bottom: 1.5rem;
            color: var(--trust);
        }
        .header-section h1 {
            font-size: clamp(1.75rem, 5vw, 3rem);
            line-height: 1.1;
            letter-spacing: -.02em;
            margin-bottom: 1rem;
            font-family: 'DM Sans', sans-serif;
            font-weight: 700;
        }
        .header-section h1 i {
            font-family: 'Playfair Display', serif;
            color: var(--primary);
            font-style: italic;
        }
        .header-section p {
            font-size: clamp(1.0625rem, 2vw, 1.25rem);
            line-height: 1.65;
            color: var(--ink-soft);
            max-width: 640px;
            margin: 0 auto;
        }

        /* ── Realtime Proof Bar ── */
        .proof-bar {
            background: var(--surface);
            border: 1px solid var(--divider);
            border-radius: .5rem;
            padding: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: .75rem;
            margin-bottom: 4rem;
            box-shadow: 0 1px 3px rgba(0,0,0,.04);
        }
        .pulse-dot {
            width: 12px;
            height: 12px;
            background: var(--trust);
            border-radius: 50%;
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: .4; }
        }
        .proof-bar p {
            font-size: .9375rem;
            color: var(--ink);
            margin: 0;
        }
        .proof-bar p strong { color: var(--ink); }

        /* ── Alert Box (Uncomfortable Part) ── */
        .alert-box {
            background: rgba(200,75,17,.06);
            border-left: 4px solid var(--accent);
            padding: 2rem;
            border-radius: 0 .5rem .5rem 0;
            margin-bottom: 3rem;
        }
        .section-label {
            color: var(--accent);
            text-transform: uppercase;
            font-size: .8125rem;
            font-weight: 700;
            letter-spacing: .08em;
            margin-bottom: .75rem;
        }
        .alert-box h2 {
            font-size: clamp(1.375rem, 4vw, 1.625rem);
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
            margin-bottom: 4rem;
        }
        @media (min-width: 640px) { .stats-grid { grid-template-columns: repeat(3, 1fr); } }
        .stat-card {
            background: var(--surface);
            border: 1px solid var(--divider);
            padding: 1.5rem;
            border-radius: .5rem;
            text-align: center;
        }
        .stat-number {
            font-size: clamp(1.75rem, 5vw, 2rem);
            font-weight: 700;
            color: var(--ink);
            line-height: 1;
            margin-bottom: .5rem;
        }
        .stat-label {
            font-size: .875rem;
            color: var(--muted);
            line-height: 1.5;
        }

        /* ── Who is overpaying? ── */
        .section-heading {
            font-size: clamp(1.5rem, 4vw, 1.75rem);
            line-height: 1.2;
            margin-bottom: 1rem;
            font-family: 'DM Sans', sans-serif;
            font-weight: 700;
        }
        .section-lead {
            font-size: clamp(1rem, 2vw, 1.125rem);
            line-height: 1.65;
            color: var(--ink-soft);
            margin-bottom: 2rem;
        }
        .person-card {
            background: var(--surface);
            border: 1px solid var(--divider);
            padding: 1.5rem;
            border-radius: .5rem;
            margin-bottom: 1rem;
        }
        .person-card:last-child { margin-bottom: 0; }
        .person-card h3 {
            font-size: 1.125rem;
            font-weight: 700;
            color: var(--ink);
            margin-bottom: .5rem;
            font-family: 'DM Sans', sans-serif;
            display: flex;
            align-items: center;
            gap: .5rem;
        }
        .person-card h3 svg { flex-shrink: 0; }
        .person-card p {
            font-size: .9375rem;
            line-height: 1.65;
            color: var(--ink-soft);
            margin: 0;
        }

        /* ── Message Templates ── */
        .message-section { margin-bottom: 4rem; }
        .message-box {
            background: var(--surface);
            border: 1px solid var(--divider);
            border-radius: .5rem;
            padding: 1.5rem;
            position: relative;
            box-shadow: 0 1px 3px rgba(0,0,0,.04);
        }
        .copy-btn {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: #fff;
            border: 1px solid var(--divider);
            color: var(--ink);
            padding: .5rem 1rem;
            border-radius: .375rem;
            font-size: .875rem;
            font-weight: 500;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: .5rem;
            font-family: 'DM Sans', sans-serif;
            box-shadow: 0 1px 2px rgba(0,0,0,.04);
            transition: background .2s;
        }
        .copy-btn:hover { background: var(--bg); }
        .copy-btn svg { flex-shrink: 0; }
        .message-text {
            white-space: pre-wrap;
            font-size: clamp(1rem, 2vw, 1.125rem);
            line-height: 1.65;
            color: var(--ink);
            padding-right: 6rem;
        }

        /* ── Variants ── */
        .variants-section { margin-bottom: 4rem; }
        .variant-card {
            background: var(--surface);
            border: 1px solid var(--divider);
            border-radius: .5rem;
            padding: 1.5rem;
            position: relative;
            margin-bottom: 1.5rem;
        }
        .variant-card:last-child { margin-bottom: 0; }
        .variant-label {
            font-size: .75rem;
            text-transform: uppercase;
            letter-spacing: .08em;
            color: var(--muted);
            font-weight: 700;
            margin-bottom: 1rem;
        }
        .variant-text {
            white-space: pre-wrap;
            font-size: .9375rem;
            line-height: 1.65;
            color: var(--ink);
            padding-right: 3rem;
        }
        .variant-copy-btn {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: #fff;
            border: 1px solid var(--divider);
            color: var(--ink-soft);
            padding: .5rem;
            border-radius: .375rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 1px 2px rgba(0,0,0,.04);
            transition: color .2s;
        }
        .variant-copy-btn:hover { color: var(--accent); }

        /* ── WhatsApp CTA Box ── */
        .whatsapp-box {
            background: var(--green-light);
            border-left: 6px solid var(--whatsapp);
            padding: 2rem;
            border-radius: .5rem;
            text-align: center;
            margin-bottom: 4rem;
        }
        .whatsapp-box h2 {
            font-size: clamp(1.5rem, 4vw, 1.75rem);
            font-weight: 700;
            color: var(--whatsapp-dark);
            margin-bottom: 1rem;
            font-family: 'DM Sans', sans-serif;
        }
        .whatsapp-box p {
            font-size: clamp(1rem, 2vw, 1.125rem);
            color: #128C7E;
            margin-bottom: 1.5rem;
            font-weight: 500;
        }
        .whatsapp-box p span {
            display: block;
            font-style: italic;
            font-weight: 400;
            font-size: .9375rem;
            margin-top: .5rem;
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

        /* ── Footer ── */
        .footer-section {
            text-align: center;
            border-top: 1px solid var(--divider);
            padding-top: 3rem;
            padding-bottom: 3rem;
        }
        .footer-section p {
            font-size: clamp(1rem, 2vw, 1.125rem);
            color: var(--ink-soft);
            font-style: italic;
            margin-bottom: .75rem;
        }
        .footer-section p.bold {
            font-style: normal;
            font-weight: 500;
            color: var(--ink);
            margin-bottom: 3rem;
        }
        .footer-meta {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: .5rem 1rem;
            font-size: .8125rem;
            color: var(--muted);
            font-weight: 500;
        }
        .footer-meta .dot {
            width: 4px;
            height: 4px;
            background: var(--divider);
            border-radius: 50%;
        }

        /* ── Copy feedback ── */
        .copied-feedback {
            color: var(--green);
            display: flex;
            align-items: center;
            gap: .25rem;
        }
    </style>
</head>
<body>

<div class="container">

    <!-- Header Section -->
    <section class="header-section">
        <p class="header-label">SEARCH A DEAL • THANK YOU</p>
        <div class="header-icon">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                <polyline points="22 4 12 14.01 9 11.01"/>
            </svg>
        </div>
        <h1>Your profile is being matched <i>right now</i>.</h1>
        <p>Providers are reviewing your details. Expect your first quotes within 24 hours directly to your WhatsApp and email.</p>
    </section>

    <!-- Realtime Proof Bar -->
    <div class="proof-bar">
        <div class="pulse-dot"></div>
        <p>While you're reading this, <strong>23 other South Africans</strong> just submitted their profiles.</p>
    </div>

    <!-- The Uncomfortable Part -->
    <section class="alert-box">
        <p class="section-label">THE UNCOMFORTABLE PART</p>
        <h2>Someone you know is paying R450-R750 too much this month.</h2>
        <p>You just discovered that the system is designed to keep drivers invisible to better pricing. That knowledge didn't exist in your world an hour ago. <strong>It still doesn't exist in theirs.</strong></p>
        <p>While you wait for your quotes, they'll renew at whatever their insurer asks, the same way you did last year.</p>
    </section>

    <!-- Data Points -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-number">R287M</div>
            <p class="stat-label">overpaid by SA drivers last month alone</p>
        </div>
        <div class="stat-card">
            <div class="stat-number">R35,000</div>
            <p class="stat-label">lost over 5 years by not comparing</p>
        </div>
        <div class="stat-card">
            <div class="stat-number">127s</div>
            <p class="stat-label">to give someone the chance to save</p>
        </div>
    </div>

    <!-- Who is still overpaying? -->
    <h2 class="section-heading">Who in your life is still overpaying?</h2>
    <p class="section-lead">Think of one person right now. Not a list. One person whose insurance renewal is coming up or already passed. The person you'd call if you found R500/month leaking out of their account.</p>

    <div style="margin-bottom: 4rem;">
        <div class="person-card">
            <h3>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                </svg>
                Spouse / partner
            </h3>
            <p>On a separate policy? Separate policies mean separate pooled-risk exposure. They're almost certainly overpaying too.</p>
        </div>
        <div class="person-card">
            <h3>Parent</h3>
            <p>Loyal to one insurer for 10+ years? Loyalty is costing them 22-34% more than drivers who compare every cycle. The loyalty discount is a myth, they're being penalised for staying.</p>
        </div>
        <div class="person-card">
            <h3>Sibling</h3>
            <p>Probably never compared. Probably meaning to 'at some point.' At some point never comes. 127 seconds does.</p>
        </div>
        <div class="person-card">
            <h3>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                    <circle cx="9" cy="7" r="4"/>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                </svg>
                Close friend
            </h3>
            <p>The kind you'd forward a money-saving tip to without hesitation. This is that tip.</p>
        </div>
    </div>

    <!-- Message Templates -->
    <div class="message-section">
        <h2 class="section-heading">Your message - ready to send</h2>
        <p class="section-lead">Copy this. Send it on WhatsApp right now. You don't need to explain it, the link does the work.</p>

        <div class="message-box">
            <button class="copy-btn" onclick="copyText(this, 'default-msg')">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="9" y="9" width="13" height="13" rx="2" ry="2"/>
                    <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/>
                </svg>
                <span>Copy Text</span>
            </button>
            <div class="message-text" id="default-msg">Hey,
                Just found something worth 2 minutes of your time.
                I compared my car insurance using this platform: one form, no broker calls, multiple providers actually competing for my business. The savings are real.
                It's completely free and takes about 127 seconds: searchadeal.co.za
                Don't just renew blindly like I was doing.</div>
        </div>
    </div>

    <!-- Personalised Variants -->
    <div class="variants-section">
        <h3 class="section-heading" style="font-size: clamp(1.25rem, 3vw, 1.375rem);">Personalised variants:</h3>
        <p class="section-lead" style="font-size: 1rem;">Use these if you know exactly who you're sending to.</p>

        <div class="variant-card">
            <p class="variant-label">FOR A PARENT</p>
            <div class="variant-text" id="variant-parent">Mom/Dad, please try this, it took me under 3 minutes. You might be overpaying on car insurance.
                searchadeal.co.za
                Free to use. No pressure. Multiple insurers quote you at once. You might be surprised.</div>
            <button class="variant-copy-btn" onclick="copyText(this, 'variant-parent')" title="Copy text">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="9" y="9" width="13" height="13" rx="2" ry="2"/>
                    <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/>
                </svg>
            </button>
        </div>

        <div class="variant-card">
            <p class="variant-label">FOR A SIBLING</p>
            <div class="variant-text" id="variant-sibling">Bro/sis, stop renewing blindly. I compared my car insurance using this and it was actually eye-opening.
                searchadeal.co.za
                One form. No spam calls. Real competing quotes. Takes 2 minutes.</div>
            <button class="variant-copy-btn" onclick="copyText(this, 'variant-sibling')" title="Copy text">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="9" y="9" width="13" height="13" rx="2" ry="2"/>
                    <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/>
                </svg>
            </button>
        </div>

        <div class="variant-card">
            <p class="variant-label">FOR A FRIEND</p>
            <div class="variant-text" id="variant-friend">Hey, found something actually useful. Compare your car insurance at searchadeal.co.za, took me 127 seconds and multiple insurers compete for your business. Free. No broker nonsense.</div>
            <button class="variant-copy-btn" onclick="copyText(this, 'variant-friend')" title="Copy text">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="9" y="9" width="13" height="13" rx="2" ry="2"/>
                    <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/>
                </svg>
            </button>
        </div>

        <div class="variant-card">
            <p class="variant-label">FOR A SPOUSE / PARTNER</p>
            <div class="variant-text" id="variant-spouse">Just did this, it took me 2 minutes. Compare your car insurance: searchadeal.co.za
                Providers actually compete against each other. I got quotes 38% lower. It's free, no broker calls.</div>
            <button class="variant-copy-btn" onclick="copyText(this, 'variant-spouse')" title="Copy text">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="9" y="9" width="13" height="13" rx="2" ry="2"/>
                    <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Grand CTA -->
    <div class="whatsapp-box">
        <h2>Share on WhatsApp now</h2>
        <p>
            wa.me/?text= [paste your message above]
            <span>Or tap the WhatsApp share button below.</span>
        </p>
        <a href="https://wa.me/?text={{ urlencode("Hey,\nJust found something worth 2 minutes of your time.\nI compared my car insurance using this platform: one form, no broker calls, multiple providers actually competing for my business. The savings are real.\nIt's completely free and takes about 127 seconds: searchadeal.co.za\nDon't just renew blindly like I was doing.") }}" target="_blank" rel="noopener noreferrer" class="btn-whatsapp">
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

    <!-- Footer Note -->
    <div class="footer-section">
        <p>You're not selling anything. You're forwarding a system that saves real money.</p>
        <p class="bold">The people who matter to you are still paying for other people's claims.</p>
        <div class="footer-meta">
            <span>Search A Deal</span>
            <div class="dot"></div>
            <span>POPIA-Compliant</span>
            <div class="dot"></div>
            <span>Built in South Africa for South Africans</span>
            <div class="dot"></div>
            <span>4,200+ Drivers Switched in the Last 90 Days</span>
        </div>
    </div>

</div>

<script>
    function copyText(btn, elementId) {
        const text = document.getElementById(elementId).innerText;
        navigator.clipboard.writeText(text).then(function() {
            const originalHTML = btn.innerHTML;
            btn.innerHTML = `<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg><span class="copied-feedback">Copied!</span>`;
            setTimeout(function() {
                btn.innerHTML = originalHTML;
            }, 2000);
        });
    }
</script>

</body>
</html>
