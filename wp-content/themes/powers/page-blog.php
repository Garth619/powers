<?php
/**
 * Template Name: Blog Page
 *
*/

get_header(); ?>


	

<?php include('banner.php');?>

<div class="inner_main">
	
	<div class="content_wrapper">
		
		
		<div class="content_inner_wrapper">
			
			<div class="content_max_width">
			
				<div class="header_wrapper">
				
					<span class="inner_page_green_line"></span><!-- inner_page_green_line -->
			
					<h1 class="standard_page_header">Birmingham Personal Injury Blog</h1>
			
				</div><!-- header_wrapper -->
			
			
			
				<div class="content">
				
				
					<?php get_template_part( 'loop', 'index' ); ?>
					
			
				</div><!-- content -->
			
			</div><!-- content_max_width -->
			
			
		</div><!-- content_inner_wrapper -->
		
		<?php include('sidebar.php');?>
		
		
			
			<div style="clear:both;"></div>
		
	</div><!-- content_wrapper -->
	
	<div class="sidebar_bg">
		
		
		
	</div><!-- sidebar_bg -->

	
	
</div><!-- inner_main -->


	

<?php get_footer(); ?>


