<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>

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
              <p><?php echo cc_get_footer_address(); ?><br><?php echo cc_get_footer_tel(); ?><br><?php echo cc_get_footer_Email(); ?><br></p>
              
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

<?php wp_footer(); ?>

</body>
</html>