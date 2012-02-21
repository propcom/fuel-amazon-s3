Propeller Communications FuelPHP Amazon S3 Package
==================================================

Intro
-----

This package is a fork of tpyo/amazon-s3-php-class. We've stripped out the example stuff leaving the S3.php fully intact to allow changes to be pushed back to the origin.

A FuelPHP bootstrap.php and a \S3\S3 class has been added to take advantage of Fuel's features


Usage
-----

You will need a config, something along the lines of this:

	<?php
	return array(
		'access_key_id' => 'AKIEJVLOGC34LMATBGRT',
		'secret_access_key' => '4dgKKZkilRKLCd8IrtB/jqSIzhgaBdsWFii2y+69',
		'use_ssl' => false
	);

You can then create an instance of \S3\S3 using forge():

	$s3 = \S3\S3::forge();

You can call any of the methods from the tpyo/amazon-s3-php-class S3.php on the instance:

	var_dump($s3->listBuckets(true));


Modifying
---------

If you're going to modify the code, don't touch S3.php unless you intend for it to be pushed back to tpyo/amazon-s3-php-class. The \S3\S3 subclass should be used for Fuel specific things
as well as stuff which doesn't justify being pushed up.