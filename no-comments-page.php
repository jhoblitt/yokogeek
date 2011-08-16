<?php
/**
 * Template Name: Default, no comments
 * Description: The same as the default template but with no comments
 *
 * @package WordPress
 * @subpackage YokoGeek
 */

get_header(); ?>

<div id="wrap">
<div id="main">

	<div id="content">

				<?php the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php #comments_template( '', true ); ?>

	</div><!-- end content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
