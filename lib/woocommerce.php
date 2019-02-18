<?php

namespace IMAGA\Theme\WooCommerce;

use IMAGA\Theme\Assets;

/*
 * Customize WooCommerce settings page
 */
// Source: https://stackoverflow.com/a/47368816
function woocommerce_settings_fields($settings) {
    $key = 0;

    foreach( $settings as $values ):
        $new_settings[$key] = $values;
        $key++;

        // Add a openingstimes section after address
        if( $values['id'] == 'store_address' and $values['type'] == 'sectionend' ):

          // open section
          $new_settings[$key] = array(
              'title'    => __('Winkel Informatie'),
              'type'     => 'title',
              'desc'     => __('Tekst boven aan het productenoverzicht pagina.'),
              'id'       => 'store_description',
          );
          $key++;

          // Add title
          $new_settings[$key] = array(
              'title'    => __('Titel'),
              'desc'     => __('Voer hier een titel in.'),
              'id'       => 'woocommerce_store_shop_title',
              'type'     => 'text',
              'desc_tip' => true,
          );
          $key++;

          // Add description
          $new_settings[$key] = array(
              'title'    => __('Omschrijving'),
              'desc'     => __('Voer hier de omschrijving in.'),
              'id'       => 'woocommerce_store_shop_description',
              'type'     => 'text',
              'desc_tip' => true,
          );
          $key++;

          // Add Shipping promotion
          $new_settings[$key] = array(
              'title'    => __('Verzending Promotie'),
              'desc'     => __('Voer hier de promotionele tekst in voor verzendingen.'),
              'id'       => 'woocommerce_store_shop_shipping_promotion',
              'type'     => 'text',
              'desc_tip' => true,
          );
          $key++;

          // Add Shop promotion image
          $new_settings[$key] = array(
              'title'    => __('Boerderijwinkel Promotie Afbeelding'),
              'desc'     => __('Voer hier de URL in voor de afbeelding.'),
              'id'       => 'woocommerce_store_shop_promotion_image',
              'type'     => 'text',
              'desc_tip' => true,
          );
          $key++;

          // Add Shop promotion
          $new_settings[$key] = array(
              'title'    => __('Boerderijwinkel Promotie'),
              'desc'     => __('Voer hier de promotionele tekst in voor de boerderijwinkel.'),
              'id'       => 'woocommerce_store_shop_promotion',
              'type'     => 'text',
              'desc_tip' => true,
          );
          $key++;

          // Add Shop promotion link
          $new_settings[$key] = array(
              'title'    => __('Boerderijwinkel Promotie link tekst'),
              'desc'     => __('Voer hier de tekst in voor link van de promotionele tekst van de boerderijwinkel.'),
              'id'       => 'woocommerce_store_shop_promotion_link_label',
              'type'     => 'text',
              'desc_tip' => true,
          );
          $key++;

          $pages = get_pages();
          $options = array();
          foreach ( $pages as $page ) {
            $options[get_page_link( $page->ID )] = __($page->post_title, 'woocommerce');
          }


          // Add Shop promotion URL
          $new_settings[$key] = array(
              'title'    => __('Boerderijwinkel Promotie URL'),
              'desc'     => __('Voer hier de tekst in voor link van de promotionele tekst van de boerderijwinkel.'),
              'id'       => 'woocommerce_store_shop_promotion_link_url',
              'desc_tip' => true,
              'type'    => 'select',
              'options' => $options,
          );
          $key++;

          // Add Kamer van koophandel number
          $new_settings[$key] = array(
              'title'    => __('KvKnr.'),
              'desc'     => __('Voer hier het Kamer van Koophandel registratie nummer in.'),
              'id'       => 'woocommerce_store_kvk',
              'type'     => 'text',
              'desc_tip' => true,
          );
          $key++;

          // Add IBAN number
          $new_settings[$key] = array(
              'title'    => __('IBAN'),
              'desc'     => __('Voer hier het IBAN rekeningnummer in.'),
              'id'       => 'woocommerce_store_iban',
              'type'     => 'text',
              'desc_tip' => true,
          );
          $key++;

          // Close section
          $new_settings[$key] = array(
              'type'     => 'sectionend',
              'id'       => 'store_description',
          );
          $key++;
        endif;


        if($values['id'] == 'woocommerce_store_postcode'):

            // Add phonenumber
            $new_settings[$key] = array(
                'title'    => __('Phone Number'),
                'desc'     => __('Optional phone number of your business office'),
                'id'       => 'woocommerce_store_phone', // <= The field ID (important)
                'default'  => '',
                'type'     => 'text',
                'desc_tip' => true, // or false
            );
            $key++;

            // Add contact emailaddress
            $new_settings[$key] = array(
                'title'    => __('E-mail'),
                'desc'     => __('Optional E-mailaddress of your business office'),
                'id'       => 'woocommerce_store_email', // <= The field ID (important)
                'default'  => '',
                'type'     => 'text',
                'desc_tip' => true, // or false
            );
            $key++;
        endif;

        // Add a openingstimes section after address
        if( $values['id'] == 'store_address' and $values['type'] == 'sectionend' ):

          // open section
          $new_settings[$key] = array(
              'title'    => __('Openingstijden'),
              'type'     => 'title',
              'desc'     => __('Openingstijden van de winkel'),
              'id'       => 'store_shoppinghours', // <= The field ID (important)
          );
          $key++;

          // Add monday
          $new_settings[$key] = array(
              'title'    => __('Maandag'),
              'desc'     => __('Voer in als "13.00 - 17.00".'),
              'id'       => 'woocommerce_store_shoppinghours_monday', // <= The field ID (important)
              'default'  => '13.00 - 17.00',
              'type'     => 'text',
              'desc_tip' => true, // or false
          );
          $key++;

          // Add tuesday til friday
          $new_settings[$key] = array(
              'title'    => __('Di t/m vr'),
              'desc'     => __('Voer in als "9.00 - 12.30 / 13.30 - 17.00".'),
              'id'       => 'woocommerce_store_shoppinghours_tue_vr', // <= The field ID (important)
              'default'  => '9.00 - 12.30 / 13.30 - 17.00',
              'type'     => 'text',
              'desc_tip' => true, // or false
          );
          $key++;

          // Add caturday
          $new_settings[$key] = array(
              'title'    => __('Zaterdag'),
              'desc'     => __('Voer in als "9.00 - 16.00".'),
              'id'       => 'woocommerce_store_shoppinghours_saturday', // <= The field ID (important)
              'default'  => '9.00 - 16.00',
              'type'     => 'text',
              'desc_tip' => true, // or false
          );
          $key++;

          // Close section
          $new_settings[$key] = array(
              'type'     => 'sectionend',
              'id'       => 'store_shoppinghours', // <= The field ID (important)
          );
          $key++;
        endif;

    endforeach;
    return $new_settings;
}
add_filter('woocommerce_general_settings', __NAMESPACE__ . '\\woocommerce_settings_fields');

