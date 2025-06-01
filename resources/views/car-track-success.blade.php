@include('partials.header')

<div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
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

              <div class="col-lg-12 wow fadeIn hlabi-form" data-wow-delay="0.5s">
                <div class="bg-light rounded p-5">
                  <h4 class="mb-4">Request A Quote</h4>
                  <form action="{{ route('car.insure.submit') }}" method="post">
                    @csrf
                    <input type="hidden" name="form_source" value="car_track_success">

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
                            <option value="Female">Female</option>
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
                                    href="{{ route('terms') }}" class="text-blue-600 hover:underline">terms and conditions</a></label>
                      </div>
                      <div class="col-12">
                        <button class="btn btn-primary py-3 px-5" type="submit">
                          Get Car Insurance
                        </button>
                      </div>
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
