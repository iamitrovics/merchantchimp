<?php
/**
 * ACF Main Settings
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

//  Testimonials
function wtp_testimonials() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Testimonials', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Testimonials', 'text_domain' ),
		'name_admin_bar'        => __( 'Edit Testimonials', 'text_domain' ),
		'archives'              => __( 'Аrchive', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Testimonials', 'text_domain' ),
		'add_new_item'          => __( 'Add New Testimonial', 'text_domain' ),
		'add_new'               => __( 'Add New Testimonial', 'text_domain' ),
		'new_item'              => __( 'New Testimonial', 'text_domain' ),
		'edit_item'             => __( 'Edit Testimonial', 'text_domain' ),
		'update_item'           => __( 'Update Testimonial', 'text_domain' ),
		'view_item'             => __( 'View Testimonial', 'text_domain' ),
		'search_items'          => __( 'Search', 'text_domain' ),
		'not_found'             => __( 'Not Found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not Found', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'List of Cards', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Testimonials', 'text_domain' ),
		'description'           => __( 'Testimonials', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimonials', $args );

}
add_action( 'init', 'wtp_testimonials', 0 );

//  Cities
function wtp_cities() {

	$labels = array(
		'name'                  => _x( 'Cities', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Cities', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Cities', 'text_domain' ),
		'name_admin_bar'        => __( 'Edit Cities', 'text_domain' ),
		'archives'              => __( 'Аrchive', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Cities', 'text_domain' ),
		'add_new_item'          => __( 'Add New City', 'text_domain' ),
		'add_new'               => __( 'Add New City', 'text_domain' ),
		'new_item'              => __( 'New City', 'text_domain' ),
		'edit_item'             => __( 'Edit City', 'text_domain' ),
		'update_item'           => __( 'Update City', 'text_domain' ),
		'view_item'             => __( 'View City', 'text_domain' ),
		'search_items'          => __( 'Search', 'text_domain' ),
		'not_found'             => __( 'Not Found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not Found', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'List of Cards', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Management Profiles', 'text_domain' ),
		'description'           => __( 'anagement Profiles', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-location-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'with_front' => false,
	);
	register_post_type( 'cities', $args );

}
add_action( 'init', 'wtp_cities', 0 );

//  Locations
function wtp_products() {

	$labels = array(
		'name'                  => _x( 'Products', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Products', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Products', 'text_domain' ),
		'name_admin_bar'        => __( 'Edit Products', 'text_domain' ),
		'archives'              => __( 'Аrchive', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Products', 'text_domain' ),
		'add_new_item'          => __( 'Add New Product', 'text_domain' ),
		'add_new'               => __( 'Add New Product', 'text_domain' ),
		'new_item'              => __( 'New Product', 'text_domain' ),
		'edit_item'             => __( 'Edit Product', 'text_domain' ),
		'update_item'           => __( 'Update Product', 'text_domain' ),
		'view_item'             => __( 'View Product', 'text_domain' ),
		'search_items'          => __( 'Search', 'text_domain' ),
		'not_found'             => __( 'Not Found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not Found', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'List of Cards', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Management Profiles', 'text_domain' ),
		'description'           => __( 'anagement Profiles', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-portfolio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'products', $args );

}
add_action( 'init', 'wtp_products', 0 );



//  Accessories
function wtp_accessories() {

	$labels = array(
		'name'                  => _x( 'Accessories', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Accessories', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Accessories', 'text_domain' ),
		'name_admin_bar'        => __( 'Edit Accessories', 'text_domain' ),
		'archives'              => __( 'Аrchive', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Accessories', 'text_domain' ),
		'add_new_item'          => __( 'Add New Accessory', 'text_domain' ),
		'add_new'               => __( 'Add New Accessory', 'text_domain' ),
		'new_item'              => __( 'New Accessory', 'text_domain' ),
		'edit_item'             => __( 'Edit Accessory', 'text_domain' ),
		'update_item'           => __( 'Update Accessory', 'text_domain' ),
		'view_item'             => __( 'View Accessory', 'text_domain' ),
		'search_items'          => __( 'Search', 'text_domain' ),
		'not_found'             => __( 'Not Found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not Found', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'List of Cards', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Management Profiles', 'text_domain' ),
		'description'           => __( 'anagement Profiles', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-portfolio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'accessories', $args );

}
add_action( 'init', 'wtp_accessories', 0 );


//  Induwtries
function wtp_industry() {

	$labels = array(
		'name'                  => _x( 'Industires', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Industires', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Industires', 'text_domain' ),
		'name_admin_bar'        => __( 'Edit Industires', 'text_domain' ),
		'archives'              => __( 'Аrchive', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Industires', 'text_domain' ),
		'add_new_item'          => __( 'Add New Industry', 'text_domain' ),
		'add_new'               => __( 'Add New Industry', 'text_domain' ),
		'new_item'              => __( 'New Industry', 'text_domain' ),
		'edit_item'             => __( 'Edit Industry', 'text_domain' ),
		'update_item'           => __( 'Update Industry', 'text_domain' ),
		'view_item'             => __( 'View Industry', 'text_domain' ),
		'search_items'          => __( 'Search', 'text_domain' ),
		'not_found'             => __( 'Not Found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not Found', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'List of Cards', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Management Profiles', 'text_domain' ),
		'description'           => __( 'anagement Profiles', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-portfolio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'industry', $args );

}
add_action( 'init', 'wtp_industry', 0 );
