<?php

/*********************
LAUNCH BONES
Let's fire off all the functions
and tools. I put it up here so it's
right up top and clean.
*********************/

// we're firing all out initial functions at the start
add_action('after_setup_theme','bones_ahoy', 15);

function bones_ahoy() {
    
    // launching operation cleanup
    add_action('init', 'bones_head_cleanup');
    // remove WP version from RSS
    add_filter('the_generator', 'bones_rss_version');
    // remove pesky injected css for recent comments widget
    add_filter( 'wp_head', 'bones_remove_wp_widget_recent_comments_style', 1 );
    // clean up comment styles in the head
    add_action('wp_head', 'bones_remove_recent_comments_style', 1);
    // clean up gallery output in wp
    add_filter('gallery_style', 'bones_gallery_style');

    // enqueue base scripts and styles
    add_action('wp_enqueue_scripts', 'bones_scripts_and_styles', 999);
    // ie conditional wrapper
    add_filter( 'style_loader_tag', 'bones_ie_conditional', 10, 2 );
    
    // launching this stuff after theme setup
    //add_action('after_setup_theme', 'bones_theme_support');	
    // adding sidebars to Wordpress (these are created in functions.php)
    add_action( 'widgets_init', 'bones_register_sidebars' );
    // adding the bones search form (created in functions.php)
    add_filter( 'get_search_form', 'sherman_wpsearch' );
    
    // cleaning up random code around images
    add_filter('the_content', 'bones_filter_ptags_on_images');
    // cleaning up excerpt
    add_filter('excerpt_more', 'bones_excerpt_more');
    
} /* end bones ahoy */

/*********************
WP_HEAD GOODNESS
The default wordpress head is
a mess. Let's clean it up by 
removing all the junk we don't
need. 
*********************/

function bones_head_cleanup() {
	// category feeds
	// remove_action( 'wp_head', 'feed_links_extra', 3 );                    
	// post and comment feeds
	// remove_action( 'wp_head', 'feed_links', 2 );                          
	// EditURI link
	remove_action( 'wp_head', 'rsd_link' );                               
	// windows live writer
	remove_action( 'wp_head', 'wlwmanifest_link' );                       
	// index link
	remove_action( 'wp_head', 'index_rel_link' );                         
	// previous link
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );            
	// start link
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );             
	// links for adjacent posts
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); 
	// WP version
	remove_action( 'wp_head', 'wp_generator' );                           

} /* end bones head cleanup */

// remove WP version from RSS
function bones_rss_version() { return ''; }

// remove injected CSS for recent comments widget
function bones_remove_wp_widget_recent_comments_style() {
   if ( has_filter('wp_head', 'wp_widget_recent_comments_style') ) {
      remove_filter('wp_head', 'wp_widget_recent_comments_style' );
   }
}
	
// remove injected CSS from recent comments widget
function bones_remove_recent_comments_style() {
  global $wp_widget_factory;
  if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
  }
}

// remove injected CSS from gallery
function bones_gallery_style($css) {
  return preg_replace("!<style type='text/css'>(.*?)</style>!s", '', $css);
}


/*********************
SCRIPTS & ENQEUEING
*********************/

// loading modernizr and jquery, and reply script 
function bones_scripts_and_styles() {
  if (!is_admin()) {
  
    // modernizr (without media query polyfill)
    wp_register_script( 'bones-modernizr', get_template_directory_uri() . '/library/js/libs/modernizr.custom.min.js', array(), '2.5.3', false );
 
    // register main stylesheet
    wp_register_style( 'pls-stylesheet', 'http://sherman.library.nova.edu/cdn/styles/css/public-global/public.css', array(), '0.0.1', 'all' );

    // ie-only style sheet
    wp_register_style( 'pls-ie-only', 'http://systems.library.nova.edu/cdn/styles/css/public-global/public-ie.css', array(), '0.0.1' );
    
    // comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
    	wp_enqueue_script( 'comment-reply' );
    }
    
    //  load mediaelement.js (and styles) for the instructional video post-type.
    if ( is_singular( 'academy_video' ) || is_front_page() ) {
    	wp_enqueue_style( 'wp-mediaelement' );
    	wp_enqueue_script( 'wp-mediaelement' );
    }
    //adding scripts file in the footer
    wp_register_script( 'pls-js', get_template_directory_uri() . '/library/js/scripts.min.js', array( 'jquery' ), '', true );
    
    // enqueue styles and scripts
    wp_enqueue_script( 'bones-modernizr' ); 
    wp_enqueue_style( 'pls-stylesheet' ); 
    wp_enqueue_style('pls-ie-only');
    /*
    I reccomend using a plugin to call jQuery
    using the google cdn. That way it stays cached
    and your site will load faster.
    */
    wp_enqueue_script( 'jquery' ); 
    wp_enqueue_script( 'pls-js' ); 
    
  }
}

