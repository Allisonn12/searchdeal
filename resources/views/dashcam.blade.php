{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8" />--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0" />--}}
{{--    <title>Dashcam Witness Match</title>--}}
{{--    <link rel="preconnect" href="https://fonts.googleapis.com" />--}}
{{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,700&family=Inter:wght@400;500;700&display=swap" rel="stylesheet" />--}}
{{--    <script src="https://cdn.tailwindcss.com"></script>--}}
{{--    <script>--}}
{{--      tailwind.config = {--}}
{{--        theme: {--}}
{{--          extend: {--}}
{{--            colors: {--}}
{{--              primary: '#0f172a',--}}
{{--              background: '#f8fafc',--}}
{{--              accent: '#f59e0b',--}}
{{--              muted: '#64748b',--}}
{{--              border: '#e2e8f0'--}}
{{--            },--}}
{{--            fontFamily: {--}}
{{--              heading: ['DM Sans', 'ui-sans-serif', 'system-ui', 'sans-serif'],--}}
{{--              body: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif']--}}
{{--            }--}}
{{--          }--}}
{{--        }--}}
{{--      };--}}
{{--    </script>--}}
{{--    <style>--}}
{{--        body {--}}
{{--            background-color: #f8fafc;--}}
{{--            color: #0f172a;--}}
{{--            font-family: 'Inter', ui-sans-serif, system-ui, sans-serif;--}}
{{--            -webkit-font-smoothing: antialiased;--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="pt-[58px] bg-white">--}}
@include('partials.tailwind_header')


<!-- Hero Section -->
    <section class="py-20 px-[14.5px] md:px-[58px] bg-background">
        <div class="max-w-[1000px] mx-auto text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-accent/10 text-accent rounded-full font-heading text-[12px] font-bold uppercase tracking-widest mb-8">
                South Africa's First Independent Dashcam Matching Service
            </div>
            <h1 class="font-heading text-[clamp(40px,5vw,64px)] font-medium leading-[1.1] tracking-[-0.03em] text-primary mb-8">
                You Drive Safely.<br />
                You Pay Your Premiums.<br />
                <span class="text-accent">But Can You Prove It?</span>
            </h1>
            <p class="font-body text-[18px] text-muted max-w-3xl mx-auto mb-8 leading-relaxed">
                When the other driver lies to the police, and 70% of SA drivers are uninsured, the only thing standing between your innocence and their version of events is the camera you chose.
            </p>
        </div>
    </section>

    <!-- Story Section -->
    <section class="py-20 px-[14.5px] md:px-[58px]">
        <div class="max-w-[800px] mx-auto prose prose-slate prose-lg">
            <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
                This Happened To Someone Like You
            </h2>
            <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
                The light turns green at 7:43 AM.
            </p>
            <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
                You've got the green. Both hands on the wheel. Nowhere near your phone. The other car runs the red at 80 km/h and hits you on the driver's side.
            </p>
            <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
                Glass. Silence. Then the other driver gets out. He's walking. So are you. The police arrive twelve minutes later.
            </p>
            <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
                And then he says it:
            </p>
            <div class="bg-accent/10 p-8 rounded-[3px] border-l-4 border-accent mb-8">
                <p class="font-body text-[24px] text-primary italic m-0">
                    “She came out of nowhere.”
                </p>
            </div>
            <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
                No intersection cameras. No witnesses. The one person who saw it happen is already three blocks away.
            </p>
            <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
                The officer writes both versions in his notebook. Equal weight. Because that is what the law requires when there is no evidence.
            </p>
            <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
                Three weeks later, you are in your insurer's office.
            </p>
            <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
                They have reviewed the police report. They have assessed the damage. They have applied standard procedure for disputed liability cases with no independent evidence.
            </p>
            <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
                <strong class="text-primary">They split it 50/50.</strong> You pay the excess. Your no-claims bonus is gone. Your premium jumps at renewal. The total cost to you, the driver who stopped at a green light, both hands on the wheel, is north of R15,000.
            </p>
            <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
                You did everything right.
            </p>
            <p class="font-body text-[16px] text-primary font-bold italic leading-relaxed mb-6">
                The system couldn't tell.
            </p>
            <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
                Because without footage, your insurer has no mechanism to distinguish the honest driver from the dishonest one. Your word carries the same evidentiary weight as his lie.
            </p>
            <p class="font-body text-[16px] text-primary font-bold leading-relaxed mb-16">
                That is not a hypothetical. That is the documented, structural reality of driving in South Africa, and it is happening to honest drivers every single day.
            </p>

            <!-- Stats Section -->
            <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
                The Honest Driver Penalty
            </h2>
            <p class="font-body text-[16px] text-muted leading-relaxed mb-10">
                You are paying for a system that cannot protect you, and four published facts prove it. These numbers come from SAPS, the Insurance Crime Bureau, the RTMC, and the Transport Ministry. Every one is independently verifiable.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-12">
                <div class="bg-background p-8 rounded-[3px] text-center border border-border flex flex-col justify-center">
                    <div class="font-heading text-[48px] font-bold text-accent mb-4 leading-none">65–70%</div>
                    <p class="font-body text-[14px] text-muted m-0">
                        of vehicles on South African roads are uninsured, roughly 520,000 of the 800,000 annual accidents involve drivers with no cover (AA · SAIA · Hippo.co.za)
                    </p>
                </div>
                <div class="bg-background p-8 rounded-[3px] text-center border border-border flex flex-col justify-center">
                    <div class="font-heading text-[48px] font-bold text-accent mb-4 leading-none">R3.5B</div>
                    <p class="font-body text-[14px] text-muted m-0">
                        in annual insurance fraud, estimated by the ICB and priced into the premiums of honest policyholders like you, every single year (Insurance Crime Bureau 2024)
                    </p>
                </div>
                <div class="bg-background p-8 rounded-[3px] text-center border border-border flex flex-col justify-center">
                    <div class="font-heading text-[48px] font-bold text-accent mb-4 leading-none">21%</div>
                    <p class="font-body text-[14px] text-muted m-0">
                        of road traffic fatalities in 2023 were hit-and-runs, drivers who may never be found or prosecuted (RTMC / PMC Peer-Reviewed Research, 2025)
                    </p>
                </div>
                <div class="bg-background p-8 rounded-[3px] text-center border border-border flex flex-col justify-center">
                    <div class="font-heading text-[48px] font-bold text-accent mb-4 leading-none">87%</div>
                    <p class="font-body text-[14px] text-muted m-0">
                        of all crashes are caused by other people's behaviour, not yours (Transport Minister Barbara Creecy, January 2025)
                    </p>
                </div>
            </div>

            <h3 class="font-heading text-[24px] font-medium text-primary mb-6">Here is how the penalty compounds against you:</h3>
            <div class="space-y-6 mb-12">
                <p class="font-body text-[16px] text-muted leading-relaxed m-0">
                    <strong class="text-primary">The Premium Penalty.</strong> Insurers recover from uninsured at-fault drivers approximately 45% of the time. The other 55% is absorbed by the insurance pool, which means absorbed by you. You are not paying for your own risk only. You are subsidising the entire dishonest ecosystem.
                </p>
                <p class="font-body text-[16px] text-muted leading-relaxed m-0">
                    <strong class="text-primary">The Dispute Penalty.</strong> When it is your word against the other driver's with no independent evidence, your insurer cannot determine truth. Momentum Insure's Executive Head of Claims acknowledged this publicly: the 'he said, she said' of accident reporting is the industry's core evidence challenge.
                </p>
                <p class="font-body text-[16px] text-muted leading-relaxed m-0">
                    <strong class="text-primary">The Fraud Penalty.</strong> Staged accidents, inflated repair claims, and crash-for-cash syndicates are not rare. The ICB warned in its 2024 report that the industry faces R3.5 billion in potential fraud losses. Momentum Insure's claims executive stated on record that dashcam footage is the most effective deterrent against incidents 'intentionally manufactured or when a version of events has been falsified.'
                </p>
            </div>

            <div class="bg-primary text-white p-8 rounded-[3px] mb-16 orange-bg">
                <p class="font-body text-[20px] italic m-0 leading-relaxed">
                    You are not just paying for your own risk. You are subsidising every dishonest driver who shares the road with you, and the system has no way to tell you apart from them.
                </p>
            </div>

            <!-- False Confidence -->
            <h2 class="font-heading text-[32px] font-medium text-primary mb-8 tracking-tight">
                Why Most Honest Drivers Are Still Dangerously Exposed
            </h2>

            <h3 class="font-heading text-[20px] font-bold text-primary mb-4">False Confidence 1: “I have insurance.”</h3>
            <p class="font-body text-[16px] text-muted leading-relaxed mb-4">
                Insurance manages the financial consequences after your innocence is already lost. It is not a mechanism for establishing truth. When liability is disputed, and there is no independent evidence, your insurer's obligation is to settle, not to fight for your version of events.
            </p>
            <p class="font-body text-[16px] text-primary font-bold leading-relaxed mb-12">
                Your insurer is not your witness. They are your financial buffer. And when evidence is absent, that buffer shrinks by exactly 50%.
            </p>

            <h3 class="font-heading text-[20px] font-bold text-primary mb-4">False Confidence 2: “I have a dashcam.”</h3>
            <p class="font-body text-[16px] text-muted leading-relaxed mb-4">
                This is the insight the dashcam industry will never print on a spec sheet:
            </p>
            <p class="font-body text-[16px] text-primary font-bold leading-relaxed mb-4">
                The wrong dashcam for your specific situation is not protection. It is false confidence.
            </p>
            <p class="font-body text-[16px] text-muted leading-relaxed mb-4">
                A 140° wide-angle lens mounted in an Uber doing 14-hour night shifts in Johannesburg has different evidentiary requirements than a weekend driver in Pretoria who needs footage that holds up in an insurance dispute. Same product category. Completely different witness.
            </p>
            <p class="font-body text-[16px] text-muted leading-relaxed mb-12">
                Budget Insurance has confirmed on record that South African courts accept dashcam footage under the Electronic Communications and Transactions Act (ECTA) Section 15, provided it meets specific authenticity and chain-of-custody requirements. Not all dashcams produce footage that satisfies this threshold under cross-examination.
            </p>

            <div class="bg-background border border-border p-8 rounded-[3px] mb-16">
                <div class="font-heading text-[12px] font-bold uppercase tracking-widest text-accent mb-4">
                    MOMENTUM INSURE · EXECUTIVE HEAD OF CLAIMS · MARCH 2026
                </div>
                <p class="font-body text-[20px] text-primary italic mb-4">
                    “Dashcam footage does not automatically guarantee a successful claim.”
                </p>
                <p class="font-body text-[16px] text-muted m-0">
                    The camera matters. The right camera, matched to your risk profile and your insurer's requirements, is what makes you provable, not just honest.
                </p>
            </div>

            <!-- Compromised Advice -->
            <h2 class="font-heading text-[32px] font-medium text-primary mb-8 tracking-tight">
                Every Piece of Dashcam Advice You've Received Was Compromised
            </h2>
            <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
                Think about every source of information you have consulted about dashcams.
            </p>
            <ul class="space-y-4 m-0 p-0 list-none mb-8">
                <li class="flex items-start gap-3"><span class="text-red-400 shrink-0 mt-1" aria-hidden="true">&#10005;</span><span class="text-[16px] text-muted">The Takealot listing with 847 reviews, written by people who have never been in a serious insurance dispute and have no idea whether their footage would hold up under cross-examination.</span></li>
                <li class="flex items-start gap-3"><span class="text-red-400 shrink-0 mt-1" aria-hidden="true">&#10005;</span><span class="text-[16px] text-muted">The spec comparison site, built around affiliate links to the products with the highest commission rates, optimised for traffic, not accuracy.</span></li>
                <li class="flex items-start gap-3"><span class="text-red-400 shrink-0 mt-1" aria-hidden="true">&#10005;</span><span class="text-[16px] text-muted">The insurer who offers a cashback for 'approved devices', from a list of products they have a commercial relationship with.</span></li>
                <li class="flex items-start gap-3"><span class="text-red-400 shrink-0 mt-1" aria-hidden="true">&#10005;</span><span class="text-[16px] text-muted">The salesperson at the electronics store, who had a monthly target, a preferred brand, and no knowledge of your specific insurer's claim requirements.</span></li>
            </ul>
            <p class="font-body text-[16px] text-primary font-bold leading-relaxed mb-8">
                None of these sources had a financial incentive to give you the right answer. They had a financial incentive to give you an answer. Those are not the same thing.
            </p>

            <div class="bg-accent/10 p-8 rounded-[3px] border-l-4 border-accent mb-16">
                <p class="font-body text-[20px] text-primary italic m-0 leading-relaxed">
                    You were never given the information to make a genuinely evidence-based decision. That is not your failure. It is a structural gap in a market where everyone who advises you profits from your choice.
                </p>
            </div>

            <!-- The Solution -->
            <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
                Introducing The Witness Match Protocol™
            </h2>
            <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
                <strong class="text-primary">We are not a dashcam retailer.</strong> We do not sell cameras. We do not stock inventory. We are not a retailer.
            </p>
            <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
                We are an independent lead service. We collect your basic information, your vehicle, your location, your primary concern, your insurer, your budget, and we connect you with our vetted dashcam partner whose products are matched to your specific evidence requirement.
            </p>
            <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
                We earn a flat referral fee when we make a connection. <strong class="text-primary">The same fee, regardless of which product you are matched with.</strong> We have no financial reason to steer you toward the most expensive option.
            </p>
            <p class="font-body text-[16px] text-primary font-bold leading-relaxed mb-12">
                That structural independence is not a marketing position. It is the only reason this service can give you an honest answer.
            </p>

            <div class="border border-border p-8 rounded-[3px] bg-background mb-16">
                <h4 class="font-heading text-[16px] font-bold text-primary mb-6">WHAT INDEPENDENCE ACTUALLY MEANS</h4>
                <p class="font-body text-[15px] text-muted mb-4">Cartrack will never recommend BlackVue. Their business model requires a subscription.</p>
                <p class="font-body text-[15px] text-muted mb-4">BlackVue will never recommend Cartrack. They sell hardware.</p>
                <p class="font-body text-[15px] text-muted mb-4">Takealot's algorithm ranks by margin and volume, not your claims history.</p>
                <p class="font-body text-[15px] text-primary font-bold m-0">We chose one partner because we evaluated the market and found one that meets the evidence standard. That is a harder position to take than listing everyone. It is also a more honest one.</p>
            </div>

            <!-- The Process -->
            <h2 class="font-heading text-[32px] font-medium text-primary mb-10 tracking-tight">
                How The Witness Match Protocol™ Works
            </h2>

            <div class="space-y-12 mb-16">
                <div>
                    <h3 class="font-heading text-[20px] font-bold text-primary mb-4">Step 1: You complete a short form. Five questions. Under two minutes.</h3>
                    <p class="font-body text-[16px] text-muted leading-relaxed m-0">
                        Your vehicle type. Where you primarily drive. Your biggest road concern. Your current insurer. Your budget. No account creation. No credit card. No commitment.
                    </p>
                </div>

                <div>
                    <h3 class="font-heading text-[20px] font-bold text-primary mb-4">Step 2: You receive your Witness Quality Profile.</h3>
                    <p class="font-body text-[16px] text-muted leading-relaxed mb-4">
                        Based on your answers, we identify which class of dashcam meets your specific evidentiary standard and whether our vetted partner carries the right product for your profile.
                    </p>
                    <p class="font-body text-[16px] text-muted leading-relaxed mb-8">
                        You receive a plain-language summary of what the recommended category of dashcam can and cannot prove in a real insurance or legal dispute. Not a spec sheet. Not a star rating. A clear evidence summary.
                    </p>

                    <!-- Table -->
                    <div class="border border-border rounded-[3px] overflow-hidden mb-8 shadow-sm">
                        <div class="bg-background p-6 text-center border-b border-border">
                            <h4 class="font-heading text-[16px] font-bold text-primary mb-2">SAMPLE WITNESS QUALITY PROFILE™</h4>
                            <p class="font-body text-[14px] text-muted italic m-0">Profile: Mid-range dashcam · Urban Gauteng driver · Insured · Primary concern: accident disputes</p>
                        </div>
                        <div class="flex flex-col md:flex-row">
                            <div class="w-full md:w-1/2 border-b md:border-b-0 md:border-r border-border">
                                <div class="bg-accent/10 text-primary p-3 font-bold flex items-center gap-2 text-[14px]"><span class="text-accent" aria-hidden="true">&#10003;</span> WILL PROVE</div>
                                <div class="p-4 border-b border-border text-[14px] text-muted bg-white">Rear-end collision at speed</div>
                                <div class="p-4 border-b border-border text-[14px] text-muted bg-white">Red-light violation by other driver</div>
                                <div class="p-4 border-b border-border text-[14px] text-muted bg-white">Head-on and lane-change disputes</div>
                                <div class="p-4 text-[14px] text-muted bg-white">Erratic following / unsafe overtaking</div>
                            </div>
                            <div class="w-full md:w-1/2">
                                <div class="bg-red-50 text-primary p-3 font-bold flex items-center gap-2 text-[14px]"><span class="text-red-500" aria-hidden="true">&#10005;</span> WILL NOT PROVE</div>
                                <div class="p-4 border-b border-border text-[14px] text-muted bg-white">Side-impact outside 140° field of view</div>
                                <div class="p-4 border-b border-border text-[14px] text-muted bg-white">Parking incidents, engine off</div>
                                <div class="p-4 border-b border-border text-[14px] text-muted bg-white">Interior cabin events (no rear cam)</div>
                                <div class="p-4 text-[14px] text-muted bg-white">Night footage without IR capability</div>
                            </div>
                        </div>
                        <div class="bg-background p-4 text-center border-t border-border">
                            <p class="font-body text-[14px] text-muted italic m-0">This is what you receive, before you speak to a single provider.</p>
                        </div>
                    </div>

                    <p class="font-body text-[16px] text-muted leading-relaxed m-0">
                        That document is the information every dashcam retailer in South Africa is incentivised not to give you. We send it to every person who completes the form, because our integrity depends on the match being accurate, not on the sale being made.
                    </p>
                </div>

                <div>
                    <h3 class="font-heading text-[20px] font-bold text-primary mb-4">Step 3: We connect you directly to your matched provider.</h3>
                    <p class="font-body text-[16px] text-muted leading-relaxed mb-4">
                        You receive the contact details of our vetted dashcam partner, along with your completed profile summary. They know your situation before the first conversation begins.
                    </p>
                    <p class="font-body text-[16px] text-muted leading-relaxed m-0">
                        From there, the transaction is between you and the provider directly. We do not handle payments. We do not manage installations. We connect clearly and accurately, without a commission-based incentive to mislead you.
                    </p>
                </div>
            </div>

            <!-- Structural Advantage -->
            <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
                Why No Existing Provider Can Offer This
            </h2>
            <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
                Provider-agnosticism is not a feature you can add to a product business. It is the structural prerequisite for honest advice. And it is the one thing no incumbent in this market can replicate without dismantling their core revenue model.
            </p>
            <p class="font-body text-[16px] text-muted leading-relaxed mb-6">
                Cartrack will never tell you a once-off purchase might serve you better than a R189/month subscription. BlackVue will never tell you that Cartrack's capabilities might be the priority for your risk profile. No retailer will tell you the R2,299 camera meets your evidence standard just as well as the R17,574 Elite model.
            </p>
            <p class="font-body text-[16px] text-primary font-bold leading-relaxed mb-16">
                We will. Because we have no product to defend and no subscription to protect.
            </p>

            <!-- Evidence Foundation -->
            <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
                Every Claim in This Letter Has a Named, Published Source
            </h2>
            <p class="font-body text-[16px] text-muted leading-relaxed mb-8">
                We built this service on independently verifiable facts. Every statistic on this page has a named source. Check any of them.
            </p>

            <div class="border border-border p-8 mb-16 bg-background rounded-[3px]">
                <h4 class="font-heading text-[16px] font-bold text-primary mb-6">THE SOURCE STACK</h4>
                <ul class="space-y-4 m-0 p-0 list-none">
                    <li class="text-[14px] text-muted">SAPS Crime Statistics 2023/24 — 22,735 carjackings nationally</li>
                    <li class="text-[14px] text-muted">SAIA · AA · Hippo.co.za, 65–70% of SA vehicles uninsured</li>
                    <li class="text-[14px] text-muted">Insurance Crime Bureau 2024 Annual Report, R3.5B estimated fraud exposure</li>
                    <li class="text-[14px] text-muted">RTMC / PMC Peer-Reviewed Research 2025, 21% of RTA fatalities are hit-and-runs</li>
                    <li class="text-[14px] text-muted">Transport Minister Barbara Creecy, January 2025, 87% of crashes caused by human behaviour</li>
                    <li class="text-[14px] text-muted">Momentum Insure Executive Head of Claims, March 2026, on-record dashcam evidence statements</li>
                    <li class="text-[14px] text-muted">Budget Insurance, on-record confirmation of dashcam footage admissibility</li>
                    <li class="text-[14px] text-muted">Electronic Communications and Transactions Act (ECTA), Section 15, legal admissibility framework</li>
                </ul>
            </div>

            <!-- What you walk away with -->
            <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight">
                The Answer to the Question Every Honest Driver Is Actually Asking
            </h2>
            <p class="font-body text-[20px] text-primary italic font-bold mb-10">
                “If I get hit tomorrow, will this camera actually save me?”
            </p>
            <ul class="space-y-4 m-0 p-0 list-none mb-16">
                <li class="flex items-start gap-3"><span class="text-accent shrink-0 mt-1" aria-hidden="true">&#10003;</span><span class="text-[16px] text-muted"><strong class="text-primary">Clarity on what your current dashcam can and cannot prove</strong>, before you're sitting across from an adjuster with footage that doesn't hold up</span></li>
                <li class="flex items-start gap-3"><span class="text-accent shrink-0 mt-1" aria-hidden="true">&#10003;</span><span class="text-[16px] text-muted"><strong class="text-primary">A match to the right evidence standard for your specific insurer</strong>, because different insurers assess dashcam footage differently, and most drivers don't learn this until a disputed claim</span></li>
                <li class="flex items-start gap-3"><span class="text-accent shrink-0 mt-1" aria-hidden="true">&#10003;</span><span class="text-[16px] text-muted"><strong class="text-primary">Direct access to our vetted dashcam partner</strong>, not a sponsored listing, not an algorithm ranked by commission rate, not a salesperson with a monthly target</span></li>
                <li class="flex items-start gap-3"><span class="text-accent shrink-0 mt-1" aria-hidden="true">&#10003;</span><span class="text-[16px] text-muted"><strong class="text-primary">A price you won't pay a premium for:</strong> you will not pay more through us than you would going directly to the provider. Published commitment. Not a marketing claim.</span></li>
                <li class="flex items-start gap-3"><span class="text-accent shrink-0 mt-1" aria-hidden="true">&#10003;</span><span class="text-[16px] text-muted"><strong class="text-primary">The whole process in under two minutes</strong>, five questions, one honest answer, one clear next step</span></li>
            </ul>

            <!-- FAQ -->
            <h2 class="font-heading text-[32px] font-medium text-primary mb-10 tracking-tight">
                What Sophisticated Drivers Ask Before They Complete the Form
            </h2>

            <div class="space-y-8 mb-16">
                <div class="pb-8 border-b border-border">
                    <h3 class="font-heading text-[20px] font-bold text-primary mb-3">“How do I know you're not recommending whoever pays you the most?”</h3>
                    <p class="font-body text-[16px] text-muted m-0">Our referral fee is flat and paid by our partner, not by you. We have no financial reason to inflate your needs or push you toward a product that exceeds your actual evidence requirement. The Witness Quality Profile we send you is specific enough to raise with any third party and verify independently. If you find a factual error in it, we want to know.</p>
                </div>
                <div class="pb-8 border-b border-border">
                    <h3 class="font-heading text-[20px] font-bold text-primary mb-3">“Will I pay more buying through your referral than going direct?”</h3>
                    <p class="font-body text-[16px] text-muted m-0">No. Our commitment, stated here, not in fine print, is that the price you pay through a referred provider will not exceed the price you would pay going directly to that same provider. The referral fee is paid by the provider from their marketing budget. It does not add to your cost.</p>
                </div>
                <div class="pb-8 border-b border-border">
                    <h3 class="font-heading text-[20px] font-bold text-primary mb-3">“I already have a dashcam. Is this still useful?”</h3>
                    <p class="font-body text-[16px] text-muted m-0">Yes, and it may be the most useful two minutes you spend. Complete the form, and we will assess whether your current camera meets the evidence standard for your specific risk profile and insurer. If it does, you leave with certainty. If it does not, you leave with a clear gap and a specific path to close it.</p>
                </div>
                <div class="pb-8 border-b border-border">
                    <h3 class="font-heading text-[20px] font-bold text-primary mb-3">“Will my insurer accept dashcam footage?”</h3>
                    <p class="font-body text-[16px] text-muted m-0">Under ECTA Section 15, authenticated dashcam footage is legally admissible in South African courts. Budget Insurance and Momentum Insure have both confirmed this publicly. What matters is whether your specific dashcam produces footage that meets the authentication threshold. If you want to verify your own insurer's position, call their claims line directly and ask specifically about dashcam requirements for disputed liability cases.</p>
                </div>
                <div>
                    <h3 class="font-heading text-[20px] font-bold text-primary mb-3">“Who is behind this service?”</h3>
                    <p class="font-body text-[16px] text-muted m-0">Search A Deal, an independent digital platform that builds lead services in markets where consumers are systematically underserved by commercially conflicted advice. We do not manufacture dashcams. We are not affiliated with any insurer. We are paid by our vetted partner to refer qualified leads, which means our incentive is always to send them the right person, not the most people.</p>
                </div>
            </div>

            <!-- Our Commitment -->
            <div class="border-2 border-primary p-8 mb-16 rounded-[3px]">
                <h3 class="font-heading text-[20px] font-bold text-primary mb-4 text-center">OUR COMMITMENT TO YOU, STATED PLAINLY</h3>
                <p class="font-body text-[16px] text-muted mb-4">We are an independent lead service. We earn a flat referral fee when we connect you to our vetted partner, paid by the partner, not by you.</p>
                <p class="font-body text-[16px] text-muted mb-4">That means we have no financial reason to steer you toward the most expensive option. Our only incentive is an accurate match, because an inaccurate match costs us your trust and your referral to the next honest driver.</p>
                <p class="font-body text-[16px] text-primary font-bold m-0">You will not pay more through us than you would going directly to the provider. That is our published commitment, not fine print.</p>
            </div>

            <!-- Final CTA -->
            <h2 class="font-heading text-[32px] font-medium text-primary mb-6 tracking-tight text-center">
                You Already Know Whether You Have the Right Camera
            </h2>
            <p class="font-body text-[16px] text-muted leading-relaxed mb-4 text-center">
                If you read this far, one of two things is true.
            </p>
            <p class="font-body text-[16px] text-muted leading-relaxed mb-4 text-center">
                Either you have a dashcam and you are not entirely certain it would protect you in a serious dispute. Or you don't have one, and this letter has made the stakes of that gap feel real in a way a spec sheet never did.
            </p>
            <p class="font-body text-[16px] text-muted leading-relaxed mb-4 text-center">
                Both of those positions have the same honest next step.
            </p>
            <p class="font-body text-[16px] text-muted leading-relaxed mb-4 text-center">
                The form takes under two minutes. Five questions. No account. No payment. No obligation beyond filling it in. What you receive is a plain-language assessment of what your evidence standard should be, and whether our vetted partner can meet it.
            </p>
            <p class="font-body text-[16px] text-muted leading-relaxed mb-8 text-center">
                That information is free. Our partner pays for the referral. You pay nothing to find out where you stand.
            </p>
            <p class="font-body text-[18px] text-primary leading-relaxed mb-10 text-center">
                <strong>You drive safely. You pay your premiums.</strong> The only question left is whether the system can tell, when it matters most, under pressure, against someone who is lying.
            </p>

            <div class="bg-white border-2 border-primary p-12 rounded-[3px] mb-16 text-center shadow-2xl">
                <h3 class="font-heading text-[24px] font-medium text-primary mb-4">Find My Witness Now</h3>
                <p class="font-body text-[14px] text-muted mb-8">No sign-up · No credit card · No obligation · Under 2 minutes</p>
                <form action="{{ route('karu.submit') }}" method="post">
                    @csrf
                    <div class="space-y-6 max-w-md mx-auto text-left">
                    <div class="space-y-2">
                        <label class="font-heading text-[14px] font-bold text-primary">1. What do you drive?</label>
                        <select name="meta[vehicle_type]" class="w-full p-4 border border-border rounded-[3px] font-body text-[14px] bg-white focus:outline-none focus:border-accent">
                            <option value="">Select vehicle type...</option>
                            <option value="sedan">Sedan</option>
                            <option value="suv">SUV or 4×4</option>
                            <option value="bakkie">Bakkie</option>
                            <option value="hatchback">Hatchback</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="space-y-2">
                        <label class="font-heading text-[14px] font-bold text-primary">2. Where do you primarily drive?</label>
                        <select name="meta[driving_context]" class="w-full p-4 border border-border rounded-[3px] font-body text-[14px] bg-white focus:outline-none focus:border-accent">
                            <option value="">Select driving context...</option>
                            <option value="urban">Urban commute (city / suburb)</option>
                            <option value="highway">Highway</option>
                            <option value="mixed">Mixed</option>
                            <option value="rural">Rural or farm roads</option>
                        </select>
                    </div>

                    <div class="space-y-2">
                        <label class="font-heading text-[14px] font-bold text-primary">3. What is your biggest road concern?</label>
                        <select name="meta[road_concern]" class="w-full p-4 border border-border rounded-[3px] font-body text-[14px] bg-white focus:outline-none focus:border-accent">
                            <option value="">Select primary concern...</option>
                            <option value="accident">Accident disputes</option>
                            <option value="fraud">Fraud or staged accidents</option>
                            <option value="hit-and-run">Hit-and-run</option>
                            <option value="theft">Theft or break-in</option>
                            <option value="safety">General safety record</option>
                        </select>
                    </div>

                    <div class="space-y-2">
                        <label class="font-heading text-[14px] font-bold text-primary">4. Who is your current car insurer?</label>
                        <select name="meta[insurer]" class="w-full p-4 border border-border rounded-[3px] font-body text-[14px] bg-white focus:outline-none focus:border-accent">
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
                        <label class="font-heading text-[14px] font-bold text-primary">5. What is your dashcam budget?</label>
                        <select name="meta[budget]" class="w-full p-4 border border-border rounded-[3px] font-body text-[14px] bg-white focus:outline-none focus:border-accent">
                            <option value="">Select budget...</option>
                            <option value="under-1500">Under R1,500</option>
                            <option value="1500-3000">R1,500–R3,000</option>
                            <option value="3000-6000">R3,000–R6,000</option>
                            <option value="6000-plus">R6,000+</option>
                            <option value="not-sure">Not sure yet</option>
                        </select>
                    </div>

                    <div class="pt-6 space-y-4 border-t border-border mt-2">
                        <p class="font-body text-[14px] text-primary font-bold mb-2">Where should we send your Witness Quality Profile?</p>
                        <input type="text" name="name" placeholder="Full Name" class="w-full p-4 border border-border rounded-[3px] font-body text-[14px] focus:outline-none focus:border-accent" />
                        <input type="email" name="email" placeholder="Email Address" class="w-full p-4 border border-border rounded-[3px] font-body text-[14px] focus:outline-none focus:border-accent" />
                        <input type="tel" name="phone" placeholder="Phone Number" class="w-full p-4 border border-border rounded-[3px] font-body text-[14px] focus:outline-none focus:border-accent" />
                    </div>

                    {{--<button class="w-full py-4 md:py-5 mt-3 bg-primary font-heading font-bold rounded-full hover:bg-accent transition-colors black-button text-white" type="submit">--}}
                    {{--    <div class="flex items-center gap-2 text-[18px] uppercase">FIND MY WITNESS NOW <span aria-hidden="true">&rarr;</span></div>--}}
                    {{--    <span class="text-[12px] font-normal opacity-80 font-body">Get Your Free Witness Quality Profile</span>--}}
                    {{--</button>--}}
                        <div>
                            <button class="w-full py-4 md:py-5 mt-3 bg-primary font-heading font-bold rounded-full hover:bg-accent transition-colors black-button text-white" type="submit">
                                FIND MY WITNESS NOW <span aria-hidden="true">&rarr;</span>
                            </button>
                            <p class="text-[12px] font-normal opacity-80 font-body mt-2 text-center">Get Your Free Witness Quality Profile</p>
                        </div>
                </div>
                </form>
                <p class="mt-6 font-body text-[11px] text-muted uppercase tracking-widest">
                    Search A Deal • POPIA-Compliant • Built in South Africa
                </p>
            </div>

        </div>
    </section>
</div>

@include('partials.tailwind_footer')
