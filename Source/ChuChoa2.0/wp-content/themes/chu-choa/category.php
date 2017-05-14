<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 */

get_header(); 
get_template_part( 'breadcrumb-bar');

$current_cat = chuchoa_get_current_cat_ID();
$sub_cats = chuchoa_get_subcategory($current_cat);
$hot_posts = chuchoa_get_hot_post_in_categories($current_cat);
?>

<div class="row">
    <div class="col-md-8 col-sm-7">
        <?php if ($hot_posts){ 
            $first_hot_post = $hot_posts[0];
        ?>            
            <div class="panel panel-primary panel-subhots-news">
                <div class="panel-body article">
                    <div class="article-media">
                        <?php
                            $url = wp_get_attachment_url( get_post_thumbnail_id($first_hot_post->ID), 'thumbnail' );
                            $news_thumbnail = has_post_thumbnail($first_hot_post->ID) ? $url : get_theme_file_uri( '/assets/images/news/default-news.jpg' );
                        ?>
                        <a href="<?php echo get_permalink($first_hot_post->ID); ?>">
                            <div class="hoverNews">		
			                        <figure><img src="<?php echo $news_thumbnail; ?>" alt="" /></figure>
                            </div>
                        </a>

                        <div class="article-content">
                            <h2 class="article-content-headline">
                                <a href="<?php echo get_permalink($first_hot_post->ID); ?>"><?php echo $first_hot_post->post_title; ?></a>
                            </h2>
                            <p class="article-excerpt">
                                <?php echo $first_hot_post->post_excerpt; ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="list-group">
                    <?php
                        for ($i = 1; $i < count($hot_posts); $i++) {
                            $cur_post = $hot_posts[$i];

                            $url = wp_get_attachment_url( get_post_thumbnail_id($cur_post->ID), 'thumbnail' );
                            $news_thumbnail = has_post_thumbnail($cur_post->ID) ? $url : get_theme_file_uri( '/assets/images/news/default-news.jpg' );
                    ?>
                        <div class="row list-group-item article-media">
                            <div class="col-md-4">
                                <a href="<?php get_permalink($cur_post->ID); ?>">
                                    <div class="hoverNews">		
                                        <figure><img src="<?php echo $news_thumbnail; ?>" alt="" /></figure>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-8 article-content">
                                <h2 class="article-content-headline">
                                    <a href="<?php get_permalink($cur_post->ID); ?>"><?php echo $cur_post->post_title; ?></a>
                                </h2>                               
                            </div>
                        </div> 
                     <?php } ?>
                </div>
            </div>
        <?php }?>
    </div>

    <div class="col-md-4 col-sm-5">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php 
    if ($sub_cats){
        foreach($sub_cats as $sub_cat){
            $cur_week_query = array(
                                    array(
                                        'column' => 'post_date_gmt',
                                        'after' => '1 week ago',
                                    ),
                                );
            $list_posts_current_week = chuchoa_get_post_in_time($sub_cat, $cur_week_query);

            $old_post_query = array(
                                    array(
                                        'column' => 'post_date_gmt',
                                        'before' => '1 week ago',
                                    ),
                                );
            $list_posts_old = chuchoa_get_post_in_time($sub_cat, $old_post_query);
?>
    <div class="row">
        <div class="col-md-12 header-category-news">
            <h2 class="header-category-news-text">
                <?php echo get_category( $sub_cat)->name;?>
                <span class="header-category-news-stripes">&nbsp;</span>
            </h2>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12 content-category-news">
            <div class="col-md-6">
                <div class="panel panel-primary panel-subhots-news">
                    <?php 
                        if ($list_posts_current_week->have_posts()){
                            $list_posts_current_week->the_post();
                            $news_thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url() : get_theme_file_uri( '/assets/images/news/default-news.jpg' );
                    ?>
                            <div class="panel-body article">
                                <div class="article-media">
                                    <a href="<?php echo the_permalink();?>">
                                        <div class="hoverNews">		
                                                <figure><img src="<?php echo $news_thumbnail; ?>" alt="" /></figure>
                                        </div>
                                    </a>
                                    <div class="article-content">
                                        <h2 class="article-content-headline">
                                            <a href="<?php echo the_permalink();?>"><?php echo the_title(); ?></a>
                                        </h2>
                                        <p class="article-excerpt">
                                            <?php echo get_the_excerpt(); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>                    
                            <div class="list-group">
                                <?php while($list_posts_current_week->have_posts()){
                                        $list_posts_current_week->the_post(); 
                                        $news_thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url() : get_theme_file_uri( '/assets/images/news/default-news.jpg' );
                                ?>
                                        <div class="row list-group-item article-media">
                                            <div class="col-md-4">
                                                <a href="<?php echo the_permalink();?>">
                                                    <div class="hoverNews">		
                                                            <figure><img src="<?php echo $news_thumbnail; ?>" alt="" /></figure>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="col-md-8 article-content">
                                                <h2 class="article-content-headline">
                                                    <a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>
                                                </h2>
                                            </div>
                                        </div>
                                <?php } ?>
                            </div>
                    <?php               
                        }
                    ?>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-primary panel-subhots-news">
                    <?php 
                        if ($list_posts_old->have_posts()){
                            $list_posts_old->the_post();
                            $news_thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url() : get_theme_file_uri( '/assets/images/news/default-news.jpg' );
                    ?>
                            <div class="panel-body article">
                                <div class="article-media">
                                    <a href="<?php echo the_permalink();?>">
                                        <div class="hoverNews">		
                                                <figure><img src="<?php echo $news_thumbnail; ?>" alt="" /></figure>
                                        </div>
                                    </a>
                                    <div class="article-content">
                                        <h2 class="article-content-headline">
                                            <a href="<?php echo the_permalink();?>"><?php echo the_title(); ?></a>
                                        </h2>
                                         <p class="article-excerpt">
                                            <?php echo get_the_excerpt(); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>                    
                            <div class="list-group">
                                <?php while($list_posts_old->have_posts()){
                                        $list_posts_old->the_post(); 
                                        $news_thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url() : get_theme_file_uri( '/assets/images/news/default-news.jpg' );
                                ?>
                                        <div class="row list-group-item article-media">
                                            <div class="col-md-4">
                                                <a href="<?php echo the_permalink();?>">
                                                    <div class="hoverNews">		
                                                            <figure><img src="<?php echo $news_thumbnail; ?>" alt="" /></figure>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="col-md-8 article-content">
                                                <h2 class="article-content-headline">
                                                    <a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>
                                                </h2>
                                            </div>
                                        </div>
                                <?php } ?>
                            </div>
                    <?php               
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php
        }
    }
?>

<?php get_footer();
