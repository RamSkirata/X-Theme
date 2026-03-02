<?php
/**
 * Single Tour template.
 *
 * @package Kiezbrand_Theme
 */

get_header();
?>

<main id="primary" class="site-content">
	<div class="container">
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'tour-single' ); ?>>
				<header class="section-header">
					<p class="eyebrow"><?php esc_html_e( 'Single Tour Template', 'kiezbrand-theme' ); ?></p>
					<?php the_title( '<h1>', '</h1>' ); ?>
				</header>

				<img src="https://picsum.photos/seed/singletour/1100/520" alt="<?php the_title_attribute(); ?>" loading="lazy">

				<section class="section section--compact">
					<h2><?php esc_html_e( 'Why guests book this tour', 'kiezbrand-theme' ); ?></h2>
					<p><?php esc_html_e( 'Demo: Highlight outcomes, guide expertise, and memorable moments before visitors scroll to booking.', 'kiezbrand-theme' ); ?></p>
					<?php the_content(); ?>
				</section>

				<section class="section section--compact">
					<h2><?php esc_html_e( 'Book now', 'kiezbrand-theme' ); ?></h2>
					<ul>
						<li><?php esc_html_e( 'Demo duration: 120 minutes', 'kiezbrand-theme' ); ?></li>
						<li><?php esc_html_e( 'Demo group size: up to 20 guests', 'kiezbrand-theme' ); ?></li>
						<li><?php esc_html_e( 'Demo meeting point: St. Pauli Station', 'kiezbrand-theme' ); ?></li>
					</ul>
					<p>
						<a class="kiez-button kiez-button--primary" href="/contact"><?php esc_html_e( 'Reserve your date', 'kiezbrand-theme' ); ?></a>
					</p>
				</section>
			</article>
		<?php endwhile; ?>
	</div>
</main>

<?php
get_footer();