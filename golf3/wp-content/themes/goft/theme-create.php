<?php
/*
    Template Name: Create Your Trip
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
         <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 question_trip">
               <?php echo do_shortcode('[contact-form-7 id="124" title="Create Your Trip"]') ?>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
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
             <!--  Images Sidebar-->
             <?php $img_trip =  Img_Create_Trip() ?>
             <div class="img1_sidebar">
                 <img src="<?php echo $img_trip[0] ?>" alt="Image Sidebar 1" class="img-responsive"/>
             </div>
             <div class="img2_sidebar">
                 <img src="<?php echo $img_trip[1] ?>" alt="Image Sidebar 2" class="img-responsive"/>
             </div>
             <div class="img3_sidebar">
                 <img src="<?php echo $img_trip[2] ?>" alt="Image Sidebar 3" class="img-responsive"/>
             </div>
         </div>
     </div>
 </div>


<?php get_footer() ?>
