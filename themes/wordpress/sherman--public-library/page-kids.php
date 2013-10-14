<?php get_header(); ?>

			<?php get_template_part( 'template--feature-event' ); ?>

			<section id="panels" class="align-center clearfix" style="border-top: 1px solid white;">
				<div class="panel one-third catalog">
					
					<a class="align-bottom button epsilon" href="#">
						KidsCat? 
					</a>
				</div>
				
				<div class="panel one-third scholar">

					<a class="align-bottom button epsilon" href="#">
						Homework Help
					</a>

				</div>

				<div class="panel one-third" style="background: #E2624F;">					

					<a class="align-bottom button epsilon" href="#">
						Raise a Reader
					</a>

				</div>
			</section>

			<section class="align-center clearfix">
				<div class="panel one-fourth games" style="background-color: #21aabd;">
					<a class="align-bottom button epsilon" href="#">
						Games
					</a>
				</div>

				<div class="panel one-fourth dictionary" style="background-color: #61D4E4;">
					<a class="align-bottom button epsilon" href="#">
						Recommendations
					</a>
				</div>

				<div class="panel one-fourth" style="background-color: #4b5971;">
					<a class="align-bottom button epsilon" href="#">
						Programs
					</a>
				</div>

				<div class="panel one-fourth" style="background-color: #75D4BA;">
					<a class="align-bottom button epsilon" href="#">
						Schools
					</a>
				</div>

			</section>

			<section id="status" class="clearfix" style="text-align: center;">
				
			<!-- Library Hours
			======================
			-->	<a class="epsilon panel status-hours one-fourth" href="#">
					<span class="label">Library Hours</span>
				</a>

			<!-- Directions
			======================
			-->	<a class="epsilon panel status-directions  one-fourth" href="#">
					<span class="label">Directions</span>
				</a>

			<!-- Contact Us
			======================
			--> <a class="epsilon panel status-contact one-fourth" href="#">
					<span class="label">Contact Us</span>
				</a>

			<!-- Calendar
			======================
			--> <a class="epsilon panel status-calendar one-fourth" href="#">
					<span class="label">Calendar</span>
				</a>

			</section>

			<div id="second-feature">
				<div class="wrap clearfix">
				<div class="eightcol first">
					<img src="http://systems.library.nova.edu/cdn/styles/css/public-global/media/stock4.jpg" style="width: 100%;">

					<a class="button zeta" href="#" style="position: absolute; bottom: 0; right: 2em; background-color: white;">
						Could be Anything
					</a>
				</div>

				<div class="fourcol last wrap">
					<div style="position: relative; overflow: hidden;">

						<header style="position: absolute; background: rgba(255,255,255,.8); width:55%; padding: .5em; right: 0; height: 100%;">
							<h4 style="color:#4b5971">This book rules!</h4>
								<p>
									And here's a super short blurb.
								</p>

								<a class="button epsilon" href="#" style="background-color: #4b5971;">Review</a>
						</header>
						<img src="http://systems.library.nova.edu/cdn/styles/css/public-global/media/stock2.jpg" style="width:100%;">
					</div>

					<div style="position: relative; overflow: hidden;">
						<header style="position: absolute; background: rgba(255,255,255,.8); width: 100%; padding: .5em; right: 0; height: 50%; bottom: 0;">
							<h4 style="color:#4b5971">LEGO Builders Club</h4>
								<p style="margin-top: -1em;">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
								</p>

						</header>

						<img src="http://systems.library.nova.edu/cdn/styles/css/public-global/media/stock3.jpg" style="width:100%;">

					</div>
					
				</div>

				<!--<div class="row">
					<div class="fourcol first">
						<img src="http://placehold.it/450x253" style="width:100%;">
					</div>

					<div class="fourcol">
						<img src="http://placehold.it/450x253" style="width:100%;">
					</div>

					<div class="fourcol last">
						<img src="http://placehold.it/450x253" style="width:100%;">
					</div>

				</div>-->
				</div>
			</div>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="sevencol first clearfix" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						    <header class="article-header">
								<h1 class="page-title" itemprop="headline">
									<?php the_title(); ?>
								</h1>
						    </header> <!-- end article header -->
					
						    <section class="post-content clearfix" itemprop="articleBody">
							    <?php the_content(); ?>
							</section> <!-- end article section -->
						
						    <footer class="article-footer wrap clearfix">
			
							    <?php the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ', ', '</p>'); ?>
								
						    </footer> <!-- end article footer -->
						    
						    <?php //comments_template(); ?>
					
					    </article> <!-- end article -->
					
					    <?php endwhile; ?>		
					
					    <?php else : ?>
					
    					    <article id="post-not-found" class="hentry clearfix">
    					    	<header class="article-header">
    					    		<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
    					    	</header>
    					    	<section class="post-content">
    					    		<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
    					    	</section>
    					    	<footer class="article-footer">
    					    	    <p><?php _e("This is the error message in the page.php template.", "bonestheme"); ?></p>
    					    	</footer>
    					    </article>
					
					    <?php endif; ?>
			
    				</div> <!-- end #main -->

    				 <?php get_sidebar('home'); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>