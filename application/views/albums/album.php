<?php

/******************
Display albums info based on id parameter passed in the url
*******************/

	$albumInfo = $album_id . "," . $artist_name . "," . $album_name;

	echo $albumInfo;

	//$json = json_encode($albumInfo);
	//echo $json;

/* Source: https://stackoverflow.com/questions/41626263/codeigniter-php-convert-object-to-json */
//$json = json_encode($album,JSON_FORCE_OBJECT);
//echo $json;

?>
