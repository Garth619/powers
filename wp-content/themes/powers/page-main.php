<?php
/**
 * Template Name: Main
 *

 */

get_header(); ?>

		
<section class="main_banner">
	
	
	<div class="inner_content">
		
		<div class="video_wrapper">
			
			
			<?php the_field( 'wistia_video' ); ?>			
			
		
		</div><!-- video_wrapper -->
		
		
		<div class="main_header_wrapper">
			
			<span class="sub_header"><?php the_field( 'main_banner_sub_header' ); ?></span><!-- sub_header -->
			<span class="large_header"><?php the_field( 'main_banner_large_header' ); ?></span><!-- large_header -->
		
			<div class="white_line"></div><!-- white_line -->
			
		</div><!-- main_header_wrapper -->
		
		<span class="tagline">
			
			<?php the_field( 'main_banner_bullets' ); ?>
		
		</span><!-- tagline -->
		
		<a class="request" href="#free_consultation"><?php the_field( 'request_button' ); ?></a>
		
		<div class="mouse"></div>

		
	</div><!-- inner_content -->
	
<video src="<?php bloginfo('template_directory');?>/images/videobg2.mp4" loop autoplay></video>
	
	<div class="video_overlay"></div><!-- video_overlay -->
	
</section><!-- main_banner -->


<section class="six_reasons_wrapper">
	
	<div class="reasons_title_wrapper">
		
		<?php $six_reasons_image = get_field( 'six_reasons_image' ); ?>
		
		<img class="six_image" src="<?php echo $six_reasons_image['url']; ?>" alt="<?php echo $six_reasons_image['alt']; ?>" title="<?php echo $six_reasons_image['title']; ?>" />
		
		<span id="about_greenline_trigger" class="reasons_title"><?php the_field( 'reasons_title' ); ?></span>
		
	</div><!-- reasons_title_wrapper -->
	
	<div class="reasons_grid_wrapper">
		
		<div class="reasons_grid_inner_wrapper">
			
			<div class="reasons_slider">
				
				
				<?php if(get_field('reasons_repeater')): ?>
				 
					<?php while(has_sub_field('reasons_repeater')): ?>
				 
						
					<div class="single_reason">
					
						<div class="single_reason_reg">
						
						<span class="number"><?php the_sub_field( 'reason_number' ); ?></span>
						
						<span class="green_line"></span><!-- green_line -->
						
						<span class="reason_content"><?php the_sub_field( 'reason_title' ); ?></span><!-- reason_content -->
						
						<img class="reason_arrow" src="<?php bloginfo('template_directory');?>/images/sp-arrow.png"/>
						
					</div><!-- single_reason_reg -->
					
					<div class="single_reason_hover">
						
						<div class="single_reason_hover_inner">
						
						<span class="hover_title hover_title_1"><?php the_sub_field( 'reason_title' ); ?></span><!-- hover_title -->
						
						<span class="green_line"></span><!-- green_line -->
						
						<span class="hover_content"><?php the_sub_field( 'reason_content' ); ?></span><!-- hover_content -->
						
						</div><!-- single_reason_hover_inner -->
						
					</div><!-- single_reason_hover -->
					
				</div><!-- single_reason -->
						
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				

			</div><!-- reasons_slider -->
			
		</div><!-- reasons_grid_inner_wrapper -->
		
	</div><!-- reasons_grid_wrapper -->
	
</section><!-- six_reasons_wrapper -->


