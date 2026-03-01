<?php
/**
 * Template for displaying archive pages.
 *
 * @package Kiezbrand_Theme
 */

get_header();
?>

<main id="primary" class="site-content">
	<div class="container">
		<header class="page-header">
			<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
			<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
		</header>

		<?php if ( have_posts() ) : ?>
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					</header>

					<div class="entry-summary">
						<?php the_excerpt(); ?>
					</div>
				</article>
				<?php
			endwhile;

			the_posts_navigation();
			?>
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>
	</div>
</main>

<?php
get_footer();
