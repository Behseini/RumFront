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
<section>
<!-- Desktop Navbars -->
<nav class="navbar navbar-expand-lg navbar-top">
<div class="container-fluid px-6">
    <a class="navbar-brand" href="#"><i class="icon icon-pointer"></i> vancouver best affordable optical solutions</a>
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

            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="icon icon-heart-o pulse"></i>
</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                    <form action="" class="form">

                        <div class="container">

                            <ul class="nav nav-pills d-none" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-forget-tab" data-toggle="pill" href="#pills-forget" role="tab" aria-controls="pills-forget" aria-selected="false">forget</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
                                    <div class="row">
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label class="form-label" for="first"> <i class="icon icon-envelope"></i>  Your Email</label>
                                                <input id="first" class="form-input" type="text" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="last"><i class="icon icon-lock"></i>  Your Password</label>
                                                <input id="last" class="form-input" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-defaulta btn-link">Forget Your Password?</button>
                                </div>
                                <div class="tab-pane fade" id="pills-forget" role="tabpanel" aria-labelledby="pills-forget-tab">profile
                                    <button class="btn btn-defaultb btn-link">Back to Login</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class=" icon icon-bag nopulse"></i>
</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                    <form action="" class="form">

                        <div class="container">

                            <ul class="nav nav-pills d-none" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-forget-tab" data-toggle="pill" href="#pills-forget" role="tab" aria-controls="pills-forget" aria-selected="false">forget</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
                                    <div class="row">
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label class="form-label" for="first"> <i class="icon icon-envelope"></i>  Your Email</label>
                                                <input id="first" class="form-input" type="text" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="last"><i class="icon icon-lock"></i>  Your Password</label>
                                                <input id="last" class="form-input" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-defaulta btn-link">Forget Your Password?</button>
                                </div>
                                <div class="tab-pane fade" id="pills-forget" role="tabpanel" aria-labelledby="pills-forget-tab">profile
                                    <button class="btn btn-defaultb btn-link">Back to Login</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </li>



            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Help
</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                    <form action="" class="form">

                        <div class="container">

                            <ul class="nav nav-pills d-none" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-forget-tab" data-toggle="pill" href="#pills-forget" role="tab" aria-controls="pills-forget" aria-selected="false">forget</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
                                    <div class="row">
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label class="form-label" for="first"> <i class="icon icon-envelope"></i>  Your Email</label>
                                                <input id="first" class="form-input" type="text" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="last"><i class="icon icon-lock"></i>  Your Password</label>
                                                <input id="last" class="form-input" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-defaulta btn-link">Forget Your Password?</button>
                                </div>
                                <div class="tab-pane fade" id="pills-forget" role="tabpanel" aria-labelledby="pills-forget-tab">profile
                                    <button class="btn btn-defaultb btn-link">Back to Login</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Sign In
</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                    <form action="" class="form">
<p>Sigin in</p>
                        <div class="container">

                            <ul class="nav nav-pills d-none" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-forget-tab" data-toggle="pill" href="#pills-forget" role="tab" aria-controls="pills-forget" aria-selected="false">forget</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
                                    <div class="row">
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label class="form-label" for="first"> <i class="icon icon-envelope"></i>  Your Email</label>
                                                <input id="first" class="form-input" type="text" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="last"><i class="icon icon-lock"></i>  Your Password</label>
                                                <input id="last" class="form-input" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-defaulta btn-link">Forget Your Password?</button>
                                </div>
                                <div class="tab-pane fade" id="pills-forget" role="tabpanel" aria-labelledby="pills-forget-tab">profile
                                    <button class="btn btn-defaultb btn-link">Back to Login</button>
                                </div>

                            </div>




                        </div>
                    </form>
                </div>
            </li>
        </ul>

    </div>
</div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light sticky-top shadow-sm navbar-main">
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
  Specialty Eyewear <i class="icon icon-angle-right css-angle-right"></i>
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
                <a class="nav-link eye-exam-nav" href="#">Eye Exam</a>
            </li>



        </ul>
    </div>
</div>
</nav>


</section>
