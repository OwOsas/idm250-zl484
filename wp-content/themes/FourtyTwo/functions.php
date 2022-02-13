<?php
// Theme setup
add_action( 'after_setup_theme', function(){
    add_theme_support('title_tag');
    add_theme_support( 'custom-logo');
    add_theme_support( 'post-thumbnails');
});




//css
function include_css()
{
    wp_enqueue_style('general', get_template_directory_uri() . '/style/styles.css');
    
    if(is_front_page()){
        wp_enqueue_style('index',get_template_directory_uri() . '/style/index.css');
    }
    if(is_single()){
        wp_enqueue_style('single',get_template_directory_uri() . '/style/single.css');
    }

    if(is_404()){
        wp_enqueue_style('404',get_template_directory_uri() . '/style/404.css');
    }

    if(is_page()){
        wp_enqueue_style('temp-portfolio',get_template_directory_uri() . '/style/template-portfolio.css');
    }
}

add_action('wp_enqueue_scripts', 'include_css');


// javascript
function include_js_files()
{
    wp_enqueue_script('header', get_template_directory_uri() . '/js/header.js',[],'1.0', true);

    if(is_front_page()){
        wp_enqueue_script('home', get_template_directory_uri() . '/js/index.js',[], '1.0', true);
    }
    
}

add_action('wp_enqueue_scripts', 'include_js_files');


// Nav
function register_theme_navigation()
{
    register_nav_menus([
        'primary_menu' => 'Primary Menu',
        'footer_menu' => 'Footer Menu',
    ]);
}

add_action('after_setup_theme', 'register_theme_navigation');


// Custom Post Type
function fortyTwo_register_custom_post_type(){
    $args = [];
    register_post_type( 'fortyTwo_portfolio', $args);
}