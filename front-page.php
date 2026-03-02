<?php
/**
 * Front page template.
 *
 * Conversion-focused homepage reusable section template parts
 *
 * @package Kiezbrand_Theme
 */

get_header();
?>

<main id="primary" class="site-content"><?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php if ( kiezbrand_theme_is_elementor_page( get_the_ID() ) ) : ?>
				<?php the_content(); ?>
			<?php else : ?>
				<?php get_template_part( 'template-parts/sections/home', 'hero' ); ?>
				<?php get_template_part( 'template-parts/sections/home', 'tour-highlights' ); ?>
				<?php get_template_part( 'template-parts/sections/home', 'guides-preview' ); ?>
				<?php get_template_part( 'template-parts/sections/home', 'shop-teaser' ); ?>
				<?php get_template_part( 'template-parts/sections/home', 'social-proof' ); ?>
				<?php get_template_part( 'template-parts/sections/home', 'newsletter-cta' ); ?>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>


</main>

<?php
get_footer();