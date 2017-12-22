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
            <nav class="chuchoa-navigation mdl-navigation">                        
              <?php  $primary_menu = cc_get_menu('primary'); 
                foreach($primary_menu as $menu){
              ?>
                  <button class="chuchoa-navigation--button mdl-button mdl-js-button mdl-js-ripple-effect mdl-typography--text-uppercase mdl-typography--font-bold mdl-color-text--primary-contrast"
                    onclick="location.href='<?php echo $menu->url; ?>';">              
                    <?php echo $menu->title; ?>
                  </button>
              <?php } ?>
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
          <?php  $second_menu = cc_get_menu('secondary'); 
            foreach($second_menu as $menu){
          ?>
            <li class="mdl-menu__item" onclick="location.href='<?php echo $menu->url; ?>';"><?php echo $menu->title; ?></li>              
          <?php } ?>
        </ul>
      </div>
    </div>

    <div class="chuchoa-drawer mdl-layout__drawer">
      <span class="mdl-layout-title">
      <?php $header_image = cc_get_site_home_image();
        if ( ! empty( $header_image ) ) { ?>
          <a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="ChuChoa.com">
            <img class="chuchoa-logo-image" src="<?php echo $header_image; ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
          </a>
      <?php } // end if ( ! empty( $header_image ) ) ?>
      </span>
      <nav class="mdl-navigation">
        <?php 
          $left_menu = cc_get_menu('left');
          foreach($left_menu as $menu){
            if (empty(cc_get_leftmenu_item_type_field($menu->ID))){
              if ($menu->menu_item_parent == 0){
                ?>
                  <a href="<?php echo $menu->href; ?>"><span class="mdl-navigation__link"><?php echo $menu->title; ?></span></a> 
                <?php
              }
              else{
                ?>
                  <a class="mdl-navigation__link" href="<?php echo $menu->href; ?>"><?php echo $menu->title; ?></a> 
                <?php
              }
            }
            else{
              ?>
                <div class="chuchoa-drawer-separator"></div>
              <?php
            }
           } ?>       
      </nav>
    </div>

<?php // substitute the class "container-fluid" below if you want a wider content area ?>
    <div id="content" class="chuchoa-content mdl-layout__content">
      <a name="top"></a>
     