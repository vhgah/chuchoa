<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _tk
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$cc_latest_products = cc_get_latest_products();

get_header(); ?>

<div class="chuchoa-content mdl-layout__content">
	<div class="chuchoa-banner-section">
		<div class="banner-slide">
			<div class="slide">				
				<?php 
					echo do_shortcode('[smartslider3 slider=2]');
				?>
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

  <?php if ( count($cc_latest_products) > 0 ) :?>
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
          <?php foreach ( $cc_latest_products as $latest_product ) : ?>
            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone chuchoa-section__content-item chuchoa-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
              <div class="mdl-card mdl-shadow--2dp chuchoa-card-product">
                <div class="mdl-card__media chuchoa-card-product__media">
                  <a href="<?php echo esc_url( $latest_product['url'] ); ?>">
                    <img alt="<?php echo $latest_product['excerpt']; ?>" class="chuchoa-card-product__image" src="<?php echo $latest_product['image_url'];?>"> 
                    <img alt="<?php echo $latest_product['excerpt']; ?>" class="chuchoa-card-product__image" src="<?php echo $latest_product['image_url'];?>">
                  </a>
                  <div class="mdl-card__title chuchoa-card-product__title">
                    <h3 class="mdl-card__title-text chuchoa-card-product__title-text">
                      <a href="<?php echo esc_url( $latest_product['url'] ); ?>" class="mdl-typography--font-light"><?php echo $latest_product['title'] ?></a>
                    </h3>										
                    <span class="mdl-typography--text-uppercase mdl-typography--font-bold chuchoa-card-product__tags">
											<?php echo $latest_product['tags'];?>
                    </span>
										<?php if ($latest_product['coupone'] != "") :?>
											<div class="chuchoa-card-product-installment chuchoa-card-product__installment--animated">
												<span><?php echo $latest_product['coupone']; ?></span>
											</div>
										<?php endif;?>                    
                  </div>
                  <div class="chuchoa-card-product__badge <?php if ($latest_product['hot']) echo 'chuchoa-card-product__badge-hight';?> chuchoa-product-badge"><?php echo $latest_product['price']; ?></div>
                </div>
                <div class="mdl-card__actions chuchoa-card-product-actions">                  
                  <div class="chuchoa-product-info mdl-grid mdl-grid--no-spacing">
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">info_outline</i> <?php echo $latest_product['tinh_trang']; ?></span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">av_timer</i> <?php echo $latest_product['so_km']; ?></span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">settings_input_svideo</i> <?php echo $latest_product['hop_so']; ?></span>
                    <span class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone"><i class="chuchoa-product-info--icon material-icons">place</i><?php echo $latest_product['dia_diem']; ?></span>
                  </div>                  
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>        
    </div>        
  <?php endif;?>
	
</div>	

<?php get_footer();
