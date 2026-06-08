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
            flex-shrink: 0;
        }
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: .4; }
        }
        .proof-bar p { font-size: .9375rem; color: var(--ink); margin: 0; }
        .proof-bar p strong { color: var(--ink); }

        /* ── Alert Box ── */
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
        .stat-label { font-size: .875rem; color: var(--muted); line-height: 1.5; }

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
        .person-card p { font-size: .9375rem; line-height: 1.65; color: var(--ink-soft); margin: 0; }

        /* ── Quote Box (share trigger) ── */
        .quote-box {
            background: var(--green-light);
            border-left: 4px solid var(--whatsapp);
            padding: 1.5rem;
            border-radius: 0 .5rem .5rem 0;
            margin-bottom: 3rem;
            transition: transform .2s, box-shadow .2s;
        }
        .quote-box:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0,0,0,.08);
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
            margin-bottom: .5rem;
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
        .btn-whatsapp:hover { background: #20bd5a; transform: translateY(-2px); }

        /* ── Message Selector (mirrors car tracker) ── */
        .share-selector-box {
            background: var(--green-light);
            border-left: 4px solid var(--whatsapp);
            padding: 1.5rem;
            border-radius: 0 .5rem .5rem 0;
            margin-bottom: 3rem;
        }
        .share-selector-box h3 {
            font-family: 'DM Sans', sans-serif;
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--whatsapp-dark);
            font-style: normal;
            margin-bottom: 1rem;
        }
        .share-selector-box > p {
            font-style: normal;
            color: var(--ink-soft);
            margin-bottom: 1.25rem;
            font-size: .9375rem;
            line-height: 1.6;
        }
        .share-options {
            display: grid;
            gap: .75rem;
            margin-bottom: 1.25rem;
        }
        .share-option {
            width: 100%;
            border: 1px solid var(--divider);
            border-radius: .5rem;
            background: #fff;
            padding: 1rem;
            cursor: pointer;
            text-align: left;
            font-family: 'DM Sans', sans-serif;
            transition: border-color .2s, background .2s;
        }
        .share-option:hover {
            border-color: var(--whatsapp);
            background: #f7fffa;
        }
        .share-option.active {
            border-color: var(--whatsapp);
            background: #f0fff5;
        }
        .share-option strong {
            display: block;
            margin-bottom: .25rem;
            font-size: .9375rem;
            color: var(--whatsapp-dark);
        }
        .share-option span {
            display: block;
            color: var(--ink-soft);
            font-size: .875rem;
            line-height: 1.5;
        }

        /* ── Message Box (textarea preview) ── */
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
        #custom-message {
            width: 100%;
            min-height: 140px;
            border: 1px solid var(--divider);
            border-radius: 8px;
            padding: 1rem;
            font-family: 'DM Sans', sans-serif;
            font-size: .95rem;
            resize: vertical;
            color: var(--ink);
            background: #fff;
            line-height: 1.6;
        }
        #custom-message:focus {
            outline: none;
            border-color: var(--whatsapp);
            box-shadow: 0 0 0 3px rgba(37,211,102,.12);
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
    </style>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-18179664123"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-18179664123');
    </script>
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
        <h2>Someone you know is paying R450–R750 too much this month.</h2>
        <p>You just discovered that the system is designed to keep drivers invisible to better pricing. That knowledge didn't exist in your world an hour ago. <strong>It still doesn't exist in theirs.</strong></p>
        <p>While you wait for your quotes, they'll renew at whatever their insurer asks — the same way you did last year.</p>
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
            <p>Loyal to one insurer for 10+ years? Loyalty is costing them 22–34% more than drivers who compare every cycle. The loyalty discount is a myth — they're being penalised for staying.</p>
        </div>
        <div class="person-card">
            <h3>Sibling</h3>
            <p>Probably never compared. Probably meaning to "at some point." At some point never comes. 127 seconds does.</p>
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

    <!-- Message Selector (mirrors car tracker pattern) -->
    <div class="share-selector-box">

        <h3>Choose Your WhatsApp Message</h3>

        <p>Select a message below and we'll automatically open WhatsApp with your chosen message and link.</p>

        <div class="share-options">

            <button type="button" class="share-option" data-message="spouse">
                <strong>For a Spouse / Partner</strong>
                <span>On a separate policy and probably overpaying too.</span>
            </button>

            <button type="button" class="share-option" data-message="parent">
                <strong>For a Parent</strong>
                <span>Loyal to one insurer for years — and paying for it.</span>
            </button>

            <button type="button" class="share-option" data-message="sibling">
                <strong>For a Sibling</strong>
                <span>Still meaning to compare "at some point."</span>
            </button>

            <button type="button" class="share-option" data-message="friend">
                <strong>For a Close Friend</strong>
                <span>The kind you'd forward a genuine money-saving tip to.</span>
            </button>

            <button type="button" class="share-option" data-message="custom">
                <strong>Write My Own Message</strong>
                <span>Create and edit your own WhatsApp message.</span>
            </button>

        </div>

    </div>

    <!-- Selected Message Preview -->
    <div class="message-box">
        <p class="label">SELECTED WHATSAPP MESSAGE</p>
        <textarea id="custom-message"></textarea>
    </div>

    <!-- WhatsApp CTA -->
    <div class="whatsapp-box">
        <h2>Share on WhatsApp now</h2>
        <p>
            Your selected message is ready to send.
            <span>Tap below — no copying required.</span>
        </p>
        <button type="button" class="btn-whatsapp" id="send-whatsapp">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
            </svg>
            Share via WhatsApp
        </button>
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
    const insuranceShareUrl = @json(route('car-insure'));

    const insuranceMessages = {
        spouse:  "Hey, before your next insurance renewal I thought you should see this. I just compared quotes from multiple insurers through one form — no spam, no broker calls. You're probably overpaying on your separate policy:",
        parent:  "Mom/Dad, before you renew your car insurance again, try this first. Staying with one insurer for years is actually costing you more — I found this out the hard way. One form, multiple quotes:",
        sibling: "Bro/sis, stop renewing blindly. I used this to compare multiple insurance providers in one place and it took less than 2 minutes. Might save you a few hundred rand a month:",
        friend:  "Found something genuinely useful — compare multiple insurance quotes without filling in forms everywhere or getting spammed by brokers. Worth checking before your next renewal:",
        custom:  ''
    };

    const textarea     = document.getElementById('custom-message');
    const shareButtons = document.querySelectorAll('.share-option');
    const sendBtn      = document.getElementById('send-whatsapp');

    function openWhatsapp(message) {
        const final = message + '\n\n' + insuranceShareUrl;
        window.open('https://wa.me/?text=' + encodeURIComponent(final), '_blank', 'noopener,noreferrer');
    }

    shareButtons.forEach(function(button) {
        button.addEventListener('click', function() {

            shareButtons.forEach(function(btn) { btn.classList.remove('active'); });
            button.classList.add('active');

            const type    = button.dataset.message;
            const message = insuranceMessages[type];

            if (type === 'custom') {
                textarea.value = 'Hey,\n\nI thought you might find this useful.\n\n' + insuranceShareUrl;
                textarea.focus();
                return;
            }

            textarea.value = message + '\n\n' + insuranceShareUrl;
            openWhatsapp(message);
        });
    });

    sendBtn.addEventListener('click', function() {
        const message = textarea.value.trim();
        if (!message) return;
        window.open('https://wa.me/?text=' + encodeURIComponent(message), '_blank', 'noopener,noreferrer');
    });

    // Default textarea state
    textarea.value = 'Hey,\n\nI thought you might find this useful.\n\n' + insuranceShareUrl;
</script>

</body>
</html>
