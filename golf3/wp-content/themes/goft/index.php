<?php get_header(); ?>
<?php $image_home = Img_home() ?>
<?php get_template_part("template-parts/slider");?>
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

<div class="container-fluid bg_services">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 title_service">
            <?php $introduce1 =  Introduce1(); ?>
            <?php if($introduce1[0] != ""): ?>
                <h2 class='text-center'><?php _e(Limit_String(100,$introduce1[0]),'golf') ?></h2>
            <?php else: ?>
                <h2 class="text-center"><?php _e( 'We Ensure Our Best Services To You', 'golf' ); ?></h2>
            <?php endif ?>
            <?php if($introduce1[1] != ""): ?>
                <p class='text-center'><?php _e(Limit_String(350,$introduce1[1]),'golf'); ?></p>
            <?php else: ?>
                <p class="text-center">
                    <?php _e( 'We are very confident in providing customers with only the best and professional services for not only individual but also organizations, industry partners in Vietnam and all over the world', 'golf' ); ?>
                </p>
            <?php endif ?>
        </div>
        <div class="bg-header">
            <img src="<?php echo url."/img/bg-header2.png" ?>" alt="We Ensure Our Best Services To You" class="img-responsive w100">
        </div>
    </div>
</div>

<?php $service = Service(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 info_service">
            <?php if(isset($image_home[0])){echo $image_home[0];} ?>
            <div class="content_service">
                <h3 class="text-center">
                    <a href="#" class="title_header_1"><?php _e( 'Create Your Trip', 'golf' ); ?></a>
                </h3>
                <?php if($service[0] != ""):?>
                    <p class='text-center'><?php _e(Limit_String(180,$service[0]),'golf') ?></p>
                <?php else: ?>
                    <p class="text-center">
                        <?php _e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'golf' ); ?>
                    </p>
                <?php endif ?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 info_service">
            <?php if(isset($image_home[1])){echo $image_home[1];} ?>
            <div class="content_service">
                <h3 class="text-center">
                    <a href="#" class="title_header_2"><?php _e( 'Golf Holidays', 'golf' ); ?></a>
                </h3>
                <?php if($service[1] != ""):?>
                        <p class='text-center'><?php _e(Limit_String(180,$service[1]),'golf'); ?></p>
                <?php else: ?>
                    <p class="text-center">
                        <?php _e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'golf' ); ?>
                    </p>
                <?php endif ?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 info_service">
            <?php if(isset($image_home[2])){echo $image_home[2];} ?>
            <div class="content_service">
                <h3 class="text-center">
                    <a href="#" class="title_header_3"><?php _e( 'Book Your Teetimes', 'golf' ); ?></a>
                </h3>
                <?php if($service[2] != ""):?>
                        <p class='text-center'><?php _e(Limit_String(180,$service[2]),'golf'); ?></p>
                <?php else: ?>
                    <p class="text-center">
                        <?php _e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'golf' ); ?>
                    </p>
                <?php endif ?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 service_middle">
            <?php if(isset($image_home[3])){echo $image_home[3];} ?>
        </div>
    </div>
