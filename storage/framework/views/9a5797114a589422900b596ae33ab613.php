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


    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
      style="background: url(img/images/16.png) center center no-repeat; background-size: cover;"
    >
      <div class="overlay-color">
          <div class="container py-5">
        <h1 class="display-4 animated text-white slideInDown mb-4">Car Insurance</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0 text-white">
            <li class="breadcrumb-item"><a href="<?php echo e(route('index')); ?>">Home</a></li>
            <li class="breadcrumb-item active text-white" aria-current="page">
                Car Insurance
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
                        <h1 class="display-6 mb-3">
                            WARNING: Your Insurance Policy May Be Failing You—And You Won’t Know Until It’s Too Late!
                        </h1>
                        <div class="subtitle">
                            <p class="mb-5">
                                <i>92% of Drivers Only Realize They’re Unprotected After a Denied Claim—Don’t Be One of Them.</i>
                            </p>
                        </div>
                    </div>
                    <div class="break-image">
                        <img src="img/images/16.png" alt="">
                    </div>
                    <div class="row">
                        <h3>It happens every single day.</h3>
                        <div class="hlabi-body">
                            <p><b>
                                A driver gets into an accident, their car is stolen, or a breakdown leaves them stranded. They assume their insurance will cover it—because that’s why they’ve been paying premiums for years.
                            </b></p>
                            <div class="points text-start">
                                <p>Then reality punches them in the face.</p>
                                <ul>
                                    <li>Claim Denied Due to Policy Fine Print.</li>
                                    <li>Insufficient Coverage—You're Responsible for the Remaining R30,000.</li>
                                    <li>Processing Delay—Your Payout Will Arrive in 4-6 Months.</li>
                                </ul>
                                <p>
                                    And just like that, you’re left with a financial disaster that should have been covered.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">If You Own a Car, You’re Just One Disaster Away From This Nightmare.</h3>
                        <div class="hlabi-body">
                            <i class="mb-2">Imagine this:</i>
                            <p>
                                - You're driving home from work, thinking about dinner. Then—BAM. <br>
                                - A driver runs a red light and slams into your car. <br>
                                - Your airbags deploy. Your car is wrecked. The tow truck arrives. <br>
                                - You're shaken, but at least your insurance will cover the damages… right? <br>
                                
                            </p>
                            <b class="mb-2">Wrong!!!</b>
                            <div class="points" style="text-align: start;">
                                <p>- You find out your insurer won’t cover your claim—because of a "technicality" you never noticed. <br>
                                    - Now, instead of just dealing with car repairs, you're staring at a R50,000+ bill you never expected. <br>
                                    - This is how most drivers go broke overnight.
                                </p>
                                
                            </div>
                        </div>
                    </div>


                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">The Ugly Truth: Insurance Companies Profit by Paying You Less.</h3>
                        <div class="hlabi-body">
                            <p class="mb-2"><b>Most people think insurance companies exist to protect them.</b></p>
                            <p>They don’t.</p>
                            
                            <b class=""> They exist to make money—and the less they pay out, the more they profit.</b>
                            <div class="points text-start">
                                <p>That’s why:</p>
                                <ul>
                                    <li>They make claims confusing and difficult.</li>
                                    <li>They delay payouts for months—or deny them entirely.</li>
                                    <li>They increase your premiums every year—but your coverage stays the same.</li>
                                </ul>
                                <p>
                                  It’s a rigged system—and the only way to win is to switch to an insurer that actually puts YOU first.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">The Solution: Search A Deal’s Partner Car Insurance—Designed to Actually Work for You.</h3>
                        <div class="hlabi-body">
                        <p class="mb-2">We partner ONLY with insurers who are committed to paying out FAST, offering full protection, and never hiding behind fine print.</p>
                            <div class="points text-start">
                                <p>With Search A Deal, you get:</p>
                                <ul>
                                    <li>FULL Protection Against Accidents, Theft & Repairs – No hidden exclusions, just real coverage</li>
                                    <li>Fair Premiums That Stay Affordable – You won’t be punished for staying covered.</li>
                                    <li>No-Nonsense Claims Process – Get paid FAST, without endless paperwork.</li>
                                    <li>24/7 Emergency Support – Because problems don’t happen on a 9-to-5 schedule.</li>
                                </ul>
                                <p>
                                    This isn’t just insurance—it’s total financial peace of mind.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">The Math is Simple: One Claim Costs More Than 5 YEARS of Coverage!</h3>
                        <div class="hlabi-body">
                            <p class="mb-2">Most people don’t run the numbers.</p>
                            <div class="points text-start">
                                <p>But let’s break it down:</p>
                                <ul>
                                    <li> Average Repair After an Accident: R40,000 - R100,000</li>
                                    <li> Theft Recovery Costs: R20,000 - R50,000</li>
                                    <li> Insurance Deductibles at Most Companies: R5,000 - R15,000</li>
                                </ul>
                                <b> With Search A Deal, you can be fully covered for LESS than R500 per month.
                                    <br>That’s like trading R1 for R100 in savings when disaster strikes.
                                </b>
                                <p>
                                    Why would anyone risk losing tens of thousands—when they can be covered for a fraction of the cost?
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">URGENT: Prices Are Rising & Coverage Is Running Out!</h3>
                        <div class="hlabi-body">
                            <div class="points text-start">
                                <p>Here’s what most people don’t realize:</p>
                                <ul>
                                    <li> The longer you wait, the more you’ll pay.</li>
                                    <li> Once you file a claim, it’s TOO LATE to switch to better coverage.</li>
                                    <li> Most people only realize their insurance is a scam when they try to use it.</li>
                                </ul>
                                <p>
                                   TODAY, you have a chance to fix this. <br>
                                  Click below to get your FREE, 60-second quote and secure your best deal before it’s gone!
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="row text-start  mb-5 mt-5">
                        <h3 class="text-center mb-3">The #1 Regret of People Who Skipped This Offer? Waiting Until It Was Too Late.</h3>
                        <div class="hlabi-body">
                            <i class="mb-2"> Every driver who doesn’t switch now will eventually wish they had.</i>
                            <p>
                              ️-  Most people don’t take action until disaster forces them to. <br>
                              ️-  Most people think they have time—until they don’t. <br>
                              ️-  Most people regret not acting sooner. <br>                            
                            </p>
                            <b class="mb-2"> Today, you have the power to take control of your future.
                                <br> Tomorrow? You might be the one stuck fighting a denied claim.
                            </b>
                            <div class="points" style="text-align: start;">
                                
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>


              
              <div class="col-lg-12 wow fadeIn hlabi-form" data-wow-delay="0.5s">
                <div class="bg-light rounded p-5">
                  <h4 class="mb-4">Request A Quote</h4>
                  <form action="<?php echo e(route('car.insure.submit')); ?>" method="post">
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
                      <div class="col-sm-6">
                        <div class="form-floating">
                          <select name="gender" required class="form-select" id="cage">
                            <option selected></option>
                            <option value="Male">Male</option>
                            <option value="Female">Femail</option>
                            <option value="Other">I prefer not to say</option>
                          </select>
                          <label for="cage">Gender *</label>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-floating">
                          <select name="currentinsurer" class="form-select" id="cage">
                            <option selected></option>
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
                          <label for="cage">Insurer</label>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-floating">
                          <select name="vehiclemake" class="form-select" id="cage">
                            <option selected></option>
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
                          <label for="cage">Vehicle Make</label>
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
                          Get Car Insurance
                        </button>
                      </div>
                    </div>
                    <input type="hidden" name="optinurl" value="https://searchadeal.online/" required>
                    <input type="hidden" name="optindate" value="<?php echo e(date('Y-m-d h:i:s')); ?>" required>
                    <input type="hidden" name="channel" value="JMAff" required>
                    <input type="hidden" name="language" value="English" required>
                    <input type="hidden" name="product" value="JMCar" required>
                    <input type="hidden" name="affiliateshortcode" value="JMAFFSite15022" required>
                    <input type="hidden" name="Leadsource" value="JMLSSEARCHADEAL9020" required>
                    <input type="hidden" name="offer_id" value="377" required>
                  </form>
                </div>
              </div>
    
          </div>

        </div>
      </div>
    </div>
    <!-- Car Insurence End -->
<?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH /home/hlabi/Desktop/work/searchadeal/resources/views/car-insurance.blade.php ENDPATH**/ ?>