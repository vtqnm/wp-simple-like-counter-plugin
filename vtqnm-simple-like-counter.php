<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/vtqnm
 * @since             1.0.0
 * @package           Vtqnm_Simple_Like_Counter
 *
 * @wordpress-plugin
 * Plugin Name:       Simple like counter
 * Plugin URI:        https://github.com/vtqnm
 * Description:       A lightweight WordPress plugin that adds like buttons to posts and tracks counts to boost user engagement.
 * Version:           1.0.0
 * Author:            Vitalii Terentev
 * Author URI:        https://github.com/vtqnm/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       vtqnm-simple-like-counter
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
define( 'VTQNM_SIMPLE_LIKE_COUNTER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-vtqnm-simple-like-counter-activator.php
 */
function activate_vtqnm_simple_like_counter() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-vtqnm-simple-like-counter-activator.php';
	Vtqnm_Simple_Like_Counter_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-vtqnm-simple-like-counter-deactivator.php
 */
function deactivate_vtqnm_simple_like_counter() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-vtqnm-simple-like-counter-deactivator.php';
	Vtqnm_Simple_Like_Counter_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_vtqnm_simple_like_counter' );
register_deactivation_hook( __FILE__, 'deactivate_vtqnm_simple_like_counter' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-vtqnm-simple-like-counter.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_vtqnm_simple_like_counter() {

	$plugin = new Vtqnm_Simple_Like_Counter();
	$plugin->run();

}
run_vtqnm_simple_like_counter();
