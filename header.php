<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stroud_Community_Agriculture
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sca-website' ); ?></a>

	<header id="masthead" class="site-header" role="banner" >   
		<nav id="main-nav" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '', 'sca-website' ); ?>
			<div class="container-x" onclick="myFunction(this)">
				  <div class="bar1"></div>
				  <div class="bar2"></div>
				  <div class="bar3"></div>
				</div>
			</button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu', 'container' => '' ) ); ?>
		</nav><!-- #main-nav -->        
        
        <div class="site-branding flex-container">
            <div class="custom-logo-img"><?php the_custom_logo(); ?></div>
			<div><?php
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
			endif; ?></div>
		</div><!-- .site-branding -->		
		

		
			<?php if (is_front_page()) { ?>
<div class="header-image" ><img src="<?php echo esc_url( header_image() ) ?>" alt="Stroud Community Agriculture banner"> </div> 
			<?php } else {} ?>
					 
					      

	</header><!-- #masthead -->

	<div id="content" class="site-content">
