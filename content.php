	
	
<div class="container-fluid main_background">
	<?php get_header(); ?>
						
		<div class="text blog_main">
			<div id="post_text" class="page_text blog_display">
				<h1><?php the_title(); ?></h1>

				<?php the_content(); ?>	
				<div class="share_post">
					<?php echo do_shortcode("[social_warfare]"); ?>
				</div>
				<div class="comments">
					<?php comments_template();?>
				</div>
				
			</div>
		</div>
	</div>
	<div>


<?php get_footer(); ?>
<script>
	(function( $ ){
		//ADD IMG_RESPONSIVE TO IMAGES
		$( document ).ready(function() {
			$('#post_text').find('img').addClass('img-responsive');
		});
	})(jQuery);
</script>