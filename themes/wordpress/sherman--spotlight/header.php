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
	
	<body <?php body_class('carousel'); ?>>

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
						<div id="logo">
							<?php echo bloginfo('name'); ?> | Alvin Sherman Library, Research and Information Technology Center
						</div>
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

				<div class="lib-button-small gradient--orange" title="Contact Us">
					<a class="has-subnav icon-bubbles" href="http://www.nova.edu/library/main/feedback.html" title="Give in Touch">
						Contact Us
					</a>					
					<ul class="sub-menu">

					<!-- Feedback Form
					======================
					-->	<li>
							<form action="http://systems.library.nova.edu/form/embed.php?#main_body" id="form_49" method="post">
								<ol>
									
								<!-- Comment
								======================
								-->	<li>										
										<textarea id="element_3" name="element_3" placeholder="It would be great if ..." required></textarea>
									</li>

								<!-- Information
								======================
								-->	<li>
										<label for="element_1">Your Name</label>
										<input type="text" id="element_1"name="element_1" placeholder="Jane Doe" required>
									</li>

								<!-- Email
								======================
								-->	<li>
										<label for="element_2">Email</label>
										<input type="email" id="element_2" name="element_2" required>
									</li>
									
									<li>
										<input type="hidden" name="form_id" value="49">
										<input type="hidden" name="submit" value="1">
										<input id="saveForm" name="submit" onclick="" type="submit">
									</li>
								</ol>
							</form>
						</li>

					<!-- Call
					======================
					-->	<li><span class="h3 icon-mobile"> Phone Numbers</span>
							<ul>								
								<li class="icon-library">
									<b>General Info:</b> <a href="tel:19542624600" title="Call for general information">(954) 262-4613</a>
								</li>
								
								<li class="icon-help">
									<b>Reference:</b> <a href="tel:19542624613" title="Call the reference desk.">(954) 262-4613</a>
								</li>

								<li class="icon-book">
									<b>Public Desk:</b> <a href="tel:19542625477" title="Call the public desk.">(954) 262-5477</a>
								</li>
							</ul>
						</li>
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
				<a href="http://sherman.library.nova.edu" title="Alvin Sherman Library, Research, and Information Technology Center">
					Back to the Library
				</a>
			</li>

			<li class="icon-home last">
				<a href="<?php echo home_url(); ?>" title="Alvin Sherman Library Spotlight">
					You're reading <b>THE SPOTLIGHT</b>
				</a>
			</li>

		</ul>

	</nav><!--/.menu-->