<?php 
/*
 * Template Name: Plan Your Event
 */
?>
	<?php 
	
	if( have_posts() ):
		
		while( have_posts() ): the_post(); ?>
			
			
		
			<div class="container-fluid main_background" style="<?php get_the_post_thumbnail_url() ?>">
				<?php get_header(); ?>
					   			
					   			<div class="text">
					   					<div class="page_text plan_event">
					   						<h1><?php the_title(); ?></h1>
					   					
					   						<?php the_content(); ?>				   														
					   					</div>
					   				</div>
					   	</div>
		
		

	
		<?php endwhile;
		
	endif;
			
	?>
<?php get_footer(); ?>