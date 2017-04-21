<?php
/**
 * Template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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
			
					<h1 class="standard_page_header"><?php the_title();?></h1>
			
				</div><!-- header_wrapper -->
			
			
			
				<div class="content">
					
					
					<?php if(get_field('pa_video')):?>
					
					
						<div class="pa_video_wrapper">
						
							<?php the_field( 'pa_video' ); ?>

							<div class="pa_play_button_wrapper">
							
								<div class="pa_play_button_inner_wrapper">
								
									<img class="pa_play_reg" src="<?php bloginfo('template_directory');?>/images/playbutton.png"/>
									<img class="pa_play_hover" src="<?php bloginfo('template_directory');?>/images/playbutton-h.png"/>
								
								</div>
							
							</div><!-- pa_play_button_wrapper -->
						
						</div><!-- pa_video_wrapper -->
					
						
					<?php endif;?>
					
					
					<?php get_template_part( 'loop', 'page' );?>					
			
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
