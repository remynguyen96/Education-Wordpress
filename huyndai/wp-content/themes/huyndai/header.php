<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="main-layer"></div>
<div id="page" class="site">
	<div class="site-inner">
		
        <header id="top-head">
        	<div class="custom-container">
                <div id="main-logo" class="col-lg-5 col-md-5 col-sm-5 col-xs-5 no-padding ">
                        <a href="<?php echo home_url();?>">
                            <img src="<?php echo get_template_directory_uri();?>/images/logo-header.png"  alt="" title="" />
                        </a>
                </div>
                <div class="right col-lg-7 col-md-7 col-sm-7 col-xs-7">
                   <div class="contact col-lg-12 col-md-12 hidden-sm">
                    	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                        	<img src="<?php echo get_template_directory_uri();?>/images/search.png"  alt="" title="" />
                            
                        </div>
                        <div class="bor col-lg-1 col-md-1 col-sm-1 col-xs-1">
                        	<img src="<?php echo get_template_directory_uri();?>/images/icon-phone.png"  alt="" title="" />
                            <div class="xs-text">Hotline</div>	
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        	0987.66.72.66
                        </div>
                        <div class="bor col-lg-1 col-md-1 col-sm-1 col-xs-1 no-padding center">
                        	<img src="<?php echo get_template_directory_uri();?>/images/icon-services.png"  alt="" title="" />
                            <div class="xs-text">Dịch vụ</div>	
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        	0909.755.400
                        </div>
                    </div>
                    
                    <div class="main-menu col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                    	<a class="menu-icon fr">
                        	<span></span>
                            <span></span>
                            <span></span>
                        </a>
                    	<?php 
							wp_nav_menu(array(
								'theme_location'=>'primary',
								'menu_id'=>'primary-menu')
							);
						?>
                    </div>
                </div>
            </div><!--container-->    
        </header>
		
        <div class="content-from-menu">
        	<div class="product-area s-container">
            	<ul class="cats row">
                	<li class="col-lg-3 col-md-3 col-sm-3 col-xs-12 active"><a href="#all">Tất cả</a></li>
                	<?php 
						$product_cats = get_terms('loai-xe',array(
							'hide_empty'=>false
						));
						foreach($product_cats as $cat):
					?>
                    		<li class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            	<a href="#<?php echo $cat->slug;?>">
									<?php echo $cat->name;?>
                               </a>
                           </li>
                    <?php endforeach; ?>
                   
                </ul><!--cats-->
                <div class="products clear">
                	<?php 
						$product_args = array(
							'post_type'=>'san-pham',
							'posts_per_page'=>-1
						);
						$product_qpr = new WP_Query($product_args);
						if($product_qpr->have_posts()):
						while($product_qpr->have_posts()):
							$product_qpr->the_post();
							$term = get_the_terms(get_the_ID(),'loai-xe');
					?>
                    	<div class="product" data-category="<?php echo $term[0]->slug?>">
                    		<div class="tmb center">
                                <a href="<?php the_permalink();?>">
                                    <?php the_post_thumbnail('product-tmb');?>
                                </a>    
                            </div>
                            <h3 class="title center f100 b">
								<a href="<?php the_permalink();?>"><?php the_title();?></a>
                            </h3>
                        </div>    
                    <?php
						endwhile; 
						endif;
					?>
                </div><!--products-->
                
            </div><!--product-area-->
            
            <div class="service s-container">
            	<?php 
					$service_page = get_page_by_path( 'trang-dich-vu' );
					$child_page_args = array(
						'post_type'=>'page',
						'post_parent'=>$service_page->ID
					);
					$child_page_qpr = new WP_Query($child_page_args);
					if($child_page_qpr->have_posts()):
					echo '<ul class="child-pages row">';
					while($child_page_qpr->have_posts()):
						$child_page_qpr->the_post();
				?>
                		<li class="page col-lg-3 col-md-3 col-sm-3 col-xs-12 center">
                        	<div class="tmb"><a href="<?php the_permalink();?>"><?php the_post_thumbnail('full');?></a></div>
                            <div class="title b"><a href="<?php the_permalink();?>"><?php the_title();?></a></div>
                        </li>
                <?php 
					endwhile;
					echo '</ul>';
					endif;
				?>
            </div><!--service-->
            <div class="buy-car s-container">
            		<?php 
					$buying_car_page = get_page_by_path( 'trang-mua-xe' );
					$child_page_args = array(
						'post_type'=>'page',
						'post_parent'=>$buying_car_page->ID
					);
					$child_page_qpr = new WP_Query($child_page_args);
					if($child_page_qpr->have_posts()):
					echo '<ul class="child-pages row">';
					while($child_page_qpr->have_posts()):
						$child_page_qpr->the_post();
				?>
                		<li class="page col-lg-4 col-md-4 col-sm-4 col-xs-12 center">
                        	<div class="row">
                                <div class="tmb col-lg-4 col-md-2 col-sm-2 col-xs-2 ">
                                    <a href="<?php the_permalink();?>"><?php the_post_thumbnail('full');?></a>
                                </div>
                                <div class="b col-lg-8 col-md-10 col-sm-10 col-xs-10 ">
									<h3 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                </div>
                            </div>    
                        </li>
                <?php 
					endwhile;
					echo '</ul>';
					endif;
				?>
            </div><!--buy-car-->
            
            <div class="s-container news row">
            	<div class="left col-lg-3 col-md-3 col-sm-4 col-xs-12">
                	<h3 class="lab">Tin tức</h3>
                    <ul class="categories">
	                    <?php wp_list_categories(array('hide_empty'=>false,'title_li'=>''));?>
                    </ul>
                </div>
                <div class="right col-lg-9 col-md-9 col-sm-8 col-xs-12">
                	<div class="col-lg-2 col-lg-2 col-lg-2 col-lg-12 center lab">Tin mới</div>
                    <?php 
						$news_qpr = new WP_Query('post_type=post&posts_per_page=2');
						if($news_qpr->have_posts()):
						while($news_qpr->have_posts()):
							$news_qpr->the_post();
							$cat = get_the_category();
							$cat = $cat[0]->name;
					?>
                    	<div class="post col-lg-5 col-lg-5 col-lg-5 col-lg-12 center">
                        	<div class="tmb">
								<?php the_post_thumbnail(263,142,true);?>
                                <div class="layer center white">
                                    <h4 class="title">
                                        <a href="<?php the_permalink();?>" class="white">
                                            <?php the_title();?>
                                        </a>
                                    </h4>
                                    <h5 class="cat"><?php echo $cat;?></h5>
                                    <h6 class="date"><?php echo get_the_date('d/m/Y H:i');?></h6>
                                </div>	
                            </div><!--tmb-->
                        </div>
                    	
                    <?php 
						endwhile;
						endif;
					?>
                    
                </div>
            </div><!--news-->
            
            <div class="policy s-container">
            	<?php 
					$policy_page = get_page_by_path( 'trang-chinh-sach' );
					$child_page_args = array(
						'post_type'=>'page',
						'post_parent'=>$policy_page->ID
					);
					$child_page_qpr = new WP_Query($child_page_args);
					if($child_page_qpr->have_posts()):
					echo '<ul class="child-pages row">';
					while($child_page_qpr->have_posts()):
						$child_page_qpr->the_post();
				?>
                		<li class="page col-lg-3 col-md-3 col-sm-3 col-xs-12 center">
                        	<div class="tmb"><a href="<?php the_permalink();?>"><?php the_post_thumbnail('full');?></a></div>
                            <div class="title b"><a href="<?php the_permalink();?>"><?php the_title();?></a></div>
                        </li>
                <?php 
					endwhile;
					echo '</ul>';
					endif;
				?>
            </div><!--policy-->
            
        </div><!--content-from-menu-->
        
        <?php if(!is_home() || !is_front_page()):?>
                <div class="breadcrumb breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                    <?php if(function_exists('bcn_display'))
                    {
                        bcn_display();
                    }?>
                </div>
        <?php endif;?>
        
		<div id="content" class="site-content">
		