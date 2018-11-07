<?php
get_header();
?>
 <sectin>
 <div class="row">
<div class="container"  style="padding-top:100px; padding-bottom:30px;" >

<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
  	} // end while
} // end if
?>
</div>
  </div>

 </sectin>
<?php
get_footer();
?>
