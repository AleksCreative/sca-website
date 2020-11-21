<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stroud_Community_Agriculture
 */

?>

	</div><!-- #content -->
    <div class="grass"></div> 
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
		 <?php get_sidebar(); ?>
		 <div class="flex-container-footer">
			<span class="copyright"><?php echo bloginfo('name'); ?>  &copy; <?php echo date('Y');  ?></span>
		    <nav id="footer-navigation" class="secondary-navigation" role="navigation">			
			<?php wp_nav_menu( array( 'theme_location' => 'menu-2', 'menu_id' => 'secondary-menu' ) ); ?>
			</nav><!-- #site-navigation -->

		</div>
			
			
		</div><!-- .site-info -->
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
