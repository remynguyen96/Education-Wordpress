<?php  
/****************************/
/****** Menu Sidebar *****/
/****************************/
class recent_news extends WP_Widget
{
     function __construct()
    {
        $widget_ops = array('classname' => 'widget_sidebar');
        parent::__construct( 'recent_news', 'Recent News Post', $widget_ops );

    }
     function form($instance)
    {
      $default = array(
        'select_menu' => '',
        'title' => ''
        );
      $instance = wp_parse_args( $instance,$default);
      $select_menu = esc_attr($instance["select_menu"] );
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

            <label for="<?php echo $this->get_field_id('post_type'); ?>"> <?php _e('Post Type', 'car'); ?></label><br/>

            <input type="text" name="<?php echo $this->get_field_name('post_type'); ?>"
                   id="<?php echo $this->get_field_id('post_type'); ?>" 
                   value="<?php if( !empty($instance['post_type']) ): echo $post_type; endif; ?>"
                   class="widefat"/>
        </p>
        <!--quantity-->
        <p>

            <label for="<?php echo $this->get_field_id('quantity'); ?>"><?php _e('Quantity', 'car'); ?></label><br/>

            <input type="number" name="<?php echo $this->get_field_name('quantity'); ?>"
                   id="<?php echo $this->get_field_id('quantity'); ?>" value="<?php if( !empty($instance['quantity']) ): echo $quantity; endif; ?>"
                   class="widefat"/>
        </p>
    <?php
    }

    function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
    
        $instance['post_type'] = strip_tags($new_instance['post_type']);
        $instance['quantity'] = strip_tags($new_instance['quantity']);
        $instance['title'] = strip_tags($new_instance['title']);
        return $instance;
    }
   function widget($args, $instance)
    {

        extract($args);

    $post_type=$instance['post_type'];
    $quantity=$instance['quantity'];
    $title = apply_filters( 'widget_title', $instance['title'] );
        echo $before_widget;
        echo "<h3 class='widget_title'>".$title."</h3>";
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
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 widget_post_news">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="img_news"><?php the_post_thumbnail(array(260,230));?></div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <h4 class="title_news"><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h4>
              <p class="date_news"><?php $category = get_the_category(); echo $category[0]->cat_name?><span>, <?php echo get_the_date("d/m/Y H:i");?></span></p>
            </div>
        </div>
        <?php
            }
           }
        echo $after_widget;
    }
} // End class
//Create my Widget ===========================================================================
add_action('widgets_init', 'theme_register_widgets');

function theme_register_widgets()
{
    register_widget('recent_news');
}
