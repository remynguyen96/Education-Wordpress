<?php 
/*
    Template Name: Chăm Sóc Khách Hàng
*/
get_header();
?>
<script type='text/javascript' src='//dsms0mj1bbhn4.cloudfront.net/assets/pub/shareaholic.js' data-shr-siteid='23578c66430953d1b9d900b1d18e28a5' data-cfasync='false' async='async'></script>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 col-md-12 banner1">
      <img src="<?php echo url."/images/forma-house.png" ?>" alt="forma-house"> 
      <img src="<?php echo url."/images/forma-7.png" ?> " alt="forma-7">
      <a class="title_img" href="<?php the_permalink();?>"><?php the_title();?></a> 
    </div>
    <div class="col-lg-12 col-md-12 banner2 no-margin">
        <div class="container">
          <div class="row">
            <a class="col-lg-3 col-md-3 col-xs-6" href="<?php echo home_url("chinh-sach-bao-mat-thong-tin");?>">
                <div class="col-lg-2 col-md-2 no-padding">
                    <img src="<?php echo url."/images/support4.png" ?>" alt="support4">
                </div>
                <div class="col-lg-10 col-md-10 ">
                    <p>Chính sách bảo mật thông tin</p>
                </div>
            </a>
            <a class="col-lg-3 col-md-3 col-xs-6" href="<?php echo home_url("chinh-sach-van-chuyen-va-giao-nhan");?>">
                <div class="col-lg-2 col-md-2 no-padding">
                    <img src="<?php echo url."/images/support3.png" ?>" alt="support3">
                </div>
                <div class="col-lg-10 col-md-10">
                    <p>Chính sách vận chuyển và giao nhận</p>
                </div>
            </a>
            <a class="col-lg-3 col-md-3 col-xs-6" href="<?php echo home_url("chinh-sach-bao-hanh-xe");?>">
                <div class="col-md-2 no-padding">
                    <img src="<?php echo url."/images/support1.png" ?>" alt="support1">
                </div>
                <div class="col-lg-10 col-md-10">
                    <p>Chính sách bảo hành xe</p>
                </div>
            </a>
            <a class="col-lg-3 col-md-3 col-xs-6" href="<?php echo home_url("quy-dinh-va-hinh-thuc-thanh-toan");?>">
                <div class="col-lg-2 col-md-2 col-xs-12 no-padding">
                    <img src="<?php echo url."/images/support2.png"?>" alt="support2">
                </div>
                <div class="col-lg-10 col-md-10 col-xs-12">
                    <p>Quy định và Hình thức thanh toán</p>
                </div>
            </a>
          </div>
        </div>
    </div>
  </div>
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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php the_content();?>



    <div class="row register">
        <div class="body-register">
            <div class="col-lg-12 col-md-12 col-sm-12 form-horizontal no-padding">
               <div class="no-padding border_top">
                 <p>Các trường chứa dấu (*) là bắt buộc</p>
                <div class="col-lg-6 col-md-6 col-sm-12">    
                    <div class="form-group no-padding">
                      <label for="Name" class="col-lg-3 col-md-3 col-sm-12 control-label">Họ Tên (*)</label>
                      <div class="col-lg-6 col-md-6 col-sm-12 no-padding">
                          <input type="text" class="form-control no-padding" id="Name" name="Name">
                      </div>
                    </div>

                      <div class="form-group">
                          <label for="Address" class="col-lg-3 col-md-3 col-sm-12 control-label">Địa chỉ (*)</label>
                          <div class="col-lg-6 col-md-6 col-sm-12 no-padding">
                              <input type="text" class="form-control" id="Address" name="Address">
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="Phone" class="col-lg-3 col-md-3 col-sm-12 control-label">Số điện thoại (*)</label>
                          <div class="col-lg-6 col-md-6 col-sm-12 no-padding">
                              <input type="tel" class="form-control" name="Phone" id="Phone">
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="Email" class="col-lg-3 col-md-3 col-sm-12 control-label" style="">Email (*)</label>
                          <div class="col-lg-6 col-md-6 col-sm-12 no-padding">
                              <input type="email" class="form-control" name="Email" id="Email">
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="age" class="col-lg-3 col-md-3 col-sm-12 control-label" style="">Độ tuổi</label>
                          <div class="col-lg-6 col-md-6 col-sm-12 no-padding">
                              <input type="number" class="form-control" name="age" id="age">
                          </div>
                      </div>

                       <div class="form-group">
                              <label for="Email" class="col-lg-3 col-md-3 col-sm-12 control-label">Giới tính (*)</label>
                              <div class="col-lg-6 col-md-6 col-sm-12 no-padding">
                                      <select id="check">
                                        <option value="Nam">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                        <option value="Khác">Khác</option>
                                      </select>
                              </div>
                            <input type="submit" class="btn bnt-contact btn-news-register" value="Gửi">
                      </div>
                 </div>

             <div class="col-lg-4 col-md-4 col-sm-12 form-group">
                <label for="ProductId" class="control-label">Sản phẩm quan tâm  (*)</label>
                  <select class="form-control-select" id="ProductId" name="ProductId">
                      <option value="">Chọn loại xe</option>
                      <option value="Sonata">Sonata</option>
                      <option value="Elantra">Elantra</option>
                      <option value="Avante">Avante</option>
                      <option value="Accent">Accent</option>
                      <option value="Accent 5 cửa">Accent 5 cửa</option>
                      <option value="i20 Active">i20 Active</option>
                      <option value="Grand i10">Grand i10</option>
                      <option value="Grand i10 sedan">Grand i10 sedan</option>
                      <option value="SantaFe 2016">SantaFe 2016</option>
                      <option value="Tucson">Tucson</option>
                      <option value="Creta">Creta</option>
                      <option value="Starex (H1)">Starex (H1)</option>
                      <option value="Santa Fe chở tiền">Santa Fe chở tiền</option>
                      <option value="Starex chở tiền">Starex chở tiền</option>
                      <option value="Starex cứu thương">Starex cứu thương</option>
                      <option value="H-100">H-100</option>
                  </select>
                    <img src="<?php echo url."/images/car/blank_car.png" ?>" class="img-responsive" id="showimage">
              </div>

              <div class="col-lg-2 col-md-2 col-sm-12 form-group anpham">
                    <p>Nhận ấn phẩm qua</p>

                    <div class="col-lg-2 col-md-2 col-sm-12">
                        <input type="checkbox">
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <label for="Email_1">Email</label>
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-12">
                        <input type="checkbox">
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <label for="Email_1">Ấn bản tại địa chỉ đăng ký</label>
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-12">
                        <input type="checkbox">
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <label for="Email_1">Liên hệ trực tiếp với tôi</label>
                    </div>
              </div>

              </div>
        </div>
    </div>
            </div>
        </div>
    </div>
