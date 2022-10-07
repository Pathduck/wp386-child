<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package wp386
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="brand"><?php bloginfo( 'name' ); ?></a>
					<div id="site-description"><?php $fortune_file='bofh-excuses'; $fortune_args='-s -n 90'; include '/meta/s/stian/html/inc/fortune.php'; ?></div>
					<?php $walker = new Bootstrap_Nav_Menu_Walker(); ?>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav', 'walker' => $walker, 'fallback_cb' => '' ) ); ?>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
	<div id="main" class="site-main container">
		<?php if (is_active_sidebar( 'sidebar-1' )): ?>
		<div class="row">
			<div class="span3">
				<div class="sidebar-affix">
					<div class="sidebar-outer">
						<div class="sidebar-container">
							<?php dynamic_sidebar( 'sidebar-1' ); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="span9">
			<?php else: ?>
			<div class="span12">
			<?php endif; ?>
