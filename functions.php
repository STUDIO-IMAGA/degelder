<?

// Define Google Fonts
define("GOOGLE_FONTS", "Amaranth:300,300i,400,400i,700,700i|Zilla+Slab:300,300i,400,400i,600,600i,700,700i");

$files = [
  'lib/setup.php',                        // Theme setup
  'lib/updater.php',                      // Theme Updater

  'lib/integrations/wpsvg.php',           // WPSVG
  'lib/integrations/version-info.php',    // Version Info
  'lib/integrations/tgmpa.php',           // TGM Plugin Activation
  'lib/integrations/acf.php',             // TGM Plugin Activation

  'lib/woocommerce.php',                  // Custom Post Type Reviews
  'lib/shortcodes.php',                   // Theme shortcodes
  'lib/navigation.php',                   // Navigation Functions
  'lib/navigation/bootstrap_walker.php',  // Navigation Bootstrap Walker
  'lib/navigation/start_depth.php',       // Navigation Start Depth
  'lib/plugins.php',                      // Required plugins
  'lib/assets.php',                       // Scripts and stylesheets
  'lib/extras.php',                       // Custom functions
  'lib/titles.php',                       // Page titles
  'lib/wrapper.php',                      // Theme wrapper class
  'lib/customizer.php',                   // Theme customizer

  'lib/posttypes/employees.php',          // Custom Post Type Employees
  'lib/posttypes/activities.php',         // Custom Post Type Activities
  'lib/posttypes/vacancies.php',          // Custom Post Type Vacancies
  'lib/posttypes/facts.php',              // Custom Post Type Vacancies
  'lib/posttypes/reviews.php',            // Custom Post Type Vacancies

  'lib/taxonomies/employees-group.php',   // Custom Post Type Reviews

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

// Init updater
$puc = Puc_v4_Factory::buildUpdateChecker( 'https://github.com/STUDIO-IMAGA/degelder', __FILE__, 'imaga' );
$puc->getVcsApi()->enableReleaseAssets();
