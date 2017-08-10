<?php  
/*
	Template Name: Thông Tin Học Sinh
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
<div class="bg-content">
	
				<?php  
					if(have_posts())
					{
						while(have_posts())
						{
							the_post();
				?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 animate_top">
					<h1 class="text-center title_single">thông tin học sinh và giáo viên giảng dạy</h1>
					<table class="table table-condensed table_student">
						<tr class="text-center">
							<td><strong>Học sinh</strong></td>
							<td><strong>Tên lớp</strong></td>
							<td><strong>Môn</strong></td>
							<td><strong>Địa điểm</strong></td>
							<td><strong>Số buổi / tuần</strong></td>
							<td><strong>Học phí</strong></td>
							<td><strong>Điện thoại</strong></td>
							<td><strong>Địa chỉ Email</strong></td>
						</tr>
						<tr>
							<td>Nguyễn Văn A</td>
							<td>Lớp Ngoại ngữ (Người lớn)</td>
							<td>Tiếng Anh chuyên ngành Du lịch</td>
							<td>Hùng Vương, Q.5, TP. Hồ Chí Minh</td>
							<td>2 (T2-T5 sau 18 giờ)</td>
							<td>2.200.000 đ</td>
							<td>0949681268</td>
							<td>abc@gmail.com</td>
						</tr>
						<tr>
							<td>Nguyễn Văn A</td>
							<td>Lớp Ngoại ngữ (Người lớn)</td>
							<td>Tiếng Anh chuyên ngành Du lịch</td>
							<td>Hùng Vương, Q.5, TP. Hồ Chí Minh</td>
							<td>2 (T2-T5 sau 18 giờ)</td>
							<td>2.200.000 đ</td>
							<td>0949681268</td>
							<td>abc@gmail.com</td>
						</tr>
						<tr>
							<td>Nguyễn Văn A</td>
							<td>Lớp Ngoại ngữ (Người lớn)</td>
							<td>Tiếng Anh chuyên ngành Du lịch</td>
							<td>Hùng Vương, Q.5, TP. Hồ Chí Minh</td>
							<td>2 (T2-T5 sau 18 giờ)</td>
							<td>2.200.000 đ</td>
							<td>0949681268</td>
							<td>abc@gmail.com</td>
						</tr>
					</table>
			</div>
		</div>
	</div>
	<div class="container-fulid">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-6 animate_bottom">
				<img class="img-responsive img_teacher" src="<?php echo url."/img/giaovien1.jpg"?>" alt="Giáo viên Lý – Hóa">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 info_teacher animate_bottom">
				<p><img class="icon_info_teacher" src="<?php echo url."/img/icon-teach1.png"?>" alt="Tên giáo viên">Trúc Hồ</p>
				<p><img class="icon_info_teacher" src="<?php echo url."/img/icon-teach2.png"?>" alt="Môn dạy">Giáo viên Lý – Hóa</p>
				<h2>Học vấn & Kinh nghiệm</h2>
				<p><img class="icon_info_teacher" src="<?php echo url."/img/icon-teach3.png"?>" alt="Tên giáo viên">Tốt nghiệp Kỹ sư Chương trình Tiên tiến tại Đại học UC Davis, chuyên ngành Công nghệ Thực phẩm.</p>
				<p><img class="icon_info_teacher" src="<?php echo url."/img/icon-teach4.png"?>" alt="Môn dạy">Hơn 6 năm kinh nghiệm dạy gia sư cho học sinh trường quốc tế (ISHCMC, BVIS, SSIS…).</p>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-12 animate_right">
				<div class="fb-comments" data-href="https://www.facebook.com/giasuquocte.edu.vn/?fref=ts" data-numposts="50" data-width="460"></div>
			</div>
			<div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-8 skill_teacher animate_left">
				<h3>Kỹ năng</h3>
				<p>Kiến thức chuyên ngành</p>
				<div class="progress">
				  <div class="progress-bar progress-bar-danger progress-bar-striped skill1" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
				    <span >90%</span>
				  </div>
				</div>
				<p>Khả năng sư phạm</p>
				<div class="progress">
				  <div class="progress-bar progress-bar-success progress-bar-striped skill2" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
				    <span>90%</span>
				  </div>
				</div>
				<p>Tương tác với học viên</p>
				<div class="progress">
				  <div class="progress-bar progress-bar-warning progress-bar-striped skill3" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
				    <span>85%</span>
				  </div>
				</div>
				<p>Tổ chức hoạt động ngoài giờ</p>
				<div class="progress">
				  <div class="progress-bar progress-bar-info progress-bar-striped skill4" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
				    <span>90%</span>
				  </div>
				</div>
			</div>
		</div>
	</div>
				<?php
						}
					}
				?>
</div>
<?php get_footer(); ?>