<?php get_header(); ?>
			
			<?php get_template_part( 'template--feature-event' ); ?>
			
			<section id="panels" class="align-center clearfix" style="border-top: 1px solid white;">
				<div class="panel one-third catalog">
					
					<a class="align-bottom button epsilon" href="#">
						Browse the Catalog
					</a>
				</div>
				
				<div class="panel one-third library-card">

					<a class="align-bottom button epsilon" href="#">
						Get a Library Card
					</a>

				</div>

				<div class="panel one-third" style="background: #4b5971;">					

					<a class="align-bottom button epsilon" href="#">
						View My Account
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
					<header style="position: absolute; background: rgba(255,255,255,.8); width:100%; padding: .5em;">
						<h3 style="color:#4b5971">This could be an event, but for now it's</h3>
						<h1 style="color:#4b5971">Rivendell!</h1>
					</header>
					<img src="http://systems.library.nova.edu/cdn/styles/css/public-global/media/stock1.png" style="width: 100%;">

					<a class="button zeta" href="#" style="position: absolute; bottom: 0; right: 2em; background-color:#455268;">
						That Still Counts as One!
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
					<img src="http://placehold.it/450x253" style="width:100%;">
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

			
<!-- Content!
======================
-->	<div id="content">
	
		<div id="inner-content" class="wrap clearfix">
	
		    <div id="main" class="sevencol first clearfix" role="main">

				<?php //query_posts(array('post_type' => 'any')); ?>
			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
			    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix contrast-against-white'); ?> role="article">
	    	
				    <header class="article-header">
					    
					    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

				    	<p class="meta"> 
				    		<time class="icon-clock" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate>
								<?php _e('Posted', 'bonestheme'); ?>
				    			<?php the_time(get_option('date_format')); ?></time> 
				    			<?php // the_author_posts_link(); ?> <span class="amp">&</span> <?php _e('filed under', 'bonestheme'); ?> <?php the_category(', '); ?>.</p>

						 
				    </header> <!-- end article header -->
			
				    <section class="post-content clearfix">
					    <?php the_content(); ?>
				    </section> <!-- end article section -->
				
				    <footer class="article-footer">

				    </footer> <!-- end article footer -->
				    
				    <?php // comments_template(); // uncomment if you want to use them ?>
			
			    </article> <!-- end article -->
			
			    <?php endwhile; ?>
			    <?php //wp_reset_query(); ?>
			
			        <?php if (function_exists('bones_page_navi')) { // if experimental feature is active ?>
				
				        <?php bones_page_navi(); // use the page navi function ?>
				
			        <?php } else { // if it is disabled, display regular wp prev & next links ?>
				        <nav class="wp-prev-next">
					        <ul class="clearfix">
						        <li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', 'bonestheme')) ?></li>
						        <li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', 'bonestheme')) ?></li>
					        </ul>
				        </nav>
			        <?php } ?>		
			
			    <?php else : ?>
			    
			        <article id="post-not-found" class="hentry clearfix">
			            <header class="article-header">
			        	    <h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
			        	</header>
			            <section class="post-content">
			        	    <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
			        	</section>
			        	<footer class="article-footer">
			        	    <p><?php _e("This is the error message in the index.php template.", "bonestheme"); ?></p>
			        	</footer>
			        </article>
			
			    <?php endif; ?>
	
		    </div> <!-- end #main -->

		    <?php get_sidebar('home'); ?>
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