<?php
    }
  }
?>
<script>
    jQuery(function($){
          $("#ProductId").change(function(){
              var car = $("#ProductId").val();
                if(car =="Sonata")
                {
                   $("#showimage").attr("src","<?php echo url."/images/car/SONATA_RE.png"?>");   
                }
                else if(car =="Elantra")
                {
                   $("#showimage").attr("src","<?php echo url."/images/car/ELANTRA_RE.png"?>");  
                }
                else if(car =="Avante")
                {
                   $("#showimage").attr("src","<?php echo url."/images/car/AVANTE_RE.png"?>");    
                }
                else if(car =="Accent")
                {
                   $("#showimage").attr("src","<?php echo url."/images/car/ACCENT_RE.png"?>");   
                }
                else if(car =="Accent 5 cửa")
                {
                   $("#showimage").attr("src","<?php echo url."/images/car/ACCENT-5-CUA_RE.png"?>");   
                }
                else if(car =="i20 Active")
                {
                   $("#showimage").attr("src","<?php echo url."/img/car/I20-ACTIVE_RE.png"?>");   
                }
                else if(car =="Grand i10")
                {
                   $("#showimage").attr("src","<?php echo url."/img/car/GRAND-I10_RE.png"?>");   
                }
                else if(car =="Grand i10 sedan")
                {
                   $("#showimage").attr("src","<?php echo url."/img/car/GRAND-I10-SEDAN_RE.png"?>");   
                }
                else if(car =="SantaFe 2016")
                {
                   $("#showimage").attr("src","<?php echo url."/img/car/SantaFe.png"?>");   
                }
                else if(car =="Tucson")
                {
                   $("#showimage").attr("src","<?php echo url."/img/car/TUCSON_RE.png"?>");   
                }
                else if(car =="Creta")
                {
                   $("#showimage").attr("src","<?php echo url."/img/car/CRETA_RE.png"?>");   
                }
                else if(car =="Starex (H1)")
                {
                   $("#p-id").html("Đối tác kinh doanh đáng tin cậy");   
                }
                else if(car =="Santa Fe chở tiền")
                {
                   $("#showimage").attr("src","<?php echo url."/img/car/SANTA-FE-CHO-TIEN_RE.png"?>");   
                }
                else if(car =="Starex chở tiền")
                {
                   $("#showimage").attr("src","<?php echo url."/img/car/STAREX-CHO-TIEN_RE.png"?>");   
                }
                else if(car =="Starex cứu thương")
                {
                   $("#showimage").attr("src","<?php echo url."/img/car/STAREX-CUU-THUONG_RE.png"?>");   
                }
                else if(car =="H-100")
                {
                   $("#showimage").attr("src","<?php echo url."/img/car/H-100.png"?>");   
                }
          })
        });
</script>
<?php get_footer(); ?>

