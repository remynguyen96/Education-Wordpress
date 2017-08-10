<?php  
/*
	Template Name: Thiết kế
*/
get_header();
?>
<?php get_template_part("template-parts/slider");?>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="shadow_title">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h2 class="text-center title_page"><?php the_title(); ?></h2></a>
			</div>
		</div>
		<div class="list_service">
			<?php  
			 $product_cats = get_terms('tong-hop-thiet-ke',array(
                    'hide_empty'=> 0,
                ));
			foreach($product_cats as $cat):
			?>
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<ul class="design">
					<li class="design_img">
						<a href="<?php echo $cat->slug ?>">
							<?php echo $cat->description ?>
							<div class="info_design">
								<img src="<?php echo url."/img/view.png" ?> " alt="Xem thêm">
							</div>
						</a>
					</li>
					<a href="<?php echo $cat->slug ?>" class="title_design"><h3><?php echo $cat->name;?></h3></a>
				</ul>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
