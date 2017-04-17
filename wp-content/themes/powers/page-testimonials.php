<?php
/**
 * Template Name: Testimonials
 *

 */

get_header(); ?>

<?php include('banner.php');?>

<section class="inner_main">
	
	<h1 class="centered"><?php the_title();?></h1>
	<div class="green_header_wrapper">
		
		<div class="green_header"></div><!-- green_header -->
		
	</div><!-- green_header_wrapper -->
	
	
	<div class="testimonials_page_wrapper">
		
		<div class="testi_col_wrapper">
			
			
			<?php if(get_field('testimonials')): ?>
			 
				<?php while(has_sub_field('testimonials')): ?>
			 
		<div class="single_testimonial">
			
			<div class="testimonial_header_wrapper">
				
				<span class="testi_greenline"></span><!-- testi_greenline -->
				
				<span class="testi_header"><?php the_sub_field( 'testimonials_title' ); ?></span><!-- testi_header -->
				
								
			</div><!-- testimonial_header_wrapper -->
			
			<p><?php the_sub_field( 'testimonials_content' ); ?></p>

			<span class="name"><?php the_sub_field( 'testimonial_name' ); ?><span class="divider"></span> <?php the_sub_field( 'testimonials_client_type' ); ?></span><!-- name -->
			
		</div><!-- single_testimonial -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
			
		</div><!-- testi_col_wrapper -->
		
		<div class="testi_col_wrapper">
		
		
		
		<?php if(get_field('testimonials_2')): ?>
			 
				<?php while(has_sub_field('testimonials_2')): ?>
			 
		<div class="single_testimonial">
			
			<div class="testimonial_header_wrapper">
				
				<span class="testi_greenline"></span><!-- testi_greenline -->
				
				<span class="testi_header"><?php the_sub_field( 'testimonials_title' ); ?></span><!-- testi_header -->
				
								
			</div><!-- testimonial_header_wrapper -->
			
			<p><?php the_sub_field( 'testimonials_content' ); ?></p>

			<span class="name"><?php the_sub_field( 'testimonial_name' ); ?><span class="divider"></span> <?php the_sub_field( 'testimonials_client_type' ); ?></span><!-- name -->
			
		</div><!-- single_testimonial -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
		
		
		
		
		</div><!-- testi_col_wrapper -->
		
		<div style="clear:both"></div>
		
	
	</div><!-- testimonials_wrapper -->
			
	
	
</section><!-- inner_main -->



		




<?php get_footer(); ?>
