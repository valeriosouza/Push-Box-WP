<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://valeriosouza.com.br
 * @since      1.0.0
 *
 * @package    Notify_Users_E_Mail
 * @subpackage Notify_Users_E_Mail/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Notify_Users_E_Mail
 * @subpackage Notify_Users_E_Mail/includes
 * @author     Valerio Souza <valeriosza@gmail.com>
 */
class Notify_Users_E_Mail_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'notify-users-e-mail',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
