<?php
/*
    Template Name: Handicap
*/
get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 breadcrumbs">
            <span><img src="<?php echo url."/img/icon_home.png" ?>" alt="Home" /></span>
            <span><a href="<?php echo home_url(); ?>">Homepage </a></span>
            <span>&nbsp; &#187; &nbsp;</span>
                <span><a href="<?php echo home_url(''); ?>">Golf Services </a></span>
            <span>&nbsp; &#187; &nbsp;</span>
            <span><?php the_title(); ?></span>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 content_page member_ship">
            <?php
                if(have_posts()):
                    while(have_posts()):
                        the_post();
            ?>
                <h2><?php the_title(); ?></h2>
                <div class="handicap_all" id="handicap1">
                    <div class="info_move handicap">
                        <a href="#handicap1" class="handicap1">What is a Golf Handicap</a>
                        <a href="#handicap2" class="">Unigolf e-Handicap</a>
                        <a href="#handicap3" class="">Annoucement</a>
                    </div>
                    <div class="content_handicap">
                        <?php the_content() ?>
                    </div>
                </div>

                <div class="handicap_all" id="handicap2">
                    <div class="info_move handicap">
                        <a href="#handicap1" class="">What is a Golf Handicap</a>
                        <a href="#handicap2" class="handicap2">Unigolf e-Handicap</a>
                        <a href="#handicap3" class="">Annoucement</a>
                    </div>
                    <div class="unigolf_handicap">
                        <?php echo get_post_meta(get_the_ID(),'wpcf-unigolf-e-handicap',true) ?>
                    </div>
                </div>
                <div class="handicap_all" id="handicap3">
                    <div class="info_move handicap">
                        <a href="#handicap1" class="">What is a Golf Handicap</a>
                        <a href="#handicap2" class="">Unigolf e-Handicap</a>
                        <a href="#handicap3" class="handicap3">Annoucement</a>
                    </div>
                    <div class="announcement">
                        <?php echo get_post_meta(get_the_ID(),'wpcf-announcement',true) ?>
                    </div>
                </div>
            <?php
                    endwhile;
                endif;
             ?>
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
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 sidebar_page">
            <div class="creaet_down">
                <div class="all_search_tour">
                    <div class="info_search_tour">
                         <h3>Get Inspiration</h3>
                    </div>
                    <form action="<?php echo home_url('result-search-get-inspiration') ?>" method="post">
                    <div class="form_search_trip">
                        <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 search_tour">
                            <div class="form-group destinations">
                                <label for="" id="search_tour"><?php _e( 'Destinations', 'golf' ); ?></label>
                                <input type="text" name="search_inspiration" placeholder="Enter your destinations" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-lg-6 col-md-6 durations_trip">
                            <div class="form-group durations">
                                <label for="durations">Durations</label>
                                <select class="form-control" name="durations" id="durations">
                                    <option value="">All days</option>
                                    <option value="1">1 days</option>
                                    <option value="2">2 days</option>
                                    <option value="3">3 days</option>
                                    <option value="4">4 days</option>
                                    <option value="5">5 days</option>
                                    <option value="6">6 days</option>
                                    <option value="7">7 days</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-lg-6 col-md-6 rounds_trip">
                            <div class="form-group round">
                                <label for="round">Round(s)</label>
                                <select class="form-control" name="round" id="round">
                                    <option value="">All rounds</option>
                                    <option value="1">1 rounds</option>
                                    <option value="2">2 rounds</option>
                                    <option value="3">3 rounds</option>
                                    <option value="4">4 rounds</option>
                                    <option value="5">5 rounds</option>
                                    <option value="6">6 rounds</option>
                                    <option value="7">7 rounds</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 submit_search_trip">
                        <p class="text-center">
                            <input type="submit" name="submit" value="Submit">
                        </p>
                    </div>
                    </form>
                </div>
                <?php echo a_download() ?>
                <div class="download">
                   <a href="" target="_blank"><img src="<?php echo url."/img/download.png" ?>" alt="Download" /></a>
                </div>
                <script type="text/javascript">
                   jQuery(function($){
                       var download = $('#download_a a').attr("href");
                       $(".download a").attr("href",download);
                   });
                </script>

                <?php $img_trip =  Img_Create_Trip() ?>
                <div class="img1_sidebar">
                    <img src="<?php echo $img_trip[0] ?>" alt="Image Sidebar 1" class="img-responsive"/>
                </div>
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
