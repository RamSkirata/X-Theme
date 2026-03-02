<?php
/**
 * Homepage tour highlights section.
 *
 * @package Kiezbrand_Theme
 */
?>
<section class="section">
	<div class="container">
		<header class="section-header">
			<p class="eyebrow"><?php esc_html_e( 'Tour highlights', 'kiezbrand-theme' ); ?></p>
			<h2><?php esc_html_e( 'Pick your experience', 'kiezbrand-theme' ); ?></h2>
		</header>
		<div class="card-grid card-grid--three">
			<?php
			get_template_part(
				'template-parts/components/tour-card',
				null,
				array(
					'title'       => __( 'Reeperbahn Night Stories', 'kiezbrand-theme' ),
					'description' => __( 'Demo: Dramatic stories, iconic clubs, and neighborhood history.', 'kiezbrand-theme' ),
					'duration'    => __( '120 minutes', 'kiezbrand-theme' ),
					'price'       => __( '€34', 'kiezbrand-theme' ),
					'link_text'   => __( 'Book night tour', 'kiezbrand-theme' ),
					'link_url'    => '/tours/reeperbahn-night-stories',
					'image'       => 'https://picsum.photos/seed/nighttour/600/400',
				)
			);
			get_template_part(
				'template-parts/components/tour-card',
				null,
				array(
					'title'       => __( 'Street Art & Hidden Spots', 'kiezbrand-theme' ),
					'description' => __( 'Demo: Discover local murals and under-the-radar corners.', 'kiezbrand-theme' ),
					'duration'    => __( '90 minutes', 'kiezbrand-theme' ),
					'price'       => __( '€29', 'kiezbrand-theme' ),
					'link_text'   => __( 'Reserve your spot', 'kiezbrand-theme' ),
					'link_url'    => '/tours/street-art-hidden-spots',
					'image'       => 'https://picsum.photos/seed/streetart/600/400',
				)
			);
			get_template_part(
				'template-parts/components/tour-card',
				null,
				array(
					'title'       => __( 'Food & Kiez Culture Walk', 'kiezbrand-theme' ),
					'description' => __( 'Demo: Bites, stories, and local recommendations to keep.', 'kiezbrand-theme' ),
					'duration'    => __( '150 minutes', 'kiezbrand-theme' ),
					'price'       => __( '€49', 'kiezbrand-theme' ),
					'link_text'   => __( 'See availability', 'kiezbrand-theme' ),
					'link_url'    => '/tours/food-kiez-culture',
					'image'       => 'https://picsum.photos/seed/foodtour/600/400',
				)
			);
			?>
		</div>
	</div>
</section>