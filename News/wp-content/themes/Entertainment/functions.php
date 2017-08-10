<?php  
define("url", get_template_directory_uri());
define("envischool", get_template_directory());
require_once(envischool."/core/init.php");
function CssAndJs()
{
  wp_enqueue_style("font","https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,700,700italic&subset=latin,vietnamese,latin-ext",array(),"1.0");
  wp_enqueue_style("bootstrap_css",url."/css/bootstrap.min.css",array(),"1.0");
  wp_enqueue_style("carousel_css",url."/css/owl.carousel.css",array(),"1.0");
  wp_enqueue_style("zoom_css",url."/css/zoom.css",array(),"1.0");
  wp_enqueue_style("style",get_stylesheet_uri());

 /* wp_enqueue_script("bootstrap_js",url."/js/bootstrap.min.js",array("jquery"),true);*/
  wp_enqueue_script("movehover",url."/js/movehover.js",array("jquery"),true);
  wp_enqueue_script("carousel_js",url."/js/owl.carousel.min.js",array("jquery"),true);
  wp_enqueue_script("zoom_js",url."/js/zoom.js",array("jquery"),true);
  wp_enqueue_script("yoube_api",url."/js/api_youtube.js",array("jquery"),true);
  wp_enqueue_script("youtube",url."/js/youtube.js",array("jquery"),true);
  wp_enqueue_script("sticky",url."/js/sticky.js",array("jquery"),true);
  wp_enqueue_script("functions",url."/js/functions.js",array("jquery"),true);
}
add_action("wp_enqueue_scripts","CssAndJs");
//function set up theme
if(!function_exists("setup_theme_entertainment"))
{
  function setup_theme_entertainment()
  {
    // add title-tag
    add_theme_support("title-tag");
    // auto add link rss over head 
    add_theme_support("automatic-feed-links");
    // add post thumbnail (set feature images)
    add_theme_support( "post-thumbnails");
    set_post_thumbnail_size( 1200, 9999 );
    add_image_size( 'product-tmb', 160, 72,true); 
    // add post format
    add_theme_support( 'post-formats', array(
      'aside',
      'image',
      'video',
      'quote',
      'link',
      'gallery',
      'status',
      'audio',
      'chat',
    ) );
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    ) );
    // Add custom background
    $default_background = array(
      "default-color" => "#6FB7FF"
    );
    add_theme_support("custom-background",$default_background);
    // Add menu
    
      register_nav_menus( array(
      'header-menu' => __( 'Header Menu', 'entertainment' ),
      'footer-menu'  => __( 'Footer Menu', 'entertainment' ),
    ) );
  }
}
add_action("init","setup_theme_entertainment"); 
/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Twenty Sixteen 1.0
 */
