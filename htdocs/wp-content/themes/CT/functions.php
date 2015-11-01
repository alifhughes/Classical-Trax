<?php
	
function ClassicalTraxResources(){

	wp_enqueue_style('style', get_stylesheet_uri());

}


// Navigation menus
register_nav_menus(array(
	'primary'  => __('Pimary Menu'),
	'footer'   => __('Footer Menu'),
));

// Add featured images support
add_theme_support('post-thumbnails');

// Add image sizes
add_image_size('large-thumb', 1060, 650);
add_image_size('medium-thumb', 800, 490);
add_image_size('nav-thumb', 270, 250, true);
add_image_size('small-thumb', 400, 245);
add_image_size('banner-image', 550, 375);

add_action('wp_enqueue_scripts', 'ClassicalTraxResources');

