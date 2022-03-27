<?php
/***
 * this is hamro utpadan index page
 */

get_header();
<<<<<<< HEAD
=======
echo "hello bandbaja";
echo "git examopke";
echo "another amppls";
>>>>>>> d83b48d0e6dd802a65f2489cac212d79642c8043
?>
<!-- Set up your HTML -->
<?php 
    $args = array(
        'post_type'=> 'image'
    );
    $slider_post = new WP_QUERY($args);
        if ( $slider_post->have_posts() ) : 
            while ( $slider_post->have_posts() ) : $slider_post->the_post(); ?>
              <?php
            endwhile; 
        endif; 
    

        ?>
	 <div class="sideImage">
                <div class="slidersimage owl-carousel owl-theme">
                    <?php
                if ( $slider_post->have_posts() ) : 
            while ( $slider_post->have_posts() ) : $slider_post->the_post(); ?>
            <div class="slider_image">
            <?php the_post_thumbnail()?>
                    </div>
              <?php
            endwhile; 
        endif; ?>
                </div>
            </div>
     

     <!-- Coder for services    -->
    <?php 
    $args = array(
        'post_type'=> 'service'
    );
    $service_post = new WP_QUERY($args);
         

        ?>


        <div class="service_title">SERVICES</div><br>
            <div class="service owl-carousel owl-theme">           
            <?php
                if ( $service_post->have_posts() ) : 
            while ( $service_post->have_posts() ) : $service_post->the_post(); ?>
              <div class="service_item">
                  <div class="service_image">
                  <a href="<?php the_permalink() ?>">
                <?php the_post_thumbnail()?></a>
                  </div>
              
                
                <div class="buttonservices">
                <button class="service_btn"><?php the_title()?></button>
                </div>
            
            </div>
                     
              <?php
            endwhile; 
           endif; ?>
        </div> 

        <!-- Code for happy_client-->
        <?php 
    $args = array(
        'post_type'=> 'happyclient'
    );
    $client_post = new WP_QUERY($args);?>
   
            <div class="happyclient_title">HAPPY CLIENTS</div><br>
         
            <div class="happyclients_div">
            <div class="client owl-carousel owl-theme">      
                
             <?php
                if ( $client_post->have_posts() ) : 
                    while ( $client_post->have_posts() ) : $client_post->the_post(); ?>
                    <?php echo $client_post->ID;?>
              <div class="client_item">
                  <div class="client_image">
                      <?php print_r($db_results[0]['meta_value']);?>
                  <a href="<?php the_permalink() ?>">
                  <?php the_post_thumbnail(); ?></a>              
                              
                  </div> 
                  <div class="client-side_item">
                      <div class="apple">
                  <?php echo get_post_meta($post->ID, 'wporg_meta_key', true);?>
                      </div>
                  <?php the_content();?>
                  </div>
                         
            </div>
                     
              <?php
            endwhile; 
           endif; ?>
        </div> 
</div> 




<script>
                     
// for owl carousel
$(document).ready(function(){
    $('.service').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})


$('.client').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        }
    }
     
});
  

$('.slidersimage').owlCarousel({
    loop:true,
    animateOut: 'slideOutDown',
    animateIn: 'flipInX',
    animateOut: 'fadeOut',
    items:1,
    smartSpeed:450,
    autoplay:true,
    autoplayTimeout:5000
});


});

</script>

   <?php
get_footer();
?>