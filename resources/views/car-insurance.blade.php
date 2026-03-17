@include('partials.tailwind_header');

@if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger" role="alert">
        {{ session('error') }}
    </div>
@endif


{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8" />--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0" />--}}
{{--    <title>Car Insurance | SearchADeal</title>--}}
{{--    <script>--}}
{{--      tailwind.config = {--}}
{{--        theme: {--}}
{{--          extend: {--}}
{{--            colors: {--}}
{{--              primary: "#0f172a",--}}
{{--              background: "#f8fafc",--}}
{{--              white: "#ffffff",--}}
{{--              accent: "#f59e0b",--}}
{{--              muted: "#64748b",--}}
{{--              border: "#e2e8f0",--}}
{{--              insurance: "#1e40af",--}}
{{--              tracker: "#065f46",--}}
{{--              loans: "#92400e"--}}
{{--            },--}}
{{--            fontFamily: {--}}
{{--              heading: ["DM Sans", "ui-sans-serif", "system-ui", "sans-serif"],--}}
{{--              body: ["Inter", "ui-sans-serif", "system-ui", "sans-serif"]--}}
{{--            }--}}
{{--          }--}}
{{--        }--}}
{{--      }--}}
{{--    </script>--}}
{{--    <script src="https://cdn.tailwindcss.com?plugins=typography"></script>--}}
{{--    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />--}}

