<?php

function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

register_nav_menus( [ 'primary' => __( 'Primary Menu' ) ] );

add_action( 'widgets_init', 'sidebar_default' );
function sidebar_default() {
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Page sidebar' ),
            'description'   => __( 'Page sidebar' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}

add_theme_support( 'custom-header' );

$defaults = array(
	'default-image'          => 'http://localhost:8080/wp/wp-content/uploads/2019/05/wordpress.png',
	'width'                  => 960,
	'height'                 => 300,
	'flex-height'            => true,
	'flex-width'             => true,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => 'fff',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );

add_theme_support( 'custom_logo', array(
	'height'      => 156,
	'width'       => 340,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );
