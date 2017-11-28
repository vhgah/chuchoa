<?php
/**
 * The front page template file
 *
 * @package _tk
 */
?>

<html lang="vi">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Best re-seller Auto-Car Store ever">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <link rel="shortcut icon" href="assets/images/favicon.ico">
  <link rel="apple-touch-icon" href="assets/images/logo.png">

  <title>Chu Choa - mua bán xe giá hấp dẫn</title>

  <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,500,500italic,700,900" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="assets/css/icon.css" />
  <!-- <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
  <link rel="stylesheet" href="assets/css/material.min.css" /> -->
  <link rel="stylesheet" href="assets/css/base-site.css" />
  <link rel="stylesheet" href="assets/css/getmdl-select.min.css">

  <link rel="stylesheet" href="assets/css/animations.min.css" />
  <link rel="stylesheet" href="assets/plugins/layerslider/css/layerslider.css" />
  
  <link rel="stylesheet" href="assets/css/customize-site.min.css" />

  <script type="text/javascript" src="assets/js/jquery-1.12.4.min.js"></script>
  <script type="text/javascript" src="assets/plugins/layerslider/js/greensock.js"></script>
  <script type="text/javascript" src="assets/plugins/layerslider/js/layerslider.transitions.js"></script>
  <script type="text/javascript" src="assets/plugins/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
  <script type="text/javascript" src="assets/js/layer-slider.js"></script>
  
    
  <script defer src="assets/js/material.min.js"></script>  
  <script defer src="assets/js/getmdl-select.min.js"></script>
</head>

