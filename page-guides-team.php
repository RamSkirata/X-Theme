<?php
/**
 * Template Name: Guides & Team
 *
 * Demo team page with trust-building bios.
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
							<h1><?php esc_html_e( 'Meet Our Guides', 'kiezbrand-theme' ); ?></h1>
							<p><?php esc_html_e( 'Demo copy: Introduce the team early to build confidence and increase booking conversion.', 'kiezbrand-theme' ); ?></p>
						</header>
						<div class="card-grid card-grid--three">
							<article class="profile-card"><img src="https://picsum.photos/seed/teama/500/380" alt="Guide Alex" loading="lazy"><h2><?php esc_html_e( 'Alex', 'kiezbrand-theme' ); ?></h2><p><?php esc_html_e( 'Demo: 8+ years guiding nightlife and music history tours.', 'kiezbrand-theme' ); ?></p></article>
							<article class="profile-card"><img src="https://picsum.photos/seed/teamb/500/380" alt="Guide Mina" loading="lazy"><h2><?php esc_html_e( 'Mina', 'kiezbrand-theme' ); ?></h2><p><?php esc_html_e( 'Demo: Artist and storyteller focused on neighborhood culture.', 'kiezbrand-theme' ); ?></p></article>
							<article class="profile-card"><img src="https://picsum.photos/seed/teamc/500/380" alt="Guide Tarek" loading="lazy"><h2><?php esc_html_e( 'Tarek', 'kiezbrand-theme' ); ?></h2><p><?php esc_html_e( 'Demo: Food guide with multilingual group tour experience.', 'kiezbrand-theme' ); ?></p></article>
						</div>
					</div>
				</section>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>

</main>

<?php
get_footer();