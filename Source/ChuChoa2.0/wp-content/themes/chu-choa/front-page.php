<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 */

get_header(); 
$first_post_each_cat = chuchoa_get_first_post_each_cat();
$root_cat = chuchoa_get_category_by_slug("tin-tuc");
$sub_cats = chuchoa_get_subcategory($root_cat->cat_ID);
?>

<div class="row no-breadcrumb">
</div>

<div class="row">
    <div class="col-md-8 col-sm-7">
        <?php if ($first_post_each_cat){ 
            $fpost = get_post($first_post_each_cat[0]);
            $url = wp_get_attachment_url( get_post_thumbnail_id($fpost->ID), 'thumbnail' );
            $news_thumbnail = has_post_thumbnail($fpost->ID) ? $url : get_theme_file_uri( '/assets/images/news/default-news.jpg' );
        ?>
            <div class="panel panel-primary panel-hot-news">        
                <div class="panel-body article">
                    <div class="article-media">
                        <a href="<?php echo get_permalink($fpost->ID); ?>"><div class="hoverNews">		 			                        <figure><img src="<?php echo $news_thumbnail; ?>" alt="" /></figure>                             </div></a>

                        <div class="article-content">
                            <h2 class="article-content-headline">
                                <a href="<?php echo get_permalink($fpost->ID); ?>"><?php echo $fpost->post_title; ?></a>
                            </h2>
                            <p class="article-excerpt">
                                <?php echo $fpost->post_excerpt; ?>
                            </p>
                        </div>
                    </div>
                </div>

                <ul class="list-group">
                    <?php for ($i = 1; $i < count($first_post_each_cat); $i++) {
                        $p = get_post($first_post_each_cat[$i]);
                    ?>
                        <li class="list-group-item"><a href="<?php echo get_permalink($p->ID); ?>"><?php echo $p->post_title; ?></a></li>
                    <?php } ?>
                </ul>
            </div>        
        <?php } ?>
        
    </div>

    <div class="col-md-4 col-sm-5">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php for ($i = 0; $i < count($sub_cats); $i++) {
    $sc = get_category( $sub_cats[$i]);
    $lst_posts = chuchoa_get_hot_post_in_categories($sub_cats[$i]);  
    if ($i % 3 == 0){           
        if ($lst_posts){
            $first_post = $lst_posts[0];
            $url = wp_get_attachment_url( get_post_thumbnail_id($first_post->ID), 'thumbnail' );
            $news_thumbnail = has_post_thumbnail($first_post->ID) ? $url : get_theme_file_uri( '/assets/images/news/default-news.jpg' );
        
    ?>
        <div class="row">
            <div class="col-md-5 col-md-push-3 col-xs-12">
                <div class="panel panel-primary panel-subhots-news">
                    <div class="panel-body article">
                        <div class="article-media">
                            <a href="<?php echo get_permalink($first_post->ID); ?>"><div class="hoverNews">		 			                        <figure><img src="<?php echo $news_thumbnail; ?>" alt="" /></figure>                             </div></a>

                            <div class="article-content">
                                <h2 class="article-content-headline">
                                    <a href="<?php echo get_permalink($first_post->ID); ?>"><?php echo $first_post->post_title; ?></a>
                                </h2>
                                <p class="article-excerpt">
                                    <?php echo $first_post->post_excerpt; ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="list-group">
                        <?php for ($j = 1; $j < count($lst_posts); $j++) {
                            $p = $lst_posts[$j];
                            $url = wp_get_attachment_url( get_post_thumbnail_id($p->ID), 'thumbnail' );
                            $news_thumbnail = has_post_thumbnail($p->ID) ? $url : get_theme_file_uri( '/assets/images/news/default-news.jpg' );
                        ?>
                            <div class="row list-group-item article-media">
                                <div class="col-md-4">
                                    <a href="<?php get_permalink($p->ID); ?>"><div class="hoverNews">		 			                        <figure><img src="<?php echo $news_thumbnail; ?>" alt="" /></figure>                             </div></a>
                                </div>

                                <div class="col-md-8 article-content">
                                    <h2 class="article-content-headline">
                                        <a href="<?php get_permalink($p->ID); ?>"><?php echo $p->post_title; ?></a>
                                    </h2>
                                </div>
                            </div>
                        <?php } ?>                        
                    </div>
                </div>
            </div>
    <?php }
    }
    if ($i % 3 == 1){ ?>
        <div class="col-md-3 col-md-pull-5 col-xs-6">
    <?php
        if ($lst_posts){
            $first_post = $lst_posts[0];
            $url = wp_get_attachment_url( get_post_thumbnail_id($first_post->ID), 'thumbnail' );
            $news_thumbnail = has_post_thumbnail($first_post->ID) ? $url : get_theme_file_uri( '/assets/images/news/default-news.jpg' );
    ?>
            <div class="panel panel-primary panel-news">
                <div class="panel-heading">
                    <?php echo $sc->name; ?>
                    <a class="pull-right" href="<?php echo get_category_link($sc); ?>"><span class="fa fa-chevron-right"></span></a>
                </div>
                <div class="panel-body article">
                    <div class="article-media">
                        <a href="<?php echo get_permalink($first_post->ID); ?>"><div class="hoverNews">		 			                        <figure><img src="<?php echo $news_thumbnail; ?>" alt="" /></figure>                             </div></a>
                    </div>
                    <div class="article-content">
                        <h3 class="article-content-headline">
                            <a href="<?php echo get_permalink($first_post->ID); ?>"><?php echo $first_post->post_title; ?></a>
                        </h3>
                    </div>
                </div>

                <ul class="list-group">
                    <?php for ($j = 1; $j < count($lst_posts); $j++) {
                        $p = get_post($lst_posts[$j]);
                    ?>
                        <li class="list-group-item"><a href="<?php echo get_permalink($p->ID); ?>"><?php echo $p->post_title; ?></a></li>
                    <?php } ?>                    
                </ul>
            </div>
    <?php        
        }
    ?>
        </div>
    <?php }
    if ($i % 3 == 2){ ?>
        <div class="col-md-4 col-xs-6">
        <?php
            if ($lst_posts){
                $first_post = $lst_posts[0];
                $url = wp_get_attachment_url( get_post_thumbnail_id($first_post->ID), 'thumbnail' );
                $news_thumbnail = has_post_thumbnail($first_post->ID) ? $url : get_theme_file_uri( '/assets/images/news/default-news.jpg' );
        ?>
            <div class="panel panel-primary panel-news">
                <div class="panel-heading">
                    <?php echo $sc->name; ?>
                    <a class="pull-right" href="<?php echo get_category_link($sc); ?>"><span class="fa fa-chevron-right"></span></a>
                </div>
                <div class="panel-body article">
                    <div class="article-media">
                        <a href="<?php echo get_permalink($first_post->ID); ?>"><div class="hoverNews">		 			                        <figure><img src="<?php echo $news_thumbnail; ?>" alt="" /></figure>                             </div></a>
                    </div>
                    <div class="article-content">
                        <h3 class="article-content-headline">
                            <a href="<?php echo get_permalink($first_post->ID); ?>"><?php echo $first_post->post_title; ?></a>
                        </h3>
                    </div>
                </div>

                <ul class="list-group">
                    <?php for ($j = 1; $j < count($lst_posts); $j++) {
                        $p = get_post($lst_posts[$j]);
                    ?>
                        <li class="list-group-item"><a href="<?php echo get_permalink($p->ID); ?>"><?php echo $p->post_title; ?></a></li>
                    <?php } ?>                    
                </ul>
            </div>
   <?php        
        }
    ?>
        </div>
    <?php }
} ?>

<?php get_footer();
