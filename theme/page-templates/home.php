<?php
/**
 * Template Name: Home Template
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
	
	.entry-content h1, .comment-content h1 {
		font-size: 23px;
		line-height: 32px;
		margin-bottom:10px;
	}
	#video_background{
		min-width:105%;
		margin-right: -3%;
	}
	#infobox{
		margin-top:40px;
	}
</style>
<video id="video_background" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
	<source src="http://wearerocketscience.com/wordpress/wp-content/themes/twentytwelve/videos/home.mp4" type="video/mp4">
	<source src="http://wearerocketscience.com/wordpress/wp-content/themes/twentytwelve/videos/home.webm" type="videos/webm">
	<source src="http://wearerocketscience.com/wordpress/wp-content/themes/twentytwelve/videos/home.ogv" type="video/ogg">
	<img src="http://wearerocketscience.com/wordpress/wp-content/themes/twentytwelve/videos/homestill.png" title="Your browser does not support the <video> tag">
	</object>
</video>

<div id="main" class="wrapper" style="border:none !important;">

		<div id="infobox">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #infobox -->
		<div id="instafeed">
			<p style="padding:15px;">#wearerocketscience</p>
		</div>
		