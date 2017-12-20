<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package cc
 */

 /**
 * Adds custom classes to the array of body classes.
 */
function cc_body_classes( $classes ) {
	return [];
}
add_filter( 'body_class', 'cc_body_classes' );

function wp_nav_menu_no_ul()
{
    $options = array(
        'echo' => false,
        'container' => false,
        'theme_location' => 'primary',
        'fallback_cb'=> 'fall_back_menu'
    );

    $menu = wp_nav_menu($options);
    echo preg_replace(array(
        '#^<ul[^>]*>#',
        '#</ul>$#'
    ), '', $menu);

}

function fall_back_menu(){
    return;
}