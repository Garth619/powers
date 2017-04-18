<section id="free_consultation" class="request_consultation">
	
	
	<div class="request_greenline_wrapper">
	
		<span class="request_green_line"></span><!-- request_green_line -->
	
	</div><!-- request_greenline_wrapper -->
	
	<span class="large_header"><?php the_field( 'footer_request_title','options' ); ?></span>
	<span class="required"><?php the_field( 'required_fields','options' ); ?></span>
	
	<span class="form_disclaimer"><?php the_field( 'disclaimer','options'); ?></span><!-- form_disclaimer -->
	
	<div class="form"><?php gravity_form(1, false, false, false, '', true, 12); ?></div><!-- form -->
	
	<div id="lower_footer_trigger" class="lower_footer">
		
		<div class="footer_quote">
			
			<div class="footer_quote_content">
				
				
			
				<span class="top_quote"><?php the_field( 'footer_top_quote','options' ); ?></span><!-- top_quote -->
				
				<span class="work_quote">
					
					<span class="footer_greenline"></span><!-- footer_greenline -->
					
					<?php the_field( 'footer_middle_quote','options' ); ?>
					
					
					
				</span><!-- work_quote -->
				
				<span class="bottom_quote"><?php the_field( 'footer_lower_quote','options' ); ?></span><!-- bottom_quote -->
				
				<span class="footer_attorney"><?php the_field( 'footer_attorney_title','options'); ?></span><!-- footer_attorney -->
			
			</div><!-- footer_quote_content -->
			
		</div><!-- footer_quote -->
		
		
		<div class="footer_contact">
			
			
			<div class="footer_contact_wrapper">
				
				<div class="footer_contact_title_wrapper">
					
					<span class="footer_contact_title">Contact</span><!-- footer_contact_title -->
					
				</div><!-- footer_contact_title_wrapper -->
				
				<div class="footer_contact_info">
					
					
					<?php the_field( 'address',23 ); ?>
					
					
					
					
					<a class="get_directions" href="<?php the_field( 'address_link',23 ); ?>" target="_blank">Get Directions</a>
					
				</div><!-- footer_contact_info -->
				
			</div><!-- footer_contact_wrapper -->
			
			
			<div class="footer_contact_wrapper">
				
				<div class="footer_contact_title_wrapper">
					
					<span class="footer_contact_title">Call</span><!-- footer_contact_title -->
					
				</div><!-- footer_contact_title_wrapper -->
				
				<div class="footer_contact_info">
					
					
					<a class="tel" href="tel:<?php the_field( 'phone',23 ); ?>"><?php the_field( 'phone',23 ); ?></a>
					
				
					
				</div><!-- footer_contact_info -->
				
			</div><!-- footer_contact_wrapper -->
			
			
			
			<div class="footer_contact_wrapper">
				
				<div class="footer_contact_title_wrapper">
					
					<span class="footer_contact_title">Connect</span><!-- footer_contact_title -->
					
				</div><!-- footer_contact_title_wrapper -->
				
				<div class="footer_contact_info">
					
					
					<a class="social" href="<?php the_field( 'google_+_link',23 ); ?>" target="_blank"><?php the_field( 'google_+',23 ); ?></a>
					<a class="social" href="<?php the_field( 'facebook_link',23 ); ?>" target="_blank"><?php the_field( 'facebook',23 ); ?></a>
					
				</div><!-- footer_contact_info -->
				
			</div><!-- footer_contact_wrapper -->
			
			
			
						
			
			
		</div><!-- footer_contact -->
		
		
		
	</div><!-- lower_footer -->
	
	<div class="bottom_footer">
		
		<span class="copy">COPYRIGHT &copy; <?php echo date("Y"); ?> <?php the_field( 'copyright_firm_name','options' ); ?> &nbsp;|&nbsp; 
		
		
		
		<?php if(get_field('lower_footer_links','options')): ?>
		 
			<?php while(has_sub_field('lower_footer_links','options')): ?>
		 
			
					<a class="" href="<?php the_sub_field( 'link' ); ?>"><?php the_sub_field( 'name' ); ?></a>
					
					<span class="footer_divider">&nbsp;|&nbsp;</span>
				
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
		
		</span>
		
		<a class="ilawyer" href="//ilawyermarketing.com" target="_blank">
			
			<img src="<?php bloginfo('template_directory');?>/images/ilawyerlogo.png"/>
		
		</a><!-- ilawyer -->
		
	</div><!-- bottom_footer -->
	
</section><!-- request -->


<?php wp_footer(); ?>


<?php if(is_front_page()):?>


<script type="text/javascript">

jQuery(document).ready(function(){


var waypoint = new Waypoint({
  element: document.getElementById('about_greenline_trigger'),
  handler: function(direction) {
   
   
   
   
  jQuery('h1 span.header_greenline').addClass('fadein');
   
   
   
   
   
  }
}) // waypoint



var waypointimage = new Waypoint({
  element: document.getElementById('image_trigger'),
  handler: function(direction) {
   
   
   
   
  jQuery('.image_inner').addClass('image_inner_fadein');
  
  jQuery('img.about_image.desktop').addClass('about_image_fadein');
  
  jQuery('a.meet_attorney').addClass('meet_attorney_fadein');
   
   
   
   
  },
  offset:350
}) // waypoint







var waypointtwo = new Waypoint({
  element: document.getElementById('second_about_trigger'),
  handler: function(direction) {
   
   
   
   
  jQuery('span.second_about_greenline').addClass('fadein');
  jQuery('.logo_slider_wrapper').addClass('fadein');
   
   
   
   
  }
}) // waypoint



var waypointthree = new Waypoint({
  element: document.getElementById('testi_trigger'),
  handler: function(direction) {
   
   
   
   
  jQuery('span.testi_greenline').addClass('fadein');
  jQuery('.testi_buttons').addClass('fadein');
 
   
   
   
   
  }
}) // waypoint



}); // Document Ready

</script>


<?php endif;?>




<?php if(is_page_template( 'page-about.php' ) ):?>


<script type="text/javascript">

jQuery(document).ready(function(){



var waypointfive = new Waypoint({
  element: document.getElementById('about_greenline_trigger'),
  handler: function(direction) {
   
   
   
   
  jQuery('.inner_main .green_header_wrapper .green_header').addClass('fadein');
  
  
  jQuery('.bio_wrapper img').addClass('fadein');
 
   
   
   
   
  },
  offset:100
}) // waypoint




}); // Document Ready

</script>



<?php endif;?>



<?php if(is_page_template( 'page-bio.php' ) ):?>



<script type="text/javascript">

jQuery(document).ready(function(){



var waypointsix = new Waypoint({
  element: document.getElementById('bio_greenline_trigger'),
  handler: function(direction) {
   
   
   
   
  jQuery('.inner_main .green_header_wrapper .green_header').addClass('fadein');
  
  
  jQuery('.our_attorney_image img').addClass('fadein');
 
   
   
   
  },
  offset:100
}) // waypoint








}); // Document Ready

</script>

<?php endif;?>


<?php if(is_page_template( 'page-contact.php' ) ):?>



<script type="text/javascript">

jQuery(document).ready(function(){



var waypointsix = new Waypoint({
  element: document.getElementById('contact_greenline_trigger'),
  handler: function(direction) {
   
   
   
   
  jQuery('.inner_main .green_header_wrapper .green_header').addClass('fadein');
  
  

 
   
   
   
  },
  offset:100
}) // waypoint




}); // Document Ready

</script>

<?php endif;?>


<script type="text/javascript">

jQuery(document).ready(function(){

var waypointfour = new Waypoint({
  element: document.getElementById('lower_footer_trigger'),
  handler: function(direction) {
   
   
   
   
  jQuery('span.footer_greenline').addClass('fadein');
  
 
   
   
   
   
  },
  offset: 250
  
}) // waypoint




var waypointfour = new Waypoint({
  element: document.getElementById('free_consultation'),
  handler: function(direction) {
   
   
   
   
  jQuery('span.request_green_line').addClass('fadein');
  
 
  
  
  },
  offset: 250
}) // waypoint






}); // Document Ready

</script>


<?php the_field( 'footer_tracking_code','options'); ?>



</body>
</html>
