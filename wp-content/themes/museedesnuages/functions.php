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

	// Script (first for dev env)
	//wp_register_script('main_script', 'http://localhost/wp-content/themes/museedesnuages/assets/js/app.min.js', '', false, true);
	wp_register_script('main_script', get_template_directory_uri() . '/assets/js/app.min.js', '', false, true);
	wp_enqueue_script('main_script');

	// Style (first for dev env)
	//wp_register_style( 'main_style', 'http://localhost/wp-content/themes/museedesnuages/assets/css/app.min.css' );
	wp_register_style( 'main_style', get_template_directory_uri() . '/assets/css/app.min.css' );
	wp_enqueue_style( 'main_style' );

	// Typos
	wp_register_style( 'style-font', 'https://fonts.googleapis.com/css?family=Nunito:400,700,900|Source+Sans+Pro:200,300,400,600' );
	wp_enqueue_style('style-font');
}

add_action( 'wp_enqueue_scripts', 'ajout_scripts' );

function wpdocs_custom_excerpt_length( $length ) {
	return 7;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// Remove useless menus
function bbx_admin_remove_menus()
{
    remove_menu_page('upload.php');
    remove_menu_page('admin.php?page=wpcf7');
    remove_menu_page('themes.php');
    //remove_menu_page('users.php');
    remove_menu_page('plugins.php');
    remove_menu_page('tools.php');
    remove_menu_page('edit-comments.php');
    remove_menu_page('admin.php?page=flamingo');
    remove_menu_page('admin.php?page=wpcf7'); // Configuration du champ de contact
    remove_menu_page('edit.php?post_type=acf-field-group'); // Configuration des champs ACF
    remove_menu_page('admin.php?page=feed-them-settings-page'); // Configurtation des r�seeaux sociaux
    remove_menu_page('admin.php?page=mb_email_configuration'); // Configuration de l'envoi de mail
}
add_action( 'admin_menu', 'bbx_admin_remove_menus' );


//SYNTAXE register_nav_menu( 'slug', 'Titre à afficher dans le BO' )
add_action( 'after_setup_theme', 'menus_du_themes' );
function menus_du_themes() {
  register_nav_menu( 'header', 'Menu entête' );
}
