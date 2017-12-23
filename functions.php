<?php
/*
	==========================================
	 Include scripts
	==========================================
*/
function smoketotable_script_enqueue() {
	//css
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/public/dist/css/bootstrap.css', array(), '3.3.7', 'all');
	wp_enqueue_style('fontawesome', get_template_directory_uri() . '/public/dist/css/font-awesome.min.css', array(), '4.7.0', 'all');
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/public/dist/css/app.css', array(), '1.0.0', 'all');
	wp_enqueue_style('swiper_css', get_template_directory_uri() . '/public/dist/css/swiper.min.css', array(), '3.4.2', 'all');
	
	
	//js
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/public/dist/js/bootstrap.js', array(), '3.3.7', true);
	wp_enqueue_script('swiperjs', get_template_directory_uri() . '/public/dist/js/swiper.min.js', array(), '3.4.2', true);
	wp_enqueue_script('globaljs', get_template_directory_uri() . '/public/dist/js/global.js', array(), '1.0.0', true);
	
	
	
}

add_action( 'wp_enqueue_scripts', 'smoketotable_script_enqueue');

/*
	==========================================
	 Activate menus
	==========================================
*/
function smoketotable_theme_setup() {
	
	add_theme_support('menus');
	
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
	
}

add_action('init', 'smoketotable_theme_setup');


/*
	==========================================
	 Post type
	==========================================
*/
function create_posttype() {
	register_post_type( 'services',
	array(
	  'labels' => array(
		'name' => __( 'Services' ),
		'singular_name' => __( 'Service' )
	  ),
	  'public' => true,
	  'has_archive' => true,
	  'menu_icon' => 'dashicons-products',
	  'rewrite' => array('slug' => 'service'),
	  'supports' => array('title', 'editor', 'thumbnail', 'author')
	)
  );
//   register_post_type( 'photos',
//     array(
//       'labels' => array(
//         'name' => __( 'Photos' ),
//         'singular_name' => __( 'Photo' )
//       ),
      
//       'public' => true,
//       'has_archive' => true,
//       'menu_icon' => 'dashicons-images-alt2',
//       'rewrite' => array('slug' => 'photo'),
//       'supports' => array('title', 'editor', 'thumbnail', 'author')
//     )
//   );
  
}
add_action( 'init', 'create_posttype' );



/*===================================================================================
 * Add Author Links
 * =================================================================================*/
/*
function add_to_author_profile( $author_work ) {
	
	$contactmethods['work'] = 'Work';	
	$contactmethods['work_url'] = 'Work website';
	$contactmethods['facebook'] = 'Facebook profile URL';	
	$contactmethods['twiter'] = 'Twiter username';	
	$contactmethods['linkein'] = 'LinkeIn profile URL';
	return $contactmethods;
}
add_filter( 'user_contactmethods', 'add_to_author_profile', 10, 1);
*/


/*
	==========================================
	 Theme support function
	==========================================
*/
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
// add_theme_support('post-formats',array('aside','image','video'));
add_theme_support('html5', array('search-form'));


/*
	==========================================
	 Sidebar function
	==========================================
*/
/*
function smoketotable_widget_setup() {
	
	register_sidebar(
		array(	
			'name'	=> 'Sidebar',
			'id'	=> 'sidebar-1',
			'class'	=> 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
	
}
add_action('widgets_init','smoketotable_widget_setup');
*/

/*
	==========================================
	 Include Walker file for custom menu
	==========================================
*/
require get_template_directory() . '/inc/walker.php';

# ---------------------------------------------------
# REMOVE SCREEN READER TEXT FROM POST PAGINATION
# ---------------------------------------------------
function sanitize_pagination($content) {
    // Remove h2 tag
    $content = preg_replace('#<h2.*?>(.*?)<\/h2>#si', '', $content);
    return $content;
}
 
add_action('navigation_markup_template', 'sanitize_pagination');

# ---------------------------------------------------
# UPLOAD LIMIT
# ---------------------------------------------------

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );