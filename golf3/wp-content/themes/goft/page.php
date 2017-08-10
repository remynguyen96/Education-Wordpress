<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 breadcrumbs">
            <span><img src="<?php echo url."/img/icon_home.png" ?>" alt="Home" /></span>
            <span><a href="<?php echo home_url(); ?>">Homepage </a></span>
            <span>&nbsp; &#187; &nbsp;</span>
            <span><?php the_title(); ?></span>
        </div>
         <img src="<?php echo courses_golf()[1]; ?>" alt="Banner Page" />
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 content_page">
            <?php
                if(have_posts()):
                    while(have_posts()):
                        the_post();
            ?>
                <?php the_content(); ?>
            <?php
                    endwhile;
                endif;
             ?>
             <?php echo a_download() ?>
             <div class="download">
                <a href="" target="_blank"><img src="<?php echo img_download(); ?>" alt="Download" /></a>
             </div>
             <script type="text/javascript">
                jQuery(function($){
                    var download = $('#download_a a').attr("href");
                    $(".download a").attr("href",download);
                });
             </script>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 sidebar_page">
            <h2 class="our_awards">Our Awards</h2>
            <?php
                $list = array(
                    'post_type' => 'post',
                    'posts_per_page' => -1,
                    'category_name' => "awards",
                );
                $query = new WP_Query($list);
                if($query->have_posts()):
                    while($query->have_posts()):
                        $query->the_post();
             ?>
                <div class="category_awards">
                    <div class="img_awards">
                        <?php the_post_thumbnail('awards'); ?>
                    </div>
                    <div class="all_awards">
                        <h3 class="title_awards">
                            <?php the_title(); ?>
                        </h3>
                        <div class="content_awards">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
             <?php
                     endwhile;
                 endif;
              ?>
              <div class="golf_courses">
                  <h2>Our Golf Courses In VietNam</h2>
                  <div class="text_courses">
                      <?php echo courses_golf()[0]; ?>
                  </div>
              </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
