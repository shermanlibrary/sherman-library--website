			<?php 
			/* ==================
			 * Featured Spotlight
			 * ================== */
			/* ==================
			 - We look for a featured, spotlit event
			 - that meets the targeted audience criteria
			 - and that it has been further optimized
			 - via the marketing options, which is available
			 - to only "Webrarian" levels. 
			 */

			/* ==================
			 * Spotlight JSON API */
			$spotlight_taxonomy_api_url 	= 'http://sherman2.library.nova.edu/sites/spotlight/api/taxonomy/get_taxonomy_posts/';
			$spotlight_taxonomy 			= 'library-audience';
			 
			if ( is_page( 'kids' ) ) {

				//

				$library_audience = 'kids';
			}

			elseif ( is_page( 'teens' ) ) {

				$library_audience = 'teens';

			}

			else {

				$library_audience = 'public';
			}

			$feature_jSON = json_decode( wp_remote_retrieve_body( wp_remote_get( $spotlight_taxonomy_api_url . '?taxonomy=' . $spotlight_taxonomy .'&slug=' . $library_audience . '&post_type=spotlight_events&count=1', array( 'sslverify' => false) ) ), true); 
			foreach ($feature_jSON['posts'] as $response) : ?>

				<?php if ( !$response['custom_fields']['overlay_title'][0] ) : ?>

				<?php else : ?>

				<?php // Response Variables
				$feature_buttonText				=	$response['custom_fields']['overlay_button_text'][0];
				$feature_date					=	$response['custom_fields']['event_date'][0];
				$feature_image_id				=	$response['custom_fields']['graphic'][0];
				$feature_imageTablet			=	$response['thumbnail_images']['feature-medium']['url'];
				$feature_imageWidescreen		=	$response['thumbnail_images']['feature-jumbo']['url'];
				$feature_link					=	$response['custom_fields']['overlay_link'][0];
				$feature_tagline				=	$response['custom_fields']['overlay_tagline'][0];
				$feature_title					=	$response['custom_fields']['overlay_title'][0];
				?>

				<div class="feature feature-event" id="feature" style="background-image: url(<?php echo $feature_imageWidescreen; ?>); ">				

					<div id="inner-feature" class="contrast-against-dark wrap clearfix">
						
							<section class="promotion">

								<header>

									<h3 class="gamma promotion-title">
										<?php echo $feature_title; ?>
									</h3>

								</header>

								<time class="delta" datetime="<?php echo $feature_date; ?>"> 
									<?php echo date('l, F j', $feature_date); ?> 
								</time>

								<a class="button zeta" href="#" style="background-color: #E2624F;">
									<?php echo $feature_buttonText; ?>
								</a>

							</section>

					</div>
				</div>

				<?php endif; ?>

			<?php endforeach; ?>