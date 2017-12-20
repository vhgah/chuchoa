<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Trang mua bán, trao đổi ô tô cũ mới hàng đầu hiện nay">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>

  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

    <div id="masthead" class="chuchoa-header mdl-layout__header mdl-layout__header--waterfall">
      <div class="mdl-layout__header-row">
	  	<?php $header_image = get_header_image();
			if ( ! empty( $header_image ) ) { ?>
				<a class="chuchoa-title mdl-layout-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="ChuChoa.com">
					<img class="chuchoa-logo-image" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
				</a>
		<?php } // end if ( ! empty( $header_image ) ) ?>

        <!-- Add spacer, to align navigation to the right in desktop -->
        <div class="chuchoa-header-spacer mdl-layout-spacer"></div>
        <div class="chuchoa-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
          <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
            <i class="material-icons">search</i>
          </label>
          <div class="mdl-textfield__expandable-holder">
            <input class="mdl-textfield__input" type="text" id="search-field">
          </div>
        </div>
        <!-- Navigation -->
        <div class="chuchoa-navigation-container">
			<?php $primary_menus = wp_get_nav_menu_items('primary'); 
				echo $primary_menusmenu;
			?>

            <nav class="chuchoa-navigation mdl-navigation">                        
              <button class="chuchoa-navigation--button mdl-button mdl-js-button mdl-js-ripple-effect mdl-typography--text-uppercase mdl-typography--font-bold mdl-color-text--primary-contrast" id="more-button-buy"
                onclick="location.href='shop.html';">              
                Mua
              </button>
              
              <button class="chuchoa-navigation--button mdl-button mdl-js-button mdl-js-ripple-effect mdl-typography--text-uppercase mdl-typography--font-bold mdl-color-text--primary-contrast" id="more-button-sell"
                onclick="location.href='sell.html';">              
                Bán
              </button>
  
              <button class="chuchoa-navigation--button mdl-button mdl-js-button mdl-js-ripple-effect mdl-typography--text-uppercase mdl-typography--font-bold mdl-color-text--primary-contrast"
                onclick="location.href='service.html';">              
                Dịch vụ
              </button>
  
              <button class="chuchoa-navigation--button mdl-button mdl-js-button mdl-js-ripple-effect mdl-typography--text-uppercase mdl-typography--font-bold mdl-color-text--primary-contrast" id="more-button-news">              
                Tin tức
              </button>          
              
              <button class="chuchoa-navigation--button mdl-button mdl-js-button mdl-js-ripple-effect mdl-typography--text-uppercase mdl-typography--font-bold mdl-color-text--primary-contrast"              
                onclick="location.href='contact.html';">
                Liên hệ
              </button>
            </nav>
        </div>

		<?php $header_image = get_header_image();
			if ( ! empty( $header_image ) ) { ?>
				<a class="chuchoa-mobile-title mdl-layout-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="ChuChoa.com">
					<img class="chuchoa-logo-image" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
				</a>
		<?php } // end if ( ! empty( $header_image ) ) ?>
        
        <button class="chuchoa-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
          <i class="material-icons">more_vert</i>
        </button>
        <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
          <li class="mdl-menu__item" onclick="location.href='about.html';">Giới thiệu</li>
          <li class="mdl-menu__item" onclick="location.href='recruitment.html';">Tuyển dụng</li>
          <li class="mdl-menu__item" onclick="location.href='sell-guide.html';">Hướng dẫn rao bán</li>
        </ul>
      </div>
    </div>

    <div class="chuchoa-drawer mdl-layout__drawer">
      <span class="mdl-layout-title">
        <img class="chuchoa-logo-image" src="assets/images/logo.png">
      </span>
      <nav class="mdl-navigation">
        <span class="mdl-navigation__link" href="">Mua</span>
        <a class="mdl-navigation__link" href="shop.html">Tìm mua</a>
        <a class="mdl-navigation__link" href="shop.html">Tìm mua theo người bán</a>
        <a class="mdl-navigation__link" href="shop.html">Tìm mua theo hãng</a>
        <div class="chuchoa-drawer-separator"></div>
        <span class="mdl-navigation__link" href="">Bán</span>
        <a class="mdl-navigation__link" href="sell.html">Rao bán</a>        
        <a class="mdl-navigation__link" href="sell-guide.html">Hướng dẫn rao bán</a>        
        <div class="chuchoa-drawer-separator"></div>
        <span class="mdl-navigation__link" href="">Tin tức</span>
        <a class="mdl-navigation__link" href="">Thị trường</a>
        <a class="mdl-navigation__link" href="">Tư vấn</a>
        <a class="mdl-navigation__link" href="">Đánh giá</a>
        <a class="mdl-navigation__link" href="">Công nghệ</a>
        <div class="chuchoa-drawer-separator"></div>
        <a class="mdl-navigation__link" href="service.html">Dịch vụ</a>
        <a class="mdl-navigation__link" href="recruitment.html">Tuyển dụng</a>
        <a class="mdl-navigation__link" href="about.html">Giới thiệu</a>
        <a class="mdl-navigation__link" href="contact.html">Liên hệ</a>
      </nav>
    </div>

<?php // substitute the class "container-fluid" below if you want a wider content area ?>
    <div id="content" class="chuchoa-content mdl-layout__content">
      <a name="top"></a>
     