<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ChuChoa
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">	

	<header>
        <div class="row topmost-menu">
            <div class="navbar navbar-xs navbar-inverse">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
						<a class="navbar-brand" area="" href="http://localhost/chuchoa.com/">Chu Choa</a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    Danh mục
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu"> 
<?php
    $menus = chuchoa_get_menus('top-menu');
    foreach ( $menus as $menuIdx => $menu ) : ?>
        <li><a href="<?php echo esc_url( $menu->url ); ?>"><?php echo $menu->title; ?></a></li>								
<?php endforeach; ?>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><p class="navbar-text">Hotline: 09 79 908 950</p></li>
                        </ul>
                    </div>

                    <div class="lower-header-menu">
                        <a href="#">Liên hệ</a>                        
                    </div>
                </div>

                <hr class="hrstyle" />
            </div>
        </div>

        <div class="row">
            <div class="container">
                <div class="row header-news">
                    <div class="col-md-2 col-sm-3 hidden-xs header-news-logo">
                        <a href="#"><img src="~/Content/assets/News/header_news_logo.png" alt="" /></a>
                    </div>
                    <div class="col-md-10 col-sm-9 col-xs-12 header-news-img">

                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row hidden-xs">
            <nav class="navbar navbar-news">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="@Url.Action("Index", "Home")"><span class="fa fa-home"></span></a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li><a>Đánh giá</a></li>
                        <li><a>Công nghệ</a></li>
                        <li><a>Tâm điểm</a></li>
                        <li><a>Tư vấn</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

	<div id="content" class="site-content">
