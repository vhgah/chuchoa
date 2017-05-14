<?php
/**
 * Implementation of extended functions
 *
 * @package ChuChoa
 */

add_action( 'save_post', function ( $post_id ) {
	$is_top_news = isset( $_POST['is_top_news'] ) ? absint( $_POST['is_top_news'] ) : 0;
	update_post_meta( $post_id, '_chuchoa_is_top_news', $is_top_news );

	$cate_main = isset( $_POST['cate_main'] ) ? absint( $_POST['cate_main'] ) : 0;
	update_post_meta( $post_id, '_chuchoa_cate_main', $cate_main );
} );


/**
 * Removes the regular excerpt box. We're not getting rid
 * of it, we're just moving it above the wysiwyg editor
 */
add_action( 'admin_menu' , function () {
	remove_meta_box( 'postexcerpt' , 'post' , 'normal' );
} );

/**
 * Add the excerpt meta box back in with a custom screen location
 */
add_action( 'add_meta_boxes', function ( $post_type ) {
	if ( 'post' === $post_type ) {
		add_meta_box(
			'chuchoa_postexcerpt',
			__( 'Excerpt' ),
			'post_excerpt_meta_box',
			$post_type,
			'after_title',
			'high'
		);

		add_meta_box(
			'top-news',
			__( 'Tin nổi bật', 'chu-choa' ),
			function ( $post ) {
				$is_top_news = get_post_meta( $post->ID, '_chuchoa_is_top_news', true );
				echo '<label for="is_top_news">' . esc_html__( 'Hiển thị trên tin nổi bật', 'chu-choa' ) . ': </label>';
				echo '<input type="checkbox" id="is_top_news" name="is_top_news" value="1"' . ( $is_top_news ? ' checked' : '' ) . '>';
			},
			'post',
			'after_title',
			'high'
		);

		add_meta_box(
			'Category-Main',
			__( 'Chuyên mục chính', 'chu-choa' ),
			function ( $post ) {
				$cate_main = get_post_meta( $post->ID, '_chuchoa_cate_main', true );
				echo '<label for="cate_main">' . esc_html__( 'Chuyên mục chính', 'chu-choa' ) . ': </label>';
				wp_dropdown_categories(array('id'=>'cate_main', 'name'=>'cate_main', 'selected'=>$cate_main, 'depth' => 0, 'hide_if_empty' => false, 'hierarchical' => 1,));
			},
			'post',
			'after_title',
			'high'
		);
	}
} );

/**
 * You can't actually add meta boxes after the title by default in WP so
 * we're being cheeky. We've registered our own meta box position
 * `after_title` onto which we've regiestered our new meta boxes and
 * are now calling them in the `edit_form_after_title` hook which is run
 * after the post tile box is displayed.
 */
add_action( 'edit_form_after_title', function () {
	global $post;
	do_meta_boxes( get_current_screen(), 'after_title', $post );
} );

function chuchoa_site_url($path){
	return home_url().$path;
}

function chuchoa_is_default_language(){
	if ( ! function_exists( 'pll_default_language' )
		|| !function_exists( 'pll_current_language' ) ) {
		return true;
	}

	return pll_default_language() == pll_current_language();
}

function chuchoa_get_category($id){
	if ( ! $id ) {
		return $id;
	}

	if ( is_object( $id ) && isset( $id->cat_ID ) ) {
		$id = $id->cat_ID;
	}

	$category = get_category( $id );

	if ( ! function_exists( 'pll_get_term' ) ) {
		return $category;
	}

	$is_default_lang = chuchoa_is_default_language();
	$default_lang = function_exists( 'pll_default_language' ) ? pll_default_language() : 'vi';

	if ( ! $category ) {
		return null;
	}

	if ( ! $is_default_lang ) {
		$tran_id = pll_get_term( $category->cat_ID, $default_lang );
		if ( $tran_id ) {
			$tran_category = get_category( $tran_id );

			if ( $tran_category ) {
				$category = $tran_category;
			}
		}
	}

	return $category;
}

