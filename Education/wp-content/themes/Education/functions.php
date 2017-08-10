<?php  
define("education", get_template_directory());
define("url", get_template_directory_uri());
function CssAndJs()
{
	wp_enqueue_style("font","https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,700,700italic&subset=latin,vietnamese,latin-ext",array(),"1.0");
	wp_enqueue_style("bootstrap_css",url."/css/bootstrap.min.css",array(),"1.0");
	wp_enqueue_style("carousel_css",url."/css/owl.carousel.css",array(),"1.0");  
	wp_enqueue_style("style",get_stylesheet_uri());

	wp_enqueue_script("bootstrap_js",url."/js/bootstrap.min.js",array("jquery"),true);
	wp_enqueue_script("slider",url."/js/slider.js",array("jquery"),true);
	wp_enqueue_script("hover",url."/js/movehover.js",array("jquery"),true);
	wp_enqueue_script("carousel_js",url."/js/owl.carousel.min.js",array("jquery"),true);
  wp_enqueue_script("TimeCircles",url."/js/TimeCircles.js",array("jquery"),true);
	wp_enqueue_script("scrollreveal",url."/js/scrollreveal.min.js",array("jquery"),true);
	wp_enqueue_script("functions",url."/js/functions.js",array("jquery"),true);
}
add_action("wp_enqueue_scripts","CssAndJs");

//function set up theme
if(!function_exists("setup_theme_education"))
{
	function setup_theme_education()
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
		register_nav_menu( "menu-education" , __("Menu Education", "education") );

 // add_theme_support( 'automatic-feed-links' );
		// Add sidebar
		$sidebar = array(
			"name" => __("Education Sidebar","education"),
			"id" => "education_sidebar",
			"description" => __("Default sidebar") ,
			"class" => "education_sidebar",
			"before_title" => "<h2 class='widget_title'>",
			"after_title" => "</h2>"
		);
		register_sidebar($sidebar);	

		$sidebar_login = array(
			"name" => __("Follow Student","education"),
			"id" => "follow_student",
			"description" => __("Sidebar Login") ,
			"class" => "follow_student",
			"before_title" => "<h2 class='follow'>",
			"after_title" => "</h2>"
		);
		register_sidebar($sidebar_login);	


	    $sidebar_single = array(
	      "name" => __("Sidebar Single","education"),
	      "id" => "sidebar_single",
	      "description" => __("Sidebar Single") ,
	      "class" => "sidebar_single",
	      "before_title" => "<h3 class='single_post'>",
	      "after_title" => "</h3>"
	    );
	    register_sidebar($sidebar_single); 
	}
}
add_action("init","setup_theme_education");	
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
        parent::__construct( 'recent_news', 'Post News Widget', $widget_ops );

    }
   public  function form($instance)
    {
      $default = array(
        'post_type' => '',
        'quantity' => '',
        'title' => ''
        );
      $instance = wp_parse_args( $instance,$default);
      $post_type = esc_attr($instance["post_type"] );
      $quantity = esc_attr($instance["quantity"] );
      $title = esc_attr($instance["title"] );
        ?>
      <!--title-->
          <p>
              Nhập Tiêu Đề
              <input type="text" class="widefat" name="<?php echo $this->get_field_name('title'); ?>"
              value="<?php if(!empty($instance['title'])):echo $title; endif; ?>" >
          </p>
		<!--post_type-->
        <p>
            <label for="<?php echo $this->get_field_id('post_type'); ?>"> <?php _e('Post Type', 'real_estates'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('post_type'); ?>"
                   id="<?php echo $this->get_field_id('post_type'); ?>" 
                   value="<?php if( !empty($instance['post_type']) ): echo $post_type; endif; ?>"
                   class="widefat"/>

        </p>
        <!--quantity-->
        <p>

            <label for="<?php echo $this->get_field_id('quantity'); ?>"><?php _e('Quantity', 'real_estates'); ?></label><br/>

            <input type="number" name="<?php echo $this->get_field_name('quantity'); ?>"
                   id="<?php echo $this->get_field_id('quantity'); ?>" value="<?php if( !empty($instance['quantity']) ): echo $quantity; endif; ?>"
                   class="widefat"/>
        </p>
    <?php
    }

  public  function update($new_instance, $old_instance)
    {
        $instance = $old_instance;

        $instance['post_type'] = strip_tags($new_instance['post_type']);
        $instance['quantity'] = strip_tags($new_instance['quantity']);
        $instance['title'] = strip_tags($new_instance['title']);
        return $instance;
    }
   public function widget($args, $instance)
    {

        extract($args);

		$post_type=$instance['post_type'];
		$quantity=$instance['quantity'];
		$title = apply_filters( 'widget_title', $instance['title'] );
        echo $before_widget;
        echo '<div class="col-lg-5 col-md-5 col-sm-5 infomation_home animate_right">';
        echo "<h4 class='widget_title'>".$title."</h4>";
           $list = array(
          "post_type" => $post_type,
          "posts_per_page" => $quantity
           );
           $query =new WP_Query($list);
           if($query->have_posts())
           {
            while($query->have_posts())
            {
                $query->the_post();
        ?>
        <div class="sidebar_widget_post">
          <div class="col-lg-9 col-lg-push-3 col-md-9 col-md-push-3 col-sm-12">
              <a class="title_widget" href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a>
              <div class="date_widget">
                <img src="<?php echo url."/img/calendar.png"?>" alt="Ngày đăng bài viết">
                <span><?php echo get_the_date("d/m/Y H:i");?></span>
              </div>
              <a class="detail_single" href="<?php the_permalink();?>" title="<?php the_title();?>"><img class="detail_single" src="<?php echo url."/img/next.png"?>" alt="Xem chi tiết"></a>
          </div>
          <div class="col-lg-3 col-lg-pull-9 col-md-3 col-md-pull-9 col-sm-6">
              <div class="img_widget"><?php the_post_thumbnail(array(100,80));?></div>
          </div>
        </div>
        <?php
            }
           }
        echo "</div>";
        echo $after_widget;
    }
} // End class

/* Tự động chuyển đến một trang khác sau khi login */
/*function my_login_redirect( $redirect_to, $request, $user ) {
        //is there a user to check?
        global $user;
        if ( isset( $user->roles ) && is_array( $user->roles ) ) {
                //check for admins
                if ( in_array( 'administrator', $user->roles ) ) {
                        // redirect them to the default place
                        return admin_url();
                } else {
                        return home_url("/lop-moi/");
                }
        } else {
                return $redirect_to;
        }
}
add_filter( 'login_redirect', 'my_login_redirect', 10, 3 );

function redirect_login_page() {
    $login_page  = home_url("/lop-moi");
    $page_viewed = basename($_SERVER['REQUEST_URI']);  
 
    if( $page_viewed == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET') {
        wp_redirect($login_page);
        exit;
    }
}
add_action('init','redirect_login_page');*/

/* Kiểm tra lỗi đăng nhập 
function login_failed() {
    $login_page  = home_url( '/lop-moi/' );
    wp_redirect( $login_page . '?login=failed' );
    exit;
}
add_action( 'wp_login_failed', 'login_failed' );  
 
function verify_username_password( $user, $username, $password ) {
    $login_page  = home_url( '/lop-moi/' );
    if( $username == "" || $password == "" ) {
        /*wp_redirect( $login_page . "?login=empty" );
        exit;*/
 /*   }
}
add_filter( 'authenticate', 'verify_username_password', 1, 3);*/
