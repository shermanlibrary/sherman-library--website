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
		-->	<header class="header" role="banner">
			
				<div id="inner-header" class="wrap clearfix">

					<a class="gamma logo" id="logo" href="<?php bloginfo('url');?>" title="<?php bloginfo('title'); ?>">
						library<span>academy</span>
					</a>

					<nav class="menu pill-menu inline" role="navigation">
						
						<ul>
						
						<!-- Subject 
						======================
						--> <li class="has-subnav primary">
								
								<span class="label">
									Choose a Subject
								</span>

								<ul>
									<li>One</li>
									<li>Two</li>
									<li>Three</li>
								</ul>

							</li>

						<!-- Sub-Topic
						======================
						--> <li class="has-subnav secondary">
								
								<span class="label">
									Sub-Topic
								</span>

								<ul>
									<li>One</li>
								</ul>
							</li>

						</ul>
					</nav>


				</div><!--/.inner-header-->
			
			</header><!--/.header-->