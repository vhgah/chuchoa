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
?>

<div class="row">
    <div class="col-md-8 col-sm-7">
<?php 
$current_cat = chuchoa_get_current_cat_ID();
print_r(chuchoa_get_subcategory($current_cat));
?>


        <div class="panel panel-primary panel-subhots-news">
            <div class="panel-body article">
                <div class="article-media">
                    <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri()."/assets/images/news/170309101457-bentley-bobtail-1-super-169.jpg"; ?>" alt="" /></a>

                    <div class="article-content">
                        <h2 class="article-content-headline">
                            <a href="<?php echo home_url();?>">Trải nghiệm thực tế Nissan X-Trail vượt ngoài mong đợi</a>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="list-group">
                <div class="row list-group-item article-media">
                    <div class="col-md-4">
                        <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri()."/assets/images/news/170309101931-bentley-bobtail-5-super-169.jpg"; ?>" alt="" /></a>
                    </div>

                    <div class="col-md-8 article-content">
                        <h2 class="article-content-headline">
                            <a href="<?php echo home_url();?>">MINI Clubman đời mới tại Việt Nam</a>
                        </h2>
                    </div>
                </div>
                <div class="row list-group-item article-media">
                    <div class="col-md-4">
                        <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri()."/assets/images/news/170310092437-rm-sothebys-bentley-2-super-169.jpg"; ?>" alt="" /></a>
                    </div>

                    <div class="col-md-8 article-content">
                        <h2 class="article-content-headline">
                            <a href="<?php echo home_url();?>">Chevrolet Tahoe 2016: Vua của dòng xe SUV cỡ lớn</a>
                        </h2>
                    </div>
                </div>
                <div class="row list-group-item article-media">
                    <div class="col-md-4">
                        <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri()."/assets/images/news/170310092143-rm-sothebys-bentley-1-super-169.jpg"; ?>" alt="" /></a>
                    </div>

                    <div class="col-md-8 article-content">
                        <h2 class="article-content-headline">
                            <a href="<?php echo home_url();?>">Hãng ôtô lớn nhất Ấn Độ Tata Motors vào Việt Nam</a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-sm-5">
        <?php get_sidebar(); ?>
    </div>
</div>

