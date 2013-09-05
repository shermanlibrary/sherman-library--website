 <?php
/*
Template Name: October 2012
*/
?>

 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Your Message Subject or Title</title>
	<style type="text/css">
	/* ==================
	 * Reset
	 * ================== */
		#outlook a {padding:0;} /* Force Outlook to provide a "view in browser" menu link. */
		body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0; font-family: Georgia, serif;} 
		/* Prevent Webkit and Windows Mobile platforms from changing default font sizes.*/ 
		.ExternalClass {width:100%;} /* Force Hotmail to display emails at full width */  
		.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;}
		/* Forces Hotmail to display normal line spacing.  More on that: http://www.emailonacid.com/forum/viewthread/43/ */ 
		#backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important; background-image: url('http://localhost/friends/wp-content/themes/sherman_newsletter/library/images/background.png');}
		#contentTable {background-image: url('http://localhost/friends/wp-content/themes/sherman_newsletter/library/images/white-background.png'); border-top: 3px solid #333333;}	
	/* ==================
	 * Media
	 * ================== */
		img {outline:none; text-decoration:none; -ms-interpolation-mode: bicubic;} 
		a img {border:none;} 
		.image_fix {display:block;}

	/* ==================
	 * Typography
	 * ================== */
	 	p {margin: 1em 0; font-size: 16px; line-height:1.5;}

	 	/* ==================
	 	 * Hotmal Header Reset */
 		h1, h2, h3, h4, h5, h6 {color: black !important;}
		h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {color: blue !important;}
		h1 a:active, h2 a:active,  h3 a:active, h4 a:active, h5 a:active, h6 a:active { color: red !important; }
		h1 a:visited, h2 a:visited,  h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited { color: purple !important; }

		/* ==================
		 * Outlook 2007, 2010 Fix | Not Inline */
	 	table td { border-collapse: collapse; }

	 	/* ==================
	 	 * Outlook Spacing Fix | Inline */
		table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }

		a {color: orange;}
	
	/* ==================
	 * General Styles
	 * ================== */
	 .highlight { background-color: #006699; }
	 
	 .date { font-size: 36px; color: #FFFFFF; }
	 .event-date { font-size: 36px; color: #006699; }
	 .post-title, .exhibit-title { font-size: 28px; color: #006699; line-height: 1; font-variant: small-caps; padding-left: 5px; }
	 .exhibit-title { font-size: 28px; }
	 .event-title { font-size: 21px; text-align: center; }
	 .feature-title {
	 	color: #006699;
	 	font-size: 21px; 
	 	margin: 0 14px;
	 }
	 .feature-description {
	 	margin-left: 14px;
	 }

	/* ==================
	 * Mobile Targeting
	 * ================== */
		@media only screen and (max-device-width: 480px) {
			/* Part one of controlling phone number linking for mobile. */
			a[href^="tel"], a[href^="sms"] {
						text-decoration: none;
						color: blue; /* or whatever your want */
						pointer-events: none;
						cursor: default;
					}

			.mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
						text-decoration: default;
						color: orange !important;
						pointer-events: auto;
						cursor: default;
					}

		}

		/* More Specific Targeting */

		@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
		/* You guessed it, ipad (tablets, smaller screens, etc) */
			/* repeating for the ipad */
			a[href^="tel"], a[href^="sms"] {
						text-decoration: none;
						color: blue; /* or whatever your want */
						pointer-events: none;
						cursor: default;
					}

			.mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
						text-decoration: default;
						color: orange !important;
						pointer-events: auto;
						cursor: default;
					}
		}

		@media only screen and (-webkit-min-device-pixel-ratio: 2) {
		/* Put your iPhone 4g styles in here */ 
		}

		/* Android targeting */
		@media only screen and (-webkit-device-pixel-ratio:.75){
		/* Put CSS for low density (ldpi) Android layouts in here */
		}
		@media only screen and (-webkit-device-pixel-ratio:1){
		/* Put CSS for medium density (mdpi) Android layouts in here */
		}
		@media only screen and (-webkit-device-pixel-ratio:1.5){
		/* Put CSS for high density (hdpi) Android layouts in here */
		}


	</style>

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
			
		<!-- drop Google Analytics Here -->
		<!-- end analytics -->

</head>
<body>
	
<!-- Container Table
======================
-->	<table cellpadding="0" cellspacing="0" boder="0" id="backgroundTable">
	<tr>
		<td>
		
		<table id="contentTable" cellpadding="0" cellspacing="0" border="0" align="center" style="border-bottom: 3px solid #333333;">

		<!-- Banner, Features
		======================
		-->	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<tr>
					<td width="144px" height="247px" valign="top">
						<img class="image_fix" src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png" alt="Logos for NSU and Broward County Florida" title="News from the Alvin Sherman Library" width="144px" height="244px" />
					</td>
					<td width="456px" height="247px" valign="top">
						<?php if (has_post_thumbnail( $post->ID ) ) : ?>
						<?php $banner_image = wp_get_attachment_image_Src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
						<img class="image_fix" src="<?php echo $banner_image[0]; ?>" alt="" title="" width="456px" height="244px" />
						<?php endif; ?>
					</td>
				</tr>
		</table>

		<table cellpadding="0" cellspacing="0" border="0" align="center">

				<tr>
					<td colspan="3" width="600px" valign="top">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/aslritc.png" alt="Alvin Sherman Library, Research, and Information Technology Center" class="image_fix" width="600px" height="78px" />
					</td>
				</tr>
		</table>

		<table id="contentTable" cellpadding="0" cellspacing="0" border="0" align="center">
				<tr>
					<td width="144px" height="35px" valign="middle">
						<img src="<?php echo get_template_directory_uri() ?>/library/images/date.png" style="margin-left: -10px;" />
					</td>
					<td width="456px" height="35px" valign="middle" style="border-bottom: 1px solid #006699;"><span class="post-title"><?php the_title(); ?></span></td>
				</tr>


				<tr>
					<td colspan="3" width="600px" valign="top">
					<div style="padding: 0 14px;">
						<?php the_content(); ?>
					</div>
					</td>
				</tr>

			<?php endwhile; ?>	
			<?php wp_reset_query(); ?>
			<?php else : ?>
			<?php endif; ?>

		<!-- Exhibits
		======================
		--> <?php query_posts(array('post_type' => 'newsletter_exhibits', 'category__and' => array( 14 ) )); ?>
		    <?php if ( have_posts()) : while ( have_posts()) : the_post(); ?>
		    	<tr>
					<td colspan="3" width="600px" valign="top"><span class="exhibit-title"><?php the_title(); ?></span> </td>
				</tr>
		    	<tr>
					<td colspan="3" width="600px" valign="top"> 
						<?php $exhibit_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
						<img class="image_fix" src="<?php echo $exhibit_image[0]; ?>" alt="" title="" width="600px" height="277px">

					</td>
				</tr>				
			<?php endwhile; ?>	
		    <?php wp_reset_query(); ?>
		  	<?php else : ?>
		    <?php endif; ?>

	    <!-- News for Adults
	    ======================
	    --> <tr>
		    	<td colspan="3" width="600px" valign="top">
		    		<br />
		    		<img src="http://placekitten.com/600/50" alt="" class="image_fix" />
		    	</td>
		    </tr>

	    	<?php query_posts(array('post_type' => 'featured_news', 'category__and' => array( 14, 11) )); ?>
		    <?php if ( have_posts()) : while ( have_posts()) : the_post(); ?>
			<tr>
				<td width="144px" height="200px" valign="top">

					<?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured_news-thumb' ); ?>
					<img src="<?php echo $featured_image[0]; ?>" alt="" class="image_fix" width="144px" height="200px" />
				</td>
				<td width="456px" height="200px" valign="top"> 
					<br />
					<span class="feature-title"><?php the_title(); ?></span>
					<div class="feature-description">
						<?php the_content(); ?>
					</div>
				</td>
			</tr>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
			<?php else : ?>
			<?php endif; ?>
		</table>

	<!-- Adult Events
	======================
	-->	<?php $query = query_posts(array('post_type' => 'newsletter_events', 'category__and' => array( 14, 11) )); ?>

		<?php $chunked_posts = array_chunk($query, 3); ?>
		<table id="contentTable" cellpadding="0" cellspacing="0" border="0" align="center">
		<?php foreach($chunked_posts as $posts): ?>

			<tr>
	
				<?php foreach($posts as $post) : ?>			
				<?php 
				$date = get_post_meta(get_the_ID(), 'Date of Event (ex. mm/dd/yy)', true);
				$link = get_post_meta(get_the_ID(), 'Helios URI', true);  
				?>	
				<td width="200px" height="247px" valign="top"> 
				<?php if ( has_post_thumbnail() ) {
					$event_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID), 'event-thumb');
				?> 
					<img src="<?php echo $event_image[0]?>" alt="" class="image_fix" width="180px" height="180px" />
				<?php } else { ?>
					<br />
					<span class="event-date"> <?php echo $date ?> </span> <br /><br />
					<a class="event-title" href="<?php echo $link ?>"><?php echo $post->post_title; ?></a>
					<?php the_excerpt(); ?>
				<?php } ?>					
				</td>
				<?php endforeach; ?>


			</tr>
		<?php endforeach; ?>
		<?php wp_reset_query(); ?>
		</table>

	<!-- Teen News
	======================
	--> <table id="contentTable" cellpadding="0" cellspacing="0" border="0" align="center">
		<tr>
	    	<td colspan="3" width="600px" valign="top">
	    		<br />
	    		<img src="http://placekitten.com/600/50" alt="" class="image_fix" />
	    	</td>
	    </tr>
    	
    	<?php query_posts(array('post_type' => 'featured_news', 'category__and' => array( 14, 12 ) )); ?>
	    <?php if ( have_posts()) : while ( have_posts()) : the_post(); ?>
		<tr>
			<td width="144px" height="200px" valign="top">

				<?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured_news-thumb' ); ?>
				<img src="<?php echo $featured_image[0]; ?>" alt="" class="image_fix" width="144px" height="200px" />
			</td>
			<td width="456px" height="200px" valign="top"> 
				<br />
				<span class="feature-title"><?php the_title(); ?></span>
				<div class="feature-description">
					<?php the_content(); ?>
				</div>
			</td>
		</tr>
		<?php endwhile; ?>
		<?php wp_reset_query(); ?>
		<?php else : ?>
		<?php endif; ?>
		</table>

	<!-- Teen Events
	======================
	-->	<?php $query = query_posts(array('post_type' => 'newsletter_events', 'category__and' => array( 14, 12) )); ?>

		<?php $chunked_posts = array_chunk($query, 3); ?>
		<table id="contentTable" cellpadding="0" cellspacing="0" border="0" align="center">
		<?php foreach($chunked_posts as $posts): ?>

			<tr>
	
				<?php foreach($posts as $post) : ?>			
				<?php 
				$date = get_post_meta(get_the_ID(), 'Date of Event (ex. mm/dd/yy)', true);
				$link = get_post_meta(get_the_ID(), 'Helios URI', true);  
				?>	
				<td width="200px" height="247px" valign="top"> 
				<?php if ( has_post_thumbnail() ) {
					$event_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID), 'event-thumb');
				?> 
					<img src="<?php echo $event_image[0]?>" alt="" class="image_fix" width="180px" height="180px" />
				<?php } else { ?>
					<br />
					<span class="event-date"> <?php echo $date ?> </span> <br /><br />
					<a class="event-title" href="<?php echo $link ?>"><?php echo $post->post_title; ?></a>
					<?php the_excerpt(); ?>
				<?php } ?>					
				</td>
				<?php endforeach; ?>

			</tr>
		<?php endforeach; ?>
		<?php wp_reset_query(); ?>
		</table>

	<!-- Children News
	======================
	--> <table id="contentTable" cellpadding="0" cellspacing="0" border="0" align="center">
		<tr>
	    	<td colspan="3" width="600px" valign="top">
	    		<br />
	    		<img src="http://placekitten.com/600/50" alt="" class="image_fix" />
	    	</td>
	    </tr>
    	
    	<?php query_posts(array('post_type' => 'featured_news', 'category__and' => array( 14, 16 ) )); ?>
	    <?php if ( have_posts()) : while ( have_posts()) : the_post(); ?>
		<tr>
			<td width="144px" height="200px" valign="top">

				<?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured_news-thumb' ); ?>
				<img src="<?php echo $featured_image[0]; ?>" alt="" class="image_fix" width="144px" height="200px" />
			</td>
			<td width="456px" height="200px" valign="top"> 
				<br />
				<span class="feature-title"><?php the_title(); ?></span>
				<div class="feature-description">
					<?php the_content(); ?>
				</div>
			</td>
		</tr>
		<?php endwhile; ?>
		<?php wp_reset_query(); ?>
		<?php else : ?>
		<?php endif; ?>
		</table>

	<!-- Children Events
	======================
	-->	<?php $query = query_posts(array('post_type' => 'newsletter_events', 'category__and' => array( 14, 16) )); ?>

		<?php $chunked_posts = array_chunk($query, 3); ?>
		<table id="contentTable" cellpadding="0" cellspacing="0" border="0" align="center">
		<?php foreach($chunked_posts as $posts): ?>

			<tr>
	
				<?php foreach($posts as $post) : ?>			
				<?php 
				$date = get_post_meta(get_the_ID(), 'Date of Event (ex. mm/dd/yy)', true);
				$link = get_post_meta(get_the_ID(), 'Helios URI', true);  
				?>	
				<td width="200px" height="247px" valign="top"> 
				<?php if ( has_post_thumbnail() ) {
					$event_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID), 'event-thumb');
				?> 
					<img src="<?php echo $event_image[0]?>" alt="" class="image_fix" width="180px" height="180px" />
				<?php } else { ?>
					<br />
					<span class="event-date"> <?php echo $date ?> </span> <br /><br />
					<a class="event-title" href="<?php echo $link ?>"><?php echo $post->post_title; ?></a>
					<?php the_excerpt(); ?>
				<?php } ?>					
				</td>
				<?php endforeach; ?>

			</tr>
		<?php endforeach; ?>
		<?php wp_reset_query(); ?>
		</table>	

	<!-- Miscellaneous Events
	======================
	-->	<?php $query = query_posts(array('post_type' => 'newsletter_events', 'category__and' => array( 14, 17) )); ?>

		<?php $chunked_posts = array_chunk($query, 3); ?>
		<table id="contentTable" cellpadding="0" cellspacing="0" border="0" align="center">
		<?php foreach($chunked_posts as $posts): ?>

			<tr>
	
				<?php foreach($posts as $post) : ?>			
				<?php 
				$date = get_post_meta(get_the_ID(), 'Date of Event (ex. mm/dd/yy)', true);
				$link = get_post_meta(get_the_ID(), 'Helios URI', true);  
				?>	
				<td width="200px" height="247px" valign="top"> 
				<?php if ( has_post_thumbnail() ) {
					$event_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID), 'event-thumb');
				?> 
					<img src="<?php echo $event_image[0]?>" alt="" class="image_fix" width="180px" height="180px" />
				<?php } else { ?>
					<br />
					<span class="event-date"> <?php echo $date ?> </span> <br /><br />
					<a class="event-title" href="<?php echo $link ?>"><?php echo $post->post_title; ?></a>
					<?php the_excerpt(); ?>
				<?php } ?>					
				</td>
				<?php endforeach; ?>

			</tr>
		<?php endforeach; ?>
		<?php wp_reset_query(); ?>
		</table>	
	


		<!-- Yahoo Link color fix updated: Simply bring your link styling inline. -->
		<a href="http://htmlemailboilerplate.com" target ="_blank" title="Styling Links" style="color: orange; text-decoration: none;">Coloring Links appropriately</a>

		<!-- Gmail/Hotmail image display fix: Gmail and Hotmail unwantedly adds in an extra space below images when using non IE browsers.  This can be especially painful when you putting images on top of each other or putting back together an image you spliced for formatting reasons.  Either way, you can add the 'image_fix' class to remove that space below the image.  Make sure to set alignment (don't use float) on your images if you are placing them inline with text.-->
		<img class="image_fix" src="full path to image" alt="Your alt text" title="Your title text" width="x" height="x" />

		<!-- Step 2: Working with telephone numbers (including sms prompts).  Use the "mobile_link" class with a span tag to control what number links and what doesn't in mobile clients. -->
		<span class="mobile_link">123-456-7890</span>

			
		</td>			
	</tr>	
	</table> <!--End Container-->

</body>