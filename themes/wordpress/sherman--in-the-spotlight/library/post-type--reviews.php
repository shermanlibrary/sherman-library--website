<?php
/* ==================
 * $Reviews
 * -- a venue for reviewing books, games, movies, and linking them out
 * to bibrecords.
 * 1. Upload a book cover, etc.
 * 2. Write the review.
 * 3. Link-out to the NovaCat Record
 * 5. Rate on a scale? Maybe?
 */

// let's create the function for the custom type
function post_type_reviews() { 
	// creating (registering) the custom type 
	register_post_type( 'spotlight_reviews', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Reviews', 'bonestheme'), /* This is the Title of the Group */
			'singular_name' => __('Review', 'bonestheme'), /* This is the individual type */
			'all_items' => __('See Every Review', 'bonestheme'), /* the all items menu item */
			'add_new' => __('Write a Review', 'bonestheme'), /* The add new menu item */
			'add_new_item' => __('Write a New Review', 'bonestheme'), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __('Edit this Review', 'bonestheme'), /* Edit Display Title */
			'new_item' => __('Review Something New', 'bonestheme'), /* New Display Title */
			'view_item' => __('Read this Review', 'bonestheme'), /* View Display Title */
			'search_items' => __('Search Reviews', 'bonestheme'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found.', 'bonestheme'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in the trash', 'bonestheme'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Promote great books, games, and other material.', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 5, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'review', 'with_front' => false ), /* you can specify it's url slug */
			'has_archive' => 'reviews', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'thumbnail', 'revisions', 'sticky')
	 	) /* end of options */
	); /* end of register post type */
	
	/* this ads your post categories to your custom post type */
	//register_taxonomy_for_object_type('category', 'spotlight_databases');
	/* this ads your post tags to your custom post type */
	//register_taxonomy_for_object_type('post_tag', 'spotlight_databases');
	
} 

	// adding the function to the Wordpress init
	add_action( 'init', 'post_type_reviews');
	

?>
