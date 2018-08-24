<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Whatmoves
 */

?>

	</div><!-- #content -->

	<?php if ( is_active_sidebar( 'footer-widgets' ) ) { ?>
	
	<aside id="footer-widgets" class="widget-area">
		<div class="small-container">
			<?php dynamic_sidebar( 'footer-widgets' ); ?>
		</div>
	</aside><!-- #secondary -->
	
	<?php } ?>

	<footer id="colophon" class="site-footer">
		<div class="site-info small-container">
			&copy; <?php the_date('Y'); ?> Whatmoves Design, LLC
			<span class="sep"> | </span>
				<?php bloginfo( 'description' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php if(is_front_page()){ ?>
	<script type="text/javascript">
		// Custom home scripts
		// swap class on timer
		var counter = 1;
		var int = setInterval(function(){
			var title = document.getElementById('title');
			title.className = "style" + counter;
			if (counter === 5){
				counter = 1; // If counter = 3, set it back to 1 for next loop
			} else {
				counter++; // Else, add 1 to the counter
			}
		}, 4000);

		// select class
		// function val() {
		// 	d = document.getElementById("select-theme").value;
		// 	document.getElementsByTagName('body')[0].setAttribute('data-theme', d);
		// }
	</script>
<?php } else { ?>
	<script type="text/javascript">
		// Custom page scripts
		// swap class on timer
		var int = setTimeout(function(){
			var title = document.getElementById('title');
			var titleClass = title.className;
			var num = titleClass[5];
			if(num == 5) {
				plusOne = 0;
			} else {
				plusOne = ++num;
			}
			title.className = "style" + plusOne;
		}, 300);
	</script>
<?php } ?>

<?php wp_footer(); ?>

</body>
</html>
