<?php
/**
 * Template Name: Contact & Booking
 *
 * Contact page template with booking-first CTA layout.
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
							<h1><?php esc_html_e( 'Contact & Booking Requests', 'kiezbrand-theme' ); ?></h1>
							<p><?php esc_html_e( 'Demo copy: Use this page to capture private group requests and custom event bookings.', 'kiezbrand-theme' ); ?></p>
						</header>
						<div class="split-layout">
							<form class="stacked-form" action="#" method="post">
								<label for="contact-name"><?php esc_html_e( 'Name', 'kiezbrand-theme' ); ?></label>
								<input id="contact-name" type="text" name="contact-name" required>


					<label for="contact-message"><?php esc_html_e( 'Message', 'kiezbrand-theme' ); ?></label>
					<textarea id="contact-message" name="contact-message" rows="5"></textarea>

					<label for="contact-message"><?php esc_html_e( 'Message', 'kiezbrand-theme' ); ?></label>
					<textarea id="contact-message" name="contact-message" rows="5"></textarea>

					<button type="submit" class="kiez-button kiez-button--primary"><?php esc_html_e( 'Send booking request', 'kiezbrand-theme' ); ?></button>
							</form>
							<aside class="sales-panel">
								<h2><?php esc_html_e( 'Quick booking info', 'kiezbrand-theme' ); ?></h2>
								<p><?php esc_html_e( 'Demo response time: within 24h.', 'kiezbrand-theme' ); ?></p>
								<p><?php esc_html_e( 'Demo support: DE / EN.', 'kiezbrand-theme' ); ?></p>
								<p><?php esc_html_e( 'Demo meeting point options for private groups available.', 'kiezbrand-theme' ); ?></p>
							</aside>
						</div>
					</div>
				</section>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>
</main>

<?php
get_footer();