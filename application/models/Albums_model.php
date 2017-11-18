<?php

class Albums_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

		public function get_albums($id = FALSE)
		{
		         
				if($id === FALSE) 
				{

					$query = $this->db->get('album'); // get data from the table 'album'
		         	$result = $query->result_array();
		         	return $result;

		         }

		         $query = $this->db->get_where('album', array('album_id' => $id)); // get data from the table 'album' that matches the id passed in 
		         $result = $query->row_array();
		         return $result;

		     } 

}

?>