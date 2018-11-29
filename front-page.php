<?php
/*
    Template Name: Front Page
*/
 get_header();
?>
 <div class="row">
<div class="p-3">
<div id="vancouver-optical-banner-main" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
    <li data-target="#vancouver-optical-banner-main" data-slide-to="0" class="active"></li>
    <li data-target="#vancouver-optical-banner-main" data-slide-to="1"></li>
    <li data-target="#vancouver-optical-banner-main" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" title="Vancouver Best Eyeglasses Sunglasses"  src="<?php echo get_template_directory_uri(); ?>/img/banner/Vancouver-best-affordable-eyeglasses-sunglasses-1" alt="Vancouver Best Affordable Eyeglasses Sunglasses">
       <div class="carousel-smart-caption">
    <h5>Test</h5>
    <p>man dkjda sdksd</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" title="Vancouver Best Eyeglasses Sunglasses"  src="<?php echo get_template_directory_uri(); ?>/img/banner/Vancouver-best-affordable-eyeglasses-sunglasses-2" alt="Vancouver Best Affordable Eyeglasses Sunglasses">
    <h5>Test</h5>
    <p>man dkjda sdksd</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" title="Vancouver Best Eyeglasses Sunglasses"  src="<?php echo get_template_directory_uri(); ?>/img/banner/Vancouver-best-affordable-eyeglasses-sunglasses-3" alt="Vancouver Best Affordable Eyeglasses Sunglasses">
    <h5>Test</h5>
    <p>man dkjda sdksd</p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#vancouver-optical-banner-main" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#vancouver-optical-banner-main" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
<?php
get_footer();
?>
