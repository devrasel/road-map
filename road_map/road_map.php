<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              namloc254@gmail.com
 * @since             1.0.0
 * @package           Road_map
 *
 * @wordpress-plugin
 * Plugin Name:       Road map
 * Plugin URI:        road_map
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Nam Loc Vo
 * Author URI:        namloc254@gmail.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       road_map
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'ROAD_MAP_VERSION', '1.0.0' );

define( 'ROAD_MAP_PREFIX', 'road_map' );

define( 'ROAD_MAP_ROOT_PATH', plugin_dir_path(__FILE__) . '/' );
define( 'ROAD_MAP_ROOT_URI', plugin_dir_url(__FILE__) . '/' );

define( 'ROAD_MAP_PUBLIC_PATH', plugin_dir_path(__FILE__) . 'public/' );
define( 'ROAD_MAP_PUBLIC_URI', plugin_dir_url(__FILE__) . 'public/' );

define( 'ROAD_MAP_ADMIN_PATH', plugin_dir_path(__FILE__) . 'admin/' );
define( 'ROAD_MAP_ADMIN_URI', plugin_dir_url(__FILE__) . 'admin/' );

require_once( ROAD_MAP_ROOT_PATH . 'includes/template.php' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-road_map-activator.php
 */
function activate_road_map() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-road_map-activator.php';
	Road_map_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-road_map-deactivator.php
 */
function deactivate_road_map() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-road_map-deactivator.php';
	Road_map_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_road_map' );
register_deactivation_hook( __FILE__, 'deactivate_road_map' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-road_map.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_road_map() {

	$plugin = new Road_map();
	$plugin->run();

}
run_road_map();
