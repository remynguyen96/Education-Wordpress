<?php get_header(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 bg_product">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                        <div class="breadcrumb_link">
                            <a href="<?php echo home_url(); ?> ">Trang chủ</a>
                            &nbsp;<span>&#187;</span>&nbsp;
                            <a href="<?php echo home_url('danh-sach-san-pham'); ?> ">Sản phẩm</a>
                            &nbsp;<span>&#187;</span>&nbsp;
                            <?php the_title() ?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 all_tip">
                        <?php
                        if(have_posts()):
                            while(have_posts()):
                                the_post();
                                $url_img = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
                         ?>
                         <div class="col-xs-12 col-sm-12 col-lg-6 col-md-6">
                             <div class="img_page_default text-center">
                                 <a id="Zoom" class="MagicZoom" title="<?php the_title(); ?>" href=" <?php echo $url_img ?>" data-options="zoomOn: hover;textHoverZoomHint:Zoom; zoomCaption: bottom; hint: once; variableZoom: true; lazyZoom: true;">
                                 <?php the_post_thumbnail(); ?>
                                </a>
                             </div>
                         </div>
                         <div class="col-xs-12 col-sm-12 col-lg-6 col-md-6">
                             <div class="product_info">
                                 <h2 class="text-capitalize title_single"><?php the_title(); ?></h2>
                                 <p><span>Giá</span> <strong><?php  echo get_post_meta(get_the_ID(),'wpcf-price',true); ?></strong> VNĐ</p>
                                 <div class="facebook">
                                     <a href="javascript:void(0)" class="share_button"><img src="<?php echo get_template_directory_uri()."/img/fbshare.png" ?>"></a>
                                     <input type="hidden" class="link_fb" value="<?php the_permalink()?>">
                                     <input type="hidden" class="img_fb" value="<?php echo $url_img ?>">
                                     <div class="description_fb hide">
                                         <?php strip_tags(the_excerpt()) ?>
                                     </div>
                                     <input type="hidden" class="name_fb" value="<?php the_title() ?>">
                                 </div>
                             </div>
                             <div class="product_orther">
                                 <a href="#" class="order_embroidery hover-animation">Đặt Hàng</a>
                                 <div class="modal fade modal_product_show" tabindex="-1">
                                   <div class="modal-dialog modal-lg" role="document">
                                     <div class="modal-content">
                                       <div class="modal-body">
                                           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                          <div class="info_order_buy">
                                              <div class="order_img">
                                                  <a id="Zoom" class="MagicZoom" title="<?php the_title(); ?>" href=" <?php echo $url_img ?>" data-options="zoomOn: hover;textHoverZoomHint:Zoom; zoomCaption: bottom; hint: once; variableZoom: true; lazyZoom: true;">
                                                  <?php the_post_thumbnail(); ?>
                                                 </a>
                                              </div>
                                              <div class="all_order_content">
                                                  <div class="info_product_order">
                                                      <h3 class="title_contact_modal">
                                                          <?php the_title(); ?>
                                                      </h3>
                                                      <p>Giá: <span class="price_contact_modal"><?php  echo get_post_meta(get_the_ID(),'wpcf-price',true); ?>
                                                      </span> <u>đ</u></p>
                                                      <img src="<?php echo get_template_directory_uri()."/img/title_detail.png" ?>" alt="Title">
                                                  </div>
                                                  <div class="contact_order">
                                                      <h4>THÔNG TIN ĐẶT HÀNG</h4>
                                                      <div class="contact_user">
                                                          <?php echo do_shortcode('[contact-form-7 id="107" title="Thông tin đặt hàng"]') ?>
                                                      </div>
                                                      <script media="screen">
                                                          jQuery(function($){
                                                              $("#name_product").val(" <?php the_title(); ?>");
                                                              $("#price_product").val("<?php  echo get_post_meta(get_the_ID(),'wpcf-price',true); ?>");
                                                          });
                                                      </script>
                                                  </div>
                                              </div>
                                          </div>
                                           <div class="contact">
                                               <h3>liên hệ:</h3>
                                               <h3>01649 414 849</h3>
                                               <h3>hoặc</h3>
                                               <h3>01675 189 209</h3>
                                           </div>
                                       </div>
                                     </div>
                                   </div>
                                 </div>
                             </div>
                             <div class="product_chat">
                                 <a href="#" class="chat_now hover-animation">Liên Hệ</a>
                             </div>
                         </div>
                         <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                             <h3 class="text-capitalize more_info">Mô Tả Về Sản Phẩm</h3>
                             <div class="content_page_default text-center">
                                 <?php the_content(); ?>
                             </div>
                             <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 cm_facebook">
                                 <div class="fb-comments" data-href="https://www.facebook.com/NguyenTietNgocChau96" data-numposts="35" data-width="100%"></div>
                             </div>
                         </div>
                         <?php
                             endwhile;
                         endif;
                         ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    jQuery(function($){
        $(".name_product").hide()
        $(".price_product").hide()
        $(".order_embroidery").click(function(e){
            e.preventDefault();
            $(".modal_product_show").modal();
        });

        $(".chat_now").click(function(e){
            e.preventDefault();
            $(".fbmsg-badge").trigger('click');
        });
        // facebookshare
        $('.share_button').click(function(e){
            var name = $(this).closest(".facebook").find(".name_fb").val();
            var link = $(this).closest(".facebook").find(".link_fb").val();
            var picture = $(this).closest(".facebook").find(".img_fb").val();
            var description = $(this).closest(".facebook").find(".description_fb").text();
            e.preventDefault();
                    FB.ui(
                    {
                        method: 'feed',
                        name: name,
                        link: link,
                        picture: picture,
                        caption: 'Tranh Thêu Tay Hải Yến',
                        description: description,
                        // message: "This is Message",
                    });
            });
    });
</script>
<?php get_footer() ?>
