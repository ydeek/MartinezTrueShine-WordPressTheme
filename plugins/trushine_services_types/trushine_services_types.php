<?php 
/*
   Plugin Name: Martinez Tru Shine - Services Types 
   Plugin URI: 
   Description: Adds new services 
   Vrsion: 1.0
   Author: Yazan Deek
   Author URI: https://yazandeek.com
   Text Domain: Cleaning Services 

*/
if(!defined('ABSPATH')) die();

// Register new Custom Post Type
function trushine_service_post_type() {

	$labels = array(
		'name'                  => _x( 'Services', 'Post Type General Name', 'cleaningservices' ),
		'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'cleaningservices' ),
		'menu_name'             => __( 'Services', 'cleaningservices' ),
		'name_admin_bar'        => __( 'Services', 'cleaningservices' ),
		'archives'              => __( 'Archive', 'cleaningservices' ),
		'attributes'            => __( 'Attributes', 'cleaningservices' ),
		'parent_item_colon'     => __( 'Parent Service', 'cleaningservices' ),
		'all_items'             => __( 'All Services', 'cleaningservices' ),
		'add_new_item'          => __( 'Add Service', 'cleaningservices' ),
		'add_new'               => __( 'Add Service', 'cleaningservices' ),
		'new_item'              => __( 'New Service', 'cleaningservices' ),
		'edit_item'             => __( 'Edit Service', 'cleaningservices' ),
		'update_item'           => __( 'Update Service', 'cleaningservices' ),
		'view_item'             => __( 'View Service', 'cleaningservices' ),
		'view_items'            => __( 'View Service', 'cleaningservices' ),
		'search_items'          => __( 'Search Service', 'cleaningservices' ),
		'not_found'             => __( 'Not found', 'cleaningservices' ),
		'not_found_in_trash'    => __( 'Not found in trash', 'cleaningservices' ),
		'featured_image'        => __( 'Featured Image', 'cleaningservices' ),
		'set_featured_image'    => __( 'Save Featured Image', 'cleaningservices' ),
		'remove_featured_image' => __( 'Remove Featured Image', 'cleaningservices' ),
		'use_featured_image'    => __( 'Use as Featured Image', 'cleaningservices' ),
		'insert_into_item'      => __( 'Insert in Service', 'cleaningservices' ),
		'uploaded_to_this_item' => __( 'Add in Service', 'cleaningservices' ),
		'items_list'            => __( 'Services List', 'cleaningservices' ),
		'items_list_navigation' => __( 'Navigate to Services', 'cleaningservices' ),
		'filter_items_list'     => __( 'Filter Services', 'cleaningservices' ),
	);
	$args = array(
		'label'                 => __( 'Service', 'cleaningservices' ),
		'description'           => __( 'Services for CleaningServices Website', 'cleaningservices' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false, // False = posts - No child posts
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
        'capability_type'       => 'page'
	);
	register_post_type( 'trushine_services', $args );

}
add_action( 'init', 'trushine_service_post_type', 0 );

?>