<?php
/**
 * Template Name: User Registration
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header();
?>
   <div class="row reg-page">
   <div class="container">
                <h5 class="text-center title"> Registration</h5>
                <p class="text-center subtitle">Create an account and you will speed up your purchase, receive emails and get our latest special discounts and offers </p>
           </div>
   <div class="container p-0">
  <div class="row">
    <div class="col-md-6 offset-md-3 p-0">
      <nav class="nav nav-pills nav-fill nav-justified register-navs">
        <a class="nav-item nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Personal</a>
        <a class="nav-item nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Contact</a>
        <a class="nav-item nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Security</a>

      </nav>
      <div class="tab-content" id="pills-tabContent" >
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <div class="row">
            <div class="col-md-6 d-flex">
              <div class="dropdown w-100">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown button
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group w-100">
                 <label class="form-label" for="user-name">Your Name</label>
                 <input id="user-name" class="form-input" type="text" />
                 <small id="user-name" class="form-text ">what is your name?</small>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group w-100">
                <label class="form-label" for="first">Your Last Name</label>
                <input id="first" class="form-input" type="text" />
                <small id="emailHelp" class="form-text">what is your last name?</small>
              </div>
            </div>
          </div>
                     <div class="row">
             <p>
               Your Date of Birth
             </p>
          </div>

            <div class="container">
   <button class="btn btn-secondary" data-toggle="popover" data-container="body" data-placement="bottom" typw="button" data-html="true" id="ageyear"><i class="icon-calendar"></i></button>

  <div id="popover-content-ageyear" class="d-none">
<!--
    <div id="demo" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">

        <div class="carousel-item active">
            <div class="row">
                <div class="col-lg-12 p-0">
            <a class="btn btn-cal-control m-l-0 float-left" href="#demo" data-slide="prev"><i class="icon icon-arrow-left"></i></a>
            <button class="btn btn-cal-control m-r-0 float-right"><i class="icon icon-arrow-right"></i></button>
              </div>
            </div>
         <div class="row">
             <div class="col-lg-12 p-0">
             <div class="carousel-item-inner years-01"></div>
             </div>
         </div>
        </div>
        <div class="carousel-item">
            <div class="row">
                <div class="col-lg-12 p-0">
            <button class="btn btn-cal-control m-l-0 float-left"><i class="icon icon-arrow-left"></i></button>
            <button class="btn btn-cal-control m-r-0 float-right"><i class="icon icon-arrow-right"></i></button>
              </div>
            </div>
         <div class="row">
             <div class="col-lg-12 p-0">
             <div class="carousel-item-inner years-02"></div>
             </div>
         </div>
        </div>
                <div class="carousel-item">
                 <div class="row">
                <div class="col-lg-12 p-0">
            <button class="btn btn-cal-control m-l-0 float-left"><i class="icon icon-arrow-left"></i></button>
            <button class="btn btn-cal-control m-r-0 float-right"><i class="icon icon-arrow-right"></i></button>
              </div>
            </div>
         <div class="row">
             <div class="carousel-item-inner years-03"></div>
         </div>
        </div>
                  <div class="carousel-item">
                 <div class="row">
                <div class="col-lg-12 p-0">
            <button class="btn btn-cal-control m-l-0 float-left"><i class="icon icon-arrow-left"></i></button>
            <button class="btn btn-cal-control m-r-0 float-right"><i class="icon icon-arrow-right"></i></button>
              </div>
            </div>
         <div class="row">
             <div class="carousel-item-inner years-04"></div>
         </div>
        </div>
                  <div class="carousel-item">
                   <div class="row">
                <div class="col-lg-12 p-0">
            <button class="btn btn-cal-control m-l-0 float-left"><i class="icon icon-arrow-left"></i></button>
            <button class="btn btn-cal-control m-r-0 float-right"><i class="icon icon-arrow-right"></i></button>
              </div>
            </div>
         <div class="row">
             <div class="carousel-item-inner years-05"></div>
         </div>
        </div>
                    <div class="carousel-item">
                    <div class="row">
                <div class="col-lg-12 p-0">
            <button class="btn btn-cal-control m-l-0 float-left"><i class="icon icon-arrow-left"></i></button>
            <button class="btn btn-cal-control m-r-0 float-right"><i class="icon icon-arrow-right"></i></button>
              </div>
            </div>
         <div class="row">
             <div class="carousel-item-inner years-06"></div>
         </div>
        </div>
                            <div class="carousel-item">
              <div class="row">
                <div class="col-lg-12 p-0">
            <button class="btn btn-cal-control m-l-0 float-left"><i class="icon icon-arrow-left"></i></button>
            <button class="btn btn-cal-control m-r-0 float-right"><i class="icon icon-arrow-right"></i></button>
              </div>
            </div>
         <div class="row">
             <div class="carousel-item-inner years-07"></div>
         </div>
        </div>



      </div>
      <a class="carousel-control-prev d-nonee" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next d-nonee" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>

-->
    <div class="row" style="background:#e1e1e1;">
                <div class="col-lg-12 p-0">
    <a role="button" class="btn btn-cal-control m-l-0 float-left next"><i class="icon icon-arrow-left"></i></a>
                    <span class="years">0000 - 0000</span>
    <a role="button" class="btn btn-cal-control m-r-0 float-right prev"><i class="icon icon-arrow-right"></i></a>
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
                 </div>
                    <div class="row">
                                  <div class="col-md-4">
              <div class="form-group w-100">
                <label class="form-label" for="first">Your Last Name</label>
                <input id="first" class="form-input" type="text" />
                <small id="emailHelp" class="form-text">what is your last name?</small>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group w-100">
                 <label class="form-label" for="user-name">Your Name</label>
                 <input id="user-name" class="form-input" type="text" />
                 <small id="user-name" class="form-text">what is your name?</small>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group w-100">
                <label class="form-label" for="first">Your Last Name</label>
                <input id="first" class="form-input" type="text" />
                <small id="emailHelp" class="form-text">what is your last name?</small>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
      </div>

    </div>
  </div>
</div>

</div>

<?php
get_footer();
?>
