<?php
// function cedaro_dequeue_jquery_migrate( $scripts ) {
// 	if ( ! is_admin() && ! empty( $scripts->registered['jquery'] ) ) {
// 		$jquery_dependencies = $scripts->registered['jquery']->deps;
// 		$scripts->registered['jquery']->deps = array_diff( $jquery_dependencies, array( 'jquery-migrate' ) );
// 	}
// }
// add_action( 'wp_default_scripts', 'cedaro_dequeue_jquery_migrate' );

function taptip_all_script_and_styles() {
	if ( ! is_admin() ) {
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', ( "//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" ), false, '1.11.3' );
        wp_enqueue_script( 'jquery' );
    }
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap-assets/css/bootstrap.min.css');
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/plugins/owl-carousel/owl.carousel.css');
    wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/plugins/owl-carousel/owl.theme.css');
    wp_enqueue_style( 'owl-transitions', get_template_directory_uri() . '/plugins/owl-carousel/owl.transitions.css');
    wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/plugins/Lightbox/dist/css/lightbox.css');
    wp_enqueue_style( 'et-line-font', get_template_directory_uri() . '/plugins/Icons/et-line-font/style.css');
    wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/plugins/animate.css/animate.css');
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');

    // wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap-assets/js/bootstrap.min.js',array(),null,true);
    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js',array(),null,true);
    if( is_front_page() ) {
    	wp_enqueue_script( 'custom-homepage-header-fix', get_template_directory_uri() . '/js/homepage-header-fix.js',array(),null,true);
    	wp_enqueue_script( 'custom-homepage-map', get_template_directory_uri() . '/js/homepage-map.js',array(),null,true);
    }
    wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/plugins/owl-carousel/owl.carousel.min.js',array(),null,true);
    wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/js/jquery.easing.min.js',array(),null,true);
    wp_enqueue_script( 'jquery-countTo', get_template_directory_uri() . '/plugins/countTo/jquery.countTo.js',array(),null,true);
    wp_enqueue_script( 'jquery-inview', get_template_directory_uri() . '/plugins/inview/jquery.inview.min.js',array(),null,true);
    wp_enqueue_script( 'lightbox-js', get_template_directory_uri() . '/plugins/Lightbox/dist/js/lightbox.min.js',array(),null,true);
    wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/plugins/WOW/dist/wow.min.js',array(),null,true);
   	wp_enqueue_script( 'googlemap-js', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyB7bBrhX0QqDP09QJI2Eq4qKthYDszBfOc',array(),null,true);
    wp_enqueue_script( 'maplabel-js', get_template_directory_uri() . '/js/maplabel-compiled.js',array(),null,true);
    if ( is_page('contact-us') ) {
		// wp_enqueue_script( 'validate-js', get_template_directory_uri() . '/js/validate.min.js',array(),null,true);
		wp_enqueue_script( 'parsley-js', get_template_directory_uri() . '/js/parsley.min.js',array(),null,true);
		wp_enqueue_script( 'custom-contactus-validate', get_template_directory_uri() . '/js/contact-us-validate.js',array(),null,true);
		wp_enqueue_script( 'recaptcha-js', 'https://www.google.com/recaptcha/api.js',array(),null,true);
	}
	wp_enqueue_script( 'twitter-widgets', 'https://platform.twitter.com/widgets.js',array(),null,true);
}

add_action( 'wp_enqueue_scripts', 'taptip_all_script_and_styles' );

function register_session(){
    if( !session_id() )
        session_start();
}
add_action('init','register_session');

add_theme_support( 'post-thumbnails' );