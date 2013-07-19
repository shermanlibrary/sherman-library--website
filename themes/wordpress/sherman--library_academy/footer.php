<!-- Bread Crumbs
======================
--> <div class="bread-crumbs persistent persistent--bottom"> 
		<ul class="breadbox">
			<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
				<a href="http://nova.edu/library/main" itemprop="url">
					<span itemprop="title">Alvin Sherman Library</span>
				</a>
				<span class="arrow"><span>&nbsp;</span></span>
			</li>

			<?php if ( !is_post_type_archive() ) : ?>
			<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
				<a href="<?php echo home_url();?>" title="<?php echo bloginfo('name'); ?>">
					<span itemprop="title"> <?php echo bloginfo('name'); ?></span>
				</a><span class="arrow"><span>&nbsp;</span></span>
			</li>

			<?php else : ?>

			<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
				<a href="<?php echo get_post_type_archive_link();?>" title="<?php post_type_archive_title(); ?>">
					<span itemprop="title"> <?php post_type_archive_title(); ?></span>
				</a><span class="arrow"><span>&nbsp;</span></span>
			</li>

			<?php endif; ?>

			<?php if ( !(is_home() || is_front_page() || is_archive() || is_post_type_archive()) ) : ?>
			
				<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
					<a href="<?php echo get_permalink(); ?>" title="<?php get_the_title; ?>">
						<span itemprop="title"> <?php echo get_the_title(); ?></span>
					</a><span class="arrow"><span>&nbsp;</span></span>
				</li>

			<?php endif; ?>

		</ul><!--/.breadbox-->
	</div>


	<footer id="footer" class="footer" role="contentinfo">

        <div class="contact-ribbon clearfix">
            <div class="wrap clearfix">

                <div class="row">
                    <nav class="social-menu last hint hint--info hint--left" data-hint="We're even better on the web.">
                        <a href="http://www.facebook.com/AlvinShermanLibrary" title="The Library on Facebook" class="icon-facebook"></a> 
                        <a href="http://twitter.com/#!/AlvinShermanLib" title="The Library on Twitter" class="icon-twitter"></a>
                    </nav>
                
                </div>          

            </div>
        </div>
    
        <div id="inner-footer" class="wrap clearfix">               
            <div class="sixcol first">

            <p>
                <a href="http://nova.edu/library/main" title="Alvin Sherman Library Home Page">Alvin Sherman Library, Research, and Information Technology Center</a> <br>
                3100 Ray Ferrero Jr. Boulevard in Fort Lauderdale, Florida 33314-1013 <br>
                <a href="tel:19542624600" class="icon-phone"> (954) 262 - 4600</a> |
                <a href="http://www.nova.edu/library/about/newsiteform.html" class="icon-keyboard"> Leave Feedback</a> |
                <a href="http://nova.edu/library/about/reghours.html" class="icon-clock"> Library Hours</a>

            </p>
            </div>

            <div class="sixcol last">
                <p>
                    <img src="http://sherman.library.nova.edu/cdn/styles/css/brand/joint-use-facility.png" alt="The Alvin Sherman Library is a joint-use facility between Nova Southeastern University and the Broward County Board of County Commissions">
                </p>
            </div>
        </div> <!-- end #inner-footer -->
        
    </footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html> <!-- end page. what a ride! -->