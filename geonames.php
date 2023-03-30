<?php
/**
 * Plugin Name: geonames
 * Version: 1.0.0
 * Plugin URI: http://www.hughlashbrooke.com/
 * Description: This is your starter template for your next WordPress plugin.
 * Author: Hugh Lashbrooke
 * Author URI: http://www.hughlashbrooke.com/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: geonames
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Hugh Lashbrooke
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load plugin class files.
require_once 'includes/class-geonames.php';
require_once 'includes/class-geonames-settings.php';

// Load plugin libraries.
require_once 'includes/lib/class-geonames-admin-api.php';
require_once 'includes/lib/class-geonames-post-type.php';
require_once 'includes/lib/class-geonames-taxonomy.php';

/**
 * Returns the main instance of geonames to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object geonames
 */
function geonames() {
	$instance = geonames::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = geonames_Settings::instance( $instance );
	}

	return $instance;
}

geonames();
