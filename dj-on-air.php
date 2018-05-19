<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://spencerbrown.website
 * @since             1.0.0
 * @package           DJ_On_Air
 *
 * @wordpress-plugin
 * Plugin Name:       DJ On Air
 * Plugin URI:        http://spencerbrown.website/DJ-On-Air
 * Description:       A widget that shows which DJ is currently on air and who is up next!
 * Version:           1.0.0
 * Author:            Premium Rush
 * Author URI:        http://spencerbrown.website/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       dj-on-air
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'DJ_ON_AIR_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-dj-on-air-activator.php
 */
function activate_DJ_On_Air() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dj-on-air-activator.php';
	DJ_On_Air_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-dj-on-air-deactivator.php
 */
function deactivate_DJ_On_Air() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dj-on-air-deactivator.php';
	DJ_On_Air_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_DJ_On_Air' );
register_deactivation_hook( __FILE__, 'deactivate_DJ_On_Air' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-dj-on-air.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_DJ_On_Air() {

	$plugin = new DJ_On_Air();
	$plugin->run();

}
run_DJ_On_Air();
