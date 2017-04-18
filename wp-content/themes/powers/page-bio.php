<?php
/**
 * Template Name: Meet Our Attorney
 *

 */

get_header(); ?>

<?php include('banner.php');?>

<section id="bio_greenline_trigger" class="inner_main">
	
	<h1 class="centered"><?php the_title();?></h1>
	<div class="green_header_wrapper">
		
		<div class="green_header"></div><!-- green_header -->
		
	</div><!-- green_header_wrapper -->
	
	<div class="our_attorney_wrapper">
		
		<div class="our_attorney_inner_wrapper">
		
			<div class="our_attorney_image">
				
				<?php $meet_our_attorney_image = get_field( 'meet_our_attorney_image' ); ?>
			
				<img src="<?php echo $meet_our_attorney_image['url']; ?>" alt="<?php echo $meet_our_attorney_image['alt']; ?>" />
			
			</div><!-- our_attorney_image -->
		
			<div class="our_attorney_content">
			
				<span class="attorney_title"><?php the_field( 'meet_attorney_title' ); ?></span><!-- attorney_title -->
			
				<span class="attorney_quote"><?php the_field( 'meet_attorney_quote' ); ?></span><!-- attorney_quote -->
			
			</div><!-- our_attorney_content -->
			
			<div style="clear:both"></div>
		
			</div><!-- our_attorney_inner_wrapper -->
			
			
		
	</div><!-- our_attorney_wrapper -->
	
	<div class="our_attorney_columns">
		
		<div class="content">
		
			<div class="att_col">
				
				<?php the_field( 'column_1' ); ?>
				
			</div><!-- att_col -->
			
			
					
			<div class="att_col">
				
				<?php the_field( 'column_2' ); ?>
				
			</div><!-- att_col -->
		
		</div><!-- content -->
		
	</div><!-- our_attorney_columns -->
		
	
	
</section><!-- inner_main -->



		




<?php get_footer(); ?>
