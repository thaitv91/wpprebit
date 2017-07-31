<?php
	// Register Custom Post Type
function testimonial() {

	$labels = array(
		'name'                  => _x( 'Post Types', 'Post Type General Name', 'vgs' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'vgs' ),
		'menu_name'             => __( 'Testimonial', 'vgs' ),
		'name_admin_bar'        => __( 'Post Type', 'vgs' ),
		'archives'              => __( 'Item Archives', 'vgs' ),
		'parent_item_colon'     => __( 'Parent Item:', 'vgs' ),
		'all_items'             => __( 'All Items', 'vgs' ),
		'add_new_item'          => __( 'Add New Item', 'vgs' ),
		'add_new'               => __( 'Add New', 'vgs' ),
		'new_item'              => __( 'New Item', 'vgs' ),
		'edit_item'             => __( 'Edit Item', 'vgs' ),
		'update_item'           => __( 'Update Item', 'vgs' ),
		'view_item'             => __( 'View Item', 'vgs' ),
		'search_items'          => __( 'Search Item', 'vgs' ),
		'not_found'             => __( 'Not found', 'vgs' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'vgs' ),
		'featured_image'        => __( 'Featured Image', 'vgs' ),
		'set_featured_image'    => __( 'Set featured image', 'vgs' ),
		'remove_featured_image' => __( 'Remove featured image', 'vgs' ),
		'use_featured_image'    => __( 'Use as featured image', 'vgs' ),
		'insert_into_item'      => __( 'Insert into item', 'vgs' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'vgs' ),
		'items_list'            => __( 'Items list', 'vgs' ),
		'items_list_navigation' => __( 'Items list navigation', 'vgs' ),
		'filter_items_list'     => __( 'Filter items list', 'vgs' ),
	);
	$args = array(
		'label'                 => __( 'Testimonial', 'vgs' ),
		'description'           => __( 'Testimonial', 'vgs' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimonial', $args );

}
add_action( 'init', 'testimonial', 0 );


// Register Custom Post Type
function faq() {

	$labels = array(
		'name'                  => _x( 'FAQ', 'Post Type General Name', 'vgs' ),
		'singular_name'         => _x( 'FAQ', 'Post Type Singular Name', 'vgs' ),
		'menu_name'             => __( 'FAQ', 'vgs' ),
		'name_admin_bar'        => __( 'Post Type', 'vgs' ),
		'archives'              => __( 'Item Archives', 'vgs' ),
		'parent_item_colon'     => __( 'Parent Item:', 'vgs' ),
		'all_items'             => __( 'All Items', 'vgs' ),
		'add_new_item'          => __( 'Add New Item', 'vgs' ),
		'add_new'               => __( 'Add New', 'vgs' ),
		'new_item'              => __( 'New Item', 'vgs' ),
		'edit_item'             => __( 'Edit Item', 'vgs' ),
		'update_item'           => __( 'Update Item', 'vgs' ),
		'view_item'             => __( 'View Item', 'vgs' ),
		'search_items'          => __( 'Search Item', 'vgs' ),
		'not_found'             => __( 'Not found', 'vgs' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'vgs' ),
		'featured_image'        => __( 'Featured Image', 'vgs' ),
		'set_featured_image'    => __( 'Set featured image', 'vgs' ),
		'remove_featured_image' => __( 'Remove featured image', 'vgs' ),
		'use_featured_image'    => __( 'Use as featured image', 'vgs' ),
		'insert_into_item'      => __( 'Insert into item', 'vgs' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'vgs' ),
		'items_list'            => __( 'Items list', 'vgs' ),
		'items_list_navigation' => __( 'Items list navigation', 'vgs' ),
		'filter_items_list'     => __( 'Filter items list', 'vgs' ),
	);
	$args = array(
		'label'                 => __( 'FAQ', 'vgs' ),
		'description'           => __( 'FAQ', 'vgs' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', ),
		'taxonomies'            => array( 'faq_category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-tickets-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'rewrite'           	=> array( 'slug' => 'faq-page' ),
	);
	register_post_type( 'faq', $args );

}
add_action( 'init', 'faq', 0 );

// Register Custom Taxonomy
function faq_category() {

	$labels = array(
		'name'                       => _x( 'Category', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Category', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'faq_category', array( 'faq' ), $args );

}
add_action( 'init', 'faq_category', 0 );

// Register Custom Post Type
function gallery() {

	$labels = array(
		'name'                  => _x( 'Gallery', 'Post Type General Name', 'vgs' ),
		'singular_name'         => _x( 'Gallery', 'Post Type Singular Name', 'vgs' ),
		'menu_name'             => __( 'Gallery', 'vgs' ),
		'name_admin_bar'        => __( 'Post Type', 'vgs' ),
		'archives'              => __( 'Item Archives', 'vgs' ),
		'parent_item_colon'     => __( 'Parent Item:', 'vgs' ),
		'all_items'             => __( 'All Items', 'vgs' ),
		'add_new_item'          => __( 'Add New Item', 'vgs' ),
		'add_new'               => __( 'Add New', 'vgs' ),
		'new_item'              => __( 'New Item', 'vgs' ),
		'edit_item'             => __( 'Edit Item', 'vgs' ),
		'update_item'           => __( 'Update Item', 'vgs' ),
		'view_item'             => __( 'View Item', 'vgs' ),
		'search_items'          => __( 'Search Item', 'vgs' ),
		'not_found'             => __( 'Not found', 'vgs' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'vgs' ),
		'featured_image'        => __( 'Featured Image', 'vgs' ),
		'set_featured_image'    => __( 'Set featured image', 'vgs' ),
		'remove_featured_image' => __( 'Remove featured image', 'vgs' ),
		'use_featured_image'    => __( 'Use as featured image', 'vgs' ),
		'insert_into_item'      => __( 'Insert into item', 'vgs' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'vgs' ),
		'items_list'            => __( 'Items list', 'vgs' ),
		'items_list_navigation' => __( 'Items list navigation', 'vgs' ),
		'filter_items_list'     => __( 'Filter items list', 'vgs' ),
	);
	$args = array(
		'label'                 => __( 'Gallery', 'vgs' ),
		'description'           => __( 'Gallery', 'vgs' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'            => array( 'gallery_category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'rewrite'           	=> array( 'slug' => 'gallery-page' ),
	);
	register_post_type( 'gallery', $args );

}
add_action( 'init', 'gallery', 0 );

// Register Custom Taxonomy
function gallery_category() {

	$labels = array(
		'name'                       => _x( 'Category', 'Taxonomy General Name', 'vgs' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'vgs' ),
		'menu_name'                  => __( 'Category', 'vgs' ),
		'all_items'                  => __( 'All Items', 'vgs' ),
		'parent_item'                => __( 'Parent Item', 'vgs' ),
		'parent_item_colon'          => __( 'Parent Item:', 'vgs' ),
		'new_item_name'              => __( 'New Item Name', 'vgs' ),
		'add_new_item'               => __( 'Add New Item', 'vgs' ),
		'edit_item'                  => __( 'Edit Item', 'vgs' ),
		'update_item'                => __( 'Update Item', 'vgs' ),
		'view_item'                  => __( 'View Item', 'vgs' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'vgs' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'vgs' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'vgs' ),
		'popular_items'              => __( 'Popular Items', 'vgs' ),
		'search_items'               => __( 'Search Items', 'vgs' ),
		'not_found'                  => __( 'Not Found', 'vgs' ),
		'no_terms'                   => __( 'No items', 'vgs' ),
		'items_list'                 => __( 'Items list', 'vgs' ),
		'items_list_navigation'      => __( 'Items list navigation', 'vgs' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'           		 => array( 'slug' => 'gallery-category' ),
	);
	register_taxonomy( 'gallery_category', array( 'gallery' ), $args );

}
add_action( 'init', 'gallery_category', 0 );
?>