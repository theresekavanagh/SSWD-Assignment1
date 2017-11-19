<?php

/**
 * album.php
 *
 * View to display album info based on album_id parameter passed in the url as $id and return as json data
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

	// build the string
	$albumInfo = $album_id . "," . $artist_name . "," . $album_name;

	/*echo $albumInfo; // testing the output - leaving this in for my own future reference */

	/**
	 * json encode the returned data
	 */

	$json = json_encode($albumInfo);
	echo $json;

?>
