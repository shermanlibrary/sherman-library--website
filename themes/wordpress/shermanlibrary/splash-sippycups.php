<?php
/*
Template Name: Splash (SippyCups)
*/
?>

<!doctype html>  

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
	<!-- Metas
	======================
	--> <meta charset="utf-8">
		<title><?php wp_title(''); ?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <!--Google Chrome Frame for IE-->
	
	<!-- Mobile Metas
	======================
	-->	<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
	<!-- Favicon
	======================
	-->	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	
	<!-- Wordpress Head Functions
	======================
	-->	<?php wp_head(); ?>

	<!-- Concerts Stylesheet
	======================
	--> <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/splash-sippycups.css" media="all">
		<!--[if lt IE 9]>
			<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/library/css/splash-sippycups-ie.css" media="all">
		<![endif]-->

	<!-- Google Analytics
	======================
	--> <script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-36223948-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>

	</head>
	
	<body <?php body_class(); ?>>
	
		<div id="container">
		
		<!-- Header
		======================
		-->	<header class="header" role="banner">
				
				<div class="h4 description">The <a href="http://nova.edu/library/main" title="Alvin Sherman Library, Research, and Information Technology Center">Alvin Sherman Library</a> presents ...</div>

				<aside class="announcement sippy-gradient">
					<span>
						<img src="<?php echo get_template_directory_uri(); ?>/library/css/concerts/images/dragon.png" alt="This is a dragon!">
					</span>
				</aside>

				<div id="inner-header" class="wrap clearfix">
					
					<a class="hide-text" href="http://nova.campusguides.com/thesippycups" title="The Sippy Cups at the Alvin Sherman Library!">
						<h1 id="logo">
							The Sippy Cups
						</h1>
					</a>
		
								
					<!-- if you'd like to use the site description you can un-comment it below -->
					<?php // bloginfo('description'); ?>
					
				</div><!--/.inner-header-->
			
			</header><!--/.header-->
		
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="fivecol first clearfix" role="main">

				    	<aside id="details" class="details clearfix">
					    	
					    	<div class="row sample">
					    		<div class="sixcol first">
							    	<section class="h2 ">Move Your Pants</section>
							    	<audio class="player" controls="controls" preload="auto" width="100%">
							    		<source src="http://sherman.library.nova.edu/sites/wp-content/uploads/the-sippy-cups/moveyourpants.mp3" type='audio/mpeg; codecs="mp3"'>
						    			<source src="http://sherman.library.nova.edu/sites/wp-content/uploads/the-sippy-cups/moveyourpants.ogg" type='audio/ogg; codecs="vorbis"'>
							    	</audio>
					    		</div>

					    		<div class="sixcol last">
				    				<section class="h2">Use Your Words</section>
							    	<audio class="player" controls="controls" preload="auto" width="100%">
							    		<source src="http://sherman.library.nova.edu/sites/wp-content/uploads/the-sippy-cups/useyourwords.mp3" type='audio/mpeg; codecs="mp3"'>
						    			<source src="http://sherman.library.nova.edu/sites/wp-content/uploads/the-sippy-cups/useyourwords.ogg" type='audio/ogg; codecs="vorbis"'>
							    	</audio>
						    	</div>
					    	</div>

				    		<section class="h2 clearfix">What: <small>A <u>free</u> family concert for children of all ages!</small></section>
				    		<section class="h2">Date: <small>Saturday, December 8th</small></section>
				    		<section class="h2">Time: <small>2:00p.m. - 3:00p.m.</small> </section>
				    		<section class="h1">
				    			Tickets: <small>FREE with an Alvin Sherman Library Card (<a href="http://novacat.nova.edu/screens/selfregpick.html" title="Get a Library Card">Get One</a>).</small> 
				    		</section>
				    		<section class="h2">
				    			<small>
				    				Tickets are available for pickup beginning November 24th.
				    				Show your LIBRARY CARD at the Public Library Services Desk (1st floor).
				    			</small>
				    		</section>
			    		</aside>

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						  
					
						    <section class="post-content">
							    <?php the_content(); ?>
						    </section> <!-- end article section -->
					
					    </article> <!-- end article -->
					
					    <?php endwhile; ?>						
					    <?php else : ?>					
					    <?php endif; ?>

			    	</div> <!-- end #main -->

				</div> <!-- end #inner-content -->
   
			</div> <!-- end #content -->

			<footer id="footer" class="footer" role="contentinfo">
			
				<div id="inner-footer" class="wrap clearfix">
					
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
	<figure class="the-band"></figure>

	<?php wp_footer(); // js scripts are inserted using this function ?>
	</body>

</html> <!-- end page. what a ride! -->