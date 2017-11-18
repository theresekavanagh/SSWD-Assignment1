<?php

/******************
Display list of tracks matching the album id in 'track' table the database plus the album title and artist name from the 'album' table
*******************/

	/*$trackInfo = $album_id . "," . $track_id . "," . $track_name;

	echo $trackInfo;*/

	//$json = json_encode($albumInfo);
	//echo $json;

/* Source: https://stackoverflow.com/questions/41626263/codeigniter-php-convert-object-to-json */
//$json = json_encode($album,JSON_FORCE_OBJECT);
//echo $json;

echo "<h1>" . $album_title['artist_name'] . " - " . $album_title['album_name'] . " (Album Track List)</h1>";


foreach ($track_list as $track) {

	echo $track['track_id'] . ": " .$track['track_name'] . "<br>";
	//echo $track['album_name'] . "<br><br>";

}

/* Source: https://stackoverflow.com/questions/41626263/codeigniter-php-convert-object-to-json */
//$json = json_encode($album,JSON_FORCE_OBJECT);
//echo $json;

?>
