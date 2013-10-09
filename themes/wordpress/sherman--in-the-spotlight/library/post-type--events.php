<?php
/* ==================
 * $Events
 * -- supplementary to Helios
 * 1. Upload an Image
 */

// let's create the function for the custom type
function post_type_events() { 
	// creating (registering) the custom type 
	register_post_type( 'spotlight_events', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Events', 'bonestheme'), /* This is the Title of the Group */
			'singular_name' => __('Event', 'bonestheme'), /* This is the individual type */
			'all_items' => __('All Events', 'bonestheme'), /* the all items menu item */
			'add_new' => __('Feature an Event', 'bonestheme'), /* The add new menu item */
			'add_new_item' => __('Feature a New Event', 'bonestheme'), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __('Edit this Event', 'bonestheme'), /* Edit Display Title */
			'new_item' => __('Feature an Event', 'bonestheme'), /* New Display Title */
			'view_item' => __('View this Event', 'bonestheme'), /* View Display Title */
			'search_items' => __('Search Spotlit Events', 'bonestheme'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found.', 'bonestheme'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in the trash', 'bonestheme'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'More effectively promote special events, exhibits, etc.', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 6, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'event', 'with_front' => false ), /* you can specify it's url slug */
			'has_archive' => 'events', /* you can rename the slug here */
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
	add_action( 'init', 'post_type_events');
	
    register_taxonomy( 'event_type', 
        array('spotlight_events'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
        array('hierarchical' => true,     /* if this is true it acts like categories */             
            'labels' => array(
                'name' => __( 'Event Types', 'bonestheme' ), /* name of the custom taxonomy */
                'singular_name' => __( 'Event Type', 'bonestheme' ), /* single taxonomy name */
                'search_items' =>  __( 'Search Event Types', 'bonestheme' ), /* search title for taxomony */
                'all_items' => __( 'All Event Types', 'bonestheme' ), /* all title for taxonomies */
                'parent_item' => __( 'Parent Event Type', 'bonestheme' ), /* parent title for taxonomy */
                'parent_item_colon' => __( 'Parent Event Type:', 'bonestheme' ), /* parent taxonomy title */
                'edit_item' => __( 'Edit Event Type', 'bonestheme' ), /* edit custom taxonomy title */
                'update_item' => __( 'Update Event Type', 'bonestheme' ), /* update title for taxonomy */
                'add_new_item' => __( 'Add New Event Type', 'bonestheme' ), /* add new title for taxonomy */
                'new_item_name' => __( 'New Event Type Name', 'bonestheme' ) /* name title for taxonomy */
            ),
            'show_ui' => true,
            'query_var' => true,
            'capabilities' => array(
                'manage_terms' => 'admin',
                'edit_terms' => 'admin',
                'delete_terms' => 'admin',
                'assign_terms' => 'admin'
            ),
        )
    ); 

?>