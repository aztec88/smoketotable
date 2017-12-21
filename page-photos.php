
<?php 
/*
 * Template Name: Photos Page
 */
?>

			<div class="container-fluid main_background">
				<?php get_header(); ?>
					   			
		   			<div class="text">
	   					<div class="page_text">
<!-- 	   						<h1><?php the_title(); ?></h1> -->
	   						 <!-- Swiper -->
							<div class="swiper-container gallery-top">
							    <div class="swiper-wrapper">
								    <?php
								    $args = array(
									'post_type' => 'photos', // Your custom post type
									'posts_per_page' => '-1', // Change the number to whatever you wish
									'order_by' => 'date', // Some optional sorting
									'order' => 'DESC', 
									);
									$new_query = new WP_Query ($args);
									if ($new_query->have_posts()) {
									    while($new_query->have_posts()){
									        $new_query->the_post(); 
									         ?><div class="swiper-slide"><?php the_post_thumbnail('', array('class' => 'img-responsive')); ?></div><?php
									        // Get a list of post's categories
									        $categories = get_the_category($post->ID);
									        foreach ($categories as $category) {
									            echo $category->name;
									        }
									    }
									}
									wp_reset_postdata();
								    ?>						
							    </div>
							    <!-- Add Arrows -->
							    <div class="swiper-button-next swiper-button-white"><i class="fa fa-angle-right fa-2x" aria-hidden="true"></i></div>
							    <div class="swiper-button-prev swiper-button-white"><i class="fa fa-angle-left fa-2x" aria-hidden="true"></i></div>
							</div>
							<div class="swiper-container gallery-thumbs">
							    <div class="swiper-wrapper">
								    <?php
								    $args = array(
									'post_type' => 'photos', // Your custom post type
									'posts_per_page' => '-1', // Change the number to whatever you wish
									'order_by' => 'date', // Some optional sorting
									'order' => 'DESC', 
									);
									$new_query = new WP_Query ($args);
									if ($new_query->have_posts()) {
									    while($new_query->have_posts()){
									        $new_query->the_post(); 
									         ?><div class="swiper-slide"><?php the_post_thumbnail('', array('class' => 'img-responsive')); ?></div><?php
									        // Get a list of post's categories
									        $categories = get_the_category($post->ID);
									        foreach ($categories as $category) {
									            echo $category->name;
									        }
									    }
									}
									wp_reset_postdata();
								    ?>						
							       
							        
							    </div>
							</div>			
	   					</div>
	   				</div>
		   	</div>

				
<?php get_footer(); ?>