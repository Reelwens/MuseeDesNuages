<?php

function add_services() {

	$post_type = "services";
	$labels = array(
		'name'               => 'Prestations',
		'singular_name'      => 'Prestation',
		'all_items'          => 'Toutes les prestations',
		'add_new'            => 'Ajouter une prestation',
		'add_new_item'       => 'Ajouter une prestation',
		'edit_item'          => "Modifier la prestation",
		'new_item'           => 'Nouvelle prestation',
		'view_item'          => "Voir la prestation",
		'search_items'       => 'Chercher une prestation',
		'not_found'          => 'Aucun résultat',
		'not_found_in_trash' => 'Aucun résultat',
		'parent_item_colon'  => 'Prestations parents :',
		'menu_name'          => 'Prestations',
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'supports'            => array( 'title','thumbnail','editor', 'excerpt', 'trackbacks', 'comments', 'revisions', 'page-attributes', 'post-formats' ),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-art',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => false,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => array( 'slug' => $post_type )
	);

	register_post_type($post_type, $args );
}
add_action( 'init', 'add_services' );
