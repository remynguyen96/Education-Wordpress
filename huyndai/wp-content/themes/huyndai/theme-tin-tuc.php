<?php 
/*
    Template Name: Tin Tức
*/
get_header();
?>
<script type='text/javascript' src='//dsms0mj1bbhn4.cloudfront.net/assets/pub/shareaholic.js' data-shr-siteid='23578c66430953d1b9d900b1d18e28a5' data-cfasync='false' async='async'></script>
<?php
  	$current_page = (get_query_var('paged')?get_query_var('paged'):1);
  $list = array(
    "post_type" => "post",
    "posts_per_page" => 3,
    "paged" => $current_page
  );  
  $query = new WP_Query($list);
  if($query -> have_posts())
  {
    while($query ->have_posts())
    {
     $query -> the_post();
?>
    <div class="container news-page">
       
          <div class="all_news row">
            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-6">
                <a href="<?php the_permalink();?>" class="img_postnews img-responsive">
                    <?php the_post_thumbnail(400,135,true);?>
                </a>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-6">
                <a href="<?php the_permalink();?>">
                    <h3 class="car-font-size"><?php the_title();?></h3>
                </a>
                <?php $category = get_the_category(); ?>
                <p><?php echo $category[0]->cat_name?><span>,&nbsp;&nbsp;<?php echo get_the_date("Y/m/d H:i");?></span></p>
                <h3><?php echo excerpt(50)?></h3>
            </div>
          </div><!--bews-->
       
    </div>
<?php
    }
  }
?>
<div class="text-center"><?php  wp_pagenavi(array('query'=>$query)); ?></div>
<?php get_footer(); ?>