@include('partials.tailwind_header')

<main class="flex-grow pt-[58px]">

  {{-- ===================== HERO SECTION ===================== --}}
  <section class="pt-16 pb-12">
    <div class="max-w-[768px] mx-auto px-6 text-center">

      <p class="text-accent uppercase font-bold text-[13px] md:text-[14px] tracking-[0.08em] mb-4 font-heading">
        The Reverse-Auction Match
      </p>

      <h1 class="text-primary text-4xl md:text-6xl font-bold leading-[1.05] tracking-[-0.02em] mb-6 font-heading">
        R6,847 Per Year. Evaporated.<br>
        <span class="text-accent">Because Nobody Showed You This Before.</span>
      </h1>

      {{-- Full-bleed hero image --}}
      <div class="w-[100vw] relative left-1/2 -translate-x-1/2 mt-8 mb-8">
        <img
          src="https://billboardads.digitalcavemen.com/wp-content/uploads/2026/04/Hero-Section-Varient-A.png"
          alt="Hero Section"
          class="w-full h-auto object-cover"
        />
      </div>

      <p class="text-muted text-[20px] md:text-[24px] italic leading-[1.4] max-w-2xl mx-auto mb-10 font-body">
        While South African Drivers Renewed at 11.2% Higher Premiums Last Month, 4,219 Others Discovered Cover That Costs 38&ndash;47% Less, In 127 Seconds.
      </p>

      <div class="flex flex-col md:flex-row items-center justify-center gap-6 mb-12">
        <div class="flex items-center gap-2 text-[14px] text-muted">
          <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0"></i>
          <span class="font-medium text-primary font-body">Completely free</span>
        </div>
        <div class="flex items-center gap-2 text-[14px] text-muted">
          <i data-lucide="clock" class="w-[18px] h-[18px] text-accent shrink-0"></i>
          <span class="font-medium text-primary font-body">Works in under 3 minutes</span>
        </div>
        <div class="flex items-center gap-2 text-[14px] text-muted">
          <i data-lucide="zap" class="w-[18px] h-[18px] text-accent shrink-0"></i>
          <span class="font-medium text-primary font-body">Providers fight for YOUR business</span>
        </div>
      </div>

      <a
        href="#insurance-form"
        class="inline-block bg-accent hover:bg-amber-600 text-white font-bold
        text-[18px] md:text-[20px] py-4 px-8 rounded-lg shadow-lg transition-colors w-full
        md:w-auto tracking-[0.01em] font-heading"
        style="background: #E23E3E"
      >
        Get Your Competitive Quotes Now &rarr;
      </a>

    </div>
  </section>

  {{-- ===================== EDITORIAL CONTENT ===================== --}}
  <section class="py-12">
    <div class="max-w-2xl mx-auto px-6">

      {{-- Opening pull quote --}}
      <div class="pl-4 border-l-[4px] border-accent mb-12 mt-8">
        <p class="text-primary text-[20px] md:text-[24px] italic m-0 font-body leading-[1.55]">
          &ldquo;if you reading this, you already know something shifted. You felt it. That uncomfortable recognition that you might be paying for someone else&rsquo;s claims while providers who actually want your profile never get the chance to quote you.&rdquo;
        </p>
      </div>

      {{-- ---- Section: R287 Million Leak ---- --}}
      <h2 class="text-primary text-[26px] md:text-[32px] font-bold leading-[1.15] tracking-[-0.01em] mb-6 font-heading">
        The R287 million leak South African drivers don&rsquo;t see
      </h2>

      <img
        src="https://billboardads.digitalcavemen.com/wp-content/uploads/2026/04/The-R287-Million-Leak-Section.png"
        alt="The R287 Million Leak"
        class="w-full h-auto mb-8 rounded-lg object-cover"
      />

      <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] mb-5 font-body">
        Last month alone, 61,842 South African drivers clicked &ldquo;renew&rdquo; on their car insurance. Most didn&rsquo;t compare. Most didn&rsquo;t shop. Most assumed &ldquo;insurance is expensive everywhere.&rdquo;
      </p>
      <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] mb-5 font-bold font-body">
        Collectively, they overpaid by R287 million.
      </p>
      <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] mb-12 font-body">
        Not because they&rsquo;re careless. Not because better options don&rsquo;t exist. Because the system is designed to keep you exactly where you are. Think about your last renewal. Premium went up 9%, 11%, maybe 13%. You thought: &ldquo;Everything&rsquo;s going up. Load-shedding. Crime. Parts are expensive. What can I do?&rdquo;
      </p>

      {{-- Dark box: What actually happened --}}
      <div class="text-white p-8 rounded-lg mb-16 shadow-sm" style="background: #0F172A;">
        <h3 class="text-[20px] md:text-[24px] tracking-[-0.01em] font-bold mb-6 text-white leading-[1.2] font-heading">
          What actually happened during your last renewal
        </h3>
        <p class="text-[17px] md:text-[18px] opacity-90 mb-8 leading-[1.6] font-body">
          December 2024. Your renewal notice arrives. R1,247/month. Up from R1,118 last year. You barely glance at it before paying. But here&rsquo;s what your insurer didn&rsquo;t tell you:
        </p>
        <div class="space-y-4">
          <div class="flex items-start gap-4">
            <i data-lucide="x-circle" class="w-[20px] h-[20px] text-accent shrink-0 mt-1"></i>
            <p class="text-[17px] md:text-[18px] m-0 leading-[1.6] opacity-90 font-body">The driver three streets over who claimed R180,000 after a smash-and-grab</p>
          </div>
          <div class="flex items-start gap-4">
            <i data-lucide="x-circle" class="w-[20px] h-[20px] text-accent shrink-0 mt-1"></i>
            <p class="text-[17px] md:text-[18px] m-0 leading-[1.6] opacity-90 font-body">Your neighbor&rsquo;s 19-year-old who wrote off a Golf GTI street racing</p>
          </div>
          <div class="flex items-start gap-4">
            <i data-lucide="x-circle" class="w-[20px] h-[20px] text-accent shrink-0 mt-1"></i>
            <p class="text-[17px] md:text-[18px] m-0 leading-[1.6] opacity-90 font-body">The guy in your suburb with three claims in 18 months</p>
          </div>
        </div>
        <div class="pl-4 border-l-[4px] border-accent mt-10">
          <p class="text-[18px] md:text-[20px] italic m-0 opacity-90 font-body leading-[1.55]">
            You&rsquo;ve never claimed. You park in a secure estate. Yet you&rsquo;re paying the same premium architecture as high-risk drivers.
          </p>
        </div>
      </div>

      {{-- ---- Section: Why Old Ways Failed ---- --}}
      <p class="text-accent uppercase font-bold text-[13px] tracking-[0.08em] mb-3 font-heading">
        THE OLD WAY IS BROKEN
      </p>
      <h2 class="text-primary text-[26px] md:text-[32px] font-bold leading-[1.15] tracking-[-0.01em] mb-8 font-heading">
        Why everything you&rsquo;ve tried before failed
      </h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
        <div class="p-6 border border-border rounded-lg bg-background grey-bg">
          <div class="text-red-500 mb-3 font-bold text-[16px] flex items-center gap-2 font-heading">
            <i data-lucide="x-circle" class="w-[20px] h-[20px] shrink-0"></i> Manual Calls
          </div>
          <p class="text-[15px] sm:text-[16px] leading-[1.5] text-primary m-0 font-body">Took 90 minutes. Two never called back. One quoted the same rate.</p>
        </div>
        <div class="p-6 border border-border rounded-lg bg-background grey-bg">
          <div class="text-red-500 mb-3 font-bold text-[16px] flex items-center gap-2 font-heading">
            <i data-lucide="x-circle" class="w-[20px] h-[20px] shrink-0"></i> Old Comparison
          </div>
          <p class="text-[15px] sm:text-[16px] leading-[1.5] text-primary m-0 font-body">Entered info 6 times. Got spammed by brokers. Unclear rates.</p>
        </div>
        <div class="p-6 border border-border rounded-lg bg-background grey-bg">
          <div class="text-red-500 mb-3 font-bold text-[16px] flex items-center gap-2 font-heading">
            <i data-lucide="x-circle" class="w-[20px] h-[20px] shrink-0"></i> Your Broker
          </div>
          <p class="text-[15px] sm:text-[16px] leading-[1.5] text-primary m-0 font-body">Came back with one alternative from their commission structure.</p>
        </div>
      </div>

      <hr class="border-t border-border my-12">

      {{-- ---- Section: The Discovery ---- --}}
      <h2 class="text-primary text-[26px] md:text-[32px] font-bold leading-[1.15] tracking-[-0.01em] mb-8 font-heading">
        The discovery that changed how 4,200+ South Africans buy car insurance
      </h2>

      <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] mb-5 font-body">
        October 2023. Mid-week. 2:47 PM. An IT consultant from Sandton gets his renewal notice. R1,580/month. Up 13.4% from last year. Same insurer for 11 years. Zero claims. Drives a 2020 Fortuner.
      </p>
      <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] mb-8 font-body">
        He&rsquo;s frustrated. He starts calling around. Three dead-end conversations later, a broker tries pitching him life insurance instead. Then a colleague mentions something interesting.
      </p>

      <div class="pl-4 border-l-[4px] border-accent mb-8 mt-4">
        <p class="text-primary text-[20px] md:text-[24px] italic m-0 font-body leading-[1.55]">
          &ldquo;There&rsquo;s a platform. You fill out one form. Your details go to multiple providers at once. They compete. You pick the winner. No spam calls. No pressure. Just quotes.&rdquo;
        </p>
      </div>

      <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] mb-8 font-body">
        Skeptical, but R17,400-per-year frustrated, he tries it.
      </p>

      <img
        src="https://billboardads.digitalcavemen.com/wp-content/uploads/2026/04/The-IT-Consultant-Story-Varient-A.png"
        alt="IT Consultant Story"
        class="w-full h-auto mb-8 rounded-lg object-cover"
      />

      {{-- Results box --}}
      <div class="bg-background p-8 rounded-lg border-l-[4px] border-accent mb-8 grey-bg">
        <h4 class="text-[13px] font-bold text-primary mb-4 uppercase tracking-widest font-heading">THE RESULTS</h4>
        <div class="space-y-4">
          <div class="flex flex-col sm:flex-row sm:justify-between text-[16px] md:text-[18px] pb-3 border-b border-border font-body">
            <span class="text-muted">Provider A:</span>
            <span class="font-bold text-primary">R1,140/mo &mdash; saves R5,280/yr</span>
          </div>
          <div class="flex flex-col sm:flex-row sm:justify-between text-[16px] md:text-[18px] pb-3 border-b border-border font-body">
            <span class="text-muted">Provider B:</span>
            <span class="font-bold text-primary">R968/mo &mdash; saves R7,344/yr</span>
          </div>
          <div class="flex flex-col sm:flex-row sm:justify-between text-[16px] md:text-[18px] pt-1 font-body">
            <span class="text-muted font-bold">Provider C:</span>
            <span class="font-bold text-accent">R924/mo &mdash; saves R7,872/yr</span>
          </div>
        </div>
      </div>

      <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] mb-16 font-body">
        He switches to Provider C. 18 months later, he&rsquo;s saved R14,616. Enough to fully cover his daughter&rsquo;s first year at Wits. Same driver. Same car. Different system.
      </p>

      <hr class="border-t border-border my-12">

      {{-- ---- Section: How It Works (Process Timeline) ---- --}}
      <h2 class="text-primary text-[26px] md:text-[32px] font-bold leading-[1.15] tracking-[-0.01em] mb-10 text-center font-heading">
        How the reverse-auction match actually works
      </h2>

      <div class="space-y-12 mb-16 relative">
        {{-- Vertical connector line on desktop --}}
        <div class="absolute left-[15px] top-6 bottom-12 w-[1px] bg-border hidden md:block"></div>

        <div class="flex flex-col md:flex-row gap-6 relative z-10">
          <div class="w-8 h-8 bg-primary text-white rounded-full items-center justify-center font-bold text-[16px] shrink-0 mt-1 hidden md:flex font-heading">1</div>
          <div>
            <h3 class="text-primary text-[22px] md:text-[24px] font-bold mb-3 font-heading">You complete one form</h3>
            <p class="text-primary text-[18px] leading-[1.65] m-0 font-body">Vehicle details, driver profile, current premium. No credit checks. 127 seconds average.</p>
          </div>
        </div>

        <div class="flex flex-col md:flex-row gap-6 relative z-10">
          <div class="w-8 h-8 bg-primary text-white rounded-full items-center justify-center font-bold text-[16px] shrink-0 mt-1 hidden md:flex font-heading">2</div>
          <div>
            <h3 class="text-primary text-[22px] md:text-[24px] font-bold mb-3 font-heading">Profile reaches 12+ providers</h3>
            <p class="text-primary text-[18px] leading-[1.65] m-0 font-body">Legacy insurers, direct providers, and telematics specialists compete for your business automatically.</p>
          </div>
        </div>

        <div class="flex flex-col md:flex-row gap-6 relative z-10">
          <div class="w-8 h-8 bg-primary text-white rounded-full items-center justify-center font-bold text-[16px] shrink-0 mt-1 hidden md:flex font-heading">3</div>
          <div>
            <h3 class="text-primary text-[22px] md:text-[24px] font-bold mb-3 font-heading">Receive competitive quotes</h3>
            <p class="text-primary text-[18px] leading-[1.65] m-0 font-body">Phone call with complete breakdowns. You compare. You choose. You decide.</p>
          </div>
        </div>

        <div class="flex flex-col md:flex-row gap-6 relative z-10">
          <div class="w-8 h-8 bg-primary text-white rounded-full items-center justify-center font-bold text-[16px] shrink-0 mt-1 hidden md:flex font-heading">4</div>
          <div>
            <h3 class="text-primary text-[22px] md:text-[24px] font-bold mb-3 font-heading">Consistently save R400&ndash;R850/month</h3>
            <p class="text-primary text-[18px] leading-[1.65] m-0 font-body">Insurers send their sharpest pricing because they know they&rsquo;re in a competitive environment.</p>
          </div>
        </div>
      </div>

      {{-- Uncomfortable Math callout --}}
      <div class="p-8 border-l-[4px] border-accent mb-16 text-center" style="background: rgba(245,158,11,0.08);">
        <h3 class="text-[20px] md:text-[24px] font-bold mb-4 text-primary font-heading">The Uncomfortable Math</h3>
        <p class="text-[17px] md:text-[20px] mb-4 text-primary leading-[1.65] font-body">
          Staying put costs you approximately <strong class="text-accent font-extrabold">R35,000</strong> over 5 years.
        </p>
        <p class="text-[17px] text-muted leading-[1.65] m-0 italic font-body">
          That&rsquo;s a Mauritius holiday. A down payment on solar panels. Your child&rsquo;s Grade 1 school fees.
        </p>
      </div>

      <hr class="border-t border-border my-12">

      {{-- ---- Section: Why This Works in SA ---- --}}
      <h2 class="text-primary text-[26px] md:text-[32px] font-bold leading-[1.15] tracking-[-0.01em] mb-8 font-heading">
        Why this works in South Africa
      </h2>
      <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] mb-10 font-body">
        Most comparison platforms were built for European markets. Copy-paste code. Awkward user experience. Data handling nightmares. Here&rsquo;s why the Reverse-Auction Match is fundamentally different:
      </p>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-16">
        <div class="flex items-start gap-3 p-6 bg-background border border-border rounded-lg grey-bg">
          <i data-lucide="check-circle-2" class="w-6 h-6 text-accent shrink-0 mt-0.5"></i>
          <div>
            <div class="text-[16px] font-bold text-primary mb-1 font-heading">POPIA-compliant</div>
            <p class="text-[15px] text-muted leading-[1.5] m-0 font-body">Data is encrypted end-to-end, never sold, only shared with providers you approve.</p>
          </div>
        </div>
        <div class="flex items-start gap-3 p-6 bg-background border border-border rounded-lg grey-bg">
          <i data-lucide="check-circle-2" class="w-6 h-6 text-accent shrink-0 mt-0.5"></i>
          <div>
            <div class="text-[16px] font-bold text-primary mb-1 font-heading">Load-shedding resilient</div>
            <p class="text-[15px] text-muted leading-[1.5] m-0 font-body">Quotes queue during outages and process instantly when power returns.</p>
          </div>
        </div>
        <div class="flex items-start gap-3 p-6 bg-background border border-border rounded-lg grey-bg">
          <i data-lucide="check-circle-2" class="w-6 h-6 text-accent shrink-0 mt-0.5"></i>
          <div>
            <div class="text-[16px] font-bold text-primary mb-1 font-heading">Zero broker commissions</div>
            <p class="text-[15px] text-muted leading-[1.5] m-0 font-body">Direct-to-insurer matching means those savings flow to you.</p>
          </div>
        </div>
        <div class="flex items-start gap-3 p-6 bg-background border border-border rounded-lg grey-bg">
          <i data-lucide="check-circle-2" class="w-6 h-6 text-accent shrink-0 mt-0.5"></i>
          <div>
            <div class="text-[16px] font-bold text-primary mb-1 font-heading">Built for SA risk profiles</div>
            <p class="text-[15px] text-muted leading-[1.5] m-0 font-body">Understands hijacking hotspots, smash-and-grab zones, and estate security.</p>
          </div>
        </div>
      </div>

      <hr class="border-t border-border my-12">

      {{-- ---- Section: The One Belief ---- --}}
      <h2 class="text-primary text-[26px] md:text-[32px] font-bold leading-[1.15] tracking-[-0.01em] mb-6 text-center font-heading">
        The one belief that will stop you
      </h2>

      <div class="text-white p-10 rounded-lg mb-16 shadow-sm" style="background: #0F172A;">
        <p class="text-[18px] md:text-[22px] mb-8 italic opacity-90 leading-[1.5] text-center max-w-lg mx-auto font-body">
          &ldquo;I&rsquo;ve been with my insurer for 9 years. I don&rsquo;t want to lose my loyalty discount.&rdquo;
        </p>
        <p class="text-[17px] md:text-[18px] mb-6 leading-[1.6] opacity-90 text-center max-w-lg mx-auto font-body">
          Here&rsquo;s the data your insurer doesn&rsquo;t want you to see: Most insurers increase premiums by 8&ndash;13% annually for existing customers while offering new customers 18&ndash;27% discounts to switch in.
        </p>
        <div class="border-t pt-6 mt-6" style="border-color: rgba(255,255,255,0.2);">
          <p class="text-[18px] md:text-[20px] font-bold text-center m-0 leading-[1.5] font-heading">
            Your &ldquo;loyalty discount&rdquo; isn&rsquo;t a discount. You&rsquo;re being penalized for staying.
          </p>
        </div>
      </div>

      {{-- ---- Section: What's Included (The Guarantee) ---- --}}
      <div class="bg-background p-10 rounded-lg border-2 border-border mb-16 relative grey-bg">
        {{-- Floating label badge --}}
        <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-white px-4">
          <span class="text-[13px] font-bold uppercase tracking-widest text-accent font-heading">THE GUARANTEE</span>
        </div>
        <h3 class="text-[22px] md:text-[26px] font-bold text-primary mb-8 text-center mt-2 font-heading">
          What&rsquo;s included when you submit your profile
        </h3>
        <ul class="space-y-5 m-0 p-0 list-none">
          <li class="flex items-center gap-4 text-[17px] md:text-[19px] text-primary font-body">
            <i data-lucide="check-circle-2" class="w-6 h-6 text-accent shrink-0"></i>
            <span class="font-medium">Instant submission to 12+ competing providers</span>
          </li>
          <li class="flex items-center gap-4 text-[17px] md:text-[19px] text-primary font-body">
            <i data-lucide="check-circle-2" class="w-6 h-6 text-accent shrink-0"></i>
            <span class="font-medium">Direct quotes via direct call with an expert ready to answer all your questions within minutes of your application.</span>
          </li>
          <li class="flex items-center gap-4 text-[17px] md:text-[19px] text-primary font-body">
            <i data-lucide="check-circle-2" class="w-6 h-6 text-accent shrink-0"></i>
            <span class="font-medium">Zero obligation to switch (compare first, decide after)</span>
          </li>
          <li class="flex items-center gap-4 text-[17px] md:text-[19px] text-primary font-body">
            <i data-lucide="check-circle-2" class="w-6 h-6 text-accent shrink-0"></i>
            <span class="font-medium">POPIA-compliant data handling (full encryption)</span>
          </li>
          <li class="flex items-center gap-4 text-[17px] md:text-[19px] text-primary font-body">
            <i data-lucide="check-circle-2" class="w-6 h-6 text-accent shrink-0"></i>
            <span class="font-medium">Completely free to use (insurers pay us)</span>
          </li>
        </ul>
      </div>

      <hr class="border-t border-border my-12">

      {{-- ---- Section: FAQs ---- --}}
      <h2 class="text-primary text-[26px] md:text-[32px] font-bold leading-[1.15] tracking-[-0.01em] mb-10 text-center font-heading">
        Your questions answered
      </h2>

      <div class="mb-16 border-t border-border">
        <div class="py-6 border-b border-border">
          <h3 class="text-primary text-[22px] italic mb-3 font-body">Will my information be sold to 50 companies?</h3>
          <p class="text-primary text-[18px] leading-[1.65] m-0 font-body">No. We only share your profile with FSCA-registered insurers you&rsquo;ve explicitly approved. Full POPIA compliance.</p>
        </div>
        <div class="py-6 border-b border-border">
          <h3 class="text-primary text-[22px] italic mb-3 font-body">Is this actually free or is there a hidden fee later?</h3>
          <p class="text-primary text-[18px] leading-[1.65] m-0 font-body">Actually free. Insurers pay us a referral fee when you switch. You never pay us anything. Ever.</p>
        </div>
        <div class="py-6 border-b border-border">
          <h3 class="text-primary text-[22px] italic mb-3 font-body">What if I&rsquo;m happy with my current insurer?</h3>
          <p class="text-primary text-[18px] leading-[1.65] m-0 font-body">Perfect. Use this system to confirm you&rsquo;re getting market-best pricing. If you are, fantastic. If not, now you know your options.</p>
        </div>
        <div class="py-6 border-b border-border">
          <h3 class="text-primary text-[22px] italic mb-3 font-body">Do I have to switch immediately after getting quotes?</h3>
          <p class="text-primary text-[18px] leading-[1.65] m-0 font-body">No. You compare quotes first. Make your decision on your timeline. Zero obligation.</p>
        </div>
        <div class="py-6 border-b border-border">
          <h3 class="text-primary text-[22px] italic mb-3 font-body">Will this affect my credit score?</h3>
          <p class="text-primary text-[18px] leading-[1.65] m-0 font-body">No. This isn&rsquo;t a credit application. It&rsquo;s a quote request. No credit bureau checks.</p>
        </div>
        <div class="py-6 border-b border-border">
          <h3 class="text-primary text-[22px] italic mb-3 font-body">What if I have accidents on my record?</h3>
          <p class="text-primary text-[18px] leading-[1.65] m-0 font-body">You&rsquo;ll still get quotes. Some providers specialize in higher-risk profiles at competitive rates.</p>
        </div>
      </div>

      {{-- ---- Section: Decision Point ---- --}}
      <h2 class="text-primary text-[26px] md:text-[32px] font-bold leading-[1.15] tracking-[-0.01em] mb-10 text-center font-heading">
        This is your decision point
      </h2>

      <div class="flex flex-col gap-6 mb-16 max-w-xl mx-auto">
        {{-- Path 1 --}}
        <div class="p-8 border border-border rounded-lg bg-background relative grey-bg">
          <span class="absolute -left-3 -top-3 w-8 h-8 rounded-full flex items-center justify-center font-bold text-[14px] font-heading text-primary" style="background: #E5E7EB;">1</span>
          <div class="text-[18px] font-bold text-primary mb-2 uppercase tracking-widest text-center font-heading">Path 1</div>
          <p class="text-[16px] md:text-[18px] text-muted leading-[1.6] text-center m-0 font-body">
            Close this page. Keep paying premiums designed for someone else&rsquo;s risk profile. Five years from now, you&rsquo;ll have paid an extra R30,000&ndash;R40,000 for identical coverage.
          </p>
        </div>

        {{-- Decision image --}}
        <img
          src="https://billboardads.digitalcavemen.com/wp-content/uploads/2026/04/The-Two-Paths-Decision-Point.png"
          alt="Decision Point"
          class="w-full h-auto rounded-lg mx-auto"
        />

        {{-- Path 2 --}}
        <div class="p-8 border-[3px] border-accent rounded-lg relative shadow-sm" style="background: rgba(245,158,11,0.05);">
          <span class="absolute -left-3 -top-3 w-8 h-8 rounded-full bg-accent text-white flex items-center justify-center font-bold text-[14px] font-heading">2</span>
          <div class="text-[18px] font-bold text-accent mb-2 uppercase tracking-widest text-center font-heading">Path 2</div>
          <p class="text-[16px] md:text-[18px] text-primary leading-[1.6] text-center font-medium m-0 font-body">
            Invest 127 seconds right now. Let 12 insurers compete for your business. Save R400&ndash;R850/month. Five years from now, you&rsquo;ll have an extra R30,000&ndash;R40,000 in your account.
          </p>
        </div>
      </div>

      {{-- ===================== FORM SECTION ===================== --}}
      <div id="insurance-form" class="bg-white border-2 border-border p-8 md:p-12 rounded-lg mb-16 text-center shadow-2xl relative mt-16 max-w-xl mx-auto">

        {{-- Floating "127 SECONDS" badge --}}
        <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-white px-4">
          <span
            class="text-[13px] font-bold uppercase tracking-widest text-accent px-3 py-1 rounded-full font-heading"
            style="background: rgba(245,158,11,0.1);"
          >127 SECONDS</span>
        </div>

        <h3 class="text-[24px] md:text-[28px] font-bold text-primary mb-4 mt-2 tracking-[-0.01em] font-heading">
          Get Your Competitive Quotes Now
        </h3>
        <p class="text-[15px] md:text-[16px] text-muted mb-8 italic font-body">
          Free to use. 127 seconds average completion time. Zero obligation.
        </p>

        <form action="{{ route('car.insurance.submit') }}" method="POST" class="space-y-6 max-w-md mx-auto text-left">
          @csrf
          <input type="hidden" name="form_source" value="car_insure_landing">

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

          {{-- Step 2: Vehicle year --}}
          <div class="space-y-2">
            <label class="font-heading text-[14px] font-bold text-primary block">2. What year is your vehicle?</label>
            <select name="vehicleyear" required class="w-full p-4 border border-border rounded-[3px] font-body text-[14px] bg-white focus:outline-none focus:border-accent">
              <option value="">Select year...</option>
              <option value="2020-2024">2020 &ndash; 2024</option>
              <option value="2015-2019">2015 &ndash; 2019</option>
              <option value="2010-2014">2010 &ndash; 2014</option>
              <option value="pre-2010">Pre-2010</option>
            </select>
          </div>

          {{-- Step 3: Current insurer --}}
          <div class="space-y-2">
            <label class="font-heading text-[14px] font-bold text-primary block">3. Who is your current insurer?</label>
            <select name="currentinsurer" required class="w-full p-4 border border-border rounded-[3px] font-body text-[14px] bg-white focus:outline-none focus:border-accent">
              <option value="">Select insurer...</option>
              <option value="OUTsurance">OUTsurance</option>
              <option value="Santam">Santam</option>
              <option value="Discovery">Discovery Insure</option>
              <option value="King Price">King Price</option>
              <option value="MiWay">MiWay</option>
              <option value="Budget Insurance">Budget Insurance</option>
              <option value="Hollard">Hollard</option>
              <option value="Momentum">Momentum</option>
              <option value="Auto and General">Auto and General</option>
              <option value="Dial Direct">Dial Direct</option>
              <option value="None">I am not insured currently</option>
              <option value="Other">Other</option>
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
              placeholder="Phone Number (e.g. 0xx-xxx-xxxx)"
              class="w-full p-4 border border-border rounded-[3px] font-body text-[14px] bg-white focus:outline-none focus:border-accent"
            />
          </div>

          {{-- Terms checkbox --}}
          <div class="flex items-start gap-3 text-left mt-3">
            <input
              id="acceptterms"
              required
              name="acceptterms"
              value="true"
              type="checkbox"
              class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded mt-1"
            >
            <label for="acceptterms" class="text-sm font-medium text-gray-900 font-body">
              I agree to the <a href="#" class="text-blue-600 hover:underline">terms and conditions</a>
            </label>
          </div>

          {{-- Submit button --}}
          <button
            type="submit"
            class="w-full py-5 mt-2 bg-primary text-white font-heading font-bold rounded-full hover:bg-accent transition-colors flex flex-col items-center justify-center gap-1 black-button"
          >
            <div class="flex items-center gap-2 text-[18px] uppercase">
              Complete your profile now
              <i data-lucide="arrow-right" class="w-[20px] h-[20px]"></i>
            </div>
            <span class="text-[12px] font-normal opacity-80 font-body">Get Your Competitive Quotes</span>
          </button>

          {{-- Hidden CRM / campaign fields — keep aligned with KaruCRM integration --}}
          <input type="hidden" name="optinurl" value="https://searchadeal.online/">
          <input type="hidden" name="optindate" value="{{ date('Y-m-d h:i:s') }}">
          <input type="hidden" name="channel" value="JMAff">
          <input type="hidden" name="language" value="English">
          <input type="hidden" name="product" value="JMCar">
          <input type="hidden" name="affiliateshortcode" value="JMAFFSite15022">
          <input type="hidden" name="Leadsource" value="JMLSSEARCHADEAL9020">
          <input type="hidden" name="offer_id" value="377">
        </form>

        <p class="mt-8 text-[11px] md:text-[12px] text-muted uppercase tracking-widest font-bold font-heading">
          Search A Deal &bull; POPIA-Compliant &bull; Built in South Africa
        </p>
      </div>

      {{-- ---- Postscripts ---- --}}
      <div class="bg-white border-t-[4px] border-accent p-8 mt-16 mb-16">
        <p class="text-primary text-[16px] md:text-[18px] leading-[1.65] mb-4 font-body">
          <strong class="text-accent">P.S.</strong>
          <strong class="text-primary"> While You&rsquo;re Deciding, 23 Other Drivers Just Submitted Their Forms.</strong>
          Right now, as you&rsquo;re reading this, providers are competing for their business.
        </p>
        <p class="text-primary text-[16px] md:text-[18px] leading-[1.65] m-0 font-body">
          <strong class="text-accent">P.P.S.</strong>
          <strong class="text-primary"> The R35,000 Question.</strong>
          If you&rsquo;d discovered this system 5 years ago, you&rsquo;d have saved approximately R35,000 by now. You can&rsquo;t get that back. But you can stop the leak today.
        </p>
      </div>

    </div>
  </section>

</main>

@include('partials.tailwind_footer')
