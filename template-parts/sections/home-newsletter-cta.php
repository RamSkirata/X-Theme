<?php
/**
 * Homepage newsletter and conversion CTA section.
 *
 * @package Kiezbrand_Theme
 */
?>
<section class="section section--cta">
	<div class="container">
		<h2><?php esc_html_e( 'Get weekly offers and first access to new tours', 'kiezbrand-theme' ); ?></h2>
		<p><?php esc_html_e( 'Demo: Capture leads that are not ready to book today and convert them later with email campaigns.', 'kiezbrand-theme' ); ?></p>
		<form class="inline-form" action="#" method="post">
			<label class="screen-reader-text" for="newsletter-email"><?php esc_html_e( 'Email address', 'kiezbrand-theme' ); ?></label>
			<input id="newsletter-email" type="email" name="newsletter-email" placeholder="name@example.com">
			<button type="submit" class="kiez-button kiez-button--primary"><?php esc_html_e( 'Join newsletter', 'kiezbrand-theme' ); ?></button>
		</form>
	</div>
</section>
