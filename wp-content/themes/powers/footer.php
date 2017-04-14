<section id="free_consultation" class="request_consultation">
	
	
	<div class="request_greenline_wrapper">
	
		<span class="request_green_line"></span><!-- request_green_line -->
	
	</div><!-- request_greenline_wrapper -->
	
	<span class="large_header">request <span class="green">a free</span> consultation</span>
	<span class="required">*Required Field</span>
	
	<span class="form_disclaimer">We DO NOT BILL OUR CLIENTS. WE ARE PAID ONLY OUT OF WHAT WE ARE ABLE TO COLLECT. FILL OUT THE FORM BELOW TO RECEIVE YOUR FREE CASE CONSULTATION.</span><!-- form_disclaimer -->
	
	<div class="form"><?php gravity_form(1, false, false, false, '', true, 12); ?></div><!-- form -->
	
	<div id="lower_footer_trigger" class="lower_footer">
		
		<div class="footer_quote">
			
			<div class="footer_quote_content">
				
				
			
				<span class="top_quote">“While I know that my aggressiveness and education have won me many days in the courtroom, I also know that my value as a lawyer is the respect that I show each one of my clients on a daily basis.</span><!-- top_quote -->
				
				<span class="work_quote">
					
					<span class="footer_greenline"></span><!-- footer_greenline -->
					
					At Powers Injury Law, we are not just working for you, we are working with you.
					
				</span><!-- work_quote -->
				
				<span class="bottom_quote">This is a very personal process and as a result, it can be grueling. The relationship I have with my clients not only helps me better tell their story, but it makes the experience less stressful. ”</span><!-- bottom_quote -->
				
				<span class="footer_attorney">Attorney Jessica&nbsp;Powers</span><!-- footer_attorney -->
			
			</div><!-- footer_quote_content -->
			
		</div><!-- footer_quote -->
		
		
		<div class="footer_contact">
			
			
			<div class="footer_contact_wrapper">
				
				<div class="footer_contact_title_wrapper">
					
					<span class="footer_contact_title">Contact</span><!-- footer_contact_title -->
					
				</div><!-- footer_contact_title_wrapper -->
				
				<div class="footer_contact_info">
					
					
					1234 Address Street<br/>Suite A<br/>Birmingham, Alabama<br/>01234
					
					<a class="get_directions" href="" target="_blank">Get Directions</a>
					
				</div><!-- footer_contact_info -->
				
			</div><!-- footer_contact_wrapper -->
			
			
			<div class="footer_contact_wrapper">
				
				<div class="footer_contact_title_wrapper">
					
					<span class="footer_contact_title">Call</span><!-- footer_contact_title -->
					
				</div><!-- footer_contact_title_wrapper -->
				
				<div class="footer_contact_info">
					
					
					<a class="tel" href="tel:1234567890">1234567890</a>
					
				
					
				</div><!-- footer_contact_info -->
				
			</div><!-- footer_contact_wrapper -->
			
			
			
			<div class="footer_contact_wrapper">
				
				<div class="footer_contact_title_wrapper">
					
					<span class="footer_contact_title">Connect</span><!-- footer_contact_title -->
					
				</div><!-- footer_contact_title_wrapper -->
				
				<div class="footer_contact_info">
					
					
					<a class="social" href="" target="_blank">google+</a>
					<a class="social" href="" target="_blank">facebook+</a>
					
				</div><!-- footer_contact_info -->
				
			</div><!-- footer_contact_wrapper -->
			
			
			
						
			
			
		</div><!-- footer_contact -->
		
		
		
	</div><!-- lower_footer -->
	
	<div class="bottom_footer">
		
		<span class="copy">COPYRIGHT &copy; <?php echo date("Y"); ?> powers law &nbsp;|&nbsp; <a class="" href="">DISCLAIMER</a> &nbsp;|&nbsp; <a class="" href="">blog</a></span>
		
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
  offset:150
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
  offset: 50
  
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






</body>
</html>
