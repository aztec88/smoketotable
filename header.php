<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SmokeToTable</title>
        <meta name="description" content="Smoke To Table is a Cincinnati, Ohio based catering company that specializes in bringing premium smoked meats and sides to local events and gatherings">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link rel="shortcut icon" href="/wp-content/themes/smoketotable/favicon.ico" type="image/x-icon">
		<link href="https://fonts.googleapis.com/css?family=Arbutus+Slab|Roboto:400,700" rel="stylesheet">
		<?php wp_head(); ?>
		
	</head>
	
	<?php 
		
		if( is_front_page() ):
			$smoketotable_classes = array( 'smoketotable-class', 'my-class' );
		else:
			$smoketotable_classes = array( 'no-smoketotable-class' );
		endif;
		
	?>
	
	<body <?php body_class( $smoketotable_classes ); ?>>
		
		
		
		<div class="menu">
		<a href="<?php echo home_url(); ?>">
		<img class="logo" src="<?php echo home_url(); ?>/wp-content/themes/smoketotable/public/src/img/logo.png" alt="smoketotable logo">
		</a>
		<a class="social_icons" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></i></a>
		<a class="social_icons" href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
		<br><br>
          <?php 
				wp_nav_menu(array(
					'theme_location' => 'primary',
					'container' => false,
					'menu_class' => 'main_menu',
					'walker' => new Walker_Nav_primary()
					)
				);
			?>	
			<div class="footer">
			<a class="footer_contact" href="tel:(513) 393-1511"> <i class="fa fa-phone-square" aria-hidden="true"></i> (513) 393-1511 </a> <br><br>
			<a class="footer_contact" href="mailto:SmokeToTable@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i> SmokeToTable@gmail.com</a>
			<ul class="copyright"> 
				<li>Copyright © 2017</li>
				<li><img class="logo" src="<?php echo home_url(); ?>/wp-content/themes/smoketotable/public/src/img/logo-footer.png" alt="smoketotable footer"></li>
				<li>Smoketotable.com</li>
			</ul>
			</div>	
			          
			<i class="fa fa-bars fa-2x mob_hamburger" aria-hidden="true"></i>
		</div>
		
		<div class="mob">
			<i class="fa fa-times fa-2x  mob_close" aria-hidden="true"></i>
			
          <?php 
				wp_nav_menu(array(
					'theme_location' => 'primary',
					'container' => false,
					'menu_class' => 'mob_menu',
					'walker' => new Walker_Nav_primary()
					)
				);
			?>			           
				    
		</div>
	
