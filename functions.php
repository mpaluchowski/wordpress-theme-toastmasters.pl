<?php

function toastmasterspl_setup() {
	add_theme_support( 'title-tag' );

	add_theme_support( 'custom-logo', array(
		'height' => 100,
		'width' => 100,
		'flex-height' => false,
		'flex-width' => true,
	) );

    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 1000, 9999 );

	register_nav_menus( array(
		'page-navigation'  => __( 'Primary Page Navigation Menu', 'toastmasterspl' ),
		'organization-breadcrumb'  => __( 'Organization Breadcrumb Menu', 'toastmasterspl' ),
	) );

	add_editor_style( array( 'css/editor-style.css' ) );
}
add_action( 'after_setup_theme', 'toastmasterspl_setup' );

function toastmasterspl_scripts() {
	wp_enqueue_style(
		'toastmasterspl-fontawesome',
		'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css',
		array(),
		null
		);

	wp_enqueue_style(
		'toastmasterspl-roboto',
		'https://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic&amp;subset=latin,latin-ext',
		array(),
		null
		);

	wp_enqueue_style( 'toastmasterspl-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'toastmasterspl_scripts' );

function toastmasterspl_the_custom_logo( $class = 'custom-logo' ) {
	$html = '';

	$custom_logo_id = get_theme_mod( 'custom_logo' );

	// We have a logo. Logo is go.
	if ( $custom_logo_id ) {
		$html = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
				'class'    => $class,
				'itemprop' => 'logo',
			)
		);
	}

	echo $html;
}

require get_template_directory() . '/inc/Customizable_Walker_Nav_Menu.php';
