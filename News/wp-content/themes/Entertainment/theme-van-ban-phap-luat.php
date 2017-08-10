<?php  
/*
	Template Name: 	Văn bản pháp luật
*/
get_header();
?>
<?php get_template_part("template-parts/slider");?>
<div class="shadow_title">
	<h2 class="text-center title_page"><?php the_title(); ?></h2>
</div>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6 col-md-off-set3 col-lg-6 col-lg-offset-3 table_search">
			<form role="search" method="post" action="">
				<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
					<input type="text" name="keyword" value="<?php echo $_POST["keyword"] ?>" class="input-lg form-control input_search" placeholder="Nhập tên văn bản cần tìm kiếm...">	
				</div>
				<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
					<button class="btn btn-success btn-lg btn_search" type="submit" name="btn">Tìm</button>			
				</div>
			</form>
		</div>
		<?php
		if (isset($_POST["keyword"]))
		{
			$keyword = $_POST["keyword"];
				$list = array(
					'post_type' => 'van-ban-phap-luat',
					'posts_per_page' => "10",
					'paged' => get_query_var("paged"),
					's' => $keyword,
				);
					$query = new WP_Query($list);
					if($query->have_posts())
					{
					?>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 table_result">
				<table class="table table-hover table-bordered table_new">
					<tr>
						<th class="text-center">#</th>
						<th class="text-center">Số/ký hiệu</th>
						<th class="text-center">Trích yếu</th>
						<th class="text-center">Lĩnh vực</th>
						<th class="text-center">Loại văn bản</th>
						<th class="text-center">Cơ quan ban hành</th>
					</tr>
					<?php
						$i = 1;
						while($query->have_posts())
						{
							$query->the_post();
							$field = get_the_terms(get_the_ID(),'linh-vuc');
							$text_types = get_the_terms(get_the_ID(),'loai-van-ban');
						 	$organization = get_the_terms(get_the_ID(),"co-quan-ban-hanh");
					?>
					<tr>
						<td class="text-center"><?php echo $i ?></td>
						<td class="text-center"><?php the_title(); ?></td>
						<td class="text-center"><a href="<?php echo get_post_meta(get_the_ID(),'wpcf-download',true);?>" title="<?php the_title() ?>"><?php the_excerpt(); ?></a></td>
						<td class="text-center"><?php echo $field[0]->name; ?></td>
						<td class="text-center"><?php echo $text_types[0]->name; ?></td>
						<td class="text-center"><?php echo $organization[0]->name; ?></td>
					</tr>
					<?php
						$i = $i+1;
						}
					}
					?>
				</table>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-4 col-lg-8 col-lg-offset-4 pagination">
				<?php  wp_pagenavi(array("query" => $query)); ?>
	        </div>	
	    <?php 
	    } 
	    ?>
	</div>
</div>
<?php get_footer(); ?>




