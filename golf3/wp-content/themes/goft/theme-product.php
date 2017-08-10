  <?php
/*
    Template Name: VietNam Golf Holidays
*/
get_header();
 ?>
 <div class="container">
     <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 breadcrumbs">
             <span><img src="<?php echo url."/img/icon_home.png" ?>" alt="Home" /></span>
             <span><a href="<?php echo home_url(); ?>">Homepage </a></span>
             <span>&nbsp; &#187; &nbsp;</span>
             <span>Golf Travel</span>
             <span>&nbsp; &#187; &nbsp;</span>
             <span><?php the_title(); ?></span>
         </div>
         <img src="<?php echo courses_golf()[1]; ?>" alt="Banner Page" />
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content_page_VN">
             <?php
                if(have_posts()):
                    while(have_posts()):
                        the_post();
                        the_content();
                  endwhile;
              endif;
               ?>
         </div>
     </div>
 </div>
 <!-- Ha Noi-->
 <div class="container-fluid top_vn">
     <div class="row">
         <div class="bg-middle-1">
             <img src="<?php echo url."/img/bg-mid1.png" ?>" alt="Top In VietNam" class="img-responsive w100">
         </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 info_top">
                    <h3 class="text-center">Hanoi and surrounding</h3>
                    <img src="<?php echo url."/img/title.png" ?>" alt="Top In Vietnam" class="img-responsive w100">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 content_top">
                        <p class="text-center">
                            <?php _e('We are very confident in providing customers with only the best and professional services for not only individual but also organizations, industry partners in Vietnam and all over the world.','golf') ?>
                        </p>
                    </div>
                </div>
                <?php

                $list_HN = array(
                    'post_type'=>'golf-travels',
                    'posts_per_page'=> 4,
                    "tax_query" =>array(
                    array(
                      'taxonomy' => 'goft-travel-categories',
                          'field'    => 'id',
                          'terms'    => 39,
                    ),
                  ),
                );
                $query = new WP_Query($list_HN);
                $i = 0;
                if($query->have_posts()):
                    while($query->have_posts()):
                        $query->the_post();
                        if(!$i) :
                ?>
                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                              <div class="img_top_HN">
                                  <?php the_post_thumbnail(); ?>
                                  <img src="<?php echo url."/img/top_product.png" ?>" class="top_pd img-responsive" alt="Top Product" />
                              </div>
                              <div class="content_top_HN all_top_product">
                                  <h3><?php the_title(); ?></h3>
                                  <p class="description_top_HN"><?php echo excerpt(10); ?></p>
                                  <p class="link_top_HN text-center">
                                      <a href="<?php the_permalink() ?>"><?php _e('+ infor','golf') ?></a>
                                  </p>
                              </div>
                          </div>
                      <?php else: ?>
                          <?php if($i == 1) : ?>
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                          <?php endif ?>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="img_HN">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    <div class="content_HN all_top_product">
                                        <h3><?php the_title(); ?></h3>
                                        <p class="description_HN"><?php echo excerpt(10); ?></p>
                                        <p class="text-center link_HN">
                                            <a href="<?php the_permalink() ?> "><?php _e('+ infor','golf') ?></a>
                                        </p>
                                    </div>
                                </div>
                          <?php if($i == 3) : ?>
                            </div>
                          <?php endif ?>
                      <?php
                          endif;
                          $i++;
                        endwhile;
                  endif;
                      ?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img_create_trip">
                    <a href="<?php echo home_url('create-your-trip') ?>"><img src="<?php echo Img_All_Btn()[3] ?>" class="img-responsive" alt="Create Your Trip" /></a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img_view_trip">
                    <a href="#"><img src="<?php echo Img_All_Btn()[1] ?>" class="img-responsive" alt="View More" /></a>
                </div>
            </div>
        </div>
         <div class="bg-middle-2">
             <img src="<?php echo url."/img/bg-mid2.png" ?>" alt="Top In VietNam" class="img-responsive w100">
         </div>
    </div>
