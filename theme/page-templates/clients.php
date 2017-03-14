<?php
/**
 * Template Name: Clients Template
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<script src="http://wearerocketscience.com/wordpress/wp-content/themes/twentytwelve/js/jquery-ui.min.js"></script>
<script src="http://wearerocketscience.com/wordpress/wp-content/themes/twentytwelve/js/jquery-ui.js"></script>

<style type="text/css">
	.site-header{
		border-bottom:1px solid #ddd;
	}
	#main{
		border:none !important;
		margin-bottom:55px !important;
		margin-top:80px !important;
	}
</style>
<div id="main" class="wrapper">

		<div id="clientsbox">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div> <!--infobox---->

<?php get_footer(); ?>