<?php
define( 'THEME_PATH' ,          get_template_directory()            );
define( 'THEME_URL' ,           get_template_directory_uri()        );
define( 'CSS_URL' ,             THEME_URL .    '/css'       );
define( 'JS_URL' ,              THEME_URL .    '/js'      );

function wpc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}

add_filter('upload_mimes', 'wpc_mime_types');

foreach ( glob( THEME_PATH . "/inc/*.php" ) as $file ) {
	include_once $file;
}

function ajout_scripts() {

	// Script
	wp_register_script('main_script', get_template_directory_uri() . '/assets/js/app.min.js', '', false, true);
	wp_enqueue_script('main_script');

	// Style
	wp_register_style( 'main_style', get_template_directory_uri() . '/assets/css/app.min.css' );
	wp_enqueue_style( 'main_style' );

	// Typos
	wp_register_style( 'style-font', 'https://fonts.googleapis.com/css?family=Roboto:400,400i,700' );
	wp_enqueue_style('style-font');
}

add_action( 'wp_enqueue_scripts', 'ajout_scripts' );

function wpdocs_custom_excerpt_length( $length ) {
	return 7;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