</div>
<!-- Top In Vietnam -->
<div class="container-fluid top_vn">
    <div class="row">
        <div class="bg-middle-1">
            <img src="<?php echo url."/img/bg-mid1.png" ?>" alt="Top In VietNam" class="img-responsive w100">
        </div>
        <?php $introduce2 = Introduce2() ?>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 info_top">
                    <h3 class="text-center">Top In Vietnam</h3>
                    <img src="<?php echo url."/img/title.png" ?>" alt="Top In Vietnam" class="img-responsive w100">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 content_top">
                        <?php if($introduce2[0] != ""):?>
                            <p class='text-center'><?php _e(($introduce2[0]),'golf'); ?></p>
                        <?php else: ?>
                            <p class="text-center">
                                <?php _e('We are very confident in providing customers with only the best and professional services for not only individual but also organizations, industry partners in Vietnam and all over the world.','golf') ?>
                            </p>
                        <?php endif ?>
                    </div>
                </div>
                <!--product top in VN-->
                <?php
                $list_event=  array(
                    'post_type' => "golf-travels",
                    'posts_per_page' => -1,
                     "tax_query" =>array(
                         'relation' => 'AND',
                        array(
                            'taxonomy' => 'goft-travel-categories',
                            'field'    => 'slug',
                            'terms' => array('show-home'),
                             'operator' => 'IN'
                        ),
                        array(
                            'taxonomy' => 'goft-travel-categories',
                            'field'    => 'slug',
                            'terms' => array('best-choice'),
                             'operator' => 'IN'
                        ),
                    ),
                );
                $query = new WP_Query($list_event);
                if($query->have_posts()):
                    while($query->have_posts()):
                        $query->the_post();
                ?>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 product_top">
                    <img src="<?php echo url."/img/product_top.png" ?>" alt="Product" class="img-responsive images_products">
                    <img src="<?php echo url."/img/best.png" ?>" alt="Product Best" class="img-responsive product_best">
                    <div class="info_product_top">
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 price_pax">
                            <div class="top_price">
                                <div class="price_4">
                                    <span>$</span>
                                </div>
                                <div class="price_3">
                                    <span><?php echo get_post_meta(get_the_ID(),'wpcf-price',true); ?></span>
                                </div>
                            </div>
                            <div class="top_pax">
                                <p><?php _e('one pax','golf') ?></p>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-8 col-lg-8 content_pax">
                            <a href="<?php the_permalink() ?>" class="title_top"><h4 class=""><?php the_title() ?></h4></a>
                            <p class="description_top">
                                 <?php echo excerpt(9) ?>
                            </p>
                            <div class="description_top2">
                                <p>- Facilities -</p>
                                <span><img src="<?php echo url."/img/icon_sleep.png" ?>" alt="Top In VietNam" class="img-responsive"></span>
                                <span><img src="<?php echo url."/img/icon-plane.png" ?>" alt="Top In VietNam" class="img-responsive"></span>
                                <span><img src="<?php echo url."/img/icon-eat.png" ?>" alt="Top In VietNam" class="img-responsive"></span>
                                <a href="<?php the_permalink() ?>" class="btn btn-success a_medium">+ infor</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    endwhile;
                endif;
                ?>

                <?php
                $list_event=  array(
                    'post_type' => "golf-travels",
                    'posts_per_page' => -1,
                     "tax_query" =>array(
                         'relation' => 'AND',
                        array(
                            'taxonomy' => 'goft-travel-categories',
                            'field'    => 'slug',
                            'terms' => array('show-home'),
                             'operator' => 'IN'
                        ),
                        array(
                            'taxonomy' => 'goft-travel-categories',
                            'field'    => 'slug',
                            'terms' => array('hot-deal'),
                             'operator' => 'IN'
                        ),
                    ),
                );
                $query = new WP_Query($list_event);
                if($query->have_posts()):
                    while($query->have_posts()):
                        $query->the_post();
                ?>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 product_top">
                    <img src="<?php echo url."/img/product_top.png" ?>" alt="Product" class="img-responsive images_products">
                    <img src="<?php echo url."/img/hotdeal.png" ?>" alt="Product" class="img-responsive product_sale">
                    <div class="info_product_top">
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 price_pax">
                            <div class="top_price">
                                <div class="price_4">
                                    <span>$</span>
                                </div>
                                <div class="price_3">
                                    <span><?php echo get_post_meta(get_the_ID(),'wpcf-price',true); ?></span>
                                </div>
                            </div>
                            <div class="top_pax">
                                <p><?php _e('one pax','golf') ?></p>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-8 col-lg-8 content_pax">
                            <a href="<?php the_permalink(); ?>" class="title_top"><h4 class=""><?php the_title() ?></h4></a>
                            <p class="description_top">
                                 <?php echo excerpt(9) ?>
                            </p>
                            <div class="description_top2">
                                <p>- Facilities -</p>
                                <span><img src="<?php echo url."/img/icon_sleep.png" ?>" alt="Top In VietNam" class="img-responsive"></span>
                                <span><img src="<?php echo url."/img/icon-plane.png" ?>" alt="Top In VietNam" class="img-responsive"></span>
                                <span><img src="<?php echo url."/img/icon-eat.png" ?>" alt="Top In VietNam" class="img-responsive"></span>
                                <a href="<?php the_permalink(); ?>" class="btn btn-success a_medium">+ infor</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    endwhile;
                endif;
                ?>
                <?php
                $list_event=  array(
                    'post_type' => "golf-travels",
                    'posts_per_page' => -1,
                     "tax_query" =>array(
                         'relation' => 'AND',
                        array(
                            'taxonomy' => 'goft-travel-categories',
                            'field'    => 'slug',
                            'terms' => array('show-home'),
                             'operator' => 'IN'
                        ),
                        array(
                            'taxonomy' => 'goft-travel-categories',
                            'field'    => 'slug',
                            'terms' => array('normal'),
                             'operator' => 'IN'
                        ),
                    ),
                );
                $query = new WP_Query($list_event);
                if($query->have_posts()):
                    while($query->have_posts()):
                        $query->the_post();
                ?>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 product_top">
                    <img src="<?php echo url."/img/product_top.png" ?>" alt="Product" class="img-responsive images_products">
                    <div class="info_product_top">
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 price_pax">
                            <div class="top_price">
                                <div class="price_4">
                                    <span>$</span>
                                </div>
                                <div class="price_3">
                                    <span><?php echo get_post_meta(get_the_ID(),'wpcf-price',true); ?></span>
                                </div>
                            </div>
                            <div class="top_pax">
                                <p><?php _e('one pax','golf') ?></p>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-8 col-lg-8 content_pax">
                            <a href="<?php the_permalink(); ?>" class="title_top"><h4 class=""><?php the_title() ?></h4></a>
                            <p class="description_top">
                                 <?php echo excerpt(9) ?>
                            </p>
                            <div class="description_top2">
                                <p>- Facilities -</p>
                                <span><img src="<?php echo url."/img/icon_sleep.png" ?>" alt="Top In VietNam" class="img-responsive"></span>
                                <span><img src="<?php echo url."/img/icon-plane.png" ?>" alt="Top In VietNam" class="img-responsive"></span>
                                <span><img src="<?php echo url."/img/icon-eat.png" ?>" alt="Top In VietNam" class="img-responsive"></span>
                                <a href="<?php the_permalink(); ?>" class="btn btn-success a_medium">+ infor</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    endwhile;
                endif;
                ?>
                <div class="col-xs-12 col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4 see_more">
                    <a href="<?php echo home_url('vietnam-golf-holidays') ?>"><img src="<?php echo Img_All_Btn()[2] ?> ?>" alt="See More Course" class="img-responsive"></a>
                </div>
            </div>
        </div>
        <div class="bg-middle-2">
            <img src="<?php echo url."/img/bg-mid2.png" ?>" alt="Top In VietNam" class="img-responsive w100">
        </div>
    </div>