function Banner_Header()
{
  global $envischool;
  if($envischool['banner-on'] == 1)
  {
    echo "<img src='".$envischool['banner-image']['url']."' alt='Banner Header Envischool'>" ;
  }
  else
  {
      if ( is_home() ) {
            printf( '<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',
            get_bloginfo('url'),
            get_bloginfo('description'),
            get_bloginfo('sitename') );
          } else {
            printf( '<p><a href="%1$s" title="%2$s">%3$s</a></p>',
            get_bloginfo('url'),
            get_bloginfo('description'),
            get_bloginfo('sitename') );     
          }
      bloginfo('description');
  }
}
function Banner_Footer()
{
  global $envischool;
  if($envischool['banner-on2'] == 1)
  {
    echo "<img src='".$envischool['banner-image2']['url']."' class='img-responsive' alt='Banner Footer Envischool'>" ;
  }
  else
  {
      if ( is_home() ) {
            printf( '<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',
            get_bloginfo('url'),
            get_bloginfo('description'),
            get_bloginfo('sitename') );
          } else {
            printf( '<p><a href="%1$s" title="%2$s">%3$s</a></p>',
            get_bloginfo('url'),
            get_bloginfo('description'),
            get_bloginfo('sitename') );     
          }
      bloginfo('description');
  }
}
function Introduce()
{
  global $envischool;
  if(!$envischool["header-introduce"])
  {
    echo '<p class="p_introduce">'.$envischool["text-introduce"].'</p>';
  }
  else
  {
    echo '<p class="p_introduce">Công ty TNHH Tư vấn và Đào tạo Môi trường Envi-school.</p>';
  }
}
function Link_Social()
{
  global $envischool;
  if(!$envischool["social-network"])
  {
    $link1 = $envischool["facebook-api"];
    $link2 = $envischool["youtube-api"];
    $link3 = $envischool["skype-api"];
    $link4 = $envischool["google-api"];
    $link5 = $envischool["twitter-api"];
  }
  return $list = array($link1,$link2,$link3,$link4,$link5);
}
function Clip()
{
  global $envischool;
  if(!$envischool["clip_youtube"])
  {
    $clip1 = $envischool["youtube1"];
    $clip2 = $envischool["youtube2"];
  }
  return $clip = array($clip1,$clip2);
}
function Slider()
{
  global $envischool;
   if(!$envischool["slider-header"])
  {
    if($envischool['SLIDER1-on'] == 1)
    {
       $img1 = "<div class='item'><img src='".$envischool['slider-image1']['url']."' alt='Slider1 Envischool' class='img-responsive'></div>" ;
    }
    if($envischool['SLIDER2-on'] == 1)
    {
      $img2 = "<div class='item'><img src='".$envischool['slider-image2']['url']."' alt='Slider2 Envischool' class='img-responsive'></div>" ;
    }
    if($envischool['SLIDER3-on'] == 1)
    {
      $img3 = "<div class='item'><img src='".$envischool['slider-image3']['url']."' alt='Slider3 Envischool' class='img-responsive'></div>" ;
    }
    if($envischool['SLIDER4-on'] == 1)
    {
       $img4 = "<div class='item'><img src='".$envischool['slider-image4']['url']."' alt='Slider4 Envischool' class='img-responsive'></div>" ;
    }
    if($envischool['SLIDER5-on'] == 1)
    {
       $img5 = "<div class='item'><img src='".$envischool['slider-image5']['url']."' alt='Slider5 Envischool' class='img-responsive'></div>" ;
    }
    if($envischool['SLIDER6-on'] == 1)
    {
       $img6 = "<div class='item'><img src='".$envischool['slider-image6']['url']."' alt='Slider6 Envischool' class='img-responsive'></div>" ;
    }
    if($envischool['SLIDER7-on'] == 1)
    {
       $img7 = "<div class='item'><img src='".$envischool['slider-image7']['url']."' alt='Slider7 Envischool' class='img-responsive'></div>" ;
    }
  }
  $array = array($img1,$img2,$img3,$img4,$img5,$img6,$img7);
  return $array;
}
function Slider_Footer()
{
  global $envischool;
  if(!$envischool["slider-footer"])
  {
    if($envischool['slider1-on'] == 1)
    {
      $img_footer1 = "<div class='item'><img src='".$envischool['slider-img1']['url']."' alt='Slider Footer 1 Envischool' class='img-responsive'></div>" ;
    }
    if($envischool['slider2-on'] == 1)
    {
      $img_footer2 = "<div class='item'><img src='".$envischool['slider-img2']['url']."' alt='Slider Footer 2 Envischool' class='img-responsive'></div>" ;
    }
    if($envischool['slider3-on'] == 1)
    {
      $img_footer3 = "<div class='item'><img src='".$envischool['slider-img3']['url']."' alt='Slider Footer 3 Envischool' class='img-responsive'></div>" ;
    }
    if($envischool['slider4-on'] == 1)
    {
      $img_footer4 = "<div class='item'><img src='".$envischool['slider-img4']['url']."' alt='Slider Footer 4 Envischool' class='img-responsive'></div>" ;
    }
    if($envischool['slider5-on'] == 1)
    {
      $img_footer5 = "<div class='item'><img src='".$envischool['slider-img5']['url']."' alt='Slider Footer 5 Envischool' class='img-responsive'></div>" ;
    }
    if($envischool['slider6-on'] == 1)
    {
      $img_footer6 = "<div class='item'><img src='".$envischool['slider-img6']['url']."' alt='Slider Footer 6 Envischool' class='img-responsive'></div>" ;
    }
    if($envischool['slider7-on'] == 1)
    {
      $img_footer7 = "<div class='item'><img src='".$envischool['slider-img7']['url']."' alt='Slider Footer 7 Envischool' class='img-responsive'></div>" ;
    }
  }
  $array = array($img_footer1,$img_footer2,$img_footer3,$img_footer4,$img_footer5,$img_footer6,$img_footer7);
  return $array;
}
function Img_home()
{
  global $envischool;
   if(!$envischool["img-home"])
  {
    if($envischool['home-1-on'] == 1)
    {
       $img_home1 = "<img src='".$envischool['img-home1']['url']."' alt='Tư vấn môi trường' class='img_404 img-responsive'>" ;
    }
    if($envischool['home-2-on'] == 1)
    {
      $img_home2 = "<img src='".$envischool['img-home2']['url']."' alt='Bảo vệ môi trường' class='img_home2 img-responsive'>" ;
    }
    if($envischool['home-404-on'] == 1)
    {
      $img_home3 = "<img src='".$envischool['img-home-404']['url']."' alt='Không tìm thấy 404' class='img_404 img-responsive'>" ;
    }
  }
  $array = array($img_home1,$img_home2,$img_home3);
  return $array;
}
function entertainment_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Sidebar Single', 'entertainment' ),
    'id'            => 'side_single',
    'description'   => __( 'Các bài tin tức liên quan trong bài viết chi tiết.', 'entertainment' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Sidebar Footer', 'entertainment' ),
    'id'            => 'side_footer',
    'description'   => __( 'Các danh mục bài dưới footer.', 'entertainment' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );

  register_sidebar( array(
    'name'          => __( 'List Service', 'entertainment' ),
    'id'            => 'sidebar_service',
    'description'   => __( 'Các danh sách dịch vụ liên quan khás.', 'entertainment' ),
    'before_widget' => '<section id="%1$s" class="list_product %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<div class="widget-service">',
    'after_title'   => '</div>',
  ) );
}
add_action( 'widgets_init', 'entertainment_widgets_init' );
/**
 * Adds custom classes to the array of body classes.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function entertainment_body_classes( $classes ) {
  // Adds a class of custom-background-image to sites with a custom background image.
  if ( get_background_image() ) {
    $classes[] = 'custom-background-image';
  }

  // Adds a class of group-blog to sites with more than 1 published author.
  if ( is_multi_author() ) {
    $classes[] = 'group-blog';
  }

  // Adds a class of no-sidebar to sites without active sidebar.
  if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    $classes[] = 'no-sidebar';
  }

  // Adds a class of hfeed to non-singular pages.
  if ( ! is_singular() ) {
    $classes[] = 'hfeed';
  }

  return $classes;
}
add_filter( 'body_class', 'entertainment_body_classes' );

/**
 * Converts a HEX value to RGB.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $color The original color, in 3- or 6-digit hexadecimal form.
 * @return array Array containing RGB (red, green, and blue) values for the given
 *               HEX code, empty array otherwise.
 */
