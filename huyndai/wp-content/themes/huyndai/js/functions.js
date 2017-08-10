jQuery(document).ready(function($) {
			var window_w = $(window).width();		
			//Index slider
			 $("#index-slider").owlCarousel({
					navigation : true, // Show next and prev buttons
					pagination:false,
					slideSpeed : 1000,
					paginationSpeed : 3800,
					singleItem:true,
					lazyLoad : true,
					autoPlay:true,
			 });
			 
			 //Show products by category
			
			 $(".content-from-menu ul.cats li a").click(function(e){
				   e.preventDefault();
				   $(".content-from-menu ul.cats li").removeClass("active");
				   $(this).parent().addClass("active");
				   var product_cat = $(this).attr("href");
				   product_cat = product_cat.substring(1);
				   	if( product_cat == 'all')
				   		$(".content-from-menu .products .product").removeClass("scale");
					else{
							$(".content-from-menu .products .product").each(function(){
							   if( product_cat == $(this).attr("data-category") )
									$(this).removeClass("scale");
								else
									$(this).addClass("scale");
						   });
					}
				   
			 });
			 
			 
			 
	
	if(window_w>=992){		 
			 //Show menu by clicking
			$("ul#primary-menu > li a").click(function(e){
				if($(this).attr("href").indexOf("#") != -1){
					e.preventDefault();
					this_menu = $(this).attr("href");
					this_menu = this_menu.substring(1);
									
					$(".content-from-menu .s-container").slideUp();				
					$(".content-from-menu ."+this_menu).stop().slideToggle();
				}

			});
			
	}else{ // Less than 992px
	
		$("#top-head").prepend($("ul#primary-menu").detach());
	
		$(".main-menu .menu-icon").click(function(){
			$("ul#primary-menu").slideToggle();
		});
		
		$(window).scroll(function(){
			var close_menu = false;
			if( $(document).scrollTop() > 10 )
				close_menu = true;
			else
				close_menu = false;
			//if(close_menu)
				//$("ul#primary-menu").slideUp();
		});
	}
});