</div>
<!--  Top In The World -->
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 info_top info_world">
            <h3 class="text-center">Top In The World</h3>
            <img src="<?php echo url."/img/title.png" ?>" alt="Top In The World" class="img-responsive w100">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 content_top">
                <?php if($introduce2[1] != ""):?>
                    <p class='text-center'><?php _e(($introduce2[1]),'golf'); ?></p>
                <?php else: ?>
                    <p class="text-center">
                        <?php _e('We are very confident in providing customers with only the best and professional services for not only individual but also organizations, industry partners in Vietnam and all over the world.','golf') ?>
                    </p>
                <?php endif ?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 product_world">
            <img src="<?php echo Top_World1()[3] ?>" alt="Top In The World" class="product_img img-responsive">
            <img src="<?php echo url."/img/course.png" ?>" alt="Top In The World" class="product_course img-responsive">
            <div class="number_courses">
                <h4><?php echo Top_World1()[1] ?></h4>
                <span>courses</span>
            </div>
            <div class="border_product_world"></div>
            <div class="content_product_world">
                <a href="<?php echo Top_World1()[4] ?>"><h3>Thailand</h3></a>
                <p>
                    <?php echo Top_World1()[2] ?>
                </p>
                <a href="<?php echo Top_World1()[4] ?>" class="info_product_world">+information</a>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 product_world">
            <img src="<?php echo Top_World2()[3] ?>" alt="Top In The World" class="product_img img-responsive">
            <img src="<?php echo url."/img/course.png" ?>" alt="Top In The World" class="product_course img-responsive">
            <div class="number_courses">
                <h4><?php echo Top_World2()[1] ?></h4>
                <span>courses</span>
            </div>
            <div class="border_product_world"></div>
            <div class="content_product_world">
                <a href="<?php echo Top_World2()[4] ?>"><h3>Thailand</h3></a>
                <p>
                    <?php echo Top_World2()[2] ?>
                </p>
                <a href="<?php echo Top_World2()[4] ?>" class="info_product_world">+information</a>
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 product_world">
            <img src="<?php echo Top_World3()[3] ?>" alt="Top In The World" class="product_img img-responsive">
            <img src="<?php echo url."/img/course.png" ?>" alt="Top In The World" class="product_course img-responsive">
            <div class="number_courses">
                <h4><?php echo Top_World3()[1] ?></h4>
                <span>courses</span>
            </div>
            <div class="border_product_world"></div>
            <div class="content_product_world">
                <a href="<?php echo Top_World3()[4] ?>"><h3>Thailand</h3></a>
                <p>
                    <?php echo Top_World3()[2] ?>
                </p>
                <a href="<?php echo Top_World3()[4] ?>" class="info_product_world">+information</a>
            </div>
        </div>


        <div class="col-xs-12 col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4 see_more">
            <a href="<?php echo home_url('vietnam-golf-holidays') ?>"><img src="<?php echo Img_All_Btn()[0] ?>" alt="See More Course" class="img-responsive"></a>
        </div>
    </div>
