<?php
// let's create the function for the custom type
function carousel_syndicated() { 
	// creating (registering) the custom type 
	register_post_type( 'carousel_syndicated', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Marketing', 'bonestheme'), /* This is the Title of the Group */
			'singular_name' => __('Slide', 'bonestheme'), /* This is the individual type */
			'all_items' => __('All Slides', 'bonestheme'), /* the all items menu item */
			'add_new' => __('Add New', 'bonestheme'), /* The add new menu item */
			'add_new_item' => __('Add New Slide', 'bonestheme'), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __('Edit Slide', 'bonestheme'), /* Edit Display Title */
			'new_item' => __('New Slide', 'bonestheme'), /* New Display Title */
			'view_item' => __('View Slide', 'bonestheme'), /* View Display Title */
			'search_items' => __('Search Slides', 'bonestheme'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.', 'bonestheme'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash', 'bonestheme'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'These are graphics that are syndicated through carousels and slideshows.', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 2, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'carousels', 'with_front' => false ), /* you can specify it's url slug */
			'has_archive' => 'carousels', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 
				'title', 
				'editor', 
				'author', 
				'thumbnail', 
			//	'excerpt', 
			//	'trackbacks', 
				'custom-fields', 
			//	'comments', 
				'revisions', 
				'sticky')
	 	) /* end of options */
	); /* end of register post type */
	
	/* this ads your post categories to your custom post type */
	//register_taxonomy_for_object_type('category', 'carousel_syndicated');
	/* this ads your post tags to your custom post type */
	//register_taxonomy_for_object_type('post_tag', 'carousel_syndicated');
	
} 

	// adding the function to the Wordpress init
	add_action( 'init', 'carousel_syndicated');
	
	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	
    register_taxonomy( 'carousel_audience', 
    	array('carousel_syndicated'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => true,     /* if this is true it acts like categories */             
    		'labels' => array(
    			'name' => __( 'Audience', 'bonestheme' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Audience', 'bonestheme' ), /* single taxonomy name */
    			'search_items' =>  __( 'Find a specific audience', 'bonestheme' ), /* search title for taxomony */
    			'all_items' => __( 'All Audiences', 'bonestheme' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Audience', 'bonestheme' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Audience:', 'bonestheme' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Audience', 'bonestheme' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Audience', 'bonestheme' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Create a New Audience', 'bonestheme' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Audience Name', 'bonestheme' ) /* name title for taxonomy */
    		),
    		'show_ui' => true,
    		'query_var' => true,
    	)
    );  

    register_taxonomy( 'carousel_for_device', 
    	array('carousel_syndicated'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => true,     /* if this is true it acts like categories */             
    		'labels' => array(
    			'name' => __( 'Device', 'bonestheme' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Device', 'bonestheme' ), /* single taxonomy name */
    			'search_items' =>  __( 'Find a specific device', 'bonestheme' ), /* search title for taxomony */
    			'all_items' => __( 'All Devices', 'bonestheme' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Device', 'bonestheme' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Device:', 'bonestheme' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Device', 'bonestheme' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Device', 'bonestheme' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Create a New Device', 'bonestheme' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Device Name', 'bonestheme' ) /* name title for taxonomy */
    		),
    		'show_ui' => true,
    		'query_var' => true,
    	)
    );   

/* ==================
 * User-Friendly Labeling
 */ // 
function carousel_syndicated_label_rewrite($translation, $text, $domain) {
	global $post;
        if ( !isset( $post->post_type ) ) { return $translation; }
	$translations = &get_translations_for_domain($domain);
	$translation_array = array();
	switch ($post->post_type) {
		case 'carousel_syndicated': // enter your post type name here
			$translation_array = array(
				//'Excerpt' => 'A brief summary of the video:'
			);
			break;
	}
 
	if (array_key_exists($text, $translation_array)) {
		return $translations->translate($translation_array[$text]);
	}
	return $translation;
}
add_filter('gettext', 'carousel_syndicated_label_rewrite', 10, 4);

/* ==================
 * Syndicated Carousel Custom Fields
 * ================== */
function carousel_syndicated_fields($post_id) {

    if ( $_GET['post_type'] == 'carousel_syndicated' ) {
 
        //add_post_meta($post_id, 'Caption', '', true);
        add_post_meta($post_id, 'Description', '', true);
        add_post_meta($post_id, 'Link', '', true);
 
    }

    return true;
}
 
add_action('wp_insert_post', 'carousel_syndicated_fields');	

?>