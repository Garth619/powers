<?php
/**
 * Template Name: About
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<?php include('banner.php');?>

<section id="about_greenline_trigger" class="inner_main">
	
	<h1 class="centered"><?php the_title();?></h1>
	<div class="green_header_wrapper">
		
		<div class="green_header"></div><!-- green_header -->
		
	</div><!-- green_header_wrapper -->
	
	<div class="about_us_wrapper">
		
		<div class="bio_wrapper">
			
			<img src="<?php the_field( 'about_us_image' ); ?>"/>
			
			<span class="bio_excerpt"><?php the_field( 'about_quote' ); ?></span><!-- bio_excerpt -->
			
			<span class="bio_title"><?php the_field( 'about_quote_title' ); ?></span><!-- bio_title -->
			
		</div><!-- bio_wrapper -->
		
		<div class="about_content_wrapper">
			
			<?php get_template_part( 'loop', 'page' );?>
			
			<a class="meet_powers" href="<?php the_field( 'meet_page_link' ); ?>"><?php the_field( 'meet_jessica_powers_button' ); ?></a><!-- meet_powers -->
			
		</div><!-- about_conent_wrapper -->
		
	</div><!-- about_us_wrapper -->
	
</section><!-- inner_main -->



		

			<?php //get_template_part( 'loop', 'page' ); ?>


<?php get_footer(); ?>
