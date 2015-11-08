<?php

/**
 * Initialise style sheet for classical trax theme
 */
function ClassicalTraxResources() {

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
        
        // Do not include "Links" in query
        $query->set('cat', -6);
        
        // Alter the query for the home and features pages
        // Check if homepage or features page
        if(is_home() || is_category('Features')){
            $query->set('posts_per_page', 5);
        }
    }
}

/**
 * Get the blog roll, links to check in the sidebar
 */
function getBlogRoll() {
                        
    // Build arguments array to get links post 
    $args = array(
        'posts_per_page'   => 3,
        'offset'           => 0,
        'category'         => '',
        'category_name'    => 'Links',
        'orderby'          => 'date',
        'order'            => 'DESC',
        'include'          => '',
        'exclude'          => '',
        'meta_key'         => '',
        'meta_value'       => '',
        'post_type'        => 'post',
        'post_mime_type'   => '',
        'post_parent'      => '',
        'author'           => '',
        'post_status'      => 'publish',
        'suppress_filters' => true 
    );

    // Get the links to check posts
    $linksToCheck = get_posts($args);

    // Check that there is link post
    if (count($linksToCheck) != 0) {

        // Posts available
        echo '<h4 style="padding-top:20px;">Links:</h4>';

        echo '<div style="border: 1px grey solid;padding: 3px;">';

        // Iterate through array of links
        foreach ($linksToCheck as $link) {

            // Display the link
            echo '<h5 style="text-align: center">' . $link->post_content . '</h5>';

            // Check if at end of array
            if($link !== end($linksToCheck)){
                // Not at the end

                // Display break
                echo '<hr>';

            }
        }

        // Close div
        echo '</div>';

        //
        echo '<hr>';

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
add_action('pre_get_posts', 'fivePostsPerPage');