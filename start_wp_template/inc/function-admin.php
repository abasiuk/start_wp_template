<?php
/*
 *
 *
 * @starttheme
 * ADMIN PAGE
 *
 *
 *
 * */

function start_add_admin_page(){
    add_menu_page('Start Theme Options', 'StartTheme', 'manage_options', 'abasiuk_start', 'start_theme_create_page', get_template_directory_uri() . '/image/admin-icon.png', 110);

    add_submenu_page('abasiuk_start', 'Start Theme Options', 'Settings', 'manage_options', 'abasiuk_start', 'start_theme_create_page');

    add_action('admin_init', 'start_custom_settings');
}

add_action('admin_menu', 'start_add_admin_page');

function start_custom_settings(){
    register_setting('start-settings-group', 'activate_land');

    add_settings_section('start-main-options', 'Theme Options', 'start_main_options', 'abasiuk_start');

    add_settings_field('activate-land', 'Activate Landing Page as Home Page?', 'start_activate_page','abasiuk_start' ,'start-main-options');
}

//Land Main Settings

function start_activate_page(){
    $options = get_option( 'activate_land' );
    $checked = ( @$options == 1 ? 'checked' : '' );
    echo '<label><input type="checkbox" id="activate_land" name="activate_land" value="1" '.$checked.' /></label>';
}

function start_main_options() {
    echo 'Activate and Deactivate specific Theme Support Options';
}

// Template submenu functions
function start_theme_create_page(){
    //generation of our admin page
    require_once ( get_template_directory() . '/inc/templates/start-admin.php' );
}