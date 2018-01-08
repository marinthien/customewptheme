<?php







//display widget area on the theme
function enable_widget() {
	register_sidebar( array(
		'name' => 'Header Sidebar',
		'id' => 'header_sidebar',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'enable_widget' );




class BusinessWidget extends WP_Widget {

    function __construct(){
        parent::__construct(
                'BusinessWidget',
                'Business Widget',
                array(
                    'description'=>'test my first widget'
                )
                
                );
                
    }
    function form($instance) {
        $default=array(
            'title'=>'Business widget',
            'event'=>''
        );
        $default = wp_parse_args((array) $instance, $default);
        //$title = $instance['title'];
        $event = $instance['event'];
        ?>

                <p> event: <input class="widefat" name="<?php echo $this->get_field_name("event"); ?>" 
                    type="text"
                    value="<?php echo esc_attr($event); ?> " />
                </p>


        <?php
        
        
    }
    
    function update($new_instance, $old_instance) {
        $instance=$old_instance;
        //$instance['title'] = strip_tags( $new_instance['title'] );
        $instance['event'] = strip_tags( $new_instance['event'] );
        return $instance;
        
        
    }

    function widget($args, $instance)
    {
        
        
        extract($args);
        
     
        echo $before_widget;
        //$title = apply_filters( 'widget_title', $instance['title'] );
        ///echo $before_title . $title . $after_title;
        echo '<p> Favorite event:'.$instance['event'].'</p>';
        echo $after_widget;
    }

}



function register_business_widget() {
    register_widget( 'BusinessWidget' );
}

add_action('widgets_init', 'register_business_widget');

function add_style_sheet()
{
        wp_enqueue_style('style',get_stylesheet_uri());
        
       //  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/jquery.js', array(), '1.0.0', true );

    
}
add_action('wp_enqueue_scripts', 'add_style_sheet');


function add_script(){


wp_enqueue_script('mainjquery',get_template_directory_uri() . '/js/jquery.js',array());
wp_enqueue_script('techBoyGallery',get_template_directory_uri() . '/js/techBoyGallery.js',array());
wp_enqueue_script('general',get_template_directory_uri() . '/js/general.js',array());
wp_enqueue_script('general',get_template_directory_uri() . '/js/lazy.js',array());
    
    
    
}

add_action( 'wp_enqueue_scripts', 'add_script' );

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


//function wp_nav_menu_attributes_filter($var) {
//        return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
//}
//add_filter('nav_menu_css_class', 'wp_nav_menu_attributes_filter', 100, 1);
//add_filter('nav_menu_item_id', 'wp_nav_menu_attributes_filter', 100, 1);
//add_filter('page_css_class', 'wp_nav_menu_attributes_filter', 100, 1);
//


class Customize_Nav_Menu extends Walker_Nav_Menu
{
    var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );

   // Don't start the top level
    function start_lvl(&$output, $depth=0, $args=array()) {
        if($depth!=0)            
            $output .= "\n<ul>\n";
        else
            $output .= "\n<ul class=\"sub-menu\">\n";
        
    }
 
    // Don't end the top level
    function end_lvl(&$output, $depth=0, $args=array()) {
      $output .= "</ul>\n";
      
      
    }
 
    // Don't print top-level elements
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
                   
            //if($depth!==0)
            $output.= '<li><a href="'.esc_attr($item->url).'">'.esc_attr($item->title)."</a>";
            //parent::start_el($output, $item, $depth, $args,$id);
    }
 
    function end_el(&$output, $item, $depth=0, $args=array()) {
        $output .= "</li>\n";
    }
 
//    // Only follow down one branch
//    function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
//        //global $wp_query;       
//        //print_r($element);
//          
//       // parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
//    }

}
$elements=array(); // Array of elements
//echo Customize_Nav_Menu::walk($elements,0);
//$test=new Customize_Nav_Menu ();
//$test->walk($elements,0);