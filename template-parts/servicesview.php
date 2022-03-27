<?php 
/* Template Name: services */


get_header();

    $args = array(
        'post_type'=> 'service'
    );
    $service_post = new WP_QUERY($args);
        if ( $service_post->have_posts() ) : 
            while ( $service_post->have_posts() ) : $service_post->the_post(); ?>
              <?php
            endwhile; 
        endif; 
    

        ?><?php
        $service_post = new WP_QUERY($args);
        if ( $service_post->have_posts() ) : 
            while ( $service_post->have_posts() ) : $service_post->the_post(); ?>
                <article class="home-post">
                    <div class="post-header">
                        
                    <h1><?php the_title()?></h1>
                        <div class="home-featured row ml-0 mr-0">
                            <a href="<?php the_permalink() ?>">
                            <?php the_post_thumbnail('home-featured')?></a>
                        </div>
                    </div>
                    <div class="post-description">
                        <?php the_excerpt() ?>
                    </div>
                    <div class="post-footer">
                        <div class="post-meta">
                            <strong>Author:</strong><?php the_author(); ?>
                        </div>
                        <div class="post-meta">
                            <strong>Posted on:</strong><?php the_time(); ?>
                        </div>
                    </div>
                </article>
                <?php
            endwhile; 
        endif; 
    

        ?>
<?php
get_footer();
?>