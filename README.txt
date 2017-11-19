***************************************************
**NOTES & REFERENCES
***************************************************

All work is my own unless explicity referenced within comments.

---------------------------------------------------
DATABASE MODIFIED FROM THIS SOURCE: 
---------------------------------------------------
O'Reilly's Learning MySQL Book (http://tahaghoghi.com/LearningMySQL/downloads.php)
https://resources.oreilly.com/examples/9780596008642/

---------------------------------------------------
WEBSITES USED FOR REFERENCE:
--------------------------------------------------- 
https://codeigniter.com/user_guide/tutorial/news_section.html
https://www.hostinger.com/tutorials/codeigniter-tutorial#Step-4-8211-Creating-Simple-App-with-CodeIgniter
https://www.codeigniter.com/userguide3/general/urls.html
http://php.net/manual/en/function.json-encode.php

---------------------------------------------------
PEAR STANDARDS AND CODEIGNITER NAMING CONVENTIONS
---------------------------------------------------
https://www.codeigniter.com/user_guide/general/styleguide.html#file-naming
https://pear.php.net/manual/en/standards.php

---------------------------------------------------
SEO Friendly URLs (removing index.php from the url using .htaccess)
---------------------------------------------------
https://stackoverflow.com/questions/19183311/codeigniter-removing-index-php-from-url

	SQL Queries

	SELECT album.album_name, artist.artist_name FROM album INNER JOIN artist ON album.artist_id=artist.artist_id

	SELECT album.album_name, artist.artist_name, track.track_name 
	FROM album 
	INNER JOIN artist ON album.artist_id=artist.artist_id
	INNER JOIN track ON album.artist_id=track.artist_id


***************************************************
**INSTRUCTIONS
***************************************************

---------------------------------------------------
DATABASE
---------------------------------------------------
sswd_assignment1.sql (in root of folder)

---------------------------------------------------
CORE CI FILES UPDATED
---------------------------------------------------
config/database.php - updated db settings
config/routes.php - added routes to clean up the urls

http://localhost/webelevate/sswd/Assignment1/albums/view/1 --> http://localhost/webelevate/sswd/Assignment1/albums/1

http://localhost/webelevate/sswd/Assignment1/tracks/view/1 --> http://localhost/webelevate/sswd/Assignment1/tracks/1

---------------------------------------------------
FILES CREATED
---------------------------------------------------

.htaccess

application/models/Albums_model.php
application/models/Tracks_model.php

application/controllers/Albums.php
application/controllers/Tracks.php

application/views/albums/index.php
application/views/albums/album.php
application/views/tracks/index.php
application/views/tracks/track_list.php

---------------------------------------------------
ENPOINTS
---------------------------------------------------

http://localhost/webelevate/sswd/Assignment1/albums/

http://localhost/webelevate/sswd/Assignment1/albums/1, http://localhost/webelevate/sswd/Assignment1/albums/2 etc

http://localhost/webelevate/sswd/Assignment1/tracks/1, http://localhost/webelevate/sswd/Assignment1/tracks/2 etc

