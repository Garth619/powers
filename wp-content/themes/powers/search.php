<?php
/**
 * Template for displaying Search Results pages
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
			
					
					
					
					<?php if ( have_posts() ) : ?>
				<h1 class="standard_page_header"><?php printf( __( 'Search Results for: %s', 'twentyten' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			
				</div><!-- header_wrapper -->
			
			
			
				<div class="content">
				
				
			<?php
				/*
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called loop-search.php and that will be used instead.
				 */
				get_template_part( 'loop', 'search' );
				?>

				<?php else : ?>
				
				
		
					<h1 class="standard_page_header"><?php _e( 'Nothing Found', 'twentyten' ); ?></h1>
					
					
					<?php endif; ?>

					
			
				</div><!-- content -->
			
			</div><!-- content_max_width -->
			
			
		</div><!-- content_inner_wrapper -->
		
		<?php include('sidebar.php');?>
		
		
	</div><!-- content_wrapper -->
	
	<div class="sidebar_bg">
		
		
		
	</div><!-- sidebar_bg -->

	
	
</div><!-- inner_main -->


	

<?php get_footer(); ?>

