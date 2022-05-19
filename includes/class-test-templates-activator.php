<?php

/**
 * Fired during plugin activation
 *
 * @link       https://github.com/kalamalahala/
 * @since      1.0.0
 *
 * @package    Test_Templates
 * @subpackage Test_Templates/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Test_Templates
 * @subpackage Test_Templates/includes
 * @author     Tyler Karle <tyler.karle@icloud.com>
 */
class Test_Templates_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		global $wpdb;
		// Construct SQL for Tables
		$sql = "CREATE TABLE IF NOT EXISTS `wp_test_templates_test_table` (
			`id` int(11) NOT NULL AUTO_INCREMENT,
			`name` varchar(255) NOT NULL,
			`description` text NOT NULL,
			`created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
			`updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
			PRIMARY KEY (`id`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		// Use DBDelta to create tables
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql );

	}

}
