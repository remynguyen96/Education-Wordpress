<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="<?php echo url."/img/favicon.ico"?>" />
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>
<!-- <body ondragstart="window.event.returnValue=false" oncontextmenu="window.event.returnValue=false" onselectstart="event.returnValue=false" cz-shortcut-listen="true"> -->
<body <?php body_class(); ?> >
	<div class="container-fluid">
		<div class="row">
			<div class="w100">
				<?php Banner_Header(); ?>
			</div>
			<header class="header_shadow">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                	<nav class="primary_navigation" id="main-menu">
                		<span class="menu_control">≡</span>
						<?php  
							if(has_nav_menu("header-menu"))
							{
								wp_nav_menu(array(
									"theme_location" => "header-menu",
									"menu_id" => "header-menu",
									"menu_class" => "header_menu"
								));
							}
						?>
					</nav>
				</div>
			</header>
		</div>
	</div>
