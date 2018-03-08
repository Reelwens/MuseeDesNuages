<?php

function ajout_custom_type_init() {

	$post_type = "collection";
	$labels = array(
		'name'               => 'Collections',
		'singular_name'      => 'Collection',
		'all_items'          => 'Toutes les collections',
		'add_new'            => 'Ajouter une collection',
		'add_new_item'       => 'Ajouter une collection',
		'edit_item'          => "Modifier la collection",
		'new_item'           => 'Nouvelle collection',
		'view_item'          => "Voir la collection",
		'search_items'       => 'Chercher une collection',
		'not_found'          => 'Aucun résultat',
		'not_found_in_trash' => 'Aucun résultat',
		'parent_item_colon'  => 'Collections parents :',
		'menu_name'          => 'Collections',
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
add_action( 'init', 'ajout_custom_type_init' );
