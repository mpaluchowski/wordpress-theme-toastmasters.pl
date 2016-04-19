<?php

function toastmasterspl_setup() {
	add_theme_support( 'title-tag' );

	register_nav_menus( array(
		'organization-breadcrumb'  => __( 'Organization Breadcrumb Menu', 'toastmasterspl' ),
	) );
}
add_action( 'after_setup_theme', 'toastmasterspl_setup' );

function toastmasterspl_scripts() {
	wp_enqueue_style( 'toastmasterspl-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'toastmasterspl_scripts' );

require get_template_directory() . '/inc/Organization_Breadcrumb_Walker.php';
