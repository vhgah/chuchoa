<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ChuChoa
 */

get_header(); 

get_template_part( 'breadcrumb-bar');
if (have_posts()){
    the_post();
    $ignore = [];
    array_push($ignore, get_the_ID());
    $_SESSION["first_post_each_cat"] = $ignore;
}
else
    return;
?>

<div class="row">
    <div class="col-md-9">
        <div class="news-content-detail">
				<div class="news-content">
                    <h1><?php the_title(); ?></h1>
                    <div class="row col-md-12">
                        <strong><?php the_author();?></strong>
                        <i><?php the_date("d/m/y"); ?></i>
                        <span>&nbsp</span>
                        <i><?php the_time("h:m:s"); ?></i>

                        <ol class="pull-right list-inline">
                            <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                        </ol>
                    </div>

                    <div class="row col-md-12 postthumb">
                        <?php
                            $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' );
                            $news_thumbnail = has_post_thumbnail(get_the_ID()) ? $url : get_theme_file_uri( '/assets/images/news/default-news.jpg' );
                        ?>
                        <img src="<?php echo $news_thumbnail; ?>" alt="" />                        
                    </div>
                    <div class="row col-md-12 postexcerpt">
                        <h4>
                            <?php  the_excerpt();  ?>
                        </h4>
                    </div>
                    

                    <div class="row col-md-12">
                        <?php the_content(); ?>
                    </div>
					
				</div>
        </div>
    </div>
<div class="col-md-3">
    <?php get_sidebar(); ?>
    </div>
</div>


<?php
get_footer();
