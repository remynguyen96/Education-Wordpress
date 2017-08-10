<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 breadcrumbs">
            <span><img src="<?php echo url."/img/icon_home.png" ?>" alt="Home" /></span>
            <span><a href="<?php echo home_url(); ?>">Homepage </a></span>
            <span>&nbsp; &#187; &nbsp;</span>
            <span><a href="<?php echo home_url('golf-travel') ?>">Golf Travel</a></span>
            <span>&nbsp; &#187; &nbsp;</span>
            <span><a href="<?php echo home_url('vietnam-golf-holidays') ?>">Vietnam Golf Holidays</a></span>
            <span>&nbsp; &#187; &nbsp;</span>
            <span><a href="<?php echo home_url('') ?>">Danang and surrounding</a></span>
            <span>&nbsp; &#187; &nbsp;</span>
            <span><?php the_title(); ?></span>
        </div>
        <!--  -->
        <div class="list_title_key">
            <div class="col-xs-6 col-sm-4 col-lg-2 col-md-2 title_breadcrumd">
                <h3><a href="#">HANOI AND SURROUNDING</a></h3>
            </div>
            <div class="col-xs-6 col-sm-4 col-lg-2 col-md-2 title_breadcrumd">
                <h3><a href="#">DA NANG AND SURROUNDING</a></h3>
            </div>
            <div class="col-xs-6 col-sm-4 col-lg-2 col-md-2 title_breadcrumd">
                <h3><a href="#">NHA TRANG QUY NHON</a></h3>
            </div>
            <div class="col-xs-6 col-sm-6 col-lg-3 col-md-3 title_breadcrumd">
                <h3><a href="#">HO CHI MINH AND SURROUNDING</a></h3>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-3 col-md-3 title_breadcrumd">
                <h3><a href="#">PHU QUOC AND SURROUNDING</a></h3>
            </div>
        </div>
        <!--  -->
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 all_single_product">
            <?php
            if(have_posts()):
                while(have_posts()):
                    the_post();
            ?>  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h3 class="title_single_product"><?php the_title(); ?></h3>
                </div>
                <div class="info1_single">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="img_single_product">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="orther_benefit">
                        <input type="hidden" id="excerpt" value="<?php the_excerpt(); ?>">
                        <a href="#" class="share_fb"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook Share</a>
                        <a href="#" class="send_mail"><i class="fa fa-envelope" aria-hidden="true"></i> Email</a>
                        <a href="<?php echo get_post_meta(get_the_ID(),'wpcf-download',true) ?>" class="save_pdf"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Save PDF</a>
                        <a href="#" class="print"><i class="fa fa-print" aria-hidden="true"></i> Print</a>
                <script type="text/javascript">
                    jQuery(function($){
                        $('.share_fb').click(function(e){
                            e.preventDefault();
                            var img = $(".img_single_product img").attr("src");
                            FB.ui(
                            {
                                method: 'feed',
                                name:'<?php the_title(); ?>',
                                link: '<?php the_permalink(); ?>',
                                picture: img,
                                description: $("#excerpt").val(),
                            });
                        });
                    });
                </script>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 info_field">
                        <div class="field_single field_hotel">
                            <span><?php _e('Hotel','golf'); ?></span>
                            <div class="single_hotel">
                                <?php echo get_post_meta(get_the_ID(),'wpcf-hotel',true) ?>
                                <input type="hidden" id="star" value="<?php echo get_post_meta(get_the_ID(),'wpcf-star',true) ?>">
                            </div>
                            <script type="text/javascript">
                                jQuery(function($){
                                    var star = $("#star").val();
                                    for (var i = 0; i < star; i++) {
                                        $(".single_hotel").append('<div class="star"></div>');
                                    }
                                });
                            </script>
                        </div>
                        <div class="field_single field_hotel">
                            <span><?php _e('Round number','golf'); ?></span>
                            <div class="single_round">
                                <?php echo get_post_meta(get_the_ID(),'wpcf-round',true) ?>
                            </div>
                        </div>
                        <div class="field_single field_hotel">
                            <span><?php _e('Period','golf'); ?></span>
                            <div class="single_period">
                                <?php echo get_post_meta(get_the_ID(),'wpcf-period',true) ?>
                            </div>
                        </div>
                        <div class="field_single field_hotel">
                            <span><?php _e('Destination','golf'); ?></span>
                            <div class="single_destination">
                                <?php echo get_post_meta(get_the_ID(),'wpcf-destination2',true) ?>
                            </div>
                        </div>
                        <div class="field_single field_hotel">
                            <span><?php _e('Price','golf'); ?></span>
                            <div class="single_price">
                                <?php _e('From','golf'); ?> $<?php echo get_post_meta(get_the_ID(),'wpcf-price',true) ?>/<?php _e('pax','golf'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 all_move_single">
                    <div class="ltineracy" id="ltineracy">
                        <div class="info_move">
                            <a href="#ltineracy" class="a_ltineracy">ltineracy</a>
                            <a href="#golf_cours" class="">Golf cours description</a>
                            <a href="#hotel_facilities" class="">Hotel and facilities</a>
                            <a href="#address_map" class="">Maps</a>
                            <a href="#comment" class="">Write a review</a>
                        </div>
                        <div class="ltineracy_content">
                            <div class="info_ltineracy">
                                <?php if(have_rows('itineracy', $post->ID)) :
                                        while (have_rows('itineracy', $post->ID)) : the_row(); ?>
                                            <div class="divied_first"></div>
                                                <h3><?php the_sub_field('main_title', $post->ID) ?></h3>
                                    <?php   while(have_rows('action_list', $post->ID)) : the_row();
                                ?>
                                                <div class="info_detail">
                                                    <img class="icon_single" src="<?php the_sub_field('icon', $post->ID) ?>" alt="Icon place">&nbsp;&nbsp;&nbsp;
                                                    <strong><?php the_sub_field('title', $post->ID) ?></strong>
                                                    <?php if(get_sub_field('description', $post->ID)) : ?>
                                                        <div class="child_detail"><?php the_sub_field('description', $post->ID) ?></div>
                                                    <?php endif; ?>
                                                </div>
                                        <?php
                                            endwhile;
                                        endwhile;
                                    endif ?>
                            </div>

                            <div class="button_ltineracy">
                                <a href="#" class="book_now">Book Now !</a>
                                <a href="<?php echo home_url('create-your-trip')?>" class="btn_create_trip"><img src="<?php echo url."/img/customise_trip.png" ?>" alt="Create Trip"></a>
                            </div>
                        </div>
                    </div>

                    <div class="golf_cours" id="golf_cours">
                        <div class="info_move">
                            <a href="#ltineracy" class="">ltineracy</a>
                            <a href="#golf_cours" class="a_golf_cours">Golf cours description</a>
                            <a href="#hotel_facilities" class="">Hotel and facilities</a>
                            <a href="#address_map" class="">Maps</a>
                            <a href="#comment" class="">Write a review</a>
                        </div>
                        <div class="golf_cours_content">
                            <?php echo get_post_meta(get_the_ID(),'wpcf-golf-cours-description',true) ?>
                        </div>
                    </div>
                    <div class="hotel_facilities" id="hotel_facilities">
                        <div class="info_move">
                            <a href="#ltineracy" class="">ltineracy</a>
                            <a href="#golf_cours" class="">Golf cours description</a>
                            <a href="#hotel_facilities" class="a_hotel_facilities">Hotel and facilities</a>
                            <a href="#address_map" class="">Maps</a>
                            <a href="#comment" class="">Write a review</a>
                        </div>
                        <div class="hotel_facilities_content">
                            <?php echo get_post_meta(get_the_ID(),'wpcf-hotel-and-facilities',true) ?>
                        </div>
                    </div>
                    <div class="map" id="address_map">
                        <div class="info_move">
                            <a href="#ltineracy" class="">ltineracy</a>
                            <a href="#golf_cours" class="">Golf cours description</a>
                            <a href="#hotel_facilities" class="">Hotel and facilities</a>
                            <a href="#address_map" class="a_map">Maps</a>
                            <a href="#comment" class="">Write a review</a>
                        </div>
                        <div class="map_content">
                            <div id="map-address"></div>
                        </div>

                        <script>
                            jQuery(document).ready(function($) {
                            jQuery(window).load(function(){
                            <?php echo get_post_meta(get_the_ID(),'wpcf-map',true) ?>
                                    var place_mapOptions = {
                                    zoom: 17,
                                    scrollwheel: false,
                                    center: place_Latlng,
                                    mapTypeControlOptions: {
                                    mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
                                    }
                                    };
                                    var marker = new google.maps.Marker({
                                    map: place_map,
                                    position: place_Latlng,
                                    animation: google.maps.Animation.DROP,
                                    // icon: ''
                                    });
                                    var place_map = new google.maps.Map(document.getElementById('map-address'),
                                    place_mapOptions);
                                    marker.setMap(place_map);
                                    infowindow_place.open(place_map, marker);
                              });
                        });
                        </script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjtppy-gG-EcwVl6rs9W53dQ8H1X5tXUs"></script>
                    </div>
                    <div class="write_review" id="comment">
                        <div class="info_move">
                            <a href="#ltineracy" class="">ltineracy</a>
                            <a href="#golf_cours" class="">Golf cours description</a>
                            <a href="#hotel_facilities" class="">Hotel and facilities</a>
                            <a href="#address_map" class="">Maps</a>
                            <a href="#comment" class="a_write_review">Write a review</a>
                        </div>
                        <div class="write_review_content">
                        <div class="fb-comments" data-width="680" data-href="<?php the_permalink(); ?>" data-numposts="15"></div>
                            <?php
                            // $time = current_time('mysql');
                            //     $data = array(
                            //         'comment_post_ID' => get_the_ID(),
                            //         'comment_author' => 'admin',
                            //         'comment_author_email' => 'admin@admin.com',
                            //         'comment_author_url' => 'http://',
                            //         'comment_content' => 'content here',
                            //         'comment_type' => '',
                            //         'comment_parent' => 0,
                            //         'user_id' => 1,
                            //         'comment_author_IP' => '127.0.0.1',
                            //         'comment_agent' => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.10) Gecko/2009042316 Firefox/3.0.10 (.NET CLR 3.5.30729)',
                            //         'comment_date' => $time,
                            //         'comment_approved' => 1,
                            //     );
                            //     wp_insert_comment($data);

                            //  comment_form();
                            // if ( comments_open() || get_comments_number() ) {
                			// 	comments_template( '/short-comments.php' );
                			// }
                            ?>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    jQuery(function($){
                        $('a[href*="#"]:not([href="#"])').click(function() {
                          if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                            var target = $(this.hash);
                            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                            if (target.length) {
                              $('html, body').animate({
                                scrollTop: target.offset().top
                              }, 1000);
                              return false;
                            }
                          }
                        });
                    });
                </script>
            <?php endwhile;endif; ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
