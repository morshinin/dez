<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dez
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'deztheme' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="row">
				<div class="site-branding col-lg-5">
					<div class="site-logo col-lg-3">
						<?php 

							if (function_exists( 'the_custom_logo' )) {
								the_custom_logo();
							}

						 ?>
					</div><!-- .site-logo -->
					<div class="site-title col-lg-9">
						<?php
						if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
						endif;
						/*
						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo $description;   ?></p>
						<?php
						endif; */ ?>
					</div><!-- .site-title -->
				</div><!-- .site-branding -->
				<div class="site-contact col-lg-3 col-lg-offset-4">
					<a href="#" class="btn btn-link" role="button">
						<?php _e( 'Перезвоните мне', 'deztheme' ); ?>
					</a>
					<p class="site-contact_phone text-center">
						<a href="#" class="heading2">
							<?php _e( '+7 (986) 567 65 33', 'deztheme' ); ?>
						</a>
					</p>
					<p class="site-contact_phone text-center">
						<a href="#" class="heading2">
							<?php _e( '+7 (986) 567 65 34', 'deztheme' ); ?>
						</a>
					</p>
					<a href="#" class="btn btn-danger site-contact_callback-btn" role="button">
						<?php _e( 'Обратный звонок', 'deztheme' ); ?>
					</a>
				</div><!-- .site-contact -->
			</div><!-- .row -->
		</div><!-- .container -->
	</header><!-- #masthead -->
	<nav class="navbar navbar-default" role="navigation"> 
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display --> 
			  <div class="navbar-header"> 
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> 
			      <span class="sr-only">Toggle navigation</span> 
			      <span class="icon-bar"></span> 
			      <span class="icon-bar"></span> 
			      <span class="icon-bar"></span> 
			    </button> 
			    <!-- <a class="navbar-brand" href="#">Brand</a>  -->
			  </div> 
			  <!-- Collect the nav links, forms, and other content for toggling --> 
			  <!-- <div class="collapse navbar-collapse navbar-ex1-collapse">  -->
			    <?php wp_nav_menu( array( 
					'theme_location'	=>	'primary',
					'menu_id' => 'primary-menu',
					'container'	=>	'div',
					'container_class'	=>	'collapse navbar-collapse navbar-ex1-collapse',
					'container_id'		=>	'bs-example-navbar-collapse-1',
					'menu_class'	=>	'nav navbar-nav',
					'fallback_cb'	=>	'wp_bootstrap_navwalker::fallback',
					'walker'		=>	new wp_bootstrap_navwalker()
					) ); ?>
			  <!-- </div> -->
	  </div><!-- .container -->
	</nav>

	<div id="content" class="site-content">
