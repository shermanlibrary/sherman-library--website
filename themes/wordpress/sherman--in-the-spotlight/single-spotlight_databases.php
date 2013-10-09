<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					    <?php 
					    	$authURL		= get_post_meta(get_the_ID(), 'authenticated_url', true);
					    	$dbID			= get_post_meta(get_the_ID(), 'aid', true);
					    	$resourceLogo 	= get_post_meta( get_the_ID(), 'resource_logo', true );
					    	$instructions = get_post_meta(get_the_ID(), 'instructions', true);
					    	$tutorial = get_post_meta(get_the_ID(), 'handout', true);
					    	$screencast = get_post_meta(get_the_ID(), 'screencast', true);

					    	$screencast = substr( $screencast, strpos($screencast, 'watch/') + 6 ); // knowing "watch/"
						?>
					
					<!-- Main Article
					======================
					--> <article id="post-<?php the_ID(); ?>" <?php post_class('post clearfix'); ?> role="article" style="background: transparent; border-bottom: none;">

						<div class="sevencol first">

						    <section class="post-content clearfix shadow">

						    <header class="article-header">
								
							    <h1 class="single-title resource-title <?php if ( has_post_thumbnail() ) { echo "hide-text"; } ?> "><?php the_title(); ?></h1>							   
						
						    </header> <!-- end article header -->

						    <?php if ( has_post_thumbnaiL() ) : ?>
							<?php $logo = wp_get_attachment_image_Src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
							<img src="<?php echo $logo[0]; ?>" class="resource-logo" style="width: 100%;">
							<?php endif; ?>
								
								<div class="wrap">
							    <?php the_content(); ?>
							</div>
					
						    </section> <!-- end article section -->

						    <footer class="article-header"></footer> <!-- end article footer -->
						
						    <?php //comments_template(); // you may not need this ?>

					    </div>					

				    	<div class="sidebar fivecol last clearfix contrast-against-white">	

						    <?php if ( $screencast != '' ) : ?>
						    <!-- Relevant Video
						    ======================
						    -->	<section class="media">
									<video src="#" poster="http://placehold.it/570x321" controls>									</video>
								</section>

							<?php endif; ?>					
							
							<?php if ( $instructions != '' ) : ?>
							<!-- Instructions
							======================
							--> <section class="stack-blocks">
									<?php echo $instructions; ?>					      		
					      		</section>					      		

							<?php endif; ?>

							<!-- Buttons
							======================
							-->	<section class="">

							<?php if ( $tutorial != '' ) : ?>
						    
						    	<a class="button orange" href="<?php echo $tutorial; ?>" title="Tutorial">
						    		Tutorial
						    	</a> &nbsp;
						    
							<?php endif; ?>

							<!-- Authenticating Button
							======================
							-->	<a class="button" href="<?php echo $authURL ?>" title="<?php the_title(); ?>">Check it Out</a>
								</section>
								  </ul>
						</div>

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
        						    <p><?php _e("This is the error message in the single-custom_type.php template.", "bonestheme"); ?></p>
        						</footer>
        					</article>
					
					    <?php endif; ?>
    
				    <?php //get_sidebar(); // sidebar 1 ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>