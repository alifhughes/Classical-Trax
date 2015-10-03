<?php get_header(); ?>
    <!-- Main Content -->
    <article>
        <h3 style="text-align:center; padding-bottom: 30px;">
            <?php 
                // Get the category title
                single_cat_title();
            ?>
        </h3>
        <div class="container">
        <?php 

            // Check if posts
            if (have_posts()) :
            // Posts available

                $count=0;

                // While have posts is true
                while (have_posts()) : the_post(); 
                    $count++;
                    
        ?>
        

            <?php

                if($count % 3 === 0 || $count === 1) {

                    echo '<ul class="row releasesList">';
                }

                echo '<li class="col-lg-4 col-md-4">';

                ?>

                <a href=" <?php the_permalink(); ?>">
                    <?php the_post_thumbnail('meduim-thumb'); ?>
                    <span class="releaseTitle"><span><?php the_title(); ?></span></span>
                </a>

                <?php 

                echo '</li>';
                
                if (($wp_query->current_post +1) == ($wp_query->post_count)) {


                    echo '</ul>';

                } 

                if($count % 3 === 0 && $count !== 1) {

                    echo '</ul>';
                    
                }

                ?>
              
        
        <?php

            
            
            endwhile; 

                
            else:
                // No posts found 

                echo '<p style="text-align: center;" class="post-subtitle">Watch this space. </p>';

            endif;

        ?>
        </div>
        <hr>
    </article>
<?php get_footer(); ?>