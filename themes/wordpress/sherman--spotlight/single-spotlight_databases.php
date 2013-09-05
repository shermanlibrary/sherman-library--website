<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				    <div class="ninecol typeplate clearfix" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					    <?php 
					    	$authURL	= get_post_meta(get_the_id(), 'authenticated_url', true);
					    	$instructions = get_post_meta(get_the_ID(), 'instructions', true);
					    	$tutorial = get_post_meta(get_the_ID(), 'tutorial', true);
					    	$screencast = get_post_meta(get_the_ID(), 'screencast', true);
						?>
					
					<!-- Main Article
					======================
					--> <article id="post-<?php the_ID(); ?>" <?php post_class('post clearfix'); ?> role="article" style="background: transparent; border-bottom: none;">

						<div class="sixcol first">

						    <section class="post-content clearfix shadow" style="background: white;">

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

					    	<div class="sixcol last">						
						
						    <section style="margin-top: -.8em;">
								<nav class="menu--feedly" style="font-size: 15px; ">
								  <ul>
								    <li class="coral" style="opacity: 1;">
								      <a class="on" href="#">
								        <span class="icon-grid-view icon"></span>
								        
								        <span class="label">
								          How it works ...
								        </span>
								      </a>

								      <ul class="sub-menu">
								      	<p>
								      		<?php echo $instructions; ?>
								      	</p>
								      	<p>
								      		<a class="lib-button-small gradient--coral" style="color: white;"href="<?php echo $authURL ?>"> 
								      			Check it out!
								      		</a>
							      		</p>
								      </ul>
								    </li> 

								    <?php if ( $screencast != '' ) : ?>
								    <li>
								    	<a href="#">
								    		<span class="icon-film icon"></span>
								    		<span class="label"> 
								    			Video
								    		</span>
								    	</a>
								    </li>
									<?php endif; ?>

									<?php if ( $tutorial != '' ) : ?>
								    <li>
								    	<a href="#">
								    		<span class="icon-link icon"></span>
								    		<span class="label"> 
								    			See the Tutorial
								    		</span>
								    	</a>
								    </li>
									<?php endif; ?>

								  </ul>

								</nav>
						    </section>

							<section id="ask-a-librarian" class="flat" style="font-size: 15px; max-width: 300px;"></section>
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
			
				    </div> <!-- end #main -->
    
				    <?php //get_sidebar(); // sidebar 1 ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>