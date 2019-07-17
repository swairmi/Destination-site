<?php
add_theme_support('menus');
add_theme_support('post-thumbnails');

function register_theme_menus() {

register_nav_menus(
array(
	'primary-menu' => __( 'Primary Menu'),
)
);
}
add_action( 'init', 'register_theme_menus' );



function wpt_theme_styles(){
	wp_enqueue_style( 'main_css', get_stylesheet_directory_uri() . '/offers.css');
	wp_enqueue_style( 'foundation_css', get_stylesheet_directory_uri() . '/foundation.css');
	wp_enqueue_style( 'normalize_css', get_stylesheet_directory_uri() . '/normalize.css');

	if( is_page_template( 'about.php') ){
		wp_enqueue_style( 'about_css', get_stylesheet_directory_uri() . '/abouttt.css' );
	}
	if( is_page_template( 'landingpage.php') ){
		wp_enqueue_style( 'style_css', get_stylesheet_directory_uri() . '/style.css' );
	}
	if( is_page_template( 'news.php') ){
		wp_enqueue_style( 'news_css', get_stylesheet_directory_uri() . '/news.css' );
	}
	
wp_enqueue_style( 'style_css', get_template_directory_uri() . '/style.css');	

}
add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

