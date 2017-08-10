<?php  
define("car", get_template_directory());
define("url", get_template_directory_uri());
get_template_part("init/widget");
function CssAndJs()
{
	wp_enqueue_style("font","http://fonts.googleapis.com/css?family=Open%20Sans",array(),"1.0");
	wp_enqueue_style("icon","http://hyundai-tienphong.com.vn/Content/font-awesome/css/font-awesome.min.css",array(),"1.0");
	wp_enqueue_style("bootstrap_css",url."/css/bootstrap.css",array(),"1.0");
	wp_enqueue_style("style",get_stylesheet_uri());

	wp_enqueue_script("bootstrap_js",url."/js/bootstrap.min.js",array("jquery"),true);
	wp_enqueue_script("number",url."/js/autoNumeric.js",array("jquery"),true);
}
add_action("wp_enqueue_scripts","CssAndJs");
//function set up theme
if(!function_exists("setup_theme_car"))
{
	function setup_theme_car()
	{
		// auto add link rss over head 
		add_theme_support("automatic-feed-links");
		// add post thumbnail (set feature images)
		add_theme_support( "post-thumbnails");
		// add post format
		add_theme_support("post-formats",array(
			"image",
			"video",
			"gallery",
			"quote",
			"link"
		)); 
		// add title-tag
		add_theme_support("title-tag");
		// Add custom background
		$default_background = array(
			"default-color" => "#6FB7FF"
		);
		add_theme_support("custom-background",$default_background);
		// Add menu
		register_nav_menu( "menu-car" , __("Menu car", "car") );
		// Add sidebar
		$sidebar = array(
			"name" => __("car Sidebar","car"),
			"id" => "car_sidebar",
			"description" => __("Default sidebar") ,
			"class" => "car_sidebar",
			"before_title" => "<h2 class='widget_title'>",
			"after_title" => "</h2>"
		);
		register_sidebar($sidebar);	

		$sidebar_news = array(
			"name" => __("Sidebar Tin Tức","car"),
			"id" => "sidebar_news",
			"description" => __("Sidebar About Post News"),
			"class" => "sidebar_news",
			"before_title" => "<h3 class='title_sidebarnews'",
			"after_title" => "</h3>"
		);
		register_sidebar($sidebar_news);
	}
}
add_action("init","setup_theme_car");


function load_calculation(){
	if( isset($_POST['action']) && $_POST['action'] == 'load_calculation' ){
		get_template_part("result-ajax");
	}
	wp_die();
}
add_action( 'wp_ajax_load_calculation', 'load_calculation' ); // ajax for logged in users
add_action( 'wp_ajax_nopriv_load_calculation', 'load_calculation' ); // ajax for not logged in users

//Call admin ajax
function ajax_script(){
	wp_enqueue_script( 'ajax-file', url.'/js/ajax.js', array(), '20151229', true );	
	wp_localize_script( 'ajax-file', 'ajax_object', array('ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}
add_action('wp_enqueue_scripts','ajax_script');
