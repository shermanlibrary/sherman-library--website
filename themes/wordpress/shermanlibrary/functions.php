<?php
/************* INCLUDE NEEDED FILES ***************/

/*
1. library/bones.php
    - head cleanup (remove rsd, uri links, junk css, ect)
	- enqeueing scripts & styles
	- theme support functions
    - custom menu output & fallbacks
	- related post function
	- page-navi function
	- removing <p> from around images
	- customizing the post excerpt
	- custom google+ integration
	- adding custom fields to user profiles
*/ require_once('library/bones.php'); // if you remove this, bones will break
    // wp thumbnails (sizes handled in functions.php)
    add_theme_support('post-thumbnails');   
    
    // default thumb size   
    set_post_thumbnail_size(125, 125, true);   
    
    // wp custom background (thx to @bransonwerner for update)
    add_theme_support( 'custom-background',
        array( 
        'default-image' => '',  // background image default
        'default-color' => '', // background color default (dont add the #)
        'wp-head-callback' => '_custom_background_cb',
        'admin-head-callback' => '',
        'admin-preview-callback' => ''
        )
    );      
    
    // rss thingy           
    add_theme_support('automatic-feed-links'); 
    
    // to add header image support go here: http://themble.com/support/adding-header-background-image-support/
    
    // adding post format support
    add_theme_support( 'post-formats',  
        array( 
            'aside',             // title less blurb
            'gallery',           // gallery of images
            'link',              // quick link to other site
            'image',             // an image
            'quote',             // a quick quote
            'status',            // a Facebook like status update
            'video',             // video 
            'audio',             // audio
            'chat'               // chat transcript 
        )
    );  
    
    // wp menus
    add_theme_support( 'menus' );  
    
   /* 
   Every so often theme support for post thumbnails falters, even 
   when I have no plugins enabled. I can force the issue with this,
   but since I'm already doing that in bones.php it's ugly. 
   */
/*

2. library/custom-post-type.php
    - an example custom post type
    - example custom taxonomy (like categories)
    - example custom taxonomy (like tags)
*/ //require_once('library/custom-post-type.php'); // you can disable this if you like

/*
3. library/admin.php
    - removing some default WordPress dashboard widgets
    - an example custom dashboard widget
    - adding custom login css
    - changing text in footer of admin
*/ // require_once('library/admin.php'); // this comes turned off by default
/*

4. library/translation/translation.php
    - adding support for other languages
*/ // require_once('library/translation/translation.php'); // this comes turned off by default

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
add_image_size( 'bones-thumb-600', 600, 150, true );
add_image_size( 'bones-thumb-300', 300, 100, true );
/* 
to add more sizes, simply copy a line from above 
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 300 sized image, 
we would use the function:
<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
for the 600 x 100 image:
<?php the_post_thumbnail( 'bones-thumb-600' ); ?>

You can change the names and dimensions to whatever
you like. Enjoy!
*/

/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function bones_register_sidebars() {
    register_sidebar(array(
    	'id' => 'sidebar1',
    	'name' => 'Public Sidebar',
    	'description' => 'The first (primary) sidebar.',
    	'before_widget' => '<div id="%1$s" class="portlet %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '
            <header>
            <span class="h3">

        ',
    	'after_title' => '</span> </header>',
    ));
    
    register_sidebar(array(
        'id' => 'sidebar-staff',
        'name' => 'Staff Only Sidebar',
        'description' => 'A sidebar only visible to logged-in administrators and editors',
        'before_widget' => '<div id="%1$s" class="portlet %2$s">',
        'after_widget' => '</div>',
        'before_title' => '
            <header>
            <span class="h3">

        ',
        'after_title' => '</span> </header>',
    ));
    /* 
    to add more sidebars or widgetized areas, just copy
    and edit the above sidebar code. In order to call 
    your new sidebar just use the following code:
    
    Just change the name to whatever your new
    sidebar's id is, for example:
    
    register_sidebar(array(
    	'id' => 'sidebar2',
    	'name' => 'Sidebar 2',
    	'description' => 'The second (secondary) sidebar.',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h4 class="widgettitle">',
    	'after_title' => '</h4>',
    ));
    
    To call the sidebar in your template, you can just copy
    the sidebar.php file and rename it to your sidebar's name.
    So using the above example, it would be:
    sidebar-sidebar2.php
    
    */
} // don't remove this bracket!


/* ==================
 * Helpful Sherman Library Widgets
 * ================== */
/* ==================
 * Contact Information
 */
class sherman__contact_info extends WP_Widget {

    function sherman__contact_info() {
        parent::WP_Widget(
            false,
            $name = 'ASL Contact Information'
        );
    }

    function widget($args, $instance) {
        extract( $args ); 
        $text = apply_filters('widget_text', $instance['text'], $instance );
        ?>
            <div class="widget_nav_menu widget_advanced_menu menu--contact_information">
                <header>
                    <h2 class="h3 widgettitle">Contact Us</h3>
                </header>
                <ul>
                    <?php echo $text; ?>                    
                </ul>
            </div>
        <?php 
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['text'] = $new_instance['text'];
        return $instance;
    }

