<?

namespace IMAGA\Theme\Posttype\Activities;

/**
 * Brands Post Type
 */
function create_post_type_activities() {

  $labels = array(
    'name'                  => _x( 'Activiteiten', 'Activities General Name', 'imaga' ),
    'singular_name'         => _x( 'Activiteiten', 'Activities Singular Name', 'imaga' ),
  );

  $args = array(
    'label'                 => __( 'Activiteiten', 'imaga' ),
    'description'           => __( 'Activiteiten van Kaasboerderij De Gelder', 'imaga' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 25,
    // 'menu_icon'             => 'dashicons-format-chat',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
  );

  // Registering the post type
  register_post_type( 'activities', $args );
}

add_action( 'init', __NAMESPACE__ . '\\create_post_type_activities' );
