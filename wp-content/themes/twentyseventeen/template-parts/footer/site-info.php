<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>

	<?php if(has_custom_logo()) {the_custom_logo();} ?>

	<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>

	<div class="social">
				<a href="https://www.facebook.com/praxiumsg/" target="_blank">
					<img id="facebook" src="https://image.ibb.co/koF4M8/z1.png">
				</a>
				<a href="https://www.instagram.com/praxiumsg/" target="_blank">
					<img id="instagram" src="https://image.ibb.co/kXvRZT/z2.png">
				</a>
				<a href="https://medium.com/praxium" target="_blank">
					<img id="medium" src="https://image.ibb.co/enqtET/z3.png">
				</a>
	</div>
</div><!-- .site-info -->
