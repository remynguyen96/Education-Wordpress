<?php
require_once(get_template_directory()."/core/init.php");
if ( ! function_exists( 'tranhtheu_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * Create your own tranhtheu_setup() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 */
function tranhtheu_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/tranhtheu
	 * If you're building a theme based on Twenty Sixteen, use a find and replace
	 * to change 'tranhtheu' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'tranhtheu' );

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
	 *  @since Twenty Sixteen 1.2
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

    add_image_size( 'product', 320, 200,true);
    add_image_size( 'tip_news', 360, 260,true);
    add_image_size( 'home_news', 410, 250,true);
    add_image_size( 'home_product', 650,350,true);
    add_image_size( 'slider_home', 650,350,true);

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'header' => __( 'Header Menu', 'tranhtheu' ),
		'footer'  => __( 'Footer Menu', 'tranhtheu' ),
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
	add_editor_style( array( 'css/editor-style.css', tranhtheu_fonts_url() ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // tranhtheu_setup
add_action( 'after_setup_theme', 'tranhtheu_setup' );

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @since Twenty Sixteen 1.0
 */
function tranhtheu_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tranhtheu_content_width', 840 );
}
add_action( 'after_setup_theme', 'tranhtheu_content_width', 0 );

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Twenty Sixteen 1.0
 */
function tranhtheu_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'tranhtheu' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'tranhtheu' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 1', 'tranhtheu' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'tranhtheu' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 2', 'tranhtheu' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'tranhtheu' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'tranhtheu_widgets_init' );


function Introduce_home()
{
    global $tranhtheu;
    if(!$tranhtheu["info_home"])
    {
      echo  $tranhtheu["info_text_home"];
    }
}
function Introduce_footer()
{
  global $tranhtheu;
  if(!$tranhtheu["info_footer"])
  {
    $introduce1 =  $tranhtheu["info_text_1"];
    $introduce2 =  $tranhtheu["info_text_2"];
    $introduce3 =  $tranhtheu["info_text_3"];
    $introduce4 =  $tranhtheu["info_text_4"];
  }
  return $list = array($introduce1,$introduce2,$introduce3,$introduce4);
}
function Slider_Header()
{
  global $tranhtheu;
   if(!$tranhtheu["slider-header"])
  {
    if($tranhtheu['SLIDER1-on'] == 1)
    {
       $img1 = "<div class='item'><img src='".$tranhtheu['slider-image1']['url']."' alt='Hình ảnh trang thêu Hải Yến' class='w100 img-responsive'></div>" ;
    }
    if($tranhtheu['SLIDER2-on'] == 1)
    {
      $img2 = "<div class='item'><img src='".$tranhtheu['slider-image2']['url']."' alt='Hình ảnh trang thêu Hải Yến' class='w100 img-responsive'></div>" ;
    }
    if($tranhtheu['SLIDER3-on'] == 1)
    {
      $img3 = "<div class='item'><img src='".$tranhtheu['slider-image3']['url']."' alt='Hình ảnh trang thêu Hải Yến' class='w100 img-responsive'></div>" ;
    }
    if($tranhtheu['SLIDER4-on'] == 1)
    {
       $img4 = "<div class='item'><img src='".$tranhtheu['slider-image4']['url']."' alt='Hình ảnh trang thêu Hải Yến' class='w100 img-responsive'></div>" ;
    }
    if($tranhtheu['SLIDER5-on'] == 1)
    {
       $img5 = "<div class='item'><img src='".$tranhtheu['slider-image5']['url']."' alt='Hình ảnh trang thêu Hải Yến' class='w100 img-responsive'></div>" ;
    }
    if($tranhtheu['SLIDER6-on'] == 1)
    {
       $img6 = "<div class='item'><img src='".$tranhtheu['slider-image6']['url']."' alt='Hình ảnh trang thêu Hải Yến' class='w100 img-responsive'></div>" ;
    }
    if($tranhtheu['SLIDER7-on'] == 1)
    {
       $img7 = "<div class='item'><img src='".$tranhtheu['slider-image7']['url']."' alt='Hình ảnh trang thêu Hải Yến' class='w100 img-responsive'></div>" ;
    }
    if($tranhtheu['SLIDER8-on'] == 1)
    {
       $img8 = "<div class='item'><img src='".$tranhtheu['slider-image8']['url']."' alt='Hình ảnh trang thêu Hải Yến' class='w100 img-responsive'></div>" ;
    }
  }
  $array = array($img1,$img2,$img3,$img4,$img5,$img6,$img7,$img8);
  return $array;
}
function Slider_Header2()
{
  global $tranhtheu;
   if(!$tranhtheu["slider-header2"])
  {
    if($tranhtheu['SLIDER12-on'] == 1)
    {
       $img1 = "<div class='item'><img src='".$tranhtheu['slider-image12']['url']."' alt='Hình ảnh trang thêu Hải Yến' class='w100 img-responsive'></div>" ;
    }
    if($tranhtheu['SLIDER22-on'] == 1)
    {
      $img2 = "<div class='item'><img src='".$tranhtheu['slider-image22']['url']."' alt='Hình ảnh trang thêu Hải Yến' class='w100 img-responsive'></div>" ;
    }
    if($tranhtheu['SLIDER32-on'] == 1)
    {
      $img3 = "<div class='item'><img src='".$tranhtheu['slider-image32']['url']."' alt='Hình ảnh trang thêu Hải Yến' class='w100 img-responsive'></div>" ;
    }
    if($tranhtheu['SLIDER42-on'] == 1)
    {
       $img4 = "<div class='item'><img src='".$tranhtheu['slider-image42']['url']."' alt='Hình ảnh trang thêu Hải Yến' class='w100 img-responsive'></div>" ;
    }
    if($tranhtheu['SLIDER52-on'] == 1)
    {
       $img5 = "<div class='item'><img src='".$tranhtheu['slider-image52']['url']."' alt='Hình ảnh trang thêu Hải Yến' class='w100 img-responsive'></div>" ;
    }
    if($tranhtheu['SLIDER62-on'] == 1)
    {
       $img6 = "<div class='item'><img src='".$tranhtheu['slider-image62']['url']."' alt='Hình ảnh trang thêu Hải Yến' class='w100 img-responsive'></div>" ;
    }
    if($tranhtheu['SLIDER72-on'] == 1)
    {
       $img7 = "<div class='item'><img src='".$tranhtheu['slider-image72']['url']."' alt='Hình ảnh trang thêu Hải Yến' class='w100 img-responsive'></div>" ;
    }
    if($tranhtheu['SLIDER82-on'] == 1)
    {
       $img8 = "<div class='item'><img src='".$tranhtheu['slider-image82']['url']."' alt='Hình ảnh trang thêu Hải Yến' class='w100 img-responsive'></div>" ;
    }
  }
  $array = array($img1,$img2,$img3,$img4,$img5,$img6,$img7,$img8);
  return $array;
}
function Slider_Header3()
{
  global $tranhtheu;
   if(!$tranhtheu["slider-header3"])
  {
    if($tranhtheu['SLIDER13-on'] == 1)
    {
       $img1 = "<div class='item'><img src='".$tranhtheu['slider-image13']['url']."' alt='Hình ảnh trang thêu Hải Yến' class='w100 img-responsive'></div>" ;
    }
    if($tranhtheu['SLIDER23-on'] == 1)
    {
      $img2 = "<div class='item'><img src='".$tranhtheu['slider-image23']['url']."' alt='Hình ảnh trang thêu Hải Yến' class='w100 img-responsive'></div>" ;
    }
    if($tranhtheu['SLIDER33-on'] == 1)
    {
      $img3 = "<div class='item'><img src='".$tranhtheu['slider-image33']['url']."' alt='Hình ảnh trang thêu Hải Yến' class='w100 img-responsive'></div>" ;
    }
    if($tranhtheu['SLIDER43-on'] == 1)
    {
       $img4 = "<div class='item'><img src='".$tranhtheu['slider-image43']['url']."' alt='Hình ảnh trang thêu Hải Yến' class='w100 img-responsive'></div>" ;
    }
    if($tranhtheu['SLIDER53-on'] == 1)
    {
       $img5 = "<div class='item'><img src='".$tranhtheu['slider-image53']['url']."' alt='Hình ảnh trang thêu Hải Yến' class='w100 img-responsive'></div>" ;
    }
    if($tranhtheu['SLIDER63-on'] == 1)
    {
       $img6 = "<div class='item'><img src='".$tranhtheu['slider-image63']['url']."' alt='Hình ảnh trang thêu Hải Yến' class='w100 img-responsive'></div>" ;
    }
    if($tranhtheu['SLIDER73-on'] == 1)
    {
       $img7 = "<div class='item'><img src='".$tranhtheu['slider-image73']['url']."' alt='Hình ảnh trang thêu Hải Yến' class='w100 img-responsive'></div>" ;
    }
    if($tranhtheu['SLIDER83-on'] == 1)
    {
       $img8 = "<div class='item'><img src='".$tranhtheu['slider-image83']['url']."' alt='Hình ảnh trang thêu Hải Yến' class='w100 img-responsive'></div>" ;
    }
  }
  $array = array($img1,$img2,$img3,$img4,$img5,$img6,$img7,$img8);
  return $array;
}

if ( ! function_exists( 'tranhtheu_fonts_url' ) ) :
/**
 * Register Google fonts for Twenty Sixteen.
 *
 * Create your own tranhtheu_fonts_url() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function tranhtheu_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Merriweather font: on or off', 'tranhtheu' ) ) {
		$fonts[] = 'Merriweather:400,700,900,400italic,700italic,900italic';
	}

	/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'tranhtheu' ) ) {
		$fonts[] = 'Montserrat:400,700';
	}

	/* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'tranhtheu' ) ) {
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
 * @since Twenty Sixteen 1.0
 */
function tranhtheu_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'tranhtheu_javascript_detection', 0 );

