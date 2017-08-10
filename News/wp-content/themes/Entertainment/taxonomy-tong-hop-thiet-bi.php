<?php  get_header(); ?>
<?php get_template_part("template-parts/slider");?>
<div class="container">
	<div class="row">
<?php
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; 
$list = array(
	"post_type" => "thiet-bi",
	'paged' => $paged,
	"posts_per_page" => 5,
	"tax_query" =>array(
		array(
			'taxonomy' => 'tong-hop-thiet-bi',
			'field'    => 'slug',
			'terms'    => get_query_var('term'),
		),
	),
);
$query = new WP_Query($list);
if($query->have_posts())
{
	while($query->have_posts())
	{
		$query->the_post();
?>
		<div class="list_paged">
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 img_paged">
				<a href="<?php the_permalink(); ?> " title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 info_paged">
				<div class="shadow_title title_detail_post">
					<h3 class="text-center title_page"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				</div>
				<div class="info_detail_post"><?php echo excerpt(90);?></div>
				<div class="view_post">
					<a href="<?php the_permalink(); ?> " title="<?php the_title(); ?>">Xem chi tiết</a>
				</div>
			</div>
		</div>
<?php		
	}
}
?>
		 <div class="pagination">
			<?php
			if(function_exists('wp_pagenavi'))
				{
					wp_pagenavi();
				}
			?>
		</div>	
	</div>
</div>
<?php get_footer(); ?>


