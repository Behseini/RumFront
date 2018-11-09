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
<div id="sign-in-sidebar" class="sidenav">
    <div class="side-nav-header">
    <div class="row p-l-2">
                                <p class="float-left">Cart</p> <a role="button"  class="float-right closebtn">Close</a>



    </div>

    </div>
    <div class="side-nav-body">
    <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>

    </div>
    <div class="side-nav-footer">
    <a role="button"  class="btn closebtn">&times;</a>
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
        <a class="nav-link" href="#" id="wish-list-nav">  <i class="icon icon-heart-o pulse"></i></a>
</li>
<li class="nav-item">

        <a class="nav-link" href="#" id="cat-list-nav"> <i class=" icon icon-bag nopulse"></i></a>

</li>
<li class="nav-item">

        <a class="nav-link" href="#" id="help-nav">Help</a>
</li>
<li class="nav-item">

        <a class="nav-link" href="#" id="sign-in-nav">Sign in</a>
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
