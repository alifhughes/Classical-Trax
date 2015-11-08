<?php

/**
 * Initialise style sheet for classical trax theme
 */
function ClassicalTraxResources(){

	wp_enqueue_style('style', get_stylesheet_uri());

}

/**
 * Limit the amount of posts per page to 5
 * 
 * @param WPQuery $query
 */
function fivePostsPerPage($query) {
    
    // Check whether the query is in the main loop
    if ($query->is_main_query()) {
        // It is in main loop
        
        // alter the query for the home and features pages

        if(is_home() || is_category('Features') ){
          $query->set('posts_per_page', 5);
        }
    }
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

// Add actions
add_action('wp_enqueue_scripts', 'ClassicalTraxResources');
add_action( 'pre_get_posts', 'fivePostsPerPage' );
