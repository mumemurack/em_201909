<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.2
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

/**
 * NOTICE:
 *
 * If you need to make modifications to the default configuration, copy
 * this file to your app/config folder, and make them in there.
 *
 * This will allow you to upgrade fuel without losing your custom config.
 */

return array(

	/**
	 * DB connection, leave null to use default
	 */
	'db_connection' => null,

	/**
	 * DB write connection, leave null to use same value as db_connection
	 */
	'db_write_connection' => null,

	/**
	 * DB table name for the user table
	 */
	'table_name' => 'em_user',

	'guest_login' => false,
	'multiple_logins' => false,
	'login_hash_salt' => 'gcjdXsfRX7F9wnA',
	'username_post_key' => 'username',
	'password_post_key' => 'password',
);
