<?php
function create_post_types () {
	register_post_type( 'medarbetare', array(
		'labels' => array(
			'name' => 'Medarbetare',
			'singular_name' => 'Medarbetare'
		),
		'public' => true,
		'supports' => array('title'),
		'menu_icon' => 'dashicons-groups'
	) );
	
	register_post_type( 'case', array(
		'labels' => array(
			'name' => 'Case',
			'singular_name' => 'Case'
		),
		'public' => true,
		'supports' => array('title', 'editor'),
		'menu_icon' => 'dashicons-portfolio'
	) );
}
add_action( 'init', 'create_post_types' );