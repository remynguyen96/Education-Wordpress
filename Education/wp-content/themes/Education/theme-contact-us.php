<?php  
/*
	Template Name: Liên Hệ
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
		<div class="col-md-8">
			<?php  
				if(have_posts())
				{
					while(have_posts())
					{
						the_post();
			?>
				<h1 class="title_contact text-center"><?php the_title();?></h1>
			<?php
					}
				}
			?>
				<div class="row animate_left">
					<div class="col-md-7">
						<?php the_content();?>
					</div>
					<div class="col-md-5 address_contact">
						<p>	Lầu 1, 191 Nguyễn Văn Hưởng, Phường Thảo Điền, Quận 2, TPHCM </p>
						<p>Telephone:+84 123 456 7890</p>
						<p>E-mail: ht.intertu@gmail.com</p>
						<p>Facebook: <a href="https://www.facebook.com/Intertu.edu.vn/?fref=ts" target="_blank">Intertu Education</a></p>
					</div>
				</div>
		</div>
		<div class="col-md-4">
			<h2 class="text-center">Thông Tin Địa Chỉ</h2>
			<iframe class="google_map animate_right" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ElAxOTEgTmd1eeG7hW4gVsSDbiBIxrDhu59uZywgVGjhuqNvIMSQaeG7gW4sIFF14bqtbiAyLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ&key=AIzaSyBEUxeLJdfXyYbwu0BfxUjcjTkHUtT-WeE" allowfullscreen></iframe>
		</div>
	</div>
</div>

<?php get_footer(); ?>
