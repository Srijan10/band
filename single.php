<?php
/****
 * this templete is used to display single posts
 */ 
get_header();

        if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <p><?php the_content();?></p>
                <?php the_author(); ?>
                <?php the_time(); ?>
                <?php the_post_thumbnail()?>
                <?php
            endwhile; 
        endif;    
        ?>            
          
<?php
get_footer();
?>