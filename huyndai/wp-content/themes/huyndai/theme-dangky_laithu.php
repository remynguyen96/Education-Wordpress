<?php  
/*
    Template Name: Đăng ký lái thử
*/
get_header();
?>
<div class="container">
    <div class="col-xs-12 no-padding title-register" style="">
        Điền vào mẫu  để hẹn lịch lái thử tại Hyundai Tiên Phong 
    </div>
    <div class="row register" id="register-content">
        <div class="body-register">
            <div class="col-sm-12 form-horizontal no-padding">
               <div class="col-sm-8 no-padding border_top">
                 <p>Các trường chứa dấu (*) là bắt buộc</p>
<?php echo do_shortcode('[contact-form-7 id="138" title="Register Try Drive Car"]'); ?>

				<div class="select-car-wrap">
                	<select name="select-car-ajax" class="select-car-ajax form-control">
                        	<option value="0"></option>
                            <?php 
								$product_name_args = array(
									'post_type'=>'san-pham',
									'posts_per_page'=>'-1'
								);
								$product_name = new WP_Query($product_name_args);
								if($product_name->have_posts()):
									$i=2;
									while($product_name->have_posts()):
										$product_name->the_post();
										$thumb_list[] = get_the_post_thumbnail(get_the_ID(),'full');
							?>
                            		<option value="<?php echo $i++;?>"><?php the_title();?></option>
                            <?php 
									endwhile;
								endif;
							?>
                   	</select>		
					 <div class="select_car_thumb_list">
                          <img src="<?php echo url."/images/blank_car.png" ?>" class="img-responsive" id="showimage">
                          <?php foreach($thumb_list as $img):
                          		echo $img;
                          		endforeach;
						  ?>
                    </div>
				</div><!--select-car-wrap-->
              
              
                   
                   
              
            </div>
        </div>
    </div>
</div>
<script>
	jQuery(document).ready(function($){
        $(".select-car-ajax").on('change',function(){				
			pos = $(this).val();
			$(".car-name-input").val($(this).find('option[value="'+pos+'"]').text());
			$(".select_car_thumb_list img").slideUp();
			$('.select_car_thumb_list img:nth-child('+pos+')').slideDown();
		});
		$(".select-car-here").append($(".select-car-wrap").detach());

    });
</script>
<?php get_footer();?>