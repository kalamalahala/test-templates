<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://github.com/kalamalahala/
 * @since      1.0.0
 *
 * @package    Test_Templates
 * @subpackage Test_Templates/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Test_Templates
 * @subpackage Test_Templates/includes
 * @author     Tyler Karle <tyler.karle@icloud.com>
 */
class Test_Templates_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {

		// Remove all Options, Tables, and Settings
		delete_option( 'test_templates_settings' );
		global $wpdb;
		$wpdb->query( "DROP TABLE IF EXISTS `wp_test_templates_test_table`" );
		

	}

}
