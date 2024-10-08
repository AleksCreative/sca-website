<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Stroud_Community_Agriculture
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php $featuredImg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
<?php
		if ( !is_front_page() && !is_home() ) : ?>
		<div class="header-wrap" <?php echo 'style="background: url('. $featuredImg. '); background-repeat: no-repeat; background-position: center center; background-size: cover"' ?>>
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->
		</div>
 <?php else : ?>
	<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->
		
		<?php
		endif; ?>	

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sca-website' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'sca-website' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