// adding the conditional wrapper around ie stylesheet
// source: http://code.garyjones.co.uk/ie-conditional-style-sheets-wordpress/
function bones_ie_conditional( $tag, $handle ) {
	if ( 'pls-ie-only' == $handle )
		$tag = '<!--[if lt IE 9]>' . "\n" . $tag . '<![endif]-->' . "\n";
	return $tag;
} // MS Note: This was lte IE 9. I changed this because it appears IE9 is now up to snuff.



/*********************
MENUS & NAVIGATION
*********************/	

// the footer menu (should you choose to use one)
function bones_footer_links() { 
	// display the wp3 menu if available
    wp_nav_menu(array( 
    	'container' => '',                              // remove nav container
    	'container_class' => 'footer-links clearfix',   // class of container (should you choose to use it)
    	'menu' => 'Footer Links',                       // nav name
    	'menu_class' => 'nav footer-nav clearfix',      // adding custom nav class
    	'theme_location' => 'footer-links',             // where it's located in the theme
    	'before' => '',                                 // before the menu
        'after' => '',                                  // after the menu
        'link_before' => '',                            // before each link
        'link_after' => '',                             // after each link
        'depth' => 0,                                   // limit the depth of the nav
    	'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
	));
} /* end bones footer link */
 
// this is the fallback for header menu
function bones_main_nav_fallback() { 
	wp_page_menu( 'show_home=Home' ); 
}

// this is the fallback for footer menu
function bones_footer_links_fallback() { 
	/* you can put a default here if you like */ 
}


/* ==================
 * Return Library Learn Video Thumbnail
 */ // Call *only* within the loop.
function library_video_thumbnail( $size ) {
	if ( has_post_thumbnail() ) {
		return the_post_thumbnail( $size );
	}

	else {
		if ( get_post_meta( get_the_ID(), 'academy_video_file', true) != '' ) {

			$academy_video_file = get_post_meta( get_the_ID(), 'academy_video_file', true);

			return '<img src=http://www.nova.edu/library/video/' . $academy_video_file . '.jpg />';
		}	

		else {
			return false;
		}
	}
}

/*********************
RELATED POSTS FUNCTION
*********************/	
	
// Related Posts Function (call using bones_related_posts(); )
function library_related_videos() {
	echo '<ul>';
	global $post;
	$tags = wp_get_post_tags($post->ID);
	if($tags) {
		foreach($tags as $tag) { $tag_arr .= $tag->slug . ','; }
        $args = array(
        	'tag' => $tag_arr,
        	'numberposts' => 3, /* you can change this to show more */
        	'post__not_in' => array($post->ID),
        	'post_type' => 'academy_video'
     	);
        $related_posts = get_posts($args);

        if($related_posts) {
        	foreach ($related_posts as $post) : setup_postdata($post); ?>
        	
        	<?php if ( has_post_thumbnail() || ( get_post_meta( get_the_ID(), 'academy_video_file', true) != '' ) ) : ?>
        		
        		<li class="related_post thumbnail thumbnail--gallery">
        			<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
        				
        				<?php echo library_video_thumbnail('video-small'); ?>
        				
        				<span class="caption"><?php the_title(); ?></span>
        			</a>
        		</li>
	        <?php endif; ?>
	        <?php endforeach; } 
	    else { ?>
            <?php echo '<li class="no_related_post">No Related Posts Yet!</li>'; ?>
		<?php }
	}
	wp_reset_query();
	echo '</ul>';
} /* end bones related posts function */

