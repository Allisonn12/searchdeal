@include('partials.tailwind_header', ['title' => 'Compare Personal Loans in Minutes | SearchADeal']);

{{-- Flash messages --}}
@if($errors->any())
  <div class="alert alert-danger" role="alert">
    <ul class="mb-0 list-disc pl-5 space-y-1">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
@if(session('success'))
  <div class="alert alert-success" role="alert">{{ session('success') }}</div>
@endif
@if(session('error'))
  <div class="alert alert-danger" role="alert">{{ session('error') }}</div>
@endif

{{-- ══════════════════ MAIN ══════════════════ --}}
<main class="flex-grow pt-[58px] bg-white">

  {{-- ── Hero Section ── --}}
  <section class="py-20 px-[14.5px] md:px-[58px] bg-background grey-bg">
    <div class="max-w-[1000px] mx-auto text-center">

      {{-- Eyebrow label --}}
      <h2 class="font-heading text-[12px] font-bold uppercase tracking-widest text-accent mb-4">
        Personal Loans Comparison Platform
      </h2>

      <h1 class="font-heading text-[clamp(40px,5vw,72px)] font-medium leading-[0.9] tracking-[-0.03em] text-primary mb-8">
        Stop Wasting Time. Find the Right<br />
        <span class="text-accent">Personal Loan in Minutes.</span>
      </h1>

      <p class="font-body text-[18px] text-muted max-w-3xl mx-auto mb-12 leading-relaxed">
        Connect with multiple registered lenders through one simple application. Compare real offers and choose what works for your situation.
      </p>

      {{-- Trust pills --}}
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

      {{-- CTA anchors down to the form --}}
      <a
        href="#loan-form"
        class="w-full sm:w-auto px-10 py-5 bg-primary text-white rounded-full font-heading text-[16px] font-bold hover:bg-accent transition-all group inline-flex items-center justify-center gap-4 mx-auto black-button"
      >
        Start Your Application Now
        <i data-lucide="arrow-right" class="w-[20px] h-[20px] group-hover:translate-x-1 transition-transform"></i>
      </a>
    </div>
  </section>

  {{-- ── Editorial Prose Section ── --}}
  <section class="py-20 px-[14.5px] md:px-[58px]">
    <div class="max-w-[800px] mx-auto prose prose-slate prose-lg">

      {{-- Problem intro --}}
      <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
        You Shouldn't Have to Visit 10 Banks to Find One Loan
      </h2>
      <p class="font-body text-[16px] text-muted leading-relaxed mb-8">
        Applying for personal loans the old way wastes your time and hurts your credit score with multiple applications.
      </p>

      {{-- Pain-point grid (XCircle cards) --}}
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-16 not-prose">

        <div class="p-6 border border-border rounded-[3px]">
          <div class="flex items-start gap-3 mb-3">
            <i data-lucide="x-circle" class="w-[20px] h-[20px] text-red-400 shrink-0 mt-1"></i>
            <h4 class="font-heading text-[16px] font-bold text-primary m-0">Hours Wasted Visiting Branches</h4>
          </div>
          <p class="font-body text-[14px] text-muted m-0">Taking time off work to stand in queues at multiple banks only to hear &ldquo;we&rsquo;ll get back to you&rdquo; is exhausting and often leads nowhere.</p>
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
          <p class="font-body text-[14px] text-muted m-0">Most banks reject applications without telling you why. You&rsquo;re left guessing what went wrong and where to try next.</p>
        </div>

        <div class="p-6 border border-border rounded-[3px]">
          <div class="flex items-start gap-3 mb-3">
            <i data-lucide="x-circle" class="w-[20px] h-[20px] text-red-400 shrink-0 mt-1"></i>
            <h4 class="font-heading text-[16px] font-bold text-primary m-0">Confusing Terms and Hidden Fees</h4>
          </div>
          <p class="font-body text-[14px] text-muted m-0">Interest rates, initiation fees, service charges, credit life insurance&mdash;every lender structures things differently, making fair comparison nearly impossible.</p>
        </div>

        <div class="p-6 border border-border rounded-[3px]">
          <div class="flex items-start gap-3 mb-3">
            <i data-lucide="x-circle" class="w-[20px] h-[20px] text-red-400 shrink-0 mt-1"></i>
            <h4 class="font-heading text-[16px] font-bold text-primary m-0">Pushy Sales Calls You Never Asked For</h4>
          </div>
          <p class="font-body text-[14px] text-muted m-0">Give your number to one loan site and suddenly you&rsquo;re bombarded with calls from brokers who just want their commission.</p>
        </div>

        <div class="p-6 border border-border rounded-[3px]">
          <div class="flex items-start gap-3 mb-3">
            <i data-lucide="x-circle" class="w-[20px] h-[20px] text-red-400 shrink-0 mt-1"></i>
            <h4 class="font-heading text-[16px] font-bold text-primary m-0">Time Is Running Out</h4>
          </div>
          <p class="font-body text-[14px] text-muted m-0">When you need funds for an emergency, to consolidate debt, or cover essential expenses, you can&rsquo;t afford to wait weeks for approval.</p>
        </div>

      </div>

      {{-- Pull-quote — bg-accent/5 rendered via inline style for reliable CDN Tailwind support --}}
      <div class="p-8 rounded-[3px] border-l-4 mb-16 not-prose" style="background-color:rgba(245,158,11,0.05); border-color:#F59E0B;">
        <p class="font-body text-[18px] text-primary italic leading-relaxed m-0">
          &ldquo;You know you need a personal loan. The question isn&rsquo;t whether to borrow, it&rsquo;s where to get the best deal without wasting days of your life.&rdquo;
        </p>
      </div>

      {{-- How it works --}}
      <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
        How Our Platform Works
      </h2>
      <p class="font-body text-[16px] text-muted leading-relaxed mb-8">
        We connect you with multiple registered lenders through one simple process.
      </p>

      <div class="space-y-12 mb-16 not-prose">

        <div class="flex gap-8">
          <div class="font-heading text-[40px] font-bold leading-none shrink-0" style="color:rgba(245,158,11,0.25)"><span class="light-orange">01</span></div>
          <div>
            <h4 class="font-heading text-[20px] font-medium text-primary mb-2">Complete One Application</h4>
            <p class="font-body text-[15px] text-muted m-0">Fill in your details once. Tell us what you need and provide basic information about your income and expenses.</p>
          </div>
        </div>

        <div class="flex gap-8">
          <div class="font-heading text-[40px] font-bold leading-none shrink-0" style="color:rgba(245,158,11,0.25)">02</div>
          <div>
            <h4 class="font-heading text-[20px] font-medium text-primary mb-2">We Share With Lenders</h4>
            <p class="font-body text-[15px] text-muted m-0">Your application goes to our network of registered banks, neobanks, and licensed credit providers who compete for your business.</p>
          </div>
        </div>

        <div class="flex gap-8">
          <div class="font-heading text-[40px] font-bold leading-none shrink-0" style="color:rgba(245,158,11,0.25)">03</div>
          <div>
            <h4 class="font-heading text-[20px] font-medium text-primary mb-2">Receive Multiple Offers</h4>
            <p class="font-body text-[15px] text-muted m-0">Get contacted by lenders willing to work with your situation. Each will present their terms&mdash;interest rate, fees, and repayment schedule.</p>
          </div>
        </div>

        <div class="flex gap-8">
          <div class="font-heading text-[40px] font-bold leading-none shrink-0" style="color:rgba(245,158,11,0.25)">04</div>
          <div>
            <h4 class="font-heading text-[20px] font-medium text-primary mb-2">You Choose What Works</h4>
            <p class="font-body text-[15px] text-muted m-0">Compare the offers you receive and select the one that fits your budget. No pressure. No obligation. Your decision entirely.</p>
          </div>
        </div>

      </div>

      {{-- Why thousands choose us --}}
      <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
        Why Thousands Choose Our Platform
      </h2>
      <p class="font-body text-[16px] text-muted leading-relaxed mb-8">
        We make the loan comparison process transparent and efficient.
      </p>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-16 not-prose">

        <div class="flex items-start gap-3 p-4 bg-background rounded-[3px] grey-bg">
          <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-1"></i>
          <div>
            <div class="font-heading text-[14px] font-bold text-primary">Save Time and Effort</div>
            <p class="text-[13px] text-muted m-0">One application instead of filling out forms at 5-10 different banks. Submit once and let lenders come to you.</p>
          </div>
        </div>

        <div class="flex items-start gap-3 p-4 bg-background rounded-[3px] grey-bg">
          <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-1"></i>
          <div>
            <div class="font-heading text-[14px] font-bold text-primary">Protect Your Credit Score</div>
            <p class="text-[13px] text-muted m-0">Our application process minimizes hard credit checks. Lenders can assess your basic profile before running formal credit bureau checks.</p>
          </div>
        </div>

        <div class="flex items-start gap-3 p-4 bg-background rounded-[3px] grey-bg">
          <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-1"></i>
          <div>
            <div class="font-heading text-[14px] font-bold text-primary">Access More Options</div>
            <p class="text-[13px] text-muted m-0">Connect with major banks like Capitec, FNB, and Standard Bank, plus neobanks and digital lenders you might not know about.</p>
          </div>
        </div>

        <div class="flex items-start gap-3 p-4 bg-background rounded-[3px] grey-bg">
          <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-1"></i>
          <div>
            <div class="font-heading text-[14px] font-bold text-primary">Transparent Comparisons</div>
            <p class="text-[13px] text-muted m-0">When you receive offers, you&rsquo;ll see the interest rate, fees, and total cost of credit for each, making comparison straightforward.</p>
          </div>
        </div>

        <div class="flex items-start gap-3 p-4 bg-background rounded-[3px] grey-bg">
          <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-1"></i>
          <div>
            <div class="font-heading text-[14px] font-bold text-primary">No Hidden Obligations</div>
            <p class="text-[13px] text-muted m-0">We don&rsquo;t force you to accept any offer. If nothing works for you, walk away. No strings attached.</p>
          </div>
        </div>

        <div class="flex items-start gap-3 p-4 bg-background rounded-[3px] grey-bg">
          <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-1"></i>
          <div>
            <div class="font-heading text-[14px] font-bold text-primary">Completely Free Service</div>
            <p class="text-[13px] text-muted m-0">You never pay us. Lenders compensate us for connecting them with potential borrowers, which means our service costs you nothing.</p>
          </div>
        </div>

        <div class="flex items-start gap-3 p-4 bg-background rounded-[3px] grey-bg">
          <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-1"></i>
          <div>
            <div class="font-heading text-[14px] font-bold text-primary">NCR-Registered Lenders Only</div>
            <p class="text-[13px] text-muted m-0">All lenders in our network are registered with the National Credit Regulator and comply with the National Credit Act.</p>
          </div>
        </div>

        <div class="flex items-start gap-3 p-4 bg-background rounded-[3px] grey-bg">
          <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-1"></i>
          <div>
            <div class="font-heading text-[14px] font-bold text-primary">Fast Processing</div>
            <p class="text-[13px] text-muted m-0">Applications are processed 24/7. Many lenders can give preliminary feedback within hours, not days.</p>
          </div>
        </div>

      </div>

      {{-- Comparison table --}}
      <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
        Traditional Applications vs. Our Platform
      </h2>
      <div class="overflow-x-auto mb-16 not-prose">
        <table class="w-full border-collapse">
          <thead>
            <tr class="border-b border-border">
              <th class="py-4 px-4 text-left font-heading text-[12px] uppercase tracking-wider text-muted font-medium w-1/3">Feature</th>
              <th class="py-4 px-4 text-left font-heading text-[12px] uppercase tracking-wider text-muted font-medium">Traditional Way</th>
              <th class="py-4 px-4 text-left font-heading text-[12px] uppercase tracking-wider font-bold text-accent">Our Platform</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b border-border hover:bg-gray-50 transition-colors">
              <td class="py-4 px-4 font-heading text-[14px] text-primary font-medium">Number of Applications Needed</td>
              <td class="py-4 px-4 font-body text-[14px] text-muted">5-10 separate applications</td>
              <td class="py-4 px-4 font-body text-[14px] text-primary font-bold">Just 1 application</td>
            </tr>
            <tr class="border-b border-border hover:bg-gray-50 transition-colors">
              <td class="py-4 px-4 font-heading text-[14px] text-primary font-medium">Time to Apply Everywhere</td>
              <td class="py-4 px-4 font-body text-[14px] text-muted">Days of visiting branches</td>
              <td class="py-4 px-4 font-body text-[14px] text-primary font-bold">Minutes to complete</td>
            </tr>
            <tr class="border-b border-border hover:bg-gray-50 transition-colors">
              <td class="py-4 px-4 font-heading text-[14px] text-primary font-medium">Credit Score Impact</td>
              <td class="py-4 px-4 font-body text-[14px] text-muted">Multiple hard credit checks</td>
              <td class="py-4 px-4 font-body text-[14px] text-primary font-bold">Minimized credit checks</td>
            </tr>
            <tr class="border-b border-border hover:bg-gray-50 transition-colors">
              <td class="py-4 px-4 font-heading text-[14px] text-primary font-medium">Access to Neobanks &amp; Digital Lenders</td>
              <td class="py-4 px-4 font-body text-[14px] text-muted">Limited to banks you know</td>
              <td class="py-4 px-4 font-body text-[14px] text-primary font-bold">Full network access</td>
            </tr>
            <tr class="hover:bg-gray-50 transition-colors">
              <td class="py-4 px-4 font-heading text-[14px] text-primary font-medium">Easy Comparison</td>
              <td class="py-4 px-4 font-body text-[14px] text-muted">Difficult to compare different offers</td>
              <td class="py-4 px-4 font-body text-[14px] text-primary font-bold">Side-by-side comparison</td>
            </tr>
          </tbody>
        </table>
      </div>

      {{-- FAQ --}}
      <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
        Common Questions
      </h2>
      <div class="space-y-4 mb-16 not-prose">

        <div class="p-6 border border-border rounded-[3px]">
          <div class="font-heading text-[16px] font-bold text-primary mb-2">Are you a lender?</div>
          <p class="font-body text-[14px] text-muted m-0">No. We are not a registered financial services provider and we do not issue loans. We are a comparison platform that connects you with multiple registered lenders in South Africa. Lenders make all credit decisions independently.</p>
        </div>

        <div class="p-6 border border-border rounded-[3px]">
          <div class="font-heading text-[16px] font-bold text-primary mb-2">How do you make money if the service is free?</div>
          <p class="font-body text-[14px] text-muted m-0">We receive a referral fee from lenders when we connect them with potential borrowers. This commission is paid by the lender, not by you. It doesn&rsquo;t affect the interest rate or terms you receive.</p>
        </div>

        <div class="p-6 border border-border rounded-[3px]">
          <div class="font-heading text-[16px] font-bold text-primary mb-2">Will applying hurt my credit score?</div>
          <p class="font-body text-[14px] text-muted m-0">Submitting your details on our platform generates a soft enquiry or no enquiry initially. If a lender wants to make you an offer, they will request permission to run a full credit check. You control when that happens.</p>
        </div>

        <div class="p-6 border border-border rounded-[3px]">
          <div class="font-heading text-[16px] font-bold text-primary mb-2">What if I have bad credit or am blacklisted?</div>
          <p class="font-body text-[14px] text-muted m-0">Our network includes lenders who work with different credit profiles. While we can&rsquo;t guarantee approval, some lenders specialize in near-prime and subprime lending. Being truthful in your application helps match you with appropriate lenders.</p>
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
          <p class="font-body text-[14px] text-muted m-0">You&rsquo;ll need your ID number, employment details, income information, bank account details, and basic information about your current expenses and debt obligations.</p>
        </div>

        <div class="p-6 border border-border rounded-[3px]">
          <div class="font-heading text-[16px] font-bold text-primary mb-2">Can I apply if I&rsquo;m under debt review?</div>
          <p class="font-body text-[14px] text-muted m-0">If you are currently under debt review (debt counselling), you cannot legally take on new credit until the process is complete. Being honest about this in your application helps avoid wasting your time.</p>
        </div>

        <div class="p-6 border border-border rounded-[3px]">
          <div class="font-heading text-[16px] font-bold text-primary mb-2">What loan amounts can I apply for?</div>
          <p class="font-body text-[14px] text-muted m-0">Lenders in our network offer personal loans ranging from as little as R1,000 to R500,000, depending on your affordability assessment. The amount you&rsquo;re approved for depends on your income, expenses, and credit profile.</p>
        </div>

      </div>

      {{-- ── Form Section ── --}}
      {{-- id="loan-form" matches the hero CTA anchor href="#loan-form" --}}
      <div id="loan-form" class="bg-white border-2 border-primary p-12 rounded-[3px] mb-16 text-center shadow-2xl not-prose" style="border:2px solid #0F172A;">
        <h3 class="font-heading text-[24px] font-medium text-primary mb-4">Ready to Compare Your Loan Options?</h3>
        <p class="font-body text-[14px] text-muted mb-8">One application. Multiple lenders. You decide what works.</p>

        <div class="space-y-4 max-w-md mx-auto">
          {{-- Targets LoanController@store — field values align with loan validation rules --}}
          <form action="{{ route('loan.submit') }}" method="post" class="space-y-4">
            @csrf
            <input type="hidden" name="form_source" value="personal_loans_landing" />

            <input
              type="text"
              class="w-full p-4 border border-border rounded-[3px] font-body text-[14px]"
              placeholder="First Name"
              name="firstname"
              value="{{ old('firstname') }}"
              required
            />
            <input
              type="text"
              class="w-full p-4 border border-border rounded-[3px] font-body text-[14px]"
              placeholder="Last Name"
              name="lastname"
              value="{{ old('lastname') }}"
              required
            />
            <input
              type="email"
              class="w-full p-4 border border-border rounded-[3px] font-body text-[14px]"
              placeholder="Email Address"
              name="email"
              value="{{ old('email') }}"
              required
            />
            <input
              type="tel"
              class="w-full p-4 border border-border rounded-[3px] font-body text-[14px]"
              placeholder="Phone Number"
              name="phone1"
              value="{{ old('phone1') }}"
              required
            />

            <input
              type="text"
              class="w-full p-4 border border-border rounded-[3px] font-body text-[14px]"
              placeholder="13 Digit ID Number *"
              name="idnumber"
              value="{{ old('idnumber') }}"
              required
            />

            {{-- Title --}}
            <select
              name="title"
              required
              class="w-full p-4 border border-border rounded-[3px] font-body text-[14px] bg-white"
              aria-label="Title"
            >
              <option value="" disabled @selected(! old('title'))>Title</option>
              <option value="mr" @selected(old('title') === 'mr')>Mr</option>
              <option value="ms" @selected(old('title') === 'ms')>Ms</option>
              <option value="mrs" @selected(old('title') === 'mrs')>Mrs</option>
              <option value="dr" @selected(old('title') === 'dr')>Dr</option>
            </select>

            {{-- Debt review status --}}
            <select
              name="underdebtreview"
              required
              class="w-full p-4 border border-border rounded-[3px] font-body text-[14px] bg-white"
              aria-label="Under debt review?"
            >
              <option value="" disabled @selected(! old('underdebtreview'))>Are you currently under Debt Review?</option>
              <option value="no" @selected(old('underdebtreview') === 'no')>No</option>
              <option value="yes" @selected(old('underdebtreview') === 'yes')>Yes</option>
            </select>

            {{-- Loan amount slider — visual range matches loans.blade.php UX --}}
            <div class="text-left">
              <label for="loanamount" class="font-heading text-[13px] font-medium text-primary block mb-2">
                How much would you like to loan?
              </label>
              <input
                type="range"
                min="1000"
                max="9000"
                step="500"
                id="loanamount"
                name="loanamount"
                value="{{ old('loanamount', 1000) }}"
                class="w-full accent-amber-500"
                oninput="document.getElementById('loanOutput').textContent = 'R\u00a0' + Number(this.value).toLocaleString('en-ZA')"
              />
              <output id="loanOutput" class="font-body text-[14px] text-accent font-bold block mt-1">R&nbsp;{{ number_format((float) old('loanamount', 1000), 0, '.', ',') }}</output>
            </div>

            {{-- Terms checkbox --}}
            <div class="flex items-start gap-3 text-left">
              <input
                id="loan-terms"
                type="checkbox"
                name="acceptterms"
                value="true"
                required
                @checked(old('acceptterms'))
                class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded mt-1"
              />
              <label for="loan-terms" class="text-sm font-medium text-gray-900">
                I agree to the <a href="{{ route('terms') }}" class="text-blue-600 hover:underline">terms and conditions</a>
              </label>
            </div>

            <button
              type="submit"
              class="w-full py-5 bg-primary text-white font-heading font-bold rounded-full hover:bg-accent transition-colors black-button inline-flex items-center justify-center gap-2"
            >
              Start Your Application Now
              <i data-lucide="arrow-right" class="w-[18px] h-[18px]"></i>
            </button>

            {{-- Hidden tracking fields — mirrors loans.blade.php --}}
            <input type="hidden" name="optinurl"  value="https://searchadeal.online/" />
            <input type="hidden" name="optindate" value="{{ date('d/m/y H:i:s') }}" />
          </form>
        </div>

        <p class="mt-6 font-body text-[11px] text-muted uppercase tracking-widest">
          Takes 5 minutes &bull; No obligation &bull; Completely free
        </p>
      </div>

      {{-- ── Legal Disclosure ── --}}
      <div class="p-8 rounded-[3px] border border-border text-[12px] text-muted leading-relaxed space-y-4 not-prose grey-bg">
        <p><strong>Important Disclosure:</strong> We are not a registered financial services provider and do not issue personal loans. We operate as an affiliate platform that connects consumers with registered lenders and credit providers in South Africa. All lenders in our network are independently registered with the National Credit Regulator (NCR) and comply with the National Credit Act.</p>
        <p><strong>How It Works:</strong> When you submit an application through our platform, we share your information with multiple lenders in our network. These lenders will independently assess your application according to their own credit criteria. We receive a referral fee from lenders when they successfully originate a loan through our platform. This commission does not affect the interest rate, fees, or terms you receive.</p>
        <p><strong>No Guarantee of Approval:</strong> Submitting an application does not guarantee loan approval. Each lender makes independent credit decisions based on their own assessment of your creditworthiness, income, expenses, and compliance with the National Credit Act&rsquo;s affordability requirements.</p>
        <p><strong>Your Rights:</strong> You are under no obligation to accept any loan offer. You have the right to compare offers and choose what works best for your situation. All lenders must provide you with a pre-agreement statement and quotation showing the total cost of credit, interest rate, fees, and repayment terms before you sign any agreement.</p>
        <p><strong>Responsible Borrowing:</strong> Borrowing money costs money. Before accepting any loan, carefully consider whether you can afford the monthly repayments. Over-indebtedness can have serious consequences for your financial health. If you&rsquo;re struggling with debt, consider speaking with a registered debt counsellor.</p>
        <p><strong>Privacy:</strong> We handle your personal information in accordance with the Protection of Personal Information Act (POPIA). Your information is only shared with lenders in our network for the purpose of assessing your loan application.</p>
      </div>

    </div>
  </section>

</main>
@include('partials.tailwind_footer');