    function form($instance) {
        $instance = wp_parse_args( (array) $instance, array( 'text' => '') );
        $text = format_to_edit($instance['text']);
        ?>
        <textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>"><?php echo $text; ?></textarea>

        <?php 
    }
} /* end sherman__contact_info */
add_action('widgets_init', create_function('', 'return register_widget("sherman__contact_info");'));


/* ==================
 * Remove "Private" and "Protected" from those posts
 */
function title_format($content) {
    return '%s';
}
add_filter('private_title_format', 'title_format');
add_filter('protected_title_format', 'title_format');

/* ==================
 * Helios RSS Event Widget */

class sherman_helios_events extends WP_Widget { 
 
    /** constructor -- name this the same as the class above */
    function sherman_helios_events() {
        parent::WP_Widget(
            false, 
            $name = 'Helios RSS Event Feed');    
    }
 
    /** @see WP_Widget::widget -- do not rename this */
    function widget($args, $instance) { 
        extract( $args );
            $helios_title   = $instance['title'];
            $helios_feed    = $instance['rss_link'];
            $helios_quantity = $instance['quantity'];
        ?>

        <?php 
            include_once(ABSPATH.WPINC.'/feed.php');
            $feed = fetch_feed($helios_feed);
            $feed->enable_order_by_date(false);

            $limit = $feed->get_item_quantity( $helios_quantity ); // specify number of items
            $items = $feed->get_items(0, $limit); // create an array of items

            if ( $limit == 0 ) echo 'The feed is either empty or unavailable.';

            else { ?>


                <ul class="vertical-menu">
                    <header class="gradient--rtl">
                        <span class="icon-calendar" aria-hidden="true"></span>
                        <span class="h3"><?php echo $helios_title; ?></span>
                    </header>

                   <?php foreach ( $items as $item ) : ?>
                        <li>
                            <a href="<?php echo $item->get_permalink(); ?>" title="<?php echo $item->get_date('j F Y @ g:i a'); ?>">
                                <?php 
                                $title_length = strlen($item->get_title());

                                echo $item->get_title();
                                 
                                ?>
                            </a>
                        </li>
                        <?php //echo strip_tags(substr($item->get_description(), 0, 400)); ?>
                <?php endforeach; ?>

                </ul>
        <?php }; ?>

        <?php
    }
 
    /** @see WP_Widget::update -- do not rename this */
    function update($new_instance, $old_instance) {     
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['rss_link'] = strip_tags($new_instance['rss_link']);
        $instance['quantity'] = strip_tags($new_instance['quantity']);
        return $instance;
    }
 
    /** @see WP_Widget::form -- do not rename this */
    function form($instance) {  
 
        $helios_title      = esc_attr($instance['title']);
        $helios_feed      = esc_attr($instance['rss_link']);
        $helios_quantity   = esc_attr($instance['quantity']);
        ?>
        <p>
          <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title the Box :)'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="url" value="<?php echo $helios_title; ?>" />            
        </p> 
         <p>

          <label for="<?php echo $this->get_field_id('rss_link'); ?>"><?php _e('Helios RSS Feed:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('rss_link'); ?>" name="<?php echo $this->get_field_name('rss_link'); ?>" type="url" value="<?php echo $helios_feed; ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('quantity'); ?>"><?php _e('Number of Events to Show'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('quantity'); ?>" name="<?php echo $this->get_field_name('quantity'); ?>" type="number" max="10" value="<?php echo $helios_quantity; ?>" />
        </p>
        <?php 
    }
 
 
} // end class sherman_helios_events
add_action('widgets_init', create_function('', 'return register_widget("sherman_helios_events");'));


/************* COMMENT LAYOUT *********************/
		
// Comment Layout
function bones_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?>>
		<article id="comment-<?php comment_ID(); ?>" class="clearfix">
			<header class="comment-author vcard">
			    <?php /*
			        this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:
			        echo get_avatar($comment,$size='32',$default='<path_to_url>' );
			    */ ?>
			    <!-- custom gravatar call -->
			    <img data-gravatar="http://www.gravatar.com/avatar/<?php echo md5($bgauthemail); ?>&s=32" class="load-gravatar avatar avatar-48 photo" src="<?php echo get_template_directory_uri(); ?>/library/images/nothing.gif" />
			    <!-- end custom gravatar call -->
				<?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()) ?>
				<!--<time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time('F jS, Y'); ?> </a></time>-->
				
			</header>
			<?php if ($comment->comment_approved == '0') : ?>
       			<div class="alert info">
          			<p><?php _e('Your comment is awaiting moderation.', 'bonestheme') ?></p>
          		</div>
			<?php endif; ?>
			<section class="comment_content clearfix">
				<?php comment_text() ?>
			</section>
            <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
            <?php edit_comment_link(__('Edit', 'bonestheme'),'  ','') ?>
		</article>
    <!-- </li> is added by wordpress automatically -->
<?php
} // don't remove this bracket!

/************* SEARCH FORM LAYOUT *****************/

// Search Form
function bones_wpsearch($form) {
    $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
    <label class="screen-reader-text" for="s">' . __('Search for:', 'bonestheme') . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="'.esc_attr__('Search the Site...','bonestheme').'" />
    <input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" />
    </form>';
    return $form;
} // don't remove this bracket!
