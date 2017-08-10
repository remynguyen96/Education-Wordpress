<?php
/**
 * golf functions and definitions
 * @package WordPress
 * @since golf 1.0
 */
/**
 * golf only works in WordPress 4.4 or later.
 */
 define("url", get_template_directory_uri());
 define("golf", get_template_directory());
 require_once(golf."/core/init.php");
if ( ! function_exists( 'golf_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * Create your own golf_setup() function to override in a child theme.
 *
 * @since golf 1.0
 */
function golf_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/golf
	 * If you're building a theme based on golf, use a find and replace
	 * to change 'golf' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'golf' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for custom logo.
	 *
	 *  @since golf 1.2
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

    add_image_size('awards', 280, 120,true);

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'header' => __( 'Header Menu', 'golf' ),
		'footer'  => __( 'Footer Menu', 'golf' ),
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

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
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
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', golf_fonts_url() ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // golf_setup
add_action( 'after_setup_theme', 'golf_setup' );

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @since golf 1.0
 */
function golf_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'golf_content_width', 840 );
}
add_action( 'after_setup_theme', 'golf_content_width', 0 );

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since golf 1.0
 */
function golf_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'golf' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'golf' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 1', 'golf' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'golf' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 2', 'golf' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'golf' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'golf_widgets_init' );
//
function Service()
{
  global $golf;
  if(!$golf["service-introduce"])
  {
    $service1 =  $golf["service-introduce1"];
    $service2 =  $golf["service-introduce2"];
    $service3 =  $golf["service-introduce3"];
  }
  return $list = array($service1,$service2,$service3);
}
function Introduce1()
{
  global $golf;
  if(!$golf["header-introduce1"])
  {
    $introduce1 = $golf["text-introduce1-1"];
    $introduce2  = $golf["text-introduce1-2"];
  }
  return $list = array($introduce1,$introduce2);
}
function Introduce2()
{
  global $golf;
  if(!$golf["header-introduce1"])
  {
    $introduce1 =  $golf["text-introduce2"];
    $introduce2  = $golf["text-introduce3"];
    $introduce3  = $golf["text-introduce4"];
    $introduce4  = $golf["text-introduce5"];
    $introduce5  = $golf["text-introduce6"];
  }
  return $list = array($introduce1,$introduce2,$introduce3,$introduce4,$introduce5);
}
function Introduce3()
{
  global $golf;
  if(!$golf["header-introduce7"])
  {
    $introduce1 =  $golf["text-introduce7-1"];
    $introduce2 =  $golf["text-introduce7-2"];
  }
  return $list = array($introduce1,$introduce2);
}
function Introduce4()
{
  global $golf;
  if(!$golf["header-introduce8"])
  {
    $introduce1 =  $golf["text-introduce8"];
  }
  return $introduce1;
}
function Introduce5()
{
  global $golf;
  if(!$golf["header-introduce9"])
  {
    $introduce1 =  $golf["text-introduce9-1"];
    $introduce2 =  $golf["text-introduce9-2"];
  }
  return $list = array($introduce1,$introduce2);
}
// social
function Link_Social()
{
  global $golf;
  if(!$golf["social-network"])
  {
    $link1 = $golf["facebook-api"];
    $link2 = $golf["twitter-api"];
    $link3 = $golf["google-api"];
    $link4 = $golf["linkedin-api"];
    $link5 = $golf["paypal-api"];
  }
  return $list = array($link1,$link2,$link3,$link4,$link5);
}


