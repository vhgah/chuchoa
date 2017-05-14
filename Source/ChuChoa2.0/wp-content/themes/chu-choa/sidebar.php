<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ChuChoa
 */
$hot_cat = chuchoa_get_category_by_slug('tam-diem');
if (!$hot_cat){
    return;
}

$hot_news = chuchoa_get_hot_news();
if ($hot_news->have_posts()){
    $hot_news->the_post();
}
else{
    return;
}
?>

<div class="panel panel-primary panel-news">
    <div class="panel-heading">
        <?php echo $hot_cat->cat_name; ?>
        <a class="pull-right" href="<?php echo get_category_link($current_cat); ?>"><span class="fa fa-chevron-right"></span></a>
    </div>
    <div class="panel-body article">
        <div class="article-media">
            <a href="<?php echo the_permalink(); ?>">
                <?php
                    $news_thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url() : get_theme_file_uri( '/assets/images/news/default-news.jpg' );
                ?>
                <div class="hoverNews">		
                        <figure><img src="<?php echo $news_thumbnail; ?>" alt="<?php echo the_title(); ?>" /></figure>
                </div>
                
            </a>
        </div>
        <div class="article-content">
            <h3 class="article-content-headline">
                <a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>
            </h3>
        </div>
    </div>

    <ul class="list-group">
        <?php while ( $hot_news->have_posts() ) { $hot_news->the_post() ?>
             <li class="list-group-item"><a href="<?php echo the_permalink();?>"><?php echo the_title(); ?></a></li>   
        <?php } ?>
    </ul>
</div>

