<?php
/**
 * Template Name: Static Template
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
	body{ 
		background-image: url(http://wearerocketscience.com/wordpress/wp-content/uploads/2014/09/NASA-copy.jpg);
		background-repeat: no-repeat;
		background-position: center top;
		background-size:cover;
	}

	img {
		width: 130px;
		margin-left: -46px;
		margin-top: -30px;
	}
	.site-header{
		display:none;
	}
	
	#splash {
		cursor: pointer;
		text-decoration: none;
		border: 0;
		text-align: center;
		padding: 100px;
		border-radius: 210px;
		width: 40px;
		height: 40px;
		display: inline-block;
		margin-top: 120%;
		background-color: rgba(255, 255, 255, 0.5) !important;
	}
	div#page {
		width: 242px;
	}
	#slink{

	}
	#slink img {
		width: 25px;
		position: absolute;
		opacity: .8;
		margin-left: 50%;
		margin-top: 2000px;
	}
	#slink img:hover{
		cursor:pointer;
	}

@media only screen 
and (min-device-width : 320px) 
and (max-device-width : 480px) {
	#splash{
		box-sizing: border-box;
		margin:auto;
		margin-top:25%;
	}
	body{
		background:none;
	}
	
}
</style>
<script src="http://wearerocketscience.com/wordpress/wp-content/themes/twentytwelve/js/jquery-ui.min.js"></script>
<script src="http://wearerocketscience.com/wordpress/wp-content/themes/twentytwelve/js/jquery-ui.js"></script>

	<div id="slink"><a href="http://wearerocketscience.com/wordpress/wp-content/themes/twentytwelve/donks/cars.gif" target="_blank"><img src="http://wearerocketscience.com/wordpress/wp-content/uploads/2014/06/slink11.gif"/></a></div>
	<div id="splash">
	<a href="<?php echo esc_url( home_url( '/home' ) ); ?>"><img src="http://wearerocketscience.com/wordpress/wp-content/uploads/2014/04/WARS_LOGO.png"/></a>


	</div><!-- #primary -->
	</div>

<?php get_footer(); ?>