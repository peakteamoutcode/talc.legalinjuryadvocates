@extends('1')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div>
                <div class="row">
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 visible-xs-block" style="padding:2% 2% 0 2%;"><img src="{{ getenv('COMPANY_WIDE_LOGO_URL') }}">
                        <div class="cta-question" style="margin-bottom:-25px;"><img src="/layouts/1/sm/img/ribbonOC3-sm2.8085f966f224.png"  align="left"><h2 style="margin-top:10px;font-size: 20px; font-weight:100;line-height: 22px;c">Were you harmed by dangerous <span style="font-weight:bold;">talcum powder</span>?</h2>
                            <h2 style="color:#00a776;font-size: 14px;line-height:16px; margin-top:5px;">Finding out if you are eligible for a large settlement for your Ovarian Cancer claim is <span>free, fast and easy!</span></h2>
                            <div class="visible-md-block visible-lg-block">
                                <div class="bullets">
                                    <ul>
                                        <li>If you have been harmed by talcum powder <span style="color:#00a776;"><i>we can help!</i></span></li>
                                        <li><span style="color:#00a776;"><i>Don't Delay!</i></span> There may be a limited time to file your claim! Get the information you need and the justice you deserve!</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-1 visible-sm-block visible-md-block visible-lg-block"></div>
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 visible-sm-block visible-md-block visible-lg-block" style="padding:2%;"><img src="{{ getenv('COMPANY_WIDE_LOGO_URL') }}">
                        <div class="cta-question"><img src="/layouts/1/sm/img/ribbonOC.b8a8c23ce608.png"  align="left"><h2 style="margin-top:40px;font-size: 3em; font-weight:100;line-height: 1em;">Were you harmed by dangerous <span style=";font-weight:bold;">talcum powder</span>?<br></h2>
                            <h2 style="color:#00a776;font-size: 2em;line-height:1em">You may be entitled to a financial award!!</h2>
                            <div class="visible-md-block visible-lg-block">
                                <div class="bullets">
                                    <ul>
                                        <li>If you have been harmed by talcum powder <span style="color:#00a776;"><i>we can help!</i></span></li>
                                        <li><span style="color:#00a776;"><i>Don't Delay!</i></span> There may be a limited time to file your claim! Get the information you need and the justice you deserve!</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                        <div class="lead-capture">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background: rgba(255,255,255,0.8); border-radius: 4px;margin-top:15px;">
                                    <div class="head text-center visible-xs-block">
                                        <h4 style="font-size: 18px;color:#032c62";>Free Claim Eligibility Review</h4>
                                    </div>
                                    <div class="head text-center visible-sm-block visible-md-block visible-lg-block">
                                        <h4 style="font-size: 30px;color:#032c62";>Free Claim Eligibility Review</h4>

                                    </div>
                                    <form name="basic-form" id="basic-form" class="" action="{{ route('1.post-lead') }}" method="post" novalidate="novalidate">

                                        @csrf

                                        <input type="hidden" name="req_id" value="{{ (isset($_GET['req_id'])) ? $_GET['req_id'] : '' }}">
                                        <input type="hidden" name="ip_address" value="{{ (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) ? $_SERVER['HTTP_CF_CONNECTING_IP'] : $_SERVER['REMOTE_ADDR'] }}">

                                        <input type="hidden" name="source" value="{{ isset($_GET['source']) ? $_GET['source'] : '' }}">
                                        <input type="hidden" name="s1" value="{{ isset($_GET['s1']) ? $_GET['s1'] : '' }}">
                                        <input type="hidden" name="s2" value="{{ isset($_GET['s2']) ? $_GET['s2'] : '' }}">
                                        <input type="hidden" name="s3" value="{{ isset($_GET['s3']) ? $_GET['s3'] : '' }}">
                                        <input type="hidden" name="s4" value="{{ isset($_GET['s4']) ? $_GET['s4'] : '' }}">
                                        <input type="hidden" name="s5" value="{{ isset($_GET['s5']) ? $_GET['s5'] : '' }}">

                                        <input type="hidden" name="diagnosed_when" value="">
                                        <input type="hidden" name="under_65" value="">
                                        <input type="hidden" name="over_4_years" value="">
                                        <input type="hidden" name="has_attorney" value="">

                                        <div id="slide1">
                                            <div class="visible-xs-block">
                                                <p>When were you or a loved one diagnosed with Ovarian Cancer?</p>
                                            </div>
                                            <div class="visible-sm-block visible-md-block visible-lg-block">
                                                <p>When were you or a loved one diagnosed with Ovarian Cancer?</p>
                                                <p>Finding out if you are eligible for a large settlement for your Ovarian Cancer claim is <span>free, fast and easy!</span></p></div>
                                            <button type="button" id="after_2003" class="form-btn form-btn-yes">2003 - 2019</button>
                                            <button type="button" id="before_2003" class="form-btn form-btn-yes">BEFORE 2003</button>
                                            <button type="button" id="not_diagnosed" class="form-btn form-btn-no">Not Diagnosed</button>
                                        </div>
                                        <div id="slide2" class="hidden">
                                            <p>Were you under the age of 65 when diagnosed?</p>
                                            <button type="button" id="under_65_yes" class="form-btn form-btn-yes">YES - CONTINUE</button>
                                            <button type="button" id="under_65_no" class="form-btn form-btn-no">No</button>
                                        </div>
                                        <div id="slide3" class="hidden">
                                            <p>Was talc powder used for more than 4 years?</p>
                                            <button type="button" id="yes_talc" class="form-btn form-btn-yes">YES - CONTINUE</button>
                                            <button type="button" id="no_talc" class="form-btn form-btn-no">No</button>
                                        </div>
                                        <div id="slide4" class="hidden">
                                            <p>Do you have a lawyer for your claim?</p>
                                            <button type="button" id="lawyer_yes" class="form-btn form-btn-yes">Yes</button>
                                            <button type="button" id="lawyer_no" class="form-btn form-btn-no">No</button>
                                        </div>
                                        <div id="slide5" class="hidden">
                                            <div class="grouping">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <input type="text" class="big" name="first_name" id="first_name" placeholder="First Name">
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <input type="text" class="big" name="last_name" id="last_name" placeholder="Last Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grouping">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <input type="text" class="big phone_us" name="phone_cell" id="phone_cell" placeholder="Phone" maxlength="14">
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <input type="text" class="big phone_us" name="phone_home" id="phone_home" placeholder="Confirm Phone" maxlength="14">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grouping">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <input type="text" class="big zip_code" name="zip_code" id="zip_code" placeholder="Zip" maxlength="5">
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <input type="email" class="big" name="email_address" id="email_address" placeholder="Email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grouping">
                                                <textarea class="" name="notes" id="notes" rows="2" placeholder="Help us better understand by providing more details."></textarea>
                                            </div>
                                            <div class="grouping">
                                                <label class="checkbox-inline">
                                                    <div class="tcpa">By checking this box, you agree to our <a href="https://legalinjuryadvocates.com/terms"  target="_blank">Terms of Use</a> and that The Justice Advocates, a third party verification service and up to 3 law firms you are matched with may contact you about their services at your above phone number(s) even if it is on a National or State Do Not Call List.  Calls/texts may employ automated dialing technology and prerecorded/artificial voice messages.  I understand my consent is not a condition of any purchase.</div>

                                                </label>
                                            </div>
                                            <div class="grouping">
                                                <button type="submit" id="" class="form-btn form-btn-yes">Review My Claim!</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="visible-xs-block">
        <div class="bullets">
            <ul>
                <li>If you have been harmed by talcum powder <span style="color:#00a776;"><i>we can help!</i></span></li>
                <li><span style="color:#00a776;"><i>Don't Delay!</i></span> There may be a limited time to file your claim! Get the information you need and the justice you deserve!</li>
            </ul>
        </div>
    </div>

    <div class="row disclaimers text-center">
        <div class="col-xs-12">
            <hr>
            <p style="color:#444;">{{ __('lander.this_is_an_advertisement') }}</p>
        </div>
    </div>
@endsection

@section('body_extra')

    <script>
        $(document).ready(function () {

            $('#slide1 .form-btn').on('click', function () {
                $('input[name="diagnosed_when"]').val(this.innerText);
            });

            $('#slide2 .form-btn').on('click', function () {
                var answer = this.innerText.toLowerCase().indexOf('yes') !== -1 ? 'true' : 'false';
                $('input[name="under_65"]').val(answer);
            });

            $('#slide3 .form-btn').on('click', function () {
                var answer = this.innerText.toLowerCase().indexOf('yes') !== -1 ? 'true' : 'false';
                $('input[name="over_4_years"]').val(answer);
            });

            $('#slide4 .form-btn').on('click', function () {
                var answer = this.innerText.toLowerCase().indexOf('yes') !== -1 ? 'true' : 'false';
                $('input[name="has_attorney"]').val(answer);
            });

        });
    </script>
@endsection
