<?php get_header(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="bg_home"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 infomation">
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-offset-1 col-lg-10 col-lg-offset-1 introduce">
                <h2>Tranh thêu tay</h2>
                <p><?php  Introduce_home(); ?></p>
                <!-- <p><em>
                    <strong>Tranh thêu tay Hải Yến</strong> tự hào đã góp phần tạo nên sắc màu mới cho dòng <strong>tranh thêu tay truyền thống Việt Nam</strong>. Là món quà độc đáo và đậm đà tình nghĩa quê hương dành cho những người thân yêu và bạn bè khi đến Việt Nam tham quan du lịch. Chúng tôi mong muốn mang những giá trị văn hóa nghệ thuật đặc biệt này giới thiệu tới khắp miền đất nước Việt Nam và bạn bè trên Thế Giới.
                </em></p> -->
                <img src="<?php echo get_template_directory_uri()."/img/slogan.png " ?> " alt="Giữ gìn văn hóa" />
            </div>
        </div>
        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 product">
                <div class="intro_product">
                    <h3>Sản phẩm</h3>
                    <div id="product-slider" class="owl-carousel owl-theme">
                        <?php
                        $list_product = array(
                            'post_type' => 'san-pham',
                            'posts_per_page'=> 15,
                            'category_name' => 'hien-ngoai-trang-chu',
                            'orderby'      => 'rand',
                        );
                        $query_product = new WP_Query($list_product);
                        if($query_product->have_posts()):
                            while($query_product->have_posts()):
                                $query_product->the_post();
                                $url_img = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
                         ?>
                         <div class="item">
                             <a id="Zoom" class="MagicZoom" title="<?php the_title(); ?>" href=" <?php echo $url_img ?>" data-options="zoomOn: hover;textHoverZoomHint:Zoom; zoomCaption: bottom; hint: off; variableZoom: true; lazyZoom: true;">
                             <?php the_post_thumbnail("home_product"); ?>
                            </a>
                            <a href="<?php the_permalink(); ?>"><p class="title_slider"><?php the_title(); ?></p></a>
                         </div>
                         <?php
                             endwhile;
                         endif;
                         ?>
                    </div>
                </div>

                <script type="text/javascript">
                    jQuery(document).ready(function($){
                        $(".MagicZoom").click(function(){
                            $(this).find()
                        });
                    });
                </script>

                <p class="btn_all">
                    <a href="<?php echo home_url('danh-sach-san-pham') ?>">
                        <img src="<?php echo get_template_directory_uri()."/img/btn.png" ?> " alt="Xem tất cả" />
                        <span>Xem tất cả</span>
                    </a>
                </p>
        </div>
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 news">
            <h3 class="h3_news">Tin tức & sự kiện</h3>
            <div class="container">
                <div class="row">
                    <div id="news-slider" class="owl-carousel owl-theme">
                        <?php
                        $list_news = array(
                            'post_type' => 'post',
                            'posts_per_page'=> 5,
                            'category__in' => array(5,6),
                            'orderby'      => 'rand',
                        );
                        $query_news = new WP_Query($list_news);
                        if($query_news->have_posts()):
                            while($query_news->have_posts()):
                                $query_news->the_post()
                         ?>
                         <div class="list_news">
                             <div class="news_content">
                                 <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                 <p>
                                     <?php the_excerpt(); ?>
                                 </p>
                             </div>
                             <div class="news_img">
                                 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail("home_news"); ?></a>
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
<?php get_footer(); ?>
