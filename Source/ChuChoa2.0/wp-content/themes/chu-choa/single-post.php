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
?>



<div class="row">
    <div class="col-md-9">
        <div class="news-content-detail">
           <?php while ( have_posts() ) : the_post(); ?>			
				<div class="news-content">
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
        </div>
    </div>
<div class="col-md-3">
    <?php get_sidebar(); ?>
    </div>
</div>


<?php
get_footer();
