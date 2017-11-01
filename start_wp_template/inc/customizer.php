<?php
/**
 * Created by PhpStorm.
 * User: Everad
 * Date: 01.11.2017
 * Time: 12:16
 */

function start_theme_customizer( $wp_customize ){
    $wp_customize->add_setting(
        'primary_color',
        array(
            'default'           => '#ff5c36'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'primary_color',
            array(
                'label'         => __('Primary color', 'start'),
                'section'       => 'colors',
                'priority'      => 9
            )
        )
    );
    $wp_customize->add_setting(
        'header_bg_color',
        array(
            'default'           => '#f5f5f5'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'header_bg_color',
            array(
                'label'         => __('Header background color', 'start'),
                'section'       => 'background_image',
                'priority'      => 9
            )
        )
    );
}
add_action( 'customize_register', 'start_theme_customizer' );