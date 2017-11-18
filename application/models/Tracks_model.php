<?php

class Tracks_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

		public function get_tracks($id = FALSE)
		{
		         
				/*if($id === FALSE) 
				{

					$query = $this->db->get('track'); // get data from the table 'track'
		         	$result = $query->result_array();
		         	return $result;

		         }*/

		         /***********************
		         Wonder if I can join the tables here??
		         ***********************/

		         $query = $this->db->get_where('track', array('album_id' => $id)); // get data from the table 'album' that matches the id passed in 
		         //$result = $query->row_array();
		         $result = $query->result_array();
		         return $result;

		     }

		    public function get_albuminfo($id = FALSE)
			{
		         
		         $query = $this->db->get_where('album', array('album_id' => $id)); // get data from the table 'album' that matches the id passed in 
		         $result = $query->row_array();
		         return $result;

		     } 

}

?>