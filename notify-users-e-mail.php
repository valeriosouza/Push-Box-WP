<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://valeriosouza.com.br
 * @since             1.0.0
 * @package           Notify_Users_E_Mail
 *
 * @wordpress-plugin
 * Plugin Name:       Push Box WP
 * Plugin URI:        https://github.com/valeriosouza/Push-Box-WP
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Valerio Souza
 * Author URI:        http://valeriosouza.com.br
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       notify-users-e-mail
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-notify-users-e-mail-activator.php
 */
function activate_notify_users_e_mail() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-notify-users-e-mail-activator.php';
	Notify_Users_E_Mail_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-notify-users-e-mail-deactivator.php
 */
function deactivate_notify_users_e_mail() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-notify-users-e-mail-deactivator.php';
	Notify_Users_E_Mail_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_notify_users_e_mail' );
register_deactivation_hook( __FILE__, 'deactivate_notify_users_e_mail' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-notify-users-e-mail.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_notify_users_e_mail() {

	$plugin = new Notify_Users_E_Mail();
	$plugin->run();

}
run_notify_users_e_mail();