/*
 * Remove default stylesheets
 * source: https://docs.woocommerce.com/document/disable-the-default-stylesheet/
 */
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/*
 * Remove breadcrumbs
 * source: https://fillintheblank.co/latest/removing-breadcrumbs-in-woocommerce/
 */
remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb', 20, 0);

/*
 * Rename product tabs
 * source: https://fillintheblank.co/latest/removing-breadcrumbs-in-woocommerce/
 */
function woocommerce_rename_tabs($tabs) {

  $tabs['description']['title'] = 'Uitgebreide informatie';
  $tabs['additional_information']['title'] = 'Voedingswaarden';

  return $tabs;

}
add_filter( 'woocommerce_product_tabs', __NAMESPACE__ . '\\woocommerce_rename_tabs', 98);


function grd_remove_woocommerce_styles_scripts() {
	remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) );
	remove_action( 'wp_enqueue_scripts', array( $GLOBALS['woocommerce'], 'frontend_scripts' ) );
}
define( 'WOOCOMMERCE_USE_CSS', false );
add_action( 'init', __NAMESPACE__ . '\\grd_remove_woocommerce_styles_scripts', 99 );

function wc_bootstrap_form_field_args ($args, $key, $value) {

  // var_dump($args);
  /*
  array (size=18)
  'type' => string 'text' (length=4)
  'label' => string 'Voornaam' (length=8)
  'description' => string '' (length=0)
  'placeholder' => string '' (length=0)
  'maxlength' => boolean false
  'required' => boolean true
  'autocomplete' => string 'given-name' (length=10)
  'id' => string 'billing_first_name' (length=18)
  'class' =>
    array (size=1)
      0 => string 'form-row-first' (length=14)
  'label_class' =>
    array (size=0)
      empty
  'input_class' =>
    array (size=0)
      empty
  'return' => boolean false
  'options' =>
    array (size=0)
      empty
  'custom_attributes' =>
    array (size=0)
      empty
  'validate' =>
    array (size=0)
      empty
  'default' => string '' (length=0)
  'autofocus' => string '' (length=0)
  'priority' => int 10
  */

  $args['input_class'][] = 'form-control';
  return $args;
}
add_filter('woocommerce_form_field_args', __NAMESPACE__ . '\\wc_bootstrap_form_field_args', 10, 3);

