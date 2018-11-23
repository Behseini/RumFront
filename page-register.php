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
<script>
     let token = "<?php echo $_SESSION['token']; ?>";
</script>
<div class="row registration">
<div class="container">
<h5 class="text-center title"> Registration</h5>
<p class="text-center subtitle">Create an account and you will speed up your purchase, receive emails and get our latest special discounts and offers </p>
<div class="form-result"></div>
<div class="row">
    <div class="col-md-8 offset-md-2 p-0 mt-4">
        <nav class="nav nav-pills nav-fill nav-justified register-navs">
<!--
            <a class="nav-item nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Personal</a>
            <a class="nav-item nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Contact</a>
            <a class="nav-item nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Security</a>
-->
            <a class="nav-item nav-link active">Personal</a>
            <a class="nav-item nav-link" id="pills-profile-tab">Contact</a>
            <a class="nav-item nav-link" id="pills-contact-tab">Security</a>
        </nav>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <form id="reg1" autocomplete="off" novalidate>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group w-100">
                                <label class="form-label" for="user-title">Your Gender</label>
                                <a role="button" class="btn btn-secondary float-right btn-sm btn-pop" data-toggle="popover" data-container="body" data-placement="bottom" typw="button" data-html="true" id="gender"><i class="icon-venus-mars"></i></a>
                                <input id="user-title" class="form-input" type="text" data-dj-validator="text,2,4" required />
                                <div class="input-block" data-toggle="tooltip" data-placement="top" title="Click Next Button to Select Your Title "></div>
                                <!--                 <small id="user-name" class="form-text">what is your gender?</small>-->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group w-100">
                                <label class="form-label" for="user-name">Your Name</label>
                                <input id="user-name" class="form-input" type="text" data-dj-validator="text,3,50" required/>
                                <small id="user-name-label" class="form-text ">what is your name?</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group w-100">
                                <label class="form-label" for="user-last-name">Your Last Name</label>
                                <input id="user-last-name" class="form-input" type="text" data-dj-validator="text,2,50" required />
                                <small id="user-last-name-label" class="form-text">what is your last name?</small>
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
                                        <input id="user-year" class="form-input" type="text" data-dj-validator="text,4,4" required/>
                                        <div class="input-block"></div>
                                        <!--                 <small id="user-name" class="form-text">what is your name?</small>-->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group w-100">
                                        <label class="form-label" for="user-month">Your Birth Month</label>
                                        <a role="button" class="btn btn-secondary float-right btn-sm btn-pop" data-toggle="popover" data-container="#containerElem" data-placement="bottom" typw="button" data-html="true" id="agemonth"><i class="icon-calendar"></i></a>
                                        <input id="user-month" class="form-input" type="text" data-dj-validator="text,3,15" required />
                                        <div class="input-block"></div>
                                        <!--                 <small id="user-name" class="form-text">what is your name?</small>-->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group w-100">
                                        <label class="form-label" for="user-day">Your Birth Day</label>
                                        <a role="button" class="btn btn-secondary float-right btn-sm btn-pop" data-toggle="popover" data-container="body" data-placement="bottom" typw="button" data-html="true" id="ageday"><i class="icon-calendar"></i></a>
                                        <input id="user-day" class="form-input" type="text" data-dj-validator="text,2,2" required />
                                        <div class="input-block"></div>
                                        <!--                 <small id="user-name" class="form-text">what is your name?</small>-->
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="row" id="containerElem"></div>
                    </div>

                            <div id="popover-content-ageyear" class="d-none">
                            <div class="row" style="background:#e1e1e1;">
                                <div class="col-lg-12 p-0">
                                    <a role="button" class="btn btn-cal-control show-on m-l-0 float-left next"><i class="icon icon-chevron-left"></i></a>
                                    <span class="years">0000 - 0000</span>
                                    <a role="button" class="btn btn-cal-control show-on m-r-0 float-right prev"><i class="icon icon-chevron-right"></i></a>
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
                            <a role="button" class="btn btn-popover btn-sm btn-g" data-bg="Mr">Mr</a>
                            <a role="button" class="btn btn-popover btn-sm btn-g" data-bg="Mrs">Mrs</a>
                            <a role="button" class="btn btn-popover btn-sm btn-g" data-bg="Ms">Ms</a>
                            <a role="button" class="btn btn-popover btn-sm btn-g" data-bg="Miss">Miss</a>
                        </div>

                        <div id="popover-content-agemonth" class="d-none">
                            <div>
                                <a role="button" class="btn btn-popover btn-sm btn-m" data-bm="January">January</a>
                                <a role="button" class="btn btn-popover btn-sm btn-m" data-bm="February">February</a>
                                <a role="button" class="btn btn-popover btn-sm btn-m" data-bm="March">March</a>
                                <a role="button" class="btn btn-popover btn-sm btn-m" data-bm="April">April</a>
                                <a role="button" class="btn btn-popover btn-sm btn-m" data-bm="May">May</a>
                                <a role="button" class="btn btn-popover btn-sm btn-m" data-bm="June">June</a>
                                <a role="button" class="btn btn-popover btn-sm btn-m" data-bm="July">July</a>
                                <a role="button" class="btn btn-popover btn-sm btn-m" data-bm="August">August</a>
                                <a role="button" class="btn btn-popover btn-sm btn-m" data-bm="September">September</a>
                                <a role="button" class="btn btn-popover btn-sm btn-m" data-bm="October">October</a>
                                <a role="button" class="btn btn-popover btn-sm btn-m" data-bm="November">November</a>
                                <a role="button" class="btn btn-popover btn-sm btn-m" data-bm="December">December</a>
                            </div>
                        </div>
                        <div id="popover-content-ageday" class="d-none">
                            <a role="button" class="btn btn-popover btn-sm btn-d" data-bd="1">1</a>
                            <a role="button" class="btn btn-popover btn-sm btn-d" data-bd="2">2</a>
                            <a role="button" class="btn btn-popover btn-sm btn-d" data-bd="3">3</a>
                            <a role="button" class="btn btn-popover btn-sm btn-d" data-bd="4">4</a>
                            <a role="button" class="btn btn-popover btn-sm btn-d" data-bd="5">5</a>
                            <a role="button" class="btn btn-popover btn-sm btn-d" data-bd="6">6</a>
                            <a role="button" class="btn btn-popover btn-sm btn-d" data-bd="7">7</a>
                            <a role="button" class="btn btn-popover btn-sm btn-d" data-bd="8">8</a>
                            <a role="button" class="btn btn-popover btn-sm btn-d" data-bd="9">9</a>
                            <a role="button" class="btn btn-popover btn-sm btn-d" data-bd="10">10</a>
                            <a role="button" class="btn btn-popover btn-sm btn-d" data-bd="11">11</a>
                            <a role="button" class="btn btn-popover btn-sm btn-d" data-bd="12">12</a>
                            <a role="button" class="btn btn-popover btn-sm btn-d" data-bd="13">13</a>
                            <a role="button" class="btn btn-popover btn-sm btn-d" data-bd="14">14</a>
                            <a role="button" class="btn btn-popover btn-sm btn-d" data-bd="15">15</a>
                            <a role="button" class="btn btn-popover btn-sm btn-d" data-bd="16">16</a>
                            <a role="button" class="btn btn-popover btn-sm btn-d" data-bd="17">17</a>
                            <a role="button" class="btn btn-popover btn-sm btn-d" data-bd="18">18</a>
                            <a role="button" class="btn btn-popover btn-sm btn-d" data-bd="19">19</a>
                            <a role="button" class="btn btn-popover btn-sm btn-d" data-bd="20">20</a>
                            <a role="button" class="btn btn-popover btn-sm btn-d" data-bd="21">21</a>
                            <a role="button" class="btn btn-popover btn-sm btn-d" data-bd="22">22</a>
                            <a role="button" class="btn btn-popover btn-sm btn-d" data-bd="23">23</a>
                            <a role="button" class="btn btn-popover btn-sm btn-d" data-bd="24">24</a>
                            <a role="button" class="btn btn-popover btn-sm btn-d" data-bd="25">25</a>
                            <a role="button" class="btn btn-popover btn-sm btn-d" data-bd="26">26</a>
                            <a role="button" class="btn btn-popover btn-sm btn-d" data-bd="27">27</a>
                            <a role="button" class="btn btn-popover btn-sm btn-d" data-bd="28">28</a>
                            <a role="button" class="btn btn-popover btn-sm btn-d" data-bd="29">29</a>
                            <a role="button" class="btn btn-popover btn-sm btn-d" data-bd="30">30</a>
                            <a role="button" class="btn btn-popover btn-sm btn-d" data-bd="31">31</a>
                        </div>

                        <div class="row">
                            <div class="col-md-12 p-0 pt-3">
                                <a role="button" class="btn btn-tab-control float-right mr-0" id="reg1-validate"> Next </a>
                            </div>
                        </div>

                </form>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <form id="reg2" autocomplete="off" novalidate>
			   <div class="row">
                    <fieldset>
                        <legend>Email & Phone</legend>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group w-100">
                                    <label class="form-label" for="user-email">Your Email</label>
                                    <input id="user-email" class="form-input" type="email" data-dj-validator="email,*" required />
                                    <small id="user-email-help" class="form-text ">what is your email?</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group w-100">
                                    <label class="form-label" for="user-email-confirm">Confirm Your Email</label>
                                    <input id="user-email-confirm" class="form-input" type="text" data-dj-validator="equal,user-email, your entered email" required/>
                                    <small id="user-email-confirm-help" class="form-text">what is your email again?</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group w-100">
                                    <label class="form-label" for="user-phone">Your Phone</label>
                                    <input id="user-phone" class="form-input" type="email" data-dj-validator="phone,*" required />
                                    <small id="user-phone-help" class="form-text ">what is your phone number?</small>
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
                                    <input id="user-buzz" class="form-input" type="text" data-dj-validator-group="optionals" />
                                    <small id="user-buzz-help" class="form-text ">what is your buzz numebr?</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group w-100">
                                    <label class="form-label" for="user-unit">Unit Number <small> <i> if applicable?</i></small></label>
                                    <input id="user-unit" class="form-input" type="text" data-dj-validator-group="optionals"/>
                                    <small id="user-unit-help" class="form-text">what is your unit number?</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                                       <div class="col-md-6">
                                <div class="form-group w-100">
                                    <label class="form-label" for="user-building">Building Number</label>
                                    <input id="user-building" class="form-input" type="text" data-dj-validator="text,1,12" required/>
                                    <small id="user-building-help" class="form-text">what is your building number?</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group w-100">
                                    <label class="form-label" for="user-street">Street Name</label>
                                    <input id="user-street" class="form-input" type="text" data-dj-validator="text,3,80" required/>
                                    <small id="user-street-help" class="form-text ">what is your street address?</small>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                                                        <div class="col-md-6">
                                <div class="form-group w-100">
                                    <label class="form-label" for="user-city">City Name</label>
                                    <input id="user-city" class="form-input" type="text" data-dj-validator="text,3,50" required/>
                                    <small id="user-city-help" class="form-text">what is your city name?</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group w-100">
                                    <label class="form-label" for="user-postal">Postal Code</label>
                                    <input id="user-postal" class="form-input" type="text" data-dj-validator="text,6,7" required/>
                                    <small id="user-postal-help" class="form-text ">what is your postal code?</small>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="row">

                    <div class="col-md-12 p-0 pt-3">
                        <a role="button" class="btn btn-tab-control float-left mr-0" id="back-pane-0"> Back </a>
                        <a role="button" class="btn btn-tab-control float-right mr-0" id="reg2-validate"> Next </a>

                    </div>
                </div>
				</form>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <form id="reg3" autocomplete="off" novalidate>
                    <div class="row">
                        <fieldset>
                            <legend>Password & Security</legend>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group w-100">
                                        <label class="form-label" for="user-pass">Your Password</label>
                                        <input id="user-pass" class="form-input" type="password" autocomplete="false"  data-dj-validator="pass,*" required/>
                                        <span toggle="#user-pass" class="icon icon-eye-slash field-icon toggle-password"></span>
                                        <small id="user-pass-help" class="form-text ">enter your password?</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group w-100">
                                        <label class="form-label" for="user-pass-confirm">Confirm Your Password</label>
                                        <input id="user-pass-confirm" class="form-input" type="password" autocomplete="false" />
                                        <span toggle="#user-pass-confirm" class="icon icon-eye-slash field-icon toggle-password"></span>
                                        <small id="user-pass-confirm-help" class="form-text">what is your password again?</small>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Stop Spams</legend>
                            <div class="row">
                                <small  class="form-text" style="color:#6c757d; font-size:15px; padding-left:12px; margin-bottom:16px;">Please help us to stop spams by selecting <strong style="font-weight: 500;">Today's Date</strong> from following options</small>
                            </div>
                            <div class="row">
                               <div class="col-md-4">
                                    <div class="captcha-data"></div>
                                </div>
                            </div>
                                                           <div class="row">
                    <div class="col-md-12 p-0 pt-3">
                        <a role="button" class="btn btn-form-confirm float-right mr-0 mt-2 mb-2" id="confirm-reg"> Confirm & Submit </a>
                    </div>
                </div>
                        </fieldset>
                        <div class="modal fade" id="registeration-data" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-sm">
  <tbody>
            <tr class="table-secondary">
          <th scope="row">Your Personal Information</th><td></td>
      </tr>
    <tr>
      <th scope="row">Title</th>
      <td>Mr.</td>
    </tr>
    <tr>
      <th scope="row">Name</th>
      <td>Jacob</td>
    </tr>
     <tr>
      <th scope="row">Last Name</th>
      <td>Jacob</td>
    </tr>
     <tr>
      <th scope="row">Your Birthday</th>
      <td>Jacob</td>
    </tr>
     <tr>
      <th scope="row">Your Email</th>
      <td>Behseuni@gmail.com</td>
    </tr>
      <tr class="table-secondary">
          <th scope="row">Your Address</th><td></td>
      </tr>
     <tr>
      <th scope="row">Buzz Number</th>
      <td>1224</td>
    </tr>
           <tr>
      <th scope="row">Building Number</th>
      <td>1224</td>
    </tr>
           <tr>
      <th scope="row">Street Name</th>
      <td>1224</td>
    </tr>
           <tr>
      <th scope="row">City</th>
      <td>1224</td>
    </tr>
                 <tr>
      <th scope="row">Postal Code</th>
      <td>1224</td>
    </tr>
  </tbody>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="submit-registration">Register</button>
      </div>
    </div>
  </div>
</div>
                                        <div class="row">
                    <div class="col-md-12 p-0 pt-3">
                        <a role="button" class="btn btn-tab-control float-left mr-0" id="back-pane-1"> Back </a>
                    </div>
                </div>
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
