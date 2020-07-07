@extends('3')

@section('content')
    <div class="section-header">
        <a href="#">
            <img src="/layouts/3/images/logo.png" alt="">
        </a>
    </div>
    <div class="section-row">
        <div class="section-info">
            <div class="si-title">
                <div class="si-img">
                    <img src="/layouts/3/images/ovarian.png" alt="">
                </div>
                <div class="si-text">
                    <h2 style="margin-top:40px;font-size: 3em; font-weight:100;line-height: 1em;">Were you harmed by dangerous <span style="font-weight:bold;">talcum powder</span>?<br></h2>
                    <h2 style="color:#00a776;font-size: 2em;line-height:1em">You may be entitled to a financial award!!</h2>
                </div>
            </div>
            <div class="si-lists">
                <ul>
                    <li>If you have been harmed by talcum powder <span>we can help!</span></li>
                    <li><span>Don't Delay!</span> There may be a limited time to file your claim! Get the information you need and the justice you deserve!</li>
                </ul>
            </div>
        </div>
        <div class="section-form">
            <h4 style="font-size: 30px; color:#032c62;">Free Claim Eligibility Review</h4>
            <form class="claim-form">
                <div class="form-slide slide-one">
                    <p>When were you or a loved one diagnosed with Ovarian Cancer?</p>
                    <p>Finding out if you are eligible for a large settlement for your Ovarian Cancer claim is free, fast and easy!</p>
                    <!-- <div class="inputGroup">
                        <input id="radio1" name="year" value="2003" type="radio">
                        <label for="radio1">2003 - 2019</label>
                    </div>
                    <div class="inputGroup">
                        <input id="radio2" name="year" value="before" type="radio">
                        <label for="radio2">BEFORE 2003</label>
                    </div>
                    <div class="inputGroup">
                        <input id="radio3" name="year" value="not" type="radio">
                        <label for="radio3">Not Diagnosed</label>
                    </div> -->
                    <button type="button" id="after_2003" class="form-btn form-btn-yes">2003 - 2019</button>
                    <button type="button" id="before_2003" class="form-btn form-btn-yes">BEFORE 2003</button>
                    <button type="button" id="not_diagnosed" class="form-btn form-btn-no">Not Diagnosed</button>
                </div>
                <div class="form-slide slide-two">
                    <h6>Question 1 of 4</h6>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">25%</div>
                    </div>
                    <p>Were you under the age of 65 when diagnosed?</p>
                    <button type="button" id="yes_cont" class="form-btn form-btn-yes">YES - CONTINUE</button>
                    <button type="button" id="no_65" class="form-btn form-btn-no error-no">No</button>
                    <p class="error-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                </div>
                <div class="form-slide slide-three">
                    <h6>Question 2 of 4</h6>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                    </div>
                    <p>Was talc powder used for more than 4 years?</p>
                    <!-- <div class="inputGroup">
                        <input id="radio6" name="powder" value="yes" type="radio">
                        <label for="radio6">YES - CONTINUE</label>
                    </div>
                    <div class="inputGroup">
                        <input id="radio7" name="powder" value="no" type="radio">
                        <label class="error-no" for="radio7">No</label>
                    </div> -->
                    <button type="button" id="years_yes" class="form-btn form-btn-yes">YES - CONTINUE</button>
                    <button type="button" id="years_no" class="form-btn form-btn-no error-no">No</button>
                    <p class="error-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                </div>
                <div class="form-slide slide-four">
                    <h6>Question 3 of 4</h6>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">75%</div>
                    </div>
                    <p>Do you have a lawyer for your claim?</p>
                    <!-- <div class="inputGroup">
                        <input id="radio8" name="claim" value="yes" type="radio">
                        <label for="radio8">YES</label>
                    </div>
                    <div class="inputGroup">
                        <input id="radio9" name="claim" value="no" type="radio">
                        <label class="error-no" for="radio9">No</label>
                    </div> -->
                    <button type="button" id="claim_yes" class="form-btn form-btn-yes">YES</button>
                    <button type="button" id="claim_no" class="form-btn form-btn-no error-no">No</button>
                    <p class="error-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                </div>
                <div class="form-slide slide-five">
                    <h6>Question 4 of 4</h6>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                    </div>
                    <div class="sf-wrapper">
                        <div class="form-group">
                            <input type="text" class="big" name="first_name" id="first_name" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="big" name="last_name" id="last_name" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="big phone_us" name="phone_cell" id="phone_cell" placeholder="Phone" maxlength="14">
                        </div>
                        <div class="form-group">
                            <input type="text" class="big phone_us" name="phone_home" id="phone_home" placeholder="Confirm Phone" maxlength="14">
                        </div>
                        <div class="form-group">
                            <input type="text" class="big zip_code" name="zip_code" id="zip_code" placeholder="Zip" maxlength="5">
                        </div>
                        <div class="form-group">
                            <input type="email" class="big" name="email_address" id="email_address" placeholder="Email">
                        </div>
                        <div class="form-group w-full">
                            <textarea class="" name="notes" id="notes" rows="2" placeholder="Help us better understand by providing more details."></textarea>
                        </div>
                        <p>By checking this box, you agree to our Terms of Use and that The Justice Advocates, a third party verification service and up to 3 law firms you are matched with may contact you about their services at your above phone number(s) even if it is on a National or State Do Not Call List. Calls/texts may employ automated dialing technology and prerecorded/artificial voice messages. I understand my consent is not a condition of any purchase.</p>
                        <button type="button" id="after_2003" class="form-btn form-btn-yes">Review My Claim!</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
