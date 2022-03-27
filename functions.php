<?php

//this is our functions file

function register_my_menus() {
    add_theme_support('custom-logo');
  
    add_theme_support('title-tag');
  
    add_theme_support('post-thumbnails');
  
    $args = array(
      'default-image'=> get_template_directory_uri().'/assets/img/app.jpg ',
      'default-text-color' =>'000',
      'width' =>1920,
      'height' =>400,
      'flex-width'=>true,
      'flex-height'=>true,
    );
    add_theme_support('custom-header',$args);
  
    add_image_size('home-featured',1500,495,array('center','center'));
  
      register_nav_menus(
        array(
          'header-menu' => __( 'Header Menu','Slider' )
         )
       );
     }
  add_action( 'init', 'register_my_menus' );
  
function hamroutpadan_theme_scripts(){
    wp_enqueue_style('bootstrap_css',get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css');
    wp_enqueue_script('jquery');
    wp_enqueue_style('carousel1',get_template_directory_uri().'/assets/OwlCarousel/dist/assets/owl.carousel.min.css');
    wp_enqueue_style('owlTheme',get_template_directory_uri().'/assets/OwlCarousel/dist/assets/owl.theme.default.min.css');
    wp_enqueue_style('style',get_stylesheet_uri());
  
    wp_enqueue_style('fontawesome',get_template_directory_uri().'/assets/css/font-awesome/css/font-awesome.min.css');
    wp_enqueue_script('OwlCarousel_JS',get_template_directory_uri().'/assets/OwlCarousel/dist/owl.carousel.min.js',array(),'1.0.0',true);
    wp_enqueue_script('hamroJquery','https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
}
add_action('wp_enqueue_scripts','hamroutpadan_theme_scripts');

// apple


//slider

require get_template_directory().'/inc/slider.php';

//services
require get_template_directory().'/inc/services.php';

//happy_clients
require get_template_directory().'/inc/happy_clients.php';

//Add new metaBox
function wporg_add_custom_box() {
  $screens = [ 'post', 'happyclient' ];
  foreach ( $screens as $screen ) {
      add_meta_box(
          'wporg_box_id',                 // Unique ID
          'Custom Meta Box Title',      // Box title
          'wporg_custom_box_html',  // Content callback, must be of type callable
          $screen,                   // Post type
          'side'                            
      );
  }
}
add_action( 'add_meta_boxes', 'wporg_add_custom_box' );



function wporg_custom_box_html( $post ) {
  $value = get_post_meta( $post->ID, 'name', true );
  ?>
  <div class="message">
                      <div class="name">
                      <label for="name">Name
                        <input id="name" type="text" name="name" value="<?php echo $value;?>"><br>
                     </label>
                      </div>
                  </div>   
  <?php
}
//saving post
function wporg_save_postdata( $post_id ) {
    if ( array_key_exists( 'name', $_POST ) ) {
    update_post_meta(
        $post_id,
        'wporg_meta_key',
         $_POST['name']
    );
}






}
add_action( 'save_post', 'wporg_save_area_postdata' );

