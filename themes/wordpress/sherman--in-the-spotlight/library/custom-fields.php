<?php
/**
 *  Install Add-ons
 *  
 *  The following code will include all 4 premium Add-Ons in your theme.
 *  Please do not attempt to include a file which does not exist. This will produce an error.
 *  
 *  The following code assumes you have a folder 'add-ons' inside your theme.
 *
 *  IMPORTANT
 *  Add-ons may be included in a premium theme/plugin as outlined in the terms and conditions.
 *  For more information, please read:
 *  - http://www.advancedcustomfields.com/terms-conditions/
 *  - http://www.advancedcustomfields.com/resources/getting-started/including-lite-mode-in-a-plugin-theme/
 */ 

// Add-ons 
// include_once('add-ons/acf-repeater/acf-repeater.php');
// include_once('add-ons/acf-gallery/acf-gallery.php');
// include_once('add-ons/acf-flexible-content/acf-flexible-content.php');
// include_once( 'add-ons/acf-options-page/acf-options-page.php' );


/**
 *  Register Field Groups
 *
 *  The register_field_group function accepts 1 array which holds the relevant data to register a field group
 *  You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF
 */

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_brief-instructions-for-reviewing',
		'title' => 'Brief Instructions for Reviewing',
		'fields' => array (
			array (
				'key' => 'field_524c9f6e0ebb3',
				'label' => 'Brief Instructions',
				'name' => '',
				'type' => 'message',
				'message' => '<p><b>Thank you</b> so much for taking the time to review something for us. Reviews are dynamically syndicated from The Spotlight across the library\'s websites. There can be multiple reviews for the same book [or any format], so don\'t worry if a review already exists. Especially, we challenge you that if you see a review you <i>disagree</i> with, write your own counterpoint : ). </p>
	
	<p><b>How long should the review be?</b> <br> As long as you want, but preferably at least one full paragraph. Remember that reviews are largely supplementary. Patrons care what friends <i>and readers with certain authority (you!)</i> recommend. They will probably make their decision at a glance. Don\'t let that hold you back, though!</p>
	
	<p>
	<b>The Process</b>
	<ol>
	<li>Write a title for <i>the review</i>, not the work itself. Pretend this is a headline for a netmag. In hindsight, you might say of the first Harry Potter book: "Don\'t let The Sorcerer\'s Stone keep you from the rest of the series." Something like that.</li>
	
	<li>Work through the fields below. Enter the title and author[s], link it to NovaCat, and rate it.</li>
	
	<li> Write the review in the main content area.</li>
	<li> Work through just the "General" tab of the SEO section below. </li>
	<li>Upload a book cover under "Featured Image" on the right.	</li>
	</ol>
	</p>',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'spotlight_reviews',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_feature-an-event',
		'title' => 'Feature an Event',
		'fields' => array (
			/*array (
				'key' => 'field_524ca6c3c2fae',
				'label' => 'What Type of Event?',
				'name' => 'event_type',
				'type' => 'taxonomy',
				'required' => 1,
				'taxonomy' => 'event_type',
				'field_type' => 'checkbox',
				'allow_null' => 0,
				'load_save_terms' => 0,
				'return_format' => 'id',
				'multiple' => 0,
			),*/
			array (
				'key' => 'field_524ca0c25f575',
				'label' => 'When is the Event?',
				'name' => 'event_date',
				'type' => 'date_picker',
				'required' => 1,
				'date_format' => 'yymmdd',
				'display_format' => 'mm/dd/yy',
				'first_day' => 0,
			),
			array (
				'key' => 'field_524ca31483b99',
				'label' => 'At what time?',
				'name' => 'event_time',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'examples: 8:00 a.m. - 3:00 p.m., All Day, 1:30 p.m. - 2:00 p.m.',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_524ca4b9471a0',
				'label' => 'Require an R.S.V.P.?',
				'name' => 'event_registration_required',
				'type' => 'radio',
				'required' => 1,
				'choices' => array (
					'true' => 'Yes',
					'false' => 'No',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'false',
				'layout' => 'vertical',
			),
			array (
				'key' => 'field_524ca74109b43',
				'label' => 'Link to Helios RSVP Link',
				'name' => 'event_registration_link',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_524ca4b9471a0',
							'operator' => '==',
							'value' => 'true',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_524ca5792233a',
				'label' => 'Is there a Cost?',
				'name' => 'event_has_cost',
				'type' => 'radio',
				'choices' => array (
					'true' => 'Yes',
					'false' => 'No (Free!)',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'false',
				'layout' => 'vertical',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'spotlight_events',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_rock-that-review-librarian',
		'title' => 'Rock that review, librarian!',
		'fields' => array (
			array (
				'key' => 'field_524c798fff602',
				'label' => 'Material Type',
				'name' => 'material_type',
				'type' => 'select',
				'instructions' => 'We will add more material types and formats as the kinks are ironed out. For now, chalk-up formats like "audiobook" or "ebook" to "book". ',
				'required' => 1,
				'choices' => array (
					'Book' => 'Book',
					'Video Game' => 'Video Game',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_524c86e982e03',
				'label' => 'Title',
				'name' => 'title',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'Hyperion',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_524c871d82e04',
				'label' => 'Author',
				'name' => 'author',
				'type' => 'text',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_524c798fff602',
							'operator' => '==',
							'value' => 'Book',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => 'Dan Simmons',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_524c8846d3ed1',
				'label' => 'Console',
				'name' => 'review_game_console',
				'type' => 'checkbox',
				'instructions' => 'Not only referring to the console-version <i>you</i> played, but consoles for which the libraries have copies. We don\'t want to give the false impression that "Game X" is available in the library for both the Xbox 360 and PS3 if it isn\'t.',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_524c798fff602',
							'operator' => '==',
							'value' => 'Video Game',
						),
					),
					'allorany' => 'all',
				),
				'choices' => array (
					'xbox' => 'Xbox',
					360 => 'Xbox 360',
					'x1' => 'Xbox One',
					'ps2' => 'PlayStation 2',
					'ps3' => 'PlayStation 3',
					'wii: Wii' => 'wii: Wii',
					'wiiu: Wii U' => 'wiiu: Wii U',
				),
				'default_value' => '',
				'layout' => 'vertical',
			),
			array (
				'key' => 'field_524c766baa536',
				'label' => 'Link to NovaCat',
				'name' => 'link_to_novacat',
				'type' => 'text',
				'instructions' => 'Let patrons jump on that bandwagon!',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'http://novacat.nova.edu:80/record=b1353323~S13',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_524c7ab5999fe',
				'label' => 'So, what did you think?',
				'name' => 'review_scale',
				'type' => 'select',
				'instructions' => 'Using an 11-point review scale where <b>10 is a Masterpiece</b> and <b>0 is a disaster</b>, tell everyone what you thought!',
				'required' => 1,
				'choices' => array (
					10 => '10 - Masterpiece',
					9 => '9 - Amazing',
					8 => '8 - Great',
					7 => '7 - Good',
					6 => '6 - Okay',
					5 => '5 - Mediocre',
					4 => '4 - Bad',
					3 => '3 - Awful',
					2 => '2 - Painful',
					1 => '1 - Unbearable',
					0 => '0 - Disaster',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_524c9b51c91cc',
				'label' => 'Who\'s the Reviewer?',
				'name' => 'reviewed_by_type',
				'type' => 'select',
				'instructions' => 'You can review on your own behalf or on behalf of a patron. <b>Note</b>: right now, until the disclaimers and necessary policies are hammered out, you can only review on your own behalf. Why ask? We want to be able to disassociate staff from patron reviews. ',
				'choices' => array (
					'staff' => 'Me!',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_524c9e9db3559',
				'label' => 'What\'s your first name?',
				'name' => 'reviewed_by',
				'type' => 'text',
				'instructions' => 'Or, if you\'re wary, you can make one up. Names give content the human touch. This would be presented, for example, as: "[ review here ] - <i> by Michael </i>." ',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'spotlight_reviews',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_special-marketing-options',
		'title' => 'Special Marketing Options',
		'fields' => array (
			array (
				'key' => 'field_52334ebdbb132',
				'label' => 'Select or Upload the Advertising Graphic',
				'name' => 'graphic',
				'type' => 'image',
				'instructions' => 'Select or upload an image for use as an ad. The dimensions of the image must be <b>720x405 pixels</b> with a resolution of 92. This is a large image, but Wordpress will automatically make smaller versions to fit appropriate areas on the website. <b>The image should have a white or transparent (preferred) background with enticing imagery and minimal but legible print.</b> Users will interact with an overlay, so don\'t feel like you have to cram the whole message in there. ',
				'save_format' => 'url',
				'preview_size' => 'media-medium',
				'library' => 'all',
			),
			array (
				'key' => 'field_52335091a07bc',
				'label' => 'Overlay Title',
				'name' => 'overlay_title',
				'type' => 'text',
				'instructions' => 'The overlay or caption is sometimes a small area, so try and choose an eye-catching, brief, three or four word title.',
				'default_value' => '',
				'placeholder' => 'Checkout our Music Selection',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => 40,
			),
			array (
				'key' => 'field_523353259fe4c',
				'label' => 'Overlay Tagline',
				'name' => 'overlay_tagline',
				'type' => 'text',
				'instructions' => 'A simple, short tagline. ',
				'default_value' => '',
				'placeholder' => 'Checkout audiobooks whenever you want.',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_52335164cd154',
				'label' => 'Where does the button go?',
				'name' => 'overlay_link',
				'type' => 'text',
				'instructions' => 'There\'s always a button that patrons can click for more information, to see an event, to look at an image, ..., you get the idea. But where should it link?',
				'default_value' => '',
				'placeholder' => 'http://novacat.nova.edu/',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_523351cecd155',
				'label' => 'What does the button say?',
				'name' => 'overlay_button_text',
				'type' => 'text',
				'instructions' => 'You can choose what the button says. "Read More!" or "Try it Out!" our "Check it Out!" or "Register Now!", something like that.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'spotlight_databases',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'spotlight_events',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_important-information-about-the-resource',
		'title' => 'Important Information about the Resource',
		'fields' => array (
			array (
				'key' => 'field_5216801549741',
				'label' => 'Authenticating URI',
				'name' => 'authenticated_url',
				'type' => 'text',
				'instructions' => 'Databases won\'t work for patrons unless they are proxied through our system. You can copy the authenticating link by visiting <a href="http://sherman.library.nova.edu/e-library" target="new">our e-library indices</a>. You know you have the right link if it ends with "<b>aid=</b>" and a number. Sorry, we know it\'s kind of a pain.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'example: http://0-auth.novasoutheastern.org.novacat.nova.edu/go/redirect.php?aid=721',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_523089e1be8b4',
				'label' => 'Resource AID',
				'name' => 'aid',
				'type' => 'number',
				'instructions' => 'You know that link you just pasted with <b>aid=</b> [some number]? Type that number here. ',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'example: 769',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => 0,
			),
			array (
				'key' => 'field_52334cb4f5185',
				'label' => 'Resource / Vendor Logo',
				'name' => 'resource_logo',
				'type' => 'image',
				'instructions' => 'Select or upload an image for use as a logo. The dimensions of the image must be 16:9. You can use <a href="http://size43.com/jqueryVideoTool.html" target="new"> this tool	</a> to easily calculate pixels. <b>Ideally</b>, the logo is on a transparent background and the file extension is .PNG. Many vendor-provided logos do not meet these requirements, so we\'re probably going to have to do a little image editing - but this all increases the likelihood that someone will click on it. If you have trouble, please request a logo through <a href="http://sherman.library.nova.edu/sites/labs">web ticketing</a>. <b>Once uploaded, you should also select this logo under "Featured Image"</b>.',
				'required' => 1,
				'save_format' => 'url',
				'preview_size' => 'media-small',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'spotlight_databases',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'excerpt',
				1 => 'discussion',
				2 => 'comments',
				3 => 'revisions',
				4 => 'slug',
				5 => 'author',
				6 => 'format',
				7 => 'send-trackbacks',
			),
		),
		'menu_order' => 1,
	));
	register_field_group(array (
		'id' => 'acf_supplementary-information-about-the-resource',
		'title' => 'Supplementary Information about the Resource',
		'fields' => array (
			array (
				'key' => 'field_52334c236f4d3',
				'label' => 'Instructions',
				'name' => 'instructions',
				'type' => 'wysiwyg',
				'instructions' => 'Some resources require users to create an account even after authenticating with their library card. If there is some element to this database that is confusing or poorly explained by vendor, type-up brief instructions. <b>Please note:</b> instructions more than a paragraph long should be included as handouts. This spot isn\'t for those.',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_52334b8a780ee',
				'label' => 'LibraryLearn Screencast',
				'name' => 'screencast',
				'type' => 'text',
				'instructions' => 'Optionally link to a relevant <b>LibraryLearn</b> tutorial.',
				'default_value' => '',
				'placeholder' => 'http://sherman.library.nova.edu/sites/tutorials/watch/a-helpful-video/',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_52334bdd780ef',
				'label' => 'Written Tutorial, Handout, or Guide',
				'name' => 'handout',
				'type' => 'text',
				'instructions' => 'Optionally link to a relevant <b>LibGuide</b>, handout, or other detailed instructions.',
				'default_value' => '',
				'placeholder' => 'http://nova.campusguides.com/a-helpful-tutorial',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'spotlight_databases',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 1,
	));
}

?>