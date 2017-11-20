<?php

/**
 * Tracks_model.php
 *
 * Get a list of tracks in the 'track' table in the database for a given id (album_id) passed as a parameter in the url.
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

/**
 * Tracks_model Class
 */

class Tracks_model extends CI_Model {

    /**
	 * constructor to load the database
	 */

    public function __construct()
    {
            $this->load->database();
    }

    /**
	 * Method to query the database and return list of matching tracks from the 'track' table based on the id (album_id) passed in the url
	 */

	public function get_tracks($id = FALSE)
	{

        /*
		* Query the database and retrieve the record where the 'album_id' in the 'track' table matches the id passed in the url. Return the data.
		*/

         $query = $this->db->get_where('track', array('album_id' => $id)); 
         $result = $query->result_array();
         return $result;

	     }

}

?>