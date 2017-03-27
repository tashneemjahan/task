<?php
/**
 * The template for displaying the default footer layout.
 *
 * @package Advisto
 */
?>

<div class="footer-area-wrap invert">
	<div class="container">
		<?php do_action( 'globaly_render_widget_area', 'footer-area' ); ?>
	</div>
</div>

<div class="footer-container">
	<div <?php echo globaly_get_container_classes( array( 'site-info' ), 'footer' ); ?>>
		<?php
			globaly_footer_logo();
		?>
	</div><!-- .site-info -->
</div><!-- .container -->