</div>
<!--Da Nang-->
<div class="container-fluid top_vn_2">
    <div class="container">
      <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 info_top">
                    <h3 class="text-center">Da Nang and surrounding</h3>
                    <img src="<?php echo url."/img/title.png" ?>" alt="Top In Vietnam" class="img-responsive w100">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 content_top">
                        <p class="text-center">
                            <?php _e('We are very confident in providing customers with only the best and professional services for not only individual but also organizations, industry partners in Vietnam and all over the world.','golf') ?>
                        </p>
                    </div>
                </div>
                <?php

                $list_HN = array(
                    'post_type'=>'golf-travels',
                    'posts_per_page'=> 4,
                    "tax_query" =>array(
                        array(
                          'taxonomy' => 'goft-travel-categories',
                          'field'    => 'id',
                          'terms'    => 40,
                        ),
                  ),
                );
                $query = new WP_Query($list_HN);
                $i = 0;
                if($query->have_posts()):
                    while($query->have_posts()):
                        $query->the_post();
                        if(!$i) :
                ?>
                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                              <div class="img_top_HN">
                                  <?php the_post_thumbnail(); ?>
                                  <img src="<?php echo url."/img/top_product.png" ?>" class="top_pd img-responsive" alt="Top Product" />
                              </div>
                              <div class="content_top_HN all_top_product">
                                  <h3><?php the_title(); ?></h3>
                                  <p class="description_top_HN"><?php echo excerpt(10); ?></p>
                                  <p class="link_top_HN text-center">
                                      <a href="<?php the_permalink() ?>"><?php _e('+ infor','golf') ?></a>
                                  </p>
                              </div>
                          </div>
                      <?php else: ?>
                          <?php if($i == 1) : ?>
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                          <?php endif ?>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="img_HN">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    <div class="content_HN all_top_product">
                                        <h3><?php the_title(); ?></h3>
                                        <p class="description_HN"><?php echo excerpt(10); ?></p>
                                        <p class="text-center link_HN">
                                            <a href="<?php the_permalink() ?> "><?php _e('+ infor','golf') ?></a>
                                        </p>
                                    </div>
                                </div>
                          <?php if($i == 3) : ?>
                            </div>
                          <?php endif ?>
                      <?php
                          endif;
                          $i++;
                        endwhile;
                  endif;
                      ?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img_create_trip">
                    <a href="<?php echo home_url('create-your-trip') ?>"><img src="<?php echo Img_All_Btn()[3] ?>" class="img-responsive" alt="Create Your Trip" /></a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img_view_trip">
                    <a href="#"><img src="<?php echo Img_All_Btn()[1] ?>" class="img-responsive" alt="View More" /></a>
                </div>
      </div>
    </div>
