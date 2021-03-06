<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Anh_Popperscores
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'anh-popperscores' ); ?></a>

	<!-- If we have a header image -->
		<?php if( get_header_image() ) { ?>
			<!-- Then display the header with background image -->
			<header id="masthead" class="site-header" style="background-image: url(<?php header_image(); ?>)" role="banner">
		
		<?php  } else { ?>
			<!-- else display the regular banner with default style -->
			<header id="masthead" class="site-header" role="banner">
		
		<?php } ?>

		<!-- Displaying site icon or first letter as logo -->
		<div class="site-logo">
			<?php $site_title = get_bloginfo( 'name' ); ?>
			<a href="<?php echo esc_url( home_url( '/') ); ?>" rel="home">
				<!-- only works with text-to-speech browser, else it is hidden -->
				<div class="screen-reader-text">
					<?php printf( esc_html__('Go to the home page of %1$s',
					anh-popperscores), $site_title); ?>
				</div>

				<!-- set up conditional for site icon -->
				<?php if (has_site_icon() ) {
					$site_icon = esc_url( get_site_icon_url(270) ); ?>
					<img class="site-icon" src="<?php echo $site_icon; ?>" alt="">
				<?php } else { ?>
					<!-- displays the first letter of the site title  -->
					<!-- aria-hidden is true to disables text to speech reader -->
					<div class="site-firstletter" aria-hidden="true">
						<?php echo substr($site_title, 0, 1); ?>
					</div>
				<?php } ?>
			</a>
		</div>	

		<!-- put conditional to hide header for single post page -->
		<div class="site-branding<?php if (is_singular() ) {echo ' screen-reader-text'; } ?>">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'anh-popperscores' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
