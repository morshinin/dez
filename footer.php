<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dez
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
							<?php dynamic_sidebar( 'footer-1' ); ?>
					<?php endif; ?>
					<?php 
						wp_nav_menu( array( 
							'menu'	=>	'secondary'
						 ) );
					 ?>
				</div>
				<div class="col-lg-4">
					<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
							<?php dynamic_sidebar( 'footer-2' ); ?>
					<?php endif; ?>
				</div>
				<div class="col-lg-4">
					<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
							<?php dynamic_sidebar( 'footer-3' ); ?>
					<?php endif; ?>
				</div>
			</div><!-- .row -->
			<div class="row">
				<div class="col-lg-4">
					<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
							<?php dynamic_sidebar( 'footer-4' ); ?>
					<?php endif; ?>
				</div>
				<div class="col-lg-4">
					<?php if ( is_active_sidebar( 'footer-5' ) ) : ?>
							<?php dynamic_sidebar( 'footer-5' ); ?>
					<?php endif; ?>
				</div>
				<div class="col-lg-4">
					<?php if ( is_active_sidebar( 'footer-6' ) ) : ?>
							<?php dynamic_sidebar( 'footer-6' ); ?>
					<?php endif; ?>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</footer><!-- #colophon -->
	<div class="copyright_wrap">
		<div class="container">
			<div class="site-info text-xs-center">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'deztheme' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'deztheme' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'deztheme' ), 'deztheme', '<a href="http://morshinin.ru" rel="designer">Mikhail Morshinin</a>' ); ?>
			</div><!-- .site-info -->
		</div><!-- .container -->
	</div><!-- .copyright_wrap -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
