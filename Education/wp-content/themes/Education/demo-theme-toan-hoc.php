<?php  get_header();?>
<div class="page_background">
	<div class="animate_bottom">
		<a href="<?php echo home_url(); ?>">ITutor</a>
		<img src="<?php echo url."/img/redo-arrow.png" ?>" alt="arrow right">
		<p><?php the_title() ?></p>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-8 introduce_subject">
			<div class="img_subject"><?php the_post_thumbnail(); ?></div>
			<h1 class="h1_subject">Khóa học bắt đầu vào</h1>
		   	<div id="count-down" class="time_subject time_clock" data-date="2016-8-30 14:0:0"></div>
		</div>

		<div class="col-md-5 animate_left">
			<p class="p_subject">Giới thiệu</p>
			<div class="detail_subject">
				<img src="<?php echo url."/img/infomation.png" ?>" alt="Giới thiệu">
				<p><a href="<?php the_permalink();?>" class="link_subject">IB Mathematics</a>  là khóa học dành cho học viên đã có kiến thức Toán học cơ bản, tập trung vào ứng dụng các khái niệm <a href="<?php the_permalink();?>" class="link_subject">Toán học</a> để giải toán, chuẩn bị nền tảng vững chắc cho việc học các môn Hóa học, Kinh tế học, Tâm lý học, Quản trị học… trong tương lai. Khóa học giúp học viên tiếp cận Toán học một cách dễ hiểu và rõ ràng thay vì vật lộn với lý thuyết và công thức khô khan.</p>
			</div>
			<p class="p_subject">Mục tiêu</p>
			<div class="detail_subject">
				<img src="<?php echo url."/img/goal.png" ?>" alt="Mục tiêu"><p>Tạo môi trường học tập khoa học và sáng tạo.</p>
				<img src="<?php echo url."/img/goal.png" ?>" alt="Mục tiêu"><p>Cung cấp kiến thức, phương pháp và kỹ năng học <a href="<?php echo home_url();?> ">Toán bằng tiếng Anh.</a></p>
				<img src="<?php echo url."/img/goal.png" ?>" alt="Mục tiêu"><p>Phát triển khả năng phân tích, đánh giá và tổng hợp thông tin.</p>
				<img src="<?php echo url."/img/goal.png" ?>" alt="Mục tiêu"><p>Rèn luyện tư duy logic và tinh thần phản biện.</p>
				<img src="<?php echo url."/img/goal.png" ?>" alt="Mục tiêu"><p>Hiểu về mối quan hệ giữa các môn học khoa học.</p>
			</div>

			<p class="p_subject">Điểm nổi bật</p>
			<div class="detail_subject">
				<img src="<?php echo url."/img/star.png" ?>" alt="Điểm nổi bật"><p>Học theo nhóm nhỏ (tối đa 8 học viên/lớp).</p>
				<img src="<?php echo url."/img/star.png" ?>" alt="Điểm nổi bật"><p>Giảng viên chuyên môn và kinh nghiệm.</p>
				<img src="<?php echo url."/img/star.png" ?>" alt="Điểm nổi bật"><p>Bám sát chương trình IB.</p>
				<img src="<?php echo url."/img/star.png" ?>" alt="Điểm nổi bật"><p>Phát triển kỹ năng giải quyết vấn đề.</p>
				<img src="<?php echo url."/img/star.png" ?>" alt="Điểm nổi bật"><p>Cung cấp mẹo và phương pháp thi IB.</p>
			</div>
			<button type="button" class="btn btn-success form-control register_subject" data-toggle="modal" data-target="#register_learn" data-whatever="@mdo"><img src="<?php echo url."/img/signup.png" ?>" alt="Đăng Ký Học">Đăng Ký Khóa Học</button>
					<div class="modal fade" id="register_learn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 class="modal-title title_register text-center text-info" id="exampleModalLabel">ĐĂNG KÝ</h4>
					      </div>
					      <?php echo do_shortcode('[contact-form-7 id="183" title="Popup Register Student"]'); ?>
					   </div>
					  </div>
					</div>
		</div>
		<div class="col-md-7 animate_right">
			<p class="p_subject">Thông tin khóa học</p>
			<div class="khoa_hoc">
				<table class="table table-bordered table-hover">
					<tr class="table_khoa_hoc">
						<th>Khóa học</th>
						<th>Học kỳ</th>
						<th>Thời lượng</th>
						<th>Buổi/Tuần</th>
						<th>Học phí</th>
					</tr>
					<tr class="table_khoa_hoc">
						<td rowspan="5" class="ten_khoa_hoc">IB Math Year 1</td>
					</tr>
					<tr class="table_khoa_hoc">
						<td>1</td>
						<td>8 tuần</td>
						<td>2</td>
						<td>7.200.000</td>
					</tr>
					<tr class="table_khoa_hoc">
						<td>2</td>
						<td>8 tuần</td>
						<td>2</td>
						<td>7.200.000</td>
					</tr>
					<tr class="table_khoa_hoc">
						<td>3</td>
						<td>8 tuần</td>
						<td>2</td>
						<td>7.200.000</td>
					</tr>
					<tr class="table_khoa_hoc">
						<td>4</td>
						<td>8 tuần</td>
						<td>2</td>
						<td>7.200.000</td>
					</tr>
					<tr class="table_khoa_hoc">
						<td rowspan="5" class="ten_khoa_hoc">IB Math Year 2</td>
					</tr>
					<tr class="table_khoa_hoc">
						<td>1</td>
						<td>8 tuần</td>
						<td>2</td>
						<td>7.200.000</td>
					</tr>
					<tr class="table_khoa_hoc">
						<td>2</td>
						<td>8 tuần</td>
						<td>2</td>
						<td>7.200.000</td>
					</tr>
					<tr class="table_khoa_hoc">
						<td>3</td>
						<td>8 tuần</td>
						<td>2</td>
						<td>7.200.000</td>
					</tr>
					<tr class="table_khoa_hoc">
						<td>4</td>
						<td>8 tuần</td>
						<td>2</td>
						<td>7.200.000</td>
					</tr>
					<tr class="table_khoa_hoc">
						<td id="ten_khoa_hoc" rowspan="2">IB Math Exam Training</td>
					</tr>
					<tr class="table_khoa_hoc">
						<td>5</td>
						<td>4 tuần</td>
						<td>5</td>
						<td>10.000.000</td>
					</tr>
				</table>
			</div>
			<p class="p_subject">Thông tin khóa học</p>
			<div class="info_khoa_hoc">
				<table class="table table-bordered table-hover">
					<tr class="table_info_khoa_hoc">
						<th></th>
						<th>Ca học</th>
						<th>T2</th>
						<th>T3</th>
						<th>T4</th>
						<th>T5</th>
						<th>T6</th>
						<th>T7</th>
						<th>CN</th>
					</tr>
					<tr>
						<td rowspan="3" class="time_study">Buổi Sáng</td>
					</tr>
					<tr>
						<td class="time_detail_study">08.30 – 10.00</td>
						<td><img src="<?php echo url."/img/switch-off.png"?>" alt="Không Học" title="Không Học"></td>
						<td><img src="<?php echo url."/img/switch-off.png"?>" alt="Không Học" title="Không Học"></td>
						<td><img src="<?php echo url."/img/switch-off.png"?>" alt="Không Học" title="Không Học"></td>
						<td><img src="<?php echo url."/img/switch-off.png"?>" alt="Không Học" title="Không Học"></td>
						<td><img src="<?php echo url."/img/switch-off.png"?>" alt="Không Học" title="Không Học"></td>
						<td><img src="<?php echo url."/img/switch-on.png"?>" alt="Học" title="Có Học"></td>
						<td><img src="<?php echo url."/img/switch-on.png"?>" alt="Học" title="Có Học"></td>
					</tr>
					<tr>
						<td class="time_detail_study">10.15 – 11.45</td>
						<td><img src="<?php echo url."/img/switch-off.png"?>" alt="Không Học" title="Không Học"></td>
						<td><img src="<?php echo url."/img/switch-off.png"?>" alt="Không Học" title="Không Học"></td>
						<td><img src="<?php echo url."/img/switch-off.png"?>" alt="Không Học" title="Không Học"></td>
						<td><img src="<?php echo url."/img/switch-off.png"?>" alt="Không Học" title="Không Học"></td>
						<td><img src="<?php echo url."/img/switch-off.png"?>" alt="Không Học" title="Không Học"></td>
						<td><img src="<?php echo url."/img/switch-on.png"?>" alt="Học" title="Có Học"></td>
						<td><img src="<?php echo url."/img/switch-on.png"?>" alt="Học" title="Có Học"></td>
					</tr>
					</tr>
					<tr>
						<td rowspan="3" class="time_study">Buổi Chiều</td>
					</tr>
					<tr>
						<td class="time_detail_study">13.30 – 15.00</td>
						<td><img src="<?php echo url."/img/switch-off.png"?>" alt="Không Học" title="Không Học"></td>
						<td><img src="<?php echo url."/img/switch-off.png"?>" alt="Không Học" title="Không Học"></td>
						<td><img src="<?php echo url."/img/switch-off.png"?>" alt="Không Học" title="Không Học"></td>
						<td><img src="<?php echo url."/img/switch-off.png"?>" alt="Không Học" title="Không Học"></td>
						<td><img src="<?php echo url."/img/switch-off.png"?>" alt="Không Học" title="Không Học"></td>
						<td><img src="<?php echo url."/img/switch-on.png"?>" alt="Học" title="Có Học"></td>
						<td><img src="<?php echo url."/img/switch-on.png"?>" alt="Học" title="Có Học"></td>
					</tr>
					<tr>
						<td class="time_detail_study">15.30 – 17.00</td>
						<td><img src="<?php echo url."/img/switch-on.png"?>" alt="Học" title="Có Học"></td>
						<td><img src="<?php echo url."/img/switch-on.png"?>" alt="Học" title="Có Học"></td>
						<td><img src="<?php echo url."/img/switch-on.png"?>" alt="Học" title="Có Học"></td>
						<td><img src="<?php echo url."/img/switch-on.png"?>" alt="Học" title="Có Học"></td>
						<td><img src="<?php echo url."/img/switch-on.png"?>" alt="Học" title="Có Học"></td>
						<td><img src="<?php echo url."/img/switch-on.png"?>" alt="Học" title="Có Học"></td>
						<td><img src="<?php echo url."/img/switch-off.png"?>" alt="Không Học" title="Không Học"></td>
					</tr>
					<tr>
						<td rowspan="3" class="time_study">Buổi Tối</td>
					</tr>
					<tr>
						<td class="time_detail_study">17.15 – 18.45</td>
						<td><img src="<?php echo url."/img/switch-on.png"?>" alt="Học" title="Có Học"></td>
						<td><img src="<?php echo url."/img/switch-on.png"?>" alt="Học" title="Có Học"></td>
						<td><img src="<?php echo url."/img/switch-on.png"?>" alt="Học" title="Có Học"></td>
						<td><img src="<?php echo url."/img/switch-on.png"?>" alt="Học" title="Có Học"></td>
						<td><img src="<?php echo url."/img/switch-on.png"?>" alt="Học" title="Có Học"></td>
						<td><img src="<?php echo url."/img/switch-on.png"?>" alt="Học" title="Có Học"></td>
						<td><img src="<?php echo url."/img/switch-off.png"?>" alt="Không Học" title="Không Học"></td>
					</tr>
					<tr>
						<td class="time_detail_study">19.00 – 20.30</td>
						<td><img src="<?php echo url."/img/switch-on.png"?>" alt="Học" title="Có Học"></td>
						<td><img src="<?php echo url."/img/switch-on.png"?>" alt="Học" title="Có Học"></td>
						<td><img src="<?php echo url."/img/switch-on.png"?>" alt="Học" title="Có Học"></td>
						<td><img src="<?php echo url."/img/switch-on.png"?>" alt="Học" title="Có Học"></td>
						<td><img src="<?php echo url."/img/switch-on.png"?>" alt="Học" title="Có Học"></td>
						<td><img src="<?php echo url."/img/switch-on.png"?>" alt="Học" title="Có Học"></td>
						<td><img src="<?php echo url."/img/switch-off.png"?>" alt="Không Học" title="Không Học"></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="col-md-10 col-md-offset-1 animate_bottom">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title title_subject_panel text-center">ĐA DẠNG HÓA CHƯƠNG TRÌNH GIẢNG DẠY</h3>
					<p class="p_subject_panel text-center">Chương trình giảng dạy tại Intertu Education dàn trải nhiều lĩnh vực.</p> 
					<p class="p_subject_panel text-center">Các khóa học được thiết kế riêng tương thích với chương trình đào tạo của các trường quốc tế tại Việt Nam.</p>
				</div>
				<div class="panel-body">
					<div id="own-school">
						<img src="<?php echo url."/img/School/BIS.png" ?>" alt="BIS" class="img-responsive">
						<img src="<?php echo url."/img/School/BCIS.jpg" ?>" alt="BCIS" class="img-responsive">
						<img src="<?php echo url."/img/School/ISHCMC.jpg"?> " alt="ISHCMC" class="img-responsive">
						<img src="<?php echo url."/img/School/RISS.png" ?>" alt="RISS" class="img-responsive">
						<img src="<?php echo url."/img/School/TAS.jpg" ?>" alt="TAS" class="img-responsive">
						<img src="<?php echo url."/img/School/TAIS.png" ?>" alt="TAIS" class="img-responsive">
						<img src="<?php echo url."/img/School/SSIS.png" ?>" alt="SSIS" class="img-responsive">
						<img src="<?php echo url."/img/School/VAIS.jpg" ?>" alt="VAIS" class="img-responsive">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>