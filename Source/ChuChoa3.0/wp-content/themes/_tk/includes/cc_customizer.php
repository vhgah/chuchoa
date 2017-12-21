<?php
/**
 * _tk Theme Customizer
 *
 * @package _tk
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

add_action( 'customize_register', function ( $wp_customize ) {
	// Remove default
    $wp_customize->remove_section( 'static_front_page' );

    $wp_customize->add_section( '' , array(
		'title' => __( 'Ảnh menu bên trái', '_tk' ),
		'priority' => 20,
    ) );
    
    $wp_customize->add_setting( 'site_header_section__image', array(
		'transport' => 'postMessage',
		'sanitize_callback' => 'cc_site_header_image_selected',
	) );
    
    $wp_customize->add_control( 'site_header_section__image', [
		'label' => __( 'Chọn ảnh', '_tk' ),
		'type' => 'url',
		'section' => 'header_image',
		'settings' => 'site_header_section__image',
		'priority' => 60,
	] );	
} );
