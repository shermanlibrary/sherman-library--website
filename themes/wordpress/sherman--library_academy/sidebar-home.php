<div class="sidebar fourcol last clearfix" role="complementary">

	<div class="media">
		<img src="http://placehold.it/400x225" />
	</div>

	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar1' ); ?>

	<?php else : ?>

		<!-- This content shows up if there are no widgets defined in the backend. -->
		
	<?php endif; ?>

</div>