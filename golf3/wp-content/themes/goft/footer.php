<footer class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" id="united_golf">
                    <h3 class="title_footer_1">© 2013 UNITED GOLF SERVICES</h3>
                    <div class="info_footer">
                        <?php $introduce3= Introduce3(); ?>
                        <?php if($introduce3[0] != ""):?>
                                <p>
                                    <?php _e($introduce3[0],'golf')?>
                                </p>
                        <?php else: ?>
                            <p>
                                <?php _e( 'Trụ sở: 1437 Nguyễn Văn Linh, Mỹ Toàn 2,
                                P. Tân Phong, Q. 7, TP. HCM
                                Điện thoại: 08 5412 5016
                                Email: sales@unigolf.vn', 'golf' ); ?>
                            </p>
                        <?php endif; ?>
                        <?php if($introduce3[1] != ""):?>
                                <p>
                                    <?php _e($introduce3[1],'golf')?>
                                </p>
                        <?php else: ?>
                            <p>
                                <?php _e('Giấy phép Thiết lập trang Thông tin điện
                                tử tổng hợp trên mạng số 21/GP-TTĐT
                                do Giám đốc  Sở Thông tin và Truyền
                                thông TP. HCM cấp ngày 31/03/2015', 'golf' ); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 part_pay">
                    <div class="partner_footer">
                        <h3 class="title_footer_2">PARTNER WITH</h3>
                        <img src="<?php echo url."/img/more/parner.png" ?>" alt="We Ensure Our Best Services To You">
                    </div>
                    <div class="payment_footer">
                        <h3 class="title_footer_2-2">PAYMENT METHODS</h3>
                        <img src="<?php echo url."/img/mastercard.png" ?>" alt="We Ensure Our Best Services To You">
                        <img src="<?php echo url."/img/visa.png" ?>" alt="We Ensure Our Best Services To You">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <h3 class="title_footer_3">contact</h3>
                    <div class="contact_footer">
                        <?php echo do_shortcode( '[contact-form-7 id="4" title="Contact Footer"]' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="container-fluid footer_end">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 notice_footer">
                    <?php $introduce4= Introduce4(); ?>
                        <p>
                            <a href="<?php echo home_url(); ?> "><?php _e('Trang chủ United Golf |','golf') ?></a>
                            <a href="#"><?php _e('Thông tin liên lạc  |','golf') ?></a>
                            <a href="#"><?php _e('Điều khoản sử dụng','golf') ?></a>
                        </p>
                    <?php  if($introduce4 != ""):?>
                        <p>
                            <?php  _e($introduce4,'golf') ?>
                        </p>
                    <?php else: ?>
                        <p>
                            <?php _e( 'Bản quyền thuộc về United Golf 2016.', 'golf' ); ?>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 social_footer">
                    <p>
                        Kết nối với United Golf tại:
                    </p>
                    <?php  $social = Link_Social();?>
                    <ul>
                        <li><a href="<?php echo $social[0]; ?>"><img src="<?php echo url."/img/facebook.png" ?>" alt="We Ensure Our Best Services To You"></a></li>
                        <li><a href="<?php echo $social[1]; ?>"><img src="<?php echo url."/img/twitter.png" ?>" alt="We Ensure Our Best Services To You"></a></li>
                        <li><a href="<?php echo $social[2]; ?>"><img src="<?php echo url."/img/google.png" ?>" alt="We Ensure Our Best Services To You"></a></li>
                        <li><a href="<?php echo $social[3]; ?>"><img src="<?php echo url."/img/in.png" ?>" alt="We Ensure Our Best Services To You"></a></li>
                        <li><a href="<?php echo $social[4]; ?>"><img src="<?php echo url."/img/paypal.png" ?>" alt="We Ensure Our Best Services To You"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=184244908704632";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php wp_footer(); ?>
</body>
</html>