function entertainment_hex2rgb( $color ) {
  $color = trim( $color, '#' );

  if ( strlen( $color ) === 3 ) {
    $r = hexdec( substr( $color, 0, 1 ).substr( $color, 0, 1 ) );
    $g = hexdec( substr( $color, 1, 1 ).substr( $color, 1, 1 ) );
    $b = hexdec( substr( $color, 2, 1 ).substr( $color, 2, 1 ) );
  } else if ( strlen( $color ) === 6 ) {
    $r = hexdec( substr( $color, 0, 2 ) );
    $g = hexdec( substr( $color, 2, 2 ) );
    $b = hexdec( substr( $color, 4, 2 ) );
  } else {
    return array();
  }

  return array( 'red' => $r, 'green' => $g, 'blue' => $b );
}
/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function entertainment_content_image_sizes_attr( $sizes, $size ) {
  $width = $size[0];

  840 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';

  if ( 'page' === get_post_type() ) {
    840 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
  } else {
    840 > $width && 600 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
    600 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
  }

  return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'entertainment_content_image_sizes_attr', 10 , 2 );
/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $attr Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
 */
function entertainment_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
  if ( 'post-thumbnail' === $size ) {
    is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
    ! is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
  }
  return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'entertainment_post_thumbnail_sizes_attr', 10 , 3 );
/**
 * Modifies tag cloud widget arguments to have all tags in the widget same font size.
 *
 * @since Twenty Sixteen 1.1
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array A new modified arguments.
 */
function entertainment_widget_tag_cloud_args( $args ) {
  $args['largest'] = 1;
  $args['smallest'] = 1;
  $args['unit'] = 'em';
  return $args;
}
add_filter( 'widget_tag_cloud_args', 'entertainment_widget_tag_cloud_args' );



function excerpt($limit){
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
  array_pop($excerpt);
  $excerpt = implode(" ",$excerpt).'...';
  } else {
  $excerpt = implode(" ",$excerpt);
  } 
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
  }
  function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
  array_pop($content);
  $content = implode(" ",$content).'...';
  } else {
  $content = implode(" ",$content);
  } 
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
    return $content;
}

