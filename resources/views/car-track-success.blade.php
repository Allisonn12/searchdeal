@include('partials.header')
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">
<div class="container">
    <div class="wrapper-1">
        <div class="wrapper-2">
            <h4 class="success-heading">Success!</h4>
            <i class="fa fa-check main-content__checkmark" style="color:#015FC9" id="checkmark"></i>
            <h2>One of our friendly consultants will be in touch!!!</h2>
        </div>
    </div>
</div>
<hr>
<div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <h4 class="text-danger text-center mb-5" style="font-weight: 800">NEED A CAR TRACKER?</h4>
            <div class="main text-center">
                <div class="main-content my-5">
                    <div class="col-lg-12 wow fadeIn" data-wow-delay="0.3s">
                        <div class="hlabi-body">
                        <div class="row">
                            <h1 class="display-6 mb-5">
                                Your Car Insurance is Set—But Are You Ready for the Moment Hijackers Strike?
                            </h1>
                            <div class="subtitle">
                                <p class="mb-5" style="font-size: 30px">
                                    <i>
                                        Congratulations on securing unmatched financial protection with the 
                                        revolutionary 60Second Switch™! You've safeguarded your family's financial 
                                        future—but there's one critical piece of your safety puzzle missing...
                                    </i>
                                </p>
                            </div>
                        </div>
                        <div class="row text-center mb-5">
                            <div class="mb-3">
                                <p>
                                    Every 22 minutes, a South African family's sense of security is shattered—not 
                                    by their insurer, but by criminals who’ve already chosen their car. 
                                    Your insurance ensures financial recovery, but what about the emotional 
                                    and physical safety of your family?

                                </p>
                            </div>
                            <h3 class="text-center mb-3">Introducing Verified Tracker Certainty™</h3>
                            <div class="hlabi-body">
                                <p>
                                    The only tracker solution proven in real hijackings, equipped with the 
                                    revolutionary DualShield™ Reliability Matrix. This isn’t just a 
                                    tracker—it’s your family's lifeline during a hijack:
                                </p>
                                <b>INTRODUCING VERIFIED TRACKER CERTAINTY™</b>
                                <p>
                                   <div>
                                        <ul>
                                            <li><b>Jam-Proof Protection</b>: Tested against GPS jammers—instantly switches to secure, unjammable frequencies. </li>
                                            <li><b>Immediate Emergency Response</b>: Human-led, rapid SAPS deployment within seconds, not hours. </li>
                                            <li><b>Insurer-Approved Security</b>: Qualifies for maximum premium discounts, ensuring your financial and physical safety go hand-in-hand. </li>
                                            <li><b>POPIA Compliant</b>: Your privacy, absolutely secured under South African law. </li>
                                        </ul>
                                   </div>
                                </p>
                                <p>
                                    Thousands of South Africans who chose the 60Second Switch™ didn't leave their safety to chance—they added Verified 
                                    Tracker Certainty™ immediately. This exclusive upgrade opportunity is available ONLY right here, right now.
                                </p>
                                <p>
                                    For the next few minutes, you can lock in Verified Tracker Certainty™ at a special exclusive price, 
                                    ensuring your family's complete safety—not just financial recovery, but real-world, verified 
                                    protection from hijacking.
                                </p>
                                <h3>Our guarantee:</h3>
                                <p>
                                    If your tracker doesn't meet every single promise, you're under no obligation—ever. Absolute certainty, zero risk.
                                </p>
                                <p>
                                    “Yes! Activate Verified Tracker Certainty™” <br>
                                    <a href="{{ route('car-track-up') }}">Secure, Immediate, One-Click Activation</a> <br>
                                    “Protect My Family Completely Now”

                                </p>
                            </div>
                        </div>

                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
.success-icon {
  width: auto;
  font-family: 'Kaushan Script', cursive;
  font-size: 3vw;
  font-weight: bold;
}
.main-content__checkmark {
  font-size: 4.0625rem !important;
  line-height:1 !important;
  color:#24b663;
}
.wrapper-1{
  width:100%;
  display: flex;
flex-direction: column;
}
.wrapper-2{
  padding :30px;
  text-align:center;
}
.wrapper-4{
  padding :30px;
  text-align:center;
}
.success-heading{
  font-family: 'Kaushan Script', cursive;
  font-size:5em;
  letter-spacing:3px;
  color: #015FC9 ;
  margin:0;
  margin:20px 0;
}
.wrapper-4 p{
  margin:0;
  font-size:1.3em;
  color:#000;
  font-family: 'Source Sans Pro', sans-serif;
  letter-spacing:1px;
}
.wrapper-2 p{
  margin:0;
  font-size:1.3em;
  color:#aaa;
  font-family: 'Source Sans Pro', sans-serif;
  letter-spacing:1px;
}

@media screen and (max-width: 747px){
    .footer{
        position: relative;
    }
}
</style>
@include('partials.footer')
