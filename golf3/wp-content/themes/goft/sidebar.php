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
            'post_type' => 'golf-travel',
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
            'post_type' => 'golf-travel',
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
