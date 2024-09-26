<?php
// Daftarkan menu
function ugm_theme_setup() {
register_nav_menus(array(
'primary' => __('Primary Menu', 'ugm-theme'),
));
}
add_action('after_setup_theme', 'ugm_theme_setup');
// Enqueue stylesheet
function ugm_theme_scripts() {
wp_enqueue_style('ugm-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'ugm_theme_scripts');
?>
<?php get_header(); ?>
<main>
<h1><?php the_title(); ?></h1>
<div class="page-content">
<?php
if ( have_posts() ) :
while ( have_posts() ) : the_post();
the_content();
endwhile;
endif;
?>
</div>
</main>
<?php get_footer(); ?>