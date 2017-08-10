<?php
/*
    Template Name: About Us Grallery
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
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content_page member_ship">
                <h2><?php the_title(); ?></h2>
                <div class="content_member_ship">
                    <?php
                    $list = array(
                        'post_type' => 'post',
                        'posts_per_page' => -1,
                        'category_name' => "grallery",
                    );
                    $query = new WP_Query($list);
                    if($query->have_posts()):
                        while($query->have_posts()):
                            $query->the_post();
                    ?>
                    <div class="div-xs-6 col-sm-6 col-lg-3 col-md-3 grallery_single_posts">
                        <div class="all_grallery">
                              <a href="" class="show_images" data-lightbox="golf_grallery_<?php echo get_the_ID() ?>" data-title="<?php the_title(); ?>"><?php the_post_thumbnail() ?></a>
                              <div class="show_grallery hide">
                                  <?php
                                      $grallery = get_post_meta(get_the_ID(),'wpcf-grallery-about-us',false);
                                      foreach ($grallery as $item) :
                                  ?>
                                  <a class="" href="<?php echo $item ?>" data-lightbox="golf_grallery_<?php echo get_the_ID() ?>" data-title="<?php the_title(); ?>">
                                      <img class="w100 img-responsive" src="<?php echo $item ?>" alt="<?php the_title(); ?>"/>
                                  </a>
                                  <?php endforeach ?>
                              </div>
                        </div>
                        <div class="title_grallery">
                            <?php the_title(); ?>
                        </div>
                    </div>
                    <?php endwhile;endif; ?>
                </div>
                <script type="text/javascript">
                    jQuery(function($){
                        $(".show_grallery").hide();
                        $(".show_images").click(function(e){
                            e.preventDefault();
                            var src_img = $(this).closest('.all_grallery').find(".show_images img").attr("src");
                            $(this).attr('href',src_img);
                        });
                    });
                </script>
        </div>
    </div>
</div>
<?php get_footer(); ?>
