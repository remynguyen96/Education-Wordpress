<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url"           content="http://www.your-domain.com/your-page.html" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="Your Website Title" />
	<meta property="og:description"   content="Your description" />
	<meta property="og:image"         content="http://www.your-domain.com/path/image.jpg" />


	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-4 col-lg-2 col-md-2 logo_home">
                    <a href="<?php echo home_url() ?>"><img src="<?php echo url."/img/logo.png" ?>" alt="Logo"></a>
                </div>
                <div class="col-sm-12 col-xs-12 col-lg-10 col-md-10">
                    <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 all_info_menu_top">
                        <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 info_menu_top">
                            <div class="col-xs-12 col-sm-10 col-lg-9 col-md-9">
                                <div class="col-xs-12 col-sm-4 col-lg-4 col-md-4 detail_menu_top">
                                    <p>golf holidays</p>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-lg-4 col-md-4 detail_menu_top">
                                    <p>tee times</p>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-lg-4 col-md-4 detail_menu_top">
                                    <p>proshop</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-2 col-lg-3 col-md-3 language_menu">
                                <img src="<?php echo url."/img/language.png" ?>" alt="Language">
                                <select class="" name="">
                                    <option value="">English</option>
                                    <option value="">Vietnamese</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                        <?php if ( has_nav_menu( 'header' ) ) : ?>
                    		<nav id="social-navigation" class="social-navigation">
                                 <a href="javascript:void(0)" class="menu_icon">
                                     <span></span>
                                     <span></span>
                                     <span></span>
                                </a>
                    			<?php
                    				wp_nav_menu( array(
                    					'theme_location' => 'header',
                                        "menu_id" => "header_menu",
                                        "menu_class" => "header_menu"
                    				) );
                    			?>
                    		</nav>
                    	<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_all_menu"></div>
    </div>
</div>
    <div class="container-fluid">
        <div class="row">
            <div class="fixed_menu">
                <!-- <div class="shadow_menu_fixed">
                    We Ensure Our Best Services To You
                </div> -->
                <div class="info_menu_fixed">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 golf_corporation">
                            <?php $fixed = Introduce5(); ?>
                            <span><?php if($fixed[0] != ""){ _e($fixed[0],'golf');}else{ ?>
                                          <?php _e( 'United Golf Corporation', 'golf' ); ?>
                                      <?php  }?>
                            </span>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 _hotline">
                            <span><?php if($fixed[1] != ""){_e($fixed[1],'golf');}else{ ?>
                                          <?php _e( 'Hotline: 08 5412 5016   |   Email: sales@unigolf.vn   |   Address: 1437 Nguyen Van Linh Street, Ward 7, HCM City, Vietnam', 'golf' ); ?>
                                      <?php  }?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
