<?
/**
 * Theme Plugins
 */

add_action( 'after_setup_theme', function() {

    $plugins = array(
      array(
  			'name'               => 'WooCommerce',
  			'slug'               => 'woocommerce',
        'required'           => true,
		  ),
      array(
  			'name'               => 'Yoast SEO',
  			'slug'               => 'wordpress-seo',
        'required'           => true,
		  ),
      array(
        'name'               => 'ACF Content Analysis for Yoast SEO',
  			'slug'               => 'acf-content-analysis-for-yoast-seo',
        'required'           => true,
		  ),
      array(
        'name'               => 'Fast Velocity Minify',
        'slug'               => 'fast-velocity-minify',
      ),
      array(
        'name'               => 'reSmush.it Image Optimizer',
        'slug'               => 'resmushit-image-optimizer',
      ),
      array(
        'name'               => 'Duplicate Post',
        'slug'               => 'duplicate-post',
      ),
      array(
        'name'               => 'Regenerate Thumbnails',
        'slug'               => 'regenerate-thumbnails',
      ),
    );

    $config = array(
        'id'           => 'imaga',
        'default_path' => get_template_directory() . '/lib/plugins',
        'menu'         => 'tgmpa-install-plugins',
        'parent_slug'  => 'themes.php',
        'capability'   => 'edit_theme_options',
        'has_notices'  => true,
        'dismissable'  => true,
        'is_automatic' => true,
    );

    tgmpa( $plugins, $config );
});
