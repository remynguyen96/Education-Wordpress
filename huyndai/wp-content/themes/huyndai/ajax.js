jQuery(document).ready(function($){
    $(".car-cat-list").on('change',function(){
		car_id = $(this).val();
		alert(car_id);
		data = {
			action:'custom_ajax_action'	
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
						alert(data);
					},
					complete: function(){
						
					}
				
			}); //End ajax
				alert('done');
	});// End Onchange event
});