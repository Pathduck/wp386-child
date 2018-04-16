<?php
/*
Template Name: Archives
*/

get_header(); ?>

<div id="container">
	<div id="content" role="main">
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
			
		<div><?php get_search_form(); ?></div>
		<div><br/></div>
		<table>
			<tr>
				<td valign=top>
					<h2>By Month</h2>
					<ul><?php wp_get_archives('type=monthly'); ?></ul>
					<!--<?php wp_get_archives( array('type' => 'monthly','format' => 'custom','after' => ' &sim; ')); ?>-->
				</td>
				<td valign=top>
					<h2>By Subject</h2>
					<ul><?php wp_list_categories(); ?></ul>
				</td>
			</tr>
		</table>
	</div><!-- #content -->
</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
