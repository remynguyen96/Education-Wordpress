<?php get_header(); ?>
<div class="container-fluid page_404 animate_left">
	<div class="row">
		<div class="col-lg-11 col-lg-offset-1 col-md-12 col-sm-12">
			<img src="<?php echo url."/img/404.png"?>" alt="404" class="img_404 img-responsive">
			<div class="not_found">
				<h1 class="h1_404">Xin Lỗi !</h1><br/>
				<h2>Chúng Tôi Không Tìm Thấy Trang Này !</h2><br/>
				<h3>Địa chỉ URL bạn yêu cầu không tìm thấy trên server.<br/><br/>Có thể bạn gõ sai địa chỉ hoặc dữ liệu này đã bị xóa khỏi hệ thống trên server.</h3><br/>
				<div class="col-lg-1 col-md-1 col-sm-3">
					<a href="<?php echo home_url();?>"><img src="<?php echo url."/img/Previous.png" ?>" alt="Về trang chủ" class="img-responsive"></a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>