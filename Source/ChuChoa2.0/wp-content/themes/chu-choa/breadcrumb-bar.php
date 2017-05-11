<?php
/**
 * The breadcrumb
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ChuChoa
 */
//  print("<pre>"); 
//  print_r(get_the_category( $post->ID ));
//  print("</pre>");
$current_cat = chuchoa_get_category_main($post);
?>

<div class="breadcrumb-wrapper">
    <ol class="breadcrumb">
        <li><a href="<?php echo home_url();?>"><span class="fa fa-home"></span></a></li>
        <?php if (is_category()){ ?>
                <li class='active'><?php echo single_cat_title(); ?></li>
        <?php } elseif (is_single()){ ?>
                <li><a href='<?php echo get_category_link($current_cat); ?>' ><?php echo $current_cat->name; ?></a></li>
                <li class='active'><?php echo single_post_title(); ?></li>
        <?php }; ?>
    </ol>
</div>