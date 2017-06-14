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
<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="description" content="<?php bloginfo( 'description' ); ?>">

	<link rel="shortcut icon" href="<?php echo get_theme_file_uri( '/assets/images/favicon.ico' ); ?>" />
	<link rel="apple-touch-icon" href="<?php echo get_theme_file_uri( '/assets/images/header_news_logo.png' ); ?>">

	<?php if ( is_single() ) : ?>
		<meta property="og:url" content="<?php the_permalink(); ?>">
		<meta property="og:type" content="article">
		<meta property="og:title" content="<?php the_title(); ?>">
		<meta property="og:description" content="<?php echo esc_attr( strip_tags( get_the_excerpt() ) ); ?>">
		<meta property="og:image" content="<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url() : get_theme_file_uri( '/assets/images/header_news_logo.png' ); ?>">
	<?php elseif ( is_home() ) : ?>
		<meta property="og:url" content="<?php echo esc_html( home_url( '/' ) ); ?>">
		<meta property="og:type" content="article">
		<meta property="og:title" content="<?php echo bloginfo( 'name' ); ?>">
		<meta property="og:image" content="<?php echo get_theme_file_uri( '/assets/images/header_news_logo.png' ); ?>">
	<?php endif; ?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">	

	<header>
        <div class="row topmost-menu">
            <div class="top-navbar">
                <div class="container">
                    <ul class="top-navbar-header">                                              
						<li><a class="top-navbar-brand" area="" href="<?php echo home_url(); ?>">Chu Choa</a></li>
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
                    <!--<div class="lower-header-menu">
                        <a href="#">Liên hệ</a>                        
                    </div>-->
                </div>

                <!--<hr class="hrstyle" />-->
            </div>
        </div>
        
        <div class="clearfix"></div>

        <div class="row">
            <div class="container">
                <div class="row header-news">
                    <div class="col-md-3 col-sm-4 col-xs-12 header-news-logo">
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php echo get_template_directory_uri(). "/assets/images/header_news_logo.png"; ?>" alt="" />
                        </a>
                    </div>
                    <div class="col-md-9 col-sm-8 hidden-xs header-news-img">

                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row hidden-xs">
            <nav class="navbar navbar-news">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="<?php echo home_url(); ?>"><span class="fa fa-home"></span></a>
                    </div>
                    <ul class="nav navbar-nav">
                        <?php
                            $menus = chuchoa_get_menus( 'top-menu' );
                            foreach ( $menus as $menu_idx => $menu ) : ?>
                                <li><a href="<?php echo esc_url( $menu->url ); ?>"><?php echo esc_html( $menu->title ); ?></a></li>                                
                            <?php endforeach; 
                        ?>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

	<div id="content" class="site-content">
        <main class="container body-content">