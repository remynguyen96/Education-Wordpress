<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url"           content="http://www.envischool.vn/tranhtheuhaiyen/" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="Cửa hàng tranh thêu tay Hải Yến" />
	<meta property="og:description"   content="Tranh thêu tay Hải Yến tự hào đã góp phần tạo nên sắc màu mới cho dòng tranh thêu tay truyền thống Việt Nam. Là món quà độc đáo và đậm đà tình nghĩa quê hương dành cho những người thân yêu và bạn bè khi đến Việt Nam tham quan du lịch. Chúng tôi mong muốn mang những giá trị văn hóa nghệ thuật đặc biệt này giới thiệu tới khắp miền đất nước Việt Nam và bạn bè trên Thế Giới." />
	<meta property="og:image"         content="http://www.envischool.vn/tranhtheuhaiyen/wp-content/uploads/2016/11/buoi-chieu-que-1472098946.jpg" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri()."/img/favicon.ico" ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border_top_menu">
            <div class="logo">
                <a href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri().("/img/logo.png") ?>" alt="Logo" /></a>
            </div>
            <nav class="menu_home" id="menu_home">
                <a href="javascript:void(0)" class="menu_icon">
                    <span></span>
                    <span></span>
                    <span></span>
               </a>
                <?php
                    if(has_nav_menu("header"))
                    {
                        wp_nav_menu(array(
                            "theme_location" => "header",
                            "menu_id" => "header_menu",
                            "menu_class" => "header_menu"
                        ));
                    }
                ?>
            </nav>
            <div class="form_search">
                <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="post">
                    <input type="text" name="s" value="<?php echo get_search_query(); ?>" placeholder="Tìm kiếm" id="search">
                    <button type="submit" name="button" id="btn-search"><i class="el el-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="bg_intro"></div>
    </div>
</div>
<section id="index-slider" class="owl-carousel owl-theme">
  <?php
     $img = Slider_Header();
      if(isset($img[0])){echo $img[0];}
      if(isset($img[1])){echo $img[1];}
      if(isset($img[2])){echo $img[2];}
      if(isset($img[3])){echo $img[3];}
      if(isset($img[4])){echo $img[4];}
      if(isset($img[5])){echo $img[5];}
      if(isset($img[6])){echo $img[6];}
      if(isset($img[7])){echo $img[7];}
  ?>
</section>
<section id="index-slider2" class="owl-carousel owl-theme">
  <?php
     $img = Slider_Header2();
      if(isset($img[0])){echo $img[0];}
      if(isset($img[1])){echo $img[1];}
      if(isset($img[2])){echo $img[2];}
      if(isset($img[3])){echo $img[3];}
      if(isset($img[4])){echo $img[4];}
      if(isset($img[5])){echo $img[5];}
      if(isset($img[6])){echo $img[6];}
      if(isset($img[7])){echo $img[7];}
  ?>
</section>
<section id="index-slider3" class="owl-carousel owl-theme">
  <?php
     $img = Slider_Header3();
      if(isset($img[0])){echo $img[0];}
      if(isset($img[1])){echo $img[1];}
      if(isset($img[2])){echo $img[2];}
      if(isset($img[3])){echo $img[3];}
      if(isset($img[4])){echo $img[4];}
      if(isset($img[5])){echo $img[5];}
      if(isset($img[6])){echo $img[6];}
      if(isset($img[7])){echo $img[7];}
  ?>
</section>
