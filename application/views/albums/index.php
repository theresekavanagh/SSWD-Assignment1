<?php

/**
 * index.php
 *
 * Default view to display list of all albums in the database and return as json data
 *
 * PHP version 5
 *
 *
 * @category   WebElevate 5.1
 * @package    SSWD Assessment 1 - PHP Web App (19th Nov 2017)
 * @author     Therese Kavanagh <therese.kavanagh@webelevate.ie>
 * @copyright  2017 Therese Kavanagh
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    Version 1.0
 */

	/* testing the output - leaving this in for my own future reference
	echo "<h1>Album List</h1>";

	foreach ($album as $album_item) {

		echo "<strong>".$album_item['artist_name'] . "</strong><br>";
		echo $album_item['album_name'] . "<br><br>";
	}*/

	/**
	 * json encode the returned data
	 */

	// Source: https://stackoverflow.com/questions/41626263/codeigniter-php-convert-object-to-json
	$json = json_encode($album,JSON_FORCE_OBJECT);
	echo $json;

?>

