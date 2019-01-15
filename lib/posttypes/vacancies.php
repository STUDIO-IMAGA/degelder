<?

namespace IMAGA\Theme\Posttype\Vacancies;

/**
 * Employees Post Type
 */
function create_post_type_vacancies() {

  $labels = array(
    'name'                  => _x( 'Vacatures', 'Employees General Name', 'imaga' ),
    'singular_name'         => _x( 'Vacature', 'Employee Singular Name', 'imaga' ),
  );

  $args = array(
    'label'                 => __( 'Vacatures', 'imaga' ),
    'description'           => __( 'Vacatures', 'imaga' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 30,
    'menu_icon'             => 'dashicons-media-text',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
  );

  // Registering the post type
  register_post_type( 'vacancies', $args );
}

add_action( 'init', __NAMESPACE__ . '\\create_post_type_vacancies' );
