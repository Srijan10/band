<?php

// Register Custom Post Type happy_client
function create_happyclient_cpt() {

	$labels = array(
		'name' => _x( 'happy_clients', 'Post Type General Name', 'happyclients' ),
		'singular_name' => _x( 'happy_client', 'Post Type Singular Name', 'happyclients' ),
		'menu_name' => _x( 'happy_clients', 'Admin Menu text', 'happyclients' ),
		'name_admin_bar' => _x( 'happy_client', 'Add New on Toolbar', 'happyclients' ),
		'archives' => __( 'happy_client Archives', 'happyclients' ),
		'attributes' => __( 'happy_client Attributes', 'happyclients' ),
		'parent_item_colon' => __( 'Parent happy_client:', 'happyclients' ),
		'all_items' => __( 'All happy_clients', 'happyclients' ),
		'add_new_item' => __( 'Add New happy_client', 'happyclients' ),
		'add_new' => __( 'Add New', 'happyclients' ),
		'new_item' => __( 'New happy_client', 'happyclients' ),
		'edit_item' => __( 'Edit happy_client', 'happyclients' ),
		'update_item' => __( 'Update happy_client', 'happyclients' ),
		'view_item' => __( 'View happy_client', 'happyclients' ),
		'view_items' => __( 'View happy_clients', 'happyclients' ),
		'search_items' => __( 'Search happy_client', 'happyclients' ),
		'not_found' => __( 'Not found', 'happyclients' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'happyclients' ),
		'featured_image' => __( 'Featured Image', 'happyclients' ),
		'set_featured_image' => __( 'Set featured image', 'happyclients' ),
		'remove_featured_image' => __( 'Remove featured image', 'happyclients' ),
		'use_featured_image' => __( 'Use as featured image', 'happyclients' ),
		'insert_into_item' => __( 'Insert into happy_client', 'happyclients' ),
		'uploaded_to_this_item' => __( 'Uploaded to this happy_client', 'happyclients' ),
		'items_list' => __( 'happy_clients list', 'happyclients' ),
		'items_list_navigation' => __( 'happy_clients list navigation', 'happyclients' ),
		'filter_items_list' => __( 'Filter happy_clients list', 'happyclients' ),
	);
	$args = array(
		'label' => __( 'happy_client', 'happyclients' ),
		'description' => __( 'Cusotmer page for comments', 'happyclients' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-format-quote',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author', 'post-formats'),
		'taxonomies' => array(),
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
	register_post_type( 'happyclient', $args );

}
add_action( 'init', 'create_happyclient_cpt', 0 );












?>