
<?php 
/*
 * Template Name: Photos Page
 */
?>

			<div class="container-fluid main_background">
				<?php 
				get_header(); 
				
				$id = get_the_ID();			  
				$images = twp_get_post_images($id, 'full');
				?>
					   			
		   			<div class="text">
	   					<div class="page_text">
<!-- 	   						<h1><?php the_title(); ?></h1> -->
	   						 <!-- Swiper -->
							<div class="swiper-container gallery-top">
							    <div class="swiper-wrapper">
								<?php 
								 
									 foreach ($images as $image){
										$img_id=$image->id;
										$alt = get_post_meta($img_id, '_wp_attachment_image_alt', true);
										 echo ("<div class='swiper-slide'><img class='img-responsive' src='$image->url' alt='$alt'></div>");
									 }
								  ?>				
							    </div>
							    <!-- Add Arrows -->
							    <div class="swiper-button-next swiper-button-white"><i class="fa fa-angle-right fa-2x" aria-hidden="true"></i></div>
							    <div class="swiper-button-prev swiper-button-white"><i class="fa fa-angle-left fa-2x" aria-hidden="true"></i></div>
							</div>
							<div class="swiper-container gallery-thumbs">
							    <div class="swiper-wrapper">
								<?php 
								 foreach ($images as $image){
									$img_id=$image->id;
									$alt = get_post_meta($img_id, '_wp_attachment_image_alt', true);
									 echo ("<div class='swiper-slide'><img class='img-responsive' src='$image->url' alt='$alt'></div>");
									}
								?>		
							    </div>
							</div>			
	   					</div>
	   				</div>
		   	</div>

				
<?php get_footer(); ?>