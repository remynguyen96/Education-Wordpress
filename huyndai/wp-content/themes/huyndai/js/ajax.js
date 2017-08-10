jQuery(document).ready(function($){
    $(".car-cat-list").on('change',function(){
		car_id = $(this).val();
		data = {
			action:'custom_ajax_action',
			action_type:'get_product_by_cat',
			cat:car_id	
		}
		//Get product posts
			$.ajax(
				ajax_params.ajax_url, 
				{
					cache: false, 
					data: data,
					type: "POST",
					beforeSend: function() {
						
					},
					error: function() {
						
					},
					success: function(data) {
						$("#dongxe").empty().append(data);
					},
					complete: function(){
						
					}
				
			}); //End ajax
				
	});// End Onchange event
	
	$("#dongxe").on('change',function(){
		this_price = $(this).val();
		this_price = this_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
		$(".tra-gop-page .tmb-area .price").html('Giá bán: '+this_price);
	});
});