@include('partials.tailwind_header', ['title' => 'Dashcam Witness Match - SearchADeal'])

<main class="flex-grow pt-[58px] bg-white">

  {{-- ===================== HERO SECTION ===================== --}}
  <section class="pt-16 pb-12">
    <div class="max-w-[768px] mx-auto px-6 text-center">

      <p class="text-accent uppercase font-bold text-[13px] md:text-[14px] tracking-[0.08em] mb-4 font-heading">
        South Africa&rsquo;s First Independent Dashcam Matching Service
      </p>

      <h1 class="text-primary text-4xl md:text-6xl font-bold leading-[1.05] tracking-[-0.02em] mb-6 font-heading">
        You Drive Safely.<br>
        You Pay Your Premiums.<br>
        <span class="text-accent">But Can You Prove It?</span>
      </h1>

      {{-- Full-bleed hero image --}}
      <div class="w-[100vw] relative left-1/2 -translate-x-1/2 mt-8 mb-8">
        <img
          src="https://billboardads.digitalcavemen.com/wp-content/uploads/2026/04/IMAGE-HERO-ABOVE-THE-FOLD.png"
          alt="Dashcam Protection"
          class="w-full h-auto object-cover block"
          loading="lazy"
        />
      </div>

      <p class="text-muted text-[20px] md:text-[24px] italic leading-[1.4] max-w-2xl mx-auto mb-10 font-body">
        When the other driver lies to the police, and 70% of SA drivers are uninsured, the only thing standing between your innocence and their version of events is the camera you chose.
      </p>

      <a
        href="#dashcam-form"
        class="inline-block bg-accent hover:bg-amber-600 text-white font-bold text-[18px] md:text-[20px] py-4 px-8 rounded-lg shadow-lg transition-colors w-full md:w-auto tracking-[0.01em] font-heading"
        style="background: #E23E3E"
      >
        Find My Witness Now &rarr;
      </a>

    </div>
  </section>

  {{-- ===================== STORY + EDITORIAL ===================== --}}
  <section class="py-12">
    <div class="max-w-2xl mx-auto px-6">

      {{-- ---- Section: The Reality ---- --}}
      <p class="text-accent uppercase font-bold text-[13px] tracking-[0.08em] mb-3 font-heading">
        THE REALITY
      </p>
      <h2 class="text-primary text-[26px] md:text-[32px] font-bold leading-[1.15] tracking-[-0.01em] mb-6 font-heading">
        This happened to someone like you
      </h2>

      <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] mb-5 font-body">The light turns green at 7:43 AM.</p>
      <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] mb-5 font-body">You&rsquo;ve got the green. Both hands on the wheel. Nowhere near your phone. The other car runs the red at 80 km/h and hits you on the driver&rsquo;s side.</p>
      <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] mb-5 font-body">Glass. Silence. Then the other driver gets out. He&rsquo;s walking. So are you. The police arrive twelve minutes later.</p>
      <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] mb-6 font-body">And then he says it:</p>

      <div class="pl-4 border-l-[4px] border-accent mb-8">
        <p class="text-primary text-[20px] md:text-[24px] italic m-0 font-body">
          &ldquo;She came out of nowhere.&rdquo;
        </p>
      </div>

      <img
        src="https://billboardads.digitalcavemen.com/wp-content/uploads/2026/04/NARRATIVE-THE-LIE-AT-THE-INTERSECTION-IMAGE-2.png"
        alt="The Lie at the Intersection"
        class="w-full h-auto mb-8 rounded-lg shadow-sm block"
        loading="lazy"
      />

      <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] mb-5 font-body">No intersection cameras. No witnesses. The one person who saw it happen is already three blocks away.</p>
      <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] mb-5 font-body">The officer writes both versions in his notebook. Equal weight. Because that is what the law requires when there is no evidence.</p>
      <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] mb-5 font-body">Three weeks later, you are in your insurer&rsquo;s office.</p>
      <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] mb-5 font-body">They have reviewed the police report. They have assessed the damage. They have applied standard procedure for disputed liability cases with no independent evidence.</p>
      <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] mb-5 font-body">
        <strong class="text-primary">They split it 50/50.</strong> You pay the excess. Your no-claims bonus is gone. Your premium jumps at renewal. The total cost to you, the driver who stopped at a green light, both hands on the wheel, is north of R15,000.
      </p>
      <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] mb-5 font-body text-accent font-bold">
        You did everything right.
      </p>
      <p class="text-primary text-[17px] md:text-[20px] font-bold italic leading-[1.65] mb-5 font-body">
        The system couldn&rsquo;t tell.
      </p>
      <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] mb-8 font-body">
        Because without footage, your insurer has no mechanism to distinguish the honest driver from the dishonest one. Your word carries the same evidentiary weight as his lie.
      </p>

      {{-- Dark callout --}}
      <div class="text-white p-8 rounded-lg mb-16 shadow-sm" style="background: #0F172A;">
        <p class="text-[18px] md:text-[20px] font-bold text-center m-0 leading-[1.5] font-heading">
          That is not a hypothetical. That is the documented, structural reality of driving in South Africa, and it is happening to honest drivers every single day.
        </p>
      </div>

      <hr class="border-t border-border my-12">

      {{-- ---- Section: Stats / Honest Driver Penalty ---- --}}
      <h2 class="text-primary text-[26px] md:text-[32px] font-bold leading-[1.15] tracking-[-0.01em] mb-6 font-heading">
        The Honest Driver Penalty
      </h2>
      <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] mb-10 font-body">
        You are paying for a system that cannot protect you, and four published facts prove it. These numbers come from SAPS, the Insurance Crime Bureau, the RTMC, and the Transport Ministry. Every one is independently verifiable.
      </p>

      <div class="mb-10 text-center">
        <img
          src="https://billboardads.digitalcavemen.com/wp-content/uploads/2026/04/iMAGE-3-The-Angle-Shift-Overhead-Desk.png"
          alt="The Honest Driver Penalty"
          class="w-full h-auto rounded-lg shadow-sm object-cover block mx-auto"
          loading="lazy"
        />
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
        <div class="bg-background p-6 rounded-lg text-center border border-border shadow-sm flex flex-col justify-center grey-bg">
          <div class="text-[48px] md:text-[56px] font-bold text-red-500 mb-2 leading-none tracking-tight font-heading">65&ndash;70%</div>
          <p class="text-[15px] md:text-[16px] text-muted m-0 leading-[1.5] font-body">
            of vehicles on SA roads are uninsured. 520,000 of the 800,000 annual accidents involve drivers with no cover.
            <span class="block mt-2 text-[12px] opacity-70">(AA &middot; SAIA &middot; Hippo.co.za)</span>
          </p>
        </div>
        <div class="bg-background p-6 rounded-lg text-center border border-border shadow-sm flex flex-col justify-center grey-bg">
          <div class="text-[48px] md:text-[56px] font-bold text-red-500 mb-2 leading-none tracking-tight font-heading">R3.5B</div>
          <p class="text-[15px] md:text-[16px] text-muted m-0 leading-[1.5] font-body">
            in annual insurance fraud, estimated by the ICB and priced into the premiums of honest policyholders like you.
            <span class="block mt-2 text-[12px] opacity-70">(Insurance Crime Bureau 2024)</span>
          </p>
        </div>
        <div class="bg-background p-6 rounded-lg text-center border border-border shadow-sm flex flex-col justify-center grey-bg">
          <div class="text-[48px] md:text-[56px] font-bold text-red-500 mb-2 leading-none tracking-tight font-heading">21%</div>
          <p class="text-[15px] md:text-[16px] text-muted m-0 leading-[1.5] font-body">
            of road traffic fatalities in 2023 were hit-and-runs, drivers who may never be found or prosecuted.
            <span class="block mt-2 text-[12px] opacity-70">(RTMC / PMC Peer-Reviewed 2025)</span>
          </p>
        </div>
        <div class="bg-background p-6 rounded-lg text-center border border-border shadow-sm flex flex-col justify-center grey-bg">
          <div class="text-[48px] md:text-[56px] font-bold text-red-500 mb-2 leading-none tracking-tight font-heading">87%</div>
          <p class="text-[15px] md:text-[16px] text-muted m-0 leading-[1.5] font-body">
            of all crashes are caused by other people&rsquo;s behaviour, not yours.
            <span class="block mt-2 text-[12px] opacity-70">(Transport Minister B. Creecy, Jan 2025)</span>
          </p>
        </div>
      </div>

      <h3 class="text-[20px] md:text-[24px] font-bold text-primary mb-6 font-heading">Here is how the penalty compounds against you:</h3>
      <div class="space-y-6 mb-12">
        <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] m-0 font-body">
          <strong>The Premium Penalty.</strong> Insurers recover from uninsured at-fault drivers approximately 45% of the time. The other 55% is absorbed by the insurance pool, which means absorbed by you. You are not paying for your own risk only. You are subsidising the entire dishonest ecosystem.
        </p>
        <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] m-0 font-body">
          <strong>The Dispute Penalty.</strong> When it is your word against the other driver&rsquo;s with no independent evidence, your insurer cannot determine truth. Momentum Insure&rsquo;s Executive Head of Claims acknowledged this publicly: the &lsquo;he said, she said&rsquo; of accident reporting is the industry&rsquo;s core evidence challenge.
        </p>
        <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] m-0 font-body">
          <strong>The Fraud Penalty.</strong> Staged accidents, inflated repair claims, and crash-for-cash syndicates are not rare. The ICB warned in its 2024 report that the industry faces R3.5 billion in potential fraud losses. Momentum Insure&rsquo;s claims executive stated on record that dashcam footage is the most effective deterrent against incidents &lsquo;intentionally manufactured or when a version of events has been falsified.&rsquo;
        </p>
      </div>

      <div class="p-8 rounded-lg border-l-[4px] border-accent mb-16" style="background: rgba(226,62,62,0.06);">
        <p class="text-[20px] md:text-[24px] italic m-0 leading-[1.5] text-primary font-body opacity-90">
          You are not just paying for your own risk. You are subsidising every dishonest driver who shares the road with you, and the system has no way to tell you apart from them.
        </p>
      </div>

      <hr class="border-t border-border my-12">

      {{-- ---- Section: False Confidence ---- --}}
      <h2 class="text-primary text-[26px] md:text-[32px] font-bold leading-[1.15] tracking-[-0.01em] mb-10 font-heading">
        Why most honest drivers are still dangerously exposed
      </h2>

      <h3 class="text-[20px] md:text-[24px] font-bold text-primary mb-4 font-heading">
        False Confidence 1: &ldquo;I have insurance.&rdquo;
      </h3>
      <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] mb-5 font-body">
        Insurance manages the financial consequences after your innocence is already lost. It is not a mechanism for establishing truth. When liability is disputed, and there is no independent evidence, your insurer&rsquo;s obligation is to settle, not to fight for your version of events.
      </p>
      <div class="pl-4 border-l-[4px] border-accent mb-10 mt-6">
        <p class="text-[18px] md:text-[20px] text-primary font-bold leading-[1.6] m-0 font-heading">
          Your insurer is not your witness. They are your financial buffer. And when evidence is absent, that buffer shrinks by exactly 50%.
        </p>
      </div>

      <h3 class="text-[20px] md:text-[24px] font-bold text-primary mb-4 font-heading">
        False Confidence 2: &ldquo;I have a dashcam.&rdquo;
      </h3>
      <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] mb-4 font-body">
        This is the insight the dashcam industry will never print on a spec sheet:
      </p>
      <p class="text-[18px] md:text-[22px] text-accent font-bold leading-[1.4] mb-6 font-heading">
        The wrong dashcam for your specific situation is not protection. It is false confidence.
      </p>
      <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] mb-5 font-body">
        A 140&deg; wide-angle lens mounted in an Uber doing 14-hour night shifts in Johannesburg has different evidentiary requirements than a weekend driver in Pretoria who needs footage that holds up in an insurance dispute. Same product category. Completely different witness.
      </p>
      <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] mb-10 font-body">
        Budget Insurance has confirmed on record that South African courts accept dashcam footage under the Electronic Communications and Transactions Act (ECTA), provided it meets specific requirements. Not all dashcams produce footage that satisfies this threshold under cross-examination.
      </p>

      {{-- Momentum quote card --}}
      <div class="bg-background border border-border p-8 rounded-lg mb-16 shadow-sm grey-bg">
        <div class="text-accent uppercase tracking-widest text-[13px] md:text-[14px] font-bold mb-4 font-heading">
          MOMENTUM INSURE &middot; MARCH 2026
        </div>
        <p class="text-[22px] md:text-[26px] text-primary italic mb-4 font-bold leading-[1.3] font-body">
          &ldquo;Dashcam footage does not automatically guarantee a successful claim.&rdquo;
        </p>
        <p class="text-[16px] md:text-[18px] text-muted m-0 leading-[1.5] font-body">
          The camera matters. The right camera, matched to your risk profile and your insurer&rsquo;s requirements, is what makes you provable, not just honest.
        </p>
      </div>

      <hr class="border-t border-border my-12">

      {{-- ---- Section: Compromised Advice ---- --}}
      <h2 class="text-primary text-[26px] md:text-[32px] font-bold leading-[1.15] tracking-[-0.01em] mb-6 font-heading">
        Every piece of dashcam advice you&rsquo;ve received was compromised
      </h2>
      <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] mb-8 font-body">
        Think about every source of information you have consulted about dashcams.
      </p>

      <ul class="space-y-6 m-0 p-0 list-none mb-10">
        <li class="flex items-start gap-4 p-5 bg-background border border-border rounded-lg shadow-sm grey-bg">
          <i data-lucide="x-circle" class="w-6 h-6 text-red-500 shrink-0 mt-0.5"></i>
          <span class="text-[16px] md:text-[18px] text-muted leading-[1.5] font-body">The Takealot listing with 847 reviews, written by people who have no idea whether their footage would hold up under cross-examination.</span>
        </li>
        <li class="flex items-start gap-4 p-5 bg-background border border-border rounded-lg shadow-sm grey-bg">
          <i data-lucide="x-circle" class="w-6 h-6 text-red-500 shrink-0 mt-0.5"></i>
          <span class="text-[16px] md:text-[18px] text-muted leading-[1.5] font-body">The spec comparison site, built around affiliate links to products with the highest commission rates, optimised for traffic, not accuracy.</span>
        </li>
        <li class="flex items-start gap-4 p-5 bg-background border border-border rounded-lg shadow-sm grey-bg">
          <i data-lucide="x-circle" class="w-6 h-6 text-red-500 shrink-0 mt-0.5"></i>
          <span class="text-[16px] md:text-[18px] text-muted leading-[1.5] font-body">The insurer offering a cashback for &lsquo;approved devices&rsquo;, from a list of products they have a commercial relationship with.</span>
        </li>
      </ul>

      <p class="text-[18px] md:text-[20px] text-primary font-bold leading-[1.6] mb-8 font-heading">
        None of these sources had a financial incentive to give you the right answer. They had a financial incentive to give you an answer. Those are not the same thing.
      </p>

      <div class="text-white p-8 rounded-lg mb-16 shadow-sm" style="background: #0F172A;">
        <p class="text-[18px] md:text-[20px] italic m-0 leading-[1.6] opacity-90 font-body">
          You were never given the information to make a genuinely evidence-based decision. That is not your failure. It is a structural gap in a market where everyone who advises you profits from your choice.
        </p>
      </div>

      <hr class="border-t border-border my-12">

      {{-- ---- Section: The Solution ---- --}}
      <p class="text-accent uppercase font-bold text-[13px] tracking-[0.08em] mb-3 text-center font-heading">
        INTRODUCING
      </p>
      <h2 class="text-primary text-[26px] md:text-[32px] font-bold leading-[1.15] tracking-[-0.01em] mb-6 text-center font-heading">
        The Witness Match Protocol&trade;
      </h2>

      <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] mb-5 font-body">
        <strong>We are not a dashcam retailer.</strong> We do not sell cameras. We do not stock inventory.
      </p>
      <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] mb-5 font-body">
        We are an independent lead service. We collect your basic information&mdash;your vehicle, your area, your concern, your insurer, your budget&mdash;and connect you with our vetted dashcam partner whose products match your specific evidence requirement.
      </p>
      <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] mb-8 font-body">
        We earn a flat referral fee when we make a connection. <strong>The same fee, regardless of which product you are matched with.</strong> We have no financial reason to steer you toward the most expensive option.
      </p>

      <div class="pl-4 border-l-[4px] border-accent mb-12">
        <p class="text-[18px] md:text-[20px] text-primary font-bold leading-[1.5] m-0 font-heading">
          That structural independence is not a marketing position. It is the only reason this service can give you an honest answer.
        </p>
      </div>

      {{-- Independence box --}}
      <div class="border-2 border-border p-8 rounded-lg bg-background mb-16 grey-bg">
        <h4 class="text-[16px] font-bold text-primary mb-6 tracking-widest uppercase font-heading">What Independence Actually Means</h4>
        <p class="text-[16px] md:text-[18px] text-muted mb-4 leading-[1.5] font-body">Cartrack will never recommend BlackVue. Their business model requires a subscription.</p>
        <p class="text-[16px] md:text-[18px] text-muted mb-4 leading-[1.5] font-body">BlackVue will never recommend Cartrack. They sell hardware.</p>
        <p class="text-[16px] md:text-[18px] text-muted mb-4 leading-[1.5] font-body">Takealot&rsquo;s algorithm ranks by margin and volume, not your claims history.</p>
        <p class="text-[16px] md:text-[18px] text-primary font-bold m-0 leading-[1.5] mt-6 border-t border-border pt-6 font-heading">
          We chose one partner because we evaluated the market and found one that meets the evidence standard. That is a harder position to take than listing everyone. It is also a more honest one.
        </p>
      </div>

      <hr class="border-t border-border my-12">

      {{-- ---- Section: Process Timeline ---- --}}
      <h2 class="text-primary text-[26px] md:text-[32px] font-bold leading-[1.15] tracking-[-0.01em] mb-10 text-center font-heading">
        How The Witness Match Protocol&trade; works
      </h2>

      <div class="space-y-12 mb-16 relative">
        {{-- Vertical connector line --}}
        <div class="absolute left-[15px] top-6 bottom-12 w-[1px] bg-border hidden md:block"></div>

        {{-- Step 1 --}}
        <div class="flex flex-col md:flex-row gap-6 relative z-10">
          <div class="w-8 h-8 bg-primary text-white rounded-full items-center justify-center font-bold text-[16px] shrink-0 mt-1 hidden md:flex font-heading">1</div>
          <div>
            <h3 class="text-primary text-[22px] md:text-[24px] font-bold mb-3 font-heading">You complete a short form</h3>
            <p class="text-primary text-[18px] leading-[1.65] m-0 font-body">Five questions. Under two minutes. Your vehicle type. Where you primarily drive. Your biggest concern. Your insurer. Your budget. No credit card. No commitment.</p>
          </div>
        </div>

        {{-- Step 2 --}}
        <div class="flex flex-col md:flex-row gap-6 relative z-10">
          <div class="w-8 h-8 bg-primary text-white rounded-full items-center justify-center font-bold text-[16px] shrink-0 mt-1 hidden md:flex font-heading">2</div>
          <div>
            <h3 class="text-primary text-[22px] md:text-[24px] font-bold mb-3 font-heading">You receive your Witness Quality Profile</h3>
            <p class="text-primary text-[18px] leading-[1.65] mb-6 font-body">Based on your answers, we identify which class of dashcam meets your specific evidentiary standard, sent as a plain-language summary of what it can and cannot prove.</p>

            <img
              src="https://billboardads.digitalcavemen.com/wp-content/uploads/2026/04/IMAGE-4-wITNESS-MATCH-PROTOCALL.png"
              alt="Witness Match Protocol"
              class="w-full h-auto rounded-lg object-cover shadow-sm mb-6 block"
              loading="lazy"
            />

            {{-- Witness Quality Profile table --}}
            <div class="border border-border rounded-lg overflow-hidden shadow-sm bg-background mt-6 grey-bg">
              <div class="bg-white p-4 text-center border-b border-border">
                <h4 class="text-[14px] font-bold text-primary mb-1 tracking-widest uppercase font-heading">Sample Witness Quality Profile&trade;</h4>
                <p class="text-[13px] text-muted italic m-0 font-body">Mid-range dashcam &middot; Urban Gauteng driver &middot; Insured</p>
              </div>
              <div class="flex flex-col sm:flex-row">
                <div class="w-full sm:w-1/2 border-b sm:border-b-0 sm:border-r border-border">
                  <div class="p-3 font-bold flex items-center gap-2 text-[13px] uppercase tracking-wider font-heading" style="background: rgba(34,197,94,0.1); color: #15803d;">
                    <i data-lucide="check-circle-2" class="w-4 h-4 shrink-0"></i> WILL PROVE
                  </div>
                  <ul class="m-0 p-0 list-none">
                    <li class="p-3 border-b border-border text-[14px] text-muted bg-white font-body">Rear-end collision at speed</li>
                    <li class="p-3 border-b border-border text-[14px] text-muted bg-white font-body">Red-light violation by other driver</li>
                    <li class="p-3 border-b border-border text-[14px] text-muted bg-white font-body">Head-on &amp; lane-change disputes</li>
                    <li class="p-3 text-[14px] text-muted bg-white font-body">Unsafe overtaking</li>
                  </ul>
                </div>
                <div class="w-full sm:w-1/2">
                  <div class="p-3 font-bold flex items-center gap-2 text-[13px] uppercase tracking-wider font-heading" style="background: rgba(239,68,68,0.1); color: #dc2626;">
                    <i data-lucide="x-circle" class="w-4 h-4 shrink-0"></i> WILL NOT PROVE
                  </div>
                  <ul class="m-0 p-0 list-none">
                    <li class="p-3 border-b border-border text-[14px] text-muted bg-white font-body">Side-impact outside 140&deg; field of view</li>
                    <li class="p-3 border-b border-border text-[14px] text-muted bg-white font-body">Parking incidents, engine off</li>
                    <li class="p-3 border-b border-border text-[14px] text-muted bg-white font-body">Interior cabin events (no rear cam)</li>
                    <li class="p-3 text-[14px] text-muted bg-white font-body">Night footage without IR capability</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        {{-- Step 3 --}}
        <div class="flex flex-col md:flex-row gap-6 relative z-10">
          <div class="w-8 h-8 bg-primary text-white rounded-full items-center justify-center font-bold text-[16px] shrink-0 mt-1 hidden md:flex font-heading">3</div>
          <div>
            <h3 class="text-primary text-[22px] md:text-[24px] font-bold mb-3 font-heading">We connect you directly to the matched provider</h3>
            <p class="text-primary text-[18px] leading-[1.65] m-0 font-body">You receive the contact details of our vetted partner. The transaction is between you and them directly. We don&rsquo;t handle payments. We just connect accurately.</p>
          </div>
        </div>
      </div>

      <hr class="border-t border-border my-12">

      {{-- ---- Section: Our Commitment ---- --}}
      <div class="border-[3px] border-accent p-8 md:p-10 mb-16 rounded-lg shadow-sm text-center" style="background: rgba(226,62,62,0.04);">
        <h3 class="text-[20px] md:text-[24px] font-bold text-primary mb-6 tracking-widest uppercase font-heading">
          Our Commitment To You
        </h3>
        <p class="text-[16px] md:text-[18px] text-primary leading-[1.6] mb-5 font-body">We are an independent lead service. We earn a flat referral fee when we connect you to our vetted partner, paid by the partner, not by you.</p>
        <p class="text-[16px] md:text-[18px] text-primary leading-[1.6] mb-6 font-body">Our only incentive is an accurate match. An inaccurate match costs us your trust and your referral downwards.</p>
        <div class="bg-white p-4 rounded border mx-auto max-w-lg" style="border-color: rgba(226,62,62,0.3);">
          <p class="text-[18px] md:text-[20px] text-accent font-bold m-0 leading-[1.4] font-heading">
            You will not pay more through us than you would going directly to the provider. That is our published commitment.
          </p>
        </div>
      </div>

      {{-- ---- Section: Source Stack ---- --}}
      <div class="border border-border p-8 mb-16 bg-background rounded-lg grey-bg">
        <h4 class="text-[14px] font-bold text-primary mb-6 tracking-widest uppercase text-center md:text-left font-heading">
          THE SOURCE STACK
        </h4>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <ul class="space-y-3 m-0 p-0 list-none">
            <li class="text-[13px] md:text-[14px] text-muted leading-[1.4] font-body">&bull; SAPS Crime Statistics 2023/24</li>
            <li class="text-[13px] md:text-[14px] text-muted leading-[1.4] font-body">&bull; SAIA &middot; AA &middot; Hippo.co.za (Uninsured)</li>
            <li class="text-[13px] md:text-[14px] text-muted leading-[1.4] font-body">&bull; Insurance Crime Bureau 2024</li>
            <li class="text-[13px] md:text-[14px] text-muted leading-[1.4] font-body">&bull; RTMC / PMC Peer-Reviewed 2025</li>
          </ul>
          <ul class="space-y-3 m-0 p-0 list-none">
            <li class="text-[13px] md:text-[14px] text-muted leading-[1.4] font-body">&bull; Transport Minister statements 2025</li>
            <li class="text-[13px] md:text-[14px] text-muted leading-[1.4] font-body">&bull; Momentum Insure Claims (On-record)</li>
            <li class="text-[13px] md:text-[14px] text-muted leading-[1.4] font-body">&bull; Budget Insurance criteria</li>
            <li class="text-[13px] md:text-[14px] text-muted leading-[1.4] font-body">&bull; ECTA Act, Section 15</li>
          </ul>
        </div>
      </div>

      <hr class="border-t border-border my-12">

      {{-- ---- Final CTA section ---- --}}
      <h2 class="text-primary text-[26px] md:text-[32px] font-bold leading-[1.15] tracking-[-0.01em] mb-10 text-center font-heading">
        You already know whether you have the right camera
      </h2>

      <div class="max-w-xl mx-auto space-y-6 text-center mb-12">
        <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] m-0 font-body">
          Either you have a dashcam and you are not entirely certain it would protect you in a serious dispute. Or you don&rsquo;t have one, and this letter has made the stakes feel real.
        </p>
        <p class="text-[18px] md:text-[22px] text-accent font-bold leading-[1.5] m-0 font-heading">
          Both positions have the same honest next step.
        </p>
        <p class="text-primary text-[17px] md:text-[20px] leading-[1.65] m-0 font-body">
          The form takes under two minutes. Five questions. No payment. No obligation.
        </p>
      </div>

      <div class="flex flex-col items-center justify-center text-center mt-8 mb-12">
        <img
          src="https://billboardads.digitalcavemen.com/wp-content/uploads/2026/04/iMAGE-5-The-Tension-Inversion-%E2%80%94-Empty-Drivers-Seat.png"
          alt="The Moment of Decision"
          class="w-full h-auto rounded-lg mb-8 shadow-sm block"
          loading="lazy"
        />
      </div>

      {{-- ===================== FORM SECTION ===================== --}}
      <div id="dashcam-form" class="bg-background border-2 border-border p-8 md:p-12 rounded-lg mb-16 text-center shadow-2xl relative mt-16 max-w-xl mx-auto grey-bg">

        {{-- Floating badge --}}
        <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-white px-4">
          <span
            class="text-[13px] font-bold uppercase tracking-widest text-accent px-3 py-1 rounded-full inline-flex items-center gap-1 font-heading"
            style="background: rgba(226,62,62,0.1);"
          >
            <i data-lucide="help-circle" class="w-[14px] h-[14px]"></i> FIND YOUR WITNESS
          </span>
        </div>

        <h3 class="text-[24px] md:text-[28px] font-bold text-primary mb-4 mt-2 tracking-[-0.01em] font-heading">
          Get Your Match Now
        </h3>
        <p class="text-[15px] md:text-[16px] text-muted mb-8 italic font-body">
          No sign-up &middot; No credit card &middot; Under 2 mins
        </p>

        <form action="{{ route('karu.submit') }}" method="POST" class="space-y-6 max-w-md mx-auto text-left">
          @csrf

          <div class="space-y-2">
            <label class="font-heading text-[14px] font-bold text-primary block">1. What do you drive?</label>
            <select name="meta[vehicle_type]" required class="w-full p-4 border border-border rounded-[3px] font-body text-[14px] bg-white focus:outline-none focus:border-accent">
              <option value="">Select vehicle type...</option>
              <option value="sedan">Sedan</option>
              <option value="suv">SUV or 4&times;4</option>
              <option value="bakkie">Bakkie</option>
              <option value="hatchback">Hatchback</option>
              <option value="other">Other</option>
            </select>
          </div>

          <div class="space-y-2">
            <label class="font-heading text-[14px] font-bold text-primary block">2. Where do you primarily drive?</label>
            <select name="meta[driving_context]" required class="w-full p-4 border border-border rounded-[3px] font-body text-[14px] bg-white focus:outline-none focus:border-accent">
              <option value="">Select driving context...</option>
              <option value="urban">Urban commute (city / suburb)</option>
              <option value="highway">Highway</option>
              <option value="mixed">Mixed</option>
              <option value="rural">Rural or farm roads</option>
            </select>
          </div>

          <div class="space-y-2">
            <label class="font-heading text-[14px] font-bold text-primary block">3. What is your biggest road concern?</label>
            <select name="meta[road_concern]" required class="w-full p-4 border border-border rounded-[3px] font-body text-[14px] bg-white focus:outline-none focus:border-accent">
              <option value="">Select primary concern...</option>
              <option value="accident">Accident disputes</option>
              <option value="fraud">Fraud or staged accidents</option>
              <option value="hit-and-run">Hit-and-run</option>
              <option value="theft">Theft or break-in</option>
              <option value="safety">General safety record</option>
            </select>
          </div>

          <div class="space-y-2">
            <label class="font-heading text-[14px] font-bold text-primary block">4. Who is your current car insurer?</label>
            <select name="meta[insurer]" required class="w-full p-4 border border-border rounded-[3px] font-body text-[14px] bg-white focus:outline-none focus:border-accent">
              <option value="">Select insurer...</option>
              <option value="outsurance">OUTsurance</option>
              <option value="santam">Santam</option>
              <option value="discovery">Discovery Insure</option>
              <option value="king-price">King Price</option>
              <option value="miway">MiWay</option>
              <option value="budget">Budget Insurance</option>
              <option value="hollard">Hollard</option>
              <option value="other">Other</option>
            </select>
          </div>

          <div class="space-y-2">
            <label class="font-heading text-[14px] font-bold text-primary block">5. What is your dashcam budget?</label>
            <select name="meta[budget]" required class="w-full p-4 border border-border rounded-[3px] font-body text-[14px] bg-white focus:outline-none focus:border-accent">
              <option value="">Select budget...</option>
              <option value="under-1500">Under R1,500</option>
              <option value="1500-3000">R1,500&ndash;R3,000</option>
              <option value="3000-6000">R3,000&ndash;R6,000</option>
              <option value="6000-plus">R6,000+</option>
              <option value="not-sure">Not sure yet</option>
            </select>
          </div>

          {{-- Contact details --}}
          <div class="pt-6 space-y-4 border-t border-border">
            <p class="font-body text-[14px] text-primary font-bold mb-2">Where should we send your Witness Quality Profile?</p>
            <input
              required
              type="text"
              name="name"
              placeholder="Full Name"
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
              name="phone"
              placeholder="Phone Number"
              class="w-full p-4 border border-border rounded-[3px] font-body text-[14px] bg-white focus:outline-none focus:border-accent"
            />
          </div>

          {{-- Submit --}}
          <button
            type="submit"
            class="w-full py-5 mt-2 bg-primary text-white font-heading font-bold rounded-full hover:bg-accent transition-colors flex flex-col items-center justify-center gap-1 black-button"
          >
            <div class="flex items-center gap-2 text-[18px] uppercase">
              Find My Witness Now
              <i data-lucide="arrow-right" class="w-[20px] h-[20px]"></i>
            </div>
            <span class="text-[12px] font-normal opacity-80 font-body">Get Your Free Witness Quality Profile</span>
          </button>
        </form>

        <p class="mt-8 text-[11px] md:text-[12px] text-muted uppercase tracking-widest font-bold leading-relaxed font-heading">
          Search A Deal &bull; POPIA-Compliant &bull; Built in South Africa
        </p>
      </div>

    </div>
  </section>

</main>

@include('partials.tailwind_footer')
