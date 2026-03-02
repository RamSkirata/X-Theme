<?php
/**
 * The template for displaying the footer.
 *
 * @package Kiezbrand_Theme
 */
?>
	<footer id="colophon" class="site-footer" itemscope itemtype="https://schema.org/WPFooter">
		<div class="container site-footer__inner">
			<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer menu', 'kiezbrand-theme' ); ?>" itemscope itemtype="https://schema.org/SiteNavigationElement">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'menu_id'        => 'footer-menu',
						'container'      => false,
						'fallback_cb'    => false,
					)
				);
				?>
			</nav>
			<p class="site-info">
				<?php
				echo esc_html(
					sprintf(
						/* translators: %s: current year. */
						__( '© %s Kiezbrand', 'kiezbrand-theme' ),
						gmdate( 'Y' )
					)
				);
				?>
			</p>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>