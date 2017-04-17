<?php
/**
 * Template Name: Contact
 *
 
 */

get_header(); ?>

<?php include('banner.php');?>

<section id="contact_greenline_trigger" class="inner_main">
	
	<h1 class="centered"><?php the_title();?></h1>
	<div class="green_header_wrapper">
		
		<div class="green_header"></div><!-- green_header -->
		
	</div><!-- green_header_wrapper -->
	
	
	<div class="contact_page_wrapper">
		
		<div class="map_wrapper">
			
			<?php the_field( 'map_code' ); ?>
			
		</div><!-- map_wrapper -->
		
		<div class="contact_page_info_wrapper">
			
			<div class="icon_address_row">
				
				<div class="contact_icon">
					
					<img src="<?php bloginfo('template_directory');?>/images/contact-map.png"/>
					
				</div><!-- contact_icon -->
				
				<a class="contact_page_address" href="<?php the_field( 'address_link' ); ?>" target="_blank">
					<?php the_field( 'address' ); ?>
					<span class="get_directions">Get Directions</span><!-- get_directions -->
				</a><!-- contact_page_address -->
				
				
			</div><!-- icon_address_row -->
			
			<div class="icon_address_row">
				
				<div class="contact_icon">
					
					<img src="<?php bloginfo('template_directory');?>/images/contact-phone-green.png"/>
					
				</div><!-- contact_icon -->
				
				<a class="contact_page_address" href="tel:<?php the_field( 'phone' ); ?>"><?php the_field( 'phone' ); ?></a><!-- contact_page_address -->
				
				
			</div><!-- icon_address_row -->
			
			<div class="icon_address_row">
				
				<div class="contact_icon">
					
					<img src="<?php bloginfo('template_directory');?>/images/contact-social.png"/>
					
				</div><!-- contact_icon -->
				
				<div class="social_wrapper">
				
					<a href="<?php the_field( 'google_+_link' ); ?>" target="_blank"><?php the_field( 'google_+' ); ?></a><!-- contact_page_address -->
					<a href="<?php the_field( 'facebook_link' ); ?>" target="_blank"><?php the_field( 'facebook' ); ?></a><!-- contact_page_address -->
				
				</div>
				
				
			</div><!-- icon_address_row -->
			
		</div><!-- contact_info_wrapper -->
		
	</div><!-- contact_page_wrapper -->
	
	
	
</section><!-- inner_main -->



		




<?php get_footer(); ?>
