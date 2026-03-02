<?php
/**
 * Template Name: Tours Overview
 *
 * Conversion-focused tour listing page.
 *
 * @package Kiezbrand_Theme
 */

get_header();
?>

<main id="primary" class="site-content">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php if ( kiezbrand_theme_is_elementor_page( get_the_ID() ) ) : ?>
				<?php the_content(); ?>
			<?php else : ?>
				<section class="section">
					<div class="container">
						<header class="section-header">
							<h1><?php esc_html_e( 'Kiez Tours Overview', 'kiezbrand-theme' ); ?></h1>
							<p><?php esc_html_e( 'Demo copy: Help visitors compare tours quickly and drive bookings with clear next steps.', 'kiezbrand-theme' ); ?></p>
						</header>
						<div class="card-grid card-grid--three">
							<?php
							$demo_tours = array(
								array(
									'title'       => __( 'Reeperbahn Night Stories', 'kiezbrand-theme' ),
									'description' => __( 'Demo: Stories, landmarks, and legendary nightlife history.', 'kiezbrand-theme' ),
									'duration'    => __( '120 minutes', 'kiezbrand-theme' ),
									'price'       => __( 'From €34', 'kiezbrand-theme' ),
									'link_text'   => __( 'Book this tour', 'kiezbrand-theme' ),
									'link_url'    => '/tours/reeperbahn-night-stories',
									'image'       => 'https://picsum.photos/seed/toura/600/400',
								),
								array(
									'title'       => __( 'Street Art & Hidden Spots', 'kiezbrand-theme' ),
									'description' => __( 'Demo: Explore local murals and creative backstreets.', 'kiezbrand-theme' ),
									'duration'    => __( '90 minutes', 'kiezbrand-theme' ),
									'price'       => __( 'From €29', 'kiezbrand-theme' ),
									'link_text'   => __( 'Book this tour', 'kiezbrand-theme' ),
									'link_url'    => '/tours/street-art-hidden-spots',
									'image'       => 'https://picsum.photos/seed/tourb/600/400',
								),
								array(
									'title'       => __( 'Food & Kiez Culture Walk', 'kiezbrand-theme' ),
									'description' => __( 'Demo: Sample neighborhood bites and local stories.', 'kiezbrand-theme' ),
									'duration'    => __( '150 minutes', 'kiezbrand-theme' ),
									'price'       => __( 'From €49', 'kiezbrand-theme' ),
									'link_text'   => __( 'Book this tour', 'kiezbrand-theme' ),
									'link_url'    => '/tours/food-kiez-culture',
									'image'       => 'https://picsum.photos/seed/tourc/600/400',
								),
							);

			foreach ( $demo_tours as $demo_tour ) {
								get_template_part( 'template-parts/components/tour-card', null, $demo_tour );
							}
							?>
						</div>
					</div>
				</section>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>
</main>

<?php
get_footer();