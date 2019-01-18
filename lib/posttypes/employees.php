<?

namespace IMAGA\Theme\Posttype\Employees;

/**
 * Employees Post Type
 */
function create_post_type_employees() {

  $labels = array(
    'name'                  => _x( 'Employees', 'Employees General Name', 'imaga' ),
    'singular_name'         => _x( 'Employee', 'Employee Singular Name', 'imaga' ),
  );

  $args = array(
    'label'                 => __( 'Employees', 'imaga' ),
    'description'           => __( 'Employees of IMAGA', 'imaga' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'            => array( 'skills' ), // Add taxonomies
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 70,
    'menu_icon'             => 'dashicons-businessman',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
  );

  // Registering the post type
  register_post_type( 'employees', $args );
}

add_action( 'init', __NAMESPACE__ . '\\create_post_type_employees' );
