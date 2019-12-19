<?php

require_once( get_stylesheet_directory() . '/includes/torque-fern-hill-nav-menus-class.php');
require_once( get_stylesheet_directory() . '/includes/widgets/torque-fern-hill-widgets-class.php');
require_once( get_stylesheet_directory() . '/includes/customizer/torque-fern-hill-customizer-class.php');
require_once( get_stylesheet_directory() . '/includes/acf/torque-fern-hill-acf-class.php');
require_once( get_stylesheet_directory() . '/includes/cpts/torque-fern-hill-case-study-cpt-class.php');

/**
 * Child Theme Nav Menus
 */

 if ( class_exists( 'Fern_Hill_Nav_Menus' ) ) {
   new Fern_Hill_Nav_Menus();
 }

/**
 * Child Theme Widgets
 */

if ( class_exists( 'Fern_Hill_Widgets' ) ) {
  new Fern_Hill_Widgets();
}

/**
 * Child Theme Customizer
 */

if ( class_exists( 'Fern_Hill_Customizer' ) ) {
  new Fern_Hill_Customizer();
}

/**
 * Child Theme ACF
 */

if ( class_exists( 'Fern_Hill_ACF' ) ) {
  new Fern_Hill_ACF();
}


/**
 * Listing CPT
 */

if ( class_exists( 'Fern_Hill_Case_Study_CPT' ) ) {
  new Fern_Hill_Case_Study_CPT();
}


/**
* Filtered Loop plugin settings
*/
if ( class_exists( 'Torque_Filtered_Loop' ) && class_exists( 'Torque_Filtered_Loop_Shortcode' ) ) {
  add_filter( Torque_Filtered_Loop_Shortcode::$LOOP_TEMPLATE_FILTER_HANDLE, function() { return "2"; } );
}


/**
 * Admin settings
 */

 // remove menu items
 function torque_remove_menus(){

   //remove_menu_page( 'index.php' );                  //Dashboard
   //remove_menu_page( 'edit.php' );                   //Posts
   //remove_menu_page( 'upload.php' );                 //Media
   //remove_menu_page( 'edit.php?post_type=page' );    //Pages
   //remove_menu_page( 'edit-comments.php' );          //Comments
   //remove_menu_page( 'themes.php' );                 //Appearance
   //remove_menu_page( 'plugins.php' );                //Plugins
   //remove_menu_page( 'users.php' );                  //Users
   //remove_menu_page( 'tools.php' );                  //Tools
   //remove_menu_page( 'options-general.php' );        //Settings

 }
 add_action( 'admin_menu', 'torque_remove_menus' );




/**
 * Enqueues
 */

// enqueue child styles after parent styles, both style.css and main.css
// so child styles always get priority
add_action( 'wp_enqueue_scripts', 'torque_enqueue_child_styles' );
function torque_enqueue_child_styles() {

    $parent_style = 'parent-styles';
    $parent_main_style = 'torque-theme-styles';

    // make sure parent styles enqueued first
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( $parent_main_style, get_template_directory_uri() . '/bundles/main.css' );

    // enqueue child style
    wp_enqueue_style( 'torque-fern-hill-styles',
        get_stylesheet_directory_uri() . '/bundles/main.css',
        array( $parent_style, $parent_main_style ),
        wp_get_theme()->get('Version')
    );

    // load dashicons for non-logged-in users
    wp_enqueue_style('dashicons');
}

// enqueue child scripts after parent script
add_action( 'wp_enqueue_scripts', 'torque_enqueue_child_scripts');
function torque_enqueue_child_scripts() {

    wp_enqueue_script( 'torque-fern-hill-script',
        get_stylesheet_directory_uri() . '/bundles/bundle.js',
        array( 'torque-theme-scripts' ), // depends on parent script
        wp_get_theme()->get('Version'),
        true       // put it in the footer
    );
}


/**
 * Customise the Jetpack 'Successful Submission' message
 */
add_filter( 'grunion_contact_form_success_message', 'jetpackcom_contact_confirmation' );
function jetpackcom_contact_confirmation() {
  // Add new confirmation message here:
  $conf = __( '<div class="contact-form-success-message">Thank you! Our team will respond as soon as possible.</div>', 'plugin-textdomain' );
  return $conf;
}


/**
 * Map Settings
 */
if ( class_exists( 'Torque_Map_Controller' ) ) {
  add_filter( Torque_Map_Controller::$DISPLAY_POIS_FILTER , function() { return false; });
  add_filter( Torque_Map_Controller::$API_KEY_FILTER , function() { 
    return get_field( 'google_maps_api_key', 'options' );
  });
}

?>
