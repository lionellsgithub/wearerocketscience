<?php
/**
 * Template Name: Contact Template
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

<video id="video_background" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
	<source src="http://wearerocketscience.com/wordpress/wp-content/themes/twentytwelve/videos/contact.mp4" type="video/mp4">
	<source src="http://wearerocketscience.com/wordpress/wp-content/themes/twentytwelve/videos/contact.webm" type="videos/webm">
	<source src="http://wearerocketscience.com/wordpress/wp-content/themes/twentytwelve/videos/contact.ogv" type="video/ogg">
 	<img src="http://wearerocketscience.com/wordpress/wp-content/themes/twentytwelve/videos/contacttill.png" title="Your browser does not support the <video> tag">
</video>

<div id="main" class="wrapper" style="border:none !important;">

		<div id="contactbox">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
			<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">
<form action="http://wearerocketscience.us4.list-manage1.com/subscribe/post?u=d523f35d27acf25ce883b8ae1&amp;id=c6ccd23ff9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	<p><br/>SIGN UP TO RECEIVE OUR QUARTERLY NEWSLETTER:</p>
<div class="mc-field-group">
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
 <div style="position: absolute; left: -5000px;"><input type="text" name="b_d523f35d27acf25ce883b8ae1_c6ccd23ff9" value=""></div>
	<div class="clear"><input style="visibility: hidden; position:absolute; left:-9000px;" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
</form>
</div>

<!--End mc_embed_signup-->
		</div><!-- #infobox -->
<div id="contactbox">
<p class="jobs"><?php the_field('employment_oppertunities'); ?></p>
</div>
<?php get_footer(); ?>