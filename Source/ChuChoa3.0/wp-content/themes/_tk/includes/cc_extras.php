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

function cc_get_menu($locate){
    $locations = get_nav_menu_locations();

	$menus = [];
	if ( isset( $locations[$locate] ) && ( $menu_id = $locations[$locate] ) ) {
		$menus = wp_get_nav_menu_items( $menu_id ) ?: [];
	}

	return $menus;
}

function cc_site_header_image_selected( $url_text ) {
	
}