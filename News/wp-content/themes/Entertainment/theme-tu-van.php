<?php  
/*
	Template Name: Danh mục Tư vấn
*/
get_header();
get_template_part("template-parts/slider");
?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="shadow_title">
		<h2 class="text-center title_page"><?php the_title(); ?></h2>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="list_service">
<?php
$slug = get_post_field( 'post_name', get_post() );  
if($slug == "tu-van-moi-truong")
{
	$list1= array(
		"post_type" => "post",
		"posts_per_page" => -1,
		"category_name" => $slug,
	);
	$query1 = new WP_Query($list1);
	if($query1 -> have_posts())
	{
		while($query1 -> have_posts())
		{
			$query1 -> the_post();
	?>
	<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 one_service">
		<div class="img_service">
			<div class="hover_service">
				<a href="<?php the_permalink(); ?>"></a>
			</div>
			<?php the_post_thumbnail();?>
		</div>
		<div class="info_service">
			<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
		</div>
	</div>
	<?php
		}
	}
}
if($slug == "tu-van-an-toan-lao-dong")
{
	$list2= array(
		"post_type" => "post",
		"posts_per_page" => -1,
		"category_name" => $slug,
	);
	$query2 = new WP_Query($list2);
	if($query2 -> have_posts())
	{
		while($query2 -> have_posts())
		{
			$query2 -> the_post();
	?>
	<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 one_service">
		<div class="img_safe">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail();?>
			</a>
			<div class="hover_safe"></div>
		</div>
		<div class="info_safe">
			<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
		</div>
	</div>
	<?php
		}
	}
}
if($slug == "tu-van-thiet-bi-moi-truong")
{
	$list3= array(
		"post_type" => "post",
		"posts_per_page" => -1,
		"category_name" => $slug,
	);
	$query3 = new WP_Query($list3);
	if($query3 -> have_posts())
	{
		while($query3 -> have_posts())
		{
			$query3 -> the_post();
	?>
	<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
		<ul class="design">
			<li class="device">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
					<div class="info_design">
						<img src="<?php echo url."/img/view.png" ?> " alt="Xem thêm">
					</div>
				</a>
			</li>
			<a href="<?php the_permalink();?>" class="title_design"><h3><?php the_title(); ?></h3></a>
		</ul>
	</div>
	<?php
		}
	}
}
if($slug == "tu-van-thiet-ke-thi-cong")
{
	$list4= array(
		"post_type" => "post",
		"posts_per_page" => -1,
		"category_name" => $slug,
	);
	$query4 = new WP_Query($list4);
	if($query4 -> have_posts())
	{
		while($query4 -> have_posts())
		{
			$query4 -> the_post();
	?>
	<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
		<ul class="design">
			<li class="design_img">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
					<div class="info_design">
						<img src="<?php echo url."/img/view.png" ?> " alt="Xem thêm">
					</div>
				</a>
			</li>
			<a href="<?php the_permalink();?>" class="title_design"><h3><?php the_title(); ?></h3></a>
		</ul>
	</div>
	<?php
		}
	}
}
?>
		</div>
	</div>
</div>
<?php get_footer(); ?>