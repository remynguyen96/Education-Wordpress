<?php get_header();?>
<?php 
if(is_user_logged_in()){?>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<?php the_post_thumbnail(array(750,350));?>
		</div>
		<div>
		<?php 
			 $timer = get_post_meta(get_the_id(),"wpcf-thoi-gian-kiem-tra-online",true);

			 $s1  = substr($timer,0,1);
			 $s2  = substr($timer,1,1);
			 $m1  = substr($timer,3,1);
			 $m2  = substr($timer,4,1);
		  ?>
		</div>
		<div class="col-lg-2 col-lg-push-10 col-md-2 col-md-push-10 col-sm-3 col-sm-push-9 info_member_test">
			<img class="img-responsive" src="<?php echo url."/img/clock.gif"?>" alt="Đồng hồ">
			<div class="clock_test_online"></div>
				<div id="show_minutes1" class="number_seconds text-center"><?php  echo $s1;?></div>
				<div id="show_minutes2" class="number_seconds text-center"><?php  echo $s2;?></div>
				<div id="devide" class="text-center">:</div>
				<div id="show_seconds1" class="number_seconds text-center"><?php  echo $m1;?></div>
				<div id="show_seconds2" class="number_seconds text-center"><?php  echo $m2;?></div>
			<button type="button" id="start_test_online" class="btn btn-green form-control">Start</button>
			<?php  
				$avatar =  get_user_meta(get_current_user_id(),"wpcf-avatar-member",true); 
				$avatar_member= explode(".",$avatar);
				$duoi_img = end($avatar_member);
				array_pop($avatar_member);
				$new_images = implode(".",$avatar_member)."-150x150.".$duoi_img;
			?>
			<img src="<?php echo $new_images ?>" alt="Avatar thành viên" class="img-responsive avatar_user">
			<p>
				<?php 
					$member = get_userdata(get_current_user_id());
					echo $member->last_name.$member->first_name;
				?>
			</p>
		</div>
	<?php 
		if(have_posts())
		{
			while(have_posts())
			{
				the_post();
	?>
		<div class="col-lg-8 col-md-6 col-sm-6">
			<div class="page_test">
					<h1 class="text-center" id="title_subject"><?php the_title();?></h1>
					<div class="content_subject"><?php the_content();?></div>
					
				<?php
						}
					}
				?>
			</div>
		</div>
		<div class="col-lg-2 col-lg-pull-10 col-md-2 col-md-pull-10 col-sm-3 col-sm-pull-9">
		 	<?php 
		 		$category_product = get_the_terms(get_the_id(),"loai-bai-test");
		 		/*print_r($category_product);*/
		 		$term_id =  $category_product[0]->term_id;
		 		$list = array(
		 			'post_type' => "kiem-tra",
		 			'posts_per_page' => -1,
		 			/*'post__not_in' => array(get_the_id()),*/
		 			'tax_query' => array(
						array(
							'taxonomy' => 'loai-bai-test',
							'field'    => 'id',
							'terms'    => $term_id,
						),
					),
		 		);
		 		$query = new WP_Query($list);
		 		while($query->have_posts())
		 		{
		 				$query->the_post();
		 				echo "<p class='post_involve'><a class='btn btn-info form-control' href='".get_the_permalink()."'>".get_the_title()."</a></p>";
		 		}
		 	?>
		</div>		
	</div>
</div>
<?php 
}
else{
echo "<div class='container'>";
	echo "<div class='row'>";
		echo "<div class='col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2'>";
		echo '<a class="register_member" href="'.home_url("wp-login.php?action=register").'">Đăng ký</a>';
	if(is_active_sidebar('follow_student'))
	{
		dynamic_sidebar('follow_student');
	}
	if(!is_user_logged_in())
	{
		$args = array(
		'redirect' => site_url( $_SERVER['REQUEST_URI'] ),
		'form_id' => 'login_form', //viết CSS
		'label_username' => __( 'Tài khoản hoặc E-mail' ),
		'label_password' => __( 'Mật khẩu' ),
		'label_remember' => __( 'Ghi nhớ' ),
		'label_log_in' => __( 'Đăng nhập' ),
		);
		 wp_login_form($args);
	}
    $login  = (isset($_GET['login']) ) ? $_GET['login'] : 0;
    if ( $login === "failed" ) {
            echo '<p class="error_login alert alert-danger">Username hoặc mật khẩu không đúng !</p>';
    } elseif ( $login === "empty" ) {
            echo '<p class="error_login alert alert-danger">Vui lòng điền username và mật khẩu !</p>';
    } elseif ( $login === "false" ) {
            echo '<p class="error_login alert alert-danger"><strong>ERROR:</strong> Bạn đã thoát ra.</p>';
    }
		echo "</div>";
	echo "</div>";
echo "</div>";
}
?>

<?php get_footer(); ?>
