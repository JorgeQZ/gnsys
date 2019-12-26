<?php
	
add_theme_support( 'post-thumbnails' );
function gnsys_scripts() {
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', null, false);
    wp_enqueue_style('generals', get_template_directory_uri() . '/css/generals.css');
    wp_enqueue_style('page', get_template_directory_uri() . '/css/page.css');
    wp_enqueue_style('owl-slider', get_template_directory_uri() . '/css/owl.carousel.min.css');
    wp_enqueue_style('owl-theme', get_template_directory_uri() . '/css/owl.theme.default.min.css');

    wp_enqueue_script( 'JQuery', "https://code.jquery.com/jquery-3.4.1.min.js", array(), false );
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js',array(), false);
    wp_enqueue_script('owl-slider-js', get_template_directory_uri() . '/js/owl.carousel.min.js',array(), false);
}
add_action( 'wp_enqueue_scripts', 'gnsys_scripts' );  

if ( ! function_exists( 'gnsys_menus' ) ) {
    function gnsys_menus(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'text_domain' ),
            'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
        ) );
    }
    add_action( 'after_setup_theme', 'gnsys_menus', 0 );
}
