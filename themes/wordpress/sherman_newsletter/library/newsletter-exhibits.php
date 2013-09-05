<?php

// let's create the function for the custom type
function newsletter_exhibits() { 
	// creating (registering) the custom type 
	register_post_type( 'newsletter_exhibits', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Banners', 'bonestheme'), /* This is the Title of the Group */
			'singular_name' => __('Banner', 'bonestheme'), /* This is the individual type */
			'all_items' => __('All Banners', 'bonestheme'), /* the all items menu item */
			'add_new' => __('New Banner', 'bonestheme'), /* The add new menu item */
			'add_new_item' => __('Add New Banner', 'bonestheme'), /* Add New Display Title */
			'edit' => __( 'Edit an Banner', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __('Edit Banner', 'bonestheme'), /* Edit Display Title */
			'new_item' => __('New Banner', 'bonestheme'), /* New Display Title */
			'view_item' => __('View all Banners', 'bonestheme'), /* View Display Title */
			'search_items' => __('Search Banners', 'bonestheme'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.', 'bonestheme'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash', 'bonestheme'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Banners have a prominent position in your newsletter.', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 2, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/exhibits.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'events', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'events', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'sticky')
	 	) /* end of options */
	); /* end of register post type */
	
	/* this adds your post categories to your custom post type */
	register_taxonomy_for_object_type('category', 'newsletter_exhibits');
	/* this adds your post tags to your custom post type */
	register_taxonomy_for_object_type('post_tag', 'newsletter_exhibits');
	
} 

	// adding the function to the Wordpress init
	add_action( 'init', 'newsletter_exhibits');

	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/

?>