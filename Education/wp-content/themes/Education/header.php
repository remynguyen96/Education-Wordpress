<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="<?php echo url."/img/favicon.ico"?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="header">
	<div class="container-fluid">
		<div class="row">
			<div class="header_wrapper">
				<div class="header_shadow">
					<div class="col-md-2" id="logo">
						<h1 id="site_title">
							<a href="<?php echo home_url(); ?>"><img src="<?php echo url."/img/logo.png"?>" alt="Logo Itutor" title="click to go home"></a>
						</h1>
					</div>
					<div class="col-md-10" id="main-menu">
					<span class="menu_control">≡</span>
						<?php  
							if(has_nav_menu("menu-education"))
							{
								wp_nav_menu(array(
									"theme_location" => "menu-education",
									"menu_id" => "menu",
									"menu_class" => "menu"
								));
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- popup register study -->
<div class="modal fade" id="register_learn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title_register text-center text-info" id="exampleModalLabel">Đăng Ký Khóa Học</h4>
      </div>
      <?php echo do_shortcode('[contact-form-7 id="183" title="Popup Register Student"]'); ?>
   </div>
  </div>
</div>