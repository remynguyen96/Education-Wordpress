<?php  
/*
	Template Name: An toàn lao động
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
			 $product_cats = get_terms('tu-van-an-toan-lao-dong',array(
	                'hide_empty'=> 0,
	            ));
			foreach($product_cats as $cat)
			{
			?>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 one_service">
				<div class="img_safe">
					<a href="<?php echo $cat->slug ?>">
						<?php echo $cat->description ?>
					</a>
					<div class="hover_safe"></div>
				</div>
				<div class="info_safe">
					<a href="<?php echo $cat->slug ?>"><h3><?php echo $cat->name ?></h3></a>
				</div>
			</div>
			<?php
			}
			?>
		</div>
	</div>
</div>	
<?php get_footer(); ?>