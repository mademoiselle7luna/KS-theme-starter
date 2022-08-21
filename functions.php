<?php
require_once 'inc/classes/class-theme.php';
require_once 'inc/helpers/svg.php';
new Theme();

function team_members() {
	$args = [
		'labels'       => [
			'name'          => 'Team members',
			'singular_name' => 'Team member',
		],
		'hierarchical' => true,
		'public'       => true,
		'has_archive'  => true,
		'supports'     => [ 'title', 'editor', 'thumbnail' ],
	];

	register_post_type( 'team-member', $args );
}

add_action( 'init', 'team_members' );

function department_taxonomy() {
	$args = [
		'labels'       => [
			'name'          => 'Department',
			'singular_name' => 'department',
		],

		'public'       => true,
		'hierarchical' => true,

	];

	register_taxonomy( 'department', [ 'team-member' ], $args );
}
add_action( 'init', 'department_taxonomy' );
