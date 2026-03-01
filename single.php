<?php
/**
 * Template for displaying single posts.
 *
 * @package Kiezbrand_Theme
 */

get_header();
?>

<main id="primary" class="site-content">
	<div class="container">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<p class="entry-meta">
						<?php
						echo esc_html(
							sprintf(
								/* translators: %s: date. */
								__( 'Published on %s', 'kiezbrand-theme' ),
								get_the_date()
							)
						);
						?>
					</p>
				</header>

				<?php if ( has_post_thumbnail() ) : ?>
					<div class="entry-thumbnail">
						<?php the_post_thumbnail( 'large' ); ?>
					</div>
				<?php endif; ?>

				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
			<?php
			the_post_navigation();
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		endwhile;
		?>
	</div>
</main>

<?php
get_footer();
