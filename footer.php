<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SimPro
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'SimPro' ) ); ?>">
			</a>
				<p class="copy"><small><?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( '&copy; 2020SimPro.', 'sample-theme' ), 'SimPro', '<a href="http://underscores.me/">Hiroaki Ito</a>' );
				?></small>
				</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
