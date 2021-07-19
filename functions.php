<?php 

function portfoliotheme_theme_support(){
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'portfoliotheme_theme_support');

function portfolio_menus(){

	$location = array(

		'primary-menu' => ' Primary Left Sidebar',
		'Footer' => 'Footer Menu Items'

	);

	register_nav_menus($location);
}

add_action('init', 'portfolio_menus');

function portfoliotheme_register_styles(){

	$version = wp_get_theme() ->get('Version');
	wp_enqueue_style('portfoliotheme_style', get_template_directory_uri()."/style.css", array(), $version, 'all');

	wp_enqueue_style('portfoliotheme_fontpoppins',"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700", array(), '', 'all');

	wp_enqueue_style('portfoliotheme_fontmontserrat',"https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700", array(), '', 'all');

	wp_enqueue_style('portfoliotheme_open-iconic-bootstrap', get_template_directory_uri()."/assets/css/open-iconic-bootstrap.min.css", array(), '4.1.0', 'all');

	wp_enqueue_style('portfoliotheme_animate', get_template_directory_uri()."/assets/css/animate.css", array(), '', 'all');

	wp_enqueue_style('portfoliotheme_owl-carousel', get_template_directory_uri()."/assets/css/owl.carousel.min.css", array(), '', 'all');

	wp_enqueue_style('portfoliotheme_owlthemedefault', get_template_directory_uri()."/assets/css/owl.theme.default.min.css", array(), '', 'all');

	wp_enqueue_style('portfoliotheme_owlthemedefault', get_template_directory_uri()."/assets/css/magnific-popup.css", array(), '', 'all');

	wp_enqueue_style('portfoliotheme_aos', get_template_directory_uri()."/assets/css/aos.css", array(), '', 'all');

	wp_enqueue_style('portfoliotheme_ionicons', get_template_directory_uri()."/assets/css/ionicons.min.css", array(), '', 'all');

	wp_enqueue_style('portfoliotheme_bootstrap-datepicker',get_template_directory_uri()."/assets/css/bootstrap-datepicker.css", array(), '', 'all');

	wp_enqueue_style('portfoliotheme_jquery-timepicker',get_template_directory_uri()."/assets/css/jquery.timepicker.css", array(), '', 'all');

	wp_enqueue_style('portfoliotheme_flaticon', get_template_directory_uri()."/assets/css/flaticon.css", array(), '', 'all');

	wp_enqueue_style('portfoliotheme_icomoon', get_template_directory_uri()."/assets/css/icomoon.css", array(), '', 'all');
	
}

add_action('wp_enqueue_scripts', 'portfoliotheme_register_styles');

function portfoliotheme_register_scripts(){

	wp_enqueue_script('portfoliotheme_jquery', get_template_directory_uri()."/assets/js/jquery.min.js", array(), '', true);

	wp_enqueue_script('portfoliotheme_jquery-migrate', get_template_directory_uri()."/assets/js/jquery-migrate-3.0.1.min.js", array(), '3.0.1', true);

	wp_enqueue_script('portfoliotheme_popper', get_template_directory_uri()."/assets/js/popper.min.js", array(), '', true);

	wp_enqueue_script('portfoliotheme_bootstrap', get_template_directory_uri()."/assets/js/bootstrap.min.js", array(), '4.1.0', true);

	wp_enqueue_script('portfoliotheme_jquery-easing', get_template_directory_uri()."/assets/js/jquery.easing.1.3.js", array(), '1.3', true);

	wp_enqueue_script('portfoliotheme_jquery-waypoint', get_template_directory_uri()."/assets/js/jquery.waypoints.min.js", array(), '', true);

	wp_enqueue_script('portfoliotheme_jquery-stellar', get_template_directory_uri()."/assets/js/jquery.stellar.min.js", array(), '', true);

	wp_enqueue_script('portfoliotheme_owl-carousel', get_template_directory_uri()."/assets/js/owl.carousel.min.js", array(), '', true);
	wp_enqueue_script('portfoliotheme_jquery-magnific-popup', get_template_directory_uri()."/assets/js/jquery.magnific-popup.min.js", array(), '', true);
	wp_enqueue_script('portfoliotheme_aosjs', get_template_directory_uri()."/assets/js/aos.js", array(), '', true);

	wp_enqueue_script('portfoliotheme_jquery-animateNumber', get_template_directory_uri()."/assets/js/jquery.animateNumber.min.js", array(), '', true);

	wp_enqueue_script('portfoliotheme_bootstrap-datepicker', get_template_directory_uri()."/assets/js/bootstrap-datepicker.js", array(), '', true);
	wp_enqueue_script('portfoliotheme_jquery-timepicker', get_template_directory_uri()."/assets/js/jquery.timepicker.min.js", array(), '', true);
	wp_enqueue_script('portfoliotheme_scrollax', get_template_directory_uri()."/assets/js/scrollax.min.js", array(), '', true);

	wp_enqueue_script('portfoliotheme_style', "https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false", array(), '', true);

	wp_enqueue_script('portfoliotheme_google-map', get_template_directory_uri()."/assets/js/google-map.js", array(), '', true);
	wp_enqueue_script('portfoliotheme_mainjs', get_template_directory_uri()."/assets/js/main.js", array(), '', true);
	
}

add_action('wp_enqueue_scripts', 'portfoliotheme_register_scripts');


function portfoliotheme_widget_areas(){
          
          register_sidebar(
          	array(
          		'before_title' => '<h2>',
          		'after_title' => '</h2>',
          		'before_widget' => '',
          		'after_widget' => '',
          		'name' => 'Sidebar Area',
          		'id' => 'sidebar-1',
          		'description' => 'Sidebar Widget Area'

          	)

          );

}

add_action('widgets_init', 'portfoliotheme_widget_areas');

?>

