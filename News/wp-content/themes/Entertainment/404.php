<?php get_header(); ?>
<div class="container-fluid">
	<div class="row">
		<?php 
		  $img_404 = Img_home();
		  if(isset($img_404[2]))
		  {
		   	echo $img_404[2];
		  }
		  ?>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 page_404">
			<h3>Xin Lỗi !</h3>
			<p>Chúng Tôi Không Tìm Thấy Trang Này !</p>
			<p>Địa chỉ URL bạn yêu cầu không tìm thấy trên server.</p>
			<p>Có thể bạn gõ sai địa chỉ hoặc dữ liệu này đã bị xóa khỏi hệ thống trên server.</p>
		</div>
	</div>
</div>
<?php get_footer(); ?>