function a_download(){
    global $golf;
    if(!$golf["download_guide"])
   {
       return $a_download ='<div id="download_a" class="hide">'.$golf['a-download'].'</div>';
   }
}
function courses_golf(){
    global $golf;
    if(!$golf["courses_golf"])
   {
       $courses_golf =$golf['div_courses_golf'];
       $img_golf =$golf['img_banner_page']['url'];
   }
   return array($courses_golf,$img_golf);
}
function img_download(){
    global $golf;
    if(!$golf["download_guide"])
   {
       return $img_download = $golf['img-download']['url'];
   }
}
function Slider_Header()
{
  global $golf;
   if(!$golf["slider-header"])
  {
    if($golf['SLIDER1-on'] == 1)
    {
       $img1 = "<div class='item'><img src='".$golf['slider-image1']['url']."' alt='Slider1 Golf' class='w100 img-responsive'></div>" ;
    }
    if($golf['SLIDER2-on'] == 1)
    {
      $img2 = "<div class='item'><img src='".$golf['slider-image2']['url']."' alt='Slider2 Golf' class='w100 img-responsive'></div>" ;
    }
    if($golf['SLIDER3-on'] == 1)
    {
      $img3 = "<div class='item'><img src='".$golf['slider-image3']['url']."' alt='Slider3 Golf' class='w100 img-responsive'></div>" ;
    }
    if($golf['SLIDER4-on'] == 1)
    {
       $img4 = "<div class='item'><img src='".$golf['slider-image4']['url']."' alt='Slider4 Golf' class='w100 img-responsive'></div>" ;
    }
    if($golf['SLIDER5-on'] == 1)
    {
       $img5 = "<div class='item'><img src='".$golf['slider-image5']['url']."' alt='Slider5 Golf' class='w100 img-responsive'></div>" ;
    }
    if($golf['SLIDER6-on'] == 1)
    {
       $img6 = "<div class='item'><img src='".$golf['slider-image6']['url']."' alt='Slider6 Golf' class='w100 img-responsive'></div>" ;
    }
    if($golf['SLIDER7-on'] == 1)
    {
       $img7 = "<div class='item'><img src='".$golf['slider-image7']['url']."' alt='Slider7 Golf' class='w100 img-responsive'></div>" ;
    }
    if($golf['SLIDER8-on'] == 1)
    {
       $img8 = "<div class='item'><img src='".$golf['slider-image8']['url']."' alt='Slider8 Golf' class='w100 img-responsive'></div>" ;
    }
    if($golf['SLIDER9-on'] == 1)
    {
       $img9 = "<div class='item'><img src='".$golf['slider-image9']['url']."' alt='Slider9 Golf' class='w100 img-responsive'></div>" ;
    }
    if($golf['SLIDER10-on'] == 1)
    {
       $img10 = "<div class='item'><img src='".$golf['slider-image10']['url']."' alt='Slider10 Golf' class='w100 img-responsive'></div>" ;
    }
  }
  $array = array($img1,$img2,$img3,$img4,$img5,$img6,$img7,$img8,$img9,$img10);
  return $array;
}


