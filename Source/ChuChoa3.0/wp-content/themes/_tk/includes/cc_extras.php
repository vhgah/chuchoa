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

function cc_get_footer_Email() {
	return get_theme_mod( 'cc_footer_section_Email' );
}

function cc_get_leftmenu_item_type_field($id){
	return get_post_meta( $id, 'menu-item-leftmenu_item_type_field', true );
}

function cc_get_sliders_frontpage(){
	return new WP_Query( [
		'post_type' => 'cc_sliders',
		'orderby' => ['ID' => 'DESC'],
		'nopaging' => true,
		'post_status' => ['publish'],
	] );
}

function cc_get_latest_products($number = 8){
	$args = array(
		'nopaging' => true,
		'orderby' => array( 'ID' => 'DESC' ),
		'posts_per_page' => $number,
		'post_status' => ['publish'],
	);

	$results = [];
	$latest_products = wc_get_products($args);

	if (is_null($latest_products))
		return [];

	foreach	($latest_products as $latest_product){
		$results[] = [
			'url' => get_permalink($latest_product->get_id()),
			'excerpt' => $latest_product->short_description,
			'image_url' => wp_get_attachment_image_src($latest_product->get_image_id(), 'full', false)[0],
			'title' => $latest_product->get_title(),
			'price' => $latest_product->price,
		];
	}

	return $results;
}