<?php get_header(); ?>
<div class="container container-4k">
<div class="container-fluid home_page">
		<?php 
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>
				
				
					
		<?php if( has_post_thumbnail() ): ?>
		<a href="<?php the_permalink() ?>">
			<div class="col-lg-12 post_single">
					   				<?php the_post_thumbnail('', array('class' => 'img-responsive')); ?>
					   				<div class="post_headline">
						   				<div class="post_text">
						   					<h2><?php the_title(); ?></h2>
							   				<h3><?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?>, <?php the_author_meta('work'); ?></h3>
						   				</div>
					   				</div>
						   		</div></a>
						   		
		
		<?php else: ?>
   			<h1>NO POSTS PICTURE</h1>		
		<?php endif; ?>



			
			<?php endwhile;
			
		endif;
				
		?>
		<div class="page_pagination col-xs-12">
			<?php the_posts_pagination( array(
				'mid_size'  => 2,
				'prev_text' => 'PREVIOUS',
				'next_text' => 'NEXT',
				'screen_reader_text' => 0
			) ); ?>
		</div>
		</div>
		</div>

<?php get_footer(); ?>
