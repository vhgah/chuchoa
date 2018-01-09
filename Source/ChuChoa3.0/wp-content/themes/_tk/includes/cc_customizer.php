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

	// Logo o ben trai
	$wp_customize->add_setting( 'site_header_setting__image', array(
	) );

	$wp_customize->add_control( 
			new WP_Customize_Upload_Control( 
			$wp_customize, 
			'site_header_control__image', 
			array(
					'label'      => __( 'Chọn ảnh bên trái', '_tk' ),
					'section'    => 'header_image',
					'settings'   => 'site_header_setting__image',
			) ) 
	);

	// footer
	$wp_customize->add_section( 'cc_footer_section' , [
		'title' => __( 'Nội dung chân trang', '_tk' ),
		'priority' => 70,
	] );
	$wp_customize->add_setting( 'cc_footer_section_address', [
	] );
	$wp_customize->add_control( 'cc_footer_section_address', [
		'label' => __( 'Địa chỉ', '_tk' ),
		'type' => 'text',
		'section' => 'cc_footer_section',
		'settings' => 'cc_footer_section_address',
		'priority' => 71,
	] );
	$wp_customize->add_setting( 'cc_footer_section_tel', [
	] );
	$wp_customize->add_control( 'cc_footer_section_tel', [
		'label' => __( 'Điện thoại', '_tk' ),
		'type' => 'text',
		'section' => 'cc_footer_section',
		'settings' => 'cc_footer_section_tel',
		'priority' => 72,
	] );
	$wp_customize->add_setting( 'cc_footer_section_Email', [
	] );
	$wp_customize->add_control( 'cc_footer_section_Email', [
		'label' => __( 'Email', '_tk' ),
		'type' => 'text',
		'section' => 'cc_footer_section',
		'settings' => 'cc_footer_section_Email',
		'priority' => 73,
	] );
	$wp_customize->add_setting( 'cc_footer_section_ChungNhan', [
	] );
	$wp_customize->add_control( 'cc_footer_section_ChungNhan', [
		'label' => __( 'Giấy CN', '_tk' ),
		'type' => 'text',
		'section' => 'cc_footer_section',
		'settings' => 'cc_footer_section_ChungNhan',
		'priority' => 74,
	] ); 
});

function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return 0;
    }
    return $count;
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, 0);
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
// Remove issues with prefetching adding extra views
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

// add_filter('wpcf7_form_elements', function($content) {
//     $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

//     return $content;
// });