<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 */

get_header(); 
?>

<div class="row">
    <div class="col-md-8 col-sm-7">
        <div class="panel panel-primary panel-hot-news">
            <div class="panel-body article">
                <div class="article-media">
                    <a href="#"><img src="<?php echo get_template_directory_uri()."/assets/images/news/170309101457-bentley-bobtail-1-super-169.jpg"; ?>" alt="" /></a>

                    <div class="article-content">
                        <h2 class="article-content-headline">
                            <a href="#">Dendrobium - siêu xe đầu tiên của người Singapore - chính thức trình làng</a>
                        </h2>
                    </div>
                </div>
            </div>

            <ul class="list-group">
                <li class="list-group-item"><a href="#">Vén màn xe thể thao hạng sang Audi RS5 Coupe 2018</a></li>
                <li class="list-group-item"><a href="#">Dendrobium - siêu xe đầu tiên của người Singapore - chính thức trình làng</a></li>
                <li class="list-group-item"><a href="#">Morbi leo risus</a></li>
                <li class="list-group-item"><a href="#">Porta ac consectetur ac</a></li>
                <li class="list-group-item"><a href="#">vestibulum at eros</a></li>
            </ul>
        </div>
    </div>

    <div class="col-md-4 col-sm-5">
        <div class="panel panel-primary panel-news">
            <div class="panel-heading">
                Tin nổi bật
                <a class="pull-right" href="#"><span class="fa fa-chevron-right"></span></a>
            </div>
            <div class="panel-body article">
                <div class="article-media">
                    <a href="#"><img src="<?php echo get_template_directory_uri()."/assets/images/news/170310092143-rm-sothebys-bentley-1-super-169.jpg"; ?>" alt="" /></a>
                </div>
                <div class="article-content">
                    <h3 class="article-content-headline">
                        <a href="#">Ferrari to split with parent company</a>
                    </h3>
                </div>
            </div>

            <ul class="list-group">
                <li class="list-group-item"><a href="#">Vén màn xe thể thao hạng sang Audi RS5 Coupe 2018</a></li>
                <li class="list-group-item"><a href="#">Dendrobium - siêu xe đầu tiên của người Singapore - chính thức trình làng</a></li>
                <li class="list-group-item"><a href="#">Morbi leo risus</a></li>
                <li class="list-group-item"><a href="#">Porta ac consectetur ac</a></li>
                <li class="list-group-item"><a href="#">vestibulum at eros</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-md-5 col-md-push-3 col-xs-12">
        <div class="panel panel-primary panel-subhots-news">
            <div class="panel-body article">
                <div class="article-media">
                    <a href="#"><img src="<?php echo get_template_directory_uri()."/assets/images/news/170309101457-bentley-bobtail-1-super-169.jpg"; ?>" alt="" /></a>

                    <div class="article-content">
                        <h2 class="article-content-headline">
                            <a href="#">Trải nghiệm thực tế Nissan X-Trail vượt ngoài mong đợi</a>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="list-group">
                <div class="row list-group-item article-media">
                    <div class="col-md-4">
                        <a href="#"><img src="<?php echo get_template_directory_uri()."/assets/images/news/170309101931-bentley-bobtail-5-super-169.jpg"; ?>" alt="" /></a>
                    </div>

                    <div class="col-md-8 article-content">
                        <h2 class="article-content-headline">
                            <a href="#">MINI Clubman đời mới tại Việt Nam</a>
                        </h2>
                    </div>
                </div>
                <div class="row list-group-item article-media">
                    <div class="col-md-4">
                        <a href="#"><img src="<?php echo get_template_directory_uri()."/assets/images/news/170310092437-rm-sothebys-bentley-2-super-169.jpg"; ?>" alt="" /></a>
                    </div>

                    <div class="col-md-8 article-content">
                        <h2 class="article-content-headline">
                            <a href="#">Chevrolet Tahoe 2016: Vua của dòng xe SUV cỡ lớn</a>
                        </h2>
                    </div>
                </div>
                <div class="row list-group-item article-media">
                    <div class="col-md-4">
                        <a href="#"><img src="<?php echo get_template_directory_uri()."/assets/images/news/170310092143-rm-sothebys-bentley-1-super-169.jpg"; ?>" alt="" /></a>
                    </div>

                    <div class="col-md-8 article-content">
                        <h2 class="article-content-headline">
                            <a href="#">Hãng ôtô lớn nhất Ấn Độ Tata Motors vào Việt Nam</a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-md-pull-5 col-xs-6">
        <div class="panel panel-primary panel-news">
            <div class="panel-heading">
                Công nghệ
                <a class="pull-right" href="<?php echo home_url(); ?>"><span class="fa fa-chevron-right"></span></a>
            </div>
            <div class="panel-body article">
                <div class="article-media">
                    <a href="#"><img src="<?php echo get_template_directory_uri()."/assets/images/news/170309101110-1961-ferrari-berlinetta-by-scaglietti-3-super-169.jpg"; ?>" alt="" /></a>
                </div>
                <div class="article-content">
                    <h3 class="article-content-headline">
                        <a href="#">BMW kết hợp với Montblanc cho ra đời bộ sưu tập đồ công nghệ xe hơi</a>
                    </h3>
                </div>
            </div>

            <ul class="list-group">
                <li class="list-group-item"><a href="#">Những tính năng tốt và rẻ nhất trên xe hơi</a></li>
                <li class="list-group-item"><a href="#">GM giới thiệu hộp số 9 cấp mới</a></li>
                <li class="list-group-item"><a href="#">Bất ngờ trước những tính năng ưu việt của ứng dụng</a></li>
                <li class="list-group-item"><a href="#">Porta ac consectetur ac</a></li>
                <li class="list-group-item"><a href="#">vestibulum at eros</a></li>
            </ul>
        </div>
    </div>

    <div class="col-md-4 col-xs-6">
        <div class="panel panel-primary panel-news">
            <div class="panel-heading">
                Tư vấn
                <a class="pull-right" href="#"><span class="fa fa-chevron-right"></span></a>
            </div>
            <div class="panel-body article">
                <div class="article-media">
                    <a href="#"><img src="<?php echo get_template_directory_uri()."/assets/images/news/1487913070.ky-thuat-phanh-chan-trai-cach-de-hien-ban-la-tay-lai-dang-cap-1.jpg"; ?>" alt="" /></a>
                </div>
                <div class="article-content">
                    <h3 class="article-content-headline">
                        <a href="#">Kỹ thuật phanh chân trái: Cách để thể hiện bạn là tay lái đẳng cấp</a>
                    </h3>
                </div>
            </div>

            <ul class="list-group">
                <li class="list-group-item"><a href="#">Bí kíp phòng tránh rủi ro trên đường</a></li>
                <li class="list-group-item"><a href="#">Tương lai kỹ thuật số của gương chiếu hậu</a></li>
                <li class="list-group-item"><a href="#">Phanh tay và những điều cần biết</a></li>
                <li class="list-group-item"><a href="#">Porta ac consectetur ac</a></li>
                <li class="list-group-item"><a href="#">vestibulum at eros</a></li>
            </ul>
        </div>
    </div>
</div>

<?php get_footer();
