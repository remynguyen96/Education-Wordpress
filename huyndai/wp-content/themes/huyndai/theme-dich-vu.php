<?php 
/*
    Template Name: Dịch Vụ
*/
get_header();
?>
<div class="container-fluid">
  <div class="row">
    
    <div class="col-lg-12 col-md-12 banner2_2 no-margin">
        <div class="container">
          <div class="top-related-pages row">
            	
          </div>
        </div><!--container-->
    </div>
  </div>
</div>
<?php
  if(have_posts())
  {
    while(have_posts())
    {
      the_post();
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-11 col-lg-offset-1 col-md-11 col-md-offset-1 col-sm-12 col-xs-12">
            	<h1><?php the_title();?></h1>
                <?php the_content();?>
            </div>
        </div>
    </div>
<?php
    }
  }
?>
<script>
	jQuery(document).ready(function($){
        $(".top-related-pages").append($(".content-from-menu .service.s-container .child-pages").clone());
		
    });
</script>
<?php get_footer(); ?>