<?

namespace IMAGA\Theme\Taxonomies\Employees\Skills;

/*
 * Skills Taxonomy for Employees
 */
function create_taxonomy_group() {

  $labels = array(
    'name'                       => _x( 'Groep', 'Group General Name', 'imaga' ),
    'singular_name'              => _x( 'Groep', 'Group Singular Name', 'imaga' ),
  );

  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => false,
  );

  // Registering the taxonomy
  register_taxonomy( 'group', array( 'employees' ), $args );
}

add_action( 'init', __NAMESPACE__ . '\\create_taxonomy_group' );
