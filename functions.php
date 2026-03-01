<?php
/**
 * Theme functions and definitions.
 *
 * @package Kiezbrand_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'kiezbrand_theme_setup' ) ) {
	/**
	 * Set up theme defaults and register support for WordPress features.
	 *
	 * This function is hooked into `after_setup_theme`, which runs before `init`.
	 */
	function kiezbrand_theme_setup() {
		/*
		 * Let WordPress manage the document title tag.
		 * This improves compatibility with SEO plugins and search engines.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable featured images (post thumbnails) for posts and pages.
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * Enable modern HTML5 markup output for core components.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			)
		);

		/*
		 * Register custom logo support so non-developers can manage branding.
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 120,
				'width'       => 320,
				'flex-height' => true,
				'flex-width'  => true,
			)
		);

		/*
		 * Enable selective refresh for widgets in the Customizer.
		 */
		add_theme_support( 'customize-selective-refresh-widgets' );

		/*
		 * Useful support flags for Elementor and block editor interoperability.
		 */
		add_theme_support( 'align-wide' );
		add_theme_support( 'editor-styles' );
		add_editor_style( 'assets/css/editor-style.css' );
		add_theme_support( 'responsive-embeds' );

		/*
		 * Register navigation menu locations.
		 */
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary Menu', 'kiezbrand-theme' ),
				'footer'  => esc_html__( 'Footer Menu', 'kiezbrand-theme' ),
			)
		);
	}
}
add_action( 'after_setup_theme', 'kiezbrand_theme_setup' );

/**
 * Register Elementor compatibility locations.
 *
 * This enables Elementor Theme Builder to control header/footer templates.
 *
 * @param \\ElementorPro\\Modules\\ThemeBuilder\\Classes\\Locations_Manager $elementor_theme_manager Elementor locations manager.
 */
function kiezbrand_theme_register_elementor_locations( $elementor_theme_manager ) {
	if ( method_exists( $elementor_theme_manager, 'register_all_core_location' ) ) {
		$elementor_theme_manager->register_all_core_location();
	}
}
add_action( 'elementor/theme/register_locations', 'kiezbrand_theme_register_elementor_locations' );

/**
 * Enqueue theme styles and JavaScript.
 */
function kiezbrand_theme_scripts() {
	$theme_version = wp_get_theme()->get( 'Version' );

	/*
	 * Primary stylesheet:
	 * Includes reset, layout, typography, and front-page conversion styles.
	 */
	wp_enqueue_style(
		'kiezbrand-theme-style',
		get_stylesheet_uri(),
		array(),
		$theme_version
	);

	/*
	 * Extra stylesheet for optional component overrides.
	 */
	wp_enqueue_style(
		'kiezbrand-theme-components',
		get_template_directory_uri() . '/assets/css/components.css',
		array( 'kiezbrand-theme-style' ),
		$theme_version
	);

	/*
	 * Main front-end script.
	 * Loaded in footer for better page performance.
	 */
	wp_enqueue_script(
		'kiezbrand-theme-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		$theme_version,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'kiezbrand_theme_scripts' );

/**
 * Set a custom excerpt length for archive and blog contexts.
 *
 * @return int
 */
function kiezbrand_theme_excerpt_length() {
	return 24;
}
add_filter( 'excerpt_length', 'kiezbrand_theme_excerpt_length', 999 );

/**
 * Register a default widget area for side content and marketing blocks.
 */
function kiezbrand_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'kiezbrand-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'kiezbrand-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'kiezbrand_theme_widgets_init' );
