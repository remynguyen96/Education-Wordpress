<?php  
/*
	Template Name: Về Chúng Tôi
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
		<div class="col-md-12">
			<?php  
				if(have_posts())
				{
					while(have_posts())
					{
						the_post();
			?>
				<h1 class="text-center" id="title_aboutus"><?php the_title();?></h1>
				<div class="content_aboutus"><?php the_content();?></div>
			<?php
					}
				}
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>