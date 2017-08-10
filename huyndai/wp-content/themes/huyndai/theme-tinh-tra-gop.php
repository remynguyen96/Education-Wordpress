<?php  
/*
    Template Name: Hỗ trợ trả góp
*/
get_header();
?>
<div class="container tra-gop-page">
  <div class="row">
      <h2>Hỗ trợ tính toán khi mua xe trả góp</h2>


  <div class="select1 col-lg-12 col-md-12 col-sm-12">
      <div class="col-lg-4 col-md-4 col-sm-8">
        <div class="col-lg-3 col-md-3 col-sm-8">
          <label for="ProductId">Mẫu Xe</label>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12">
        	
				
			
        
          <select name="car-cat-list" class="input-md car-cat-list">
          		<option>Vui lòng chọn loại xe</option>
            <?php 
                $product_cats = get_terms('loai-xe',array(
                    'hide_empty'=>false
                ));
                foreach($product_cats as $cat):
            ?>
                <option value="<?php echo $cat->term_id;?>"><?php echo $cat->name;?></option>		
            <?php endforeach; ?>
          </select>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-8">
        <div class="col-lg-3 col-md-3 col-sm-8">
          <label for="dongxe">Dòng xe</label>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12">
          <select class="input-md" id="dongxe" name="dongxe">
            <option value="">-- Vui lòng chọn xe --</option>
          </select>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-8 tmb-area">
        <div class="col-lg-12 col-md-12 col-sm-12 tmb">
          <img src="<?php echo url."/images/blank_car.png" ?>" class="img-responsive" id="showimage">
        </div>
        <div class="price"></div>
      </div>
  </div>


  <div class="select1 col-lg-12 col-md-12 col-sm-12">
      <div class="col-lg-4 col-md-4 col-sm-8">
        <div class="col-lg-3 col-md-3 col-sm-8">
          <label for="tratruoc_1">Trả trước</label>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12">
          <input type="text" class="input-md" id="tratruoc_1" name="tratruoc_1">
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-8">
        <div class="col-lg-3 col-md-3 col-sm-8">
          <label for="nganhang">Ngân hàng</label>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12">
          <select class="input-md" id="nganhang" name="nganhang">
            <option value="">-- Tất cả --</option>
            <option value="0,67">Ngân hàng VPBank: 8%</option>
            <option value="0,58">Ngân hàng Techcombank 6.99%</option>
            <option value="0,63">Ngân hàng Seabank: 7.5%</option>
            <option value="0,75">Ngân hàng Vietbank: 9%</option>
          </select>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-4 col-sm-8">
        <div class="col-lg-3 col-md-3 col-sm-8">
          <label for="thoihan">Thời hạn</label>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12">
          <select class="input-md" id="thoihan" name="thoihan">
            <option value="">Thời hạn vay</option>
            <option value="6">6 tháng</option>
            <option value="12">12 tháng</option>
            <option value="18">18 tháng</option>
            <option value="24">24 tháng</option>
            <option value="30">30 tháng</option>
            <option value="36">36 tháng</option>
            <option value="42">42 tháng</option>
            <option value="48">48 tháng</option>
            <option value="54">54 tháng</option>
            <option value="60">60 tháng</option>
          </select>
        </div>
      </div>
  </div>

  <div class="select1 col-lg-12 col-md-12 col-sm-12">
      <div class="col-lg-4 col-md-4 col-sm-8">
        <div class="col-lg-3 col-md-3 col-sm-8">
          <label for="tratruoc_2">Trả trước (%)</label>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12">
          <select class="input-md" id="tratruoc_2" name="tratruoc_2">
            <option value="" >Số tiền trả trước</option>
            <option value="10">10 %</option>
            <option value="20">20 %</option>
            <option value="30">30 %</option>
            <option value="40">40 %</option>
            <option value="50">50 %</option>
            <option value="60">60 %</option>
            <option value="70">70 %</option>
            <option value="80">80 %</option>
          </select>
        </div>
      </div>

      <div class="col-lg-6 col-lg-offset-2 col-md-6 col-md-offset-2 col-sm-8">
          <input type="button" id="btn_tinh" class="btn btn-support-buycar" value="Tính toán">
      </div>
  </div>
  <div id="result_calculator"></div>

  </div>
</div>
<script>
    jQuery(function($){
          
        });
</script>
<?php get_footer(); ?>

