<?php
/**
 * Template Name: Services Template
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
<style type="text/css">
	.site-header{
		border-bottom:1px solid #ddd;
	}
	#main{
		border:none !important;
		margin-bottom:55px !important;
	}
	body{
		background:url("http://wearerocketscience.com/wordpress/wp-content/uploads/2014/06/a1.jpg") no-repeat center;
		max-width:100%;
		background-size:cover;
		
	}
	#servicesbox{
		margin-top:40px;
	}
	@media only screen 
and (min-device-width : 320px) 
and (max-device-width : 480px) {
		#main{
			margin-bottom:0px !important;
			
		}
}
</style>
<div id="main" class="wrapper">

		<div id="servicesbox">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div> <!--infobox---->

<?php get_footer(); ?>