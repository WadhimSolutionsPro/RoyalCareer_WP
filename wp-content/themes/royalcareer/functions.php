 <?php
 add_theme_support( 'post-thumbnails' );
add_action('wp_enqueue_scripts', 'enqueue_styles');
function enqueue_styles()
  {
   wp_enqueue_style('royal-style', get_stylesheet_uri(), $dependencies);
    
  }
function vbrlaw_wp_setup()
  {
    add_theme_support('title-tag');
  }
add_action('after_setup_theme', 'vbrlaw_wp_setup');
/*Menu Code*/
function vbrlaw_register_menu()
  {
    register_nav_menu('header-menu', __('Header Menu'));
  }
add_action('init', 'vbrlaw_register_menu');
function add_classes_on_li($classes, $item, $args) {
    $classes[] = 'nav-item';
    return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);

function add_specific_menu_location_atts( $atts, $item, $args ) {
    // check if the item is in the primary menu
    $atts['class'] = 'nav-link';
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}
/* End */
function vbrlaw_widgets_init()
  {
    register_sidebar(array(
        'name' => 'Footer - Copyright Text',
        'id' => 'footer-copyright-text',
        'before_widget' => '<div class="footer_copyright_text">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
    register_sidebar(array(
        'name' => 'Sidebar - Inset',
        'id' => 'sidebar-1',
        'before_widget' => '<div class="sidebar-module sidebar-module-inset">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
    register_sidebar(array(
        'name' => 'Sidebar - Default',
        'id' => 'sidebar-2',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
     register_sidebar(array(
        'name' => 'Logo',
        'id' => 'logo',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
         register_sidebar(array(
        'name' => 'Footer - First',
        'id' => 'footer-1',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
         register_sidebar(array(
        'name' => 'Footer - Second',
        'id' => 'footer-2',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
         register_sidebar(array(
        'name' => 'Footer - Third',
        'id' => 'footer-3',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
           register_sidebar(array(
        'name' => 'Footer - Fourth',
        'id' => 'footer-4',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
  }
add_action('widgets_init', 'vbrlaw_widgets_init');
require_once ("core_functions.php");
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}
?> 