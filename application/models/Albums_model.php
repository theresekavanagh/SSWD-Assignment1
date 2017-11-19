<?php

/**
 * Albums_model.php
 *
 * Get a list of albums in the 'album' table in the database for a given album id passed as a parameter in the url.
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

class Albums_model extends CI_Model {

	/**
	 * constructor to load the database
	 */

    public function __construct()
    {
        $this->load->database();
    }

    /**
	 * Method to query the database and return the matching album from the 'album' table based on the id passed in the url
	 */

	public function get_albums($id = FALSE)
	{
	    /*
		* If there is no id passed in the url return a list of all albums in the database 
		*/ 

		if($id === FALSE) 
		{
			$query = $this->db->get('album');
	     	$result = $query->result_array();
	     	return $result;

	     }

	    /*
		* Query the database and retrieve the record where the album_id in the album table matches the id passed in the url. Return the data.
		*/

	     $query = $this->db->get_where('album', array('album_id' => $id)); // get data from the table 'album' that matches the id passed in 
	     $result = $query->row_array();
	     return $result;

	 } 

}

?>