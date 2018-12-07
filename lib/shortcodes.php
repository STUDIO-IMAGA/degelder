<?

namespace IMAGA\Theme\Shortcodes;

use IMAGA\Theme\Assets;

/**
 * Font Awesome Chevron Circle shortcodes
 */
add_shortcode( 'chevron', function($atts){
  return '<i class="ml-2 fa fa-chevron-circle-' . $atts['type'] . '"></i>';
});
add_shortcode( 'chevron-left', function($atts){
  return '<i class="ml-2 fa fa-chevron-circle-left"></i>';
});
add_shortcode( 'chevron-right', function($atts){
  return '<i class="ml-2 fa fa-chevron-circle-right"></i>';
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

/**
 * Conversion Types List for Front Page
 */
add_shortcode( 'conversion_types', function(){
  return '<div class="row text-center conversion-brands">
    <div class="col-6 col-md-3 mb-3 mb-md-0 conversion-arrow">
      <a href="/conversion-optimization/conversion-research">
        <img class="img-fluid mb-3" src="'.Assets\asset_path('images/icons/conversion-research-color.svg').'" alt="Conversion Research">
        <h4 class="text-dark">Conversion <br>Research</h4>
      </a>
    </div>
    <div class="col-6 col-md-3 mb-3 mb-md-0">
      <a href="/conversion-optimization/conversion-strategy">
        <img class="img-fluid mb-3" src="'.Assets\asset_path('images/icons/conversion-strategy-color.svg').'" alt="Conversion Strategy">
        <h4 class="text-dark">Conversion <br>Strategy</h4>
      </a>
    </div>
    <div class="col-6 col-md-3 mb-3 mb-md-0">
      <a href="/conversion-optimization/conversion-design">
        <img class="img-fluid mb-3" src="'.Assets\asset_path('images/icons/conversion-design-color.svg').'" alt="Conversion Design">
        <h4 class="text-dark">Conversion <br>Design</h4>
      </a>
    </div>
    <div class="col-6 col-md-3 mb-3 mb-md-0">
      <a href="/conversion-optimization/conversion-build">
        <img class="img-fluid mb-3" src="'.Assets\asset_path('images/icons/conversion-build-color.svg').'" alt="Conversion Build">
        <h4 class="text-dark">Conversion <br>Build</h4>
      </a>
    </div>
  </div>';
});

add_shortcode( 'icon_research', function($atts){
  return '<img class="img-fluid" src="'.Assets\asset_path('images/icons/conversion-research-light.svg').'" alt="Conversion Strategy">';
});
add_shortcode( 'icon_strategy', function($atts){
  return '<img class="img-fluid" src="'.Assets\asset_path('images/icons/conversion-strategy-light.svg').'" alt="Conversion Strategy">';
});
add_shortcode( 'icon_design', function($atts){
  return '<img class="img-fluid" src="'.Assets\asset_path('images/icons/conversion-design-light.svg').'" alt="Conversion Strategy">';
});
add_shortcode( 'icon_build', function($atts){
  return '<img class="img-fluid" src="'.Assets\asset_path('images/icons/conversion-build-light.svg').'" alt="Conversion Strategy">';
});
