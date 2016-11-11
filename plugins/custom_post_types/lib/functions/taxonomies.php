<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Register Product Taxonomy
function register_product_type_taxonomy() {

	$labels = array(
		'name'                       => 'Product Types',
		'singular_name'              => 'Product Type',
		'menu_name'                  => 'Product Types',
		'all_items'                  => 'All Product Types',
		'parent_item'                => 'Parent Product Type',
		'parent_item_colon'          => 'Parent Product Type:',
		'new_item_name'              => 'New Product Type Name',
		'add_new_item'               => 'Add Product Type',
		'edit_item'                  => 'Edit Product Type',
		'update_item'                => 'Update Product Type',
		'view_item'                  => 'View Product Type',
		'separate_items_with_commas' => 'Separate product types with commas',
		'add_or_remove_items'        => 'Add or remove custom_post_types types',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Product Types',
		'search_items'               => 'Search Product Types',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Product Types',
		'items_list'                 => 'Product type list',
		'items_list_navigation'      => 'Product types list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'product_type', array( 'product' ), $args );

}
add_action( 'init', 'register_product_type_taxonomy', 0 );

// Register Adventure Taxonomy
function register_adventure_type_taxonomy() {

	$labels = array(
		'name'                       => 'Adventure Types',
		'singular_name'              => 'Adventure Type',
		'menu_name'                  => 'Adventure Types',
		'all_items'                  => 'All Adventure Types',
		'parent_item'                => 'Parent Adventure Type',
		'parent_item_colon'          => 'Parent Adventure Type:',
		'new_item_name'              => 'New Adventure Type Name',
		'add_new_item'               => 'Add Adventure Type',
		'edit_item'                  => 'Edit Adventure Type',
		'update_item'                => 'Update Adventure Type',
		'view_item'                  => 'View Adventure Type',
		'separate_items_with_commas' => 'Separate adventure types with commas',
		'add_or_remove_items'        => 'Add or remove adventure types',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Adventure Types',
		'search_items'               => 'Search Adventure Types',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Adventure Types',
		'items_list'                 => 'Adventure type list',
		'items_list_navigation'      => 'Adventure types list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'adventure_type', array( 'adventure' ), $args );

}
add_action( 'init', 'register_adventure_type_taxonomy', 0 );
