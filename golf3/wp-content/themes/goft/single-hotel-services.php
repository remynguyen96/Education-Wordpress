<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 breadcrumbs">
            <span><img src="<?php echo url."/img/icon_home.png" ?>" alt="Home" /></span>
            <span><a href="<?php echo home_url(); ?>">Homepage </a></span>
            <span>&nbsp; &#187; &nbsp;</span>
            <span>Golf Services</span>
            <span>&nbsp; &#187; &nbsp;</span>
            <span>Booking Tee Times</span>
            <span>&nbsp; &#187; &nbsp;</span>
            <span><?php the_title(); ?></span>
        </div>
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
                            <div class="single_post_thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="grallery_img">
                                <?php foreach (get_post_meta(get_the_ID(),'wpcf-slideshow',false) as $img): ?>
                                <a href="#" class="show_img_thumbnail"><img src="<?php echo $img ?>" alt="<?php the_title() ?>"></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        jQuery(function($){
                            $(".show_img_thumbnail").click(function(e){
                                e.preventDefault();
                                var img = $(this).find("img").attr('src');
                                $(this).closest(".img_single_product").find(".single_post_thumbnail img").attr("srcset",img);
                            });
                        });
                    </script>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                        <div class="filed_service_all filed_hotel_rendal">
                            <div class="filed_hotel">
                                <span>Address :</span>
                                <div><?php echo get_post_meta(get_the_ID(),'wpcf-address',true) ?></div>
                            </div>
                            <div class="filed_hotel">
                                <span>Price :</span>
                                <div><?php _e('Form') ?> $<?php echo get_post_meta(get_the_ID(),'wpcf-price-for-hotel',true) ?> per day</div>
                            </div>
                            <div class="filed_hotel">
                                    <span>Facilities :</span>
                                    <div class="icon_hotel">
                                        <i class="first_i"><img src="<?php echo url."/img/icon_sleep.png" ?>" alt="Top In VietNam" class="img-responsive"></i>
                                        <i><img src="<?php echo url."/img/icon-plane.png" ?>" alt="Top In VietNam" class="img-responsive"></i>
                                        <i><img src="<?php echo url."/img/icon-eat.png" ?>" alt="Top In VietNam" class="img-responsive"></i>
                                    </div>
                            </div>
                        </div>
                        <div class="orther_booking">
                            <button type="button" class="booking_hotel">Book Now!</button>
                        </div>
                        <div class="orther_benefit benefit_hotel">
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
                </div>
                <!--  -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 all_move_single">
                    <div class="ltineracy" id="ltineracy">
                        <div class="info_move info_move3">
                            <a href="#ltineracy" class="a_ltineracy">Golf description</a>
                            <a href="#golf_cours" class="">Room rate</a>
                            <a href="#hotel_facilities" class="">Facilities</a>
                            <a href="#address_map" class="">Maps</a>
                            <a href="#comment" class="">Write a review</a>
                        </div>
                        <div class="ltineracy_content">
                            <?php the_content() ?>

                            <div class="button_ltineracy">
                                <a href="#" class="book_now">Book Now !</a>
                                <a href="<?php echo home_url('create-your-trip')?>" class="btn_create_trip"><img src="<?php echo url."/img/customise_trip.png" ?>" alt="Create Trip"></a>
                            </div>
                        </div>
                    </div>

                    <div class="golf_cours" id="golf_cours">
                        <div class="info_move info_move3">
                            <a href="#ltineracy" class="">Golf description</a>
                            <a href="#golf_cours" class="a_golf_cours">Room rate</a>
                            <a href="#hotel_facilities" class="">Facilities</a>
                            <a href="#address_map" class="">Maps</a>
                            <a href="#comment" class="">Write a review</a>
                        </div>
                        <div class="golf_cours_content">
                            <?php echo get_post_meta(get_the_ID(),'wpcf-golf-cours-description',true) ?>
                        </div>
                    </div>
                    <div class="hotel_facilities" id="hotel_facilities">
                        <div class="info_move info_move3">
                            <a href="#ltineracy" class="">Golf description</a>
                            <a href="#golf_cours" class="">Room rate</a>
                            <a href="#hotel_facilities" class="a_hotel_facilities">Facilities</a>
                            <a href="#address_map" class="">Maps</a>
                            <a href="#comment" class="">Write a review</a>
                        </div>
                        <div class="hotel_facilities_content">
                            <?php echo get_post_meta(get_the_ID(),'wpcf-hotel-facilities',true) ?>
                        </div>
                    </div>
                    <div class="map" id="address_map">
                        <div class="info_move info_move3">
                            <a href="#ltineracy" class="">Golf description</a>
                            <a href="#golf_cours" class="">Room rate</a>
                            <a href="#hotel_facilities" class="">Facilities</a>
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
                        <div class="info_move info_move3">
                            <a href="#ltineracy" class="">Golf description</a>
                            <a href="#golf_cours" class="">Room rate</a>
                            <a href="#hotel_facilities" class="">Facilities</a>
                            <a href="#address_map" class="">Maps</a>
                            <a href="#comment" class="a_write_review">Write a review</a>
                        </div>
                        <div class="write_review_content">
                            <div class="fb-comments" data-width="680" data-href="<?php the_permalink(); ?>" data-numposts="15"></div>
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
        <div class="creaet_down">
            <a href="<?php echo home_url('create-your-trip')?>"><img src="<?php echo url."/img/customise_trip.png" ?>" alt="Create Trip"></a>
            <?php echo a_download() ?>
            <div class="download_load">
               <a href="" target="_blank"><img src="<?php echo img_download(); ?>" alt="Download" /></a>
            </div>
            <script type="text/javascript">
               jQuery(function($){
                   var download = $('#download_a a').attr("href");
                   $(".download_load a").attr("href",download);
               });
            </script>
        </div>
        <div class="latest_news">
            <h3>Latest news</h3>
            <?php
            $list = array(
                'post_type' => 'golf-services',
                'posts_per_page' => 4,
            );
            $query = new WP_Query($list);
            if($query->have_posts()):
                while($query->have_posts()):
                    $query->the_post()
             ?>
            <div class="all_news">
                <div class="img_late_news">
                    <?php the_post_thumbnail() ?>
                </div>
                <div class="content_late_news">
                    <a href="<?php the_permalink(); ?>"><h3><?php the_title() ?></h3></a>
                    <p>
                        <?php echo excerpt(10) ?>
                    </p>
                    <a href="<?php the_permalink(); ?>">- Read more -</a>
                </div>
            </div>
             <?php endwhile;endif ?>
        </div>
        <div class="quick_enquiry">
            <div class="all_search_tour quick_form">
                <div class="info_search_tour">
                     <h3>Quick EnQuiry</h3>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="285" title="Quick EnQuiry"]') ?>
            </div>
        </div>
        <div class="send_mail_single">
            <label for=""><?php _e( 'Subscribe now & Get promotion', 'golf' ); ?></label>
            <?php echo do_shortcode('[contact-form-7 id="5" title="subscribe"]') ?>
        </div>
        <div class="latest_news related_offser">
            <h3>Related Offser</h3>
            <?php
            $category_current = get_the_category(get_the_ID())[0];
            $slug_category = $category_current->slug;
            $list = array(
                'post_type' => 'golf-services',
                'posts_per_page' => 4,
                'category_name' => $slug_category,
            );
            $query = new WP_Query($list);
            if($query->have_posts()):
                while($query->have_posts()):
                    $query->the_post()
             ?>
             <div class="all_news all_offser">
                 <div class="img_late_news img_offser">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail() ?></a>
                 </div>
                 <div class="content_late_news content_offser">
                     <a href="<?php the_permalink(); ?>"><h3><?php the_title() ?></h3></a>
                     <p><?php echo get_post_meta(get_the_ID(),'wpcf-destination2',true) ?></p>
                     <p><?php echo get_post_meta(get_the_ID(),'wpcf-period',true) ?> - <?php echo get_post_meta(get_the_ID(),'wpcf-round',true) ?> Rounds</p>
                     <p>From $<?php echo get_post_meta(get_the_ID(),'wpcf-price',true) ?>/pax</p>
                 </div>
             </div>
             <?php endwhile;endif ?>
        </div>

        </div>
    </div>
</div>
<?php get_footer(); ?>
