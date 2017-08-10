<?php get_header() ?>
<?php
if(have_posts())
{
    while(have_posts())
      {
        the_post();
?>
<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		  <h3 class="title_single"><?php the_title(); ?></h3>
		  <p class="time_single">
		  	<?php $category=get_the_category();  echo $category[0]->cat_name ?>
		  	<span>, <?php echo get_the_date("d/m/Y H:i");?></span>
		  </p>
		  <p class="content_single"><?php the_content();?></p>
<?php
      }
}
?>
		  <div class="fb-comments" data-href="https://www.facebook.com/elinda.chan.5?hc_ref=NEWSFEED" data-width="575" data-numposts="20"></div>
		</div>
			<?php 
				if(is_active_sidebar("sidebar_news"))
				{
					dynamic_sidebar("sidebar_news");
				}

			?>
	</div>
</div>
<?php get_footer() ?>