<body>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

    <div class="chuchoa-header mdl-layout__header mdl-layout__header--waterfall">
      <div class="mdl-layout__header-row">
        <a class="chuchoa-title mdl-layout-title" href="index.html">
          <img class="chuchoa-logo-image" src="assets/images/logo-white.png">
        </a>
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
        <a class="chuchoa-mobile-title mdl-layout-title" href="">
          <img class="chuchoa-logo-image" src="assets/images/logo-white.png">
        </a>
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

    <div class="chuchoa-content mdl-layout__content">
      <a name="top"></a>
      <div class="chuchoa-banner-section">
        <div class="banner-slide">
          <div class="slide">
            <div id="layerslider" style="width: 100%; height: 600px;">
              <div class="ls-slide" style="slidedirection: right; transition2d: 92,93,105; ">
                <img src="assets/images/Slide/slider 08-min.jpg" class="ls-bg" alt="Slide background">
                <span class="chuchoa-banner--title ls-s-1" style=" color: #fff; line-height:35px; font-weight: 600; font-size: 32px; top:100px; left: 50px; slidedirection : right; slideoutdirection : left; durationin : 1000; durationout : 1000; text-transform: uppercase; ">
                  Siêu khuyến mãi
                </span>
                <span class="chuchoa-banner--subtitle ls-s-1" style=" color: #fff; line-height:24px; font-weight: 200; font-size: 18px; top:150px; left: 50px; slidedirection : left; slideoutdirection : right; durationin : 1000; durationout : 1000">
                  Xe hạng sang, giá cạnh tranh. <br />
                  Hỗ trợ đăng ký mới, kèm theo bộ phụ tùng chính hiệu.
                </span>
                <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--primary ls-s-1" 
                    href="#" 
                    style="top:225px; left: 50px; slidedirection : right; slideoutdirection : left; durationin : 2000; durationout : 2000;                    
                    height: 36px;margin: 0;padding: 0 16px;line-height: 36px;vertical-align: middle;">
                  Chi tiết
                </a>
              </div>
              <div class="ls-slide" style="slidedirection: right; transition2d: 92,93,105; ">
                <img src="assets/images/Slide/slider 11.jpg" class="ls-bg" alt="Slide background">
                <span class="chuchoa-banner--title ls-s-1" style=" color: #fff; line-height:35px; font-weight: 600; font-size: 32px; top:100px; left: 50px; slidedirection : right; slideoutdirection : left; durationin : 1000; durationout : 1000; text-transform: uppercase; ">
                  Rinh quà khủng
                </span>
                <span class="chuchoa-banner--subtitle ls-s-1" style=" color: #fff; line-height:24px; font-weight: 200; font-size: 18px; top:150px; left: 50px; slidedirection : left; slideoutdirection : right; durationin : 1000; durationout : 1000">
                  Chương trình chào hè 2017 <br />                  
                  Ford với những phần quà hấp dẫn
                </span>
                <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--primary ls-s-1" 
                    href="#" 
                    style="top:225px; left: 50px; slidedirection : right; slideoutdirection : left; durationin : 2000; durationout : 2000;                    
                    height: 36px;margin: 0;padding: 0 16px;line-height: 36px;vertical-align: middle;">
                  Chi tiết
                </a>
              </div>
              <div class="ls-slide" style="slidedirection: right; transition2d: 92,93,105; ">
                <img src="assets/images/Slide/slider 07.jpg" class="ls-bg" alt="Slide background">
                <span class="chuchoa-banner--title mdl-color-text--primary-contrast ls-s-1" 
                      style="line-height:35px; font-weight: 600; font-size: 32px; top:100px; left: auto; slidedirection : right; slideoutdirection : left; durationin : 1000; durationout : 1000; text-transform: uppercase; 
                            float: right;right: 210px;">
                  Tăng nhiệt mùa hè
                </span>
                <span class="chuchoa-banner--subtitle mdl-color-text--primary-contrast ls-s-1" 
                  style="line-height:24px; font-weight: 200; font-size: 18px; top:150px; left: auto; slidedirection : left; slideoutdirection : right; durationin : 1000; durationout : 1000;
                  float: right;right: 210px;text-align:right;">
                  Độc và lạ <br />
                  Nhiều mẫu xe mới hè 2017 
                </span>
                <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--primary ls-s-1" 
                    href="#" 
                    style="top:225px; left: auto; slidedirection : right; slideoutdirection : left; durationin : 2000; durationout : 2000;                    
                          height: 36px;margin: 0;padding: 0 16px;line-height: 36px;vertical-align: middle;float: right;right: 210px;">
                  Chi tiết
                </a>
              </div>
            </div>
          </div>
        </div> 

        <div class="chuchoa-search-grid">
          <div class="mdl-grid mdl-grid--no-fullwidth mdl-shadow--4dp mdl-color--grey-800 mdl-grid--no-margin">
            <div class="mdl-cell mdl-cell--12-col">
              <div class="mdl-cell mdl-cell--12-col mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
                <div class="mdl-tabs__tab-bar chuchoa-flex-justify-start">
                    <a href="#buy-panel" class="mdl-tabs__tab is-active">Tìm mua xe</a>
                    <a href="#vendor-panel" class="mdl-tabs__tab">Tìm bài đánh giá</a>
                </div>
              
                <div class="mdl-tabs__panel is-active" id="buy-panel">
                  <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col">
                      <form action="#">
                        <div class="mdl-grid">
                          <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-phone">
                              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth mdl-col" style="width:100%">
                                  <input class="mdl-textfield__input" type="text" id="filterUsed" value="Xe mới và cũ" readonly tabIndex="-1" />
                                  <label for="filterUsed">
                                      <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                  </label>
                                  <label for="filterUsed" class="mdl-textfield__label">Tình trạng xe</label>
                                  <ul for="filterUsed" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                      <li class="mdl-menu__item" data-val="MC">Tất cả</li>
                                      <li class="mdl-menu__item" data-val="XM">Xe mới</li>
                                      <li class="mdl-menu__item" data-val="XC">Xe cũ</li>
                                      <li class="mdl-menu__item" data-val="XK">Xe đã kiểm định</li>
                                  </ul>
                                </div>
                          </div>

                          <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-phone">
                              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth mdl-col" style="width:100%">
                                  <input class="mdl-textfield__input" type="text" id="filterMade" readonly tabIndex="-1" />
                                  <label for="filterMade">
                                      <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                  </label>
                                  <label for="filterMade" class="mdl-textfield__label">Thương hiệu</label>
                                  <ul for="filterMade" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                      <li class="mdl-menu__item" data-val="MC">Ford</li>
                                      <li class="mdl-menu__item" data-val="XM">Kia</li>
                                      <li class="mdl-menu__item" data-val="XC">Toyota</li>
                                  </ul>
                                </div>
                          </div>

                          <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-phone">
                              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth mdl-col" style="width:100%">
                                  <input class="mdl-textfield__input" type="text" id="filterModel" readonly tabIndex="-1" />
                                  <label for="filterModel">
                                      <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                  </label>
                                  <label for="filterModel" class="mdl-textfield__label">Model</label>
                                  <ul for="filterModel" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                      <li class="mdl-menu__item" data-val="MC">Carens</li>
                                      <li class="mdl-menu__item" data-val="XM">Cerato</li>
                                      <li class="mdl-menu__item" data-val="XC">Morning</li>
                                      <li class="mdl-menu__item" data-val="XC">Rito</li>
                                  </ul>
                                </div>
                          </div>

                          <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-phone">
                              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth mdl-col" style="width:100%">
                                  <input class="mdl-textfield__input" type="text" id="filterMaxPrice" readonly tabIndex="-1" />
                                  <label for="filterMaxPrice">
                                      <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                  </label>
                                  <label for="filterMaxPrice" class="mdl-textfield__label">Giá lớn nhất</label>
                                  <ul for="filterMaxPrice" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                      <li class="mdl-menu__item" data-val="MC">100tr</li>
                                      <li class="mdl-menu__item" data-val="XM">200tr</li>
                                      <li class="mdl-menu__item" data-val="XC">300tr</li>
                                      <li class="mdl-menu__item" data-val="XC">400tr</li>
                                  </ul>
                                </div>
                          </div>

                          <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-phone">
                              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth mdl-col" style="width:100%">
                                  <input class="mdl-textfield__input" type="text" id="filterDistance" readonly tabIndex="-1" />
                                  <label for="filterDistance">
                                      <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                  </label>
                                  <label for="filterDistance" class="mdl-textfield__label">Số km đã đi</label>
                                  <ul for="filterDistance" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                      <li class="mdl-menu__item" data-val="MC">1 vạn</li>
                                      <li class="mdl-menu__item" data-val="XM">10 vạn</li>
                                      <li class="mdl-menu__item" data-val="XC">20 vạn</li>
                                  </ul>
                                </div>
                          </div>

                          <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-phone chuchoa-flex-justify-center chuchoa-center-child">                            
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                              Tìm kiếm
                            </button>                            
                          </div>                          
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="mdl-tabs__panel temple-hidden" id="vendor-panel">
                  <form action="#">
                    <div class="mdl-grid">
                      <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-phone">
                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth mdl-col" style="width:100%">
                              <input class="mdl-textfield__input" type="text" id="filterMadeArtice" readonly tabIndex="-1" />
                              <label for="filterMadeArtice">
                                  <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                              </label>
                              <label for="filterMadeArtice" class="mdl-textfield__label">Thương hiệu</label>
                              <ul for="filterMadeArtice" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                  <li class="mdl-menu__item" data-val="MC">Ford</li>
                                  <li class="mdl-menu__item" data-val="XM">Kia</li>
                                  <li class="mdl-menu__item" data-val="XC">Toyota</li>
                              </ul>
                            </div>
                      </div>

                      <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-phone">
                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth mdl-col" style="width:100%">
                              <input class="mdl-textfield__input" type="text" id="filterModelArtice" readonly tabIndex="-1" />
                              <label for="filterModelArtice">
                                  <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                              </label>
                              <label for="filterModelArtice" class="mdl-textfield__label">Model</label>
                              <ul for="filterModelArtice" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                  <li class="mdl-menu__item" data-val="MC">Carens</li>
                                  <li class="mdl-menu__item" data-val="XM">Cerato</li>
                                  <li class="mdl-menu__item" data-val="XC">Morning</li>
                                  <li class="mdl-menu__item" data-val="XC">Rito</li>
                              </ul>
                            </div>
                      </div>

                      <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-phone">
                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth mdl-col" style="width:100%">
                              <input class="mdl-textfield__input" type="text" id="filterYearArtice" readonly tabIndex="-1" />
                              <label for="filterYearArtice">
                                  <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                              </label>
                              <label for="filterYearArtice" class="mdl-textfield__label">Theo năm</label>
                              <ul for="filterYearArtice" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                  <li class="mdl-menu__item" data-val="MC">2017</li>
                                  <li class="mdl-menu__item" data-val="XM">2015</li>
                                  <li class="mdl-menu__item" data-val="XC">2014</li>
                              </ul>
                            </div>
                      </div>

                      <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-phone chuchoa-flex-justify-center chuchoa-center-child">                            
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                          Tìm kiếm
                        </button>                            
                      </div>                          
                    </div>
                  </form>
                </div>                   
              </div>
            </div>            
          </div> 
        </div>
       
      </div>

      <div class="chuchoa-section chuchoa-lastest-section">
        <div class="chuchoa-section__content">
          <div class="mdl-grid mdl-grid--no-fullwidth mdl-color--primary-contrast">
            <div class="mdl-cell mdl-cell--12-col chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
              <h2 class="mdl-typography--display-1 mdl-typography--text-center mdl-typography--font-light chuchoa-section__content-header">Xe mới rao bán</h2>
              <div class="chuchoa-divider chuchoa-divider--center chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                <div class="chuchoa-divider__border"></div>
              </div>
            </div>
          </div>
          <div class="mdl-grid mdl-grid--no-fullwidth">
            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone chuchoa-section__content-item chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
              <div class="mdl-card mdl-shadow--2dp chuchoa-card-product">
                <div class="mdl-card__media chuchoa-card-product__media">
                  <a href="single-product.html">
                    <img alt="some product" class="chuchoa-card-product__image" src="assets/images/product/default-a.jpg"> 
                    <img alt="some product" class="chuchoa-card-product__image" src="assets/images/product/default-b.jpg">
                  </a>
                  <div class="mdl-card__title chuchoa-card-product__title">
                    <h3 class="mdl-card__title-text chuchoa-card-product__title-text">
                      <a href="single-product.html" class="mdl-typography--font-light">Toyota Innova</a>
                    </h3>
                    <span class="mdl-typography--text-uppercase mdl-typography--font-bold chuchoa-card-product__tags">
                      <a href="shop.html" rel="tag">E 2.0MT</a>, <a href="shop.html" rel="tag">2012</a>
                    </span>
                    <div class="chuchoa-card-product-installment chuchoa-card-product__installment--animated">
                      <span>Mua trả góp chỉ từ 220 <em>triệu</em></span>
                    </div>
                  </div>
                  <div class="chuchoa-card-product__badge chuchoa-card-product__badge-hight chuchoa-product-badge">590</div>
                </div>
                <div class="mdl-card__actions chuchoa-card-product-actions">                  
                  <div class="chuchoa-product-info mdl-grid mdl-grid--no-spacing">
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">info_outline</i> Đã qua SD</span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">av_timer</i> 41.000km</span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">settings_input_svideo</i> Số sàn</span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">place</i> Hà Nội</span>
                  </div>                  
                </div>
              </div>
            </div>

             <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone chuchoa-section__content-item chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
              <div class="mdl-card mdl-shadow--2dp chuchoa-card-product">
                <div class="mdl-card__media chuchoa-card-product__media">
                  <a href="single-product.html">
                    <img alt="some product" class="chuchoa-card-product__image" src="assets/images/product/default-a.jpg"> 
                    <img alt="some product" class="chuchoa-card-product__image" src="assets/images/product/default-b.jpg">
                  </a>
                  <div class="mdl-card__title chuchoa-card-product__title">
                    <h3 class="mdl-card__title-text chuchoa-card-product__title-text">
                      <a href="single-product.html" class="mdl-typography--font-light">Ford Escape</a>
                    </h3>
                    <span class="mdl-typography--text-uppercase mdl-typography--font-bold chuchoa-card-product__tags">
                      <a href="shop.html" rel="tag">XLS 2.3AT</a>, <a href="shop.html" rel="tag">2010</a>
                    </span>
                    <div class="chuchoa-card-product-installment chuchoa-card-product__installment--animated">
                      <span>Mua trả góp chỉ từ 220 <em>triệu</em></span>
                    </div>
                  </div>
                  <div class="chuchoa-card-product__badge chuchoa-product-badge">200</div>
                </div>
                <div class="mdl-card__actions chuchoa-card-product-actions">                  
                  <div class="chuchoa-product-info mdl-grid mdl-grid--no-spacing">
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">info_outline</i> Đã qua SD</span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">av_timer</i> 41.000km</span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">settings_input_svideo</i> Số sàn</span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">place</i> Hà Nội</span>
                  </div>                  
                </div>
              </div>
            </div>
            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone chuchoa-section__content-item chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
              <div class="mdl-card mdl-shadow--2dp chuchoa-card-product">
                <div class="mdl-card__media chuchoa-card-product__media">
                  <a href="single-product.html">
                    <img alt="some product" class="chuchoa-card-product__image" src="assets/images/product/default-a.jpg"> 
                    <img alt="some product" class="chuchoa-card-product__image" src="assets/images/product/default-b.jpg">
                  </a>
                  <div class="mdl-card__title chuchoa-card-product__title">
                    <h3 class="mdl-card__title-text chuchoa-card-product__title-text">
                      <a href="single-product.html" class="mdl-typography--font-light">Toyota Innova</a>
                    </h3>
                    <span class="mdl-typography--text-uppercase mdl-typography--font-bold chuchoa-card-product__tags">
                      <a href="shop.html" rel="tag">E 2.0MT</a>, <a href="shop.html" rel="tag">2012</a>
                    </span>
                    <div class="chuchoa-card-product-installment chuchoa-card-product__installment--animated">
                      <span>Mua trả góp chỉ từ 220 <em>triệu</em></span>
                    </div>
                  </div>
                  <div class="chuchoa-card-product__badge chuchoa-card-product__badge-hight chuchoa-product-badge">590</div>
                </div>
                <div class="mdl-card__actions chuchoa-card-product-actions">                  
                  <div class="chuchoa-product-info mdl-grid mdl-grid--no-spacing">
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">info_outline</i> Đã qua SD</span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">av_timer</i> 41.000km</span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">settings_input_svideo</i> Số sàn</span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">place</i> Hà Nội</span>
                  </div>                  
                </div>
              </div>
            </div>
            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone chuchoa-section__content-item chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
              <div class="mdl-card mdl-shadow--2dp chuchoa-card-product">
                <div class="mdl-card__media chuchoa-card-product__media">
                  <a href="single-product.html">
                    <img alt="some product" class="chuchoa-card-product__image" src="assets/images/product/default-a.jpg"> 
                    <img alt="some product" class="chuchoa-card-product__image" src="assets/images/product/default-b.jpg">
                  </a>
                  <div class="mdl-card__title chuchoa-card-product__title">
                    <h3 class="mdl-card__title-text chuchoa-card-product__title-text">
                      <a href="single-product.html" class="mdl-typography--font-light">Toyota Innova</a>
                    </h3>
                    <span class="mdl-typography--text-uppercase mdl-typography--font-bold chuchoa-card-product__tags">
                      <a href="shop.html" rel="tag">E 2.0MT</a>, <a href="shop.html" rel="tag">2012</a>
                    </span>                    
                  </div>
                  <div class="chuchoa-card-product__badge chuchoa-card-product__badge-hight chuchoa-product-badge">590</div>
                </div>
                <div class="mdl-card__actions chuchoa-card-product-actions">                  
                  <div class="chuchoa-product-info mdl-grid mdl-grid--no-spacing">
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">info_outline</i> Đã qua SD</span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">av_timer</i> 41.000km</span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">settings_input_svideo</i> Số sàn</span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">place</i> Hà Nội</span>
                  </div>                  
                </div>
              </div>
            </div>

            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone chuchoa-section__content-item chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
              <div class="mdl-card mdl-shadow--2dp chuchoa-card-product">
                <div class="mdl-card__media chuchoa-card-product__media">
                  <a href="single-product.html">
                    <img alt="some product" class="chuchoa-card-product__image" src="assets/images/product/default-a.jpg"> 
                    <img alt="some product" class="chuchoa-card-product__image" src="assets/images/product/default-b.jpg">
                  </a>
                  <div class="mdl-card__title chuchoa-card-product__title">
                    <h3 class="mdl-card__title-text chuchoa-card-product__title-text">
                      <a href="single-product.html" class="mdl-typography--font-light">Ford Escape</a>
                    </h3>
                    <span class="mdl-typography--text-uppercase mdl-typography--font-bold chuchoa-card-product__tags">
                      <a href="shop.html" rel="tag">XLS 2.3AT</a>, <a href="shop.html" rel="tag">2010</a>
                    </span>
                    <div class="chuchoa-card-product-installment chuchoa-card-product__installment--animated">
                      <span>Mua trả góp chỉ từ 220 <em>triệu</em></span>
                    </div>
                  </div>
                  <div class="chuchoa-card-product__badge chuchoa-product-badge">200</div>
                </div>
                <div class="mdl-card__actions chuchoa-card-product-actions">                  
                  <div class="chuchoa-product-info mdl-grid mdl-grid--no-spacing">
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">info_outline</i> Đã qua SD</span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">av_timer</i> 41.000km</span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">settings_input_svideo</i> Số sàn</span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">place</i> Hà Nội</span>
                  </div>                  
                </div>
              </div>
            </div>
            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone chuchoa-section__content-item chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
              <div class="mdl-card mdl-shadow--2dp chuchoa-card-product">
                <div class="mdl-card__media chuchoa-card-product__media">
                  <a href="single-product.html">
                    <img alt="some product" class="chuchoa-card-product__image" src="assets/images/product/default-a.jpg"> 
                    <img alt="some product" class="chuchoa-card-product__image" src="assets/images/product/default-b.jpg">
                  </a>
                  <div class="mdl-card__title chuchoa-card-product__title">
                    <h3 class="mdl-card__title-text chuchoa-card-product__title-text">
                      <a href="single-product.html" class="mdl-typography--font-light">Toyota Innova</a>
                    </h3>
                    <span class="mdl-typography--text-uppercase mdl-typography--font-bold chuchoa-card-product__tags">
                      <a href="shop.html" rel="tag">E 2.0MT</a>, <a href="shop.html" rel="tag">2012</a>
                    </span>
                    <div class="chuchoa-card-product-installment chuchoa-card-product__installment--animated">
                      <span>Mua trả góp chỉ từ 220 <em>triệu</em></span>
                    </div>
                  </div>
                  <div class="chuchoa-card-product__badge chuchoa-card-product__badge-hight chuchoa-product-badge">590</div>
                </div>
                <div class="mdl-card__actions chuchoa-card-product-actions">                  
                  <div class="chuchoa-product-info mdl-grid mdl-grid--no-spacing">
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">info_outline</i> Đã qua SD</span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">av_timer</i> 41.000km</span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">settings_input_svideo</i> Số sàn</span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">place</i> Hà Nội</span>
                  </div>                  
                </div>
              </div>
            </div>
            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone chuchoa-section__content-item chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
              <div class="mdl-card mdl-shadow--2dp chuchoa-card-product">
                <div class="mdl-card__media chuchoa-card-product__media">
                  <a href="single-product.html">
                    <img alt="some product" class="chuchoa-card-product__image" src="assets/images/product/default-a.jpg"> 
                    <img alt="some product" class="chuchoa-card-product__image" src="assets/images/product/default-b.jpg">
                  </a>
                  <div class="mdl-card__title chuchoa-card-product__title">
                    <h3 class="mdl-card__title-text chuchoa-card-product__title-text">
                      <a href="single-product.html" class="mdl-typography--font-light">Toyota Innova</a>
                    </h3>
                    <span class="mdl-typography--text-uppercase mdl-typography--font-bold chuchoa-card-product__tags">
                      <a href="shop.html" rel="tag">E 2.0MT</a>, <a href="shop.html" rel="tag">2012</a>
                    </span>                    
                  </div>
                  <div class="chuchoa-card-product__badge chuchoa-card-product__badge-hight chuchoa-product-badge">590</div>
                </div>
                <div class="mdl-card__actions chuchoa-card-product-actions">                  
                  <div class="chuchoa-product-info mdl-grid mdl-grid--no-spacing">
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">info_outline</i> Đã qua SD</span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">av_timer</i> 41.000km</span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">settings_input_svideo</i> Số sàn</span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">place</i> Hà Nội</span>
                  </div>                  
                </div>
              </div>
            </div>
            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone chuchoa-section__content-item chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
              <div class="mdl-card mdl-shadow--2dp chuchoa-card-product">
                <div class="mdl-card__media chuchoa-card-product__media">
                  <a href="single-product.html">
                    <img alt="some product" class="chuchoa-card-product__image" src="assets/images/product/default-a.jpg"> 
                    <img alt="some product" class="chuchoa-card-product__image" src="assets/images/product/default-b.jpg">
                  </a>
                  <div class="mdl-card__title chuchoa-card-product__title">
                    <h3 class="mdl-card__title-text chuchoa-card-product__title-text">
                      <a href="single-product.html" class="mdl-typography--font-light">Toyota Innova</a>
                    </h3>
                    <span class="mdl-typography--text-uppercase mdl-typography--font-bold chuchoa-card-product__tags">
                      <a href="shop.html" rel="tag">E 2.0MT</a>, <a href="shop.html" rel="tag">2012</a>
                    </span>
                    <div class="chuchoa-card-product-installment chuchoa-card-product__installment--animated">
                      <span>Mua trả góp chỉ từ 220 <em>triệu</em></span>
                    </div>
                  </div>
                  <div class="chuchoa-card-product__badge chuchoa-card-product__badge-hight chuchoa-product-badge">590</div>
                </div>
                <div class="mdl-card__actions chuchoa-card-product-actions">                  
                  <div class="chuchoa-product-info mdl-grid mdl-grid--no-spacing">
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">info_outline</i> Đã qua SD</span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">av_timer</i> 41.000km</span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">settings_input_svideo</i> Số sàn</span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">place</i> Hà Nội</span>
                  </div>                  
                </div>
              </div>
            </div>
          </div>
        </div>        
      </div>

      <div class="chuchoa-section chuchoa-section--parallax">
        <div class="chuchoa-section__content chuchoa-usermail-section--parallax mdl-color--primary">
          <div class="mdl-grid mdl-grid--no-fullwidth mdl-color--primary-contrast mdl-shadow--2dp">
            <div class="mdl-grid chuchoa-margin-left-20 mdl-typography--text-center">
              <div class="mdl-cell mdl-cell--12-col chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                <h2 class="mdl-typography--display-1 mdl-typography--font-thin chuchoa-usermail-section--header">
                  Đừng bỏ lỡ cơ hội mua xe tốt
                </h2>
              </div>
              <div class="mdl-cell mdl-cell--2-col mdl-cell--12-col-tablet mdl-cell--12-col-phone"></div>

              <div class="mdl-cell mdl-cell--3-col mdl-cell--12-col-tablet mdl-cell--12-col-phone chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                <div class="mdl-textfield mdl-js-textfield textfield-demo mdl-textfield--floating-label">
                  <label class="mdl-textfield__label" for="signup-name">Tên của bạn</label> 
                  <input class="mdl-textfield__input" type="text">
                </div>
              </div>
              <div class="mdl-cell mdl-cell--3-col mdl-cell--12-col-tablet mdl-cell--12-col-phone chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                <div class="mdl-textfield mdl-js-textfield textfield-demo mdl-textfield--floating-label">
                  <label class="mdl-textfield__label" for="signup-email">Email của bạn</label> 
                  <input class="mdl-textfield__input" type="text">
                </div>
              </div>
              <div class="mdl-cell mdl-cell--2-col mdl-cell--12-col-tablet mdl-cell--12-col-phone mdl-cell--middle chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-js-ripple-effect mdl-button--accent chuchoa-margin-bottom-10">Gửi</button>
              </div>
              <div class="mdl-cell mdl-cell--2-col"></div>
            </div>
          </div>          
        </div>
      </div>
            
      <div class="chuchoa-section" id="chuchoa-top-product-section">
        <div class="chuchoa-section__content">
          <div class="mdl-grid mdl-grid--no-fullwidth">
            <div class="mdl-cell mdl-cell--12-col chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
              <h2 class="mdl-typography--display-1 mdl-typography--text-center mdl-typography--font-light chuchoa-section__content-header">Đáng chú ý</h2>
              <div class="chuchoa-divider chuchoa-divider--center chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                <div class="chuchoa-divider__border"></div>
              </div>
            </div>
          </div>
          <div class="mdl-grid mdl-grid--no-fullwidth">
            <div class="mdl-cell mdl-cell--4-col mdl-cell--12-col-tablet mdl-cell--12-col-phone chuchoa-section__content-item chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
              <div class="mdl-card mdl-shadow--2dp chuchoa-card-product">
                <div class="mdl-card__media chuchoa-card-product__media">
                  <a href="single-product.html">
                    <img alt="some product" class="chuchoa-card-product__image" src="assets/images/product/default-a.jpg"> 
                    <img alt="some product" class="chuchoa-card-product__image" src="assets/images/product/default-b.jpg">
                  </a>
                  <div class="mdl-card__title chuchoa-card-product__title">
                    <h3 class="mdl-card__title-text chuchoa-card-product__title-text">
                      <a href="single-product.html" class="mdl-typography--font-light">Toyota Innova</a>
                    </h3>
                    <span class="mdl-typography--text-uppercase mdl-typography--font-bold chuchoa-card-product__tags">
                      <a href="shop.html" rel="tag">E 2.0MT</a>, <a href="shop.html" rel="tag">2012</a>
                    </span>
                    <div class="chuchoa-card-product-installment chuchoa-card-product__installment--animated">
                      <span>Mua trả góp chỉ từ 220 <em>triệu</em></span>
                    </div>
                  </div>
                  <div class="chuchoa-card-product__badge chuchoa-card-product__badge-hight chuchoa-product-badge">590</div>
                </div>
                <div class="mdl-card__actions chuchoa-card-product-actions">                  
                  <div class="chuchoa-product-info mdl-grid mdl-grid--no-spacing">
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">info_outline</i> Đã qua SD</span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">av_timer</i> 41.000km</span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">settings_input_svideo</i> Số sàn</span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">place</i> Hà Nội</span>
                  </div>                  
                </div>
              </div>
            </div>

            <div class="mdl-cell mdl-cell--4-col mdl-cell--12-col-tablet mdl-cell--12-col-phone chuchoa-section__content-item chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
              <div class="mdl-card mdl-shadow--2dp chuchoa-card-product">
                <div class="mdl-card__media chuchoa-card-product__media">
                  <a href="single-product.html">
                    <img alt="some product" class="chuchoa-card-product__image" src="assets/images/product/default-a.jpg"> 
                    <img alt="some product" class="chuchoa-card-product__image" src="assets/images/product/default-b.jpg">
                  </a>
                  <div class="mdl-card__title chuchoa-card-product__title">
                    <h3 class="mdl-card__title-text chuchoa-card-product__title-text">
                      <a href="single-product.html" class="mdl-typography--font-light">Toyota Innova</a>
                    </h3>
                    <span class="mdl-typography--text-uppercase mdl-typography--font-bold chuchoa-card-product__tags">
                      <a href="shop.html" rel="tag">E 2.0MT</a>, <a href="shop.html" rel="tag">2012</a>
                    </span>
                    <div class="chuchoa-card-product-installment chuchoa-card-product__installment--animated">
                      <span>Mua trả góp chỉ từ 220 <em>triệu</em></span>
                    </div>
                  </div>
                  <div class="chuchoa-card-product__badge chuchoa-card-product__badge-hight chuchoa-product-badge">590</div>
                </div>
                <div class="mdl-card__actions chuchoa-card-product-actions">                  
                  <div class="chuchoa-product-info mdl-grid mdl-grid--no-spacing">
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">info_outline</i> Đã qua SD</span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">av_timer</i> 41.000km</span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">settings_input_svideo</i> Số sàn</span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">place</i> Hà Nội</span>
                  </div>                  
                </div>
              </div>
            </div>
            <div class="mdl-cell mdl-cell--4-col mdl-cell--12-col-tablet mdl-cell--12-col-phone chuchoa-section__content-item chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
              <div class="mdl-card mdl-shadow--2dp chuchoa-card-product">
                <div class="mdl-card__media chuchoa-card-product__media">
                  <a href="single-product.html">
                    <img alt="some product" class="chuchoa-card-product__image" src="assets/images/product/default-a.jpg"> 
                    <img alt="some product" class="chuchoa-card-product__image" src="assets/images/product/default-b.jpg">
                  </a>
                  <div class="mdl-card__title chuchoa-card-product__title">
                    <h3 class="mdl-card__title-text chuchoa-card-product__title-text">
                      <a href="single-product.html" class="mdl-typography--font-light">Toyota Innova</a>
                    </h3>
                    <span class="mdl-typography--text-uppercase mdl-typography--font-bold chuchoa-card-product__tags">
                      <a href="shop.html" rel="tag">E 2.0MT</a>, <a href="shop.html" rel="tag">2012</a>
                    </span>
                    <div class="chuchoa-card-product-installment chuchoa-card-product__installment--animated">
                      <span>Mua trả góp chỉ từ 220 <em>triệu</em></span>
                    </div>
                  </div>
                  <div class="chuchoa-card-product__badge chuchoa-card-product__badge-hight chuchoa-product-badge">590</div>
                </div>
                <div class="mdl-card__actions chuchoa-card-product-actions">                  
                  <div class="chuchoa-product-info mdl-grid mdl-grid--no-spacing">
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">info_outline</i> Đã qua SD</span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">av_timer</i> 41.000km</span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">settings_input_svideo</i> Số sàn</span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">place</i> Hà Nội</span>
                  </div>                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="chuchoa-section">
        <div class="chuchoa-section__content">
          <div class="mdl-grid mdl-grid--no-spacing">
            <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
              <div class="google-map" id="map">
                <!-- AIzaSyCmqQab02Sp0bQOb2c6izrXt7BVaA_HjXw -->
                <iframe frameborder="0" style="width:100%;height:395px;border:0" src="https://www.google.com/maps/embed/v1/view?zoom=17&center=21.0461%2C105.8055&key=AIzaSyCmqQab02Sp0bQOb2c6izrXt7BVaA_HjXw" allowfullscreen></iframe>
              </div>
            </div>  
            <div class="mdl-grid mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone chuchoa-animation mdl-color--primary mdl-color-text--primary-contrast" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
              <div class="mdl-cell mdl-cell--12-col">
                <h2 class="mdl-typography--display-1 mdl-typography--text-center mdl-typography--font-light chuchoa-margin-top-40 chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">Địa điểm</h2>
                <div class="chuchoa-divider chuchoa-divider--center">
                  <div class="chuchoa-divider__border"></div>
                </div>
              </div>
              <div class="mdl-cell mdl-cell--1-col mdl-cell--8-col-tablet"></div>
              <div class="mdl-cell mdl-cell--5-col mdl-cell--4-col-tablet chuchoa-animation mdl-typography--text-center" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                <h4 class="mdl-typography--title">ChuChoa.com</h4>
                <p>Hoàng Quốc Việt</p>
                <p>Cầu Giấy</p>
                <p>Hà Nội</p>                
              </div>
              <div class="mdl-cell mdl-cell--5-col mdl-cell--4-col-tablet chuchoa-animation mdl-typography--text-center" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                <h4 class="mdl-typography--title">Hotline</h4>
                <p>Bán hàng 1: 0979908950</p>
                <p>Bán hàng 2: 0979908950</p>
                <p>Bán hàng 3: 0979908950</p>
                <p>Kỹ thuật  : 0979908950</p>
              </div>
              <div class="mdl-cell mdl-cell--1-col mdl-cell--8-col-tablet"></div>
            </div>  
          </div>          
        </div>
      </div>
      
      <div class="chuchoa-section">
        <div class="chuchoa-section__content">
          <div class="mdl-grid mdl-grid--no-fullwidth">
            <div class="mdl-cell mdl-cell--12-col chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
              <h2 class="mdl-typography--display-1 mdl-typography--text-center mdl-typography--font-light chuchoa-section__content-header">Thương hiệu hàng đầu</h2>
              <div class="chuchoa-divider chuchoa-divider--center chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                <div class="chuchoa-divider__border"></div>
              </div>
            </div>
          </div>
          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-tablet mdl-cell--12-col-phone">
              <div class="mdl-card mdl-shadow--2dp chuchoa-card-brand chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                <div class="mdl-card__media chuchoa-card-brand__media">
                  <img alt="some post" class="chuchoa-card-brand__image" src="assets/images/brand/kia.png">
                  <div class="mdl-card__title chuchoa-card-brand__title">
                    <h2 class="mdl-card__title-text chuchoa-card-brand__title-text">
                      <a href="post.html">Kia</a>
                    </h2>                    
                  </div>
                </div>
                <!-- <div class="mdl-card__supporting-text chuchoa-card__supporting-text">
                  Ban đầu, với thị trường chưa thực sự phát triển, chưa có nhiều nhu cầu, thì Kia chỉ sản xuất xe đạp và thép. 
                </div> -->
                <div class="mdl-card__actions mdl-card--border chuchoa-card-brand-actions">
                  <span class="chuchoa-card-brand-tags"><a href="posts.html" rel="tag">Kia Morning</a>, <a href="posts.html" rel="tag">Kia K3</a>, <a href="posts.html" rel="tag">Kia Sportage</a></span> 
                </div>
              </div>
            </div>

            <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-tablet mdl-cell--12-col-phone">
              <div class="mdl-card mdl-shadow--2dp chuchoa-card-brand chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                <div class="mdl-card__media chuchoa-card-brand__media">
                  <img alt="some post" class="chuchoa-card-brand__image" src="assets/images/brand/audi.png">
                  <div class="mdl-card__title chuchoa-card-brand__title">
                    <h2 class="mdl-card__title-text chuchoa-card-brand__title-text">
                      <a href="post.html">Audi</a>
                    </h2>                    
                  </div>
                </div>
                <!-- <div class="mdl-card__supporting-text chuchoa-card__supporting-text">
                  Ban đầu, với thị trường chưa thực sự phát triển, chưa có nhiều nhu cầu, thì Kia chỉ sản xuất xe đạp và thép. 
                </div> -->
                <div class="mdl-card__actions mdl-card--border chuchoa-card-brand-actions">
                  <span class="chuchoa-card-brand-tags"><a href="posts.html" rel="tag">Q7</a></span> 
                </div>
              </div>
            </div>
            <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-tablet mdl-cell--12-col-phone">
              <div class="mdl-card mdl-shadow--2dp chuchoa-card-brand chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                <div class="mdl-card__media chuchoa-card-brand__media">
                  <img alt="some post" class="chuchoa-card-brand__image" src="assets/images/brand/chevrolet.png">
                  <div class="mdl-card__title chuchoa-card-brand__title">
                    <h2 class="mdl-card__title-text chuchoa-card-brand__title-text">
                      <a href="post.html">Chevrolet</a>
                    </h2>                    
                  </div>
                </div>
                <!-- <div class="mdl-card__supporting-text chuchoa-card__supporting-text">
                  Ban đầu, với thị trường chưa thực sự phát triển, chưa có nhiều nhu cầu, thì Kia chỉ sản xuất xe đạp và thép. 
                </div> -->
                <div class="mdl-card__actions mdl-card--border chuchoa-card-brand-actions">
                  <span class="chuchoa-card-brand-tags"><a href="posts.html" rel="tag">Cruze</a></span> 
                </div>
              </div>
            </div>
            <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-tablet mdl-cell--12-col-phone">
              <div class="mdl-card mdl-shadow--2dp chuchoa-card-brand chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                <div class="mdl-card__media chuchoa-card-brand__media">
                  <img alt="some post" class="chuchoa-card-brand__image" src="assets/images/brand/ford.png">
                  <div class="mdl-card__title chuchoa-card-brand__title">
                    <h2 class="mdl-card__title-text chuchoa-card-brand__title-text">
                      <a href="post.html">Ford</a>
                    </h2>                    
                  </div>
                </div>
                <!-- <div class="mdl-card__supporting-text chuchoa-card__supporting-text">
                  Ban đầu, với thị trường chưa thực sự phát triển, chưa có nhiều nhu cầu, thì Kia chỉ sản xuất xe đạp và thép. 
                </div> -->
                <div class="mdl-card__actions mdl-card--border chuchoa-card-brand-actions">
                  <span class="chuchoa-card-brand-tags"><a href="posts.html" rel="tag">Escape</a></span> 
                </div>
              </div>
            </div>
            <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-tablet mdl-cell--12-col-phone">
              <div class="mdl-card mdl-shadow--2dp chuchoa-card-brand chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                <div class="mdl-card__media chuchoa-card-brand__media">
                  <img alt="some post" class="chuchoa-card-brand__image" src="assets/images/brand/honda.png">
                  <div class="mdl-card__title chuchoa-card-brand__title">
                    <h2 class="mdl-card__title-text chuchoa-card-brand__title-text">
                      <a href="post.html">Honda</a>
                    </h2>                    
                  </div>
                </div>
                <!-- <div class="mdl-card__supporting-text chuchoa-card__supporting-text">
                  Ban đầu, với thị trường chưa thực sự phát triển, chưa có nhiều nhu cầu, thì Kia chỉ sản xuất xe đạp và thép. 
                </div> -->
                <div class="mdl-card__actions mdl-card--border chuchoa-card-brand-actions">
                  <span class="chuchoa-card-brand-tags"><a href="posts.html" rel="tag">Civic</a>, <a href="posts.html" rel="tag">CR 5</a></span> 
                </div>
              </div>
            </div>
            <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-tablet mdl-cell--12-col-phone">
              <div class="mdl-card mdl-shadow--2dp chuchoa-card-brand chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                <div class="mdl-card__media chuchoa-card-brand__media">
                  <img alt="some post" class="chuchoa-card-brand__image" src="assets/images/brand/hyundai.png">
                  <div class="mdl-card__title chuchoa-card-brand__title">
                    <h2 class="mdl-card__title-text chuchoa-card-brand__title-text">
                      <a href="post.html">Hyundai</a>
                    </h2>                    
                  </div>
                </div>
                <!-- <div class="mdl-card__supporting-text chuchoa-card__supporting-text">
                  Ban đầu, với thị trường chưa thực sự phát triển, chưa có nhiều nhu cầu, thì Kia chỉ sản xuất xe đạp và thép. 
                </div> -->
                <div class="mdl-card__actions mdl-card--border chuchoa-card-brand-actions">
                  <span class="chuchoa-card-brand-tags"><a href="posts.html" rel="tag">Elantra</a>, <a href="posts.html" rel="tag">Genesis</a>, <a href="posts.html" rel="tag">i10</a>
                    , <a href="posts.html" rel="tag">i30</a>, <a href="posts.html" rel="tag">Santafe</a>, <a href="posts.html" rel="tag">Tucson</a>
                  </span> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="chuchoa-section chuchoa-section--parallax">
        <div class="chuchoa-section__content chuchoa-contact-section--parallax mdl-color--primary">
          <div class="mdl-grid mdl-grid--no-fullwidth  mdl-color--primary-contrast mdl-shadow--2dp">
            <div class="mdl-cell mdl-cell--12-col chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
              <h2 class="mdl-typography--display-1 mdl-typography--font-thin chuchoa-search--header mdl-typography--text-center">Giảm giá 10% cho đơn hàng đầu tiên</h2>              
            </div>
            <div class="mdl-cell mdl-cell--12-col mdl-cell--middle mdl-typography--text-center">
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <label class="mdl-textfield__label" for="discount-email">Email của bạn</label> 
                <input class="mdl-textfield__input" type="text" id="discount-email">
              </div>
            </div>
            <div class="mdl-cell mdl-cell--12-col mdl-cell--middle mdl-typography--text-center">
              <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-js-ripple-effect mdl-button--accent chuchoa-contact--button">
                Theo dõi
              </button>
           </div>
          </div>   
        </div>
      </div>

      <div class="chuchoa-section">
        <div class="chuchoa-section__content">
          <div class="mdl-grid mdl-grid--no-fullwidth">
            <div class="mdl-cell mdl-cell--12-col chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
              <h2 class="mdl-typography--display-1 mdl-typography--text-center mdl-typography--font-light chuchoa-section__content-header">Tin tức</h2>
              <div class="chuchoa-divider chuchoa-divider--center chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                <div class="chuchoa-divider__border"></div>
              </div>
            </div>
          </div>
          <div class="mdl-grid mdl-grid--no-fullwidth">
            <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
              <div class="mdl-card mdl-shadow--2dp chuchoa-card-post chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                <div class="mdl-card__media chuchoa-card-post__media">
                  <img alt="some post" class="chuchoa-card-post__image" src="assets/images/news/default.jpg">
                  <div class="mdl-card__title mdl-card__post-title chuchoa-card-post__title">
                    <h2 class="mdl-card__title-text chuchoa-card-post__title-text">
                      <a href="post.html">Vintage Look is back</a>
                    </h2>
                    <span class="mdl-typography--text-uppercase mdl-typography--font-bold chuchoa-card-post__info">
                      <a href="posts.html">Morris Onions</a> 
                      August 10, 2017
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
              <div class="mdl-card mdl-shadow--2dp chuchoa-card-post chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                <div class="mdl-card__media chuchoa-card-post__media">
                  <img alt="some post" class="chuchoa-card-post__image" src="assets/images/news/default.jpg">
                  <div class="mdl-card__title mdl-card__post-title chuchoa-card-post__title">
                    <h2 class="mdl-card__title-text chuchoa-card-post__title-text">
                      <a href="post.html">Vintage Look is back</a>
                    </h2>
                    <span class="mdl-typography--text-uppercase mdl-typography--font-bold chuchoa-card-post__info">
                      <a href="posts.html">Morris Onions</a> 
                      August 10, 2017
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
              <div class="mdl-card mdl-shadow--2dp chuchoa-card-post chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                <div class="mdl-card__media chuchoa-card-post__media">
                  <img alt="some post" class="chuchoa-card-post__image" src="assets/images/news/default.jpg">
                  <div class="mdl-card__title mdl-card__post-title chuchoa-card-post__title">
                    <h2 class="mdl-card__title-text chuchoa-card-post__title-text">
                      <a href="post.html">Vintage Look is back</a>
                    </h2>
                    <span class="mdl-typography--text-uppercase mdl-typography--font-bold chuchoa-card-post__info">
                      <a href="posts.html">Morris Onions</a> 
                      August 10, 2017
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="mdl-mega-footer">
        <div class="mdl-mega-footer--middle-section">
          <div class="mdl-mega-footer--drop-down-section">
            <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked="">
            <h1 class="mdl-mega-footer--heading">Chứng nhận</h1>
            <div class="mdl-mega-footer__widget">              
              <p>Giấy chứng nhận đăng ký doanh nghiệp số xxxxxxxxx do Sở Kế Hoạch và Đầu Tư XXXX cấp ngày 08/08/2017 </p>
            </div>
            <div class="mdl-mega-footer__widget">
              <i class="fa fa-cc-mastercard"></i> &nbsp; <i class="fa fa-cc-visa"></i> &nbsp; <i class="fa fa-cc-amex"></i> &nbsp; <i class="fa fa-cc-diners-club"></i> &nbsp; <i class="fa fa-cc-paypal"></i> &nbsp; <i class="fa fa-cc-jcb"></i>
            </div>
          </div>
          
          <div class="mdl-mega-footer--drop-down-section">
            <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked="">
            <h1 class="mdl-mega-footer--heading">Địa chỉ</h1>
            <div class="mdl-mega-footer__widget">
              <p>Số xxx, ngõ yyy, Đường Hoàng Quốc Việt, Quận Cầu Giấy<br>0979.908.950<br></p>
              <p><a href="#">chuchoa.com</a><br>cuongnd.ami@outlook.com</p>
              <p>
                <a href="#" class="mdl-button mdl-js-button mdl-button--icon"><i class="fa fa-facebook"></i></a> 
                <a href="#" class="mdl-button mdl-js-button mdl-button--icon"><i class="fa fa-twitter"></i></a> 
                <a href="#" class="mdl-button mdl-js-button mdl-button--icon"><i class="fa fa-flickr"></i></a> 
                <a href="#" class="mdl-button mdl-js-button mdl-button--icon"><i class="fa fa-linkedin"></i></a>
              </p>
            </div>
          </div>
          
          <div class="mdl-mega-footer--drop-down-section">
            <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked="">
            <h1 class="mdl-mega-footer--heading">Xe mới đăng bán</h1><div class="mdl-mega-footer__widget">
              <a href="single-product.html"><img width="60" class="chuchoa-margin-bottom-10 chuchoa-margin-right-10" src="assets/images/product/default-a.jpg" alt="product thumbnail"></a> 
              <a href="single-product.html"><img width="60" class="chuchoa-margin-bottom-10 chuchoa-margin-right-10" src="assets/images/product/default-b.jpg" alt="product thumbnail"></a> 
              <a href="single-product.html"><img width="60" class="chuchoa-margin-bottom-10 chuchoa-margin-right-10" src="assets/images/product/default-a.jpg" alt="product thumbnail"></a> 
              <a href="single-product.html"><img width="60" class="chuchoa-margin-bottom-10 chuchoa-margin-right-10" src="assets/images/product/default-b.jpg" alt="product thumbnail"></a> 
              <a href="single-product.html"><img width="60" class="chuchoa-margin-bottom-10 chuchoa-margin-right-10" src="assets/images/product/default-a.jpg" alt="product thumbnail"></a> 
              <a href="single-product.html"><img width="60" class="chuchoa-margin-bottom-10 chuchoa-margin-right-10" src="assets/images/product/default-b.jpg" alt="product thumbnail"></a> 
              <a href="single-product.html"><img width="60" class="chuchoa-margin-bottom-10 chuchoa-margin-right-10" src="assets/images/product/default-a.jpg" alt="product thumbnail"></a> 
              <a href="single-product.html"><img width="60" class="chuchoa-margin-bottom-10 chuchoa-margin-right-10" src="assets/images/product/default-b.jpg" alt="product thumbnail"></a> 
              <a href="single-product.html"><img width="60" class="chuchoa-margin-bottom-10 chuchoa-margin-right-10" src="assets/images/product/default-a.jpg" alt="product thumbnail"></a> 
              
            </div>
          </div>

           <div class="mdl-mega-footer--drop-down-section">
            <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked="">            
            <h1 class="mdl-mega-footer--heading">ChuChoa.com</h1>
            <div class="mdl-mega-footer__widget">              
              <ul class="mdl-mega-footer--link-list">
                <li><a href="shop.html">Mua</a></li>
                <li><a href="sell.html">Bán</a></li>
                <li><a href="service.html">Dịch vụ</a></li>
                <li><a href="page-card.html">Tin tức</a></li>
                <li><a href="contact.html">Liên hệ</a></li>
                <li><a href="about.html">Giới thiệu</a></li>
              </ul>
            </div>
          </div>
        </div>          
      </footer>

    </div>
  </div>
  
  <script defer src="assets/js/base-site.js"></script>
  <script defer src="assets/js/custom-site.js"></script>
</body>

</html>