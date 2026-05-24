@include('partials.tailwind_header', ['title' => 'Car Tracker - SearchADeal'])

<main class="flex-grow pt-[58px] bg-white">

  {{-- ===================== HERO SECTION ===================== --}}
  <section class="pt-16 pb-12">
    <div class="max-w-[768px] mx-auto px-6 text-center">

      <p class="text-accent uppercase font-bold text-[13px] md:text-[14px] tracking-[0.08em] mb-4 font-heading">
        The South African Standard
      </p>

      <h1 class="text-primary text-4xl md:text-6xl font-bold leading-[1.05] tracking-[-0.02em] mb-6 font-heading">
        The 5 Tracker Companies Every Security-Conscious South African Driver Trusts
      </h1>
      <p class="text-primary text-[18px] md:text-[22px] font-bold leading-[1.4] mb-8 max-w-2xl mx-auto font-heading">
        (But Can&rsquo;t Easily Compare Without Getting Buried in Sales Calls)
      </p>

      {{-- Full-bleed hero image --}}
      <div class="w-[100vw] relative left-1/2 -translate-x-1/2 mt-8 mb-8">
        <img
          src="https://billboardads.digitalcavemen.com/wp-content/uploads/2026/04/Car-Tracker-Hero-Image.png"
          alt="Car Tracker Hero"
          class="w-full h-auto object-cover"
        />
      </div>

      <p class="text-muted text-[20px] md:text-[24px] italic leading-[1.4] max-w-2xl mx-auto mb-10 font-body">
        Here&rsquo;s what nobody tells you about choosing a car tracker in South Africa: The established leaders don&rsquo;t need to spam you. We help you connect with them directly, without the noise.
      </p>

      <a
        href="#tracker-quotes-form"
        style="background: #E23E3E"
        class="inline-block bg-accent hover:bg-amber-600 text-white font-bold text-[18px] md:text-[20px] py-4 px-8 rounded-lg shadow-lg transition-colors w-full md:w-auto tracking-[0.01em] font-heading"
      >
        Get Quotes From South Africa&rsquo;s Elite 5 &rarr;
      </a>

    </div>
  </section>

  {{-- ===================== EDITORIAL CONTENT ===================== --}}
  <section class="py-12">
    <div class="max-w-2xl mx-auto px-6">

      {{-- ---- Section: Reality of Theft ---- --}}
      <p class="text-accent uppercase font-bold text-[13px] tracking-[0.08em] mb-3 font-heading">
        THE REALITY OF THEFT
      </p>
      <h2 class="text-primary text-[26px] md:text-[32px] font-bold leading-[1.15] tracking-[-0.01em] mb-6 font-heading">
        The day you realize &ldquo;protected&rdquo; doesn&rsquo;t mean what you thought
      </h2>

      <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] mb-5 font-body">
        Gauteng, 2024. 48 vehicles stolen per day. That&rsquo;s one every 30 minutes. Western Cape isn&rsquo;t far behind. Durban&rsquo;s chop shop network is more sophisticated than ever. And 63% of &ldquo;recovered&rdquo; vehicles are found stripped, burned, or across a border.
      </p>

      <img
        src="https://billboardads.digitalcavemen.com/wp-content/uploads/2026/04/THE-RISK-REALITY-IMAGE-VARIENT-A.png"
        alt="48 vehicles stolen per day"
        class="w-full h-auto mb-8 mt-6 rounded-lg shadow-sm"
      />

      <p class="text-primary text-[17px] md:text-[20px] font-bold mb-8 leading-[1.65] font-heading">
        The difference between &ldquo;gone forever&rdquo; and &ldquo;recovered in hours&rdquo; isn&rsquo;t luck. It&rsquo;s three things:
      </p>

      <div class="space-y-4 mb-12">
        <div class="flex items-start gap-4 p-5 bg-background border border-border rounded-lg shadow-sm grey-bg">
          <i data-lucide="check-circle-2" class="w-6 h-6 text-accent shrink-0 mt-0.5"></i>
          <p class="text-[16px] md:text-[18px] m-0 text-primary leading-[1.5] font-body">A tracker installed correctly the first time (not &ldquo;we&rsquo;ll come back next week&rdquo;)</p>
        </div>
        <div class="flex items-start gap-4 p-5 bg-background border border-border rounded-lg shadow-sm grey-bg">
          <i data-lucide="check-circle-2" class="w-6 h-6 text-accent shrink-0 mt-0.5"></i>
          <p class="text-[16px] md:text-[18px] m-0 text-primary leading-[1.5] font-body">A 24/7 monitoring center that responds in minutes, not business hours</p>
        </div>
        <div class="flex items-start gap-4 p-5 bg-background border border-border rounded-lg shadow-sm grey-bg">
          <i data-lucide="check-circle-2" class="w-6 h-6 text-accent shrink-0 mt-0.5"></i>
          <p class="text-[16px] md:text-[18px] m-0 text-primary leading-[1.5] font-body">A recovery team with actual SAPS relationships and armed response integration</p>
        </div>
      </div>

      {{-- Horror story callout --}}
      <div class="flex flex-col md:flex-row items-center gap-8 mb-16 mt-16 border-t-[4px] border-accent p-8" style="background: rgba(245,158,11,0.06);">
        <div class="w-full md:w-[60%]">
          <p class="text-[20px] md:text-[24px] text-primary italic leading-[1.6] m-0 font-bold font-body opacity-90">
            &ldquo;She called us six months later. The car was never found.&rdquo;
          </p>
        </div>
        <div class="w-full md:w-[40%]">
          <img
            src="https://billboardads.digitalcavemen.com/wp-content/uploads/2026/04/Horror-story-Image-Varient-A.png"
            alt="Car recovery failure"
            class="w-full h-auto object-cover rounded-lg shadow-sm"
          />
        </div>
      </div>

      <hr class="border-t border-border my-12">

      {{-- ---- Section: Comparison Site Trap ---- --}}
      <h2 class="text-primary text-[26px] md:text-[32px] font-bold leading-[1.15] tracking-[-0.01em] mb-8 font-heading">
        The comparison site trap
      </h2>

      <div class="flex flex-col md:flex-row gap-8 items-start mb-12">
        <img
          src="https://billboardads.digitalcavemen.com/wp-content/uploads/2026/04/THE-COMPARISON-CHAOS-IMAGE-Varient-B.png"
          alt="Comparison Chaos"
          class="w-full md:w-[40%] object-cover rounded-lg shadow-sm"
        />
        <div class="w-full md:w-[60%]">
          <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] mb-5 font-body">
            You&rsquo;ve probably tried this before. You Google &ldquo;best car tracker South Africa.&rdquo; You see 47 listicles. You click &ldquo;Get Free Quotes.&rdquo; Then the nightmare starts.
          </p>
          <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] mb-5 font-body">
            Eight different reps call within 20 minutes. Same script. Different prices. Half of them are resellers who&rsquo;ve never installed a tracker in their lives.
          </p>
        </div>
      </div>

      <div class="mb-12">
        <ul class="space-y-4 mb-8 m-0 p-0 list-none">
          <li class="flex items-start gap-4">
            <i data-lucide="x-circle" class="w-[20px] h-[20px] text-red-500 shrink-0 mt-0.5"></i>
            <p class="text-[17px] md:text-[18px] text-muted m-0 leading-[1.5] font-body">Calling insurers individually (and getting quotes based on assumptions)</p>
          </li>
          <li class="flex items-start gap-4">
            <i data-lucide="x-circle" class="w-[20px] h-[20px] text-red-500 shrink-0 mt-0.5"></i>
            <p class="text-[17px] md:text-[18px] text-muted m-0 leading-[1.5] font-body">Using a comparison site (and getting bombarded by 12 call centers)</p>
          </li>
          <li class="flex items-start gap-4">
            <i data-lucide="x-circle" class="w-[20px] h-[20px] text-red-500 shrink-0 mt-0.5"></i>
            <p class="text-[17px] md:text-[18px] text-muted m-0 leading-[1.5] font-body">Asking a broker (who only pushes the one brand they have a deal with)</p>
          </li>
        </ul>

        <div class="pl-4 border-l-[4px] border-accent">
          <p class="text-primary text-[20px] md:text-[24px] italic leading-[1.4] m-0 font-body">
            &ldquo;I&rsquo;ll compare properly next month&rdquo; becomes next quarter. Next quarter becomes never. Meanwhile, your car stays unprotected.
          </p>
        </div>
      </div>

      {{-- Provider Intelligence Engine dark card --}}
      <div class="text-white p-10 rounded-lg mb-16 shadow-sm" style="background: #0F172A;">
        <h3 class="text-[20px] md:text-[24px] tracking-[-0.01em] font-bold mb-6 text-white leading-[1.2] font-heading">
          Introducing: The Provider Intelligence Engine&trade;
        </h3>
        <p class="text-[17px] md:text-[18px] opacity-90 mb-8 leading-[1.6] font-body">
          We evaluate every tracker company in South Africa against 7 non-negotiable performance criteria. Only 5 companies currently qualify:
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 gap-x-6 border-t pt-6" style="border-color: rgba(255,255,255,0.2);">
          <div class="flex items-center gap-3">
            <i data-lucide="shield" class="w-[20px] h-[20px] text-accent shrink-0"></i>
            <span class="text-[16px] font-bold tracking-wide font-heading">10+ years in business</span>
          </div>
          <div class="flex items-center gap-3">
            <i data-lucide="shield" class="w-[20px] h-[20px] text-accent shrink-0"></i>
            <span class="text-[16px] font-bold tracking-wide font-heading">Top-tier market position</span>
          </div>
          <div class="flex items-center gap-3">
            <i data-lucide="shield" class="w-[20px] h-[20px] text-accent shrink-0"></i>
            <span class="text-[16px] font-bold tracking-wide font-heading">Verified SAPS partnerships</span>
          </div>
          <div class="flex items-center gap-3">
            <i data-lucide="shield" class="w-[20px] h-[20px] text-accent shrink-0"></i>
            <span class="text-[16px] font-bold tracking-wide font-heading">24/7 monitoring centers</span>
          </div>
          <div class="flex items-center gap-3">
            <i data-lucide="shield" class="w-[20px] h-[20px] text-accent shrink-0"></i>
            <span class="text-[16px] font-bold tracking-wide font-heading">Proven recovery infrastructure</span>
          </div>
          <div class="flex items-center gap-3">
            <i data-lucide="shield" class="w-[20px] h-[20px] text-accent shrink-0"></i>
            <span class="text-[16px] font-bold tracking-wide font-heading">No reseller middlemen</span>
          </div>
          <div class="flex items-center gap-3">
            <i data-lucide="shield" class="w-[20px] h-[20px] text-accent shrink-0"></i>
            <span class="text-[16px] font-bold tracking-wide font-heading">Transparent contract terms</span>
          </div>
        </div>
      </div>

      <hr class="border-t border-border my-12">

      {{-- ---- Section: Process Timeline ---- --}}
      <h2 class="text-primary text-[26px] md:text-[32px] font-bold leading-[1.15] tracking-[-0.01em] mb-10 text-center font-heading">
        How it works (no surprises, no games)
      </h2>

      <div class="space-y-12 mb-16 relative">
        {{-- Vertical connector line on desktop --}}
        <div class="absolute left-[15px] top-6 bottom-12 w-[1px] bg-border hidden md:block"></div>

        <div class="flex flex-col md:flex-row gap-6 relative z-10">
          <div class="w-8 h-8 bg-primary text-white rounded-full items-center justify-center font-bold text-[16px] shrink-0 mt-1 hidden md:flex font-heading">1</div>
          <div>
            <h3 class="text-primary text-[22px] md:text-[24px] font-bold mb-3 font-heading">Secure Form</h3>
            <p class="text-primary text-[18px] leading-[1.65] m-0 font-body">Takes 60 seconds. Basic vehicle and location details. Fully POPIA compliant.</p>
          </div>
        </div>

        <div class="flex flex-col md:flex-row gap-6 relative z-10">
          <div class="w-8 h-8 bg-primary text-white rounded-full items-center justify-center font-bold text-[16px] shrink-0 mt-1 hidden md:flex font-heading">2</div>
          <div>
            <h3 class="text-primary text-[22px] md:text-[24px] font-bold mb-3 font-heading">Simultaneous Matching</h3>
            <p class="text-primary text-[18px] leading-[1.65] m-0 font-body">Your info goes directly to the top 5 elite providers. No brokers. No middlemen.</p>
          </div>
        </div>

        <div class="flex flex-col md:flex-row gap-6 relative z-10">
          <div class="w-8 h-8 bg-primary text-white rounded-full items-center justify-center font-bold text-[16px] shrink-0 mt-1 hidden md:flex font-heading">3</div>
          <div>
            <h3 class="text-primary text-[22px] md:text-[24px] font-bold mb-3 font-heading">Strategic Consultation</h3>
            <p class="text-primary text-[18px] leading-[1.65] m-0 font-body">3&ndash;5 providers contact you within minutes to provide personalized quotes based on your exact area dynamics.</p>
          </div>
        </div>

        <div class="flex flex-col md:flex-row gap-6 relative z-10">
          <div class="w-8 h-8 bg-primary text-white rounded-full items-center justify-center font-bold text-[16px] shrink-0 mt-1 hidden md:flex font-heading">4</div>
          <div>
            <h3 class="text-primary text-[22px] md:text-[24px] font-bold mb-3 font-heading">Informed Choice</h3>
            <p class="text-primary text-[18px] leading-[1.65] m-0 font-body">Compare price, installation speed, and recovery strength. You decide who wins your business.</p>
          </div>
        </div>
      </div>

      <hr class="border-t border-border my-12">

      {{-- ---- Section: 5 Questions ---- --}}
      <h2 class="text-primary text-[26px] md:text-[32px] font-bold leading-[1.15] tracking-[-0.01em] mb-10 text-center font-heading">
        The 5 questions that separate real protection
      </h2>

      <div class="bg-background border border-border p-8 rounded-lg mb-16 shadow-sm grey-bg">
        <div class="space-y-6">
          <div class="border-b border-border pb-6">
            <div class="text-[18px] md:text-[20px] font-bold text-primary mb-2 font-heading">Q: What&rsquo;s your average recovery time in my specific suburb?</div>
            <p class="text-[16px] text-muted leading-[1.5] m-0 font-body"><strong class="text-primary">A:</strong> Listen for specific data, not vague promises.</p>
          </div>
          <div class="border-b border-border pb-6">
            <div class="text-[18px] md:text-[20px] font-bold text-primary mb-2 font-heading">Q: Is installation fully included in this quote?</div>
            <p class="text-[16px] text-muted leading-[1.5] m-0 font-body"><strong class="text-primary">A:</strong> Avoid hidden on-site charges for &ldquo;complex wiring.&rdquo;</p>
          </div>
          <div class="border-b border-border pb-6">
            <div class="text-[18px] md:text-[20px] font-bold text-primary mb-2 font-heading">Q: What&rsquo;s your activation guarantee process?</div>
            <p class="text-[16px] text-muted leading-[1.5] m-0 font-body"><strong class="text-primary">A:</strong> Ensure the system is tested before the installer leaves.</p>
          </div>
          <div class="border-b border-border pb-6">
            <div class="text-[18px] md:text-[20px] font-bold text-primary mb-2 font-heading">Q: Do you offer 24/7 live monitoring?</div>
            <p class="text-[16px] text-muted leading-[1.5] m-0 font-body"><strong class="text-primary">A:</strong> Verify it&rsquo;s a staffed center, not just automated alerts.</p>
          </div>
          <div class="pb-0">
            <div class="text-[18px] md:text-[20px] font-bold text-primary mb-2 font-heading">Q: What are your contract and cancellation terms?</div>
            <p class="text-[16px] text-muted leading-[1.5] m-0 font-body"><strong class="text-primary">A:</strong> Look for fair notice periods and no &ldquo;totaled car&rdquo; penalties.</p>
          </div>
        </div>
      </div>

      {{-- Pre-form CTA --}}
      <div class="text-center mt-12 mb-16">
        <p class="text-[20px] md:text-[24px] text-primary font-bold leading-[1.4] font-heading">
          Invest 127 seconds right now.<br>
          <span class="text-accent">Close the gap, before you become a statistic.</span>
        </p>
      </div>

      {{-- ===================== FORM SECTION ===================== --}}
      <div id="tracker-quotes-form" class="bg-background border-2 border-border p-8 md:p-12 rounded-lg mb-16 text-center shadow-2xl relative mt-16 max-w-xl mx-auto grey-bg">

        {{-- Floating "QUOTE ENGINE" badge --}}
        <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-white px-4">
          <span
            class="text-[13px] font-bold uppercase tracking-widest text-accent px-3 py-1 rounded-full inline-flex items-center gap-1 font-heading"
            style="background: rgba(245,158,11,0.1);"
          >
            <i data-lucide="help-circle" class="w-[14px] h-[14px]"></i> QUOTE ENGINE
          </span>
        </div>

        <h3 class="text-[24px] md:text-[28px] font-bold text-primary mb-4 mt-2 tracking-[-0.01em] font-heading">
          Get Quotes From the Elite 5 Now
        </h3>
        <p class="text-[15px] md:text-[16px] text-muted mb-8 italic font-body">
          60-second form &bull; 3&ndash;5 elite providers &bull; Real protection
        </p>

        <form action="{{ route('tracker.submit') }}" method="POST" class="space-y-6 max-w-md mx-auto text-left">
          @csrf
          <input type="hidden" name="form_source" value="car_track_landing">

          {{-- Step 1: Vehicle type --}}
          <div class="space-y-2">
            <label class="font-heading text-[14px] font-bold text-primary block">1. What do you drive?</label>
            <select name="vehicletype" required class="w-full p-4 border border-border rounded-[3px] font-body text-[14px] bg-white focus:outline-none focus:border-accent">
              <option value="">Select vehicle type...</option>
              <option value="sedan">Sedan</option>
              <option value="suv">SUV or 4&times;4</option>
              <option value="bakkie">Bakkie</option>
              <option value="hatchback">Hatchback</option>
              <option value="other">Other</option>
            </select>
          </div>

          {{-- Step 2: Primary need --}}
          <div class="space-y-2">
            <label class="font-heading text-[14px] font-bold text-primary block">2. What is your primary need?</label>
            <select name="primaryneed" required class="w-full p-4 border border-border rounded-[3px] font-body text-[14px] bg-white focus:outline-none focus:border-accent">
              <option value="">Select primary need...</option>
              <option value="stolen">Stolen vehicle recovery</option>
              <option value="insurance">Insurance requirement</option>
              <option value="monitoring">Driver monitoring (family/business)</option>
              <option value="other">Other</option>
            </select>
          </div>

          {{-- Step 3: Parking security --}}
          <div class="space-y-2">
            <label class="font-heading text-[14px] font-bold text-primary block">3. Where is the vehicle parked securely?</label>
            <select name="parkingsecurity" required class="w-full p-4 border border-border rounded-[3px] font-body text-[14px] bg-white focus:outline-none focus:border-accent">
              <option value="">Select parking...</option>
              <option value="garage">Locked Garage</option>
              <option value="locked-gate">Locked Gate/Driveway</option>
              <option value="street">On the Street</option>
              <option value="complex">Secure Complex/Estate</option>
            </select>
          </div>

          {{-- Contact details --}}
          <div class="pt-6 space-y-4 border-t border-border">
            <p class="font-body text-[14px] text-primary font-bold mb-2">Where should we send your quotes?</p>
            <input
              required
              type="text"
              name="firstname"
              placeholder="First Name"
              class="w-full p-4 border border-border rounded-[3px] font-body text-[14px] bg-white focus:outline-none focus:border-accent"
            />
            <input
              required
              type="text"
              name="lastname"
              placeholder="Last Name"
              class="w-full p-4 border border-border rounded-[3px] font-body text-[14px] bg-white focus:outline-none focus:border-accent"
            />
            <input
              required
              type="email"
              name="email"
              placeholder="Email Address"
              class="w-full p-4 border border-border rounded-[3px] font-body text-[14px] bg-white focus:outline-none focus:border-accent"
            />
            <input
              required
              type="tel"
              name="phone1"
              placeholder="Phone Number"
              class="w-full p-4 border border-border rounded-[3px] font-body text-[14px] bg-white focus:outline-none focus:border-accent"
            />
          </div>

          {{-- Terms checkbox --}}
          <div class="flex items-start gap-3 text-left mt-3">
            <input
              id="tracker-terms"
              required
              name="acceptterms"
              value="true"
              type="checkbox"
              class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded mt-1"
            >
            <label for="tracker-terms" class="text-sm font-medium text-gray-900 font-body">
              I agree to the <a href="{{ route('terms') }}" class="text-blue-600 hover:underline">terms and conditions</a>
            </label>
          </div>

          {{-- Submit button --}}
          <button
            type="submit"
            class="w-full py-5 mt-2 bg-primary text-white font-heading font-bold rounded-full hover:bg-accent transition-colors flex flex-col items-center justify-center gap-1 black-button"
          >
            <div class="flex items-center gap-2 text-[18px] uppercase">
              Get My Quotes Now
              <i data-lucide="arrow-right" class="w-[20px] h-[20px]"></i>
            </div>
            <span class="text-[12px] font-normal opacity-80 font-body">From The Elite 5 Providers</span>
          </button>

          {{-- Hidden CRM / campaign fields --}}
          <input type="hidden" name="optinurl" value="https://searchadeal.online/">
          <input type="hidden" name="optindate" value="{{ date('d/m/y H:i:s') }}">
          <input type="hidden" name="channel" value="JMAff">
          <input type="hidden" name="product" value="Vehicle Tracking">
          <input type="hidden" name="leadsource" value="JMLSSEARCHADEAL9020">
          <input type="hidden" name="affiliateshortcode" value="JMAFFSite15019">
          <input type="hidden" name="offer_id" value="1523">
        </form>

        <p class="mt-8 text-[11px] md:text-[12px] text-muted uppercase tracking-widest font-bold leading-relaxed font-heading">
          Search A Deal &bull; POPIA-Compliant &bull; Built in South Africa
        </p>
      </div>

      <hr class="border-t border-border my-12">

      {{-- ---- Closing: Leaders Act While Others Delay ---- --}}
      <div class="text-center mb-16">
        <p class="text-accent uppercase font-bold text-[13px] tracking-[0.08em] mb-4 font-heading">
          THE BOTTOM LINE
        </p>
        <h2 class="text-primary text-[26px] md:text-[32px] font-bold mb-6 tracking-[-0.01em] font-heading">
          Leaders Act While Others Delay
        </h2>
        <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] max-w-2xl mx-auto font-body">
          Every day you delay is another day your asset is unprotected. The Elite 5 are waiting. Your quotes are 60 seconds away. Make the call.
        </p>
      </div>

    </div>
  </section>

</main>

@include('partials.tailwind_footer')
