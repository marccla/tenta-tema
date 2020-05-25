<?php
function cptui_register_my_cpts() {

	/**
	 * Post Type: cats.
	 */

	$labels = [
		"name" => __( "cats", "kks" ),
		"singular_name" => __( "cat", "kks" ),
		"menu_name" => __( "My cats", "kks" ),
		"all_items" => __( "All cats", "kks" ),
		"add_new" => __( "Add new", "kks" ),
		"add_new_item" => __( "Add new cat", "kks" ),
		"edit_item" => __( "Edit cat", "kks" ),
		"new_item" => __( "New cat", "kks" ),
		"view_item" => __( "View cat", "kks" ),
		"view_items" => __( "View cats", "kks" ),
		"search_items" => __( "Search cats", "kks" ),
		"not_found" => __( "No cats found", "kks" ),
		"not_found_in_trash" => __( "No cats found in trash", "kks" ),
		"parent" => __( "Parent cat:", "kks" ),
		"featured_image" => __( "Featured image for this cat", "kks" ),
		"set_featured_image" => __( "Set featured image for this cat", "kks" ),
		"remove_featured_image" => __( "Remove featured image for this cat", "kks" ),
		"use_featured_image" => __( "Use as featured image for this cat", "kks" ),
		"archives" => __( "cat archives", "kks" ),
		"insert_into_item" => __( "Insert into cat", "kks" ),
		"uploaded_to_this_item" => __( "Upload to this cat", "kks" ),
		"filter_items_list" => __( "Filter cats list", "kks" ),
		"items_list_navigation" => __( "cats list navigation", "kks" ),
		"items_list" => __( "cats list", "kks" ),
		"attributes" => __( "cats attributes", "kks" ),
		"name_admin_bar" => __( "cat", "kks" ),
		"item_published" => __( "cat published", "kks" ),
		"item_published_privately" => __( "cat published privately.", "kks" ),
		"item_reverted_to_draft" => __( "cat reverted to draft.", "kks" ),
		"item_scheduled" => __( "cat scheduled", "kks" ),
		"item_updated" => __( "cat updated.", "kks" ),
		"parent_item_colon" => __( "Parent cat:", "kks" ),
	];

	$args = [
		"label" => __( "cats", "kks" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "cat", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "thumbnail", "custom-fields" ],
		"taxonomies" => [ "location", "gender" ],
	];

	register_post_type( "cat", $args );

	/**
	 * Post Type: Adoptions.
	 */

	$labels = [
		"name" => __( "Adoptions", "kks" ),
		"singular_name" => __( "Adoption", "kks" ),
		"menu_name" => __( "How To Adopt", "kks" ),
		"all_items" => __( "All Adoptions", "kks" ),
		"add_new" => __( "Add new", "kks" ),
		"add_new_item" => __( "Add new Adoption", "kks" ),
		"edit_item" => __( "Edit Adoption", "kks" ),
		"new_item" => __( "New Adoption", "kks" ),
		"view_item" => __( "View Adoption", "kks" ),
		"view_items" => __( "View Adoptions", "kks" ),
		"search_items" => __( "Search Adoptions", "kks" ),
		"not_found" => __( "No Adoptions found", "kks" ),
		"not_found_in_trash" => __( "No Adoptions found in trash", "kks" ),
		"parent" => __( "Parent Adoption:", "kks" ),
		"featured_image" => __( "Featured image for this Adoption", "kks" ),
		"set_featured_image" => __( "Set featured image for this Adoption", "kks" ),
		"remove_featured_image" => __( "Remove featured image for this Adoption", "kks" ),
		"use_featured_image" => __( "Use as featured image for this Adoption", "kks" ),
		"archives" => __( "Adoption archives", "kks" ),
		"insert_into_item" => __( "Insert into Adoption", "kks" ),
		"uploaded_to_this_item" => __( "Upload to this Adoption", "kks" ),
		"filter_items_list" => __( "Filter Adoptions list", "kks" ),
		"items_list_navigation" => __( "Adoptions list navigation", "kks" ),
		"items_list" => __( "Adoptions list", "kks" ),
		"attributes" => __( "Adoptions attributes", "kks" ),
		"name_admin_bar" => __( "Adoption", "kks" ),
		"item_published" => __( "Adoption published", "kks" ),
		"item_published_privately" => __( "Adoption published privately.", "kks" ),
		"item_reverted_to_draft" => __( "Adoption reverted to draft.", "kks" ),
		"item_scheduled" => __( "Adoption scheduled", "kks" ),
		"item_updated" => __( "Adoption updated.", "kks" ),
		"parent_item_colon" => __( "Parent Adoption:", "kks" ),
	];

	$args = [
		"label" => __( "Adoptions", "kks" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "adoption", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "custom-fields" ],
	];

	register_post_type( "adoption", $args );

	/**
	 * Post Type: Success Stories.
	 */

	$labels = [
		"name" => __( "Success Stories", "kks" ),
		"singular_name" => __( "Success Story", "kks" ),
		"menu_name" => __( "My Success Stories", "kks" ),
		"all_items" => __( "All Success Stories", "kks" ),
		"add_new" => __( "Add new", "kks" ),
		"add_new_item" => __( "Add new Success Story", "kks" ),
		"edit_item" => __( "Edit Success Story", "kks" ),
		"new_item" => __( "New Success Story", "kks" ),
		"view_item" => __( "View Success Story", "kks" ),
		"view_items" => __( "View Success Stories", "kks" ),
		"search_items" => __( "Search Success Stories", "kks" ),
		"not_found" => __( "No Success Stories found", "kks" ),
		"not_found_in_trash" => __( "No Success Stories found in trash", "kks" ),
		"parent" => __( "Parent Success Story:", "kks" ),
		"featured_image" => __( "Featured image for this Success Story", "kks" ),
		"set_featured_image" => __( "Set featured image for this Success Story", "kks" ),
		"remove_featured_image" => __( "Remove featured image for this Success Story", "kks" ),
		"use_featured_image" => __( "Use as featured image for this Success Story", "kks" ),
		"archives" => __( "Success Story archives", "kks" ),
		"insert_into_item" => __( "Insert into Success Story", "kks" ),
		"uploaded_to_this_item" => __( "Upload to this Success Story", "kks" ),
		"filter_items_list" => __( "Filter Success Stories list", "kks" ),
		"items_list_navigation" => __( "Success Stories list navigation", "kks" ),
		"items_list" => __( "Success Stories list", "kks" ),
		"attributes" => __( "Success Stories attributes", "kks" ),
		"name_admin_bar" => __( "Success Story", "kks" ),
		"item_published" => __( "Success Story published", "kks" ),
		"item_published_privately" => __( "Success Story published privately.", "kks" ),
		"item_reverted_to_draft" => __( "Success Story reverted to draft.", "kks" ),
		"item_scheduled" => __( "Success Story scheduled", "kks" ),
		"item_updated" => __( "Success Story updated.", "kks" ),
		"parent_item_colon" => __( "Parent Success Story:", "kks" ),
	];

	$args = [
		"label" => __( "Success Stories", "kks" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "success_stories", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "custom-fields" ],
	];

	register_post_type( "success_stories", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

