<?php
/**
 * Template Name: Practice Areas Directory
 *

 */

get_header(); ?>

<?php include('banner.php');?>

<section id="pa_trigger" class="inner_main">
	
	<h1 class="centered"><?php the_title();?></h1>
	<div class="green_header_wrapper">
		
		<div class="green_header"></div><!-- green_header -->
		
	</div><!-- green_header_wrapper -->
	
	
	<div class="practice_areas_wrapper">
		
		
		
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'pa_menu' ) ); ?>
		
		
	</div><!-- practice_areas_wrapper -->
	
	
	
</section><!-- inner_main -->



		




<?php get_footer(); ?>
