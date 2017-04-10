<?php
/**
 * Main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		

<?php include('banner.php');?>

<div class="inner_main">
	
	<div class="content_wrapper">
		
		
		<div class="content_inner_wrapper">
			
			<div class="content_max_width">
			
				<div class="header_wrapper">
				
					<span class="inner_page_green_line"></span><!-- inner_page_green_line -->
			
					<h1 class="standard_page_header">Headers are inconsistent on spacing... Birmingham Personal Injury Blog</h1>
			
				</div><!-- header_wrapper -->
			
			
			
				<div class="content">
				
				
					<?php get_template_part( 'loop', 'index' ); ?>
					
			
				</div><!-- content -->
			
			</div><!-- content_max_width -->
			
			
		</div><!-- content_inner_wrapper -->
		
		<?php include('sidebar-blog.php');?>
		
		
			
<!-- 			<div style="clear:both;"></div> -->
		
	</div><!-- content_wrapper -->
	
	<div class="sidebar_bg">
		
		
		
	</div><!-- sidebar_bg -->

	
	
</div><!-- inner_main -->


	

<?php get_footer(); ?>

