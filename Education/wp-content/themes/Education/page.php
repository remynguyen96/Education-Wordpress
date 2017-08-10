<?php get_header() ?>
<div class="page_background">
	<div class="animate_bottom">
		<a href="<?php echo home_url(); ?>">ITutor</a>
		<img src="<?php echo url."/img/redo-arrow.png" ?>" alt="arrow right">
		<p><?php the_title() ?></p>
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
  		<?php the_content();?>
	</div>
</div>
<?php
      }
}
?>
<?php get_footer() ?>