<?php
function maroon_elegant_theme_setup() {
    // Add theme support for document title tag
    add_theme_support( 'title-tag' );
    // Add theme support for custom logo
    add_theme_support( 'custom-logo', array(
    'height' => 100,
    'width' => 400,
    'flex-height' => true,
    'flex-width' => true,
    ));
    // Register navigation menu
    register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'maroon-elegant-theme' ),
    ));
    }
    add_action( 'after_setup_theme', 'maroon_elegant_theme_setup' );
    // Enqueue styles and scripts
    function maroon_elegant_theme_scripts() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
    }
    add_action( 'wp_enqueue_scripts', 'maroon_elegant_theme_scripts' );
    ?>