<?php get_header(); ?>
			
	<div id="feature" class="feature video">

		<div id="inner-feature" class="wrap clearfix">

			<div class="media">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php

			// 1. Get the format of the tutorial
			$academy_video_format = get_post_meta( get_the_ID(), 'academy_video_format', true); 

			/* ==================
			 * From here, some logic!
			 */ // If the tutorial video requires anything but the standalone files
				// --it was produced through Adobe Captivate, for instance--then we need 
				// to adjust the display accordingly.
				if ( $academy_video_format != 'standard' ) :
				else :

				$video_root = 'http://www.nova.edu/library/video/' . get_post_meta( get_the_ID(), 'academy_video_file', true);

			?>
			
			<video controls poster="<?php echo $video_root ?>.jpg">
	   
		   	<!-- Format: .mp4
            ======================
            -->	<source type="video/mp4" src="<?php echo $video_root ?>.mp4">

            <!-- Format: .webm
            ======================
	        --> <source type="video/webm" src="<?php echo $video_root ?>.webm">

	        <!-- Captions: .srt / .vtt
	        ======================
	        --> <track kind="subtitles" src="<?php echo $video_root ?>.srt" srclang="en" label="English">

			</video>

			<?php endif; ?>
			</div><!--/.media-->
		</div><!--/.wrap-->
	</div><!--/.feature-->
			<div id="content">

				<div id="inner-content" class="wrap clearfix">
			

						
						<div id="main" class="clearfix" role="main">
							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
								<header class="article-header">

									<h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1>
							
								</header> <!-- end article header -->
					
								<section class="post-content" itemprop="articleBody">
									<?php the_content(); ?>
								</section> <!-- end article section -->
						
								<footer class="article-footer">

									<p class="meta"><?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "bonestheme"); ?> <?php the_category(', '); ?>.</p>			
									<?php the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ', ', '</p>'); ?>
							
								</footer> <!-- end article footer -->
					
								<?php comments_template();// comments should go inside the article element ?>
					
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
					    		    <p><?php _e("This is the error message in the single.php template.", "bonestheme"); ?></p>
					    		</footer>
							</article>
					
						<?php endif; ?>
			
					</div> <!-- end #main -->
    
					<?php // get_sidebar(); // sidebar 1 ?>

				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>