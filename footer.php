<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package wp386
 */
?>
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info container">
				<?php do_action( 'wp386_credits' ); ?>
				<a href="https://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'wp386' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'wp386' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'wp386' ), 'wp386', '<a href="https://github.com/keichan34" rel="designer">Keitaroh Kobayashi</a>' ); ?>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->

		</div><!-- .span9 -->
	</div><!-- .row -->
</div><!-- #main -->
<?php wp_footer(); ?>
<!-- Bootstrap WP386 Transitions -->
<!--
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap-386.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap-transition.js"></script>
<script>
_386 = {
  fastLoad: false,
  onePass: false,
  speedFactor: 1.5
};
</script>
-->
</body>
</html>
