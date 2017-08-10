<?php get_header() ?>
<?php get_template_part("template-parts/slider");?>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-11 col-md-8 col-lg-8 content_single">
<?php
if(have_posts())
{
	while(have_posts())
	{
		the_post();
?>

			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
<?php
	}
}
?>
			<div class="connect_fb">
				<div class="fb-comments" data-href="<?php echo $social[0]; ?>" data-numposts="10"></div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-7 col-md-4 col-lg-4 content_single">
     <div id="sticky_single">
			<?php
				if(is_active_sidebar("side_single"))
				{
					dynamic_sidebar("side_single");
				}
			?>
      </div>
		</div>
	</div>
</div>
<script>
jQuery(document).ready(function($){
  var height_footer = $(".connect_fb").offset().top;
  var width = $(window).width()
  if (width > "991"){
       $("#sticky_single").sticky({bottomSpacing:400});
  }
 $('#sticky_single').on('sticky-bottom-reached', function(){
     $("#sticky_single").unstick();
      $("#sticky_single").sticky({bottomSpacing:400});
 });

  /*var width = $(window).width()
  if ($('#sticky_single').offset()!=null && width > "991"){
    var top = $('#sticky_single').offset().top;
    var height = $('#sticky_single').height();
    var winHeight = $(window).height(); 
    var footerTop = $('#footer_slider').offset().top;
    var gap =35;
    $(window).scroll(function () {
      var y = $(this).scrollTop();
      if (y+winHeight >= top+ height+gap && y+winHeight<=footerTop) {
        $('#sticky_single').addClass('sidebarfixed').css('top',winHeight-height-gap +'px');
      } 
      else if (y+winHeight>footerTop) {
       $('#sticky_single').addClass('sidebarfixed').css('top',footerTop-height-y-gap+'px');
      } 
      else    
      {
        $('#sticky_single').removeClass('sidebarfixed').css('top','0px');
      }
    });
  } */
});
</script>
<?php get_footer() ?>
