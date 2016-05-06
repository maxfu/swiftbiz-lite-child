<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

// BEGIN ENQUEUE MODAL PLUGIN

function bootstrap_modal_enqueue() {
wp_enqueue_style( 'bootstrap-modal-css', get_stylesheet_directory_uri() . '/plugins/bootstrap_modals/modals.css' );
wp_enqueue_script('bootstrap-modal-js', get_stylesheet_directory_uri() . '/plugins/bootstrap_modals/modal.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'bootstrap_modal_enqueue', 10 );

// END ENQUEUE MODAL PLUGIN

// BEGIN ENQUEUE GRID PLUGIN

function bootstrap_grid_enqueue() {
wp_enqueue_style( 'bootstrap-grid-css', get_stylesheet_directory_uri() . '/plugins/bootstrap_grid/grid.css' );
}
add_action( 'wp_enqueue_scripts', 'bootstrap_grid_enqueue', 10 );

// END ENQUEUE GRID PLUGIN

@ini_set( 'upload_max_size' , '16M' );
@ini_set( 'post_max_size', '16M');
@ini_set( 'max_execution_time', '300' );

// BEGIN ADD THE ADMIN MENU PAGES

include_once('includes/RationalOptionPages.php');
include_once('includes/maxwell_custom_admin_menu.php');
$maxwell_options = get_option( 'maxwell_options', array() );

// END ADD THE ADMIN MENU PAGES

// BEGIN ADD THE CUSTOM PAGES AND METABOXES

include_once('includes/maxwell_custom_posts.php');
include_once('includes/maxwell_custom_metabox.php');

// END ADD THE CUSTOM PAGES AND METABOXES

// BEGIN ADD PDF MIME TYPE

function pdf_mime_type( $post_mime_types ) {
	$post_mime_types['application/pdf'] = array( __( 'PDFs' ), __( 'Manage PDFs' ), _n_noop( 'PDF <span class="count">(%s)</span>', 'PDFs <span class="count">(%s)</span>' ) );
	return $post_mime_types;
}
add_filter( 'post_mime_types', 'pdf_mime_type' );

// END ADD PDF MIME TYPE

add_filter('widget_text', 'do_shortcode');
