<?php  
/*
	Template Name: Lớp Mới
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
			<h1 class="text-center h1_lopmoi animate_top">Thông Tin Lớp Mới</h1>
			<div class="table_class animate_left">
				<table class="table table-responsive table-hover">
					<thead>
						<tr>
							<th class="text-center" width="80px">Mã lớp</th>
							<th class="text-center">Tên lớp</th>
							<th class="text-center">Môn</th>
							<th class="text-center">Địa điểm</th>
							<th class="text-center">Số buổi / tuần</th>
							<th class="text-center" width="110px">Học phí</th>
							<th class="text-center">Giáo viên đã nhận lớp</th>
						</tr>
					</thead>
						<tr>
							<td class="text-center">C_01</td>
							<td>Lớp Ngoại ngữ (Người lớn)</td>
							<td>Tiếng Anh chuyên ngành Du lịch</td>
							<td>Hùng Vương, Q.5, TP. Hồ Chí Minh</td>
							<td>2 (T2-T5 sau 18 giờ)</td>
							<td>2.200.000 đ</td>
							<td></td>
						</tr>
						<tr>
							<td class="text-center">C_02</td>
							<td>Lớp IB (Lớp 3)</td>
							<td>Khoa học bằng tiếng Anh</td>
							<td>Võ Thị Sáu, Q.3, TP. Hồ Chí Minh</td>
							<td>3 (T6-T7-CN 15:00 - 16:30)</td>
							<td>1.800.000 đ</td>
							<td><img src="<?php echo url."/img/checkbox-mark.png"?>" alt="Giáo viên đã nhận lớp"></td>
						</tr>
						<tr>
							<td class="text-center">C_03</td>
							<td>Lớp Ngoại ngữ (Người lớn)</td>
							<td>Tiếng Việt bằng tiếng Anh cho người Hàn</td>
							<td>Tôn Đản, Q.4, TP. Hồ Chí Minh</td>
							<td>5 (T2-T3-T5-T6-CN 19:30 - 21:00)</td>
							<td>4.500.000 đ</td>
							<td></td>
						</tr>
						<tr>
							<td class="text-center">C_04</td>
							<td>Lớp AP (Lớp 6)</td>
							<td>Toán bằng tiếng Anh</td>
							<td>Nguyễn Quý Cảnh, Q.2, TP. Hồ Chí Minh</td>
							<td>3 (T2-T4-T6 sau 19 giờ)</td>
							<td>2.400.000 đ</td>
							<td><img src="<?php echo url."/img/checkbox-mark.png"?>" alt="Giáo viên đã nhận lớp" class="img-responsive"></td>
						</tr>
						<tr>
							<td class="text-center">C_05</td>
							<td>Lớp IB (Lớp 10)</td>
							<td>Hóa bằng tiếng Anh</td>
							<td>Lý Thái Tổ, Q.10, TP. Hồ Chí Minh</td>
							<td>Hồ Chí Minh	3 (T3-T5-T7 sau 16 giờ)</td>
							<td>3.000.000 đ</td>
							<td></td>
						</tr>
				</table>
			</div>
			<div class="register_now">
				<div class="col-md-6">
					<button type="button" class="btn btn-success btn-lg register_subject" data-toggle="modal" data-target="#register_learn" data-whatever="@study"><img src="<?php echo url."/img/student.png" ?>" alt="Đăng Ký Học"> Đăng Ký Khóa Học</button>
					<div class="modal fade" id="register_learn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 class="modal-title title_register text-center text-info" id="exampleModalLabel">Đăng Ký Khóa Học</h4>
					      </div>
					      <?php echo do_shortcode('[contact-form-7 id="183" title="Popup Register Student"]'); ?>
					   </div>
					  </div>
					</div>
				</div>
				<div class="col-md-6">
					<button type="button" class="btn btn-danger btn-lg register_subject" data-toggle="modal" data-target="#register_teach" data-whatever="@teach"><img src="<?php echo url."/img/teacher.png" ?>" alt="Đăng Ký Dạy"> Đăng Ký Giảng Dạy</button>
					<div class="modal fade" id="register_teach" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe2">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal22" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 class="modal-title title_register text-center text-info" id="exampleModalLabe2">Đăng Ký Giảng Dạy</h4>
					      </div>
					      	<?php echo do_shortcode('[contact-form-7 id="184" title="Popup Register Teacher"]'); ?>
						  </div>
					  	 </div>
						</div>
					  </div>
				</div>
			</div>
		<div class="col-md-4">
			<h2 class="text-center animate_top">Theo Dõi Học Sinh</h2>
			<div class="animate_right">
			<p class="theme_login_form"><?php echo do_shortcode('[theme-my-login]')?></p>
			<?php
				if(is_active_sidebar('follow_student'))
				{
					dynamic_sidebar('follow_student');
				}
				/*if(!is_user_logged_in())
				{
					$args = array(
					'redirect' => site_url( $_SERVER['REQUEST_URI'] ),
					'form_id' => 'login_form', //viết CSS
					'label_username' => __( 'Tài khoản hoặc E-mail' ),
					'label_password' => __( 'Mật khẩu' ),
					'label_remember' => __( 'Ghi nhớ' ),
					'label_log_in' => __( 'Đăng nhập' ),
					);
					 wp_login_form($args);
				}
			        $login  = (isset($_GET['login']) ) ? $_GET['login'] : 0;
			        if ( $login === "failed" ) {
			                echo '<p class="error_login alert alert-danger">Username hoặc mật khẩu không đúng !</p>';
			        } elseif ( $login === "empty" ) {
			                echo '<p class="error_login alert alert-danger">Vui lòng điền username và mật khẩu !</p>';
			        } elseif ( $login === "false" ) {
			                echo '<p class="error_login alert alert-danger"><strong>ERROR:</strong> Bạn đã thoát ra.</p>';
			        }*/
			?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>