<?php

class Albums extends CI_Controller {

        public function __construct()
        {
                parent::__construct();

                $this->load->model('albums_model');
                
                //$this->load->helper('url_helper');
        }


        public function index() // create the main method to get albums from the db using the model's get_albums() method and pass the results to the view
        {

                $data['album'] = $this->albums_model->get_albums();

                $this->load->view('albums/index', $data); // passing data into the view

        }

        public function view($id = NULL) {
                //$this->load->model('albums_model');

                $data['album_item'] = $this->albums_model->get_albums($id);

                if (empty($data['album_item']))
                {
                        show_404();
                }
                $data = $this->albums_model->get_albums($id);

                $this->load->view('albums/album', $data);
        }

}

?>