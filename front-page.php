<?php
/**
 * Front page template.
 *
 * Conversion-focused homepage with placeholder content for tours and merchandise.
 *
 * @package Kiezbrand_Theme
 */

get_header();
?>

<main id="primary" class="site-content">
	<section class="hero">
		<div class="container">
			<h1><?php esc_html_e( 'Legendary Kiez Tours & Fan Merchandise', 'kiezbrand-theme' ); ?></h1>
			<p>
				<?php esc_html_e( 'Experience the heartbeat of St. Pauli: book guided Kiez tours, discover insider stories, and grab official fan merch in one place.', 'kiezbrand-theme' ); ?>
			</p>
			<div class="button-row">
				<a class="kiez-button kiez-button--primary" href="#book-tour"><?php esc_html_e( 'Book a Tour', 'kiezbrand-theme' ); ?></a>
				<a class="kiez-button kiez-button--secondary" href="#shop-merch"><?php esc_html_e( 'Shop Merchandise', 'kiezbrand-theme' ); ?></a>
			</div>

			<div class="info-grid">
				<div class="info-card">
					<h2><?php esc_html_e( 'Daily Guided Tours', 'kiezbrand-theme' ); ?></h2>
					<p><?php esc_html_e( 'Placeholder copy: 90-minute and 2-hour tour formats with local guides.', 'kiezbrand-theme' ); ?></p>
				</div>
				<div class="info-card">
					<h2><?php esc_html_e( 'Top Rated Experience', 'kiezbrand-theme' ); ?></h2>
					<p><?php esc_html_e( 'Placeholder copy: Show customer ratings and social proof to increase conversion.', 'kiezbrand-theme' ); ?></p>
				</div>
				<div class="info-card">
					<h2><?php esc_html_e( 'Official Fan Shop', 'kiezbrand-theme' ); ?></h2>
					<p><?php esc_html_e( 'Placeholder copy: Highlight limited drops, hoodies, caps, and accessories.', 'kiezbrand-theme' ); ?></p>
				</div>
			</div>
		</div>
	</section>

	<section id="book-tour" class="container" style="padding-top: 2rem;">
		<h2><?php esc_html_e( 'Featured Tours', 'kiezbrand-theme' ); ?></h2>
		<p><?php esc_html_e( 'Replace this section with Elementor widgets: pricing cards, FAQs, and a booking CTA.', 'kiezbrand-theme' ); ?></p>
	</section>

	<section id="shop-merch" class="container" style="padding-top: 1rem;">
		<h2><?php esc_html_e( 'Merch Highlights', 'kiezbrand-theme' ); ?></h2>
		<p><?php esc_html_e( 'Replace this section with Elementor product grids and promotional banners.', 'kiezbrand-theme' ); ?></p>
	</section>
</main>

<?php
get_footer();
