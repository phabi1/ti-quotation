<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/phabi1
 * @since             1.0.0
 * @package           Ti_Quotations
 *
 * @wordpress-plugin
 * Plugin Name:       TI Quotations
 * Plugin URI:        https://github.com/phabi1/ti-quotations
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Phabi1
 * Author URI:        https://github.com/phabi1
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ti-quotations
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ti-quotations-activator.php
 */
function activate_ti_quotations() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ti-quotations-activator.php';
	Ti_Quotations_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ti-quotations-deactivator.php
 */
function deactivate_ti_quotations() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ti-quotations-deactivator.php';
	Ti_Quotations_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ti_quotations' );
register_deactivation_hook( __FILE__, 'deactivate_ti_quotations' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ti-quotations.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ti_quotations() {

	$plugin = new Ti_Quotations();
	$plugin->run();

}
run_ti_quotations();
