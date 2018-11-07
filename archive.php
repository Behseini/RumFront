<?php
/**
 *
 */

get_header(); ?>
<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		salam from archive
	} // end while
} // end if
?>

<?php get_footer(); ?>
