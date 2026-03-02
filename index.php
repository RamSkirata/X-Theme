<?php
/**
 * Main template file.
 *
 * @package Kiezbrand_Theme
 */

get_header();
?>

<main id="primary" class="site-content">
	<div class="container">
        <header class="page-header">
			<h1 class="page-title screen-reader-text"><?php esc_html_e( 'Latest Posts', 'kiezbrand-theme' ); ?></h1>
		</header>

		<?php if ( have_posts() ) : ?>
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemtype="https://schema.org/BlogPosting">
					<header class="entry-header">
						<?php the_title( sprintf( '<h2 class="entry-title" itemprop="headline"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					</header>

					<div class="entry-content" itemprop="articleBody">
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