/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Sixteen 1.0
 */
function tranhtheu_scripts() {

	// Add Genericons, used in the main stylesheet.
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.4.1' );
 	wp_enqueue_style( 'font-text', 'https://fonts.googleapis.com/css?family=Roboto+Condensed', array(), '3.4.1' );
	wp_enqueue_style( 'font-icon', get_template_directory_uri() . '/css/elusive-icons.min.css', array(), '3.4.1' );
	wp_enqueue_style( 'carousel-css', get_template_directory_uri() . '/css/owl.carousel.css', array(), '3.4.1' );
	wp_enqueue_style( 'carousel-theme', get_template_directory_uri() . '/css/owl.theme.css', array(), '3.4.1' );
	wp_enqueue_style( 'carousel-transitions', get_template_directory_uri() . '/css/owl.transitions.css', array(), '3.4.1' );
	wp_enqueue_style( 'zoom-css', get_template_directory_uri() . '/css/zoom.css', array(), '3.4.1' );
	// Theme stylesheet.
	wp_enqueue_style( 'tranhtheu-style', get_stylesheet_uri() );




	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '20160816', true );
	wp_enqueue_script( 'carousel-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array( 'jquery' ), '20160816', true );
	wp_enqueue_script( 'zoom-js', get_template_directory_uri() . '/js/zoom.js', array( 'jquery' ), '20160816', true );
	wp_enqueue_script( 'functions', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20160816', true );
	wp_localize_script( 'tranhtheu-script', 'screenReaderText', array(
		'expand'   => __( 'expand child menu', 'tranhtheu' ),
		'collapse' => __( 'collapse child menu', 'tranhtheu' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'tranhtheu_scripts' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function tranhtheu_body_classes( $classes ) {
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
add_filter( 'body_class', 'tranhtheu_body_classes' );

/**
 * Converts a HEX value to RGB.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $color The original color, in 3- or 6-digit hexadecimal form.
 * @return array Array containing RGB (red, green, and blue) values for the given
 *               HEX code, empty array otherwise.
 */
function tranhtheu_hex2rgb( $color ) {
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
 * Custom template tags for this theme.
 */

/**
 * Customizer additions.
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
function tranhtheu_content_image_sizes_attr( $sizes, $size ) {
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
add_filter( 'wp_calculate_image_sizes', 'tranhtheu_content_image_sizes_attr', 10 , 2 );

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
function tranhtheu_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( 'post-thumbnail' === $size ) {
		is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
		! is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
	}
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'tranhtheu_post_thumbnail_sizes_attr', 10 , 3 );

/**
 * Modifies tag cloud widget arguments to have all tags in the widget same font size.
 *
 * @since Twenty Sixteen 1.1
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array A new modified arguments.
 */
function tranhtheu_widget_tag_cloud_args( $args ) {
	$args['largest'] = 1;
	$args['smallest'] = 1;
	$args['unit'] = 'em';
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'tranhtheu_widget_tag_cloud_args' );
