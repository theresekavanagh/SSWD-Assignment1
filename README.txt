Database Source: O'Reilly's Learning MySQL Book (http://tahaghoghi.com/LearningMySQL/downloads.php)

Reference Material: https://codeigniter.com/user_guide/tutorial/news_section.html

SQL Queries

SELECT album.album_name, artist.artist_name FROM album INNER JOIN artist ON album.artist_id=artist.artist_id

SELECT album.album_name, artist.artist_name, track.track_name 
FROM album 
INNER JOIN artist ON album.artist_id=artist.artist_id
INNER JOIN track ON album.artist_id=track.artist_id