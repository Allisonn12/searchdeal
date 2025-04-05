<?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php if(session('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <?php if(session('error')): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?>


    
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
                          South Africa’s Car Theft Crisis is Out of Control – Will YOUR Car Be Next?
                        </h1>
                        <div class="subtitle">
                            <p class="mb-5">
                                <i>
                          Most Car Owners Are Completely Unprepared for What’s Coming—Here’s the Little-Known Solution That Could Save Yours.
                                </i>
                            </p>
                        </div>
                    </div>
                    
                    <div class="break-image">
                        <img src="img/images/5.png" alt="">
                    </div>
                    <div class="row">
                        <h3> Every 13 minutes, another car disappears off the streets.</h3>
                        <div class="hlabi-body">
                            <div class="points text-start">
                                <p>Most are never recovered. Most owners never saw it coming.</p>
                                <ul>
                                    <li>️ Criminals don’t care how much you love your car.</li>
                                    <li>️ They don’t care how much you’ve spent on it.</li>
                                    <li>️ They only care how fast they can take it—and with today’s technology, that’s under 60 seconds.</li>
                                </ul>
                                <ul>
                                  <li> Your insurance won’t bring it back.</li>
                                  <li> Your alarm won’t stop them.</li>
                                  <li> Your immobilizer? They bypass it like it’s nothing.</li>
                              </ul>
                              
                                <p>
                                  That’s why thousands of smart South African drivers are choosing a new kind of protection.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">I Parked My Car… and It Was Just GONE.</h3>
                        <div class="hlabi-body">
                            <i class="mb-2">Imagine this:</i>
                            <p>You step out of the mall, keys in hand—but your car isn’t there.</p>
                            <p>
                               - No alarm. <br>
                               - No shattered glass. <br>
                               - No clues left behind. <br>
                            </p>
                            <b class="mb-2">Your stomach sinks. You frantically hit your remote. Nothing</b>
                            <p>
                              - You call the police. They tell you recovery is unlikely. <br>
                              - You call your insurer. They remind you about your high deductible.
                            </p>
                            <p>
                              Now you’re left with:
                            </p>
                            <div class="points" style="text-align: start;">
                                <p>
                                   - A massive financial loss. <br>
                                   - No way to get to work. <br>
                                   - Endless stress, paperwork, and frustration.
                                </p>       
                                <p>
                                   - This exact scenario plays out hundreds of times a day across South Africa. <br>
                                   - But it doesn’t have to happen to you.  
                                </p>                     
                            </div>
                        </div>
                    </div>


                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">How Smart Drivers Stay One Step Ahead of Car Thieves</h3>
                        <div class="hlabi-body">
                            <p class="mb-2"><b>With Search A Deal’s Partners Advanced Car Tracker, you get next-level protection that criminals CAN’T bypass.</b></p>
                                                
                            <div class="points text-start">
                                <ul>
                                    <li> Live GPS Tracking – See your car’s exact location from your phone, anytime.</li>
                                    <li> Instant Theft Alerts – Get notified the second suspicious activity is detected.</li>
                                    <li> 24/7 Control – Lock and monitor your car remotely.</li>
                                    <li> Lower Insurance Costs – Many insurers offer discounts for GPS-tracked vehicles.</li>
                                    <li> Rapid Recovery – 90% of stolen vehicles with our tracker are recovered within 24 hours.</li>
                                    <li> Zero-Hassle Installation – Takes less than 60 minutes, and you’re protected instantly.</li>
                                </ul>
                                <p>
                                   Join thousands of South African drivers who have already secured their vehicles. <br>
                                  <b>The question is: Will you be next?</b>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">The #1 Mistake Most Car Owners Make…</h3>
                        <div class="hlabi-body">
                            <p class="mb-2">Most people only think about security AFTER their car is stolen.</p>
                            <div class="points text-start">
                                <p>By then, it’s too late.</p>
                                <p><b>If you don’t take action now, here’s what you’re risking:</b></p>
                                <ul>
                                    <li> Your car, gone—forever.</li>
                                    <li> Endless insurance headaches & delays.</li>
                                    <li> The devastating loss of something you worked hard for.</li>
                                </ul>
                                <p>
                                   Thieves are already hunting for their next target. Make sure it’s not YOUR car.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">GET PROTECTED BEFORE IT’S TOO LATE!</h3>
                        <div class="hlabi-body">
                            <p class="mb-2"> Car theft is rising every single day.</p>
                            <div class="points text-start">
                                <p>Because we believe every driver should have real protection, we’re making it easier than ever to get secured immediately:</p>
                                <ul>
                                    <li> FREE installation – for a limited time only!</li>
                                    <li> No hidden fees, no long-term contracts—just 24/7 peace of mind.</li>
                                    <li> Fast activation—be fully protected in under 24 hours!</li>
                                </ul>
                                <b> This offer is available for a limited time and WILL end soon.
                                    <br> Thousands of South African drivers have already secured their vehicles. Are you next?
                                    <br> Click Below to Claim Your FREE Installation & Get Protected Today!
                                </b>
                                <p>
                                    <a href="#form" class="btn btn-primary my-3 py-3" style="width: 100%">Claim Your FREE Installation</a>
                                </p>
                                <ul>
                                  <li> Takes less than 60 seconds.</li>
                                  <li> No commitment—just full security.</li>
                                  <li> Act now before this offer disappears!</li>
                              </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">ACT NOW – BEFORE IT’S TOO LATE!</h3>
                        <div class="hlabi-body">
                            <div class="points text-start">
                                <p>- Your car is one of your most valuable assets.</p>
                                <p>- Losing it will cost you tens of thousands.</p>
                                <p>- Getting it back is near impossible—unless you act NOW.</p>
                                <p>- Click Below to Lock In Your Free Installation & Get Protected Before This Offer Disappears!</p>
                                <ul>
                                    <li> Takes less than 60 seconds.</li>
                                    <li> No hidden fees. No commitment—just total protection.</li>
                                    <li> Don’t wait—act now before this limited-time offer is gone!</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

              
              <div class="col-lg-12 wow fadeIn hlabi-form" id="form" data-wow-delay="0.5s">
                <div class="bg-light rounded p-5">
                  <h4 class="mb-4">Request A Quote</h4>
                  <form action="<?php echo e(route('tracker.submit')); ?>" method="post">
                    <?php echo csrf_field(); ?>
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
<?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/hlabi/Desktop/work/_public_html/resources/views/tracker.blade.php ENDPATH**/ ?>