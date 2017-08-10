<?php  
/*
	Template Name: Góc Học Tập
*/
get_header();
?>
<div class="page_background">
	<div class="animate_bottom">
		<a href="<?php echo home_url(); ?>">ITutor</a>
		<img src="<?php echo url."/img/redo-arrow.png" ?>" alt="arrow right">
		<p><?php the_title() ?></p>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-7">
			<?php
				$list = array(
					'post_type' => 'muc-goc-hoc-tap',
					'posts_per_page' => -1,
				);
				$query = new WP_Query($list);
				if($query->have_posts())
				{
					while($query->have_posts())
					{
						$query->the_post();
			?>
			<div class="one_post">
				<h2 class="title_tip"><?php the_title();?></h2>
				<a class="hover_icon" href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_post_thumbnail();?></a>
				<div class="excerpt_tip"><?php the_excerpt();?></div>
				<div class="date_tip">
					<img src="<?php echo url."/img/calendar.png"?>" alt="Ngày đăng bài viết">
					<span><?php echo get_the_date("d/m/Y H:i") ?></span> 
				</div>
			</div>
			<?php
					}
				}
			?>
		</div>
		<div class="col-md-5 sidebar animate_bottom">
			<h3 class="title_question text-center">Câu Hỏi Học Tập</h3>
			<div class="fb-comments" data-href="https://www.facebook.com/giasuquocte.edu.vn/?fref=ts" data-numposts="30" data-width="400"></div>
		</div>
	</div>
</div>
<?php get_footer(); ?>