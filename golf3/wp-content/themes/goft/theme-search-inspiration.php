<?php
/*
	Template Name: 	Result search get inspiration
*/
get_header();
?>
<div class="container">
    <div class="row">
<?php
if(isset($_POST['submit'])):
    $keyword= $_POST['search_inspiration'];
    $round= $_POST['round'];
    $durations= $_POST['durations'];
    $list = array(
        'post_type' => 'golf-travels',
        'posts_per_page' => -1,
        's' => $keyword,
    );
    $query = new WP_Query($list);
    if($query->have_posts()) :
        ?>
        <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
            <h2 class="text-center have_key">Kết quả tìm kiếm cho từ khóa : <?php echo $keyword ?></h2>
        </div>
        <?php
        while($query->have_posts()):
            $query->the_post();
            if($round ==  get_post_meta(get_the_ID(),'wpcf-round',true) && $durations ==  get_post_meta(get_the_ID(),'wpcf-durations',true)):
            ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 show_hotel_rental search_inspiration">
                <div class="img_hotel_rental">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="content_hotel_rental">
                    <h3><?php the_title(); ?></h3>
                    <p>Round number: <?php echo get_post_meta(get_the_ID(),'wpcf-durations',true) ?></p>
                    <p>Durations: <?php echo get_post_meta(get_the_ID(),'wpcf-durations',true) ?></p>
                    <p><?php _e('Price form','golf') ?> : $<?php echo get_post_meta(get_the_ID(),'wpcf-price',true) ?>/day</p>
                </div>
                <div class="info_hotel_rental">
                    <a href="<?php the_permalink(); ?>">+infor</a>
                </div>
            </div>
<?php
            endif;
        endwhile;
    else:
?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <h1 class="text-center no_have_key">Không Tìm Thấy Kết Quả Tìm Kiếm</h1>
</div>
<?php
    endif;
endif;
?>
    </div>
</div>
<?php get_footer() ?>