//Create my Widget ===========================================================================

add_action('widgets_init', 'theme_register_widgets');

function theme_register_widgets()
{
    register_widget('recent_news');

}


/****************************/
/****** Recent News *****/
/****************************/
class recent_news extends WP_Widget
{


   public function __construct()
    {
        $widget_ops = array('classname' => 'widgetnews');
        parent::__construct( 'recent_news', 'Tin liên quan', $widget_ops );

    }
   public  function form($instance)
    {
      $default = array(
        'quantity' => '',
        'title' => ''
        );
      $instance = wp_parse_args( $instance,$default);
      $quantity = esc_attr($instance["quantity"] );
      $title = esc_attr($instance["title"] );
        ?>
      <!--title-->
          <p>
              Nhập Tiêu Đề
              <input type="text" class="widefat" name="<?php echo $this->get_field_name('title'); ?>"
              value="<?php if(!empty($instance['title'])):echo $title; endif; ?>" >
          </p>
        <!--quantity-->
        <p>
            <label for="<?php echo $this->get_field_id('quantity'); ?>"><?php _e('Số lượng bài viết', 'environment'); ?></label><br/>
            <input type="number" name="<?php echo $this->get_field_name('quantity'); ?>"
                   id="<?php echo $this->get_field_id('quantity'); ?>" value="<?php if( !empty($instance['quantity']) ): echo $quantity; endif; ?>"
                   class="widefat"/>
        </p>
    <?php
    }
  public  function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['quantity'] = strip_tags($new_instance['quantity']);
        $instance['title'] = strip_tags($new_instance['title']);
        return $instance;
    }
   public function widget($args, $instance)
    {

    extract($args);
    $quantity=$instance['quantity'];
    $title = apply_filters( 'widget_title', $instance['title'] );
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; 
        echo $before_widget;
        echo "<p class='widget_title'>".$title."</p>";
           $list = array(
          "post_type" => get_post_type(),
          "posts_per_page" => $quantity,
          "orderby"  => "rand",  
           );
           $query =new WP_Query($list);
           if($query->have_posts())
           {
            $i = 0;
            while($query->have_posts())
            {
              $query->the_post();
              $i++;
              if($i == 1)
              {
        ?>
        <div class="representative">
              <a href="<?php the_permalink()?>" title="<?php the_title(); ?>">
                <?php the_post_thumbnail(); ?>
              </a>
              <h3 class="h3_representative">
                <a href="<?php the_permalink()?>"><?php the_title(); ?></a>
              </h3>
              <div class="info_post">
                <span><?php the_author()?></span>
                <span><?php echo ' - '.get_the_date("M d, Y")?></span>
              </div>
              <p><?php echo excerpt(36) ?></p>
        </div>
        <?php
              }
              else{
        ?>
        <div class="sidebar_single">
            <div class="img_sidebar">
              <a href="<?php the_permalink()?>" title="<?php the_title(); ?>">
                <?php the_post_thumbnail(array(100,90)); ?>
              </a>
            </div>
            <div class="title_sidebar">
              <h3 class="title_post">
                <a href="<?php the_permalink()?>"><?php the_title(); ?></a>
              </h3>
              <span><?php echo get_the_date("M d, Y")?></span>
            </div>
        </div>
        <?php
                }
            }
           }
        ?>
        <?php
        echo $after_widget;
    }
} // End class


//Custom taxonomy template
add_action( 'pre_get_posts', 'pagination_taxonomy' );
function pagination_taxonomy($q) {
    if( !is_admin() && $q->is_main_query() && $q->is_tax( 'tu-van-moi-truong') ) {
       $q->set( 'posts_per_page', 5 );
       $q->set( 'order', 'ASC' );
    }
    if( !is_admin() && $q->is_main_query() && $q->is_tax( 'tu-van-an-toan-lao-dong') ) {
       $q->set( 'posts_per_page', 5 );
       $q->set( 'order', 'ASC' );
    }
    if( !is_admin() && $q->is_main_query() && $q->is_tax( 'tong-hop-thiet-bi') ) {
       $q->set( 'posts_per_page', 5 );
       $q->set( 'order', 'ASC' );
    }
    if( !is_admin() && $q->is_main_query() && $q->is_tax( 'tong-hop-thiet-ke') ) {
       $q->set( 'posts_per_page', 5 );
       $q->set( 'order', 'ASC' );
    }
}

