<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Stroud_Community_Agriculture
 */

get_header(); 
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main post-single" role="main">
		<div class="two-thirds">
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			// the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		</div>
		<div class="one-third">
			<?php
			get_sidebar('posts');
			?>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer(); ?>
