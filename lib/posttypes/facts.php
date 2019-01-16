<?

namespace IMAGA\Theme\Posttype\Facts;

/**
 * Employees Post Type
 */
function create_post_type_facts() {

  $labels = array(
    'name'                  => _x( 'Feiten', 'Facts General Name', 'imaga' ),
    'singular_name'         => _x( 'Feit', 'Fact Singular Name', 'imaga' ),
  );

  $args = array(
    'label'                 => __( 'Feiten', 'imaga' ),
    'description'           => __( 'Feiten van De Gelder', 'imaga' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 30,
    'menu_icon'             => 'dashicons-admin-post',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
  );

  // Registering the post type
  register_post_type( 'facts', $args );
}

add_action( 'init', __NAMESPACE__ . '\\create_post_type_facts' );
