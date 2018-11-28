<?php
/*
    Template Name: Women Eyeglasses Page
*/
 get_header();
?>
<div class="row">
    <div class="container pb-4">
        <div class="row">
        <div class="col-md-7">
            <h2 class="page-title"><strong>Vancouver</strong> Best Affordable <strong>Eyeglasses</strong></h2>
            <p class="page-paragraph">How clear is your vision? Rumi Optical is a licensed provider of optometry services and vision care products in the Greater Vancouver community, and we want to help you achieve and maintain a clear vision for years to come. Finding the right pair of eyeglasses in Vancouver can do wonders for your style and confidence. At Rumi Optical, we’re committed to helping you find the perfect pair. Our quality designer eyeglasses are available in a variety of styles, from classic wire frames to colourful acetate varieties.</p>
            <p class="page-paragraph">Try some on at <strong>our store!</strong></p>
        </div>
        <div class="col-md-5 pt-5">
                    <img class="img-fill img-thumbnail" src="<?php echo get_bloginfo('template_directory');?>/img/pages/vancouver-best-affordable-eyeglasses.png" title="Vancouver Best Affordable Eyeglasses" alt="Vancouver Best Affordable Eyeglasses">
            </div>
    </div>
    </div>
</div>


<div class="row" style="padding-top: 30px; padding-bottom:20px;">
           <div class="container" id="alert">
    <div class="alert alert-color text-center" role="alert">FREE SHIPPING & 30 DAY RETURNS OVER $30</div>
    </div>
</div>

    <div class="row" style="padding-top: 40px;">
<div class="container">

  <div class="row products">

  <?php
   	$uploads  = wp_upload_dir();
	$upload_path = $uploads['baseurl'];
$args = array( 'post_type' => 'women_eyeglasses', 'posts_per_page' => 500 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
    $meta = get_post_custom($post->ID);

//    echo '<a href="'.get_post_permalink().'" class="btn btn-services" role="button">'.$name = $meta['name_box'][0].' >></a>';
    $name = $meta['name_box'][0];
    $brand = $meta['brand_box'][0];
    $price = $meta['price_box'][0];
    $SKU = $meta['sku_box'][0];
    $material = $meta['material_box'][0];
    $gender = $meta['gender_box'][0];
    $colorsNumber = $meta['cNumber_box'][0];
    $thumbnail = $meta['thumbnail_box'][0];

echo '<div class="col-lg-4 col-md-6 col-sm-12 col-12 text-center product">';
       echo '<a href="'.get_post_permalink().'" >';
              echo '<img class="img-fluid" src="'.$upload_path.'/thumbs/'.$thumbnail.'" title="Vancouver Best Online Affodable Women Eyeglasses"  alt="Vancouver Best Online Affodable Women Eyeglasses">';

    echo '</a>';
              echo '<table class="table">';
          echo '<tr>';
            echo '<td class="text-left"><a href="'.get_post_permalink().'" ><span class="item-brand-name animated ">'.$brand.'</span></a></td>';
            echo '<td class="text-right"><i class="icon animated icon-heart-o"> </i></td>';
          echo '</tr>';
          echo '<tr>';
            echo '<td class="text-left"><a href="'.get_post_permalink().'" ><span class="item-model-name">'.$name.'</span></a></td>';
            echo '<td class="text-right"><a href="'.get_post_permalink().'" ><span class="item-model-price">$'.$price.'.00</span></a></td>';
          echo '</tr>';
               echo '<tr>';
            echo '<td class="text-left btn-try-box"></td>';
      if($colorsNumber == '1'){
          echo '<td class="text-right"><a href="'.get_post_permalink().'" ><span class="item-colors">'.$colorsNumber.' Color</span></a></td>';
      }else{
          echo '<td class="text-right"><a href="'.get_post_permalink().'" ><span class="item-colors">'.$colorsNumber.' Colors</span></a></td>';
      }

          echo '</tr>';
        echo '</table>';
echo '</div>';


endwhile;

   ?>

  </div>

</div>
        </div>

<?php
get_footer('eyeglass');
?>
