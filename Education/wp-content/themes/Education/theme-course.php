<?php  
/*
	Template Name: Khóa Học
*/
get_header() ?>
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
		<div class="col-md-8 introduce_subject">
			<div class="img_subject"><?php the_post_thumbnail(); ?></div>
			<h1 class="h1_subject">Khóa học bắt đầu vào</h1>
			<div id="count-down" class="time_subject time_clock" data-date="<?php echo get_post_meta(get_the_id(),"wpcf-thoi-gian-khoa-hoc",true)?>"></div>
		</div>
  		<?php the_content();?>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1 animate_bottom">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title title_subject_panel text-center">ĐA DẠNG HÓA CHƯƠNG TRÌNH GIẢNG DẠY</h3>
					<p class="p_subject_panel text-center">Chương trình giảng dạy tại Intertu Education dàn trải nhiều lĩnh vực.</p> 
					<p class="p_subject_panel text-center">Các khóa học được thiết kế riêng tương thích với chương trình đào tạo của các trường quốc tế tại Việt Nam.</p>
				</div>
				<div class="panel-body">
					<div id="own-school">
						<img src="<?php echo url."/img/School/BIS.png" ?>" alt="BIS" class="img-responsive">
						<img src="<?php echo url."/img/School/BCIS.jpg" ?>" alt="BCIS" class="img-responsive">
						<img src="<?php echo url."/img/School/ISHCMC.jpg"?> " alt="ISHCMC" class="img-responsive">
						<img src="<?php echo url."/img/School/RISS.png" ?>" alt="RISS" class="img-responsive">
						<img src="<?php echo url."/img/School/TAS.jpg" ?>" alt="TAS" class="img-responsive">
						<img src="<?php echo url."/img/School/TAIS.png" ?>" alt="TAIS" class="img-responsive">
						<img src="<?php echo url."/img/School/SSIS.png" ?>" alt="SSIS" class="img-responsive">
						<img src="<?php echo url."/img/School/VAIS.jpg" ?>" alt="VAIS" class="img-responsive">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
      }
}
?>
<?php get_footer() ?>