</div>
 <!-- Nha Trang-->
 <div class="container-fluid top_vn">
     <div class="row">
         <div class="bg-middle-1">
             <img src="<?php echo url."/img/bg-mid1.png" ?>" alt="Top In VietNam" class="img-responsive w100">
         </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 info_top">
                    <h3 class="text-center">Nha Trang and surrounding</h3>
                    <img src="<?php echo url."/img/title.png" ?>" alt="Top In Vietnam" class="img-responsive w100">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 content_top">
                        <p class="text-center">
                            <?php _e('We are very confident in providing customers with only the best and professional services for not only individual but also organizations, industry partners in Vietnam and all over the world.','golf') ?>
                        </p>
                    </div>
                </div>
                <?php

                $list_HN = array(
                    'post_type'=>'golf-travels',
                    'posts_per_page'=> 4,
                    "tax_query" =>array(
                    array(
                      'taxonomy' => 'goft-travel-categories',
                          'field'    => 'id',
                          'terms'    => 41,
                    ),
                  ),
                );
                $query = new WP_Query($list_HN);
                $i = 0;
                if($query->have_posts()):
                    while($query->have_posts()):
                        $query->the_post();
                        if(!$i) :
                ?>
                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                              <div class="img_top_HN">
                                  <?php the_post_thumbnail(); ?>
                                  <img src="<?php echo url."/img/top_product.png" ?>" class="top_pd img-responsive" alt="Top Product" />
                              </div>
                              <div class="content_top_HN all_top_product">
                                  <h3><?php the_title(); ?></h3>
                                  <p class="description_top_HN"><?php echo excerpt(10); ?></p>
                                  <p class="link_top_HN text-center">
                                      <a href="<?php the_permalink() ?>"><?php _e('+ infor','golf') ?></a>
                                  </p>
                              </div>
                          </div>
                      <?php else: ?>
                          <?php if($i == 1) : ?>
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                          <?php endif ?>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="img_HN">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    <div class="content_HN all_top_product">
                                        <h3><?php the_title(); ?></h3>
                                        <p class="description_HN"><?php echo excerpt(10); ?></p>
                                        <p class="text-center link_HN">
                                            <a href="<?php the_permalink() ?> "><?php _e('+ infor','golf') ?></a>
                                        </p>
                                    </div>
                                </div>
                          <?php if($i == 3) : ?>
                            </div>
                          <?php endif ?>
                      <?php
                          endif;
                          $i++;
                        endwhile;
                  endif;
                      ?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img_create_trip">
                    <a href="<?php echo home_url('create-your-trip') ?>"><img src="<?php echo Img_All_Btn()[3] ?>" class="img-responsive" alt="Create Your Trip" /></a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img_view_trip">
                    <a href="#"><img src="<?php echo Img_All_Btn()[1] ?>" class="img-responsive" alt="View More" /></a>
                </div>
            </div>
        </div>
         <div class="bg-middle-2">
             <img src="<?php echo url."/img/bg-mid2.png" ?>" alt="Top In VietNam" class="img-responsive w100">
         </div>
    </div>
</div>
<!--Ho Chi Minh-->
<div class="container-fluid top_vn_2">
    <div class="row">
       <div class="container">
           <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 info_top">
                    <h3 class="text-center">Ho Chi Minh and surrounding</h3>
                    <img src="<?php echo url."/img/title.png" ?>" alt="Top In Vietnam" class="img-responsive w100">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 content_top">
                        <p class="text-center">
                            <?php _e('We are very confident in providing customers with only the best and professional services for not only individual but also organizations, industry partners in Vietnam and all over the world.','golf') ?>
                        </p>
                    </div>
                </div>
                <?php

                $list_HN = array(
                    'post_type'=>'golf-travels',
                    'posts_per_page'=> 4,
                    "tax_query" =>array(
                    array(
                      'taxonomy' => 'goft-travel-categories',
                          'field'    => 'id',
                          'terms'    => 42,
                    ),
                  ),
                );
                $query = new WP_Query($list_HN);
                $i = 0;
                if($query->have_posts()):
                    while($query->have_posts()):
                        $query->the_post();
                        if(!$i) :
                ?>
                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                              <div class="img_top_HN">
                                  <?php the_post_thumbnail(); ?>
                                  <img src="<?php echo url."/img/top_product.png" ?>" class="top_pd img-responsive" alt="Top Product" />
                              </div>
                              <div class="content_top_HN all_top_product">
                                  <h3><?php the_title(); ?></h3>
                                  <p class="description_top_HN"><?php echo excerpt(10); ?></p>
                                  <p class="link_top_HN text-center">
                                      <a href="<?php the_permalink() ?>"><?php _e('+ infor','golf') ?></a>
                                  </p>
                              </div>
                          </div>
                      <?php else: ?>
                          <?php if($i == 1) : ?>
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                          <?php endif ?>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="img_HN">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    <div class="content_HN all_top_product">
                                        <h3><?php the_title(); ?></h3>
                                        <p class="description_HN"><?php echo excerpt(10); ?></p>
                                        <p class="text-center link_HN">
                                            <a href="<?php the_permalink() ?> "><?php _e('+ infor','golf') ?></a>
                                        </p>
                                    </div>
                                </div>
                          <?php if($i == 3) : ?>
                            </div>
                          <?php endif ?>
                      <?php
                          endif;
                          $i++;
                        endwhile;
                  endif;
                      ?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img_create_trip">
                    <a href="<?php echo home_url('create-your-trip') ?>"><img src="<?php echo Img_All_Btn()[3] ?>" class="img-responsive" alt="Create Your Trip" /></a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img_view_trip">
                    <a href="#"><img src="<?php echo Img_All_Btn()[1] ?>" class="img-responsive" alt="View More" /></a>
                </div>
            </div>
       </div>
   </div>
