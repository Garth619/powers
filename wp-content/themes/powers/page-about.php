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
	
	<h1 class="centered">About Our Law&nbsp;Firm</h1>
	<div class="green_header_wrapper">
		
		<div class="green_header"></div><!-- green_header -->
		
	</div><!-- green_header_wrapper -->
	
	<div class="about_us_wrapper">
		
		<div class="bio_wrapper">
			
			<img src="<?php bloginfo('template_directory');?>/images/about.jpg"/>
			
			<span class="bio_excerpt">Lorem ipsum <span class="green">dolor sit amet</span>, consect adipiscing elit. Quisque luctus, dolor a convallis efficitur odio ante solli cit udin&nbsp;ipsum.</span><!-- bio_excerpt -->
			
			<span class="bio_title">Powers Injury&nbsp;Law</span><!-- bio_title -->
			
		</div><!-- bio_wrapper -->
		
		<div class="about_content_wrapper">
			
			<h2>Heading style 2 - Nemo enim ipsam voluptatem</h2>
			
			<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

			<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<p>ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla&nbsp;pariatur.</p>
			
			<a class="meet_powers" href="">Meet Jessica Powers</a><!-- meet_powers -->
			
		</div><!-- about_conent_wrapper -->
		
	</div><!-- about_us_wrapper -->
	
</section><!-- inner_main -->



		

			<?php //get_template_part( 'loop', 'page' ); ?>


<?php get_footer(); ?>
