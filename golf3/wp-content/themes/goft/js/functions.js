jQuery(document).ready(function($){
    $("#index-slider").owlCarousel({
           navigation : true,
           pagination:false,
           slideSpeed : 1000,
           paginationSpeed : 3800,
           singleItem:true,
           lazyLoad : true,
           autoPlay:false,
    });

    $("#tee_times_slide").owlCarousel({
           navigation : true,
           pagination:false,
           slideSpeed : 1000,
           paginationSpeed : 3800,
           singleItem:true,
           lazyLoad : true,
           autoPlay:false,
    });

    $("#product-slider").owlCarousel({
        navigation : true,
         autoPlay: false,
         pagination:false,
         slideSpeed : 1000,
         paginationSpeed : 3800,
         items : 4,
         lazyLoad : true,
         itemsDesktop : [1199,3],
         itemsDesktopSmall : [979,3]
    });


    $("#people-slider").owlCarousel({
        navigation : false,
         autoPlay: false,
         pagination:true,
         slideSpeed :1000,
         paginationSpeed :3000,
         items :2,
         lazyLoad : true,
         itemsDesktop : [1199,3],
         itemsDesktopSmall : [979,3]
    });

    $("#parner-slider").owlCarousel({
    autoPlay: 3000,
    navigation : false,
    pagination:false,
    lazyLoad : true,
    items : 4, //10 items above 1000px browser width
    itemsMobile : true // itemsMobile disabled - inherit from itemsTablet option
    });


    $(window).load(function(){
        $(".info_product_top").each(function(index,key){
            var height_change = $(this).find(".content_pax").height();
            var height_price= $(this).find(".price_pax");
            height_price.css('height',height_change)
        });
    });

    $("#submit_create").click(function(){
        $("#btn_trip").click();
    });


    var width = $(window).width();
    if(width > 1010){
        var all_menu = $("#header_menu").width();
         $("#header_menu > li > .sub-menu").css("width",all_menu);


         $("#header_menu > li").hover(function(){
                var first_li = $("#header_menu > li:first-child").offset().left;
                var demo = $(this).closest("#header_menu").find(".child-menu").find(".sub-menu").css("width");





         });

    }else{
        $(".menu_icon").click(function(){
            $(".menu_icon").toggleClass('open_menu');
            $("#header_menu").toggleClass('open_all');
        });
    }



});
