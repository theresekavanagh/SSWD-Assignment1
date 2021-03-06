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
WEBSITES/TUTORIALS USED FOR REFERENCE:
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
(NOTE: Codeigniter requires specific naming conventions for method naming which contradicts the PEAR standard of using camelCase)

---------------------------------------------------
SEO Friendly URLs (removing index.php from the url using .htaccess)
---------------------------------------------------
https://stackoverflow.com/questions/19183311/codeigniter-removing-index-php-from-url


***************************************************
**INSTRUCTIONS
***************************************************

---------------------------------------------------
DATABASE & SQL SETUP FILE
---------------------------------------------------
music.sql (in root of folder)
SQL Setup File: sql-setup.txt (in root of folder)

---------------------------------------------------
CORE CI FILES UPDATED
---------------------------------------------------
config/database.php - updated db settings
config/routes.php - added routes to clean up the urls

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

Base url: http://localhost/webelevate/sswd/WE5.1_SSWD_A1_Therese_Kavanagh/ (update to reflect your own htdocs file structure)

http://localhost/webelevate/sswd/WE5.1_SSWD_A1_Therese_Kavanagh/albums/

http://localhost/webelevate/sswd/WE5.1_SSWD_A1_Therese_Kavanagh/albums/1, http://localhost/webelevate/sswd/WE5.1_SSWD_A1_Therese_Kavanagh/albums/2 etc

http://localhost/webelevate/sswd/WE5.1_SSWD_A1_Therese_Kavanagh/tracks/1, http://localhost/webelevate/sswd/WE5.1_SSWD_A1_Therese_Kavanagh/tracks/2 etc

---------------------------------------------------
JSON output validated on https://jsonlint.com/
---------------------------------------------------

