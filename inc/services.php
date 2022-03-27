<?php
// Register Custom Post Type Service
function create_service_cpt() {

	$labels = array(
		'name' => _x( 'Services', 'Post Type General Name', 'slider' ),
		'singular_name' => _x( 'Service', 'Post Type Singular Name', 'slider' ),
		'menu_name' => _x( 'Services', 'Admin Menu text', 'slider' ),
		'name_admin_bar' => _x( 'Service', 'Add New on Toolbar', 'slider' ),
		'archives' => __( 'Service Archives', 'slider' ),
		'attributes' => __( 'Service Attributes', 'slider' ),
		'parent_item_colon' => __( 'Parent Service:', 'slider' ),
		'all_items' => __( 'All Services', 'slider' ),
		'add_new_item' => __( 'Add New Service', 'slider' ),
		'add_new' => __( 'Add New', 'slider' ),
		'new_item' => __( 'New Service', 'slider' ),
		'edit_item' => __( 'Edit Service', 'slider' ),
		'update_item' => __( 'Update Service', 'slider' ),
		'view_item' => __( 'View Service', 'slider' ),
		'view_items' => __( 'View Services', 'slider' ),
		'search_items' => __( 'Search Service', 'slider' ),
		'not_found' => __( 'Not found', 'slider' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'slider' ),
		'featured_image' => __( 'Featured Image', 'slider' ),
		'set_featured_image' => __( 'Set featured image', 'slider' ),
		'remove_featured_image' => __( 'Remove featured image', 'slider' ),
		'use_featured_image' => __( 'Use as featured image', 'slider' ),
		'insert_into_item' => __( 'Insert into Service', 'slider' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Service', 'slider' ),
		'items_list' => __( 'Services list', 'slider' ),
		'items_list_navigation' => __( 'Services list navigation', 'slider' ),
		'filter_items_list' => __( 'Filter Services list', 'slider' ),
	);
	$args = array(
		'label' => __( 'Service', 'service' ),
		'description' => __( 'Customer type post for services', 'slider' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-smiley',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'post-formats'),
		'taxonomies' => array('category', 'post_tag'),
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
	register_post_type( 'service', $args );

}
add_action( 'init', 'create_service_cpt', 0 );


?>