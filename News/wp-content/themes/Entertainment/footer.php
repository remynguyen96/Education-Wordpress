<div id="footer_slider">
	<?php $slider_footer = Slider_Footer(); 
	if(isset($slider_footer[0]))
  	{
   		echo $slider_footer[0];
  	}
  	if(isset($slider_footer[1]))
  	{
   		echo $slider_footer[1];
  	}
  	if(isset($slider_footer[2]))
  	{
   		echo $slider_footer[2];
  	}
  	if(isset($slider_footer[3]))
  	{
   		echo $slider_footer[3];
  	}
  	if(isset($slider_footer[4]))
  	{
   		echo $slider_footer[4];
  	}
  	if(isset($slider_footer[5]))
  	{
   		echo $slider_footer[5];
  	}
  	if(isset($slider_footer[6]))
  	{
   		echo $slider_footer[6];
  	}
  	if(isset($slider_footer[7]))
  	{
   		echo $slider_footer[7];
  	}
	?>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 baner_footer1">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 banner1">
				<?php echo do_shortcode('[contact-form-7 id="204" title="Email đăng ký"]'); ?>
			</div>
			<?php $social = Link_Social(); ?>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 banner1">
				<a href="<?php echo $social[1]; ?>" target="_blank"><img src="<?php echo url."/img/youtube_icon1.png"?>" alt="Owl Image"></a>
				<a href="<?php echo $social[4]; ?>" target="_blank"><img src="<?php echo url."/img/twitter_icon.png"?>" alt="Owl Image"></a>
				<a href="<?php echo $social[2]; ?>" target="_blank"><img src="<?php echo url."/img/skype_icon.png"?>" alt="Owl Image"></a>
				<a href="<?php echo $social[3]; ?>" target="_blank"><img src="<?php echo url."/img/google_icon1.png"?>" alt="Owl Image"></a>
				<a href="<?php echo $social[0]; ?>" target="_blank"><img src="<?php echo url."/img/fb_icon1.png"?>" alt="Owl Image"></a>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 baner_footer2">
			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<?php echo Banner_Footer(); ?>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<!-- page facebook -->
				<div class="fb-page" data-href="<?php echo $social[0]; ?>" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
				<blockquote cite="<?php echo $social[0]; ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo $social[0]; ?>">Envischool</a></blockquote></div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 menu_footer">
				<?php 
					  if(is_active_sidebar("side_footer"))
					  {
					      dynamic_sidebar("side_footer");
					  }
				?>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 baner_footer3">
			<span class="copyright">2016 Copyright © Envischool. All rights reserved</span>
		</div>
	</div>
</div>
<div id="fb-root"></div>
<?php wp_footer(); ?>
</body>
</html>
