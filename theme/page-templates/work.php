<?php
/**
 * Template Name: Work Template
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
	#loading {
		width: 100%;
		height: 100%;
		left: 0px;
		position: fixed;
		display: block;
		opacity: 0.9;
		background-color: #fff;
		z-index: 99;
		text-align: center;
	}
	
	#loading-image {
		position: absolute;
		top: 30%;
		z-index: 100;
		width:120px;
		margin-left:-70px;
	}
</style>
<script type="text/javascript">
  setTimeout(function(){
    document.getElementById('loading').style.display = 'none';
},7000);
</script>
<div id="main" class="wrapper" style="border:none;">
<div id="loading">
  <img id="loading-image" src="http://wearerocketscience.com/wordpress/wp-content/uploads/2014/06/loading.gif" alt="Loading..." />
</div>
		
		<div id="worknav-mobile">
			<img src="http://wearerocketscience.com/wordpress/wp-content/themes/twentytwelve/menu-icon.png">
			<ul>
			<li><a class="retaillink">Retail</a></li>
			<li><a class="fabricationlink">Fabrication</a></li>
			<li><a class="stilllink">Still</a></li>
			<li><a class="movinglink">Moving</a></li>
			<li><a href="http://wearerocketscience.com/wordpress/clients/">Clients</a></li>
			</ul>
		</div>

		<div id="worknav">
			<p>OUR WORK</p>
			<a class="retaillink">Retail</a><br/>
			<a class="fabricationlink">Fabrication</a><br/>
			<a class="stilllink">Still</a><br/>
			<a class="movinglink">Moving</a><br/><br/>
			<a href="http://wearerocketscience.com/wordpress/clients/">Clients</a>
		</div>
		<div id="retail">
			<div id="retailsidebar">
			<h1 class="retailh1">RETAIL</h1>
			</div>
			<div class="workimages">
			<?php query_posts( array(
			'posts_per_page' => 99,
			'category_name' => Retail,));?>
		  
			 <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					  <?php the_content(); ?>
								  
			<?php endwhile;?>
			</div><!---workimages-->	
		</div>
				<div id="fabrication">
			<div id="fabricationsidebar">
			<h1 class="fabricationh1">FABRICATION</h1>
			</div>
			<div class="workimages">
			<?php query_posts( array(
			'posts_per_page' => 99,
			'category_name' => Fabrication,));?>
		  
			 <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					  <?php the_content(); ?>
								  
			<?php endwhile;?>
			</div><!---workimages-->
		</div>
		<div id="still">
			<div id="stillsidebar">
			<h1 class="stillh1">STILL</h1>
			</div>
			<div class="workimages">
			<?php query_posts( array(
			'posts_per_page' => 99,
			'category_name' => Still,));?>
		  
			 <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					  <?php the_content(); ?>
								  
			<?php endwhile;?>
			</div><!---workimages-->
		</div><!---still--->

		<div id="moving">
			<div id="movingsidebar">
			<h1 class="movingh1">MOVING</h1>
			</div>
			<div class="workimages">
			<?php query_posts( array(
			'posts_per_page' => 99,
			'category_name' => Moving,));?>
		  
			 <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					  <?php the_content(); ?>
								  
			<?php endwhile;?>
			</div><!---workimages-->
		</div><!--moving--->
		

<?php get_footer(); ?>