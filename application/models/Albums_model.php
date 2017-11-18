<?php
class Albums_model extends CI_Model {

		//var $album_title='';
        //var $arist_id='';
        //var $arist_name='';

        public function __construct()
        {
                $this->load->database();
        }

        /*public function get_albums($artist_id = FALSE)
		{
		        if ($artist_id === FALSE)
		        {
		                $query = $this->db->get('albums');
		                return $query->result_array();
		        }

		        $query = $this->db->get_where('album', array('artist_id' => $artist_id));
		        return $query->row_array();
		}

		*/

		public function get_albums()
		{
		         $query = $this->db->get('album'); // get data from the table 'album'
		         $result = $query->result_array();
		         return $result;
		}

}


?>