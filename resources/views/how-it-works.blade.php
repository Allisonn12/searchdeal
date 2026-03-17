@include('partials.tailwind_header', ['title' => 'How Search A Deal Works | SearchADeal'])

{{-- ══════════════════ MAIN ══════════════════ --}}
<main class="flex-grow pt-[58px] bg-white">

  {{-- ── Hero Section ── --}}
  {{-- Matches trackerloan.blade.php hero pattern: eyebrow + large heading + sub-copy --}}
  <section class="py-20 px-[14.5px] md:px-[58px] bg-background grey-bg">
    <div class="max-w-[1000px] mx-auto text-center">

      {{-- Eyebrow badge — inline style for accent/10 opacity (CDN Tailwind opacity modifier limitation) --}}
      <div
        class="inline-flex items-center gap-2 px-4 py-2 rounded-full font-heading text-[12px] font-bold uppercase tracking-widest mb-8 text-accent"
        style="background-color:rgba(245,158,11,0.1);"
      >
        🇿🇦 Built for South Africans. Built against the system.
      </div>

      <h1 class="font-heading text-[clamp(40px,5vw,72px)] font-medium leading-[0.9] tracking-[-0.03em] text-primary mb-8">
        We Built the Platform<br />
        <span class="text-accent">We Wished Had Existed.</span>
      </h1>

      <p class="font-body text-[18px] text-muted max-w-3xl mx-auto mb-8 leading-relaxed">
        Because the old way of finding insurance, trackers, and loans was broken by design&mdash;and someone had to fix it.
      </p>

      <p class="font-body text-[16px] text-primary font-bold max-w-3xl mx-auto">
        You already know the problem from our homepage. The spam calls. The impossible comparisons. The premiums that quietly creep up every year. This page is about why we exist and what we stand for.
      </p>

    </div>
  </section>

  {{-- ── Long-Form Editorial Section ── --}}
  {{-- Mirrors trackerloan.blade.php prose section: max-w-[800px] + prose classes --}}
  <section class="py-20 px-[14.5px] md:px-[58px]">
    <div class="max-w-[800px] mx-auto prose prose-slate prose-lg">

      {{-- ─ The Problem ─ --}}
      <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
        The Problem We Couldn&rsquo;t Ignore.
      </h2>
      <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
        There&rsquo;s a particular kind of frustration that builds slowly. It&rsquo;s not one dramatic moment. It&rsquo;s the accumulation of dozens of small ones&mdash;every renewal notice you accepted without questioning, every loan application that left you with a damaged credit score and no offer, every spam call at 7&nbsp;am from a number you&rsquo;ll never answer again.
      </p>
      <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
        That slow frustration is what South Africans face every single time they need to make a financial decision about their vehicle or their credit. And it isn&rsquo;t accidental.
      </p>

      {{-- Dark pull-quote block --}}
      <div class="blue-bg text-white p-8 rounded-[3px] mb-12 not-prose">
        <p class="font-body text-[18px] italic opacity-90 m-0">
          The financial services industry in South Africa was built around friction. The harder it is for you to compare, the easier it is for providers to overcharge.
        </p>
      </div>

      <h3 class="font-heading text-[24px] font-medium text-primary mb-6">
        Here&rsquo;s what the data confirms:
      </h3>

      {{-- Data cards for each vertical --}}
      <div class="space-y-8 mb-16 not-prose">

        <div class="p-6 border border-border rounded-[3px] bg-background grey-bg">
          <h4 class="font-heading text-[18px] font-bold text-primary mb-3 flex items-center gap-2">
            <i data-lucide="car" class="text-accent shrink-0" style="width:20px;height:20px;"></i>
            CAR INSURANCE
          </h4>
          <p class="font-body text-[15px] text-muted mb-4">
            The average South African pays R800 to R1,400 per month for comprehensive cover. Premiums rose by an average of 15% for good, clean risks in 2023 alone&mdash;not because your risk increased, but because your insurer&rsquo;s reinsurance costs did. You absorbed their problem.
          </p>
          <p class="font-body text-[15px] text-muted m-0">
            65% of South African motorists are completely uninsured. That means the insured minority is effectively subsidising the systemic risk of the majority. If you have a clean record, secure parking, and have never claimed, you are likely overpaying for someone else&rsquo;s risk profile.
          </p>
        </div>

        <div class="p-6 border border-border rounded-[3px] bg-background grey-bg">
          <h4 class="font-heading text-[18px] font-bold text-primary mb-3 flex items-center gap-2">
            <i data-lucide="radio" class="text-accent shrink-0" style="width:20px;height:20px;"></i>
            VEHICLE THEFT
          </h4>
          <p class="font-body text-[15px] text-muted mb-4">
            According to SAPS crime statistics, approximately 85&ndash;96 vehicles are stolen or hijacked in South Africa every single day. Gauteng alone accounts for over 52% of all vehicle theft nationally.
          </p>
          <p class="font-body text-[15px] text-muted mb-4">
            30% of stolen vehicles are smuggled across borders. That is not a recovery scenario; that is a permanent loss. The difference between recovery and a write-off is overwhelmingly determined by which tracker you chose, not whether you had one.
          </p>
          <p class="font-body text-[15px] text-muted m-0">
            Yet most South Africans are still choosing their tracker from a short list of names they vaguely remember from a billboard&mdash;with no way to compare recovery rates, contract terms, or actual 24/7 response infrastructure.
          </p>
        </div>

        <div class="p-6 border border-border rounded-[3px] bg-background grey-bg">
          <h4 class="font-heading text-[18px] font-bold text-primary mb-3 flex items-center gap-2">
            <i data-lucide="credit-card" class="text-accent shrink-0" style="width:20px;height:20px;"></i>
            PERSONAL LOANS
          </h4>
          <p class="font-body text-[15px] text-muted mb-4">
            South African consumer debt reached R2.40&nbsp;trillion at the end of 2024 (National Credit Regulator). The household debt-to-income ratio stands at 62.5%, meaning that for every R100 earned, R62 is already committed to debt repayment before a single daily expense is met.
          </p>
          <p class="font-body text-[15px] text-muted mb-4">
            Over 10&nbsp;million South Africans are estimated to be over-indebted (FinMark Trust, 2024). And personal loan originations grew by 14.5% year-on-year in Q3&nbsp;2024 (TransUnion), driven by the rising cost of living, forcing more households into credit just to manage the basics.
          </p>
          <p class="font-body text-[15px] text-muted m-0">
            Every multiple loan application creates a hard credit enquiry. Multiple enquiries damage the very credit score you need to get approved for better terms. The system punishes you for trying to find the best deal.
          </p>
        </div>

      </div>

      {{-- ─ Why We Built SearchADeal ─ --}}
      <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
        Why We Built SearchADeal.
      </h2>
      <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
        SearchADeal was not built in a boardroom by people who&rsquo;d never dealt with an insurer&rsquo;s claims department at 8&nbsp;pm on a Friday. It was built from a simple, uncomfortable observation:
      </p>

      {{-- Amber pull-quote — inline style for accent/10 bg (CDN Tailwind limitation) --}}
      <div class="p-8 rounded-[3px] border-l-4 mb-8 not-prose" style="background-color:rgba(245,158,11,0.1); border-color:#F59E0B;">
        <p class="font-body text-[18px] text-primary italic m-0">
          The information that would save South African consumers billions of rands per year already exists. It just isn&rsquo;t in the same place at the same time&mdash;and the industry has no incentive to change that.
        </p>
      </div>

      <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
        We watched people make financially consequential decisions&mdash;on insurance that would determine whether their vehicle was written off or recovered, on loans that would affect their credit score for years&mdash;with less information than they&rsquo;d use to buy a microwave.
      </p>
      <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
        We watched good drivers pay premiums priced for bad ones. We watched people submit 4 loan applications in a week and wondered why their credit scores dropped. We watched South Africans pay for tracker contracts without knowing whether their provider even had active recovery infrastructure in their area.
      </p>
      <p class="font-body text-[16px] text-primary font-bold mb-12">
        The solution wasn&rsquo;t complicated. It was just absent. One platform. Verified providers. Real numbers. Zero spam. Free. That became the brief for SearchADeal.
      </p>

      {{-- ─ The SearchADeal Standard ─ --}}
      <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
        The SearchADeal Standard.
      </h2>
      <p class="font-body text-[16px] text-muted leading-relaxed mb-8">
        A comparison platform is only as trustworthy as the choices it makes on your behalf. We set non-negotiables before we onboarded a single provider.
      </p>

      <div class="space-y-8 mb-16 not-prose">

        {{-- Car Insurance standard --}}
        <div>
          <h4 class="font-heading text-[20px] font-bold text-primary mb-4 pb-2 border-b border-border">
            On Car Insurance
          </h4>
          <ul class="space-y-3 m-0 p-0 list-none">
            <li class="flex items-start gap-3">
              <i data-lucide="check-circle-2" class="text-accent shrink-0" style="width:18px;height:18px;margin-top:2px;"></i>
              <span class="font-body text-[15px] text-muted">We only connect you with licensed, established South African insurers. No offshore shell companies. No resellers.</span>
            </li>
            <li class="flex items-start gap-3">
              <i data-lucide="check-circle-2" class="text-accent shrink-0" style="width:18px;height:18px;margin-top:2px;"></i>
              <span class="font-body text-[15px] text-muted">One form sends your profile to multiple competing providers simultaneously. They compete for you, not the other way around.</span>
            </li>
            <li class="flex items-start gap-3">
              <i data-lucide="check-circle-2" class="text-accent shrink-0" style="width:18px;height:18px;margin-top:2px;"></i>
              <span class="font-body text-[15px] text-muted">No spam calls. Providers contact you with real offers. Your number is not sold, resold, or forwarded to lead brokers.</span>
            </li>
            <li class="flex items-start gap-3">
              <i data-lucide="check-circle-2" class="text-accent shrink-0" style="width:18px;height:18px;margin-top:2px;"></i>
              <span class="font-body text-[15px] text-muted">Zero credit check required. Your enquiry will not affect your financial standing.</span>
            </li>
            <li class="flex items-start gap-3">
              <i data-lucide="check-circle-2" class="text-accent shrink-0" style="width:18px;height:18px;margin-top:2px;"></i>
              <span class="font-body text-[15px] text-muted">Zero obligation. You choose, compare, and walk away with zero consequence.</span>
            </li>
          </ul>
        </div>

        {{-- Tracker standard --}}
        <div>
          <h4 class="font-heading text-[20px] font-bold text-primary mb-4 pb-2 border-b border-border">
            On Car Trackers
          </h4>
          <ul class="space-y-3 m-0 p-0 list-none">
            <li class="flex items-start gap-3">
              <i data-lucide="check-circle-2" class="text-accent shrink-0" style="width:18px;height:18px;margin-top:2px;"></i>
              <span class="font-body text-[15px] text-muted">We do not list all 44+ tracker providers in South Africa. We list 5. The 5 that passed every non-negotiable on our vetting criteria.</span>
            </li>
            <li class="flex items-start gap-3">
              <i data-lucide="check-circle-2" class="text-accent shrink-0" style="width:18px;height:18px;margin-top:2px;"></i>
              <span class="font-body text-[15px] text-muted">SAPS partnerships, armed response integration, and proven recovery networks are baseline requirements&mdash;not optional extras.</span>
            </li>
            <li class="flex items-start gap-3">
              <i data-lucide="check-circle-2" class="text-accent shrink-0" style="width:18px;height:18px;margin-top:2px;"></i>
              <span class="font-body text-[15px] text-muted">No resellers. No middlemen. You connect directly with installers who are accountable for their performance.</span>
            </li>
          </ul>
        </div>

        {{-- Loans standard --}}
        <div>
          <h4 class="font-heading text-[20px] font-bold text-primary mb-4 pb-2 border-b border-border">
            On Personal Loans
          </h4>
          <ul class="space-y-3 m-0 p-0 list-none">
            <li class="flex items-start gap-3">
              <i data-lucide="check-circle-2" class="text-accent shrink-0" style="width:18px;height:18px;margin-top:2px;"></i>
              <span class="font-body text-[15px] text-muted">Every lender in our network is NCR-registered and NCA-compliant. Non-negotiable, always.</span>
            </li>
            <li class="flex items-start gap-3">
              <i data-lucide="check-circle-2" class="text-accent shrink-0" style="width:18px;height:18px;margin-top:2px;"></i>
              <span class="font-body text-[15px] text-muted">One application. 15+ registered lenders. Minimised credit impact. You are assessed before a hard enquiry is run.</span>
            </li>
            <li class="flex items-start gap-3">
              <i data-lucide="check-circle-2" class="text-accent shrink-0" style="width:18px;height:18px;margin-top:2px;"></i>
              <span class="font-body text-[15px] text-muted">You see the interest rate, total cost of credit, and fees&mdash;side by side, in one place&mdash;before you decide anything.</span>
            </li>
            <li class="flex items-start gap-3">
              <i data-lucide="check-circle-2" class="text-accent shrink-0" style="width:18px;height:18px;margin-top:2px;"></i>
              <span class="font-body text-[15px] text-muted">We include banks, neobanks, and digital-first lenders. Not just the names on billboards.</span>
            </li>
          </ul>
        </div>

      </div>

      {{-- ─ Market Stats ─ --}}
      <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
        The Market We&rsquo;re Operating In.
      </h2>
      <p class="font-body text-[16px] text-muted leading-relaxed mb-8">
        We want you to understand the scale of what we&rsquo;re trying to solve, backed by publicly available data&mdash;not marketing language.
      </p>

      {{-- Stats grid --}}
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8 not-prose">
        <div class="bg-background p-6 rounded-[3px] text-center border border-border grey-bg">
          <div class="font-heading text-[32px] font-bold text-accent mb-2">R2.4T</div>
          <div class="font-heading text-[14px] font-bold text-primary mb-1">Consumer Debt</div>
          <div class="font-body text-[12px] text-muted">South Africa, 2024 &mdash; NCR</div>
        </div>
        <div class="bg-background p-6 rounded-[3px] text-center border border-border grey-bg">
          <div class="font-heading text-[32px] font-bold text-accent mb-2">85&ndash;96</div>
          <div class="font-heading text-[14px] font-bold text-primary mb-1">Vehicles Stolen</div>
          <div class="font-body text-[12px] text-muted">Per day &mdash; SAPS Stats</div>
        </div>
        <div class="bg-background p-6 rounded-[3px] text-center border border-border grey-bg">
          <div class="font-heading text-[32px] font-bold text-accent mb-2">62.5%</div>
          <div class="font-heading text-[14px] font-bold text-primary mb-1">Debt-to-Income</div>
          <div class="font-body text-[12px] text-muted">SA Household ratio &mdash; SARB</div>
        </div>
        <div class="bg-background p-6 rounded-[3px] text-center border border-border grey-bg">
          <div class="font-heading text-[32px] font-bold text-accent mb-2">10M+</div>
          <div class="font-heading text-[14px] font-bold text-primary mb-1">Over-Indebted</div>
          <div class="font-body text-[12px] text-muted">South Africans &mdash; FinMark</div>
        </div>
      </div>

      <p class="font-body text-[16px] text-muted leading-relaxed mb-12">
        These aren&rsquo;t abstract statistics. They are the lived financial reality of the people SearchADeal was built to serve. Every rand saved on a more competitive insurance premium. Every loan matched at better terms. Every vehicle recovered because the right tracker was in place. This is the work.
      </p>

      {{-- ─ How We Make Money ─ --}}
      <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
        How We Make Money, And Why It Doesn&rsquo;t Affect You.
      </h2>
      <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
        We believe you deserve a straight answer to this question. Here it is:
      </p>

      <div class="blue-bg text-white p-8 rounded-[3px] mb-8 not-prose">
        <p class="font-body text-[18px] font-bold m-0">
          <i>SearchADeal earns a referral fee from providers when we successfully connect them with a potential customer.</i>
        </p>
      </div>

      <ul class="space-y-3 m-0 p-0 list-none mb-8 not-prose">
        <li class="flex items-start gap-3">
          <i data-lucide="check-circle-2" class="text-accent shrink-0" style="width:18px;height:18px;margin-top:2px;"></i>
          <span class="font-body text-[15px] text-muted">This fee is paid by the provider, not by you.</span>
        </li>
        <li class="flex items-start gap-3">
          <i data-lucide="check-circle-2" class="text-accent shrink-0" style="width:18px;height:18px;margin-top:2px;"></i>
          <span class="font-body text-[15px] text-muted">It is not added to your premium, your interest rate, or your contract cost.</span>
        </li>
        <li class="flex items-start gap-3">
          <i data-lucide="check-circle-2" class="text-accent shrink-0" style="width:18px;height:18px;margin-top:2px;"></i>
          <span class="font-body text-[15px] text-muted">It does not affect which providers appear on the platform; all vetted providers in each category are shown.</span>
        </li>
      </ul>

      <p class="font-body text-[20px] text-primary font-bold mb-8 text-center not-prose">
        You pay nothing. Ever.
      </p>
      <p class="font-body text-[16px] text-muted leading-relaxed mb-12">
        This is the same model used by established comparison platforms worldwide, and it is fully disclosed here. Our business only works if the providers we list are genuinely competitive and genuinely worth comparing. If they aren&rsquo;t, you don&rsquo;t convert, and we don&rsquo;t earn. Your incentive and ours are perfectly aligned. We are not an insurer. We are not a credit provider. We are not a broker. We are a comparison platform&mdash;structurally positioned to give you information, not to sell you anything.
      </p>

      {{-- ─ What We Will Never Do ─ --}}
      <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
        What We Will Never Do.
      </h2>
      <p class="font-body text-[16px] text-muted leading-relaxed mb-8">
        Commitments mean nothing without red lines. Here are ours:
      </p>

      <div class="space-y-6 mb-12 not-prose">

        <div class="flex items-start gap-4 p-6 border border-border rounded-[3px] bg-background grey-bg">
          <i data-lucide="x-circle" class="text-red-500 shrink-0" style="width:24px;height:24px;"></i>
          <div>
            <h4 class="font-heading text-[16px] font-bold text-primary mb-2">We will never sell, share, or forward your personal details to lead brokers or data resellers.</h4>
            <p class="font-body text-[14px] text-muted m-0">Your information goes directly to vetted providers in our network, and nowhere else.</p>
          </div>
        </div>

        <div class="flex items-start gap-4 p-6 border border-border rounded-[3px] bg-background grey-bg">
          <i data-lucide="x-circle" class="text-red-500 shrink-0" style="width:24px;height:24px;"></i>
          <div>
            <h4 class="font-heading text-[16px] font-bold text-primary mb-2">We will never list a provider we haven&rsquo;t vetted against our non-negotiable criteria.</h4>
            <p class="font-body text-[14px] text-muted m-0">More providers on the list means more potential revenue for us. We choose fewer, better providers instead.</p>
          </div>
        </div>

        <div class="flex items-start gap-4 p-6 border border-border rounded-[3px] bg-background grey-bg">
          <i data-lucide="x-circle" class="text-red-500 shrink-0" style="width:24px;height:24px;"></i>
          <div>
            <h4 class="font-heading text-[16px] font-bold text-primary mb-2">We will never obscure pricing, hide fees, or use vague estimates in place of real numbers.</h4>
            <p class="font-body text-[14px] text-muted m-0">If a provider can&rsquo;t or won&rsquo;t show you real numbers, they don&rsquo;t appear on this platform.</p>
          </div>
        </div>

        <div class="flex items-start gap-4 p-6 border border-border rounded-[3px] bg-background grey-bg">
          <i data-lucide="x-circle" class="text-red-500 shrink-0" style="width:24px;height:24px;"></i>
          <div>
            <h4 class="font-heading text-[16px] font-bold text-primary mb-2">We will never pressure you toward a decision.</h4>
            <p class="font-body text-[14px] text-muted m-0">You are always in control. Compare, choose, and walk away&mdash;completely free, completely obligation-free, every time.</p>
          </div>
        </div>

        <div class="flex items-start gap-4 p-6 border border-border rounded-[3px] bg-background grey-bg">
          <i data-lucide="x-circle" class="text-red-500 shrink-0" style="width:24px;height:24px;"></i>
          <div>
            <h4 class="font-heading text-[16px] font-bold text-primary mb-2">We will never knowingly list a non-compliant lender.</h4>
            <p class="font-body text-[14px] text-muted m-0">NCR registration and NCA compliance are baseline requirements. Non-negotiable. Always.</p>
          </div>
        </div>

      </div>

      <p class="font-body text-[16px] text-primary font-bold mb-16 text-center not-prose">
        All personal information is handled in accordance with POPIA &mdash; the Protection of Personal Information Act.
      </p>

      {{-- ─ Comparison Platform Model ─ --}}
      <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
        The Comparison Platform Model, And Why It Works.
      </h2>
      <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
        Price comparison platforms are not a new concept globally. In the UK, platforms like MoneySuperMarket have saved consumers an estimated &pound;2.5&nbsp;billion annually across insurance and financial products. In Australia, Compare the Market processes millions of insurance comparisons per year. The model is proven: when consumers have access to transparent, side-by-side comparisons, prices come down and product quality goes up.
      </p>
      <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
        South Africa has been slower to adopt this model at scale. That gap is exactly where SearchADeal operates. Our network includes NCR-registered lenders for personal loans, multiple licensed insurers for car insurance, and South Africa&rsquo;s top 5 vetted tracker providers&mdash;all competing for your business simultaneously through a single form.
      </p>

      <div class="p-8 rounded-[3px] border-l-4 mb-8 not-prose" style="background-color:rgba(245,158,11,0.1); border-color:#F59E0B;">
        <p class="font-body text-[16px] text-primary italic m-0">
          &ldquo;The market for comparison platforms in South Africa&rsquo;s financial services sector is significantly underdeveloped relative to the size of the opportunity. Consumers remain systematically underserved when it comes to transparent pricing for insurance, credit, and vehicle security products.&rdquo;<br />
          <span class="font-body text-[14px] text-muted block mt-2">&mdash; Industry context &mdash; South African financial services market analysis</span>
        </p>
      </div>

      <p class="font-body text-[16px] text-primary font-bold mb-16">
        We are not the first comparison platform in South Africa. We are the first to combine car insurance, car trackers, and personal loans into a single, mobile-first platform built to eliminate the three things South Africans told us they hate most: spam calls, damaged credit scores, and wasted time.
      </p>

      {{-- ─ Your Data, Your Rights ─ --}}
      <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
        Your Data. Your Rights.
      </h2>
      <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
        South Africa&rsquo;s Protection of Personal Information Act (POPIA) exists to protect your data. We take that seriously&mdash;not because we have to, but because the only way to build genuine trust is to earn it.
      </p>

      <ul class="space-y-3 m-0 p-0 list-none mb-6 not-prose">
        <li class="flex items-start gap-3">
          <i data-lucide="shield-check" class="text-accent shrink-0" style="width:18px;height:18px;margin-top:2px;"></i>
          <span class="font-body text-[15px] text-muted">Your details go directly to vetted providers in our network. Not to lead brokers. Not to data resellers. Not to anyone outside our verified network.</span>
        </li>
        <li class="flex items-start gap-3">
          <i data-lucide="shield-check" class="text-accent shrink-0" style="width:18px;height:18px;margin-top:2px;"></i>
          <span class="font-body text-[15px] text-muted">We do not retain your data beyond what is required to operate the comparison service.</span>
        </li>
        <li class="flex items-start gap-3">
          <i data-lucide="shield-check" class="text-accent shrink-0" style="width:18px;height:18px;margin-top:2px;"></i>
          <span class="font-body text-[15px] text-muted">You have the right to access, correct, and request deletion of your personal information. <a href="{{ route('contact') }}" class="text-accent hover:underline">Contact us anytime.</a></span>
        </li>
      </ul>

      <p class="font-body text-[16px] text-primary font-bold mb-16">
        Full POPIA compliance. No fine print. No buried clauses.
      </p>

      {{-- ─ Where We're Going ─ --}}
      <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
        Where We&rsquo;re Going.
      </h2>
      <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
        The problem we&rsquo;re solving is not small. Billions of rands are misallocated every year in South Africa&rsquo;s car insurance, vehicle tracking, and personal lending markets&mdash;not because better products don&rsquo;t exist, but because the information required to find them isn&rsquo;t accessible.
      </p>
      <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
        SearchADeal&rsquo;s vision is straightforward: make it possible for every South African to find the best available deal on the financial products that matter most to their daily lives&mdash;in minutes, not weeks, at no cost to them.
      </p>
      <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
        We&rsquo;re starting with car insurance, car trackers, and personal loans. We&rsquo;re building the infrastructure, the provider relationships, and the trust required to expand that mandate. Every comparison you run on this platform is a data point that helps us understand what South Africans need&mdash;and a vote for the principle that transparency and access to information should be the standard, not the exception.
      </p>

      <div class="blue-bg text-white p-8 rounded-[3px] mb-16 text-center not-prose">
        <p class="font-body text-[18px] font-bold m-0">
          <i>If you&rsquo;re the kind of person who refuses to settle for &lsquo;good enough&rsquo; when &lsquo;significantly better&rsquo; exists, you&rsquo;re exactly who SearchADeal was built for.
          </i></p>
      </div>

      {{-- ─ Final CTA ─ --}}
      <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight text-center">
        Ready to Stop Overpaying?
      </h2>
      <p class="font-body text-[16px] text-muted leading-relaxed mb-8 text-center">
        You&rsquo;ve read who we are and what we stand for. Now let the numbers do the talking. The comparison takes minutes. The savings can last years. And if nothing fits your situation, you leave with zero obligation, zero consequence, and zero spam calls.
      </p>

      {{-- 3-service CTA cards — anchor tags replace React onClick handlers --}}
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8 not-prose">

        <a
          href="{{ route('car-insurance') }}"
          class="p-6 border-2 border-primary rounded-[3px] hover:bg-primary hover:text-white transition-colors group text-left block"
        >
          <div class="font-heading text-[20px] font-bold mb-2 flex items-center gap-2 text-primary group-hover:text-white transition-colors">
            <i data-lucide="car" style="width:20px;height:20px;"></i>
            Compare Insurance
          </div>
          <div class="font-body text-[14px] text-muted group-hover:opacity-80 transition-colors mb-4">
            Free &middot; 127 seconds
          </div>
          <div class="flex items-center gap-2 font-bold text-[14px] text-primary group-hover:text-white group-hover:translate-x-1 transition-all">
            Start
            <i data-lucide="arrow-right" style="width:16px;height:16px;"></i>
          </div>
        </a>

        <a
          href="{{ route('tracker1') }}"
          class="p-6 border-2 border-primary rounded-[3px] hover:bg-primary hover:text-white transition-colors group text-left block"
        >
          <div class="font-heading text-[20px] font-bold mb-2 flex items-center gap-2 text-primary group-hover:text-white transition-colors">
            <i data-lucide="radio" style="width:20px;height:20px;"></i>
            Compare Trackers
          </div>
          <div class="font-body text-[14px] text-muted group-hover:opacity-80 transition-colors mb-4">
            Free &middot; 60 seconds
          </div>
          <div class="flex items-center gap-2 font-bold text-[14px] text-primary group-hover:text-white group-hover:translate-x-1 transition-all">
            Start
            <i data-lucide="arrow-right" style="width:16px;height:16px;"></i>
          </div>
        </a>

        <a
          href="{{ route('tracker.loan') }}"
          class="p-6 border-2 border-primary rounded-[3px] hover:bg-primary hover:text-white transition-colors group text-left block"
        >
          <div class="font-heading text-[20px] font-bold mb-2 flex items-center gap-2 text-primary group-hover:text-white transition-colors">
            <i data-lucide="credit-card" style="width:20px;height:20px;"></i>
            Compare Loans
          </div>
          <div class="font-body text-[14px] text-muted group-hover:opacity-80 transition-colors mb-4">
            Free &middot; 5 minutes
          </div>
          <div class="flex items-center gap-2 font-bold text-[14px] text-primary group-hover:text-white group-hover:translate-x-1 transition-all">
            Start
            <i data-lucide="arrow-right" style="width:16px;height:16px;"></i>
          </div>
        </a>

      </div>

      <p class="font-body text-[14px] text-muted font-bold text-center mb-16 uppercase tracking-widest not-prose">
        Free &bull; No obligation &bull; No spam &bull; Takes minutes
      </p>

      {{-- ─ Legal Disclosure ─ --}}
      <div class="p-8 rounded-[3px] border border-border text-[12px] text-muted leading-relaxed not-prose grey-bg">
        <p class="font-bold mb-2 uppercase tracking-widest">Legal Disclosure</p>
        <p>
          SearchADeal is not a registered financial services provider, insurer, or credit provider. We operate as an affiliate comparison platform connecting consumers with registered providers. For personal loans, all lenders are NCR-registered and NCA-compliant. Loan approval is not guaranteed and depends on each lender&rsquo;s independent assessment. Borrowing costs money; assess affordability before accepting any offer. All lenders must provide a pre-agreement statement and quotation showing the total cost of credit before you sign. Your information is handled in accordance with POPIA. For car trackers: providers are vetted, but SearchADeal provides no warranty on provider performance. The market statistics cited are sourced from publicly available data, including SAPS crime statistics, National Credit Regulator reports, TransUnion Industry Insights, the FinMark Trust FinScope Consumer Survey 2024, the South African Reserve Bank, and industry analysis.
        </p>
      </div>

    </div>
  </section>

</main>
@include('partials.tailwind_footer')