<div class="row">
    <div class="col-md-12 header-category-news">
        <h2 class="header-category-news-text">
            Xe một bánh
            <span class="header-category-news-stripes">&nbsp;</span>
        </h2>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-12 content-category-news">
        <div class="col-md-6">
            <div class="panel panel-primary panel-subhots-news">
                <div class="panel-body article">
                    <div class="article-media">
                        <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri()."/assets/images/news/170309101457-bentley-bobtail-1-super-169.jpg"; ?>" alt="" /></a>

                        <div class="article-content">
                            <h2 class="article-content-headline">
                                <a href="<?php echo home_url();?>">Trải nghiệm thực tế Nissan X-Trail vượt ngoài mong đợi</a>
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="list-group">
                    <div class="row list-group-item article-media">
                        <div class="col-md-4">
                            <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri()."/assets/images/news/170309101931-bentley-bobtail-5-super-169.jpg"; ?>" alt="" /></a>
                        </div>

                        <div class="col-md-8 article-content">
                            <h2 class="article-content-headline">
                                <a href="<?php echo home_url();?>">MINI Clubman đời mới tại Việt Nam</a>
                            </h2>
                        </div>
                    </div>
                    <div class="row list-group-item article-media">
                        <div class="col-md-4">
                            <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri()."/assets/images/news/170310092437-rm-sothebys-bentley-2-super-169.jpg"; ?>" alt="" /></a>
                        </div>

                        <div class="col-md-8 article-content">
                            <h2 class="article-content-headline">
                                <a href="<?php echo home_url();?>">Chevrolet Tahoe 2016: Vua của dòng xe SUV cỡ lớn</a>
                            </h2>
                        </div>
                    </div>
                    <div class="row list-group-item article-media">
                        <div class="col-md-4">
                            <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri()."/assets/images/news/170310092143-rm-sothebys-bentley-1-super-169.jpg"; ?>" alt="" /></a>
                        </div>

                        <div class="col-md-8 article-content">
                            <h2 class="article-content-headline">
                                <a href="<?php echo home_url();?>">Hãng ôtô lớn nhất Ấn Độ Tata Motors vào Việt Nam</a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-primary panel-subhots-news">
                <div class="panel-body article">
                    <div class="article-media">
                        <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri()."/assets/images/news/170309101457-bentley-bobtail-1-super-169.jpg"; ?>" alt="" /></a>

                        <div class="article-content">
                            <h2 class="article-content-headline">
                                <a href="<?php echo home_url();?>">Trải nghiệm thực tế Nissan X-Trail vượt ngoài mong đợi</a>
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="list-group">
                    <div class="row list-group-item article-media">
                        <div class="col-md-4">
                            <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri()."/assets/images/news/170309101931-bentley-bobtail-5-super-169.jpg"; ?>" alt="" /></a>
                        </div>

                        <div class="col-md-8 article-content">
                            <h2 class="article-content-headline">
                                <a href="<?php echo home_url();?>">MINI Clubman đời mới tại Việt Nam</a>
                            </h2>
                        </div>
                    </div>
                    <div class="row list-group-item article-media">
                        <div class="col-md-4">
                            <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri()."/assets/images/news/170310092437-rm-sothebys-bentley-2-super-169.jpg"; ?>" alt="" /></a>
                        </div>

                        <div class="col-md-8 article-content">
                            <h2 class="article-content-headline">
                                <a href="<?php echo home_url();?>">Chevrolet Tahoe 2016: Vua của dòng xe SUV cỡ lớn</a>
                            </h2>
                        </div>
                    </div>
                    <div class="row list-group-item article-media">
                        <div class="col-md-4">
                            <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri()."/assets/images/news/170310092143-rm-sothebys-bentley-1-super-169.jpg"; ?>" alt="" /></a>
                        </div>

                        <div class="col-md-8 article-content">
                            <h2 class="article-content-headline">
                                <a href="<?php echo home_url();?>">Hãng ôtô lớn nhất Ấn Độ Tata Motors vào Việt Nam</a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 header-category-news">
        <h2 class="header-category-news-text">
            Xe hai bánh
            <span class="header-category-news-stripes">&nbsp;</span>
        </h2>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-12 content-category-news">
        <div class="col-md-6">
            <div class="panel panel-primary panel-subhots-news">
                <div class="panel-body article">
                    <div class="article-media">
                        <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri()."/assets/images/news/170309101457-bentley-bobtail-1-super-169.jpg"; ?>" alt="" /></a>

                        <div class="article-content">
                            <h2 class="article-content-headline">
                                <a href="<?php echo home_url();?>">Trải nghiệm thực tế Nissan X-Trail vượt ngoài mong đợi</a>
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="list-group">
                    <div class="row list-group-item article-media">
                        <div class="col-md-4">
                            <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri()."/assets/images/news/170309101931-bentley-bobtail-5-super-169.jpg"; ?>" alt="" /></a>
                        </div>

                        <div class="col-md-8 article-content">
                            <h2 class="article-content-headline">
                                <a href="<?php echo home_url();?>">MINI Clubman đời mới tại Việt Nam</a>
                            </h2>
                        </div>
                    </div>
                    <div class="row list-group-item article-media">
                        <div class="col-md-4">
                            <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri()."/assets/images/news/170310092437-rm-sothebys-bentley-2-super-169.jpg"; ?>" alt="" /></a>
                        </div>

                        <div class="col-md-8 article-content">
                            <h2 class="article-content-headline">
                                <a href="<?php echo home_url();?>">Chevrolet Tahoe 2016: Vua của dòng xe SUV cỡ lớn</a>
                            </h2>
                        </div>
                    </div>
                    <div class="row list-group-item article-media">
                        <div class="col-md-4">
                            <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri()."/assets/images/news/170310092143-rm-sothebys-bentley-1-super-169.jpg"; ?>" alt="" /></a>
                        </div>

                        <div class="col-md-8 article-content">
                            <h2 class="article-content-headline">
                                <a href="<?php echo home_url();?>">Hãng ôtô lớn nhất Ấn Độ Tata Motors vào Việt Nam</a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-primary panel-subhots-news">
                <div class="panel-body article">
                    <div class="article-media">
                        <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri()."/assets/images/news/170309101457-bentley-bobtail-1-super-169.jpg"; ?>" alt="" /></a>

                        <div class="article-content">
                            <h2 class="article-content-headline">
                                <a href="<?php echo home_url();?>">Trải nghiệm thực tế Nissan X-Trail vượt ngoài mong đợi</a>
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="list-group">
                    <div class="row list-group-item article-media">
                        <div class="col-md-4">
                            <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri()."/assets/images/news/170309101931-bentley-bobtail-5-super-169.jpg"; ?>" alt="" /></a>
                        </div>

                        <div class="col-md-8 article-content">
                            <h2 class="article-content-headline">
                                <a href="<?php echo home_url();?>">MINI Clubman đời mới tại Việt Nam</a>
                            </h2>
                        </div>
                    </div>
                    <div class="row list-group-item article-media">
                        <div class="col-md-4">
                            <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri()."/assets/images/news/170310092437-rm-sothebys-bentley-2-super-169.jpg"; ?>" alt="" /></a>
                        </div>

                        <div class="col-md-8 article-content">
                            <h2 class="article-content-headline">
                                <a href="<?php echo home_url();?>">Chevrolet Tahoe 2016: Vua của dòng xe SUV cỡ lớn</a>
                            </h2>
                        </div>
                    </div>
                    <div class="row list-group-item article-media">
                        <div class="col-md-4">
                            <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri()."/assets/images/news/170310092143-rm-sothebys-bentley-1-super-169.jpg"; ?>" alt="" /></a>
                        </div>

                        <div class="col-md-8 article-content">
                            <h2 class="article-content-headline">
                                <a href="<?php echo home_url();?>">Hãng ôtô lớn nhất Ấn Độ Tata Motors vào Việt Nam</a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();
