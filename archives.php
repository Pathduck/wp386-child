<?php
/*
Template Name: Archives
*/
?>
<?php get_header();?>
<div id="container">
	<div id="content" role="main">
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
		<div><?php get_search_form();?></div>
		<table>
			<tr>
				<th>By Month</th>
				<th>By Subject</th>
			</tr>
			<tr>
				<td style="vertical-align:top">
					<ul><?php wp_get_archives( array('type' => 'monthly','format' => 'custom','after' => ' &ndash; ')); ?></ul>
					<!--<?php //wp_get_archives('type=monthly'); ?>-->
				</td>
				<td style="vertical-align:top">
					<ul><?php wp_list_categories(); ?></ul>
				</td>
			</tr>
		</table>
	</div><!-- #content -->
</div><!-- #container -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
