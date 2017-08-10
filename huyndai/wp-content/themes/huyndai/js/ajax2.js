jQuery(function($){
   /*$("#ProductId").change(function(){
      var name_product = $("#ProductId").val();
      if(name_product == "Sonata")
      {
        $("#showimage").attr("src","http://developerweb.pro/Car/wp-content/themes/Car/img/car/SONATA_RE.png");
        var result = "";
        $("#dongxe").html(function(){
              result+= "<option value='Sonata1'>" +"Sonata 2.0 A/T"+"</option>";
              return result;
        });
      }
      else if(name_product == "Elantra")
      {
        $("#showimage").attr("src","http://developerweb.pro/Car/wp-content/themes/Car/img/car/ELANTRA_RE.png");
        var result = "";
        $("#dongxe").html(function(){
              result+= "<option value='Elantra1'>" +"Elantra 2014 1.6 M/T"+"</option>";
              result+= "<option value='Elantra2'>" +"Elantra 2016 1.6 A/T"+"</option>";
              result+= "<option value='Elantra3'>" +"Elantra 2014 2.0 A/T"+"</option>";
              return result;
        });
      }
      else if(name_product == "Avante")
      {
        $("#showimage").attr("src","http://developerweb.pro/Car/wp-content/themes/Car/img/car/AVANTE_RE.png"); 
        var result = "";
        $("#dongxe").html(function(){
              result+= "<option value='Avante1'>" +"Avante 1.6 M/T(CKD)"+"</option>";
              result+= "<option value='Avante2'>" +"Avante 1.6 A/T(CKD)"+"</option>";
              return result;
        });
      }
      else if(name_product == "Accent")
      {
        $("#showimage").attr("src","http://developerweb.pro/Car/wp-content/themes/Car/img/car/ACCENT_RE.png");
        var result = "";
        $("#dongxe").html(function(){
              result+= "<option value='Accent1'>" +"Accent 1.4 M/T 2015"+"</option>";
              result+= "<option value='Accent2'>" +"Accent 1.4 A/T 2015"+"</option>";
              return result;
        });
      }
      else if(name_product == "Accent 5 cửa")
      {
        $("#showimage").attr("src","http://developerweb.pro/Car/wp-content/themes/Car/img/car/ACCENT-5-CUA_RE.png");
        var result = "";
        $("#dongxe").html(function(){
              result+= "<option value='Accent5'>" +"Accent 5 cửa 1.4 A/T"+"</option>";
              return result;
        });
      }
      else if(name_product == "i20 Active")
      {
        $("#showimage").attr("src","http://developerweb.pro/Car/wp-content/themes/Car/img/car/I20-ACTIVE_RE.png");
        var result = "";
        $("#dongxe").html(function(){
              result+= "<option value='Active1'>" +"i20 1.4 AT Active "+"</option>";
              return result;
        });
      }
      else if(name_product == "Grand i10")
      {
        $("#showimage").attr("src","http://developerweb.pro/Car/wp-content/themes/Car/img/car/GRAND-I10_RE.png");
        var result = "";
        $("#dongxe").html(function(){
              result+= "<option value='Grand_i1'>" +"Grand i10 Hatchback 1.0 (Base)"+"</option>";
              result+= "<option value='Grand_i2'>" +"Grand i10 Hatchback 1.0 M/T"+"</option>";
              result+= "<option value='Grand_i3'>" +"Grand i10 Hatchback 1.0 A/T"+"</option>";
              result+= "<option value='Grand_i4'>" +"Grand i10 Hatchback 1.2 A/T"+"</option>";
              result+= "<option value='Grand_i5'>" +"Grand i10 Hatchback 1.2 M/T(Base)"+"</option>";
              result+= "<option value='Grand_i6'>" +"Grand i10 Hatchback 1.2 M/T"+"</option>";
              return result;
        });
      }
      else if(name_product == "Grand i10 sedan")
      {
         $("#showimage").attr("src","http://developerweb.pro/Car/wp-content/themes/Car/img/car/GRAND-I10-SEDAN_RE.png");
        var result = "";
        $("#dongxe").html(function(){
              result+= "<option value='Grand1'>" +"Grand i10 Sedan 1.2 MT (Base)"+"</option>";
              result+= "<option value='Grand2'>" +"Grand i10 Sedan 1.2 MT (Gia Đình)"+"</option>";
              result+= "<option value='Grand3'>" +"Grand i10 Sedan 1.2 AT (Gia đình)"+"</option>";
              return result;
        });
      }
      else if(name_product == "SantaFe 2016")
      {
        $("#showimage").attr("src","http://developerweb.pro/Car/wp-content/themes/Car/img/car/SantaFe.png"); 
        var result = "";
        $("#dongxe").html(function(){
              result+= "<option value='SantaFe1'>" +"Santa Fe CKD 2.2 A/T 2WD (Máy dầu tiêu chuẩn)"+"</option>";
              result+= "<option value='SantaFe2'>" +"Santa Fe CKD 2.4 A/T 2WD (Máy xăng tiêu chuẩn)"+"</option>";
              result+= "<option value='SantaFe3'>" +"Santa Fe CKD 2.4 A/T 4WD (Máy xăng đặc biệt)"+"</option>";
              result+= "<option value='SantaFe4'>" +"Santa Fe CKD 2.2 A/T 4WD (Máy dầu đặc biệt)"+"</option>";
              result+= "<option value='SantaFe5'>" +"Santa Fe 5 chỗ (CKD) 2.2 A/T 2WD (Máy dầu)"+"</option>";
              result+= "<option value='SantaFe6'>" +"Santa Fe 5 chỗ (CKD) 2.4 A/T 2WD (Máy xăng)"+"</option>";
              return result;
        });
      }
      else if(name_product == "Tucson")
      {
        $("#showimage").attr("src","http://developerweb.pro/Car/wp-content/themes/Car/img/car/TUCSON_RE.png"); 
        var result = "";
        $("#dongxe").html(function(){
              result+= "<option value='Tucson1'>" +"Tucson 2016 2.0 A/T 2WD (Bản đặc biệt)"+"</option>";
              result+= "<option value='Tucson2'>" +"Tucson 2016 2.0 A/T 2WD (Bản thường)"+"</option>";
              return result;
        });
      }
      else if(name_product == "Creta")
      {
        $("#showimage").attr("src","http://developerweb.pro/Car/wp-content/themes/Car/img/car/CRETA_RE.png");  
        var result = "";
        $("#dongxe").html(function(){
              result+= "<option value='Creta1'>" +"Creta máy xăng 1.6L"+"</option>";
              result+= "<option value='Creta2'>" +"Creta máy dầu 1.6L"+"</option>";
              return result;
        });
      }
      else if(name_product == "Starex (H1)")
      {
        $("#showimage").attr("src","http://developerweb.pro/Car/wp-content/themes/Car/img/car/STAREX-H1_RE.png"); 
        var result = "";
        $("#dongxe").html(function(){
              result+= "<option value='Starex1_H'>" +"Starex  2.4 M/T 6 chỗ (máy xăng)"+"</option>";
              result+= "<option value='Starex2_H'>" +"Starex  2.5 M/T 6 chỗ (máy dầu)"+"</option>";
              result+= "<option value='Starex3_H'>" +"Starex 2.5 M/T 3 chỗ (máy dầu)"+"</option>";
              return result;
        });
      }
      else if(name_product == "Santa Fe chở tiền")
      {
        $("#showimage").attr("src","http://developerweb.pro/Car/wp-content/themes/Car/img/car/SANTA-FE-CHO-TIEN_RE.png"); 
        var result = "";
        $("#dongxe").html(function(){
              result+= "<option value='Santa1'>" +"Santa fe chở tiền"+"</option>";
              return result;
        });
      }
      else if(name_product == "Starex chở tiền")
      {
        $("#showimage").attr("src","http://developerweb.pro/Car/wp-content/themes/Car/img/car/STAREX-CHO-TIEN_RE.png"); 
        var result = "";
        $("#dongxe").html(function(){
              result+= "<option value='Starex1'>" +"Starex 2.4 M/T 9 chỗ (máy xăng)"+"</option>";
              result+= "<option value='Starex2'>" +"Starex 2.5 M/T 9 chỗ (máy dầu)"+"</option>";
              result+= "<option value='Starex3'>" +"Starex 2.4 A/T 9 chỗ (máy xăng)"+"</option>";
              result+= "<option value='Starex4'>" +"Starex 2.4 A/T 9 chỗ (máy xăng) limousine"+"</option>";
              return result;
        });
      }
      else if(name_product == "Starex cứu thương")
      {
        $("#showimage").attr("src","http://developerweb.pro/Car/wp-content/themes/Car/img/car/STAREX-CUU-THUONG_RE.png");
        var result = "";
        $("#dongxe").html(function(){
              result+= "<option value='Starex5'>" +"TQ-Starex Cứu thương 2.4 M/T (máy xăng)"+"</option>";
              result+= "<option value='Starex6'>" +"TQ-Starex Cứu thương 2.5 M/T (máy dầu)"+"</option>";
              return result;
        });
      }
      else if(name_product == "H-100")
      {
        $("#showimage").attr("src","http://developerweb.pro/Car/wp-content/themes/Car/img/car/H-100.png'?>"); 
        var result = "";
        $("#dongxe").html(function(){
              result+= "<option value='H1'>" +"Cabin Chassis  H-100 CKD máy dầu 2.6 T2-D"+"</option>";
              result+= "<option value='H2'>" +"Cabin Chassis  H-100 CKD máy dầu 2.6 T2-G"+"</option>";
              result+= "<option value='H3'>" +"Cabin Chassis  H-100 CKD máy dầu 2.5 A2"+"</option>";
              return result;
        });
      }

      var price = $("#dongxe").val();
      if( price == "Sonata1")
        {
          $("#price_product").html("Giá : 1.060.000.000 VNĐ");
        }
      else if(price == "Elantra1")
        {
          $("#price_product").html("Giá : 615.000.000 VNĐ");
        }
      else if( price == "Avante1")
        {
          $("#price_product").html("Giá : 532.200.000 VNĐ");
        }
      else if( price == "Accent1")
        {
          $("#price_product").html("Giá : 574.000.000 VNĐ");
        }
      else if( price == "Accent5")
        {
          $("#price_product").html("Giá : 592.000.000 VNĐ");
        }
      else if( price == "Active1")
        {
          $("#price_product").html("Giá : 641.000.000 VNĐ");
        }
      else if( price == "Grand_i1")
        {
          $("#price_product").html("Giá : 368.000.000 VNĐ");
        }
      else if( price == "Grand1")
        {
          $("#price_product").html("Giá : 409.000.000 VNĐ");
        }
      else if( price == "SantaFe1")
        {
          $("#price_product").html("Giá : 1.150.000.000 VNĐ");
        }
      else if( price == "Tucson1")
        {
          $("#price_product").html("Giá : 1.035.000.000 VNĐ");
        }
      else if( price == "Creta1")
        {
          $("#price_product").html("Giá : 822.000.000 VNĐ");
        }
      else if( price == "Starex1_H")
        {
          $("#price_product").html("Giá : 801.000.000 VNĐ");
        }
      else if( price == "Santa1")
        {
          $("#price_product").html("Giá : 1.000.000.000 VNĐ");
        }
      else if( price == "Starex1")
        {
          $("#price_product").html("Giá : 914.000.000 VNĐ");
        }
      else if( price == "Starex5")
        {
          $("#price_product").html("Giá : 680.000.000 VNĐ");
        }
      else if( price == "H1")
        {
          $("#price_product").html("Giá : 325.000.000 VNĐ");
        }
      $("#dongxe").change(function(){
        var price = $("#dongxe").val();
        if(price == "Elantra2")
          {
            $("#price_product").html("Giá : 689.000.000 VNĐ");
          }
        else if(price == "Elantra3")
          {
            $("#price_product").html("Giá : 739.000.000 VNĐ");
          }
        else if(price == "Avante2")
          {
            $("#price_product").html("Giá : 575.000.000 VNĐ");
          }
        else if(price == "Accent2")
          {
            $("#price_product").html("Giá : 624.000.000 VNĐ");
          }
        else if(price == "Grand_i2")
          {
            $("#price_product").html("Giá : 411.100.000 VNĐ");
          }
        else if(price == "Grand_i3")
          {
            $("#price_product").html("Giá : 442.100.000 VNĐ");
          }
        else if(price == "Grand_i4")
          {
            $("#price_product").html("Giá : 473.200.000 VNĐ");
          }
        else if(price == "Grand_i5")
          {
            $("#price_product").html("Giá : 397.200.000 VNĐ");
          }
        else if(price == "Grand_i6")
          {
            $("#price_product").html("Giá : 444.500.000 VNĐ");
          }
        else if(price == "Grand2")
          {
            $("#price_product").html("Giá : 454.700.000 VNĐ");
          }
        else if(price == "Grand3")
          {
            $("#price_product").html("Giá : 495.900.000 VNĐ");
          }
        else if(price == "SantaFe2")
          {
            $("#price_product").html("Giá : 1.100.000.000 VNĐ");
          }
        else if(price == "SantaFe3")
          {
            $("#price_product").html("Giá : 1.250.000.000 VNĐ");
          }
        else if(price == "SantaFe4")
          {
            $("#price_product").html("Giá : 1.300.000.000 VNĐ");
          }
        else if(price == "SantaFe5")
          {
            $("#price_product").html("Giá : 1.050.000.000 VNĐ");
          }
        else if(price == "SantaFe6")
          {
            $("#price_product").html("Giá : 999.000.000 VNĐ");
          }
        else if(price == "Tucson2")
          {
            $("#price_product").html("Giá : 962.000.000 VNĐ");
          }
        else if(price == "Creta2")
          {
            $("#price_product").html("Giá : 864.000.000 VNĐ");
          }
        else if(price == "Starex2_H")
          {
            $("#price_product").html("Giá : 832.000.000 VNĐ");
          }
        else if(price == "Starex3_H")
          {
            $("#price_product").html("Giá : 811.000.000 VNĐ");
          }
        else if(price == "Starex2")
          {
            $("#price_product").html("Giá : 962.000.000 VNĐ");
          }
        else if(price == "Starex3")
          {
            $("#price_product").html("Giá : 989.000.000 VNĐ");
          }
        else if(price == "Starex4")
          {
            $("#price_product").html("Giá : 1.508.000.000 VNĐ");
          }
        else if(price == "Starex6")
          {
            $("#price_product").html("Giá : 710.000.000 VNĐ");
          }
        else if(price == "H2")
          {
            $("#price_product").html("Giá : 345.000.000 VNĐ");
          }
        else if(price == "H3")
          {
            $("#price_product").html("Giá : 399.000.000 VNĐ");
          }
        else if( price == "Sonata1")
          {
            $("#price_product").html("Giá : 1.060.000.000 VNĐ");
          }
        else if(price == "Elantra1")
          {
            $("#price_product").html("Giá : 615.000.000 VNĐ");
          }
        else if( price == "Avante1")
          {
            $("#price_product").html("Giá : 532.200.000 VNĐ");
          }
        else if( price == "Accent1")
          {
            $("#price_product").html("Giá : 574.000.000 VNĐ");
          }
        else if( price == "Accent5")
          {
            $("#price_product").html("Giá : 592.000.000 VNĐ");
          }
        else if( price == "Active1")
          {
            $("#price_product").html("Giá : 641.000.000 VNĐ");
          }
        else if( price == "Grand_i1")
          {
            $("#price_product").html("Giá : 368.000.000 VNĐ");
          }
        else if( price == "Grand1")
          {
            $("#price_product").html("Giá : 409.000.000 VNĐ");
          }
        else if( price == "SantaFe1")
          {
            $("#price_product").html("Giá : 1.150.000.000 VNĐ");
          }
        else if( price == "Tucson1")
          {
            $("#price_product").html("Giá : 1.035.000.000 VNĐ");
          }
        else if( price == "Creta1")
          {
            $("#price_product").html("Giá : 822.000.000 VNĐ");
          }
        else if( price == "Starex1_H")
          {
            $("#price_product").html("Giá : 801.000.000 VNĐ");
          }
        else if( price == "Santa1")
          {
            $("#price_product").html("Giá : 1.000.000.000 VNĐ");
          }
        else if( price == "Starex1")
          {
            $("#price_product").html("Giá : 914.000.000 VNĐ");
          }
        else if( price == "Starex5")
          {
            $("#price_product").html("Giá : 680.000.000 VNĐ");
          }
        else if( price == "H1")
          {
            $("#price_product").html("Giá : 325.000.000 VNĐ");
          }
      });
   });*/
  var ajax_send = false;
  $('#tratruoc_1').autoNumeric({aSep: ',', aPad: false, vMax: '999999999999', vMin: '0'});
  $("#btn_tinh").click(function(){
      var re = /,/gi;
      var tra_truoc1 = $("#tratruoc_1").val().replace(re,"");
      var tra_truoc2 = $("#tratruoc_2").val();
      var laixuat = $("#nganhang").val();
      var thoihan = $("#thoihan").val();
      var dongxe = $("#dongxe").val();
      if(laixuat == "")
      {
        $("#nganhang").focus();
        alert("Bạn vui lòng chọn lãi xuất ngân hàng !")
      }
      else if(thoihan == "")
      {
        $("#thoihan").focus();
        alert("Bạn vui lòng chọn thời hạn vay !")
      }
      else if(dongxe == "")
      {
        $("#ProductId").focus();
        alert("Bạn vui lòng chọn sản phẩm !")
      }
      else if(tra_truoc2 == "" && tra_truoc1 == "")
      {
        $("#tratruoc_2").focus();
        alert("Bạn vui lòng chọn số tiền trả trước !")
      }
      else
      {
        $("#result_calculator").html('');
        if(ajax_send == true)
        {
          alert("Đang thực hiện tính toán !")
          return false;
        }
        ajax_send = true;
        $("#loadding").fadeIn();
        var data_object = {
          action : "load_calculation",
          tra_truoc1 : tra_truoc1,
          tra_truoc2 : tra_truoc2,
          thoihan : thoihan,
          dongxe : dongxe,
          laixuat : laixuat
        };
        $.ajax(ajax_object.ajax_url, {
          cache: false, 
          data: data_object,
          type: "POST",
          beforeSend: function() {
          },
          error: function() {
          },
          success: function(result) {
              if(result=="")
              {
                  alert("Xảy ra lỗi vui lòng thử lại !");
              }
              else
              {
                  $("#result_calculator").html(result);
              }
          },
          complete: function(){
          }
        }).always(function(){
          ajax_send = false;
          $("#loadding").hide();
        })
      }
  });
});
function Change_Disable($i) {
    jQuery('#tratruoc_1').attr("disabled", true);
    jQuery('#tratruoc_2').attr("disabled", false);
    var e = document.getElementById("tratruoc_2");
    var a = e.options[e.selectedIndex].value;
    if (a == "") 
    {
        jQuery('#tratruoc_1').attr("disabled", false);
        jQuery('#tratruoc_2').attr("disabled", true);
    }
}