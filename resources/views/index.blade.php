@include('partials.tailwind_header');

<main class="flex-grow">
  <div data-page="home" aria-hidden="false">
    <section class="pt-[106px] pb-[73px] px-[14.5px] md:px-[58px]">
      <div class="max-w-[1400px] mx-auto">
        <h1 class="font-heading text-[clamp(60px,5.8vw,84px)] font-medium leading-[0.9] tracking-[-0.03em] text-primary mb-12">
          Stop Paying More<br />Than You Have To.
        </h1>

        <div class="relative flex flex-col md:flex-row justify-between items-start md:items-center mb-16 gap-8">
          <div class="absolute top-1/2 left-0 w-[87.5%] h-[1px] bg-border hidden md:block -z-10"></div>

          <button type="button" style="visibility: hidden" class="flex items-center gap-4 px-8 py-4 bg-primary text-white rounded-full font-heading text-[14px] hover:bg-accent transition-colors group black-button">
            Find My Best Deal
            <i data-lucide="arrow-down" class="w-[18px] h-[18px] group-hover:translate-y-1 transition-transform"></i>
          </button>

          <div class="flex flex-col gap-4 md:bg-background md:pl-8">
            <p class="font-body text-[14px] text-muted max-w-md leading-relaxed">
              One platform. Three smarter decisions. Compare car insurance, car trackers, and personal loans, and let South Africa's top providers compete for your business. Free. No spam calls. No obligation.
            </p>
            <div class="flex flex-wrap gap-4 font-heading text-[10px] font-bold uppercase tracking-wider text-accent">
              <span>✓ 100% Free Service</span>
              <span>✓ No Obligation</span>
              <span>✓ Zero Spam Calls</span>
            </div>
          </div>
        </div>

        <div class="w-full h-[60vh] md:h-[70vh] rounded-[3px] overflow-hidden shadow-2xl">
          <img
                  src="img/car_insure_upsell/8.png"
                  alt="SearchADeal - Car Tracker Dashboard System"
                  class="w-full h-full object-cover"
          />
        </div>
      </div>
    </section>

    <section class="py-[73px] px-[14.5px] md:px-[58px] bg-white">
      <div class="max-w-[1400px] mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 mb-16">
          <div class="md:col-span-3">
            <h2 class="font-heading text-[9px] font-medium uppercase tracking-[0.06em] text-primary">
              Problem Section
            </h2>
          </div>
          <div class="md:col-span-6">
            <h3 class="font-heading text-[clamp(45px,4.2vw,61px)] font-medium leading-none tracking-[-0.03em] text-primary mb-8">
              The System Is Not<br />Designed For You
            </h3>
          </div>
          <div class="md:col-span-3">
            <p class="font-body text-[13px] text-muted leading-relaxed">
              Every quote you didn't get, every spam call you endured, every premium you silently renewed, it all adds up. Here's what's actually happening.
            </p>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
          <div class="flex flex-col">
            <div class="w-8 h-8 rounded-full bg-accent/10 flex items-center justify-center text-accent mb-6">
              <span class="font-heading text-xs font-bold">1</span>
            </div>
            <h4 class="font-heading text-[18px] font-medium text-primary mb-4 leading-tight">
              One inquiry. Twelve sales calls.
            </h4>
            <p class="font-body text-[13px] text-muted leading-relaxed">
              You ask for a quote, and suddenly eight strangers are calling in 20 minutes. Every one of them has the "best deal" for you.
            </p>
          </div>
          <div class="flex flex-col">
            <div class="w-8 h-8 rounded-full bg-accent/10 flex items-center justify-center text-accent mb-6">
              <span class="font-heading text-xs font-bold">2</span>
            </div>
            <h4 class="font-heading text-[18px] font-medium text-primary mb-4 leading-tight">
              You're paying for someone else's claims.
            </h4>
            <p class="font-body text-[13px] text-muted leading-relaxed">
              Legacy insurers pool you with high-risk drivers. Clean record. Secure parking. Still paying like you crashed three times.
            </p>
          </div>
          <div class="flex flex-col">
            <div class="w-8 h-8 rounded-full bg-accent/10 flex items-center justify-center text-accent mb-6">
              <span class="font-heading text-xs font-bold">3</span>
            </div>
            <h4 class="font-heading text-[18px] font-medium text-primary mb-4 leading-tight">
              You can't compare what you can't see.
            </h4>
            <p class="font-body text-[13px] text-muted leading-relaxed">
              5 applications. 5 credit checks. 5 different formats. Comparing loans or trackers from multiple providers was nearly impossible. Until now.
            </p>
          </div>
          <div class="flex flex-col">
            <div class="w-8 h-8 rounded-full bg-accent/10 flex items-center justify-center text-accent mb-6">
              <span class="font-heading text-xs font-bold">4</span>
            </div>
            <h4 class="font-heading text-[18px] font-medium text-primary mb-4 leading-tight">
              Delay is costing you money daily.
            </h4>
            <p class="font-body text-[13px] text-muted leading-relaxed">
              "I'll compare next month" becomes never. Meanwhile, you're overpaying R500–R1,200 every month for the same or worse coverage.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-[73px] bg-background">
      <div class="max-w-[1400px] mx-auto px-[14.5px] md:px-[58px]">
        <div class="flex flex-col lg:flex-row gap-16 mb-32">
          <div class="lg:w-1/2">
            <div class="flex items-center gap-3 mb-6">
              <div class="text-accent">
                <i data-lucide="car" class="w-6 h-6"></i>
              </div>
              <h2 class="font-heading text-[14px] font-bold uppercase tracking-[0.06em] text-primary">
                Car Insurance
              </h2>
            </div>

            <p class="font-heading text-[20px] italic font-medium text-primary mb-8 leading-tight">
              "I renewed again without comparing. My premium went up 11%. What choice did I have?"
            </p>

            <p class="font-body text-[15px] text-muted mb-8 leading-relaxed">
              South African drivers overpay by R287 million every month, simply because their current insurer knows they won't bother shopping around. The Reverse-Auction Match changes that.
            </p>

            <div class="mb-8">
              <h4 class="font-heading text-[12px] font-bold uppercase tracking-wider text-primary mb-4">What You Get:</h4>
              <ul class="space-y-3">
                <li class="flex items-start gap-3 font-body text-[13px] text-muted">
                  <div class="mt-1 w-1.5 h-1.5 rounded-full bg-accent shrink-0"></div>
                  One form sends your profile to multiple competing insurers
                </li>
                <li class="flex items-start gap-3 font-body text-[13px] text-muted">
                  <div class="mt-1 w-1.5 h-1.5 rounded-full bg-accent shrink-0"></div>
                  Average savings: 38–47% on monthly premiums
                </li>
                <li class="flex items-start gap-3 font-body text-[13px] text-muted">
                  <div class="mt-1 w-1.5 h-1.5 rounded-full bg-accent shrink-0"></div>
                  Zero obligation to switch, you choose if and when
                </li>
                <li class="flex items-start gap-3 font-body text-[13px] text-muted">
                  <div class="mt-1 w-1.5 h-1.5 rounded-full bg-accent shrink-0"></div>
                  No spam calls. Providers reach out with real offers only
                </li>
                <li class="flex items-start gap-3 font-body text-[13px] text-muted">
                  <div class="mt-1 w-1.5 h-1.5 rounded-full bg-accent shrink-0"></div>
                  Takes under 3 minutes to complete
                </li>
              </ul>
            </div>

            <div class="flex flex-col gap-4">
              <button type="button" data-nav="car-insurance" class="flex items-center justify-between w-full md:w-auto md:min-w-[300px] px-8 py-4 bg-primary text-white rounded-full font-heading text-[14px] hover:bg-accent transition-colors group">
                Compare Car Insurance Now
                <i data-lucide="arrow-right" class="w-[18px] h-[18px] ml-4 group-hover:translate-x-1 transition-transform"></i>
              </button>
              <p class="font-body text-[11px] text-muted pl-4">
                Free · Takes 127 seconds · No credit check
              </p>
            </div>
          </div>

          <div class="lg:w-1/2">
            <div class="w-full h-[400px] md:h-[600px] rounded-[3px] overflow-hidden shadow-2xl">
              <img
                      src="https://images.unsplash.com/photo-1541899481282-d53bffe3c35d?auto=format&fit=crop&q=80&w=1200"
                      alt="Car Insurance"
                      class="w-full h-full object-cover"
              />
            </div>
          </div>
        </div>

        <div class="flex flex-col lg:flex-row-reverse gap-16 mb-32">
          <div class="lg:w-1/2">
            <div class="flex items-center gap-3 mb-6">
              <div class="text-accent">
                <i data-lucide="radio" class="w-6 h-6"></i>
              </div>
              <h2 class="font-heading text-[14px] font-bold uppercase tracking-[0.06em] text-primary">
                Car Tracker
              </h2>
            </div>

            <p class="font-heading text-[20px] italic font-medium text-primary mb-8 leading-tight">
              "Gauteng. 48 vehicles are stolen per day. My car is parked unprotected right now."
            </p>

            <p class="font-body text-[15px] text-muted mb-8 leading-relaxed">
              63% of "recovered" vehicles are found stripped, burned, or across a border. The difference between recovered and gone forever is choosing the right tracker from a provider that actually has a 24/7 recovery infrastructure.
            </p>

            <div class="mb-8">
              <h4 class="font-heading text-[12px] font-bold uppercase tracking-wider text-primary mb-4">What You Get:</h4>
              <ul class="space-y-3">
                <li class="flex items-start gap-3 font-body text-[13px] text-muted">
                  <div class="mt-1 w-1.5 h-1.5 rounded-full bg-accent shrink-0"></div>
                  Connect with South Africa's top 5 vetted tracker providers only
                </li>
                <li class="flex items-start gap-3 font-body text-[13px] text-muted">
                  <div class="mt-1 w-1.5 h-1.5 rounded-full bg-accent shrink-0"></div>
                  All providers pass 7 non-negotiable performance criteria
                </li>
                <li class="flex items-start gap-3 font-body text-[13px] text-muted">
                  <div class="mt-1 w-1.5 h-1.5 rounded-full bg-accent shrink-0"></div>
                  Verified SAPS partnerships & armed response integration
                </li>
                <li class="flex items-start gap-3 font-body text-[13px] text-muted">
                  <div class="mt-1 w-1.5 h-1.5 rounded-full bg-accent shrink-0"></div>
                  No resellers. No middlemen. Direct to installers only
                </li>
                <li class="flex items-start gap-3 font-body text-[13px] text-muted">
                  <div class="mt-1 w-1.5 h-1.5 rounded-full bg-accent shrink-0"></div>
                  Transparent contracts, no hidden 36-month lock-ins
                </li>
              </ul>
            </div>

            <p class="font-body text-[13px] text-muted italic mb-8 p-4 bg-white/50 border-l-2 border-accent">
              Why only 5? More choice creates confusion. We cut 44 random options down to the 5 with decade-long track records and proven recovery networks.
            </p>

            <div class="flex flex-col gap-4">
              <button type="button" data-nav="car-trackers" class="flex items-center justify-between w-full md:w-auto md:min-w-[300px] px-8 py-4 bg-primary text-white rounded-full font-heading text-[14px] hover:bg-accent transition-colors group">
                Compare Tracker Providers
                <i data-lucide="arrow-right" class="w-[18px] h-[18px] ml-4 group-hover:translate-x-1 transition-transform"></i>
              </button>
              <p class="font-body text-[11px] text-muted pl-4">
                Free · 60-second form · Zero spam calls
              </p>
            </div>
          </div>

          <div class="lg:w-1/2">
            <div class="w-full h-[400px] md:h-[600px] rounded-[3px] overflow-hidden shadow-2xl">
              <img
                      src="https://images.unsplash.com/photo-1506015391300-4802dc74de2e?auto=format&fit=crop&q=80&w=1200"
                      alt="Car Tracker"
                      class="w-full h-full object-cover"
              />
            </div>
          </div>
        </div>

        <div class="flex flex-col lg:flex-row gap-16">
          <div class="lg:w-1/2">
            <div class="flex items-center gap-3 mb-6">
              <div class="text-accent">
                <i data-lucide="credit-card" class="w-6 h-6"></i>
              </div>
              <h2 class="font-heading text-[14px] font-bold uppercase tracking-[0.06em] text-primary">
                Personal Loans
              </h2>
            </div>

            <p class="font-heading text-[20px] italic font-medium text-primary mb-8 leading-tight">
              "I applied at three banks. Two were never called back. One offered worse terms than I already have."
            </p>

            <p class="font-body text-[15px] text-muted mb-8 leading-relaxed">
              Every loan application you submit creates a credit enquiry. Multiple applications damage the very score you need to get approved. One application through our platform reaches 15+ NCR-registered lenders simultaneously.
            </p>

            <div class="mb-8">
              <h4 class="font-heading text-[12px] font-bold uppercase tracking-wider text-primary mb-4">What You Get:</h4>
              <ul class="space-y-3">
                <li class="flex items-start gap-3 font-body text-[13px] text-muted">
                  <div class="mt-1 w-1.5 h-1.5 rounded-full bg-accent shrink-0"></div>
                  One application. Multiple registered lender offers
                </li>
                <li class="flex items-start gap-3 font-body text-[13px] text-muted">
                  <div class="mt-1 w-1.5 h-1.5 rounded-full bg-accent shrink-0"></div>
                  Includes banks, neobanks & digital-first lenders
                </li>
                <li class="flex items-start gap-3 font-body text-[13px] text-muted">
                  <div class="mt-1 w-1.5 h-1.5 rounded-full bg-accent shrink-0"></div>
                  Minimizes hard credit checks — lenders assess you first
                </li>
                <li class="flex items-start gap-3 font-body text-[13px] text-muted">
                  <div class="mt-1 w-1.5 h-1.5 rounded-full bg-accent shrink-0"></div>
                  Loan amounts from R1,000 to R500,000
                </li>
                <li class="flex items-start gap-3 font-body text-[13px] text-muted">
                  <div class="mt-1 w-1.5 h-1.5 rounded-full bg-accent shrink-0"></div>
                  All lenders are NCR-registered & NCA-compliant
                </li>
              </ul>
            </div>

            <p class="font-body text-[13px] text-muted italic mb-8 p-4 bg-white/50 border-l-2 border-accent">
              Processing 24/7. Many lenders provide preliminary feedback within minutes. You see interest rate, fees, and total cost of credit side by side.
            </p>

            <div class="flex flex-col gap-4">
              <button type="button" data-nav="personal-loans" class="flex items-center justify-between w-full md:w-auto md:min-w-[300px] px-8 py-4 bg-primary text-white rounded-full font-heading text-[14px] hover:bg-accent transition-colors group">
                Compare Loan Offers
                <i data-lucide="arrow-right" class="w-[18px] h-[18px] ml-4 group-hover:translate-x-1 transition-transform"></i>
              </button>
              <p class="font-body text-[11px] text-muted pl-4">
                Free · 5 minutes · No obligation to accept
              </p>
            </div>
          </div>

          <div class="lg:w-1/2">
            <div class="w-full h-[400px] md:h-[600px] rounded-[3px] overflow-hidden shadow-2xl">
              <img
                      src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&fit=crop&q=80&w=1200"
                      alt="Personal Loans"
                      class="w-full h-full object-cover"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-[73px] px-[14.5px] md:px-[58px] bg-white">
      <div class="max-w-[1000px] mx-auto">
        <div class="text-center mb-16">
          <h2 class="font-heading text-[9px] font-medium uppercase tracking-[0.06em] text-primary mb-4">
            Comparison Table
          </h2>
          <h3 class="font-heading text-[clamp(35px,3.5vw,50px)] font-medium leading-none tracking-[-0.03em] text-primary">
            The Old Way vs. Search A Deal
          </h3>
        </div>

        <div class="overflow-x-auto">
          <table class="w-full border-collapse">
            <thead>
            <tr class="border-b border-border">
              <th class="py-6 px-4 text-left font-heading text-[12px] uppercase tracking-wider text-muted font-medium w-1/3">What You're Comparing</th>
              <th class="py-6 px-4 text-left font-heading text-[12px] uppercase tracking-wider text-muted font-medium">The Old Way</th>
              <th class="py-6 px-4 text-left font-heading text-[12px] uppercase tracking-wider text-accent font-bold">Search A Deal</th>
            </tr>
            </thead>
            <tbody>
            <tr class="border-b border-border hover:bg-background/50 transition-colors">
              <td class="py-6 px-4 font-heading text-[15px] text-primary font-medium">Number of applications needed</td>
              <td class="py-6 px-4 font-body text-[14px] text-muted">5–10 separate forms</td>
              <td class="py-6 px-4 font-body text-[14px] text-primary font-bold">Just 1</td>
            </tr>
            <tr class="border-b border-border hover:bg-background/50 transition-colors">
              <td class="py-6 px-4 font-heading text-[15px] text-primary font-medium">Time to compare all options</td>
              <td class="py-6 px-4 font-body text-[14px] text-muted">Days of calls & visits</td>
              <td class="py-6 px-4 font-body text-[14px] text-primary font-bold">Under 5 minutes</td>
            </tr>
            <tr class="border-b border-border hover:bg-background/50 transition-colors">
              <td class="py-6 px-4 font-heading text-[15px] text-primary font-medium">Credit score impact</td>
              <td class="py-6 px-4 font-body text-[14px] text-muted">Multiple hard checks</td>
              <td class="py-6 px-4 font-body text-[14px] text-primary font-bold">Minimized checks</td>
            </tr>
            <tr class="border-b border-border hover:bg-background/50 transition-colors">
              <td class="py-6 px-4 font-heading text-[15px] text-primary font-medium">Access to digital lenders</td>
              <td class="py-6 px-4 font-body text-[14px] text-muted">Limited to who you know</td>
              <td class="py-6 px-4 font-body text-[14px] text-primary font-bold">Full network access</td>
            </tr>
            <tr class="border-b border-border hover:bg-background/50 transition-colors">
              <td class="py-6 px-4 font-heading text-[15px] text-primary font-medium">Spam calls received</td>
              <td class="py-6 px-4 font-body text-[14px] text-muted">8+ calls in 20 minutes</td>
              <td class="py-6 px-4 font-body text-[14px] text-primary font-bold">Zero</td>
            </tr>
            <tr class="hover:bg-background/50 transition-colors">
              <td class="py-6 px-4 font-heading text-[15px] text-primary font-medium">Cost to you</td>
              <td class="py-6 px-4 font-body text-[14px] text-muted">Your time + decisions</td>
              <td class="py-6 px-4 font-body text-[14px] text-primary font-bold">Completely free</td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <section class="py-[73px] px-[14.5px] md:px-[58px] bg-background">
      <div class="max-w-[1400px] mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 mb-16">
          <div class="md:col-span-3">
            <h2 class="font-heading text-[9px] font-medium uppercase tracking-[0.06em] text-primary">
              How It Works
            </h2>
          </div>
          <div class="md:col-span-6">
            <h3 class="font-heading text-[clamp(45px,4.2vw,61px)] font-medium leading-none tracking-[-0.03em] text-primary mb-8">
              How Search A Deal Works
            </h3>
          </div>
          <div class="md:col-span-3">
            <p class="font-body text-[13px] text-muted leading-relaxed">
              Regardless of which service you're comparing, the process is the same and takes only minutes.
            </p>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          <div class="bg-white p-8 rounded-[3px] border border-border hover:shadow-xl transition-shadow">
            <div class="font-heading text-[12px] font-bold text-accent uppercase tracking-widest mb-6">01</div>
            <h4 class="font-heading text-[18px] font-medium text-primary mb-4 leading-tight">
              Step 1: Pick Your Comparison
            </h4>
            <p class="font-body text-[13px] text-muted leading-relaxed">
              Choose car insurance, car trackers, or personal loans. Each service has its own 60–300 second form tailored to that specific need.
            </p>
          </div>
          <div class="bg-white p-8 rounded-[3px] border border-border hover:shadow-xl transition-shadow">
            <div class="font-heading text-[12px] font-bold text-accent uppercase tracking-widest mb-6">02</div>
            <h4 class="font-heading text-[18px] font-medium text-primary mb-4 leading-tight">
              Step 2: We Match You to Verified Providers
            </h4>
            <p class="font-body text-[13px] text-muted leading-relaxed">
              Your details go to our curated network of registered, vetted providers simultaneously. Not lead brokers. Not resellers. The real companies competing for your business.
            </p>
          </div>
          <div class="bg-white p-8 rounded-[3px] border border-border hover:shadow-xl transition-shadow">
            <div class="font-heading text-[12px] font-bold text-accent uppercase tracking-widest mb-6">03</div>
            <h4 class="font-heading text-[18px] font-medium text-primary mb-4 leading-tight">
              Step 3: Receive Real Offers With Real Numbers
            </h4>
            <p class="font-body text-[13px] text-muted leading-relaxed">
              Providers present their actual terms, rates, fees, and repayment schedules, all structured for fair comparison. No vague estimates. No "call us for pricing."
            </p>
          </div>
          <div class="bg-white p-8 rounded-[3px] border border-border hover:shadow-xl transition-shadow">
            <div class="font-heading text-[12px] font-bold text-accent uppercase tracking-widest mb-6">04</div>
            <h4 class="font-heading text-[18px] font-medium text-primary mb-4 leading-tight">
              Step 4: You Choose. Or You Walk Away.
            </h4>
            <p class="font-body text-[13px] text-muted leading-relaxed">
              No pressure. No obligation. If nothing fits your situation, you leave with zero consequence. You are always in control of the final decision.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-12 blue-bg text-white">
      <div class="max-w-[1400px] mx-auto px-[14.5px] md:px-[58px]">
        <div class="text-center mb-12">
          <h2 class="font-heading text-[9px] font-medium uppercase tracking-[0.06em] text-white/60">
            Built on Verifiable Results
          </h2>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
          <div class="text-center">
            <div class="font-heading text-[clamp(30px,3vw,45px)] font-medium mb-2">15+</div>
            <div class="font-body text-[11px] uppercase tracking-wider text-white/60">NCR-Registered Lenders in Network</div>
          </div>
          <div class="text-center">
            <div class="font-heading text-[clamp(30px,3vw,45px)] font-medium mb-2">38–47%</div>
            <div class="font-body text-[11px] uppercase tracking-wider text-white/60">Average Car Insurance Savings</div>
          </div>
          <div class="text-center">
            <div class="font-heading text-[clamp(30px,3vw,45px)] font-medium mb-2">24/7</div>
            <div class="font-body text-[11px] uppercase tracking-wider text-white/60">Application Processing</div>
          </div>
          <div class="text-center">
            <div class="font-heading text-[clamp(30px,3vw,45px)] font-medium mb-2">100%</div>
            <div class="font-body text-[11px] uppercase tracking-wider text-white/60">Free — Lenders Pay Us, Not You</div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-[73px] px-[14.5px] md:px-[58px] bg-white">
      <div class="max-w-[800px] mx-auto">
        <div class="text-center mb-16">
          <h2 class="font-heading text-[9px] font-medium uppercase tracking-[0.06em] text-primary mb-4">
            FAQ — Objection Handling
          </h2>
          <h3 class="font-heading text-[clamp(35px,3.5vw,50px)] font-medium leading-none tracking-[-0.03em] text-primary">
            Answers You Actually Need
          </h3>
        </div>

        <div class="space-y-4">
          <div class="border border-border rounded-[3px] overflow-hidden" data-faq-item>
            <button
                    type="button"
                    class="w-full flex items-center justify-between p-6 text-left hover:bg-background transition-colors"
                    data-faq-toggle
                    aria-expanded="true"
                    aria-controls="faq-panel-1"
            >
              <span class="font-heading text-[16px] font-medium text-primary">Is this completely free? What's the catch?</span>
              <span class="flex items-center gap-2">
                    <i data-lucide="minus" class="w-[18px] h-[18px] text-accent" data-faq-icon="minus"></i>
                    <i data-lucide="plus" class="w-[18px] h-[18px] text-muted hidden" data-faq-icon="plus"></i>
                  </span>
            </button>
            <div id="faq-panel-1" class="p-6 pt-0 font-body text-[14px] text-muted leading-relaxed" data-faq-panel>
              There is no catch and no hidden cost to you. Providers pay us a referral fee when they successfully connect with a potential customer through our platform. This fee is paid by them, not by you. It does not affect the rates or terms you receive.
            </div>
          </div>

          <div class="border border-border rounded-[3px] overflow-hidden" data-faq-item>
            <button
                    type="button"
                    class="w-full flex items-center justify-between p-6 text-left hover:bg-background transition-colors"
                    data-faq-toggle
                    aria-expanded="false"
                    aria-controls="faq-panel-2"
            >
              <span class="font-heading text-[16px] font-medium text-primary">Will comparing on this platform hurt my credit score?</span>
              <span class="flex items-center gap-2">
                    <i data-lucide="minus" class="w-[18px] h-[18px] text-accent hidden" data-faq-icon="minus"></i>
                    <i data-lucide="plus" class="w-[18px] h-[18px] text-muted" data-faq-icon="plus"></i>
                  </span>
            </button>
            <div id="faq-panel-2" class="p-6 pt-0 font-body text-[14px] text-muted leading-relaxed hidden" data-faq-panel>
              For car insurance and car trackers: no credit check required. For personal loans, submitting your details generates a soft or no enquiry initially. Lenders only request permission to run a full credit check before making you a firm offer, and you control when that happens.
            </div>
          </div>

          <div class="border border-border rounded-[3px] overflow-hidden" data-faq-item>
            <button
                    type="button"
                    class="w-full flex items-center justify-between p-6 text-left hover:bg-background transition-colors"
                    data-faq-toggle
                    aria-expanded="false"
                    aria-controls="faq-panel-3"
            >
              <span class="font-heading text-[16px] font-medium text-primary">Am I going to get bombarded with sales calls?</span>
              <span class="flex items-center gap-2">
                    <i data-lucide="minus" class="w-[18px] h-[18px] text-accent hidden" data-faq-icon="minus"></i>
                    <i data-lucide="plus" class="w-[18px] h-[18px] text-muted" data-faq-icon="plus"></i>
                  </span>
            </button>
            <div id="faq-panel-3" class="p-6 pt-0 font-body text-[14px] text-muted leading-relaxed hidden" data-faq-panel>
              No. That is specifically what we are built to prevent. Your details go directly to verified providers in our network, not to lead brokers who resell your information. Providers contact you with real offers, not scripts.
            </div>
          </div>

          <div class="border border-border rounded-[3px] overflow-hidden" data-faq-item>
            <button
                    type="button"
                    class="w-full flex items-center justify-between p-6 text-left hover:bg-background transition-colors"
                    data-faq-toggle
                    aria-expanded="false"
                    aria-controls="faq-panel-4"
            >
              <span class="font-heading text-[16px] font-medium text-primary">Do I have to accept any offer I receive?</span>
              <span class="flex items-center gap-2">
                    <i data-lucide="minus" class="w-[18px] h-[18px] text-accent hidden" data-faq-icon="minus"></i>
                    <i data-lucide="plus" class="w-[18px] h-[18px] text-muted" data-faq-icon="plus"></i>
                  </span>
            </button>
            <div id="faq-panel-4" class="p-6 pt-0 font-body text-[14px] text-muted leading-relaxed hidden" data-faq-panel>
              Absolutely not. You are under zero obligation to accept any offer, from any provider, at any point. Review the offers, compare them, and only proceed if something genuinely fits your situation and budget. You can walk away at any time.
            </div>
          </div>

          <div class="border border-border rounded-[3px] overflow-hidden" data-faq-item>
            <button
                    type="button"
                    class="w-full flex items-center justify-between p-6 text-left hover:bg-background transition-colors"
                    data-faq-toggle
                    aria-expanded="false"
                    aria-controls="faq-panel-5"
            >
              <span class="font-heading text-[16px] font-medium text-primary">Are the providers and lenders in your network legitimate?</span>
              <span class="flex items-center gap-2">
                    <i data-lucide="minus" class="w-[18px] h-[18px] text-accent hidden" data-faq-icon="minus"></i>
                    <i data-lucide="plus" class="w-[18px] h-[18px] text-muted" data-faq-icon="plus"></i>
                  </span>
            </button>
            <div id="faq-panel-5" class="p-6 pt-0 font-body text-[14px] text-muted leading-relaxed hidden" data-faq-panel>
              Yes. All lenders in our personal loans network are NCR-registered and NCA-compliant. Car tracker providers are vetted against 7 non-negotiable criteria. Insurance providers are established, licensed South African insurers.
            </div>
          </div>

          <div class="border border-border rounded-[3px] overflow-hidden" data-faq-item>
            <button
                    type="button"
                    class="w-full flex items-center justify-between p-6 text-left hover:bg-background transition-colors"
                    data-faq-toggle
                    aria-expanded="false"
                    aria-controls="faq-panel-6"
            >
              <span class="font-heading text-[16px] font-medium text-primary">What if I have bad credit or an unusual situation?</span>
              <span class="flex items-center gap-2">
                    <i data-lucide="minus" class="w-[18px] h-[18px] text-accent hidden" data-faq-icon="minus"></i>
                    <i data-lucide="plus" class="w-[18px] h-[18px] text-muted" data-faq-icon="plus"></i>
                  </span>
            </button>
            <div id="faq-panel-6" class="p-6 pt-0 font-body text-[14px] text-muted leading-relaxed hidden" data-faq-panel>
              Our network includes providers who work across a range of credit profiles. Some lenders specialize in near-prime and subprime lending. Being truthful in your application is the best way to be matched with providers who are suited to your actual situation.
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-[100px] px-[14.5px] md:px-[58px] orange-bg text-white overflow-hidden relative">
      <div class="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none">
        <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-white blur-[100px]"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-white blur-[100px]"></div>
      </div>

      <div class="max-w-[1000px] mx-auto text-center relative z-10">
        <h2 class="font-heading text-[clamp(40px,5vw,70px)] font-medium leading-[0.9] tracking-[-0.03em] mb-8">
          Every Month You Wait<br />Is Money You Don't Get Back.
        </h2>
        <p class="font-body text-[18px] mb-12 max-w-2xl mx-auto opacity-90">
          The comparison takes minutes. The savings can last years. Pick your service and let providers compete for your business, not the other way around.
        </p>

        <div class="flex flex-col items-center gap-6">
          <button type="button" data-nav="home" class="flex items-center gap-4 px-10 py-5 bg-white rounded-full font-heading text-[16px] font-bold hover:bg-primary hover:text-white transition-all group" style="color: black">
            Choose My Comparison
            <i data-lucide="arrow-right" class="w-[20px] h-[20px] group-hover:translate-x-1 transition-transform"></i>
          </button>
          <p class="font-body text-[12px] uppercase tracking-widest opacity-70">
            Free · No obligation · No spam · Takes minutes
          </p>
        </div>
      </div>
    </section>
  </div>

  <div data-page="car-insurance" aria-hidden="true" class="hidden">
    <div class="pt-[58px] bg-white">
      <section class="py-20 px-[14.5px] md:px-[58px] bg-background">
        <div class="max-w-[1000px] mx-auto text-center">
          <h1 class="font-heading text-[clamp(40px,5vw,72px)] font-medium leading-[0.9] tracking-[-0.03em] text-primary mb-8">
            R6,847 Per Year. Evaporated.<br />
            <span class="text-accent">Because Nobody Showed You This Before.</span>
          </h1>
          <p class="font-heading text-[clamp(18px,2vw,24px)] text-primary font-medium mb-12 leading-tight max-w-3xl mx-auto">
            While South African Drivers Renewed at 11.2% Higher Premiums Last Month, 4,219 Others Discovered Cover That Costs 38–47% Less, In 127 Seconds
          </p>
          <div class="flex flex-col md:flex-row items-center justify-center gap-6 mb-12">
            <div class="flex items-center gap-2 font-body text-[14px] text-muted">
              <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent"></i>
              Completely free
            </div>
            <div class="flex items-center gap-2 font-body text-[14px] text-muted">
              <i data-lucide="clock" class="w-[18px] h-[18px] text-accent"></i>
              Works in under 3 minutes
            </div>
            <div class="flex items-center gap-2 font-body text-[14px] text-muted">
              <i data-lucide="zap" class="w-[18px] h-[18px] text-accent"></i>
              Providers fight for YOUR business
            </div>
          </div>
          <button type="button" class="px-10 py-5 bg-primary text-white rounded-full font-heading text-[16px] font-bold hover:bg-accent transition-all group flex items-center gap-4 mx-auto">
            Get Your Competitive Quotes Now
            <i data-lucide="arrow-right" class="w-[20px] h-[20px] group-hover:translate-x-1 transition-transform"></i>
          </button>
        </div>
      </section>

      <section class="py-20 px-[14.5px] md:px-[58px]">
        <div class="max-w-[800px] mx-auto prose prose-slate prose-lg">
          <div class="bg-background p-8 rounded-[3px] border-l-4 border-accent mb-12">
            <p class="font-body text-[18px] text-primary italic leading-relaxed m-0">
              "If you just watched the 60-second video, you already know something shifted. You felt it. That uncomfortable recognition that you might be paying for someone else's claims while providers who actually want your profile never get the chance to quote you."
            </p>
          </div>

          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            The R287 Million Leak South African Drivers Don't See
          </h2>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
            Last month alone, 61,842 South African drivers clicked "renew" on their car insurance. Most didn't compare. Most didn't shop. Most assumed "insurance is expensive everywhere."
          </p>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-6 font-bold text-primary">
            Collectively, they overpaid by R287 million.
          </p>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-12">
            Not because they're careless. Not because better options don't exist. Because the system is designed to keep you exactly where you are. Think about your last renewal. Premium went up 9%, 11%, maybe 13%. You thought: "Everything's going up. Load-shedding. Crime. Parts are expensive. What can I do?"
          </p>

          <div class="bg-primary text-white p-12 rounded-[3px] mb-16">
            <h3 class="font-heading text-[24px] font-medium mb-6 text-white">
              What Actually Happened During Your Last Renewal
            </h3>
            <p class="font-body text-[15px] opacity-80 mb-8">
              December 2024. Your renewal notice arrives. R1,247/month. Up from R1,118 last year. You barely glance at it before paying. But here's what your insurer didn't tell you:
            </p>
            <div class="space-y-4">
              <div class="flex items-start gap-4">
                <i data-lucide="x-circle" class="w-[20px] h-[20px] text-red-400 shrink-0 mt-1"></i>
                <p class="font-body text-[15px] m-0">The driver three streets over who claimed R180,000 after a smash-and-grab</p>
              </div>
              <div class="flex items-start gap-4">
                <i data-lucide="x-circle" class="w-[20px] h-[20px] text-red-400 shrink-0 mt-1"></i>
                <p class="font-body text-[15px] m-0">Your neighbor's 19-year-old who wrote off a Golf GTI street racing</p>
              </div>
              <div class="flex items-start gap-4">
                <i data-lucide="x-circle" class="w-[20px] h-[20px] text-red-400 shrink-0 mt-1"></i>
                <p class="font-body text-[15px] m-0">The guy in your suburb with three claims in 18 months</p>
              </div>
            </div>
            <p class="mt-8 font-body text-[15px] italic opacity-90">
              You've never claimed. You park in a secure estate. Yet you're paying the same premium architecture as high-risk drivers.
            </p>
          </div>

          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            Why Everything You've Tried Before Failed
          </h2>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <div class="p-6 border border-border rounded-[3px]">
              <div class="text-red-500 mb-4 font-bold">❌ Manual Calls</div>
              <p class="text-[13px] text-muted m-0">Took 90 minutes. Two never called back. One quoted the same rate.</p>
            </div>
            <div class="p-6 border border-border rounded-[3px]">
              <div class="text-red-500 mb-4 font-bold">❌ Old Comparison</div>
              <p class="text-[13px] text-muted m-0">Entered info 6 times. Got spammed by brokers. Unclear rates.</p>
            </div>
            <div class="p-6 border border-border rounded-[3px]">
              <div class="text-red-500 mb-4 font-bold">❌ Your Broker</div>
              <p class="text-[13px] text-muted m-0">Came back with one alternative from their commission structure.</p>
            </div>
          </div>

          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            The Discovery That Changed How 4,200+ South Africans Buy Car Insurance
          </h2>
          <div class="bg-background p-8 rounded-[3px] border border-border mb-12">
            <p class="font-body text-[16px] text-muted leading-relaxed mb-4">
              October 2023. Mid-week. 2:47 PM. An IT consultant from Sandton gets his renewal notice. R1,580/month. Up 13.4% from last year. Same insurer for 11 years. Zero claims. Drives a 2020 Fortuner.
            </p>
            <p class="font-body text-[16px] text-muted leading-relaxed mb-4">
              He's frustrated. He starts calling around. Three dead-end conversations later, a broker tries pitching him life insurance instead. Then a colleague mentions something interesting.
            </p>
            <p class="font-body text-[16px] text-primary font-medium italic mb-6">
              "There's a platform. You fill out one form. Your details go to multiple providers at once. They compete. You pick the winner. No spam calls. No pressure. Just quotes."
            </p>
            <div class="bg-white p-6 rounded-[3px] border border-accent/20 mb-6">
              <div class="grid grid-cols-1 gap-3">
                <div class="flex justify-between text-[14px]"><span class="text-muted">Provider A:</span> <span class="font-bold text-primary">R1,140/month — saves R5,280/year</span></div>
                <div class="flex justify-between text-[14px]"><span class="text-muted">Provider B:</span> <span class="font-bold text-primary">R968/month — saves R7,344/year</span></div>
                <div class="flex justify-between text-[14px]"><span class="text-muted">Provider C:</span> <span class="font-bold text-accent">R924/month — saves R7,872/year</span></div>
              </div>
            </div>
            <p class="font-body text-[16px] text-muted leading-relaxed">
              He switches to Provider C. 18 months later, he's saved R14,616. Enough to fully cover his daughter's first year at Wits. Same driver. Same car. Different system.
            </p>
          </div>

          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            How the Reverse-Auction Match Actually Works
          </h2>
          <div class="space-y-12 mb-16">
            <div class="flex gap-8">
              <div class="font-heading text-[40px] font-bold text-accent/20 leading-none">01</div>
              <div>
                <h4 class="font-heading text-[20px] font-medium text-primary mb-2">You Complete One Form</h4>
                <p class="font-body text-[15px] text-muted m-0">Vehicle details, driver profile, current premium. No credit checks. 127 seconds average.</p>
              </div>
            </div>
            <div class="flex gap-8">
              <div class="font-heading text-[40px] font-bold text-accent/20 leading-none">02</div>
              <div>
                <h4 class="font-heading text-[20px] font-medium text-primary mb-2">Profile Reaches 12+ Providers</h4>
                <p class="font-body text-[15px] text-muted m-0">Legacy insurers, direct providers, and telematics specialists compete for your business automatically.</p>
              </div>
            </div>
            <div class="flex gap-8">
              <div class="font-heading text-[40px] font-bold text-accent/20 leading-none">03</div>
              <div>
                <h4 class="font-heading text-[20px] font-medium text-primary mb-2">Receive Competitive Quotes</h4>
                <p class="font-body text-[15px] text-muted m-0">WhatsApp quotes and email summaries with full breakdowns. You compare. You choose. You decide.</p>
              </div>
            </div>
            <div class="flex gap-8">
              <div class="font-heading text-[40px] font-bold text-accent/20 leading-none">04</div>
              <div>
                <h4 class="font-heading text-[20px] font-medium text-primary mb-2">Consistently Save R400–R850/Month</h4>
                <p class="font-body text-[15px] text-muted m-0">Insurers send their sharpest pricing because they know they're in a competitive environment.</p>
              </div>
            </div>
          </div>

          <div class="bg-accent text-white p-12 rounded-[3px] mb-16 text-center">
            <h3 class="font-heading text-[28px] font-medium mb-4 text-white">The Uncomfortable Math</h3>
            <p class="font-body text-[18px] mb-8 opacity-90">
              Staying put costs you approximately <span class="font-bold">R35,000</span> over 5 years.
            </p>
            <p class="font-body text-[14px] opacity-70">
              That's a Mauritius holiday. A down payment on solar panels. Your child's Grade 1 school fees.
            </p>
          </div>

          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            Why This Works in South Africa
          </h2>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-8">
            Most comparison platforms were built for European markets. Copy-paste code. Awkward user experience. Data handling nightmares. Here's why the Reverse-Auction Match is fundamentally different:
          </p>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-12">
            <div class="flex items-start gap-3 p-4 bg-background rounded-[3px]">
              <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-1"></i>
              <div>
                <div class="font-heading text-[14px] font-bold text-primary">POPIA-compliant</div>
                <p class="text-[13px] text-muted m-0">Data is encrypted end-to-end, never sold, only shared with providers you approve.</p>
              </div>
            </div>
            <div class="flex items-start gap-3 p-4 bg-background rounded-[3px]">
              <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-1"></i>
              <div>
                <div class="font-heading text-[14px] font-bold text-primary">Load-shedding resilient</div>
                <p class="text-[13px] text-muted m-0">Quotes queue during outages and process instantly when power returns.</p>
              </div>
            </div>
            <div class="flex items-start gap-3 p-4 bg-background rounded-[3px]">
              <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-1"></i>
              <div>
                <div class="font-heading text-[14px] font-bold text-primary">Zero broker commissions</div>
                <p class="text-[13px] text-muted m-0">Direct-to-insurer matching means those savings flow to you.</p>
              </div>
            </div>
            <div class="flex items-start gap-3 p-4 bg-background rounded-[3px]">
              <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-1"></i>
              <div>
                <div class="font-heading text-[14px] font-bold text-primary">Built for SA risk profiles</div>
                <p class="text-[13px] text-muted m-0">Understands hijacking hotspots, smash-and-grab zones, and estate security.</p>
              </div>
            </div>
          </div>

          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            The One Belief That Will Stop You
          </h2>
          <div class="bg-primary text-white p-8 rounded-[3px] mb-12">
            <p class="font-body text-[16px] mb-6 italic opacity-90">
              "I've been with my insurer for 9 years. I don't want to lose my loyalty discount."
            </p>
            <p class="font-body text-[15px] mb-4">
              Here's the data your insurer doesn't want you to see: Most insurers increase premiums by 8–13% annually for existing customers while offering new customers 18–27% discounts to switch in.
            </p>
            <p class="font-body text-[15px] font-bold">
              Your "loyalty discount" isn't a discount. You're being penalized for staying.
            </p>
          </div>

          <div class="bg-background p-12 rounded-[3px] border border-border mb-16">
            <h3 class="font-heading text-[24px] font-medium text-primary mb-8">What's Included When You Submit Your Profile</h3>
            <ul class="space-y-4 m-0 p-0 list-none">
              <li class="flex items-center gap-4 font-body text-[15px] text-primary">
                <i data-lucide="check-circle-2" class="w-[20px] h-[20px] text-accent shrink-0"></i>
                Instant submission to 12+ competing providers
              </li>
              <li class="flex items-center gap-4 font-body text-[15px] text-primary">
                <i data-lucide="check-circle-2" class="w-[20px] h-[20px] text-accent shrink-0"></i>
                Direct quotes via WhatsApp and email within 24 hours
              </li>
              <li class="flex items-center gap-4 font-body text-[15px] text-primary">
                <i data-lucide="check-circle-2" class="w-[20px] h-[20px] text-accent shrink-0"></i>
                Zero obligation to switch (compare first, decide after)
              </li>
              <li class="flex items-center gap-4 font-body text-[15px] text-primary">
                <i data-lucide="check-circle-2" class="w-[20px] h-[20px] text-accent shrink-0"></i>
                POPIA-compliant data handling (full encryption)
              </li>
              <li class="flex items-center gap-4 font-body text-[15px] text-primary">
                <i data-lucide="check-circle-2" class="w-[20px] h-[20px] text-accent shrink-0"></i>
                Completely free to use (insurers pay us)
              </li>
            </ul>
          </div>

          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            Your Questions Answered
          </h2>
          <div class="space-y-4 mb-16">
            <div class="p-6 border border-border rounded-[3px]">
              <div class="font-heading text-[16px] font-bold text-primary mb-2">Will my information be sold to 50 companies?</div>
              <p class="font-body text-[14px] text-muted m-0">No. We only share your profile with FSCA-registered insurers you've explicitly approved. Full POPIA compliance.</p>
            </div>
            <div class="p-6 border border-border rounded-[3px]">
              <div class="font-heading text-[16px] font-bold text-primary mb-2">Is this actually free or is there a hidden fee later?</div>
              <p class="font-body text-[14px] text-muted m-0">Actually free. Insurers pay us a referral fee when you switch. You never pay us anything. Ever.</p>
            </div>
            <div class="p-6 border border-border rounded-[3px]">
              <div class="font-heading text-[16px] font-bold text-primary mb-2">What if I'm happy with my current insurer?</div>
              <p class="font-body text-[14px] text-muted m-0">Perfect. Use this system to confirm you're getting market-best pricing. If you are, fantastic. If not, now you know your options.</p>
            </div>
            <div class="p-6 border border-border rounded-[3px]">
              <div class="font-heading text-[16px] font-bold text-primary mb-2">Do I have to switch immediately after getting quotes?</div>
              <p class="font-body text-[14px] text-muted m-0">No. You compare quotes first. Make your decision on your timeline. Zero obligation.</p>
            </div>
            <div class="p-6 border border-border rounded-[3px]">
              <div class="font-heading text-[16px] font-bold text-primary mb-2">Will this affect my credit score?</div>
              <p class="font-body text-[14px] text-muted m-0">No. This isn't a credit application. It's a quote request. No credit bureau checks.</p>
            </div>
            <div class="p-6 border border-border rounded-[3px]">
              <div class="font-heading text-[16px] font-bold text-primary mb-2">What if I have accidents on my record?</div>
              <p class="font-body text-[14px] text-muted m-0">You'll still get quotes. Some providers specialize in higher-risk profiles at competitive rates.</p>
            </div>
          </div>

          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight text-center">
            This Is Your Decision Point
          </h2>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
            <div class="p-8 border border-border rounded-[3px]">
              <div class="font-heading text-[18px] font-bold text-muted mb-4 uppercase tracking-widest">Path 1</div>
              <p class="text-[14px] text-muted leading-relaxed">
                Close this page. Keep paying premiums designed for someone else's risk profile. Five years from now, you'll have paid an extra R30,000–R40,000 for identical coverage.
              </p>
            </div>
            <div class="p-8 border-2 border-accent rounded-[3px] bg-accent/5">
              <div class="font-heading text-[18px] font-bold text-accent mb-4 uppercase tracking-widest">Path 2</div>
              <p class="text-[14px] text-primary leading-relaxed">
                Invest 127 seconds right now. Let 12 insurers compete for your business. Save R400–R850/month. Five years from now, you'll have an extra R30,000–R40,000 in your account.
              </p>
            </div>
          </div>

          <div class="bg-white border-2 border-primary p-12 rounded-[3px] mb-16 text-center shadow-2xl">
            <h3 class="font-heading text-[24px] font-medium text-primary mb-4">Get Your Competitive Quotes Now</h3>
            <p class="font-body text-[14px] text-muted mb-8">Free to use. 127 seconds average completion time. Zero obligation.</p>
            <div class="space-y-4 max-w-md mx-auto">
              <input type="text" placeholder="Full Name" class="w-full p-4 border border-border rounded-[3px] font-body text-[14px]" />
              <input type="email" placeholder="Email Address" class="w-full p-4 border border-border rounded-[3px] font-body text-[14px]" />
              <input type="tel" placeholder="Phone Number" class="w-full p-4 border border-border rounded-[3px] font-body text-[14px]" />
              <button type="button" data-nav="car-insurance-upsell" class="w-full py-5 bg-primary text-white font-heading font-bold rounded-full hover:bg-accent transition-colors">
                Complete your profile now →
              </button>
            </div>
            <p class="mt-6 font-body text-[11px] text-muted uppercase tracking-widest">
              Search A Deal • POPIA-Compliant • Built in South Africa
            </p>
          </div>

          <div class="space-y-8 text-center border-t border-border pt-16">
            <p class="font-body text-[14px] text-muted italic">
              P.S. While You're Deciding, 23 Other Drivers Just Submitted Their Forms. Right now, as you're reading this, providers are competing for their business.
            </p>
            <p class="font-body text-[14px] text-muted italic">
              P.P.S. The R35,000 Question. If you'd discovered this system 5 years ago, you'd have saved approximately R35,000 by now. You can't get that back. But you can stop the leak today.
            </p>
          </div>
        </div>
      </section>
    </div>
  </div>

  <div data-page="car-trackers" aria-hidden="true" class="hidden">
    <div class="pt-[58px] bg-white">
      <section class="py-20 px-[14.5px] md:px-[58px] bg-background">
        <div class="max-w-[1000px] mx-auto text-center">
          <h1 class="font-heading text-[clamp(36px,4.5vw,64px)] font-medium leading-[1.1] tracking-[-0.03em] text-primary mb-8">
            The 5 Tracker Companies Every Security-Conscious South African Driver Trusts <br />
            <span class="text-accent text-[0.7em] block mt-4">(But Can't Easily Compare Without Getting Buried in Sales Calls)</span>
          </h1>
          <p class="font-body text-[18px] text-muted max-w-3xl mx-auto mb-12">
            Here's what nobody tells you about choosing a car tracker in South Africa: The established leaders don't need to spam you. We help you connect with them directly, without the noise.
          </p>
          <button type="button" class="px-10 py-5 bg-primary text-white rounded-full font-heading text-[16px] font-bold hover:bg-accent transition-all group flex items-center gap-4 mx-auto">
            Get Quotes From South Africa's Elite 5
            <i data-lucide="arrow-right" class="w-[20px] h-[20px] group-hover:translate-x-1 transition-transform"></i>
          </button>
        </div>
      </section>

      <section class="py-20 px-[14.5px] md:px-[58px]">
        <div class="max-w-[800px] mx-auto prose prose-slate prose-lg">
          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            The Day You Realize "Protected" Doesn't Mean What You Thought
          </h2>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
            Gauteng, 2024. 48 vehicles stolen per day. That's one every 30 minutes. Western Cape isn't far behind. Durban's chop shop network is more sophisticated than ever. And 63% of "recovered" vehicles are found stripped, burned, or across a border.
          </p>
          <p class="font-body text-[16px] text-primary font-bold mb-8">
            The difference between "gone forever" and "recovered in hours" isn't luck. It's three things:
          </p>
          <div class="space-y-4 mb-12">
            <div class="flex items-start gap-4 p-4 bg-background rounded-[3px]">
              <i data-lucide="check-circle-2" class="w-[20px] h-[20px] text-accent shrink-0 mt-1"></i>
              <p class="font-body text-[15px] m-0 text-primary">A tracker installed correctly the first time (not "we'll come back next week")</p>
            </div>
            <div class="flex items-start gap-4 p-4 bg-background rounded-[3px]">
              <i data-lucide="check-circle-2" class="w-[20px] h-[20px] text-accent shrink-0 mt-1"></i>
              <p class="font-body text-[15px] m-0 text-primary">A 24/7 monitoring center that responds in minutes, not business hours</p>
            </div>
            <div class="flex items-start gap-4 p-4 bg-background rounded-[3px]">
              <i data-lucide="check-circle-2" class="w-[20px] h-[20px] text-accent shrink-0 mt-1"></i>
              <p class="font-body text-[15px] m-0 text-primary">A recovery team with actual SAPS relationships and armed response integration</p>
            </div>
          </div>

          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            The Comparison Site Trap
          </h2>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
            You've probably tried this before. You Google "best car tracker South Africa." You see 47 listicles. You click "Get Free Quotes." Then the nightmare starts. Eight different reps call within 20 minutes. Same script. Different prices. Half of them are resellers who've never installed a tracker in their lives.
          </p>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-12 italic">
            "I'll compare properly next month" becomes next quarter. Next quarter becomes never. Meanwhile, your car stays unprotected.
          </p>

          <div class="bg-primary text-white p-12 rounded-[3px] mb-16">
            <h3 class="font-heading text-[24px] font-medium mb-6 text-white">
              Introducing: The Provider Intelligence Engine™
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
          <div class="space-y-12 mb-16">
            <div class="flex gap-8">
              <div class="font-heading text-[40px] font-bold text-accent/20 leading-none">01</div>
              <div>
                <h4 class="font-heading text-[20px] font-medium text-primary mb-2">Secure Form</h4>
                <p class="font-body text-[15px] text-muted m-0">Takes 60 seconds. Basic vehicle and location details.</p>
              </div>
            </div>
            <div class="flex gap-8">
              <div class="font-heading text-[40px] font-bold text-accent/20 leading-none">02</div>
              <div>
                <h4 class="font-heading text-[20px] font-medium text-primary mb-2">Simultaneous Matching</h4>
                <p class="font-body text-[15px] text-muted m-0">Your info goes directly to the top 5 elite providers. No brokers.</p>
              </div>
            </div>
            <div class="flex gap-8">
              <div class="font-heading text-[40px] font-bold text-accent/20 leading-none">03</div>
              <div>
                <h4 class="font-heading text-[20px] font-medium text-primary mb-2">Strategic Consultation</h4>
                <p class="font-body text-[15px] text-muted m-0">3-5 providers contact you within minutes to provide personalized quotes.</p>
              </div>
            </div>
            <div class="flex gap-8">
              <div class="font-heading text-[40px] font-bold text-accent/20 leading-none">04</div>
              <div>
                <h4 class="font-heading text-[20px] font-medium text-primary mb-2">Informed Choice</h4>
                <p class="font-body text-[15px] text-muted m-0">Compare price, installation speed, and recovery strength. You decide.</p>
              </div>
            </div>
          </div>

          <div class="bg-background p-12 rounded-[3px] border border-border mb-16">
            <h3 class="font-heading text-[24px] font-medium text-primary mb-8">The 5 Questions That Separate Real Protection</h3>
            <div class="space-y-6">
              <div class="border-b border-border pb-6">
                <div class="font-heading text-[16px] font-bold text-primary mb-2">What's your average recovery time in my specific suburb?</div>
                <p class="font-body text-[14px] text-muted m-0">Listen for specific data, not vague promises.</p>
              </div>
              <div class="border-b border-border pb-6">
                <div class="font-heading text-[16px] font-bold text-primary mb-2">Is installation fully included in this quote?</div>
                <p class="font-body text-[14px] text-muted m-0">Avoid hidden on-site charges for "complex wiring".</p>
              </div>
              <div class="border-b border-border pb-6">
                <div class="font-heading text-[16px] font-bold text-primary mb-2">What's your activation guarantee process?</div>
                <p class="font-body text-[14px] text-muted m-0">Ensure the system is tested before the installer leaves.</p>
              </div>
              <div class="border-b border-border pb-6">
                <div class="font-heading text-[16px] font-bold text-primary mb-2">Do you offer 24/7 live monitoring?</div>
                <p class="font-body text-[14px] text-muted m-0">Verify it's a staffed center, not just automated alerts.</p>
              </div>
              <div class="border-b border-border pb-6 last:border-0">
                <div class="font-heading text-[16px] font-bold text-primary mb-2">What are your contract and cancellation terms?</div>
                <p class="font-body text-[14px] text-muted m-0">Look for fair notice periods and no "totaled car" penalties.</p>
              </div>
            </div>
          </div>

          <div class="bg-white border-2 border-primary p-12 rounded-[3px] mb-16 text-center shadow-2xl">
            <h3 class="font-heading text-[24px] font-medium text-primary mb-4">Get Quotes From the Elite 5 Now</h3>
            <p class="font-body text-[14px] text-muted mb-8">60-second form • 3-5 elite providers • Real protection</p>
            <div class="space-y-4 max-w-md mx-auto">
              <input type="text" placeholder="Full Name" class="w-full p-4 border border-border rounded-[3px] font-body text-[14px]" />
              <input type="email" placeholder="Email Address" class="w-full p-4 border border-border rounded-[3px] font-body text-[14px]" />
              <input type="tel" placeholder="Phone Number" class="w-full p-4 border border-border rounded-[3px] font-body text-[14px]" />
              <button type="button" data-nav="car-tracker-upsell" class="w-full py-5 bg-primary text-white font-heading font-bold rounded-full hover:bg-accent transition-colors">
                Get My Quotes Now →
              </button>
            </div>
            <p class="mt-6 font-body text-[11px] text-muted uppercase tracking-widest">
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
    </div>
  </div>

  <div data-page="personal-loans" aria-hidden="true" class="hidden">
    <div class="pt-[58px] bg-white">
      <section class="py-20 px-[14.5px] md:px-[58px] bg-background">
        <div class="max-w-[1000px] mx-auto text-center">
          <h2 class="font-heading text-[12px] font-bold uppercase tracking-widest text-accent mb-4">
            Personal Loans Comparison Platform
          </h2>
          <h1 class="font-heading text-[clamp(40px,5vw,72px)] font-medium leading-[0.9] tracking-[-0.03em] text-primary mb-8">
            Stop Wasting Time. Find the Right<br />
            <span class="text-accent">Personal Loan in Minutes.</span>
          </h1>
          <p class="font-body text-[18px] text-muted max-w-3xl mx-auto mb-12">
            Connect with multiple registered lenders through one simple application. Compare real offers and choose what works for your situation.
          </p>

          <div class="flex flex-col md:flex-row items-center justify-center gap-6 mb-12">
            <div class="flex items-center gap-2 font-body text-[14px] text-muted">
              <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent"></i>
              15+ Registered Lenders
            </div>
            <div class="flex items-center gap-2 font-body text-[14px] text-muted">
              <i data-lucide="clock" class="w-[18px] h-[18px] text-accent"></i>
              24/7 Application Processing
            </div>
            <div class="flex items-center gap-2 font-body text-[14px] text-muted">
              <i data-lucide="shield-check" class="w-[18px] h-[18px] text-accent"></i>
              100% Free to Use
            </div>
          </div>

          <button type="button" class="px-10 py-5 bg-primary text-white rounded-full font-heading text-[16px] font-bold hover:bg-accent transition-all group flex items-center gap-4 mx-auto">
            Start Your Application Now
            <i data-lucide="arrow-right" class="w-[20px] h-[20px] group-hover:translate-x-1 transition-transform"></i>
          </button>
        </div>
      </section>

      <section class="py-20 px-[14.5px] md:px-[58px]">
        <div class="max-w-[800px] mx-auto prose prose-slate prose-lg">
          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            You Shouldn't Have to Visit 10 Banks to Find One Loan
          </h2>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-8">
            Applying for personal loans the old way wastes your time and hurts your credit score with multiple applications.
          </p>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-16">
            <div class="p-6 border border-border rounded-[3px]">
              <div class="flex items-start gap-3 mb-3">
                <i data-lucide="x-circle" class="w-[20px] h-[20px] text-red-400 shrink-0 mt-1"></i>
                <h4 class="font-heading text-[16px] font-bold text-primary m-0">Hours Wasted Visiting Branches</h4>
              </div>
              <p class="font-body text-[14px] text-muted m-0">Taking time off work to stand in queues at multiple banks only to hear "we'll get back to you" is exhausting and often leads nowhere.</p>
            </div>
            <div class="p-6 border border-border rounded-[3px]">
              <div class="flex items-start gap-3 mb-3">
                <i data-lucide="x-circle" class="w-[20px] h-[20px] text-red-400 shrink-0 mt-1"></i>
                <h4 class="font-heading text-[16px] font-bold text-primary m-0">Multiple Credit Checks Hurt Your Score</h4>
              </div>
              <p class="font-body text-[14px] text-muted m-0">Every loan application creates a credit enquiry on your record. Too many enquiries make you look desperate and can lower your approval chances.</p>
            </div>
            <div class="p-6 border border-border rounded-[3px]">
              <div class="flex items-start gap-3 mb-3">
                <i data-lucide="x-circle" class="w-[20px] h-[20px] text-red-400 shrink-0 mt-1"></i>
                <h4 class="font-heading text-[16px] font-bold text-primary m-0">Endless Rejections Without Explanation</h4>
              </div>
              <p class="font-body text-[14px] text-muted m-0">Most banks reject applications without telling you why. You're left guessing what went wrong and where to try next.</p>
            </div>
            <div class="p-6 border border-border rounded-[3px]">
              <div class="flex items-start gap-3 mb-3">
                <i data-lucide="x-circle" class="w-[20px] h-[20px] text-red-400 shrink-0 mt-1"></i>
                <h4 class="font-heading text-[16px] font-bold text-primary m-0">Confusing Terms and Hidden Fees</h4>
              </div>
              <p class="font-body text-[14px] text-muted m-0">Interest rates, initiation fees, service charges, credit life insurance—every lender structures things differently, making fair comparison nearly impossible.</p>
            </div>
            <div class="p-6 border border-border rounded-[3px]">
              <div class="flex items-start gap-3 mb-3">
                <i data-lucide="x-circle" class="w-[20px] h-[20px] text-red-400 shrink-0 mt-1"></i>
                <h4 class="font-heading text-[16px] font-bold text-primary m-0">Pushy Sales Calls You Never Asked For</h4>
              </div>
              <p class="font-body text-[14px] text-muted m-0">Give your number to one loan site and suddenly you're bombarded with calls from brokers who just want their commission.</p>
            </div>
            <div class="p-6 border border-border rounded-[3px]">
              <div class="flex items-start gap-3 mb-3">
                <i data-lucide="x-circle" class="w-[20px] h-[20px] text-red-400 shrink-0 mt-1"></i>
                <h4 class="font-heading text-[16px] font-bold text-primary m-0">Time Is Running Out</h4>
              </div>
              <p class="font-body text-[14px] text-muted m-0">When you need funds for an emergency, to consolidate debt, or cover essential expenses, you can't afford to wait weeks for approval.</p>
            </div>
          </div>

          <div class="bg-accent/5 p-8 rounded-[3px] border-l-4 border-accent mb-16">
            <p class="font-body text-[18px] text-primary italic leading-relaxed m-0">
              "You know you need a personal loan. The question isn't whether to borrow, it's where to get the best deal without wasting days of your life."
            </p>
          </div>

          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            How Our Platform Works
          </h2>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-8">
            We connect you with multiple registered lenders through one simple process.
          </p>
          <div class="space-y-12 mb-16">
            <div class="flex gap-8">
              <div class="font-heading text-[40px] font-bold text-accent/20 leading-none">01</div>
              <div>
                <h4 class="font-heading text-[20px] font-medium text-primary mb-2">Complete One Application</h4>
                <p class="font-body text-[15px] text-muted m-0">Fill in your details once. Tell us what you need and provide basic information about your income and expenses.</p>
              </div>
            </div>
            <div class="flex gap-8">
              <div class="font-heading text-[40px] font-bold text-accent/20 leading-none">02</div>
              <div>
                <h4 class="font-heading text-[20px] font-medium text-primary mb-2">We Share With Lenders</h4>
                <p class="font-body text-[15px] text-muted m-0">Your application goes to our network of registered banks, neobanks, and licensed credit providers who compete for your business.</p>
              </div>
            </div>
            <div class="flex gap-8">
              <div class="font-heading text-[40px] font-bold text-accent/20 leading-none">03</div>
              <div>
                <h4 class="font-heading text-[20px] font-medium text-primary mb-2">Receive Multiple Offers</h4>
                <p class="font-body text-[15px] text-muted m-0">Get contacted by lenders who are willing to work with your situation. Each will present their terms—interest rate, fees, and repayment schedule.</p>
              </div>
            </div>
            <div class="flex gap-8">
              <div class="font-heading text-[40px] font-bold text-accent/20 leading-none">04</div>
              <div>
                <h4 class="font-heading text-[20px] font-medium text-primary mb-2">You Choose What Works</h4>
                <p class="font-body text-[15px] text-muted m-0">Compare the offers you receive and select the one that fits your budget. No pressure. No obligation. Your decision entirely.</p>
              </div>
            </div>
          </div>

          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            Why Thousands Choose Our Platform
          </h2>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-8">
            We make the loan comparison process transparent and efficient.
          </p>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-16">
            <div class="flex items-start gap-3 p-4 bg-background rounded-[3px]">
              <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-1"></i>
              <div>
                <div class="font-heading text-[14px] font-bold text-primary">Save Time and Effort</div>
                <p class="text-[13px] text-muted m-0">One application instead of filling out forms at 5-10 different banks. Submit once and let lenders come to you.</p>
              </div>
            </div>
            <div class="flex items-start gap-3 p-4 bg-background rounded-[3px]">
              <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-1"></i>
              <div>
                <div class="font-heading text-[14px] font-bold text-primary">Protect Your Credit Score</div>
                <p class="text-[13px] text-muted m-0">Our application process minimizes hard credit checks. Lenders can assess your basic profile before running formal credit bureau checks.</p>
              </div>
            </div>
            <div class="flex items-start gap-3 p-4 bg-background rounded-[3px]">
              <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-1"></i>
              <div>
                <div class="font-heading text-[14px] font-bold text-primary">Access More Options</div>
                <p class="text-[13px] text-muted m-0">Connect with major banks like Capitec, FNB, and Standard Bank, plus neobanks and digital lenders you might not know about.</p>
              </div>
            </div>
            <div class="flex items-start gap-3 p-4 bg-background rounded-[3px]">
              <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-1"></i>
              <div>
                <div class="font-heading text-[14px] font-bold text-primary">Transparent Comparisons</div>
                <p class="text-[13px] text-muted m-0">When you receive offers, you'll see the interest rate, fees, and total cost of credit for each, making comparison straightforward.</p>
              </div>
            </div>
            <div class="flex items-start gap-3 p-4 bg-background rounded-[3px]">
              <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-1"></i>
              <div>
                <div class="font-heading text-[14px] font-bold text-primary">No Hidden Obligations</div>
                <p class="text-[13px] text-muted m-0">We don't force you to accept any offer. If nothing works for you, walk away. No strings attached.</p>
              </div>
            </div>
            <div class="flex items-start gap-3 p-4 bg-background rounded-[3px]">
              <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-1"></i>
              <div>
                <div class="font-heading text-[14px] font-bold text-primary">Completely Free Service</div>
                <p class="text-[13px] text-muted m-0">You never pay us. Lenders compensate us for connecting them with potential borrowers, which means our service costs you nothing.</p>
              </div>
            </div>
            <div class="flex items-start gap-3 p-4 bg-background rounded-[3px]">
              <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-1"></i>
              <div>
                <div class="font-heading text-[14px] font-bold text-primary">NCR-Registered Lenders Only</div>
                <p class="text-[13px] text-muted m-0">All lenders in our network are registered with the National Credit Regulator and comply with the National Credit Act.</p>
              </div>
            </div>
            <div class="flex items-start gap-3 p-4 bg-background rounded-[3px]">
              <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-1"></i>
              <div>
                <div class="font-heading text-[14px] font-bold text-primary">Fast Processing</div>
                <p class="text-[13px] text-muted m-0">Applications are processed 24/7. Many lenders can give preliminary feedback within hours, not days.</p>
              </div>
            </div>
          </div>

          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            Traditional Applications vs. Our Platform
          </h2>
          <div class="overflow-x-auto mb-16">
            <table class="w-full border-collapse">
              <thead>
              <tr class="border-b border-border">
                <th class="py-4 px-4 text-left font-heading text-[12px] uppercase tracking-wider text-muted font-medium w-1/3">Feature</th>
                <th class="py-4 px-4 text-left font-heading text-[12px] uppercase tracking-wider text-muted font-medium">Traditional Way</th>
                <th class="py-4 px-4 text-left font-heading text-[12px] uppercase tracking-wider text-accent font-bold">Our Platform</th>
              </tr>
              </thead>
              <tbody>
              <tr class="border-b border-border hover:bg-background/50 transition-colors">
                <td class="py-4 px-4 font-heading text-[14px] text-primary font-medium">Number of Applications Needed</td>
                <td class="py-4 px-4 font-body text-[14px] text-muted">5-10 separate applications</td>
                <td class="py-4 px-4 font-body text-[14px] text-primary font-bold">Just 1 application</td>
              </tr>
              <tr class="border-b border-border hover:bg-background/50 transition-colors">
                <td class="py-4 px-4 font-heading text-[14px] text-primary font-medium">Time to Apply Everywhere</td>
                <td class="py-4 px-4 font-body text-[14px] text-muted">Days of visiting branches</td>
                <td class="py-4 px-4 font-body text-[14px] text-primary font-bold">Minutes to complete</td>
              </tr>
              <tr class="border-b border-border hover:bg-background/50 transition-colors">
                <td class="py-4 px-4 font-heading text-[14px] text-primary font-medium">Credit Score Impact</td>
                <td class="py-4 px-4 font-body text-[14px] text-muted">Multiple hard credit checks</td>
                <td class="py-4 px-4 font-body text-[14px] text-primary font-bold">Minimized credit checks</td>
              </tr>
              <tr class="border-b border-border hover:bg-background/50 transition-colors">
                <td class="py-4 px-4 font-heading text-[14px] text-primary font-medium">Access to Neobanks & Digital Lenders</td>
                <td class="py-4 px-4 font-body text-[14px] text-muted">Limited to banks you know</td>
                <td class="py-4 px-4 font-body text-[14px] text-primary font-bold">Full network access</td>
              </tr>
              <tr class="hover:bg-background/50 transition-colors">
                <td class="py-4 px-4 font-heading text-[14px] text-primary font-medium">Easy Comparison</td>
                <td class="py-4 px-4 font-body text-[14px] text-muted">Difficult to compare different offers</td>
                <td class="py-4 px-4 font-body text-[14px] text-primary font-bold">Side-by-side comparison</td>
              </tr>
              </tbody>
            </table>
          </div>

          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            Common Questions
          </h2>
          <div class="space-y-4 mb-16">
            <div class="p-6 border border-border rounded-[3px]">
              <div class="font-heading text-[16px] font-bold text-primary mb-2">Are you a lender?</div>
              <p class="font-body text-[14px] text-muted m-0">No. We are not a registered financial services provider and we do not issue loans. We are a comparison platform that connects you with multiple registered lenders in South Africa. Lenders make all credit decisions independently.</p>
            </div>
            <div class="p-6 border border-border rounded-[3px]">
              <div class="font-heading text-[16px] font-bold text-primary mb-2">How do you make money if the service is free?</div>
              <p class="font-body text-[14px] text-muted m-0">We receive a referral fee from lenders when we connect them with potential borrowers. This commission is paid by the lender, not by you. It doesn't affect the interest rate or terms you receive.</p>
            </div>
            <div class="p-6 border border-border rounded-[3px]">
              <div class="font-heading text-[16px] font-bold text-primary mb-2">Will applying hurt my credit score?</div>
              <p class="font-body text-[14px] text-muted m-0">Submitting your details on our platform generates a soft enquiry or no enquiry initially. If a lender wants to make you an offer, they will request permission to run a full credit check. You control when that happens.</p>
            </div>
            <div class="p-6 border border-border rounded-[3px]">
              <div class="font-heading text-[16px] font-bold text-primary mb-2">What if I have bad credit or am blacklisted?</div>
              <p class="font-body text-[14px] text-muted m-0">Our network includes lenders who work with different credit profiles. While we can't guarantee approval, some lenders specialize in near-prime and subprime lending. Being truthful in your application helps match you with appropriate lenders.</p>
            </div>
            <div class="p-6 border border-border rounded-[3px]">
              <div class="font-heading text-[16px] font-bold text-primary mb-2">How long does it take to hear back from lenders?</div>
              <p class="font-body text-[14px] text-muted m-0">Some lenders respond within hours, while others may take 24-48 hours to review your application. The fastest responses typically come from digital lenders and neobanks.</p>
            </div>
            <div class="p-6 border border-border rounded-[3px]">
              <div class="font-heading text-[16px] font-bold text-primary mb-2">Do I have to accept an offer?</div>
              <p class="font-body text-[14px] text-muted m-0">Absolutely not. You are under no obligation to accept any loan offer. Review all the terms, compare offers, and only proceed if something genuinely works for your situation.</p>
            </div>
            <div class="p-6 border border-border rounded-[3px]">
              <div class="font-heading text-[16px] font-bold text-primary mb-2">Are the lenders in your network legitimate?</div>
              <p class="font-body text-[14px] text-muted m-0">Yes. All lenders in our network are registered with the National Credit Regulator (NCR) and comply with the National Credit Act. This ensures consumer protection and fair lending practices.</p>
            </div>
            <div class="p-6 border border-border rounded-[3px]">
              <div class="font-heading text-[16px] font-bold text-primary mb-2">What information do I need to apply?</div>
              <p class="font-body text-[14px] text-muted m-0">You'll need your ID number, employment details, income information, bank account details, and basic information about your current expenses and debt obligations.</p>
            </div>
            <div class="p-6 border border-border rounded-[3px]">
              <div class="font-heading text-[16px] font-bold text-primary mb-2">Can I apply if I'm under debt review?</div>
              <p class="font-body text-[14px] text-muted m-0">If you are currently under debt review (debt counselling), you cannot legally take on new credit until the process is complete. Being honest about this in your application helps avoid wasting your time.</p>
            </div>
            <div class="p-6 border border-border rounded-[3px]">
              <div class="font-heading text-[16px] font-bold text-primary mb-2">What loan amounts can I apply for?</div>
              <p class="font-body text-[14px] text-muted m-0">Lenders in our network offer personal loans ranging from as little as R1,000 to R500,000, depending on your affordability assessment. The amount you're approved for depends on your income, expenses, and credit profile.</p>
            </div>
          </div>

          <div class="bg-white border-2 border-primary p-12 rounded-[3px] mb-16 text-center shadow-2xl">
            <h3 class="font-heading text-[24px] font-medium text-primary mb-4">Ready to Compare Your Loan Options?</h3>
            <p class="font-body text-[14px] text-muted mb-8">One application. Multiple lenders. You decide what works.</p>
            <div class="space-y-4 max-w-md mx-auto">
              <input type="text" placeholder="Full Name" class="w-full p-4 border border-border rounded-[3px] font-body text-[14px]" />
              <input type="email" placeholder="Email Address" class="w-full p-4 border border-border rounded-[3px] font-body text-[14px]" />
              <input type="tel" placeholder="Phone Number" class="w-full p-4 border border-border rounded-[3px] font-body text-[14px]" />
              <button type="button" class="w-full py-5 bg-primary text-white font-heading font-bold rounded-full hover:bg-accent transition-colors">
                Start Your Application Now →
              </button>
            </div>
            <p class="mt-6 font-body text-[11px] text-muted uppercase tracking-widest">
              Takes 5 minutes. No obligation. Completely free.
            </p>
          </div>

          <div class="bg-background p-8 rounded-[3px] border border-border text-[12px] text-muted leading-relaxed space-y-4">
            <p><strong>Important Disclosure:</strong> We are not a registered financial services provider and do not issue personal loans. We operate as an affiliate platform that connects consumers with registered lenders and credit providers in South Africa. All lenders in our network are independently registered with the National Credit Regulator (NCR) and comply with the National Credit Act.</p>
            <p><strong>How It Works:</strong> When you submit an application through our platform, we share your information with multiple lenders in our network. These lenders will independently assess your application according to their own credit criteria. We receive a referral fee from lenders when they successfully originate a loan through our platform. This commission does not affect the interest rate, fees, or terms you receive.</p>
            <p><strong>No Guarantee of Approval:</strong> Submitting an application does not guarantee loan approval. Each lender makes independent credit decisions based on their own assessment of your creditworthiness, income, expenses, and compliance with the National Credit Act's affordability requirements.</p>
            <p><strong>Your Rights:</strong> You are under no obligation to accept any loan offer. You have the right to compare offers and choose what works best for your situation. All lenders must provide you with a pre-agreement statement and quotation showing the total cost of credit, interest rate, fees, and repayment terms before you sign any agreement.</p>
            <p><strong>Responsible Borrowing:</strong> Borrowing money costs money. Before accepting any loan, carefully consider whether you can afford the monthly repayments. Over-indebtedness can have serious consequences for your financial health. If you're struggling with debt, consider speaking with a registered debt counsellor.</p>
            <p><strong>Privacy:</strong> We handle your personal information in accordance with the Protection of Personal Information Act (POPIA). Your information is only shared with lenders in our network for the purpose of assessing your loan application.</p>
          </div>
        </div>
      </section>
    </div>
  </div>

  <div data-page="car-insurance-upsell" aria-hidden="true" class="hidden">
    <div class="pt-[58px] bg-white">
      <section class="py-20 px-[14.5px] md:px-[58px] bg-background">
        <div class="max-w-[1000px] mx-auto text-center">
          <div class="inline-flex items-center gap-2 px-4 py-2 bg-accent/10 text-accent rounded-full font-heading text-[12px] font-bold uppercase tracking-widest mb-8">
            <i data-lucide="shield-alert" class="w-[16px] h-[16px]"></i>
            One Final Step: Complete Your Vehicle Protection
          </div>
          <h1 class="font-heading text-[clamp(36px,4.5vw,64px)] font-medium leading-[1.1] tracking-[-0.03em] text-primary mb-8">
            You Just Made One of the Smartest Decisions a South African Driver Can Make
          </h1>
          <p class="font-body text-[18px] text-muted max-w-3xl mx-auto mb-8 leading-relaxed">
            Congratulations. Seriously. By getting competitive insurance quotes from the Elite 5, you've done something 94% of drivers never do: you've forced insurers to compete for your business instead of settling for whatever renewal notice shows up.
          </p>
          <p class="font-body text-[16px] text-primary font-bold max-w-3xl mx-auto">
            That takes intelligence. Discipline. A refusal to overpay for identical coverage.
          </p>
        </div>
      </section>

      <section class="py-20 px-[14.5px] md:px-[58px]">
        <div class="max-w-[800px] mx-auto prose prose-slate prose-lg">
          <div class="bg-primary text-white p-8 rounded-[3px] mb-12">
            <h3 class="font-heading text-[24px] font-medium mb-4 text-white">But here's what nobody tells you about insurance savings...</h3>
            <p class="font-body text-[18px] italic opacity-90 m-0">
              Insurance only protects you after something's already been taken.
            </p>
          </div>

          <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
            Think about it. The Reverse-Auction Match just saved you R400–R850/month by connecting you with providers who'll compensate you if your vehicle is stolen. But compensation isn't recovery.
          </p>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
            <div class="p-6 border border-border rounded-[3px] bg-background">
              <div class="font-heading text-[16px] font-bold text-primary mb-3">Compensation is:</div>
              <p class="font-body text-[14px] text-muted m-0">Your car disappears, you file a claim, you wait 30 days, you get a payout minus excess, you spend weeks shopping for a replacement, you settle for something inferior because values have increased.</p>
            </div>
            <div class="p-6 border-2 border-accent rounded-[3px] bg-accent/5">
              <div class="font-heading text-[16px] font-bold text-accent mb-3">Recovery is:</div>
              <p class="font-body text-[14px] text-primary m-0">Your car is taken, your tracker activates, armed response is dispatched within minutes, your vehicle is recovered within hours, you drive it home the same day.</p>
            </div>
          </div>

          <p class="font-body text-[16px] text-primary font-bold mb-12 text-center">
            One gives you money eventually. The other gives you your actual car back immediately.
          </p>

          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            The Gap Between "Insured" and "Protected" Costs R127,000 on Average
          </h2>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-8">
            When your insured vehicle is stolen and not recovered, here's the real cost:
          </p>

          <div class="bg-background p-8 rounded-[3px] border border-border mb-12">
            <div class="space-y-4 mb-6">
              <div class="flex items-start gap-4">
                <span class="font-heading text-[16px] font-bold text-red-500 w-[80px] shrink-0">R18,000:</span>
                <span class="font-body text-[15px] text-muted">Average insurance excess you pay out of pocket</span>
              </div>
              <div class="flex items-start gap-4">
                <span class="font-heading text-[16px] font-bold text-red-500 w-[80px] shrink-0">R47,000:</span>
                <span class="font-body text-[15px] text-muted">Value depreciation gap (what insurance pays vs. what replacement actually costs in 2025)</span>
              </div>
              <div class="flex items-start gap-4">
                <span class="font-heading text-[16px] font-bold text-red-500 w-[80px] shrink-0">R14,000:</span>
                <span class="font-body text-[15px] text-muted">Premium increase over the next 3 years (claims spike your risk profile)</span>
              </div>
              <div class="flex items-start gap-4">
                <span class="font-heading text-[16px] font-bold text-red-500 w-[80px] shrink-0">R22,000:</span>
                <span class="font-body text-[15px] text-muted">Replacement shopping costs (rental car, time off work, settlement delays)</span>
              </div>
              <div class="flex items-start gap-4">
                <span class="font-heading text-[16px] font-bold text-red-500 w-[80px] shrink-0">R26,000:</span>
                <span class="font-body text-[15px] text-muted">Intangible costs (violation, fear, psychological impact, lost personal items)</span>
              </div>
            </div>
            <div class="pt-4 border-t border-border">
              <p class="font-heading text-[18px] font-bold text-primary m-0">
                Total real cost: R127,000. For a vehicle insurance "replaced."
              </p>
            </div>
          </div>

          <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
            Meanwhile, if that same vehicle had been recovered intact within hours:
          </p>
          <div class="bg-accent/10 p-8 rounded-[3px] border border-accent/20 mb-12">
            <div class="space-y-2 mb-6">
              <div class="flex items-center gap-3"><i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent"></i><span class="font-body text-[15px] text-primary"><strong>R0:</strong> No excess paid (no claim filed)</span></div>
              <div class="flex items-center gap-3"><i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent"></i><span class="font-body text-[15px] text-primary"><strong>R0:</strong> No depreciation loss (you kept your car)</span></div>
              <div class="flex items-center gap-3"><i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent"></i><span class="font-body text-[15px] text-primary"><strong>R0:</strong> No premium spike (no claim on record)</span></div>
              <div class="flex items-center gap-3"><i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent"></i><span class="font-body text-[15px] text-primary"><strong>R0:</strong> No replacement hassle</span></div>
              <div class="flex items-center gap-3"><i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent"></i><span class="font-body text-[15px] text-primary"><strong>R0:</strong> No psychological violation</span></div>
            </div>
            <div class="pt-4 border-t border-accent/20">
              <p class="font-heading text-[18px] font-bold text-primary m-0">
                Total real cost: R0. Plus you still have your car.
              </p>
            </div>
          </div>

          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            The Completion Principle
          </h2>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-8">
            You just unlocked competitive insurance pricing. That's massive. But think about what you actually secured:
          </p>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
            <div>
              <h4 class="font-heading text-[16px] font-bold text-primary mb-4">What you secured:</h4>
              <ul class="space-y-3 m-0 p-0 list-none">
                <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-0.5"></i><span class="text-[14px] text-muted">Financial protection if your vehicle disappears permanently</span></li>
                <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-0.5"></i><span class="text-[14px] text-muted">Lower premiums because insurers competed for you</span></li>
                <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-0.5"></i><span class="text-[14px] text-muted">Better coverage terms from elite providers</span></li>
              </ul>
            </div>
            <div>
              <h4 class="font-heading text-[16px] font-bold text-primary mb-4">What you haven't secured yet:</h4>
              <ul class="space-y-3 m-0 p-0 list-none">
                <li class="flex items-start gap-3"><i data-lucide="x-circle" class="w-[18px] h-[18px] text-red-400 shrink-0 mt-0.5"></i><span class="text-[14px] text-muted">The ability to stop a theft in progress</span></li>
                <li class="flex items-start gap-3"><i data-lucide="x-circle" class="w-[18px] h-[18px] text-red-400 shrink-0 mt-0.5"></i><span class="text-[14px] text-muted">Real-time location tracking if your car is taken</span></li>
                <li class="flex items-start gap-3"><i data-lucide="x-circle" class="w-[18px] h-[18px] text-red-400 shrink-0 mt-0.5"></i><span class="text-[14px] text-muted">Armed response coordination with SAPS</span></li>
                <li class="flex items-start gap-3"><i data-lucide="x-circle" class="w-[18px] h-[18px] text-red-400 shrink-0 mt-0.5"></i><span class="text-[14px] text-muted">Recovery infrastructure that works at 2 AM on a Sunday</span></li>
              </ul>
            </div>
          </div>

          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            The Brutal Reality: 63% of Stolen Vehicles in South Africa Are Never Recovered Intact
          </h2>
          <div class="bg-background p-8 rounded-[3px] border-l-4 border-primary mb-12">
            <p class="font-body text-[15px] text-muted mb-4"><strong>SAPS data, 2024:</strong> 48 vehicles stolen per day in Gauteng alone. That's one every 30 minutes. Of those stolen vehicles:</p>
            <ul class="space-y-2 mb-4">
              <li class="text-[14px] text-muted">• 37% are never found (disappeared into chop shops, across borders, or stripped for parts)</li>
              <li class="text-[14px] text-muted">• 26% are found burned or stripped (recovered, but totaled)</li>
              <li class="text-[14px] text-primary font-bold">• Only 37% are recovered intact, and most of those had active tracking systems</li>
            </ul>
          </div>

          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            Introducing: The Recovery Completion System
          </h2>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-8">
            You've already experienced The Reverse-Auction Match for insurance. Now you get the same process for tracker quotes.
          </p>
          <div class="space-y-8 mb-16">
            <div class="p-6 border border-border rounded-[3px]">
              <h4 class="font-heading text-[18px] font-bold text-primary mb-2">Step 1: One More 60-Second Form</h4>
              <p class="font-body text-[15px] text-muted m-0">Vehicle details, location, preferred contact method. You've done this once already. Same process.</p>
            </div>
            <div class="p-6 border border-border rounded-[3px]">
              <h4 class="font-heading text-[18px] font-bold text-primary mb-2">Step 2: Your Profile Reaches the Elite 5 Tracker Providers Simultaneously</h4>
              <p class="font-body text-[15px] text-muted m-0">Not 12 random resellers. The same 5 established leaders you'd find if you spent 3 weeks researching on your own: 10+ years in business, verified SAPS partnerships, 24/7 live monitoring.</p>
            </div>
            <div class="p-6 border border-border rounded-[3px]">
              <h4 class="font-heading text-[18px] font-bold text-primary mb-2">Step 3: Between 3-5 Elite Providers Contact You Within Minutes</h4>
              <p class="font-body text-[15px] text-muted m-0">Same strategic filtering as the insurance quotes: Geographic specialization, vehicle expertise, and current capacity.</p>
            </div>
            <div class="p-6 border border-border rounded-[3px]">
              <h4 class="font-heading text-[18px] font-bold text-primary mb-2">Step 4: You Compare, Choose, and Complete Your Protection</h4>
              <p class="font-body text-[15px] text-muted m-0">Ask the 5 strategic questions. Compare quotes. Choose the provider with the best combination of price, features, and recovery strength. Most providers install within 7–10 days.</p>
            </div>
          </div>

          <div class="bg-primary text-white p-12 rounded-[3px] mb-16 text-center">
            <h3 class="font-heading text-[28px] font-medium mb-6 text-white">The Synergy Nobody Talks About</h3>
            <p class="font-body text-[16px] mb-8 opacity-90">
              When you have both competitive insurance and elite tracking installed, your insurance premiums drop even further. Insurers reward tracked vehicles with premium discounts (typically 10–15%).
            </p>
            <div class="max-w-md mx-auto bg-white/10 p-6 rounded-[3px] text-left">
              <div class="flex justify-between mb-2"><span class="opacity-80">Insurance savings:</span> <span>R600/mo</span></div>
              <div class="flex justify-between mb-2"><span class="opacity-80">Tracker discount:</span> <span>+ R180/mo</span></div>
              <div class="flex justify-between mb-2 border-b border-white/20 pb-2"><span class="opacity-80">Tracker fee:</span> <span>- R220/mo</span></div>
              <div class="flex justify-between mt-2 font-bold text-[18px]"><span>Net savings:</span> <span class="text-accent">R560/mo</span></div>
            </div>
            <p class="mt-6 font-body text-[14px] italic opacity-80">You're saving more money while being more protected.</p>
          </div>

          <div class="bg-white border-2 border-primary p-12 rounded-[3px] mb-16 text-center shadow-2xl" id="tracker-form">
            <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-accent/10 text-accent mb-6">
              <i data-lucide="shield-check" class="w-[24px] h-[24px]"></i>
            </div>
            <h3 class="font-heading text-[24px] font-medium text-primary mb-4">Get Elite Tracker Quotes Now (Final Step)</h3>
            <p class="font-body text-[14px] text-muted mb-8">Same process. Same Elite 5. Complete protection.</p>
            <div class="space-y-4 max-w-md mx-auto">
              <input type="text" placeholder="Full Name" class="w-full p-4 border border-border rounded-[3px] font-body text-[14px]" />
              <input type="email" placeholder="Email Address" class="w-full p-4 border border-border rounded-[3px] font-body text-[14px]" />
              <input type="tel" placeholder="Phone Number" class="w-full p-4 border border-border rounded-[3px] font-body text-[14px]" />
              <button type="button" class="w-full py-5 bg-primary text-white font-heading font-bold rounded-full hover:bg-accent transition-colors flex items-center justify-center gap-2">
                Complete Your Protection Now <i data-lucide="arrow-right" class="w-[18px] h-[18px]"></i>
              </button>
            </div>
            <p class="mt-6 font-body text-[11px] text-muted uppercase tracking-widest leading-relaxed">
              By submitting, you agree to be contacted by pre-screened elite tracker providers. Find My Offer is an affiliate platform and earns a commission if you choose to install. We do not provide installation services.
            </p>
          </div>

          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            Questions You're Probably Asking
          </h2>
          <div class="space-y-6 mb-16">
            <div class="pb-6 border-b border-border">
              <div class="font-heading text-[16px] font-bold text-primary mb-2">Didn't I just do this for insurance? Why am I filling out another form?</div>
              <p class="font-body text-[14px] text-muted m-0">Because insurance and tracking are sourced from different provider networks. The Elite 5 insurers you just connected with don't install trackers. This is the final piece to complete your vehicle protection system.</p>
            </div>
            <div class="pb-6 border-b border-border">
              <div class="font-heading text-[16px] font-bold text-primary mb-2">Is this actually necessary, or are you just upselling me?</div>
              <p class="font-body text-[14px] text-muted m-0">If you're comfortable with your vehicle being compensated (eventually) rather than recovered (immediately), you don't need this. But if the idea of losing your car permanently feels unacceptable, then yes, this is necessary. Insurance without recovery is financial protection without physical protection.</p>
            </div>
            <div class="pb-6 border-b border-border">
              <div class="font-heading text-[16px] font-bold text-primary mb-2">Can I just research trackers on my own in a few weeks?</div>
              <p class="font-body text-[14px] text-muted m-0">You can. But three weeks from now, the urgency fades. You delay. Meanwhile, 48 vehicles per day are being stolen in Gauteng alone. The Recovery Completion System exists to eliminate that delay right now.</p>
            </div>
            <div class="pb-6 border-b border-border last:border-0">
              <div class="font-heading text-[16px] font-bold text-primary mb-2">What if I get quotes and none of them fit my budget?</div>
              <p class="font-body text-[14px] text-muted m-0">Then you decline and move on. Zero obligation. But most drivers discover their insurance savings more than cover the tracker monitoring fees.</p>
            </div>
          </div>

          <div class="space-y-8 text-center border-t border-border pt-16">
            <p class="font-body text-[14px] text-muted italic">
              <strong>P.S. The One Statistic That Changes Everything:</strong> Vehicles with elite tracking systems are 3.7x more likely to be recovered intact within 24 hours. Vehicles without tracking are 2.4x more likely to be found stripped, burned, or never found at all.
            </p>
            <p class="font-body text-[14px] text-muted italic">
              <strong>P.P.S. The Real Cost of "I'll Handle It Later":</strong> If your vehicle is stolen next month and not recovered, the total cost is R79,000+ for a vehicle that was insured but not tracked. Cost of adding elite tracking today: R220/month, funded by the insurance savings you just secured.
            </p>
          </div>
        </div>
      </section>
    </div>
  </div>

  <div data-page="car-tracker-upsell" aria-hidden="true" class="hidden">
    <div class="pt-[58px] bg-white">
      <section class="py-20 px-[14.5px] md:px-[58px] bg-background">
        <div class="max-w-[1000px] mx-auto text-center">
          <div class="inline-flex items-center gap-2 px-4 py-2 bg-accent/10 text-accent rounded-full font-heading text-[12px] font-bold uppercase tracking-widest mb-8">
            <i data-lucide="shield-alert" class="w-[16px] h-[16px]"></i>
            One More Thing Before Your Installation Is Scheduled...
          </div>
          <h1 class="font-heading text-[clamp(36px,4.5vw,64px)] font-medium leading-[1.1] tracking-[-0.03em] text-primary mb-8">
            You Just Made The Smart Decision: Real Protection Against Theft
          </h1>
          <p class="font-body text-[18px] text-muted max-w-3xl mx-auto mb-8 leading-relaxed">
            Your tracker installation is confirmed. Within days, you'll have 24/7 monitoring and one of South Africa's best recovery networks watching your vehicle. That's half the equation solved.
          </p>
          <p class="font-body text-[16px] text-primary font-bold max-w-3xl mx-auto">
            But there's something we need to address while you're here—because timing matters.
          </p>
        </div>
      </section>

      <section class="py-20 px-[14.5px] md:px-[58px]">
        <div class="max-w-[800px] mx-auto prose prose-slate prose-lg">
          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            The Question 94% of Tracker Customers Don't Ask (Until It's Too Late)
          </h2>
          <div class="bg-primary text-white p-8 rounded-[3px] mb-12">
            <p class="font-body text-[18px] italic opacity-90 m-0">
              "I'm now protecting my car from theft... but am I overpaying to insure it against theft?"
            </p>
          </div>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-4">
            Here's why this question hits different right now: You just invested in a premium tracker because you understand your vehicle's risk profile. But here's what most drivers miss:
          </p>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-8">
            Your insurance premium was calculated before you had a tracker. Before you had 24/7 monitoring. Before you had armed response integration. You're now a lower-risk customer than when you last renewed. Yet you're still paying the premium of someone without your level of protection.
          </p>

          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            The Math Your Insurer Hopes You Don't See
          </h2>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
            Let's be direct about what just changed:
          </p>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
            <div class="p-6 border border-border rounded-[3px] bg-background">
              <div class="font-heading text-[16px] font-bold text-primary mb-3">Before today:</div>
              <ul class="space-y-2 m-0 p-0 list-none">
                <li class="flex items-start gap-2"><i data-lucide="x-circle" class="w-[16px] h-[16px] text-red-400 shrink-0 mt-1"></i><span class="text-[14px] text-muted">No tracker = higher theft risk = higher premium tier</span></li>
                <li class="flex items-start gap-2"><i data-lucide="x-circle" class="w-[16px] h-[16px] text-red-400 shrink-0 mt-1"></i><span class="text-[14px] text-muted">Insurance companies price you as unprotected</span></li>
                <li class="flex items-start gap-2"><i data-lucide="x-circle" class="w-[16px] h-[16px] text-red-400 shrink-0 mt-1"></i><span class="text-[14px] text-muted">You pay R1,200/month because that's the rate for your risk category</span></li>
              </ul>
            </div>
            <div class="p-6 border-2 border-accent rounded-[3px] bg-accent/5">
              <div class="font-heading text-[16px] font-bold text-accent mb-3">Starting next week:</div>
              <ul class="space-y-2 m-0 p-0 list-none">
                <li class="flex items-start gap-2"><i data-lucide="check-circle-2" class="w-[16px] h-[16px] text-accent shrink-0 mt-1"></i><span class="text-[14px] text-primary">Elite-5 tracker installed = 73% lower theft risk</span></li>
                <li class="flex items-start gap-2"><i data-lucide="check-circle-2" class="w-[16px] h-[16px] text-accent shrink-0 mt-1"></i><span class="text-[14px] text-primary">Armed response + SAPS integration = preferred customer</span></li>
                <li class="flex items-start gap-2"><i data-lucide="alert-triangle" class="w-[16px] h-[16px] text-orange-500 shrink-0 mt-1"></i><span class="text-[14px] text-primary font-bold">Yet you're still paying R1,200/month</span></li>
              </ul>
            </div>
          </div>

          <div class="bg-background p-8 rounded-[3px] border-l-4 border-primary mb-12">
            <p class="font-body text-[16px] text-primary font-bold mb-4">Here's the uncomfortable truth:</p>
            <p class="font-body text-[15px] text-muted mb-4">
              Your insurer will eventually adjust your rate... at renewal. 11 months from now. Maybe. Meanwhile, other insurers who specialize in tracker-protected vehicles would quote you R750–R850/month starting next month for identical cover.
            </p>
            <p class="font-body text-[15px] text-primary font-bold m-0">
              That's R4,200–R5,400 in savings you're leaving on the table while you wait for your current insurer to "maybe" adjust your rate.
            </p>
          </div>

          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            Why This Moment Matters (And Why Waiting Costs You)
          </h2>
          <div class="space-y-6 mb-12">
            <div class="p-6 border border-border rounded-[3px]">
              <h4 class="font-heading text-[16px] font-bold text-primary mb-3">If you don't address this right now:</h4>
              <p class="text-[14px] text-muted mb-2"><strong>Month 1–11:</strong> You pay full premium despite being a tracker-protected customer</p>
              <p class="text-[14px] text-muted mb-2"><strong>Month 12:</strong> Your renewal arrives with a "tracker discount" of 8–12%</p>
              <p class="text-[14px] text-red-500 font-bold m-0">Meanwhile: You've overpaid R4,000+ while insurers who price tracker customers correctly never got the chance to compete.</p>
            </div>
            <div class="p-6 border-2 border-accent rounded-[3px] bg-accent/5">
              <h4 class="font-heading text-[16px] font-bold text-accent mb-3">If you take 90 seconds right now:</h4>
              <p class="text-[14px] text-primary mb-2"><strong>Today:</strong> Submit one form to the Reverse-Auction Match system</p>
              <p class="text-[14px] text-primary mb-2"><strong>Within 24 hours:</strong> 12+ insurers compete to insure your newly tracker-protected vehicle</p>
              <p class="text-[14px] text-primary mb-2"><strong>Next month:</strong> You're paying R750–R850/month (R350–R450/month saved)</p>
              <p class="text-[14px] text-accent font-bold m-0">Next 12 months: You pocket R4,200–R5,400 that would've evaporated.</p>
            </div>
          </div>

          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            How Insurers Actually Price Tracker-Protected Vehicles
          </h2>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
            When you call your current insurer and say "I just installed a tracker, can you reduce my premium?" they'll offer you an 8–12% "tracker discount" applied at renewal.
          </p>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
            When insurers compete for your tracker-protected profile through the Reverse-Auction Match, they see an Elite-5 tracker + 24/7 monitoring + verified installation. They price you as Tier-1 risk. They quote aggressively because you're exactly the customer they want.
          </p>
          <p class="font-body text-[16px] text-primary font-bold mb-12">
            Result: 28–38% lower premiums vs your current rate, not 8–12%. You just became a premium customer. You should be paying premium-customer rates.
          </p>

          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            The System You Already Trust, Now Working For Your Insurance
          </h2>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-8">
            You just used The Provider Intelligence Engine™ to find your ideal tracker. Now use the Reverse-Auction Match to find your ideal insurance rate. Same philosophy. Different problem.
          </p>
          <div class="space-y-6 mb-16">
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
              <p class="font-body text-[15px] text-primary m-0">You compare, choose the winner, and pocket R350–R450/month starting next billing cycle</p>
            </div>
          </div>

          <div class="bg-primary text-white p-12 rounded-[3px] mb-16">
            <h3 class="font-heading text-[28px] font-medium mb-6 text-white">Why Tracker Customers Save 28-38% More</h3>
            <div class="space-y-6">
              <div>
                <h4 class="font-heading text-[16px] font-bold text-accent mb-2">Average South African driver:</h4>
                <p class="text-[14px] opacity-90 m-0">• Saves R250–R400/month (18–24% reduction)<br />• Reason: Competitive pressure forces better pricing</p>
              </div>
              <div>
                <h4 class="font-heading text-[16px] font-bold text-accent mb-2">Tracker-protected driver:</h4>
                <p class="text-[14px] opacity-90 m-0">• Saves R350–R650/month (28–38% reduction)<br />• Reason: You're a verified low-risk customer + competitive pressure</p>
              </div>
            </div>
            <div class="mt-8 pt-6 border-t border-white/20">
              <p class="font-body text-[15px] italic m-0">
                "Johannesburg driver. 2021 Fortuner. Just installed Elite-5 tracker. Current insurer: R1,180/month. Best quote through Reverse-Auction Match: R798/month. Annual savings: R4,584."
              </p>
            </div>
          </div>

          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            The Three Reasons This Works Better Right Now
          </h2>
          <div class="space-y-6 mb-16">
            <div class="p-6 border border-border rounded-[3px]">
              <h4 class="font-heading text-[18px] font-bold text-primary mb-2">Reason 1: Immediate Savings Start Immediately</h4>
              <p class="text-[14px] text-muted m-0">If you wait 8 months until renewal, you overpay R2,800–R3,600. If you switch now, you save R350–R450/month starting next billing cycle. Net benefit of acting now: R2,760 more in your pocket.</p>
            </div>
            <div class="p-6 border border-border rounded-[3px]">
              <h4 class="font-heading text-[18px] font-bold text-primary mb-2">Reason 2: Insurers Price Confidence, Not History</h4>
              <p class="text-[14px] text-muted m-0">Your current insurer sees a loyal customer and offers a standard discount. Competing insurers see a high-value customer with verified Elite-5 protection and price aggressively to win them.</p>
            </div>
            <div class="p-6 border border-border rounded-[3px]">
              <h4 class="font-heading text-[18px] font-bold text-primary mb-2">Reason 3: You've Already Proven You Take Action</h4>
              <p class="text-[14px] text-muted m-0">You didn't delay the tracker decision. Momentum matters. The best financial decisions happen when you're already in motion, not when you're stuck in analysis paralysis.</p>
            </div>
          </div>

          <div class="bg-background p-8 rounded-[3px] border-l-4 border-accent mb-16">
            <h3 class="font-heading text-[20px] font-bold text-primary mb-4">Your Current Insurer Won't Tell You This</h3>
            <p class="font-body text-[14px] text-muted italic mb-4">Here's a conversation that happens every single week:</p>
            <p class="font-body text-[14px] text-primary mb-2"><strong>Customer:</strong> "Why is my premium still so high? I thought the tracker would lower it?"</p>
            <p class="font-body text-[14px] text-primary mb-2"><strong>Tracker Company:</strong> "Your tracker is working perfectly. The issue isn't protection—it's pricing. Have you shopped your insurance since installing the tracker?"</p>
            <p class="font-body text-[14px] text-primary mb-2"><strong>Customer:</strong> "No, I figured my insurer would adjust it automatically."</p>
            <p class="font-body text-[14px] text-primary mb-4"><strong>Tracker Company:</strong> "They won't. Not proactively. You need to force competition."</p>
            <p class="font-body text-[14px] text-accent font-bold m-0">Two weeks later, same customer: "I'm now saving R420/month. Why didn't I do this sooner?"</p>
          </div>

          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            What's Included (And What You're NOT Signing Up For)
          </h2>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
            <div>
              <h4 class="font-heading text-[16px] font-bold text-primary mb-4">What happens:</h4>
              <ul class="space-y-3 m-0 p-0 list-none">
                <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-0.5"></i><span class="text-[14px] text-muted">Profile goes to 12+ competing insurers</span></li>
                <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-0.5"></i><span class="text-[14px] text-muted">WhatsApp quotes reflecting your new risk tier</span></li>
                <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-0.5"></i><span class="text-[14px] text-muted">Zero obligation to switch</span></li>
                <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-0.5"></i><span class="text-[14px] text-muted">Completely free & POPIA-compliant</span></li>
              </ul>
            </div>
            <div>
              <h4 class="font-heading text-[16px] font-bold text-primary mb-4">What you're NOT getting:</h4>
              <ul class="space-y-3 m-0 p-0 list-none">
                <li class="flex items-start gap-3"><i data-lucide="x-circle" class="w-[18px] h-[18px] text-red-400 shrink-0 mt-0.5"></i><span class="text-[14px] text-muted">Spam calls from brokers</span></li>
                <li class="flex items-start gap-3"><i data-lucide="x-circle" class="w-[18px] h-[18px] text-red-400 shrink-0 mt-0.5"></i><span class="text-[14px] text-muted">Pressure tactics or "limited-time offers"</span></li>
                <li class="flex items-start gap-3"><i data-lucide="x-circle" class="w-[18px] h-[18px] text-red-400 shrink-0 mt-0.5"></i><span class="text-[14px] text-muted">Hidden fees or commission-inflated quotes</span></li>
              </ul>
            </div>
          </div>

          <div class="bg-white border-2 border-primary p-12 rounded-[3px] mb-16 text-center shadow-2xl" id="insurance-form">
            <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-accent/10 text-accent mb-6">
              <i data-lucide="trending-down" class="w-[24px] h-[24px]"></i>
            </div>
            <h3 class="font-heading text-[24px] font-medium text-primary mb-4">Get Your Tracker-Protected Insurance Quotes Now</h3>
            <p class="font-body text-[14px] text-muted mb-8">90 seconds. 12+ competing insurers. R350–R650/month in potential savings.</p>
            <div class="space-y-4 max-w-md mx-auto">
              <input type="text" placeholder="Full Name" class="w-full p-4 border border-border rounded-[3px] font-body text-[14px]" />
              <input type="email" placeholder="Email Address" class="w-full p-4 border border-border rounded-[3px] font-body text-[14px]" />
              <input type="tel" placeholder="Phone Number" class="w-full p-4 border border-border rounded-[3px] font-body text-[14px]" />
              <button type="button" class="w-full py-5 bg-primary text-white font-heading font-bold rounded-full hover:bg-accent transition-colors flex items-center justify-center gap-2">
                Get My Competitive Quotes Now <i data-lucide="arrow-right" class="w-[18px] h-[18px]"></i>
              </button>
            </div>
            <p class="mt-6 font-body text-[11px] text-muted uppercase tracking-widest leading-relaxed">
              By submitting, you agree to be contacted by pre-screened insurance providers. Search A Deal is an affiliate platform earning referral fees. We do not provide insurance services. POPIA-compliant.
            </p>
          </div>

          <div class="space-y-8 text-center border-t border-border pt-16">
            <p class="font-body text-[14px] text-muted italic">
              <strong>P.S. The Tracker Is Handling Theft. But Who's Handling The Overpayment?</strong> You just invested in Elite-5 protection against vehicle theft. That's handled. But theft protection and financial efficiency are two different problems. Take 90 seconds to solve the second.
            </p>
            <p class="font-body text-[14px] text-muted italic">
              <strong>P.P.S. Your Tracker Provider Would Tell You The Same Thing:</strong> When they install your tracker next week, ask them: "Do most customers shop their insurance after installing this?" They'll say: "The smart ones do. Immediately."
            </p>
            <p class="font-body text-[14px] text-muted italic">
              <strong>P.P.P.S. This Window Closes Faster Than You Think:</strong> Right now, you're a freshly tracker-protected customer. Insurers see that as: "Motivated buyer. High-intent. Price aggressively." Six months from now? You're just another renewal.
            </p>
          </div>
        </div>
      </section>
    </div>
  </div>

  <div data-page="how-it-works" aria-hidden="true" class="hidden">
    <div class="pt-[58px] bg-white">
      <section class="py-20 px-[14.5px] md:px-[58px] bg-background">
        <div class="max-w-[1000px] mx-auto text-center">
          <div class="inline-flex items-center gap-2 px-4 py-2 bg-accent/10 text-accent rounded-full font-heading text-[12px] font-bold uppercase tracking-widest mb-8">
            🇿🇦 Built for South Africans. Built against the system.
          </div>
          <h1 class="font-heading text-[clamp(40px,5vw,72px)] font-medium leading-[0.9] tracking-[-0.03em] text-primary mb-8">
            We Built the Platform<br />
            <span class="text-accent">We Wished Had Existed.</span>
          </h1>
          <p class="font-body text-[18px] text-muted max-w-3xl mx-auto mb-8 leading-relaxed">
            Because the old way of finding insurance, trackers, and loans was broken by design, and someone had to fix it.
          </p>
          <p class="font-body text-[16px] text-primary font-bold max-w-3xl mx-auto">
            You already know the problem from our homepage. The spam calls. The impossible comparisons. The premiums that quietly creep up every year. This page is about why we exist and what we stand for.
          </p>
        </div>
      </section>

      <section class="py-20 px-[14.5px] md:px-[58px]">
        <div class="max-w-[800px] mx-auto prose prose-slate prose-lg">
          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            The Problem We Couldn't Ignore.
          </h2>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
            There's a particular kind of frustration that builds slowly. It's not one dramatic moment. It's the accumulation of dozens of small ones, every renewal notice you accepted without questioning, every loan application that left you with a damaged credit score and no offer, every spam call at 7 am from a number you'll never answer again.
          </p>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
            That slow frustration is what South Africans face every single time they need to make a financial decision about their vehicle or their credit. And it isn't accidental.
          </p>
          <div class="bg-primary text-white p-8 rounded-[3px] mb-12">
            <p class="font-body text-[18px] italic opacity-90 m-0">
              The financial services industry in South Africa was built around friction. The harder it is for you to compare, the easier it is for providers to overcharge.
            </p>
          </div>

          <h3 class="font-heading text-[24px] font-medium text-primary mb-6">Here's what the data confirms:</h3>

          <div class="space-y-8 mb-16">
            <div class="p-6 border border-border rounded-[3px] bg-background">
              <h4 class="font-heading text-[18px] font-bold text-primary mb-3 flex items-center gap-2"><i data-lucide="car" class="w-[20px] h-[20px] text-accent"></i> CAR INSURANCE</h4>
              <p class="font-body text-[15px] text-muted mb-4">The average South African pays R800 to R1,400 per month for comprehensive cover. Premiums rose by an average of 15% for good, clean risks in 2023 alone, not because your risk increased, but because your insurer's reinsurance costs did. You absorbed their problem.</p>
              <p class="font-body text-[15px] text-muted m-0">65% of South African motorists are completely uninsured. That means the insured minority is effectively subsidising the systemic risk of the majority. If you have a clean record, secure parking, and have never claimed, you are likely overpaying for someone else's risk profile.</p>
            </div>

            <div class="p-6 border border-border rounded-[3px] bg-background">
              <h4 class="font-heading text-[18px] font-bold text-primary mb-3 flex items-center gap-2"><i data-lucide="radio" class="w-[20px] h-[20px] text-accent"></i> VEHICLE THEFT</h4>
              <p class="font-body text-[15px] text-muted mb-4">According to SAPS crime statistics, approximately 85–96 vehicles are stolen or hijacked in South Africa every single day. Gauteng alone accounts for over 52% of all vehicle theft nationally.</p>
              <p class="font-body text-[15px] text-muted mb-4">30% of stolen vehicles are smuggled across borders. That is not a recovery scenario; that is a permanent loss. The difference between recovery and a write-off is overwhelmingly determined by which tracker you chose, not whether you had one.</p>
              <p class="font-body text-[15px] text-muted m-0">Yet most South Africans are still choosing their tracker from a short list of names they vaguely remember from a billboard. With no way to compare recovery rates, contract terms, or actual 24/7 response infrastructure.</p>
            </div>

            <div class="p-6 border border-border rounded-[3px] bg-background">
              <h4 class="font-heading text-[18px] font-bold text-primary mb-3 flex items-center gap-2"><i data-lucide="credit-card" class="w-[20px] h-[20px] text-accent"></i> PERSONAL LOANS</h4>
              <p class="font-body text-[15px] text-muted mb-4">South African consumer debt reached R2.40 trillion at the end of 2024 (National Credit Regulator). The household debt-to-income ratio stands at 62.5%, meaning that for every R100 earned, R62 is already committed to debt repayment before a single daily expense is met.</p>
              <p class="font-body text-[15px] text-muted mb-4">Over 10 million South Africans are estimated to be over-indebted (FinMark Trust, 2024). And personal loan originations grew by 14.5% year-on-year in Q3 2024 (TransUnion), driven by the rising cost of living, forcing more households into credit just to manage the basics.</p>
              <p class="font-body text-[15px] text-muted m-0">Every multiple loan application creates a hard credit enquiry. Multiple enquiries damage the very credit score you need to get approved for better terms. The system punishes you for trying to find the best deal.</p>
            </div>
          </div>

          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            Why We Built SearchADeal.
          </h2>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
            SearchADeal was not built in a boardroom by people who'd never dealt with an insurer's claims department at 8 pm on a Friday. It was built from a simple, uncomfortable observation:
          </p>
          <div class="bg-accent/10 p-8 rounded-[3px] border-l-4 border-accent mb-8">
            <p class="font-body text-[18px] text-primary italic m-0">
              The information that would save South African consumers billions of rands per year already exists. It just isn't in the same place at the same time, and the industry has no incentive to change that.
            </p>
          </div>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
            We watched people make financially consequential decisions, on insurance that would determine whether their vehicle was written off or recovered, on loans that would affect their credit score for years, with less information than they'd use to buy a microwave.
          </p>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
            We watched good drivers pay premiums priced for bad ones. We watched people submit 4 loan applications in a week and wondered why their credit scores dropped. We watched South Africans pay for tracker contracts without knowing whether their provider even had active recovery infrastructure in their area.
          </p>
          <p class="font-body text-[16px] text-primary font-bold mb-12">
            The solution wasn't complicated. It was just absent. One platform. Verified providers. Real numbers. Zero spam. Free. That became the brief for SearchADeal.
          </p>

          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            The SearchADeal Standard.
          </h2>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-8">
            A comparison platform is only as trustworthy as the choices it makes on your behalf. We set non-negotiables before we onboarded a single provider.
          </p>

          <div class="space-y-8 mb-16">
            <div>
              <h4 class="font-heading text-[20px] font-bold text-primary mb-4 border-b border-border pb-2">On Car Insurance</h4>
              <ul class="space-y-3 m-0 p-0 list-none">
                <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-0.5"></i><span class="text-[15px] text-muted">We only connect you with licensed, established South African insurers. No offshore shell companies. No resellers.</span></li>
                <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-0.5"></i><span class="text-[15px] text-muted">One form sends your profile to multiple competing providers simultaneously. They compete for you, not the other way around.</span></li>
                <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-0.5"></i><span class="text-[15px] text-muted">No spam calls. Providers contact you with real offers. Your number is not sold, resold, or forwarded to lead brokers.</span></li>
                <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-0.5"></i><span class="text-[15px] text-muted">Zero credit check required. Your enquiry will not affect your financial standing.</span></li>
                <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-0.5"></i><span class="text-[15px] text-muted">Zero obligation. You choose, compare, and walk away with zero consequence.</span></li>
              </ul>
            </div>
            <div>
              <h4 class="font-heading text-[20px] font-bold text-primary mb-4 border-b border-border pb-2">On Car Trackers</h4>
              <ul class="space-y-3 m-0 p-0 list-none">
                <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-0.5"></i><span class="text-[15px] text-muted">We do not list all 44+ tracker providers in South Africa. We list 5. The 5 that passed every non-negotiable on our vetting criteria.</span></li>
                <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-0.5"></i><span class="text-[15px] text-muted">SAPS partnerships, armed response integration, and proven recovery networks are baseline requirements, not optional extras.</span></li>
                <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-0.5"></i><span class="text-[15px] text-muted">No resellers. No middlemen. You connect directly with installers who are accountable for their performance.</span></li>
              </ul>
            </div>
            <div>
              <h4 class="font-heading text-[20px] font-bold text-primary mb-4 border-b border-border pb-2">On Personal Loans</h4>
              <ul class="space-y-3 m-0 p-0 list-none">
                <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-0.5"></i><span class="text-[15px] text-muted">Every lender in our network is NCR-registered and NCA-compliant. Non-negotiable, always.</span></li>
                <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-0.5"></i><span class="text-[15px] text-muted">One application. 15+ registered lenders. Minimised credit impact. You are assessed before a hard enquiry is run.</span></li>
                <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-0.5"></i><span class="text-[15px] text-muted">You see the interest rate, total cost of credit, and fees, side by side, in one place, before you decide anything.</span></li>
                <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-0.5"></i><span class="text-[15px] text-muted">We include banks, neobanks, and digital-first lenders. Not just the names on billboards.</span></li>
              </ul>
            </div>
          </div>

          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            The Market We're Operating In.
          </h2>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-8">
            We want you to understand the scale of what we're trying to solve, backed by publicly available data, not marketing language.
          </p>

          <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
            <div class="bg-background p-6 rounded-[3px] text-center border border-border">
              <div class="font-heading text-[32px] font-bold text-accent mb-2">R2.4T</div>
              <div class="font-heading text-[14px] font-bold text-primary mb-1">Consumer Debt</div>
              <div class="font-body text-[12px] text-muted">South Africa, 2024 — NCR</div>
            </div>
            <div class="bg-background p-6 rounded-[3px] text-center border border-border">
              <div class="font-heading text-[32px] font-bold text-accent mb-2">85–96</div>
              <div class="font-heading text-[14px] font-bold text-primary mb-1">Vehicles Stolen</div>
              <div class="font-body text-[12px] text-muted">Per day — SAPS Stats</div>
            </div>
            <div class="bg-background p-6 rounded-[3px] text-center border border-border">
              <div class="font-heading text-[32px] font-bold text-accent mb-2">62.5%</div>
              <div class="font-heading text-[14px] font-bold text-primary mb-1">Debt-to-Income</div>
              <div class="font-body text-[12px] text-muted">SA Household ratio — SARB</div>
            </div>
            <div class="bg-background p-6 rounded-[3px] text-center border border-border">
              <div class="font-heading text-[32px] font-bold text-accent mb-2">10M+</div>
              <div class="font-heading text-[14px] font-bold text-primary mb-1">Over-Indebted</div>
              <div class="font-body text-[12px] text-muted">South Africans — FinMark</div>
            </div>
          </div>

          <p class="font-body text-[16px] text-muted leading-relaxed mb-12">
            These aren't abstract statistics. They are the lived financial reality of the people SearchADeal was built to serve. Every rand saved on a more competitive insurance premium. Every loan is matched at better terms. Every vehicle was recovered because the right tracker was in place. This is the work.
          </p>

          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            How We Make Money, And Why It Doesn't Affect You.
          </h2>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
            We believe you deserve a straight answer to this question. Here it is:
          </p>
          <div class="bg-primary text-white p-8 rounded-[3px] mb-8">
            <p class="font-body text-[18px] font-bold m-0">
              SearchADeal earns a referral fee from providers when we successfully connect them with a potential customer.
            </p>
          </div>
          <ul class="space-y-3 m-0 p-0 list-none mb-8">
            <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-0.5"></i><span class="text-[15px] text-muted">This fee is paid by the provider, not by you.</span></li>
            <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-0.5"></i><span class="text-[15px] text-muted">It is not added to your premium, your interest rate, or your contract cost.</span></li>
            <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-0.5"></i><span class="text-[15px] text-muted">It does not affect which providers appear on the platform; all vetted providers in each category are shown.</span></li>
          </ul>
          <p class="font-body text-[20px] text-primary font-bold mb-8 text-center">
            You pay nothing. Ever.
          </p>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-12">
            This is the same model used by established comparison platforms worldwide, and it is fully disclosed on our "How We Make Money" section. Our business only works if the providers we list are genuinely competitive and genuinely worth comparing. If they aren't, you don't convert, and we don't earn. Your incentive and ours are perfectly aligned. We are not an insurer. We are not a credit provider. We are not a broker. We are a comparison platform, structurally positioned to give you information, not to sell you anything.
          </p>

          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            What We Will Never Do.
          </h2>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-8">
            Commitments mean nothing without red lines. Here are ours:
          </p>
          <div class="space-y-6 mb-12">
            <div class="flex items-start gap-4 p-6 border border-border rounded-[3px] bg-background">
              <i data-lucide="x-circle" class="w-[24px] h-[24px] text-red-500 shrink-0"></i>
              <div>
                <h4 class="font-heading text-[16px] font-bold text-primary mb-2">We will never sell, share, or forward your personal details to lead brokers or data resellers.</h4>
                <p class="text-[14px] text-muted m-0">Your information goes directly to vetted providers in our network, and nowhere else.</p>
              </div>
            </div>
            <div class="flex items-start gap-4 p-6 border border-border rounded-[3px] bg-background">
              <i data-lucide="x-circle" class="w-[24px] h-[24px] text-red-500 shrink-0"></i>
              <div>
                <h4 class="font-heading text-[16px] font-bold text-primary mb-2">We will never list a provider we haven't vetted against our non-negotiable criteria.</h4>
                <p class="text-[14px] text-muted m-0">More providers on the list means more potential revenue for us. We choose fewer, better providers instead.</p>
              </div>
            </div>
            <div class="flex items-start gap-4 p-6 border border-border rounded-[3px] bg-background">
              <i data-lucide="x-circle" class="w-[24px] h-[24px] text-red-500 shrink-0"></i>
              <div>
                <h4 class="font-heading text-[16px] font-bold text-primary mb-2">We will never obscure pricing, hide fees, or use vague estimates in place of real numbers.</h4>
                <p class="text-[14px] text-muted m-0">If a provider can't or won't show you real numbers, they don't appear on this platform.</p>
              </div>
            </div>
            <div class="flex items-start gap-4 p-6 border border-border rounded-[3px] bg-background">
              <i data-lucide="x-circle" class="w-[24px] h-[24px] text-red-500 shrink-0"></i>
              <div>
                <h4 class="font-heading text-[16px] font-bold text-primary mb-2">We will never pressure you toward a decision.</h4>
                <p class="text-[14px] text-muted m-0">You are always in control. Compare, choose, and walk away, completely free, completely obligation-free, every time.</p>
              </div>
            </div>
            <div class="flex items-start gap-4 p-6 border border-border rounded-[3px] bg-background">
              <i data-lucide="x-circle" class="w-[24px] h-[24px] text-red-500 shrink-0"></i>
              <div>
                <h4 class="font-heading text-[16px] font-bold text-primary mb-2">We will never knowingly list a non-compliant lender.</h4>
                <p class="text-[14px] text-muted m-0">NCR registration and NCA compliance are baseline requirements. Non-negotiable. Always.</p>
              </div>
            </div>
          </div>
          <p class="font-body text-[16px] text-primary font-bold mb-16 text-center">
            All personal information is handled in accordance with POPIA — the Protection of Personal Information Act.
          </p>

          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            The Comparison Platform Model, And Why It Works.
          </h2>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
            Price comparison platforms are not a new concept globally. In the UK, platforms like MoneySuperMarket have saved consumers an estimated £2.5 billion annually across insurance and financial products. In Australia, Compare the Market processes millions of insurance comparisons per year. The model is proven: when consumers have access to transparent, side-by-side comparisons, prices come down, and product quality goes up.
          </p>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
            South Africa has been slower to adopt this model at scale. That gap is exactly where SearchADeal operates. Our network includes NCR-registered lenders for personal loans, multiple licensed insurers for car insurance, and South Africa's top 5 vetted tracker providers, all competing for your business simultaneously through a single form.
          </p>
          <div class="bg-accent/10 p-8 rounded-[3px] border-l-4 border-accent mb-8">
            <p class="font-body text-[16px] text-primary italic m-0">
              "The market for comparison platforms in South Africa's financial services sector is significantly underdeveloped relative to the size of the opportunity. Consumers remain systematically underserved when it comes to transparent pricing for insurance, credit, and vehicle security products."<br />
              <span class="text-[14px] text-muted mt-2 block">— Industry context — South African financial services market analysis</span>
            </p>
          </div>
          <p class="font-body text-[16px] text-primary font-bold mb-16">
            We are not the first comparison platform in South Africa. We are the first to combine car insurance, car trackers, and personal loans into a single, mobile-first platform built to eliminate the three things South Africans told us they hate most: spam calls, damaged credit scores, and wasted time.
          </p>

          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            Your Data. Your Rights.
          </h2>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
            South Africa's Protection of Personal Information Act (POPIA) exists to protect your data. We take that seriously, not because we have to, but because the only way to build genuine trust is to earn it.
          </p>
          <ul class="space-y-3 m-0 p-0 list-none mb-6">
            <li class="flex items-start gap-3"><i data-lucide="shield-check" class="w-[18px] h-[18px] text-accent shrink-0 mt-0.5"></i><span class="text-[15px] text-muted">Your details go directly to vetted providers in our network. Not to lead brokers. Not to data resellers. Not to anyone outside our verified network.</span></li>
            <li class="flex items-start gap-3"><i data-lucide="shield-check" class="w-[18px] h-[18px] text-accent shrink-0 mt-0.5"></i><span class="text-[15px] text-muted">We do not retain your data beyond what is required to operate the comparison service.</span></li>
            <li class="flex items-start gap-3"><i data-lucide="shield-check" class="w-[18px] h-[18px] text-accent shrink-0 mt-0.5"></i><span class="text-[15px] text-muted">You have the right to access, correct, and request deletion of your personal information. Contact us anytime.</span></li>
          </ul>
          <p class="font-body text-[16px] text-primary font-bold mb-16">
            Full POPIA compliance. No fine print. No buried clauses.
          </p>

          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
            Where We're Going.
          </h2>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
            The problem we're solving is not small. Billions of rands are misallocated every year in South Africa's car insurance, vehicle tracking, and personal lending markets, not because better products don't exist, but because the information required to find them isn't accessible.
          </p>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
            SearchADeal's vision is straightforward: make it possible for every South African to find the best available deal on the financial products that matter most to their daily lives, in minutes, not weeks, at no cost to them.
          </p>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
            We're starting with car insurance, car trackers, and personal loans. We're building the infrastructure, the provider relationships, and the trust required to expand that mandate. Every comparison you run on this platform is a data point that helps us understand what South Africans need, and a vote for the principle that transparency and access to information should be the standard, not the exception.
          </p>
          <div class="bg-primary text-white p-8 rounded-[3px] mb-16 text-center">
            <p class="font-body text-[18px] font-bold m-0">
              If you're the kind of person who refuses to settle for 'good enough' when 'significantly better' exists, you're exactly who SearchADeal was built for.
            </p>
          </div>

          <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight text-center">
            Ready to Stop Overpaying?
          </h2>
          <p class="font-body text-[16px] text-muted leading-relaxed mb-8 text-center">
            You've read who we are and what we stand for. Now let the numbers do the talking. The comparison takes minutes. The savings can last years. And if nothing fits your situation, you leave with zero obligation, zero consequence, and zero spam calls.
          </p>

          <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <button type="button" data-nav="car-insurance" class="p-6 border-2 border-primary rounded-[3px] hover:bg-primary hover:text-white transition-colors group text-left">
              <div class="font-heading text-[20px] font-bold mb-2 flex items-center gap-2"><i data-lucide="car" class="w-[20px] h-[20px]"></i> Compare Insurance</div>
              <div class="font-body text-[14px] opacity-80 mb-4">Free · 127 seconds</div>
              <div class="flex items-center gap-2 font-bold text-[14px] group-hover:translate-x-1 transition-transform">Start <i data-lucide="arrow-right" class="w-[16px] h-[16px]"></i></div>
            </button>
            <button type="button" data-nav="car-trackers" class="p-6 border-2 border-primary rounded-[3px] hover:bg-primary hover:text-white transition-colors group text-left">
              <div class="font-heading text-[20px] font-bold mb-2 flex items-center gap-2"><i data-lucide="radio" class="w-[20px] h-[20px]"></i> Compare Trackers</div>
              <div class="font-body text-[14px] opacity-80 mb-4">Free · 60 seconds</div>
              <div class="flex items-center gap-2 font-bold text-[14px] group-hover:translate-x-1 transition-transform">Start <i data-lucide="arrow-right" class="w-[16px] h-[16px]"></i></div>
            </button>
            <button type="button" data-nav="personal-loans" class="p-6 border-2 border-primary rounded-[3px] hover:bg-primary hover:text-white transition-colors group text-left">
              <div class="font-heading text-[20px] font-bold mb-2 flex items-center gap-2"><i data-lucide="credit-card" class="w-[20px] h-[20px]"></i> Compare Loans</div>
              <div class="font-body text-[14px] opacity-80 mb-4">Free · 5 minutes</div>
              <div class="flex items-center gap-2 font-bold text-[14px] group-hover:translate-x-1 transition-transform">Start <i data-lucide="arrow-right" class="w-[16px] h-[16px]"></i></div>
            </button>
          </div>
          <p class="font-body text-[14px] text-muted font-bold text-center mb-16 uppercase tracking-widest">
            Free · No obligation · No spam · Takes minutes
          </p>

          <div class="bg-background p-8 rounded-[3px] border border-border text-[11px] text-muted leading-relaxed">
            <p class="font-bold mb-2 uppercase tracking-widest">Legal Disclosure</p>
            <p>SearchADeal is not a registered financial services provider, insurer, or credit provider. We operate as an affiliate comparison platform connecting consumers with registered providers. For personal loans, all lenders are NCR-registered and NCA-compliant. Loan approval is not guaranteed and depends on each lender's independent assessment. Borrowing costs money; assess affordability before accepting any offer. All lenders must provide a pre-agreement statement and quotation showing total cost of credit before you sign. Your information is handled in accordance with POPIA. For car trackers: providers are vetted, but SearchADeal provides no warranty on provider performance. The market statistics cited are sourced from publicly available data, including SAPS crime statistics, National Credit Regulator reports, TransUnion Industry Insights, the FinMark Trust FinScope Consumer Survey 2024, the South African Reserve Bank, and industry analysis.</p>
          </div>
        </div>
      </section>
    </div>
  </div>
</main>

@include('partials/tailwind_footer');
