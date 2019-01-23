<?

namespace IMAGA\Theme\Setup;

use IMAGA\Theme\Assets;

/**
* Theme setup
*/
function setup() {

  // Make theme available for translation
  load_theme_textdomain('imaga', get_template_directory() . '/lang');

  // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support('title-tag');

  // This theme supports WooCommerce
  add_theme_support('woocommerce');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus([
    'primary_navigation' => __('Primary Navigation', 'imaga'),
    'secondary_navigation' => __('Top Navigation', 'imaga'),
    'tertiary_navigation' => __('Footer Navigation', 'imaga'),
  ]);

  // Enable post thumbnails
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');

  // Enable post formats
  //add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);

  // Enable HTML5 markup support
  add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

  // Use main stylesheet for visual editor
  // To add custom styles edit /assets/styles/layouts/_tinymce.scss
  add_editor_style(Assets\asset_path('styles/main.css'));

  // Add image sizes
  // Header Element
  add_image_size('header-background', 1080, 600, true);

  // Featured Pages Element
  add_image_size('featured-page', 420, 280, true);

  // Featured Product Element
  add_image_size('featured-product', 1600, 360, true);

  // Quality Marks Component
  add_image_size('quality-mark', 76, 76, true);

  // RPA Featured Product Component
  add_image_size('featured-product-small', 180, 180, true);

  // Facts Element
  add_image_size('facts', 370, 160, false);

  // Content Element
  add_image_size('content', 550, 320, true);

  // File List Element
  add_image_size('file', 74, 74);
}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');

/**
* Theme assets
*/
function assets() {
  wp_enqueue_style('imaga/css', Assets\asset_path('styles/main.css'), false, null);

  wp_enqueue_script('imaga/js', Assets\asset_path('scripts/main.js'), ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);

/**
* Login assets
*/
function add_login_stylesheet() {

  wp_register_style('imaga/login', Assets\asset_path('styles/login.css') );

  wp_enqueue_style( 'imaga/login');

}
add_action( 'login_enqueue_scripts', __NAMESPACE__ . '\\add_login_stylesheet' );

/*
* ACF Google Maps API Key
*/
function add_acf_google_maps_key() {

  if( ! defined( 'GOOGLE_MAPS_API' ) ) return;

  acf_update_setting('google_api_key', GOOGLE_MAPS_API );

}
add_action('acf/init', __NAMESPACE__ . '\\add_acf_google_maps_key');

/**
* Add Google Fonts
*/
function add_google_fonts() {

  // Defined in functions.php
  if( ! defined( 'GOOGLE_FONTS' ) ) return;

  wp_enqueue_style( 'imaga/google-fonts', 'http://fonts.googleapis.com/css?family=' . GOOGLE_FONTS );

}
add_action( 'wp_head', __NAMESPACE__ . '\\add_google_fonts' , 1);

/**
* Remove acf-post2post nag
*/
add_filter('remove_hube2_nag', '__return_true');

/**
* Remove 'page-template' from body class on pages with custom templates
*/
function prefix_remove_body_class($wp_classes) {

  if ( is_page_template() ):
    foreach ($wp_classes as $key => $value) {
      $wp_classes[$key] = str_replace('page-template-template-', '', $value);
    }
  endif;

  return $wp_classes;
}
add_filter('body_class', __NAMESPACE__ . '\\prefix_remove_body_class', 20, 2);

/**
* Remove from admin menu
*/
function remove_admin_menus() {
  remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', __NAMESPACE__ . '\\remove_admin_menus' );

/**
*Remove from post and pages
*/
function remove_comment_support() {
  remove_post_type_support( 'post', 'comments' );
  remove_post_type_support( 'page', 'comments' );
}
add_action( 'init', __NAMESPACE__ . '\\remove_comment_support', 100);

/**
* Remove from admin bar
*/
function admin_bar_render() {
  global $wp_admin_bar;
  $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', __NAMESPACE__ . '\\admin_bar_render' );

/**
 * Add custom styling for Layout Columns in ACF
 */
function register_admin_styles(){

  wp_enqueue_style( 'imaga/admin-styles', Assets\asset_path('styles/admin.css') );

}
add_action( 'admin_enqueue_scripts', __NAMESPACE__ . '\\register_admin_styles');

if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
		'page_title' 	=> 'Thema Instellingen',
		'menu_title'	=> 'Thema Instellingen',
		'menu_slug' 	=> 'degelder-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

}

/**
* Disable auto-paragraphing for Contact Form 7
*/
add_filter('wpcf7_autop_or_not', '__return_false');

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});

/*
 * Disable WooCommerce JetPack nag
 */
add_filter( 'jetpack_just_in_time_msgs', '__return_false' );


add_filter( 'the_content_more_link', function(){
  return '<a class="btn btn-yellow btn-sm" href="' . get_permalink() . '">Lees meer</a>';
});
