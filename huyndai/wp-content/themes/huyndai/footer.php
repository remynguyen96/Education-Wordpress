<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			
            <div class="footer_area container">
            	<div class="row hidden-xs">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <?php 
                            wp_nav_menu(array(
                                'theme_location'=>'footer-menu',
                                'menu_container'=>'',
                                'menu_id'=>'footer-menu',
                                'menu_class'=>'clear'
                            ));
                        ?>
                    </div>
                    <div class="contact col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    		<dl class="text clear">
                            	<dt class="fl"><img src="<?php echo get_template_directory_uri();?>/images/forma2.png" alt="" title="" /></dt>
                                <dd class="fl">Hotline</dd>
                            </dl>
                            
                            <dl class="phone clear">
                            	<dt class="seller">Bán hàng</dt>
                                <dd>0987.66.72.66</dd>
                            </dl>
                            
                             <dl class="phone clear">
                            	<dt class="service">Dịch vụ</dt>
                                <dd>0987.66.72.66</dd>
                            </dl>
                            
                             <dl class="phone clear">
                            	<dt class="help">Cứu hộ</dt>
                                <dd>0987.66.72.66</dd>
                            </dl>	
                    </div>
                </div><!--row-->    
                
                <?php get_template_part('footer2');?>
                
            </div><!--container-->

		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7&appId=209924809409722";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<?php wp_footer(); ?>
</body>
</html>
