<?php

function ajout_custom_type_news() {

	$post_type = "news";
	$labels = array(
		'name'               => 'Actualités',
		'singular_name'      => 'Actualité',
		'all_items'          => 'Toutes les actualités',
		'add_new'            => 'Ajouter une actualité',
        'add_new_item'       => 'Ajouter une actualité',
		'edit_item'          => "Modifier l'actualité",
		'new_item'           => 'Nouvelle actualité',
		'view_item'          => "Voir l'actualité",
		'search_items'       => 'Chercher une actualité',
		'not_found'          => 'Aucun résultat',
		'not_found_in_trash' => 'Aucun résultat',
		'parent_item_colon'  => 'Actualités parents :',
		'menu_name'          => 'Actualités',
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'supports'            => array( 'title','thumbnail','editor', 'excerpt', 'trackbacks', 'comments', 'revisions', 'page-attributes', 'post-formats' ),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-format-aside',
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
add_action( 'init', 'ajout_custom_type_news' );
