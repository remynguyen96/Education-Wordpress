<?php  get_header(); ?>
<?php get_template_part("template-parts/slider");?>
<div class="shadow_title">
    <h2 class="text-center title_page"><?php the_title(); ?></h2>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
             <div class="app-figure" id="zoom-fig">
                <a id="Zoom-1" class="MagicZoom" title="<?php the_title(); ?>" href="<?php echo get_post_meta(get_the_ID(),'wpcf-images_service',true); ?>">
                    <img src="<?php echo get_post_meta(get_the_ID(),'wpcf-images_service',true); ?>" alt="">
                </a>
              <div class="selectors">
                    <?php 
                        $images = get_post_meta(get_the_ID(),'wpcf-images_service',false); 
                        foreach ( $images as  $item ):
                    ?>      
                   <a
                        data-zoom-id="Zoom-1"
                        href="<?php echo $item ?>"
                        data-image="<?php echo $item ?>"
                    >
                        <img srcset="<?php echo $item ?>" src="<?php echo $item ?>">
                    </a>
                    <?php
                        endforeach;
                    ?>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 contact_service">
          <h3 class="text-center">Thông tin liên hệ</h3>
          <p>Ông Nguyễn Thanh Nguyên (0972605959) – Chuyên viên đào tạo.</p>
          <p>Công ty TNHH Tư vấn và Đào tạo Môi trường Envi-school</p>
          <p>Địa chỉ: 628 Xô Viết Nghệ Tĩnh, Phường 25, quận Bình Thạnh, Tp. Hồ Chí Minh</p>
          <p>Hotline: <span>08.62589699 - </span><span>0913989898</span></p>
          <p>Email: envischool.company@gmail.com</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 content_service">
            <?php  
            if(have_posts())
            {
                while(have_posts())
                {
                    the_post();
                    the_content();
                }
            }
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>