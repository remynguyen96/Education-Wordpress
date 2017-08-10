<?php  get_header();?>
<div class="page_background">
	<a href="<?php echo home_url(); ?>">ITutor</a>
	<img src="<?php echo url."/img/redo-arrow.png" ?>" alt="arrow right">
	<p><?php the_title() ?></p>
</div>
<div class="bg-content">
	<div class="container">
		<div class="row">

			<div class="col-md-8">
				<?php
					if(have_posts())
					{
						while(have_posts())
						{
							the_post();
				?>
					<h2 class="title_single"><?php the_title();?></h2>
					<div classs="thumbnail_tip"><?php the_post_thumbnail();?></div>
					<div class="content_tip"><?php the_content();?></div>
					<div class="author_tip"><?php the_author();?></div>
				<?php
						}
					}
				?>
			</div>
			<div class="col-md-4 sidebar_post animate_bottom">
				<?php
					if(is_active_sidebar('sidebar_single'))
					{
						dynamic_sidebar('sidebar_single');
					}
				?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>