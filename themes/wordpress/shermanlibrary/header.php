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
						<h1 id="logo">
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

						<ul class="utility-menu">
							<li> 
								<a class="lib-button-small gradient--vertical" title="Convenient Links"> 
									<span class="icon-link" aria-hidden="true"></span>
								</a> 
								<ul class="sub-menu">
									<li>
										<a class="link" href="http://sharklink.nova.edu/" target="new">Blackboard</a>
									</li>
									<li>
										<a class="link" href="http://www.nova.edu/emergency/" target="new">Emergency Alerts</a>
									</li>
									<li>
										<a class="link" href="http://sharklink.nova.edu/" target="new">SharkLink</a>
									</li>
									<li>
										<a class="link" href="http://webstar.nova.edu/" target="new">WebSTAR</a>
									</li>
								</ul>
							</li>

							<li>
								<a class="lib-button-small gradient--vertical" href="http://nova.edu/library/main/feedback.html" title="Give Feedback">
									<span class="icon-bubbles" aria-hidden="true"></span> Feedback
								</a>
							</li>	
						</ul>
						

					</div><!--/.utility-belt-->

				</div><!--/.inner-header-->
			
			</header><!--/.header-->
		
<!-- Navigation
======================
--> <nav class="menu gradient--rtl" role="navigation">
		
		<a class="menu-link icon-grid-view" href="#"> Full Menu</a>
		<ul>
			<li class="icon-home"><a href="http://nova.edu/library/main">Home</a></li>

			<li class="icon-user">
				<a class="link">Patron Portals</a>
				<ul class="sub-menu">
					<li> 
						<p style="color: #444; padding: .5em; line-height: 1; margin: 0 auto;">
							We're making things you care about easier to find. 
						</p>
					</li>
					<li><a class="link" href="http://nova.edu/library/main/local-students.html">Local Students</a></li>
					<li><a class="link" href="http://nova.edu/library/main/distance-students.html">Distance Students</a></li>
					<li><a class="link" href="http://nova.edu/library/main/faculty-and-staff.html">Faculty and Staff</a></li>
					<li><a class="link" href="http://nova.edu/library/main/alumni.html">Alumni</a></li>
				
					<li><a class="link" href="http://nova.edu/library/main/public.html">Broward County Patrons</a></li>

				</ul>
			</li>

			<li class="icon-rocket">
				<a class="link">Electronic Resources</a>
				<ul class="sub-menu">
					<li class="has-subnav"> 
						<a href="#parent" rel="nofollow">Databases</a> 
						<ul class="children">
							<a class="hint--right hint--rounded hint--info" data-hint="The databases you have access to are determined by your patron type." href="http://www.nova.edu/library/eleclib/databases.html"> 
								Databases Gateway	
							</a>
							<a href="http://elib.nova.edu/db/n/nsearch2.cfm" class="link"> Databases by Subject</a>
							<a href="http://elib.nova.edu/db/n/nsublist2.cfm?sortorder=s&subj_id=zzz" class="link"> Complete A-Z List </a>
						</ul>
					</li>
					<li> <a href="http://atoz.ebsco.com/Search.asp?id=nseu" class="link">Journal Finder</a> </li>
					<li> <a href="//novacat.nova.edu/screens/opacmenu.html" class="link">Library Catalog ("NovaCat")</a> </li>
					<li> <a href="http://www.nova.edu/library/main/other-catalogs.html" class="link">Other Library Catalogs</a> </li>
					<li> <a href="//nova.campusguides.com/quickereference" class="link">Quick e-Reference</a> </li>
					<li> <a href="//sherman.library.nova.edu/doi" class="link hint--info hint--right" data-hint="Digital Object Identifiers are used to uniquely cite electronic documents">DOI Tools</a> </li>
					<li> <a href="//illiad.library.nova.edu" class="link">Document Delivery / ILLiad</a> </li>
				</ul>
			</li>

			<li class="icon-wifi">
				<a class="link">Services</a>
				<ul class="sub-menu">
					<li> <a href="http://sherman.library.nova.edu/sites/services/circulation/" class="link">Borrowing &amp; Circulation</a> </li>
					<li> <a href="http://sherman.library.nova.edu/sites/services/collection-development/" class="link">Collection Development</a> </li>
					<li> <a href="http://sherman.library.nova.edu/sites/services/dils/" class="link">Distance &amp; Instructional</a> </li>
					<li> <a href="http://sherman.library.nova.edu/sites/services/docdel/" class="link">Interlibrary Loan</a> </li>
					<li> <a href="http://sherman.library.nova.edu/sites/services/electronic-course-reserves-ecr/" class="link">Electronic Course Reserves</a> </li>
					<li> <a href="http://sherman.library.nova.edu/sites/services/public-library-services/" class="link">Public Library Services</a> </li>
					<li> <a href="http://sherman.library.nova.edu/sites/services/reference-department/" class="link">Reference</a> </li>
					<li> <a href="//www.nova.edu/library/serv/facilities" class="link">Conference Rooms</a> </li>
					<li> <a href="http://sherman.library.nova.edu/sites/services/other-services/" class="link">Other Services</a> </li>
				</ul>
			</li>

			<li class="icon-library">
				<a class="link">About the Library</a>
				<ul class="sub-menu">
					<li> <a href="http://sherman.library.nova.edu/sites/about/overview/" class="link">About the Library</a> </li>
					<li> <a href="http://www.nova.edu/library/main/contact.html" class="link">Contact Information</a> </li>
					<li class="has-subnav"> 
						 <a href="#parent" rel="nofollow">General Information</a>
						 <ul class="children">
						 	<li> <a href="http://nova.edu/library/main/hours.html">Hours</a> </li>
						 	<li> <a href="//www.nova.edu/library/main/hours.html#directions">Map &amp; Directions</a> </li>
						 	<li> <a href="//www.nova.edu/library/main/hours.html#parking">Parking</a> </li>
						 	<li> <a href="//www.nova.edu/library/main/hours.html#transport">Buses &amp; Shuttles</a> </li>
						 </ul>
					 </li>
					<li> <a href="http://sherman.library.nova.edu/sites/about/exhibits/" class="link">Exhibits</a> </li>
					<li> <a href="http://sherman.library.nova.edu/helios" class="link">Events</a> </li>
					<li> <a href="http://sherman.library.nova.edu/sites/about/job-vacancies/" class="link">Job Vacancies</a> </li>
					<li> <a href="http://sherman.library.nova.edu/sites/about/library-collections/" class="link">Library Collections</a> </li>
					<li> <a href="http://sherman.library.nova.edu/sites/policies" class="link">Policies</a> </li>
					<li> <a href="http://www.nova.edu/library/about/news.html" class="link">News</a> </li>
					<li> <a href="http://www.nova.edu/community/libraries.html" class="link">NSU Libraries</a> </li>
					<li> <a href="http://www.nova.edu/library/main/directory.html" class="link" title="Staff Directory">Staff Directory</a> </li>				</ul>
			</li>

			<li class="icon-help">
				<a class="link">Help</a>
				<ul class="sub-menu">
					<li> <a href="http://www.nova.edu/library/main/ask.html" class="link">Ask a Librarian</a> </li>
					<li> <a href="http://www.nova.edu/library/main/a-z-help.html" class="link">A - Z Help Index</a> </li>
					<li> <a href="//nova.campusguides.com/index.php?gid=104" class="link">Library Guides</a> </li>
					<li> <a href="//nova.campusguides.com/cat.php?cid=20755&gid=104" class="link">How To ... </a> </li>
					<li> <a href="http://www.nova.edu/library/main/library-instruction.html" class="link">Library Instruction</a> </li>
					<li> <a href="//www.nova.edu/library/staffonly" class="link">For Library Staff Only</a> </li>
				</ul>

			</li>
		</ul>

	</nav><!--/.menu-->