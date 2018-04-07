<?php
/**
 * Functions that add SVG support to WordPress media library.
 *
 * @package basis
 */

/**
 * [add_file_types_to_uploads description]
 *
 * @param Array $file_types Array of file types allowed by media uploader.
 */
function add_file_types_to_uploads( $file_types ) {

    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge( $file_types, $new_filetypes );

    return $file_types;
}
add_action( 'upload_mimes', 'add_file_types_to_uploads' );

/**
 * Enqueue the scripts needed for backend SVG support
 *
 * @return void
 */
function enqueue_svg_scripts() {

	$version = '1.0';
	wp_enqueue_style( '_basis-style-svg', get_stylesheet_directory_uri() . '/assets/css/admin/svg.css', array(), $version );
	wp_enqueue_script( '_basis-scripts-svg', get_template_directory_uri() . '/assets/scripts/svg.min.js', array( 'jquery' ), $version, true );
}
add_action( 'admin_enqueue_scripts', 'enqueue_svg_scripts' );

/**
 * Ajax function to get attachment url for SVG's.
 *
 * @return void
 */
function ajax_get_attachment_url_media_library() {

    $url = '';
    $attachment_id = isset( $_REQUEST['attachmentID'] ) ? $_REQUEST['attachmentID'] : '';
    if ( $attachment_id ) {
        $url = wp_get_attachment_url( $attachment_id );
    }
    echo $url;
    die();
}
add_action( 'wp_ajax_svg_get_attachment_url', 'ajax_get_attachment_url_media_library' );
