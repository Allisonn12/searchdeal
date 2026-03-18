@include('partials.flash')
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
  <meta content="insurance, cheap insurance, best insurance, compare insurance, affordable insurance, insurance deals, insurance discount" name="keywords" />
  <meta content="SearchADeal helps you find the best insurance deals! Compare quotes for car, medical, life and many more insurances from top providers. Save money with affordable rates and exclusive discounts. Get your free quote today!" name="description" />

  <title>SearchADeal</title>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#0f172a',
            background: '#f8fafc',
            white: '#ffffff',
            accent: '#f59e0b',
            muted: '#64748b',
            border: '#e2e8f0',
            insurance: '#1e40af',
            tracker: '#065f46',
            loans: '#92400e'
          },
          fontFamily: {
            heading: ['DM Sans', 'ui-sans-serif', 'system-ui', 'sans-serif'],
            body: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif']
          }
        }
      }
    }
  </script>
  <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />

  <style>
    .text-accent  { color: #F59E0B; }
    .orange-bg    { background: #F59E0B; }
    .black-button,
    .black-bg     { background: #0F172A; }
    .black-button:hover { background: #F59E0B; }
    .grey-bg      { background: #F8FAFC; }
    .light-orange { color: #312002; }
    .blue-bg     { background: #0F172A; }
  </style>


  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
              new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NWN5MH94');</script>
  <!-- End Google Tag Manager -->
</head>
<body class="min-h-screen flex flex-col relative bg-white">


<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NWN5MH94"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->




{{-- ── Header — identical to tracker1 ── --}}
<header class="fixed top-0 left-0 right-0 h-[58px] px-[14.5px] md:px-[58px] flex items-center justify-between z-50 bg-background/90 backdrop-blur-sm">
  <div class="font-heading font-bold text-xl tracking-tighter">SearchADeal</div>

  <button
          type="button"
          aria-label="Open Menu"
          class="md:hidden inline-flex items-center justify-center w-9 h-9 rounded-md border border-primary text-primary hover:bg-background/60"
          onclick="document.getElementById('mobile-menu').classList.toggle('hidden')"
  >
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
    </svg>
  </button>

  <nav class="hidden md:flex items-center gap-8 font-heading text-[10px] font-medium uppercase tracking-wider">
    <a href="{{ route('index') }}"         class="nav-item nav-link {{ Route::is('index')         ? 'active' : '' }}">Home</a>
    <a href="{{ route('car-insurance') }}"  class="nav-item nav-link {{ Route::is('car-insurance') ? 'active' : '' }}">Car Insurance</a>
    <a href="{{ route('tracker1') }}"       class="nav-item nav-link {{ Route::is('tracker1')      ? 'active' : '' }}">Car Trackers</a>
    <a href="{{ route('tracker.loan') }}"   class="hover:text-accent transition-colors">Personal Loans</a>
    <a href="{{ route('how-it-works') }}"   class="nav-item nav-link {{ Route::is('how-it-works')   ? 'active' : '' }}">How It Works</a>
  </nav>

</header>

{{-- Mobile menu drawer --}}
<div id="mobile-menu" class="md:hidden hidden fixed top-[58px] inset-x-0 z-40 bg-white border-b border-border shadow-sm float-end">
  <div class="px-4 py-3 flex flex-col gap-3 font-heading text-[12px] uppercase">
    <a href="{{ route('index') }}"         class="py-2">Home</a>
    <a href="{{ route('car-insurance') }}" class="py-2">Car Insurance</a>
    <a href="{{ route('tracker1') }}"      class="py-2">Car Trackers</a>
    <a href="{{ route('tracker.loan') }}"  class="py-2">Personal Loans</a>
    <a href="{{ route('how-it-works') }}"  class="py-2">How It Works</a>
  </div>
</div>



{{-- ══════════════════ MAIN ══════════════════ --}}
<main class="flex-grow pt-[58px] bg-white">

  {{-- ── Hero Section ── --}}
  <section class="py-20 px-[14.5px] md:px-[58px] bg-background grey-bg">
    <div class="max-w-[1000px] mx-auto text-center">

      {{-- Urgency badge (bg-accent/10 via inline style) --}}
      <div class="inline-flex items-center gap-2 px-4 py-2 text-accent rounded-full font-heading text-[12px] font-bold uppercase tracking-widest mb-8" style="background-color:rgba(245,158,11,0.1);">
        <i data-lucide="shield-alert" class="w-[16px] h-[16px]"></i>
        One More Thing Before Your Installation Is Scheduled&hellip;
      </div>

      <h1 class="font-heading text-[clamp(36px,4.5vw,64px)] font-medium leading-[1.1] tracking-[-0.03em] text-primary mb-8">
        You Just Made The Smart Decision: Real Protection Against Theft
      </h1>

      <p class="font-body text-[18px] text-muted max-w-3xl mx-auto mb-8 leading-relaxed">
        Your tracker installation is confirmed. Within days, you&rsquo;ll have 24/7 monitoring and one of South Africa&rsquo;s best recovery networks watching your vehicle. That&rsquo;s half the equation solved.
      </p>

      <p class="font-body text-[16px] text-primary font-bold max-w-3xl mx-auto">
        But there&rsquo;s something we need to address while you&rsquo;re here&mdash;because timing matters.
      </p>
    </div>
  </section>

  {{-- ── Editorial Section ── --}}
  <section class="py-20 px-[14.5px] md:px-[58px]">
    <div class="max-w-[800px] mx-auto prose prose-slate prose-lg">

      {{-- Section 1 — The question 94% don't ask --}}
      <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
        The Question 94% of Tracker Customers Don&rsquo;t Ask (Until It&rsquo;s Too Late)
      </h2>

      <div class="p-8 rounded-[3px] mb-12 not-prose black-bg text-white">
        <p class="font-body text-[18px] italic m-0" style="opacity:0.9;">
          &ldquo;I&rsquo;m now protecting my car from theft&hellip; but am I overpaying to insure it against theft?&rdquo;
        </p>
      </div>

      <p class="font-body text-[16px] text-muted leading-relaxed mb-4">
        Here&rsquo;s why this question hits different right now: You just invested in a premium tracker because you understand your vehicle&rsquo;s risk profile. But here&rsquo;s what most drivers miss:
      </p>
      <p class="font-body text-[16px] text-muted leading-relaxed mb-8">
        Your insurance premium was calculated before you had a tracker. Before you had 24/7 monitoring. Before you had armed response integration. You&rsquo;re now a lower-risk customer than when you last renewed. Yet you&rsquo;re still paying the premium of someone without your level of protection.
      </p>

      {{-- Section 2 — The Math --}}
      <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
        The Math Your Insurer Hopes You Don&rsquo;t See
      </h2>
      <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
        Let&rsquo;s be direct about what just changed:
      </p>

      {{-- Two-column: before vs after --}}
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12 not-prose">

        {{-- Before today (grey) --}}
        <div class="p-6 border border-border rounded-[3px] grey-bg">
          <div class="font-heading text-[16px] font-bold text-primary mb-3">Before today:</div>
          <ul class="space-y-2 m-0 p-0 list-none">
            <li class="flex items-start gap-2">
              <i data-lucide="x-circle" class="w-[16px] h-[16px] text-red-400 shrink-0 mt-1"></i>
              <span class="text-[14px] text-muted">No tracker = higher theft risk = higher premium tier</span>
            </li>
            <li class="flex items-start gap-2">
              <i data-lucide="x-circle" class="w-[16px] h-[16px] text-red-400 shrink-0 mt-1"></i>
              <span class="text-[14px] text-muted">Insurance companies price you as unprotected</span>
            </li>
            <li class="flex items-start gap-2">
              <i data-lucide="x-circle" class="w-[16px] h-[16px] text-red-400 shrink-0 mt-1"></i>
              <span class="text-[14px] text-muted">You pay R1,200/month because that&rsquo;s the rate for your risk category</span>
            </li>
          </ul>
        </div>

        {{-- Starting next week (accent border + bg) --}}
        <div class="p-6 rounded-[3px]" style="border:2px solid #F59E0B; background-color:rgba(245,158,11,0.05);">
          <div class="font-heading text-[16px] font-bold mb-3 text-accent">Starting next week:</div>
          <ul class="space-y-2 m-0 p-0 list-none">
            <li class="flex items-start gap-2">
              <i data-lucide="check-circle-2" class="w-[16px] h-[16px] text-accent shrink-0 mt-1"></i>
              <span class="text-[14px] text-primary">Elite-5 tracker installed = 73% lower theft risk</span>
            </li>
            <li class="flex items-start gap-2">
              <i data-lucide="check-circle-2" class="w-[16px] h-[16px] text-accent shrink-0 mt-1"></i>
              <span class="text-[14px] text-primary">Armed response + SAPS integration = preferred customer</span>
            </li>
            <li class="flex items-start gap-2">
              <i data-lucide="alert-triangle" class="w-[16px] h-[16px] text-orange-500 shrink-0 mt-1"></i>
              <span class="text-[14px] text-primary font-bold">Yet you&rsquo;re still paying R1,200/month</span>
            </li>
          </ul>
        </div>

      </div>

      {{-- Uncomfortable truth box --}}
      <div class="p-8 rounded-[3px] border-l-4 border-primary mb-12 not-prose grey-bg">
        <p class="font-body text-[16px] text-primary font-bold mb-4">Here&rsquo;s the uncomfortable truth:</p>
        <p class="font-body text-[15px] text-muted mb-4">
          Your insurer will eventually adjust your rate&hellip; at renewal. 11 months from now. Maybe. Meanwhile, other insurers who specialize in tracker-protected vehicles would quote you R750&ndash;R850/month starting next month for identical cover.
        </p>
        <p class="font-body text-[15px] text-primary font-bold m-0">
          That&rsquo;s R4,200&ndash;R5,400 in savings you&rsquo;re leaving on the table while you wait for your current insurer to &ldquo;maybe&rdquo; adjust your rate.
        </p>
      </div>

      {{-- Section 3 — Why This Moment Matters --}}
      <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
        Why This Moment Matters (And Why Waiting Costs You)
      </h2>

      <div class="space-y-6 mb-12 not-prose">

        {{-- If you don't act --}}
        <div class="p-6 border border-border rounded-[3px]">
          <h4 class="font-heading text-[16px] font-bold text-primary mb-3">If you don&rsquo;t address this right now:</h4>
          <p class="text-[14px] text-muted mb-2"><strong>Month 1&ndash;11:</strong> You pay full premium despite being a tracker-protected customer</p>
          <p class="text-[14px] text-muted mb-2"><strong>Month 12:</strong> Your renewal arrives with a &ldquo;tracker discount&rdquo; of 8&ndash;12%</p>
          <p class="text-[14px] text-red-500 font-bold m-0">Meanwhile: You&rsquo;ve overpaid R4,000+ while insurers who price tracker customers correctly never got the chance to compete.</p>
        </div>

        {{-- If you act now (accent) --}}
        <div class="p-6 rounded-[3px]" style="border:2px solid #F59E0B; background-color:rgba(245,158,11,0.05);">
          <h4 class="font-heading text-[16px] font-bold mb-3 text-accent">If you take 90 seconds right now:</h4>
          <p class="text-[14px] text-primary mb-2"><strong>Today:</strong> Submit one form to the Reverse-Auction Match system</p>
          <p class="text-[14px] text-primary mb-2"><strong>Within 24 hours:</strong> 12+ insurers compete to insure your newly tracker-protected vehicle</p>
          <p class="text-[14px] text-primary mb-2"><strong>Next month:</strong> You&rsquo;re paying R750&ndash;R850/month (R350&ndash;R450/month saved)</p>
          <p class="text-[14px] text-accent font-bold m-0">Next 12 months: You pocket R4,200&ndash;R5,400 that would&rsquo;ve evaporated.</p>
        </div>

      </div>

      {{-- Section 4 — How insurers price tracker vehicles --}}
      <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
        How Insurers Actually Price Tracker-Protected Vehicles
      </h2>
      <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
        When you call your current insurer and say &ldquo;I just installed a tracker, can you reduce my premium?&rdquo; they&rsquo;ll offer you an 8&ndash;12% &ldquo;tracker discount&rdquo; applied at renewal.
      </p>
      <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
        When insurers compete for your tracker-protected profile through the Reverse-Auction Match, they see an Elite-5 tracker + 24/7 monitoring + verified installation. They price you as Tier-1 risk. They quote aggressively because you&rsquo;re exactly the customer they want.
      </p>
      <p class="font-body text-[16px] text-primary font-bold mb-12">
        Result: 28&ndash;38% lower premiums vs your current rate, not 8&ndash;12%. You just became a premium customer. You should be paying premium-customer rates.
      </p>

      {{-- Section 5 — The system you already trust --}}
      <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
        The System You Already Trust, Now Working For Your Insurance
      </h2>
      <p class="font-body text-[16px] text-muted leading-relaxed mb-8">
        You just used The Provider Intelligence Engine&trade; to find your ideal tracker. Now use the Reverse-Auction Match to find your ideal insurance rate. Same philosophy. Different problem.
      </p>

      <div class="space-y-6 mb-16 not-prose">

        <div class="flex gap-6 items-center p-4 border border-border rounded-[3px]">
          <div class="font-heading text-[20px] font-bold text-accent shrink-0">Step 1</div>
          <p class="font-body text-[15px] text-primary m-0">Complete the form below (vehicle + current premium + tracker confirmation)</p>
        </div>
        <div class="flex gap-6 items-center p-4 border border-border rounded-[3px]">
          <div class="font-heading text-[20px] font-bold text-accent shrink-0">Step 2</div>
          <p class="font-body text-[15px] text-primary m-0">12+ insurers receive your tracker-protected profile and compete</p>
        </div>
        <div class="flex gap-6 items-center p-4 border border-border rounded-[3px]">
          <div class="font-heading text-[20px] font-bold text-accent shrink-0">Step 3</div>
          <p class="font-body text-[15px] text-primary m-0">Within 24 hours, you receive quotes reflecting your new risk tier</p>
        </div>
        <div class="flex gap-6 items-center p-4 border border-border rounded-[3px]">
          <div class="font-heading text-[20px] font-bold text-accent shrink-0">Step 4</div>
          <p class="font-body text-[15px] text-primary m-0">You compare, choose the winner, and pocket R350&ndash;R450/month starting next billing cycle</p>
        </div>

      </div>

      {{-- Dark savings comparison block --}}
      <div class="p-12 rounded-[3px] mb-16 not-prose black-bg text-white">
        <h3 class="font-heading text-[28px] font-medium mb-6 text-white">Why Tracker Customers Save 28&ndash;38% More</h3>
        <div class="space-y-6">
          <div>
            <h4 class="font-heading text-[16px] font-bold mb-2 text-accent">Average South African driver:</h4>
            <p class="text-[14px] m-0" style="opacity:0.9;">
              &bull; Saves R250&ndash;R400/month (18&ndash;24% reduction)<br />
              &bull; Reason: Competitive pressure forces better pricing
            </p>
          </div>
          <div>
            <h4 class="font-heading text-[16px] font-bold mb-2 text-accent">Tracker-protected driver:</h4>
            <p class="text-[14px] m-0" style="opacity:0.9;">
              &bull; Saves R350&ndash;R650/month (28&ndash;38% reduction)<br />
              &bull; Reason: You&rsquo;re a verified low-risk customer + competitive pressure
            </p>
          </div>
        </div>
        <div class="mt-8 pt-6" style="border-top:1px solid rgba(255,255,255,0.2);">
          <p class="font-body text-[15px] italic m-0" style="opacity:0.9;">
            &ldquo;Johannesburg driver. 2021 Fortuner. Just installed Elite-5 tracker. Current insurer: R1,180/month. Best quote through Reverse-Auction Match: R798/month. Annual savings: R4,584.&rdquo;
          </p>
        </div>
      </div>

      {{-- Section 6 — Three reasons --}}
      <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
        The Three Reasons This Works Better Right Now
      </h2>

      <div class="space-y-6 mb-16 not-prose">

        <div class="p-6 border border-border rounded-[3px]">
          <h4 class="font-heading text-[18px] font-bold text-primary mb-2">Reason 1: Immediate Savings Start Immediately</h4>
          <p class="text-[14px] text-muted m-0">If you wait 8 months until renewal, you overpay R2,800&ndash;R3,600. If you switch now, you save R350&ndash;R450/month starting next billing cycle. Net benefit of acting now: R2,760 more in your pocket.</p>
        </div>

        <div class="p-6 border border-border rounded-[3px]">
          <h4 class="font-heading text-[18px] font-bold text-primary mb-2">Reason 2: Insurers Price Confidence, Not History</h4>
          <p class="text-[14px] text-muted m-0">Your current insurer sees a loyal customer and offers a standard discount. Competing insurers see a high-value customer with verified Elite-5 protection and price aggressively to win them.</p>
        </div>

        <div class="p-6 border border-border rounded-[3px]">
          <h4 class="font-heading text-[18px] font-bold text-primary mb-2">Reason 3: You&rsquo;ve Already Proven You Take Action</h4>
          <p class="text-[14px] text-muted m-0">You didn&rsquo;t delay the tracker decision. Momentum matters. The best financial decisions happen when you&rsquo;re already in motion, not when you&rsquo;re stuck in analysis paralysis.</p>
        </div>

      </div>

      {{-- Conversation blockquote (accent left border) --}}
      <div class="p-8 rounded-[3px] border-l-4 mb-16 not-prose grey-bg" style="border-color:#F59E0B;">
        <h3 class="font-heading text-[20px] font-bold text-primary mb-4">Your Current Insurer Won&rsquo;t Tell You This</h3>
        <p class="font-body text-[14px] text-muted italic mb-4">Here&rsquo;s a conversation that happens every single week:</p>
        <p class="font-body text-[14px] text-primary mb-2"><strong>Customer:</strong> &ldquo;Why is my premium still so high? I thought the tracker would lower it?&rdquo;</p>
        <p class="font-body text-[14px] text-primary mb-2"><strong>Tracker Company:</strong> &ldquo;Your tracker is working perfectly. The issue isn&rsquo;t protection&mdash;it&rsquo;s pricing. Have you shopped your insurance since installing the tracker?&rdquo;</p>
        <p class="font-body text-[14px] text-primary mb-2"><strong>Customer:</strong> &ldquo;No, I figured my insurer would adjust it automatically.&rdquo;</p>
        <p class="font-body text-[14px] text-primary mb-4"><strong>Tracker Company:</strong> &ldquo;They won&rsquo;t. Not proactively. You need to force competition.&rdquo;</p>
        <p class="font-body text-[14px] text-accent font-bold m-0">Two weeks later, same customer: &ldquo;I&rsquo;m now saving R420/month. Why didn&rsquo;t I do this sooner?&rdquo;</p>
      </div>

      {{-- Section 7 — What's included --}}
      <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
        What&rsquo;s Included (And What You&rsquo;re NOT Signing Up For)
      </h2>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16 not-prose">

        <div>
          <h4 class="font-heading text-[16px] font-bold text-primary mb-4">What happens:</h4>
          <ul class="space-y-3 m-0 p-0 list-none">
            <li class="flex items-start gap-3">
              <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-0.5"></i>
              <span class="text-[14px] text-muted">Profile goes to 12+ competing insurers</span>
            </li>
            <li class="flex items-start gap-3">
              <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-0.5"></i>
              <span class="text-[14px] text-muted">WhatsApp quotes reflecting your new risk tier</span>
            </li>
            <li class="flex items-start gap-3">
              <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-0.5"></i>
              <span class="text-[14px] text-muted">Zero obligation to switch</span>
            </li>
            <li class="flex items-start gap-3">
              <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-0.5"></i>
              <span class="text-[14px] text-muted">Completely free &amp; POPIA-compliant</span>
            </li>
          </ul>
        </div>

        <div>
          <h4 class="font-heading text-[16px] font-bold text-primary mb-4">What you&rsquo;re NOT getting:</h4>
          <ul class="space-y-3 m-0 p-0 list-none">
            <li class="flex items-start gap-3">
              <i data-lucide="x-circle" class="w-[18px] h-[18px] text-red-400 shrink-0 mt-0.5"></i>
              <span class="text-[14px] text-muted">Spam calls from brokers</span>
            </li>
            <li class="flex items-start gap-3">
              <i data-lucide="x-circle" class="w-[18px] h-[18px] text-red-400 shrink-0 mt-0.5"></i>
              <span class="text-[14px] text-muted">Pressure tactics or &ldquo;limited-time offers&rdquo;</span>
            </li>
            <li class="flex items-start gap-3">
              <i data-lucide="x-circle" class="w-[18px] h-[18px] text-red-400 shrink-0 mt-0.5"></i>
              <span class="text-[14px] text-muted">Hidden fees or commission-inflated quotes</span>
            </li>
          </ul>
        </div>

      </div>

      <div id="insurance-form" class="bg-white border-2 border-primary p-6 md:p-12 rounded-[3px] mb-16 text-center shadow-2xl not-prose" style="border:2px solid #0F172A;">

        <div class="inline-flex items-center justify-center w-12 h-12 rounded-full mb-6 text-accent" style="background-color:rgba(245,158,11,0.1);">
          <i data-lucide="trending-down" class="w-[24px] h-[24px]"></i>
        </div>

        <h3 class="font-heading text-[20px] md:text-[24px] font-medium text-primary mb-3 md:mb-4">Get Your Tracker-Protected Insurance Quotes Now</h3>
        <p class="font-body text-[13px] md:text-[14px] text-muted mb-6 md:mb-8">90 seconds. 12+ competing insurers. R350&ndash;R650/month in potential savings.</p>

        <div class="space-y-3 md:space-y-4 max-w-md mx-auto">
          <form action="{{ route('car.insure.submit') }}" method="post" class="space-y-3">
            @csrf
            <input type="hidden" name="form_source" value="car_track_success" />

            <input
              type="text"
              class="w-full p-3 md:p-4 border border-border rounded-[3px] font-body text-[14px]"
              placeholder="First Name"
              name="firstname"
              required
            />
            <input
              type="text"
              class="w-full p-3 md:p-4 border border-border rounded-[3px] font-body text-[14px]"
              placeholder="Last Name"
              name="lastname"
              required
            />
            <input
              type="email"
              class="w-full p-3 md:p-4 border border-border rounded-[3px] font-body text-[14px]"
              placeholder="Email Address"
              name="email"
              required
            />
            <input
              type="tel"
              class="w-full p-3 md:p-4 border border-border rounded-[3px] font-body text-[14px]"
              placeholder="Phone Number"
              name="phone1"
              required
            />

            {{-- Gender --}}
            <select
              name="gender"
              required
              class="w-full p-3 md:p-4 border border-border rounded-[3px] font-body text-[14px] bg-white"
              aria-label="Gender"
            >
              <option value="" disabled selected>Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">I prefer not to say</option>
            </select>

            {{-- Current insurer --}}
            <select
              name="currentinsurer"
              class="w-full p-3 md:p-4 border border-border rounded-[3px] font-body text-[14px] bg-white"
              aria-label="Current insurer"
            >
              <option value="" disabled selected>Current Insurer (optional)</option>
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

            {{-- Vehicle make --}}
            <select
              name="vehiclemake"
              class="w-full p-3 md:p-4 border border-border rounded-[3px] font-body text-[14px] bg-white"
              aria-label="Vehicle make"
            >
              <option value="" disabled selected>Vehicle Make</option>
              <option value="Audi">Audi</option>
              <option value="AlfaRomeo">Alfa Romeo</option>
              <option value="BMW">BMW</option>
              <option value="Mercedes">Mercedes</option>
              <option value="Chevrolet">Chevrolet</option>
              <option value="Chrysler">Chrysler</option>
              <option value="Citroen">Citroen</option>
              <option value="Ferrari">Ferrari</option>
              <option value="Fiat">Fiat</option>
              <option value="Ford">Ford</option>
              <option value="Hyundai">Hyundai</option>
              <option value="Isuzu">Isuzu</option>
              <option value="Jaguar">Jaguar</option>
              <option value="Jeep">Jeep</option>
              <option value="TangeRover">Range Rover</option>
              <option value="Lexus">Lexus</option>
              <option value="mazda">Mazda</option>
              <option value="Mini">Mini</option>
              <option value="Mitsubishi">Mitsubishi</option>
              <option value="Nissan">Nissan</option>
              <option value="Opel">Opel</option>
              <option value="Peugeot">Peugeot</option>
              <option value="Renault">Renault</option>
              <option value="Subaru">Subaru</option>
              <option value="Suzuki">Suzuki</option>
              <option value="Toyota">Toyota</option>
              <option value="Volkswagen">Volkswagen</option>
              <option value="Kia">Kia</option>
              <option value="Volvo">Volvo</option>
              <option value="Honda">Honda</option>
              <option value="Mahindra">Mahindra</option>
              <option value="Other">Other</option>
            </select>

            {{-- Terms consent --}}
            <div class="flex items-start gap-3 text-left">
              <input
                id="tractup-terms"
                type="checkbox"
                name="acceptterms"
                value="true"
                required
                class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded mt-1"
              />
              <label for="tractup-terms" class="text-sm font-medium text-gray-900">
                I agree to the <a href="{{ route('terms') }}" class="text-blue-600 hover:underline">terms and conditions</a>
              </label>
            </div>

            <button
              type="submit"
              class="w-full py-4 md:py-5 bg-primary text-white font-heading font-bold rounded-full hover:bg-accent transition-colors black-button inline-flex items-center justify-center gap-2"
            >
              Get My Competitive Quotes Now
              <i data-lucide="arrow-right" class="w-[18px] h-[18px]"></i>
            </button>

            {{-- Hidden API fields — matching car-insure.blade.php exactly --}}
            <input type="hidden" name="optinurl"           value="https://searchadeal.online/" />
            <input type="hidden" name="optindate"          value="{{ date('Y-m-d h:i:s') }}" />
            <input type="hidden" name="channel"            value="JMAff" />
            <input type="hidden" name="language"           value="English" />
            <input type="hidden" name="product"            value="JMCar" />
            <input type="hidden" name="affiliateshortcode" value="JMAFFSite15022" />
            <input type="hidden" name="Leadsource"         value="JMLSSEARCHADEAL9020" />
            <input type="hidden" name="offer_id"           value="377" />
          </form>
        </div>

        <p class="mt-5 md:mt-6 font-body text-[10px] md:text-[11px] text-muted uppercase tracking-widest leading-relaxed">
          By submitting, you agree to be contacted by pre-screened insurance providers. Search A Deal is an affiliate platform earning referral fees. We do not provide insurance services. POPIA-compliant.
        </p>

        <p class="mt-5 font-body text-muted italic text-bold text-orange-700">
          <a href="{{ route('success') }}">I do not need Car Tracker Right Now</a>
        </p>

      </div>

      {{-- P.S. closing section --}}
      <div class="space-y-8 text-center border-t border-border pt-16 not-prose">
        <p class="font-body text-[14px] text-muted italic">
          <strong>P.S. The Tracker Is Handling Theft. But Who&rsquo;s Handling The Overpayment?</strong> You just invested in Elite-5 protection against vehicle theft. That&rsquo;s handled. But theft protection and financial efficiency are two different problems. Take 90 seconds to solve the second.
        </p>
        <p class="font-body text-[14px] text-muted italic">
          <strong>P.P.S. Your Tracker Provider Would Tell You The Same Thing:</strong> When they install your tracker next week, ask them: &ldquo;Do most customers shop their insurance after installing this?&rdquo; They&rsquo;ll say: &ldquo;The smart ones do. Immediately.&rdquo;
        </p>
        <p class="font-body text-[14px] text-muted italic">
          <strong>P.P.P.S. This Window Closes Faster Than You Think:</strong> Right now, you&rsquo;re a freshly tracker-protected customer. Insurers see that as: &ldquo;Motivated buyer. High-intent. Price aggressively.&rdquo; Six months from now? You&rsquo;re just another renewal.
        </p>
      </div>

    </div>
  </section>

</main>

@include('partials.tailwind_footer');