{{--    <style>--}}
{{--        .text-accent{--}}
{{--            color: #F59E0B;--}}
{{--            /*color: #E2E8F0; White--}}
{{--            color: #0F172A; - Black--}}
{{--            color: #64748B;  - Gray*/--}}
{{--        }--}}
{{--        .orange-bg{--}}
{{--            background: #F59E0B;--}}
{{--        }--}}
{{--        .black-button, black-bg{--}}
{{--            background: #0F172A;--}}
{{--        }--}}

{{--        .grey-bg{--}}
{{--            background: #F8FAFC;--}}
{{--        }--}}
{{--        .light-orange{--}}
{{--            color: #312002;--}}
{{--        }--}}
{{--    </style>--}}

{{--</head>--}}
{{--<body class="min-h-screen flex flex-col relative bg-white">--}}
{{--<!-- Header -->--}}
{{--<header class="fixed top-0 left-0 right-0 h-[58px] px-[14.5px] md:px-[58px] flex items-center justify-between z-50 bg-background/90 backdrop-blur-sm">--}}
{{--    <div class="font-heading font-bold text-xl tracking-tighter">SearchADeal</div>--}}

{{--    <button type="button" aria-label="Open Menu" class="md:hidden inline-flex items-center justify-center w-9 h-9 rounded-md border border-primary text-primary hover:bg-background/60" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">--}}
{{--        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">--}}
{{--            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />--}}
{{--        </svg>--}}
{{--    </button>--}}

{{--    <nav class="hidden md:flex items-center gap-8 font-heading text-[10px] font-medium uppercase tracking-wider">--}}
{{--        <a href="{{ route('index') }}" class="nav-item nav-link {{ Route::is('index') ? 'active' : '' }}">Home</a>--}}
{{--        <a href="{{ route('car-insurance') }}" class="nav-item nav-link {{ Route::is('car-insurance') ? 'active' : '' }}">Car Insurance</a>--}}
{{--        <a href="{{ route('tracker') }}" class="hover:text-accent transition-colors">Car Trackers</a>--}}
{{--        <a href="{{ route('loans') }}" class="hover:text-accent transition-colors">Personal Loans</a>--}}
{{--    </nav>--}}

{{--    <div class="flex items-center gap-4">--}}
{{--        <div class="hidden md:flex items-center border border-primary rounded-full px-3 py-1 font-heading text-[10px] font-medium">--}}
{{--            <button type="button" class="px-1 opacity-50 hover:opacity-100 transition-opacity">FR</button>--}}
{{--            <span class="mx-1 opacity-30">|</span>--}}
{{--            <button type="button" class="px-1">EN</button>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</header>--}}

<!-- Mobile menu -->
<div id="mobile-menu" class="md:hidden hidden fixed top-[58px] inset-x-0 z-40 bg-white border-b border-border shadow-sm">
    <div class="px-4 py-3 flex flex-col gap-3 font-heading text-[12px] uppercase">
        <a href="{{ route('index') }}" class="py-2">Home</a>
        <a href="{{ route('car-insurance') }}" class="py-2">Car Insurance</a>
        <a href="{{ route('tracker') }}" class="py-2">Car Trackers</a>
        <a href="{{ route('loans') }}" class="py-2">Personal Loans</a>
    </div>
</div>

<main class="flex-grow pt-[58px]">
    <!-- Hero Section -->
    <section class="py-14 md:py-20 px-4 md:px-[58px] bg-background grey-bg">
        <div class="max-w-[1000px] mx-auto text-center">
            <h1 class="font-heading text-[clamp(32px,7vw,64px)] font-medium leading-[1] tracking-[-0.02em] text-primary mb-6">
                R6,847 Per Year. Evaporated.
                <span class="block mt-1 text-accent">Because Nobody Showed You This Before.</span>
            </h1>
            <p class="font-heading text-[clamp(16px,3.8vw,22px)] text-primary font-medium mb-10 leading-snug max-w-3xl mx-auto">
                While South African Drivers Renewed at 11.2% Higher Premiums Last Month, 4,219 Others Discovered Cover That Costs 38–47% Less, In 127 Seconds
            </p>
            <div class="flex flex-col sm:flex-row sm:flex-wrap items-center justify-center gap-4 sm:gap-6 mb-10">
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
            <a
        href="#tracker-form"
        class="w-full sm:w-auto px-8 md:px-10 py-4 md:py-5 bg-primary text-white rounded-full font-heading text-[15px] md:text-[16px] font-bold hover:bg-accent transition-all group inline-flex items-center justify-center gap-3 md:gap-4 mx-auto black-button"
      >   Get Your Competitive Quotes Now
                <i data-lucide="arrow-right" class="w-[18px] md:w-[20px] h-[18px] md:h-[20px] group-hover:translate-x-1 transition-transform"></i>
            </a>
        </div>
    </section>

    <!-- Editorial Content -->
    <section class="py-20 px-[14.5px] md:px-[58px]">
        <div class="max-w-[800px] mx-auto prose prose-slate prose-lg">
            <div class="bg-background p-8 rounded-[3px] border-l-4 border-accent mb-12 grey-bg">
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

            <div class="bg-primary text-white p-12 rounded-[3px] mb-16 black-button">
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
            <div class="bg-background p-8 rounded-[3px] border border-border mb-12 grey-bg">
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
            <div class="space-y-8 md:space-y-12 mb-16">
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-8">
                    <div class="font-heading text-[36px] sm:text-[40px] font-bold text-accent/20 leading-none order-first sm:order-none"><p style="color: #312002">01</p></div>
                    <div>
                        <h4 class="font-heading text-[18px] sm:text-[20px] font-medium text-primary mb-2">You Complete One Form</h4>
                        <p class="font-body text-[15px] text-muted m-0">Vehicle details, driver profile, current premium. No credit checks. 127 seconds average.</p>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-8">
                    <div class="font-heading text-[36px] sm:text-[40px] font-bold text-accent/20 leading-none">02</div>
                    <div>
                        <h4 class="font-heading text-[18px] sm:text-[20px] font-medium text-primary mb-2">Profile Reaches 12+ Providers</h4>
                        <p class="font-body text-[15px] text-muted m-0">Legacy insurers, direct providers, and telematics specialists compete for your business automatically.</p>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-8">
                    <div class="font-heading text-[36px] sm:text-[40px] font-bold text-accent/20 leading-none">03</div>
                    <div>
                        <h4 class="font-heading text-[18px] sm:text-[20px] font-medium text-primary mb-2">Receive Competitive Quotes</h4>
                        <p class="font-body text-[15px] text-muted m-0">WhatsApp quotes and email summaries with full breakdowns. You compare. You choose. You decide.</p>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-8">
                    <div class="font-heading text-[36px] sm:text-[40px] font-bold text-accent/20 leading-none">04</div>
                    <div>
                        <h4 class="font-heading text-[18px] sm:text-[20px] font-medium text-primary mb-2">Consistently Save R400–R850/Month</h4>
                        <p class="font-body text-[15px] text-muted m-0">Insurers send their sharpest pricing because they know they're in a competitive environment.</p>
                    </div>
                </div>
            </div>

            <div class="bg-accent text-white p-12 rounded-[3px] mb-16 text-center orange-bg">
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
                <div class="flex items-start gap-3 p-4 bg-background rounded-[3px] grey-bg">
                    <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-1"></i>
                    <div>
                        <div class="font-heading text-[14px] font-bold text-primary">POPIA-compliant</div>
                        <p class="text-[13px] text-muted m-0">Data is encrypted end-to-end, never sold, only shared with providers you approve.</p>
                    </div>
                </div>
                <div class="flex items-start gap-3 p-4 bg-background rounded-[3px] grey-bg">
                    <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-1"></i>
                    <div>
                        <div class="font-heading text-[14px] font-bold text-primary">Load-shedding resilient</div>
                        <p class="text-[13px] text-muted m-0">Quotes queue during outages and process instantly when power returns.</p>
                    </div>
                </div>
                <div class="flex items-start gap-3 p-4 bg-background rounded-[3px] grey-bg">
                    <i data-lucide="check-circle-2" class="w-[18px] h-[18px] text-accent shrink-0 mt-1"></i>
                    <div>
                        <div class="font-heading text-[14px] font-bold text-primary">Zero broker commissions</div>
                        <p class="text-[13px] text-muted m-0">Direct-to-insurer matching means those savings flow to you.</p>
                    </div>
                </div>
                <div class="flex items-start gap-3 p-4 bg-background rounded-[3px] grey-bg">
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
            <div class="bg-primary text-white p-8 rounded-[3px] mb-12 " style="background: #0F172A;">
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
                <div class="p-8 border-2 border-accent rounded-[3px] bg-accent/5 orange-border" style="border: 2px solid #F59E0B">
                    <div class="font-heading text-[18px] font-bold text-accent mb-4 uppercase tracking-widest">Path 2</div>
                    <p class="text-[14px] text-primary leading-relaxed">
                        Invest 127 seconds right now. Let 12 insurers compete for your business. Save R400–R850/month. Five years from now, you'll have an extra R30,000–R40,000 in your account.
                    </p>
                </div>
            </div>

            <!-- Form Section -->
            <div id="tracker-form" class="bg-white border-2 border-primary p-6 md:p-12 rounded-[3px] mb-16 text-center shadow-2xl" style="border: 2px solid #0F172A">
                <h3 class="font-heading text-[20px] md:text-[24px] font-medium text-primary mb-3 md:mb-4">Get Your Competitive Quotes Now</h3>
                <p class="font-body text-[13px] md:text-[14px] text-muted mb-6 md:mb-8">Free to use. 127 seconds average completion time. Zero obligation.</p>
                <div class="space-y-3 md:space-y-4 max-w-md mx-auto">
                    <form action="{{ route('car.insure.submit') }}" method="post">
                        @csrf
                        <input type="hidden" name="form_source" value="car_insure_landing">


                        <input type="text" class="w-full mt-3 p-3 md:p-4 border border-border rounded-[3px] font-body text-[14px]" id="gname" placeholder="First Name" name="firstname" required />
                        <input type="text" class="w-full mt-3 p-3 md:p-4 border border-border rounded-[3px] font-body text-[14px]" id="lname" placeholder="Last Name" name="lastname" required />
                        <input type="text" class="w-full mt-3 p-3 md:p-4 border border-border rounded-[3px] font-body text-[14px]" id="phone_number" placeholder="Phone Number, format: 0xx-xxx-xxxx" name="phone1" required />
                        <input type="email" class="w-full mt-3 p-3 md:p-4 border border-border rounded-[3px] font-body text-[14px]" id="gmail" placeholder="Email" required name="email" />

                        <div class="sm:col-span-3">
                            <div class="mt-2 grid grid-cols-1">
                                <select name="gender" required style="border: #E5E7EB 1px solid; display: block; height: 53px; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; width: 100%; color:#334155;"
                                        class="col-start-1 border-black row-start-1 w-full border border-border rounded-[3px] appearance-none rounded-md py-1.5 pr-8 pl-3 text-base outline-1 -outline-offset-1 outline-dark/10 bg-transparent
                                        focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" id="gender">
                                    <option selected>Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">I prefer not to say</option>
                                </select>
                                <svg viewBox="0 0 16 16" fill="currentColor" data-slot="icon" aria-hidden="true" class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-400 sm:size-4">
                                    <path d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div class="sm:col-span-3">
                            <div class="mt-2 grid grid-cols-1">
                                <select name="currentinsurer" style="border: #E5E7EB 1px solid; display: block; height: 53px; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; width: 100%; color:#334155;"
                                        class="col-start-1 border-black row-start-1 w-full appearance-none rounded-md py-1.5 pr-8 pl-3 text-base text-dark outline-1 -outline-offset-1 outline-dark/10 bg-transparent
                                        focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" id="currentinsurer">
                                    <option selected>Current Insurer</option>
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
                                <svg viewBox="0 0 16 16" fill="currentColor" data-slot="icon" aria-hidden="true" class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-400 sm:size-4">
                                    <path d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                                </svg>
                            </div>
                        </div>



                        <div class="sm:col-span-3">
                            <div class="mt-2 grid grid-cols-1">
                                <select name="vehiclemake" required style="border: #E5E7EB 1px solid; display: block; height: 53px; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; width: 100%; color:#334155;"
                                        class="col-start-1 border-black row-start-1 w-full appearance-none rounded-md py-1.5 pr-8 pl-3 text-base text-dark outline-1 -outline-offset-1 outline-dark/10 bg-transparent focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" id="vehiclemake">
                                    <option selected>Vehicle Make</option>
                                    <option value="Audi">Audi</option>
                                    <option value="AlfaRomeo">Alfa Romeo</option>
                                    <option value="BMW">BMW</option>
                                    <option value="Mercedes">Mercedes</option>
                                    <option value="Buick">Buick</option>
                                    <option value="Cadillac">Cadillac</option>
                                    <option value="Chevrolet">Chevrolet</option>
                                    <option value="Chrysler">Chrysler</option>
                                    <option value="Citroen">Citroen</option>
                                    <option value="Daewoo">Daewoo</option>
                                    <option value="Daihatsu">Daihatsu</option>
                                    <option value="Ferrari">Ferrari</option>
                                    <option value="Fiat">Fiat</option>
                                    <option value="Ford">Ford</option>
                                    <option value="GMC">GMC</option>
                                    <option value="Hyundai">Hyundai</option>
                                    <option value="Isuzu">Isuzu</option>
                                    <option value="Jaguar">Jaguar</option>
                                    <option value="Jeep">Jeep</option>
                                    <option value="Land">Land</option>
                                    <option value="TangeRover">Range Rover</option>
                                    <option value="Lexus">Lexus</option>
                                    <option value="mazda">mazda</option>
                                    <option value="Mini">Mini</option>
                                    <option value="Mitsubishi">Mitsubishi</option>
                                    <option value="Nissan">Nissan</option>
                                    <option value="Opel">Opel</option>
                                    <option value="Peugeot">Peugeot</option>
                                    <option value="Renault">Renault</option>
                                    <option value="Smart">Smart</option>
                                    <option value="Subaru">Subaru</option>
                                    <option value="Suzuki">Suzuki</option>
                                    <option value="Toyota">Toyota</option>
                                    <option value="Volkswagen">Volkswagen</option>
                                    <option value="Kia">Kia</option>
                                    <option value="Citreon">Citreon</option>
                                    <option value="Dihatsu">Dihatsu</option>
                                    <option value="Volvo">Volvo</option>
                                    <option value="Honda">Honda</option>
                                    <option value="Mahindra">Mahindra</option>
                                    <option value="Other">Other</option>
                                </select>
                                <svg viewBox="0 0 16 16" fill="currentColor" data-slot="icon" aria-hidden="true" class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-400 sm:size-4">
                                    <path d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                                </svg>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 text-left mt-3">
                            <input id="checkbox-1" required name="acceptterms" value="true" aria-describedby="checkbox-1" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded mt-1">
                            <label for="checkbox-1" class="text-sm font-medium text-gray-900">I agree to the <a href="#" class="text-blue-600 hover:underline">terms and conditions</a></label>
                        </div>
                        <div>
                            <button class="w-full py-4 md:py-5 mt-3 bg-primary font-heading font-bold rounded-full hover:bg-accent transition-colors black-button text-white" type="submit">
                                Get Car Insurance
                            </button>
                        </div>
                        <input type="hidden" name="optinurl" value="https://searchadeal.online/" required>
                        <input type="hidden" name="optindate" value="{{ date('Y-m-d h:i:s') }}" required>
                        <input type="hidden" name="channel" value="JMAff" required>
                        <input type="hidden" name="language" value="English" required>
                        <input type="hidden" name="product" value="JMCar" required>
                        <input type="hidden" name="affiliateshortcode" value="JMAFFSite15022" required>
                        <input type="hidden" name="Leadsource" value="JMLSSEARCHADEAL9020" required>
                        <input type="hidden" name="offer_id" value="377" required>
                    </form>
                </div>
                <p class="mt-3 md:mt-6 font-body text-[10px] md:text-[11px] text-muted uppercase tracking-widest">
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
</main>

@include('partials.tailwind_footer');