// Slider Partners
function Slider_Partner()
{
  global $golf;
   if(!$golf["slider-footer"])
  {
    if($golf['partner_1'] == 1)
    {
       $img1 = "<div class='item'><img src='".$golf['slider-partner1']['url']."' alt='Slider Partners Golf' class='img-responsive'></div>" ;
    }
    if($golf['partner_2'] == 1)
    {
      $img2 = "<div class='item'><img src='".$golf['slider-partner2']['url']."' alt='Slider Partners Golf' class='img-responsive'></div>" ;
    }
    if($golf['partner_3'] == 1)
    {
      $img3 = "<div class='item'><img src='".$golf['slider-partner3']['url']."' alt='Slider Partners Golf' class='img-responsive'></div>" ;
    }
    if($golf['partner_4'] == 1)
    {
       $img4 = "<div class='item'><img src='".$golf['slider-partner4']['url']."' alt='Slider Partners Golf' class='img-responsive'></div>" ;
    }
    if($golf['partner_5'] == 1)
    {
       $img5 = "<div class='item'><img src='".$golf['slider-partner5']['url']."' alt='Slider Partners Golf' class='img-responsive'></div>" ;
    }
    if($golf['partner_6'] == 1)
    {
       $img6 = "<div class='item'><img src='".$golf['slider-partner6']['url']."' alt='Slider Partners Golf' class='img-responsive'></div>" ;
    }
    if($golf['partner_7'] == 1)
    {
       $img7 = "<div class='item'><img src='".$golf['slider-partner7']['url']."' alt='Slider Partners Golf' class='img-responsive'></div>" ;
    }
    if($golf['partner_8'] == 1)
    {
       $img8 = "<div class='item'><img src='".$golf['slider-partner8']['url']."' alt='Slider Partners Golf' class='img-responsive'></div>" ;
    }
    if($golf['partner_9'] == 1)
    {
       $img9 = "<div class='item'><img src='".$golf['slider-partner9']['url']."' alt='Slider Partners Golf' class='img-responsive'></div>" ;
    }
    if($golf['partner_10'] == 1)
    {
       $img10 = "<div class='item'><img src='".$golf['slider-partner10']['url']."' alt='Slider Partners Golf' class='img-responsive'></div>" ;
    }
  }
  $array = array($img1,$img2,$img3,$img4,$img5,$img6,$img7,$img8,$img9,$img10);
  return $array;
}
// All Images Home
function Img_home()
{
  global $golf;
   if(!$golf["img-home"])
  {
    if($golf['home1'] == 1)
    {
       $img_home1 = "<img src='".$golf['img-home1']['url']."' alt='Create Your Trip' class='img-responsive'>" ;
    }
    if($golf['home2'] == 1)
    {
       $img_home2 = "<img src='".$golf['img-home2']['url']."' alt='Golf Holidays' class='img-responsive'>" ;
    }
    if($golf['home3'] == 1)
    {
       $img_home3 = "<img src='".$golf['img-home3']['url']."' alt='Book Your Teetimes' class='img-responsive'>" ;
    }
    if($golf['home4'] == 1)
    {
       $img_home4 = "<img src='".$golf['img-home4']['url']."' alt='Images Home Middle' class='img-responsive'>" ;
    }
    if($golf['home6'] == 1)
    {
       $img_home5 = "<img src='".$golf['img-home6']['url']."' alt='Images Home Footer' class='img-responsive'>" ;
    }
  }
  $array = array($img_home1,$img_home2,$img_home3,$img_home4,$img_home5);
  return $array;
}
function Img_Create_Trip()
{
  global $golf;
   if(!$golf["img-create-trip"])
  {
    if($golf['show-img-create-trip1'] == 1)
    {
       $img_home1 = $golf['up-img-create-trip1']['url'];
    }
    if($golf['show-img-create-trip2'] == 1)
    {
       $img_home2 = $golf['up-img-create-trip2']['url'];
    }
    if($golf['show-img-create-trip3'] == 1)
    {
       $img_home3 = $golf['up-img-create-trip3']['url'];
    }
  }
  $array = array($img_home1,$img_home2,$img_home3);
  return $array;
}
function Img_All_Btn()
{
  global $golf;
   if(!$golf["img-all-button-btn"])
  {
       $img_home1 = $golf['up-img-btn-viemore1']['url'];
       $img_home2 = $golf['up-img-btn-viemore2']['url'];
       $img_home3 = $golf['up-img-btn-viemore5']['url'];
       $img_home4 = $golf['up-img-btn-submit1']['url'];
       $img_home5 = $golf['up-img-btn-submit2']['url'];
  }
  $array = array($img_home1,$img_home2,$img_home3,$img_home4,$img_home5);
  return $array;
}

function Top_World1()
{
  global $golf;
   if(!$golf["top_golf_world1"])
  {
       $img_home1 = $golf['title_top_world1'];
       $img_home2 = $golf['number_top_world1'];
       $img_home3 = $golf['content_top_world1'];
       $img_home4 = $golf['img_top_world1']['url'];
       $img_home5 = $golf['link_top_world1'];
  }
  $array = array($img_home1,$img_home2,$img_home3,$img_home4,$img_home5);
  return $array;
}
function Top_World2()
{
  global $golf;
   if(!$golf["top_golf_world2"])
  {
       $img_home1 = $golf['title_top_world2'];
       $img_home2 = $golf['number_top_world2'];
       $img_home3 = $golf['content_top_world2'];
       $img_home4 = $golf['img_top_world2']['url'];
       $img_home5 = $golf['link_top_world2'];
  }
  $array = array($img_home1,$img_home2,$img_home3,$img_home4,$img_home5);
  return $array;
}
function Top_World3()
{
  global $golf;
   if(!$golf["top_golf_world3"])
  {
       $img_home1 = $golf['title_top_world3'];
       $img_home2 = $golf['number_top_world3'];
       $img_home3 = $golf['content_top_world3'];
       $img_home4 = $golf['img_top_world3']['url'];
       $img_home5 = $golf['link_top_world3'];
  }
  $array = array($img_home1,$img_home2,$img_home3,$img_home4,$img_home5);
  return $array;
}





if ( ! function_exists( 'golf_fonts_url' ) ) :
/**
 * Register Google fonts for golf.
 *
 * Create your own golf_fonts_url() function to override in a child theme.
 *
 * @since golf 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function golf_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Merriweather font: on or off', 'golf' ) ) {
		$fonts[] = 'Merriweather:400,700,900,400italic,700italic,900italic';
	}

	/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'golf' ) ) {
		$fonts[] = 'Montserrat:400,700';
	}

	/* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'golf' ) ) {
		$fonts[] = 'Inconsolata:400';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since golf 1.0
 */
