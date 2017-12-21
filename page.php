
	<?php 
	
	if( have_posts() ):
		
		while( have_posts() ): the_post(); ?>
			
			
		
			<div class="container-fluid main_background">
				<?php get_header(); ?>
					   			
					   			<div class="text">
					   					<div class="page_text">
					   						<h1><?php the_title(); ?></h1>
					   					
											   <?php the_content(); ?>	
											   
					   				</div>
					   	</div>
		
		

	
		<?php endwhile;
		
	endif;
			
	?>
<?php get_footer(); ?>