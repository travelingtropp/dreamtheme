<?php 

function wpt_register_js() {
    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
    wp_enqueue_script('jquery.bootstrap.min');
}
add_action( 'init', 'wpt_register_js' );
function wpt_register_css() {
    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap.min' );
}
add_action( 'wp_enqueue_scripts', 'wpt_register_css' );

 if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
    require_once get_template_directory . '/class-wp-bootstrap-navwalker.php';
}
    


function dream_script_enqueue() {
	//css
	
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/dream.css', array(), '1.0.0', 'all');
	
	//js
	
	wp_enqueue_script('customjs', get_template_directory_uri() . 'js/dream.js', array(), '1.0.0', true);
	wp_enqueue_script('jquery', '', array(), '', true);
}

add_action('wp_enqueue_scripts', 'dream_script_enqueue');



//menus


function dream_theme_setup() {

	add_theme_support('menus');

	register_nav_menu('Primary', 'Primary header navigation');
	register_nav_menu('Footer', 'Footer navigation');
	register_nav_menu('Social', 'Social Media navigation');
	register_nav_menu('Top', 'Top navigation');

}

add_action('init', 'dream_theme_setup');

add_theme_support('custom-header');



