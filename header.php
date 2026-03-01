<?php
/**
 * The header for our theme.
 *
 * @package Kiezbrand_Theme
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site-wrapper">
	<a class="screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'kiezbrand-theme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container site-header__inner">
			<div class="site-branding">
				<?php
				if ( has_custom_logo() ) {
					the_custom_logo();
				} else {
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				}
				?>
			</div>

			<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'kiezbrand-theme' ); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
						'fallback_cb'    => false,
					)
				);
				?>
			</nav>
		</div>
	</header>
