<?php  
/*
    Template Name: Hỗ trợ trả góp
*/
get_header();
?>
<div class="container">
  <div class="row">
      <h2>Hỗ trợ tính toán khi mua xe trả góp</h2>
  <div class="select1 col-lg-12 col-md-12 col-sm-12">
      <div class="col-lg-4 col-md-4 col-sm-8">
        <div class="col-lg-3 col-md-3 col-sm-8">
          <label for="ProductId">Mẫu Xe</label>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12">
          <select class="input-md" id="ProductId" name="ProductId">
            <option value="">-- Tất cả --</option>
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
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-8">
        <div class="col-lg-3 col-md-3 col-sm-8">
          <label for="dongxe">Dòng xe</label>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12">
          <select class="input-md" id="dongxe" name="dongxe">
            <option value="">-- Tất cả --</option>
            <option value="" id="car" class="hide"></option>
          </select>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-4 col-sm-8">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <img src="<?php echo url."/img/car/blank_car.png" ?>" class="img-responsive" id="showimage" alt="Loại Xe">
          <p id="price_product"></p>
        </div>
      </div>
  </div>


  <div class="select1 col-lg-12 col-md-12 col-sm-12">
      <div class="col-lg-4 col-md-4 col-sm-8">
        <div class="col-lg-3 col-md-3 col-sm-8">
          <label for="tratruoc_1">Trả trước</label>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12">
          <input type="text" class="input-md" id="tratruoc_1" name="tratruoc_1" onchange="Change_Disable(value)">
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-8">
        <div class="col-lg-3 col-md-3 col-sm-8">
          <label for="nganhang">Ngân hàng</label>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12">
          <select class="input-md" id="nganhang" name="nganhang">
            <option value="">-- Tất cả --</option>
            <option value="67">Ngân hàng VPBank: 8%</option>
            <option value="58">Ngân hàng Techcombank 6.99%</option>
            <option value="63">Ngân hàng Seabank: 7.5%</option>
            <option value="75">Ngân hàng Vietbank: 9%</option>
          </select>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-4 col-sm-8">
        <div class="col-lg-3 col-md-3 col-sm-8">
          <label for="thoihan">Thời hạn</label>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12">
          <select class="input-md" id="thoihan">
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
          <select class="input-md" id="tratruoc_2" onchange="Change_Disable(value)">
            <option value="">Số tiền trả trước</option>
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
          <button type="button" id="btn_tinh" class="btn btn-support-buycar" >Tính toán</button>
      </div>
  </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div id="loadding" class="text-center">&nbsp;</div>
        <div id="result_calculator"></div>      
    </div>
  </div>
</div>
<?php get_footer(); ?>

