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
            <h4 class="text-danger text-center mb-5" style="font-weight: 800">NEED CAR INSURANCE?</h4>
            <div class="main">
                <div class="main-content my-5">
                    <div class="col-lg-12 wow fadeIn" data-wow-delay="0.3s">
                        <div class="row">
                            <h1 class="display-6 mb-5">
                                Your Car Is Protected. Now, Secure Your Family’s Financial Future in Just 60 Seconds.
                            </h1>
                            <div class="subtitle">
                                <p class="mb-5" style="font-size: 30px">
                                    <i>
                                        Congratulations! By choosing a verified tracker through Search A Deal, 
                                  you've secured your family's physical safety. But before you go, there’s one 
                                  crucial piece of your family's protection puzzle still missing.
                                    </i>
                                </p>
                            </div>
                        </div>
                        <div class="row text-start mb-5 mt-5">
                            <div>
                                <p>
                                    Every 22 minutes, another South African family discovers too late that their car insurance wasn't enough. 
                          Claims get denied, hidden clauses surface, and financial security crumbles in an instant.
                                </p>
                                <p>
                                    You just took decisive action to protect your vehicle physically—now safeguard your family's financial 
                          future with absolute clarity and unshakeable certainty.
                                </p>
                            </div>
                            <h3 class="text-center mb-3">Introducing the 60Second Switch™</h3>
                            <div class="hlabi-body">
                                <p>A breakthrough method ensuring total insurance transparency and instant verified financial security:</p>
                                <ul>
                                    <li>
                                        <b>Instant Clarity</b>: Real-time, verified quotes from trusted insurers.
                                    </li>
                                    <li>
                                        <b>Complete Protection</b>: Eliminate hidden clauses and insurer tricks that could devastate your finances.
                                    </li>
                                    <li>
                                        <b>Immediate Savings</b>: Median monthly savings exceeding R400, putting money back into your pocket immediately.
                                    </li>
                                </ul>
                                <p>
                                    Thousands of savvy South African families who've chosen the Verified Tracker Certainty™ 
                              also upgraded to the 60Second Switch™—because peace of mind isn't complete without 
                              financial security.
                                </p>
                                <p>
                                    This exclusive upgrade is available ONLY on this page, for the next few minutes.
                              Secure absolute financial certainty right now—no confusing fine print, no hidden traps.
                                </p>
                            </div>
                        </div>
                        <div class="row text-start mb-5 mt-5">
                            <h3 class="text-center mb-3">Special Immediate Upgrade:</h3>
                            <div class="hlabi-body">
                                <p>Add complete financial security to your tracker protection in just 60 seconds.</p>
                                <p>
                                    You're fully protected: Our commitment guarantees absolute transparency, verified privacy, 
                              and compliance with all South African consumer protections. If you're not completely satisfied, 
                              there's no obligation—ever.
                                </p>
                                <p class="text-center">
                                    <b>"Yes! Add Financial Certainty Now"</b>
                                    <br>
                                    <a href="{{ route('cicslhcf') }}">Learn more</a>
                                    <br>
                                    <b>"Secure My Family’s Future Immediately"</b>
                                    <br>
                                </p>
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