function golf_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'golf_javascript_detection', 0 );

/**
 * Enqueues scripts and styles.
 *
 * @since golf 1.0
 */
function golf_scripts() {
	// Add custom fonts, used in the main stylesheet.
	// wp_enqueue_style( 'golf-fonts', golf_fonts_url(), array(), null );
    // Load All Css
    wp_enqueue_style( 'golf-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array( 'golf-style' ), '20160816' );
    wp_enqueue_style("font_1","https://fonts.googleapis.com/css?family=Roboto+Condensed",array(),"1.0");
    wp_enqueue_style("font_2","https://fonts.googleapis.com/css?family=Open+Sans",array(),"1.0");
    wp_enqueue_style( 'golf-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array( 'golf-style' ), '20160816' );
    wp_enqueue_style( 'css-slider', get_template_directory_uri() . '/css/owl.carousel.css', array( 'golf-style' ), '20160816' );
    wp_enqueue_style( 'css-light-box', get_template_directory_uri() . '/css/lightbox.min.css', array( 'golf-style' ), '20160816' );
    wp_enqueue_style( 'golf-style', get_stylesheet_uri() );


	// Load js
    wp_enqueue_script( 'js_bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '20160816', true );
    wp_enqueue_script( 'js-slider', get_template_directory_uri() . '/js/owl.carousel.min.js', array( 'jquery' ), '20160816', true );
    wp_enqueue_script( 'js-light-box', get_template_directory_uri() . '/js/lightbox.min.js', array( 'jquery' ), '20160816', true );
	wp_enqueue_script( 'golf-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20160816', true );




	wp_localize_script( 'golf-script', 'screenReaderText', array(
		'expand'   => __( 'expand child menu', 'golf' ),
		'collapse' => __( 'collapse child menu', 'golf' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'golf_scripts' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @since golf 1.0
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function golf_body_classes( $classes ) {
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
add_filter( 'body_class', 'golf_body_classes' );

/**
 * Converts a HEX value to RGB.
 *
 * @since golf 1.0
 *
 * @param string $color The original color, in 3- or 6-digit hexadecimal form.
 * @return array Array containing RGB (red, green, and blue) values for the given
 *               HEX code, empty array otherwise.
 */
function golf_hex2rgb( $color ) {
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
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function golf_content_image_sizes_attr( $sizes, $size ) {
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
add_filter( 'wp_calculate_image_sizes', 'golf_content_image_sizes_attr', 10 , 2 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @since golf 1.0
 *
 * @param array $attr Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
 */
function golf_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( 'post-thumbnail' === $size ) {
		is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
		! is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
	}
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'golf_post_thumbnail_sizes_attr', 10 , 3 );

/**
 * Modifies tag cloud widget arguments to have all tags in the widget same font size.
 *
 * @since golf 1.1
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array A new modified arguments.
 */
function golf_widget_tag_cloud_args( $args ) {
	$args['largest'] = 1;
	$args['smallest'] = 1;
	$args['unit'] = 'em';
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'golf_widget_tag_cloud_args' );


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
function Limit_String($number,$string){
        // $string = strip_tags($string);
        if (strlen($string) > $number) {
            // truncate string
            $stringCut = substr($string, 0, $number);
            // make sure it ends in a word so assassinate doesn't become ass...
            $string = substr($stringCut, 0, strrpos($stringCut, ' ')).' .....';
        }
        echo $string;
}

//
// function icon1(){
//     $url = url."/img/icon/car.png";
//     echo '<img src="'.$url.'" alt="Icon Car" class="icon_single">';
// }
// add_shortcode('icon_car', 'icon1');
// function icon2(){
//     $url = url."/img/icon/coffee.png";
//     echo '<img src="'.$url.'" alt="Icon coffee" class="icon_single">';
// }
// add_shortcode('icon_coffee', 'icon2');
// function icon3(){
//     $url = url."/img/icon/dinner.png";
//     echo '<img src="'.$url.'" alt="Icon dinner" class="icon_single">';
// }
// add_shortcode('icon_dinner', 'icon3');
// function icon4(){
//     $url = url."/img/icon/house.png";
//     echo '<img src="'.$url.'" alt="Icon house" class="icon_single">';
// }
// add_shortcode('icon_house', 'icon4');
// function icon5(){
//     $url = url."/img/icon/place.png";
//     echo '<img src="'.$url.'" alt="Icon place" class="icon_single">';
// }
// add_shortcode('icon_place', 'icon5');
