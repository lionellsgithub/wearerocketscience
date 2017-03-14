<?php
/**
 * Template Name: Jobs Template
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
	@media only screen 
and (min-device-width : 320px) 
and (max-device-width : 480px) {
		#main{
			margin-bottom:0px !important;	
		}
		body.custom-background{
		background:black !important;
	}
}
@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px) {
	body{
		background: url("http://wearerocketscience.com/wordpress/wp-content/themes/twentytwelve/videos/contactstill.png") no-repeat center center fixed; 
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	#video_background{
		display:none;
	}
}
</style>
<video id="video_background" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
	<source src="http://wearerocketscience.com/wordpress/wp-content/themes/twentytwelve/videos/contact.mp4" type="video/mp4">
	<source src="http://wearerocketscience.com/wordpress/wp-content/themes/twentytwelve/videos/contact.webm" type="videos/webm">
	<source src="http://wearerocketscience.com/wordpress/wp-content/themes/twentytwelve/videos/contact.ogv" type="video/ogg">
 	<img src="http://wearerocketscience.com/wordpress/wp-content/themes/twentytwelve/videos/homestill.png" title="Your browser does not support the <video> tag">
</video>
<div id="main" class="wrapper">

		<div id="servicesbox" class="jobsbox" style="width:270px !important; margin-top:110px;">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div>

<?php get_footer(); ?>