<section class="about">
	
	<div class="inner_about">
	
	
		<?php the_field( 'about_title' ); ?>
		
		<p class="about_intro"><?php the_field( 'about_intro' ); ?></p><!-- about_intro -->
		
		<div id="image_trigger" class="image_wrapper">
			
			<div class="image_inner"></div><!-- image_inner -->
			
			<img class="about_image desktop" src="<?php the_field( 'about_image_desktop' ); ?>"/>
			<img class="about_image tablet" src="<?php the_field( 'about_image_tablet_1' ); ?>"/>
			<img class="about_image tablet2" src="<?php the_field( 'about_image_tablet_2' ); ?>"/>
			<img class="about_image mobile" src="<?php the_field( 'about_image_mobile' ); ?>"/>
			
			<a class="meet_attorney" href="<?php the_field( 'meet_attorney_link' ); ?>"><?php the_field( 'meet_attorney' ); ?></a>
			
		</div><!-- image_wrapper -->
		
		<div class="about_content">
			
			<?php the_field( 'about_main_content' ); ?>
			
		</div><!-- about_content -->
	
	
	</div><!-- inner_about -->
	
	<div style="clear:both;"></div>
	
</section><!-- about -->

<section class="featured_cases">
	
	<span class="large_header"><?php the_field( 'featured_cases_title' ); ?></span><!-- large_header -->
	
	<span class="sub_header"><?php the_field( 'featured_cases_content' ); ?></span><!-- sub_header -->
	<a class="view_all_results" href="<?php the_field( 'veiw_all_results_link' ); ?>"><?php the_field( 'veiw_all_results' ); ?></a><!-- view_all_results -->
	
	<div class="main_cases_wrapper">
		
		
		
		
		<?php if(get_field('featured_cases')): ?>
		 
			<?php while(has_sub_field('featured_cases')): ?>
		 
				
			<div class="single_case">
			
			<a href="<?php the_sub_field( 'single_case_link' ); ?>">
			
			<div class="single_case_content_wrapper">
			
				<span class="number_title"><?php the_sub_field( 'single_case_number' ); ?></span><!-- number_title -->
			
				<div class="cases_greenline_wrapper">
				
					<span class="cases_greenline"></span><!-- cases_greenline -->
			
				</div><!-- cases_greenline_wrapper -->
				
				<span class="case_title"><?php the_sub_field( 'single_case_title' ); ?></span><!-- case_title -->
				
			</div><!-- single_case_content_wrapper -->
			
			<div class="case_background_image case_bg_<?php the_sub_field( 'single_case_css_number' ); ?>"></div><!-- case_background_image -->
			
			<span class="view_case_details">View Case Details</span><!-- view_case_details -->
			
			</a>
			
		</div><!-- single_case -->
				
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
		
		
		
		<div class="case_results_buttons">
			
			<div class="case_results_left case_button">
				
				<img src="<?php bloginfo('template_directory');?>/images/arrow-l.png"/>
				
			</div><!-- case_results_left -->
			
			<div class="case_results_right case_button">
				
				<img src="<?php bloginfo('template_directory');?>/images/arrow-r.png"/>
				
			</div><!-- case_results_right -->
			
		</div><!-- case_results_buttons -->
		
		</div><!-- main_cases_wrapper -->
	
</section><!-- featured_cases -->

<section id="second_about_trigger" class="second_about">
		<span class="second_about_greenline"></span><!-- second_about_greenline -->
	
	<div class="seocnd_about_title_wrapper">
		
		<?php the_field( 'second_about_title' ); ?>
		
	</div><!-- seocnd_about_title_wrapper -->
	
<!--
	<div class="second_about_intro">
		
		<p>Lead attorney Jessica Powers began her career clerking for a judge and then in public interest law representing people who were undergoing evictions and foreclosures. Powers then engaged in pro-bono work that earned her public recognition, while serving on a number of community boards and doing volunteer work. When she left public interest law to represent plaintiffs in personal injury cases, Powers made a promise: to genuinely LISTEN to clients, hear their stories and through a genuine relationship, secure justice for each one.</p>
		
	</div>
