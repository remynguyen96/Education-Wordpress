<div class="container">
	<div class="row">
		<!-- introduce -->
		<ul class="introduce">
			<li class="col-md-3 introduce_home animate_left" id="introduce1">
				<a href="javascript:void(0)">
					<h2>1. Dạy theo yêu cầu</h2>
					<img src="<?php echo url."/img/educator.png" ?>" alt="Dạy theo yêu cầu">
					<p>Bất cứ nhu cầu học nào, học
						sinh đều có thể đăng ký và được
						cấp gia sư giảng dạy phù hợp.
					</p>
					<div class="info_introduce">
						<span class="col-md-6">
							<button class="btn btn-success form-control" type="button" data-toggle="modal" data-target="#register_learn">Đăng Ký</button>
						</span>
						<span class="col-md-6">
							<button class="btn btn-success form-control url_detail" type="button">Xem Thêm</button>
						</span>
					</div>
				</a>
			</li>
			<li class="col-md-3 introduce_home animate_top" id="introduce2">
				<a href="javascript:void(0)">
					<h2>2. Nhật ký giảng dạy</h2>
					<img src="<?php echo url."/img/books.png" ?>" alt="Nhật ký giảng dạy">
					<p>Phụ huynh quản lý tiến độ
						học tập của học sinh trực tuyến
						thông qua ID được cung cấp.
					</p>
					<div class="info_introduce">
						<span class="col-md-6">
							<button class="btn btn-warning form-control register_learn_home" type="button" data-toggle="modal" data-target="#register_learn">Đăng Ký</button>
						</span>
						<span class="col-md-6">
							<button class="btn btn-warning form-control url_detail" type="button">Xem Thêm</button>
						</span>
					</div>
				</a>
			</li>
			<li class="col-md-3 introduce_home animate_bottom" id="introduce3">
				<a href="javascript:void(0)">
					<h2>3. Thay đổi gia sư</h2>
					<img src="<?php echo url."/img/shift-change.png" ?>" alt="Thay đổi gia sư">
					<p>Học sinh có quyền thay đổi gia sư
						bất cứ lúc nào khi không hài lòng
						về chất lượng giảng dạy.
					</p>
					<div class="info_introduce">
						<span class="col-md-6">
							<button class="btn btn-green form-control register_learn_home" type="button" data-toggle="modal" data-target="#register_learn">Đăng Ký</button>
						</span>
						<span class="col-md-6">
							<button class="btn btn-green form-control url_detail" type="button">Xem Thêm</button>
						</span>
					</div>
				</a>
			</li>
			<li class="col-md-3 introduce_home animate_right" id="introduce4">
				<a href="javascript:void(0)"><h2>4. Hoàn trả học phí</h2>
					<img src="<?php echo url."/img/refund.png" ?>" alt="Hoàn trả học phí">
					<p>Chúng tôi sẽ hoàn trả học phí sau
						buổi dạy đầu tiên nếu phụ
						huynh cảm thấy không hiệu quả
					</p>
					<div class="info_introduce">
						<span class="col-md-6">
							<button class="btn btn-blue form-control register_learn_home" type="button" data-toggle="modal" data-target="#register_learn">Đăng Ký</button>
						</span>
						<span class="col-md-6">
							<button class="btn btn-blue form-control url_detail" type="button">Xem Thêm</button>
						</span>
					</div>
				</a>
			</li>
		</ul>
		<!-- table_class -->
		<div class="col-md-12 table_class">
			<h3 class="text-center">CÁC LỚP HIỆN CÓ</h3>
			<table class="table table-responsive table-hover">
				<thead>
					<tr class="animate_top">
						<th class="text-center" width="80px">Mã lớp</th>
						<th class="text-center">Tên lớp</th>
						<th class="text-center">Môn</th>
						<th class="text-center">Địa điểm</th>
						<th class="text-center">Số buổi / tuần</th>
						<th class="text-center" width="110px">Học phí</th>
						<th class="text-center">Giáo viên đã nhận lớp</th>
						<th class="text-center" width="90px">Đăng ký Học</th>
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
						<td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#register_learn">Đăng Ký</button></td>
					</tr>
					<tr>
						<td class="text-center">C_02</td>
						<td>Lớp IB (Lớp 3)</td>
						<td>Khoa học bằng tiếng Anh</td>
						<td>Võ Thị Sáu, Q.3, TP. Hồ Chí Minh</td>
						<td>3 (T6-T7-CN 15:00 - 16:30)</td>
						<td>1.800.000 đ</td>
						<td><img src="<?php echo url."/img/checkbox-mark.png"?>" alt="Giáo viên đã nhận lớp"></td>
						<td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#register_learn">Đăng Ký</button></td>
					</tr>
					<tr>
						<td class="text-center">C_03</td>
						<td>Lớp Ngoại ngữ (Người lớn)</td>
						<td>Tiếng Việt bằng tiếng Anh cho người Hàn</td>
						<td>Tôn Đản, Q.4, TP. Hồ Chí Minh</td>
						<td>5 (T2-T3-T5-T6-CN 19:30 - 21:00)</td>
						<td>4.500.000 đ</td>
						<td></td>
						<td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#register_learn">Đăng Ký</button></td>
					</tr>
					<tr>
						<td class="text-center">C_04</td>
						<td>Lớp AP (Lớp 6)</td>
						<td>Toán bằng tiếng Anh</td>
						<td>Nguyễn Quý Cảnh, Q.2, TP. Hồ Chí Minh</td>
						<td>3 (T2-T4-T6 sau 19 giờ)</td>
						<td>2.400.000 đ</td>
						<td><img src="<?php echo url."/img/checkbox-mark.png"?>" alt="Giáo viên đã nhận lớp" class="img-responsive"></td>
						<td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#register_learn">Đăng Ký</button></td>
					</tr>
					<tr>
						<td class="text-center">C_05</td>
						<td>Lớp IB (Lớp 10)</td>
						<td>Hóa bằng tiếng Anh</td>
						<td>Lý Thái Tổ, Q.10, TP. Hồ Chí Minh</td>
						<td>Hồ Chí Minh	3 (T3-T5-T7 sau 16 giờ)</td>
						<td>3.000.000 đ</td>
						<td></td>
						<td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#register_learn">Đăng Ký</button></td>
					</tr>
			</table>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-7">
			<div class="infomation_home animate_left">
				<div class="col-md-4">
					<h4 class="text-center">Học Nhóm</h4>
					<a href=""><img src="<?php echo url."/img/learn-group.jpg"?> " alt="Học Nhóm" class="img-responsive"></a>
					<p class="text-center">Sỉ số tối đa 8 học viên, nâng cao tương tác, bổ sung kỹ năng làm việc nhóm…</p>
				</div>
				<div class="col-md-4">
					<h4 class="text-center">1 Kèm 1</h4>
					<a href=""><img src="<?php echo url."/img/one-to-one.jpg"?> " alt="1 Kèm 1" class="img-responsive"></a>
					<p class="text-center">Học tập trong không gian đối thoại và luyện thi hiệu quả</p>
				</div>
				<div class="col-md-4">
					<h4 class="text-center">Gia Sư Tại Nhà</h4>
					<a href=""><img src="<?php echo url."/img/home-tutorial.jpg"?> " alt="Gia Sư Tại Nhà" class="img-responsive"></a>
					<p class="text-center">Chủ động về thời gian và địa điểm học tập, nâng cao hiệu quả học tập.</p>
				</div>
			</div>
			<div class="fb-comments" data-href="https://www.facebook.com/giasuquocte.edu.vn/?fref=ts" data-numposts="10" data-width="400"></div>
		</div>
		<?php get_sidebar();?>	
	</div>
</div>



