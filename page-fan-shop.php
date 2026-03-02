<?php
/**
 * Template Name: Fan Shop Hub
 *
 * External-link hub for merchandise sales channels.
 *
 * @package Kiezbrand_Theme
 */

get_header();
?>

<main id="primary" class="site-content">
	<section class="section">
		<div class="container">
			<header class="section-header">
				<h1><?php esc_html_e( 'Fan Shop Hub', 'kiezbrand-theme' ); ?></h1>
				<p><?php esc_html_e( 'Demo copy: Send fans to your main sales channels while keeping brand consistency.', 'kiezbrand-theme' ); ?></p>
			</header>
			<div class="card-grid card-grid--three">
				<article class="sales-card"><div class="sales-card__content"><h2><?php esc_html_e( 'Official Online Store', 'kiezbrand-theme' ); ?></h2><p><?php esc_html_e( 'Demo: Full collection with tees, hoodies, and accessories.', 'kiezbrand-theme' ); ?></p><a class="kiez-button kiez-button--primary" href="https://example.com" target="_blank" rel="noopener noreferrer">Visit Store</a></div></article>
				<article class="sales-card"><div class="sales-card__content"><h2><?php esc_html_e( 'Marketplace Profile', 'kiezbrand-theme' ); ?></h2><p><?php esc_html_e( 'Demo: Limited drops and collector products.', 'kiezbrand-theme' ); ?></p><a class="kiez-button kiez-button--primary" href="https://example.com" target="_blank" rel="noopener noreferrer">Open Marketplace</a></div></article>
				<article class="sales-card"><div class="sales-card__content"><h2><?php esc_html_e( 'Event Pop-Up Dates', 'kiezbrand-theme' ); ?></h2><p><?php esc_html_e( 'Demo: Merchandise pickup and in-person signing sessions.', 'kiezbrand-theme' ); ?></p><a class="kiez-button kiez-button--primary" href="https://example.com" target="_blank" rel="noopener noreferrer">View Events</a></div></article>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();