function chuchoa_get_category_main( $postid ){
	if ( ! $postid ) {
		return $postid;
	}

	if ( is_object( $postid ) && isset( $postid->ID ) ) {
		$postid = $postid->ID;
	}

	$categoryid = get_post_meta( $postid, '_chuchoa_cate_main', true );
	$category = get_category($categoryid);
	if (!$category){
		$categoryid = $postid;
		$category = get_category($categoryid);
	}

	if ( ! function_exists( 'pll_get_term' ) ) {
		return $category;
	}

	$is_default_lang = chuchoa_is_default_language();
	$default_lang = function_exists( 'pll_default_language' ) ? pll_default_language() : 'vi';

	if ( ! $category ) {
		return null;
	}

	if ( ! $is_default_lang ) {
		$tran_id = pll_get_term( $category->cat_ID, $default_lang );
		if ( $tran_id ) {
			$tran_category = get_category( $tran_id );

			if ( $tran_category ) {
				$category = $tran_category;
			}
		}
	}

	return $category;
}

function chuchoa_get_category_by_slug($slug){
	$category = get_category_by_slug( $slug );

	if ( ! function_exists( 'pll_get_term' ) ) {
		return $category;
	}

	$is_default_lang = chuchoa_is_default_language();

	if ( ! $category ) {
		return null;
	}

	if ( ! $is_default_lang ) {
		$tran_id = pll_get_term( $category->cat_ID );
		if ( $tran_id ) {
			$tran_category = get_category( $tran_id );

			if ( $tran_category ) {
				$category = $tran_category;
			}
		}
	}

	return $category;
}

function chuchoa_get_category_by_id( $id ) {
	$category = get_category( $id );

	if ( ! function_exists( 'pll_get_term' ) ) {
		return $category;
	}

	$is_default_lang = chuchoa_is_default_language();

	if ( ! $category ) {
		return null;
	}

	if ( ! $is_default_lang ) {
		$tran_id = pll_get_term( $category->cat_ID );
		if ( $tran_id ) {
			$tran_category = get_category( $tran_id );

			if ( $tran_category ) {
				$category = $tran_category;
			}
		}
	}

	return $category;
}

function chuchoa_get_hot_news($limit = 10){
	$slug = 'tam-diem';

	$category = chuchoa_get_category_by_slug( $slug );

	if ( ! $category ) {
		return new WP_Query;
	}

	return new WP_Query( array(
		'category_name' => $category->slug,
		'posts_per_page' => $limit,
		'no_found_rows' => true,
		'post_status' => 'publish',
		'orderby' => array( 'date' => 'DESC' ),
	) );
}

function chuchoa_get_hot_category($root_cate){
	$category = chuchoa_get_category_by_slug( $root_cate );

	if ( ! $category ) {
		return new WP_Query;
	}

	return new WP_Query( array(
		'category_name' => $category->slug,
		'no_found_rows' => true,
		'post_status' => 'publish',
		'orderby' => array( 'date' => 'DESC' ),
	) );
}

function chuchoa_get_current_cat_ID(){
	if (is_category()){
		$category = get_category( get_query_var( 'cat' ) );
		return $category->cat_ID;
	}
	if (is_single()){
		return $_POST;
	}

	return null;
}

function chuchoa_get_subcategory($parent_cate_ID){	
	$cats = get_categories( array ('child_of' => $parent_cate_ID, 'hide_if_empty' => false, ));	
	$list_cats = array();
	
	foreach($cats as $c){
		array_push($list_cats, $c->term_id);
	}

	return $list_cats;
}

function chuchoa_get_hot_post_in_categories($cateID){
	$hot_cate = chuchoa_get_category_by_slug("tam-diem");

	if (!$hot_cate)
		$hot_cate = -1;

	return get_posts(array('category__and'=>array($hot_cate->cat_ID, $cateID)));
}

function chuchoa_get_post_in_time($cat_id, $query_date, $limit = 10){
	$query_args = array(
		'posts_per_page' => $limit,
		'orderby' => array( 'date' => 'DESC' ),
		'cat' => $cat_id,
		'date_query' => $query_date,
	);

	return new WP_Query( $query_args );
}

function chuchoa_get_first_post_each_cat(){
	$root_cat = chuchoa_get_category_by_slug("tin-tuc");
	$list_cats = chuchoa_get_subcategory($root_cat->cat_ID);

	$news_query  = new WP_Query;
	$list_post = array();

	foreach ( $list_cats as $scat ) {		
		$news_query->query( array(
			'cat'                 => $scat,
			'posts_per_page'      => 1,
			'post_type' => 'post',
			'no_found_rows'       => true,
			'post__not_in' => $list_post,
		));
		if ( $news_query->have_posts() ) {
			$news_query->the_post();
			array_push($list_post, get_the_ID());
		}		
		wp_reset_postdata();
	}

	return $list_post;
}