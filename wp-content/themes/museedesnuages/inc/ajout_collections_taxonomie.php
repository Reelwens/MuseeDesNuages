<?php

add_action( 'init', 'create_collection_tax' );

function create_collection_tax() {
	register_taxonomy(
		'genre',
		'collection',
		array(
			'label' => __( 'Genre' ),
			'rewrite' => array( 'slug' => 'genre' ),
			'hierarchical' => true,
		)
	);
}