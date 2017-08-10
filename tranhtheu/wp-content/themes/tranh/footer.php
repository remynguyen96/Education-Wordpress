<div class="container-fluid">
    <div class="row">
        <footer class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 info_footer">
                        <div class="logo2">
                            <a href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri().("/img/logo.png") ?>" alt="Logo" /></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 info_footer info_footer2">
                        <h3>Cửa hàng tranh thêu tay Hải Yến</h3>
                        <p class="factory_footer">
                            <?php echo Introduce_footer()[0] ?>
                        </p>
                        <p class="address_footer">
                            <?php echo Introduce_footer()[1] ?>
                        </p>
                        <p class="phone_footer">
                            <?php echo Introduce_footer()[2] ?>
                        </p>
                        <p class="email_footer">
                            <?php echo Introduce_footer()[3] ?>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-4 col-lg-4 form_footer">
                        <h3>Liên Hệ</h3>
                        <?php echo do_shortcode('[contact-form-7 id="4" title="Liên hệ footer"]') ?>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<a href="tel:0976830624" mypage="" rel="nofollow">
      <div class="mypage-alo-phone">
        <div class="animated infinite zoomIn mypage-alo-ph-circle"></div>
        <div class="animated infinite pulse mypage-alo-ph-circle-fill"></div>
        <div class="animated infinite tada mypage-alo-ph-img-circle"></div>
      </div>
</a>
 <div id="fb-root"></div>
 <script>(function(d, s, id) {
   var js, fjs = d.getElementsByTagName(s)[0];
   if (d.getElementById(id)) return;
   js = d.createElement(s); js.id = id;
   js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=1767094836904687";
   fjs.parentNode.insertBefore(js, fjs);
 }(document, 'script', 'facebook-jssdk'));</script>
<?php wp_footer(); ?>
</body>
</html>
