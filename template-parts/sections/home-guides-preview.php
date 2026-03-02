<?php
/**
 * Homepage guides preview section.
 *
 * @package Kiezbrand_Theme
 */
?>
<section class="section section--muted">
	<div class="container">
		<header class="section-header">
			<p class="eyebrow"><?php esc_html_e( 'Meet the guides', 'kiezbrand-theme' ); ?></p>
			<h2><?php esc_html_e( 'Locals who make stories unforgettable', 'kiezbrand-theme' ); ?></h2>
		</header>
		<div class="card-grid card-grid--three">
			<article class="profile-card">
				<img src="https://picsum.photos/seed/guide1/400/300" alt="Guide Alex" loading="lazy">
				<h3><?php esc_html_e( 'Alex', 'kiezbrand-theme' ); ?></h3>
				<p><?php esc_html_e( 'Demo: Nightlife historian and former club host.', 'kiezbrand-theme' ); ?></p>
			</article>
			<article class="profile-card">
				<img src="https://picsum.photos/seed/guide2/400/300" alt="Guide Mina" loading="lazy">
				<h3><?php esc_html_e( 'Mina', 'kiezbrand-theme' ); ?></h3>
				<p><?php esc_html_e( 'Demo: Street art expert with insider routes.', 'kiezbrand-theme' ); ?></p>
			</article>
			<article class="profile-card">
				<img src="https://picsum.photos/seed/guide3/400/300" alt="Guide Tarek" loading="lazy">
				<h3><?php esc_html_e( 'Tarek', 'kiezbrand-theme' ); ?></h3>
				<p><?php esc_html_e( 'Demo: Food lover leading authentic tasting walks.', 'kiezbrand-theme' ); ?></p>
			</article>
		</div>
		<p><a class="kiez-button kiez-button--secondary" href="/guides-team"><?php esc_html_e( 'View full team', 'kiezbrand-theme' ); ?></a></p>
	</div>
</section>