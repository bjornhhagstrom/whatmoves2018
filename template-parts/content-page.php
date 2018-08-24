<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Whatmoves
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="small-container">
		<?php $title_class = '';
		if(!is_front_page()){
			$min=0;
			$max=5;
			$title_class = 'style' . rand($min,$max);
		}
		the_title( '<h1 id="title" class="'.$title_class.'">', '</h1>' ); ?>
		</div>
	</header><!-- .entry-header -->

	<?php whatmoves_post_thumbnail(); ?>

	<div class="entry-content">
		<div class="small-container">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'whatmoves' ),
			'after'  => '</div>',
		) );
		?>
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
