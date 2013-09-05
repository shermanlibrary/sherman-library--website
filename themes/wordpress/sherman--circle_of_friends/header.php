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
	
	<body <?php body_class(); ?> style="background: white;">

	<!-- Google Analytics
	======================
	--> <script type="text/javascript">

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

		</script>	
	
		<div id="container">
		
		<!-- Header
		======================
		-->	<header class="header tinsley-gradient" role="banner">
			
				<div id="inner-header" class="wrap clearfix">

					<a class="nsu hide-text" href="http://www.nova.edu" title="Nova Southeastern University">Nova Southeastern University</a>
					<a href="<?php echo home_url(); ?>" title="<?php echo bloginfo('name'); ?> | Alvin Sherman Library, Research, and Information Technology Center" class="hide-text">
						<h1 id="logo" class="circle-of-friends">
							<?php echo bloginfo('name'); ?> | Alvin Sherman Library, Research and Information Technology Center
						</h1>
					</a>
									
					<!-- if you'd like to use the site description you can un-comment it below -->
					<?php // bloginfo('description'); ?>

				<div class="utilities">
				<form action="http://sharksearch.nova.edu/search" class="search-container" id="aslritc-search" method="get">

					<input id="searchbox" name="q" type="text" placeholder="Search the Library's Website" x-webkit-speech speech/>
					<input type="hidden" name="client" value="main" />
					<input type="hidden" name="proxystylesheet" value="main" />
					<input type="hidden" name="output" value="xml_no_dtd" />
					<input type="hidden" name="access" value="p" />
					<input type="hidden" name="ie" value="UTF-8" />
					<input type="hidden" name="oe" value="UTF-8" />
					<input type="hidden" name="site" value="aslritc" id="sopswap" />

					<a class="gradient--vertical button" onclick="document.getElementById('aslritc-search').submit();" type="submit">
						<span class="icon-search" aria-hidden="true"></span>
					</a>
				</form>

				<div class="lib-button-small gradient--vertical" title="Contact Us">
					<a class="has-subnav icon-library" href="#" title="Give a Gift">
						Donate
					</a>					
					<ul class="sub-menu">
						Membership Information					
					</ul>
				</div>
				
			</div><!--/.utilities-->

				</div><!--/.inner-header-->
			
			</header><!--/.header-->
		
<!-- Navigation
======================
--> <nav class="menu gradient--rtl" role="navigation">
		
		<a class="menu-link icon-grid-view" href="#"> Full Menu</a>
		<ul>
			<li></li>
			<li class="icon-library last">
				<a class="link" href="http://www.nova.edu/library/main">Back to the Library</a>				
			</li>	

		</ul>

	</nav><!--/.menu-->

	<section id="feature" class="hero feature" style="background: #313547; margin: -1em auto 1em; border-bottom: 3px solid #455268;">
		<div id="inner-feature" class="wrap clearfix">
			<div class="sixcol first"> 
				<h2 class="h1" style="color: white;">
					Circle of Friends

					<small class="tagline" style="display: block;">
						Membership
					</small>	
				</h2>

				<p style="color: white;">
					You can now join or renew your <strong>Circle of Friends</strong> membership
					in just a few clicks. 
				</p>

				<a class="lib-button-small flat" href="http://sherman.library.nova.edu/sites/friends/membership/" title="Join or Renew!" style="border-radius: 0; border: none; background: #455268; font-size: 1.2em; padding: 1em; color:white;">Why Join?</a>

			</div>

			<div class="sixcol last">

				<div style="margin: 2em; padding: 5px 5px 0; border: 2px solid white; ">
					<img src="http://sherman.library.nova.edu/sites/friends/files/2013/08/renew.jpg" style="width: 100%;">
				</div>

			</div>
		</div>
	</section>