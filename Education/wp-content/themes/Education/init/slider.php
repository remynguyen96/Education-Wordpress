    <script>
        jssor_1_slider_init = function() {
            var jssor_1_SlideoTransitions = [
              [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
              [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
              [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
              [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
              [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}]
            ];
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 750,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1270);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
          /*  $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);*/


            
            //responsive code end
        };
    </script>

    <style>
        
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('<?php echo url."/img/slider/doc.png"?>') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position:-37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position:-97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('<?php echo url."/img/slider/left_right.png"?>') center center no-repeat;
            overflow: hidden;
            margin-left: -19px;
            margin-right: -17px;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
    </style>


    <div id="jssor_1" style="position:relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;z-index:0;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('<?php echo url."/img/slider/loading.gif"?>') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="<?php echo url."/img/slider/red.jpg"?>" />
                <div style="position: absolute; top: 285px; left: 60px; width: 520px; height: 120px; font-size: 23px; color: #426CFF;font-weight:500">Tọa lạc tại khu vực tập trung nhiều trường quốc tế </div>

                <div style="position: absolute; top:320px; left: 60px; width: 400px; height: 120px; font-size: 20px; color: #426CFF; line-height: 38px;font-weight:500">Phòng học được thiết kế hiện đại, có thư viện nhỏ phục vụ dạy học.</div>

                <div style="position: absolute; top:405px; left: 60px; width: 130px; height: 120px; font-size: 20px; color: #0482FF; line-height: 38px;z-index:21312"><button type="button" class="btn btn-blue form-control register_slider1" data-toggle="modal" data-target="#register_learn">Đăng Ký</button></div>

                <div data-u="caption" data-t="0" style="position: absolute; top: 100px; left: 600px; width: 445px; height: 300px;">
                    <img style="position: absolute; top: 0px; left: 0px; width: 445px; height: 300px;" src="<?php echo url."/img/slider/Iphone.png"?>" />
                    <img data-u="caption" data-t="1" style="position: absolute; top: 70px; left: 130px; width: 102px; height: 78px;" src="<?php echo url."/img/slider/giasu.png"?>" />
                    <img data-u="caption" data-t="2" style="position: absolute; top: 98px; left: 163px; width: 80px; height: 53px;" src="<?php echo url."/img/slider/itutor.png"?>" />
                    <img data-u="caption" data-t="4" style="position: absolute; top: -123px; left: 121px; width: 200px; height: 155px;" src="<?php echo url."/img/slider/c-navigator.png"?>" />
                </div>
                <div data-u="caption" data-t="5" style="position: absolute; top: 120px; left: 650px; width: 470px; height: 220px;">
                    <img style="position: absolute; top: 0px; left: 0px; width: 470px; height: 220px;" src="<?php echo url."/img/slider/c-phone-horizontal.png"?>" />
                    <div style="position: absolute; top: 4px; left: 45px; width: 379px; height: 213px; overflow: hidden;">
                        <img data-u="caption" data-t="7" style="position: absolute; top: 0px; left: 379px; width: 379px; height: 213px;" src="<?php echo url."/img/slider/slider_small.jpg"?>" />
                    </div>
                    <img style="position: absolute; top: 4px; left: 45px; width: 379px; height: 213px;" src="<?php echo url."/img/slider/slider_small.jpg"?>" />
                    <img data-u="caption" data-t="8" style="position: absolute; top: 700px; left: 1660px; width: 187px; height:100px;" src="<?php echo url."/img/slider/number_phone.png"?>"/>
                    <img data-u="caption" data-t="8" style="position: absolute; top: 740px; left: 1600px; width: 257px; height: 300px;" src="<?php echo url."/img/slider/c-finger-pointing.png"?>" />
                </div>
            </div>
          


            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="<?php echo url."/img/slider/blue.jpg"?>" />
                <div style="position: absolute; top: 285px; left: 60px; width: 520px; height: 120px; font-size: 23px; color: #C1FFC1;font-weight:500">Giảng dạy trực diện, đi thẳng trọng tâm</div>

                <div style="position: absolute; top:320px; left: 60px; width: 480px; height: 120px; font-size: 20px; color: #C1FFC1; line-height: 38px;font-weight:500">Chương trình học đa dạng, tính ứng dụng cao, bổ sung kỹ năng mềm và mang đến những giờ học thú vị.</div>

                <div style="position: absolute; top:405px; left: 60px; width: 130px; height: 120px; font-size: 20px; color: #FF884F; line-height: 38px;z-index:21312"><button type="button" class="btn btn-success form-control register_slider1" data-toggle="modal" data-target="#register_learn">Đăng Ký</button></div>

                <div data-u="caption" data-t="1" style="position: absolute; top: 40px; left: 790px; width: 426px; height: 290px;">
                   <img style="position: absolute; top: 0px; left: 0px; width: 426px; height: 290px;" src="<?php echo url."/img/slider/laptop.png"?>" />
                    <img data-u="caption" data-t="2" style="position: absolute; top: 42px; left:53px; width: 68px; height: 40px;" src="<?php echo url."/img/slider/itutor2.png"?>" />
                    
                    <img data-u="caption" data-t="6" style="position: absolute; top: 19px; left: 260px; width: 110px; height: 60px;" src="<?php echo url."/img/slider/number_phone.png"?>" />
                </div>
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:60px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:60px;" data-autocenter="2"></span>
    </div>
    <script>jssor_1_slider_init();</script>
