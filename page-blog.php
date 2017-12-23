<?php
/*
 * Template Name: Blog list
 */
?>

	<?php 
	
	if( have_posts() ):
		
		while( have_posts() ): the_post(); ?>
			
			
		
			<div class="container-fluid main_background">
				<?php get_header(); ?>
					   			
					<div class="text">
							<div class="page_text blog_page">
								<h1><?php the_title(); ?></h1>
							
									<?php the_content(); ?>	
									

									<div class="list_of_services blog_list">
									<?php
										$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
										$args = array( 'post_type' => 'post', 
															'posts_per_page' => 12,
														'sortby' => 'date',
													'order' => 'DESC',
													'paged' => $paged );
										$loop = new WP_Query( $args );
										while ( $loop->have_posts() ) : $loop->the_post();
										?>
										<div class="wraper_service blog_single col-xs-12 col-md-6 col-lg-4">
										<a class="service_link" href="<?php the_permalink(); ?>" title="Read more">
										<div class="service">

											<div class="service_image">
												<?php the_post_thumbnail('medium', array('class'=>'img-responsive')); ?>
											</div>

											<img class="service_icon" src="<?php echo home_url(); ?>/wp-content/themes/smoketotable/public/src/img/smoke_icon.png" alt="smoketotable-icon">
											
											<div class="service_title">
												<p><?php the_title(); ?></p>
											</div>

										</div>
										</a>
										</div>
										<?php
										endwhile;
										$total_pages = $loop->max_num_pages;

										if ($total_pages > 1){
									
											$current_page = max(1, get_query_var('paged'));
											echo ('<div class="pagination col-xs-12">');
										   
											echo paginate_links(array(
												'base' => get_pagenum_link(1) . '%_%',
												'format' => '/page/%#%',
												'current' => $current_page,
												'total' => $total_pages,
												'prev_text'    => __('PREV'),
												'next_text'    => __('NEXT'),
											));
									
											echo ('</div>');
										}
									?>   
									</div>
							</div>
						</div>
			</div>
		
		<?php endwhile;
		
	endif;
			
	?>
<?php get_footer(); ?>