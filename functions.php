<?php


function pustynnaburza_theme_support() {
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'pustynnaburza_theme_support');

function pustynnaburza_menus(){

	$locations = array(
		'primary' => "Główny górny pasek menu",
		'footer' => "Menu w stópce"
	);
	
	register_nav_menus($locations);
}

add_action('init', 'pustynnaburza_menus');

function pustynnaburza_register_styles() {

	$version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style('pustynnaburza-style', get_template_directory_uri() . "/style.css", array('pustynnaburza-bootstrap'), $version, 'all');
	wp_enqueue_style('pustynnaburza-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
}

add_action('wp_enqueue_scripts', 'pustynnaburza_register_styles');

function pustynnaburza_register_scripts() {

	wp_enqueue_script('pustynnaburza-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
	wp_enqueue_script('pustynnaburza-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
	wp_enqueue_script('pustynnaburza-main', get_template_directory_uri() .'/assets/js/main.js', array(), '1.0', true);
	if (is_front_page() == true) {
		wp_enqueue_script('pustynnaburza-frontpage-nav', get_template_directory_uri() .'/assets/js/frontnav.js', array(), '1.0', true);
		wp_enqueue_script('pustynnaburza-timer', get_template_directory_uri() .'/assets/js/timer.js', array(), '1.0', true);
	} 

	if(is_page_template('templates/qna.php') == true) {
		wp_enqueue_script('pustynnaburza-qna', get_template_directory_uri() .'/assets/js/qna.js', array(), '1.0', true);
	}

	if(is_page_template('templates/aktualnaedycja.php') == true) {
		wp_enqueue_script('pustynnaburza-timer', get_template_directory_uri() .'/assets/js/timer.js', array(), '1.0', true);
		wp_enqueue_script('pustynnaburza-quotes', get_template_directory_uri() .'/assets/js/quotes.js', array(), '1.0', true);
	}
}

add_action('wp_enqueue_scripts', 'pustynnaburza_register_scripts');

?>