<?php

// let's create the function for the custom type
function newsletter_events() { 
	// creating (registering) the custom type 
	register_post_type( 'newsletter_events', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Events', 'bonestheme'), /* This is the Title of the Group */
			'singular_name' => __('Event', 'bonestheme'), /* This is the individual type */
			'all_items' => __('All Events', 'bonestheme'), /* the all items menu item */
			'add_new' => __('New Event', 'bonestheme'), /* The add new menu item */
			'add_new_item' => __('Add New Event', 'bonestheme'), /* Add New Display Title */
			'edit' => __( 'Edit an Event', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __('Edit Event', 'bonestheme'), /* Edit Display Title */
			'new_item' => __('New Event', 'bonestheme'), /* New Display Title */
			'view_item' => __('View all Events', 'bonestheme'), /* View Display Title */
			'search_items' => __('Search Events', 'bonestheme'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.', 'bonestheme'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash', 'bonestheme'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Feature events to be advertised in your newsletter', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 2, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/events.gif', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'events', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'events', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'sticky')
	 	) /* end of options */
	); /* end of register post type */
	
	/* this adds your post categories to your custom post type */
	register_taxonomy_for_object_type('category', 'newsletter_events');
	/* this adds your post tags to your custom post type */
	register_taxonomy_for_object_type('post_tag', 'newsletter_events');
	
} 

	// adding the function to the Wordpress init
	add_action( 'init', 'newsletter_events');

/* ==========================
 * Event Date and Helios Link */
function newsletter_events_custom_fields($post_id) {

    if ( $_GET['post_type'] == 'newsletter_events' ) {
 
        add_post_meta($post_id, 'Date of Event (ex. mm/dd/yy)', '', true);
        add_post_meta($post_id, 'Helios URI', '', true);
 
    }

    return true;
}
 
add_action('wp_insert_post', 'newsletter_events_custom_fields');	
	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	
	// now let's add custom categories (these act like categories)
    register_taxonomy( 'custom_cat', 
    	array('custom_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => true,     /* if this is true, it acts like categories */             
    		'labels' => array(
    			'name' => __( 'Custom Categories', 'bonestheme' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Custom Category', 'bonestheme' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Custom Categories', 'bonestheme' ), /* search title for taxomony */
    			'all_items' => __( 'All Custom Categories', 'bonestheme' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Custom Category', 'bonestheme' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Custom Category:', 'bonestheme' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Custom Category', 'bonestheme' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Custom Category', 'bonestheme' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Custom Category', 'bonestheme' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Custom Category Name', 'bonestheme' ) /* name title for taxonomy */
    		),
    		'show_ui' => true,
    		'query_var' => true,
    		'rewrite' => array( 'slug' => 'custom-slug' ),
    	)
    );   
    
	// now let's add custom tags (these act like categories)
    register_taxonomy( 'custom_tag', 
    	array('custom_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => false,    /* if this is false, it acts like tags */                
    		'labels' => array(
    			'name' => __( 'Custom Tags', 'bonestheme' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Custom Tag', 'bonestheme' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Custom Tags', 'bonestheme' ), /* search title for taxomony */
    			'all_items' => __( 'All Custom Tags', 'bonestheme' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Custom Tag', 'bonestheme' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Custom Tag:', 'bonestheme' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Custom Tag', 'bonestheme' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Custom Tag', 'bonestheme' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Custom Tag', 'bonestheme' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Custom Tag Name', 'bonestheme' ) /* name title for taxonomy */
    		),
    		'show_ui' => true,
    		'query_var' => true,
    	)
    ); 
    
    /*
    	looking for custom meta boxes?
    	check out this fantastic tool:
    	https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
    */
	

?>