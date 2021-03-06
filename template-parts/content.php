<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Whatmoves
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="small-container">
		<?php
		$min=0;
		$max=5;
		$title_class = 'style' . rand($min,$max);
		if ( is_singular() ) :
			the_title( '<h1 id="title" class="'.$title_class.'">', '</h1>' ); 
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				whatmoves_posted_on();
				// whatmoves_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
		</div>
	</header><!-- .entry-header -->

	<?php whatmoves_post_thumbnail(); ?>

	<div class="entry-content">
		<div class="small-container">
		<?php if ( is_singular() ) :
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'whatmoves' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'whatmoves' ),
			'after'  => '</div>',
		) );
		else :
			the_excerpt();
		endif;
		?>
		<hr />
		</div>
	</div><!-- .entry-content -->

	<!-- <footer class="entry-footer">
		<div class="small-container">
		<?php // whatmoves_entry_footer(); ?>
		</div>
	</footer> --><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
