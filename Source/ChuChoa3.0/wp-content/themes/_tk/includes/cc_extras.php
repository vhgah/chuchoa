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