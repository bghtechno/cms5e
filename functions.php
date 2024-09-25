<?php
if (!function_exists('yourthemename_setup')) :
    function yourthemename_setup() {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        register_nav_menus(array(
            'primary' => esc_html__('Primary Menu', 'yourthemename'),
        ));
    }
endif;
add_action('after_setup_theme', 'yourthemename_setup');

function yourthemename_scripts() {
    wp_enqueue_style('yourthemename-style', get_stylesheet_uri());
    wp_enqueue_script('yourthemename-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);
}
add_action('wp_enqueue_scripts', 'yourthemename_scripts');