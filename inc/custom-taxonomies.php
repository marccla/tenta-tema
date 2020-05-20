<?php
function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Locations.
	 */

	$labels = [
		"name" => __( "Locations", "kks" ),
		"singular_name" => __( "Location", "kks" ),
		"menu_name" => __( "Locations", "kks" ),
		"all_items" => __( "All Locations", "kks" ),
		"edit_item" => __( "Edit Location", "kks" ),
		"view_item" => __( "View Location", "kks" ),
		"update_item" => __( "Update Location name", "kks" ),
		"add_new_item" => __( "Add new Location", "kks" ),
		"new_item_name" => __( "New Location name", "kks" ),
		"parent_item" => __( "Parent Location", "kks" ),
		"parent_item_colon" => __( "Parent Location:", "kks" ),
		"search_items" => __( "Search Locations", "kks" ),
		"popular_items" => __( "Popular Locations", "kks" ),
		"separate_items_with_commas" => __( "Separate Locations with commas", "kks" ),
		"add_or_remove_items" => __( "Add or remove Locations", "kks" ),
		"choose_from_most_used" => __( "Choose from the most used Locations", "kks" ),
		"not_found" => __( "No Locations found", "kks" ),
		"no_terms" => __( "No Locations", "kks" ),
		"items_list_navigation" => __( "Locations list navigation", "kks" ),
		"items_list" => __( "Locations list", "kks" ),
	];

	$args = [
		"label" => __( "Locations", "kks" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'location', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "location",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		];
	register_taxonomy( "location", [ "cat" ], $args );

	/**
	 * Taxonomy: Genders.
	 */

	$labels = [
		"name" => __( "Genders", "kks" ),
		"singular_name" => __( "Gender", "kks" ),
		"menu_name" => __( "Genders", "kks" ),
		"all_items" => __( "All Genders", "kks" ),
		"edit_item" => __( "Edit Gender", "kks" ),
		"view_item" => __( "View Gender", "kks" ),
		"update_item" => __( "Update Gender name", "kks" ),
		"add_new_item" => __( "Add new Gender", "kks" ),
		"new_item_name" => __( "New Gender name", "kks" ),
		"parent_item" => __( "Parent Gender", "kks" ),
		"parent_item_colon" => __( "Parent Gender:", "kks" ),
		"search_items" => __( "Search Genders", "kks" ),
		"popular_items" => __( "Popular Genders", "kks" ),
		"separate_items_with_commas" => __( "Separate Genders with commas", "kks" ),
		"add_or_remove_items" => __( "Add or remove Genders", "kks" ),
		"choose_from_most_used" => __( "Choose from the most used Genders", "kks" ),
		"not_found" => __( "No Genders found", "kks" ),
		"no_terms" => __( "No Genders", "kks" ),
		"items_list_navigation" => __( "Genders list navigation", "kks" ),
		"items_list" => __( "Genders list", "kks" ),
	];

	$args = [
		"label" => __( "Genders", "kks" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'gender', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "gender",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		];
	register_taxonomy( "gender", [ "cat" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );
