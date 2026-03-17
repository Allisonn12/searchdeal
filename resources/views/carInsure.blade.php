{{-- Flash messages --}}
@if(session('success'))
  <div class="alert alert-success" role="alert">{{ session('success') }}</div>
@endif
@if(session('error'))
  <div class="alert alert-danger" role="alert">{{ session('error') }}</div>
@endif

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Complete Your Vehicle Protection | SearchADeal</title>

  {{-- Tailwind config — identical design tokens to tracker1 --}}
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
    .grey-bg      { background: #F8FAFC; }
    .light-orange { color: #312002; }
  </style>
</head>
<body class="min-h-screen flex flex-col relative bg-white">

{{-- ── Header — identical structure to tracker1 ── --}}
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
    <a href="{{ route('index') }}"          class="nav-item nav-link {{ Route::is('index')          ? 'active' : '' }}">Home</a>
    <a href="{{ route('car-insurance') }}"  class="nav-item nav-link {{ Route::is('car-insurance')  ? 'active' : '' }}">Car Insurance</a>
    <a href="{{ route('tracker1') }}"       class="nav-item nav-link {{ Route::is('tracker1')       ? 'active' : '' }}">Car Trackers</a>
    <a href="{{ route('tracker.loan') }}"   class="hover:text-accent transition-colors">Personal Loans</a>
  </nav>

  <div class="flex items-center gap-4">
    <div class="hidden md:flex items-center border border-primary rounded-full px-3 py-1 font-heading text-[10px] font-medium">
      <button type="button" class="px-1 opacity-50 hover:opacity-100 transition-opacity">FR</button>
      <span class="mx-1 opacity-30">|</span>
      <button type="button" class="px-1">EN</button>
    </div>
  </div>
</header>

{{-- Mobile menu drawer --}}
<div id="mobile-menu" class="md:hidden hidden fixed top-[58px] inset-x-0 z-40 bg-white border-b border-border shadow-sm">
  <div class="px-4 py-3 flex flex-col gap-3 font-heading text-[12px] uppercase">
    <a href="{{ route('index') }}"         class="py-2">Home</a>
    <a href="{{ route('car-insurance') }}" class="py-2">Car Insurance</a>
    <a href="{{ route('tracker1') }}"      class="py-2">Car Trackers</a>
    <a href="{{ route('tracker.loan') }}"  class="py-2">Personal Loans</a>
  </div>
</div>

{{-- ══════════════════ MAIN ══════════════════ --}}
<main class="flex-grow pt-[58px] bg-white">

  {{-- ── Hero Section ── --}}
  <section class="py-20 px-[14.5px] md:px-[58px] bg-background grey-bg">
    <div class="max-w-[1000px] mx-auto text-center">

      {{-- Urgency badge — bg-accent/10 via inline style for CDN Tailwind reliability --}}
      <div class="inline-flex items-center gap-2 px-4 py-2 text-accent rounded-full font-heading text-[12px] font-bold uppercase tracking-widest mb-8" style="background-color:rgba(245,158,11,0.1);">
        <i data-lucide="shield-alert" class="w-[16px] h-[16px]"></i>
        One Final Step: Complete Your Vehicle Protection
      </div>

      <h1 class="font-heading text-[clamp(36px,4.5vw,64px)] font-medium leading-[1.1] tracking-[-0.03em] text-primary mb-8">
        You Just Made One of the Smartest Decisions a South African Driver Can Make
      </h1>

      <p class="font-body text-[18px] text-muted max-w-3xl mx-auto mb-8 leading-relaxed">
        Congratulations. Seriously. By getting competitive insurance quotes from the Elite 5, you&rsquo;ve done something 94% of drivers never do: you&rsquo;ve forced insurers to compete for your business instead of settling for whatever renewal notice shows up.
      </p>

      <p class="font-body text-[16px] text-primary font-bold max-w-3xl mx-auto">
        That takes intelligence. Discipline. A refusal to overpay for identical coverage.
      </p>
    </div>
  </section>

  {{-- ── Editorial Content ── --}}
  <section class="py-20 px-[14.5px] md:px-[58px]">
    <div class="max-w-[800px] mx-auto prose prose-slate prose-lg">

      {{-- Dark callout box — "But here's what nobody tells you..." --}}
      <div class="p-8 rounded-[3px] mb-12 not-prose black-bg text-white">
        <h3 class="font-heading text-[24px] font-medium mb-4 text-white">
          But here&rsquo;s what nobody tells you about insurance savings&hellip;
        </h3>
        <p class="font-body text-[18px] italic m-0" style="opacity:0.9;">
          Insurance only protects you after something&rsquo;s already been taken.
        </p>
      </div>

      <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
        Think about it. The Reverse-Auction Match just saved you R400&ndash;R850/month by connecting you with providers who&rsquo;ll compensate you if your vehicle is stolen. But compensation isn&rsquo;t recovery.
      </p>

      {{-- Two-column: Compensation vs Recovery --}}
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12 not-prose">
        <div class="p-6 border border-border rounded-[3px] grey-bg">
          <div class="font-heading text-[16px] font-bold text-primary mb-3">Compensation is:</div>
          <p class="font-body text-[14px] text-muted m-0">Your car disappears, you file a claim, you wait 30 days, you get a payout minus excess, you spend weeks shopping for a replacement, you settle for something inferior because values have increased.</p>
        </div>
        <div class="p-6 rounded-[3px]" style="border:2px solid #F59E0B; background-color:rgba(245,158,11,0.05);">
          <div class="font-heading text-[16px] font-bold mb-3 text-accent">Recovery is:</div>
          <p class="font-body text-[14px] text-primary m-0">Your car is taken, your tracker activates, armed response is dispatched within minutes, your vehicle is recovered within hours, you drive it home the same day.</p>
        </div>
      </div>

      <p class="font-body text-[16px] text-primary font-bold mb-12 text-center">
        One gives you money eventually. The other gives you your actual car back immediately.
      </p>

      {{-- The R127,000 Gap --}}
      <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
        The Gap Between &ldquo;Insured&rdquo; and &ldquo;Protected&rdquo; Costs R127,000 on Average
      </h2>
      <p class="font-body text-[16px] text-muted leading-relaxed mb-8">
        When your insured vehicle is stolen and not recovered, here&rsquo;s the real cost:
      </p>

      <div class="p-8 rounded-[3px] border border-border mb-12 not-prose grey-bg">
        <div class="space-y-4 mb-6">

          <div class="flex items-start gap-4">
            <span class="font-heading text-[16px] font-bold text-red-500 shrink-0" style="width:80px;">R18,000:</span>
            <span class="font-body text-[15px] text-muted">Average insurance excess you pay out of pocket</span>
          </div>
          <div class="flex items-start gap-4">
            <span class="font-heading text-[16px] font-bold text-red-500 shrink-0" style="width:80px;">R47,000:</span>
            <span class="font-body text-[15px] text-muted">Value depreciation gap (what insurance pays vs. what replacement actually costs in 2025)</span>
          </div>
          <div class="flex items-start gap-4">
            <span class="font-heading text-[16px] font-bold text-red-500 shrink-0" style="width:80px;">R14,000:</span>
            <span class="font-body text-[15px] text-muted">Premium increase over the next 3 years (claims spike your risk profile)</span>
          </div>
          <div class="flex items-start gap-4">
            <span class="font-heading text-[16px] font-bold text-red-500 shrink-0" style="width:80px;">R22,000:</span>
            <span class="font-body text-[15px] text-muted">Replacement shopping costs (rental car, time off work, settlement delays)</span>
          </div>
          <div class="flex items-start gap-4">
            <span class="font-heading text-[16px] font-bold text-red-500 shrink-0" style="width:80px;">R26,000:</span>
            <span class="font-body text-[15px] text-muted">Intangible costs (violation, fear, psychological impact, lost personal items)</span>
          </div>

        </div>
        <div class="pt-4 border-t border-border">
          <p class="font-heading text-[18px] font-bold text-primary m-0">
            Total real cost: R127,000. For a vehicle insurance &ldquo;replaced.&rdquo;
          </p>
        </div>
      </div>

      <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
        Meanwhile, if that same vehicle had been recovered intact within hours:
      </p>

      {{-- Recovery cost = R0 box —  border-accent/20 via inline style --}}
      <div class="p-8 rounded-[3px] mb-12 not-prose" style="background-color:rgba(245,158,11,0.1); border:1px solid rgba(245,158,11,0.2);">
        <div class="space-y-2 mb-6">
          <div class="flex items-center gap-3">
            <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0"></i>
            <span class="font-body text-[15px] text-primary"><strong>R0:</strong> No excess paid (no claim filed)</span>
          </div>
          <div class="flex items-center gap-3">
            <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0"></i>
            <span class="font-body text-[15px] text-primary"><strong>R0:</strong> No depreciation loss (you kept your car)</span>
          </div>
          <div class="flex items-center gap-3">
            <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0"></i>
            <span class="font-body text-[15px] text-primary"><strong>R0:</strong> No premium spike (no claim on record)</span>
          </div>
          <div class="flex items-center gap-3">
            <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0"></i>
            <span class="font-body text-[15px] text-primary"><strong>R0:</strong> No replacement hassle</span>
          </div>
          <div class="flex items-center gap-3">
            <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0"></i>
            <span class="font-body text-[15px] text-primary"><strong>R0:</strong> No psychological violation</span>
          </div>
        </div>
        <div class="pt-4" style="border-top:1px solid rgba(245,158,11,0.2);">
          <p class="font-heading text-[18px] font-bold text-primary m-0">
            Total real cost: R0. Plus you still have your car.
          </p>
        </div>
      </div>

      {{-- The Completion Principle --}}
      <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
        The Completion Principle
      </h2>
      <p class="font-body text-[16px] text-muted leading-relaxed mb-8">
        You just unlocked competitive insurance pricing. That&rsquo;s massive. But think about what you actually secured:
      </p>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16 not-prose">
        <div>
          <h4 class="font-heading text-[16px] font-bold text-primary mb-4">What you secured:</h4>
          <ul class="space-y-3 m-0 p-0 list-none">
            <li class="flex items-start gap-3">
              <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-0.5"></i>
              <span class="text-[14px] text-muted">Financial protection if your vehicle disappears permanently</span>
            </li>
            <li class="flex items-start gap-3">
              <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-0.5"></i>
              <span class="text-[14px] text-muted">Lower premiums because insurers competed for you</span>
            </li>
            <li class="flex items-start gap-3">
              <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-0.5"></i>
              <span class="text-[14px] text-muted">Better coverage terms from elite providers</span>
            </li>
          </ul>
        </div>
        <div>
          <h4 class="font-heading text-[16px] font-bold text-primary mb-4">What you haven&rsquo;t secured yet:</h4>
          <ul class="space-y-3 m-0 p-0 list-none">
            <li class="flex items-start gap-3">
              <i data-lucide="x-circle" class="w-[18px] h-[18px] text-red-400 shrink-0 mt-0.5"></i>
              <span class="text-[14px] text-muted">The ability to stop a theft in progress</span>
            </li>
            <li class="flex items-start gap-3">
              <i data-lucide="x-circle" class="w-[18px] h-[18px] text-red-400 shrink-0 mt-0.5"></i>
              <span class="text-[14px] text-muted">Real-time location tracking if your car is taken</span>
            </li>
            <li class="flex items-start gap-3">
              <i data-lucide="x-circle" class="w-[18px] h-[18px] text-red-400 shrink-0 mt-0.5"></i>
              <span class="text-[14px] text-muted">Armed response coordination with SAPS</span>
            </li>
            <li class="flex items-start gap-3">
              <i data-lucide="x-circle" class="w-[18px] h-[18px] text-red-400 shrink-0 mt-0.5"></i>
              <span class="text-[14px] text-muted">Recovery infrastructure that works at 2 AM on a Sunday</span>
            </li>
          </ul>
        </div>
      </div>

      {{-- SAPS Stats --}}
      <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
        The Brutal Reality: 63% of Stolen Vehicles in South Africa Are Never Recovered Intact
      </h2>
      <div class="p-8 rounded-[3px] border-l-4 border-primary mb-12 not-prose grey-bg">
        <p class="font-body text-[15px] text-muted mb-4"><strong>SAPS data, 2024:</strong> 48 vehicles stolen per day in Gauteng alone. That&rsquo;s one every 30 minutes. Of those stolen vehicles:</p>
        <ul class="space-y-2 mb-4">
          <li class="text-[14px] text-muted">&bull; 37% are never found (disappeared into chop shops, across borders, or stripped for parts)</li>
          <li class="text-[14px] text-muted">&bull; 26% are found burned or stripped (recovered, but totaled)</li>
          <li class="text-[14px] text-primary font-bold">&bull; Only 37% are recovered intact, and most of those had active tracking systems</li>
        </ul>
      </div>

      {{-- Recovery Completion System --}}
      <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
        Introducing: The Recovery Completion System
      </h2>
      <p class="font-body text-[16px] text-muted leading-relaxed mb-8">
        You&rsquo;ve already experienced The Reverse-Auction Match for insurance. Now you get the same process for tracker quotes.
      </p>

      <div class="space-y-8 mb-16 not-prose">

        <div class="p-6 border border-border rounded-[3px]">
          <h4 class="font-heading text-[18px] font-bold text-primary mb-2">Step 1: One More 60-Second Form</h4>
          <p class="font-body text-[15px] text-muted m-0">Vehicle details, location, preferred contact method. You&rsquo;ve done this once already. Same process.</p>
        </div>

        <div class="p-6 border border-border rounded-[3px]">
          <h4 class="font-heading text-[18px] font-bold text-primary mb-2">Step 2: Your Profile Reaches the Elite 5 Tracker Providers Simultaneously</h4>
          <p class="font-body text-[15px] text-muted m-0">Not 12 random resellers. The same 5 established leaders you&rsquo;d find if you spent 3 weeks researching on your own: 10+ years in business, verified SAPS partnerships, 24/7 live monitoring.</p>
        </div>

        <div class="p-6 border border-border rounded-[3px]">
          <h4 class="font-heading text-[18px] font-bold text-primary mb-2">Step 3: Between 3-5 Elite Providers Contact You Within Minutes</h4>
          <p class="font-body text-[15px] text-muted m-0">Same strategic filtering as the insurance quotes: Geographic specialization, vehicle expertise, and current capacity.</p>
        </div>

        <div class="p-6 border border-border rounded-[3px]">
          <h4 class="font-heading text-[18px] font-bold text-primary mb-2">Step 4: You Compare, Choose, and Complete Your Protection</h4>
          <p class="font-body text-[15px] text-muted m-0">Ask the 5 strategic questions. Compare quotes. Choose the provider with the best combination of price, features, and recovery strength. Most providers install within 7&ndash;10 days.</p>
        </div>

      </div>

      {{-- Synergy box — dark background --}}
      <div class="p-12 rounded-[3px] mb-16 text-center not-prose black-bg text-white">
        <h3 class="font-heading text-[28px] font-medium mb-6 text-white">The Synergy Nobody Talks About</h3>
        <p class="font-body text-[16px] mb-8" style="opacity:0.9;">
          When you have both competitive insurance and elite tracking installed, your insurance premiums drop even further. Insurers reward tracked vehicles with premium discounts (typically 10&ndash;15%).
        </p>

        {{-- Savings breakdown card inside dark section --}}
        <div class="max-w-md mx-auto p-6 rounded-[3px] text-left" style="background-color:rgba(255,255,255,0.1);">
          <div class="flex justify-between mb-2">
            <span style="opacity:0.8;">Insurance savings:</span>
            <span>R600/mo</span>
          </div>
          <div class="flex justify-between mb-2">
            <span style="opacity:0.8;">Tracker discount:</span>
            <span>+ R180/mo</span>
          </div>
          <div class="flex justify-between mb-2 pb-2" style="border-bottom:1px solid rgba(255,255,255,0.2);">
            <span style="opacity:0.8;">Tracker fee:</span>
            <span>- R220/mo</span>
          </div>
          <div class="flex justify-between mt-2 font-bold text-[18px]">
            <span>Net savings:</span>
            <span class="text-accent">R560/mo</span>
          </div>
        </div>

        <p class="mt-6 font-body text-[14px] italic" style="opacity:0.8;">
          You&rsquo;re saving more money while being more protected.
        </p>
      </div>

      {{-- ── Form Section ── --}}
      {{-- id="tracker-form" — form_source=car_track_upsell redirects to success route --}}
      <div id="tracker-form" class="bg-white border-2 border-primary p-6 md:p-12 rounded-[3px] mb-16 text-center shadow-2xl not-prose" style="border:2px solid #0F172A;">

        {{-- Shield icon badge --}}
        <div class="inline-flex items-center justify-center w-12 h-12 rounded-full mb-6 text-accent" style="background-color:rgba(245,158,11,0.1);">
          <i data-lucide="shield-check" class="w-[24px] h-[24px]"></i>
        </div>

        <h3 class="font-heading text-[20px] md:text-[24px] font-medium text-primary mb-3 md:mb-4">🔒 Get Elite Tracker Quotes Now (Final Step)</h3>
        <p class="font-body text-[13px] md:text-[14px] text-muted mb-6 md:mb-8">Same process. Same Elite 5. Complete protection.</p>

        <div class="space-y-3 md:space-y-4 max-w-md mx-auto">
          {{-- TrackerController@store: form_source=car_track_upsell → redirects to route('success') --}}
          <form action="{{ route('tracker.submit') }}" method="post" class="space-y-3">
            @csrf
            <input type="hidden" name="form_source" value="car_track_upsell" />

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

            {{-- Terms consent --}}
            <div class="flex items-start gap-3 text-left">
              <input
                id="carinsure-terms"
                type="checkbox"
                name="acceptterms"
                value="true"
                required
                class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded mt-1"
              />
              <label for="carinsure-terms" class="text-sm font-medium text-gray-900">
                I agree to the <a href="{{ route('terms') }}" class="text-blue-600 hover:underline">terms and conditions</a>
              </label>
            </div>

            <div>
              <button
                type="submit"
                class="w-full py-4 md:py-5 bg-primary text-white font-heading font-bold rounded-full hover:bg-accent transition-colors black-button inline-flex items-center justify-center gap-2"
              >
                Complete Your Protection Now
                <i data-lucide="arrow-right" class="w-[18px] h-[18px]"></i>
              </button>
            </div>

            {{-- Hidden API fields — identical values to tracker1 --}}
            <input type="hidden" name="optinurl"            value="https://searchadeal.online/" />
            <input type="hidden" name="optindate"           value="{{ date('d/m/y H:i:s') }}" />
            <input type="hidden" name="channel"             value="JMAff" />
            <input type="hidden" name="product"             value="Vehicle Tracking" />
            <input type="hidden" name="leadsource"          value="JMLSSEARCHADEAL9020" />
            <input type="hidden" name="affiliateshortcode"  value="JMAFFSite15019" />
            <input type="hidden" name="offer_id"            value="1523" />
          </form>
        </div>

        <p class="mt-5 md:mt-6 font-body text-[10px] md:text-[11px] text-muted uppercase tracking-widest leading-relaxed">
          By submitting, you agree to be contacted by pre-screened elite tracker providers. SearchADeal is an affiliate platform and earns a commission if you choose to install. We do not provide installation services.
        </p>
      </div>

      {{-- FAQ --}}
      <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
        Questions You&rsquo;re Probably Asking
      </h2>
      <div class="space-y-6 mb-16 not-prose">

        <div class="pb-6 border-b border-border">
          <div class="font-heading text-[16px] font-bold text-primary mb-2">Didn&rsquo;t I just do this for insurance? Why am I filling out another form?</div>
          <p class="font-body text-[14px] text-muted m-0">Because insurance and tracking are sourced from different provider networks. The Elite 5 insurers you just connected with don&rsquo;t install trackers. This is the final piece to complete your vehicle protection system.</p>
        </div>

        <div class="pb-6 border-b border-border">
          <div class="font-heading text-[16px] font-bold text-primary mb-2">Is this actually necessary, or are you just upselling me?</div>
          <p class="font-body text-[14px] text-muted m-0">If you&rsquo;re comfortable with your vehicle being compensated (eventually) rather than recovered (immediately), you don&rsquo;t need this. But if the idea of losing your car permanently feels unacceptable, then yes, this is necessary. Insurance without recovery is financial protection without physical protection.</p>
        </div>

        <div class="pb-6 border-b border-border">
          <div class="font-heading text-[16px] font-bold text-primary mb-2">Can I just research trackers on my own in a few weeks?</div>
          <p class="font-body text-[14px] text-muted m-0">You can. But three weeks from now, the urgency fades. You delay. Meanwhile, 48 vehicles per day are being stolen in Gauteng alone. The Recovery Completion System exists to eliminate that delay right now.</p>
        </div>

        <div class="pb-0">
          <div class="font-heading text-[16px] font-bold text-primary mb-2">What if I get quotes and none of them fit my budget?</div>
          <p class="font-body text-[14px] text-muted m-0">Then you decline and move on. Zero obligation. But most drivers discover their insurance savings more than cover the tracker monitoring fees.</p>
        </div>

      </div>

      {{-- P.S. closing statements --}}
      <div class="space-y-8 text-center border-t border-border pt-16 not-prose">
        <p class="font-body text-[14px] text-muted italic">
          <strong>P.S. The One Statistic That Changes Everything:</strong> Vehicles with elite tracking systems are 3.7x more likely to be recovered intact within 24 hours. Vehicles without tracking are 2.4x more likely to be found stripped, burned, or never found at all.
        </p>
        <p class="font-body text-[14px] text-muted italic">
          <strong>P.P.S. The Real Cost of &ldquo;I&rsquo;ll Handle It Later&rdquo;:</strong> If your vehicle is stolen next month and not recovered, the total cost is R79,000+ for a vehicle that was insured but not tracked. Cost of adding elite tracking today: R220/month, funded by the insurance savings you just secured.
        </p>
      </div>

    </div>
  </section>

</main>

{{-- ── Footer — identical to tracker1 ── --}}
<footer class="relative min-h-[40vh] md:min-h-[60vh] flex items-end mt-12 md:mt-20">
  <div class="absolute inset-0 z-0">
    <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?auto=format&fit=crop&q=80&w=1600" alt="Abstract Background" class="w-full h-full object-cover" />
    <div class="absolute inset-0 bg-black/40 backdrop-blur-sm"></div>
  </div>

  <div class="relative z-10 w-full max-w-[1400px] mx-auto bg-white p-5 md:p-[58px] pb-[22px]">
    <div class="mb-8 md:mb-12 p-4 md:p-6 bg-background rounded-[3px] border border-border">
      <h5 class="font-heading text-[10px] md:text-[11px] font-bold uppercase tracking-wider text-primary mb-2 md:mb-4">Important Disclosure</h5>
      <p class="font-body text-[12px] text-muted leading-relaxed">
        SearchADeal is not a registered financial services provider, insurer, or credit provider. We operate as an affiliate comparison platform connecting consumers with registered providers. For tracking services, pricing, contracts, installation windows, and recovery outcomes remain subject to each provider&rsquo;s independent assessment and service availability.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-12 gap-8 md:gap-12 mb-12 md:mb-16">
      <div class="md:col-span-4 flex flex-col items-start">
        <div class="font-heading font-bold text-2xl md:text-3xl tracking-tighter mb-6 md:mb-8">SearchADeal</div>
        <a href="{{ route('contact') }}" class="w-full sm:w-auto px-6 md:px-8 py-3 rounded-full border border-primary font-heading text-[14px] md:text-[15px] hover:bg-primary hover:text-white transition-colors text-center">
          Contact us
        </a>
      </div>

      <div class="md:col-span-8 grid grid-cols-2 md:grid-cols-3 gap-6 md:gap-8">
        <div class="flex flex-col gap-3 md:gap-4">
          <h5 class="font-heading text-[10px] md:text-[11px] font-bold uppercase tracking-wider text-primary mb-1 md:mb-2">Services</h5>
          <a href="{{ route('car-insurance') }}" class="font-heading text-[14px] md:text-[15px] text-primary hover:text-accent transition-colors">Car Insurance</a>
          <a href="{{ route('tracker1') }}"       class="font-heading text-[14px] md:text-[15px] text-primary hover:text-accent transition-colors">Car Trackers</a>
          <a href="{{ route('tracker.loan') }}"   class="font-heading text-[14px] md:text-[15px] text-primary hover:text-accent transition-colors">Personal Loans</a>
        </div>
        <div class="flex flex-col gap-3 md:gap-4">
          <h5 class="font-heading text-[10px] md:text-[11px] font-bold uppercase tracking-wider text-primary mb-1 md:mb-2">Company</h5>
          <a href="#tracker-form"          class="font-heading text-[14px] md:text-[15px] text-primary hover:text-accent transition-colors">How It Works</a>
          <a href="{{ route('contact') }}"  class="font-heading text-[14px] md:text-[15px] text-primary hover:text-accent transition-colors">Contact</a>
          <a href="{{ route('policy') }}"   class="font-heading text-[14px] md:text-[15px] text-primary hover:text-accent transition-colors">Privacy</a>
        </div>
        <div class="flex flex-col items-start md:items-end gap-4">
          <a href="#" class="w-10 md:w-12 h-10 md:h-12 rounded-full border border-primary flex items-center justify-center hover:bg-primary hover:text-white transition-colors group" aria-label="LinkedIn">
            <i data-lucide="linkedin" class="w-[18px] md:w-[20px] h-[18px] md:h-[20px] text-primary group-hover:text-white transition-colors"></i>
          </a>
        </div>
      </div>
    </div>

    <div class="pt-6 md:pt-8 border-t border-border flex flex-col md:flex-row justify-between items-center gap-3 md:gap-4 font-body text-[12px] md:text-[13px] text-muted">
      <div class="flex flex-wrap justify-center gap-4 md:gap-6">
        <a href="{{ route('policy') }}" class="hover:text-primary transition-colors">Privacy Policy</a>
        <a href="{{ route('terms') }}"  class="hover:text-primary transition-colors">Terms of Use</a>
        <a href="{{ route('policy') }}" class="hover:text-primary transition-colors">POPIA Compliance</a>
      </div>
      <span>&copy; <span id="current-year"></span> SearchADeal</span>
    </div>
  </div>
</footer>

{{-- Lucide icon init — identical to tracker1 --}}
<script src="https://unpkg.com/lucide@latest"></script>
<script>
  document.getElementById('current-year').textContent = new Date().getFullYear()
  if (window.lucide && typeof window.lucide.createIcons === 'function') {
    window.lucide.createIcons()
  }
</script>
</body>
</html>
