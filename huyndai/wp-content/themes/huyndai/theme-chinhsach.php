<?php 
/*
    Template Name: Chính Sách
*/
get_header();
?>
<div class="container-fluid policy">
  <div class="row">
    <div class="col-lg-12 col-md-12 banner2 no-margin">
        <div class="container ">
          <div class="row top-related-pages">
          		
          </div>
        </div><!--container-->
    </div>
  </div>
</div>
<?php
if(have_posts()):
    while(have_posts()):
		the_post();
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            	<h1 class="main-title"><?php the_title();?></h1>
                <?php the_content();?>
            </div>
            <div class="policy col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <?php echo do_shortcode('[contact-form-7 id="139" title="Send_Mail"]');?>
            </div>
        </div>
    </div>
<?php
    endwhile;
  endif;
?>
<script>
	jQuery(document).ready(function($){
        $(".top-related-pages").append($(".content-from-menu .policy.s-container .child-pages").clone());
		if( $(window).width() < 767 ){
			$("table").wrap('<div class="table-responsive"></div>');			
		}

    });
</script>
<?php get_footer(); ?>