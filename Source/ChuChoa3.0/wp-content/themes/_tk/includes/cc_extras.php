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

function cc_get_site_home_image() {
	return get_theme_mod( 'site_header_setting__image' );
}

function cc_get_footer_address() {
	return get_theme_mod( 'cc_footer_section_address' );
}

function cc_get_footer_tel() {
	return get_theme_mod( 'cc_footer_section_tel' );
}

function cc_get_leftmenu_item_type_field($id){
	return get_post_meta( $id, 'menu-item-leftmenu_item_type_field', true );
}

function cc_get_sliders_frontpage(){
	return new WP_Query( [
		'post_type' => 'cc_sliders',
		'orderby' => ['ID' => 'DESC'],
		'numberposts' => 1,
		'nopaging' => true,
		'post_status' => ['publish'],
		'meta_query' => [ ['key' => '_thumbnail_id'] ],
	] );
}