--><!-- second_about_intro -->
	
	<div class="second_about_content">
		
		
			
			<div class="second_about_col1">
				
				<?php the_field( 'second_about_content' ); ?>
				
			</div><!-- second_about_col1 -->
			
			<div class="second_about_col2">
				
				<div class="col2_quote_wrapper">
					
					<div class="logo_slider_wrapper">
						
						<div class="logo_buttons logo_button_left">
							
							<img src="<?php bloginfo('template_directory');?>/images/arrow-l.png"/>
							
						</div><!-- logo_buttons -->
						
						<div class="logo_slider">
							
							
							<?php if(get_field('second_about_slider')): ?>
							 
								<?php while(has_sub_field('second_about_slider')): ?>
							 
									<div class="single_logo">
								
										<img src="<?php the_sub_field( 'image' ); ?>"/>
								
									</div><!-- single_logo -->
							    
								<?php endwhile; ?>
							 
							<?php endif; ?>
							
							
						</div><!-- logo_slider -->
						
						<div class="logo_buttons logo_button_right">
							
							<img src="<?php bloginfo('template_directory');?>/images/arrow-r.png"/>
							
						</div><!-- logo_buttons -->
						
					</div><!-- logo_slider_wrapper -->
					
					
					<div class="quote_content_wrapper">
					
						
						<div class="quote_mobile_content">
						
							<span class="col2_quote"><?php the_field( 'second_about_quote' ); ?></span>
							<span class="col2_name"><?php the_field( 'quote_title' ); ?></span>
						
						</div><!-- quote_mobile_content -->
					
					</div><!-- quote_content_wrapper -->
					
					
					
				</div><!-- quote_wrapper -->
				
			</div><!-- second_about_col2 -->
			
		</div><!-- second_about_content -->
	
	
</section><!-- second_about -->

<section id="testi_trigger" class="testimonials">
	
	<span class="testi_greenline"></span><!-- testi_greenline -->
	
	<div class="testi_wrapper">
		
		<div class="testi_title">
			
			<?php the_field( 'client_testimonials_title' ); ?>
			
		</div><!-- test_title -->
		
		<div class="testi_slider">
			
			
			<?php if(get_field('testimonials',10)): ?>
			 
				<?php while(has_sub_field('testimonials',10)): ?>
			 
				
				<div class="single_testi">
				
				<p><?php the_sub_field( 'testimonials_content' ); ?></p>
				
				<div class="testi_name_wrapper">
					
					<span class="testi_name"><?php the_sub_field( 'testimonial_name'); ?></span><!-- testi_name -->
					<span class="divider"></span><!-- divider -->
					<span class="testi_client"><?php the_sub_field( 'testimonials_client_type' ); ?></span><!-- testi_name -->
					
				</div><!-- testi_name_wrapper -->
				
			</div><!-- single_testi -->
			
			
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
			
			<?php if(get_field('testimonials_2',10)): ?>
			 
				<?php while(has_sub_field('testimonials_2',10)): ?>
			 
				
				<div class="single_testi">
				
				<p><?php the_sub_field( 'testimonials_content' ); ?></p>
				
				<div class="testi_name_wrapper">
					
					<span class="testi_name"><?php the_sub_field( 'testimonial_name'); ?></span><!-- testi_name -->
					<span class="divider"></span><!-- divider -->
					<span class="testi_client"><?php the_sub_field( 'testimonials_client_type' ); ?></span><!-- testi_name -->
					
				</div><!-- testi_name_wrapper -->
				
			</div><!-- single_testi -->
			
			
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
			
		</div><!-- testi_slider -->
		
		<a class="view_all_testimonials" href="<?php the_field( 'view_testimonials_link' ); ?>"><?php the_field( 'view_testimonials' ); ?></a><!-- view_all_testimonials -->
		
		<div class="testi_buttons">
			
			<div class="testi_button testi_back">
				
				<img src="<?php bloginfo('template_directory');?>/images/arrow-prev.png"/> 
				prev
			
			</div><!-- testi_back -->
			
			
			<div id="request_trigger" class="testi_button testi_next">
				
				next
				
				<img src="<?php bloginfo('template_directory');?>/images/arrow-next.png"/> 
			
			</div><!-- testi_next -->
			
		</div><!-- testi_buttons -->
		
	</div><!-- testi_wrapper -->
	
</section><!-- testimonials -->


<?php get_footer(); ?>
