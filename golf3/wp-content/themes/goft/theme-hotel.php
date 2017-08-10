<?php
/*
  Template Name: Hotel
*/
get_header();
?>
<div class="container">
   <div class="row">
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 breadcrumbs">
           <span><img src="<?php echo url."/img/icon_home.png" ?>" alt="Home" /></span>
           <span><a href="<?php echo home_url(); ?>">Homepage </a></span>
           <span>&nbsp; &#187; &nbsp;</span>
           <span><a href="<?php echo home_url('golf-travel'); ?>">Golf Travel</a></span>
           <span>&nbsp; &#187; &nbsp;</span>
           <span><a href="<?php echo home_url('all-travel-services'); ?>">Travel Servicest</a></span>
           <span>&nbsp; &#187; &nbsp;</span>
           <span><?php the_title(); ?></span>
       </div>
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content_page_VN content_hotel">
           <?php
              if(have_posts()):
                  while(have_posts()):
                    the_post();
                    the_content();
                endwhile;
            endif;
             ?>
       </div>
       <div class="all_list_hotel">
           <h2><?php the_title(); ?></h2>
       </div>
       <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 filter_hotel">
           <form action="" method="post">
               <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 form-group">
                   <label for="location_hotel">Location*</label>
                   <select class="form-control" id="location_hotel" name="location_hotel">
                       <option value=""></option>
                   </select>
               </div>
               <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 form-group">
                   <label for="room_hotel">Room*</label>
                   <select class="form-control" id="room_hotel" name="room_hotel">
                       <option value=""></option>
                   </select>
               </div>
               <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 form-group">
                   <label for="price_hotel">Price*</label>
                   <select class="form-control" id="price_hotel" name="price_hotel">
                       <option value=""></option>
                   </select>
               </div>
               <div class="btn_hotel">
                   <button type="button"  class="btn_search_hotel" name="button">Search</button>
               </div>
           </form>
       </div>
       <div class="all_hotel_rental">
           <?php
           $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
           $list = array(
               'post_type' => 'hotel-services',
               'posts_per_page' => 3,
               'paged' => $paged,
           );
           $query = new WP_Query($list);
           if($query->have_posts()):
               while($query->have_posts()):
                   $query->the_post();
           ?>
               <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 show_hotel_rental">
                   <div class="img_hotel_rental">
                       <?php the_post_thumbnail(); ?>
                   </div>
                   <div class="content_hotel_rental">
                       <h3><?php the_title(); ?></h3>
                       <p><?php echo get_post_meta(get_the_ID(),'wpcf-address',true) ?></p>
                       <p><?php _e('Price form','golf') ?> : $<?php echo get_post_meta(get_the_ID(),'wpcf-price-for-hotel',true) ?>/day</p>
                       <span><img src="<?php echo url."/img/icon-eat.png" ?>" alt="icon_sleep"></span>
                       <span><img src="<?php echo url."/img/icon-plane.png" ?>" alt="icon_sleep"></span>
                       <span><img src="<?php echo url."/img/icon_sleep.png" ?>" alt="icon_sleep"></span>
                       <span><img src="<?php echo url."/img/icon-plane.png" ?>" alt="icon_sleep"></span>
                   </div>
                   <div class="info_hotel_rental">
                       <a href="<?php the_permalink(); ?>">+infor</a>
                   </div>
               </div>
            <?php endwhile;endif; ?>
            <div class="pagination_wp pagination_hotel">
                <?php  wp_pagenavi(array('query'=>$query)); ?>
            </div>
       </div>
   </div>
</div>

<?php get_footer() ?>
