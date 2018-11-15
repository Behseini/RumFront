<?php
/**
* Template Name: User Registration
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
session_start();
$token = md5(rand(1000,9999));
$_SESSION['token'] = $token;
get_header();
?>
    <div class="row reg-page">
        <div class="container">
            <h5 class="text-center title"> Registration</h5>
            <p class="text-center subtitle">Create an account and you will speed up your purchase, receive emails and get our latest special discounts and offers </p>
        </div>
        <div class="container p-0">
            <div class="row">
                <div class="col-md-8 offset-md-2 p-0">
                    <nav class="nav nav-pills nav-fill nav-justified register-navs">
                        <a class="nav-item nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Personal</a>
                        <a class="nav-item nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Contact</a>
                        <a class="nav-item nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Security</a>

                    </nav>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <form id="reg1">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group w-100">
                                        <label class="form-label" for="user-title">Your Gender</label>
                                        <a role="button" class="btn btn-secondary float-right btn-sm btn-pop" data-toggle="popover" data-container="body" data-placement="bottom" typw="button" data-html="true" id="gender"><i class="icon-venus-mars"></i></a>
                                        <input id="user-title" class="form-input" type="text" data-dj-validator="text,3,4" required />
                                        <div class="input-block"></div>
                                        <!--                 <small id="user-name" class="form-text">what is your gender?</small>-->
                                    </div>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group w-100">
                                        <label class="form-label" for="user-name">Your Name</label>
                                        <input id="user-name" class="form-input" type="text" data-dj-validator="text,3,50" required/>
                                        <small id="user-name" class="form-text ">what is your name?</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group w-100">
                                        <label class="form-label" for="first">Your Last Name</label>
                                        <input id="first" class="form-input" type="text" data-dj-validator="text,3,50" required />
                                        <small id="emailHelp" class="form-text">what is your last name?</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <fieldset>
                                    <legend>Date of Birth</legend>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group w-100">
                                                <label class="form-label" for="user-year">Your Birth Year</label>
                                                <a role="button" class="btn btn-secondary float-right btn-sm btn-pop" data-toggle="popover" data-container="body" data-placement="bottom" typw="button" data-html="true" id="ageyear"><i class="icon-calendar"></i></a>
                                                <input id="user-year" class="form-input" type="text" readonly />
                                                <div class="input-block"></div>
                                                <!--                 <small id="user-name" class="form-text">what is your name?</small>-->
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group w-100">
                                                <label class="form-label" for="user-month">Your Birth Month</label>
                                                <a role="button" class="btn btn-secondary float-right btn-sm btn-pop" data-toggle="popover" data-container="#containerElem" data-placement="bottom" typw="button" data-html="true" id="agemonth"><i class="icon-calendar"></i></a>
                                                <input id="user-month" class="form-input" type="text" readonly />
                                                <div class="input-block"></div>
                                                <!--                 <small id="user-name" class="form-text">what is your name?</small>-->
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group w-100">
                                                <label class="form-label" for="user-day">Your Birth Day</label>
                                                <a role="button" class="btn btn-secondary float-right btn-sm btn-pop" data-toggle="popover" data-container="body" data-placement="bottom" typw="button" data-html="true" id="ageday"><i class="icon-calendar"></i></a>
                                                <input id="user-day" class="form-input" type="text" readonly />
                                                <div class="input-block"></div>
                                                <!--                 <small id="user-name" class="form-text">what is your name?</small>-->
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="row" id="containerElem"></div>
                            </div>

                            <div class="container">


                                <div id="popover-content-ageyear" class="d-none">
                                    <div class="row" style="background:#e1e1e1;">
                                        <div class="col-lg-12 p-0">
                                            <a role="button" class="btn btn-cal-control m-l-0 float-left next"><i class="icon icon-chevron-left"></i></a>
                                            <span class="years">0000 - 0000</span>
                                            <a role="button" class="btn btn-cal-control m-r-0 float-right prev"><i class="icon icon-chevron-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="content-slider">
                                        <div class="contents" data-index="7"></div>
                                        <div class="contents" data-index="6"></div>
                                        <div class="contents" data-index="5"></div>
                                        <div class="contents" data-index="4"></div>
                                        <div class="contents" data-index="3"></div>
                                        <div class="contents" data-index="2"></div>
                                        <div class="contents" data-index="1"></div>
                                    </div>
                                </div>

                                <div id="popover-content-gender" class="d-none">
                                    <a role="button" class="btn btn-secondary btn-sm btn-g" data-bg="Mr">Mr</a>
                                    <a role="button" class="btn btn-secondary btn-sm btn-g" data-bg="Mrs">Mrs</a>
                                    <a role="button" class="btn btn-secondary btn-sm btn-g" data-bg="Ms">Ms</a>
                                    <a role="button" class="btn btn-secondary btn-sm btn-g" data-bg="Miss">Miss</a>
                                </div>

                                <div id="popover-content-agemonth" class="d-none">
                                    <div>
                                        <a role="button" class="btn btn-secondary btn-sm btn-m" data-bm="January">January</a>
                                        <a role="button" class="btn btn-secondary btn-sm btn-m" data-bm="February">February</a>
                                        <a role="button" class="btn btn-secondary btn-sm btn-m" data-bm="March">March</a>
                                        <a role="button" class="btn btn-secondary btn-sm btn-m" data-bm="April">April</a>
                                        <a role="button" class="btn btn-secondary btn-sm btn-m" data-bm="May">May</a>
                                        <a role="button" class="btn btn-secondary btn-sm btn-m" data-bm="June">June</a>
                                        <a role="button" class="btn btn-secondary btn-sm btn-m" data-bm="July">July</a>
                                        <a role="button" class="btn btn-secondary btn-sm btn-m" data-bm="August">August</a>
                                        <a role="button" class="btn btn-secondary btn-sm btn-m" data-bm="September">September</a>
                                        <a role="button" class="btn btn-secondary btn-sm btn-m" data-bm="October">October</a>
                                        <a role="button" class="btn btn-secondary btn-sm btn-m" data-bm="November">November</a>
                                        <a role="button" class="btn btn-secondary btn-sm btn-m" data-bm="December">December</a>
                                    </div>
                                </div>
                                <div id="popover-content-ageday" class="d-none">
                                    <a role="button" class="btn btn-secondary btn-sm btn-d" data-bd="1">1</a>
                                    <a role="button" class="btn btn-secondary btn-sm btn-d" data-bd="2">2</a>
                                    <a role="button" class="btn btn-secondary btn-sm btn-d" data-bd="3">3</a>
                                    <a role="button" class="btn btn-secondary btn-sm btn-d" data-bd="4">4</a>
                                    <a role="button" class="btn btn-secondary btn-sm btn-d" data-bd="5">5</a>
                                    <a role="button" class="btn btn-secondary btn-sm btn-d" data-bd="6">6</a>
                                    <a role="button" class="btn btn-secondary btn-sm btn-d" data-bd="7">7</a>
                                    <a role="button" class="btn btn-secondary btn-sm btn-d" data-bd="8">8</a>
                                    <a role="button" class="btn btn-secondary btn-sm btn-d" data-bd="9">9</a>
                                    <a role="button" class="btn btn-secondary btn-sm btn-d" data-bd="10">10</a>
                                    <a role="button" class="btn btn-secondary btn-sm btn-d" data-bd="11">11</a>
                                    <a role="button" class="btn btn-secondary btn-sm btn-d" data-bd="12">12</a>
                                    <a role="button" class="btn btn-secondary btn-sm btn-d" data-bd="13">13</a>
                                    <a role="button" class="btn btn-secondary btn-sm btn-d" data-bd="14">14</a>
                                    <a role="button" class="btn btn-secondary btn-sm btn-d" data-bd="15">15</a>
                                    <a role="button" class="btn btn-secondary btn-sm btn-d" data-bd="16">16</a>
                                    <a role="button" class="btn btn-secondary btn-sm btn-d" data-bd="17">17</a>
                                    <a role="button" class="btn btn-secondary btn-sm btn-d" data-bd="18">18</a>
                                    <a role="button" class="btn btn-secondary btn-sm btn-d" data-bd="19">19</a>
                                    <a role="button" class="btn btn-secondary btn-sm btn-d" data-bd="20">20</a>
                                    <a role="button" class="btn btn-secondary btn-sm btn-d" data-bd="21">21</a>
                                    <a role="button" class="btn btn-secondary btn-sm btn-d" data-bd="22">22</a>
                                    <a role="button" class="btn btn-secondary btn-sm btn-d" data-bd="23">23</a>
                                    <a role="button" class="btn btn-secondary btn-sm btn-d" data-bd="24">24</a>
                                    <a role="button" class="btn btn-secondary btn-sm btn-d" data-bd="25">25</a>
                                    <a role="button" class="btn btn-secondary btn-sm btn-d" data-bd="26">26</a>
                                    <a role="button" class="btn btn-secondary btn-sm btn-d" data-bd="27">27</a>
                                    <a role="button" class="btn btn-secondary btn-sm btn-d" data-bd="28">28</a>
                                    <a role="button" class="btn btn-secondary btn-sm btn-d" data-bd="29">29</a>
                                    <a role="button" class="btn btn-secondary btn-sm btn-d" data-bd="30">30</a>
                                    <a role="button" class="btn btn-secondary btn-sm btn-d" data-bd="31">31</a>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 p-0 pt-3">
                                        <button role="button" class="btn btn-tab-control float-right mr-0" id="reg1-validate"> Next </button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="row">
                                <fieldset>
                                    <legend>Email Address</legend>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group w-100">
                                                <label class="form-label" for="user-email">Your Email</label>
                                                <input id="user-email" class="form-input" type="text" />
                                                <small id="user-email-help" class="form-text ">what is your email?</small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group w-100">
                                                <label class="form-label" for="user-email-confirm">Confirm Your Email</label>
                                                <input id="user-email-confirm" class="form-input" type="text" />
                                                <small id="user-email-confirm-help" class="form-text">what is your email again?</small>
                                            </div>
                                        </div>

                                    </div>
                                </fieldset>
                            </div>
                            <div class="row">
                                <fieldset>
                                    <legend>Mailing Address</legend>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group w-100">
                                                <label class="form-label" for="user-buzz">Buzz Number<small> <i> if applicable?</i></small></label>
                                                <input id="user-buzz" class="form-input" type="text" />
                                                <small id="user-buzz-help" class="form-text ">what is your buzz numebr?</small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group w-100">
                                                <label class="form-label" for="user-building">Building Number</label>
                                                <input id="user-building" class="form-input" type="text" />
                                                <small id="user-building-help" class="form-text">what is your building number?</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group w-100">
                                                <label class="form-label" for="user-street">Street Name</label>
                                                <input id="user-street" class="form-input" type="text" />
                                                <small id="user-street-help" class="form-text ">what is your street address?</small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group w-100">
                                                <label class="form-label" for="user-city">City Name</label>
                                                <input id="user-city" class="form-input" type="text" />
                                                <small id="user-city-help" class="form-text">what is your city name?</small>
                                            </div>
                                        </div>
                                    </div>
                      <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group w-100">
                                                <label class="form-label" for="user-postal">Postal Code</label>
                                                <input id="user-postal" class="form-input" type="text" />
                                                <small id="user-postal-help" class="form-text ">what is your postal code?</small>
                                            </div>
                                        </div>
                                     </div>
                                </fieldset>

                            </div>
                            <div class="row">
                                <div class="col-md-12 p-0 pt-3">
                                    <button role="button" class="btn btn-tab-control float-left mr-0 disabled"> Next </button>
                                    <button role="button" class="btn btn-tab-control float-right mr-0 disabled"> Next </button>
                                </div>
                            </div>
                        </div>



                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <form autocomplete="off" >
                                                    <div class="row">
                                <fieldset>
                                    <legend>Password & Security</legend>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group w-100">
                                                <label class="form-label" for="user-pass">Your Password</label>
                                                <input id="user-pass" class="form-input" type="password" autocomplete="false"/>
                                                <span toggle="#user-pass" class="icon icon-eye-f field-icon toggle-password"></span>
                                                <small id="user-pass-help" class="form-text ">enter your password?</small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group w-100">
                                                <label class="form-label" for="user-pass-confirm">Confirm Your Password</label>
                                                <input id="user-pass-confirm" class="form-input" type="password" autocomplete="false"/>
                                                <span toggle="#user-pass-confirm" class="icon icon-eye-f field-icon toggle-password"></span>
                                                <small id="user-pass-confirm-help" class="form-text">what is your password again?</small>
                                            </div>
                                        </div>

                                    </div>
                                </fieldset>
                            </div>

                            </form>


                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <?php
get_footer();
?>
