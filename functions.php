<?

// Define Google Fonts
define("GOOGLE_FONTS", "Amaranth:400,400i,700,700i|Zilla+Slab:600,700");

// Define Google Maps API key
// https://developers.google.com/maps/documentation/javascript/get-api-key
//define("GOOGLE_MAPS_API", "AIzaSyB5QTXactMQKDZThuga9XwRtr5r1TC3fTs");

// Activate ACF 5 beta
define('ACF_EARLY_ACCESS', '5');

$files = [
  'lib/setup.php',                        // Theme setup
  'lib/woocommerce.php',                  // Custom Post Type Reviews
  'lib/shortcodes.php',                   // Theme shortcodes
  'lib/navigation.php',                   // Navigation Functions
  'lib/navigation/bootstrap_walker.php',  // Navigation Bootstrap Walker
  'lib/navigation/start_depth.php',       // Navigation Start Depth
  'lib/tgmpa.php',                        // TGM Plugin Activation
  'lib/plugins.php',                      // Required plugins
  'lib/assets.php',                       // Scripts and stylesheets
  'lib/extras.php',                       // Custom functions
  'lib/titles.php',                       // Page titles
  'lib/wrapper.php',                      // Theme wrapper class
  'lib/customizer.php',                   // Theme customizer
  'lib/posttypes/employees.php',          // Custom Post Type Employees
  'lib/posttypes/activities.php',         // Custom Post Type Reviews
];

foreach ($files as $file):

  if (!$filepath = locate_template($file)):

    trigger_error(sprintf(__('Error locating %s for inclusion', 'imaga'), $file), E_USER_ERROR);

  endif;

  require_once $filepath;

endforeach;

unset($file, $filepath);

if(!class_exists('WooCommerce')):
  if ( !current_user_can( 'administrator' ) ):
    wp_die('This theme requires WooCommerce to function.');
  endif;
endif;
