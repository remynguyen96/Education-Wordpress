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
                            <?php the_title() ?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-lg-9 col-md-9 all_tip">
                        <?php
                        if(have_posts()):
                            while(have_posts()):
                                the_post();
                                $url_img = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
                         ?>
                             <div class="facebook_single">
                                 <a href="javascript:void(0)" class="share_button"><img src="<?php echo get_template_directory_uri()."/img/fbshare.png" ?>"></a>
                                 <input type="hidden" class="link_fb" value="<?php the_permalink()?>">
                                 <input type="hidden" class="img_fb" value="<?php echo $url_img ?>">
                                 <div class="description_fb hide">
                                     <?php strip_tags(the_excerpt()) ?>
                                 </div>
                                 <input type="hidden" class="name_fb" value="<?php the_title() ?>">
                             </div>
                            <h2 class="text-capitalize"><?php the_title(); ?></h2>

                            <div class="img_page_default text-center">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="content_page_default">
                                <?php the_content(); ?>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 cm_facebook">
                                <div class="fb-comments" data-href="https://www.facebook.com/NguyenTietNgocChau96" data-numposts="35" data-width="100%"></div>
                            </div>
                         <?php
                             endwhile;
                         endif;
                         ?>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-lg-3 col-md-3 sidebar_product">
                        <h3 class="text-capitalize product_good">sản phẩm nổi bật</h3>
                        <?php
                        $list_product = array(
                            'post_type' => 'san-pham',
                            'posts_per_page'=> 4,
                            'category_name' => 'san-pham-noi-bat',
                        );
                        $query_product = new WP_Query($list_product);
                        if($query_product->have_posts()):
                            while($query_product->have_posts()):
                                $query_product->the_post();
                                $url_img = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
                         ?>
                             <div class="all_news">
                                 <div class="img_news">
                                     <a id="Zoom" class="MagicZoom" title="<?php the_title(); ?>" href=" <?php echo $url_img ?>" data-options="zoomOn: hover;textHoverZoomHint:Zoom; zoomCaption: none; hint: off; variableZoom: true; lazyZoom: true;">
                                     <?php the_post_thumbnail(); ?>
                                    </a>
                                 </div>
                                 <div class="content_news">
                                     <a href="<?php the_permalink() ?>"><h4><?php the_title(); ?></h4></a>
                                     <span><?php  echo get_post_meta(get_the_ID(),'wpcf-price',true); ?> VNĐ</span>
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
        // facebookshare
        $('.share_button').click(function(e){
            var name = $(this).closest(".facebook_single").find(".name_fb").val();
            var link = $(this).closest(".facebook_single").find(".link_fb").val();
            var picture = $(this).closest(".facebook_single").find(".img_fb").val();
            var description = $(this).closest(".facebook_single").find(".description_fb").text();
            e.preventDefault();
                    FB.ui(
                    {
                        method: 'feed',
                        name: name,
                        link: link,
                        picture: picture,
                        caption: 'Tranh Thêu Tay Hải Yến',
                        description: description,
                    });
            });
    });
</script>
<?php get_footer() ?>
