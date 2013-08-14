<?php get_header(); ?>
		
<div id="feature" class="feature video">

	<div id="inner-feature" class="wrap clearfix">

			<div class="media contrast-against-dark">
			<?php if (have_posts()) : while (have_posts()) : the_post(); setPostViews(get_the_ID());?>
			
			<h1 class="single-title gamma" itemprop="headline"><?php the_title(); ?></h1>
			<p class="meta">
				<time class="icon-calendar" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate> 
					<?php the_time('F jS, Y'); ?>
				</time> 

				<span class="icon-mobile"> <?php echo getPostViews(get_the_ID()); ?> views</span>
			</p>			

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
	        <track kind="subtitles" src="<?php echo $video_root ?>.srt" srclang="en" label="English">--> 

			</video>

			<?php endif; ?>
			</div><!--/.media-->
		</div><!--/.wrap-->
	</div><!--/.feature-->

	<div id="content">

		<div id="inner-content" class="wrap clearfix">

				<div id="main" class="eightcol first clearfix" role="main">
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
							
						<section class="post-content" itemprop="articleBody">
							<?php the_content(); ?>
						</section> <!-- end article section -->
				
						<?php //comments_template();// comments should go inside the article element ?>
			
					</article> <!-- end article -->
			
				</div> <!-- end #main -->

				<div class="fourcol last">
					<aside class="contrast-against-dark">
						<section>
							<header>
								<h3 class="section-title">About</h3>
							</header>
							<p><?php echo get_the_excerpt(); ?></p>						
						</section>

						<section class="stack-blocks">
							<header>
								<h3 class="section-title">Download</h3>
							</header>
							<p class="icon-podcast">
								<a href="<?php echo $video_root; ?>.mp4" title="Download the MP4">MP4</a> | 
								<a href="<?php echo $video_root; ?>.srt">Transcript</a>
							</p>
						</section>

						<section class="media stack-blocks">
							<?php library_related_videos(); ?>
						</section>	
					</aside>
				</div>

			<?php // get_sidebar(); // sidebar 1 ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

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

<?php get_footer(); ?>