// Recent videos function
function library_recent_videos() { // Don't use this yet. It's ugly.
	
	global $post;
	$args = array(
		'numberposts'	=> 2,
		'orderby'		=> 'post_date',
		'post_type'		=> 'academy_video'
	);	

	$recent_videos = get_posts($args);

	if ( $recent_videos ) {
		$i = 0;
		foreach ( $recent_videos as $post ) : setup_postdata( $post ); $i++?>
		<?php $thumbnail = 'http://www.nova.edu/library/video/' . get_post_meta( get_the_ID(), 'academy_video_file', true ) . '.jpg'; ?>
			<div class="recent-video threecol media thumbnail--gallery <?php if ( $i == 1 ) { echo 'first'; } elseif ( $i == 3 ) { echo 'last'; } ?>">				
				<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
					<img src="<?php echo $thumbnail ?>">
					<span class="caption"> <?php the_title(); ?> </span>
				</a>
			</div>
		<?php	endforeach;	
	} else {}
	wp_reset_query();

}

/*********************
PAGE NAVI
*********************/	

// Numeric Page Navi (built into the theme by default)
function bones_page_navi($before = '', $after = '') {
	global $wpdb, $wp_query;
	$request = $wp_query->request;
	$posts_per_page = intval(get_query_var('posts_per_page'));
	$paged = intval(get_query_var('paged'));
	$numposts = $wp_query->found_posts;
	$max_page = $wp_query->max_num_pages;
	if ( $numposts <= $posts_per_page ) { return; }
	if(empty($paged) || $paged == 0) {
		$paged = 1;
	}
	$pages_to_show = 7;
	$pages_to_show_minus_1 = $pages_to_show-1;
	$half_page_start = floor($pages_to_show_minus_1/2);
	$half_page_end = ceil($pages_to_show_minus_1/2);
	$start_page = $paged - $half_page_start;
	if($start_page <= 0) {
		$start_page = 1;
	}
	$end_page = $paged + $half_page_end;
	if(($end_page - $start_page) != $pages_to_show_minus_1) {
		$end_page = $start_page + $pages_to_show_minus_1;
	}
	if($end_page > $max_page) {
		$start_page = $max_page - $pages_to_show_minus_1;
		$end_page = $max_page;
	}
	if($start_page <= 0) {
		$start_page = 1;
	}
	echo $before.'<nav class="page-navigation"><ol class="bones_page_navi clearfix">'."";
	if ($start_page >= 2 && $pages_to_show < $max_page) {
		$first_page_text = "First";
		echo '<li class="bpn-first-page-link"><a href="'.get_pagenum_link().'" title="'.$first_page_text.'">'.$first_page_text.'</a></li>';
	}
	echo '<li class="bpn-prev-link">';
	previous_posts_link('<<');
	echo '</li>';
	for($i = $start_page; $i  <= $end_page; $i++) {
		if($i == $paged) {
			echo '<li class="bpn-current">'.$i.'</li>';
		} else {
			echo '<li><a href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
		}
	}
	echo '<li class="bpn-next-link">';
	next_posts_link('>>');
	echo '</li>';
	if ($end_page < $max_page) {
		$last_page_text = "Last";
		echo '<li class="bpn-last-page-link"><a href="'.get_pagenum_link($max_page).'" title="'.$last_page_text.'">'.$last_page_text.'</a></li>';
	}
	echo '</ol></nav>'.$after."";
} /* end page navi */

/*********************
RANDOM CLEANUP ITEMS
*********************/	

// remove the p from around imgs (http://css-tricks.com/snippets/wordpress/remove-paragraph-tags-from-around-images/)
function bones_filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

// This removes the annoying […] to a Read More link
function bones_excerpt_more($more) {
	global $post;
	// edit here if you like
	return '...  <a href="'. get_permalink($post->ID) . '" title="Read '.get_the_title($post->ID).'">Read more &raquo;</a>';
}

                  	

?>