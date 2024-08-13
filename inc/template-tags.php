<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package wp386
 */

if ( ! function_exists( 'wp386_content_nav' ) ) :
/**
 * Display navigation to next/previous pages when applicable
 */
function wp386_content_nav( $nav_id ) {
	global $wp_query, $post;

	// Don't print empty markup on single pages if there's nowhere to navigate.
	if ( is_single() ) {
		$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
		$next = get_adjacent_post( false, '', false );

		if ( ! $next && ! $previous )
			return;
	}

	// Don't print empty markup in archives if there's only one page.
	if ( $wp_query->max_num_pages < 2 && ( is_home() || is_archive() || is_search() ) )
		return;

	// Add 'rel' attributes to next/previous nav links
	add_filter('next_posts_link_attributes', function(){return 'rel="next"';});
	add_filter('previous_posts_link_attributes', function(){return 'rel="prev"';});

	// Swap 'rel' attributes for single post next/previous nav links
	add_filter('previous_post_link', function($format){return str_replace('rel="prev"','rel="next"',$format);});
	add_filter('next_post_link', function($format){return str_replace('rel="next"','rel="prev"',$format);});

	$nav_class = ( is_single() ) ? 'post-navigation' : 'paging-navigation';

	?>
	<nav role="navigation" id="<?php echo esc_attr( $nav_id ); ?>" class="<?php echo $nav_class; ?>">
		<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'wp386' ); ?></h1>

	<?php if ( is_single() ) : // navigation links for single posts ?>

		<?php next_post_link( '<div class="nav-previous">%link</div>', '<span class="meta-nav">' . _x( '«', 'Next post link', 'wp386' ) . '</span> %title' ); ?>
		<?php previous_post_link( '<div class="nav-next">%link</div>', '%title <span class="meta-nav">' . _x( '»', 'Previous post link', 'wp386' ) . '</span>' ); ?>

	<?php elseif ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) : // navigation links for home, archive, and search pages ?>

		<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-previous"><?php previous_posts_link( __( '<span class="meta-nav">«</span> Newer posts', 'wp386' ) ); ?></div>
		<?php endif; ?>

		<?php if ( get_next_posts_link() ) : ?>
			<div class="nav-next"><?php next_posts_link( __( ' Older posts <span class="meta-nav">»</span>', 'wp386' ) ); ?></div>
		<?php endif; ?>


	<?php endif; ?>

	</nav><!-- #<?php echo esc_html( $nav_id ); ?> -->
	<?php
}
endif; // wp386_content_nav
