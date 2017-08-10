<?php
/*
    Template Name: Booking Tee Times
*/
get_header();
$image_home = Img_home();
get_template_part("template-parts/slider");?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
            <div class="box-slider">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 search_box form-group">
                        <label for=""><?php _e( 'What are you looking for?', 'golf' ); ?></label>
                        <select name="search-golf" id="search-golf" class="form-control">
                            <option value="<?php echo home_url() ?>"><?php _e('Booking my golf Trip','golf')?></option>
                            <option value="<?php echo home_url('create-your-trip') ?>"><?php _e('Create my Golf Trip','golf') ?></option>
                            <option value="<?php echo home_url() ?>"><?php _e('Booking my Teetime','golf') ?></option>
                            <option value="<?php echo home_url() ?>"><?php _e('Reserve Hotel','golf') ?></option>
                            <option value="<?php echo home_url() ?>"><?php _e('Rent a car','golf') ?></option>
                        </select>
                        <input type="button" class="pull-right search_slider" value="GO" id="btn-go">
                        <script type="text/javascript">
                            jQuery(function($){
                                $('#btn-go').click(function(){
                                    window.location.href = $('#search-golf').val();
                                })
                            });
                        </script>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 subscribe">
                    <label for=""><?php _e( 'Sign up to receive promotion form Unigolf', 'golf' ); ?></label>
                    <?php echo do_shortcode('[contact-form-7 id="5" title="subscribe"]') ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php while(have_posts()): the_post(); ?>

<div class="container-fluid bg_services">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 title_service">
                <h2 class="text-center text-capitalize"><?php the_title(); ?></h2>
                <p class="text-center"><?php the_content(); ?></p>
        </div>
        <div class="bg-header">
            <img src="<?php echo url."/img/bg-header2.png" ?>" alt="We Ensure Our Best Services To You" class="img-responsive w100">
        </div>
    </div>
</div>
<!-- -->
<div class="container-fluid top_vn slider_tee_time">
    <div class="row">

        <div class="container">
            <div class="row">
        <section id="tee_times_slide" class="owl-carousel owl-theme">
        <?php
            $list = array(
                'post_type' => 'golf-services',
                'posts_per_page' => 10,
                'meta_query' => array(
                   array(
                       'key' => 'wpcf-hot',
                       'value' => 1,
                   )
               )
            );
            $query =new WP_Query($list);
            if($query->have_posts()):
            while($query->have_posts()):
                $query->the_post();
         ?>
             <div class='item'>
                 <div class="tee_slide">
                     <div class="img_tee_slide">
                         <?php the_post_thumbnail(); ?>
                     </div>
                     <div class="content_tee_slide">
                         <h3><?php the_title(); ?></h3>
                         <p class="excerpt_tee"><?php echo excerpt(30) ?></p>
                         <div class="field_single field_hotel">
                             <span><?php _e('Designed By','golf'); ?></span>
                             <div class="single_hotel">
                                 <?php echo get_post_meta(get_the_ID(),'wpcf-design-by',true) ?>
                             </div>
                         </div>
                         <div class="field_single field_hotel">
                             <span><?php _e('Round number','golf'); ?></span>
                             <div class="single_round">
                                 <?php echo get_post_meta(get_the_ID(),'wpcf-round',true) ?>
                                  <?php _e('rounds','golf'); ?>
                             </div>
                         </div>
                         <div class="field_single field_hotel">
                             <span><?php _e('Period','golf'); ?></span>
                             <div class="single_period">
                                 <?php echo get_post_meta(get_the_ID(),'wpcf-period',true) ?>
                             </div>
                         </div>
                         <div class="field_single field_hotel">
                             <span><?php _e('Price','golf'); ?></span>
                             <div class="single_price">
                                 <?php _e('From','golf'); ?> $<?php echo get_post_meta(get_the_ID(),'wpcf-price',true) ?>/<?php _e('pax','golf'); ?>
                             </div>
                         </div>
                         <a href="<?php the_permalink() ?>" class="btn btn-success infor_tee">+ infor</a>
                     </div>
                 </div>
             </div>
        <?php endwhile;endif ?>
        </section>
            </div>
        </div>


        <div class="bg-middle-2">
            <img src="<?php echo url."/img/bg-mid2.png" ?>" alt="Top In VietNam" class="img-responsive w100">
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 info_top page_tee_times">
            <h3 class="text-center text-transform">Our Golf Courses In Vietnam </h3>
            <img src="<?php echo url."/img/title.png" ?>" alt="Top In Vietnam" class="img-responsive w100">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 content_top">
                    <p class="text-center">
                        <?php _e('We are very confident in providing customers with only the best and professional services for not only individual but also organizations, industry partners in Vietnam and all over the world.','golf') ?>
                    </p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 page_tee_golf">
            <h3 class="text-capitalize">In The North(17)</h3>
            <p><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Alsace</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 page_tee_golf">
            <h3 class="text-capitalize">In The Center(9)</h3>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 page_tee_golf">
            <h3 class="text-capitalize">In The South(14)</h3>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
        </div>
    </div>
</div>

<!--  -->

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 info_top">
            <h3 class="text-center text-transform">Our Golf Courses Around The World </h3>
            <img src="<?php echo url."/img/title.png" ?>" alt="Top In Vietnam" class="img-responsive w100">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 content_top">
                    <p class="text-center">
                        <?php _e('We are very confident in providing customers with only the best and professional services for not only individual but also organizations, industry partners in Vietnam and all over the world.','golf') ?>
                    </p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 page_tee_golf">
            <h3 class="text-capitalize">Thailand</h3>
            <p><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Alsace</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 page_tee_golf">
            <h3 class="text-capitalize">Singapore</h3>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 page_tee_golf">
            <h3 class="text-capitalize">American</h3>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 page_tee_golf">
            <h3 class="text-capitalize">China</h3>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 page_tee_golf">
            <h3 class="text-capitalize">Indonesia</h3>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 page_tee_golf">
            <h3 class="text-capitalize">Myanmar</h3>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 page_tee_golf">
            <h3 class="text-capitalize">Cambodia</h3>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 page_tee_golf">
            <h3 class="text-capitalize">Philippines</h3>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 page_tee_golf">
            <h3 class="text-capitalize">Malaysia</h3>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
            <p><a href="#">anim id est laborum.</a></p>
        </div>
    </div>
</div>


<?php endwhile; ?>
<?php get_footer(); ?>
