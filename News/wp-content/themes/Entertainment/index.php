<?php get_header(); ?>
<?php get_template_part("template-parts/slider");?>
<div class="container-fluid">
	<div class="row introduce">
		<!-- Introduce -->
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
			<img src="<?php echo url."/img/title.png" ?>" class="img-responsive" alt="Danh mục sản phẩm">
			<!-- <ul class="list_product">
				<li><a href="" class="a_product">Tư Vấn An Toàn Lao Động</a></li>
				<li><a href="" class="a_product">Tư Vấn Thiết Bị Môi Trường</a></li>
				<li><a href="" class="a_product">Tư Vấn Thiết Kế Thi Công</a></li>
				<li><a href="" class="a_product">Tư Vấn Dụng Cụ Bảo Hộ Lao Động</a></li>
				<li><a href="" class="a_product">Tư Vấn An Toàn Hóa Chất</a></li>
				<li><a href="" class="a_product">Tư Vấn Pháp Luật Về Môi Trường</a></li>
				<li><a href="" class="a_product">Đào Tạo Môi Trường</a></li>
				<li><a href="" class="a_product">Đào Tạo An Toàn Lao Động</a></li>
			</ul> -->
			<?php  
			if(is_active_sidebar("sidebar_service"))
			{
				dynamic_sidebar("sidebar_service");
			}
			?>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
			<?php 
			  $img_home1 = Img_home();
			  if(isset($img_home1[0]))
			  {
			   	echo $img_home1[0];
			  }
		  		?>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
			<p class="p2_introduce">Giới thiệu</p>
				<?php Introduce() ?>
			<a href="<?php echo home_url('gioi-thieu'); ?>" class="next_introduce">Xem tiếp...</a>
		</div>
		<!-- ------- -->
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="img_hr"></div>
		<!-- Tư vấn MT-->
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="shadow_title">
				<a href="<?php echo home_url('tu-van-moi-truong'); ?>" title="Tư vấn môi trường"><h3 class="text-center title_page">Tư vấn môi trường</h3></a>
			</div>
		</div>
		<div class="list_service">
			<?php  
			$product_environment = get_terms('tu-van-moi-truong',array(
				'hide_empty' => 0,
				'number' => 4,
			));
			foreach ($product_environment as $cat):
			?>
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 one_service">
				<div class="img_service">
					<div class="hover_service">
						<a href="tu-van-moi-truong/<?php echo $cat->slug ?>"></a>
					</div>
					<?php echo $cat->description ?>
				</div>
				<div class="info_service">
					<a href="tu-van-moi-truong/<?php echo $cat->slug ?>"><h3><?php echo $cat->name ?></h3></a>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		<!-- ------- -->
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="img_hr"></div>
		<!-- Tư vấn thiết kế thi công-->
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="shadow_title">
				<a href="<?php echo home_url('tong-hop-thiet-ke'); ?>" title="Tư vấn thiết kế thi công"><h3 class="text-center title_page">Tư vấn thiết kế thi công</h3></a>
			</div>
		</div>
		<div class="list_service">
		<?php  
		$product_design = get_terms('tong-hop-thiet-ke',array(
                    'hide_empty'=> 0,
                    'number'=> 4,
                ));
		foreach($product_design as $cat):
		?>
		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
			<ul class="design">
				<li class="design_img">
					<a href="tong-hop-thiet-ke/<?php echo $cat->slug ?>">
						<?php echo $cat->description ?>
						<div class="info_design">
							<img src="<?php echo url."/img/view.png" ?> " alt="Xem thêm">
						</div>
					</a>
				</li>
				<a href="tong-hop-thiet-ke/<?php echo $cat->slug ?>" class="title_design"><h3><?php echo $cat->name ?></h3></a>
			</ul>
		</div>
		<?php endforeach; ?>
		</div>
		<!-- ------- -->
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="img_hr"></div>
		<!-- Tư vấn thiết bị -->
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="shadow_title">
				<a href="<?php echo home_url('tong-hop-thiet-bi'); ?>" title="Tư vấn thiết bị môi trường"><h3 class="text-center title_page">Tư vấn thiết bị môi trường</h3></a>
			</div>
		</div>
		<div class="list_service">
		<?php  
		$product_service = get_terms('tong-hop-thiet-bi',array(
                    'hide_empty'=> 0,
                    'number'=> 4,
                ));
		foreach($product_service as $cat)
		{
		?>
		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
			<ul class="design">
				<li class="device">
					<a href="tong-hop-thiet-bi/<?php echo $cat->slug ?>">
						<?php echo $cat->description ?>
						<div class="info_design">
							<img src="<?php echo url."/img/view.png" ?> " alt="Xem thêm">
						</div>
					</a>
				</li>
				<a href="tong-hop-thiet-bi/<?php echo $cat->slug ?>" class="title_design"><h3><?php echo $cat->name ?></h3></a>
			</ul>
		</div>
		<?php
		}
		?>
		</div>
		<!-- ------- -->
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="img_hr"></div>
		<!-- Tư vấn an toàn -->
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="shadow_title">
				<a href="<?php echo home_url('tu-van-an-toan-lao-dong'); ?>" title="Tư vấn an toàn lao động"><h3 class="text-center title_page">Tư vấn an toàn lao động</h3></a>
			</div>
		</div>
				<div class="list_service">
		<?php  
		$product_safe = get_terms('tu-van-an-toan-lao-dong',array(
	                'hide_empty'=> 0,
	                'number'=> 4,
	            ));
		foreach($product_safe as $cat)
		{
		?>
		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 one_service">
			<div class="img_safe">
				<a href="tu-van-an-toan-lao-dong/<?php echo $cat->slug ?>">
					<?php echo $cat->description ?>
				</a>
				<div class="hover_safe"></div>
			</div>
			<div class="info_safe">
				<a href="tu-van-an-toan-lao-dong/<?php echo $cat->slug ?>"><h3><?php echo $cat->name ?></h3></a>
			</div>
		</div>
		<?php
		}
		?>
		</div>
		<!-- ------- -->
		  <?php 
		  $img_home2 = Img_home();
		  if(isset($img_home2[1]))
		  {
		   	echo $img_home2[1];
		  }
		  ?>
		<!-- Tin tức sự kiện -->
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 event_home">
				<p class="title_news">TIN TỨC - SỰ KIỆN</p>
					<?php  
					$list_event=  array(
						'post_type' => "moi-truong",
						'posts_per_page' => 1,
						'orderby'        => 'rand',
					);
					$query = new WP_Query($list_event);
					if($query->have_posts())
					{
						while($query->have_posts())
						{
							$query->the_post();
					?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
					<a class="event_title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					<div class="event_excerpt">
						<?php echo excerpt(26); ?>
					</div>
					<?php
						}
					}
					?>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 news_home">
					<?php  
					$list_event=  array(
						'post_type' => "moi-truong",
						'posts_per_page' => "10",
						'orderby'        => 'rand',
					);
					$query = new WP_Query($list_event);
					if($query->have_posts())
					{
						while($query->have_posts())
						{
							$query->the_post();								
					?>
					<div class="post_home">
						<div class="excerpt_info">
							<a href="<?php the_permalink();?>" title="<?php the_title();?>">
								<h3><?php the_title();?></h3>
							</a>
							<?php echo excerpt(20);?>
						</div>
						<div class="excerpt_img">
							<a href="<?php the_permalink();?>" title="<?php the_title();?>">
								<?php the_post_thumbnail(array(90,90));?>
							</a>
						</div>
					</div>
					<?php
						}
					}
					?>
				</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 clip_home">
				<p class="title_clip">VIDEO - CLIP</p>
				<div id="video-placeholder"></div>
				<a href="javascript:void(0)" class="mute_video2" onclick="mute_video()"></a>
			</div>
			<?php $clip_youtube = Clip() ?>
			<div id="clip_environment1" data-video-id="<?php echo $clip_youtube[0]; ?>" class="hidden"></div>
			<div id="clip_environment2" data-video-id="<?php echo $clip_youtube[1]; ?>" class="hidden"></div>
	</div>
</div>
<?php get_footer(); ?>