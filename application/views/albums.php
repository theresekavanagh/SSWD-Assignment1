

<?php
//echo "Nothing to see here either!";


/*foreach ($album as $album_item) {

	echo $album_item['artist_name'] . "<br>";
	echo $album_item['album_name'] . "<br><br>";
}*/


//string json_encode ( $album );

/* Source: https://stackoverflow.com/questions/41626263/codeigniter-php-convert-object-to-json */
$json = json_encode($album,JSON_FORCE_OBJECT);
echo $json;

?>