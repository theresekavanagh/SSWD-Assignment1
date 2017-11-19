<?php

/**
 * track_list.php
 *
 * View to display list of tracks for an album in the database based on album_id parameter passed in the url as $id and return as json data
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


/* Testing the output - leaving this in for my own future reference

echo "<h1>" . $album_title['artist_name'] . " - " . $album_title['album_name'] . " (Album Track List)</h1>";


foreach ($track_list as $track) {

	echo $track['track_id'] . ": " .$track['track_name'] . "<br>";
	//echo $track['album_name'] . "<br><br>";

}*/

	/**
	 * json encode the returned data
	 */

/* Source: https://stackoverflow.com/questions/41626263/codeigniter-php-convert-object-to-json */
$json = json_encode($track_list,JSON_FORCE_OBJECT);
echo $json;

?>
