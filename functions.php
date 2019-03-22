<?php

// ADD THEME SUPPORT
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ]);
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );

// CUSTOMIZER SUPPORT
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );

// LOAD CSS FILE
function wpfromscratchwptheme_enqueue_styles() {

    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all' );

}

add_action( 'wp_enqueue_scripts', 'wpfromscratchwptheme_enqueue_styles' );

// REGISTER MENU LOCATIONS
register_nav_menus( [
    'main-menu'         => esc_html__( 'Main Menu', 'wpfromscratchwptheme' ),
    'footer-menu'       => esc_html__( 'Footer Menu', 'wpfromscratchwptheme' )
] );

// SETUP WIDGET AREA
function wpfromscratchwptheme_widget_init() {

    register_sidebar( [
        'name'          => esc_html__( 'Main Sidebar', 'wpfromscratchwptheme' ),
        'id'            => 'main-sidebar',
        'description'   => esc_html__( 'Main widget area.', 'wpfromscratchwptheme' ),
        'before-widget' => '<section class="main-widget">',
        'after-widget'  => '</section>',
        'before-title'  => '<h2 class="widget-title">',
        'after-title'   => '</h2>'
    ] );

    register_sidebar( [
        'name'          => esc_html__( 'Footer Sidebar', 'wpfromscratchwptheme' ),
        'id'            => 'footer-sidebar',
        'description'   => esc_html__( 'Footer widget area.', 'wpfromscratchwptheme' ),
        'before-widget' => '<section class="footer-widget">',
        'after-widget'  => '</section>',
        'before-title'  => '<h2 class="widget-title">',
        'after-title'   => '</h2>'
    ] );
}

add_action( 'widgets_init',  'wpfromscratchwptheme_widget_init' );
