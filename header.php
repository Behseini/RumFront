<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href='<?php echo get_bloginfo(' template_directory ');?>/img/favicon.ico'>
    <title>
        <?php
global $page, $paged;
wp_title( '|', true, 'right' );
bloginfo( 'name' );
$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) )
echo " | $site_description";
if ( $paged >= 2 || $page >= 2 )
echo ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );
?>
    </title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600|Open+Sans:300,400,600|Roboto:100,300,400,500" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
     <div class="page-container">
    <div id="signin-sidenav" class="sidenav">
        <div class="sidebar-wrap">
        <div class="side-nav-header">
            <div class="container clearfix">
                <h5 class="float-left"><i class="icon icon-login"></i> Sign in</h5>
                <h5 class="float-right closebtn">Close</h5>
            </div>
           <hr /> 
        </div>
        <div class="side-nav-body">
          <div class="dropdown-box">
                            <div class="col-md-12 p-0 m-0">
                                <p class="d-block text-center">Sign in</p>
                            </div>
                            <div class="col-md-12 p-0 m-0 clearfix">
                                <ul class="nav nav-pills d-none" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-forget-tab" data-toggle="pill" href="#pills-forget" role="tab" aria-controls="pills-forget" aria-selected="false">forget</a>
                                    </li>
                                </ul>
                                <div class="tab-content m-0" id="pills-tabContent">

                                    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">

                                        <div class="col-md-12 p-0 m-0">
                                            <form id="dropdown-login" autocomplete="off">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" aria-label="" placeholder="Your Email" data-dj-validator="email,*" required />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="icon-envelope"></i></span>
                                                    </div>
                                                </div>
                                                <div class="v-msg"></div>
                                                <div class="input-group">
                                                    <input type="password" class="form-control" aria-label="" placeholder="Your Password" data-dj-validator="word,4,8" autocomplete="new-password" required />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="icon-lock"></i></span>
                                                    </div>
                                                </div>
                                                <div class="v-msg"></div>
                                            </form>
                                        </div>
                                        <div class="col-md-12 p-0 m-0">
                                            <button type="button" id="validate-dropdown-login" class="btn btn-block btn-sm rounded-0 btn-sidenav">Login</button>
                                        </div>
                                        <div class="col-md-12 p-0 m-0">
                                            <a class="text-right float-right btn-form-tabs btn-forgetpassword">Forget Password?</a>
                                        </div>



                                    </div>

                                    <div class="tab-pane fade" id="pills-forget" role="tabpanel" aria-labelledby="pills-forget-tab">
                                        <div class="col-md-12 p-0 m-0">
                                         <form id="dropdown-password-email" autocomplete="off">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" aria-label="" placeholder="Your Email" data-dj-validator="email,*" required />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="icon-envelope"></i></span>
                                                    </div>
                                                </div>
                                                <div class="v-msg"></div>

                                            </form>
                                        </div>

                                         <div class="col-md-12 p-0 m-0">
                                             <button id="validate-password-email" class="btn btn-block btn-sm rounded-0 btn-sidenav">Retrive Password</button>
                                         </div>
                                        <div class="col-md-12 p-0 m-0">
                                            <a class="float-right text-right btn-form-tabs btn-backlogin">Back to login?</a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                                                         

                        </div>
              
                </div>

       
            <div class="side-nav-footer">
                  <div class="dropdown-box">
                <div class="col-md-12 p-0 m-0">
                <p class="d-block text-center" style="margin-top:20px;">Not a User?</p>
                </div>
                <div class="col-md-12 p-0 m-0">
                <a class="btn btn-block btn-sm rounded-0 btn-sidenav" href="#" role="button">Register</a>
                </div>
                                   <div class="col-md-12 p-0 m-0">
                <a class="btn btn-block btn-sm rounded-0 btn-sidenav closebtn" href="#" role="button">Continue Shopping</a>
                </div>
                </div>
            </div>


    </div>
    </div>
    <div id="help-sidenav" class="sidenav">
        <div class="sidebar-wrap">
        <div class="side-nav-header">
            <div class="container clearfix">
                <h5 class="float-left"><i class="icon icon-support"></i> Help</h5>
                <h5 class="float-right closebtn">Close</h5>
            </div>
           <hr /> 
        </div>
        <div class="side-nav-body">
          <div class="dropdown-box">
                            <div class="col-md-12 p-0 m-0">
                                <p class="d-block text-center">Support</p>
                            </div>
                                           <div class="col-md-12 p-0 m-0">
                <a class="btn btn-block btn-sm rounded-0 btn-sidenav" href="#" role="button"><i class="icon icon-question"></i> FAQ</a>
                </div>
      
                                                 <div class="col-md-12 p-0 m-0">
                <a class="btn btn-block btn-sm rounded-0 btn-sidenav" href="#" role="button"><i class="icon-umbrella"></i>  Insurance</a>
                </div>
                                                 <div class="col-md-12 p-0 m-0">
                <a class="btn btn-block btn-sm rounded-0 btn-sidenav" href="#" role="button"><i class="icon-present"></i> Promotions</a>
                </div>
                                                         <div class="col-md-12 p-0 m-0">
                <a class="btn btn-block btn-sm rounded-0 btn-sidenav" href="#" role="button"><i class="icon-book-open"></i> Our Policies</a>
                </div>
               <div class="col-md-12 p-0 pt-3 m-0">
                                <p class="d-block text-center">Contact Us</p>
                            </div>
                                           <div class="col-md-12 p-0 m-0">
                <a class="btn btn-block btn-sm rounded-0 btn-sidenav" href="#" role="button"><i class="icon icon-call-in"></i> Call Us</a>
                </div>
      
                                                 <div class="col-md-12 p-0 m-0">
                <a class="btn btn-block btn-sm rounded-0 btn-sidenav" href="#" role="button"><i class="icon  icon-speech"></i>  Live Chat</a>
                </div>
                                                 <div class="col-md-12 p-0 m-0">
                <a class="btn btn-block btn-sm rounded-0 btn-sidenav" href="#" role="button"><i class="icon icon-paper-plane"></i> Send Us A Message</a>
                </div>
                        </div>
              
                </div>

       
            <div class="side-nav-footer">
         <div class="dropdown-box">


               <div class="col-md-12 p-0 pt-3 m-0">
                                <p class="d-block text-center">Registered Users Panel</p>
                            </div>
                                                             <div class="col-md-12 p-0 m-0">
                <a class="btn btn-block btn-sm rounded-0 btn-sidenav" href="#" role="button"><i class="icon icon-loop"></i>  Your History</a>
                </div>
                                           <div class="col-md-12 p-0 m-0">
                <a class="btn btn-block btn-sm rounded-0 btn-sidenav" href="#" role="button"><i class="icon icon-magnifier-add"></i> Track Your Order</a>
                </div>
      
 
                                                 <div class="col-md-12 p-0 m-0">
                <a class="btn btn-block btn-sm rounded-0 btn-sidenav" href="#" role="button"><i class="icon icon-trophy"></i> Loyalty Promotion</a>
                </div>
                        </div>
              
            </div>


    </div>
    </div>
    <div id="cart-sidenav" class="sidenav">
        <div class="sidebar-wrap">
        <div class="side-nav-header">
            <div class="container clearfix">
                <h5 class="float-left"><i class="icon icon-bag"></i> Cart</h5>
                <h5 class="float-right closebtn">Close</h5>
            </div>
           <hr /> 
        </div>
        <div class="side-nav-body">
          <div class="dropdown-box">
                            <div class="col-md-12 p-0 m-0">
                                <p class="d-block text-center">Support</p>
                            </div>
                                           <div class="col-md-12 p-0 m-0">
                <a class="btn btn-block btn-sm rounded-0 btn-sidenav" href="#" role="button"><i class="icon icon-question"></i> FAQ</a>
                </div>
      
                                                 <div class="col-md-12 p-0 m-0">
                <a class="btn btn-block btn-sm rounded-0 btn-sidenav" href="#" role="button"><i class="icon-umbrella"></i>  Insurance</a>
                </div>
                                                 <div class="col-md-12 p-0 m-0">
                <a class="btn btn-block btn-sm rounded-0 btn-sidenav" href="#" role="button"><i class="icon-present"></i> Promotions</a>
                </div>
                                                         <div class="col-md-12 p-0 m-0">
                <a class="btn btn-block btn-sm rounded-0 btn-sidenav" href="#" role="button"><i class="icon-book-open"></i> Our Policies</a>
                </div>
               <div class="col-md-12 p-0 pt-3 m-0">
                                <p class="d-block text-center">Contact Us</p>
                            </div>
                                           <div class="col-md-12 p-0 m-0">
                <a class="btn btn-block btn-sm rounded-0 btn-sidenav" href="#" role="button"><i class="icon icon-call-in"></i> Call Us</a>
                </div>
      
                                                 <div class="col-md-12 p-0 m-0">
                <a class="btn btn-block btn-sm rounded-0 btn-sidenav" href="#" role="button"><i class="icon  icon-speech"></i>  Live Chat</a>
                </div>
                                                 <div class="col-md-12 p-0 m-0">
                <a class="btn btn-block btn-sm rounded-0 btn-sidenav" href="#" role="button"><i class="icon icon-paper-plane"></i> Send Us A Message</a>
                </div>
                        </div>
              
                </div>

       
            <div class="side-nav-footer">
         <div class="dropdown-box">


               <div class="col-md-12 p-0 pt-3 m-0">
                                <p class="d-block text-center">Registered Users Panel</p>
                            </div>
                                                             <div class="col-md-12 p-0 m-0">
                <a class="btn btn-block btn-sm rounded-0 btn-sidenav" href="#" role="button"><i class="icon icon-loop"></i>  Your History</a>
                </div>
                                           <div class="col-md-12 p-0 m-0">
                <a class="btn btn-block btn-sm rounded-0 btn-sidenav" href="#" role="button"><i class="icon icon-magnifier-add"></i> Track Your Order</a>
                </div>
      
 
                                                 <div class="col-md-12 p-0 m-0">
                <a class="btn btn-block btn-sm rounded-0 btn-sidenav" href="#" role="button"><i class="icon icon-trophy"></i> Loyalty Promotion</a>
                </div>
                        </div>
              
            </div>


    </div>
    </div>
    <div id="wish-sidenav" class="sidenav">
        <div class="sidebar-wrap">
        <div class="side-nav-header">
            <div class="container clearfix">
                <h5 class="float-left"><i class="icon icon-heart"></i> Wish List</h5>
                <h5 class="float-right closebtn">Close</h5>
            </div>
           <hr /> 
        </div>
        <div class="side-nav-body">
          <div class="dropdown-box">
                            <div class="col-md-12 p-0 m-0">
                                <p class="d-block text-center">Support</p>
                            </div>
                                           <div class="col-md-12 p-0 m-0">
                <a class="btn btn-block btn-sm rounded-0 btn-sidenav" href="#" role="button"><i class="icon icon-question"></i> FAQ</a>
                </div>
      
                                                 <div class="col-md-12 p-0 m-0">
                <a class="btn btn-block btn-sm rounded-0 btn-sidenav" href="#" role="button"><i class="icon-umbrella"></i>  Insurance</a>
                </div>
                                                 <div class="col-md-12 p-0 m-0">
                <a class="btn btn-block btn-sm rounded-0 btn-sidenav" href="#" role="button"><i class="icon-present"></i> Promotions</a>
                </div>
                                                         <div class="col-md-12 p-0 m-0">
                <a class="btn btn-block btn-sm rounded-0 btn-sidenav" href="#" role="button"><i class="icon-book-open"></i> Our Policies</a>
                </div>
               <div class="col-md-12 p-0 pt-3 m-0">
                                <p class="d-block text-center">Contact Us</p>
                            </div>
                                           <div class="col-md-12 p-0 m-0">
                <a class="btn btn-block btn-sm rounded-0 btn-sidenav" href="#" role="button"><i class="icon icon-call-in"></i> Call Us</a>
                </div>
      
                                                 <div class="col-md-12 p-0 m-0">
                <a class="btn btn-block btn-sm rounded-0 btn-sidenav" href="#" role="button"><i class="icon  icon-speech"></i>  Live Chat</a>
                </div>
                                                 <div class="col-md-12 p-0 m-0">
                <a class="btn btn-block btn-sm rounded-0 btn-sidenav" href="#" role="button"><i class="icon icon-paper-plane"></i> Send Us A Message</a>
                </div>
                        </div>
              
                </div>

       
            <div class="side-nav-footer">
         <div class="dropdown-box">


               <div class="col-md-12 p-0 pt-3 m-0">
                                <p class="d-block text-center">Registered Users Panel</p>
                            </div>
                                                             <div class="col-md-12 p-0 m-0">
                <a class="btn btn-block btn-sm rounded-0 btn-sidenav" href="#" role="button"><i class="icon icon-loop"></i>  Your History</a>
                </div>
                                           <div class="col-md-12 p-0 m-0">
                <a class="btn btn-block btn-sm rounded-0 btn-sidenav" href="#" role="button"><i class="icon icon-magnifier-add"></i> Track Your Order</a>
                </div>
      
 
                                                 <div class="col-md-12 p-0 m-0">
                <a class="btn btn-block btn-sm rounded-0 btn-sidenav" href="#" role="button"><i class="icon icon-trophy"></i> Loyalty Promotion</a>
                </div>
                        </div>
              
            </div>


    </div>
    </div>
   
    <section>
        <!-- Desktop Navbars -->
        <nav class="navbar navbar-expand-lg navbar-top fixed-top">
            <div class="container-fluid px-6">
                <!-- <a class="navbar-brand" href="#"><i class="icon icon-pointer"></i> vancouver best affordable optical solutions</a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item phone-bar">
                            <a class="nav-link" href="#"><i class="icon icon-call-in"></i> (604)-682-2788</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                            <a class="nav-link" href="#" id="">  <i class="icon icon-pointer"></i></a>
                        </li>
                        <li class="nav-item">
                            <a role="button" class="nav-link" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
sagittis lacus vel augue laoreet rutrum faucibus." >  <i class="icon icon-clock"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="wish-nav">  <i class="icon icon-heart-o pulse"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="cart-nav"> <i class=" icon icon-bag nopulse"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="help-nav">Help</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="signin-nav">Sign in</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg navbar-light shadow-sm navbar-main fixed-top " style="margin-top:36px">
            <div class="container-fluid px-6">
                <a class="navbar-brand pr-5" href="#">Rumi Optical</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggler" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Eyeglasses <i class="icon icon-angle-right css-angle-right"></i>
                </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="mx-auto well-menu shadow-sm">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="www.google.com" class="card card-thumbnails">
                                                <div class="card-body">
                                                    <img src="https://res.cloudinary.com/eyebuydirect-inc/image/upload/c_fill,e_sharpen:70,f_auto,h_350,q_auto:good,w_700/v1/product/frame/gray/pl6631_3.jpg" class="img-fluid" alt="Responsive image">
                                                    <h3 class="navbar-thumb-cap"><strong>Women</strong> Eyeglasses</h3>
                                                    <h3 class="navbar-thumb-cap-offer">Starting From <strong>$125.00</strong> </h3>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="www.google.com" class="card card-thumbnails">
                                                <div class="card-body">
                                                    <img src="https://res.cloudinary.com/eyebuydirect-inc/image/upload/c_fill,e_sharpen:70,f_auto,h_350,q_auto:good,w_700/v1/product/frame/gray/pl6631_3.jpg" class="img-fluid" alt="Responsive image">
                                                    <h3 class="navbar-thumb-cap"><strong>Women</strong> Eyeglasses</h3>
                                                    <h3 class="navbar-thumb-cap-offer">Starting From <strong>$125.00</strong> </h3>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="www.google.com" class="card card-thumbnails">
                                                <div class="card-body">
                                                    <img src="https://res.cloudinary.com/eyebuydirect-inc/image/upload/c_fill,e_sharpen:70,f_auto,h_350,q_auto:good,w_700/v1/product/frame/gray/pl6631_3.jpg" class="img-fluid" alt="Responsive image">
                                                    <h3 class="navbar-thumb-cap"><strong>Women</strong> Eyeglasses</h3>
                                                    <h3 class="navbar-thumb-cap-offer">Starting From <strong>$125.00</strong> </h3>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggler" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sunglasses <i class="icon icon-angle-right css-angle-right"></i>
                </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="mx-auto well-menu shadow-sm">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card card-thumbnails">
                                                <div class="card-body">
                                                    <img src="https://res.cloudinary.com/eyebuydirect-inc/image/upload/c_fill,e_sharpen:70,f_auto,h_350,q_auto:good,w_700/v1/product/frame/gray/pl6631_3.jpg" class="img-fluid" alt="Responsive image">
                                                    <h3 class="navbar-thumb-cap"><strong>Women</strong> Sunglasses</h3>
                                                    <h3 class="navbar-thumb-cap-offer">Starting From <strong>$125.00</strong> </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card card-thumbnails">
                                                <div class="card-body">
                                                    <img src="https://res.cloudinary.com/eyebuydirect-inc/image/upload/c_fill,e_sharpen:70,f_auto,h_350,q_auto:good,w_700/v1/product/frame/gray/pl6631_3.jpg" class="img-fluid" alt="Responsive image">
                                                    <h3 class="navbar-thumb-cap"><strong>Women</strong> Sunglasses</h3>
                                                    <h3 class="navbar-thumb-cap-offer">Starting From <strong>$125.00</strong> </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card card-thumbnails">
                                                <div class="card-body">
                                                    <img src="https://res.cloudinary.com/eyebuydirect-inc/image/upload/c_fill,e_sharpen:70,f_auto,h_350,q_auto:good,w_700/v1/product/frame/gray/pl6631_3.jpg" class="img-fluid" alt="Responsive image">
                                                    <h3 class="navbar-thumb-cap"><strong>Women</strong> Sunglasses</h3>
                                                    <h3 class="navbar-thumb-cap-offer">Starting From <strong>$125.00</strong> </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggler" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Contact lenses <i class="icon icon-angle-right css-angle-right"></i>
                </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="mx-auto well-menu shadow-sm">
                                    <div class="row">
                                        <div class="col-md-4">4</div>
                                        <div class="col-md-4">4</div>
                                        <div class="col-md-4">4</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggler" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Safety Glasses <i class="icon icon-angle-right css-angle-right"></i>
                </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="mx-auto well-menu shadow-sm">
                                    <div class="row">
                                        <div class="col-md-4">4</div>
                                        <div class="col-md-4">4</div>
                                        <div class="col-md-4">4</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggler" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Accessories <i class="icon icon-angle-right css-angle-right"></i>
                </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="mx-auto well-menu shadow-sm">
                                    <div class="row">
                                        <div class="col-md-4">4</div>
                                        <div class="col-md-4">4</div>
                                        <div class="col-md-4">4</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                               <button class="btn btn-sm rounded-0 btn-eye-exam" type="button">Eye Exam</button>
                   </li>



                    </ul>
                </div>
            </div>
        </nav>


    </section>
