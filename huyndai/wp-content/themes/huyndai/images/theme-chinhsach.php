<?php 
/*
    Template Name: Chính Sách
*/
get_header();
?>
<script type='text/javascript' src='//dsms0mj1bbhn4.cloudfront.net/assets/pub/shareaholic.js' data-shr-siteid='23578c66430953d1b9d900b1d18e28a5' data-cfasync='false' async='async'></script>
<?php
	$policy_page = get_page_by_path( 'trang-chinh-sach' );
	$child_page_args = array(
			'post_type'=>'page',
			'post_parent'=>$policy_page->ID
	);
	$child_page_qpr = new WP_Query($child_page_args);				
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 col-md-12 banner1">
      <img src="<?php echo url."/images/forma-house.png" ?>" alt="forma-house"> 
      <img src="<?php echo url."/images/forma-7.png" ?> " alt="forma-7">
      <h3><a class="title_img" href="<?php //the_permalink();?>"><?php //the_title();?></a></h3>
    </div>
    <div class="col-lg-12 col-md-12 banner2 no-margin">
        <div class="container related_page">
          <div class="row">
          
          <?php 
		  	if($child_page_qpr->have_posts()):
			while($child_page_qpr->have_posts()):
				$child_page_qpr->the_post();
		  ?>
            <div class="col-lg-3 col-md-3 col-xs-6">
                <div class="col-lg-2 col-md-2 no-padding">
                    <?php the_post_thumbnail();?>
                </div>
                <div class="col-lg-10 col-md-10 ">
                    <h4><a href="<?php the_permalink();?>">Chính sách bảo mật thông tin</a></h4>
                </div>
            </div>
          <?php 
		  		endwhile;
			endif;
			wp_reset_postdata();
		  ?> 
           
          </div>
        </div>
    </div>
  </div>
</div>
<?php
if(have_posts()):
    while(have_posts()):
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <?php the_content();?>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <?php echo do_shortcode('[contact-form-7 id="139" title="Send_Mail"]');?>
            </div>
        </div>
    </div>
<?php
    endwhile;
	wp_reset_postdata();
  endif;
?>
<?php get_footer(); ?>