function clean_checkout_fields_class_attribute_values( $field, $key, $args, $value ){
    if( is_checkout() ){
        // remove "form-row"
        $field = str_replace( array('<p class="form-row ', '<p class="form-row' ,'</p>'), array('<div class="form-group ', '<div class="form-group ', '</div>'), $field);
        $field = str_replace( array('<span class="woocommerce-input-wrapper">','</span>'), array('', ''), $field);
    }

    return $field;
}
add_filter('woocommerce_form_field_country', __NAMESPACE__ . '\\clean_checkout_fields_class_attribute_values', 20, 4);
add_filter('woocommerce_form_field_state', __NAMESPACE__ . '\\clean_checkout_fields_class_attribute_values', 20, 4);
add_filter('woocommerce_form_field_textarea', __NAMESPACE__ . '\\clean_checkout_fields_class_attribute_values', 20, 4);
add_filter('woocommerce_form_field_checkbox', __NAMESPACE__ . '\\clean_checkout_fields_class_attribute_values', 20, 4);
add_filter('woocommerce_form_field_password', __NAMESPACE__ . '\\clean_checkout_fields_class_attribute_values', 20, 4);
add_filter('woocommerce_form_field_text', __NAMESPACE__ . '\\clean_checkout_fields_class_attribute_values', 20, 4);
add_filter('woocommerce_form_field_email', __NAMESPACE__ . '\\clean_checkout_fields_class_attribute_values', 20, 4);
add_filter('woocommerce_form_field_tel', __NAMESPACE__ . '\\clean_checkout_fields_class_attribute_values', 20, 4);
add_filter('woocommerce_form_field_number', __NAMESPACE__ . '\\clean_checkout_fields_class_attribute_values', 20, 4);
add_filter('woocommerce_form_field_select', __NAMESPACE__ . '\\clean_checkout_fields_class_attribute_values', 20, 4);
add_filter('woocommerce_form_field_radio', __NAMESPACE__ . '\\clean_checkout_fields_class_attribute_values', 20, 4);

add_filter( 'acf/location/rule_values/page_type', function ( $choices ) {
    $choices['woo_shop_page'] = __('Shop pagina','image');
    return $choices;
});

add_filter( 'acf/location/rule_match/page_type', function ( $match, $rule, $options ) {
    if ( $rule['value'] == 'woo_shop_page' )
    {
        if ( $rule['operator'] == '==' )
            $match = ( $options['post_id'] == wc_get_page_id( 'shop' ) );
        if ( $rule['operator'] == '!=' )
            $match = ( $options['post_id'] != wc_get_page_id( 'shop' ) );
    }
    return $match;
}, 10, 3 );
