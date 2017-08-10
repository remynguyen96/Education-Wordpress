<?php
//Get post by cat
if($_POST['action_type']=='get_product_by_cat'){
	$cat = $_POST['cat'];
	echo $cat;
	$product_list = array(
		'post_type'=>'san-pham',
		'posts_per_page'=>-1,
		'tax_query' => array(
				array(
					'taxonomy' => 'loai-xe',
					'field'    => 'id',
					'terms'    => $cat
				),
		),
	);
	$product_list_qpr = new WP_Query($product_list);
	if($product_list_qpr->have_posts()):
					while($product_list_qpr->have_posts()):
						$product_list_qpr->the_post();
						$price = get_post_meta(get_the_ID(),'wpcf-product-price',true);
				
	?>
					   <option value="<?php echo $price?>"><?php the_title();?></option>
					   
	 <?php 
			endwhile;
		endif;
}    