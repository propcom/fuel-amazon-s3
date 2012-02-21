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

Autoloader::add_core_namespace('S3');

Autoloader::add_classes(array(
	'S3' => __DIR__.'/S3.php',
	'S3Exception' => __DIR__.'/S3.php',
	'S3\S3' => __DIR__.'/fuel-s3.php',
));