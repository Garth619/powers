<?php
/**
 * Template Name: Case Results
 *

 */

get_header(); ?>

<?php include('banner.php');?>

<section class="inner_main">
	
	<h1 class="centered"><?php the_title();?></h1>
	<div class="green_header_wrapper">
		
		<div class="green_header"></div><!-- green_header -->
		
	</div><!-- green_header_wrapper -->
	
	
	
	<div class="case_results_page_wrapper">
		
		<div class="case_column">
		
			
			
			
			
			<?php if(get_field('case_results')): ?>
			 
				<?php while(has_sub_field('case_results')): ?>
				
				
				
					<div class="single_case">
			
					<span class="case_amount"><?php the_sub_field( 'case_amount' ); ?></span><!--case_amount -->
					<span class="case_title"><?php the_sub_field( 'case_title' ); ?></span><!-- case_title -->
			
					<div class="case_content">
				
					<span class="case_greenline"></span><!-- case_greenline -->
				
					<div class="case_content_wrapper">
				
						<p><?php the_sub_field( 'case_content' ); ?></p>
						
						
						<?php if ( get_sub_field( 'pdf' )): ?>
						
							<a class="case_link" href="<?php the_sub_field( 'pdf' ); ?>" target="_blank">View Case</a>
							
						<?php endif;?>
						
						<?php if ( get_sub_field( 'url' ) ) : ?>
						
							<a class="case_link" href="<?php the_sub_field( 'url' ); ?>" target="_blank">View Case</a>
							
						<?php endif;?>
				
					</div><!-- case_content_wrapper -->
				
				</div><!-- case_content -->
			
			
				<div class="case_cat_mobile_wrapper">
			
					<div class="case_cat">
						<?php the_sub_field( 'case_category' ); ?>
					</div><!-- case_cat -->
			
				</div><!-- case_cat_mobile_wrapper -->
			
			</div><!-- single_case -->
			 
					
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
			
			
		
		
		</div><!-- case_column -->
		
		<div class="case_column">
		
		<?php if(get_field('case_results_2')): ?>
			 
				<?php while(has_sub_field('case_results_2')): ?>
				
				
				
				<div class="single_case">
			
					<span class="case_amount"><?php the_sub_field( 'case_amount' ); ?></span><!--case_amount -->
					<span class="case_title"><?php the_sub_field( 'case_title' ); ?></span><!-- case_title -->
			
					<div class="case_content">
				
					<span class="case_greenline"></span><!-- case_greenline -->
				
					<div class="case_content_wrapper">
				
						<p><?php the_sub_field( 'case_content' ); ?></p>
						
						<?php if ( get_sub_field( 'pdf' )): ?>
						
							<a class="case_link" href="<?php the_sub_field( 'pdf' ); ?>" target="_blank">View Case</a>
							
						<?php endif;?>
						
						<?php if ( get_sub_field( 'url' ) ) : ?>
						
							<a class="case_link" href="<?php the_sub_field( 'url' ); ?>" target="_blank">View Case</a>
							
						<?php endif;?>

				
					</div><!-- case_content_wrapper -->
				
				</div><!-- case_content -->
			
			
				<div class="case_cat_mobile_wrapper">
			
					<div class="case_cat">
						<?php the_sub_field( 'case_category' ); ?>
					</div><!-- case_cat -->
			
				</div><!-- case_cat_mobile_wrapper -->
			
			</div><!-- single_case -->
			 
					
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>

		
		
		</div><!-- case_column -->
		
		
		<div style="clear:both"></div>
		
		
	</div><!-- case_results_wrapper -->
		
	
	
</section><!-- inner_main -->



		




<?php get_footer(); ?>
