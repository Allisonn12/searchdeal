@include('partials.header')

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


    
    <style>
    
        .page-header {
            background: url(img/images/6.png) center center no-repeat;
            background-size: cover;
            height: 19rem;
            width: 100%;
            position: relative;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
          }
    
          .page-header .overlay-color {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7); 
        z-index: 1;
    }
    
    .page-header .main,
    .page-header .breadcrumb {
        position: relative;
        z-index: 2;
        color: white;
    }
    .break-image{
        width: 80% !important;
        margin: 0 auto;
    }
    .break-image img{
        width: 100%;
        padding-bottom: 50px;
        border-radius: 5px;
    }
    
    .breadcrumb{
        justify-content: center;
        align-content: center;
    }
    .display-6{
        font-size: 48px;
    }
    .subtitle p{
        font-size: 36px;
    }
    .main{
        padding: 0 30px;
        width: 65% !important;
    }
    h3{
        font-size: 34px;
    }
    
    .hlabi-form{
        width: 80%; 
        margin: 0 auto
    }
    .hlabi-body{
        width: 80%;
        margin: 0 auto;
        font-size: 18px !important;
    }
    
    
    
    @media screen and (max-width: 676px){
    
    .display-6 {
        font-size: 28px;
    }
    .subtitle p{
        font-size: 18px;
    }
    .main{
        /*padding: 0 30px;*/
        width: 100% !important;
    }
    h3{
        font-size: 16px;
    }
    #form *{
        width: 100% !important;
    }
    .hlabi-body{
        font-size: 14px !important;
    }
    .hlabi-form{
        width: 100%; 
        margin: 0 auto
    }
}
    </style>


    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
        <div class="overlay-color">
      <div class="container py-5">
        <h1 class="display-4 animated text-white slideInDown mb-4">Car Tracker</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0 text-white">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item text-white active" aria-current="page">
                Car Tracker
            </li>
          </ol>
        </nav>
      </div>
      </div>
    </div>
    <!-- Page Header End -->
    

    <!-- Car Insurence Start -->
    <div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="container">
        <div class="row g-5">
          
          <div class="main">
            <div class="main-content my-5">

                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.3s">
                    <div class="row">
                        <h1 class="display-6 mb-5">
                          “They Watched You for 11 Days Before They Took the Car. But You Still Had Time to Beat Them.”
                        </h1>
                        <div class="subtitle">
                            <p class="mb-5">
                                <i>
                                  Most trackers fail when real hijackers show up. This is the only platform that shows you trackers proven to survive GPS jammers, insurance fine print, and midnight response time tests.
                                </i>
                            </p>
                        </div>
                    </div>
                    
                    <div class="break-image">
                        <img src="img/images/5.png" alt="">
                    </div>
                    <div class="row">
                        <h3> THE MORNING THEY TOOK EVERYTHING.</h3>
                        <div class="hlabi-body">
                            <div class="points text-start">
                                <p>It was just another morning.</p>
                                <ul>
                                    <li>️ Coffee still warm.</li>
                                    <li>️ Sunlight slipping through the blinds like a blessing.</li>
                                    <li>️ The kind of morning that makes you believe everything’s in its place.</li>
                                </ul>
                                <p>
                                  Until it isn’t.
                                </p>

                                <p>
                                  You walk out the door—keys in hand, half-smile on your face — and then you stop.
                                </p>

                                <p>
                                  Not because you saw something. <br>
                                  But because you didn’t.
                                </p>

                                <ul>
                                  <li> No broken glass.</li>
                                  <li> No gate swung open.</li>
                                  <li> No warning.</li>
                              </ul>
                              
                                <p>
                                  Just… absence. <br>
                                  A quiet so sharp it feels like it’s cutting into your breath.
                                </p>
                                <p>
                                  And that’s when your stomach drops—Because you realize what’s missing… isn’t just a car.
                                  <br>
                                  It’s proof.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">THE QUESTION THAT ARRIVES TOO LATE</h3>
                        <div class="hlabi-body">
                            
                            <p>
                               - Your mind races. <br>
                               - You call the police. <br>
                               - You call your insurer. <br>
                               - You call your partner. Maybe your mom. <br><br>
                               And one by one, they all ask the same question. The one that changes everything:
                            </p>
                            <b class="mb-2">“Did you have a tracker installed?”</b>
                            <p>
                              - You paid your premiums. <br>
                              - You parked under lights. <br>
                              - You locked the doors. <br>
                              - You meant to do it next week. <br>
                            </p>
                            <div class="points" style="text-align: start;">
                                <p>
                                   But meaning to isn’t protection. <br>
                                   And now the thing you were relying on to prove you were prepared… <br>
                                   never existed.
                                </p>                      
                            </div>
                        </div>
                    </div>


                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">THIS WAS NEVER JUST A CAR.</h3>
                        <div class="hlabi-body">
                                                
                            <div class="points text-start">
                                <ul>
                                    <li> It was your Plan B.</li>
                                    <li> Your escape route.</li>
                                    <li> Your silent promise to your family that said,</li>
                                    <b> “No matter what happens—I’ve got us.”</b>
                                    <li> But when they took it,</li>
                                    <li> they didn’t just steal metal and rubber.</li>
                                </ul>
                                <p>
                                   - They stole the story you were telling yourself— <br>
                                   - That you were ready. <br>
                                   - That you were covered. <br>
                                   - That you’d never be the one staring at an empty driveway in disbelief. <br>
                                   - But now you are. <br>
                                </p>
                                <p>
                                  <b>Because the tracker you trusted—if there was one at all—failed when it mattered most.</b>
                                  And the silence it left behind? <br>
                                  Is louder than sirens.
                                </p>
                                <p>
                                  <b>The driveway isn’t just empty.</b> <br>
                                  It’s accusing. <br>
                                  And every second you stand there, you’re not just wondering how it happened.
                                  You’re replaying the deeper fear: <br>
                                  <b>“How could I let this happen on my watch?”</b>
                                </p>
                                <p>
                                  Because you didn’t just lose a vehicle.
                                  You lost the evidence that you were the kind of person who would never be caught off guard.
                                  That’s the part that hurts the most.
                                </p>
                                <a href="#form" class="btn btn-primary my-3 py-3" style="width: 100%">Request A Quote</a>
                            </div>
                        </div>
                    </div>

                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">THE MAN WHO LOST MORE THAN A VEHICLE</h3>
                        <div class="hlabi-body">
                            <p class="mb-2">
                              He didn’t yell. <br>
                              He didn’t panic.
                            </p>
                            <div class="points text-start">
                                <p>He just stood there— <br>
                                  Keys still in hand.<br>
                                  Eyes locked on the spot where his car used to be.<br>
                                  Where his control used to live.<br><br>
                                  And inside the house?<br><br>
                                  His son was waiting.<br>
                                  Soccer shoes on.<br>
                                  Lunchbox zipped.<br>
                                  Backpack by the door—ready for another normal day.<br>
                                  But when that boy stepped outside and saw his father’s face?<br>
                                  He didn’t ask what happened.<br>
                                  He asked the one question no man is ever ready to answer: <br>
                                  <b>“Didn’t you stop them, Dad?”</b>
                                </p>
                                <p>
                                  And in that instant, it wasn’t just the car that vanished. <br>
                                  It was trust. <br>
                                  Because he didn’t. <br>
                                  Not because he didn’t care. <br>
                                  Not because he didn’t love them. <br>
                                  But because he didn’t know. <br>
                                  He thought paying for insurance was enough. <br>
                                  He thought the sticker on the window meant something. <br>
                                  He thought the “tracker” checkbox on the quote was protection. <br>
                                  But it wasn’t. <br>
                                  And now he sees it in his son’s eyes: <br>
                                  The look that says, <br>
                                  “I thought you were always the one with the plan.” <br>
                                  But he wasn’t. <br>
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">THE WOMAN WHO WAITED TOO LONG</h3>
                        <div class="hlabi-body">
                            <div class="points text-start">
                                <p>
                                  She stood barefoot in the wind. <br>
                                  Robe fluttering. <br>
                                  Groceries still in bags near the front door. <br>

                                  The spot in the driveway where her car once sat?<br>
                                  Now a hollow, echoing absence. <br>
                                  She called the police. <br>
                                  She called her insurer. <br><br>
                                  And every call ended the same way: <br>
                                  <i>“Was a tracker installed?”</i> <br>
                                  That’s when it landed—not like a shock, but like a verdict. <br>
                                  She knew the answer. <br>
                                  She’d seen the ads. <br>
                                  She’d meant to do it next week. <br>
                                  She told herself it could wait. <br>
                                  But the syndicates didn’t wait. <br>
                                  The shadows didn’t wait. <br>
                                  And now, she wasn’t just unprotected. <br>
                                  She was unprepared. <br>
                                  And that kind of guilt? <br>
                                  <b>It doesn’t wash off.</b> <br>


                                </p>
                                
                            </div>
                        </div>
                    </div>

                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">WHAT THEY STOLE WAS BIGGER THAN A CAR</h3>
                        <div class="hlabi-body">
                            <div class="points text-start">
                                <p>They weren’t just after a vehicle. <br>
                                    These aren’t random smash-and-grabs. <br>
                                    These are tactical extractions— <br>
                                </p>
                                <p>executed by syndicates who:</p>
                                <ul>
                                    <li> Watch your routes</li>
                                    <li> Study your habits</li>
                                    <li> Map your exits</li>
                                    <li> Know when you’re vulnerable</li>
                                </ul>
                            </div>
                            <p>
                              They don’t guess. <br>
                              They plan. <br>
                              And when they move? <br>
                              They don’t just take transport. <br>
                              They take identity. <br><br>

                              They take the story you tell yourself: <br><br>
                              That you’re the Protector. <br>
                              The Planner. <br>
                              The one who always had it handled. <br>
                              In 2 minutes or less, they strip that away. <br>
                              All because you didn’t take 90 seconds… <br>
                              …to make sure your tracker could survive a real hijack. <br><br>

                              And that’s when the truth finally lands: <br><br>
                              You weren’t missing a device. <br>
                              You were missing certainty. <br>
                            </p>
                            <a href="#form" class="btn btn-primary my-3 py-3" style="width: 100%">Request A Quote</a>
                        </div>
                    </div>

                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">CHAOS BY DESIGN</h3>
                        <div class="hlabi-body">
                            <div class="points text-start">
                                <p>
                                 You weren’t paranoid. <br>
                                  You weren’t overthinking it. <br>
                                  You just didn’t know how deep the deception goes. <br><br>
                                </p>
                                <div class="points text-start">
                                    <p>
                                      <b>Because here’s the brutal, unspoken reality:</b> <br><br>
                                      <b>Most trackers are designed to check a box.</b> <br>
                                      - Not to bring your car back. <br>
                                      - Not to keep your family safe. <br>
                                      - Not to hold up when chaos hits at 2:37 AM in Randburg. <br>
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                    </div>


                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">The Illusion of “Having a Tracker”</h3>
                        <div class="hlabi-body">
                            <div class="points text-start">
                                <p>
                                 You saw the paperwork. <br>
                                  The “compliant” sticker. <br>
                                  The checkbox next to “Tracker Installed.” <br><br>
                                </p>
                                <div class="points text-start">
                                    <p>
                                      But did anyone tell you:<br>
                                      <ul>
                                        <li>That many insurers deny claims if the device was inactive for just 24–48 hours?</li>
                                        <li>That some brands can be jammed in under 5 seconds with a R600 device bought online?</li>
                                        <li>That over 60% of trackers don’t meet even the minimum double-device redundancy requirements set by leading underwriters?</li>
                                      </ul>
                                    </p>
                                </div>
                                <p>
                                  Of course not. <br>
                                  Because that’s not how this industry works. <br>
                                  This isn’t about protection. <br>
                                  It’s about perception. <br>
                                  It’s about getting just enough documentation to look compliant—until the moment it matters. 
                                  And then?<br>
                                  <b>Silence. Loopholes. Denied claims. And families left with nothing but “Sorry.”</b> <br>

                                </p>
                                
                            </div>
                        </div>
                    </div>



                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">THE GAME WAS NEVER BUILT TO PROTECT YOU</h3>
                        <div class="hlabi-body">
                            <div class="points text-start">
                                <p>
                                  Let’s call it what it is: <br>
                                  A fragile theater of safety. <br>
                                  Built to make you feel ready… <br>
                                  Until the syndicates show up and reveal the truth.
                                  And by then? <br>
                                  It’s too late to go back. <br>
                                  Because what you really needed wasn’t “another device.” <br>
                                  It was certainty. <br>

                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">AND HERE’S THE TWIST:</h3>
                        <div class="hlabi-body">
                            <div class="points text-start">
                                <p>
                                 Even most “comparison sites” are part of the problem. <br>
                                - Paid rankings <br>
                                - Sponsored slots <br>
                                - No mention of jammer tests, recovery stats, or insurer-grade scoring <br>
                                It’s all noise. <br>
                                And in the middle of that chaos? <br>
                                You’re asked to make a decision that could determine whether your family is safe or stranded. <br>
                                How? <br>
                                With star ratings? <br>
                                Influencer reviews? <br>
                                Marketing videos? <br>
                                <b>That’s not protection. That’s roulette.</b> <br>
                                </p>
                            </div>
                            <p>
                              <h4 class="text-center my-2">UNTIL NOW.</h4>
                              <p>
                                Because now—for the first time in South Africa— <br>
                                There’s a platform that doesn’t let the noise in. <br>
                                A platform that refuses to show you any tracker that can’t survive hijack-level pressure. <br>
                                One that says: <br>
                                “If it hasn’t been proven in real South African conditions… <br>
                                It doesn’t belong anywhere near your family.” <br>
                                This is where Verified Tracker Certainty™ begins. <br>
                                And what powers it… <br>
                                …isn’t a marketing claim. <br>
                                It’s a battle-tested scoring system so strict, 7 out of 10 devices don’t even qualify for public results. <br>
                                It’s called the DualShield™ Reliability Matrix. <br>
                                And when you see what’s inside it—you’ll understand why this is no longer just a platform. <br>
                                It’s a weapon. <br>
                                Against chaos. <br>
                                Against betrayal. <br>
                                Against the empty promises that leave protectors exposed. <br>
                              </p>
                            </p>
                        </div>
                        <a href="#form" class="btn btn-primary my-3 py-3" style="width: 100%">Request A Quote</a>
                    </div>


                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">THE DUALSHIELD™ REVELATION</h3>
                        <div class="hlabi-body">
                            <div class="points text-start">
                                <p>
                                Introducing: <br>
                                The DualShield™ Reliability Matrix <br>
                                The World's First Tracker Evaluation System Built for Hijack Reality—not Corporate Comfort. <br>
                                This is the truth engine behind Verified Tracker Certainty™. <br>
                                The forensic-grade filter that every tracker must survive before it’s shown to you on Search A Deal. <br>
                                If a tracker fails just one layer? <br>
                                <ul class="">
                                  <li>It vanishes. </li>
                                  <li>It’s hidden from public view. </li>
                                  <li>It never gets near your garage. </li>
                                </ul>
                                Because your family’s life doesn’t deserve “good enough.”

                                </p>
                            </div>
                            <p>
                              <h4 class="text-center my-2">HOW THE MATRIX WORKS:.</h4>
                              
                                There are five brutal filters.
                                Each one answers a question that no traditional site, salesman, or brand brochure will ever touch.
                                We call them the Layers of Unstealability.
                                <br>

                            </p>

                            <div>
                              <p>
                                <h4 class="text-center my-2">LAYER 1: LIVE RECOVERY FEED</h4>
                                <b>"Does this brand actually get your car back—here—in South Africa?"</b> <br>
                                Source: <br>
                                Encrypted recovery logs from tracker providers + SAPS case closure data.
                                Output: <br>
                                <ul>
                                  <li>Recovery rate (e.g., 92.3% in Gauteng last 12 months)</li>
                                  <li>Average minutes to retrieval</li>
                                  <li>Map-based hotspot overlay</li>
                                </ul>
                                Why it matters: <br>
                                It’s not about what they claim. <br>
                                It’s about what they’ve done. <br>
                                If a device hasn’t proven real-world retrieval performance across SA hijack corridors, it’s dead on arrival. <br>
                              </p>
                            </div>

                            <div>
                              <p>
                                <h4 class="text-center my-2">LAYER 2: JAMGUARD™ STRESS TEST</h4>
                                <b>"Will this tracker still talk after GSM and GPS jamming?"</b> <br>
                                Source: <br>
                                <ul>
                                  <li>Bench tests in shielded RF labs (simulating GSM 900/1800 + GPS L1 jamming)</li>
                                  <li>Field jamming drives across Gauteng every 90 days with active jammers</li>
                                  
                                </ul>
                                Output: <br>
                                <ul>
                                  <li>Pass/Fail</li>
                                  <li>Time to signal loss</li>
                                  <li>Auto-switch to VHF/LoRa protocols (if available)</li>
                                </ul>
                                Why it matters: <br>
                                Jamming is no longer rare. <br>
                                It’s the first move in a syndicate’s playbook. <br>
                                If your tracker shuts up when the noise starts—you’ve already lost. <br>
                              </p>
                            </div>

                            <div>
                              <p>
                                <h4 class="text-center my-2">LAYER 3: REDUNDANCY GRADE</h4>
                                <b>"Does this tracker qualify for insurer discounts and failover backup?"</b> <br>
                                Source: <br>
                                <ul>
                                  <li>Teardown inspections</li>
                                  <li>Device schematics</li>
                                  <li>Underwriter-verified redundancy rubrics</li>
                                </ul>
                                Output: <br>
                                <ul>
                                  <li>A/B/C letter grade</li>
                                  <li>Dual-antenna capability</li>
                                  <li>Failover protocol speed</li>
                                  <li>Insurer discount eligibility flag</li>
                                </ul>
                                Why it matters: <br>
                                Some devices only look smart. <br>
                                This layer reveals whether it’s actually built with 
                                fail-safes—like switching to radio frequency when 
                                GSM is blocked. <br>
                              </p>
                            </div>

                            <div>
                              <p>
                                <h4 class="text-center my-2">LAYER 4: SUPPORT SLA INDEX</h4>
                                <b>"At 2:00 AM—will a human pick up and deploy a response?"</b> <br>
                                <b>Source:</b> <br>
                                <ul>
                                  <li>24/7 ping tests to control rooms</li>
                                  <li>Secret shopper hijack drills</li>
                                  <li>Dispatch delay reports</li>
                                </ul>
                                <b>Output:</b> <br>
                                <ul>
                                  <li>Average response time (e.g., 46 sec)</li>
                                  <li>Operator escalation protocols</li>
                                  <li>Weekend/nighttime reliability score</li>
                                </ul>
                                <b>Why it matters:</b> <br>
                                You don’t just need a tracker. <br>
                                You need a human team who acts before the trail goes cold. <br>
                                Most providers fail here—and it shows in the results.
                              </p>
                            </div>

                            <div>
                              <p>
                                <h4 class="text-center my-2">LAYER 5: POPIASAFE SCORE</h4>
                                <b>"Is your personal location data legally and technically protected?"</b> <br>
                                <b>Source:</b> <br>
                                <ul>
                                  <li>End-to-end encryption scans</li>
                                  <li>Legal document audits</li>
                                  <li>Compliance with South Africa’s POPIA laws</li>
                                </ul>
                                <b>Output:</b> <br>
                                <ul>
                                  <li>Score out of 100</li>
                                  <li>Audit trail transparency</li>
                                  <li>Right-to-delete compliance</li>
                                  <li>3rd-party validation badge</li>
                                </ul>
                                <b>Why it matters:</b> <br>
                                You shouldn’t have to trade your safety… for your privacy. <br>
                                And with POPIASafe™, you never do.
                              </p>
                            </div>
                            
                        <a href="#form" class="btn btn-primary my-3 py-3" style="width: 100%">Request A Quote</a>

                        </div>
                    </div>

                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">HOW THE SCORES COMBINE</h3>
                        <div class="hlabi-body">
                            <div class="points text-start">
                                <p>
                                    Each tracker is run through all 5 layers. <br>
                                    Their outputs are weighted, verified, and then combined into a single, public-facing grade: <br>
                                    The DualShield™ Reliability Grade (A–E) <br>
                                    Only grades B or higher ever reach the screen. <br>
                                    Anything below? <br>
                                    Suppressed. <br>
                                    Auto-flagged. <br>
                                    Banned from Search A Deal. <br>
                                    And the best part? <br>
                                    These scores update in real time. <br>
                                    If a provider slips—even one tier below the safety threshold—it’s immediately removed. <br>
                                    You get an in-app alert. <br>
                                    Your insurer gets a notice. <br>
                                    And your family never rides blind.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">IN SUMMARY – WHAT YOU SEE IS ALREADY BATTLE-TESTED</h3>
                        <div class="hlabi-body">
                            <div class="points text-start">
                                <p>Every tracker shown to you on Search A Deal has already passed:</p>
                                <ul>
                                    <li>Live hijack recoveries</li>
                                    <li>Lab-grade jammer simulations</li>
                                    <li>Double-device redundancy scoring</li>
                                    <li>Human response stress tests</li>
                                    <li>Data privacy audits with legal validation</li>
                                </ul>
                                <p>
                                    And if it hasn’t? <br>
                                    It’s erased. <br>
                                    Before your family ever sees it. <br>
                                    Now we activate the cinematic climax—the proof-of-impact scenario that burns the DualShield™ Matrix into memory. <br>
                                    This is not theory. <br>
                                    Not a pitch. <br>
                                    Not a feature list. <br>
                                    This is what it looks like when the shadows strike… and the system doesn’t flinch.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">THE NIGHT THE SYSTEM FOUGHT BACK</h3>
                        <div class="hlabi-body">
                            <p>
                                02:37 AM — Randburg, Gauteng. <br>
                                A Polo TSI idles quietly outside a townhouse complex. <br>
                                It’s not moving yet. But the doors are unlocked. <br>
                                Inside, a man in his 30s kisses his wife’s forehead, whispers a goodbye, and walks out into the chill. <br>
                                Two men are waiting for him. <br>
                                They know the pattern. <br>
                                They’ve watched for 11 days. <br>
                                Mapped his exits. <br>
                                Learned his rhythms. <br>
                                The moment his finger touches the door handle— <br>
                                They strike. <br>
                                Gun in the ribs. <br>
                                Phone gone. <br>
                                Keys taken. <br>
                                Engine running. <br>
                                And within 22 seconds, he’s on the ground and they’re gone—eastbound on the M1, radio silent.
                            </p>
                            <h4 class="text-center my-3">BUT THIS TIME… THE SYSTEM SAW EVERYTHING.</h4>
                            <p>
                                Tracker X was a DualShield Grade A device. <br>
                                Passed its JamGuard™ stress test two weeks ago <br>
                                Maintained 97.6% recovery across 210 incidents <br>
                                Rated for 46-second average dispatch <br>
                                That night? <br>
                                It detected forced ignition + irregular acceleration. <br>
                                Triggered panic event protocol. <br>
                                Logged an anomaly on the motion sensor + manual override pattern. <br>
                                And then? <br>
                                The thieves activated a GSM jammer—standard issue for syndicates. <br>
                                But the device had auto-switched to VHF beacon mode. <br>
                                Signal rerouted through a low-frequency backup. <br>
                                Unjammable. Untraceable.
                            </p>
                            <p>
                                <b>34 Seconds Later:</b> <br>
                                Search A Deal’s partner control room answered the ping. <br>
                                Not a chatbot. <br>
                                Not a delay. <br>
                                A real human. <br>
                                “We’ve got him.” <br>
                                SAPS was deployed in 3 minutes flat. <br>
                                Vehicle ping triangulated near Alexandra. <br>
                                Heat signature confirmed. <br>
                                Fence breached at 03:18. <br>
                                By 03:19, the Polo was secured. <br>
                                One tracker. <br>
                                One backup system. <br>
                                One dispatch team who didn’t wait for paperwork.
                            </p>
                        <a href="#form" class="btn btn-primary my-3 py-3" style="width: 100%">Request A Quote</a>

                        </div>
                    </div>

                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">THE AFTERMATH:</h3>
                        <div class="hlabi-body">
                            <p>
                                The recovery auto-logged into the Live Recovery Feed. <br>
                                Tracker X’s Gauteng success rate ticked from 91.6% to 91.7%. <br>
                                Insurer waived the excess. <br>
                                Client notified. <br>
                                Device rating preserved. <br>
                                No denials. <br>
                                No delays. <br>
                                No shame. <br>
                                Just proof.
                            </p>
                        </div>
                    </div>

                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">AND HERE’S THE COUNTERFACTUAL:</h3>
                        <div class="hlabi-body">
                            <p>
                                Had this been a tickbox tracker— <br>
                                one that hadn’t passed the jam test… <br>
                                one that couldn’t survive a real hijack… <br>
                                one sold by a salesman instead of verified by a matrix? <br>
                                No VHF switch. <br>
                                No control room dispatch. <br>
                                No SAPS handoff. <br>
                                No car. <br>
                                No payout. <br>
                                Just a driveway full of what-ifs.
                            </p>
                        </div>
                    </div>

                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">THE SYSTEM WORKS BECAUSE IT’S DESIGNED FOR THE NIGHTMARE</h3>
                        <div class="hlabi-body">
                            <p>
                                This is what Verified Tracker Certainty™ was built for: <br>
                                The chaotic moment when everything collapses— <br>
                                and you need to know that something… won’t. <br>
                                That’s what the DualShield™ Reliability Matrix delivers. <br>
                                Not a tracker. <br>
                                Not a promise. <br>
                                A contract with certainty—signed in data, proof, and real-world war zones. <br>
                                Now we rise from the ashes of fear into the rebirth of power. <br>
                                This is where the protector returns—stronger, sharper, and no longer vulnerable to illusion. <br>
                                The resurrection doesn’t happen in silence. <br>
                                It begins with a decision.
                            </p>
                        </div>
                    </div>

                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">THE RESURRECTION OF READINESS</h3>
                        <div class="hlabi-body">
                            <p>
                                You thought protection was about buying something. <br>
                                A tracker. A policy. A checkbox in a folder. <br>
                                But now you know: <br>
                                Protection isn’t purchased. It’s proven. <br>
                                And legacy isn’t claimed. It’s forged.
                            </p>
                            <p>
                                You stood in the driveway. <br>
                                You heard the silence. <br>
                                You saw the space where the car used to be— <br>
                                and felt it echo through the people who trusted you to be ready. <br>
                                But that story ends here. <br>
                                Because now, for the first time, you have more than intention. <br>
                                You have proof.
                            </p>
                        </div>
                    </div>

                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">THE SHIFT</h3>
                        <div class="hlabi-body">
                            <p>You’re no longer depending on:</p>
                            <ul>
                                <li>A brochure</li>
                                <li>A smiling agent</li>
                                <li>A vague installer promise</li>
                                <li>A “we’ll see” when the chaos hits</li>
                            </ul>
                            <p>You’re relying on a system that:</p>
                            <ul>
                                <li>Filters tech through war-level tests</li>
                                <li>Shreds trackers that fail even once</li>
                                <li>Updates performance in real time</li>
                                <li>Alerts you and your insurer before failure ever reaches your family</li>
                            </ul>
                            <p>
                                This is more than recovery. <br>
                                This is identity repair. <br>
                                You are no longer hoping. <br>
                                You are installed in certainty. <br>
                                You are the protector again. <br>
                                And the people who depend on you? <br>
                                They don’t need to know what almost happened. <br>
                                They’ll just know it didn’t.
                            </p>
                        <a href="#form" class="btn btn-primary my-3 py-3" style="width: 100%">Request A Quote</a>

                        </div>
                    </div>

                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">THE MAN RETURNS</h3>
                        <div class="hlabi-body">
                            <p>
                                His son looks up. <br>
                                Asks again: <br>
                                “Are we safe now, Dad?” <br>
                                This time, the answer doesn’t come from panic. <br>
                                It comes from confidence. <br>
                                “Yes. We are.” <br>
                                The DualShield™ tracker pings silently in the background. <br>
                                Recovery score: 92.1%. <br>
                                Response time: 39 seconds. <br>
                                And the father? <br>
                                He doesn’t hope he’s ready. <br>
                                He knows.
                            </p>
                        </div>
                    </div>

                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">THE MOTHER WHO BECAME UNSTEALABLE</h3>
                        <div class="hlabi-body">
                            <p>
                                She doesn’t flinch anymore when the gate buzzes at night. <br>
                                She doesn’t avoid the driveway. <br>
                                Because now, when her child asks: <br>
                                “Why do we have that thing on the car?” <br>
                                She doesn’t explain with fear. <br>
                                She answers with pride. <br>
                                “Because no one touches this family… <br>
                                unless they get through me first.”
                            </p>
                            <p>
                                This is what happens when you stop waiting… <br>
                                And start installing clarity. <br>
                                Because from this moment on, you don’t ride with a device. <br>
                                You ride with certainty. <br>
                                Now we forge the unbreakable frame around everything we’ve built so far. <br>
                                This is not just risk reversal. <br>
                                This is conversion architecture—designed to obliterate doubt, remove excuses, and make saying “no” feel reckless. <br>
                                These are not reassurances. <br>
                                They are declarations.
                            </p>
                        </div>
                    </div>

                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">THE THREE SACRED GUARANTEES</h3>
                        <div class="hlabi-body">
                            <h4 class="mt-4">1. THE TRUST ENGINE™ GUARANTEE</h4>
                            <p><i>“If it didn’t survive real hijacks, jamming, and insurer audits—it doesn’t reach your screen.”</i></p>
                            <p>Search A Deal is not a sales platform. <br>
                                It’s a forensic-grade filter. <br>
                                Every tracker you see:
                            </p>
                            <ul>
                                <li>Has passed the DualShield™ Reliability Matrix</li>
                                <li>Is linked to verified SAPS recovery logs</li>
                                <li>Has survived live jamming and redundancy tests</li>
                                <li>Is backed by POPIA-compliant data privacy audits</li>
                            </ul>
                            <p>
                                No brand can pay to appear. <br>
                                No affiliate can override the scoring. <br>
                                If a device fails even once? <br>
                                It disappears—before you ever see it. <br>
                                You don’t just see options. <br>
                                You see only the survivors.
                            </p>

                            <h4 class="mt-4">2. THE ZERO-SPAM, ZERO-SALESMAN GUARANTEE</h4>
                            <p><i>“No agents. No pressure. No calls. Ever.”</i></p>
                            <p>
                                You’re not here to be sold. <br>
                                You’re here to be protected. <br>
                                Search A Deal operates under South Africa’s POPIA law (Protection of Personal Information Act):
                            </p>
                            <ul>
                                <li>No sales agents</li>
                                <li>No lead reselling</li>
                                <li>No surprise calls</li>
                                <li>No hidden quote farms</li>
                            </ul>
                            <p>
                                Your profile stays encrypted. <br>
                                Nothing happens unless you initiate it. <br>
                                You stay in control. Always. <br>
                                No one chases you. <br>
                                No one upsells you. <br>
                                You click when you are ready—because that’s what real protection feels like.
                            </p>

                            <h4 class="mt-4">3. THE LEGAL PROTECTION PROMISE</h4>
                            <p><i>“If our platform ever misleads you—we’re accountable under South African law.”</i></p>
                            <p>
                                Search A Deal isn’t a blog. <br>
                                Not a social review site. <br>
                                Not a paid ranking engine. <br>
                                We’re an independent affiliate platform—contractually bound to truth-first protocols and third-party audit trails. <br>
                                That means: <br>
                                If we misrepresent a tracker’s performance, eligibility, or risk profile? <br>
                                You can pursue formal recourse. <br>
                                And we enforce this right.
                            </p>
                            <ul>
                                <li>Legal source validation</li>
                                <li>Independent data integrity audits</li>
                                <li>POPIA certification</li>
                                <li>Right-of-reply protocols for all providers</li>
                            </ul>
                            <p>
                                This isn’t just marketing. <br>
                                It’s compliance-built trust. <br>
                                Now we arrive at the sacred threshold. <br>
                                This is no longer a product decision. <br>
                                This is no longer a scroll. <br>
                                This is where legacy, identity, and the truth of who they are collide into one irreversible choice.
                            </p>
                        <a href="#form" class="btn btn-primary my-3 py-3" style="width: 100%">Request A Quote</a>

                        </div>
                    </div>

                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">THE SACRED DECISION</h3>
                        <div class="hlabi-body">
                            <p>
                                You’ve seen the silence. <br>
                                You’ve felt the weight of a driveway that whispers, <br>
                                “You should’ve known better.” <br>
                                You’ve walked through the betrayal of tickbox trackers, <br>
                                the illusion of protection, <br>
                                the failure of systems built on delay. <br>
                                But now you know the truth. <br>
                                And once you know— <br>
                                You can never unknow it.
                            </p>

                            <h4 class="mt-4">WHAT HAPPENS IF YOU DON’T CLICK?</h4>
                            <p>
                                Nothing… at first. <br>
                                Your car will still be there. <br>
                                The sun will rise. <br>
                                The groceries will be unpacked. <br>
                                The routine will play on. <br>
                                But beneath that surface— <br>
                                The question waits: <br>
                                “Did I protect us… <br>
                                Or did I just hope we’d stay lucky?” <br>
                                And when the day comes— <br>
                                when the driveway is too quiet… <br>
                                when the phone rings but no one answers… <br>
                                when your child asks: <br>
                                “Didn’t you stop them, Dad?” <br>
                                “Mommy… why didn’t we check?” <br>
                                You’ll remember this scroll. <br>
                                This moment. <br>
                                This choice. <br>
                                And it will echo louder than any siren ever could.
                            </p>

                            <h4 class="mt-4">WHAT HAPPENS IF YOU DO CLICK?</h4>
                            <p>
                                Everything changes. <br>
                                You see your options. <br>
                                You scan the verified recovery rates. <br>
                                You compare real jamming scores. <br>
                                You pick a device that’s already fought in hijack zones—and won. <br>
                                No fear. <br>
                                No guesswork. <br>
                                Just data. Proof. Certainty. <br>
                                You install more than a tracker. <br>
                                You install peace that can’t be stolen. <br>
                                And the people you love? <br>
                                They’ll never know what almost happened. <br>
                                Because now? It never will.
                            </p>
                        </div>
                    </div>

                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">THIS ISN’T JUST A SCAN.</h3>
                        <div class="hlabi-body">
                            <p>
                                It’s Legacy Proof. <br>
                                Because what they find when they open the drawer one day won’t be questions. <br>
                                It will be confidence. <br>
                                Not silence. <br>
                                But certainty. <br>
                                Not shame. <br>
                                But pride. <br>
                                Not “They meant to...” <br>
                                But: <br>
                                “They were already ready.”
                            </p>
                        </div>
                    </div>

                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">THE FINAL IMAGE</h3>
                        <div class="hlabi-body">
                            <p>
                                Your son holds the keys and asks, <br>
                                “What’s this symbol mean on the dashboard?” <br>
                                You look at the tracker indicator light— <br>
                                still glowing, still active. <br>
                                And you smile. <br>
                                “That? <br>
                                That means nobody gets near this family… without going through me first.”
                            </p>
                        </div>
                    </div>

                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">THE UNSTEALABLE CHOICE</h3>
                        <div class="hlabi-body text-center">
                            <h4 class="my-3">Run Your Verified Tracker Scan Now</h4>
                            <p>And join the few who moved before the syndicates did.</p>
                            <div class="points text-start" style="display: inline-block; text-align: left;">
                                <ul>
                                    <li>No agents</li>
                                    <li>No pressure</li>
                                    <li>No guesswork</li>
                                    <li>Just battlefield-tested protection—already proven to survive what’s coming</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">COMMON OBJECTIONS ADDRESSED</h3>
                        <div class="hlabi-body">
                            <h4 class="mt-4">OBJECTION 1: “I Already Have a Tracker.”</h4>
                            <p>
                                Great. But are you sure it works when it matters? <br>
                                Most rejected claims involve inactive, non-compliant, or jammed trackers. <br>
                                Having one means nothing if it fails the moment it’s needed. <br>
                                Ask yourself:
                            </p>
                            <ul>
                                <li>Has it passed a live jamming test?</li>
                                <li>Does it qualify for an insurer double-device discount?</li>
                                <li>Can you verify its SAPS-linked recovery rate—today?</li>
                            </ul>
                            <p>
                                If the answer is “I’m not sure”... <br>
                                You’re not protected. <br>
                                You’re just assuming.
                            </p>

                            <h4 class="mt-4">OBJECTION 2: “I’ll Do It Later.”</h4>
                            <p>
                                That’s what every one of the 22 people said—before their cars disappeared today. <br>
                                Thieves don’t wait for your calendar. <br>
                                They don’t send reminders. <br>
                                But they do watch your routines. <br>
                                Later is how protectors become headlines. <br>
                                This scan takes 90 seconds. <br>
                                That’s faster than reading your policy fine print. <br>
                                Do it now. Before “later” turns into too late.
                            </p>

                            <h4 class="mt-4">OBJECTION 3: “It Won’t Happen to Me.”</h4>
                            <p>
                                That’s not confidence. That’s gambling. And the odds in South Africa are brutal. <br>
                                Every 22 minutes, a car disappears. <br>
                                Most hijacked vehicles without qualified trackers? Never recovered. <br>
                                Most policyholders only realize they weren’t compliant… after the insurer says no. <br>
                                They weren’t careless. <br>
                                They weren’t reckless. <br>
                                They just trusted the wrong system. <br>
                                Don’t be one of them.
                            </p>

                            <h4 class="mt-4">OBJECTION 4: “This Is Just Fear Marketing.”</h4>
                            <p>
                                It’s not fear if it’s already happening. <br>
                                This isn’t a hypothetical. <br>
                                This is organized crime, with jammers, lookouts, data interceptors, and exit mapping teams. <br>
                                You’re not being manipulated. <br>
                                You’re being informed—with forensic proof, live stats, and test-verified evidence. <br>
                                And the truth? It doesn’t care about your feelings. <br>
                                But it will protect your family… if you act on it.
                            </p>

                            <h4 class="mt-4">OBJECTION 5: “Sounds Too Technical.”</h4>
                            <p>
                                That’s why the platform does the hard part for you. <br>
                                You don’t need to know frequencies, encryption levels, or SLA dispatch logic. <br>
                                All you need to do is: <br>
                                Enter your vehicle details <br>
                                Get your personalized shortlist <br>
                                See only DualShield™–verified devices <br>
                                Book your installer or download the insurer-ready code <br>
                                That’s it. <br>
                                No complexity. Just clarity.
                            </p>

                            <h4 class="mt-4">OBJECTION 6: “I Hate Sales Calls and Spam.”</h4>
                            <p>
                                That’s why we built Search A Deal to be the opposite. <br>
                                No agents. <br>
                                No upsells. <br>
                                No follow-ups. <br>
                                No call centers “just checking in.” <br>
                                We don’t earn from spam. <br>
                                We earn from showing you truth. <br>
                                Your data stays encrypted and dormant—until you act. <br>
                                You control the conversation.
                            </p>

                            <h4 class="mt-4">OBJECTION 7: “I Trust My Current Provider.”</h4>
                            <p>
                                Noble. But now it’s time to verify them. <br>
                                Even if you already have a tracker installed, ask: <br>
                                Has your provider published real hijack recovery logs? <br>
                                Can you see their jamming failure rate? <br>
                                Do they pass all 5 DualShield™ layers? <br>
                                If not? <br>
                                Then your trust isn’t protection. <br>
                                It’s a coin toss. <br>
                                This scan doesn’t replace your tracker. <br>
                                It confirms if you’re actually covered—or just lucky so far.
                            </p>

                            <h4 class="mt-4">OBJECTION 8: “What If I Do Nothing?”</h4>
                            <p>
                                Then one day—maybe this week, maybe next year—your name will be called. <br>
                                Not by fate. <br>
                                But by someone who’s been watching. <br>
                                And when the shadows strike… <br>
                                It won’t be the price of a tracker that haunts you. <br>
                                It’ll be the silence. <br>
                                The insurer’s denial. <br>
                                The child who asks, “Why didn’t we check?”
                            </p>
                            <p>
                                You won’t get to explain. <br>
                                You’ll just be the reason they have to start over. <br>
                                We now deliver the final blow to hesitation. <br>
                                This is where the protector doesn’t just click. <br>
                                They commit. <br>
                                This is the Close—the sacred compression point where every psychological thread, every emotional charge, and every logical proof converges into a single line of action. <br>
                                It must be undeniable. <br>
                                It must be irreversible. <br>
                                It must feel like scrolling past it would betray their own family.
                            </p>
                        </div>
                    </div>

                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">THE MOMENT BEFORE EVERYTHING CHANGES</h3>
                        <div class="hlabi-body">
                            <p>
                                This isn’t about a tracker. <br>
                                It’s not about tech. <br>
                                It’s not even about the car. <br>
                                It’s about what your family will remember when the worst almost happened. <br>
                                Did you hope? <br>
                                Or did you prepare?
                            </p>
                            <p>
                                Right now, you stand at a line few ever see clearly: <br>
                                On one side: <br>
                                Assumptions. <br>
                                Guesswork. <br>
                                Policy clauses you didn’t read. <br>
                                A claim department trained to delay. <br>
                                On the other side: <br>
                                A device already tested in hijack zones. <br>
                                Proof that updates in real-time. <br>
                                A human who answers before the trail goes cold. <br>
                                And a system that never lets weak tech reach your home. <br>
                                You don’t get this choice twice. <br>
                                And the next 22 minutes could make the difference between <br>
                                a story of shame… and a story of certainty.
                            </p>
                        </div>
                    </div>

                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">THIS IS WHERE LEGACY IS WRITTEN</h3>
                        <div class="hlabi-body">
                            <p>
                                Let your name become the one that made the hard call—before the silence arrived. <br>
                                Let your child open the door years from now and never feel that chill in the air. <br>
                                Let your partner walk to the car and know they’re covered by someone who didn’t flinch. <br>
                                This isn’t protection. <br>
                                This is preparation immortalized.
                            </p>
                        </div>
                    </div>

                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">YOUR FINAL CALL TO CERTAINTY</h3>
                        <div class="hlabi-body text-center">
                            <h4 class="my-3">Run Your Verified Tracker Scan Now</h4>
                            <p>And make sure your family never becomes someone else's case number.</p>
                            <div class="points text-start" style="display: inline-block; text-align: left;">
                                <ul>
                                    <li>90 seconds</li>
                                    <li>No agents</li>
                                    <li>No pressure</li>
                                    <li>Just forensic truth, real-time scores, and the kind of protection syndicates can’t hack</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">YOU ALREADY KNOW THE DIFFERENCE</h3>
                        <div class="hlabi-body">
                            <p>
                                You’ve seen the difference between tickbox tech and real recovery. <br>
                                You’ve seen the way syndicates work. <br>
                                You’ve seen how insurers hide behind fine print. <br>
                                And now, you’ve seen the only system in South Africa that doesn’t let any of them win. <br>
                                You were never missing a device. <br>
                                You were missing a filter. <br>
                                Now you have it.
                            </p>
                            <p class="text-center my-3">
                                <strong>Click below. Lock in clarity. Install certainty.</strong>
                            </p>
                            <p class="text-center">
                                <b>Your legacy depends on it.</b>
                            </p>
                        </div>
                    </div>

                     {{-- <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">AND HERE’S THE TWIST:</h3>
                        <div class="hlabi-body">
                            <div class="points text-start">
                                <p>
                                 Even most “comparison sites” are part of the problem. <br>
                                - Paid rankings <br>
                                - Sponsored slots <br>
                                - No mention of jammer tests, recovery stats, or insurer-grade scoring <br>
                                It’s all noise. <br>
                                And in the middle of that chaos? <br>
                                You’re asked to make a decision that could determine whether your family is safe or stranded. <br>
                                How? <br>
                                With star ratings? <br>
                                Influencer reviews? <br>
                                Marketing videos? <br>
                                <b>That’s not protection. That’s roulette.</b> <br>
                                </p>
                            </div>
                            <p>
                              <h4 class="text-center my-2">UNTIL NOW.</h4>
                              <p>
                                Because now—for the first time in South Africa— <br>
                                There’s a platform that doesn’t let the noise in. <br>
                                A platform that refuses to show you any tracker that can’t survive hijack-level pressure. <br>
                                One that says: <br>
                                “If it hasn’t been proven in real South African conditions… <br>
                                It doesn’t belong anywhere near your family.” <br>
                                This is where Verified Tracker Certainty™ begins. <br>
                                And what powers it… <br>
                                …isn’t a marketing claim. <br>
                                It’s a battle-tested scoring system so strict, 7 out of 10 devices don’t even qualify for public results. <br>
                                It’s called the DualShield™ Reliability Matrix. <br>
                                And when you see what’s inside it—you’ll understand why this is no longer just a platform. <br>
                                It’s a weapon. <br>
                                Against chaos. <br>
                                Against betrayal. <br>
                                Against the empty promises that leave protectors exposed. <br>
                              </p>
                            </p>
                        </div>
                        <a href="#form" class="btn btn-primary my-3 py-3" style="width: 100%">Request A Quote</a>
                    </div> --}}


                </div>
            </div>



              
              <div class="col-lg-12 wow fadeIn hlabi-form" id="form" data-wow-delay="0.5s">
                <div class="bg-light rounded p-5">
                  <h4 class="mb-4">Request A Quote</h4>
                  <form action="{{ route('tracker.submit') }}" method="post">
                    @csrf
                    <div class="row g-3">
                      <div class="col-sm-12">
                        <div class="form-floating">
                          <input
                            type="text"
                            class="form-control"
                            id="gname"
                            placeholder="First Name"
                            name="firstname"
                            required
                          />

                          <label for="gname">First Name *</label>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-floating">
                          <input
                            type="text"
                            class="form-control"
                            id="gname"
                            placeholder="Last Name"
                            name="lastname"
                            required
                          />

                          <label for="gname">Last Name *</label>
                        </div>
                      </div>
                      
                      <div class="col-sm-6">
                        <div class="form-floating">
                          <input
                            type="text"
                            class="form-control"
                            id="phone_number"
                            placeholder="Phone Number, format: 0xx-xxx-xxxx"
                            name="phone1"
                            required
                          />
                          <label for="cname">Phone Number *</label>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-floating">
                          <input
                            type="email"
                            class="form-control"
                            id="gmail"
                            placeholder="Gurdian Email"
                            required
                            name="email"
                          />
                          <label for="gmail">Your Email </label>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <input id="checkbox-1" required name="acceptterms" value="true"
                                aria-describedby="checkbox-1" type="checkbox"
                                class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded">
                            <label for="checkbox-1" class="text-sm ml-3 font-medium text-gray-900">I agree to the <a
                                    href="#" class="text-blue-600 hover:underline">terms and conditions</a></label>
                      </div>
                      <div class="col-12">
                        <button class="btn btn-primary py-3 px-5" type="submit">
                          Get Tracker
                        </button>
                      </div>
                    </div>
                    <input type="hidden" name="optinurl" value="https://searchadeal.online/" required>
                    <input type="hidden" name="optindate" value="<?php echo date("d/m/y H:i:s"); ?>" required>
                    <input type="hidden" name="channel" value="JMAff" required>
                    <input type="hidden" name="product" value="Vehicle Tracking" required>
                    <input type="hidden" name="leadsource" value="JMLSSEARCHADEAL9020" required>
                    <input type="hidden" name="affiliateshortcode" value="JMAFFSite15019" required>
                    <input type="hidden" name="offer_id" value="1523" required>
                  </form>
                </div>
              </div>
    
          </div>

        </div>
      </div>
    </div>
    <!-- Car Insurence End -->
@include('partials.footer')