<?

namespace IMAGA\Theme\Shortcodes;

use IMAGA\Theme\Assets;

/**
 * Font Awesome Chevron shortcodes
 */
add_shortcode( 'chevron-up', function($atts){
  return '<i class="fa fa-chevron-up"></i>';
});
add_shortcode( 'chevron-down', function($atts){
  return '<i class="fa fa-chevron-down"></i>';
});
add_shortcode( 'chevron-left', function($atts){
  return '<i class="fa fa-chevron-left"></i>';
});
add_shortcode( 'chevron-right', function($atts){
  return '<i class="fa fa-chevron-right"></i>';
});

/**
 * Font Awesome Checkmark shortcode
 */
add_shortcode( 'checkmark', function($atts){
  return '<i class="fa fa-check"></i>';
});

/**
 * Font Awesome Cross shortcode
 */
add_shortcode( 'times', function($atts){
  return '<i class="fa fa-times"></i>';
});

/**
 * Font Awesome External link shortcode
 */
add_shortcode( 'external-link', function($atts){
  return '<i class="fa fa-external-link"></i>';
});

/**
 * Bootstrap Button shortcode
 */
add_shortcode( 'button', function($atts, $content = null){
  return '<a class="btn btn-' . $atts['color'] . ' ' . $atts['extra'] . '" href="' . $atts['url'] . '">' . do_shortcode($content) . '</a>';
});

/**
 * Bootstrap List shortcode
 */
add_shortcode( 'list-unstyled', function($atts, $content = null){
  return '<ul class="list-unstyled">' . do_shortcode($content) . '</ul>';
});

/**
 * Bootstrap List-item shortcode
 */
add_shortcode( 'list-item', function($atts, $content = null){
  return '<li>' . do_shortcode($content) . '</li>';
});
