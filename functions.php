<?php 

// Add css / js
function theme_files() {
    // add files
    wp_enqueue_style('main_css', get_template_directory_uri() . '/build/main.css', array(), '01', 'all');
    wp_enqueue_script('font_awesome', 'https://kit.fontawesome.com/53f00e20c6.js');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
    wp_enqueue_script('main_js', get_template_directory_uri() . '/build/main.js', array(), '01', true);
}
add_action('wp_enqueue_scripts', 'theme_files');

// add features

function theme_features() {
    register_nav_menus(array(
        'header_menu' => __( 'Header menu' ), 
        'header_buttom_menu' => __( 'Header Buttom' ), 
        'footer_menu' => __( 'Footer menu' ), 
    ));
    add_theme_support('title-tag');
    add_theme_support( 'custom-logo' );
}
add_action('after_setup_theme', 'theme_features');

// WooCommerce Support

if(class_exists('WooCommerce')) {
    function woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }
    add_action ( 'after_setup_theme', 'woocommerce_add_woocommerce_support' );
    // Remove WooCommerce styles
        // add_filter( 'woocommerce_enqueue_styles', '__return_false' );
        
    // Remove WooCommerce Shop Title
        // add_filter( 'woocommerce_show_page_title', '__return_false' );

    // Add Gallery Support
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );
}   
