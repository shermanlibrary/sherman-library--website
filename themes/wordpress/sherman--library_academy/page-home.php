<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>
			
<?php include('feature-series.php'); ?>
<!-- Content!
======================
-->	<div id="content">
	
		<div id="inner-content" class="wrap clearfix">
	
		    <div id="main" class="eightcol first clearfix" role="main">

		    	<ul class="browse-subjects">
				<?php wp_list_categories(array(
					'show_option_all'    => '',
					'orderby'            => 'name',
					'order'              => 'ASC',
					'style'              => 'list',
					'show_count'         => 0,
					'hide_empty'         => 0,
					'use_desc_for_title' => 1,
					'child_of'           => 0,
					'feed'               => '',
					'feed_type'          => '',
					'feed_image'         => '',
					'exclude'            => '1', // Exclude "Miscellaenous"
					'exclude_tree'       => '',
					'include'            => '',
					'hierarchical'       => 1,
					'title_li'           => __( '' ),
					'show_option_none'   => __('No categories'),
					'number'             => null,
					'echo'               => 1,
					'depth'              => 0,
					'current_category'   => 0,
					'pad_counts'         => 0,
					'taxonomy'           => 'category',
					'walker'             => null
				)); ?>
				</ul>

		    </div> <!-- end #main -->

		    <?php get_sidebar('home'); ?>
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
