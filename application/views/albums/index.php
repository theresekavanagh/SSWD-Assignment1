<?php

/******************
Display list of all albums in the database
*******************/

echo "<h1>Album List</h1>";

foreach ($album as $album_item) {

	echo "<strong>".$album_item['artist_name'] . "</strong><br>";
	echo $album_item['album_name'] . "<br><br>";
}

/* Source: https://stackoverflow.com/questions/41626263/codeigniter-php-convert-object-to-json */
//$json = json_encode($album,JSON_FORCE_OBJECT);
//echo $json;

?>

