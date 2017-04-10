<?php
/**
 * Template for displaying 404 pages (Not Found)
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
			
					<h1 class="standard_page_header">Not Found</h1>
			
				</div><!-- header_wrapper -->
			
			
			
				<div class="content">
				
				
						<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'twentyten' ); ?></p>
					<?php get_search_form(); ?>
					<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

					
			
				</div><!-- content -->
			
			</div><!-- content_max_width -->
			
			
		</div><!-- content_inner_wrapper -->
		
		<?php include('sidebar.php');?>
		
		
	</div><!-- content_wrapper -->
	
	<div class="sidebar_bg">
		
		
		
	</div><!-- sidebar_bg -->

	
	
</div><!-- inner_main -->


	

<?php get_footer(); ?>

