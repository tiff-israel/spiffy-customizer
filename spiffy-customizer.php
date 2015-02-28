<?php
/**
 * Built from: The WordPress Plugin Boilerplate.
 *
 * REPLACE!!!
 * Spiffy Customizer
 * Spiffy_Customizer
 * spiffy-customizer
 * Spiffy_Customizer
 *
 * 
 *
 * @package   Spiffy Customizer
 * @author    Tiffany Israel <tiffany@smorecreative.com>
 * @license   GPL-2.0+
 * @link      http://wwww.smorecreative.com
 * @copyright 2014 Smore Creative
 *
 * @wordpress-plugin
 * Plugin Name: Spiffy Customizer
 * Plugin URI:  http://wwww.smorecreative.com
 * Description: A wordpress plugin that adds customizable functions
 * Version:     1.0.0
 * Author:      Tiffany Israel
 * Author URI:  http://www.tiffanyisrael.com
 * Text Domain: spiffy-customizer-locale
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /lang
 */

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}



// Register hooks that are fired when the plugin is activated, deactivated, and uninstalled, respectively.
// Spiffy Customizer: replace Spiffy_Customizer with the name of the plugin defined in `class-spiffy-customizer.php`
register_activation_hook( __FILE__, array( 'Spiffy_Customizer', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Spiffy_Customizer', 'deactivate' ) );

// Spiffy Customizer: replace Spiffy_Customizer with the name of the plugin defined in `class-spiffy-customizer.php`
// Spiffy_Customizer::get_instance();

include 'shortcodes.php';
include	'theme_customization.php';