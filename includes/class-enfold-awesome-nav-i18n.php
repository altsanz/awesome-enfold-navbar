<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://altsanz.com
 * @since      1.0.0
 *
 * @package    Enfold_Awesome_Nav
 * @subpackage Enfold_Awesome_Nav/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Enfold_Awesome_Nav
 * @subpackage Enfold_Awesome_Nav/includes
 * @author     Alejandro Sanz <alejandro@altsanz.com>
 */
class Enfold_Awesome_Nav_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'enfold-awesome-nav',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
