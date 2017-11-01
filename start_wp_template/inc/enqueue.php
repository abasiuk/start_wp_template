<?php

/* Enqueue css and js */

function start_load_scripts(){
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6', 'all' );
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'start_load_scripts' );


function start_admin_scripts(){
    // подключаем свой файл скрипта
    wp_enqueue_script('admin.main', get_template_directory_uri() . '/js/admin.main.js', array(), false, true );
    wp_enqueue_style('admin.start', get_template_directory_uri() . '/css/admin.start.css', array(), false, 'all');
}
add_action( 'admin_enqueue_scripts', 'start_admin_scripts' );