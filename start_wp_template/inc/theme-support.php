<?php
/*
@package starttheme
    ========================
        THEME SUPPORT OPTIONS
    ========================
*/

function start_init_settings() {
    register_nav_menu( 'primary', 'Header Navigation Menu' );
    add_theme_support( 'custom-background' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'post-thumbnails' );
    //add_theme_support( 'post-formats', array ('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat') );
    $args = array(
        'width' => 350,
        'height' => 55,
        'flex-width' => false,
        'flex-height' => false,
        'header-text' => array('site-title')
    );
    add_theme_support('custom-logo', $args);
}
add_action( 'after_setup_theme', 'start_init_settings' );

function start_sidebar_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'starttheme'),
            'id' => 'start-sidebar',
            'description' => 'Dynamic Right Sidebar',
            'before_widget' => '<section id="%1$s" class="start-widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="start-widget-title">',
            'after_title' => '</h2>',
        )
    );
}
add_action('widgets_init', 'start_sidebar_init');