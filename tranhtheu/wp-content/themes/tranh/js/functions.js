jQuery(document).ready(function($){
         $("#index-slider").owlCarousel({
           navigation : false,
           pagination:false,
           singleItem : true,
           autoPlay:2000,
           lazyLoad : true,
           transitionStyle : "fade"
         });

         if($(window).width()  > "600"){
             $("#index-slider2").owlCarousel({
               navigation : false,
               pagination:false,
               singleItem : true,
               autoPlay:2000,
               lazyLoad : true,
               transitionStyle : "fade"
             });
             $("#index-slider3").owlCarousel({
               navigation : false,
               pagination:false,
               singleItem : true,
               autoPlay:2000,
               lazyLoad : true,
               transitionStyle : "fade"
             });
         }


         $("#product-slider").owlCarousel({
             navigation : false, // Show next and prev buttons
             pagination:true,
             slideSpeed : 1000,
             paginationSpeed : 3800,
             lazyLoad : true,
             autoPlay: 4500,
              items : 3,
              itemsDesktop : [1199,3],
              itemsDesktopSmall : [979,3]
         });

         $("#news-slider").owlCarousel({
             navigation : true,
             pagination:false,
             singleItem : true,
             autoPlay:2000,
             lazyLoad : true,
             transitionStyle : "fade"
         });


        $("#header_menu li").each(function(){
            var value = $(this).find("> a").text();
            $(this).find("a").attr('title',value)
        });
        if($(window).width() > "991"){
            $(".sub-menu").hide()
        }
		$("#header_menu .menu-item-has-children").mouseenter(function() {
			$(this).find("ul").stop(true, true).slideDown();
		});
		$("#header_menu .menu-item-has-children").mouseleave(function() {
			$(this).find("ul").stop(true, true).slideUp();
		});



        if($(window).width() > "768"){
            $("#search").hide();
            $("#btn-search").on('click',function(e){
                e.preventDefault();
                if($("#btn-search i").hasClass("el-search")){
                    $("#btn-search i").removeClass('el-search');
                    $("#btn-search i").addClass('el-remove');
                    $("#btn-search").stop().css({"transition":"all 1s","-moz-transition":"all 1s","-webkit-transition":"all 1s",});
                    $("#search").stop().slideDown();
                }else{
                    $("#btn-search i").removeClass('el-remove');
                    $("#search").stop().slideUp();
                    $("#btn-search i").addClass('el-search');
                }
            });
        }





        $("#search").keyup(function(event){
            if(event.keyCode == 13){
                $(".form_search form").submit();
            }
        });


        if($(window).width() < "991"){
            $(".menu_icon").click(function(e){
                e.preventDefault();
                $(".header_menu").toggleClass("open");
                $(".menu_icon").toggleClass("open");
                $(".logo").toggleClass("open");
                $(".form_search").toggleClass("open");
            });
        }

        // back to top
        $('body').prepend('<a href="javascript:void(0)" id="back-to-top"></a>');
        var amountScrolled = 300;
        $(window).scroll(function(){
          if ( $(window).scrollTop() > amountScrolled ) {
            $('#back-to-top').addClass('on_top').removeClass('off_top');
          } else {
            $('#back-to-top').addClass('off_top').removeClass('on_top');
          }
        });
        $('#back-to-top').click(function() {
          $('html, body').animate({ scrollTop : 0 },950);
        });
});