</div>
<!--  News and Events -->
<div class="container-fluid all_news_events">
    <div class="row">
        <div class="bg-middle-1">
            <img src="<?php echo url."/img/bg-mid1.png" ?>" alt="Top In VietNam" class="img-responsive w100">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 info_top">
                    <h3 class="text-center">News and Events</h3>
                    <img src="<?php echo url."/img/title.png" ?>" alt="Top In Vietnam" class="img-responsive w100">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 content_top">
                        <?php if($introduce2[2] != ""):?>
                            <p class='text-center'><?php _e(($introduce2[2]),'golf'); ?></p>
                        <?php endif ?>
                    </div>
                </div>
                <section id="product-slider" class="owl-carousel owl-theme">
                    <?php
                    $list_news = array(
                        'post_type' => 'news-and-events',
                        'posts_per_page' => -1,
                        "tax_query" =>array(
                    		array(
                    			'taxonomy' => 'category-news',
                    			'field'    => 'slug',
                    			'terms'    => 'show_home',
                    		),
                    	),
                    );
                    $query_news = new WP_Query($list_news);
                    if($query_news->have_posts()):
                        while($query_news->have_posts()):
                            $query_news->the_post()
                    ?>
                    <div class="news_event">
                        <?php the_post_thumbnail(); ?>
                        <a href="#"><h3><?php the_title(); ?></h3></a>
                        <span><?php echo get_the_date('d/m/Y',get_the_ID())?></span>
                        <div class="border_news_event"></div>
                        <p>
                            <?php echo excerpt(15); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="read_news">- Read more - </a>
                    </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </section>
            </div>
        </div>
        <div class="bg-middle-2">
            <img src="<?php echo url."/img/bg-mid2.png" ?>" alt="Top In VietNam" class="img-responsive w100">
        </div>
    </div>
</div>
<!--  What People Say About Us -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 info_top people_say_us">
                <h3 class="text-center">What People Say About Us</h3>
                <img src="<?php echo url."/img/title.png" ?>" alt="Top In Vietnam" class="img-responsive w100">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 content_top">
                    <?php if($introduce2[3] != ""):?>
                        <p class='text-center'><?php _e(($introduce2[3]),'golf'); ?></p>
                    <?php else: ?>
                        <p class="text-center">
                            <?php _e('We are very confident in providing customers with only the best and professional services for not only individual but also organizations, industry partners in Vietnam and all over the world.','golf') ?>
                        </p>
                    <?php endif ?>
                </div>
            </div>

        <section id="people-slider" class="owl-carousel owl-theme">
            <?php
            $list_people = array(
                'post_type' => 'news-and-events',
                'posts_per_page' => -1,
                "tax_query" =>array(
                    array(
                        'taxonomy' => 'category-news',
                        'field'    => 'slug',
                        'terms'    => 'people-say-us',
                    ),
                ),
            );
            $query_people = new WP_Query($list_people);
            if($query_people->have_posts()):
                while($query_people->have_posts()):
                    $query_people->the_post()
            ?>
            <div class="people_say">
                <div class="img_people">
                    <?php the_post_thumbnail() ?>
                </div>
                <div class="content_people">
                    <img src="<?php echo url."/img/text-people.png" ?>" alt="See More Course" class="img-responsive">
                        <span><?php echo excerpt(50); ?></span>
                    <div class="border_people"></div>
                    <div class="author_intro">
                        <h4 class="author_say"><?php the_title(); ?></h4>
                        <div class="text_say"><?php the_content(); ?></div>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
            endif;
?>
        </section>
        </div>
    </div>
<!--  Our Valued Partners -->
    <div class="container-fluid all_partner">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 info_top partner_home">
                <h3 class="text-center">Our Valued Partners</h3>
                <img src="<?php echo url."/img/title.png" ?>" alt="Top In Vietnam" class="img-responsive w100">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 content_top">
                    <?php if($introduce2[4] != ""):?>
                        <p class='text-center'><?php _e(($introduce2[4]),'golf'); ?></p>
                    <?php else: ?>
                        <p class="text-center">
                            <?php _e('We are very confident in providing customers with only the best and professional services for not only individual but also organizations, industry partners in Vietnam and all over the world.','golf') ?>
                        </p>
                    <?php endif ?>
                </div>
            </div>
            <section id="parner-slider" class="owl-carousel">
              <?php
                 $img_partners = Slider_Partner();
                  if(isset($img_partners[0])){echo $img_partners[0];}
                  if(isset($img_partners[1])){echo $img_partners[1];}
                  if(isset($img_partners[2])){echo $img_partners[2];}
                  if(isset($img_partners[3])){echo $img_partners[3];}
                  if(isset($img_partners[4])){echo $img_partners[4];}
                  if(isset($img_partners[5])){echo $img_partners[5];}
                  if(isset($img_partners[6])){echo $img_partners[6];}
                  if(isset($img_partners[7])){echo $img_partners[7];}
                  if(isset($img_partners[8])){echo $img_partners[8];}
                  if(isset($img_partners[9])){echo $img_partners[9];}
              ?>
            </section>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <?php if(isset($image_home[4])){echo $image_home[4];} ?>
        </div>
    </div>
<?php get_footer(); ?>
