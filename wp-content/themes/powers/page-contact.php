<?php
/**
 * Template Name: Contact
 *
 
 */

get_header(); ?>

<?php include('banner.php');?>

<section id="contact_greenline_trigger" class="inner_main">
	
	<h1 class="centered">contact us</h1>
	<div class="green_header_wrapper">
		
		<div class="green_header"></div><!-- green_header -->
		
	</div><!-- green_header_wrapper -->
	
	
	<div class="contact_page_wrapper">
		
		<div class="map_wrapper">
			
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13398.12797532836!2d-117.113549!3d32.91054!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x48a46784ca309b0d!2sHigh+Rank+Websites%2C+Inc.!5e0!3m2!1sen!2sus!4v1491335071392" frameborder="0" style="border:0" allowfullscreen></iframe>
			
		</div><!-- map_wrapper -->
		
		<div class="contact_page_info_wrapper">
			
			<div class="icon_address_row">
				
				<div class="contact_icon">
					
					<img src="<?php bloginfo('template_directory');?>/images/contact-map.png"/>
					
				</div><!-- contact_icon -->
				
				<a class="contact_page_address" href="">
					1234 Address Street<br/>
					Suite A<br/>
					Birmingham, Alabama<br/> 
					01234<br/>
					<span class="get_directions">Get Directions</span><!-- get_directions -->
				</a><!-- contact_page_address -->
				
				
			</div><!-- icon_address_row -->
			
			<div class="icon_address_row">
				
				<div class="contact_icon">
					
					<img src="<?php bloginfo('template_directory');?>/images/contact-phone-green.png"/>
					
				</div><!-- contact_icon -->
				
				<a class="contact_page_address" href="tel:1234567890">123.456.7890</a><!-- contact_page_address -->
				
				
			</div><!-- icon_address_row -->
			
			<div class="icon_address_row">
				
				<div class="contact_icon">
					
					<img src="<?php bloginfo('template_directory');?>/images/contact-social.png"/>
					
				</div><!-- contact_icon -->
				
				<div class="social_wrapper">
				
					<a href="">google+</a><!-- contact_page_address -->
					<a href="">facebook</a><!-- contact_page_address -->
				
				</div>
				
				
			</div><!-- icon_address_row -->
			
		</div><!-- contact_info_wrapper -->
		
	</div><!-- contact_page_wrapper -->
	
	
	
</section><!-- inner_main -->



		




<?php get_footer(); ?>
