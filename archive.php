<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Stroud_Community_Agriculture
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

			?>
			<article id="post-<?php the_ID(); ?>" class="archive-entry" <?php post_class(); ?>>
			<header class="entry-header">
				<?php
				if ( is_single() ) :
					the_title( '<h5 class="entry-title archive-title">', '</h1>' );
				else :
					the_title( '<h5 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
		
				if ( 'post' === get_post_type() ) : ?>
				<!-- <div class="entry-meta">
					<?php // sca_website_posted_on(); ?>
				</div> --><!-- .entry-meta -->
				<?php
				endif; ?>
			</header><!-- .entry-header -->
		
			<div class="entry-content archive-content">
				<?php
					the_excerpt( sprintf(
						/* translators: %s: Name of current post. */
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'sca-website' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );
		
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sca-website' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
		
			<!-- <footer class="entry-footer">
				<?php sca_website_entry_footer(); ?>
			</footer> --><!-- .entry-footer -->
		</article><!-- #post-## -->
						<?php
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
