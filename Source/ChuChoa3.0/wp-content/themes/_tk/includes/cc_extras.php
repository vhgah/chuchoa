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
function cc_get_footer_Chungnhan() {
	return get_theme_mod( 'cc_footer_section_ChungNhan' );
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
		$arg_coupon = array(
			'posts_per_page' => 1,
			'post_type' => 'shop_coupon',
			'nopaging' => true,
			'post_status' => ['publish'],
			'meta_query' => array(
				array(
				   'key'     => 'product_ids',
				   'value'   => $latest_product->get_id(),
				   'compare' => 'LIKE'
				)
			 )
		);
		$coupons = get_posts($arg_coupon);
		$coupon = "";
		if (count($coupons) > 0) {
			$coupon = $coupons[0]->post_excerpt;
		}
		
		$results[] = [
			'url' => get_permalink($latest_product->get_id()),
			'excerpt' => $latest_product->short_description,
			'image_url' => wp_get_attachment_image_src($latest_product->get_image_id(), 'full', false)[0],
			'title' => $latest_product->get_title(),
			'hot' => $latest_product->get_regular_price() > $latest_product->get_price(),
			'price' => $latest_product->get_price(),
			'tags' => $latest_product->get_tags(),
			'coupone' => $coupon,
			'tinh_trang' => $latest_product->get_attribute('tinh-trang'),
			'so_km' => $latest_product->get_attribute('so-km-da-di'),
			'hop_so' => $latest_product->get_attribute('hop-so'),
			'dia_diem' => $latest_product->get_attribute('dia-diem'),
		];
	}

	return $results;
}

function cc_get_most_view_products(){
	$args = array(
		'post_type'  => 'product', 
		'order'     => 'DESC',
		'meta_key' => 'post_views_count',
		'orderby'   => 'meta_value',
		'posts_per_page' => 3,
		'nopaging' => true,
		'post_status' => ['publish'],
		'meta_query' => array(
			array(
				'key' => 'post_views_count',
				'value' => 0,
				'type' => 'numeric',
				'compare' => '>'
			)
		)
	);
	
	$query = new WP_Query($args); 
	$results = [];
	if ($query->have_posts()){
		while ($query->have_posts()) {
			$query->the_post();
			$product = wc_get_product(get_the_ID());

			$arg_coupon = array(
				'posts_per_page' => 1,
				'post_type' => 'shop_coupon',
				'nopaging' => true,
				'post_status' => ['publish'],
				'meta_query' => array(
					array(
					   'key'     => 'product_ids',
					   'value'   => $product->get_id(),
					   'compare' => 'LIKE'
					)
				 )
			);
			$coupons = get_posts($arg_coupon);
			$coupon = "";
			if (count($coupons) > 0) {
				$coupon = $coupons[0]->post_excerpt;
			}
			
			$results[] = [
				'url' => get_permalink($product->get_id()),
				'excerpt' => $product->short_description,
				'image_url' => wp_get_attachment_image_src($product->get_image_id(), 'full', false)[0],
				'title' => $product->get_title(),
				'hot' => $product->get_regular_price() > $product->get_price(),
				'price' => $product->get_price(),
				'tags' => $product->get_tags(),
				'coupone' => $coupon,
				'tinh_trang' => $product->get_attribute('tinh-trang'),
				'so_km' => $product->get_attribute('so-km-da-di'),
				'hop_so' => $product->get_attribute('hop-so'),
				'dia_diem' => $product->get_attribute('dia-diem'),
			];
		}
	}
	
	return $results;
}

function cc_get_thuong_hieu(){
	$query = new WP_Query( [
		'post_type' => 'cc_thuonghieu',
		'orderby' => ['ID' => 'ASC'],
		'nopaging' => true,
		'post_status' => ['publish'],
	] );

	$results = [];

	if ($query->have_posts()){
		while ($query->have_posts()) {
			$query->the_post();
			$results[] = [
				'title' => get_the_title(),
				'url'	=> get_permalink(get_the_ID()),
				'tags' =>  wp_get_post_terms(get_the_ID(), 'dong_xe') ,
			];
		}
	}

	return $results;
}