<?php
get_header();
?>

<?php

$term =	$wp_query->queried_object;
echo '<h3>'.$term->name.'</h3>';


    if ( have_posts() ) {
            while ( have_posts() ) {
            the_post();
            echo '<div class="well well-sm">';
//            echo '<h4 class="">'.the_title().'</h4>';
            echo '<a href="' . get_the_permalink() . '">' . get_the_title() . '</a>';
            echo '</div>';

        }
    }
?>
<?php
get_footer();
?>
