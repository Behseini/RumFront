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
add_action('init', 'wp_sessionize', 1);
    function wp_sessionize() {
        if(!session_id()) {
            session_start();
        }
        $_SESSION["newsession"]= "Iran";
    }

add_action ( 'wp_head', 'my_js_variables' );
function my_js_variables(){
?>
  <script type="text/javascript">
    var captchaURL  = <?php echo json_encode( get_template_directory_uri() . '/logins/captcha.php' ); ?>;
    var registerURL = <?php echo json_encode( get_template_directory_uri() . '/logins/registration.php' ); ?>;
    var loginURL    = <?php echo json_encode( get_template_directory_uri() . '/logins/login.php' ); ?>;
    var confirmURL  = <?php echo json_encode( get_template_directory_uri() . '/logins/confirm.php' ); ?>;
    var resetURL    = <?php echo json_encode( get_template_directory_uri() . '/logins/reset.php' ); ?>;
  </script>
<?php
}
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
    if( is_page_template( 'page-women-eyeglasses.php' ) ){
        wp_enqueue_style( 'we', get_template_directory_uri() .'/css/we.css' );
    }
    if( is_page_template( 'page-registration.php' ) ){
        wp_enqueue_style( 'registration', get_template_directory_uri() .'/css/registration.css' );
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
    wp_register_script('jquery', get_template_directory_uri() .'/js/jquery.min.js' , '', '', true );
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper', get_template_directory_uri() .'/js/popper.min.js', array('jquery'),'',true );
    wp_enqueue_script('bootstrap', get_template_directory_uri() .'/js/bootstrap.js', array('jquery'),'',true );
    wp_enqueue_script('slider', get_template_directory_uri() .'/js/jquery-ui.min.js', array('jquery'),'',true );
    wp_enqueue_script('validate', get_template_directory_uri() .'/js/validator.js', array('jquery'),'',true );
    wp_enqueue_script('indent', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.hoverintent/1.9.0/jquery.hoverIntent.min.js', array('jquery'),'',true );
    wp_enqueue_script('scripts', get_template_directory_uri() .'/js/scripts.js', array('jquery'),'',true );

    if( is_singular( 'women_eyeglasses' ) ){
        wp_enqueue_script('single', get_template_directory_uri() .'/js/single-e.js', array('jquery'),'',true );
    }
    if( is_page_template( 'page-registration.php' ) ){
        wp_enqueue_script( 'registration', get_template_directory_uri() .'/js/registration.js', array('jquery'),'',true );
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



?>
