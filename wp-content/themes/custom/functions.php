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
