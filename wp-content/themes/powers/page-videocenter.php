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
		
		
		<div class="single_video_wrapper">
			
			<div class="video_background">
				
				<div class="wistia_video">
					
					<script src="https://fast.wistia.com/embed/medias/v2q97a6dh4.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><span class="wistia_embed wistia_async_v2q97a6dh4 popover=true popoverAnimateThumbnail=true videoFoam=true" style="display:inline-block;height:100%;width:100%">&nbsp;</span></div></div>
					
					<div class="video_center_play_button">
						
						<div class="video_center_play_button_inner">
						
						<img class="video_page_play" src="<?php bloginfo('template_directory');?>/images/playbutton.png"/>
						<img class="video_page_play_hover" src="<?php bloginfo('template_directory');?>/images/playbutton-h.png"/>
						
						</div><!-- video_center_play_button_inner -->
						
					</div><!-- video_center_play_button -->
					
				</div><!-- wistia_video -->
				
			</div><!-- video_background -->
			
		</div><!-- single_video_wrapper -->
		
		
	</div><!-- video_center_wrapper -->
		
	
</section><!-- inner_main -->



		




<?php get_footer(); ?>
