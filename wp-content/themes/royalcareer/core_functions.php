<?php 
/*
* Pagination for Blog posts
*/
function paginate() {
   global $wp_query, $wp_rewrite;
   $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
   
   $pagination = array(
      'base' => @add_query_arg('page','%#%'),
      'format' => '',
      'total' => $wp_query->max_num_pages,
      'current' => $current,
      'show_all' => true,
      'type' => 'list',
      'next_text' => '&raquo;',
      'prev_text' => '&laquo;'
      );
   
   if( $wp_rewrite->using_permalinks() )
      $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
   
   if( !empty($wp_query->query_vars['s']) )
      $pagination['add_args'] = array( 's' => get_query_var( 's' ) );
   
   echo paginate_links( $pagination );
}

 add_theme_support('post-thumbnails', array ('post','slider','page'));
/*
* Creating a function to create Slider
*/
 
function clients_post_type() {
 
$labels = array(
        'name'                => _x( 'Slider', 'Post Type General Name', 'vbrlaw' ),
        'singular_name'       => _x( 'Client', 'Post Type Singular Name', 'vbrlaw' ),
        'menu_name'           => __( 'Slider', 'vbrlaw' ),
        'parent_item_colon'   => __( 'Parent Client', 'vbrlaw' ),
        'all_items'           => __( 'All Slider', 'vbrlaw' ),
        'view_item'           => __( 'View Client', 'vbrlaw' ),
        'add_new_item'        => __( 'Add New Slider', 'vbrlaw' ),
        'add_new'             => __( 'Add New', 'vbrlaw' ),
        'edit_item'           => __( 'Edit Slider', 'vbrlaw' ),
        'update_item'         => __( 'Update Slider', 'vbrlaw' ),
        'search_items'        => __( 'Search Slider', 'vbrlaw' ),
        'not_found'           => __( 'Not Found', 'vbrlaw' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'vbrlaw' ),
        'featured_image'        => __( 'Featured Image', 'vbrlaw' ),
        'set_featured_image'    => __( 'Set featured image', 'vbrlaw' ),
        'remove_featured_image' => __( 'Remove featured image', 'vbrlaw' ),
        'use_featured_image'    => __( 'Use as featured image', 'vbrlaw' ),
    );
     
$args = array(
        'label'               => __( 'Slider', 'vbrlaw' ),
        'description'         => __( 'Slider news and reviews', 'vbrlaw' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor','author', 'thumbnail', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'genres' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_icon'           => 'dashicons-images-alt2',
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    register_post_type( 'slider', $args );
 
}
add_action( 'init', 'clients_post_type', 0 );

/*Theme Options*/
function theme_settings_page()
{
    ?>
      <div class="wrap">
      <h1>Theme Panel</h1>
      <form method="post" action="options.php">
          <?php
              settings_fields("section");
              do_settings_sections("theme-options");      
              submit_button(); 
          ?>          
      </form>
    </div>
  <?php
}

function display_email_element()
{
  ?>
      <input type="text" name="email" id="email" value="<?php echo get_option('email'); ?>" />
    <?php
}

function display_phone_element()
{
  ?>
      <input type="text" name="phone" id="phone" value="<?php echo get_option('phone'); ?>" />
    <?php
}
function display_free_case_assessment_element()
{
  ?>
      <input type="text" name="free_case_assessment" id="free_case_assessment" value="<?php echo get_option('free_case_assessment'); ?>" />
    <?php
}
function display_twitter_element()
{
  ?>
      <input type="text" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url'); ?>" />
    <?php
}

function display_facebook_element()
{
  ?>
      <input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>" />
    <?php
}
function display_insta_url_element()
{
  ?>
      <input type="text" name="insta_url" id="insta_url" value="<?php echo get_option('insta_url'); ?>" />
    <?php
}


function display_theme_panel_fields()
{
    add_settings_section("section", "All Settings(Header/Footer)", null, "theme-options");
    add_settings_field("phone", "Phone", "display_phone_element", "theme-options", "section");
    add_settings_field("email", "Email", "display_email_element", "theme-options", "section");
  
    add_settings_field("twitter_url", "Twitter Profile Url", "display_twitter_element", "theme-options", "section");
    add_settings_field("facebook_url", "Facebook Profile Url", "display_facebook_element", "theme-options", "section");
    add_settings_field("insta_url", "Instagram Profile Url", "display_insta_url_element", "theme-options", "section");
    register_setting("section", "phone");
    register_setting("section", "email");
    register_setting("section", "twitter_url");
    register_setting("section", "facebook_url");
    register_setting("section", "insta_url");
    register_setting("section", "theme_layout");
}

add_action("admin_init", "display_theme_panel_fields");

function add_theme_menu_item()
{
  add_menu_page("Theme Panel", "Theme Panel", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}
add_action("admin_menu", "add_theme_menu_item");

/* Theme Logo */
function theme_prefix_setup() {
  add_theme_support( 'custom-logo', array(
         'height'=> 76,
         'width' => 398,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
) );

}
add_action('after_setup_theme', 'theme_prefix_setup' );

 

?>