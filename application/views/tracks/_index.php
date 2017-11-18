<?php

/******************
Display albums info based on id parameter passed in the url
*******************/

echo "<h1>Track List</h1>";

foreach ($tracks as $track) {

	echo "<strong>".$track['track_name'] . "</strong><br>";
	//echo $track['album_name'] . "<br><br>";
}

/* Source: https://stackoverflow.com/questions/41626263/codeigniter-php-convert-object-to-json */
//$json = json_encode($album,JSON_FORCE_OBJECT);
//echo $json;

?>

