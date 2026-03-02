<?php
/**
 * Reusable demo tour card component.
 *
 * @package Kiezbrand_Theme
 */

$title       = isset( $args['title'] ) ? $args['title'] : __( 'Midnight Kiez Tour', 'kiezbrand-theme' );
$description = isset( $args['description'] ) ? $args['description'] : __( 'Placeholder: Discover hidden courtyards, neon bars, and local legends in 120 minutes.', 'kiezbrand-theme' );
$duration    = isset( $args['duration'] ) ? $args['duration'] : __( '2 hours', 'kiezbrand-theme' );
$price       = isset( $args['price'] ) ? $args['price'] : __( '€39', 'kiezbrand-theme' );
$link_text   = isset( $args['link_text'] ) ? $args['link_text'] : __( 'View tour', 'kiezbrand-theme' );
$link_url    = isset( $args['link_url'] ) ? $args['link_url'] : '#';
$image       = isset( $args['image'] ) ? $args['image'] : 'https://picsum.photos/seed/tour/600/400';
?>

<article class="sales-card">
	<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $title ); ?>" loading="lazy">
	<div class="sales-card__content">
		<p class="eyebrow"><?php echo esc_html( $duration ); ?> · <?php echo esc_html( $price ); ?></p>
		<h3><?php echo esc_html( $title ); ?></h3>
		<p><?php echo esc_html( $description ); ?></p>
		<a class="kiez-button kiez-button--primary" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_text ); ?></a>
	</div>
</article>
