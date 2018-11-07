<?php
/**
 * Rumi Press functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Rumi Press
 * @since 1.0
 */


/*
 =================================================    Adding Styles
*/

    function add_styles() {
    wp_enqueue_style( 'fonticon', get_template_directory_uri() .'/css/icons.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/css/bootstrap.css' );
    wp_enqueue_style( 'animate', get_template_directory_uri() .'/css/animate.min.css' );
    wp_enqueue_style( 'slider', get_template_directory_uri() .'/css/jquery-ui.min.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() .'/css/style.css' );

    if( is_singular( 'women_eyeglasses' ) ){
        wp_enqueue_style( 'single-e', get_template_directory_uri() .'/css/single-e.css' );
        wp_enqueue_style( 'single-we', get_template_directory_uri() .'/css/single-we.css' );
    }
    if( is_singular( 'men_eyeglasses' ) ){
        wp_enqueue_style( 'single-e', get_template_directory_uri() .'/css/single-e.css' );
        wp_enqueue_style( 'single-me', get_template_directory_uri() .'/css/single-me.css' );
    }
    if( is_singular( 'unisex_eyeglasses' ) ){
        wp_enqueue_style( 'single-e', get_template_directory_uri() .'/css/single-e.css' );
        wp_enqueue_style( 'single-ue', get_template_directory_uri() .'/css/single-ue.css' );
    }
    }
    add_action( 'wp_enqueue_scripts', 'add_styles' );


/*
 =================================================    Adding Old Browsers Support
*/

function add_old_browser_js() {
    global $wp_scripts;
    wp_register_script('html_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js','','',false );
    wp_register_script('respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js','','',false );
    $wp_scripts->add_data('html_shiv','conditional', 'lt IE 9');
    $wp_scripts->add_data('respond_js','conditional', 'lt IE 9');
}
add_action( 'wp_enqueue_scripts', 'add_old_browser_js' );

/*
 =================================================    Adding Scripts
*/

function add_js() {
wp_deregister_script('jquery');
wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js' , '', '', true );
wp_enqueue_script('jquery');
wp_enqueue_script('bootstrap', get_template_directory_uri() .'/js/bootstrap.js', array('jquery'),'',true );
wp_enqueue_script('slider', get_template_directory_uri() .'/js/jquery-ui.min.js', array('jquery'),'',true );
wp_enqueue_script('scripts', get_template_directory_uri() .'/js/scripts.js', array('jquery'),'',true );
if( is_singular( 'women_eyeglasses' ) ){
    wp_enqueue_script('single', get_template_directory_uri() .'/js/single-e.js', array('jquery'),'',true );
}



}
add_action( 'wp_enqueue_scripts', 'add_js' );



/*
 ==================================================    Add Thumbnail Support
*/

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}

/* Flush rewrite rules for custom post types. */
add_action( 'after_switch_theme', 'bt_flush_rewrite_rules' );

/* Flush your rewrite rules */
function bt_flush_rewrite_rules() {
     flush_rewrite_rules();
}


function register_session()
{
  if( !session_id() )
  {
    session_start();
  }
}

add_action('init', 'register_session');




?>
