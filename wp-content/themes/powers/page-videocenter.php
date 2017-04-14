<?php
/**
 * Template Name: Video Center
 *

 */

get_header(); ?>

<?php include('banner.php');?>

<section class="inner_main">
	
	<h1 class="centered">Video Center</h1>
	<div class="green_header_wrapper">
		
		<div class="green_header"></div><!-- green_header -->
		
	</div><!-- green_header_wrapper -->
	
	
	<div class="video_center_wrapper">
		
		
		
		
		
	<?php if(get_field('video')): ?>
		 
		<?php while(has_sub_field('video')): ?>
		 
		<div class="single_video_wrapper">
			
			<div class="video_background">
				
				<div class="wistia_video">
					
					<?php the_sub_field( 'wistis_code' ); ?>
					
					<div class="video_center_play_button">
						
						<div class="video_center_play_button_inner">
						
						<img class="video_page_play" src="<?php bloginfo('template_directory');?>/images/playbutton.png"/>
						<img class="video_page_play_hover" src="<?php bloginfo('template_directory');?>/images/playbutton-h.png"/>
						
						</div><!-- video_center_play_button_inner -->
						
					</div><!-- video_center_play_button -->
					
				</div><!-- wistia_video -->
				
			</div><!-- video_background -->
			
			<div class="video_center_title_wrapper">
				
				<span class="video_center_greenline"></span><!-- video_center_greenline -->
				<span class="video_center_title"><?php the_sub_field( 'video_title' ); ?></span><!-- video_center_title -->
				
			</div><!-- video_center_title_wrapper -->
			
		</div><!-- single_video_wrapper -->
		
		<?php endwhile; ?>
		 
	<?php endif; ?>
		

		
		
	</div><!-- video_center_wrapper -->
		
	
</section><!-- inner_main -->



		




<?php get_footer(); ?>
