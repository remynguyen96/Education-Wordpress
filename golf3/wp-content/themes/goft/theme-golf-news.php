<?php
/*
    Template Name: Golf News And Event
*/
get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 breadcrumbs">
            <span><img src="<?php echo url."/img/icon_home.png" ?>" alt="Home" /></span>
            <span><a href="<?php echo home_url(); ?>">Homepage </a></span>
            <span>&nbsp; &#187; &nbsp;</span>
            <span><?php the_title(); ?></span>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 content_page page_news_golf">
            <h2><?php the_title(); ?></h2>
            <?php
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $list = array(
                'post_type' => 'news-and-events',
                'posts_per_page' => 3,
                'paged' => $paged,
                "tax_query" =>array(
                array(
                  'taxonomy' => 'category-news',
                      'field'    => 'id',
                      'terms' => array(25,26),
                      'operator' => 'IN'
                ),
              ),
            );
            $query = new WP_Query($list);
            if($query->have_posts()):
                while($query->have_posts()):
                    $query->the_post();
            ?>
                <div class="all_page_news">
                    <div class="img_news_event">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="content_news_event">
                        <div class="content_news_event1">
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo get_the_date("M.j.Y") ?></p>
                        </div>
                        <div class="content_news_event2">
                            <p><?php echo excerpt(35); ?></p>
                            <a href="<?php the_permalink(); ?>">- read more -</a>
                        </div>
                    </div>
                </div>
            <?php endwhile;endif; ?>
            <div class="pagination_wp">
                <?php  wp_pagenavi(array('query'=>$query)); ?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 sidebar_page">
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
                    'post_type' => 'news-and-events',
                    'posts_per_page' => 4,
                    'orderby' => 'rand',
                    "tax_query" =>array(
                    array(
                      'taxonomy' => 'category-news',
                          'field'    => 'id',
                          'terms'    => 26,
                    ),
                  ),
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
            <div class="latest_news related_offser">
                <h3>Related Offser</h3>
                    <?php
                    $list = array(
                        'post_type' => 'news-and-events',
                        'posts_per_page' => 4,
                        'orderby' => 'rand',
                        "tax_query" =>array(
                        array(
                          'taxonomy' => 'category-news',
                              'field'    => 'id',
                              'terms'    => 25,
                        ),
                      ),
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
        </div>
    </div>
</div>
<?php get_footer(); ?>
