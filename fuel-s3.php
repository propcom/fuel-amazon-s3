<?php

/**
 * A FuelPHP package wrapper to Donovan Schonknecht's Amazon S3 class
 *
 * @package		S3
 * @version		1.0
 * @author		Propeller Communications
 * @link		http://github.com/propcom/fuel-amazon-s3
 *
 */

namespace S3;

class S3 extends \S3 {
	public static function _init() {
		\Config::load('s3', true);
	}

	public static function forge() {
		$access_key = \Config::get('s3.access_key_id', null);
		$secret_key = \Config::get('s3.secret_access_key', null);
		$ssl = \Config::get('s3.use_ssl', null) ?: false;

		return new static($access_key, $secret_key, $ssl);
	}
}