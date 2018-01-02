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

get_header(); ?>

<div class="chuchoa-content mdl-layout__content">
	<div class="chuchoa-banner-section">
		<div class="banner-slide">
			<div class="slide">
				<div id="layerslider" style="width: 100%; height: 600px;">
					<?php 
						$slider_posts_query = cc_get_sliders_frontpage();
						while ($slider_posts_query->have_posts()){
							$slider_posts_query->the_post();
							$slider_posts = get_attached_media( 'image', get_the_ID() );
							foreach($slider_posts as $slider_post){
							?>
								<div class="ls-slide" style="slidedirection: right; transition2d: 92,93,105; ">
									<img src="<?php echo the_post_thumbnail_url();?>" class="ls-bg" alt="<?php the_title(); ?>">
									<span class="chuchoa-banner--title ls-s-1" style=" color: #fff; line-height:35px; font-weight: 600; font-size: 32px; top:100px; left: 50px; slidedirection : right; slideoutdirection : left; durationin : 1000; durationout : 1000; text-transform: uppercase; ">
										<?php the_title(); ?>
									</span>
									<span class="chuchoa-banner--subtitle ls-s-1" style=" color: #fff; line-height:24px; font-weight: 200; font-size: 18px; top:150px; left: 50px; slidedirection : left; slideoutdirection : right; durationin : 1000; durationout : 1000">
										<?php the_excerpt(); ?>
									</span>
									<a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--primary ls-s-1" 
										href="#" 
										style="top:225px; left: 50px; slidedirection : right; slideoutdirection : left; durationin : 2000; durationout : 2000;                    
										height: 36px;margin: 0;padding: 0 16px;line-height: 36px;vertical-align: middle;">
										Chi tiết
									</a>
								</div>	
								
							<?php
							}
						};
						wp_reset_postdata();
					?>
					
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
</div>	

<?php get_footer();
