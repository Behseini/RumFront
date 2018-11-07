<?php
 get_header();
?>
 <sectin>
 <div class="row" style="padding-top:40px;">
<?php

     function wp_full_size_gallery( $out ){
   	$out['size'] = 'full';  // Edit this to your needs! [thumbnail, medium, large, ...]
   	return $out;
   }

  function get_youtube_id_from_url($url)
{
    if (stristr($url,'youtu.be/'))
        {preg_match('/(https:|http:|)(\/\/www\.|\/\/|)(.*?)\/(.{11})/i', $url, $final_ID); return $final_ID[4]; }
    else
        {@preg_match('/(https:|http:|):(\/\/www\.|\/\/|)(.*?)\/(embed\/|watch.*?v=|)([a-z_A-Z0-9\-]{11})/i', $url, $IDD); return $IDD[5]; }
}

if ( have_posts() ) {
 	while ( have_posts() ) {
        $meta = get_post_custom($post->ID);
		the_post();
        echo '<section class="title-section">';
          echo '<div class="container text-center">';
          echo '<span class="icon-vlogo title-logo"></span>';
              echo '</div>';
          echo '<h3 class="text-center page-title">'. get_the_title().'</h3>';
       echo '<div class="container"><div class="hr"></div> </div>';
      echo '</section>';

    echo '<div class="container" style="padding:12px; ">';

    echo '<p class="p-paragraph" style="text-align:left">'. get_the_content().'</p>';

    echo '</div>';

        if ( get_post_gallery() ) {
                      echo '<div class="row" style="padding-top:60px; padding-bottom:60px;">';
     echo '<section class="title-section">';
          echo '<div class="container text-center">';
          echo '<span class="icon-vlogo title-logo"></span>';
              echo '</div>';
          echo '<h3 class="text-center page-title"> Check out Our Job</h3>';
       echo '<div class="container"><div class="hr"></div> </div>';
      echo '</section>';
        echo '</div>';
        echo '<div class="container">';
             echo '<div class="col-xs-12 xol-sm-12 col-md-offset-2 col-md-8">';
            ?>
            <div id="carousel-example-generic" class="carousel slide post-carousel" data-ride="carousel">


  <div class="carousel-inner" role="listbox">
       <?php
         add_filter( 'shortcode_atts_gallery','wp_full_size_gallery' );
         $gallery = get_post_gallery( get_the_ID(), false );
        remove_filter( 'shortcode_atts_gallery','wp_full_size_gallery' );
          foreach( $gallery['src'] AS $src ) {
              echo '<div class="item">';
              echo '<img src="'.$src .'" alt="Vancouver Best Laser Center" />';
    echo '</div>';


          }
              }

        ?>


  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
          <?php
        echo '</div>';
         echo '</div>';


         echo '<div class="row" style="padding-top:60px; padding-bottom:80px;">';
         echo '<section class="title-section">';
          echo '<div class="container text-center">';
          echo '<span class="icon-vlogo title-logo"></span>';
              echo '</div>';
          echo '<h3 class="text-center page-title"> Watch Video</h3>';
       echo '<div class="container"><div class="hr"></div> </div>';
      echo '</section>';


     $add = $meta['video_url_box'][0];
     $vid = get_youtube_id_from_url($add);
      echo '<div class="col-xs-12 xol-sm-12 col-md-offset-3 col-md-6">';
echo '<div class="panel panel-default">';
  echo '<div class="panel-heading" style="color: #fff;background-color: #0c967b; border-color: #0c967b;border-radius: 0px; */">'.get_the_title().'</div>';
  echo '<div class="panel-body">';
    echo '<div class="a">';
      echo '<div class="b" data-vid="//www.youtube.com/embed/'.$vid.'"><i class="fa fa-play-circle-o fa-3x" aria-hidden="true"></i></div>';
         echo '<div class="thumb">';
         echo '<div class="plyr__video-embed" id="player">';
    echo '<iframe src="https://www.youtube.com/embed/'.$vid.'?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1" allowfullscreen allowtransparency allow="autoplay"></iframe>';
echo '</div>';
        echo '</div>';
      echo '</div>';
  echo '</div>';
echo '</div>';
  echo '</div>';
          echo '</div>';
	} // end while
} // end if
?>


<?php
get_footer();
?>
