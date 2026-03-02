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

<main id="primary" class="site-content">
	<?php get_template_part( 'template-parts/sections/home', 'hero' ); ?>
	<?php get_template_part( 'template-parts/sections/home', 'tour-highlights' ); ?>
	<?php get_template_part( 'template-parts/sections/home', 'guides-preview' ); ?>
	<?php get_template_part( 'template-parts/sections/home', 'shop-teaser' ); ?>
	<?php get_template_part( 'template-parts/sections/home', 'social-proof' ); ?>
	<?php get_template_part( 'template-parts/sections/home', 'newsletter-cta' ); ?>

</main>

<?php
get_footer();