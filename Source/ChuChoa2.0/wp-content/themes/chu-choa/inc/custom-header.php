<?php
/**
 * Implementation of the Custom Header feature
 *
 * @package ChuChoa
 */

function chuchoa_get_menus( $location ) {
	$locations = get_nav_menu_locations();

	if ( isset( $locations[ $location ] ) && ( $menu_id = $locations[ $location ] ) ) {
		$menus =  wp_get_nav_menu_items( $menu_id );

		return ( $menus ?: [] ); // avoid return false
	}

	return [];
}