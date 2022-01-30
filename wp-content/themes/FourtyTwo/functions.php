<?php

if (version_compare('7.4', phpversion(), '>')) {
    die('You must be using PHP 7.4 or greater.');
}

// Check WP Version
if (version_compare($GLOBALS['wp_version'], '5.4.2', '<')) {
    die('WP theme only works in WordPress 5.4.2 or later. Please upgrade your WP site');
}

//css
function include_css()
{
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');

    wp_enqueue_style(
        'idm250-css',
        get_template_directory_uri() . '/style/styles.css'
    );
}

add_action('wp_enqueue_scripts', 'include_css');


// javascript
function include_js_files()
{
    wp_enqueue_script(
        'idm250-js',
        get_template_directory_uri() . '/js/index.js',
        [],
        false,
        true
    );
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

function theme_name_custom_logo_setup() {
    $logo = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $logo );
}

add_action('after_setup_theme', 'theme_name_custom_logo_setup');