<?php
/**
 * Fired when the plugin is uninstalled.
 *
 * @package   Spiffy Customizer
 * @author    Tiffany Israel <tiffany.israel@ouhsd.k12.ca.us>
 * @license   GPL-2.0+
 * @link      http://wwww.ouhsd.k12.ca.us
 * @copyright 2013 Oxnard Union High School District
 */

// If uninstall, not called from WordPress, then exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

// Spiffy Customizer: Define uninstall functionality here