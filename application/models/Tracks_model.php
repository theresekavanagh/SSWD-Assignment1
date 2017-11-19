<?php

/**
 * Tracks_model.php
 *
 * Get a list of tracks in the track table in the database for a given album id passed as a parameter in the url.
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

class Tracks_model extends CI_Model {

    /**
	 * constructor to load the database
	 */

    public function __construct()
    {
            $this->load->database();
    }

    /**
	 * Method to query the database and return list of matching tracks from the 'track' table based on the id passed in the url
	 */

	public function get_tracks($id = FALSE)
	{
	         
		if($id === FALSE) 
		{

			/**
			* Not sure if I should delete this bit
			*/


			/*
			* Retrieve the track name(s) from the 'track' table based on the track id passed in the url 
			*/
			$query = $this->db->get('track');
         	$result = $query->result_array();
         	return $result;

         }

         /***********************
         Remove this comment! Wonder if I can join the tables here??
         ***********************/

		/*
		* Query the database and retrieve the record where the album_id in the track table matches the id passed in the url. Return the data.
		*/

         $query = $this->db->get_where('track', array('album_id' => $id)); 
         //$result = $query->row_array();
         $result = $query->result_array();
         return $result;

	     }

	 /**
	 * Method to query the database and return the matching album name from the 'album' table based on the id passed in the url
	 */

    public function get_album_info($id = FALSE)
	{

		/* Not working 

		if($id === FALSE) 
		{
			$this->db->select('*');
			$this->db->from('album');
			$this->db->join('track', 'album.album_id = track.album_id');

			$query = $this->db->get(); // get data from the table 'track'
         	$result = $query->result_array();
         	return $result;

         }*/
         
         /*$query = $this->db->get_where('album', array('album_id' => $id)); // get data from the table 'album' that matches the id passed in 
         $result = $query->row_array();
         return $result;*/

		/*
		* Join the 'album' and 'track' tables on the 'album_id' field to retrieve the album name based on the track id passed in the url 
		*/

		$this->db->select('*');
		$this->db->from('album');
		$this->db->join('track', 'album.album_id = track.album_id');
		$this->db->where('album.album_id', $id);

		/*
		* Query the database and retrieve the record where the album_id in the 'album' table matches the track id passed in the url. Return the data.  
		*/

		$query = $this->db->get(); 
     	$result = $query->row_array();
     	return $result;

     } 

}

?>