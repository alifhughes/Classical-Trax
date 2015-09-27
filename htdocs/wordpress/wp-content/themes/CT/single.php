
<?php get_header(); ?>
    <!-- Main Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1">
                    <?php 
                        
                        $categoryId = get_cat_ID('Links');

                        // Check if posts
                        if (have_posts()) :
                            // Posts available

                            // While have posts is true
                            while (have_posts()) : the_post(); 

                                // Check if in links category
                                if (in_category($categoryId)) {
                                    // Is in link category - skip
                                    continue;

                                }
                                //$currentFeatureId = the_ID();

                    ?>
                    
                        <div class="post-preview">  
                            <a href="<?php the_permalink(); ?>">
                                <h2 class="post-title">
                                    <?php the_title();?>
                                </h2>
                            </a>  
                                <p class="post-meta">Posted by <a href=" <?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> <?php echo the_author(); ?> </a>on <?php echo the_time('jS F, Y');?></p> 
                                <!-- <h3 class="post-subtitle"> -->
                                <!-- ADD SUBTITLE TEXT HERE -->
                                <!-- </h3> -->
                                
                                <?php the_post_thumbnail('large-thumb'); ?>
  
                                <p><?php the_content(); ?></p>
                                
                        </div> 
                    <hr>
                <?php

                endwhile; 

                
                else:
                    // No posts found 

                    echo '<p class="post-subtitle">No content found. </p>';

                endif;

                ?>
                    <!-- Pager -->
<!--                     <ul class="pager">
                        <li class="next">
                            <a href="<?php echo get_page_link(9); ?>">Other Posts &rarr;</a>
                        </li>
                    </ul> -->
                </div>
                        
                 <!-- Side bar-->
                <div class="col-lg-3 col-md-3">
                    <div class="sidebar" style=" word-wrap: break-word;border-left: 1px grey solid; padding-left: 10px; margin-top: 30px;">
                        <!-- Latest releases -->
                        <?php
                        
                        // Build arguments array to get latest release
                        $args = array(
                            'posts_per_page'   => 1,
                            'offset'           => 0,
                            'category'         => '',
                            'category_name'    => 'Releases',
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
                        $latestReleases = get_posts($args);

                        // Check that there is link post
                        if (count($latestReleases) != 0) {
                            
                            // Posts available
                            echo '<h4>Latest Releases:</h4>';

                            // Iterate through array of links
                            foreach ($latestReleases as $post) { ?>

                               <a href=" <?php the_permalink(); ?> ">
                            
                            <?php

                                the_post_thumbnail('small-thumb');

                                echo '</a>';

                                }

                            echo '<hr>';
                        
                        }
                        
                        ?>
                        <!-- Links to check -->
                        <?php 
                        
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
                            'author'       => '',
                            'post_status'      => 'publish',
                            'suppress_filters' => true 
                        );
                        // Get the links to check posts
                        $linksToCheck = get_posts($args);

                        // Check that there is link post
                        if (count($linksToCheck) != 0) {
                            
                            // Posts available
                            echo '<h4 style="padding-top:20px;">Links to check:</h4>';

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
                        
                        ?>
                            
                        <h4 style="padding-top:20px;">Latest Mix:</h4>
                        <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/223973703&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                        <hr>
                         <!-- Latest Feature -->
                        <?php
                        
                        // Build arguments array to get latest release
                        $args = array(
                            'posts_per_page'   => 1,
                            'offset'           => 0,
                            'category'         => '',
                            'category_name'    => 'Features',
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
                        $latestFeatures = get_posts($args);

                        // Check that there is link post
                        if (count($latestFeatures) != 0) {
                            
                            // Posts available
                            echo '<h4 style="padding-top:20px;">Latest Feature:</h4>';

                            // Iterate through array of links
                            foreach ($latestFeatures as $post) { ?>

                               <a href=" <?php the_permalink(); ?> ">
                            
                             <!-- Check if has featured image, if not displays title, as to not leave it blank -->
                            <?php if (has_post_thumbnail()) { ?>

                                <?php the_post_thumbnail('small-thumb'); ?>

                            <?php } else { ?>

                                <h5 style="text-align: center;border: 1px grey solid;padding: 20px;"><?php the_title();?></h5>

                            <?php } ?>

                            <?php 
                            echo '</a>';

                            echo '<hr>';
                        
                            }

                        } ?>

                        <h4 style="padding-top:20px;">Feed:</h4>
                        <a class="twitter-timeline" href="https://twitter.com/classical_trax" data-widget-id="638798685892120576">Tweets by @classical_trax</a>
                        <hr>
                        <h4 style="padding-top:20px;">Facebook</h4>
                        <div class="fb-page" data-href="https://www.facebook.com/classicaltrax?fref=ts" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/classicaltrax?fref=ts"><a href="https://www.facebook.com/classicaltrax?fref=ts">Classical Trax</a></blockquote></div></div>
                        
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </article>
<?php get_footer(); ?>