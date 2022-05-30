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
