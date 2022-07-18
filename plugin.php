<?php
/**
 * Plugin Name: Guten Form
 * Plugin URI: https://github.com/riverBanjo/guten-form
 * Description: A WordPress Gutenberg Form Builder
 * Author: River Fisher
 * Author URI: https://github.com/riverBanjo
 * Version: 1.0.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package CGB
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';

function guf_POST_assets() {
	$params = array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) );
	wp_enqueue_script( 'guf-ajax-script', plugins_url( '/guten-form/src/form-post.js' ), [ 'jquery', ], '1.0.0', true );
	wp_localize_script( 'guf-ajax-script', 'params', $params );
}


add_action( 'wp_enqueue_scripts', 'guf_POST_assets');