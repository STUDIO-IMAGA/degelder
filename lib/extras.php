<?

namespace IMAGA\Theme\Extras;

use IMAGA\Theme\Setup;
use WP_Query;

/**
* Add <body> classes
*/
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
* Clean up the_excerpt()
*/
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'imaga') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

/**
 * Get the flexible layout and return template file.
 */
function get_section( $row_layout ){
  if( locate_template( array('templates/sections/'. $row_layout .'.php') ) ):
    include( locate_template('templates/sections/'. $row_layout .'.php') );
  else:
    include( locate_template('templates/error-section.php') );
  endif;
}

/**
 * Add Bootstrap styles to Gravityforms
 */
function add_bootstrap_container_class( $field_container, $field, $form, $css_class, $style, $field_content ) {
	$id = $field->id;
  $field_id = is_admin() || empty( $form ) ? "field_{$id}" : 'field_' . $form['id'] . "_$id";
	return '<li id="' . $field_id . '" class="' . $css_class . ' form-group">{FIELD_CONTENT}</li>';
}
add_filter( 'gform_field_container', __NAMESPACE__ . '\\add_bootstrap_container_class', 10, 6 );

/**
 * Replace Flex Layout title with content
 */
function acf_flexible_content_layout_title( $title, $field, $layout, $i ) {

  // some magic
  // see: https://stackoverflow.com/a/40607717
  $desc = strip_tags( get_sub_field( 'title' ) ??0?: get_sub_field( 'lead' ) ??0?: get_sub_field( 'author' ) ??0?: get_sub_field( 'content' ) );

	if ( !empty($desc) ) {

    return $title . " - " . $desc = (strlen($desc) > 50) ? mb_substr($desc, 0, 50).'...' : $desc;

	}
	return $title;
}
add_filter( 'acf/fields/flexible_content/layout_title', __NAMESPACE__ . '\\acf_flexible_content_layout_title', 10, 4 );

/**
 * Fire BrowserSync reload on post save
 */
add_action('save_post', function() {
  $args = ['blocking' => false];
  wp_remote_get('http://'.$_SERVER['SERVER_ADDR'].':3000/__browser_sync__?method=reload', $args);
} );
/**
 * Shorten $text by $limit amount of words
 */
function limit_text($text, $limit, $prepend) {

  $text = strip_tags($text);

  if (str_word_count($text, 0) > $limit):

    $words = str_word_count($text, 2);
    $pos = array_keys($words);
    $text = substr($text, 0, $pos[$limit]) . $prepend;

  endif;

  return $text;
}

/**
 * Return array of WooCommerce products
 */
function get_products( $limit = 4 ){
  $args = array(
    'featured' => true,
  );
  $products = wc_get_products( $args );

  if( $products ):
    foreach ($products as $product):
      ?>
      This is: <?= $product->name; ?> <?= $product->price; ?>
      <?
      if( locate_template( array('templates/sections/featured-product.php') ) ):
        include( locate_template('templates/sections/featured-product.php') );
      else:
        include( locate_template('templates/error.php') );
      endif;
    endforeach;
  endif;
}
