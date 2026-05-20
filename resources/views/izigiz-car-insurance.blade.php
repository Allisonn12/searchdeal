@include('partials.tailwind_header', ['title' => $campaignName . ' — SearchADeal'])

<!-- Mobile menu -->
<div id="mobile-menu" class="md:hidden hidden fixed top-[58px] inset-x-0 z-40 bg-white border-b border-border shadow-sm">
  <div class="px-4 py-3 flex flex-col gap-3 font-heading text-[12px] uppercase">
    <a href="{{ route('index') }}" class="py-2">Home</a>
    <a href="{{ route('car-insurance') }}" class="py-2">Car Insurance</a>
    <a href="{{ route('tracker1') }}" class="py-2">Car Trackers</a>
    <a href="{{ route('loans') }}" class="py-2">Personal Loans</a>
  </div>
</div>

<main class="flex-grow pt-[58px]">

  {{-- ─── Hero ─────────────────────────────────────────────────────────────── --}}
  <section class="pt-16 pb-12">
    <div class="max-w-[768px] mx-auto px-6 text-center">

      <p class="text-accent uppercase font-bold text-[13px] md:text-[14px] tracking-[0.08em] mb-4">
        The South African Standard
      </p>

      <h1 class="font-heading text-4xl md:text-6xl font-bold leading-[1.05] tracking-[-0.02em] text-primary mb-6">
        The Car Insurance Providers South African Drivers Trust — But Can&rsquo;t Easily Compare
      </h1>

      <p class="font-heading text-[20px] md:text-[24px] font-bold text-primary leading-[1.4] mb-6">
        (Without Getting Buried in Sales Calls and Generic Quotes)
      </p>

      <p class="font-body text-[20px] md:text-[24px] text-muted italic leading-[1.4] max-w-2xl mx-auto mb-10">
        {{ $campaignTagline }}
      </p>

      <div class="flex flex-col md:flex-row items-center justify-center gap-6 mb-12">
        <div class="flex items-center gap-2 font-body text-[14px] text-muted">
          <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent"></i>
          <span class="font-medium text-primary">Completely free</span>
        </div>
        <div class="flex items-center gap-2 font-body text-[14px] text-muted">
          <i data-lucide="clock" class="w-[18px] h-[18px] text-accent"></i>
          <span class="font-medium text-primary">Under 60 seconds</span>
        </div>
        <div class="flex items-center gap-2 font-body text-[14px] text-muted">
          <i data-lucide="zap" class="w-[18px] h-[18px] text-accent"></i>
          <span class="font-medium text-primary">Top-rated insurers only</span>
        </div>
      </div>

      <a
        href="#izigiz-form"
        class="bg-accent hover:bg-amber-600 text-white font-heading font-bold text-[18px] md:text-[20px] py-4 px-8 rounded-lg transition-colors inline-flex items-center justify-center gap-2 w-full md:w-auto"
      >
        Compare Car Insurance Quotes Now
        <i data-lucide="arrow-right" class="w-[20px] h-[20px]"></i>
      </a>

    </div>
  </section>

  {{-- ─── Editorial Content ─────────────────────────────────────────────────── --}}
  <section class="py-12">
    <div class="max-w-2xl mx-auto px-6">

      <p class="text-accent uppercase font-bold text-[13px] tracking-[0.08em] mb-3">THE COST OF BEING UNDERINSURED</p>
      <h2 class="font-heading text-[26px] md:text-[32px] font-bold leading-[1.15] tracking-[-0.01em] text-primary mb-6">
        Paying too much — or worse, not enough
      </h2>
      <p class="font-body text-[17px] md:text-[20px] text-primary leading-[1.65] mb-5">
        Millions of South African drivers are either overpaying for car insurance or carrying a policy that
        won&rsquo;t pay out when it matters most. Rising premiums, hidden exclusions, and opaque claims
        processes make choosing the right insurer harder than it should be.
      </p>

      <p class="font-heading text-[17px] md:text-[20px] text-primary font-bold mb-8 leading-[1.65]">
        The difference between a payout and a rejection often comes down to three things:
      </p>

      <div class="space-y-4 mb-12">
        <div class="flex items-start gap-4 p-5 bg-background border border-border rounded-lg grey-bg shadow-sm">
          <i data-lucide="check-circle-2" class="w-[22px] h-[22px] text-accent shrink-0 mt-1"></i>
          <p class="font-body text-[16px] md:text-[18px] m-0 text-primary leading-[1.5]">Choosing a policy with the right level of cover for your vehicle and lifestyle</p>
        </div>
        <div class="flex items-start gap-4 p-5 bg-background border border-border rounded-lg grey-bg shadow-sm">
          <i data-lucide="shield" class="w-[22px] h-[22px] text-accent shrink-0 mt-1"></i>
          <p class="font-body text-[16px] md:text-[18px] m-0 text-primary leading-[1.5]">Working with an insurer that has a verified, fast claims process — not one that stalls</p>
        </div>
        <div class="flex items-start gap-4 p-5 bg-background border border-border rounded-lg grey-bg shadow-sm">
          <i data-lucide="trending-down" class="w-[22px] h-[22px] text-accent shrink-0 mt-1"></i>
          <p class="font-body text-[16px] md:text-[18px] m-0 text-primary leading-[1.5]">Not overpaying — getting a personalised rate based on your actual risk profile</p>
        </div>
      </div>

      {{-- Callout --}}
      <div class="flex flex-col md:flex-row items-center gap-8 mb-16 mt-16 border-t-[4px] border-accent p-8" style="background: rgba(245,158,11,0.06)">
        <div class="w-full md:w-[60%]">
          <p class="font-body text-[20px] md:text-[24px] text-primary italic leading-[1.6] m-0 font-bold opacity-90">
            &ldquo;I only realised I was underinsured when I needed to claim.&rdquo;
          </p>
        </div>
        <div class="w-full md:w-[40%]">
          <div class="w-full h-[160px] bg-gray-100 rounded-lg flex items-center justify-center text-muted text-sm">
            Car Insurance
          </div>
        </div>
      </div>

      <hr class="border-t border-border my-12">

      {{-- Comparison trap --}}
      <h2 class="font-heading text-[26px] md:text-[32px] font-bold leading-[1.15] tracking-[-0.01em] text-primary mb-8">
        The comparison site trap
      </h2>

      <div class="mb-12">
        <ul class="space-y-4 mb-8 m-0 p-0 list-none">
          <li class="flex items-start gap-4">
            <i data-lucide="x-circle" class="w-[20px] h-[20px] text-red-500 shrink-0 mt-1"></i>
            <p class="font-body text-[17px] md:text-[18px] text-muted m-0 leading-[1.5]">Calling insurers individually — spending hours on hold for a generic quote</p>
          </li>
          <li class="flex items-start gap-4">
            <i data-lucide="x-circle" class="w-[20px] h-[20px] text-red-500 shrink-0 mt-1"></i>
            <p class="font-body text-[17px] md:text-[18px] text-muted m-0 leading-[1.5]">Using a comparison portal — getting sold to by 10 brokers who have your number</p>
          </li>
          <li class="flex items-start gap-4">
            <i data-lucide="x-circle" class="w-[20px] h-[20px] text-red-500 shrink-0 mt-1"></i>
            <p class="font-body text-[17px] md:text-[18px] text-muted m-0 leading-[1.5]">Staying on the same policy for years — while your premium quietly inflates</p>
          </li>
        </ul>

        <div class="pl-4 border-l-[4px] border-accent">
          <p class="font-body text-[20px] md:text-[24px] text-primary italic leading-[1.4] m-0">
            &ldquo;I&rsquo;ll sort my insurance next month&rdquo; turns into years of overpaying — or worse, a rejected claim.
          </p>
        </div>
      </div>

      {{-- How it works --}}
      <h2 class="font-heading text-[26px] md:text-[32px] font-bold leading-[1.15] tracking-[-0.01em] text-primary mb-10 text-center">
        How it works (no surprises, no games)
      </h2>

      <div class="space-y-12 mb-16 relative">
        <div class="absolute left-[15px] top-6 bottom-12 w-[1px] bg-border hidden md:block"></div>

        @foreach ([
          ['Quick Form',           'Takes 60 seconds. Vehicle details and your contact info. Fully POPIA compliant.'],
          ['Provider Matching',    'Your details go directly to verified South African car insurers. No brokers. No middlemen.'],
          ['Personalised Quotes',  'Consultants contact you with quotes tailored to your vehicle, area, and driving profile.'],
          ['You Choose',           'Compare premiums, cover levels, and excess structures. You decide who earns your business.'],
        ] as $i => $step)
        <div class="flex flex-col md:flex-row gap-6 relative z-10">
          <div class="w-8 h-8 bg-primary text-white rounded-full flex items-center justify-center font-bold text-[16px] shrink-0 mt-1 hidden md:flex">
            {{ $i + 1 }}
          </div>
          <div>
            <h3 class="font-heading text-[22px] md:text-[24px] font-bold text-primary mb-3">{{ $step[0] }}</h3>
            <p class="font-body text-[17px] md:text-[18px] text-muted leading-[1.65] m-0">{{ $step[1] }}</p>
          </div>
        </div>
        @endforeach
      </div>

      <hr class="border-t border-border my-12">

      {{-- 5 Questions --}}
      <h2 class="font-heading text-[26px] md:text-[32px] font-bold leading-[1.15] tracking-[-0.01em] text-primary mb-10 text-center">
        5 questions to ask every insurer before you sign
      </h2>

      <div class="bg-background p-8 rounded-lg border border-border mb-16 grey-bg shadow-sm">
        <div class="space-y-6">
          @foreach ([
            ['What is the exact excess on a theft claim for my vehicle?',           'Get the number in writing — not a range.'],
            ['Is my vehicle covered for its market value or retail value?',          'These can differ by tens of thousands of rands.'],
            ['What is your average claim settlement time?',                          'Ask for a specific SLA, not &ldquo;as soon as possible&rdquo;.'],
            ['Are my accessories and aftermarket items covered?',                    'Dashcams, sound systems, and rims are often excluded by default.'],
            ['What are the cancellation terms and penalty fees?',                    'Avoid policies that lock you in with punitive exit clauses.'],
          ] as $i => $faq)
          <div class="{{ $i < 4 ? 'border-b border-border pb-6' : 'pb-0' }}">
            <div class="font-heading text-[18px] md:text-[20px] font-bold text-primary mb-2 flex items-start gap-2">
              <i data-lucide="help-circle" class="w-[18px] h-[18px] text-accent shrink-0 mt-1"></i>
              {!! $faq[0] !!}
            </div>
            <p class="font-body text-[15px] text-muted m-0 pl-7">{!! $faq[1] !!}</p>
          </div>
          @endforeach
        </div>
      </div>

      {{-- Pre-form urgency --}}
      <div class="text-center mt-12 mb-16">
        <p class="font-heading text-[20px] md:text-[24px] text-primary font-bold leading-[1.4]">
          60 seconds now.<br>
          <span class="text-accent">The right cover before the next time you need it.</span>
        </p>
      </div>

      {{-- ─── Izigiz Quote Form ───────────────────────────────────────────────── --}}
      <div
        id="izigiz-form"
        class="bg-white border-2 border-primary p-8 md:p-12 rounded-lg mb-16 text-center shadow-2xl relative mt-16 max-w-xl mx-auto"
        style="border: 2px solid #0F172A"
      >
        {{-- Floating badge --}}
        <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-white px-4">
          <span class="text-[12px] font-bold uppercase tracking-widest text-accent px-3 py-1 rounded-full bg-amber-50 border border-accent/30 inline-flex items-center gap-1">
            <i data-lucide="shield-check" class="w-[13px] h-[13px]"></i>
            QUOTE ENGINE
          </span>
        </div>

        <h3 class="font-heading text-[22px] md:text-[26px] font-bold text-primary mb-3 mt-2 tracking-[-0.01em]">
          Get Your Car Insurance Quotes Now
        </h3>
        <p class="font-body text-[14px] md:text-[15px] text-muted mb-8 italic">
          60-second form &bull; Verified insurers &bull; Real quotes
        </p>

        <form
          action="{{ route($formRoute) }}"
          method="post"
          class="space-y-4 max-w-md mx-auto text-left"
        >
          @csrf

          {{-- Step 1: Vehicle details --}}
          <p class="font-heading text-[13px] font-bold text-primary uppercase tracking-widest pt-2 pb-1 border-b border-border">
            Step 1 — Your Vehicle
          </p>

          <div class="grid grid-cols-2 gap-3">
            <div>
              <label for="iz-carmake" class="font-body text-[12px] font-bold text-muted uppercase tracking-wide block mb-1">Make</label>
              <input
                type="text"
                id="iz-carmake"
                name="car_make"
                placeholder="e.g. Toyota"
                class="w-full p-3 border border-border rounded-[3px] font-body text-[14px] bg-white focus:outline-none focus:border-accent"
              />
            </div>
            <div>
              <label for="iz-carmodel" class="font-body text-[12px] font-bold text-muted uppercase tracking-wide block mb-1">Model</label>
              <input
                type="text"
                id="iz-carmodel"
                name="car_model"
                placeholder="e.g. Fortuner"
                class="w-full p-3 border border-border rounded-[3px] font-body text-[14px] bg-white focus:outline-none focus:border-accent"
              />
            </div>
          </div>

          <div class="grid grid-cols-2 gap-3">
            <div>
              <label for="iz-caryear" class="font-body text-[12px] font-bold text-muted uppercase tracking-wide block mb-1">Year</label>
              <input
                type="number"
                id="iz-caryear"
                name="car_year"
                placeholder="e.g. 2021"
                min="1970"
                max="{{ date('Y') + 1 }}"
                class="w-full p-3 border border-border rounded-[3px] font-body text-[14px] bg-white focus:outline-none focus:border-accent"
              />
            </div>
            <div>
              <label for="iz-carusage" class="font-body text-[12px] font-bold text-muted uppercase tracking-wide block mb-1">Usage</label>
              <select
                id="iz-carusage"
                name="car_usage"
                class="w-full p-3 border border-border rounded-[3px] font-body text-[14px] bg-white focus:outline-none focus:border-accent h-[46px]"
              >
                <option value="">Select&hellip;</option>
                <option value="Private">Private</option>
                <option value="Business">Business</option>
                <option value="Private/Business">Private &amp; Business</option>
              </select>
            </div>
          </div>

          {{-- Step 2: Contact details --}}
          <p class="font-heading text-[13px] font-bold text-primary uppercase tracking-widest pt-4 pb-1 border-b border-border">
            Step 2 — Your Details
          </p>

          <div class="grid grid-cols-2 gap-3">
            <div>
              <label for="iz-firstname" class="font-body text-[12px] font-bold text-muted uppercase tracking-wide block mb-1">First name <span class="text-red-500">*</span></label>
              <input
                type="text"
                id="iz-firstname"
                name="firstname"
                placeholder="First name"
                required
                class="w-full p-3 border border-border rounded-[3px] font-body text-[14px] bg-white focus:outline-none focus:border-accent"
              />
            </div>
            <div>
              <label for="iz-lastname" class="font-body text-[12px] font-bold text-muted uppercase tracking-wide block mb-1">Last name <span class="text-red-500">*</span></label>
              <input
                type="text"
                id="iz-lastname"
                name="lastname"
                placeholder="Last name"
                required
                class="w-full p-3 border border-border rounded-[3px] font-body text-[14px] bg-white focus:outline-none focus:border-accent"
              />
            </div>
          </div>

          <div>
            <label for="iz-phone" class="font-body text-[12px] font-bold text-muted uppercase tracking-wide block mb-1">Phone number <span class="text-red-500">*</span></label>
            <input
              type="tel"
              id="iz-phone"
              name="phone1"
              placeholder="e.g. 0821234567"
              required
              class="w-full p-3 border border-border rounded-[3px] font-body text-[14px] bg-white focus:outline-none focus:border-accent"
            />
          </div>

          <div>
            <label for="iz-email" class="font-body text-[12px] font-bold text-muted uppercase tracking-wide block mb-1">Email address</label>
            <input
              type="email"
              id="iz-email"
              name="email"
              placeholder="you@example.com"
              class="w-full p-3 border border-border rounded-[3px] font-body text-[14px] bg-white focus:outline-none focus:border-accent"
            />
          </div>

          <div class="grid grid-cols-2 gap-3">
            <div>
              <label for="iz-dob" class="font-body text-[12px] font-bold text-muted uppercase tracking-wide block mb-1">Date of birth</label>
              <input
                type="date"
                id="iz-dob"
                name="date_of_birth"
                class="w-full p-3 border border-border rounded-[3px] font-body text-[14px] bg-white focus:outline-none focus:border-accent"
              />
            </div>
            <div>
              <label for="iz-calltime" class="font-body text-[12px] font-bold text-muted uppercase tracking-wide block mb-1">Best time to call</label>
              <select
                id="iz-calltime"
                name="preferred_call_time"
                class="w-full p-3 border border-border rounded-[3px] font-body text-[14px] bg-white focus:outline-none focus:border-accent h-[46px]"
              >
                <option value="">Anytime</option>
                <option value="08h00">08h00 – 09h00</option>
                <option value="09h00">09h00 – 10h00</option>
                <option value="10h00">10h00 – 11h00</option>
                <option value="11h00">11h00 – 12h00</option>
                <option value="12h00">12h00 – 13h00</option>
                <option value="13h00">13h00 – 14h00</option>
                <option value="14h00">14h00 – 15h00</option>
                <option value="15h00">15h00 – 16h00</option>
                <option value="16h00">16h00 – 17h00</option>
              </select>
            </div>
          </div>

          {{-- Terms --}}
          <div class="flex items-start gap-3 pt-2">
            <input
              id="iz-terms"
              type="checkbox"
              name="acceptterms"
              value="true"
              required
              class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded mt-1 shrink-0"
            />
            <label for="iz-terms" class="font-body text-[13px] font-medium text-gray-700">
              I agree to the <a href="{{ route('terms') }}" class="text-blue-600 hover:underline" target="_blank">terms and conditions</a>
            </label>
          </div>

          {{-- Validation error summary --}}
          @if ($errors->any())
          <div class="bg-red-50 border border-red-200 rounded-[3px] p-4">
            <ul class="list-none m-0 p-0 space-y-1">
              @foreach ($errors->all() as $error)
              <li class="font-body text-[13px] text-red-700 flex items-start gap-2">
                <i data-lucide="alert-circle" class="w-[14px] h-[14px] shrink-0 mt-0.5"></i>
                {{ $error }}
              </li>
              @endforeach
            </ul>
          </div>
          @endif

          <button
            type="submit"
            class="w-full py-4 mt-2 bg-primary text-white font-heading font-bold rounded-full hover:bg-accent transition-colors flex flex-col items-center justify-center gap-1 black-button"
          >
            <span class="flex items-center gap-2 text-[17px] uppercase">
              Get My Insurance Quotes
              <i data-lucide="arrow-right" class="w-[18px] h-[18px]"></i>
            </span>
            <span class="font-body text-[12px] font-normal opacity-75">From Verified SA Insurers</span>
          </button>
        </form>

        <p class="mt-8 font-body text-[11px] md:text-[12px] text-muted uppercase tracking-widest font-bold leading-relaxed">
          Search A Deal &bull; POPIA-Compliant &bull; Built in South Africa
        </p>
      </div>

      <hr class="border-t border-border my-12">

      {{-- Closing CTA --}}
      <div class="text-center mb-16">
        <p class="text-accent uppercase font-bold text-[13px] tracking-[0.08em] mb-4">THE BOTTOM LINE</p>
        <h2 class="font-heading text-[26px] md:text-[32px] font-bold text-primary mb-6 tracking-[-0.01em]">
          The Right Policy is 60 Seconds Away
        </h2>
        <p class="font-body text-[17px] md:text-[20px] text-muted leading-[1.65] max-w-2xl mx-auto mb-10">
          Every month on the wrong policy is money wasted — or worse, cover that won&rsquo;t hold up when you need it.
          Verified insurers are waiting. Your personalised quotes are 60 seconds away.
        </p>
        <a
          href="#izigiz-form"
          class="bg-accent hover:bg-amber-600 text-white font-heading font-bold text-[16px] py-4 px-8 rounded-lg transition-colors inline-flex items-center gap-2"
        >
          Get My Quotes Now
          <i data-lucide="arrow-right" class="w-[18px] h-[18px]"></i>
        </a>
      </div>

    </div>
  </section>

</main>

@include('partials.tailwind_footer')
