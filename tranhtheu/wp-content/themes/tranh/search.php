<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 co-lg-12 col-md-12">
            <header class="search_page">
                <h2 class="page_title"><?php printf( __( 'Kết quả tìm kiếm cho từ khóa: '."<strong>%s</strong>", 'computer' ), get_search_query() ); ?></h2>
            </header>
<?php
if(have_posts()):
    while(have_posts()):
        the_post();
?>
        <div class="col-xs-12 col-sm-6 col-lg-4 col-md-4 product_search">
            <a id="Zoom" class="MagicZoom" title="<?php the_title(); ?>" href=" <?php echo $url_img ?>" data-options="zoomOn: hover;textHoverZoomHint:Zoom; zoomCaption: bottom; hint: once; variableZoom: true; lazyZoom: true;">
            <?php the_post_thumbnail("home_product"); ?>
           </a>
           <a href="<?php the_permalink(); ?>"><p class="title_slider"><?php the_title(); ?></p></a>
        </div>
<?php
    endwhile;
else:
?>
    <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 not_found_search">
        <h3>Không tìm thấy thông tin</h3>
    </div>
    <div class="search_orther">
        <h3>Danh Sách Sản Phẩm Nổi Bật</h3>
        <?php
        $list_product = array(
            'post_type' => 'san-pham',
            'posts_per_page'=> 6,
            'category_name' =>'san-pham-noi-bat',
        );
        $query_product = new WP_Query($list_product);
        if($query_product->have_posts()):
            while($query_product->have_posts()):
                $query_product->the_post();
         ?>
             <div class="col-xs-12 col-sm-6 col-lg-4 col-md-4 product_search">
                 <a id="Zoom" class="MagicZoom" title="<?php the_title(); ?>" href=" <?php echo $url_img ?>" data-options="zoomOn: hover;textHoverZoomHint:Zoom; zoomCaption: bottom; hint: once; variableZoom: true; lazyZoom: true;">
                 <?php the_post_thumbnail("home_product"); ?>
                </a>
                <a href="<?php the_permalink(); ?>"><p class="title_slider"><?php the_title(); ?></p></a>
             </div>
        <?php
             endwhile;
         endif;
         ?>
    </div>
<?php
endif;
?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
