<?php
/**
 * Template Name: About Brand
 *
 * About page template with conversion context.
 *
 * @package Kiezbrand_Theme
 */

get_header();
?>

<main id="primary" class="site-content">
	<section class="section">
		<div class="container split-layout">
			<div>
				<h1><?php esc_html_e( 'About Our Kiez Brand', 'kiezbrand-theme' ); ?></h1>
				<p><?php esc_html_e( 'Demo copy: We combine authentic storytelling tours and fan merchandise inspired by St. Pauli culture.', 'kiezbrand-theme' ); ?></p>
				<h2><?php esc_html_e( 'Our mission', 'kiezbrand-theme' ); ?></h2>
				<p><?php esc_html_e( 'Demo: Deliver memorable local experiences that visitors recommend and return to.', 'kiezbrand-theme' ); ?></p>
				<a class="kiez-button kiez-button--primary" href="/tours"><?php esc_html_e( 'Explore tours', 'kiezbrand-theme' ); ?></a>
			</div>
			<img src="https://picsum.photos/seed/aboutbrand/700/520" alt="About the Kiez brand" loading="lazy">
		</div>
	</section>
</main>

<?php
get_footer();