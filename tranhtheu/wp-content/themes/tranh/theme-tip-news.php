<?php
/*
    Template Name: Cẩm nang và Tin Tức
*/
get_header();
?>
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
                        <h2 class="text-capitalize">Danh Sách <?php the_title(); ?></h2>
                        <?php
                        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                        $url_page = get_page_uri();
                        $list_product = array(
                            'post_type' => 'post',
                            'posts_per_page'=> 4,
                            'paged' => $paged,
                            'category_name' => $url_page,
                        );
                        $query_product = new WP_Query($list_product);
                        if($query_product->have_posts()):
                            while($query_product->have_posts()):
                                $query_product->the_post();
                                $url_img = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
                         ?>
                         <div class="all_news_tip">
                             <div class="img_tip">
                                 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('tip_news'); ?></a>
                             </div>
                             <div class="content_tip">
                                 <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                 <i><?php echo get_the_date('d/m/Y',get_the_ID())?></i>
                                 <div class="sumary_content">
                                     <?php the_excerpt(); ?>
                                 </div>
                             </div>
                         </div>
                         <?php
                             endwhile;
                         endif;
                         ?>
                         <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 pagination text-center">
                            <?php  wp_pagenavi(array('query'=>$query_product)); ?>
                         </div>
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
<?php get_footer() ?>