</div>
<!-- Phú Quốc-->
<div class="container-fluid top_vn">
    <div class="row">
        <div class="bg-middle-1">
            <img src="<?php echo url."/img/bg-mid1.png" ?>" alt="Top In VietNam" class="img-responsive w100">
        </div>
       <div class="container">
           <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 info_top">
                    <h3 class="text-center">Phu Quoc and surrounding</h3>
                    <img src="<?php echo url."/img/title.png" ?>" alt="Top In Vietnam" class="img-responsive w100">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 content_top">
                        <p class="text-center">
                            <?php _e('We are very confident in providing customers with only the best and professional services for not only individual but also organizations, industry partners in Vietnam and all over the world.','golf') ?>
                        </p>
                    </div>
                </div>
                <?php

                $list_HN = array(
                    'post_type'=>'golf-travels',
                    'posts_per_page'=> 4,
                    "tax_query" =>array(
                    array(
                      'taxonomy' => 'goft-travel-categories',
                          'field'    => 'id',
                          'terms'    => 43,
                    ),
                  ),
                );
                $query = new WP_Query($list_HN);
                $i = 0;
                if($query->have_posts()):
                    while($query->have_posts()):
                        $query->the_post();
                        if(!$i) :
                ?>
                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                              <div class="img_top_HN">
                                  <?php the_post_thumbnail(); ?>
                                  <img src="<?php echo url."/img/top_product.png" ?>" class="top_pd img-responsive" alt="Top Product" />
                              </div>
                              <div class="content_top_HN all_top_product">
                                  <h3><?php the_title(); ?></h3>
                                  <p class="description_top_HN"><?php echo excerpt(10); ?></p>
                                  <p class="link_top_HN text-center">
                                      <a href="<?php the_permalink() ?>"><?php _e('+ infor','golf') ?></a>
                                  </p>
                              </div>
                          </div>
                      <?php else: ?>
                          <?php if($i == 1) : ?>
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                          <?php endif ?>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="img_HN">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    <div class="content_HN all_top_product">
                                        <h3><?php the_title(); ?></h3>
                                        <p class="description_HN"><?php echo excerpt(10); ?></p>
                                        <p class="text-center link_HN">
                                            <a href="<?php the_permalink() ?> "><?php _e('+ infor','golf') ?></a>
                                        </p>
                                    </div>
                                </div>
                          <?php if($i == 3) : ?>
                            </div>
                          <?php endif ?>
                      <?php
                          endif;
                          $i++;
                        endwhile;
                  endif;
                      ?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img_create_trip">
                    <a href="<?php echo home_url('create-your-trip') ?>"><img src="<?php echo Img_All_Btn()[3] ?>" class="img-responsive" alt="Create Your Trip" /></a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img_view_trip">
                    <a href="#"><img src="<?php echo Img_All_Btn()[1] ?>" class="img-responsive" alt="View More" /></a>
                </div>
            </div>
       </div>
   </div>
</div>
 <?php get_footer() ?>
