<!doctype html>  

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <!--Google Chrome Frame for IE-->

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><html dir="ltr" lang="en-US" class="no-js ie"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
	<!-- Metas
	======================
	--> <meta charset="utf-8">
		<title><?php wp_title(''); ?></title>
		
	
	<!-- Mobile Metas
	======================
	-->	<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
	<!-- Favicon
	======================
	-->	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/nsu.ico">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	
	<!-- Wordpress Head Functions
	======================
	-->	<?php wp_head(); ?>
	
	</head>
	
	<body <?php body_class(); ?>>

	<!-- Google Analytics
	======================
	 <script type="text/javascript">

		  var _gaq = _gaq || [];
		  var pluginUrl = '//www.google-analytics.com/plugins/ga/inpage_linkid.js';
		  _gaq.push(['_require', 'inpage_linkid', pluginUrl]);
		  _gaq.push(['_setAccount', 'UA-37110734-2']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

	   </script>	-->
	
		<div id="container">
			
		<!-- Header
		======================
		-->	<header class="header <?php if (is_page( 'kids' ) ) { echo "kids"; } ?>" role="banner">
			
				<div id="inner-header" class="wrap clearfix">

					<div id="logo" <?php if ( is_page('kids') ) { echo 'class="has-tagline"'; } ?>>
						<a class="logo" href="<?php bloginfo('url');?>" title="<?php bloginfo('title'); ?>">
							<span class="secondary-accent">Alvin</span><span class="main-accent">Sherman</span>Library
						</a>

						<?php if ( is_page('kids') ) : ?>
						<span class="tagline">
							For Kids
						</span>
						<?php endif; ?>
					</div>

					<div class="search">
					
					<!--<div class="menu pill-menu inline" role="navigation">

					<!-- Major Category
					======================
					-- <ul>

							<li class="has-subnav primary">
																
								<a href="http://sherman2.library.nova.edu/sites/demo/kids" class="label kids-toggle" style="background-color: #ffae3d; color: white;">Kids</a>																	
								
							</li>
					
					<!-- Empty Sub-Topic
					======================
					-- <li class="has-subnav secondary">
							
							<a href="#" class="label teens-toggle" for="secondary-menu" style="background-color: #E2624F; color: white;">Teens</a>

						</li>

						</ul>

					</div>-->
						<?php echo sherman_wpsearch(); ?>
					</div>

					<nav class="menu pill-menu inline" role="navigation">

					<!-- Major Category
					======================
					-- <ul>

							<li class="has-subnav primary">
								
								<input type="checkbox" id="primary-menu" class="checkbox-toggle"/>
								<label class="label" for="primary-menu"><?php echo library_academy_menu('primary', 'label'); ?></label>
								
								<?php echo library_academy_menu('primary', 'menu'); ?>																			
								
							</li>
					
					<!-- Empty Sub-Topic
					======================
					-- <li class="has-subnav secondary">
							<input type="checkbox" id="secondary-menu" class="checkbox-toggle" />
							<label class="label" for="secondary-menu"><?php echo library_academy_menu('secondary', 'label'); ?></label>

							<?php echo library_academy_menu('secondary', 'menu'); ?>

						</li>

						</ul>-->

					</nav>

				</div><!--/.inner-header-->
			
			</header><!--/.header-->

