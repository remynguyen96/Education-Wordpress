<?php get_header();?>
<?php get_template_part("template-parts/slider");?>
<div class="shadow_title">
  <h2 class="text-center title_page"><?php the_title(); ?></h2>
</div>
<?php  
if(have_posts())
{
  while(have_posts())
  {
    the_post();
?>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content_page table_result">
        <?php the_content();?>
      </div>
    </div>
  </div>
<?php   
  }
}
?>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 info_page">
      <p><strong>Thông tin liên hệ</strong></h4>
      <p>Ông Nguyễn Thanh Nguyên (0972605959) – Chuyên viên đào tạo</p>
      <p>Công ty TNHH Tư vấn và Đào tạo Môi trường Envi-school</p>
      <p>MST: 0313982964&nbsp;&nbsp;&nbsp;Số TK: 0531002524132 tại VCB Đông Sài Gòn</p>
      <p>Địa chỉ: 628 Xô Viết Nghệ Tĩnh, Phường 25, quận Bình Thạnh, Tp. Hồ Chí Minh</p>
      <p>Điện thoại: <span>08.62589699</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hotline: <span>0913989898</span></p>
      <p>Email: envischool.company@gmail.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Website: envischool.vn</p>
    </div>
  </div>
</div>
<?php get_footer(); ?>