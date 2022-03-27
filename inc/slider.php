<?php

// Register Custom Post Type image
function create_image_cpt() {

	$labels = array(
		'name' => _x( 'images', 'Post Type General Name', 'bandbaja' ),
		'singular_name' => _x( 'image', 'Post Type Singular Name', 'bandbaja' ),
		'menu_name' => _x( 'images', 'Admin Menu text', 'bandbaja' ),
		'name_admin_bar' => _x( 'image', 'Add New on Toolbar', 'bandbaja' ),
		'archives' => __( 'image Archives', 'bandbaja' ),
		'attributes' => __( 'image Attributes', 'bandbaja' ),
		'parent_item_colon' => __( 'Parent image:', 'bandbaja' ),
		'all_items' => __( 'All images', 'bandbaja' ),
		'add_new_item' => __( 'Add New image', 'bandbaja' ),
		'add_new' => __( 'Add New', 'bandbaja' ),
		'new_item' => __( 'New image', 'bandbaja' ),
		'edit_item' => __( 'Edit image', 'bandbaja' ),
		'update_item' => __( 'Update image', 'bandbaja' ),
		'view_item' => __( 'View image', 'bandbaja' ),
		'view_items' => __( 'View images', 'bandbaja' ),
		'search_items' => __( 'Search image', 'bandbaja' ),
		'not_found' => __( 'Not found', 'bandbaja' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'bandbaja' ),
		'featured_image' => __( 'Featured Image', 'bandbaja' ),
		'set_featured_image' => __( 'Set featured image', 'bandbaja' ),
		'remove_featured_image' => __( 'Remove featured image', 'bandbaja' ),
		'use_featured_image' => __( 'Use as featured image', 'bandbaja' ),
		'insert_into_item' => __( 'Insert into image', 'bandbaja' ),
		'uploaded_to_this_item' => __( 'Uploaded to this image', 'bandbaja' ),
		'items_list' => __( 'images list', 'bandbaja' ),
		'items_list_navigation' => __( 'images list navigation', 'bandbaja' ),
		'filter_items_list' => __( 'Filter images list', 'bandbaja' ),
	);
	$args = array(
		'label' => __( 'image', 'bandbaja' ),
		'description' => __( 'custom post for image slider', 'bandbaja' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-images-alt',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'post-formats'),
		'taxonomies' => array('category', 'tags'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'image', $args );

}
add_action( 'init', 'create_image_cpt', 0 );


?>