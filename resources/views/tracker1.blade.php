@include('partials.tailwind_header', ['title' => 'Car Tracker - SearchADeal']);

<main class="flex-grow pt-[58px] bg-white">
  <section class="py-14 md:py-20 px-[14.5px] md:px-[58px] bg-background grey-bg">
    <div class="max-w-[1000px] mx-auto text-center">
      <h1 class="font-heading text-[clamp(36px,4.5vw,64px)] font-medium leading-[1.1] tracking-[-0.03em] text-primary mb-8">
        The 5 Tracker Companies Every Security-Conscious South African Driver Trusts
        <span class="text-accent text-[0.7em] block mt-4">(But Can't Easily Compare Without Getting Buried in Sales Calls)</span>
      </h1>
      <p class="font-body text-[18px] text-muted max-w-3xl mx-auto mb-12 leading-relaxed">
        Here's what nobody tells you about choosing a car tracker in South Africa: The established leaders don't need to spam you. We help you connect with them directly, without the noise.
      </p>
      <a
        href="#tracker-form"
        class="w-full sm:w-auto px-8 md:px-10 py-4 md:py-5 bg-primary text-white rounded-full font-heading text-[15px] md:text-[16px] font-bold hover:bg-accent transition-all group inline-flex items-center justify-center gap-3 md:gap-4 mx-auto black-button"
      >
        Get Quotes From South Africa's Elite 5
        <i data-lucide="arrow-right" class="w-[18px] md:w-[20px] h-[18px] md:h-[20px] group-hover:translate-x-1 transition-transform"></i>
      </a>
    </div>
  </section>

  <section class="py-20 px-[14.5px] md:px-[58px]">
    <div class="max-w-[800px] mx-auto prose prose-slate prose-lg">
      <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
        The Day You Realize &ldquo;Protected&rdquo; Doesn't Mean What You Thought
      </h2>
      <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
        Gauteng, 2024. 48 vehicles stolen per day. That's one every 30 minutes. Western Cape isn't far behind. Durban's chop shop network is more sophisticated than ever. And 63% of &ldquo;recovered&rdquo; vehicles are found stripped, burned, or across a border.
      </p>
      <p class="font-body text-[16px] text-primary font-bold mb-8">
        The difference between &ldquo;gone forever&rdquo; and &ldquo;recovered in hours&rdquo; isn't luck. It's three things:
      </p>
      <div class="space-y-4 mb-12">
        <div class="flex items-start gap-4 p-4 bg-background rounded-[3px] grey-bg">
          <i data-lucide="check-circle-2" class="w-[20px] h-[20px] text-accent shrink-0 mt-1"></i>
          <p class="font-body text-[15px] m-0 text-primary">A tracker installed correctly the first time (not &ldquo;we'll come back next week&rdquo;)</p>
        </div>
        <div class="flex items-start gap-4 p-4 bg-background rounded-[3px] grey-bg">
          <i data-lucide="radio" class="w-[20px] h-[20px] text-accent shrink-0 mt-1"></i>
          <p class="font-body text-[15px] m-0 text-primary">A 24/7 monitoring center that responds in minutes, not business hours</p>
        </div>
        <div class="flex items-start gap-4 p-4 bg-background rounded-[3px] grey-bg">
          <i data-lucide="map-pin" class="w-[20px] h-[20px] text-accent shrink-0 mt-1"></i>
          <p class="font-body text-[15px] m-0 text-primary">A recovery team with actual SAPS relationships and armed response integration</p>
        </div>
      </div>

      <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
        The Comparison Site Trap
      </h2>
      <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
        You've probably tried this before. You Google &ldquo;best car tracker South Africa.&rdquo; You see 47 listicles. You click &ldquo;Get Free Quotes.&rdquo; Then the nightmare starts. Eight different reps call within 20 minutes. Same script. Different prices. Half of them are resellers who've never installed a tracker in their lives.
      </p>
      <p class="font-body text-[16px] text-muted leading-relaxed mb-12 italic">
        &ldquo;I'll compare properly next month&rdquo; becomes next quarter. Next quarter becomes never. Meanwhile, your car stays unprotected.
      </p>

      <div class="bg-primary text-white p-12 rounded-[3px] mb-16 black-button">
        <h3 class="font-heading text-[24px] font-medium mb-6 text-white">
          Introducing: The Provider Intelligence Engine&trade;
        </h3>
        <p class="font-body text-[15px] opacity-80 mb-8">
          We evaluate every tracker company in South Africa against 7 non-negotiable performance criteria. Only 5 companies currently qualify:
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div class="flex items-center gap-3">
            <i data-lucide="shield" class="w-[16px] h-[16px] text-accent"></i>
            <span class="font-body text-[14px]">10+ years in business</span>
          </div>
          <div class="flex items-center gap-3">
            <i data-lucide="shield" class="w-[16px] h-[16px] text-accent"></i>
            <span class="font-body text-[14px]">Top-tier market position</span>
          </div>
          <div class="flex items-center gap-3">
            <i data-lucide="shield" class="w-[16px] h-[16px] text-accent"></i>
            <span class="font-body text-[14px]">Verified SAPS partnerships</span>
          </div>
          <div class="flex items-center gap-3">
            <i data-lucide="shield" class="w-[16px] h-[16px] text-accent"></i>
            <span class="font-body text-[14px]">24/7 monitoring centers</span>
          </div>
          <div class="flex items-center gap-3">
            <i data-lucide="shield" class="w-[16px] h-[16px] text-accent"></i>
            <span class="font-body text-[14px]">Proven recovery infrastructure</span>
          </div>
          <div class="flex items-center gap-3">
            <i data-lucide="shield" class="w-[16px] h-[16px] text-accent"></i>
            <span class="font-body text-[14px]">No reseller middlemen</span>
          </div>
          <div class="flex items-center gap-3">
            <i data-lucide="shield" class="w-[16px] h-[16px] text-accent"></i>
            <span class="font-body text-[14px]">Transparent contract terms</span>
          </div>
        </div>
      </div>

      <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
        How It Works (No Surprises, No Games)
      </h2>
      <div class="space-y-8 md:space-y-12 mb-16">
        <div class="flex flex-col sm:flex-row gap-3 sm:gap-8">
          <div class="font-heading text-[36px] sm:text-[40px] font-bold text-accent/20 leading-none"><span class="light-orange">01</span></div>
          <div>
            <h4 class="font-heading text-[18px] sm:text-[20px] font-medium text-primary mb-2 flex items-center gap-2">
              <i data-lucide="lock" class="w-[18px] h-[18px] text-accent"></i>
              Secure Form
            </h4>
            <p class="font-body text-[15px] text-muted m-0">Takes 60 seconds. Basic vehicle and location details.</p>
          </div>
        </div>
        <div class="flex flex-col sm:flex-row gap-3 sm:gap-8">
          <div class="font-heading text-[36px] sm:text-[40px] font-bold text-accent/20 leading-none">02</div>
          <div>
            <h4 class="font-heading text-[18px] sm:text-[20px] font-medium text-primary mb-2 flex items-center gap-2">
              <i data-lucide="bell" class="w-[18px] h-[18px] text-accent"></i>
              Simultaneous Matching
            </h4>
            <p class="font-body text-[15px] text-muted m-0">Your info goes directly to the top 5 elite providers. No brokers.</p>
          </div>
        </div>
        <div class="flex flex-col sm:flex-row gap-3 sm:gap-8">
          <div class="font-heading text-[36px] sm:text-[40px] font-bold text-accent/20 leading-none">03</div>
          <div>
            <h4 class="font-heading text-[18px] sm:text-[20px] font-medium text-primary mb-2 flex items-center gap-2">
              <i data-lucide="radio" class="w-[18px] h-[18px] text-accent"></i>
              Strategic Consultation
            </h4>
            <p class="font-body text-[15px] text-muted m-0">3-5 providers contact you within minutes to provide personalized quotes.</p>
          </div>
        </div>
        <div class="flex flex-col sm:flex-row gap-3 sm:gap-8">
          <div class="font-heading text-[36px] sm:text-[40px] font-bold text-accent/20 leading-none">04</div>
          <div>
            <h4 class="font-heading text-[18px] sm:text-[20px] font-medium text-primary mb-2 flex items-center gap-2">
              <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent"></i>
              Informed Choice
            </h4>
            <p class="font-body text-[15px] text-muted m-0">Compare price, installation speed, and recovery strength. You decide.</p>
          </div>
        </div>
      </div>

      <div class="bg-background p-12 rounded-[3px] border border-border mb-16 grey-bg">
        <h3 class="font-heading text-[24px] font-medium text-primary mb-8">The 5 Questions That Separate Real Protection</h3>
        <div class="space-y-6">
          <div class="border-b border-border pb-6">
            <div class="font-heading text-[16px] font-bold text-primary mb-2 flex items-center gap-2">
              <i data-lucide="help-circle" class="w-[16px] h-[16px] text-accent"></i>
              What's your average recovery time in my specific suburb?
            </div>
            <p class="font-body text-[14px] text-muted m-0">Listen for specific data, not vague promises.</p>
          </div>
          <div class="border-b border-border pb-6">
            <div class="font-heading text-[16px] font-bold text-primary mb-2 flex items-center gap-2">
              <i data-lucide="help-circle" class="w-[16px] h-[16px] text-accent"></i>
              Is installation fully included in this quote?
            </div>
            <p class="font-body text-[14px] text-muted m-0">Avoid hidden on-site charges for &ldquo;complex wiring.&rdquo;</p>
          </div>
          <div class="border-b border-border pb-6">
            <div class="font-heading text-[16px] font-bold text-primary mb-2 flex items-center gap-2">
              <i data-lucide="help-circle" class="w-[16px] h-[16px] text-accent"></i>
              What's your activation guarantee process?
            </div>
            <p class="font-body text-[14px] text-muted m-0">Ensure the system is tested before the installer leaves.</p>
          </div>
          <div class="border-b border-border pb-6">
            <div class="font-heading text-[16px] font-bold text-primary mb-2 flex items-center gap-2">
              <i data-lucide="help-circle" class="w-[16px] h-[16px] text-accent"></i>
              Do you offer 24/7 live monitoring?
            </div>
            <p class="font-body text-[14px] text-muted m-0">Verify it's a staffed center, not just automated alerts.</p>
          </div>
          <div class="pb-0">
            <div class="font-heading text-[16px] font-bold text-primary mb-2 flex items-center gap-2">
              <i data-lucide="help-circle" class="w-[16px] h-[16px] text-accent"></i>
              What are your contract and cancellation terms?
            </div>
            <p class="font-body text-[14px] text-muted m-0">Look for fair notice periods and no &ldquo;totaled car&rdquo; penalties.</p>
          </div>
        </div>
      </div>

      <div id="tracker-form" class="bg-white border-2 border-primary p-6 md:p-12 rounded-[3px] mb-16 text-center shadow-2xl" style="border: 2px solid #0F172A">
        <h3 class="font-heading text-[20px] md:text-[24px] font-medium text-primary mb-3 md:mb-4">Get Quotes From the Elite 5 Now</h3>
        <p class="font-body text-[13px] md:text-[14px] text-muted mb-6 md:mb-8">60-second form • 3-5 elite providers • Real protection</p>
        <div class="space-y-3 md:space-y-4 max-w-md mx-auto">
          <form action="{{ route('tracker.submit') }}" method="post">
            @csrf
            <input type="hidden" name="form_source" value="car_track_landing">

            <input type="text" class="w-full mt-3 p-3 md:p-4 border border-border rounded-[3px] font-body text-[14px]" id="tracker-firstname" placeholder="First Name" name="firstname" required />
            <input type="text" class="w-full mt-3 p-3 md:p-4 border border-border rounded-[3px] font-body text-[14px]" id="tracker-lastname" placeholder="Last Name" name="lastname" required />
            <input type="email" class="w-full mt-3 p-3 md:p-4 border border-border rounded-[3px] font-body text-[14px]" id="tracker-email" placeholder="Email Address" name="email" required />
            <input type="tel" class="w-full mt-3 p-3 md:p-4 border border-border rounded-[3px] font-body text-[14px]" id="tracker-phone" placeholder="Phone Number" name="phone1" required />
            <select class="w-full mt-3 p-3 md:p-4 border border-border rounded-[3px] font-body text-[14px] bg-white" id="tracker-priority" aria-label="Priority selector">
              <option selected>Priority Selector</option>
              <option>Lowest Price</option>
              <option>Advanced Features</option>
              <option>Best All-Around Value</option>
              <option>Other</option>
            </select>

            <div class="flex items-start gap-3 mt-3 text-left">
              <input id="tracker-terms" required name="acceptterms" value="true" aria-describedby="tracker-terms" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded mt-1">
              <label for="tracker-terms" class="text-sm font-medium text-gray-900">
                I agree to the <a href="{{ route('terms') }}" class="text-blue-600 hover:underline">terms and conditions</a>
              </label>
            </div>

            <div>
              <button class="w-full mt-3 py-4 md:py-5 bg-primary font-heading font-bold rounded-full hover:bg-accent transition-colors black-button text-white inline-flex items-center justify-center gap-2" type="submit">
                Get My Quotes Now
                <i data-lucide="arrow-right" class="w-[18px] h-[18px]"></i>
              </button>
            </div>

            <input type="hidden" name="optinurl" value="https://searchadeal.online/" required>
            <input type="hidden" name="optindate" value="{{ date('d/m/y H:i:s') }}" required>
            <input type="hidden" name="channel" value="JMAff" required>
            <input type="hidden" name="product" value="Vehicle Tracking" required>
            <input type="hidden" name="leadsource" value="JMLSSEARCHADEAL9020" required>
            <input type="hidden" name="affiliateshortcode" value="JMAFFSite15019" required>
            <input type="hidden" name="offer_id" value="1523" required>
          </form>
        </div>
        <p class="mt-5 md:mt-6 font-body text-[10px] md:text-[11px] text-muted uppercase tracking-widest">
          Search A Deal • POPIA-Compliant • Built in South Africa
        </p>
      </div>

      <div class="space-y-8 text-center border-t border-border pt-16">
        <h2 class="font-heading text-[28px] font-medium text-primary">Leaders Act While Others Delay</h2>
        <p class="font-body text-[16px] text-muted leading-relaxed">
          Every day you delay is another day your R200,000+ asset is unprotected. The Elite 5 are waiting. Your quotes are 60 seconds away. Make the call.
        </p>
      </div>
    </div>
  </section>
</main>

@include('partials.tailwind_footer');
