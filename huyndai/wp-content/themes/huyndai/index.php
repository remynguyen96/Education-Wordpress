<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
	
	<div id="primary" class="index-page">
		<main id="main" class="site-main" role="main">
        
			   <section id="index-slider" class="owl-carousel owl-theme">
                    
                      <div class="item">
                            <img class="w100" src="<?php echo get_template_directory_uri();?>/images/slide1.png" alt="Mẫu xe 1">
                      </div>
                      <div class="item">
                            <img class="w100" src="<?php echo get_template_directory_uri();?>/images/slide2.png" alt="Mẫu xe 2">
                      </div>
                      <div class="item">
                            <img class="w100" src="<?php echo get_template_directory_uri();?>/images/slide3.png" alt="Mẫu xe 3">
                      </div>
           		</section>
			
            <div class="container">
            	<section class="latest-products row">
                	<?php 
						$product_args = array(
							'post_type'=>'san-pham',
							'posts_per_page'=>-1
						);
						$product_qpr = new WP_Query($product_args);
						if($product_qpr->have_posts()):
						while($product_qpr->have_posts()):
							$product_qpr->the_post();
					?>
                        <div class="product col-lg-1 col-md-2 col-sm-3 col-xs-3">
                            <div class="tmb">
                            	<a href="<?php the_permalink();?>">
									<?php the_post_thumbnail('product-tmb');?>
                                </a>
                            </div>
                            <h3 class="title b">
                            	<a href="<?php the_permalink();?>">
									<?php the_title();?>
                                </a>
                           </h3>
                        </div>
                     <?php
						endwhile; 
						endif;
					?>
                </section>
                
                <section class="news-posts row">
                	<?php 
						$args_news = array(
							'post_type'=>'post',
							'posts_per_page'=>3
						);
						$i=0;
						$qpr_news = new WP_Query($args_news);
						if($qpr_news->have_posts()):
					?>
                    	<?php 
						while($qpr_news->have_posts()):$qpr_news->the_post();
							$i++;	
							$custom_news_col = ($i==1)?'col-lg-6 col-md-6 col-sm-6 col-xs-12':'col-lg-3 col-md-3 col-sm-3 col-xs-12';
							$cat = get_the_category();
							$cat = $cat[0]->name;
						?>
                            <article class="post <?php echo $custom_news_col;?>">
                                <div class="tmb">
                                    <a href="<?php the_permalink();?>">
										<?php the_post_thumbnail('',array('class'=>'w100'));?>
                                    </a>
                                </div>
                                <h3 class="title">
									<a href="<?php the_permalink();?>">
										<?php the_title();?>
                                   </a>     
                                </h3>
                                <?php if($i != 1):?>
                                <h4 class="cat">
                                	<?php 
										echo $cat.' ';
										echo get_the_date('d/m/Y H:i');
									?>
                                    
                                </h4>
                                <?php endif; ?>
                            </article>
                        
                    <?php 
						endwhile;
						endif;
					?>
                
                </section>
            </div><!--container-->
                
		</main><!-- .site-main -->
	</div><!-- .content-area -->
<?php get_footer(); ?>
